<script src="<?php echo base_url(); ?>assets/vertical/assets/plugins/slick-slider/slick.min.js"></script>
<div class="franchise_plan_page new_member_page">
	<div class="row text-center plan_list_block">
		<?php foreach ($plans as $key => $plan) { ?>
	    	<div class="slide">
		        <div class="card plan-card mb-4">
		            <div class="card-body" style="position: relative;overflow: hidden;">
		            	<div class="table-header" style="background-image:<?= $plan->bg_gradient ?>;">
		                	<h6 class="text-white">
		                		<?php
		                			$plan_icon = ($plan->icon) ? '<img src="' . base_url('assets/images/'.$plan->icon)  . '" class="img-responsive d-inline" />' : '<i class="fas fa-university"></i>';

		                			$plan_icon = '<i class="fas fa-university"></i>';
		                		?>
		                		<span class="plan_icon text-white"> <?= $plan_icon ?></span>
		                		<?= $plan->name ?>
		                	</h6>
		                </div>
		                <div class="table-content text-white">
	                		<?php 
	                			$discount = $plan->getPlanPrice($user->id, $plan);
	                		?>
		                	<div class="plan-price <?= (isset($discount['is_discount']) && $discount['is_discount'] && !empty($my_franchise_plan) && ! in_array($plan->id, $my_franchise_plan)) ? 'cross-out' : '' ?>">
		                    	<?php  if($plan->price == 0){ ?>
		                    		FREE
		                    	<?php } else { ?>
		                    		<?php if($plan->special) { ?>
		                    		<?= c_format($plan->special) ?>
		                    		<?php }else{ ?>
		                    		<?= c_format($plan->price) ?>
		                    		<?php } ?>

		                    	<?php } ?>
		                    </div>

	                		<?php if(isset($discount['is_discount']) && $discount['is_discount'] && !empty($my_franchise_plan) && ! in_array($plan->id, $my_franchise_plan)) { ?>
	                			<div class="discount-price"><span class="price"><?= c_format($discount['price']) ?></span></div>
	                		<?php } ?>

		                    <!-- <p class="description"><?= $plan->description ?></p> -->
		                    <div class="details_list">
			                    <ul>
			                    	<?php if($plan->bigg_coins > 0) { ?>
				                    	<li>
				                    		<div class="row">
				                    			<div class="col-3 d-flex align-items-center justify-content-center">
				                    				<img src="<?= base_url('assets/images/bigg_coins_img.png') ?>" class="img-responsive slide_img" />
				                    			</div>
				                    			<div class="col-9 text-left">
				                    				<p class="plan-title m-0">BIGG Coins</p>
				                    				<p class="number m-0"><?= $plan->bigg_coins ?></p>
				                    			</div>
				                    		</div>
				                    	</li>
				                    <?php } ?>
			                    	<!-- <li>
			                    		<div class="row">
			                    			<div class="col-3 d-flex align-items-center justify-content-center">
			                    				<img src="<?= base_url('assets/images/bigg_coupons_img.png') ?>" class="img-responsive slide_img" />
			                    			</div>
			                    			<div class="col-9 text-left">
			                    				<p class="plan-title m-0">Product Points (PP)</p>
			                    				<p class="number m-0"><?= $plan->bigg_coupon ?></p>
			                    			</div>
			                    		</div>
			                    	</li> -->
			                    	<!-- <li>
			                    		<div class="row">
			                    			<div class="col-3 d-flex align-items-center justify-content-center">
			                    				<img src="<?= base_url('assets/images/share_credits.png') ?>" class="img-responsive slide_img" />
			                    			</div>
			                    			<div class="col-9 text-left">
			                    				<p class="plan-title m-0">Maturity Rewards</p>
			                    				<p class="number m-0"><?= $plan->fego_shares ?></p>
			                    			</div>
			                    		</div>
			                    	</li>
			                    	<li> -->
			                    		<!-- <div class="row">
			                    			<div class="col-3 d-flex align-items-center justify-content-center">
			                    				<img src="<?= base_url('assets/images/lifestyle_products.png') ?>" class="img-responsive slide_img" />
			                    			</div>
			                    			<div class="col-9 text-left">
			                    				<p class="plan-title product_title m-0" data-toggle="collapse" data-target="#collapse<?= $plan->id ?>" aria-expanded="false" aria-controls="collapse<?= $plan->id ?>">Promotion Bonus (PB)</p>
			                    				<p class="number m-0">
			                    					<?php
			                    						$plan_products = (isset($plan->products) && !empty($plan->products)) ? json_decode($plan->products, true) : [];

			                    						$no_of_products = 0;

			                    						if(count($plan_products) > 0)
			                    						{
			                    							$no_of_products = array_sum(array_column($plan_products, 'quantity'));
			                    						}
	                        						?>
			                    					<?= $no_of_products ?>
			                    				</p>
			                    			</div>
			                    		</div> -->
			                    		<!-- <div class="row collapse" id="collapse<?= $plan->id ?>"  aria-labelledby="heading<?= $plan->id ?>" data-parent="#accordion">
			                    			<div class="col-9 offset-3 text-left pt-2">
			                    				<?php 
			                    					if($no_of_products > 0) {
			                    						foreach ($plan_products as $key => $plan_product) {
			                    							if($plan_product['quantity'] && $plan_product['name']) {
			                    				?>
						            				<p class="product_text mb-0"><span><?= $plan_product['quantity'] ?></span> - <?= $plan_product['name'] ?></p>

			                    				<?php } } } else { ?>
			                    					<p>No products found!!</p>
			                    				<?php } ?>
						            		</div>
			                    		</div> -->
			                    	<!-- </li> -->
			                    </ul>
		                    </div>
		                </div>
		                <div class="table-footer d-flex align-items-center justify-content-center">
		                	<?php if(!empty($my_franchise_plan) && ! in_array($plan->id, $my_franchise_plan)) { ?>
		                		<!-- <a href="javascript:void(0);" data-url="<?= base_url('membership_callback/stripe_payment/doPayment/'. $plan->id) ?>" class="text-white do_payment">Select</a> -->
		                		<a href="javascript:void(0);" data-url="<?= base_url('membership_callback/fomo/doPayment/'. $plan->id) ?>" class="text-white do_payment">Select</a>
		                	<?php } else { ?>
		                		<a href="javascript:void(0);" class="text-white">Subscribed</a>
		                	<?php } ?>
		                </div>
		            </div>
		        </div>
		        <div class="other_benefit_block">
		        	<p class="title">BIGG Benefits</p>
		        	<div class="benefit_text text-left">
		        		<?= $plan->other_benefits ?>
		        	</div>
		        </div>
		    </div>
		<?php } ?>
	</div>
</div>

<script type="text/javascript">

	$(document).ready(function() {
		$('.plan_list_block').slick({
			centerMode: true,
			centerPadding: '60px',
			slidesToShow: 4,
			infinite: false,
			responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '5px',
			        slidesToShow: 1,
			        infinite: false,
			      }
			    }
		    ]
      	});

      	$('.do_payment').on('click', function(e) {
      		e.preventDefault();

      		<?php
      			$this->session->set_userdata('user_franchise_plan_purchase', [
					'back_url' => base_url('usercontrol/franchise_plan'),
					'success_url' => base_url('usercontrol/franchise_plan'),
					'from_page' => 'franchise_plan'
				]);
      		?>

      		window.location.href = $(this).data('url');
      	});
	});
</script>