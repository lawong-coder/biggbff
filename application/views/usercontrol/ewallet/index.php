<div class="ewallet_page new_member_page">
	<?php if(isset($user) && !empty($user)) { ?>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-lg-6 mx-auto top-row-block">
				<div class="top-info-block">
					<div class="card mx-auto shadow">
						<img class="card-img-top" src="<?php echo base_url('assets/images/bg_ewallet.png'); ?>">
						<div class="card-img-overlay d-flex flex-column">
							<div class="text-white d-flex align-items-center mb-2">
						 		<h5 class="card-title"><?= $user['firstname'] . " " . $user['lastname']; ?></h5>
						 		<span class="ml-auto"><a class="view_link" href="<?= base_url('usercontrol/transaction_history/') ?>">View</a></span>
						 	</div>
							<div class="text-white d-flex flex-grow-1 align-items-end">
						 		<p class="bottom_left1_text">SGD <br> <span class="bottom_left2_text"><?= isset($user->eWallet) ? round_to_2dp($user->eWallet->balance) : 0; ?></span></p>
						 		<img class="image-fluid ml-auto low_opacity" src="<?php echo base_url('assets/images/bff_logo.png'); ?>">
						 	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="row action_btn_block">
		<div class="col-6 btn1">
			<a href="<?php echo base_url('usercontrol/transfer_request_create');?>" class="btn transfer_btn">
				<img src="<?= base_url('assets/images/transfer_icon.png') ?>" class="img-responsive icon_image" />  Transfer
			</a>
		</div>
		<div class="col-6 btn2">
			<a href="<?php echo base_url('usercontrol/withdraw_request_create');?>" class="btn withdraw_btn">
				<img src="<?= base_url('assets/images/withdraw_icon.png') ?>" class="img-responsive icon_image" />  Withdraw
			</a>
		</div>
	</div>
	<div class="balance_list">
		<?php if(isset($user_bigg_coin) && ($user_bigg_coin > 0)) { ?>
			<!-- <div class="row list_block">
				<div class="col-3 d-flex align-items-center justify-content-center">
					<img src="<?= base_url('assets/images/bigg_coins_img.png') ?>" class="img-responsive" />
				</div>
				<div class="col-7 text-left text-white">
					<p class="top-text1">Bigg Coin</p>
					<p class="bottom-text1 m-0">BIGG</p>
					<p class="bottom-text2 m-0"><?= isset($user_bigg_coin) ? number_format($user_bigg_coin) : 0; ?></p>
				</div>
				<div class="col-2 d-flex align-items-center justify-content-center">
					<img src="<?= base_url('assets/images/bff_logo_type2.png') ?>" class="img-responsive low_opacity" />
				</div>
			</div> -->
		<?php } ?>
		<!-- <div class="row list_block">
			<div class="col-3 d-flex align-items-center justify-content-center">
				<img src="<?= base_url('assets/images/bigg_coupons_img.png') ?>" class="img-responsive" />
			</div>
			<div class="col-7 text-left text-white">
				<p class="top-text1">Product Points (PP)</p>
				<p class="bottom-text1 m-0"></p>
				<p class="bottom-text2 m-0"><?= isset($user_bigg_coupon) ? number_format($user_bigg_coupon) : 0; ?></p>
			</div>
			<div class="col-2 d-flex align-items-center justify-content-center">
				<img src="<?= base_url('assets/images/bff_logo_type2.png') ?>" class="img-responsive low_opacity" />
			</div>
		</div> -->
		<!-- <div class="row list_block">
			<div class="col-3 d-flex align-items-center justify-content-center">
				<img src="<?= base_url('assets/images/share_credits.png') ?>" class="img-responsive" />
			</div>
			<div class="col-9 text-left text-white">
				<p class="top-text1">Maturity Rewards</p>
				<p class="bottom-text1 m-0"></p>
				<p class="bottom-text2 m-0"><?= isset($user_share_credits) ? number_format($user_share_credits) : 0; ?></p>
			</div>
		</div> -->
		<!-- <div class="list_block">
			<div class="row">
				<div class="col-3 d-flex align-items-center justify-content-center">
					<img src="<?= base_url('assets/images/lifestyle_products.png') ?>" class="img-responsive" />
				</div>
				<div class="col-9 text-left text-white">
					<p class="top-text1 product_list" data-toggle="collapse" data-target="#collapse_products" aria-expanded="false" aria-controls="collapse_products">Promotion Bonus (PB)</p>
					<p class="bottom-text1 m-0"></p>

					<p class="bottom-text2 m-0"><?= isset($user_product_balance['total']) ? $user_product_balance['total'] : 0; ?></p>
				</div>
			</div>
			<div class="row collapse" id="collapse_products" aria-labelledby="heading_products" data-parent="#accordion">
	    		<div class="col-9 offset-3 text-left text-white pt-2">
					<?php 
						if(count($user_product_balance['products']) > 0) {
							foreach ($user_product_balance['products'] as $key => $plan_products) {
								foreach ($plan_products as $key => $plan_product) {
									if($plan_product['quantity'] && $plan_product['name']) {
					?>
	    				<p class="product_text mb-0"><span><?= $plan_product['quantity'] ?></span> - <?= $plan_product['name'] ?></p>

					<?php } } } } else { ?>
						<p>No products found!!</p>
					<?php } ?>
	    		</div>
	    	</div>
			
		</div> -->
	</div>
</div>