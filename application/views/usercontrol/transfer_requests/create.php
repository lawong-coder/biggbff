<style type="text/css">
	.mobile_view .topbar_bg {
		display: none;
	}
</style>
<div class="create_form_page create_transfer_page new_member_page">
	<div class="row top_block">
		<div class="col-sm-12">
			<a href="<?= base_url('usercontrol/transfer_requests') ?>" class="btn-link back-btn"><i class="fas fa-arrow-left"></i> Transfer</a>
		</div>
	</div>
	<form action="" method="POST" role="form" name="create_transfer_form" class="create_transfer_form" id="create_transfer_form" novalidate="" autocomple="off">
		<div class="form-group">
			<label class="control-label" for="transfer_from">Transfer From</label>
			<input type="text" class="form-control" name="transfer_from" id="transfer_from" placeholder="Transfer From" value="E-wallet" readonly>
			<small id="help_text" class="form-text text-right help_text">Available balance: <span>$<?= round_to_2dp($user->eWallet->balance); ?></span></small>
		</div>
		<div class="form-group">
			<label class="control-label" for="transfer_to">Transfer To</label>
			<select name="transfer_to" class="transfer_to_autocomplete form-control" id="transfer_to"></select>
		</div>
		<div class="form-group">
			<label class="control-label" for="mobile_no">Mobile No</label>
			<input type="text" class="form-control" name="mobile_no" id="mobile_no" placeholder="Mobile No" readonly>
		</div>
		<div class="form-group custom_input">
			<label class="control-label" for="amount">Amount</label>
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
		
		$(".transfer_to_autocomplete").select2({
			ajax: {
				url: '<?= base_url('usercontrol/get_transfer_to_users') ?>',
				dataType: 'json',
				data: function(params) {
					return {
						p: params.term,
						page: params.page
					};
				},
				processResults: function(data, params) {

					/*var data = $.map(data, function(obj) {
						obj.id = obj.id;
						obj.text = obj.name;
						obj.mo_no = obj.mo_no;
						return obj;
					});*/

					return {
						results: data
					};

				},
				cache: true
			},
			escapeMarkup: function(markup) {
				return markup;
			},
			allowClear: true,
			minimumInputLength:0,
			placeholder: 'Transfer To',

	    }).on('select2:select', function(event) {
	    	if(typeof(event.params.data.mo_no) != 'undefined')
	    	{
		    	$('#mobile_no').val(event.params.data.mo_no)
	    	}
	    });

	    $(".transfer_to_autocomplete").on('change', function(event) {
	    	if($(this).val() == null) {
	    		$('#mobile_no').val('');
	    	}
	    })

	    $("#create_transfer_form").submit(function(e) {
	    	e.preventDefault();
	    	$this = $(this);

    		$.ajax({
                url:'<?= base_url("usercontrol/store_transfer_request") ?>',
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