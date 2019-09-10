<?php
$default_homeprice=($single_property->status=='SLD'?(isset($single_property->saleprice)?$single_property->saleprice:$single_property->listprice):$single_property->listprice);
$default_taxes_ammount=isset($single_property->unmapped->PropertyTax)?$single_property->unmapped->PropertyTax:'';

$args['default_homeprice']=$default_homeprice;

if($default_taxes_ammount){
	$args['default_taxes_ammount']=$default_taxes_ammount;
}

zipperagent_mortgage_calculator($args);
?>