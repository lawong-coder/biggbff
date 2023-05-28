<link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/plugins/tel/css/intlTelInput.css') ?>?v=<?= av() ?>">
<script src="<?= base_url('assets/plugins/tel/js/intlTelInput.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css') ?>?v=<?= av() ?>">
<script src="<?= base_url('assets/plugins/select2/select2.full.min.js') ?>"></script>
<script src="<?php echo base_url(); ?>assets/vertical/assets/plugins/slick-slider/slick.min.js"></script>

<div class="profile_page new_member_page with_curve_page">
	<div class="top_curve_block d-md-none" style="background-image: url(<?php echo base_url('assets/images/top_profile_bg.png'); ?>")></div>
	<section class="top-profile-block">
		<div class="user_avtar_block">
			<div class="row">
				<div class="col-4">
					<?php $avatar = $user->avatar != '' ? 'assets/images/users/'.$user->avatar : 'assets/vertical/assets/images/users/default_avatar.jpg' ; ?>

					<img src="<?php echo base_url($avatar); ?>" class="user-avtar" class="thumbnail" border="0" width="220px">
				</div>
				<div class="col-8">
					<h3 class="title"><?= $user->firstname . ' ' . $user->lastname; ?></h3>
					<!-- <input type="file" name="user_avtauser" id="user_avtauser" class="custom-file-input user_avtauser">
					<button type="button" class="btn update_avtar_btn btn-submit" id="update_avtar_btn">Update</button> -->
					<label class="btn update_avtar_btn btn-submit btn-file">
					    Upload <input type="file" name="user_avtauser" id="user_avtauser" class="custom-file-input user_avtauser" style="display: none;" required>
					</label>
				</div>
			</div>
		</div>
		<?php if(isset($my_franchise_plan) && !empty($my_franchise_plan)) { ?>
			<div class="user_plan_block mt-4">
				<div class="row">
					<div class="col-md-12">
						<div class="user_plan_slider">
							<?php foreach ($my_franchise_plan as $key => $fplan) { ?>
								<div class="slide">
									<div class="card mb-4">
							            <div class="card-body" style="position: relative;overflow: hidden;">
							            	<div class="row user_plan_row">
							            		<div class="col-3 d-flex align-items-center justify-content-center">
							            			<span class="plan_icon"  style="color: <?= $fplan->plan ? $fplan->plan->label_background : '' ?>;"> <?= ($fplan->plan->icon) ? '<img src="' . base_url('assets/images/'.$fplan->plan->icon)  . '" class="img-responsive" />' : '<i class="fas fa-university"></i>' ?></span>
							            		</div>
							            		<div class="col-9 text-left">
						            				<?php
						            					$completion_rank = $fplan->getCompletionRank();
						            				?>
							            			<h2 class="plan-title" data-toggle="collapse" data-target="#collapse<?= $fplan->id ?>" aria-expanded="false" aria-controls="collapse<?= $fplan->id ?>">
							            				<?= $fplan->plan ? $fplan->plan->name : '' ?>
							            			</h2>
							            			<div class="custom_progress">
														<div class="custom_progressbar" style="background-color:  <?= $fplan->plan ? $fplan->plan->label_background : '' ?>; width: <?= $completion_rank ?>%; max-width: 100%;"></div>
													</div>
							            			<p class="progress_text">
							            				<span><?= ($completion_rank) ? (($completion_rank <= 100) ? $completion_rank : 100) : 0; ?>%</span>
							            			</p>
							            		</div>
							            	</div>
							            	<div class="row collapse" id="collapse<?= $fplan->id ?>" aria-labelledby="heading<?= $fplan->id ?>" data-parent="#accordion">
							            		<div class="col-9 offset-3 text-left">
							            			<p class="share_text">Refer more friends for faster maturity</p>
							            		</div>
							            	</div>
							            </div>
							        </div>
							    </div>
					        <?php } ?>
						</div>
						<div class="slick-slider-dots"></div>
					</div>
				</div>
			</div>
		<?php } ?>
	</section>
	<section class="user_details_block new_web_form">
		<?php
			$customValue = json_decode(isset($user->value) ? $user->value : '[]', 1);
		?>
		<div class="top_form">
			<div class="form-group">
				<label class="control-label" for="username">Username</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= ($user->username) ? $user->username : ''; ?>" readonly>
			</div>
			<div class="form-group">
				<label class="control-label" for="email">Email</label>
				<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= ($user->email) ? $user->email : ''; ?>" readonly>
			</div>
			<div class="form-group custom_input">
				<?php
					$ifield = 'custom_date-1623412532756';
					$ivalue = isset($customValue[$ifield]) ? $customValue[$ifield] : '';
				?>
				<label class="control-label" for="">Date of birth</label>
				<div class="input-group">
					<input type="text" class="form-control" name="<?= $ifield ?>" id="<?= $ifield ?>" placeholder="D.O.B" value="<?= $ivalue ?>" readonly>
					<div class="input-group-append">
						<span class="input-group-text"><img src="<?php echo base_url('assets/images/calendar_icon.png'); ?>" class="img-responsive"></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label" for="email">NRIC No</label>
				<input type="text" class="form-control" name="nric_no" id="nric_no" placeholder="NRIC No" value="<?= ($user->nric_no) ? ((strlen($user->nric_no) > 5) ? substr_replace($user->nric_no, str_repeat('*', 5), 0, 5) : $user->nric_no) : ''; ?>" readonly>
			</div>
			<div class="form-group">
				<?php
					$mobile_field = 'custom_text-1611314653157';
					$mobile_value = isset($customValue[$mobile_field]) ? $customValue[$mobile_field] : '';
				?>
				<input type="hidden" name='<?= $mobile_field ?>' id="phonenumber-input" value="<?= $mobile_value ?>" class="form-control" placeholder="Mobile Number" >
				<div>
					<input id="phone" class="form-control" type="text" value="<?= $mobile_value ?>" readonly>
				</div>
				<script type="text/javascript">
					var tel_input = intlTelInput(document.querySelector("#phone"), {
					  initialCountry: "auto",
					  utilsScript: "<?= base_url('/assets/plugins/tel/js/utils.js?1562189064761') ?>",
					  separateDialCode:true,
					  geoIpLookup: function(success, failure) {
					    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
					      var countryCode = (resp && resp.country) ? resp.country : "";
					      success(countryCode);
					    });
					  },
					});
				</script>
			</div>
			<div class="form-group">
				<label class="control-label" for="billing_address">Billing Address</label>
				<input type="text" class="form-control" name="billing_address" id="billing_address" placeholder="Billing Address" value="<?= ($user->billing_address) ? $user->billing_address : ''; ?>" readonly>
			</div>
			<div class="form-group">
				<label class="control-label" for="country_id">Country</label>
				<input type="text" class="form-control" name="country_id" id="country_id" placeholder=" -- None -- " value="<?= (isset($user_selected_country) && !empty($user_selected_country)) ? $user_selected_country : ' -- None -- ' ?>" readonly>
				<!-- <select class="form-control" name="country_id" disabled>
					<option value="0"> -- None -- </option>
					<?php foreach ($countries as $key => $value) { ?>
						<option <?= (isset($user) && $user->ucountry == $value['id']) ? 'selected' : '' ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
					<?php } ?>
				</select> -->
			</div>
			<div class="form-group">
				<label class="control-label">Referral's Name</label>
				<input type="text" class="form-control" name="refid" id="refid" placeholder=" -- None -- " value="<?= (isset($user_reffered_by) && !empty($user_reffered_by)) ? $user_reffered_by : '-- None --' ?>" readonly>

				<!-- <select class="form-control" name="refid" id="refid" disabled>
					<option value="0"> -- None -- </option>
					<?php foreach ($refer_users as $key => $value) { ?>
						<option <?= (isset($user) && $user->refid == $value['id']) ? 'selected' : '' ?> value="<?= $value['id'] ?>"><?= $value['username'] ?></option>
					<?php } ?>
				</select> -->
			</div>
			<div class="form-group">
				<label class="control-label">Referral's Mobile No</label>
				<input type="hidden" name="refnumber" id="refnumber" class="form-control" placeholder="Referral's Mobile No" value="<?= ((isset($user) && isset($user->refnumber)) ? $user->refnumber : '') ?>" >
				<div class="form-group">
					<div class="tel_input_ref">
						<input id="refphone" class="form-control" type="text" value="<?= ((isset($user) && isset($user->refnumber)) ? $user->refnumber : '') ?>" readonly>
					</div>
				</div>

				<script type="text/javascript">
					var tel_input_ref = intlTelInput(document.querySelector("#refphone"), {
					  initialCountry: "auto",
					  utilsScript: "<?= base_url('/assets/plugins/tel/js/utils.js?1562189064761') ?>",
					  separateDialCode:true,
					  geoIpLookup: function(success, failure) {
					    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
					      var countryCode = (resp && resp.country) ? resp.country : "";
					      success(countryCode);
					    });
					  },
					});
				</script>
			</div>
			<!-- <div class="form-group custom_input">
				<label class="control-label" for="">Joined Date</label>
				<div class="input-group">
					<input type="text" class="form-control" name="created_at" id="created_at" placeholder="D.O.B" value="<?= $user->created_at ?>" readonly>
					<div class="input-group-append">
						<span class="input-group-text"><img src="<?php echo base_url('assets/images/calendar_icon.png'); ?>" class="img-responsive"></span>
					</div>
				</div>
			</div> -->
		</div>
		<div class="bottom_form">
			<form action="" method="POST" role="form" name="update_profile_form" class="update_profile_form" id="update_profile_form" novalidate="" autocomple="off">
				<div class="form-group">
					<label class="control-label" for="current_password">Current Password</label>
					<input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current Password" value="">
				</div>
				<div class="form-group">
					<label class="control-label" for="new_password">New Password</label>
					<input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" value="">
				</div>
				<div class="form-group">
					<label class="control-label" for="confirm_password">Confirm New Password</label>
					<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm New Password" value="">
				</div>
				<div class="row justify-content-end mt-5">
					<input class="btn btn-submit update_password_btn" type="submit" value="Confirm">
				</div>
			</form>
		</div>
	</section>
</div>
<script type="text/javascript">

    /*$(".datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        format:"dd-mm-yyyy"
    });*/

    $(document).ready(function() {
    	$("#update_profile_form").submit(function(e) {
	    	e.preventDefault();
	    	$this = $(this);

    		$.ajax({
                url:'',
                type:'POST',
                dataType:'json',
                data:$this.serialize(),
                beforeSend:function(){ $this.find(".btn-submit").btn("loading"); },
                complete:function(){ $this.find(".btn-submit").btn("reset"); },
                success:function(json){
                	/*if(json['location']){
						window.location = json['location'];
					}*/

                    if(json['redirect']){ window.location.replace(json['redirect']); }
                    if(json['warning']){ alert(json['warning']) }

                    $this.find(".is-invalid").removeClass("is-invalid");
                    $this.find("span.invalid-feedback").remove();

                    if(json['errors']){
                        $.each(json['errors'], function(i,j){
                            $ele = $this.find('[name="'+ i +'"]');
                            if($ele){
                                $formGroup = $ele.parents(".form-group");
                                $ele.addClass("is-invalid");
                                if($formGroup.find(".input-group").length){
                                    $formGroup.find(".input-group").after("<span class='invalid-feedback'>"+ j +"</span>");
                                } else {
                                    $ele.after("<span class='invalid-feedback'>"+ j +"</span>");
                                }
                            }
                        })
                    }
                },
            });
	    });

	    $(document).on('change', '#user_avtauser', function() {
	    	var input = this;
	    	var $this = $(this);

	    	if (input.files && input.files[0]) {
		    	var property = document.getElementById('user_avtauser').files[0];
				var image_name = property.name;
				var image_extension = image_name.split('.').pop().toLowerCase();

				var is_valid = true;
				if(jQuery.inArray(image_extension,['gif','jpg','jpeg','png']) == -1){
					is_valid = false;
					alert("Invalid image file");
				}

				if(is_valid)
				{
					var form_data = new FormData();
					form_data.append("avatar",property);
					$.ajax({
						url:"<?= base_url('usercontrol/upload_avtar') ?>",
						method:'POST',
						data:form_data,
						contentType:false,
						cache:false,
						processData:false,
						dataType:'json',
						beforeSend:function(){
							/*input.btn("loading");*/
						},
						complete:function(){ /*input.btn("reset");*/ },
						success:function(json){
							if(json['redirect']){window.location.replace(json['redirect']); }

							$this.find(".is-invalid").removeClass("is-invalid");
		                    $this.find("span.invalid-feedback").remove();

		                    if(json['errors']){
		                        $.each(json['errors'], function(i,j){
		                            $ele = $this.find('[name="'+ i +'"]');
		                            if($ele){
		                                $formGroup = $ele.parents(".form-group");
		                                $ele.addClass("is-invalid");
		                                if($formGroup.find(".input-group").length){
		                                    $formGroup.find(".input-group").after("<span class='invalid-feedback'>"+ j +"</span>");
		                                } else {
		                                    $ele.after("<span class='invalid-feedback'>"+ j +"</span>");
		                                }
		                            }
		                        })
		                    }
						}
					});
				}

	    	}

	    });

	    $('.user_plan_slider').slick({
	    	slidesToShow: 1,
	    	autoplay: true,
	    	autoplaySpeed: 5000,
	    	dots: true,
	    	appendDots: $('.slick-slider-dots'),
	    	arrows: false
	    });
    });

</script>