<style type="text/css">
	.mobile_view .topbar_bg {
		display: none;
	}
</style>
<link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>

<div class="transaction_history_page listing_page new_member_page">
	<section class="top-section">
		<h2 class="page_title">Transaction Records</h2>
		<!-- <p class="sub_title">History of transactions made on your account</p> -->
	</section>

	<section class="search-block">
		<div class="card">
		    <div class="card-body">
		    	<form  action="" method="GET" role="form" name="search_form" id="search_form">
		    		<div class="form-group date_group">
			    		<label for="date_from">Filter transaction history</label>
			    		<div class="form-row">
			    			<div class="col-6">
			    				<div class="input-group">
									<input type="text" class="form-control datepicker" name="search[date_from]" id="date_from" placeholder="From" value="">
									<!-- <div class="input-group-append">
										<span class="input-group-text"><img src="<?php echo base_url('assets/images/calendar_icon.png'); ?>" class="img-responsive"></span>
									</div> -->
								</div>
							</div>
							<div class="col-6">
			    				<div class="input-group">
									<input type="text" class="form-control datepicker" name="search[date_to]" id="date_to" placeholder="To" value="">
									<!-- <div class="input-group-append">
										<span class="input-group-text"><img src="<?php echo base_url('assets/images/calendar_icon.png'); ?>" class="img-responsive"></span>
									</div> -->
								</div>
							</div>
			    		</div>
			    	</div>
			    	<div class="form-group mb-0">
			    		<div class="form-row">
			    			<div class="col-6">
			    				<label class="d-block" for="transaction_type">Transaction type</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="search[transaction_type]" id="in" value="In">
									<label class="form-check-label" for="in">In</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="search[transaction_type]" id="out" value="Out">
									<label class="form-check-label" for="out">Out</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="search[transaction_type]" id="both" value="Both" checked="checked">
									<label class="form-check-label" for="both">Both</label>
								</div>
							</div>
							<div class="col-6 d-flex align-items-center justify-content-end">
								<button type="button" class="btn btn-outline-primary search_btn btn-submit" id="search_btn">Search</button>
							</div>
			    		</div>
			    	</div>
			    </form>
		    </div>
		</div>
	</section>

	<section class="card-list">
        <?php if(isset($histories) && count($histories) > 0) {
        	foreach ($histories as $key => $history) { ?>
	            <div class="card request_block" data-history="<?= $history->id; ?>">
	                <div class="card-body">
	                	<?php
	                		$result = App\UserBalanceLog::getTransferTypeText($history, $user)
	                	?>
	                	<a href="<?= base_url('usercontrol/transaction_details/'.$history->id) ?>">
		                	<div class="row">
			                	<div class="col-7 left-block">
				                    <p class="top_line mb-0"><?= $result['text'] ?></p>
				                    <p class="bottom_text mb-0"><?= date('d-m-Y | H:i A', strtotime($history->created_at)); ?></p>
			                	</div>
			                	<div class="col-5 right-block text-right d-flex align-items-center justify-content-end">
				                    <?= $result['amount'] ?>
			                	</div>
		                	</div>
	                	</a>
	                </div>
	            </div>
    	<?php } } else { ?>
    		<!-- <p> No history yet!! </p> -->
    	<?php } ?>
		<p class="d-none no_data_note">No result found!!</p>
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
                url:'<?= base_url("usercontrol/search_transaction_history") ?>',
                type:'GET',
                dataType:'json',
                data:$parent.serialize(),
                beforeSend:function(){ $parent.find(".btn-submit").btn("loading"); },
                complete:function(){ $parent.find(".btn-submit").btn("reset"); },
                success:function(data){
                	$(".no_data_note").addClass('d-none');
                	$(".transaction_history_page .card-list .card").removeClass('d-none');

                	if((typeof(data['is_filter_available']) != 'undefined') && (data['is_filter_available'] == 1) && (typeof(data['result']) != 'undefined'))
                	{
            			$(".transaction_history_page .card-list .card").addClass('d-none');

            			if(data['result'].length > 0)
            			{
            				$.map(data['result'], function(id) {
            					$(".request_block[data-history='" + id +"']").removeClass('d-none');
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