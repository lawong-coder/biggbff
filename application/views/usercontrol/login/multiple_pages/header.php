<!doctype html>

<html lang="en">

  <head>



  <?php



  if($site_setting['google_analytics']){ echo $site_setting['google_analytics']; }

  if($site_setting['faceboook_pixel']){ echo $site_setting['faceboook_pixel']; }

  $logo = ($site_setting['logo'] ? 'assets/images/site/'.$site_setting['logo'] : base_url('assets/login/multiple_pages').'/img/logo.png');

  if($site_setting['favicon']){

    echo '<link rel="icon" href="'. base_url('assets/images/site/'.$site_setting['favicon']) .'" type="image/*" sizes="16x16">';

  }

  $global_script_status = (array)json_decode($site_setting['global_script_status'],1);

  if(in_array('front', $global_script_status)){ echo $site_setting['global_script']; }

  $db =& get_instance();

  $products = $db->Product_model;

  $googlerecaptcha =$db->Product_model->getSettings('googlerecaptcha');

  $tnc =$db->Product_model->getSettings('tnc');

  ?>





    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title><?= $site_setting['name'] ?></title>

    <meta name="author" content="<?= $meta_author ?>">

    <meta name="keywords" content="<?= $meta_keywords ?>">

    <meta name="description" content="<?= $meta_description ?>">

    <title><?= $setting['heading'] ?></title>



    <!--Jost font-->

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome CSS -->

    <link rel="stylesheet" href="<?= base_url('assets/login/multiple_pages') ?>/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?= base_url('assets/login/multiple_pages') ?>/css/bootstrap.min.css">

    <!-- Owl Carousel CSS -->

    <link rel="stylesheet" href="<?= base_url('assets/login/multiple_pages') ?>/css/owl.carousel.min.css">

    <!-- Style CSS -->

    <?php if( current_url() != site_url('/login') && current_url() != site_url('/register') && current_url() != site_url('/forget-password') && current_url() != site_url('/terms-of-use')){ ?>

    <link rel="stylesheet" href="<?= base_url('assets/login/multiple_pages') ?>/css/style.css">

    <?php } else { ?>

    <link rel="stylesheet" href="<?= base_url('assets/login/multiple_pages') ?>/css/login-style.css">

    <?php } ?>

    <link rel="stylesheet" href="<?= base_url('assets/vertical/assets') ?>/css/custom.css">

    <!-- jQuery Js-->

    <script src="<?= base_url('assets/login/multiple_pages') ?>/js/jquery-2.2.4.min.js"></script>

    <!--Popper Js-->

    <script src="<?= base_url('assets/login/multiple_pages') ?>/js/popper.min.js"></script>

    <!--Bootstrap Js-->

    <script src="<?= base_url('assets/login/multiple_pages') ?>/js/bootstrap.min.js"></script>

    <style type="text/css">

        #preloader{
            /*display: none;*/
            background: #fff;

            color: rgba(0,0,0,0.8);

            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /*background-color: #3c4959;*/
            z-index: 9999999;

        }

        #status {
            /*display: none;*/
            width: 80px;
            height: 30px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -40px 0 0 -40px;
        }

        .lds-roller {

          display: inline-block;

          position: relative;

          width: 80px;

          height: 80px;

        }

        .lds-roller div {

          animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;

          transform-origin: 40px 40px;

        }

        .lds-roller div:after {

          content: " ";

          display: block;

          position: absolute;

          width: 7px;

          height: 7px;

          border-radius: 50%;

          background: #6362bb ;

          margin: -4px 0 0 -4px;

        }

        .lds-roller div:nth-child(1) {

          animation-delay: -0.036s;

        }

        .lds-roller div:nth-child(1):after {

          top: 63px;

          left: 63px;

        }

        .lds-roller div:nth-child(2) {

          animation-delay: -0.072s;

        }

        .lds-roller div:nth-child(2):after {

          top: 68px;

          left: 56px;

        }

        .lds-roller div:nth-child(3) {

          animation-delay: -0.108s;

        }

        .lds-roller div:nth-child(3):after {

          top: 71px;

          left: 48px;

        }

        .lds-roller div:nth-child(4) {

          animation-delay: -0.144s;

        }

        .lds-roller div:nth-child(4):after {

          top: 72px;

          left: 40px;

        }

        .lds-roller div:nth-child(5) {

          animation-delay: -0.18s;

        }

        .lds-roller div:nth-child(5):after {

          top: 71px;

          left: 32px;

        }

        .lds-roller div:nth-child(6) {

          animation-delay: -0.216s;

        }

        .lds-roller div:nth-child(6):after {

          top: 68px;

          left: 24px;

        }

        .lds-roller div:nth-child(7) {

          animation-delay: -0.252s;

        }

        .lds-roller div:nth-child(7):after {

          top: 63px;

          left: 17px;

        }

        .lds-roller div:nth-child(8) {

          animation-delay: -0.288s;

        }

        .lds-roller div:nth-child(8):after {

          top: 56px;

          left: 12px;

        }

        @keyframes lds-roller {

          0% {

            transform: rotate(0deg);

          }

          100% {

            transform: rotate(360deg);

          }

        }
    </style>

  </head>

  <body>

<?php 

$fbmessager_status = (array)json_decode($site_setting['fbmessager_status'],1);

if(in_array('front', $fbmessager_status)){

  echo $site_setting['fbmessager_script'];

}

?>

<div id="preloader">
    <div id="status">
        <div class="lds-roller">

            <div>

            </div>

            <div>

            </div>

            <div>

            </div>

            <div>

            </div>

            <div>

            </div>

            <div>

            </div>

            <div>

            </div>

            <div>

            </div>
        </div>
    </div>
</div>
  <?php if( current_url() != site_url('/login') && current_url() != site_url('/register') && current_url() != site_url('/forget-password') && current_url() != site_url('/terms-of-use')){ ?>

    <!--Top Navbar-->

    <header class="header-navbar">

        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">

              <a class="navbar-brand" href="<?= base_url('/') ?>"><img src="<?= $logo ?>" alt="<?= $setting['heading'] ?>" style="max-height: 80px;"></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

              </button>



              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul class="navbar-nav ml-auto">

                  <li class="nav-item <?php if(base_url(uri_string()) == base_url('/')){ echo 'active'; } ?>">

                    <a class="nav-link" href="<?= base_url('/') ?>">Home</a>

                  </li>

                  <li class="nav-item <?php if(base_url(uri_string()) == base_url('/faq')){ echo 'active'; } ?>">

                    <a class="nav-link" href="<?= base_url('/faq') ?>">Faq</a>

                  </li>

                  <li class="nav-item <?php if(base_url(uri_string()) == base_url('/terms-of-use')){ echo 'active'; } ?>">

                    <a class="nav-link" href="<?= base_url('/terms-of-use') ?>">Terms</a>

                  </li>

                  <li class="nav-item <?php if(base_url(uri_string()) == base_url('/contact')){ echo 'active'; } ?>">

                    <a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a>

                  </li>

                  <?php 

                  $store_setting = $this->Product_model->getSettings('store');

                  if($store_setting['menu_on_front']){ 

                    ?>

                    <li class="nav-item <?php if(base_url(uri_string()) == base_url('/store')){ echo 'active'; } ?>">

                      <a class="nav-link" href="<?= base_url('/store') ?>" <?= ($store_setting['menu_on_front_blank']) ? 'target="_blank"' : ''; ?>>My Store</a>

                    </li>

                    <?php

                  }

                  ?>

                </ul>

                <a href="<?= base_url('/login') ?>" class="btn-login my-2 my-lg-0">Log in</a>

              </div>

            </nav>

        </div>

    </header><!--Top Navbar-->

  <?php } ?>