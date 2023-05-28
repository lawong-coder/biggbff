<div class="transaction_details_page with_curve_page new_member_page">
	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title m-0">Purchase Details</h5>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><b>ID:</b> <?= $plan->id ?></li>
					<li class="list-group-item"><b>Plan Name:</b> <?= ($plan->plan ? $plan->plan->name : '') ?></li>
					<li class="list-group-item"><b>Payment Amount:</b> <?= c_format($plan->total) ?></li>
					<!-- <li class="list-group-item"><b>Type:</b> <?= ($plan->plan ? $plan->plan->type : '') ?></li>
					<li class="list-group-item"><b>Is Active:</b> <?= $plan->active_text ?></li> -->
					<li class="list-group-item"><b>Payment Status:</b> <?= $plan->status_text ?></li>
					<li class="list-group-item"><b>Payment Method:</b> <?= $plan->payment_method ?></li>
					<?php if($plan->status_id == 1) { ?>

						<?php if(!$plan->is_lifetime) { ?>

							<li class="list-group-item"><b>Remaining Time:</b> <span data-time-remains="<?= $plan->strToTimeRemains(); ?>"><?= $plan->remainDay() ?></span></li>

						<?php } ?>

						<li class="list-group-item"><b>Purchased On:</b> <?= dateFormat($plan->started_at,'d F Y, h:i A'); ?></li>

						<?php if(!$plan->is_lifetime) { ?>

							<li class="list-group-item"><b>Ending On:</b> <?= dateFormat($plan->expire_at,'d F Y, h:i A'); ?></li>

						<?php } ?>

					<?php } ?>



					<!-- <li class="list-group-item"><b>Created at:</b> <?= dateFormat($plan->created_at, 'd F Y, h:i A') ?></li> -->
					<?php
						$transaction_id = '';
						if(!empty($plan->payment_details))
						{
							$payment_details = json_decode($plan->payment_details, true);
							$transaction_id = isset($payment_details['transaction_id']) ? $payment_details['transaction_id'] : '';
						}
					?>
					<li class="list-group-item"><b>Transaction Id:</b> <?= $transaction_id ?></li>

				</ul>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title m-0">Plan Details</h5>
				</div>
	    		<ul class="list-group list-group-flush">
	                <li class="list-group-item"><b>Plan Name:</b> <?= $plan->plan->name ?></li>
	                <li class="list-group-item"><b>Plan Description:</b> <?= $plan->plan->description ?></li>
	                <li class="list-group-item"><b>Plan Cost (One-Time):</b> <?= ($plan->plan->special ? $plan->plan->special : $plan->plan->price) ?></li>
	                <li class="list-group-item"><b>Hosting Cost (Monthly):</b> <?= $plan->plan->hosting_cost ? $plan->plan->hosting_cost : 0 ?></li>
	                <!-- <li class="list-group-item"><b>Bigg Coupons:</b> <?= $plan->plan->bigg_coupon ?></li> -->
	                <li class="list-group-item"><b>Maturity Rewards:</b> <?= $plan->plan->fego_shares ?></li>
	                <li class="list-group-item"><b>Total Lifestyle Products:</b>
	                	<?php
			                $plan_products = (isset($plan->plan->products) && !empty($plan->plan->products)) ? json_decode($plan->plan->products, true) : [];
			            ?>
			            <?php 
        					if(count($plan_products) > 0) {
        						foreach ($plan_products as $key => $plan_product) {
        							if($plan_product['quantity'] && $plan_product['name']) {
        				?>
            				<p class="product_text mb-0"><span><?= $plan_product['quantity'] ?></span> x <?= $plan_product['name'] ?></p>

        				<?php } } } else { ?>
        					<p>No products found!!</p>
        				<?php } ?>
	                </li>
	                <li class="list-group-item"><b>Other Benefits:</b> <?= $plan->plan->other_benefits ?></li>
	            </ul>
			</div>

			<!-- <div class="card mt-3">
				<div class="card-header">
					<h5 class="card-title m-0">Status History</h5>
				</div>
	    		<div class="card-body m-0 p-0">
	    			<div class="table-responsive">
	    				<table class="table table-striped">
		    				<thead>
		    					<tr>
		    						<td width="100px">Status</td>
		    						<td>Note</td>
		    					</tr>
		    				</thead>
		    				<tbody>
		    					<?php foreach ($history as $key => $value) { ?>
		    						<tr>
		    							<td><?= $value->status_text ?></td>
		    							<td><?= $value->comment ?></td>
		    						</tr>
		    					<?php } ?>
		    				</tbody>
		    			</table>
	    			</div>
	    		</div>
			</div> -->
		</div>
		<?php if($this->session->flashdata('success')){?>
			<div class="col-sm-12 m-t-10 text-center">
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?> </div>
			</div>
		<?php } ?>
		<?php if($this->session->flashdata('error')){?>
			<div class="col-sm-12 m-t-10 text-center">
				<div class="alert alert-danger"> <?php echo $this->session->flashdata('error'); ?> </div>
			</div>
		<?php } ?>
	</div>
</div>

<script type="text/javascript">
    $(function() {
        start_plan_expiration_timer();
    });
</script>