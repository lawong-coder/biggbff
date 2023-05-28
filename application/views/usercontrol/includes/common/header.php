<?php
	$db =& get_instance(); 
	$SiteSetting = $db->Product_model->getSettings('site');
	$logo_link = (isset($header_logo_link) && $header_logo_link) ? $header_logo_link : '#';
?>

<nav class="navbar navbar-custom2">
	<a class="navbar-brand mx-auto" href="<?= $logo_link ?>">
		<?php 
            $logo = base_url($SiteSetting['logo'] ? 'assets/images/site/'.$SiteSetting['logo'] : 'assets/vertical/assets/images/no-logo-coming-soon.png');
        ?>
		<img src="<?= $logo ?>" width="30" height="30" class="d-inline-block align-top" alt="">
		Bigg Franchise
	</a>
</nav>