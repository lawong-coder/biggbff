<?php if (isset($plan)) { ?>
	<div class="text-center">
		<?php $label = (isset($user_activate_page) && $user_activate_page) ? 'Pay - ' . (($plan['special']) ? c_format($plan['special']) : c_format($plan['price'])) : 'Pay with Fomo' ?>

		<a href="<?= base_url('membership_callback/fomo/doPayment/'. $plan['id']) ?>" class="btn btn-primary"><?= $label ?></a>
	</div>

	<script type="text/javascript">
		function payWithFomo(){
			Swal.fire({
				title: 'Are you sure?',
				text: "Are you sure to pay with fomo ?",
				icon: 'info',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, Pay!'
			}).then((result) => {
				if(result.value){
					window.location.href='<?= base_url('membership_callback/fomo/doPayment/'. $plan['id']) ?>';
				}
			})
		}
	</script>
<?php } ?>