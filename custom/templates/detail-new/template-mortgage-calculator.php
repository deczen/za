<?php
$default_homeprice=($single_property->status=='SLD'?(isset($single_property->saleprice)?$single_property->saleprice:$single_property->listprice):$single_property->listprice);
$default_taxes_ammount=isset($single_property->unmapped->PropertyTax)?$single_property->unmapped->PropertyTax:'';

$args['default_homeprice']=$default_homeprice;

if($default_taxes_ammount){
	$args['default_taxes_ammount']=$default_taxes_ammount;
}

$rb = ZipperagentGlobalFunction()->zipperagent_rb();

if(isset($rb['mortgage']['default_interestrate']))
	$args['default_interestrate'] = $rb['mortgage']['default_interestrate'];

zipperagent_mortgage_calculator($args);
?>