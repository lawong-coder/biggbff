<!DOCTYPE html>
<html>
<head>
    <title>404</title>
    <link href="<?php echo base_url(); ?>assets/vertical/assets/css/bootstrap.min.css?v=<?= av() ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/404-css.css') ?>">
</head>
<body>
    <?php include('common/standard_header.php') ?>
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
    <?php include('common/standard_footer.php') ?>
</body>
</html>