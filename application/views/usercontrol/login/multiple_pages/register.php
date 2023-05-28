<?php include(APPPATH.'/views/usercontrol/login/multiple_pages/header.php');
    $header_logo_link = base_url('/login');
    include(APPPATH.'/views/usercontrol/includes/common/header.php');

    $reg_content = $theme_settings[0]->reg_content;
    $reg_img = $theme_settings[0]->reg_img;
?>
<?php 
if ($reg_img != '' || !empty($reg_img)) { 
    $image_link =  base_url().'/assets/images/theme_images/'.$reg_img;
}else{ 
    $image_link =  base_url().'assets/login/multiple_pages/img/register-bg.png';
} 
?>
<style type="text/css">
    .reg_form label.control-label {
        width: 100%;
        text-align: left;
    }
</style>
<!-- <a href="<?= base_url('/'); ?>" class="btn-orage back-to-home">Back to Homepage</a> -->
<!-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->
<div class="login-hero-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 banner-bg" style="background: url(<?= $image_link; ?>);">
                   <div class="register-inner d-none d-md-block">
                        <div class="login-info text-center">
                            <img src="<?= base_url('assets/login/multiple_pages') ?>/img/exclamation.png" alt="Question">
                            <h1>I'm Already a Member!</h1>
                            <a href="<?= site_url('/login') ?>">Log In</a>
                        </div>
                        <div class="register-description text-center" id="scrollbar">
                        <p><?= (!empty($reg_content)) ? $reg_content : "BiggFranchisees are empowered to achieve their best life through technology, 
                        social marketing and the best value products. BiggFranchisees enjoy the best products at distributor prices, 
                        earn their own unique online shop as well as attractive referral rewards and bonus. 
                        Privacy policy, Terms and conditions apply and subjected to changes.
                        For enquiries, pls email: enquiry@biggworld.co
                        ";?></p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-6 form-gray-bg register-page">
					<div class="form-inner w-100">
                       <div class="row justify-content-center">
                           <div class="col-lg-6">
								<div class="login-form register-form text-center my-4">
                                    <!-- <div class="logo"><img src="<?= $logo; ?>" alt="Logo" style="max-width: 228px !important; max-height: 100px !important;"></div> -->
                                    <h4 class="auth_page_title">Member Registration</h4>
                                    <?= $register_fomm; ?>
                                    <p class="d-block d-md-none">Already Member? <a href="<?= base_url('/login') ?>">Login</a></p>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
include(APPPATH.'/views/usercontrol/login/multiple_pages/footer.php'); 
include(APPPATH.'/views/usercontrol/includes/common/footer.php');
?>
<script type="text/javascript">

    (function ($) {
        $.fn.btn = function (action) {
            var self = $(this);
            if (action == 'loading') { $(self).addClass("btn-loading"); }
            if (action == 'reset') { $(self).removeClass("btn-loading"); }
        }
    })(jQuery);

    $("#Country").on('change',function(){
        var country = $(this).val();
        $.ajax({
            url: '<?php echo base_url('get_state') ?>',
            type: 'post',
            dataType: 'json',
            data: {
                country_id : country
            },
            success: function (json) {
                if(json){
                    var html = '';
                    $.each(json, function(k,v){
                        if(v.id == state_id){
                            html += '<option value="'+v.id+'" selected="selected">'+v.name+'</option>';
                        }else{
                            html += '<option value="'+v.id+'">'+v.name+'</option>';
                        }
                    });
                    $('#states').html(html);
                }
            }
        });
    });
    $("#Country").trigger('change');

    $(".reg_form").submit(function(e){
        e.preventDefault();
        $this = $(this);
        var is_valid = true;
        // $('#status').fadeOut();$('#preloader').delay(350).fadeOut('slow');

        if(tel_input){
            var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
            is_valid = false;
            var errorInnerHTML = '';
            if ($("#phone").val().trim()) {
                if (tel_input.isValidNumber()) {
                    is_valid = true;
                    $("#phonenumber-input").val("+"+tel_input.selectedCountryData.dialCode + $("#phone").val().trim())
                } else {
                    var errorCode = tel_input.getValidationError();
                    errorInnerHTML = errorMap[errorCode];
                }
            } else { errorInnerHTML = 'The Mobile Number field is required.'; }

            $("#phone").parents(".form-group").removeClass("has-error");
            $(".reg_form .text-danger").remove();
            if(!is_valid){
                $("#phone").parents(".form-group").addClass("has-error");
                $("#phone").parents(".form-group").find('> div').after("<span class='text-danger'>"+ errorInnerHTML +"</span>");
            }
        }

        if(is_valid){
            var check_captch = true;
            if (grecaptcha === undefined) { check_captch = false; }
            $("#captch_response").val('')
            if(check_captch){
                captch_response = grecaptcha.getResponse();
                $("#captch_response").val(captch_response)
            }

            $('#status').show();
            $('#preloader').show();

            $.ajax({
                url:'<?= base_url("pagebuilder/register") ?>',
                type:'POST',
                dataType:'json',
                data:$this.serialize(),
                beforeSend:function(){ $this.find(".btn-submit").btn("loading"); },
                complete:function(){ $this.find(".btn-submit").btn("reset"); },
                success:function(json){
                    if(json['redirect']) {
                        window.location.replace(json['redirect']);
                    } else {
                        $('#status').fadeOut();
                        $('#preloader').delay(1).fadeOut('slow');
                    }
                    if(json['warning']){ alert(json['warning']) }

                    $this.find(".is-invalid").removeClass("is-invalid");
                    $this.find("span.invalid-feedback").remove();

                    if(json['errors']){
                        $.each(json['errors'], function(i,j){
                            if(i == 'captch_response' && grecaptcha){ grecaptcha.reset(); }
                            if(i == 'terms'){ $(".reg-agree-label").after("<span class='invalid-feedback'>"+ j +"</span>"); return true; }

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
            })
        }
        return false;
    })
</script>