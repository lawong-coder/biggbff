<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/wallet.css?v='. time()) ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/flag/css/main.min.css?v='. time()) ?>">
<div class="row">
	<div class="col-lg-12 col-md-12">
		<?php if($this->session->flashdata('success')){?>
			<div  class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?php echo $this->session->flashdata('success'); ?> </div>
		<?php } ?>
		<?php if($this->session->flashdata('error')){?>
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?php echo $this->session->flashdata('error'); ?> </div>
		<?php } ?>
	</div>
</div>


<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h6 class="m-0">Withdraw Requests Details #<?= $request['id'] ?></h6>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-4">
						<h6 class="font-14 text-info with-heading">Request Details</h6>
						<table class="details-dtable">
							<tr>
								<th>ID</th>
								<td> <?= $request->id ?></td>
							</tr>
							<tr>
								<th>First Name</th>
								<td> <?= isset($request->user->firstname) ? $request->user->firstname : '' ?></td>
							</tr>
							<tr>
								<th>Last Name</th>
								<td> <?= isset($request->user->lastname) ? $request->user->lastname : '' ?></td>
							</tr>
							<tr>
								<th>Username</th>
								<td> <?= isset($request->user->username) ? $request->user->username : '' ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td> <?= isset($request->user->email) ? $request->user->email : '' ?></td>
							</tr>
							<tr>
								<th>Joined Date</th>
								<td> <?= isset($request->user->created_at) ? $request->user->created_at : '' ?></td>
							</tr>
							<tr>
								<th>Amount</th>
								<td> <?= c_format($request->amount) ?></td>
							</tr>
							<tr>
								<th>Requested</th>
								<td> <?= $request->created_at ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td> <?= new_withdrwal_status($request->status) ?></td>
							</tr>
							<tr>
								<th>Updated</th>
								<td> <?= $request->date ?></td>
							</tr>
							<tr>
								<th>Payment Method</th>
								<td> <?= ($request->withdraw_to == 'bank_transfer') ? 'Bank Transfer' : 'Paypal' ?></td>
							</tr>
							<tr valign="top">
								<th class="text-capitalize">Bank name</th>
								<td style="white-space: pre-line;"><?= $request['bank_name'] ?></td>
							</tr>
							<tr valign="top">
								<th class="text-capitalize">Account No/PayNow No</th>
								<td style="white-space: pre-line;"><?= $request['account_no'] ?></td>
							</tr>
							<tr valign="top">
								<th class="text-capitalize">Account holder name</th>
								<td style="white-space: pre-line;"><?= $request['account_holder_name'] ?></td>
							</tr>
						</table>
					</div>
					<div class="col-sm-4">
						<h6 class="font-14 text-info with-heading">Change Status</h6>
						<div class="well add-history-form">
							<div class="form-group">
								<label class="form-control-label">Status</label>
								<select class="form-control" name="status">
									<option value="">Select Status</option>
									<?php foreach ($status_list as $key => $value) { ?>
										<option value="<?= $key ?>" <?= ($request['status'] == $key) ? 'selected' : '' ?> ><?= $value ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label class="form-control-label">Comment</label>
								<textarea name="remarks" class="form-control"><?= ($request['remarks']) ? $request['remarks'] : '' ?></textarea>
							</div>
							<div class="form-group mb-0 text-right">
								<button class="btn btn-sm btn-add-status btn-info">Update Status</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".btn-add-status").on("click",function(){
		$this = $('.add-history-form');
		$.ajax({
			type:'POST',
			dataType:'json',
			data:$(".add-history-form :input"),
			beforeSend:function(){
				$('.btn-add-status').btn("loading");
			},
			complete:function(){
				$('.btn-add-status').btn("reset");
			},
			success:function(json){
				$container = $this;
				$container.find(".is-invalid").removeClass("is-invalid");
				$container.find("span.invalid-feedback").remove();
		
				if (json['success']) {
					window.location.reload();
				}
				
				if(json['errors']){
				    $.each(json['errors'], function(i,j){
				        $ele = $container.find('[name="'+ i +'"]');
				        if($ele){
				            $ele.addClass("is-invalid");
				            if($ele.parent(".input-group").length){
				                $ele.parent(".input-group").after("<span class='invalid-feedback'>"+ j +"</span>");
				            } else{
				                $ele.after("<span class='invalid-feedback'>"+ j +"</span>");
				            }
				        }
				    })
				}
			},
		})
	})

	$(document).delegate('.wallet-popover','click', function(){
		var html = $(this).parents("tr").find(".dpopver-content").html();
        $(this).attr('data-content',html);
	    if($('.popover').hasClass('show')){
	        $('.popover').remove()
	    } else {
	        $(this).popover('show');
	    }
	});

	$('html').on('click', function(e) {
	  if (typeof $(e.target).data('original-title') == 'undefined' &&
	     !$(e.target).parents().is('.popover.in')) {
	    $('[data-original-title]').popover('hide');
	  }
	});

	$(document).ready(function(){
		$(".wallet-popover").popover({
	        placement : 'right',
		    html : true,
	    });
	})
</script>