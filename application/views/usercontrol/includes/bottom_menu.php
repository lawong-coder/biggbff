<?php //pred($page_name, $user); ?>
<nav class="navbar fixed-bottom navbar-light bg-light sticky-bottom-menu d-md-none">
	<div class="container-fluid">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link <?= (isset($page_name) && ($page_name == 'home')) ? 'active' : ''; ?>" href="<?= base_url('usercontrol/dashboard'); ?>">
					<i class="fas fa-home"></i>
					Home
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= (isset($page_name) && ($page_name == 'profile')) ? 'active' : ''; ?>" href="<?= base_url('usercontrol/profile') ?>">
					<i class="fas fa-user-alt"></i>
					Profile
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= (isset($page_name) && ($page_name == 'referral_tree')) ? 'active' : ''; ?>" href="<?= base_url('usercontrol/referral_tree'); ?>">
					<i class="fas fa-money-check-alt"></i>
					Referral
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= (isset($page_name) && ($page_name == 'franchise_plan')) ? 'active' : ''; ?>" href="<?= base_url('usercontrol/franchise_plan'); ?>">
					<i class="fas fa-crown"></i>
					Franchise
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= (isset($page_name) && ($page_name == 'ewallet')) ? 'active' : ''; ?>" href="<?= base_url('usercontrol/ewallet'); ?>">
					<i class="fas fa-wallet"></i>
					E-wallet
				</a>
			</li>
		</ul>
	</div>
</nav>
<!-- <div id="primary-nav" class="navbar fixed-bottom navbar-light bg-light sticky-bottom-menu d-md-none">
	<div class="container">
		<ul class="nav">
			<li class="nav-item">
				<a href="#" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Contact</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">About</a>
			</li>
		</ul>    
	</div>
</div> -->