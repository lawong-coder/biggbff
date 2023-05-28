<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Store extends MY_Controller {
	function __construct($params = array()) {
		parent::__construct();

		$this->load->model('Product_model');
		$site_setting = $this->Product_model->getSettings('site');
		if ($site_setting['store_maintenance_mode']) {
			echo $this->load->view('common/maintenance', [], true);
			die;
		}

		$this->load->library("storeapp");
		$this->load->helper('cookie');
		$store_setting = $this->Product_model->getSettings('store');
		
		if(!$store_setting['status']){ 
			header("Location: ".base_url());
			die;
		}

		___construct(1);

		$user = $this->session->userdata('client');
		if (isset($user['id'])) {
			$this->Product_model->ping($user['id']);
		}
	}

	private function getUser($user_id){
		return $this->db->query("SELECT * FROM users WHERE id=". (int)$user_id)->row_array();
	}

	public function change_language($language_id){
		$language = $this->db->query("SELECT * FROM language WHERE id=".$language_id)->row_array();
		if($language){
			$_SESSION['userLang'] = $language_id;
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		else { 
			header("Location: ".base_url('store/login'));
			die;
		}
	}

	public function change_currency($currency_code){
		$language = $this->db->query("SELECT * FROM currency WHERE code = '{$currency_code}' ")->row_array();
		if($language){
			$_SESSION['userCurrency'] = $currency_code;
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		else { 
			header("Location: ".base_url('store/login'));
			die;
		}
	}
	
	public function by_id($product_id){
		$this->load->model('Product_model');
		$product = $this->Product_model->getProductById($product_id);
		$link = base_url("store/". base64_encode( (int)$product->refer_id )  ."/product/". $product->product_slug);
		redirect($link);
	}

	public function index($user_id = 0){
		$this->load->library('user_agent');
		$this->load->model('Product_model');
		$user_id = base64_decode($user_id);
		if($user_id > 0){
			$this->cart->setcookieAffiliate($user_id);
			redirect(base_url('store'));
		}else{
			$user_id = $this->cart->getcookieAffiliate('affiliate_id');
		}
		$data['user_id'] = (int)$user_id;
		$data['settings'] = $this->Product_model->getSettings('store');
		$data['category_tags'] = $this->db->query("SELECT * FROM `categories` WHERE `tag` = 1")->result_array();

		$this->storeapp->view("home", $data);
	}


	public function page($slug){
		$data['storesettings'] = $data['settings'] = $this->Product_model->getSettings('store');
		$custom_pages = json_decode($data['storesettings']['custom_page']);
		foreach($custom_pages as &$page){
			if($page->slug == $slug) {
				$this->load->model('Setting_model');
				$page->content = $this->Setting_model->get_meta_content(['meta_id'=>$page->meta_id])->meta_content;
				$data['data'] = $page; 
			}
		}
		if(!isset($data['data'])) {
			redirect(base_url('store'));
			exit;
		}
		$this->storeapp->view("custom_page", $data);
	}

	public function load_Product() {
		try {
			$postData = $_POST;

			$sql = "
				SELECT p.*, c.sortname AS country_code, s.name AS state_name, c.name AS country_name, pc.category_id AS p_catecategory_id
				FROM product p
				LEFT JOIN product_affiliate pa ON pa.product_id = p.product_id
				LEFT JOIN users as seller ON pa.user_id = seller.id
				LEFT JOIN states s ON s.id = p.state_id
				LEFT JOIN countries c ON c.id = s.country_id
				LEFT JOIN product_categories pc ON pc.product_id = p.product_id
				WHERE product_status = 1 AND on_store = 1 AND (seller.is_vendor = 1 OR seller.type IS NULL)
			";

			if(isset($postData['search']) && !empty($postData['search'])){
				$searchValue = $postData['search'];
				$sql .= " AND p.product_name LIKE '%" . $searchValue . "%' ";
			}

			$user_id = base64_decode($user_id);
			if($user_id > 0){
				$this->cart->setcookieAffiliate($user_id);
				redirect(base_url('store'));
			} else {
				$user_id = $this->cart->getcookieAffiliate('affiliate_id');
			}

			$data['user_id'] = (int)$user_id;

			$vendor = $this->Product_model->getSettings('vendor');
			if((int)$vendor['storestatus'] == 0){
				$sql .= " AND( seller.id=0 OR seller.id IS NULL )";
			}

			$data['add_tocart_url'] = $this->cart->getStoreUrl('add_to_cart');
			$json = [];
			if(isset($postData['request_page'])) {
				$page_number = isset($postData['next_page']) ? $postData['next_page'] : 1;  
				$results_per_page = isset($postData['limit']) ? $postData['limit'] : 12;  
				$page_first_result = ($page_number-1) * $results_per_page;  

				switch ($postData['request_page']) {
					case 'home':
						$json['category'] = [];
						$all_categories = $this->db->query("SELECT * FROM categories")->result_array();
						$json['category']['all'] = "";
						if(!isset($postData['request_page_section']) || $postData['request_page_section'] == 'trending') {
							$trending_sql = $sql;
							if(!empty($all_categories)) {
								$trend_cat = false;
								$first = true;
								for ($i=0; $i < sizeof($all_categories); $i++) { 
									if($all_categories[$i]['tag'] == 1) {
										$trend_cat = true;
										$json['category']['all'] .= '<a href="'.base_url('store/category/'.$all_categories[$i]['slug']).'" class="category-home"><img alt="image" src="'.base_url('assets/images/product/upload/thumb/').$all_categories[$i]['image'].'"><h3>'.$all_categories[$i]['name'].'</h3></a>';
										if($first == false) {
											$trending_sql .= " OR ";
										} else {
											$trending_sql .= " AND (";
										}
										$trending_sql .= " pc.category_id = ". $all_categories[$i]['id'];
										$first = false;
									}
								}
								if($trend_cat == true) {
									$trending_sql .= ") ";
								}
							}
							$json['trendings'] = [];
							$number_of_result = $json['trendings']['total_count'] = $this->db->query($trending_sql)->num_rows();
							$json['trendings']['number_of_page'] = ceil($number_of_result / $results_per_page);  
							$json['trendings']['is_last_page'] = ($page_number < $json['trendings']['number_of_page']) ? false : true;
							$trending_sql .= " GROUP BY p.product_id ORDER BY p.view DESC LIMIT ".$results_per_page." OFFSET ".$page_first_result;
							$json['trendings']['next_page'] = (!$json['trendings']['is_last_page']) ? ($page_number + 1) : 1;						
							$products = $this->db->query($trending_sql)->result_array();
							$json['trendings']['products'] = $this->generateMustacheProductListData($products, $data['user_id']);
							$json['trendings']['show_dummy'] = $this->db->query('SELECT product_id FROM product limit 1')->row();
						}
						if(!isset($postData['request_page_section']) || $postData['request_page_section'] == 'new') {
							$new_sql = $sql;
							$json['category']['new'] = "";
							if(!empty($all_categories)) {
								$new_cat = false;
								$first = true;
								for ($i=0; $i < sizeof($all_categories); $i++) { 
									if($all_categories[$i]['tag'] == 1) {
										$new_cat = true;
										if($first == false) {
											$new_sql .= " AND ";
										} else {
											$new_sql .= " AND (";
										}
										$new_sql .= " pc.category_id != ". $all_categories[$i]['id'];
										$first = false;
									} else {
										$json['category']['all'] .= '<a href="'.base_url('store/category/'. $all_categories[$i]['slug']).'" class="category-home"><img alt="image" src="'.base_url('assets/images/product/upload/thumb/').$all_categories[$i]['image'].'"><h3>'.$all_categories[$i]['name'].'</h3></a>';
										$json['category']['new'] .= '<li><a href="'.base_url('store/category/'. $all_categories[$i]['slug']).'">'.$all_categories[$i]['name'].'</a></li>';
									}
								}
								if($new_cat == true) {
									$new_sql .= ") ";
								}
							}
							$json['new'] = [];
							$number_of_result = $json['new']['total_count'] = $this->db->query($new_sql)->num_rows();
							$json['new']['number_of_page'] = ceil($number_of_result / $results_per_page);  
							$json['new']['is_last_page'] = ($page_number < $json['new']['number_of_page']) ? false : true;
							$new_sql .= " GROUP BY p.product_id ORDER BY p.product_created_date DESC LIMIT ".$results_per_page." OFFSET ".$page_first_result;
							$json['new']['next_page'] = (!$json['new']['is_last_page']) ? ($page_number + 1) : 1;
							$products = $this->db->query($trending_sql)->result_array();
							$products = $this->db->query($new_sql)->result_array();
							$json['new']['products'] = $this->generateMustacheProductListData($products, $data['user_id']);
							$json['new']['show_dummy'] = $this->db->query('SELECT product_id FROM product limit 1')->row();
						}
					break;
					case 'product-details':
						$relatde_sql = $sql;
						$relatde_sql .= " AND pc.category_id = ". $postData['category_id']." AND p.product_id != ". $postData['product_id'];
						$json['related'] = [];
						$number_of_result = $json['related']['total_count'] = $this->db->query($relatde_sql)->num_rows();
						$json['related']['number_of_page'] = ceil($number_of_result / $results_per_page);  
						$json['related']['is_last_page'] = ($page_number < $json['related']['number_of_page']) ? false : true;
						$relatde_sql .= " GROUP BY p.product_id ORDER BY p.view DESC LIMIT ".$results_per_page." OFFSET ".$page_first_result;
						$json['related']['next_page'] = (!$json['related']['is_last_page']) ? ($page_number + 1) : 1;
						$products = $this->db->query($relatde_sql)->result_array();
						$json['related']['products'] = $this->generateMustacheProductListData($products, $data['user_id']);
						$json['related']['show_dummy'] = $this->db->query('SELECT product_id FROM product limit 1')->row();
					break;
					case 'category':
						$category_sql = $sql;
						if($postData['category_slug']){
							$category = $this->db->query("SELECT * FROM categories WHERE slug = ". $this->db->escape($postData['category_slug']))->row_array();
							if(is_array($category) && isset($category['id'])){
								$category_sql .= " AND pc.category_id = ". $category['id'];
							}
						}
						$json['category'] = [];


						if(isset($postData['colors']) && !empty($postData['colors'])){
							$category_sql .= " AND (";
							for ($i=0; $i < sizeOf($postData['colors']); $i++) { 
								if($i != 0) {
									$category_sql .= " OR ";
								}
								$category_sql .= " p.product_variations LIKE '%" . $postData['colors'][$i] . "%' ";
							}
							$category_sql .= " ) ";
						}

						if(isset($postData['tags']) && !empty($postData['tags'])){
							$category_sql .= " AND (";
							for ($i=0; $i < sizeOf($postData['tags']); $i++) { 
								if($i != 0) {
									$category_sql .= " OR ";
								}
								$category_sql .= " p.product_tags LIKE '%" . $postData['tags'][$i] . "%' ";
							}
							$category_sql .= " ) ";
						}
						
						if(isset($postData['product_avg_rating'])) {
							$category_sql .= " AND p.product_avg_rating = ".$postData['product_avg_rating'];
						}

						if($postData['max_price'] < 10000) {
							$category_sql .= " AND p.product_price <= ".$postData['max_price'];
						}
						
						$category_sql .= " AND p.product_price >= ".$postData['min_price'];

						$number_of_result = $json['category']['total_count'] = $this->db->query($category_sql)->num_rows();
						$json['category']['number_of_page'] = ceil($number_of_result / $results_per_page);  
						$json['category']['is_last_page'] = ($page_number < $json['category']['number_of_page']) ? false : true;

						$order_by = "p.view";

						if(isset($postData['order_by'])) {
							switch ($postData['order_by']) {
								case 'low-to-high':
									$order_by = "p.product_price ASC";
								break;
								case 'high-to-low':
									$order_by = "p.product_price DESC";
								break;
								case 'latest':
									$order_by = "p.product_created_date DESC";
								break;
								default:
									$order_by = "p.view DESC";
								break;
							}
						}

						$category_sql .= " GROUP BY p.product_id ORDER BY ".$order_by." LIMIT ".$results_per_page." OFFSET ".$page_first_result;
						$json['category']['category_sql'] = $category_sql;
						// $json['category']['all_products'] = $products = $this->db->query($category_sql)->result_array();
						$json['category']['next_page'] = (!$json['category']['is_last_page']) ? ($page_number + 1) : 1;
						$products = $this->db->query($category_sql)->result_array();
						$json['category']['count'] = sizeof($products);
						$json['category']['products'] = $this->generateMustacheProductListData($products, $data['user_id']);
						$json['category']['show_dummy'] = $this->db->query('SELECT product_id FROM product limit 1')->row();
					break;
					default:
						echo json_decode(['status'=> false, 'details'=>'Unknown Requsted Page!']);
						exit;
					break;
				}				
			} else {
				$data['products'] = $this->db->query($sql)->result_array();
				$json['product'] = $this->storeapp->view("product_list", $data, true, true);
			}
			echo json_encode($json);
		} catch (\Throwable $th) {
			echo json_decode(['status'=> false, 'details'=>$th]);
		}
	}

	public function generateMustacheProductListData($products, $user_id){
		$newProducts = [];
		foreach ($products as &$product) {
			$product['product_details_href'] = base_url("store/". base64_encode($user_id) . "/product/". $product['product_slug']);
			$product['product_image_src'] = (!empty($product['product_featured_image'])) ? resize('assets/images/product/upload/thumb/'. $product['product_featured_image'], 200,200) : base_url('assets/store/default/img/no-image.png');
			if($product['country_code']){
				$product['country_flag_src'] = getFlag($product['country_code']);
			}
			$product['product_avg_rating_stars'] = "";
			for ($i=0; $i < $product['product_avg_rating']; $i++) { 
				$product['product_avg_rating_stars'] .= '<img alt="image" src="'.base_url('assets/store/default/img/st.png').'">';
			}
			while($product['product_avg_rating'] < 5) {
				$product['product_avg_rating_stars'] .= '<img alt="image" src="'.base_url('assets/store/default/img/st1.png').'">';
				$product['product_avg_rating']++;            
			}
			$product['product_price'] = (!empty($product['product_price'])) ? c_format($product['product_price']) : c_format($product['0']);

			$desc_suffix = (strlen($product['product_short_description']) > 50) ? "..." : "";
			$product['product_short_description'] = mb_substr($product['product_short_description'], 0, 50).$desc_suffix;
			$newProducts[] = $product;
		}
		return $newProducts;
	}

	public function category($category_slug = ''){
		$this->load->library('user_agent');
		$this->load->model('Product_model');

		$category = array();
		if($category_slug){
			$category = $this->db->query("SELECT * FROM categories WHERE slug = ". $this->db->escape($category_slug))->row_array();
			if($category){
				$sql .= " AND pc.category_id = ". $category['id'];
			}
		}

		$data['colors'] = $this->Product_model->getAllColors();
		$data['tags'] = $this->Product_model->getAllTags();

		$data['user_id'] = $this->cart->getcookieAffiliate('affiliate_id');
		$data['category_tree'] = $this->Product_model->getCategoryTree();
		$data['category'] = $category;

		$this->storeapp->view("category",$data);		
	}

	public function toggle_wishlist() {
		$userdetails = $this->cart->is_logged(); 
		if(empty($userdetails)){ 
			header("Location: ".base_url('store/login'));
			die;
		}
		$post = $this->input->post(null,true);
		$login_usr = $this->cart->is_logged();
		$wlist = [];
		if(isset($login_usr['products_wishlist']) && !empty($login_usr['products_wishlist'])) {
			$wlist = json_decode($login_usr['products_wishlist']);
		}
		if (($key = array_search($post['product_id'], $wlist)) !== false) {
			unset($wlist[$key]);
		} else {
			if(!empty($post['product_id'])) {
				array_push($wlist, $post['product_id']);
			}
		}

		$wlist = array_values($wlist);

		$this->db->set('products_wishlist', json_encode($wlist));
		$this->db->where('id', $login_usr['id']);
		$this->db->update('users');
		$login_usr['products_wishlist'] = json_encode($wlist);
		$client = $this->session->set_userdata('client', $login_usr);
		echo true;		
	}

	public function product($affiliate_id = 0, $product_slug){
		$this->load->helper('share');
		$this->load->library('user_agent');
		$this->load->model('Product_model');		
		$affiliate_id = $data['user_id'] = (int) base64_decode($affiliate_id);
		if($data['user_id'] > 0){
			$this->cart->setcookieAffiliate($data['user_id']);
		}else{
			$affiliate_id = $data['user_id'] = $this->cart->getcookieAffiliate('affiliate_id');
		}
		if($data['user_id']){
			$data['user'] = $this->Product_model->getUserDetails($affiliate_id);
			if($data['user']['type'] == 'user'){
				$this->cart->setReferId($data['user_id']);
			}
		}
		$setting = array();
		$data['session'] = $this->session->userdata('client') ? $this->session->userdata('client') : '';
		if($product_slug){
			$seller = false;
			if(isset($_GET['preview'])){
				$u = $this->session->userdata('user');
				$admin = $this->session->userdata('administrator');

				if(!$u && !isset($admin['id'])){ 
					header("Location: ".base_url('store/login'));
					die;
				}

				$data['product'] = $this->db->query("SELECT * FROM product WHERE product_slug like '". $product_slug ."' ")->row_array();

				$seller = $this->db->query("SELECT pa.*, u.is_vendor FROM product_affiliate AS pa
					LEFT JOIN users as u on (pa.user_id = u.id) 
					WHERE pa.product_id=". (int)$data['product']['product_id'] ." 
					")->row_array();
				if($seller['user_id'] != $u['id'] && !isset($admin['id'])){ 
					header("Location: ".base_url('store/login'));
					die;
				}
			} else {
				$data['product'] = $this->db->query("SELECT * FROM product WHERE on_store = 1 AND product_status = 1 AND product_slug like '". $product_slug ."' ")->row_array();
			}

			if(!$data['product']){
				
				header("Location: ".base_url('store/login'));
				die;
							}else{

				if(!$seller){
					$seller = $this->db->query("SELECT pa.*, u.is_vendor FROM product_affiliate AS pa
						LEFT JOIN users as u on (pa.user_id = u.id) 
						WHERE pa.product_id=". (int)$data['product']['product_id'] ." 
						")->row_array();
				}
				if($seller && (!isset($seller['is_vendor']) || !$seller['is_vendor']) ){
					
					header("Location: ".base_url('store/login'));
					die;
									}
				$data['product']['seller'] = $seller;

				$data['categories'] =$this->Product_model->getProductCategory($data['product']['product_id']);

				$data['meta_image'] = resize('assets/images/product/upload/thumb/'.$data['product']['product_featured_image'],500,250);
				$data['add_tocart_url'] = $this->cart->getStoreUrl('add_to_cart');
				$data['add_coupon_url'] = $this->cart->getStoreUrl('add_coupon');
				$data['meta_title'] = $data['product']['product_name'];
				$data['meta_description'] = $data['product']['product_short_description'];
				$this->load->library("socialshare");				
				$data['social_share_modal'] =  $this->socialshare->get_dynamic_social_share_btns();

				$data['product_slug'] = $product_slug;
				
				if(!isset($_GET['preview'])){
					$this->db->set('view', 'view+1', FALSE);
					$this->db->where('product_id', $data['product']['product_id']);
					$this->db->update('product');
				}
				
				$data['setting'] 	= $this->Product_model->getSettings('paymentsetting');
				$data['ratings'] = $this->Product_model->getReview($data['product']['product_id']);
				$this->db->select('avg(rating.rating_number) as avg_rating');
				$this->db->order_by('rating_created', 'desc');
				$this->db->from('rating');
				$this->db->where('products_id', $data['product']['product_id']);
				$this->db->join('product', 'product.product_id = rating.products_id');
				$data['avg_rating'] = $this->db->get()->row_array()['avg_rating'];

				$data['allowReview'] = false;
				$data['login_usr'] = $this->cart->is_logged();
				if($data['login_usr'] && $this->cart->has_purchase($data['product']['product_id']) > 0){
					$data['allowReview'] = true;
				}


				$client_id = 0;
				if($this->session->userdata('client') != false) $client_id = $this->session->userdata('client')['id'];
				if (
					$this->session->userdata('administrator') == false && 
					$this->session->userdata('user') == false && 
					$affiliate_id && 
					$client_id != $affiliate_id &&
					$data['user']['type'] == 'user'
				) {
					$match = $this->Product_model->getProductAction(
						$data['product']['product_id'],
						$affiliate_id
					);	

					$this->Product_model->referClick($data['product']['product_id'],$affiliate_id);

					if ($match == 0){
						$this->Product_model->setClicks($data['product']['product_id'],$affiliate_id);
					} else {
						$this->Product_model->getProductActionIncrese($data['product']['product_id'], $affiliate_id);
					}

					$this->Product_model->giveClickCommition($data['product'], $affiliate_id);
					$this->Product_model->giveAdminClickCommition($data['product']);
				}
				$wlist = [];
				if(isset($data['login_usr']['products_wishlist']) && !empty($data['login_usr']['products_wishlist'])) {
					$wlist = json_decode($data['login_usr']['products_wishlist']);
				}
				if (($key = array_search($data['product']['product_id'], $wlist)) !== false) {
				$data['is_wishlisted_class'] = 'w-listed';
				} else {
				$data['is_wishlisted_class'] = '';
				}
				$this->storeapp->view("product",$data);
			}
		}

	}
	public function insertproductlogs($postData = null){
		if(!empty($postData)){
			$data['custom'] = $this->Product_model->create_data('payment_log', $postData);
		}
	}

	public function about(){
		$data['settings'] = $this->Product_model->getSettings('store');
		$this->storeapp->view("about", $data);
	}

	public function cart(){
		$post = $this->input->post(null,true);
		$get = $this->input->get(null,true);

		if (isset($get['remove'])){
			$this->cart->remove($get['remove']);
			$this->session->set_flashdata('error', __('store.product_remove_successfully'));
			if(isset($get['checkout_page'])){ echo json_encode(array("success"=>true));die; }
			redirect($this->cart->getStoreUrl('cart'));
		} 
		
		if ($this->input->server('REQUEST_METHOD') == 'POST'){
			foreach ($this->input->post('quantity',true) as $cart_id => $quantity) {
				$this->cart->update($cart_id,$quantity);
			}
			if(isset($post['checkout_page'])){ 
				echo json_encode(array("success"=>true));
				die; 
			} 
		}
		
		$data['base_url'] = $this->cart->getStoreUrl();
		$data['cart_url'] = $this->cart->getStoreUrl('cart');
		$data['products'] = $this->cart->getProducts();
		$data['sub_total'] = $data['total'] = $this->cart->subTotal();
		$data['settings'] = $this->Product_model->getSettings('store');

		if ($this->input->server('REQUEST_METHOD') == 'POST'){
			return $this->storeapp->view("cart_products_table",$data, true);
		} else {
			$this->storeapp->view("cart",$data);
		}
	}

	public function checkout(){
		$data['products'] = $this->cart->getProducts();
		$user = $this->cart->is_logged();
		if($data['products']){
			$downloadable = 0;
			foreach ($data['products'] as $key => $value) {
				if($value['product_type'] == 'downloadable'){
					$downloadable++;
				}
			}

			$all_is_download_product = 0;
			if(count($data['products']) == $downloadable){
				$all_is_download_product = 1;
			}

				/*if($any_downloadable){
				foreach ($data['products'] as $key => $value) {
				if($value['product_type'] == 'virtual'){
				$this->cart->remove($value['cart_id']);
				}
				}
			}*/
				//$data['products'] = $this->cart->getProducts();

			$this->load->model('Product_model');
			$data['checkout_url']= $this->cart->getStoreUrl('checkout');
			$data['cart_update_url']= $this->cart->getStoreUrl('cart');
			$data['is_logged'] = $this->cart->is_logged();
			$data['base_url'] = $this->cart->getStoreUrl();
			$data['sub_total'] = $data['total'] = $this->cart->subTotal();
			$data['paymentsetting'] = $this->Product_model->getSettings('paymentsetting');
			$data['allow_shipping'] = $this->cart->allow_shipping;
			$data['allow_upload_file'] = $this->cart->allow_upload_file;
			$shipping_setting = $this->Product_model->getSettings('shipping_setting');

			if($all_is_download_product){
				$data['allow_shipping'] = false;
			}

			$data['shipping_error_message'] = $shipping_setting['shipping_error_message'];

			$data['show_blue_message'] = false;
			if((int)$shipping_setting['shipping_in_limited'] == 1){
				$data['show_blue_message'] = true;
			}

			$country = $this->Product_model->getShippingCountry();
			if(is_array($country)){
				$userArray = $this->db->query("SELECT * FROM users WHERE id = ". (int)$user['id'])->row_array();
				if($userArray && !isset($country[$userArray['Country']])){
					$data['shipping_not_allow_error_message'] = $shipping_setting['shipping_error_message'];
				} else {
					$data['show_blue_message'] = false;
				}
			}

			if (isset($data['shipping_not_allow_error_message'] )) {
				$data['show_blue_message'] = false;
			}
			//$this->session->unset_userdata('last_order_id', $order_id);
			$data['settings'] = $this->Product_model->getSettings('store');

			$this->storeapp->view("checkout",$data);
		}else{
			redirect($this->cart->getStoreUrl('cart'));
		}
	}

	public function getState(){
		$data['states'] = array();
		$post = $this->input->post(null,true);
		if($post['id']){
			$data['states'] = $this->db->query('SELECT name,id FROM states WHERE country_id = '. $post['id'])->result();
		}

		if(isset($post['checkShipping'])){
			$this->session->set_userdata('shipping_country', (int)$post['id']);
			/*$data['allow_shipping'] = 0;
			$country = $this->Product_model->getShippingCountry();
			if(is_array($country)){
			$shipping_setting = $this->Product_model->getSettings('shipping_setting');
			$data['allow_shipping'] = (int)isset($country[$post['id']]);
			$data['shipping_error_message'] = $shipping_setting['shipping_error_message'];}*/

			//$rate = $this->Product_model->getShippingRate($country);
		}

		echo json_encode($data);
	}

	public function contact(){
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$post = $this->input->post(null,true);

			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');
			if ($this->form_validation->run()){
				$this->load->model('Mail_model');
				$this->load->model('Product_model');
				$this->Mail_model->send_store_contact_mail($post);
				redirect($_SERVER['HTTP_REFERER']);
			}
		}

		$data['storesettings'] = $data['settings'] = $this->Product_model->getSettings('store');
		$this->storeapp->view("contact", $data);
	}

	public function policy(){
		$this->storeapp->view("policy");
	}

	public function add_to_cart() {
		$product = $this->db->get_where('product', array('product_id' => $this->input->post("product_id",true)))->row_array();
		if($product){
			$quantity = max($this->input->post("quantity",true),1);
			$variation = json_encode($this->input->post("variation",true),1);
			$json['data'] = $this->cart->add($product['product_id'],$quantity,$variation,$this->cart->getReferId(), $product);
		}
		//$this->session->set_flashdata('error', __('store.product_add_successfully'));
		$json['location'] = $this->cart->getStoreUrl('cart');
		echo json_encode($json);
	}

	public function checkoutCart(){
		$data['products'] = $this->cart->getProducts();
		$data['is_logged'] = $this->cart->is_logged();
		if($data['products']){
			$data['base_url'] = $this->cart->getStoreUrl();
			$data['cart_url'] = $this->cart->getStoreUrl('cart');
			$data['totals'] = $this->cart->getTotals();
			//$data['sub_total'] = $data['total'] = $this->cart->subTotal();
		}
		$this->storeapp->view("checkout_cart",$data,true);
	}

	public function checkout_shipping(){
		$is_logged = $this->cart->is_logged();

		$this->cart->reloadCart();

		$data['allow_shipping'] = $this->cart->allow_shipping;
		if($data['allow_shipping']){
			if($is_logged){
				$data['shipping'] = $this->db->query("SELECT * FROM shipping_address WHERE user_id =  ". $is_logged['id'])->row();
			}

			$countries_sql = 'SELECT * FROM countries WHERE 1';
			$country = $this->Product_model->getShippingCountry();
			if(is_array($country)){
				if(count($country) == 0){
					$countries_sql .= ' AND id IN (0) ';
				} else {
					$countries_sql .= ' AND id IN ('. implode(",", array_keys($country)) .') ';
				}
			}
			$data['countries'] = $this->db->query($countries_sql)->result();
		}

		$this->storeapp->view("checkout_shipping",$data,true);
	}

	public function checkout_confirm(){
		$is_logged = $this->cart->is_logged();
		$this->cart->reloadCart();

		$data['allow_comment'] = $this->cart->allow_comment;
		$data['allow_upload_file'] = $this->cart->allow_upload_file;

		$this->storeapp->view("checkout_confirm",$data, true);
	}

	public function add_coupon() {
		$coupon_code = $this->input->post("coupon_code",true);
		$product_id = $this->input->post("product_id",true);
		$this->load->model("Coupon_model");
		$json = array();
		$coupon = $this->Coupon_model->getByCode($coupon_code);
		if($coupon){
			if($coupon['allow_for'] == "S"){
				$product_ids = explode(",", $coupon['products']);
				if (!in_array($product_id, $product_ids)) {
					$json['error'] = "Invalid Coupon Code";
				}
			}
			$logged_user = $this->cart->is_logged();
			if ($logged_user) {
				$total_use = $this->Coupon_model->getUses($logged_user['id'],$coupon_code);

				if($total_use >= $coupon['uses_total']){
					$json['error'] = "Coupon is expired or reached its usage limit!";
				}
			}
			if (!isset($json['error'])) {
				$json['success'] = 'Coupon Code Apply Successfully.!';
				$this->cart->addCoupon($product_id,$coupon);
			}
		} else {
			$json['error'] = "Invalid Coupon Code";
		}
		echo json_encode($json);
	}

	public function ajax_login(){
		$this->load->model('user_model', 'user');
		$this->load->model("Product_model");

		$username = $this->input->post('username');
		$password = $this->input->post('password');	
		$this->session->unset_userdata('user','administrator','client');
		$json['errors'] = array();
		$post = $this->input->post(null,true);

		$googlerecaptcha = $this->Product_model->getSettings('googlerecaptcha');
		if (isset($googlerecaptcha['client_login']) && $googlerecaptcha['client_login']) {
			if($post['g-recaptcha-response'] == ''){
				$json['errors']['captch_response'] = 'Invalid Recaptcha';
			}
		}

		if( count($json['errors']) == 0 ){
			if ( isset($googlerecaptcha['client_login']) && $googlerecaptcha['client_login']) {
				$post = http_build_query(array (
					'response' => $post['g-recaptcha-response'],
					'secret'   => $googlerecaptcha['secretkey'],
					'remoteip' => $_SERVER['REMOTE_ADDR']
				));
				$opts = array('http' => array (
					'method' => 'POST',
					'header' => 'application/x-www-form-urlencoded',
					'content' => $post
				));
				$context = stream_context_create($opts);
				$serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
				if (!$serverResponse) {
					$json['errors']['captch_response'] = 'Failed to validate Recaptcha';
				}
				$result = json_decode($serverResponse);

				if (!$result->success) {
					$json['errors']['captch_response'] = 'Invalid Recaptcha';
				}
			}
		}

		$post = $this->input->post(null,true);

		if(count($json['errors']) == 0){
			$user_details_array = $this->user->login($username);
			if(!empty($user_details_array['username']) && sha1($password)==$user_details_array['password']){
				if($user_details_array['type'] == 'client'){
					$this->user->update_user_login($user_details_array['id']);
					$this->session->set_userdata(array('client'=>$user_details_array));
					$this->cart->syncCart();

					$json['success'] = true;
				}
			}
			if(!isset($json['success'])){
				$json['errors']['password'] = __('user.invalid_credentials');
			}
		}
		echo json_encode($json);
	}

	public function confirm_order(){
		$this->load->library('form_validation');
		$user = $this->cart->is_logged();
		if($user){
			$this->cart->reloadCart();
			$allow_shipping = $this->cart->allow_shipping;

			if($allow_shipping){
				$this->form_validation->set_rules('address', 'Address', 'required|trim');
				$this->form_validation->set_rules('country', 'Country', 'required|trim');
				$this->form_validation->set_rules('state', 'State', 'required|trim');
				$this->form_validation->set_rules('city', 'City', 'required|trim');
				$this->form_validation->set_rules('zip_code', 'Postal Code', 'required|trim');
				$this->form_validation->set_rules('phone', 'Phone Number', 'required|trim');
			}

			$this->form_validation->set_rules('payment_method', 'Payment Method', 'required|trim');
			$this->form_validation->set_rules('agree', 'Agree', 'required|trim');

			$data = $this->input->post(null,true);
			if ($this->form_validation->run() == FALSE) {
				$json['errors'] = $this->form_validation->error_array();
				if(isset($json['errors']['agree'])){
					$json['error'] = $json['errors']['agree'];
					unset($json['errors']['agree']);
				}
				if(isset($json['errors']['payment_method'])){
					$json['error'] = $json['errors']['payment_method'];
					unset($json['errors']['payment_method']);
				}
				if(isset($data['comment']) && is_array($data['comment'])){
					foreach ($data['comment'] as $key => $value) {
						if(empty($value['comment'])){
							$json['errors']['comment'][$key] = "Comment can not be blank!";
						}
					}
				}
			} else {
				if(!empty($_FILES['downloadable_file'])){
					$files = $_FILES['downloadable_file'];
					$count_file = count($_FILES['downloadable_file']['name']);
					$this->load->helper('string');

					for($i=0; $i<$count_file; $i++){
						$FILES['downloadable_files']['name'] = md5(random_string('alnum', 10));
						$FILES['downloadable_files']['type'] = $files['type'][$i];
						$FILES['downloadable_files']['tmp_name'] = $files['tmp_name'][$i];
						$FILES['downloadable_files']['error'] = $files['error'][$i];
						$FILES['downloadable_files']['size'] = $files['size'][$i];    

						$extension = pathinfo($files['name'][$i], PATHINFO_EXTENSION);
						if(in_array($extension, array('jpeg','jpg','pdf','gif','doc','docx','png','zip','tar'))){
							move_uploaded_file($FILES['downloadable_files']['tmp_name'], APPPATH.'/downloads_order/'. $FILES['downloadable_files']['name']);

							$downloadable_files[] = array(
								'type' => $FILES['downloadable_files']['type'],
								'name' => $FILES['downloadable_files']['name'],
								'mask' => $files['name'][$i],
							);
						}else{
							$json['error'] = "File type {$extension} not allow";
						}
					}
				}

				if(isset($data['comment']) && is_array($data['comment'])){
					foreach ($data['comment'] as $key => $value) {
						if(empty($value['comment'])){
							$json['errors']['comment'][$key] = "Comment can not be blank!";
						}
					}
				}

				if((int)$data['country'] > 0){

					$country = $this->Product_model->getShippingCountry();
					if(is_array($country)){
						$userArray = $this->db->query("SELECT * FROM users WHERE id = ".$user['id'])->row_array();
						if(!isset($country[$userArray['Country']])){
							$shipping_setting = $this->Product_model->getSettings('shipping_setting');
							$json['error'] =  $shipping_setting['shipping_error_message'];
						}
					}

						/*if(is_array($country)){
						$shipping_setting = $this->Product_model->getSettings('shipping_setting');
						if(!isset($country[(int)$data['country']])){
						$json['error'] = $shipping_setting['shipping_error_message'];
						}
					}*/


						/*$shipping_setting = $this->Product_model->getSettings('shipping_setting');
						if((int)$shipping_setting['shipping_in_limited'] == 1){
						$allow_country = (array)(isset($shipping_setting['allow_country']) ? json_decode($shipping_setting['allow_country'],1) : []);		        		
						if(!in_array((int)$data['country'], $allow_country)){
						$json['error'] = $shipping_setting['shipping_error_message'];
						}
					}*/
				}

				if(!isset($json['errors']) && !isset($json['error'])){

					$this->load->model('Product_model');
					$cart_product = $this->cart->getProducts();
					$is_form = (isset($data['is_form']) && $data['is_form']) ? 1 : 0;

					if($allow_shipping){
						$check = $this->db->query("SELECT id FROM shipping_address WHERE user_id =  ". $user['id'])->row();
						$shipping = array(
							'user_id'    => $user['id'],
							'address'    => $data['address'],
							'country_id' => (int)$data['country'],
							'state_id'   => (int)$data['state'],
							'city'       => $data['city'],
							'zip_code'   => $data['zip_code'],
							'phone'      => $data['phone'],
						);

						if($check){
							$this->db->update("shipping_address",$shipping,['id' => $check->id]);
						}else{
							$this->db->insert("shipping_address",$shipping);
						}
					}

					$ipInformatiom = $this->Product_model->ip_info();
					$order_id = $this->session->userdata('last_order_id');

					$discount = 0;
					if($is_form){
						if($this->session->userdata('form_coupon_discount')){
							$discount = $this->session->userdata('form_coupon_discount');
						}
						$sub_total =  $this->cart->finalTotal();
					} else {
						$sub_total =  $this->cart->subTotal();
					}


					$order = array(
						'user_id'         => isset($user['id']) ? $user['id'] : '',
						'address'         => isset($data['address']) ? $data['address'] : '',
						'country_id'      => isset($data['country']) ? (int)$data['country'] : 0,
						'state_id'        => isset($data['state']) ? (int)$data['state'] : 0,
						'city'            => isset($data['city']) ? $data['city'] : '',
						'zip_code'        => isset($data['zip_code']) ? $data['zip_code'] : '',
						'phone'           => isset($data['phone']) ? $data['phone'] : '',
						'payment_method'  => $data['payment_method'],
						'allow_shipping'  => $allow_shipping,
						'coupon_discount' => $discount,
						'shipping_cost'   => 0,
						'total'           => $sub_total,
						'total_commition' => 0,
						'shipping_charge' => 0,
						'currency_code'   => $_SESSION['userCurrency'],
						'created_at'      => date("Y-m-d H:i:s"),
						'ip'              => @$ipInformatiom['ip'],
						'country_code'    => @$ipInformatiom['country_code'],
						'files'           => isset($downloadable_files) ? json_encode($downloadable_files) : '[]',
						'comment'         => isset($data['comment']) ? json_encode($data['comment']) : json_encode(array()),
					);

					$totals = $this->cart->getTotals();
					$order['shipping_cost'] = isset($totals['shipping_cost']) ? (float)$totals['shipping_cost']['amount'] : 0;
					$order['total'] = (float)$totals['total']['amount'];


					if((int)$order_id == 0){
						$this->db->insert("order",$order);
						$order_id = $this->db->insert_id();
					} else{
						$this->db->update("order",$order,['id'=>$order_id]);
					}

					$this->session->set_userdata('last_order_id', $order_id);
					$this->db->query("DELETE FROM order_products WHERE order_id= {$order_id}");

					foreach ($cart_product as $key => $product) {
						$_user = $this->Product_model->getUserDetails((int)$product['refer_id']);
						$commission = false;

						if($is_form && $_user && $_user['type'] == 'user'){
							$commission = $this->Product_model->formcalcCommitions($product, 'sale', $_user);
						} else {
							$commission = $this->Product_model->calcCommitions($product, 'sale', $_user);
						}

						$_product = array(
							'order_id'               => $order_id,
							'product_id'             => $product['product_id'],
							'msrp'      			 => $product['product_msrp'],
							'variation'      		 => $product['variation'],
							'refer_id'               => ($_user && $_user['type'] == 'user') ? $_user['id'] : 0,
							'price'                  => (float)$product['product_price'],
							'total'                  => (float)$product['total'],
							'quantity'               => (int)$product['quantity'],
							'commission'             => ($commission) ? $commission['commission'] : 0,
							'commission_type'        => ($commission) ? $commission['type'] : '',
							'coupon_code'            => $product['coupon_code'],
							'coupon_name'            => $product['coupon_name'],
							'coupon_discount'        => $product['coupon_discount'],
							'allow_shipping'         => $product['allow_shipping'],
							'form_id'                => 0,
							'vendor_id'              => $product['vendor_id'],
							'admin_commission'       => isset($commission['admin_commission']) ? (double)$commission['admin_commission'] : 0,
							'admin_commission_type'  => isset($commission['admin_commission_type']) ? $commission['admin_commission_type'] : '',
							'vendor_commission'      => isset($commission['vendor_commission']) ? (double)$commission['vendor_commission'] : 0,
							'vendor_commission_type' => isset($commission['vendor_commission_type']) ? $commission['vendor_commission_type'] : '',
						);

						if($is_form){
							$_product['form_id'] = $this->session->userdata('form_id');
						}

						$this->db->insert("order_products",$_product);
					}

					$payment_methods = $this->session->userdata('payment_methods');
					if($payment_methods && isset($payment_methods[$data['payment_method']])){
						require APPPATH."/payments/controllers/". $data['payment_method'] .".php";

						$pdata = $payment_methods[$data['payment_method']];
						$code = $data['payment_method'];
						$obj = new $code($this);


						$update1['payment_method'] = $obj->title;
						$this->Product_model->update_data( 'order', $update1,array('id' => $order_id) );

						$data['order_comment_setting'] = $this->Product_model->getSettings('order_comment');
						$data['order_comment_setting']['title'] = json_decode($data['order_comment_setting']['title'], true);

						$data['allow_comment'] = $this->cart->allow_comment;
						$data['allow_upload_file'] = $this->cart->allow_upload_file;

						$data['base_url'] = base_url();
						$this->session->set_userdata('payment_method',$code);

						$json['confirm'] = $this->storeapp->view("checkout_confirm",$data, true, true);
						$data['thankyou_url'] = base_url('store/thankyou/'. $order_id );
						$pdata['order_id'] = $order_id;
						$pdata['order_info'] = $this->Order_model->getOrder($order_id, 'store');
						$pdata['products']   = $this->Order_model->getProducts($order_id);

						ob_start();
						$obj->getConfirm($pdata);
						$json['confirm'] .= ob_get_clean();
					}
				}
			}
		} else {
			$json['error'] = "User not login";
		}
		echo json_encode($json);
	}

	public function payment_confirmation(){
		$json = array();

		$post = $this->input->post(null,true);

		if(isset($post['comment']) && is_array($post['comment'])){
			foreach ($post['comment'] as $key => $value) {
				if(empty($value['comment'])){
					$json['errors']['comment'][$key] = "Comment can not be blank!";
				}
			}
		}

		if(!$json['errors']){
			$order_id = $this->session->userdata('last_order_id');
			$comment = json_encode($post['comment']);

			$this->db->query("UPDATE `order` SET `comment` = '".$comment."' WHERE `id` = '".(int)$order_id."'");

			$json['success'] = true;
		}else{
			$json['success'] = false;
		}

		echo json_encode($json);
		die;
	}

	public function getSettings($key){
		return $this->Product_model->getSettings($key);
	}

	public function get_payment_mothods(){
		$_data['products'] = $this->cart->getProducts();
		$_data['is_logged'] = $this->cart->is_logged();	
		$_data['base_url'] = $this->cart->getStoreUrl();
		$_data['sub_total'] = $data['total'] = $this->cart->subTotal();

		$files = array();
		foreach (glob(APPPATH."/payments/controllers/*.php") as $file) {
			$files[] = $file;
		}

		$methods = array_unique($files);

		$payment_methods = array();
		foreach ($methods as $key => $filename) {
			require $filename;

			$code = basename($filename, ".php");
			$obj = new $code($this);

			$pdata          = $obj->getMethod($_data);
			$pdata['title'] = $obj->title;
			$pdata['icon'] = $obj->icon;
			$pdata['code']  = $code;

			$setting_data = $this->Product_model->getSettings('storepayment_'.$code);
			if (isset($setting_data['status']) && $setting_data['status']) {
				$pdata['setting_data']  = $setting_data;
				$payment_methods[$code] = $pdata;
			}
		}

		$data['payment_methods'] = $payment_methods;
		$this->session->set_userdata('payment_methods',$data['payment_methods']);

		$json['html'] = $this->storeapp->view("payment_methods",$data,true, true);
		echo json_encode($json);

	}

	public function confirm_payment(){
		$code = $this->session->userdata('payment_method');
		$comment = $this->input->post('comment',true);
		$payment_methods = $this->session->userdata('payment_methods');
		if($payment_methods && isset($payment_methods[$code])){
			$order_id = (int)$this->session->userdata('last_order_id');

			$file = isset($_FILES['payment_proof']) ? $_FILES['payment_proof'] : false;
			if((int)$payment_methods[$code]['setting_data']['proof'] == 1 && !$file){
				$json['errors']['payment_proof'] = 'Is required!';
			} else if($file){
				$extension = pathinfo($file["name"], PATHINFO_EXTENSION);
				if($extension == 'pdf' || $extension == 'doc' || $extension == 'docx'){
					$name = 'pp-'.time().$file['name'];
					move_uploaded_file($file['tmp_name'], FCPATH.'/assets/user_upload/'.$name);

					$this->Product_model->insertOrDelete(
						[
							'order_id' => $order_id,
							'proof'    => $name,
						],
						['order_id' => $order_id]
					);
				} else {
					$json['errors']['payment_proof'] = 'Allow only pdf or doc files..!';
				}
			}

			if($this->input->post('bank_method') != ''){
				$this->session->set_userdata('bank_method_index', $this->input->post('bank_method'));
			}

			if(!isset($json['errors'])){
				require APPPATH."/payments/controllers/". $code .".php";
				$obj = new $code($this);
				$data['base_url'] = base_url();

				if($order_id){
					/*$update1['comment'] = $comment;
					$this->Product_model->update_data( 'order', $update1,array('id' => $order_id) );*/

					$order_info           = $this->Order_model->getOrder($order_id, 'store');
					$products             = $this->Order_model->getProducts($order_id);
					$data['thankyou_url'] = base_url('store/thankyou/'. $order_id );
					$data['order_info']   = $order_info;
					$data['products']     = $products;

					$json = $obj->confirm($data);
				} else {
					$json['redirect'] = base_url('store/checkout');
				}
			}
		}

		echo json_encode($json);die;
	}

	public function call_payment_function($code, $fun, $argument = '', $argument2 = ''){
		if(is_file(APPPATH."/payments/controllers/". $code .".php")){
			require APPPATH."/payments/controllers/". $code .".php";
			$obj = new $code($this);
			$obj->$fun($argument ,$argument2);
		}
	}

	private function getConfirm($file, $data){
		extract($data);ob_start();require($file);return ob_get_clean();
	}

	public function confirm_order_api($order_id, $status, $transaction_id = '', $comment = ''){
		$this->load->model("Order_model");
		$this->load->model("Product_model");
		$this->load->model('Mail_model');
		$this->load->model('IntegrationModel');
		$this->load->model("Form_model");

		$wallet_group_id = time();

		$ex = new Exception();
		$trace = $ex->getTrace(); 
		if(!isset($trace[1]['class'])){ return false; }

		$payment_methods = $trace[1]['class']; 
		$filename = APPPATH."/payments/controllers/{$payment_methods}.php";
		require_once $filename;

		$code                    = $payment_methods;
		$obj                     = new $code($this);
		$payment_method['title'] = $obj->title;
		$payment_method['icon']  = $obj->icon;
		$payment_method['code']  = $code;

		if ($payment_method['title']) {
			$status_text = $this->Order_model->status;

			$order_info = $this->Order_model->getOrder($order_id, 'store');
			$setting = $referlevelSettings = $this->Product_model->getSettings('referlevel');
			$max_level = isset($setting['levels']) ? (int)$setting['levels'] : 3;

			if($order_info){
				$totals = $this->cart->getTotals();

				$update1['shipping_cost'] = isset($totals['shipping_cost']) ? (float)$totals['shipping_cost']['amount'] : 0;
				$update1['status'] = (int)$status;
				$update1['total'] = (float)$totals['total']['amount'];
				$update1['txn_id'] = $transaction_id;
				$this->Product_model->update_data( 'order', $update1,array('id' => $order_id) );

				$logs_user = [];
				$logs_vendor = [];
				$products = $this->Order_model->getProducts($order_id);

				foreach ($products as $key => $product) {

					if($product['refer_id'] > 0){
						$is_recurrsive = false;
						if($product['form_id'] == 0){
							$orignal_pro = $this->Product_model->getProductById($product['product_id']);
							$product_recursion_type = $orignal_pro->product_recursion_type;
							if($product_recursion_type){
								$is_recurrsive = true;

								if($product_recursion_type == 'default'){
									$pro_setting = $this->Product_model->getSettings('productsetting');		
									$recursion = $pro_setting['product_recursion'];
									$recursion_endtime = $pro_setting['recursion_endtime'];
									$recursion_custom_time = ($recursion == 'custom_time' ) ? $pro_setting['recursion_custom_time'] : 0;
								}else{
									$recursion = $orignal_pro->product_recursion;
									$recursion_endtime = $orignal_pro->recursion_endtime;
									$recursion_custom_time = ($recursion == 'custom_time' ) ? $orignal_pro->recursion_custom_time : 0;
								}
							}
						}else{
							$orignal_form = $this->Form_model->getForm($product['form_id']);
							$form_recursion_type = $orignal_form['form_recursion_type'];
							if($form_recursion_type){
								$is_recurrsive = true;
								if($form_recursion_type == 'default'){
									$form_setting = $this->Product_model->getSettings('formsetting');
									$recursion = $form_setting['form_recursion'];
									$recursion_custom_time = ($recursion == 'custom_time' ) ? $form_setting['recursion_custom_time'] : 0;
									$recursion_endtime = $form_setting['recursion_endtime'];
								}else{
									$recursion = $orignal_form['form_recursion'];
									$recursion_custom_time = ($recursion == 'custom_time' ) ? $orignal_form['recursion_custom_time'] : 0;
									$recursion_endtime = $orignal_form['recursion_endtime'];
								}
							}
						}						

						if($product['commission'] > 0){
							$transaction_id = $this->Wallet_model->addTransaction(array(
								'status'       => (int)$status == 1 ? 1 : 0,
								'user_id'      => $product['refer_id'],
								'amount'       => $product['commission'],
								'comment'      => 'Commission for order Id order_id='. $order_id .' | Order By : '. $order_info['firstname'] ." " .$order_info['lastname'] ." <br> Sale done from ip_message" ,
								'type'         => 'sale_commission',
								'reference_id' => $order_id,
								'group_id'     => $wallet_group_id,
								'is_vendor'    => $product['vendor_id'] > 0 ? 1 : 0,
							));

							if($is_recurrsive){
								$recursion_id = $this->Wallet_model->addTransactionRecursion(array(
									'transaction_id'          => $transaction_id,
									'type'                    => $recursion,
									'custom_time'             => $recursion_custom_time,
									'force_recursion_endtime' => $recursion_endtime,
								));					
							}
						}

						$level = $this->Product_model->getMyLevel($product['refer_id']);	
						for ($l=1; $l <= $max_level ; $l++) { 
							$s = $this->Product_model->getSettings('referlevel_'. $l);
							$levelUser = (int)$level['level'. $l];
							if($s && $levelUser > 0){

								if($referlevelSettings['sale_type'] == 'percentage'){
									$_giveAmount = (($order_info['total'] * (float)$s['sale_commition']) / 100);
								} else{
									$_giveAmount = (float)$s['sale_commition'];
								}

								if($_giveAmount > 0){
									$transaction_id1 = $this->Wallet_model->addTransaction(array(
										'status'       => (int)$status == 1 ? (int)$setting['autoacceptlocalstore'] : 0,
										'user_id'      => $levelUser,
										'amount'       => $_giveAmount,
										'dis_type'     => '',
										'comment'      => "Level {$l} : ".'Commission for order Id order_id='. $order_id .' | User : '. $order_info['firstname'] ." " .$order_info['lastname'],
										'type'         => 'refer_sale_commission',
										'reference_id' => $order_id,
										'group_id' => $wallet_group_id,
									));

									$recursion_id = $this->Wallet_model->addTransactionRecursion(array(
										'transaction_id'  => $transaction_id1,
										'type'            => $recursion,
										'custom_time'     => $recursion_custom_time,
										'force_recursion_endtime' => $recursion_endtime,
									));	
								}

							}
						}
					}

					if($product['admin_commission'] > 0){
						$recursion_id2 = $this->Wallet_model->addTransaction(array(
							'status'       => (int)$status == 1 ? 1 : 0,
							'user_id'      => 1,
							'amount'       => $product['admin_commission'],
							'comment'      => 'Admin Commission for order Id order_id='. $order_id .' | Order By : '. $order_info['firstname'] ." " .$order_info['lastname'] ." <br> Sale done from ip_message" ,
							'type'         => 'vendor_sale_commission',
							'reference_id' => $order_id,
							'group_id'     => $wallet_group_id,
							'is_vendor'    => 1,
						));

						if($is_recurrsive){
							$recursion_id = $this->Wallet_model->addTransactionRecursion(array(
								'transaction_id'          => $recursion_id2,
								'type'                    => $recursion,
								'custom_time'             => $recursion_custom_time,
								'force_recursion_endtime' => $recursion_endtime,
							));					
						}
					}

					if(($product['vendor_commission'] > 0) && ($status == 1)){
						$recursion_id3 = $this->Wallet_model->addTransaction(array(
							'status'       => (int)$status == 1 ? 1 : 0,
							'user_id'      => $product['vendor_id'],
							'group_id' => $wallet_group_id,
							'amount'       => $product['vendor_commission'],
							'comment'      => 'Vendor Sell Earning Commission for order Id order_id='. $order_id .' | Order By : '. $order_info['firstname'] ." " .$order_info['lastname'] ." <br> Sale done from ip_message" ,
							'type'         => 'vendor_sale_commission',
							'reference_id' => $order_id,
							'is_vendor'    => 1,
						));

						if($is_recurrsive){
							$this->Wallet_model->addTransactionRecursion(array(
								'transaction_id'          => $recursion_id3,
								'type'                    => $recursion,
								'custom_time'             => $recursion_custom_time,
								'force_recursion_endtime' => $recursion_endtime,
							));					
						}
					}

					if((int)$product['refer_id'] > 0){
						if(!in_array((int)$product['refer_id'], $logs_user)){
							$logs_user[] = (int)$product['refer_id'];
							$this->IntegrationModel->addLog(array(
								'ip'           => $order_info['ip'],
								'country_code' => $order_info['country_code'],
								'click_id'     => $order_info['id'],
								'domain_name'  => base_url('store'),
								'link'         => base_url('store'),
								'click_type'   => 'store_sale',
//'user_id'      => (int)$order_info['user_id'],
								'user_id'      => (int)$product['refer_id'],
							));
						}
					}

					if((int)$product['vendor_id'] > 0){
						if(!in_array((int)$product['vendor_id'], $logs_vendor)){
							$logs_vendor[] = (int)$product['vendor_id'];
							$this->IntegrationModel->addLog(array(
								'ip'           => $order_info['ip'],
								'country_code' => $order_info['country_code'],
								'click_id'     => $order_info['id'],
								'domain_name'  => base_url('store'),
								'link'         => base_url('store'),
								'click_type'   => 'store_sale_vendor',
								'user_id'      => (int)$product['vendor_id'],
							));
						}
					}
				}

				$historyData = array(
					'order_id'        => $order_id,
					'payment_mode'    => $payment_method['title'],
					'history_type'    => 'payment',
					'paypal_status'   => $status_text[(int)$status],
					'comment'         => '[]',
					'created_at'      => date("Y-m-d H:i:s"),
					'order_status_id' => $status,
				);
				$this->db->insert('orders_history',$historyData);

				if(trim($comment)){
					$historyData = array(
						'order_id'        => $order_id,
						'payment_mode'    => $payment_method['title'],
						'history_type'    => 'order',
						'paypal_status'   => $status_text[(int)$status],
						'comment'         => $comment,
						'created_at'      => date("Y-m-d H:i:s"),
						'order_status_id' => $status,
					);
					$this->db->insert('orders_history',$historyData);
				}

				$this->sendOrderNoti($order_info,$products);

				$this->Mail_model->send_new_order_mail($order_id, $status);
				$this->cart->clearCart();
				return true;
			}
		}

		return false;
	}

	public function sendOrderNoti($order_info,$products){
		$userDetail = $this->Product_model->getUserDetails($order_info['user_id']);
		$cdate = date('Y-m-d H:i:s');
		$notificationData = array(
			'notification_url'          => '/vieworder/'.$order_info['id'],
			'notification_type'         =>  'order',
			'notification_title'        =>  'New Order Generated by '.$userDetail['username'],
			'notification_viewfor'      =>  'admin',
			'notification_actionID'     =>  $order_info['id'],
			'notification_description'  =>  $userDetail['firstname'].' '.$userDetail['lastname'].' created a new order at affiliate Program on '.date('Y-m-d H:i:s'),
			'notification_is_read'      =>  '0',
			'notification_created_date' =>  $cdate,
			'notification_ipaddress'    =>  $_SERVER['REMOTE_ADDR']
		);
		$this->insertnotification($notificationData);
		$notificationData = array(
			'notification_url'          => '/vieworder/'.$order_info['id'],
			'notification_type'         =>  'order',
			'notification_title'        =>  'Your Order has been place',
			'notification_viewfor'      =>  'client',
			'notification_view_user_id' =>  $userDetail['id'],
			'notification_actionID'     =>  $order_info['id'],
			'notification_description'  =>  'Your Order has been place',
			'notification_is_read'      =>  '0',
			'notification_created_date' =>  $cdate,
			'notification_ipaddress'    =>  $_SERVER['REMOTE_ADDR']
		);
		$this->insertnotification($notificationData);
		foreach ($products as $key => $product) {
			if($product['refer_id'] > 0){
				$notificationData = array(
					'notification_url'          => '/vieworder/'.$order_info['id'],
					'notification_type'         =>  'order',
					'notification_title'        =>  'New Order Generated by '.$userDetail['username'],
					'notification_viewfor'      =>  'user',
					'notification_view_user_id' =>  $product['refer_id'],
					'notification_actionID'     =>  $order_info['id'],
					'notification_description'  =>  $userDetail['firstname'].' '.$userDetail['lastname'].' created a new order which you refered to him at affiliate Program on '.date('Y-m-d H:i:s'),
					'notification_is_read'      =>  '0',
					'notification_created_date' =>  $cdate,
					'notification_ipaddress'    =>  $_SERVER['REMOTE_ADDR']
				);
				$this->insertnotification($notificationData);
			}

			if($product['vendor_id'] > 0){
				$notificationData = array(
					'notification_url'          => '/vieworder/'.$order_info['id'],
					'notification_type'         =>  'order',
					'notification_title'        =>  'New Order Generated With Your Vendor Product by '.$userDetail['username'],
					'notification_viewfor'      =>  'user',
					'notification_view_user_id' =>  $product['vendor_id'],
					'notification_actionID'     =>  $order_info['id'],
					'notification_description'  =>  $userDetail['firstname'].' '.$userDetail['lastname'].' created a new order with your vendor product at '.date('Y-m-d H:i:s'),
					'notification_is_read'      =>  '0',
					'notification_created_date' =>  $cdate,
					'notification_ipaddress'    =>  $_SERVER['REMOTE_ADDR']
				);
				$this->insertnotification($notificationData);
			}
		}
	}

	private function insertnotification($postData = null){
		if(!empty($postData)){
			$this->Product_model->create_data('notification', $postData);
		}
	}

	public function ajax_register(){
		$post = $this->input->post(null,true);

		$googlerecaptcha = $this->Product_model->getSettings('googlerecaptcha');

		if (isset($googlerecaptcha['client_register']) && $googlerecaptcha['client_register']) {
			if($post['g-recaptcha-response'] == ''){
				$json['errors']['captch_response'] = 'Invalid Recaptcha';
			}
		}

		if( count($json['errors']) == 0 ){
			if ( isset($googlerecaptcha['client_register']) && $googlerecaptcha['client_register']) {
				$post = http_build_query(array (
					'response' => $post['g-recaptcha-response'],
					'secret'   => $googlerecaptcha['secretkey'],
					'remoteip' => $_SERVER['REMOTE_ADDR']
				));
				$opts = array('http' => array (
					'method' => 'POST',
					'header' => 'application/x-www-form-urlencoded',
					'content' => $post
				));
				$context = stream_context_create($opts);
				$serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
				if (!$serverResponse) {
					$json['errors']['captch_response'] = 'Failed to validate Recaptcha';
				}
				$result = json_decode($serverResponse);

				if (!$result->success) {
					$json['errors']['captch_response'] = 'Invalid Recaptcha';
				}
			}
		}

		if(count($json['errors']) == 0){
			$post = $this->input->post(null,true);

			$this->load->model('user_model', 'user');
			$this->load->model('Product_model');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('f_name', 'First Name', 'required|trim');
			$this->form_validation->set_rules('l_name', 'Last Name', 'required|trim');
			$this->form_validation->set_rules('username', 'Username', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|trim', array('required' => '%s is required'));
			$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|trim', array('required' => '%s is required'));
			$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|trim|matches[password]', array('required' => '%s is required'));
			if ($this->form_validation->run() == FALSE) {
				$json['errors'] = $this->form_validation->error_array();
			} else {
				$checkEmail = $this->db->query("SELECT * FROM users WHERE email like ". $this->db->escape($this->input->post('email',true)) ." ")->num_rows();
				if($checkEmail > 0){ $json['errors']['email'] = "Email Already Exist"; }
				$checkUsername = $this->db->query("SELECT * FROM users WHERE username like ". $this->db->escape($this->input->post('username',true)) ." ")->num_rows();
				if($checkUsername > 0){ $json['errors']['username'] = "Username Already Exist"; }
				if(!isset($json['errors'])){
					$geo = $this->ip_info();			

					$data = $this->user->insert(array(
						'firstname'                 => $this->input->post('f_name',true),
						'lastname'                  => $this->input->post('l_name',true),
						'email'                     => $this->input->post('email',true),
						'username'                  => $this->input->post('username',true),
						'password'                  => sha1($this->input->post('password',true)),
						'refid'                     => $this->cart->getReferId(),
						'type'                      => 'client',
						'Country'                   => (int)$geo['id'],
						'City'                      => (string)$geo['city'],
						'phone'                     => $this->input->post('phone',true),
						'twaddress'                 => '',
						'address1'                  => '',
						'address2'                  => '',
						'ucity'                     => '',
						'ucountry'                  => '',
						'state'                     => '',
						'uzip'                      => '',
						'avatar'                    => '',
						'online'                    => '0',
						'unique_url'                => '',
						'bitly_unique_url'          => '',
						'created_at'                => date("Y-m-d H:i:s"),
						'updated_at'                => date("Y-m-d H:i:s"),
						'google_id'                 => '',
						'facebook_id'               => '',
						'twitter_id'                => '',
						'umode'                     => '',
						'PhoneNumber'               => $this->input->post('phone',true),
						'Addressone'                => '',
						'Addresstwo'                => '',
						'StateProvince'             => '',
						'Zip'                       => '',
						'f_link'                    => '',
						't_link'                    => '',
						'l_link'                    => '',
						'product_commission'        => '0',
						'affiliate_commission'      => '0',
						'product_commission_paid'   => '0',
						'affiliate_commission_paid' => '0',
						'product_total_click'       => '0',
						'product_total_sale'        => '0',
						'affiliate_total_click'     => '0',
						'sale_commission'           => '0',
						'sale_commission_paid'      => '0',
						'status'                    => '1',
						'membership_no' 			=> generateUserMembershipNumber()
					));
					$json['success'] =  __('user.youve_successfully_registered');
					$user_details_array = $this->user->login( $this->input->post('username',true) );
					$this->session->set_userdata(array('client'=>$user_details_array));

					App\User::createDefaultSettings($data);

					$notificationData = array(
						'notification_url'          => '/listclients/'.$data,
						'notification_type'         =>  'client',
						'notification_title'        =>  __('user.new_client_registration'),
						'notification_viewfor'      =>  'admin',
						'notification_actionID'     =>  $data,
						'notification_description'  =>  $this->input->post('firstname',true).' '.$this->input->post('lastname',true).' register as a client on affiliate Program on '.date('Y-m-d H:i:s'),
						'notification_is_read'      =>  '0',
						'notification_created_date' =>  date('Y-m-d H:i:s'),
						'notification_ipaddress'    =>  $_SERVER['REMOTE_ADDR']
					);
					$this->Product_model->create_data('notification', $notificationData);
					$this->load->model('Mail_model');
					$post['user_type'] = 'client';
					$post['firstname'] = $this->input->post('f_name',true);
					$post['lastname'] = $this->input->post('l_name',true);
					$this->Mail_model->send_register_mail($post,__('user.welcome_to_new_client_registration'));
				}
			}
		}
		echo json_encode($json);
	}

	public function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
		$output = NULL;
		if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
			$ip = $_SERVER["REMOTE_ADDR"];
			if ($deep_detect) {
				if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
					$ip = $_SERVER['HTTP_CLIENT_IP'];
			}
		}
		$purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
		$support    = array("country", "countrycode", "state", "region", "city", "location", "address");
		$continents = array(
			"AF" => "Africa",
			"AN" => "Antarctica",
			"AS" => "Asia",
			"EU" => "Europe",
			"OC" => "Australia (Oceania)",
			"NA" => "North America",
			"SA" => "South America"
		);
		if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
			$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
			if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
				switch ($purpose) {
					case "location":
					$id = 0;
					$code = @$ipdat->geoplugin_countryCode;
					$data = $this->db->query("SELECT id FROM countries WHERE sortname LIKE '{$code}' ")->row();
					if($data){
						$id = $data->id;
					}
					$output = array(
						"city"           => @$ipdat->geoplugin_city,
						"state"          => @$ipdat->geoplugin_regionName,
						"country"        => @$ipdat->geoplugin_countryName,
						"country_code"   => @$ipdat->geoplugin_countryCode,
						"continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
						"continent_code" => @$ipdat->geoplugin_continentCode,
						"id"             => $id
					);
					break;
					case "address":
					$address = array($ipdat->geoplugin_countryName);
					if (@strlen($ipdat->geoplugin_regionName) >= 1)
						$address[] = $ipdat->geoplugin_regionName;
					if (@strlen($ipdat->geoplugin_city) >= 1)
						$address[] = $ipdat->geoplugin_city;
					$output = implode(", ", array_reverse($address));
					break;
					case "city":
					$output = @$ipdat->geoplugin_city;
					break;
					case "state":
					$output = @$ipdat->geoplugin_regionName;
					break;
					case "region":
					$output = @$ipdat->geoplugin_regionName;
					break;
					case "country":
					$output = 0;
					$code = @$ipdat->geoplugin_countryCode;
					$data = $this->db->query("SELECT id FROM countries WHERE sortname LIKE '{$code}' ")->row();
					if($data){
						$output = $data->id;
					}
					break;
					case "countrycode":
					$output = @$ipdat->geoplugin_countryCode;
					break;
				}
			}
		}
		return $output;
	}

	public function thankyou($order_id){
		$this->load->model('Order_model');
		$this->load->model('Product_model');
		$this->load->model('Form_model');
		$user = $this->session->userdata('client') ? $this->session->userdata('client') : '';
		$data['client_loged'] = $this->session->userdata('client') ? true : false;
		$data['order'] = $this->Order_model->getOrder($order_id, 'store');
		/*if($data['order']['form_id'] > 0){
			redirect('form/thankyou/'.$order_id);exit;
		}*/
		$data['products'] = $this->Order_model->getProducts($order_id);
		$data['totals'] = $this->Order_model->getTotals($data['products'], $data['order']);

		$this->load->model('User_model');
		$admin_info = $this->User_model->get_user_by_type('admin');
		$data['store_name'] =  $admin_info['firstname'].' '.$admin_info['lastname'];
		$data['store_email'] =  $admin_info['email'];

		$form_details = $this->Form_model->getForm($data['products'][0]['form_id']);
		$data['product_type'] = '';
		$data['downloadable_files'] = '';

		$data['orderProof'] = $this->Order_model->getPaymentProof($order_id);

		if($data['order']['status'] == 1){
			$data['product_type'] = $form_details['product_type'];
			$data['downloadable_files'] = $this->Product_model->parseDownloads($form_details['downloadable_files']);
		}
		$this->cart->clearCart();

		if($data['order']['user_id'] == $user['id']){
			$data['settings'] = $this->Product_model->getSettings('store');
			$data['affiliateuser'] = $this->Order_model->getAffiliateUser($order_id);
			$data['payment_history'] = $this->Order_model->getHistory($order_id);
			$data['status'] = $this->Order_model->status;
			$data['order_history'] = $this->Order_model->getHistory($order_id, 'order');
			$data['paymentsetting'] = $this->Product_model->getSettings('paymentsetting');
			$this->storeapp->view('checkout_thankyou', $data,true);
		} else {
			die("You are not allow to see.. !");
		}
	}

	public function profile(){
		$data = array();
		$post = $this->input->post(null,true);

		if($post){
			$this->load->model('user_model', 'user');
			$this->load->model('Product_model');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
			$this->form_validation->set_rules('PhoneNumber', 'Phone Number', 'required|trim');
			$this->form_validation->set_rules('City', 'City', 'required|trim');
			$this->form_validation->set_rules('Zip', 'Pincode', 'required|trim');

			if($post['new_password'] != ''){
				$this->form_validation->set_rules('new_password', 'New Password', 'required|trim');
				$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[new_password]');
			}
			if ($this->form_validation->run() == FALSE) {
				$data['errors'] = $this->form_validation->error_array();
			} else {
				if(!empty($_FILES['avatar']['name'])){
					$upload_response = $this->upload_photo('avatar','assets/images/users');
					if($upload_response['success']){
						$details['avatar'] = $upload_response['upload_data']['file_name'];
					}
				}
				$user = $this->cart->is_logged();
				$checkEmail = $this->db->query("SELECT * FROM users WHERE id != ".$user['id']." AND email like ". $this->db->escape($this->input->post('email',true)) ." ")->num_rows();
				if($checkEmail > 0){ $data['errors']['email'] = "Email Already Exist"; }
				if(!isset($data['errors'])){
					$data = array(
						'firstname' 	=> $this->input->post('firstname',true),
						'lastname'  	=> $this->input->post('lastname',true),
						'email'     	=> $this->input->post('email',true),
						'PhoneNumber'   => $this->input->post('PhoneNumber',true),
						'type'      	=> 'client',
						'Country'   	=> $this->input->post('Country',true),
						'City'      	=> $this->input->post('City',true),
						'Zip'      		=> $this->input->post('Zip',true),
					);
					if ($post['new_password'] != '') {
						$data['password']  = sha1($this->input->post('new_password',true));
					}
					if(isset($details['avatar'])){
						$data['avatar'] = $details['avatar'];
					}
					$this->db->update("users", $data, array('id' => $user['id']));


					$userArray = $this->db->query("SELECT * FROM users WHERE id = ".$user['id'])->row_array();
					$this->session->set_userdata(array('client'=>$userArray));

					$this->session->set_flashdata('success', __('user.youve_successfully_updated'));
				}
			}
		}
		$this->load->model("Product_model");
		$user = $this->cart->is_logged();
		if(!$user){
			
			header("Location: ".base_url('store/login'));
			die;
					}else{
			$userDetails = $this->getUser($user['id']);
			$data['userDetails'] = array();

			if($userDetails){
				$data['userDetails'] = array(
					'type'		=>	$userDetails['type'],
					'firstname'	=>	$userDetails['firstname'],
					'lastname'	=>	$userDetails['lastname'],
					'email'		=>	$userDetails['email'],
					'username'	=>	$userDetails['username'],
					'phone'		=>	$userDetails['PhoneNumber'],
					'PhoneNumber'		=>	$userDetails['PhoneNumber'],
					'country'	=>	$userDetails['Country'],
					'state'		=>	$userDetails['StateProvince'],
					'city'		=>	$userDetails['City'],
					'zip'		=>	$userDetails['Zip'],
					'avatar'	=>	$userDetails['avatar'],
				);
			}
			$data['country'] = $this->Product_model->getcountry();
			$data['settings'] = $this->Product_model->getSettings('store');
			$this->storeapp->view("profile", $data);
		}
	}

	public function upload_photo($fieldname,$path) {
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'png|gif|jpeg|jpg';
		$this->load->helper('string');
		$config['file_name']  = random_string('alnum', 32);

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($fieldname)) {
			echo $this->upload->display_errors();
			die;
			$data = array('success' => false, 'msg' => $this->upload->display_errors());
		}
		else
		{ 
			$upload_details = $this->upload->data();

			$config1 = array(
				'source_image' => $upload_details['full_path'],
				'new_image' => $path.'/thumb',
				'maintain_ratio' => true,
				'width' => 300,
				'height' => 300
			);
			$this->load->library('image_lib', $config1);
			$this->image_lib->resize();
			$data = array('success' => true, 'upload_data' => $upload_details, 'msg' => "Upload success!");
		}
		return $data;
	}

	public function order(){
		$userdetails = $this->cart->is_logged(); 
		if(empty($userdetails)){ 
			header("Location: ".base_url('store/login'));
			die;
		}
		$this->load->model('Order_model');
		$data['buyproductlist'] = $this->Order_model->getOrders(array(
			'user_id' => $userdetails['id']
		));
		$data['status'] = $this->Order_model->status;
		$data['user'] = $userdetails;
		$data['settings'] = $this->Product_model->getSettings('store');
		$this->storeapp->view("order_list", $data);
	}

	public function wishlist(){
		$userdetails = $this->cart->is_logged(); 
		if(empty($userdetails)){ 
			
			header("Location: ".base_url('store/login'));
			die;
					} else {
			$this->load->library('user_agent');
			$this->load->model('Product_model');
			$user_id = base64_decode($user_id);
			if($user_id > 0){
				$this->cart->setcookieAffiliate($user_id);
				redirect(base_url('store'));
			}else{
				$user_id = $this->cart->getcookieAffiliate('affiliate_id');
			}
			$data['user_id'] = (int)$user_id;
			$data['products'] = $this->Product_model->get_wishlist_products(json_decode($userdetails['products_wishlist']));
			$this->storeapp->view("wishlist", $data);
		}
	}

	public function vieworder($order_id){
		$user =  $this->cart->is_logged(); 
		if(empty($user)){ 
			header("Location: ".base_url('store/login'));
			die;
		}
		$this->load->model('Order_model');
		$this->load->model('Product_model');
		$this->load->model('Form_model');
		$data['order_id'] = $order_id;
		$data['order'] = $this->Order_model->getOrder($order_id,'store');
		if($data['order']['user_id'] == $user['id']){
			$data['affiliateuser'] = $this->Order_model->getAffiliateUser($order_id);
			$data['payment_history'] = $this->Order_model->getHistory($order_id);
			$data['status'] = $this->Order_model->status;
			$data['products'] = $this->Order_model->getProducts($order_id);
			$data['totals'] = $this->Order_model->getTotals($data['products'],$data['order']);
			$data['order_history'] = $this->Order_model->getHistory($order_id, 'order');
			$data['paymentsetting'] = $this->Product_model->getSettings('paymentsetting');
			$data['orderProof'] = $this->Order_model->getPaymentProof($order_id);
			$data['settings'] = $this->Product_model->getSettings('store');
			$this->storeapp->view("view_order", $data);
		}else{
			die("You are not allow to see.. !");
		}
	}

	public function downloadable_file($filename, $mask, $order_id){
		$file = APPPATH .'downloads/'. $filename;
		// $mask = base64_decode(basename($mask));
		$userdetails = $this->cart->is_logged(); 
		if(empty($userdetails)){ 
			header("Location: ".base_url('store/login'));
			die;
		}

		$order = $this->Order_model->getOrder($order_id,'store');
		if($userdetails['id'] != $order['user_id']){
			
			header("Location: ".base_url('store/login'));
			die;
		}

		if (!headers_sent()) {
			if (file_exists($file)) {
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="' . ($mask ? $mask : basename($file)) . '"');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				header('Content-Length: ' . filesize($file));

				if (ob_get_level()) {
					ob_end_clean();
				}

				readfile($file, 'rb');

				exit();
			} else {
				exit('Error: Could not find file ' . $file . '!');
			}
		} else {
			exit('Error: Headers already sent out!');
		}
	}

	public function shipping(){
		$data = array();
		$this->load->model('Product_model');
		$user = $this->cart->is_logged();

		$post = $this->input->post(null,true);

		if($post){
			$this->load->model('user_model', 'user');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('address', 'Address', 'required|trim');
			$this->form_validation->set_rules('country', 'Country', 'required|trim');
			$this->form_validation->set_rules('state', 'State', 'required|trim');
			$this->form_validation->set_rules('city', 'City', 'required|trim');
			$this->form_validation->set_rules('zip_code', 'Postal Code', 'required|trim');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required|trim');
			if ($this->form_validation->run() == FALSE) {
				$data['errors'] = $this->form_validation->error_array();
			} else {
				$check = $this->db->query("SELECT id FROM shipping_address WHERE user_id =  ". $user['id'])->row();
				$shipping = array(
					'user_id'    => $user['id'],
					'address'    => $this->input->post('address',true),
					'country_id' => $this->input->post('country',true),
					'state_id'   => $this->input->post('state',true),
					'city'       => $this->input->post('city',true),
					'zip_code'   => $this->input->post('zip_code',true),
					'phone'      => $this->input->post('phone',true),
				);
				if($check){
					$this->db->update("shipping_address", $shipping, ['id' => $check->id]);
				}else{
					$this->db->insert("shipping_address", $shipping);
				}				
				$this->session->set_flashdata('success', __('user.youve_successfully_updated'));
			}
		}
		if(!$user){
			
			header("Location: ".base_url('store/login'));
			die;
					}else{
			$check = $this->db->query("SELECT * FROM shipping_address WHERE user_id =  ". $user['id'])->row();
			$data['shipping'] = array();
			if($check){
				$data['shipping'] = array(
					'user_id'    => $user['id'],
					'address'    => $check->address,
					'country_id' => $check->country_id,
					'state_id'   => $check->state_id,
					'city'       => $check->city,
					'zip_code'   => $check->zip_code,
					'phone'      => $check->phone,
				);
			}
			$data['country'] = $this->Product_model->getcountry();
			$data['settings'] = $this->Product_model->getSettings('store');
			$this->storeapp->view("shipping", $data);
		}
	}

	public function login(){
		$data['redirect_url'] = $this->cart->getStoreUrl(base64_encode($this->session->userdata("refer_id")));
		if($this->cart->is_logged()) redirect($data['redirect_url']);
		$data = array();
		$data['settings'] = $this->Product_model->getSettings('store');
		$this->storeapp->view("login",$data);
	}

	public function forgot(){
		$email = $this->input->post('forgot_email',true);
		$data = $this->db->query("SELECT * FROM users WHERE email like '{$email}' ")->row();
		if ($data) {
			$token = md5(uniqid(rand(), true));
			$resetlink = base_url('resetpassword/'. $token);

			$this->db->query("DELETE  FROM password_resets WHERE email like '{$email}' ");
			$this->db->query("INSERT INTO password_resets SET 
				email = '{$email}',
				token = '{$token}'
				");
			$this->load->model('Mail_model');
			$this->Mail_model->send_forget_mail($data, $resetlink);
			$json['success'] = __('user.password_reset_instructions_will_be_sent_to_your_registered_email_address');
		}else{
			$json['error'] = __('user.email_address_not_found');
		}
		echo json_encode($json);
	}

	public function logout(){
		$this->session->unset_userdata('client');
		if($this->session->userdata('refer_id')){
			redirect('store/'. base64_encode($this->session->userdata('refer_id')));
		}else{
			redirect('store/login');
		}
		$this->session->sess_destroy();
	}

	public function mini_cart(){
		$data['products'] = $this->cart->getProducts();
		$data['is_logged'] = $this->cart->is_logged();	
		$data['base_url'] = $this->cart->getStoreUrl();
		$data['sub_total'] = $data['total'] = $this->cart->subTotal();
		$json['cart'] = $this->storeapp->view("mini_cart",$data,true,true);
		$json['sub_total'] = c_format($data['sub_total']);
		$json['total'] = count($data['products']);
		$json['products'] = $data['products'];
		echo json_encode($json);
	}

	public function order_attechment($filename,$mask){
		$file = APPPATH .'/downloads_order/'. $filename;
		$mask = basename($mask);

		if (!headers_sent()) {
			if (file_exists($file)) {
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="' . ($mask ? $mask : basename($file)) . '"');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				header('Content-Length: ' . filesize($file));

				if (ob_get_level()) {
					ob_end_clean();
				}

				readfile($file, 'rb');

				exit();
			} else {
				exit('Error: Could not find file ' . $file . '!');
			}
		} else {
			exit('Error: Headers already sent out!');
		}
	}	
}