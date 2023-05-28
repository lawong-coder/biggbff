<div class="row">
	<div class="col-lg-12 col-md-12">
		<?php if($this->session->flashdata('success')){?>
			<div  class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?php echo $this->session->flashdata('success'); ?> </div>
		<?php } ?>
		<?php if($this->session->flashdata('error')){?>
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?php echo $this->session->flashdata('error'); ?> </div>
		<?php } ?>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div id="new-request" class="">
		    <div class="card">
				<div class="card-header">
					<form method="GET" onsubmit="return new_filter()" id="new_filter">
						<input type="hidden" name="get_new" value="1">
						<div class="row">
							<div class="col-sm-12 mb-2">
								<h6 class="m-0"><?= __('admin.transfer_requests') ?></h6>
							</div>
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
							<div class="col-sm-3">
								<div class="form-group">
									<button class="btn btn-primary btn-new-filter">Filter</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="card-body p-0">
					<div class="new-empty text-center d-none">
			    		<img class="img-responsive" src="<?php echo base_url('assets/vertical/assets/images/no-data-2.png'); ?>" style="margin: 49px 0 0 0;">
		                <h3 class="m-b-30 text-center"><?= __('admin.no_transfer_requests') ?></h3>
			    	</div>
					<div class="table-responsive new-datatable">
						<table class="table transfer-table table-striped ">
							<thead>
								<tr>
									<th width="100px">Id</th>
									<th>From</th>
									<th>Sender's Email</th>
									<th>To</th>
									<th>Receiver's Email</th>
									<th>Amount</th>
									<th>Transferred Date</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?= base_url('assets/plugins/datatable') ?>/moment.js"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/datatable') ?>/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/datatable') ?>/daterangepicker.css?v=<?= av() ?>" />
<script type="text/javascript">

	function new_filter() {
		console.log("new_filter");
		console.log($("#new_filter").serialize());
		$.ajax({
			type:'POST',
			dataType:'json',
			data:$("#new_filter").serialize(),
			beforeSend:function(){
				$('.btn-new-filter').btn("loading");
			},
			complete:function(){
				$('.btn-new-filter').btn("reset");
			},
			success:function(json){
				console.log(json);
				if(json['html']){
					$(".new-datatable tbody").html(json['html']);
					$(".new-empty").addClass('d-none');
					$(".new-datatable").show();
				} else{
					$(".new-datatable").hide();
					$(".new-empty").removeClass('d-none');
				}
			},
		})

		return false;
	} new_filter();


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