<?php foreach ($lists as $key => $value) { ?>
	<tr>
		<td><?= $value->id ?></td>
		<td><?= isset($value->user->firstname) ? $value->user->firstname . ' ' . $value->user->lastname : '' ?></td>
		<td><?= isset($value->user->email) ? $value->user->email : '' ?></td>
		<td><?= isset($value->receiver->firstname) ? $value->receiver->firstname . ' ' . $value->receiver->lastname : '' ?></td>
		<td><?= isset($value->receiver->email) ? $value->receiver->email : '' ?></td>
		<td><?= c_format($value->amount) ?></td>
		<td><?= $value->created_at ?></td>
		<!-- <td class="text-right">
			<a href="<?= base_url('admincontrol/withdrawal_requests_details/'. $value['id']) ?>" class="btn btn-primary btn-sm">View</a>
		</td> -->
	</tr>
<?php  } ?>