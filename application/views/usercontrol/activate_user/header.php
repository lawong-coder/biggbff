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

        <link rel="stylesheet" href="<?= base_url('assets/vertical/assets/css/custom.css') ?>">

        <!-- jQuery Js-->

        <script src="<?= base_url('assets/login/multiple_pages') ?>/js/jquery-2.2.4.min.js"></script>

        <!--Popper Js-->

        <script src="<?= base_url('assets/login/multiple_pages') ?>/js/popper.min.js"></script>

        <!--Bootstrap Js-->

        <script src="<?= base_url('assets/login/multiple_pages') ?>/js/bootstrap.min.js"></script>
    </head>
    <body>

    <?php 
        $fbmessager_status = (array)json_decode($site_setting['fbmessager_status'],1);

        if(in_array('front', $fbmessager_status)){
            echo $site_setting['fbmessager_script'];
        }
    ?>

    <?php //include(APPPATH.'/views/usercontrol/activate_user/header.php'); ?>