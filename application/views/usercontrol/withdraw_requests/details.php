<div class="withdraw_details_page with_curve_page new_member_page">
	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title m-0">Withdrawn Details</h5>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><b>Date:</b> <?= date('d-m-Y | H:i A', strtotime($withdraw_request->created_at)) ?></li>
					<li class="list-group-item"><b>Amount:</b> <?= c_format($withdraw_request->amount) ?></li>
					<li class="list-group-item"><b>Bank Name:</b> <?= isset($withdraw_request->bank_name) ? $withdraw_request->bank_name : '' ?></li>
					<li class="list-group-item"><b>Bank Account:</b> <?= isset($withdraw_request->account_no) ? $withdraw_request->account_no : '' ?></li>
					<li class="list-group-item"><b>Account Holder Name:</b> <?= isset($withdraw_request->account_holder_name) ? $withdraw_request->account_holder_name : '' ?></li>
					<li class="list-group-item"><b>Status:</b> <?= isset($withdraw_request->status) ? new_withdrwal_status($withdraw_request->status) : '' ?></li>
					<li class="list-group-item"><b>Remark:</b> <?= isset($withdraw_request->remarks) ? $withdraw_request->remarks : '' ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>