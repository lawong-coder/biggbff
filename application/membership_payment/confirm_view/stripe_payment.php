<?php if (isset($plan)) { ?>

	<div class="text-center">
		<?php $label = (isset($user_activate_page) && $user_activate_page) ? 'Pay - ' . (($plan['special']) ? c_format($plan['special']) : c_format($plan['price'])) : 'Pay with Stripe' ?>
		<button onclick="payWithStripe()" type="button" class="btn btn-primary"><?= $label ?></button>

	</div>



	<script type="text/javascript">

		function payWithStripe(){

			window.location.href='<?= base_url('membership_callback/stripe_payment/doPayment/'. $plan['id']) ?>';

			/*Swal.fire({

				title: 'Are you sure?',

				text: "Are you sure to pay with Stripe ?",

				icon: 'info',

				showCancelButton: true,

				confirmButtonColor: '#3085d6',

				cancelButtonColor: '#d33',

				confirmButtonText: 'Yes, Pay!'

			}).then((result) => {

				if(result.value){

					window.location.href='<?= base_url('membership_callback/stripe_payment/doPayment/'. $plan['id']) ?>';

				}

			})*/

		}

	</script>

<?php } ?>