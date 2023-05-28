<?php if($userdetails['reg_approved'] == 0) { ?>

<div class="container-fluid pt-4">
	<div class="alert bg-info text-white" role="alert">
	  Account approval is pending yet!
	</div>

	<div class="jumbotron">
	  <h1 class="display-4 mb-4">Hello, <?= $this->session->userdata['user']['firstname']; ?> <?= $this->session->userdata['user']['lastname']; ?>!</h1>
	  <p class="lead">Your account is not activated yet! Please proceed to make payment via payment link emailed to you.</p>
	  <p class="lead">You may contact us at <a href="mailto:bff@biggworld.co">bff@biggworld.co</a> should you have any inquiry about membership or benefits! Thank you.</p>
	</div>
</div>

<?php } else if($userdetails['reg_approved'] == 2) { ?>

<div class="container-fluid pt-4">
	<div class="alert bg-danger text-white" role="alert">
	  Your new user registration request is declined by admin!
	</div>

	<div class="jumbotron">
	  <h1 class="display-4 mb-4">Hello, <?= $this->session->userdata['user']['firstname']; ?> <?= $this->session->userdata['user']['lastname']; ?>!</h1>
	  <p class="lead">Your request has been declined by admin! If have any queries please contact us <a href="<?php echo base_url('usercontrol/contact-us');?>">here</a>.</p>
	</div>
</div>

<?php 
} else {
	header("Location: ".base_url('usercontrol/dashboard')); 
	die;
}
?>