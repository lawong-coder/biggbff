<div class="referral_tree_page with_curve_page new_member_page">
	<?php if(isset($user) && !empty($user)) { ?>
		<section class="tabs_block">
			<div class="row">
				<div class="col-sm-12">
					<?php
		                
		                function buildTree($data, $counter = 0){
		                	$html = '';

		                    foreach ($data as $key => $value) {
		                     	$html .= '<li> <span class="reftree_user_block' . (($counter == 0) ? ' root_member' : '') . '">'. $value['avtar'] . "<h4>" . $value['name'] . "</h4><p>" . $value['desc'] .'</p></span>';
		                     	
		                     	$counter++;

	                        	$t = buildTree($value['childrens'], $counter);
	                        	if($t) $html .= "<ul>{$t}</ul>";
	                     		$html .= '</li>';
		                    }

		                    return $html;
		                }
					?>
					<ul class="nav nav-tabs nav-justified referrals_tab" id="referrals_tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="direct" data-toggle="tab" href="#direct_tab" role="tab" aria-controls="direct" aria-selected="true">Direct Referrals</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="team" data-toggle="tab" href="#team_tab" role="tab" aria-controls="team" aria-selected="false">Team’s Referrals</a>
						</li>
					</ul>
					<div class="tab-content" id="referrals_tab">
						<div class="tab-pane direct_referrals fade show active" id="direct_tab" role="tabpanel" aria-labelledby="direct-tab">
							<div class="top-block">
								<div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-4 text-left">
														<img class="image-responsive d-block mb-1" src="<?php echo base_url('assets/images/direct_icon.png'); ?>">
														<span class="title_text">Direct</span>
													</div>
													<div class="col-4">
														<div class="sub_box h-100">
															<p class="text-center m-0"><?= $total_direct_ref_users ?> <br> Total</p>
														</div>
													</div>
													<div class="col-4">
														<div class="sub_box h-100">
															<p class="text-center m-0"><?= $recent_direct_users ?> <br> Recent</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tree_block">
								<div class="row">
									<div class="col-sm-12">
										<?php if(isset($direct_ref_users) && !empty($direct_ref_users)) { ?>
											<div class="table-responsive">
									            <?php 
									                /*function buildTree($data){
									                   foreach ($data as $key => $value) {
									                     	$html .= '<li> <span class="reftree_user_block">'. $value['avtar'] . "<h4>" . $value['name'] . "</h4><p>" . $value['desc'] .'</p></span>';
								                        	$t = buildTree($value['childrens']);
								                        	if($t) $html .= "<ul>{$t}</ul>";
								                     		$html .= '</li>';
									                   }
									                   return $html;
									                }*/

									                $direct_ref_tree = buildTree($direct_ref_users);

									                echo "<figure>";
									                echo "<ul class='usertree'>" . $direct_ref_tree . "</ul>";
									                echo "</figure>";
									              ?>
									        </div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane team_referrals fade" id="team_tab" role="tabpanel" aria-labelledby="team-tab">
							<div class="top-block">
								<div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-4 text-left">
														<img class="image-responsive d-block mb-1" src="<?php echo base_url('assets/images/friends_icon.png'); ?>">
														<span class="title_text">My Team</span>
													</div>
													<div class="col-4">
														<div class="sub_box h-100">
															<p class="text-center m-0"><?= isset($total_team_referrals) ? $total_team_referrals : 0; ?><br> Total</p>
														</div>
													</div>
													<div class="col-4">
														<div class="sub_box h-100">
															<p class="text-center m-0"><?= isset($recent_team_referrals) ? $recent_team_referrals : 0; ?> <br> Recent</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tree_block">
								<div class="row">
									<div class="col-sm-12">
										<div class="table-responsive">
											<?php if(isset($direct_ref_users) && !empty($direct_ref_users)) {

								                // $direct_ref_tree = buildTree($direct_ref_users);

								                echo "<figure>";
								                echo "<ul class='usertree'>" . $direct_ref_tree . "</ul>";
								                echo "</figure>";
											} ?>
										</div>
									</div>
								</div>
							</div>
							<?php if(isset($team_referrals) && !empty($team_referrals)) {
								foreach ($team_referrals as $key => $team_user) { ?>
									<div class="tree_block">
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<?php
										                echo "<figure>";
										                echo "<ul class='usertree'>" . buildTree($team_user) . "</ul>";
										                echo "</figure>";
													?>
												</div>
											</div>
										</div>
									</div>
							<?php } } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
</div>