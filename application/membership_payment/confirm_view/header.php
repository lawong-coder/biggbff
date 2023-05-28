<?php
	$db =& get_instance(); 
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