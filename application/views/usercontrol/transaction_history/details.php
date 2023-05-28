<div class="transaction_details_page with_curve_page new_member_page">
	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<?php
            		$result = App\UserBalanceLog::getTransferDetails($transaction, $user);
            	?>
				<div class="card-header">
					<h5 class="card-title m-0"><?= $result['text'] ?> Details</h5>
				</div>
				<ul class="list-group list-group-flush">
					<?php if(!empty($result['details'])) { 
						foreach ($result['details'] as $name => $value) {
					?>
						<li class="list-group-item"><b><?= $name ?>:</b> <?= $value ?></li>
					<? } } ?>
				</ul>
			</div>
		</div>
	</div>
</div>