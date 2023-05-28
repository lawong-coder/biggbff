<!DOCTYPE html>
<html>
<head>
    <title>404</title>
    <link href="<?php echo base_url(); ?>assets/vertical/assets/css/bootstrap.min.css?v=<?= av() ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/404-css.css') ?>">
</head>
<body>
    <?php
        $db =& get_instance(); 
        $db->load->model('Product_model');
        $SiteSetting = $db->Product_model->getSettings('site');
    ?>
    <nav class="navbar navbar-custom2">
        <a class="navbar-brand mx-auto" href="#">
            <?php 
                $logo = base_url($SiteSetting['logo'] ? 'assets/images/site/'.$SiteSetting['logo'] : 'assets/vertical/assets/images/no-logo-coming-soon.png');
            ?>
            <img src="<?= $logo ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            Bigg Franchise
        </a>
    </nav>
    <div id="clouds">
        <div class="cloud x1"></div>
        <div class="cloud x1_5"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class='c'>
        <div class='_404'>404</div>
        <hr>
        <div class='_1'>THE PAGE</div><br>
        <div class='_2'>WAS NOT FOUND</div><br>
        <!-- <a class='btn' href='<?= base_url() ?>'>BACK TO HOME</a> -->
    </div>
    <footer class="footer custom-footer">
        <div class="container">
            <div  class="row">
                <div class="col-sm-12">
                    <div  class="copyrights-content">
                        <p class="mb-0">Copywrite 2021 | All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>