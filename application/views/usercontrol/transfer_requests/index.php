<style type="text/css">
	.mobile_view .topbar_bg {
		display: none;
	}
</style>
<link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>

<div class="transfer_requests_page listing_page new_member_page">
	<section class="top-section">
		<h2 class="page_title">Transfer Records</h2>
		<!-- <p class="sub_title">History of transfer request made from your account</p> -->
	</section>

	<section class="search-block">
		<div class="card">
		    <div class="card-body">
		    	<form  action="" method="GET" role="form" name="search_transfer_form" id="search_transfer_form">
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
			    		<label for="user_id">Search by</label>
			    		<div class="form-row">
			    			<div class="col-6">
								<input type="text" class="form-control" name="search[user]" id="user" placeholder="Name/Email/Mobile No" value="">
							</div>
							<div class="col-6 text-right">
								<!-- <input type="submit" class="btn btn-light btn-type-1 btn-submit" name="search" value="search"> -->
								<button type="button" class="btn btn-outline-primary search_btn btn-submit" id="search_btn">Search</button>
								<!-- <button type="submit" class="btn btn-outline-primary search_btn">Search</button> -->
							</div>
			    		</div>
			    	</div>
			    </form>
		    </div>
		</div>
	</section>

	<section class="card-list">
        <?php if(isset($transfers) && count($transfers) > 0) {
        	foreach ($transfers as $key => $transfer_request) { 
        		if(isset($transfer_request->receiver) && !empty($transfer_request->receiver)) {?>
        			<?php
        				$custom_value = json_decode($transfer_request->receiver->value, true);
        			?>
		            <div class="card request_block" data-transfer="<?= $transfer_request->id; ?>">
		                <div class="card-body">
		                	<img src="<?= base_url('assets/images/transfer_grey.png') ?>" class="img-responsive icon_img">
		                	<div class="right-content">
			                    <p class="top_line">Transferred to <span><?= $transfer_request->receiver->firstname . ' ' . $transfer_request->receiver->lastname  ?></span></p>
			                    <p class="second_line"><span><?= $transfer_request->receiver->email ?></span><span><?= isset($custom_value['custom_text-1611314653157']) ? $custom_value['custom_text-1611314653157'] : '' ?></span></p>
			                    <div class="third_line">
			                    	<p class="left_text float-xs-none float-left"><?= date('d-m-Y | H:i A', strtotime($transfer_request->created_at)); ?></p>
			                    	<p class="right_text float-xs-none float-right">$<?= $transfer_request->amount ?></p>
			                    	<div class="clear"></div>
			                    </div>
		                	</div>
		                </div>
		            </div>
    	<?php } } } else { ?>
    		<!-- <p> No transfer requests done yet!! </p> -->
    	<?php } ?>
		<p class="d-none no_data_note">No result found!!</p>
	</section>

	<section class="create-request-btn-block">
		<a href="<?php echo base_url('usercontrol/transfer_request_create');?>" class="btn create_request_btn">
			<img src="<?= base_url('assets/images/tranfer_white_icon.png') ?>" class="img-responsive icon_image" /> Transfer
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

	    	var $parent = $("#search_transfer_form");
	    	
	    	$.ajax({
                url:'<?= base_url("usercontrol/search_transfer_requests") ?>',
                type:'GET',
                dataType:'json',
                data:$parent.serialize(),
                beforeSend:function(){ $parent.find(".btn-submit").btn("loading"); },
                complete:function(){ $parent.find(".btn-submit").btn("reset"); },
                success:function(data){
                	$(".no_data_note").addClass('d-none');
                	$(".transfer_requests_page .card-list .card").removeClass('d-none');

                	if((typeof(data['is_filter_available']) != 'undefined') && (data['is_filter_available'] == 1) && (typeof(data['result']) != 'undefined'))
                	{
            			$(".transfer_requests_page .card-list .card").addClass('d-none');

            			if(data['result'].length > 0)
            			{
            				$.map(data['result'], function(id) {
            					$(".request_block[data-transfer='" + id +"']").removeClass('d-none');
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