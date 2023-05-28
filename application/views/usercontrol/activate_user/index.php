<?php include(APPPATH.'/views/common/standard_header.php'); ?>

<?php 
    $banner =  base_url('assets/login/multiple_pages/img/contact-us.jpg'); 
?>

   <!--Hero-->

   <!-- <div class="wlc-hero-area inner-hero-area d-flex align-items-center" style="background-image: url(<?= $banner ?>)">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="wlc-hero-content text-center">

                        <h1>Puchase plan to activate your account</h1>

                    </div>

                </div>

            </div>

        </div>

    </div> -->

    <!--Hero-->
    <div class="inner-page-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <div class="card plan-card mb-4">
                            <div class="card-body" style="position: relative;overflow: hidden;">
                                <?php if($plan->label_text) { ?>
                                <span class="plan-label" style="background: <?= $plan->label_background ?>;color: <?= $plan->label_color ?>;"><?= $plan->label_text ?></span>
                                <?php } ?>
                                <div class="pt-3 pb-3">
                                    <h6 class="text-uppercase text-primary"><?= $plan->name ?></h6>
                                </div>
                                <div>
                                    <h1 class="plan-price padding-b-15">
                                        <?php  if($plan->price == 0){ ?>
                                            FREE
                                        <?php } else { ?>
                                            <?php if($plan->special) { ?>
                                            <?= c_format($plan->special) ?>
                                            <?php }else{ ?>
                                            <?= c_format($plan->price) ?>
                                            <?php } ?>
                                        <?php } ?>
                                    </h1>
                                    <?php if($plan->special) {
                                        $percentage = round((($plan->price - $plan->special) * 100) / $plan->price);
                                    ?>
                                    <h4><span class="price" style="text-decoration: line-through;color: gray"><?= c_format($plan->price) ?></span> <span class="badge" style="background: <?= $plan->label_background ?>;color: <?= $plan->label_color ?>;">Save <?= $percentage ?>%!</span></h4>
                                    <?php } ?>
                                    <div class="text-muted m-l-10"><?= $plan->billing_period_text ?></div>
                                    <h1 class="m-l-10"><?= ($plan->hosting_cost) ? c_format($plan->hosting_cost) : 0 ?></h1>
                                    <div class="text-muted m-l-10">
                                        <?php
                                            $payable_from = date('d M y', strtotime('+1 month'));
                                        ?>
                                        Monthly (Payable from <?= $payable_from ?>)
                                    </div>
                                    <div class="plan-div-border"></div>
                                    <p class="mt-3">Please review your plan above & proceed to make payment. Thank you!</p>
                                </div>
                                <div class="plan-features pb-3 mt-3 text-muted padding-t-b-30">
                                    <!-- <a href="javascript:void(0)" onclick="choosePlan(<?= $plan->id ?>)" class="btn btn-primary">Purchase Now</a> -->
                                    <?= $confirm ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include(APPPATH.'/views/common/standard_footer.php'); ?>

<script type="text/javascript">

    (function ($) {

        $.fn.btn = function (action) {

            var self = $(this);

            if (action == 'loading') { $(self).addClass("btn-loading"); }

            if (action == 'reset') { $(self).removeClass("btn-loading"); }

        }

    })(jQuery);



    $("#mail-form").on('submit',function(evt){

        evt.preventDefault();       

        var formData = new FormData($("#mail-form")[0]);

        $(".btn-submit").btn("loading");

        $this = $("#mail-form");



        $.ajax({

            type:'POST',

            dataType:'json',

            cache:false,

            contentType: false,

            processData: false,

            data:formData,

            success:function(result){

                $(".btn-submit").btn("reset");

                $(".alert-dismissable").remove();



                $this.find(".has-error").removeClass("has-error");

                $this.find(".is-invalid").removeClass("is-invalid");

                $this.find("span.text-danger").remove();                



                if(result['success']){

                    $("#mail-form").prepend('<div class="alert mb-4 alert-info alert-dismissable">'+ result['success'] +'</div>');

                    var body = $("html, body");

                    $("#mail-form")[0].reset()

                    body.stop().animate({scrollTop:0}, 500, 'swing', function() { });

                }



                if(result['errors']){

                    $.each(result['errors'], function(i,j){

                        $ele = $this.find('[name="'+ i +'"]');

                        if(!$ele.length){ 

                            $ele = $this.find('.'+ i);

                        }

                        if($ele){

                            $ele.addClass("is-invalid");

                            $ele.parents(".form-group").addClass("has-error");

                            $ele.after("<span class='d-block text-danger'>"+ j +"</span>");

                        }

                    });



                    errors = result['errors'];

                    $('.formsetting_error').text(errors['formsetting_recursion_custom_time']);

                    $('.productsetting_error').text(errors['productsetting_recursion_custom_time']);

                }

            },

        });

        

        return false;

    });

</script>