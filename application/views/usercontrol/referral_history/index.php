<style type="text/css">
	.mobile_view .topbar_bg {
		display: none;
	}
</style>
<link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>

<div class="referral_history_page listing_page new_member_page">
	<section class="top-section">
		<h2 class="page_title">Referral Records</h2>
		<!-- <p class="sub_title">History of your referrals and plan they choose</p> -->
	</section>

	<section class="search-block">
		<div class="card">
		    <div class="card-body">
		    	<form  action="" method="GET" role="form" name="search_form" id="search_form">
		    		<div class="form-group">
			    		<label for="name">Filter referral history</label>
			    		<div class="form-row">
			    			<div class="col-12">
								<input type="text" class="form-control" name="search[name]" id="name" placeholder="Search by Name" value="">
							</div>
			    		</div>
			    	</div>
			    	<div class="form-group date_group">
			    		<div class="form-row">
			    			<div class="col-6">
			    				<div class="input-group">
									<input type="text" class="form-control datepicker" name="search[date_from]" id="date_from" placeholder="From" value="">
									<div class="input-group-append">
										<span class="input-group-text"><img src="<?php echo base_url('assets/images/calendar_icon.png'); ?>" class="img-responsive"></span>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="input-group">
									<input type="text" class="form-control datepicker" name="search[date_to]" id="date_to" placeholder="To" value="">
									<div class="input-group-append">
										<span class="input-group-text"><img src="<?php echo base_url('assets/images/calendar_icon.png'); ?>" class="img-responsive"></span>
									</div>
								</div>
							</div>
			    		</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="form-row">
			    			<div class="col-6">
								<input type="text" class="form-control" name="search[package_name]" id="package_name" placeholder="Search by Package Name" value="">
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
        <?php if(isset($histories) && count($histories) > 0) {
        	foreach ($histories as $key => $history) { 
        		if(isset($history->user) && !empty($history->user) && isset($history->plan) && !empty($history->plan)) {?>
		            <div class="card request_block" data-history="<?= $history->id; ?>">
		                <div class="card-body">
		                	<img src="<?= base_url('assets/images/refer_history_icon.png') ?>" class="img-responsive icon_img">
		                	<div class="right-content">
			                    <p class="top_line"><span><?= $history->user->firstname .  " " . $history->user->lastname ?></span> Joined <span class="plan_badge" style="background:<?= $history->plan->bg_gradient ?>"><?= ($history->plan) ? $history->plan->name : '' ?></span></p>
			                    <div class="third_line">
			                    	<p class="left_text float-xs-none float-left mb-0"><?= date('d-m-Y | H:i A', strtotime($history->created_at)); ?></p>
			                    	<p class="right_text float-xs-none float-right mb-0">$<?= $history->total ?></p>
			                    	<div class="clear"></div>
			                    </div>
		                	</div>
		                </div>
		            </div>
    	<?php } } } else { ?>
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
                url:'<?= base_url("usercontrol/search_referral_history") ?>',
                type:'GET',
                dataType:'json',
                data:$parent.serialize(),
                beforeSend:function(){ $parent.find(".btn-submit").btn("loading"); },
                complete:function(){ $parent.find(".btn-submit").btn("reset"); },
                success:function(data){
                	$(".no_data_note").addClass('d-none');
                	$(".referral_history_page .card-list .card").removeClass('d-none');

                	if((typeof(data['is_filter_available']) != 'undefined') && (data['is_filter_available'] == 1) && (typeof(data['result']) != 'undefined'))
                	{
            			$(".referral_history_page .card-list .card").addClass('d-none');

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