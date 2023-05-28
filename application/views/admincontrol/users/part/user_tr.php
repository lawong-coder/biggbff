<?php $k=1; foreach($userslist as $users){  ?>

    <?php
        if(empty($users['amount'])){

            $users['amount'] = 0;

        }

        if(empty($users['click'])){

            $users['click'] = 0;

        }

        if(empty($users['af_click'])){

            $users['af_click'] = 0;

        }

    ?>

	<tr>

	    <td payment_detail="<?php echo $users['id'] ?>">

	    	<!-- <label class="checkbox-label">

				<input type="checkbox" class="wallet-checkbox" value="<?= $users['id'] ?>">

				<?= $users['id'] ?>		

			</label>

	    	<i class="fa fa-plus" aria-hidden="true" data-toggle="collapse" data-target="#demo1<?= $k; ?>" class="accordion-toggle"></i> -->

	    	<?= $users['id'] ?>

	    </td>
	    <td payment_detail="<?php echo $users['id'] ?>"><?php echo $users['firstname'];?></td>
	    <td payment_detail="<?php echo $users['id'] ?>"><?php echo $users['lastname'];?></td>
		<td payment_detail="<?php echo $users['id'] ?>"><?= $users['username'];?></td>
		<td payment_detail="<?php echo $users['id'] ?>"><?= $users['email'];?></td>
		<td payment_detail="<?php echo $users['id'] ?>">
			<?php 
				$customValue = (isset($users['value']) && !empty($users['value'])) ? json_decode($users['value'], 1) : [];
				$mobile_field = 'custom_text-1611314653157';
				$mobile_value = isset($customValue[$mobile_field]) ? $customValue[$mobile_field] : '';

				echo $mobile_value;
			?>
		</td>
		<td payment_detail="<?php echo $users['id'] ?>">
			<?= ($users['reg_approved'] == 1) ? 'Active' : 'Pending' ?>
			<!-- <?php

				if($users['reg_approved'] == 0) {
					echo '<i>Approval Pending</i>';
				} else if($users['reg_approved'] == 2) {
					echo '<i>Approval Declined</i>';
				} else {
					if($users['membership_plan']) {
						echo $users['membership_plan']."<br/>";	
						if((int)$users['membership_plan_id'] > 0){ 
							$plan = App\MembershipUser::find($users['membership_plan_id']);
							if($plan){
								echo "<small>".$plan->remainDay()."</small>"; 
							}
						}
					} else {
						echo '<i>Plan not purchased!</i>';						
					}
				}
			?>

			<?php if($users['reg_approved'] != 0 && $users['reg_approved'] != 2) { ?>
				<div><a href="javascript:void(0)" edit-plan-user='<?= $users['id'] ?>'>Edit Plan</a></div>
			<?php } else { ?>
			<div>
				<a href="javascript:void(0)" class="text-success" data-approval-change="1" data-user-id='<?= $users['id'] ?>'>Approve</a> 
				<?php if($users['reg_approved'] != 2) { ?>
					/ <a href="javascript:void(0)" class="text-danger" data-approval-change="2" data-user-id='<?= $users['id'] ?>'>Decline</a>
				<?php } ?>
			</div>
			<?php } ?> -->
		</td>

		<td payment_detail="<?php echo $users['id'] ?>">
			<?= ($users['membership_plan']) ? $users['membership_plan'] : '-' ?>
			<!-- <?php
				if (isset($plan) && $plan) { 
					echo $plan->status_text; 
				} else {
					echo '<span class="badge badge-light">Not Available</span>';
				}  
			?> -->
		</td>

		<td payment_detail="<?php echo $users['id'] ?>">
			<?= $users['created_at'] ?>
			<!-- <?php

				if ($users['Country'] != '') {

					$flag = 'flags/' . strtolower($users['sortname']) . '.png';

				} else {

					$flag = 'users/avatar-1.png';

				}

			?>

			<img class="rounded-circle" src="<?php echo base_url(); ?>assets/vertical/assets/images/<?php echo $flag; ?>" style="width:30px;height: 30px"> -->

        </td>

		<td payment_detail="<?php echo $users['id'] ?>">
			<?php echo (!empty($users['under_affiliate'])) ? $users['under_affiliate'] : Admin ;?>
		</td>

		<td>

			<!-- <a data-toggle="tooltip" data-original-title="View Downline" href="<?= base_url('admincontrol/downline/'. $users['id']) ?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i> </a>

			<button data-toggle="tooltip" data-original-title="Quick View Downline" data-id="<?php echo $users['id'] ?>" class="btn show-tree btn-info btn-sm"> <i class="fa fa-sitemap"></i> </button> -->

			<button data-toggle="tooltip" data-original-title="Payment Details" class="btn btn-sm btn-primary " payment_detail="<?php echo $users['id'] ?>"><i class="fa fa-eye"></i></button>
			
			<a data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure you want to Edit?');" href="<?php echo base_url();?>admincontrol/addusers/<?php echo $users['id'];?>"><i class="fa fa-edit cursors" aria-hidden="true"></i></a>

			<!-- <button data-toggle="tooltip" data-original-title="Payment Details" class="btn btn-sm btn-primary " payment_detail="<?php echo $users['id'] ?>"><i class="fa fa-info-circle" aria-hidden="true"></i></button> -->

			<!-- <button data-toggle="tooltip" data-original-title="Send Mail" class="btn btn-sm btn-primary" email-to="<?php echo $users['email'] ?>"><i class="fa fa-envelope-o cursors" aria-hidden="true"></i></button> -->

			<!-- <button data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm btn-danger btn-delete2" data-id="<?php echo $users['id'] ?>"><i class="fa fa-trash-o cursors" aria-hidden="true"></i></button>

			<?php if($users['status']){ ?>

				<a data-toggle="tooltip" data-original-title="Disable Status" href="<?= base_url('admincontrol/u_status_toggle/' . $users["id"]) ?>" class="btn btn-remove btn-primary btn-sm"><i class="fa fa-lock"></i></a>

			<?php } else { ?>

				<a data-toggle="tooltip" data-original-title="Enable Status" href="<?= base_url('admincontrol/u_status_toggle/' . $users["id"]) ?>" class="btn btn-remove btn-danger  btn-sm"><i class="fa fa-unlock"></i></a>

			<?php } ?> -->

		</td>

	</tr>

	<tr class="accordian-body collapse" id="demo1<?= $k; ?>">

		<td colspan="100%" class="hiddenRow">

			<div class="card m-2 p-2">

			    <div class="row">

					<div class='col-sm-4 col-md-3'><b><?= __('admin.clicks') ?>:</b> <?php echo (int)$users['click'] + (int)$users['external_click'] + (int)$users['form_click']+ (int)$users['aff_click']; ?> / <?php echo c_format($users['click_commission']) ?></div>

					<div class='col-sm-4 col-md-3'><b><?= __('admin.action_click') ?>:</b> <?= (int)$users['external_action_click'] ?> / <?= c_format($users['action_click_commission']) ?></div>

					<div class='col-sm-4 col-md-3'><b><?= __('admin.sales_commissions') ?>:</b> <?php echo c_format($users['amount'] + $users['external_sale_amount']); ?> / <?php echo c_format($users['sale_commission']); ?></div>

					<div class='col-sm-4 col-md-3'><b><?= __('admin.paid_comm') ?>:</b> <?php echo c_format($users['paid_commition']); ?></div>

					<div class='col-sm-4 col-md-3'><b><?= __('admin.in_request') ?>:</b>	<?php echo c_format($users['in_request_commiton']); ?></div>

					<div class='col-sm-4 col-md-3'><b><?= __('admin.total') ?> <?= __('admin.commissions') ?>:</b> <?php echo c_format($users['all_commition']); ?></div>

					<?php foreach ($data as $key => $value) { if($value['type'] == 'header') continue; ?>
						<div class='col-sm-4 col-md-3'>
							<b><?= $value['label'] ?>:</b> <?php echo $v['custom_'.$value['name']] ?>
						</div>
					<?php } ?>

				</div>

			</div>

		</td>

	</tr>

<?php $k++; } ?>