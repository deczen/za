<?php
global $requests, $single_property;

$is_ajax=0;

$rb = ZipperagentGlobalFunction()->zipperagent_rb();

$excludes = get_long_excludes();
$query_args=array();
$mobile_item = isset($requests['mobile_item'])?$requests['mobile_item']:1;
$tablet_item = isset($requests['tablet_item'])?$requests['tablet_item']:1;
$desktop_item = isset($requests['desktop_item'])?$requests['desktop_item']:1;

$o 					= ( isset($requests['o'])?$requests['o']:'' );
$location 			= ( isset($requests['location'])?$requests['location']:'' );
$address 			= ( isset($requests['address'])?$requests['address']:'' );
$advStNo 			= ( isset($requests['advstno'])?$requests['advstno']:'' );
$advStName 			= ( isset($requests['advstname'])?$requests['advstname']:'' );
$advTownNm 			= ( isset($requests['advtownnm'])?$requests['advtownnm']:'' );
$advStates 			= ( isset($requests['advstates'])?$requests['advstates']:'' );
$advCounties 		= ( isset($requests['advcounties'])?$requests['advcounties']:'' );
$advStZip 			= str_replace( ' ', '', ( isset($requests['advstzip'])?$requests['advstzip']:'' ) );
$boundaryWKT 		= ( isset($requests['boundarywkt'])?$requests['boundarywkt']:'' );
$propertyType 		= ( isset($requests['propertytype'])?(!is_array($requests['propertytype'])?array($requests['propertytype']):$requests['propertytype']):array() );
$propSubType 		= ( isset($requests['propsubtype'])?(!is_array($requests['propsubtype'])?array($requests['propsubtype']):$requests['propsubtype']):array() );
$status 			= ( isset($requests['status'])?$requests['status']:'' );
$minListPrice 		= ( isset($requests['minlistprice'])?$requests['minlistprice']:'' );
$maxListPrice		= ( isset($requests['maxlistprice'])?$requests['maxlistprice']:'' );
$squareFeet			= ( isset($requests['squarefeet'])?$requests['squarefeet']:'' );
$bedrooms 			= ( isset($requests['bedrooms'])?$requests['bedrooms']:'' );
$bathCount 			= ( isset($requests['bathcount'])?$requests['bathcount']:'' );
$lotAcres 			= ( isset($requests['lotacres'])?$requests['lotacres']:'' );
$minDate 			= ( isset($requests['mindate'])?$requests['mindate']:'' );
$maxDate 			= ( isset($requests['maxdate'])?$requests['maxdate']:'' );
$startTime 			= ( isset($requests['starttime'])?$requests['starttime']:'' );
$endTime 			= ( isset($requests['endtime'])?$requests['endtime']:'' );
$openHomesMode 		= ( isset($requests['openhomesmode'])?$requests['openhomesmode']:'' );
$openHomesOnlyYn 	= ( isset($requests['openhomesonlyyn'])?$requests['openhomesonlyyn']:'' );
$maxDaysListed 		= ( isset($requests['maxdayslisted'])?$requests['maxdayslisted']:'' );
$featuredOnlyYn 	= ( isset($requests['featuredonlyyn'])?$requests['featuredonlyyn']:'' );
$hasVirtualTour 	= ( isset($requests['hasvirtualtour'])?$requests['hasvirtualtour']:'' );
$withImage 			= ( isset($requests['withimage'])?$requests['withimage']:'' );
$dateRange 			= ( isset($requests['daterange'])?$requests['daterange']:'' );
$year 				= ( isset($requests['yearbuilt'])?$requests['yearbuilt']:'' );
$alagt 				= ( isset($requests['alagt'])?$requests['alagt']:'' );
$aloff 				= ( isset($requests['aloff'])?$requests['aloff']:'' );
$showPagination 	= ( isset($requests['pagination'])?$requests['pagination']:1 );
$showResults	 	= ( isset($requests['result'])?$requests['result']:1 );
$crit	 			= ( isset($requests['crit'])?$requests['crit']:'' );
$anycrit	 		= ( isset($requests['anycrit'])?$requests['anycrit']:'' );
$searchId			= ( isset($requests['searchid'])?$requests['searchid']:'' );
$alstid 			= ( isset($requests['alstid'])?$requests['alstid']:'' );
$column 			= ( isset($requests['column'])?$requests['column']:'' );
$school 			= ( isset($requests['school'])?$requests['school']:'' );
$alkchnnm 			= ( isset($requests['alkchnnm'])?$requests['alkchnnm']:'' );

/**
 * PREPARATION
 * @ prepare the arguments before API process
 */

if( $is_ajax )
	$actual_link = $requests['actual_link'];
else
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

/* default status */
$status = empty($status)?zipperagent_active_status():$status;

/* generate mls_state_map */
$arr=array();
$mls_state_map=isset($rb['web']['mls_state_map']) ? $rb['web']['mls_state_map'] : array();
foreach( $mls_state_map as $source => $param ){

	$arr=array(
		'ascr'=>$source,
		'astt'=>$param,
	);
	$anycrit.='('. proces_crit($arr) .')';
}

/* get town list */
$locqry=array();
$coords=null;
if( $location ){
	
	$location=!is_array($location)?array($location):$location;
	$loc_country=array();
	$loc_town=array();
	$loc_area=array();
	$loc_zipcode=array();
	$loc_address=array();
	$loc_hs=array();
	$loc_ms=array();
	$loc_gs=array();
	$loc_sd=array();
	
	// $towns = get_town_list();
	foreach( $location as $var ){
		$temp = urldecode($var);
		
		if( substr($temp, 0, 6) == 'acnty_' ){
			$loc_country[]=substr($temp, 6);
		}else if( substr($temp, 0, 6) == 'atwns_' ){
			$loc_town[]=substr($temp, 6);
		}else if( substr($temp, 0, 5) == 'aars_' ){
			$loc_area[]=substr($temp, 5);
		}else if( substr($temp, 0, 5) == 'azip_' ){
			$loc_zipcode[]=substr($temp, 5);
		}else if( substr($temp, 0, 9) == 'aflladdr_' ){
			$loc_address[]=substr($temp, 9);
		}else if( substr($temp, 0, 6) == 'hschl_' ){
			$loc_hs[]=substr($temp, 6);
		}else if( substr($temp, 0, 6) == 'mschl_' ){
			$loc_ms[]=substr($temp, 6);
		}else if( substr($temp, 0, 6) == 'gschl_' ){
			$loc_gs[]=substr($temp, 6);
		}else if( substr($temp, 0, 7) == 'aschdt_' ){
			$loc_sd[]=substr($temp, 7);
		}else{
			$loc_zipcode[]=$temp;
		}
	}
	
	/* convert array to string */
	if(sizeof($loc_country)) $locqry['acnty']=implode(',',$loc_country);
	if(sizeof($loc_town)) $locqry['atwns']=implode(',',$loc_town);
	if(sizeof($loc_area)) $locqry['aars']=implode(',',$loc_area);
	if(sizeof($loc_zipcode)) $locqry['azip']=implode(',',$loc_zipcode);
	if(sizeof($loc_address)) $locqry['aflladdr']=implode(',',$loc_address);
	if(sizeof($loc_hs)) $locqry['hschl']=implode(',',$loc_hs);
	if(sizeof($loc_ms)) $locqry['mschl']=implode(',',$loc_ms);
	if(sizeof($loc_gs)) $locqry['gschl']=implode(',',$loc_gs);
	if(sizeof($loc_sd)) $locqry['aschdt']=implode(',',$loc_sd);
	
	// die( $locqry );
}
if( $advStNo || $advStName || $advStZip || $advStates || $advTownNm || $advCounties ){
	
	$loc_advStNo=array();
	$loc_advStName=array();
	$loc_advStZip=array();
	$loc_advStates=array();
	$loc_advTownNm=array();
	$loc_advAreas=array();
		
	if(sizeof($advStNo)) $locqry['astno']=($advStNo);
	if(sizeof($advStName)) $locqry['astnmf']=($advStName);
	if(sizeof($advStZip)) $locqry['azip']=($advStZip);
	if(sizeof($advStates)) $locqry['astt']=($advStates);
	if(sizeof($advTownNm)) $locqry['atwnnm']=($advTownNm);
	// if(sizeof($advCounties)) $locqry['acnty']=($advCounties);
	
}
if($boundaryWKT){
	// preg_match( '/POLYGON \(\((.*?)\)\)/', $boundaryWKT, $match );
	preg_match( '/POLYGON \(\((.*?)\)\)/', $boundaryWKT, $match );
	$coor_string = isset($match[1])?'('.$match[1].')':'';
	preg_match_all( "/\(([^)]+)\)/", $coor_string, $match );
	// $polygons = array_map('trim', explode( ',', $match[1] ));
	$polygons = $match[1];
	$added_polygons=array();
	foreach( $polygons as $index=>&$polygon ){
		$polygon= str_replace(' ','',$polygon);
		$temp = explode(',',$polygon);
		
		// $polygon= str_replace(', ',':',$polygon); 
		$polygon = $temp[1].':'.$temp[0];
		$added_polygons[]=$polygon;
	}
	$added_polygons[]=$added_polygons[0];
	$coords=implode(',',$added_polygons );
	// $coords="-71.057083:42.361145,-71.057083:41,-70:41,-70:42,-71.057083:42.361145";
}

/* get advanced search */
$advSearch=array();	
if( $openHomesOnlyYn || $maxDaysListed ){
	$days = 14;
	$advSearch['hasoh']=!empty($maxDaysListed)?$maxDaysListed:$days;
}
if( $withImage )
	$advSearch['hasp']="true";

if( $hasVirtualTour )
	$advSearch['hasvt']="true";

if( $year )
	$advSearch['ayblt']=$year;

if( $squareFeet )
	$advSearch['acarea']=$squareFeet;

if( $alagt )
	$advSearch['alagt']=$alagt;

if( $aloff )
	$advSearch['aloff']=$aloff;

if( $alkchnnm )
	$advSearch['alkChnNm']=is_array($alkchnnm)?implode(',',$alkchnnm):$alkchnnm;

//generate extra proptype variables
if($extra_proptypes = zipperagent_extra_proptype()){
	foreach($extra_proptypes as $key=>$extra_proptype){
		
		if(isset($requests[strtolower($extra_proptype['abbrev'])])){
			$tempval=$requests[strtolower($extra_proptype['abbrev'])];
			unset($requests[strtolower($extra_proptype['abbrev'])]);
			$requests[$extra_proptype['abbrev']]=$tempval;
		}
	}
}

//generate school variables
if( $school  ){
	foreach($school as $scl){
		$school_tmp = explode('_', $scl);
		$school_code=isset($school_tmp[0])?$school_tmp[0]:$scl;
		$school_name=isset($school_tmp[1])?$school_tmp[1]:'';
		
		if($school_code && $school_name)
			$requests['aschlnm'][]=$school_code.'$'.$school_name;
		else
			$requests['aschlnm'][]=$school_code;
	}
}

//remove space from alstid (listing id search)
if( isset($requests['alstid']) )
	$requests['alstid']=str_replace(' ','', $requests['alstid']);

//generate rest of variables
foreach( $requests as $key=>$val ){
	if( ! in_array( strtolower($key), $excludes ) ){
		if(is_array($val)){
			$advSearch[$key]=implode(',',$val);
		}else{			
			$advSearch[$key]=($val);
		}
	}
}

/* get order */
// $o='ud:DESC;'.$o;
// $order='&o='.$o;

/* get page number */
$page = (get_query_var('page')) ? get_query_var('page') : 1;
$page = isset($requests['page']) ? $requests['page'] : $page;

$num=isset($requests['listinapage']) ? $requests['listinapage'] : 24;
$maxtotal=isset($requests['maxlist']) ? $requests['maxlist'] : 0;

/* page correction */
if( $maxtotal > 0 ){
	$maxpage=ceil($maxtotal/$num);
	if( $page > $maxpage )
		$page = $maxpage;
}

$index=$page*$num-$num;

$open=0;

/**
 * API CALL
 * @ call method and get properties
 */	

$search=array(
	'asrc'=>$rb['web']['asrc'],
	'aloff'=>$aloff,
	'abeds'=>$bedrooms,
	'abths'=>$bathCount,
	'apt'=>implode( ',', array_map("trim",$propertyType) ),
	'apts'=>implode( ',', array_map("trim",$propSubType) ),
	'asts'=>$status,
	'apmin'=>za_correct_money_format($minListPrice),
	'apmax'=>za_correct_money_format($maxListPrice),
	'aacr'=>$lotAcres,
);

//set states
$states=isset($rb['web']['states'])?$rb['web']['states']:'';
if($states){
	$search['astt']=str_replace(' ','',$states);
}

$search= array_merge($search, $locqry, $advSearch);

$vars=array(
	'crit'=>proces_crit($search),
	'sidx'=>$index,
	'ps'=>$num,
	'o'=>$o,
);
// echo "<pre>"; print_r( $vars ); echo "</pre>";
if( $crit ){
	$vars['crit'] = $crit;
}
if( $anycrit ){
	$vars['anycrit'] = $anycrit;
}

$contactIds=get_contact_id();
if( $contactIds )
	$vars['contactId'] = implode(',',$contactIds);

$result = zipperagent_run_curl( "/api/mls/advSearchWoCnt", $vars );
if(!$is_ajax){
	// $resultCount = zipperagent_run_curl( "/api/mls/advSearchOnlyCnt", $vars, 0, '', true );
	$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;
}else{		
	$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result); //unused, always show 0
}
$list=isset($result['filteredList'])?$result['filteredList']:$result;

// echo "<pre>"; print_r( $result ); echo "</pre>";

$enable_filter= $coords || $openHomesMode == "true" ? false : true;
$top_search_enabled = ! $boundaryWKT && ! $openHomesMode;

//image options
$width = ( isset($requests['width'])?$requests['width']:1024 );
$height = ( isset($requests['height'])?$requests['height']:768 );

if( sizeof($list) ){		
?>
	<link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/banner.css'; ?>">
	<div style="order: 1" class="block slider-wrapper featured-slider">
		<div class="slider royalSlider heroSlider">
			<?php
			foreach( $list as $property ){
				// echo "<pre>"; print_r( $property ); echo "</pre>";
				if( isset( $property->photoList ) && sizeof( $property->photoList ) ){
					$i=0;
					foreach ($property->photoList as $pic ){ 
						$fulladdress = zipperagent_get_address($property);
						$search_var= !empty($searchId) ? '?searchId='.$searchId : '';
						
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
						// $single_url = zipperagent_property_url( $property->id, $fulladdress );
						?>
		
							<div class="rsContent dark">
								<div class="container-fluid feature-content">
									<div class="row">
										<div class="col-xl-6 col-lg-8 col-sm-9 col-xs-8 feature-content-left">
											<div class="property-short-description">
												<h6>Featured Listing</h6>
												<h2>
													<span class="impress-street"><?php echo isset($property->streetno)? $property->streetno :'-'; ?> <?php echo isset($property->streetname)?zipperagent_fix_comma($property->streetname):'-'; ?>  </span>
													<span class="impress-cityname"><?php echo isset($property->lngTOWNSDESCRIPTION)? $property->lngTOWNSDESCRIPTION :'-'; ?></span>,
													<span class="impress-state"> <?php echo isset($property->provinceState)? $property->provinceState :'-'; ?></span>
												</h2>
												<div>
													<p><?php echo zipperagent_currency() . ( isset($property->listprice)? number_format_i18n( $property->listprice, 0 ) :'-' ); ?></p>
												</div>
											</div>
											<div class="property-wrapper">
												<div class="property">
													<div class="property-description">
														<h6>
															<span class="impress-street"><?php echo isset($property->streetno)? $property->streetno :'-'; ?> <?php echo isset($property->streetname)? $property->streetname :'-'; ?>  </span>
															<span class="impress-cityname"><?php echo isset($property->lngTOWNSDESCRIPTION)? $property->lngTOWNSDESCRIPTION :'-'; ?></span>,
															<span class="impress-state"> <?php echo isset($property->provinceState)? $property->provinceState :'-'; ?></span>
														</h6>
														
														<i><?php echo substr(isset($property->remarks)? $property->remarks :'', 0, 150); ?> ...</i>
													</div>
													<div class="property-specs" style="background-color: #1b1b1b;">
														<ul>
															<li>
																<h6><?php echo zipperagent_currency() . ( isset($property->listprice)? number_format_i18n( $property->listprice, 0 ) :'-' ); ?></h6><i>Price</i>
															</li>
															<li>
																<h6><?php echo isset($property->nobedrooms) ? $property->nobedrooms:'-'; ?></h6><i>Beds</i>
															</li>
															<li>
																<h6><?php echo isset($property->squarefeet)? number_format_i18n( $property->squarefeet, 0 ) :'-'; ?></h6><i>Sq. Ft.</i>
															</li>
															<li>
																<h6><?php echo isset($property->yearbuilt) ? $property->yearbuilt:'-'; ?></h6><i>Built</i>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<a href="<?php echo $single_url; ?>" role="button" class="btn btn-outline property-link-button"><span class="hidden-xs">Learn</span><span> More</span></a>
									</div>
								</div>
								<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
								<img alt="<?php echo isset($property->remarks)? $property->remarks :''; ?>" title="<?php echo $fulladdress ?>" style="display: block;" src="//media.mlspin.com/photo.aspx?mls=<?php echo $property->listno ?>&amp;h=<?php echo $height ?>&amp;w=<?php echo $width ?>&amp;n=0" style=" background-size: cover; margin-top: 0px;" class="rsImg property-slider-img feature-bg">
								<?php else: ?>
								<img alt="<?php echo isset($property->remarks)? $property->remarks :''; ?>" title="<?php echo $fulladdress ?>" style="display: block;" src="<?php echo $pic->imgurl; ?>" style=" background-size: cover; margin-top: 0px;" class="rsImg property-slider-img feature-bg">
								<?php endif; ?>
								<!-- <img src="https://res.cloudinary.com/luxuryp/image/upload/q_auto:good,f_auto/w_2000/euqh2qizbtauhyhjzych.jpg" style=" background-size: cover;" class="rsImg property-slider-img feature-bg"> -->
							</div>
						<?php 
						break;
					}
				}
			}
			?>
			
		</div>
	</div>
	<style>
		.rsContent img{margin-top: 0px !important;}
	</style>
	<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/rs-slider/plugins.js'; ?>"></script>			
	<script>
		(function($){
			
			var $ = jQuery.noConflict();
			
			$.application = {
				init: function() {
					$.application.views.init()
				}
			}, $.application.views = {
				init: function() {
					$.application.views.init_carousel(), $.application.views.init_royalslider()
				},
				init_carousel: function() {
					$(".carousel").owlCarousel({
						items: 6,
						margin: 30,
						responsiveClass: !0,
						responsive: {
							0: {
								items: 2
							},
							768: {
								items: 4
							},
							979: {
								items: 5
							},
							1199: {
								items: 6
							}
						}
					})
				},
				init_royalslider: function() {
					$(".slider").royalSlider({
						autoScaleSlider: !1,
						autoHeight: !1,
						loop: !0,
						arrowsNav: !0,
						arrowsNavAutoHide: !0,
						navigateByClick: !0,
						keyboardNavEnabled: !0,
						controlsInside: !0,
						controlNavigation: "none",
						imageScaleMode: "fill",
						thumbsFitInViewport: !1,
						startSlideId: 0,
						slidesSpacing: 0,
						usePreloader: !0,
						numImagesToPreload: 1,
						transitionType: "fade",
						transitionSpeed: 1e3,
						loopRewind: !1,
						easeInOut: "easeInOutSine",
						globalCaption: !1,
						addActiveClass: !0,
						sliderDrag: !0,
						block: {
							delay: 400
						},
						autoPlay: {
							enabled: !1,
							stopAtAction: !0,
							pauseOnHover: !0,
							delay: 5e3
						},
						deeplinking: {
							enabled: !0,
							change: !1
						},
						imgWidth: 2e3,
						imgHeight: 1500
					}), $(window).load(function() {
						$(".slider").royalSlider("updateSliderSize", !0)
					})
				}
			}, $(document).ready(function() {
				$.application.init()
			});
		})(jQuery)
	</script>
<?php
}else{
	// echo "<p class='no-property'>There is no Properties</p>";
}
