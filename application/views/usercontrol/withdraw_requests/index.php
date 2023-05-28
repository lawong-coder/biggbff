<style type="text/css">
	.mobile_view .topbar_bg {
		display: none;
	}
</style>
<link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>

<div class="withdrawal_requests_page listing_page new_member_page">
	<section class="top-section">
		<h2 class="page_title">Withdrawal Records</h2>
		<!-- <p class="sub_title">History of withdrawals made from your account</p> -->
	</section>

	<section class="search-block">
		<div class="card">
		    <div class="card-body">
		    	<form  action="" method="GET" role="form" name="search_form" id="search_form">
			    	<div class="form-group">
			    		<label for="date_from">Date Range</label>
			    		<div class="form-row">
			    			<div class="col-6">
								<input type="text" class="form-control datepicker" name="search[date_from]" id="date_from" placeholder="From" value="">
							</div>
							<div class="col-6">
								<input type="text" class="form-control datepicker" name="search[date_to]" id="date_to" placeholder="To" value="">
							</div>
			    		</div>
			    	</div>
			    	<div class="form-group">
			    		<label for="amount_from">Amount Range</label>
			    		<div class="form-row">
			    			<div class="col-6">
								<input type="text" class="form-control" name="search[amount_from]" id="amount_from" placeholder="From" value="">
							</div>
							<div class="col-6">
								<input type="text" class="form-control" name="search[amount_to]" id="amount_to" placeholder="To" value="">
							</div>
			    		</div>
			    	</div>
			    	<div class="form-group">
			    		<label for="status">Withdrawal Status</label>
			    		<div class="form-row">
			    			<div class="col-6">
			    				<select class="form-control" name="search[status]" id="withdrawal_status">
			    					<option value="">Select Status</option>
									<?php foreach ($status_list as $key => $value) { ?>
										<option value="<?= $key ?>"><?= $value ?></option>
									<?php } ?>
			    				</select>
							</div>
							<div class="col-6 text-right">
								<button type="button" class="btn btn-outline-primary search_btn btn-submit" id="search_btn">Search</button>
							</div>
			    		</div>
			    	</div>
			    </form>
		    </div>
		</div>
	</section>

	<section class="card-list">
        <?php if(isset($requests) && count($requests) > 0) {
        	foreach ($requests as $key => $request) { 
        		if(isset($request->user) && !empty($request->user)) {?>
		            <div class="card request_block" data-withdraw="<?= $request->id; ?>">
		                <div class="card-body">
		                	<a href="<?= base_url('usercontrol/withdraw_request_details/'.$request->id) ?>">
			                	<img src="<?= base_url('assets/images/withdraw_grey_icon.png') ?>" class="img-responsive icon_img">
			                	<div class="right-content">
				                    <p class="top_line">Withdrawn to AC#<span><?= ($request->account_no) ? $request->account_no : (($request->paypal_email) ? $request->paypal_email : ''); ?></span></p>
				                    <div class="third_line">
				                    	<p class="left_text float-xs-none float-left"><?= date('d-m-Y | H:i A', strtotime($request->created_at)); ?> <?= new_withdrwal_status($request->status) ?></p>
				                    	<p class="right_text float-xs-none float-right">$<?= $request->amount ?></p>
				                    	<div class="clear"></div>
				                    </div>
			                	</div>
			                </a>
		                </div>
		            </div>
    	<?php } } } else { ?>
    		<!-- <p> No withdraw requests done yet!! </p> -->
    	<?php } ?>
		<p class="d-none no_data_note">No result found!!</p>
	</section>

	<section class="create-request-btn-block">
		<a href="<?php echo base_url('usercontrol/withdraw_request_create');?>" class="btn create_request_btn">
			<img src="<?= base_url('assets/images/withdraw_white_icon.png') ?>" class="img-responsive icon_image" /> Withdraw
		</a>
	</section>
</div>

<script>
	$(document).ready(function() {
		$(".datepicker").datepicker({ 
	        autoclose: true, 
	        todayHighlight: true,
	        format:"dd-mm-yyyy"
	    });

	    $("#search_btn").click(function(e) {
	    	e.preventDefault();

	    	var $parent = $("#search_form");
	    	
	    	$.ajax({
                url:'<?= base_url("usercontrol/search_withdraw_requests") ?>',
                type:'GET',
                dataType:'json',
                data:$parent.serialize(),
                beforeSend:function(){ $parent.find(".btn-submit").btn("loading"); },
                complete:function(){ $parent.find(".btn-submit").btn("reset"); },
                success:function(data){
                	$(".no_data_note").addClass('d-none');
                	$(".withdrawal_requests_page .card-list .card").removeClass('d-none');

                	if((typeof(data['is_filter_available']) != 'undefined') && (data['is_filter_available'] == 1) && (typeof(data['result']) != 'undefined'))
                	{
            			$(".withdrawal_requests_page .card-list .card").addClass('d-none');

            			if(data['result'].length > 0)
            			{
            				$.map(data['result'], function(id) {
            					$(".request_block[data-withdraw='" + id +"']").removeClass('d-none');
            				});
            			}
            			else
            			{
            				$(".no_data_note").removeClass('d-none');
            			}
                	}
                },
            });
	    });
	});
</script>