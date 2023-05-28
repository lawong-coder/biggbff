<?php print_message($this); ?>

<div class="row" ng-app="affiliatePro" ng-controller="createPlan">
    <div class="col-12">
        <form id="form_plan">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h4 class="header-title pull-left m-0">Edit Plan</h4>
                            <a href="<?= base_url('membership/plans') ?>" class="btn btn-sm btn-default pull-right">Back</a>
                        </div>
                        <div class="card-body">
                        	<input type="text" class="d-none" name="id" ng-model='plan.id'>
                            <div class="form-group">
                            	<label class="form-control-label">Belt Name</label>
                            	<input type="text" name="name" class="form-control" ng-model='plan.name'>
                            </div>

                            <!-- <div class="form-group">
                            	<label class="form-control-label">Type</label>
                            	<select name="type" class="form-control" ng-model='plan.type'>
                            		<option value="">Choose Plan Type</option>
                            		<option value="free">Free</option>
                            		<option value="paid">Paid</option>
                            	</select>
                                <div ng-show='plan.type == "free"' class="text-danger">
                                    If this is your Default Trail Package on Registration, Choose to not display it.
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label class="form-control-label">Belt Size</label>
                                <input type="text" name="belt_size" class="form-control" ng-model='plan.belt_size'>
                            </div>

                            <div class="form-group">
                            	<label class="form-control-label">Package Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><?= $CurrencySymbol ?></span></div>
                    	            <input type="text" name="price" class="form-control only-number-allow" ng-model='plan.price'>
                                </div>
                            </div>

                            <!-- <div class="form-group" ng-show='plan.type == "paid"'>
                                <label class="form-control-label">Special Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><?= $CurrencySymbol ?></span></div>
                                    <input type="text" name="special" class="form-control only-number-allow" ng-model='plan.special'>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Welcome Bonus</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><?= $CurrencySymbol ?></span></div>
                                    <input type="text" name="bonus" class="form-control only-number-allow" ng-model='plan.bonus'>
                                </div>
                            </div> -->

                            <div class="form-group">
                            	<div class="row">
                            		<div class="col">
                            	       <label class="form-control-label">Membership Type</label>
		                            	<select class="form-control" ng-model='plan.billing_period' name="billing_period">
		                            		<option value="">Choose Membership Type</option>
		                            		<option value="daily">Daily</option>
		                            		<option value="weekly">Weekly</option>
		                            		<option value="monthly">Monthly</option>
		                            		<option value="yearly">Yearly</option>
		                            		<option value="lifetime_free">Lifetime</option>
                                            <option value="custom">Custom</option>
		                            	</select>
                            		</div>
                            		<div class="col" ng-show='plan.billing_period=="custom"'>
                                        <label class="form-control-label">Days</label>
		                            	<div>
			                            	<input type="text" name="custom_period" ng-model='plan.custom_period' class="form-control only-number-allow" placeholder="Enter Custom In Days">
		                            	</div>
                            		</div>
                            	</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Hosting Cost</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><?= $CurrencySymbol ?></span></div>
                                    <input type="text" name="hosting_cost" class="form-control only-number-allow" ng-model='plan.hosting_cost'>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Maturity Rewards (MR)</label>
                                <input type="text" name="fego_shares" class="form-control only-number-allow" ng-model='plan.fego_shares'>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Product Points (PP)</label>
                                <input type="text" name="bigg_coupon" class="form-control only-number-allow" ng-model='plan.bigg_coupon'>
                            </div>

                           <!--  <div class="form-group" ng-show='plan.type == "paid"'>
                            	<label class="form-control-label">
	                            	Add free trial &nbsp;
	                            </label>
	                            <div>
	                            	<label><input type="radio" value="0" ng-checked='plan.have_trail == "0"' name="have_trail" ng-model='plan.have_trail'> No</label>
		                            <label><input type="radio" value="1" ng-checked='plan.have_trail == "1"' name="have_trail" ng-model='plan.have_trail'> Yes</label>
	                            </div>
                            </div>

                            <div class="form-group" ng-show='plan.have_trail == "1"'>
                            	<label class="form-control-label">Free trial</label>
                            	<input type="text" placeholder="Enter Free trial In Days" name="free_trail" class="form-control" ng-model='plan.free_trail'>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Label Text</label>
                                <input type="text" name="label_text" class="form-control" ng-model='plan.label_text'>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Label Background</label>
                                <input type="text" name="label_background" class="form-control" data-jscolor="{position:'right'}" ng-model='plan.label_background'>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Label Color</label>
                                <input type="text" name="label_color" class="form-control" data-jscolor="{position:'right'}" ng-model='plan.label_color'>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <textarea placeholder="Enter Description" name="description" class="form-control summernote-img" ng-model='plan.description'></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Sort Order</label>
                                <input type="text" name="sort_order" class="form-control" ng-model='plan.sort_order'>
                            </div> -->
                            <!-- <div class="form-group">
                                <label class="form-control-label">Display </label>
                                <select class="form-control" ng-model='plan.status' name="status">
                                    <option value="">Is Display ?</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div> -->

                            <div class="form-group">
                                <label class="form-control-label">Promotion Bonus (PB)</label>
                                <?php
                                    $element_counter = 0;
                                ?>
                                <div class="products-list">
                                    <?php
                                        $products = (isset($plan->products) && !empty($plan->products)) ? json_decode($plan->products) : [];

                                    ?>

                                    <?php 
                                        if(count($products) > 0) {
                                            foreach ($products as $key => $product) {
                                    ?>
                                        <div class="row new-product" style="padding-bottom: 10px;">
                                            <div class="col">
                                                <input type="text" name="product[<?= $element_counter ?>][name]" class="form-control product_name" placeholder="Enter Name" value="<?= $product->name ?>">
                                            </div>
                                            <div class="col">
                                                <input type="text" name="product[<?= $element_counter ?>][quantity]" class="form-control only-number-allow product_quantity" placeholder="Enter quantity" value="<?= $product->quantity ?>">
                                            </div>
                                        </div>
                                        <?php
                                            $element_counter++;
                                        ?>
                                    <?php
                                        }} else {
                                    ?>
                                        <div class="row new-product">
                                            <div class="col">
                                                <input type="text" name="product[0][name]" class="form-control product_name" placeholder="Enter Name">
                                            </div>
                                            <div class="col">
                                                <input type="text" name="product[0][quantity]" class="form-control only-number-allow product_quantity" placeholder="Enter quantity">
                                            </div>
                                        </div>
                                        <?php
                                            $element_counter++;
                                        ?>
                                    <?php
                                        }
                                    ?>

                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <a href="javascript:void(0);" class="btn btn-sm add-product btn-success"><i class="fa fa-plus"></i> Add</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Bigg Coins</label>
                                <input type="text" name="bigg_coins" class="form-control only-number-allow" ng-model='plan.bigg_coins'>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Other Benefits</label>
                                <textarea placeholder="Enter Benefits" name="other_benefits" class="form-control summernote-img" ng-model='plan.other_benefits'></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                        	<button ng-click='submitForm($event,1)' class="btn-submit btn-primary btn" type="submit"> Save and Close</button>
                            <button ng-click='submitForm($event,0)' class="btn-submit btn-primary btn" type="submit"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div> 
</div>
<script type="text/javascript" src="<?= base_url('assets/js/jscolor.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/angular.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/angular.tool.js?v='.time()) ?>"></script>
<script type="text/javascript">
	app.controller('createPlan', function($scope, $http) {
	    $scope.plan = <?= json_encode($plan) ?>;

	    $scope.submitForm = function($event, close){
	    	var data = $("#form_plan").serializeArray();

	    	ngCall($http, 'membership/submit_plan_form' + '?close='+close, {postData: data}, function(json){  
                handle_res(json)
            },function(){
                $($event.currentTarget).addClass("btn-loading")
            },function(){
                $($event.currentTarget).removeClass("btn-loading")
            })
	    }
	});

    addProduct = function(element, product, element_counter)
    {
        var product_template = product.clone();

        product_template.find(".product_name").attr('name', 'product['+element_counter+'][name]');
        product_template.find(".product_quantity").attr('name', 'product['+element_counter+'][quantity]');
        product_template.find("input").each(function() {
            $(this).val('');
        });

        element.append(product_template)
    };


    $(document).on('ready',function() {
        sumNote($('.summernote-img'));

        var element_counter = "<?= $element_counter ?>";

        $(document).on('click', '.add-product', function() {
            var product = $(".products-list").children("div.new-product:last-child");

            var has_error = false;

            product.find('input').each(function(){
                if (! $(this).val()) {
                    $(this).trigger('focus');
                    has_error = true;
                    return false;
                }
                has_error = false;
            });

            if (! has_error) {

                addProduct($(".products-list"), product, element_counter);
                element_counter++;
            }
        });
    });
</script>