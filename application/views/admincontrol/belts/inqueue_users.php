<?php print_message($this); ?>

<div class="row">

    <div class="col-12">

        <form id="form_plan">

            <div class="row">

                <div class="col-sm-12">

                    <div class="card m-b-30">

                        <!-- <div class="card-header">

                        	<h4 class="header-title pull-left m-0">Inqueue Users</h4>

                        </div> -->

                        <div class="card-body p-0">



                        	<div class="table-responsive m-0">

	                        	<table class="table table-striped">

	                        		<thead>
	                        			<tr>
	                        				<th>Id</th>
	                        				<th>Belt Name</th>
	                        				<th>First Name</th>
	                        				<th>Last Name</th>
	                        				<th>Username</th>
	                        				<th>Email</th>
	                        				<th>Maturity Percentage</th>
											<th>Position</th>
											<th>Joined Date</th>
										    <th>Reffered By</th> 
	                        			</tr>
	                        		</thead>

	                        		<tbody>

	                        			<?php if(count($inqueue_users) == 0){ ?>

			                        		<tr>

			                        			<td colspan="100%" class="text-center">No records found...</td>

			                        		</tr>

			                        	<?php } ?>
			                        	<?php 
			                        		$count = count($inqueue_users);
			                        	?>
	                        			<?php foreach ($inqueue_users as $key => $inqueue_user) { ?>

	                        				<tr>
	                        					<td><?= ($inqueue_user->user) ? $inqueue_user->user->id : '' ?></td>
	                        					<td><?= $plan->name ?></td>
	                        					<td><?=	($inqueue_user->user) ? $inqueue_user->user->firstname : '' ?></td>
	                        					<td><?=	($inqueue_user->user) ? $inqueue_user->user->lastname : '' ?></td>
	                        					<td><?=	($inqueue_user->user) ? $inqueue_user->user->username : '' ?></td>
	                        					<td><?=	($inqueue_user->user) ? $inqueue_user->user->email : '' ?></td>
	                        					<td class="text-center">
	                        						<?php
		            									$completion_rank = $inqueue_user->getCompletionRank();

		            									echo ($completion_rank) ? $completion_rank : 0;
													?>
												</td>
	                        					<td class="text-center"><?= ($count > 0) ? $count : ''; ?></td>
	                        					<td><?= $inqueue_user->started_at ?></td>
	                        					<td>
	                        						<?php 
	                        							$reffered_by = 'Admin';
	                        							if (isset($inqueue_user->user->refid) && !empty($inqueue_user->user->refid))
	                        							{
	                        								$data = $this->db->query("SELECT username FROM users WHERE id='".$inqueue_user->user->refid."'")->row_array();

	                        								$reffered_by = (isset($data['username']) && !empty($data['username'])) ? $data['username'] : 'Admin';
	                        							}

	                        							echo $reffered_by;
	                        						?>
	                        					</td>
	                        				</tr>
	                        				<?php $count-- ?>
	                        			<?php } ?>

	                        		</tbody>

	                        	</table>

                        	</div>

                        </div>

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