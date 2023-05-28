<?php
	$db =& get_instance();
	$userdetails=$db->userdetails();
?>

<div class="row">
    <div class="col-sm-3">
        <div class="dashboard-box box-purple">
            <div class="text"><label class="m-0">Referral Fees</label></div>
            <div class="count"><h6><?= c_format($dashboard_referral_totals->week_ago_referral_fees) ?></h6></div>
            <div class="title">Last 7 Days</div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="dashboard-box box-purple">
            <div class="text"><label class="m-0">Referral Fees</label></div>
            <div class="count"><h6><?= c_format($dashboard_referral_totals->month_ago_referral_fees) ?></h6></div>
            <div class="title">Last 30 Days</div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="dashboard-box box-purple">
            <div class="text"><label class="m-0">Referral Fees</label></div>
            <div class="count"><h6><?= c_format($dashboard_referral_totals->year_ago_referral_fees) ?></h6></div>
            <div class="title">This Year</div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="dashboard-box box-purple">
            <div class="text"><label class="m-0">Referral Fees</label></div>
            <div class="count"><h6><?= c_format($dashboard_referral_totals->all_time_total_referral_fees) ?></h6></div>
            <div class="title">All Time</div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="card border-0">
			<div class="card-header border-top border-left border-right">
				<div class="clearfix">
					<div class="pull-left">
						<h5 class="card-title m-0">Filter Transactions</h5>
					</div>
					<div class="pull-right">
						<button class="filter-toggle btn btn-icon btn-sm btn-default"><i class="fa fa-filter"></i></button>
						<button class="btn btn-danger btn-sm delete-multiple" type="button">Delete Selected <span class="selected-count"></span></button>	
					</div>
				</div>
				<form method="GET" action="<?= base_url('admincontrol/commission_paid') ?>" class="wallet-filter mt-2" style="display: none;">
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<select class="form-control" name="user_id">
									<option value="">Filter By User</option>
									<?php foreach ($users as $key => $value) { ?>
									<option <?= isset($user_id) && $user_id == $value['id'] ? 'selected' : '' ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<input autocomplete="off" type="text" name="date" value="<?= isset($_GET['date']) ? $_GET['date'] : '' ?>" class="form-control daterange-picker" placeholder='Filter By Date'>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<button class="btn btn-primary">Filter</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="card-body p-0">
				
				<div class="text-center1">
					<?php if ($transactions ==null) {?>
						<center>
							<img class="img-responsive mt-5" src="<?php echo base_url('assets/vertical/assets/images/no-data-2.png'); ?>">
							<h3 class="m-t-40 text-center mb-5"><?= __('admin.no_transactions') ?></h3>
						</center>
					<?php } else { ?>
						<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/wallet.css?v='. time()) ?>">
						<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/flag/css/main.min.css?v='. time()) ?>">

						<div class="table-responsive">
							<table class="table transaction-table">
								<thead>
									<tr>
										<th>ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th width="110px">Commission Paid</th>
										<th>Paid Date</th>
										<th>Referred Member</th>
										<th>Member's Email</th>
										<th>Member's Plan</th>
										<th>Purchased Amount</th>
										<th>Purchased Date</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($transactions as $key => $transaction) { ?>
										<tr>
	                    					<td>
	                                            <span class="badge badge-secondary">
	                                                ID <?= $transaction->id ?>
	                                            </span>
	                                        </td>
	                                        <td><?= ($transaction->receiver->firstname ? $transaction->receiver->firstname : '') ?></td>
	                                        <td><?= ($transaction->receiver->lastname ? $transaction->receiver->lastname : '') ?></td>
	                    					<td><?= ($transaction->receiver->email ? $transaction->receiver->email : '') ?></td>
	                                        <td><?= c_format($transaction->amount) ?></td>
	                    					<td><?= $transaction->date ?></td>
	                    					<td><?= ($transaction->sender) ? $transaction->sender->firstname . ' ' . $transaction->sender->lastname : '' ?></td>
	                                        <td><?= ($transaction->sender) ? $transaction->sender->email : '-' ?></td>
	                                        <td><?= isset($transaction->loggable->plan->name) ? $transaction->loggable->plan->name : '' ?></td>
	                                        <td><?= isset($transaction->loggable->total) ? c_format($transaction->loggable->total) : '' ?></td>
	                                        <td><?= $transaction->created_at ?></td>	
	                    				</tr>
									<?php } ?>
								</tbody>
								<!-- <tfoot>
									<tr>
										<td colspan="100%" class="text-right">
											<div class="pagination">
												<?= $pagination_link; ?>
											</div>
										</td>
									</tr>
								</tfoot> -->
							</table>
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
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
	
<div class="modal fade" id="modal-confirm">
	<div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-body"></div></div></div>
</div>
<div class="modal fade" id="modal-confirmstatus">
	<div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-body"></div></div></div>
</div>
<div class="modal fade" id="modal-recursion">
	<div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-body"></div></div></div>
</div>

<script src="<?= base_url('assets/plugins/datatable') ?>/moment.js"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/datatable') ?>/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/datatable') ?>/daterangepicker.css" />

<script type="text/javascript">
	$(".filter-toggle").on("click", function(){
		$(".wallet-filter").slideToggle('fast');
	})

	$('.daterange-picker').daterangepicker({
		opens: 'left',
		autoUpdateInput: false,
		ranges: {
			'Today': [moment(), moment()],
			'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			'This Month': [moment().startOf('month'), moment().endOf('month')],
			'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		locale: {
			cancelLabel: 'Clear',
			format: 'DD-M-YYYY'
		}
	});

	$('.daterange-picker').on('apply.daterangepicker', function(ev, picker) {
		$(this).val(picker.startDate.format('DD-M-YYYY') + ' - ' + picker.endDate.format('DD-M-YYYY'));
	});

	$('.daterange-picker').on('cancel.daterangepicker', function(ev, picker) {
		$(this).val('');
	});
	
	$('[name="user_id"]').select2();
</script>