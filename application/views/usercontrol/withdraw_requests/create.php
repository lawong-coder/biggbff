<style type="text/css">
	.mobile_view .topbar_bg {
		display: none;
	}
</style>
<div class="create_form_page create_withdraw_page new_member_page">
	<div class="row top_block">
		<div class="col-sm-12">
			<a href="<?= base_url('usercontrol/withdraw_requests') ?>" class="btn-link back-btn"><i class="fas fa-arrow-left"></i> Withdraw</a>
		</div>
	</div>
	<form action="" method="POST" role="form" name="create_withdraw_form" class="create_withdraw_form" id="create_withdraw_form" novalidate="" autocomple="off">
		<div class="form-group">
			<label class="control-label" for="withdraw_from">Withdraw From</label>
			<input type="withdraw_from" class="form-control" name="withdraw_from" id="withdraw_from" placeholder="Withdraw From" value="E-wallet" readonly>
			<small id="help_text" class="form-text text-right help_text">Available balance: <span>$<?= round_to_2dp($user->eWallet->balance); ?></span></small>
		</div>
		<!-- <div class="form-group">
			<label class="control-label" for="withdraw_to">Withdraw To</label>
			<select name="withdraw_to" class="withdraw_to_autocomplete form-control" id="withdraw_to">
				<option value="bank_transfer">Local Bank Account</option>
				<option value="paypal">Paypal</option>
			</select>
		</div> -->
		<div class="form-group">
			<label class="control-label" for="withdraw_to">Withdraw To</label>
			<input type="text" class="form-control" name="withdraw_to" id="withdraw_to" placeholder="Withdraw To" value="Local Bank Account" readonly>
		</div>
		<div class="withdraw_to_type bank_details_block">
			<div class="form-group">
				<label class="control-label" for="bank_name">Bank Name</label>
				<input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Bank Name">
			</div>
			<div class="form-group">
				<label class="control-label" for="account_no">Account No/PayNow No</label>
				<input type="text" class="form-control" name="account_no" id="account_no" placeholder="Account No">
			</div>
			<div class="form-group">
				<label class="control-label" for="account_holder_name">Account Holder’s Name</label>
				<input type="text" class="form-control" name="account_holder_name" id="account_holder_name" placeholder="Account Holder’s Name">
			</div>
		</div>
		<div class="withdraw_to_type paypal_details_block d-none">
			<div class="form-group">
				<label class="control-label" for="paypal_email">Paypal Email Address</label>
				<input type="text" class="form-control" name="paypal_email" id="paypal_email" placeholder="Paypal Email Address">
			</div>
		</div>
		<div class="form-group custom_input">
			<label class="control-label" for="amount">Amount to withdraw</label>
			<div class="input-group">
				<input type="text" class="form-control" name="amount" id="amount" placeholder="Amount">
				<div class="input-group-append">
					<span class="input-group-text">SGD</span>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			<input class="btn btn-submit" type="submit" value="Confirm">
		</div>
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		handleWithdrawTo = function(type) {
			$(".withdraw_to_type").addClass('d-none');

			if(type == 'bank_transfer')
				$('.bank_details_block').removeClass('d-none');
			else
				$('.paypal_details_block').removeClass('d-none')
		}

		$('#withdraw_to').on('change', function(){
			handleWithdrawTo($(this).val());
		});

	    $("#create_withdraw_form").submit(function(e) {
	    	e.preventDefault();
	    	$this = $(this);

    		$.ajax({
                url:'<?= base_url("usercontrol/store_withdraw_request") ?>',
                type:'POST',
                dataType:'json',
                data:$this.serialize(),
                beforeSend:function(){ $this.find(".btn-submit").btn("loading"); },
                complete:function(){ $this.find(".btn-submit").btn("reset"); },
                success:function(json){
                    if(json['redirect']){ window.location.replace(json['redirect']); }
                    if(json['warning']){ alert(json['warning']) }

                    $this.find(".is-invalid").removeClass("is-invalid");
                    $this.find("span.invalid-feedback").remove();

                    if(json['errors']){
                        $.each(json['errors'], function(i,j){
                            $ele = $this.find('[name="'+ i +'"]');
                            if($ele){
                                $formGroup = $ele.parents(".form-group");
                                $ele.addClass("is-invalid");
                                if($formGroup.find(".input-group").length){
                                    $formGroup.find(".input-group").after("<span class='invalid-feedback'>"+ j +"</span>");
                                } else {
                                    $ele.after("<span class='invalid-feedback'>"+ j +"</span>");
                                }
                            }
                        })
                    }
                },
            });
	    });
	});
</script>