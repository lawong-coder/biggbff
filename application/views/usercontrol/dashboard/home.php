<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<div class="home_page new_member_page">
	<?php if(isset($user) && !empty($user)) { ?>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-lg-6 mx-auto top-row-block">
				<div class="top-info-block">
					<div class="card mx-auto shadow">
						<img class="card-img-top" src="<?php echo base_url('assets/images/bg_franchise_plan.png'); ?>">
						<div class="card-img-overlay d-flex flex-column">
							<div class="text-white d-flex align-items-center mb-2">
						 		<h5 class="card-title"><?= $user['firstname'] . " " . $user['lastname']; ?></h5>
						 		<span class="ml-auto show_membership_no"><i class="fas fa-eye"></i></span>
						 	</div>
						 	<div class="membership_row">
								<p class="card-text text-white">Bigg Card</p>
								<?php
									$membership_no = str_split($user['membership_no'], strlen($user['membership_no'])/4);
								?>

								<div id="membership_no" class="text-white">
									<span><?= $membership_no[0] ?></span><span class="dynamic">XXXX</span><span  class="dynamic" style="display:none;"><?= $membership_no[1] ?></span> <span class="dynamic">XXXX</span><span class="dynamic" style="display:none;"><?= $membership_no[2] ?></span><span><?= $membership_no[3] ?></span><span onclick="copyMembershipNo()" id="copy_clipboard_membersipno" data-value="<?= $user['membership_no'] ?>"><img class="copy-img" src="<?php echo base_url('assets/images/copy_icon.png'); ?>"></span>
								</div>
						 	</div>
							<div class="text-white d-flex flex-grow-1 align-items-end">
						 		<p class="bottom_left1_text">Member Since <br> <span class="bottom_left2_text"><?= date('d-m-Y', strtotime($user['created_at'])); ?></span></p>
						 		<img class="image-fluid ml-auto low_opacity" src="<?php echo base_url('assets/images/bff_logo.png'); ?>">
						 	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="plan_list">
		<div class="row">
			<div class="col-sm-12">
				<h5 class="text-left header-text">My Franchise Plan(s)</h5>
			</div>
		</div>
		<div class="row">
			<?php foreach ($my_franchise_plan as $key => $plan) { ?>
			    <div class="col-md-12">
			        <div class="card mb-4">
			            <div class="card-body" style="position: relative;overflow: hidden;">
			            	<div class="row user_plan_row">
			            		<div class="col-3 d-flex align-items-center justify-content-center">
			            			<span class="plan_icon"  style="color: <?= $plan->plan ? $plan->plan->label_background : '' ?>;"> <?= ($plan->plan->icon) ? '<img src="' . base_url('assets/images/'.$plan->plan->icon)  . '" class="img-responsive" />' : '<i class="fas fa-university"></i>' ?></span>
			            		</div>
			            		<div class="col-9 text-left">
		            				<?php
		            					$completion_rank = $plan->getCompletionRank();
		            				?>
			            			<h2 class="plan-title" data-toggle="collapse" data-target="#collapse<?= $plan->id ?>" aria-expanded="false" aria-controls="collapse<?= $plan->id ?>">
			            				<?= $plan->plan ? $plan->plan->name : '' ?>
			            			</h2>
			            			<div class="custom_progress">
										<div class="custom_progressbar" style="background-color:  <?= $plan->plan ? $plan->plan->label_background : '' ?>; width: <?= $completion_rank ?>%; max-width: 100%;"></div>
									</div>
			            			<p class="progress_text">
			            				<b><?= ($completion_rank) ? (($completion_rank <= 100) ? $completion_rank : 100) : 0; ?>%</b>
			            			</p>
			            		</div>
			            	</div>
			            	<div class="row collapse" id="collapse<?= $plan->id ?>" aria-labelledby="heading<?= $plan->id ?>" data-parent="#accordion">
			            		<div class="col-9 offset-3 text-left">
			            			<!-- <p class="share_text"><span><?= ($plan->plan) ? $plan->plan->fego_shares : 0; ?></span> Share Credits upon exiting of Belt. Invite more members NOW!</p> -->
			            			<p class="share_text">Refer more friends for faster maturity</p>
			            		</div>
			            	</div>	
			            </div>
			        </div>
			    </div>
			<?php } ?>
		</div>
	</div>
	<section class="referral_block">
		<div class="row">
			<div class="col-sm-12">
				<h5 class="text-left header-text">Referrals</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="card mb-4">
					<div class="card-body">
						<div class="header_block">
							<img class="image-responsive mb-1" src="<?php echo base_url('assets/images/direct_icon.png'); ?>">
							<span class="title_text">Direct</span>
						</div>
						<div class="body_block">
							<div class="row">
								<div class="col-6 subblock">
									<div class="text-center m-0">
										<p class="count m-0"><?= isset($direct_users_count) ? $direct_users_count : 0 ?></p>
										<p class="text m-0">Total</p>
									</div>
								</div>
								<div class="col-6 subblock">
									<div class="text-center m-0">
										<p class="count m-0"><?= isset($recent_direct_users) ? $recent_direct_users : 0 ?></p>
										<p class="text m-0"> Recent</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card mb-4">
					<div class="card-body">
						<div class="header_block">
							<img class="image-responsive mb-1" src="<?php echo base_url('assets/images/friends_icon.png'); ?>">
							<span class="title_text">My Team</span>
						</div>
						<div class="body_block">
							<div class="row">
								<div class="col-6 subblock">
									<div class="text-center m-0">
										<p class="count m-0"><?= isset($team_referrals_count) ? $team_referrals_count : 0 ?></p>
										<p class="text m-0">Total</p>
									</div>
								</div>
								<div class="col-6 subblock">
									<div class="text-center m-0">
										<p class="count m-0"><?= isset($recent_team_referrals) ? $recent_team_referrals : 0 ?></p>
										<p class="text m-0"> Recent</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="referral_trends_block">
		<div class="row">
			<div class="col-sm-12">
				<h5 class="text-left header-text">Referral Trend</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card chart-card mb-4">
					<div class="card-header border-0">
		                <div class="card-title graph_title">
		                	<img class="image-responsive mb-1" src="<?php echo base_url('assets/images/direct_icon.png'); ?>">
							<span class="title_text">Direct</span>
						</div>
		                <div class="card-options">
		                    <select onchange="loadDashboardDirectChart()" class="renderChart direct-chart-input form-control mr-1" name="group">
		                        <option value="day" ><?= __('admin.day') ?></option>
		                        <option value="week"><?= __('admin.week') ?></option>
		                        <option value="month" selected=""><?= __('admin.month') ?></option>
		                        <option value="year"><?= __('admin.year') ?></option>
		                    </select>

		                    <select onchange="loadDashboardDirectChart()" class="yearSelection direct-chart-input form-control" name='year'>
		                        <?php for($i=2016; $i<= date("Y"); $i++){ ?>
		                            <option value="<?= $i ?>" <?php echo $i==date("Y") ? "selected='selected'" : '' ?>><?= $i ?></option>
		                        <?php  } ?>
		                    </select>
		                </div>
		            </div>
					<div class="card-body">
						<div class="graph_block">
							<canvas style="height:600px" id="direct-referral-chart" class="ct-chart ct-golden-section"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card chart-card mb-4">
					<div class="card-header border-0">
		                <div class="card-title graph_title">
		                	<img class="image-responsive mb-1" src="<?php echo base_url('assets/images/friends_icon.png'); ?>">
							<span class="title_text">My Team</span>
						</div>
		                <div class="card-options">
		                    <select onchange="loadDashboardTeamChart()" class="renderChart team-chart-input form-control mr-1" name="group">
		                        <option value="day" ><?= __('admin.day') ?></option>
		                        <option value="week"><?= __('admin.week') ?></option>
		                        <option value="month" selected=""><?= __('admin.month') ?></option>
		                        <option value="year"><?= __('admin.year') ?></option>
		                    </select>

		                    <select onchange="loadDashboardTeamChart()" class="yearSelection team-chart-input form-control" name='year'>
		                        <?php for($i=2016; $i<= date("Y"); $i++){ ?>
		                            <option value="<?= $i ?>" <?php echo $i==date("Y") ? "selected='selected'" : '' ?>><?= $i ?></option>
		                        <?php  } ?>
		                    </select>
		                </div>
		            </div>
					<div class="card-body">
						<!-- <div class="graph_title">
							<img class="image-responsive mb-1" src="<?php echo base_url('assets/images/friends_icon.png'); ?>">
							<span class="title_text">My Team</span>
						</div> -->
						<div class="graph_block">
							<canvas style="height:600px" id="team-referral-chart" class="ct-chart ct-golden-section"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
	var ctx = document.getElementById('direct-referral-chart').getContext('2d');
    var chartData = <?= json_encode($chart) ?>;

    var direct_chart = new Chart(ctx, {
        type: 'line',
        data: {},
        options: {
            showLines: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            scales: {},
            responsive: true,
            elements: {
                point:{
                    radius: 0
                }
            }
        }
    });

    function renderDirectRefChart(chartData){
        console.log(chartData);

        direct_chart.data = {
            labels: Object.values(chartData['keys']),
			datasets: [{
				label: 'Direct Referral',
				data: Object.values(chartData['total_direct_refusers']),
				fill: false,
				borderColor: 'rgb(75, 192, 192)',
				tension: 0.5
			}]
        }

        direct_chart.update();
    }

    function loadDashboardDirectChart(){
        $.ajax({
            url:'<?= base_url("usercontrol/dashboard?getDirectChartData=1") ?>',
            type:'POST',
            dataType:'json',
            data:$(".direct-chart-input"),
            beforeSend:function(){},
            complete:function(){},
            success:function(json){
               renderDirectRefChart(json['chart']);
            },
        })
    }
    renderDirectRefChart(chartData);

    var ctx1 = document.getElementById('team-referral-chart').getContext('2d');

    var team_chart = new Chart(ctx1, {
        type: 'line',
        data: {},
        options: {
            showLines: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            scales: {},
            responsive: true,
            elements: {
                point:{
                    radius: 0
                }
            }
        }
    });

    function renderTeamRefChart(chartData){
        console.log(chartData);

        team_chart.data = {
            labels: Object.values(chartData['keys']),
			datasets: [{
				label: 'My Team Referral',
				data: Object.values(chartData['total_team_refusers']),
				fill: false,
				borderColor: 'rgb(75, 192, 192)',
				tension: 0.5
			}]
        }

        team_chart.update();
    }

    function loadDashboardTeamChart(){
	    $.ajax({
	        url:'<?= base_url("usercontrol/dashboard?getTeamChartData=1") ?>',
	        type:'POST',
	        dataType:'json',
	        data:$(".team-chart-input"),
	        beforeSend:function(){},
	        complete:function(){},
	        success:function(json){
	           renderTeamRefChart(json['chart']);
	        },
	    })
	}

	renderTeamRefChart(chartData);

	function copyMembershipNo() {
		var input = document.createElement('input');
        input.value = $('#copy_clipboard_membersipno').data('value');
        input.id = 'membersipno';
        document.body.appendChild(input);
        input.select();
        document.execCommand('copy');
        document.body.removeChild(input);
	}

	$(document).ready(function() {
		$('.show_membership_no').click(function() {
		    $("#membership_no").find('span.dynamic').toggle();
		});
	});
</script>