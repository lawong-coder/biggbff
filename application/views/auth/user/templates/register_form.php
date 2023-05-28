<link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/plugins/tel/css/intlTelInput.css') ?>?v=<?= av() ?>">
<script src="<?= base_url('assets/plugins/tel/js/intlTelInput.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css') ?>?v=<?= av() ?>">
<script src="<?= base_url('assets/plugins/select2/select2.full.min.js') ?>"></script>

<form action="" method="POST" role="form" class="reg_form" novalidate="" autocomple="off">
	
	<script type="text/javascript">
		var tel_input = false;
		var grecaptcha = undefined;
	</script>
	<?php 
		$db =& get_instance(); 
		$products = $db->Product_model; 
	    $googlerecaptcha =$db->Product_model->getSettings('googlerecaptcha');	


		$fields = array();
		$email = isset($user) ? $user['email'] : '';
		$fields['email'] = '<div class="form-group">
			<input type="email" name="email" placeholder="'. __('user.email') .'" class="form-control" value="'. $email .'">  
		</div>';

		if (isset($allow_vendor_option)) {
			$is_vendor = isset($user) ? (int)$user['is_vendor'] : 0;
			$fields['is_vendor'] = '<div class="form-group">
				<label>Status</label>
				<select name="is_vendor"  class="form-control">
					<option selected disabled>Status</option>  
					<option '. ($is_vendor ==1 ? 'selected' : '') .' value="1">Enable</option>
					<option '. ($is_vendor ==0 ? 'selected' : '') .' value="0">Disable</option>
				</select>
			</div>';
		}

		if(isset($allow_status_option)) {

			$fields['reg_approved'] = '<div class="form-group">
				<label>Status</label>
				<select name="reg_approved"  class="form-control">
					<option selected disabled>Status</option>  
					<option '. ($user['reg_approved'] == 1 ? 'selected' : '') .' value="1">Active</option>
					<option '. ($user['reg_approved'] == 0 ? 'selected' : '') .' value="0">Pending</option>
				</select>
			</div>';
		}

		if(isset($allow_billing_address)) {
			$fields['billing_address'] = '<div class="form-group">
				<input type="text" name="billing_address" id="billing_address" class="form-control" placeholder="Billing Address" value="'. ((isset($user) && isset($user['billing_address'])) ? $user['billing_address'] : '') .'" >
			</div>';
		}

		$firstname = isset($user) ? $user['firstname'] : '';
		$fields['firstname'] = '<div class="form-group">
			<input type="text" name="firstname" id="firstname" class="form-control" placeholder="'. __('user.first_name') .'" value="'. $firstname .'" >
		</div>';
		$lastname = isset($user) ? $user['lastname'] : '';
		$fields['lastname'] = '<div class="form-group">
			<input type="text" name="lastname" id="lastname" class="form-control" placeholder="'. __('user.last_name') .'" value="'. $lastname .'">
		</div>';
		$username = isset($user) ? $user['username'] : '';
		$fields['username'] = '<div class="form-group">
			<input type="text" name="username" id="username" class="form-control" placeholder="'. __('user.username') .'" value="'. $username .'">
		</div>';
		//if(!isset($edit_view)){
			$fields['password'] = '<div class="form-group">
				<input type="password" name="password" id="password" placeholder="'. __('user.password') .'" class="form-control">
			</div>';
			$fields['confirm_password'] = '<div class="form-group">
				<input type= "password"  name= "cpassword" id= "cpassword" placeholder="'. __('user.repeat_password') .'" class="form-control">
			</div>';
		//}

		$customValue = json_decode(isset($user['value']) ? $user['value'] : '[]', 1);

		$ref_user_obj = [];
		if(isset($user['refid']) && !empty($user['refid'])) {
			$ref_user_obj = App\User::find($user['refid']);
		}
		
	?>

	<?php foreach ($data as $key => $value) { 
		  
		$required    = (isset($value['required']) && $value['required'] == 'true') ? 'required="required"' : '';
		$label       = (isset($value['label']) && $value['label'] ) ? $value['label'] : '';
		$placeholder = (isset($value['placeholder']) && $value['placeholder'] ) ? $value['placeholder'] : '';
		$className   = (isset($value['className']) && $value['className'] ) ? $value['className'] : '';
		$name        = 'custom_'.((isset($value['name']) && $value['name'] ) ? $value['name'] : '');
		$ivalue      = (isset($value['value']) && $value['value'] ) ? $value['value'] : (isset($customValue[$name]) ? $customValue[$name] : '');
		$maxlength   = (isset($value['maxlength']) && $value['maxlength'] ) ? $value['maxlength'] : '';
		$min         = (isset($value['min']) && $value['min'] ) ? $value['min'] : '';
		$max         = (isset($value['max']) && $value['max'] ) ? $value['max'] : '';
		$mobile_validation         = (isset($value['mobile_validation']) && $value['mobile_validation'] ) ? $value['mobile_validation'] : '';
		$_customValue = $ivalue;

		switch ($value['type']) {
			case 'header': 
				echo  $fields[strtolower($label)]; 
				/*if($label == 'Confirm_password' && isset($allow_vendor_option)){
					echo  $fields['is_vendor']; 
				}*/
			break;
			case 'text':
				if($mobile_validation == 'true'){ ?>
					<input type="hidden" name='<?= $name ?>' id="phonenumber-input" value="<?= $ivalue ?>" class="<?= $className ?>" placeholder="<?= $placeholder ?>" <?= $required ?> maxlength = '<?= $maxlength ?>' >
					<div class="form-group">
						<div>
							<input id="phone" class="form-control" type="text" value="<?= $ivalue ?>">
						</div>
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
				<?php } else { ?>
					<div class="form-group">
						<input type="text" name='<?= $name ?>' id="<?= $name ?>" value="<?= $ivalue ?>" class="<?= $className ?>" placeholder="<?= $placeholder ?>" <?= $required ?> maxlength = '<?= $maxlength ?>' >
					</div>
				<?php }
				break;
			case 'number': ?>
				<div class="form-group">
					<input type="number" name="<?= $name ?>" id="<?= $name ?>" class="<?= $className ?>" value="<?= $ivalue ?>" min="<?= $min ?>" max="<?= $max ?>"  <?= $required ?> placeholder="<?= $label ?>">
				</div>
			<?php
			break;
			case 'textarea': ?>
			<div class="form-group">
				<textarea name="<?= $name ?>" id="<?= $name ?>" class="<?= $className ?>" rows="3" <?= $required ?> maxlength = '<?= $maxlength ?>' placeholder="<?= $label ?>"><?= $ivalue ?></textarea>
			</div>
			<?php
			break;
			case 'date': 
				if($className == 'dob') { ?>
					<div class="form-group">
						<input type="text" class="form-control datepicker <?= $className ?>" name="<?= $name ?>" value="<?= $ivalue ?>" placeholder="<?= $placeholder ?>" <?= $required ?> style="padding: .375rem .75rem;">
			        </div>

			        <div class="form-group">
			        	<input type="text" class="form-control" name="nric_no" value="<?= ($user['nric_no']) ? $user['nric_no'] : '' ?>" placeholder="NRIC No">
			        	<small class="form-text text-muted text-left">Enter last 4 characters. Eg - 123A</small>
			        </div>

			        <?php if(isset($allow_billing_address) && isset($fields['billing_address'])) { 
			        	echo $fields['billing_address'];
			        }

			        if(isset($edit_view)){ ?>
						<div class="form-group">
							<?php if(! isset($is_fronted_form)){ ?>
							<label class="control-label">Country</label>
							<?php } ?>
							<select class="form-control" name="country_id">
								<?php if(isset($is_fronted_form)){ ?>
									<option value="0"> Choose Country </option>
								<?php } else { ?>
									<option value="0"> -- None -- </option>
								<?php } ?>
								<?php foreach ($countries as $key => $value) { ?>
									<option <?= (isset($user) && $user['ucountry'] == $value['id']) ? 'selected' : '' ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
					<?php }
				} else { ?>
					<div class="form-group">
			            <label class="control-label" for="input-date-available"><?= $label ?></label>
					        <div class="input-group date" data-provide="datepicker">
							    <input type="text" class="form-control <?= $className ?>" name="<?= $name ?>" value="<?= $ivalue ?>" placeholder="<?= $placeholder ?>" <?= $required ?>>
							    <div class="input-group-addon">
							        <span class="glyphicon glyphicon-th"></span>
							    </div>
							</div>
			        </div>
				<?php }
			break;
			case 'checkbox-group':
			if(isset($value['values'])){
				echo '<div class="form-group"><label>'.$label.'</label>';
				foreach ($value['values'] as $k => $v) {
					$label = (isset($v['label']) && $v['label'] ) ? $v['label'] : '';
					$ivalue = (isset($v['value']) && $v['value'] ) ? $v['value'] : '';
					$selected = (isset($value['selected']) && $value['selected'] ) ? "checked='checked'" : ($ivalue == $ivalue);
				 ?>
			
				<div class="checkbox">
					<label>
						<input type="checkbox" name="<?= $name ?>" value="<?= $ivalue ?>" <?= $selected ?> class="<?= $className ?>">
						<?= $label ?>
					</label>
				</div>
			<?php } ?>
			</div>
			<?php } 
			break;
			case 'radio-group':
			if(isset($value['values'])){
				echo '<div class="form-group"><label>'.$label.'</label>';
				foreach ($value['values'] as $k => $v) {
				$label = (isset($v['label']) && $v['label'] ) ? $v['label'] : '';
				$ivalue = (isset($v['value']) && $v['value'] ) ? $v['value'] : '';
				$selected = (isset($v['selected']) && $v['selected'] ) ? "selected='selected'" : '';
			 ?>
				<div class="radio">
					<label>
						<input type="radio" name="<?= $name ?>" value="<?= $ivalue ?>" <?= $selected ?> class="<?= $className ?>">
						<?= $label ?>
					</label>
				</div>
			<?php } ?>
			</div>
			<?php } 
			break;
			case 'select':
			if(isset($value['values'])){ ?>
				<div class="form-group">
					<label for="<?= $name ?>"><?= $label ?></label>
				 	<select name="<?= $name ?>" id="<?= $name ?>" class="form-control <?= $class ?>">
				 		<?php 
				 
				 			foreach ($value['values'] as $k => $v) {
							$label = (isset($v['label']) && $v['label'] ) ? $v['label'] : '';
							$ivalue = (isset($v['value']) && $v['value'] ) ? $v['value'] : '';
							$selected = '';
							if(isset($edit_view) && $_customValue == $ivalue) {
								$selected = "selected='selected'";
							} else if( !isset($edit_view) && isset($v['selected']) && $v['selected']){
								$selected = "selected='selected'";
							}
				 		?>
				 		<option value="<?= $ivalue ?>" <?= $selected ?>><?= $label ?></option>
						<?php } ?>
				 	</select>
				</div>
			<?php } 
			break;
			default:
				
				break;
		} ?>
	<?php } ?>
	<?php if(isset($edit_view_refer) && ! isset($is_fronted_form)){ ?>
		<div class="form-group edit_reg_referral_name_block">
			<label class="control-label">Referral's Name</label>

			<select name="refid" class="edit-refid-autocomplete form-control" id="editregister_refid">
				<?php if(isset($user) && $user['refid'] && isset($ref_user_obj) && !empty($ref_user_obj)) { ?>
					<option selected value="<?= $user['refid'] ?>"><?= $ref_user_obj->firstname . ' ' . $ref_user_obj->lastname ?></option>
				<?php }?>
			</select>
			<!-- <select class="form-control" name="refid" id="refid">
				<?php if(isset($is_fronted_form)){ ?>
					<option value="0"> Choose Referral's Name </option>
				<?php } else { ?>
					<option value="0"> -- None -- </option>
				<?php } ?>
				<?php foreach ($refer_users as $key => $value) { ?>
					<option <?= (isset($user) && $user['refid'] == $value['id']) ? 'selected' : '' ?> value="<?= $value['id'] ?>"><?= $value['username'] ?></option>
				<?php } ?>
			</select> -->
		</div>
		<div class="form-group">
			<label class="control-label">Referral's Mobile No</label>
			<input type="hidden" name="refnumber" id="refnumber" class="form-control" placeholder="Referral's Mobile No" value="<?= ((isset($user) && isset($user['refnumber'])) ? $user['refnumber'] : '') ?>" >
			<div class="form-group">
				<div class="tel_input_ref">
					<input id="refphone" class="form-control" type="text" value="<?= ((isset($user) && isset($user['refnumber'])) ? $user['refnumber'] : '') ?>">
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
	<?php } ?>

	<?php if(isset($edit_view) && isset($plan_lists)){ ?>
		<div class="form-group">
			<?php if(! isset($is_fronted_form)){ ?>
				<label class="control-label">Membership Plan</label>
			<?php } ?>
			<select class="form-control" name="membership_plan" id="membership_plan" required>
				<?php if(isset($is_fronted_form)){ ?>
					<option value=""> Choose Membership Plan </option>
				<?php } else { ?>
					<option value=""> -- None -- </option>
				<?php } ?>
				<?php foreach ($plan_lists as $key => $plan) { ?>
					<option <?= (isset($user) && $user['assigned_plan'] == $plan['id']) ? 'selected' : '' ?> value="<?= $plan['id'] ?>"><?= $plan['name'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group d-none" id="package_price_block">
			<?php if(! isset($is_fronted_form)){ ?>
			<label class="control-label">Package Price (One-time)</label>
			<?php } ?>
			<div class="form-group">
				<input type="text" name="package_price" id="package_price" class="form-control" placeholder="Package Price" value="" readonly>
			</div>
			<?php if(! isset($is_fronted_form)){ ?>
				<label class="control-label">Hosting Cost (Monthly)</label>
				<div class="form-group">
					<input type="text" name="package_hosting_cost" id="package_hosting_cost" class="form-control" placeholder="Hosting Cost" value="" readonly>
				</div>
			<?php } ?>
		</div>

		<?php if(isset($is_fronted_form)) { ?>
			<div class="form-group reg_referral_name_block">
				<!-- <input type="text" name="refid" id="refid" class="form-control" placeholder="Referral's Name" value=""> -->
				<select name="refid" class="refid-autocomplete form-control" id="frontregister_refid"></select>
			</div>
		<?php } ?>

		<div class="form-group">
			<?php if(! isset($is_fronted_form)){ ?>
				<label class="control-label">Coupon Code</label>
			<?php } ?>
			<div class="form-group">
				<input type="text" name="coupon_code" id="coupon_code" class="form-control" placeholder="Coupon Code" value="<?= ((isset($user) && isset($user['coupon_code'])) ? $user['coupon_code'] : '') ?>" >
			</div>
		</div>
	<?php } ?>

	<?php if((!isset($edit_view)) || (isset($is_fronted_form))){ ?>

		<?php if (isset($googlerecaptcha['affiliate_register']) && $googlerecaptcha['affiliate_register']) { ?>
			<div class="captch mb-3 form-group">
				<script src='https://www.google.com/recaptcha/api.js'></script>
				<div class="g-recaptcha" data-sitekey="<?= $googlerecaptcha['sitekey'] ?>"></div>
				<input type="hidden" name="captch_response" id="captch_response">
			</div>
		<?php } ?>
		
		<div class="check_box text-left">
			<p>
				<input type="checkbox" id="checkbox" name="terms" value="1" class="" checked>

				<?php if(isset($template_index)) { ?>
					<span for="checkbox"><a href="<?= $tnc_link ? $tnc_link : base_url('term-condition') ?>" target="_blank" style="margin-top:0px;"><?= __('user.affiliate_policy') ?></a></span>
					<?php
				} else {
					?>
					<label for="checkbox"><a href="https://product.biggworld.co/terms-conditions/" target="_blank" style="margin-top:0px;"><?= __('user.agree_terms_and_condition') ?></a></label>
					<?php
				}?>

			</p>
		</div>

		<input class="<?= $allow_back_to_login ? "btn btn-primary" : ""; ?> btn-registration btn-submit" type="submit" value="<?= __('user.submit') ?>">
	<?php } ?>

	<?php
		if(isset($allow_vendor_option)){
			echo  $fields['is_vendor']; 
		}

		if(isset($allow_status_option)){
			echo $fields['reg_approved'];
		}
	?>
</form>
<div style="display:none;"><a href="https://affiliatepro.org">affiliate pro</a></div>

<script type="text/javascript">

    $(".datepicker").datepicker({ 

        autoclose: true, 

        todayHighlight: true,

        format:"dd-mm-yyyy"

    });

    var getPlanPrice = function(plan_id) {
    	if(plan_id != '')
    	{
	    	$.ajax({
		        url: '<?php echo base_url('get_plan_price_formatted') ?>',
		        type: 'post',
		        dataType: 'json',
		        data: {
		            plan_id : plan_id
		        },
		        success: function (data) {
		            $('#package_price').val(data.price);
		            if($('#package_hosting_cost').length)
		            {
		            	$('#package_hosting_cost').val(data.hosting_cost);
		            }
		            $('#package_price_block').removeClass('d-none');
		        }
		    });
    	}
    	else
    	{
    		$('#package_price_block').addClass('d-none');
    	}
    }

    $(document).ready(function() {

    	if($('#membership_plan').length)
    	{
    		var selected_plan = $("#membership_plan").val();
    		if(selected_plan)
    		{
    			getPlanPrice(selected_plan);
    		}

	    	$("#membership_plan").on('change',function(){
			    var plan_id = $(this).val();
			    getPlanPrice(plan_id);
			});
    	}

    	if($('.refid-autocomplete').length)
    	{
			$(".refid-autocomplete").select2({

				ajax: {
					url: '<?= base_url('usercontrol/get_referral_users') ?>',
					dataType: 'json',
					data: function(params) {
						return {
							p: params.term,
							page: params.page
						};
					},
					processResults: function(data, params) {

						var data = $.map(data, function(obj) {
							obj.id = obj.id;
							obj.text = obj.name;
							return obj;
						});

						return {
							results: data
						};

					},
					cache: true
				},

				escapeMarkup: function(markup) {

					return markup;

				},

				allowClear: true,

				minimumInputLength:0,

				placeholder: 'Referral\'s Name',

		    });
    	}

    	if($('#editregister_refid').length)
    	{
    		$("#editregister_refid").select2({
    			ajax: {
					url: '<?= base_url('usercontrol/get_referral_users') ?>',
					dataType: 'json',
					data: function(params) {
						return {
							p: params.term,
							page: params.page
						};
					},
					processResults: function(data, params) {

						var data = $.map(data, function(obj) {
							obj.id = obj.id;
							obj.text = obj.name;
							return obj;
						});

						return {
							results: data
						};

					},
					cache: true
				},

				escapeMarkup: function(markup) {

					return markup;

				},

				allowClear: true,

				minimumInputLength:0,

				placeholder: 'Referral\'s Name',
    		});
    	}
    });
</script>
