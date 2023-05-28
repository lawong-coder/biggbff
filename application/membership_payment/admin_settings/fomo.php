<div class="form-group">
	<label class="control-label">MID</label>
	<input class="form-control" name="mid" value="<?= $setting_data['mid'] ?>">
</div>

<div class="form-group">
	<label class="control-label">TID</label>
	<input class="form-control" name="tid" value="<?= $setting_data['tid'] ?>">
</div>

<div class="form-group">
	<label class="control-label">Pre-Shared Key (PSK)</label>
	<input class="form-control" name="psk" value="<?= $setting_data['psk'] ?>">
</div>

<!-- <div class="form-group">
	<label class="control-label">Order Success Status</label>
	<select name="order_success_status" class="form-control">
		<?php foreach ($status_list as $order_status_id => $name) { ?>
			<?php if ($order_status_id == $setting_data['order_success_status']) { ?>
				<option value="<?php echo $order_status_id; ?>" selected="selected"><?= $name ?></option>
			<?php } else { ?>
				<option value="<?php echo $order_status_id; ?>"><?= $name ?></option>
			<?php } ?>
		<?php } ?>
	</select>
</div>

<div class="form-group">
	<label class="control-label">Order Failed Status</label>
	<select name="order_failed_status" class="form-control">
		<?php foreach ($status_list as $order_status_id => $name) { ?>
			<?php if ($order_status_id == $setting_data['order_failed_status']) { ?>
				<option value="<?php echo $order_status_id; ?>" selected="selected"><?= $name ?></option>
			<?php } else { ?>
				<option value="<?php echo $order_status_id; ?>"><?= $name ?></option>
			<?php } ?>
		<?php } ?>
	</select>
</div> -->

<div class="form-group">
	<label class="control-label">Denied Status</label>
	<div class="">
		<select name="denied_status_id" class="form-control">
			<?php foreach ($status_list as $status_id => $name) { ?>
				<?php if ($status_id == $setting_data['denied_status_id']) { ?>
					<option value="<?php echo $status_id; ?>" selected="selected"><?= $name ?></option>
				<?php } else { ?>
					<option value="<?php echo $status_id; ?>"><?= $name ?></option>
				<?php } ?>
			<?php } ?>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label">Pending Status</label>
	<div class="">
		<select name="pending_status_id" class="form-control">
			<?php foreach ($status_list as $status_id => $name) { ?>
				<?php if ($status_id == $setting_data['pending_status_id']) { ?>
					<option value="<?php echo $status_id; ?>" selected="selected"><?= $name ?></option>
				<?php } else { ?>
					<option value="<?php echo $status_id; ?>"><?= $name ?></option>
				<?php } ?>
			<?php } ?>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label">Processing Status</label>
	<div class="">
		<select name="processing_status_id" class="form-control">
			<?php foreach ($status_list as $status_id => $name) { ?>
				<?php if ($status_id == $setting_data['processing_status_id']) { ?>
					<option value="<?php echo $status_id; ?>" selected="selected"><?= $name ?></option>
				<?php } else { ?>
					<option value="<?php echo $status_id; ?>"><?= $name ?></option>
				<?php } ?>
			<?php } ?>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label">Success Status</label>
	<div class="">
		<select name="success_status_id" class="form-control">
			<?php foreach ($status_list as $status_id => $name) { ?>
				<?php if ($status_id == $setting_data['success_status_id']) { ?>
					<option value="<?php echo $status_id; ?>" selected="selected"><?= $name ?></option>
				<?php } else { ?>
					<option value="<?php echo $status_id; ?>"><?= $name ?></option>
				<?php } ?>
			<?php } ?>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label">Canceled Status</label>
	<div class="">
		<select name="canceled_status_id" class="form-control">
			<?php foreach ($status_list as $status_id => $name) { ?>
				<?php if ($status_id == $setting_data['canceled_status_id']) { ?>
					<option value="<?php echo $status_id; ?>" selected="selected"><?= $name ?></option>
				<?php } else { ?>
					<option value="<?php echo $status_id; ?>"><?= $name ?></option>
				<?php } ?>
			<?php } ?>
		</select>
	</div>
</div>