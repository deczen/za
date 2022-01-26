<?php
global $requests;

$mobile_item 		= isset($requests['mobile_item'])?$requests['mobile_item']:1;
$tablet_item 		= isset($requests['tablet_item'])?$requests['tablet_item']:1;
$desktop_item 		= isset($requests['desktop_item'])?$requests['desktop_item']:1;
$loop 				= isset($requests['loop'])?$requests['loop']:0;
$autoplay 			= isset($requests['autoplay'])?$requests['autoplay']:0;

$uniqid = uniqid();
$uniqueClass = 'result_'.$uniqid;
$uniqueClassWithDot = '.'.$uniqueClass;
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/owl.carousel.min.css'; ?>">	
<?php /* <script type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/date.format.js" ?>"></script> */ ?>
<script defer type="text/javascript" src="https://app.zipperagent.com/za-jslib/za-jsutilnew.min.js"></script>
<script defer type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/zipperagent.js" ?>"></script>
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/owl.carousel.min.js'; ?>"></script>

<div class="slider-container <?php echo $uniqueClass; ?>">
	<form id="zpa-slider-filter-form">
	<?php
		foreach($requests as $key=>$value){
			if(!in_array($key,get_wp_var_excludes())){
				zipperagent_generate_filter_input($key, $value);
			}
		}
	?>
	</form>
</div>
<script>
	
	jQuery(document).ready(function(){
		
		var parm=[];
		var subdomain=zppr.data.root.web.subdomain;
		var customer_key=zppr.data.root.web.authorization.consumer_key;		
		var requests = zppr.get_form_inputs(jQuery('<?php echo $uniqueClassWithDot; ?> #zpa-slider-filter-form'));		
		var params = zppr.generate_api_params(requests);
		var ps=params.ps;
		var sidx=params.sidx;
		var crit = params.crit;
		var anycrit = params.anycrit;
		var order=params.o;
		var contactId=zppr.data.contactIds.join();
		var actual_link="<?php echo $actual_link; ?>";
		
		var args={
			searchType:0,
			subdomain:subdomain,
			customer_key:customer_key,
			crit:crit,
			anycrit:anycrit,
			model:order,
			sidx:sidx,
			ps:ps,
			contactId:contactId,
		};

		zppr.search('<?php echo $uniqueClassWithDot; ?>.slider-container', 'slider', requests, args, actual_link, 0);
	});
</script>