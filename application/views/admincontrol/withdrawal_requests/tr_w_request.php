<?php foreach ($lists as $key => $value) { ?>
	<tr>
		<td><?= $value['id'] ?></td>
		<td><?= $value['firstname'] ?></td>
		<td><?= $value['lastname'] ?></td>
		<td><?= $value['username'] ?></td>
		<td><?= $value['email'] ?></td>
		<td><?= $value['user_joined_date'] ?></td>
		<td><?= c_format($value['amount']) ?></td>
		<td><?= $value['created_at'] ?></td>
		<td><?= new_withdrwal_status($value['status']) ?></td>
		<td><?= $value['date'] ?></td>
		<td class="text-right">
			<a href="<?= base_url('admincontrol/withdrawal_requests_details/'. $value['id']) ?>" class="btn btn-primary btn-sm">View</a>
			<!-- <button id='<?= $value['id'] ?>' class="btn btn-danger btn-sm btn-deletes">Delete</button> -->
		</td>
	</tr>
<?php  } ?>