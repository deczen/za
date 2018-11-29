<?php
global $post;

$listprice = get_post_meta( $post->ID, '_lp_listing_price', true );
$status = get_post_meta( $post->ID, '_lp_status', true );
$proptype = get_post_meta( $post->ID, '_lp_proptype', true );
$beds = get_post_meta( $post->ID, '_lp_bedrooms', true );
$bath = get_post_meta( $post->ID, '_lp_bathrooms', true );

?>
<div id="property-highlight" style="display:none">
	<div class="listprice">
		<span><?php echo zipperagent_currency() . number_format_i18n( $listprice, 0 ); ?></span>
	</div>
	<div class="status">
		<span>Status</span>
		<span><?php echo $status; ?></span>
	</div>
	<div class="proptype">
		<span>Type</span>
		<span><?php echo $proptype; ?></span>
	</div>
	<div class="beds">
		<span>Beds</span>
		<span><?php echo $beds; ?></span>
	</div>
	<div class="bath">
		<span>Bath</span>
		<span><?php echo $bath; ?></span>
	</div>
</div>		
<script>
	jQuery(document).ready(function($){
		 
		 var width=$('#property-highlight').width();
		 resize(width);
		 
		 $(window).on("resize", function(){
			width=$('#property-highlight').width();
			resize(width);
		 });		
		 
		 function resize(width){
			if(width<=768){
				$('#property-highlight > div').addClass('block');
			}else{
				$('#property-highlight > div').removeClass('block');
			}
		 }
		 
		 $('#property-highlight').fadeIn();
	});
</script>
<style>
#property-highlight{box-shadow: 0 1px 2px rgba(0,0,0,.1); width:100%;}
#property-highlight .listprice{
    background:#880000;
    color: #fff;
    font-weight:bold;
    font-size:20px;
    border-right:1px solid #880000;
}
#property-highlight > div{
    width:20%;
    float:left;
    border-right:1px solid #ddd;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
    padding:10px 0;
    text-align:left;
}
#property-highlight > div > span:first-child{
    padding-left:10px;
}
#property-highlight > div >span:nth-child(2){
    padding-right:10px;
    font-weight:bold;
    float:right;
}
#property-highlight > div.block{
    display:block;
    float:none;
    width:100%;
}
#property-highlight .listprice.block{
    border-left:1px solid #880000;
    text-align:center;
}
#property-highlight > div.block:not(:first-child){
    border-left:1px solid #ddd;
    border-top:none;
}
@media screen and (max-width:768px){
    #property-highlight > div{
        display:block;
        float:none;
        width:100%;
    }
    #property-highlight .listprice{
        border-left:1px solid #880000;
        text-align:center;
    }
    #property-highlight > div:not(:first-child){
        border-left:1px solid #ddd;
		border-top:none;
    }
}
</style>