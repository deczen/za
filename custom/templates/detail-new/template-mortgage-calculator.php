<?php
$default_homeprice=($single_property->status=='SLD'?(isset($single_property->saleprice)?$single_property->saleprice:$single_property->listprice):$single_property->listprice);

$args['default_homeprice']=$default_homeprice;

zipperagent_mortgage_calculator($args);
?>