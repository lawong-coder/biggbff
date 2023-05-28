<?php print_message($this); ?>
<div class="row">

    <div class="col-12">

        <form id="form_plan">

            <div class="row">

                <div class="col-sm-12">

                    <div class="card m-b-30">

                        <div class="card-header">

                        	<h4 class="header-title pull-left m-0">Plans</h4>

                        	<?php/* <a href="<?=  base_url('membership/plan_create') ?>" class="btn btn-sm btn-primary pull-right">Create New</a> */ ?>

                        </div>

                        <div class="card-body p-0">



                        	<div class="table-responsive m-0">

	                        	<table class="table table-striped">

	                        		<thead>

	                        			<tr>

	                        				<th width="1">ID</th>

	                        				<th>Belt Name</th>

	                        				<th>Belt Size</th>

	                        				<th>Package Price</th>

	                        				<th>Hosting Cost</th>

	                        				<th>Maturity Rewards (MR)</th>

	                        				<th>Product Points (PP)</th>
	                        				
	                        				<th>Promotion Bonus (PB)</th>

	                        				<th width="180px">Updated at</th>

	                        				<th width="180px">Action</th>

	                        			</tr>

	                        		</thead>

	                        		<tbody>

	                        			<?php if(count($plans) == 0){ ?>

			                        		<tr>

			                        			<td colspan="100%" class="text-center">No records found...</td>

			                        		</tr>

			                        	<?php } ?>

	                        			<?php foreach ($plans as $key => $plan) { ?>

	                        				<tr>

	                        					<td><?= $plan->id ?></td>

	                        					<td><?= $plan->name ?></td>

	                        					<td><?= $plan->belt_size ?></td>

	                        					<td><?= c_format($plan->price) ?></td>

	                        					<td><?= c_format($plan->hosting_cost) ?></td>

	                        					<td><?= $plan->fego_shares ?></td>

	                        					<td><?= $plan->bigg_coupon ?></td>
	                        					
	                        					<td>
	                        						<?php
	                        							$plan_products = (isset($plan->products) && !empty($plan->products)) ? json_decode($plan->products, true) : []	;

	                        							$no_of_products = 0;

			                    						if(count($plan_products) > 0)
			                    						{
			                    							$no_of_products = array_sum(array_column($plan_products, 'quantity'));
			                    						}
	                        						?>
	                        						<?= $no_of_products ?>
	                        					</td>

	                        					<td><?= dateFormat($plan->updated_at) ?></td>

	                        					<td>

	                        						<a href="<?= base_url('membership/plan_edit/'. $plan->id) ?>" class="btn btn-sm btn-primary">Edit</a>

	                        						<!-- <a href="javascript:void(0)" onclick="delete_confirm('<?= base_url('membership/plan_delete/'. $plan->id) ?>')" class="btn btn-sm btn-danger">Delete</a> -->

	                        					</td>

	                        				</tr>

	                        			<?php } ?>

	                        		</tbody>

	                        	</table>

                        	</div>

                        </div>

                        <?php if($links){ ?>

	                        <div class="card-footer text-right">

	                        	<div class="pull-left">

	                        		<?= $links[1] ?>

	                        	</div>

	                        	<div class="pull-right">

		                        	<ul class="pagination m-0"><?= $links[0] ?></ul>

		                        </div>

	                        </div>

                       <?php } ?>

                    </div>

                </div>

            </div>

        </form>

    </div> 

</div>



<script type="text/javascript">

	function delete_confirm(url) {

		Swal.fire({

			title: 'Are you sure?',

			text: "You won't be able to revert this!",

			icon: 'warning',

			showCancelButton: true,

			confirmButtonText: 'Yes, delete it!',

			cancelButtonText: 'No, cancel!',

			reverseButtons: true

		}).then((result) => {

			if (result.value) {

				window.location.href = url;

			}

		})

		return false;

	}

</script>