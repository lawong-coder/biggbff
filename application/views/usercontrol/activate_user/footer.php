<?php 

if(is_array($theme_settings) && isset($theme_settings[0])) { 

$footer = $theme_settings[0];

?>

<?php

}

?>
    
    <?php if( current_url() != site_url('/login') && current_url() != site_url('/register') && current_url() != site_url('/forget-password') && current_url() != site_url('/terms-of-use')){ ?>


    <!--Footer Area-->

    <!-- <footer class="footer-area">

        <div class="container">

        </div>

    </footer> -->
    <!--Footer Area-->

    

    <?php } ?>

    <!-- Owl Carousel Js-->

    <script src="<?= base_url('assets/login/multiple_pages') ?>/js/owl.carousel.min.js"></script>

    <script src="<?= base_url('assets/login/multiple_pages') ?>/js/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src='<?= base_url('assets/sweetalert/sweetalert.min.js') ?>'></script>

    <!--Active Js-->

    <script src="<?= base_url('assets/login/multiple_pages') ?>/js/active.js"></script>

    

    

  </body>

</html>