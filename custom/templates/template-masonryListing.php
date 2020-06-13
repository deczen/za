<?php
global $requests, $is_ajax;

$rb = ZipperagentGlobalFunction()->zipperagent_rb();

$excludes = get_long_excludes();

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

/**
 * PREPARATION
 * @ prepare the arguments before API process
 */

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
		}else{
			$loc_zipcode[]=$temp;
		}
	}
	
	/* convert array to string */
	if(sizeof($loc_country)) $locqry['acnty']=implode(',',$loc_country);
	if(sizeof($loc_town)) $locqry['atwns']=implode(',',$loc_town);
	if(sizeof($loc_area)) $locqry['aars']=implode(',',$loc_area);
	if(sizeof($loc_zipcode)) $locqry['azip']=implode(',',$loc_zipcode);
	
	// die( $locqry );
}else if( $advStNo || $advStName || $advStZip || $advStates || $advTownNm || $advCounties ){
	
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
	
}else if($boundaryWKT){
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

//remove space from alstid (listing id search)
if( isset($requests['alstid']) )
	$requests['alstid']=str_replace(' ','', $requests['alstid']);

if(is_array($requests)){
	foreach( $requests as $key=>$val ){
		if( ! in_array( strtolower($key), $excludes ) ){
			if(is_array($val)){
				$advSearch[$key]=implode(',',$val);
			}else{			
				$advSearch[$key]=($val);
			}
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


/**
 * API CALL
 * @ call method and get properties
 */	

$search=array(
	'asrc'=>$rb['web']['asrc'],	
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

if( sizeof($list) ){		
	
	// echo "<pre>"; print_r($list); echo "</pre>";
?>
	
	<link rel='stylesheet' href='<?php echo ZIPPERAGENTURL . 'css/'; ?>ut.portfolio.style.min.css?ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo ZIPPERAGENTURL . 'css/'; ?>masonry-listing.css?ver=1.0.0' type='text/css' media='all' />
	<?php /* <link rel='stylesheet' href='<?php echo ZIPPERAGENTURL . 'css/'; ?>ut-superfish.min.css?ver=4.9.2' type='text/css' media='all' /> */ ?>
	
	<link rel='stylesheet' id='ut_body_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A300&#038;subset=latin&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_front_hero_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A700&#038;subset=latin&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_front_catchphrase_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_front_catchphrase_top_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A900&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_blog_hero_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A900&#038;subset=latin-ext&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_global_headline_font_type-css'  href='//fonts.googleapis.com/css?family=Tinos%3A&#038;subset=latin&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_global_lead_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A400&#038;subset=latin&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_global_portfolio_title_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A700&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_global_portfolio_category_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A400&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_footer_widgets_headline_font_type-css'  href='//fonts.googleapis.com/css?family=Oswald%3A700&#038;subset=latin&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_global_navigation_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A500&#038;subset=latin&#038;ver=4.9.2' type='text/css' media='all' />
	<link rel='stylesheet' id='ut_global_header_text_logo_font_type-css'  href='//fonts.googleapis.com/css?family=Roboto%3A900&#038;subset=latin&#038;ver=4.9.2' type='text/css' media='all' />
	
	<div id="ut-portfolio-wrap" class="ut-portfolio-wrap ut-portfolio-packery-wrap ut-portfolio-172" data-slideup-title="on" data-slideup-width="centered" data-textcolor="#FFFFFF" data-opacity="0.9" data-hovercolor="21,21,21">
		<?php /*
		<a class="ut-portfolio-offset-anchor" style="top:-120px;" id="masonry-listing-anchor"></a>
		<div class="ut-portfolio-menu-wrap" style="text-align:center;">
			<ul id="ut-portfolio-menu-172" class="ut-portfolio-menu style_one">
				<li><a href="#" data-filter="*" class="selected">All</a></li>
			</ul>
		</div> */ ?>
		<div id="masonry-listing" class="ut-portfolio-item-packery-container  ut-portfolio-item-container-4-columns">
		<?php foreach($list as $option):
		  
			$property=$option;
			
			if( !isset($property->id) )
				continue;
			
			$query_args=array();
			$fulladdress = zipperagent_get_address($property);
			if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
				$query_args['newsearchbar']= 1;
			}
			$single_url = add_query_arg( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
			// $single_url = zipperagent_property_url( $property->id, $fulladdress );
			$background = isset($property->photoList[0]) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg";
			$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
			$showprice = zipperagent_currency() . number_format_i18n( $price, 0 );
			$beds = isset($property->nobedrooms ) && $property->nobedrooms > 0 ? $property->nobedrooms : '';
			$bath = isset($property->nobaths ) && $property->nobaths > 0 ? $property->nobaths : '';
			$sqft = isset($property->squarefeet ) && $property->squarefeet > 0 ? $property->squarefeet : '123';
			?>
			<article style="background:url('<?php echo $background; ?>') no-repeat; background-size:cover; background-position:center center;" data-size="panorama" class="ut-masonry show  1 ut-masonry-panorama portfolio-style-one">
				<div class="ut-portfolio-item ut-hover">
					<a class="ut-square " rel="bookmark" title="<?php echo $fulladdress; ?>" href="<?php echo $single_url ?>" target="_self">
						<div class="ut-hover-layer" style="opacity:1">
							<div class="ut-portfolio-info">
								<div class="ut-portfolio-info-c">
									<h3 class="portfolio-title"><?php echo $fulladdress; ?></h3>
									<p class="prop-price"><?php echo $showprice ?></p>
									<span class="prop-beds"><?php echo $beds ? 'BEDS: '.$beds : ''; ?></span>
									<span class="prop-bath"><?php echo $bath ? 'BATH: '.$bath : ''; ?></span>
									<span class="prop-sqft"><?php echo $sqft ? 'SQFT: '.$sqft : ''; ?></span>
								</div>
							</div>
						</div>
						<div class="ut-portfolio-custom-icon"><?php /*<img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png">*/ ?></div>
					</a>
				</div>
			</article>
		<?php endforeach; ?>
		</div>
	</div>
	
	<?php /*
	<div id="ut-portfolio-wrap" class="ut-portfolio-wrap ut-portfolio-packery-wrap ut-portfolio-172" data-slideup-title="on" data-slideup-width="centered" data-textcolor="#FFFFFF" data-opacity="0.9" data-hovercolor="21,21,21">
	   <a class="ut-portfolio-offset-anchor" style="top:-120px;" id="masonry-listing-anchor"></a>
	   <div class="ut-portfolio-menu-wrap" style="text-align:center;">
		  <ul id="ut-portfolio-menu-172" class="ut-portfolio-menu style_one">
			 <li><a href="#" data-filter="*" class="selected">All</a></li>
			 <li><a href="#" data-filter=".back-bay-beacon-hill-filt">Back Bay / Beacon Hill</a></li>
			 <li><a href="#" data-filter=".seaport-district-filt">Seaport District</a></li>
			 <li><a href="#" data-filter=".downtown-crossing-filt">Downtown Crossing</a></li>
			 <li><a href="#" data-filter=".fenway-filt">Fenway</a></li>
			 <li><a href="#" data-filter=".north-end-waterfront-filt">North End / Waterfront</a></li>
		  </ul>
	   </div>
	   <div id="masonry-listing" class="ut-portfolio-item-packery-container  ut-portfolio-item-container-4-columns">
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/pierce-architecture-img-02-2400x1200.jpg) no-repeat; background-size:cover; background-position:center center;" data-size="panorama" class="fenway-filt  ut-masonry show  1 ut-masonry-panorama portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="Pierce Boston" href="http://bushari.com/boston-luxury-buildings/pierce-boston/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">Pierce Boston</h3>
							<span>Fenway</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2017/12/Echelon_Seaport_Rendering-1200x2400.jpg) no-repeat; background-size:cover; background-position:center center;" data-size="portrait" class="seaport-district-filt  ut-masonry show  1 ut-masonry-portrait portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="Echelon Seaport" href="http://bushari.com/boston-luxury-buildings/echelon-seaport/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">Echelon Seaport</h3>
							<span>Seaport District</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2017/12/2bg-2400x2400.jpg) no-repeat; background-size:cover; background-position:center center;" data-size="xxl" class="downtown-crossing-filt  ut-masonry show  1 ut-masonry-xxl portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="Millennium Tower" href="http://bushari.com/boston-luxury-buildings/millennium-tower/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">Millennium Tower</h3>
							<span>Downtown Crossing</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/0.762816001464195820-1200x1200.png) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="north-end-waterfront-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="Intercontinental Boston" href="http://bushari.com/boston-luxury-buildings/intercontinental-boston/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">Intercontinental Boston</h3>
							<span>North End / Waterfront</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/battery-wharf-boston-1200x1200.jpg) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="north-end-waterfront-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="Battery Wharf Boston" href="http://bushari.com/boston-luxury-buildings/battery-wharf-boston/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">Battery Wharf Boston</h3>
							<span>North End / Waterfront</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/w-boston-23-1200x1200.jpg) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="back-bay-beacon-hill-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="W Residences Boston" href="http://bushari.com/boston-luxury-buildings/w-condos-boston/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">W Residences Boston</h3>
							<span>Back Bay / Beacon Hill</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/45-Province-boston-featured-1740x840-1200x1200.png) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="downtown-crossing-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="45 Province" href="http://bushari.com/boston-luxury-buildings/45-province/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">45 Province</h3>
							<span>Downtown Crossing</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/ritz-carlton-boston-condos-buildings-1200x1200.png) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="downtown-crossing-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="Ritz Carlton Boston" href="http://bushari.com/boston-luxury-buildings/ritz-carlton-boston/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">Ritz Carlton Boston</h3>
							<span>Downtown Crossing</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/One-Charles-Boston-1200x1200.jpg) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="back-bay-beacon-hill-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="One Charles Boston" href="http://bushari.com/boston-luxury-buildings/one-charles-boston/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">One Charles Boston</h3>
							<span>Back Bay / Beacon Hill</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/mandarin-oriental-boston-feature-1740x840-1200x1200.png) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="back-bay-beacon-hill-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="Mandarin Oriental Boston" href="http://bushari.com/boston-luxury-buildings/mandarin-oriental-boston/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">Mandarin Oriental Boston</h3>
							<span>Back Bay / Beacon Hill</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/The-Clarendon-Building3-1200x1200.jpg) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="back-bay-beacon-hill-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="The Clarendon Back Bay" href="http://bushari.com/boston-luxury-buildings/the-clarendon-back-bay/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">The Clarendon Back Bay</h3>
							<span>Back Bay / Beacon Hill</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2017/07/millennium-place-boston-1740x840-1200x1200.png) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="downtown-crossing-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="Millennium Place" href="http://bushari.com/boston-luxury-buildings/millennium-place/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">Millennium Place</h3>
							<span>Downtown Crossing</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
		  <article style="background:url(http://bushari.com/wp-content/uploads/2018/01/285-columbus-lofts-1200x1200.jpg) no-repeat; background-size:cover; background-position:center center;" data-size="default" class="back-bay-beacon-hill-filt  ut-masonry show  1 ut-masonry-default portfolio-style-one">
			 <div class="ut-portfolio-item ut-hover">
				<a class="ut-square " rel="bookmark" title="285 Columbus Lofts" href="http://bushari.com/boston-luxury-buildings/285-columbus-lofts/" target="_self">
				   <div class="ut-hover-layer">
					  <div class="ut-portfolio-info">
						 <div class="ut-portfolio-info-c">
							<h3 class="portfolio-title">285 Columbus Lofts</h3>
							<span>Back Bay / Beacon Hill</span>
						 </div>
					  </div>
				   </div>
				   <div class="ut-portfolio-custom-icon"><img src="http://bushari.com/wp-content/uploads/2017/12/logotype-all_white.png"></div>
				</a>
			 </div>
		  </article>
	   </div>
	</div> */ ?>
		
	<script type='text/javascript' src='<?php echo ZIPPERAGENTURL . 'js/'; ?>ut-scriptlibrary.min.js?ver=4.5.3.3'></script>	
	<script type='text/javascript' src='<?php echo ZIPPERAGENTURL . 'js/'; ?>jquery.isotope.min.js?ver=4.3.1'></script>
	<script type='text/javascript' src='<?php echo ZIPPERAGENTURL . 'js/'; ?>jquery.utmasonry.min.js?ver=4.3.1'></script>
	<?php /* <script type='text/javascript' src='<?php echo ZIPPERAGENTURL . 'js/'; ?>superfish.min.js?ver=1.7.4'></script> */ ?>
	<script type='text/javascript' src='<?php echo ZIPPERAGENTURL . 'js/'; ?>ut.effects.min.js?ver=4.3.1'></script>
	<script type="text/javascript">
	/* <![CDATA[ */
	(function($) {
			
		$(document).ready(function($){
			
			"use strict";
			
			var $win         = $(window),
				$container   = $("#masonry-listing"),
				$sortedItems = "";
			
			/* IsoTope
			================================================== */                                    
			$container.addClass("animated").isotope({
			  
				itemSelector : '.ut-masonry',
				animationEngine : 'best-available',
				// layoutMode: 'packery',
				percentPosition: true,
				itemPositionDataEnabled: true,
				onLayout: function (elems, instance) {
					
				}				
			}); 				

			$container.on( "arrangeComplete", function(){			
			
			});
			
			
			$(window).load(function() {
				
				/* store sorted items */
				$sortedItems = $container.data("isotope").$filteredAtoms;				
				$container.isotope('layout');
				
				/* IsoTope Filtering
				================================================== */               
				$("#ut-portfolio-menu-172 a").each(function( index ) {
						
					var searchforclass = $(this).attr("data-filter");
					if( !$(searchforclass).length  ) {						
						$(this).hide(); // hide filter if we do not have any children to filter						
					}						
				});				
			
				$("#ut-portfolio-menu-172 a").click(function(){
				  
					var selector = $(this).attr("data-filter");
					$container.isotope({ filter: selector });
					
					/* update isotope grid */
					$container.isotope('layout');	
				  
					if ( !$(this).hasClass("selected") ) {
						$(this).parents("#ut-portfolio-menu-172").find(".selected").removeClass("selected");
						$(this).addClass("selected");
					}          
											
					return false;
				  
				});				   
			});  	
		});
		
	}(jQuery));
		
	/* ]]&gt; */
	</script>        
<?php
}
