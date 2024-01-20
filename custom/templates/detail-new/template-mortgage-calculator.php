<?php
$default_homeprice=($single_property->status=='SLD'?(isset($single_property->saleprice)?$single_property->saleprice:$single_property->listprice):$single_property->listprice);
$default_taxes_ammount=isset($single_property->taxes)?$single_property->taxes:'';
$default_taxes_ammount=!$default_taxes_ammount ? ( isset($single_property->unmapped->PropertyTax)?$single_property->unmapped->PropertyTax:'' ) : $default_taxes_ammount;
$default_hoadues=isset($single_property->hoafee)?$single_property->hoafee:'';

$args['default_homeprice']=$default_homeprice;

if($default_taxes_ammount){
	$args['default_taxes_ammount']=$default_taxes_ammount;
}

if($default_hoadues){
	$args['default_hoadues']=$default_hoadues;
}

$rb = ZipperagentGlobalFunction()->zipperagent_rb();

if(isset($rb['mortgage']['default_interestrate']))
	$args['default_interestrate'] = $rb['mortgage']['default_interestrate'];

zipperagent_mortgage_calculator($args);
?>