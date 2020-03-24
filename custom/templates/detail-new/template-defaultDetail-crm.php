<?php

$listingId = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
$contactIds=get_contact_id();
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = isset($_REQUEST['actual_link'])?$_REQUEST['actual_link']:$actual_link; // fix on ajax request
?>
<?php /* <link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/bootstrap.min.css'; ?>">	*/ ?>
<script defer type="text/javascript" src="https://app.zipperagent.com/za-jslib/za-jsutil.min.js"></script>
<script defer type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/zipperagent.js" ?>"></script>
<link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/detail.css'; ?>">	

<div id="zipperagent-content">
	<!-- print views -->
	<?php /*
	
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$print_logo = isset($rb['web']['print_logo'])?$rb['web']['print_logo']:'';
		$print_color = isset($rb['web']['print_color'])?$rb['web']['print_color']:'';
	?>	
	<div id="print-view-column" class="zy-print-view js-print-view top-brdr no-border" style="border-color: <?php echo $print_color; ?>">
	<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save print section ?>
	<?php
		include ZIPPERAGENTPATH . '/custom/templates/detail-new/template-defaultPrint.php'; */
	?>	
	</div>
</div>
<script>
	jQuery(document).ready(function(){
		var response = zppr.anonget('#zipperagent-content','<?php echo $listingId; ?>','<?php echo $actual_link ; ?>');
		
		console.log(response);
		// if(response.responseCode==200){
			// var property = response.result.property;
			// var real_price = zppr.moneyFormat(property.listprice);
			// jQuery('#zpa-modal-share-email-form .listing-price > span').html(real_price);
		// }
	});
</script>