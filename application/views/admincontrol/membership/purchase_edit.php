<?php print_message($this); ?>

<div class="row">

	<div class="col-sm-6">

		<div class="card mb-2">

			<div class="card-header">

				<h5 class="card-title m-0">Purchase Details</h5>

			</div>

			<ul class="list-group list-group-flush">

				<li class="list-group-item"><b>ID:</b> <?= $plan->id ?></li>

				<li class="list-group-item"><b>Plan Name:</b> <?= ($plan->plan ? $plan->plan->name : '') ?></li>

				<li class="list-group-item"><b>Payment Amount:</b> <?= c_format($plan->total) ?></li>

				<li class="list-group-item"><b>Payment Status:</b> <?= ($plan->status_id == 1) ? '<span class="badge '. App\MembershipPlan::$status_color[$plan->status_id] .'">Paid</span>' : $plan->status_text ?></li>

				<li class="list-group-item"><b>Payment Method:</b> <?= $plan->payment_method ?></li>

				<?php if($plan->status_id == 1) { ?>

					<?php if(!$plan->is_lifetime) { ?>

					<li class="list-group-item"><b>Remaining Time:</b> <?= $plan->remainDay(); ?></li>

					<?php } ?>

					<li class="list-group-item"><b>Purchased On:</b> <?= dateFormat($plan->started_at,'d F Y, h:i A'); ?></li>

					<?php if(!$plan->is_lifetime) { ?>

					<li class="list-group-item"><b>Ending On:</b> <?= dateFormat($plan->expire_at,'d F Y, h:i A'); ?></li>

					<?php } ?>

				<?php } ?>

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



		

		<?php if(!$plan->is_lifetime && $plan->status_id == 1) { ?>

		<div class="card mb-2">

			<div class="card-header">

				<h5 class="card-title m-0">Edit Plan</h5>

			</div>

			<div class="card-body">

				<form id="plan-form">

					<div class="form-group">

						<label class="form-control-label">Expire On</label>

						<input type="text" value="<?= dateFormat($plan->expire_at,'d-m-Y H:i') ?>" name="expire_at" class='form-control datepicker'>

					</div>

				</form>

			</div>

			<div class="card-footer text-right">

				<button class="btn btn-save-plan btn-primary btn-sm">Save Plan</button>

			</div>

		</div>

		<?php } ?>

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

                <li class="list-group-item"><b>Bigg Coupons:</b> <?= $plan->plan->bigg_coupon ?></li>

                <li class="list-group-item"><b>Share Credits:</b> <?= $plan->plan->fego_shares ?></li>

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

	    			<div class="card-body border-top">

	    				<h6 class="mt-0 text-primary">Status History</h6>

	    				<div class="add-history">

	    					<div class="form-group">

		    					<label class="form-control-label">Status</label>

		    					<select class="form-control" name="status_id">

		    						<option value="">Select Status</option>

		    						<?php foreach (App\MembershipPlan::$status_list as $key => $value) { ?>

		    							<option value="<?= $key ?>"><?= $value ?></option>

		    						<?php } ?>

		    					</select>

		    				</div>

		    				<div class="form-group">

		    					<label class="form-control-label">Comment</label>

		    					<textarea class="form-control" name="comment"></textarea>

		    				</div>

		    				<div class="form-footer text-right">

		    					<button type="button" class="btn-add-commnet btn btn-primary">Add History</button>

		    				</div>

	    				</div>

	    			</div>

    			</div>

    		</div>

		</div> -->

	</div>

</div>



<link href="<?php echo base_url('assets/css/datepicker.css'); ?>" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>



<script type="text/javascript">

	$(".datepicker").datetimepicker({ 

        autoclose: true, 

        todayHighlight: true,

		showSecond: true,

        format:"d-m-Y H:m"

    })



	$(".btn-save-plan").click(function(){

		$this = $(this);

		$.ajax({

			url:'<?= base_url("membership/submit_plan_update/". $plan->id) ?>',

			type:'POST',

			dataType:'json',

			data:$("#plan-form").serialize(),

			beforeSend:function(){$this.btn("loading");},

			complete:function(){$this.btn("reset");},

			success:function(json){

				$container = $("#plan-form");

				$container.find(".is-invalid").removeClass("is-invalid");

				$container.find("span.invalid-feedback").remove();

		

				if (json['location']) {

					window.location.href= json['location'];

				}

				

				if(json['errors']){

				    $.each(json['errors'], function(i,j){

				        $ele = $container.find('[name="'+ i +'"]');

				        if($ele){

				            $ele.addClass("is-invalid");

				            if($ele.parent(".input-group").length){

				                $ele.parent(".input-group").after("<span class='invalid-feedback'>"+ j +"</span>");

				            } else{

				                $ele.after("<span class='invalid-feedback'>"+ j +"</span>");

				            }

				        }

				    })

				}

			},

		})

	})



	$(".btn-add-commnet").click(function(){

		$this = $(this);

		$.ajax({

			url:'?addhistory=true',

			type:'POST',

			dataType:'json',

			data:$(".add-history :input"),

			beforeSend:function(){$this.btn("loading");},

			complete:function(){$this.btn("reset");},

			success:function(json){

				$container = $(".add-history");

				$container.find(".is-invalid").removeClass("is-invalid");

				$container.find("span.invalid-feedback").remove();

		

				if (json['reload']) {

					window.location.reload();

				}

				

				if(json['errors']){

				    $.each(json['errors'], function(i,j){

				        $ele = $container.find('[name="'+ i +'"]');

				        if($ele){

				            $ele.addClass("is-invalid");

				            if($ele.parent(".input-group").length){

				                $ele.parent(".input-group").after("<span class='invalid-feedback'>"+ j +"</span>");

				            } else{

				                $ele.after("<span class='invalid-feedback'>"+ j +"</span>");

				            }

				        }

				    })

				}

			},

		})

	})

</script>