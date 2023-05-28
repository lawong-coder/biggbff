<div class="form-group">
	<label class="form-control-label">Note</label>
	<input class="form-control" name="note" >
</div>
<script type="text/javascript">
	$("#payment-form-fomo").submit(function(){
		$this = $(this);
		$.ajax({
			url:'<?= base_url("membership_callback/fomo/doPayment") ?>',
			type:'POST',
			dataType:'json',
			data:$("#payment-form-fomo").serialize(),
			beforeSend:function(){
				$this.find('.btn-submit').btn("loading");
			},
			complete:function(){
				$this.find('.btn-submit').btn("reset");
			},
			success:function(json){
				$container = $this;
				$container.find(".is-invalid").removeClass("is-invalid");
				$container.find("span.invalid-feedback").remove();
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
		return false;
	})
</script>