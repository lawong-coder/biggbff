<?php print_message($this); ?>

<div class="row">

    <div class="col-12">

        <form id="form_plan">

            <div class="row">

                <div class="col-sm-12">

                    <div class="card m-b-30">

                        <!-- <div class="card-header">

                        	<h4 class="header-title pull-left m-0">Franchise Belts</h4>

                        </div> -->

                        <div class="card-body p-0">



                        	<div class="table-responsive m-0">

	                        	<table class="table table-striped">

	                        		<thead>

	                        			<tr>

	                        				<th>Belt Name</th>

	                        				<th>Franchise Fees (One-Time)</th>

	                        				<th>Hosting Cost (Monthly)</th>

	                        				<th>Belt Size</th>

	                        				<th>In-queue Users</th>

	                        				<th>Exited Users</th>

	                        				<th width="180px">View Belt</th>

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
	                        					<?php
		                        					/*$inqueue_users = App\MembershipUser::select('id', 'user_id')->where('plan_id', $plan->id)->where('status_id', 1)->get()->unique('user_id')->count();

		                        					$exited_users = 0;
		                        					if($inqueue_users > $plan->belt_size)
		                        					{
		                        						$exited_users = ($inqueue_users - $plan->belt_size) + 1;
		                        						$inqueue_users = $plan->belt_size - 1;
		                        					}*/

		                        					$inqueue_users = App\MembershipUser::select('id', 'user_id', 'plan_id', 'created_at')->where('plan_id', $plan->id)->where('status_id', 1)->get()->unique('user_id')->where('percentage_rank', '<', 100)->count();

		                        					$exited_users = App\MembershipUser::select('id', 'user_id', 'plan_id', 'created_at')->where('plan_id', $plan->id)->where('status_id', 1)->get()->unique('user_id')->where('percentage_rank', '>=', 100)->count();
	                        					?>
	                        					<td><?= $plan->name ?></td>

	                        					<td><?= c_format($plan->price) ?></td>
	                        					
	                        					<td><?= c_format($plan->hosting_cost) ?></td>

	                        					<td><?= $plan->belt_size ?></td>

	                        					<td><?= $inqueue_users ?></td>


	                        					<td><?= $exited_users ?></td>

	                        					<td>
	                        						<a data-toggle="tooltip" data-original-title="View Belt" href="<?= base_url('admincontrol/belt/'.$plan->id); ?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i> </a>

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