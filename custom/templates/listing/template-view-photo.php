<?php
global $requests, $crit;

$query_args=array();
?>
<link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/owl.carousel.min.css'; ?>">	
<div class="">
   <?php 
	$i=0;
	foreach( $list as $option ): ?>
	<?php 				
	
	if( $open )
		$property=isset($option->mergedProperty)?$option->mergedProperty:null;
	else
		$property=$option;
	
	if( !isset($property->id) )
		continue;
	
	$fulladdress = zipperagent_get_address($property);
	
	$saved_crit=$search;
	$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
	if(!empty($searchId)){
		$query_args['searchId']= $searchId;
	}
	if(zp_using_criteria() && !empty($critBase64)){
		$query_args['criteria']= $critBase64;
	}
	if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
		$query_args['newsearchbar']= 1;
	}
	$single_url = add_query_arg( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
	?>						
	
	<div id="to_<?php echo $property->listno ?>" class="grid grid--gutters">
		<div class="cell cell-xs-12 cell-lg-8 uk-position-relative">
			<div class="mb-10">
				<h1 class="uk-h2 mb-5 listing-address" itemprop="address" itemtype="http://schema.org/PostalAddress"><a class="zy-text-default view_full_details" href="<?php echo $single_url; ?>"><span itemprop="streetAddress"><?php echo isset($property->streetno)? $property->streetno :'-'; ?> <?php echo isset($property->streetname)? zipperagent_fix_comma( $property->streetname ) :'-'; ?></span></a><div class="uk-text-muted zy-text-reset"><span itemprop="addressLocality"><!-- react-text: 1375 --><?php echo isset($property->lngTOWNSDESCRIPTION)? $property->lngTOWNSDESCRIPTION :'-'; ?><!-- /react-text --><!-- react-text: 1376 -->,&nbsp;<!-- /react-text --></span><span itemprop="addressRegion"><!-- react-text: 1378 --><?php echo isset($property->provinceState)? $property->provinceState :'-'; ?><!-- /react-text --><!-- react-text: 1379 -->&nbsp;<!-- /react-text --></span><span itemprop="postalCode"><!-- react-text: 1381 --><?php echo isset($property->zipcode)? $property->zipcode :'-'; ?><!-- /react-text --><!-- react-text: 1382 -->&nbsp;<!-- /react-text --></span></div></h1>
				<div class="grid grid-xs--full grid-md--thirds grid-lg--halves">
					<div class="cell"><i class="zpa-status <?php echo is_numeric($property->status)? 'status_'.str_replace(' ','',$property->status) : str_replace(' ','',$property->status); ?> zy-sash py-5 px-10 zy-listing-single__sash"><?php echo isset($property->status)? zipperagent_get_status_name($property->status,isset($property->sourceid)?$property->sourceid:'') :'-'; ?></i></div>
				</div>
			</div>
			<div class="uk-position-relative text-xs--center">
				<div>
					<div class="row listing-gallery js-listing-gallery flickity-enabled is-draggable" tabindex="0" style="height:auto; padding-bottom:0">
						<div class="photo-slider col-xs-12">
							<div class="slider-container"> 
								<!--Main Slider Start--> 
								<div id="slider" class="slider main-slider owl-carousel"> 
								<?php
								if( isset( $property->photoList ) && sizeof( $property->photoList ) ){
									$i=0;
									foreach ($property->photoList as $pic ){ ?>
										<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
										<div class="item <?php if($i==0) echo "active"; ?>"> <span class="zpa-center"> <img class="media-object zpa-center" alt="" src="<?php echo "//media.mlspin.com/photo.aspx?mls={$property->listno}&w=500&h=300&n={$i}" ?>"> </span> </div>
										<?php else: ?>
										<div class="item <?php if($i==0) echo "active"; ?>"> <span class="zpa-center"> <img class="media-object zpa-center" alt="" src="<?php echo $pic->imgurl; ?>"> </span> </div>
										<?php endif; ?>
									<?php 
									$i++;
									}
								}
								?>
								</div>
								<!--Main Slider End-->
								
								<!--Navigation Links For the Main Items
								<div class="slider-controls"> 
									<a class="slider-left" href="javascript:;"><span class="carousel-control"><i class="fa fa-2x fa-chevron-left"></i></span></a> 
									<a class="slider-right" href="javascript:;"><span class="carousel-control"><i class="fa fa-2x fa-chevron-right"></i></span></a> 
								</div> --> 
							</div>
						   
						   <!--Thumbnail slider container--> 
						   <div class="thumbnail-slider-container">											   
								<div id="thumbnailSlider" class="thumbnail-slider owl-carousel"> 
									<?php
									if( isset( $property->photoList ) && sizeof( $property->photoList ) ){
										$i=0;
										foreach ($property->photoList as $pic ){ ?>
											<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
											<div class="item"><span class="zpa-center"> <img class="media-object zpa-center" alt="" src="<?php echo "//media.mlspin.com/photo.aspx?mls={$property->listno}&w=100&h=100&n={$i}" ?>"> </span></div>
											<?php else: ?>
											<div class="item"><span class="zpa-center"> <img class="media-object zpa-center" alt="" src="<?php echo $pic->imgurl; ?>"> </span></div>
											<?php endif; ?>
										<?php 
										$i++;
										}
									}
									?>
									
								</div>
								<!--Thumbnail Slider End--> 
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="cell">
			<div class="mb-15 p-0 zy-panel">
				<div class="zy-panel__stack__sub zy-panel--small uk-text-center">
					<div class="uk-h1 uk-text-primary">
						<!-- react-text: 1395 -->$
						<!-- /react-text -->
						<!-- react-text: 1396 --><?php echo isset($property->listprice)? number_format_i18n( $property->listprice, 0 ) :'-'; ?>
						<!-- /react-text -->
						
					</div>
				</div>
				<div class="zy-panel__stack__sub">
					<ul class="zy-listing__feature-grid" style="margin-bottom:0">
						<li class="beds">
							<div class="attr-num"><?php echo isset($property->nobedrooms) ? $property->nobedrooms:'-'; ?></div>
							<div class="uk-text-small uk-text-truncate">BEDS</div>
						</li>
						<li class="acres">
							<div class="attr-num zy-listing__acreage-text"><?php echo isset($property->acre) ? $property->acre:'-'; ?></div>
							<div class="uk text-small uk-text-truncate">ACRES</div>
						</li>
						<li class="baths">
							<div class="attr-num"><?php echo isset($property->nobaths) ? $property->nobaths :'-'; ?></div>
							<div class="uk-text-small uk-text-truncate">BATHS</div>
						</li>
						<li class="half-baths">
							<div class="attr-num"><?php echo isset($property->nohalfbaths) ? $property->nohalfbaths :'-'; ?></div>
							<div class="uk-text-small uk-text-truncate">1/2 BATHS</div>
						</li>
						<li class="sqft">
							<?php
							$sqft = zipperagent_get_sqft($property);
							?>
							<div class="attr-num"><?php echo $sqft ? $sqft :'-'; ?></div>
							<div class="uk-text-small uk-text-truncate">SQFT</div>
						</li>
						<li class="price-sqft">
							<div class="attr-num"> &nbsp;
								<?php /*
								<!-- react-text: 1416 -->$
								<!-- /react-text -->
								<!-- react-text: 1417 -->217
								<!-- /react-text --> */ ?>
							</div>
							<div class="uk-text-small uk-text-truncate">&nbsp;<?php /* $/SQFT */ ?></div>
						</li>
					</ul>
				</div>
				<div class="zy-panel__stack__sub">
					<div class="m-0 zy-listing-table zy-listing__table-break">
						<div class="grid px-5">
							<div class="cell uk-text-bold">
								<!-- react-text: 1423 -->Neighborhood:
								<!-- /react-text -->
								<!-- react-text: 1424 -->
								<!-- /react-text -->
							</div>
							<div class="cell uk-text-right"><?php echo isset($property->neighborhood) ? $property->neighborhood :'-'; ?></div>
						</div>
						<div class="grid px-5">
							<div class="cell cell-xs-3 uk-text-bold">Type:</div>
							<div class="cell uk-text-right"><?php echo isset($property->proptype) ? zipperagent_property_type($property->proptype) :'-'; ?></div>
						</div>
						<div class="grid px-5">
							<div class="cell cell-xs-3 uk-text-bold">Built:</div>
							<div class="cell uk-text-right"><?php echo isset($property->yearbuilt) ? $property->yearbuilt :'-'; ?></div>
						</div>
						<div class="grid px-5">
							<div class="cell cell-xs-3 uk-text-bold">Area:</div>
							<?php
							$area = isset($property->lngAREADESCRIPTION) ? $property->lngAREADESCRIPTION : '';
							$area = isset($property->lngTOWNSDESCRIPTION) && !$area ? $property->lngTOWNSDESCRIPTION : $area;
							$area = isset($property->lngCOUNTYDESCRIPTION) && !$area ? $property->lngCOUNTYDESCRIPTION : $area;
							$area = isset($property->ShrtAREACODE) && !$area ? zipperagent_field_value( 'ShrtAREACODE', $property->ShrtAREACODE, $property->proptype, (isset($property->sourceid)?$property->sourceid:'') ) : $area;
							$area = isset($property->ShrtCOUNTYCODE) && !$area ? zipperagent_field_value( 'ShrtCOUNTYCODE', $property->ShrtCOUNTYCODE, $property->proptype, (isset($property->sourceid)?$property->sourceid:'') ) : $area;
							$area = isset($property->ShrtTOWNCODE) && !$area ? zipperagent_field_value( 'ShrtTOWNCODE', $property->ShrtTOWNCODE, $property->proptype, (isset($property->sourceid)?$property->sourceid:'') ) : $area;
							?>
							<div class="cell uk-text-right"><?php echo $area ? $area : '-'; ?></div>
						</div>
					</div>
				</div>
			</div>
			
			<a href="<?php echo $single_url ?>"><button class="js-snapshot-view-details btn-primary width-1-1" type="button"><!-- react-text: 1252 -->View Full Details&nbsp;<!-- /react-text --></button></a>
												
		</div>
	</div>
	<?php 
	$i++;
	endforeach; ?>
	
    <?php if( $showPagination ): ?>
	<div class="clearfix"></div>
		<?php if( ! $is_ajax_count ): ?>
		<div class="col-md-12 pagination-wrap prop-pagination">
			<?php echo zipperagent_pagination($page, $num, $count, $actual_link); ?>
		</div>
		<!--col-->
		<?php else: ?>
		<div class="col-md-12 pagination-wrap prop-pagination"></div>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php
	$listing_disclaimer = zipperagent_get_listing_disclaimer();
	?>
	<?php if( $listing_disclaimer ): ?>
	<div class="row">
		<div class="col-xs-12">
			<span class="listing-disclaimer"><?php echo $listing_disclaimer ?></span>
		</div>
		<!--col-->
	</div>
	<?php endif; ?>
</div>

<script>
jQuery(document).ready(function ($) {
	// reference for main items
	var mainSlider=new Array();
	// reference for thumbnail items
	var thumbnailSlider=new Array();
	//transition time in ms
	var duration = 500;
	var index=0;
	
	index=0;
	$('.main-slider').each(function(){
		var slider = $(this);
		mainSlider.push(slider);
	});
	index=0;
	$('.thumbnail-slider').each( function(){
		var slider = $(this);
		thumbnailSlider.push(slider);
	});
	
	// carousel function for main slider
	index=0;
	$('.main-slider').each(function(){
		
		var tempMainSlider = mainSlider[index];
		var tempThumbSlider = thumbnailSlider[index];
		
		// console.log('current index: '+index);
		tempMainSlider.owlCarousel({
			loop:false,
			nav:true,
			navText: ['<a class="slider-left"><span class="carousel-control"><i class="fa fa-2x fa-chevron-left"></i></span></a>','<a class="slider-right"><span class="carousel-control"><i class="fa fa-2x fa-chevron-right"></i></span></a>'],
			lazyLoad:true,
			items:1,
			dots: false,
			slideBy: 1,
		}).on('changed.owl.carousel', function (e) {
			//On change of main item to trigger thumbnail item
			tempThumbSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
			
		//These two are navigation for main items
		})
		
		index++;
	});
	
	// carousel function for thumbnail slider
	index=0;
	$('.thumbnail-slider').each( function(){
		
		var tempMainSlider = mainSlider[index];
		var tempThumbSlider = thumbnailSlider[index];
		
		tempThumbSlider.owlCarousel({
			loop:false,
			center:true, //to display the thumbnail item in center
			nav:false,
			lazyLoad:true,
			dots: false,
			slideBy: 1,
			responsive:{
				0:{
					items:3
				},
				600:{
					items:4
				},
				1000:{
					items:6
				}
			}
		}).on('click', '.owl-item', function () {
			// On click of thumbnail items to trigger same main item
			tempMainSlider.trigger('to.owl.carousel', [$(this).index(), duration, true]);

		}).on('changed.owl.carousel', function (e) {
			// On change of thumbnail item to trigger main item
			tempMainSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
		});
		
		index++;
	});
});
</script>
<?php auto_trigger_button_script(); ?>
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/owl.carousel.min.js'; ?>"></script>