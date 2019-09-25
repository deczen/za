<?php
extract($requests);

$default_downpayment=$default_homeprice * $default_downpayment_percent / 100;
if(!$default_taxes_ammount){	
	$default_taxes=$default_homeprice * $default_taxes_percent / 100;
}else{
	$default_taxes=$default_taxes_ammount;
	$default_taxes_percent=$default_taxes * 100 / $default_homeprice;
}
$default_mortgage_insurance=($default_homeprice/12) * $default_mortgage_insurance_percent / 100;
$default_homeowners_insurance=($default_homeprice/12) * $default_homeowners_insurance_percent / 100;

$formatted_homeprice = zipperagent_currency() . round($default_homeprice, 2);
$formatted_downpayment_percent = $default_downpayment_percent . '%';
$formatted_downpayment = zipperagent_currency() . round($default_downpayment, 2);
$formatted_taxes_percent = $default_taxes_percent . '%';
$formatted_taxes = zipperagent_currency() . round($default_taxes, 2);
$formatted_hoadues = zipperagent_currency() . round($default_hoadues, 2);
$formatted_mortgage_insurance_percent = $default_mortgage_insurance_percent . '%';
$formatted_mortgage_insurance = zipperagent_currency() . round($default_mortgage_insurance, 2);
$formatted_homeowners_insurance_percent = $default_homeowners_insurance_percent . '%';
$formatted_homeowners_insurance = zipperagent_currency() . round($default_homeowners_insurance, 2);
$formatted_interestrate = $default_interestrate. '%';
?>
<link rel="stylesheet" type="text/css" href="<?php echo zipperagent_url(false) . 'css/detail-page.css'; ?>">
<div class="zy-mortgage-calculator">
	<h3>Payment Calculator</h3>
	<div class="zy-mortgage-title">
		<p id="zy-mortgage-total">-</p>
	</div>
	<div class="zy-mortgage-sub-title">
		<p id="zy-mortgage-interest">-</p>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 mb-12">
			<div class="zy_mortgage-bar">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 mb-12 mg-detail">
		</div>
		<div class="col-xs-12 col-sm-12 mb-12 mg-input">
			<div class="row row-group">
				<div id="zy_homeprice" class="col-xs-12 col-sm-6 mb-6">
					<label>Home Price</label>
					<input type="text" name="home_price" class="price-format" id="mortgage-homeprice" value="<?php echo $formatted_homeprice; ?>">
					<input type="hidden" id="zy-mortgage-homeprice" />
				</div>
				<div id="zy_downpayment" class="col-xs-12 col-sm-6 mb-6">
					<label>Down Payment</label>
					<div class="col-2-group">
						<input type="text" name="down_payment" class="price-format" id="mortgage-downpayment" value="<?php echo $formatted_downpayment; ?>">
						<input type="text" name="down_payment_percent" class="percent-format" id="mortgage-downpayment-percent" value="<?php echo $formatted_downpayment_percent; ?>">
					</div>
					<input type="hidden" id="zy-mortgage-downpayment" />
				</div>
			</div>
			<div class="row row-group">
				<div id="zy_property-taxes" class="col-xs-12 col-sm-6 mb-6">
					<label>Property Taxes</label>
					<div class="col-2-group">
						<input type="text" name="zy_property-taxes" class="price-format" id="mortgage-property-taxes" value="<?php echo $formatted_taxes; ?>">
						<input type="text" name="zy_property_taxes_percent" class="percent-format" id="mortgage-property-taxes-percent" value="<?php echo $formatted_taxes_percent; ?>">
					</div>
				</div>
				<div id="zy_hoa-dues" class="col-xs-12 col-sm-6 mb-6">
					<label>HOA Dues</label>
					<input type="text" name="hoa_dues" class="price-format" id="mortgage-hoa-dues" value="<?php echo $formatted_hoadues; ?>">
				</div>			
			</div>
			<div class="row row-group">
				<div id="zy_mortgage-insurance" class="col-xs-12 col-sm-6 mb-6">
					<label>Mortgage Insurance</label>
					<div class="col-2-group">
						<input type="text" name="mortgage_insurance" class="price-format" id="mortgage-insurance" value="<?php echo $formatted_mortgage_insurance; ?>">
						<input type="text" name="mortgage_insurance_percent" class="percent-format" id="mortgage-insurance-percent" value="<?php echo $formatted_mortgage_insurance_percent; ?>">
					</div>
				</div>
				<div id="zy_homeowners-insurance" class="col-xs-12 col-sm-6 mb-6">
					<label>Homeowners' Insurance</label>
					<div class="col-2-group">
						<input type="text" name="homeowners_insurance" class="price-format" id="mortgage-homeowners-insurance" value="<?php echo $formatted_homeowners_insurance; ?>">
						<input type="text" name="homeowners_insurance_percent" class="percent-format" id="mortgage-homeowners-insurance-percent" value="<?php echo $formatted_homeowners_insurance_percent; ?>">
					</div>
				</div>
			</div>
			<div class="row row-group">
				<div id="zy_interest-rate" class="col-xs-12 col-sm-6 mb-6">
					<label>Interest Rate</label>
					<input type="text" name="interest_rate" class="percent-format" id="mortgage-interest-rate" value="<?php echo $formatted_interestrate; ?>">
				</div>
				<div id="zy_loan-type" class="col-xs-12 col-sm-6 mb-6">
					<label>Loan Type</label>
					<select name="loan_type" id="mortgage-loan-type">
						<option <?php selected( $default_loan_type, '30yrs' ); ?> value="30yrs">30 Years Fixed</option>
						<option <?php selected( $default_loan_type, '15yrs' ); ?> value="15yrs">15 Years Fixed</option>
						<option <?php selected( $default_loan_type, '5-1arm' ); ?> value="5-1arm">5/1 ARM</option>
					</select>
				</div>
			</div>	
		</div>
	</div>
</div>

<?php /*
<script>

	// jQuery(document).ready(function(){

		var $homeprice = jQuery("#zy-mortgage-homeprice");
		var homeprice_min = 50000,
			homeprice_max = 2000000;
		$homeprice.ionRangeSlider({
			type: "single",
			grid: false,
			min: homeprice_min,
			max: homeprice_max,
			step: 10000,
			// prefix: "$",
			from: 840000,
		});
		
		var slider_homeprice = document.getElementById('zy-mortgage-homeprice'),
			input_homeprice = document.getElementById('mortgage-homeprice');
		
		var slider_homeprice_output = parseFloat(slider_homeprice.value).toLocaleString(); 
		
		input_homeprice.value = '$' + slider_homeprice_output;
		
		slider_homeprice.oninput=function(){
			
			var slider_homeprice_output2=parseFloat(slider_homeprice.value).toLocaleString(); 
			
			input_homeprice.value = '$' + slider_homeprice_output2;
			
		};
		
		var $downpayment = jQuery("#zy-mortgage-downpayment");
		var downpayment_min = 50000,
			downpayment_max = 2000000;
		$downpayment.ionRangeSlider({
			type: "single",
			grid: false,
			min: downpayment_min,
			max: downpayment_max,
			step: 10000,
			// prefix: "$",
			from: 1250000,
		});
		
		var slider_downpayment = document.getElementById('zy-mortgage-downpayment'),
			input_downpayment = document.getElementById('mortgage-downpayment'),
			input_downpayment_percent = document.getElementById('mortgage-downpayment-percent');
			
		var int_downpayment_min = parseFloat(downpayment_min),
			int_downpayment_max = parseFloat(downpayment_max),
			total_downpayment = int_downpayment_max-int_downpayment_min,
			range_downpayment = slider_downpayment.value-int_downpayment_min;
		
		var slider_downpayment_output = parseFloat(slider_downpayment.value).toLocaleString(); 
		var percent_downpayment=(range_downpayment*100)/total_downpayment;
		
		input_downpayment.value='$' + slider_downpayment_output;
		input_downpayment_percent.value = percent_downpayment.toFixed(0)  + '%';;
		
		slider_downpayment.oninput=function(){
			
			var range_downpayment_now = slider_downpayment.value-int_downpayment_min;
			var percent_downpayment_now = (range_downpayment_now*100)/total_downpayment;
			var slider_downpayment_output2 = parseFloat(slider_downpayment.value).toLocaleString(); 
			
			input_downpayment.value = '$' + slider_downpayment_output2;
			input_downpayment_percent.value = percent_downpayment_now.toFixed(0) + '%';
	
			
		};

	// });
</script> */ ?>

<script>		
	function mortgage_format(number){
		number = !jQuery.isNumeric(number) ? number.replace(/[^0-9\.]/g,'') : number;
		number = number ? number : 0;
		// number = parseFloat(number).toLocaleString();
		return "<?php echo zipperagent_currency(); ?>" + number;
	}
	function mortgage_unformat(number){
		number = number ? number.replace(/[^0-9\.]/g,'') : "";
		return number;
	}
	function mortgage_percentage(number){
		number = number ? number : 0;
			
		if(number < 0) number = 0; //min 0
		if(number > 100) number = 100; //max 100
		
		return parseFloat(number)+'%';
	}
	
	jQuery('#zy_mortgage-calculator .price-format').on('keyup', function(event){
		var curr_val = jQuery(this).val();
		var adj_val = mortgage_unformat(curr_val);
		jQuery(this).val(adj_val);
	});
	jQuery('#zy_mortgage-calculator .price-format').focusin(function(){
		var formatted_number = jQuery(this).val();	
		var number = mortgage_unformat(formatted_number);
		jQuery(this).val(number);
	});
	jQuery('#zy_mortgage-calculator .price-format').focusout(function(){					
		var number = jQuery(this).val();	
		var formatted_number = mortgage_format(number);
		jQuery(this).val(formatted_number);
	});	
	jQuery('#zy_mortgage-calculator .percent-format').on('keyup', function(event){
		var curr_val = jQuery(this).val();
		
		var adj_val = mortgage_unformat(curr_val);
		
		if(adj_val < 0) adj_val = 0; //min 0
		if(adj_val > 100) adj_val = 100; //max 100
		
		jQuery(this).val(adj_val);
	});
	jQuery('#zy_mortgage-calculator .percent-format').focusin(function(){
		var formatted_percent_in = jQuery(this).val();
		var percent_in = mortgage_unformat(formatted_percent_in);		
		jQuery(this).val(percent_in);
	});
	jQuery('#zy_mortgage-calculator .percent-format').focusout(function(){		
		var percent_out = jQuery(this).val();
		percent_out = mortgage_percentage(percent_out);
		jQuery(this).val(percent_out);
	});	
	
</script>
<script>
	jQuery('#mortgage-downpayment').on( 'change', function(){
		var homeprice = jQuery('#mortgage-homeprice').val();
		var downpayment = jQuery(this).val();
		var percent = jQuery('#mortgage-downpayment-percent').val();
		homeprice = mortgage_unformat(homeprice);	
		downpayment = mortgage_unformat(downpayment);
		
		percent = downpayment / homeprice * 100;
		
		jQuery('#mortgage-downpayment-percent').val(mortgage_percentage(percent));
		
		mortgage_calculator_count();
	});
	jQuery('#mortgage-downpayment-percent').on( 'change', function(){
		var homeprice = jQuery('#mortgage-homeprice').val();
		var downpayment = jQuery('#mortgage-downpayment').val();
		var percent = jQuery(this).val();
		homeprice = mortgage_unformat(homeprice);	
		percent = mortgage_unformat(percent);
		
		downpayment = homeprice * percent / 100;
		
		jQuery('#mortgage-downpayment').val(mortgage_format(downpayment));
		
		mortgage_calculator_count();
	});
	jQuery('#mortgage-property-taxes').on( 'change', function(){
		var homeprice = jQuery('#mortgage-homeprice').val();
		var taxes = jQuery(this).val();
		var percent = jQuery('#mortgage-property-taxes-percent').val();
		homeprice = mortgage_unformat(homeprice);	
		taxes = mortgage_unformat(taxes);
		
		percent = taxes / homeprice * 100;
		
		jQuery('#mortgage-property-taxes-percent').val(mortgage_percentage(percent));
		
		mortgage_calculator_count();
	});
	jQuery('#mortgage-property-taxes-percent').on( 'change', function(){
		var homeprice = jQuery('#mortgage-homeprice').val();
		var taxes = jQuery('#mortgage-property-taxes').val();
		var percent = jQuery(this).val();
		homeprice = mortgage_unformat(homeprice);	
		percent = mortgage_unformat(percent);
		
		taxes = homeprice * percent / 100;
		
		jQuery('#mortgage-property-taxes').val(mortgage_format(taxes));
		
		mortgage_calculator_count();
	});
	jQuery('#mortgage-insurance').on( 'change', function(){
		var homeprice = jQuery('#mortgage-homeprice').val();
		var taxes = jQuery(this).val();
		var percent = jQuery('#mortgage-insurance-percent').val();
		homeprice = mortgage_unformat(homeprice);	
		taxes = mortgage_unformat(taxes);
		
		percent = taxes / ( homeprice / 12 ) * 100;
		
		jQuery('#mortgage-insurance-percent').val(mortgage_percentage(percent));
		
		mortgage_calculator_count();
	});
	jQuery('#mortgage-insurance-percent').on( 'change', function(){
		var homeprice = jQuery('#mortgage-homeprice').val();
		var taxes = jQuery('#mortgage-insurance').val();
		var percent = jQuery(this).val();
		homeprice = mortgage_unformat(homeprice);	
		percent = mortgage_unformat(percent);
		
		taxes = ( homeprice / 12 ) * percent / 100;
		
		jQuery('#mortgage-insurance').val(mortgage_format(taxes));
		
		mortgage_calculator_count();
	});
	jQuery('#mortgage-homeowners-insurance').on( 'change', function(){
		var homeprice = jQuery('#mortgage-homeprice').val();
		var taxes = jQuery(this).val();
		var percent = jQuery('#mortgage-homeowners-insurance-percent').val();
		homeprice = mortgage_unformat(homeprice);	
		taxes = mortgage_unformat(taxes);
		
		percent = taxes / ( homeprice / 12 ) * 100;
		
		jQuery('#mortgage-homeowners-insurance-percent').val(mortgage_percentage(percent));
		
		mortgage_calculator_count();
	});
	jQuery('#mortgage-homeowners-insurance-percent').on( 'change', function(){
		var homeprice = jQuery('#mortgage-homeprice').val();
		var taxes = jQuery('#mortgage-homeowners-insurance').val();
		var percent = jQuery(this).val();
		homeprice = mortgage_unformat(homeprice);	
		percent = mortgage_unformat(percent);
		
		taxes = ( homeprice / 12 ) * percent / 100;
		
		jQuery('#mortgage-homeowners-insurance').val(mortgage_format(taxes));
		
		mortgage_calculator_count();
	});
	
	jQuery('.zy-mortgage-calculator #mortgage-homeprice, .zy-mortgage-calculator #mortgage-hoa-dues, .zy-mortgage-calculator #mortgage-interest-rate, .zy-mortgage-calculator select').on( 'change', function(){
		mortgage_calculator_count();
	});
	
</script>
<script>
	function mortgage_calculator_count(){
		var data = {
			action: 'mortgage_calculator_count',			
			homeprice: jQuery('#mortgage-homeprice').val().replace(/[^0-9\.]/g,''),			
			downpayment: jQuery('#mortgage-downpayment').val().replace(/[^0-9\.]/g,''),			
			downpaymentpercent: parseFloat(jQuery('#mortgage-downpayment-percent').val()),			
			taxes: jQuery('#mortgage-property-taxes').val().replace(/[^0-9\.]/g,''),			
			taxespercent: parseFloat(jQuery('#mortgage-property-taxes-percent').val()),			
			hoadues: jQuery('#mortgage-hoa-dues').val().replace(/[^0-9\.]/g,''),			
			insurance: jQuery('#mortgage-insurance').val().replace(/[^0-9\.]/g,''),			
			insurancepercent: parseFloat(jQuery('#mortgage-insurance-percent').val()),			
			homeowners: jQuery('#mortgage-homeowners-insurance').val().replace(/[^0-9\.]/g,''),			
			homeownerspercent: parseFloat(jQuery('#mortgage-homeowners-insurance-percent').val()),			
			interestrate: parseFloat(jQuery('#mortgage-interest-rate').val()),			
			loantype: jQuery('#mortgage-loan-type').val(),			
		};
		
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				if( response['result'] ){
					
					jQuery('#zy-mortgage-total').html( response['mortgage_total'] );
					jQuery('#zy-mortgage-interest').html( response['mortgage_interest'] );
					jQuery('.zy_mortgage-bar').html( response['mortgage_bar'] );
					jQuery('.mg-detail').html( response['mortgage_detail'] );
				}
			}
		});
	}
	
	jQuery(document).ready(function(){
		mortgage_calculator_count();
	});
</script>