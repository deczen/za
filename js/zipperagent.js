var zppr={
	data:{
		plugin_path: zipperagent.ZIPPERAGENTPATH,
		plugin_url: zipperagent.ZIPPERAGENTURL,
		currency: zipperagent.currency,
		ajaxurl: zipperagent.ajaxurl,
		listingurl: zipperagent.listingurl,
		sold_status: zipperagent.sold_status,
		active_status: zipperagent.active_status,
		long_excludes: zipperagent.long_excludes,
		distance: zipperagent.distance,
		page: zipperagent.page,
		root: JSON.parse(atob(zipperagent.root)),
		contactIds: zipperagent.contactIds,
		is_login: zipperagent.is_login,
		listing_disclaimer: zipperagent.listing_disclaimer,
		status_list: zipperagent.status_list,
		source_cached: zipperagent.source_cached,
		is_show_agent_name: zipperagent.is_show_agent_name,
		property_types_refenrence: zipperagent.property_types_refenrence,
		property_types: zipperagent.property_types,
		rental_code: zipperagent.rental_code,
		detailpage_group: zipperagent.detailpage_group,
		states: zipperagent.states,
		
		/* single property */
		agent: zipperagent.agent,
		is_show_agent_name: zipperagent.is_show_agent_name,
		source_details: zipperagent.source_details,
		searchId: zipperagent.searchId,
		field_list: zipperagent.field_list,
	},
	generate_api_params:function(requests){
		
		var generatedCrit="";
		var excludes = zppr.data.long_excludes;
		var requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
		/**
		 * VARIABLES
		 * @ set values for each variables
		 */	 

		var is_shortcode 		= (requests.hasOwnProperty('is_shortcode')?requests['is_shortcode']:'');
		
		var o 					= ( requests.hasOwnProperty('o')?requests['o']:'' );
		var location 			= ( requests.hasOwnProperty('location')?requests['location']:'' );
		var address 			= ( requests.hasOwnProperty('address')?requests['address']:'' );
		var advStNo 			= ( requests.hasOwnProperty('advstno')?requests['advstno']:'' );
		var advStName 			= ( requests.hasOwnProperty('advstname')?requests['advstname']:'' );
		var advTownNm 			= ( requests.hasOwnProperty('advtownnm')?requests['advtownnm']:'' );
		var advStates 			= ( requests.hasOwnProperty('advstates')?requests['advstates']:'' );
		var advCounties 		= ( requests.hasOwnProperty('advcounties')?requests['advcounties']:'' );
		var advStZip 			= ( requests.hasOwnProperty('advstzip')?requests['advstzip'].replace(/ /g,''):'' );
		var boundaryWKT 		= ( requests.hasOwnProperty('boundarywkt')?requests['boundarywkt']:'' );
		var propertyType 		= ( requests.hasOwnProperty('propertytype')?(!Array.isArray(requests['propertytype'])?[requests['propertytype']]:requests['propertytype']):[] );
		var propSubType 		= ( requests.hasOwnProperty('propsubtype')?(!Array.isArray(requests['propsubtype'])?[requests['propsubtype']]:requests['propsubtype']):[] );
		var status 				= ( requests.hasOwnProperty('status')?requests['status']:'' );
		var minListPrice 		= ( requests.hasOwnProperty('minlistprice')?requests['minlistprice']:'' );
		var maxListPrice		= ( requests.hasOwnProperty('maxlistprice')?requests['maxlistprice']:'' );
		var squareFeet			= ( requests.hasOwnProperty('squarefeet')?requests['squarefeet']:'' );
		var bedrooms 			= ( requests.hasOwnProperty('bedrooms')?requests['bedrooms']:'' );
		var bathCount 			= ( requests.hasOwnProperty('bathcount')?requests['bathcount']:'' );
		var lotAcres 			= ( requests.hasOwnProperty('lotacres')?requests['lotacres']:'' );
		var minDate 			= ( requests.hasOwnProperty('mindate')?requests['mindate']:'' );
		var maxDate 			= ( requests.hasOwnProperty('maxdate')?requests['maxdate']:'' );
		var startTime 			= ( requests.hasOwnProperty('starttime')?requests['starttime']:'' );
		var endTime 			= ( requests.hasOwnProperty('endtime')?requests['endtime']:'' );
		var openHomesMode 		= ( requests.hasOwnProperty('openhomesmode')?requests['openhomesmode']:'' );
		var openHomesOnlyYn 	= ( requests.hasOwnProperty('openhomesonlyyn')?requests['openhomesonlyyn']:'' );
		var maxDaysListed 		= ( requests.hasOwnProperty('maxdayslisted')?requests['maxdayslisted']:'' );
		var featuredOnlyYn 		= ( requests.hasOwnProperty('featuredonlyyn')?requests['featuredonlyyn']:'' );
		var hasVirtualTour 		= ( requests.hasOwnProperty('hasvirtualtour')?requests['hasvirtualtour']:'' );
		var withImage 			= ( requests.hasOwnProperty('withimage')?requests['withimage']:'' );
		var dateRange 			= ( requests.hasOwnProperty('daterange')?requests['daterange']:'' );
		var year 				= ( requests.hasOwnProperty('yearbuilt')?requests['yearbuilt']:'' );
		var alagt 				= ( requests.hasOwnProperty('alagt')?requests['alagt']:'' );
		var aloff 				= ( requests.hasOwnProperty('aloff')?requests['aloff']:'' );
		var showPagination 		= ( requests.hasOwnProperty('pagination')?parseInt(requests['pagination']):1 );
		var showResults	 		= ( requests.hasOwnProperty('result')?parseInt(requests['result']):1 );
		var crit	 			= ( requests.hasOwnProperty('crit')?requests['crit']:'' );
		var searchId			= ( requests.hasOwnProperty('searchid')?requests['searchid']:'' );
		var alstid 				= ( requests.hasOwnProperty('alstid')?requests['alstid']:'' );
		var column 				= ( requests.hasOwnProperty('column')?requests['column']:'' );
		var school 				= ( requests.hasOwnProperty('school')?requests['school']:'' );

		//distance search variables
		var searchDistance 		= ( requests.hasOwnProperty('searchdistance')?requests['searchdistance']:'' );
		var distance 			= ( requests.hasOwnProperty('distance')?requests['distance']:zppr.data.distance );
		var lat 				= ( requests.hasOwnProperty('lat')?requests['lat']:'' );
		var lng 				= ( requests.hasOwnProperty('lng')?requests['lng']:'' );


		/**
		 * PREPARATION
		 * @ prepare the arguments before API process
		 */

		/* default status */
		status = !status?zppr.data.active_status:status;

		/* get town list */
		locqry={};
		coords=null;
		if( location ){
			
			location=!Array.isArray(location)?{location}:location;
			loc_country=[];
			loc_town=[];
			loc_area=[];
			loc_zipcode=[];
			
			// towns = get_town_list();
			for (const [key, value] of Object.entries(location)) {
			
				temp = decodeURIComponent(value);
				
				if(temp){
					if( temp.substring(0, 6) == 'acnty_' ){
						loc_country.push(temp.substring(6));
					}else if( temp.substring(0, 6) == 'atwns_' ){
						loc_town.push(temp.substring(6));
					}else if( temp.substring(0, 5) == 'aars_' ){
						loc_area.push(temp.substring(5));
					}else if( temp.substring(0, 5) == 'azip_' ){
						loc_zipcode.push(temp.substring(5));
					}else{
						loc_zipcode.push(temp);
					}
				}
			}
			
			/* convert array to string */
			if(loc_country) locqry['acnty']=loc_country.join();
			if(loc_town) locqry['atwns']=loc_town.join();
			if(loc_area) locqry['aars']=loc_area.join();
			if(loc_zipcode) locqry['azip']=loc_zipcode.join();
			
			// die( locqry );
		}else if( advStNo || advStName || advStZip || advStates || advTownNm || advCounties ){
							
			if(advStNo) locqry['astno']=(advStNo);
			if(advStName) locqry['astnmf']=(advStName);
			if(advStZip) locqry['azip']=(advStZip);
			if(advStates) locqry['astt']=(advStates);
			if(advTownNm) locqry['atwnnm']=(advTownNm);
			// if(advCounties) locqry['acnty']=(advCounties);
			
		} /* else if(boundaryWKT){
			// preg_match( '/POLYGON \(\((.*?)\)\)/', boundaryWKT, match );
			preg_match( '/POLYGON \(\((.*?)\)\)/', urldecode(boundaryWKT), match );
			coor_string = isset(match[1])?'('.match[1].')':'';
			preg_match_all( "/\(([^)]+)\)/", coor_string, match );
			// polygons = array_map('trim', explode( ',', match[1] ));
			polygons = match[1];
			added_polygons={};
			foreach( polygons as index=>&polygon ){
				polygon= str_replace(' ','',polygon);
				temp = explode(',',polygon);
				
				// polygon= str_replace(', ',':',polygon); 
				polygon = temp[1].':'.temp[0];
				added_polygons[]=polygon;
			}
			added_polygons[]=added_polygons[0];
			coords=implode(',',added_polygons );
			// coords="-71.057083:42.361145,-71.057083:41,-70:41,-70:42,-71.057083:42.361145";
		} */

		/* get advanced search */
		advSearch={};	
		if( openHomesOnlyYn || maxDaysListed ){
			days = 14;
			advSearch['hasoh']=maxDaysListed?maxDaysListed:days;
		}
		if( withImage )
			advSearch['hasp']="true";

		if( hasVirtualTour )
			advSearch['hasvt']="true";

		if( year )
			advSearch['ayblt']=year;

		if( squareFeet )
			advSearch['acarea']=squareFeet;

		if( alagt )
			advSearch['alagt']=alagt;

		if( aloff )
			advSearch['aloff']=aloff;

		//generate school variables
		if( school  ){
			for (const [key, scl] of Object.entries(school)) {
				school_tmp = scl.split('_');
				school_code=school_tmp.hasOwnProperty(0)?school_tmp[0]:scl;
				school_name=school_tmp.hasOwnProperty(1)?school_tmp[1]:'';
				
				if(school_code && school_name){
                	if (typeof requests['aschlnm'] !== 'undefined')
						requests['aschlnm'].push(school_code+''+school_name);
				}else{
                	if (typeof requests['aschlnm'] !== 'undefined')
						requests['aschlnm'].push(school_code);
                }
			}
		}

		//remove space from alstid (listing id search)
		if( requests.hasOwnProperty('alstid') && ! Array.isArray(requests['alstid']) )
			requests['alstid']=requests['alstid'].replace(/ /g,'');
		
		for (const [key, val] of Object.entries(requests)) {
			if( excludes.indexOf(key.toLowerCase()) === -1 ){
				if(Array.isArray(val)){
					advSearch[key]=val.join();
				}else{			
					advSearch[key]=(val);
				}
			}
		}

		/* get page number */
		page = parseInt(zppr.data.page) ? parseInt(zppr.data.page) : 1;
		page = requests.hasOwnProperty('page') ? requests['page'] : page;

		num=requests.hasOwnProperty('listinapage') ? requests['listinapage'] : 24;
		maxtotal=requests.hasOwnProperty('maxlist') ? requests['maxlist'] : 0;
		/* page correction */
		if( maxtotal > 0 ){
			maxpage=Math.ceil(maxtotal/num);
			if( page > maxpage )
				page = maxpage;
		}

		var index=page*num-num;
		
		/**
		 * API CALL
		 * @ call method and get properties
		 */
				
		var response={};
		
		if( openHomesMode ){ // open houses mode
			
			//no action
		}else if( coords ){ // map mode
			
			//no action
			
		/* }else if( searchDistance=="true" || searchDistance=="1" || (lat && lng) ){ // map mode */
		}else if( searchDistance=="true" || searchDistance=="1" ){ // map mode
			
			//no action			
		}else{ //if( featuredOnlyYn=="true" || status=='SLD' ){ //featured mode
			
			if(!crit){
				var search={
					'asrc':zppr.data.root.web.asrc,
					// 'aloff':zppr.data.root.web.aloff,
					'abeds':bedrooms,
					'abths':bathCount,
					'apt':propertyType.join(),
					'apts':propSubType.join(),
					'asts':status,
					'apmin':zppr.correct_money_format(minListPrice),
					'apmax':zppr.correct_money_format(maxListPrice),
					'aacr':lotAcres,
				};
				
				// search = Object.values(search); //convert obj to array
				
				if(alstid){
					delete search.asts;
				}
				// if(o){
					// delete advSearch.o;
				// }
				if(zppr.data.states){
					search.astt = zppr.data.states.replace(' ','');
				}
				
				for (const [key, val] of Object.entries(locqry)) {
					search[key] = val;
				}
				for (const [key, val] of Object.entries(advSearch)) {
					search[key] = val;
				}
			
				generatedCrit = zppr.format_crit(search);
			}else{
				generatedCrit = crit;
			}
			
			response['crit'] = generatedCrit;
			response['ps'] = num;
			response['sidx'] = index;
			response['o'] = o;
		}		
		// console.log(response);
		return response;
	},
	list_template:function(requests, list_html, is_view_save_search){
		
		var requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
		var boundaryWKT 		= ( requests.hasOwnProperty('boundarywkt')?requests['boundarywkt']:'' );
		var openHomesMode 		= ( requests.hasOwnProperty('openhomesmode')?requests['openhomesmode']:'' );
		var openHomesOnlyYn 	= ( requests.hasOwnProperty('openhomesonlyyn')?requests['openhomesonlyyn']:'' );
		var showPagination 		= ( requests.hasOwnProperty('pagination')?parseInt(requests['pagination']):1 );
		var showResults	 		= ( requests.hasOwnProperty('result')?parseInt(requests['result']):1 );
		var searchId			= ( requests.hasOwnProperty('searchid')?requests['searchid']:'' );
		
		enable_filter= boundaryWKT || openHomesMode == "true" || openHomesMode == 1 ? false : true;
		
		var html = '';
		
		html+= '<div class="zpa-listing-search-results hideonprint">'+
				
					'<div class="row mt-25 mb-25">';				
				
		if(!list_html){
		
			html+= 		'<div class="col-xs-4"> No Properties Found </div>';	
		}else if( parseInt(showResults) ){			
			html+= 		'<div class="col-xs-12 prop-total">'+String.fromCharCode(160)+'</div>';
		}
				
		html+=		   '<div class="col-xs-8">';
					
		// if( enable_filter ){
		if( 0 ){ //disabled
		
			var saved_btn_text = (is_view_save_search) ? "Updated" : "Saved"; 		
			var save_btn_text = (is_view_save_search) ? "Update This Search" : "Save This Search";
			
			html+= 			'<div class="pull-right">'+
								'<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star"></i>'+ saved_btn_text +'</button>'+
							'</div>'+
							'<button id="saveSearchButton" class="saveSearchButton btn btn-sm btn-primary pull-right" isLogin="'+ zppr.data.is_login +'" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search" contactId="'+ zppr.data.contactIds.join() +'"> <i class="glyphicon glyphicon-star"></i> '+ save_btn_text +'  </button>';
		}
		html+= 			'</div>'+
					'</div>'+
					'<div class="row list-section">'+ list_html +
					'</div>';
			
		if( showPagination ){	
		
			html+= '<div class="row prop-pagination"></div>';				
		}
			
		
		if( zppr.data.listing_disclaimer ){
			
			html+= '<div class="row">'+
						'<div class="col-xs-12">'+
							'<span class="listing-disclaimer">'+ zppr.data.listing_disclaimer +'</span>'+
						'</div>'+
					'</div>';
		}
			
		html+= '</div>';
		
		return html;
	},
	list_print:function(requests, list_html){
		
		// var requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
		
		var html = '';
		
		html+= '<div id="zy_list-print" class="printonly">';
						
		var print_logo = zppr.data.root.web.print_logo;
		var print_color = zppr.data.root.web.print_color;
		
		if(print_logo){
			html += '<div class="zy-print-header-top">' +
						'<div class="zy-print-logo">' +
							'<img src="'+ print_logo +'">' +
						'</div>' +
					'</div>';
		}
		
		html+= list_html;
		
		html+= '</div>';
		
		return html;
	},
	detail:function(single_property, actual_link){
		
		var html = '';
		
		html += 	'<section class="col-lg-12 col-sm-12 col-md-12 col-xl-12 zy_main hideonprint" itemtype="http://schema.org/Residence">' +
						'<article class="container-fluid">' +
							'<div id="zy_header-section" class="row zyapp_main-style" style="max-width:none;">' +	
								
								'<div class="zy_header-style col-lg-3 col-sm-12 col-md-12 col-xl-3 zy_nopadding">' +
									'<div class="zy_address-style" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">' +
										'<h1>' +
											'<p class="zy_address-style"><span itemprop="streetAddress">{{streetno}} '+ (single_property.hasOwnProperty('streetname')?zppr.streetname_fix_comma(single_property.streetname):'') +'</span></p>' +
											'<p class="zy_subaddress-style">' +
												'<span itemprop="addressLocality"> '+ ( single_property.hasOwnProperty('lngTOWNSDESCRIPTION') && single_property.lngTOWNSDESCRIPTION ? single_property.lngTOWNSDESCRIPTION + ',':'' ) +' </span>' +
												'<span itemprop="addressRegion"> '+ (single_property.hasOwnProperty('provinceState')?single_property.provinceState:'') +'</span>' +
												'<span itemprop="postalCode"> '+ (single_property.hasOwnProperty('zipcode')?single_property.zipcode:'') +' </span>' +
											'</p>' +
										'</h1>' +
									'</div>' +
								'</div>' +
								
								'<div class="zy_price-mls col-lg-3 col-sm-12 col-md-12 col-xl-4 zy_nopadding">' +
									'<div class="row">' +
										'<div class="col-lg-6 col-sm-12 col-md-12 col zy_nopadding">' +
											'<h2>' +
												'<p class="zy_price-style">' + zppr.data.currency +'{{realprice}}</p>' +
												'<p class="zy_label-style">Price</p>' +
											'</h2>' +
										'</div>' +
										'<div class="col-lg-6 col-sm-12 col-md-12 col zy_nopadding">' +
											'<h2>' +
												'<p class="zy_mlsno">{{listno}}</p>' +
												'<p class="zy_label-style">{{displaySource}}#</p>' +
											'</h2>' +
										'</div>' +
									'</div>' +
								'</div>' +
								
								'<div class="zy_price-mls col-lg-6 col-sm-12 col-md-12 col-xl-5 zy_nopadding">' +
									'<div class="row">' +
										'<div class="col-lg-3 col-sm-12 col-md-12">' +
											'<h2>' +
												'<p class="zy_price-style zy_status-style zpa-status '+ (jQuery.isNumeric(status)?'status_'+status.replace(' ', ''):status.replace(' ', '')) +'">{{status}}</p>' +
												'<p class="zy_label-style">Status</p>' +
											'</h2>' +
										'</div>' +
										'<div class="col-lg-8 col-sm-12 col-md-12 zy_nopadding zy-detail-tool">' +
											'<div class="row">' +				
												'<div class="btn_wrap zy_save-favorite-wrap col-btn">' +
													'<button class="zy_save-favorite '+ (zppr.is_favorite(single_property.id)?"favorited":"") +'" isLogin="'+ (zppr.data.is_login? 1:0) +'" afterAction="save_favorite" contactid="'+ zppr.data.contactIds.join() +'" searchid="'+ zppr.data.searchId +'"><i class="fa fa-heart fa-fw"></i></button>' +
													'<span>Favorite</span>' +
												'</div>' +
												
												'<div class="btn_wrap zy_save-property-wrap col-btn">' +
													'<button class="zy_save-property '+ (!zppr.data.is_login?"needLogin":"") +'" isLogin="'+ (zppr.data.is_login? 1:0) +'" afterAction="save_property" contactid="'+ zppr.data.contactIds.join() +'" searchid="'+ zppr.data.searchId +'"><i class="fa fa-floppy-o fa-fw"></i></button>' +
													'<span>Save</span>' +
												'</div>' +
												
												'<div class="btn_wrap zy_schedule-showing-wrap col-btn">' +
													'<button class="zy_schedule-showing '+ (!zppr.data.is_login?"needLogin":"") +'" afterAction="schedule_show"><i class="fa fa-clock-o fa-fw"></i></button>' +
													'<span>Request Showing</span>' +
												'</div>' +
												
												'<div class="btn_wrap zy_request-showing-wrap col-btn">' +
													'<button class="zy_request-showing '+ (!zppr.data.is_login?"needLogin":"") +'" afterAction="request_info"><i class="fa fa-info fa-fw"></i></button>' +
													'<span>Request info</span>' +
												'</div>' +
												
												'<div class="btn_wrap zy_share-property-wrap col-btn">' +
													'<button class="zy_share-property dropdown-toggle" id="dropdownShare" data-toggle="dropdown"><i class="fa fa-share fa-fw"></i></button>' +
													'<span>Share</span>' +
													'<div class="dropdown-menu" aria-labelledby="dropdownShare">' +
														'<ul class="menu-list">' +
															'<li>' +
																'<a class="share-item share-email '+ (!zppr.data.is_login?"needLogin":"") +'" afterAction="share_email" contactid="'+ zppr.data.contactIds.join() +'" href="#">' +
																	'<i class="zy-icon zy-icon--larger fa fa-at" aria-hidden="true"></i>' +
																	'<span>Email this listing</span>' +
																'</a>' +
																
															'</li>' +															
															'<li>' +
																'<a class="share-item" href="https://www.facebook.com/sharer/sharer.php?u='+ actual_link +'" target="_blank" onclick="window.open(this.href, \'facebook-share-dialog\', \'width=626,height=436\'); return false;">' +
																	'<i class="zy-icon zy-icon--larger fa fa-facebook" aria-hidden="true"></i>' +
																	'<span>Share on Facebook</span>' +
																'</a>' +
															'</li>' +															
														'</ul>' +
													'</div>' +
												'</div>' +
											'</div>' +
										'</div>' +
									'</div>' +
								'</div>' +
								
							'</div>' +
							
							'<div class="row zy_highlight-section">' +
								'<div class="col-lg-8 col-sm-12 col-md-12 col-xl-8">' + 
									'<div id="gallery-column" style="display: block !important;">';										
										
		if( single_property.hasOwnProperty('photoList') && single_property.photoList.length ){
										
			html +=						'<div class="row">' +
											'<div class="col-xs-12 zpa-property-photo">' +
												'<div class="owl-carousel-container">' +
														
													'<div class="top-head-carousel-wrapper">' +
														'<div class="zy-full-lightbox">' +
															'<a class="btn btn-primary btn-zy-lightbox">' +
																'<svg id="zy-icon-arrowsExpand_16x16" viewBox="0 0 16 16"><path d="M14.53 10.12h-.84a.42.42 0 0 0-.44.4V12l-2.66-2.68a.48.48 0 0 0-.61 0l-.64.68a.38.38 0 0 0 0 .55l2.72 2.72h-1.57a.43.43 0 0 0-.4.46v.82a.43.43 0 0 0 .41.46h3.86a.63.63 0 0 0 .64-.64v-3.85a.45.45 0 0 0-.47-.4zM6 9.33a.38.38 0 0 0-.55 0l-2.72 2.74v-1.59a.43.43 0 0 0-.45-.4h-.82a.43.43 0 0 0-.46.41v3.87a.63.63 0 0 0 .63.65h3.85a.45.45 0 0 0 .4-.47v-.85a.42.42 0 0 0-.4-.44H4l2.66-2.66a.48.48 0 0 0 0-.62zM3.93 2.73h1.58a.43.43 0 0 0 .4-.46v-.81a.43.43 0 0 0-.4-.46H1.65a.63.63 0 0 0-.65.63v3.85a.45.45 0 0 0 .47.4h.84a.42.42 0 0 0 .44-.4V4l2.66 2.68a.48.48 0 0 0 .61 0L6.66 6a.38.38 0 0 0 0-.55zM14.37 1h-3.85a.45.45 0 0 0-.4.47v.84a.42.42 0 0 0 .4.44H12L9.32 5.41a.48.48 0 0 0 0 .62l.68.64a.38.38 0 0 0 .55 0l2.72-2.72v1.57a.43.43 0 0 0 .45.4h.82a.43.43 0 0 0 .46-.41V1.65a.63.63 0 0 0-.63-.65z" fill-rule="evenodd"></path></svg>' +
															'</a>' +
														'</div>' +
														 /* < div class="owl-carousel top-head-carousel '+ (!zppr.data.is_login?"needLogin":"") +'"> */
														'<div class="owl-carousel top-head-carousel">';
														
			var i=0;
			for (const [key, pic] of Object.entries(single_property.photoList)) {
				if( pic.imgurl.indexOf('mlspin.com') > -1){
					html += 								'<div style="background-image: url(\'//media.mlspin.com/photo.aspx?mls='+ single_property.listno +'&w=1600&h=1024&n='+ i +'\')" class="owl-slide"><img class="" src="//media.mlspin.com/photo.aspx?mls='+ single_property.listno +'&w=1600&h=1024&n='+ i +'" /></div>';
				}else{
					html += 								'<div style="background-image: url(\''+ pic.imgurl +'\')" class="owl-slide"><img class="" src="'+ pic.imgurl +'" /></div>';
				}		
				i++;
			}
			html += 									'</div>' +
														'<div class="left-nav"><i class="icon-left-arrow"></i>' +
														'</div>' +
														'<div class="right-nav"><i class="icon-right-arrow"></i>' +
														'</div>' +
													'</div>' +
													'<div class="carousel-controller-wrapper">' +
														'<div class="owl-carousel carousel-controller">';
		
		
			i=0;
			for (const [key, pic] of Object.entries(single_property.photoList)) {
				if( pic.imgurl.indexOf('mlspin.com') > -1){
					html +=									'<div style="background-image: url(\'//media.mlspin.com/photo.aspx?mls='+ single_property.listno +'&w=150&h=150&n='+ i +'\')" class="item"></div>';
				}else{
					html +=									'<div style="background-image: url(\''+ pic.imgurl +'\')" class="item"></div>';
				}
				i++;
			}
		
		
			html +=										'</div>' +
													'</div>' +
												'</div>' +
											'</div>' +							
												
										'</div>';
											
											
		}
										
										
		var includes=['gsmls','nwmls'];
		if(zppr.in_array(zppr.data.detailpage_group,includes)){
		
			html+= 						'<div class="zy_img-source">';
			
			var img_disclaimer='';
			if(single_property.hasOwnProperty('listAgentName') && zppr.data.is_show_agent_name){
				img_disclaimer+= "Listing Provided Courtesy "+ single_property.listAgentName +" of";							
			}else{
				img_disclaimer+= "Listing Provided Courtesy of";						
			}
			
			if(single_property.hasOwnProperty('listOfficeName')){
				img_disclaimer+= ' '+ "<strong>{single_property->listOfficeName}</strong>";
			}	
			
			html+=img_disclaimer;
			
			html+= 						'</div>';
		}
		html+= 						'</div>' +
										
									'<div id="zy_description-section" class="zy_description-section">' +
																
										'<div class="zy_print-button">' +
											'<a id="zy_open-print-popup" href="#"><i class="fa fa-print" aria-hidden="true"></i> Print</a>' +
										'</div>' +
										
										'<div class="zy_vitural-tour">' +
										
										/* incldue vtlink template */
										zppr.vtlink_template(single_property) +
											
										'</div>';
										
		if(single_property.hasOwnProperty('openHouses') && single_property.openHouses.length){
			html+=						'<h2>Open House</h2>';
			
			for (const [key, openHouse] of Object.entries(single_property.openHouses)) {
				
				var sourceid=single_property.sourceid;
				var mlstz = zppr.mls_timezone(sourceid);
				var ld = new Date(openHouse.startDate).toLocaleString("en-US", {timeZone: mlstz});
				var dt = new Date(ld);
				var startDateOnly = dt.format('Y-m-d');
				var startDate = dt.format('M j, Y h:i A');
				var startTime =  dt.format('h:i A');
				
				var duration = openHouse.duration  ? openHouse.duration : 0;
				var printEndTime = '';
				
				if( duration ){
					dt = dt.addMinutes( duration );
					endTime =dt.format('h:i A');
					printEndTime = '- '+endTime;
				}else if(openHouse.endDate){
					ld = new Date(openHouse.endDate).toLocaleString("en-US", {timeZone: mlstz});
					dt = new Date(ld);
					endDateOnly = dt.format('Y-m-d');
					
					if(startDateOnly!=endDateOnly){
						
						endDate = dt.format('M j, Y h:i A');
						printEndTime = '- '+endDate;
					}else{
						
						endTime = dt.format('h:i A');
						printEndTime = '- '+endTime;
					}
				}
				
				html+=					'<p class="open-house-info"><span class="openHomeText">'+ startDate +' '+ printEndTime +'</p>';						
			
			}
		}
										
		html+=							'<h2>Description</h2>' +
										'<p>{{remarks}}</p>';
										
		if(single_property.hasOwnProperty('direction')){
			html+=						'<h2>Direction</h2>' +
										'<p>{{direction}}</p>';
		}
									
											
		html+=						'</div>' +
										
								'</div>' +			
								
								'<div id="zy_sidebar" class="col-lg-4 col-sm-12 col-md-12 col-xl-4">' +					
																		
									'<ul class="zy_prop-details">';
										
		if( single_property.hasOwnProperty('syncTime') ){
			html+=						'<li><label class="update-info col-xs-12 zy_nopadding"> Last Checked for Updates on {{syncTime}} </label></li>';
		}else if( single_property.hasOwnProperty('syncAge') ){
			html+=						'<li><label class="update-info col-xs-12 zy_nopadding"> Last Checked for Updates: {{syncAge}} minutes ago </label></li>';
		}
										
								
		/* incldue sidebar template */
		html+=							zppr.sidebar_template(single_property) +
														
									'</ul>' +
									
									'<ul class="zy_agent-info">';
									
		var user_default = zppr.data.plugin_url + 'images/user-default.png';
		
		if( single_property.hasOwnProperty('listingAgent') ){
			var agentFullName = zppr.checkNested(single_property,'listingAgent','userName') ? single_property.listingAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'listingAgent','imageURL') ? single_property.listingAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'listingAgent','phoneMobile') ? single_property.listingAgent.phoneMobile : zppr.checkNested(single_property,'listingAgent','phoneOffice') ? single_property.listingAgent.phoneOffice : '';
			var agentEmail = zppr.checkNested(single_property,'listingAgent','email') ? single_property.listingAgent.email : '';
			
			html+=						'<li>Listing Agent</li>' +
										'<li>';
			if(agentImage){
				html+=						'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
			}
			html+=							'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
			if( $agent ){
				html+=						'<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>';
			}
			html+=							'</span>' +
										'</li>';
		}
		
		if( single_property.hasOwnProperty('coListingAgent') ){
			
			var agentFullName = zppr.checkNested(single_property,'coListingAgent','userName') ? single_property.coListingAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'coListingAgent','imageURL') ? single_property.coListingAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'coListingAgent','phoneMobile') ? single_property.coListingAgent.phoneMobile : zppr.checkNested(single_property,'coListingAgent','phoneOffice') ? single_property.coListingAgent.phoneOffice : '';
			var agentEmail = zppr.checkNested(single_property,'coListingAgent','email') ? single_property.coListingAgent.email : '';
			
			html+=						'<li>Listing Agent</li>' +
										'<li>';
			if(agentImage){
				html+=						'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
			}
			html+=							'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
			if( $agent ){
				html+=						'<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>';
			}
			html+=							'</span>' +
										'</li>';
		}
		
		if( single_property.hasOwnProperty('salesAgent') ){
			var agentFullName = zppr.checkNested(single_property,'salesAgent','userName') ? single_property.salesAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'salesAgent','imageURL') ? single_property.salesAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'salesAgent','phoneMobile') ? single_property.salesAgent.phoneMobile : zppr.checkNested(single_property,'salesAgent','phoneOffice') ? single_property.salesAgent.phoneOffice : '';
			var agentEmail = zppr.checkNested(single_property,'salesAgent','email') ? single_property.salesAgent.email : '';
			
			html+=						'<li>Listing Agent</li>' +
										'<li>';
			if(agentImage){
				html+=						'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
			}
			html+=							'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
			if( $agent ){
				html+=						'<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>';
			}
			html+=							'</span>' +
										'</li>';
		}
		
		if( single_property.hasOwnProperty('coSalesAgent') ){
			var agentFullName = zppr.checkNested(single_property,'coSalesAgent','userName') ? single_property.coSalesAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'coSalesAgent','imageURL') ? single_property.coSalesAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'coSalesAgent','phoneMobile') ? single_property.coSalesAgent.phoneMobile : zppr.checkNested(single_property,'coSalesAgent','phoneOffice') ? single_property.coSalesAgent.phoneOffice : '';
			var agentEmail = zppr.checkNested(single_property,'coSalesAgent','email') ? single_property.coSalesAgent.email : '';
			
			html+=						'<li>Listing Agent</li>' +
										'<li>';
			if(agentImage){
				html+=						'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
			}
			html+=							'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
			if( $agent ){
				html+=						'<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>';
			}
			html+=							'</span>' +
										'</li>';
		}
										
		html+=						'</ul>' +
									
								'</div>' +
								
							'</div>' +
							
							'<div id="zy_bottom-section">' +
								
								'<div class="row">' +
									
									'<div class="col-xs-12">' +
										
										'<h2>Property Details</h2>' +
										
										/* incldue content template */
										zppr.feature_template(single_property) +
										
									'</div>' +
								'</div>' +
								
								'<div class="row">' +
									
									'<div class="col-xs-12">' +

										'<div class="full-details-disclaimer">' +
											'<br> ';
											
		var excludes=['gsmls'];
		if(zppr.in_array(zppr.data.detailpage_group,excludes)){
			if( zppr.data.source_details ){
				html+=						zppr.data.source_details;
				
				if(zppr.data.detailpage_group == 'nwmls'){
					var defaultDisc="Disclaimer: The information contained in this listing has not been verified by <strong>{single_property->listOfficeName}</strong> and should be verified by the buyer.";
					html+= 					'<br /><br />'+ defaultDisc;
				}
			}else{
				html+=						'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
			}
		}
																		
		html+=							'</div>' +
									'</div>' +
								'</div>';
								
								/*
								<?php if( isset($single_luxury) && isset($single_luxury->id) ): ?>
								<div class="row">
									<div class="col-xs-12">
										<h2 class="zy-listing__headline">Properties</h2>
										<?php zipperagent_luxury_table($single_luxury); ?>
									</div>
								</div>			
								<?php endif; ?> */
								
								/*
								<?php if( isset(single_property->lat) && isset(single_property->lng) && !empty(single_property->lat) && !empty(single_property->lng) ): ?>
								<div class="row zy-widget map-widget">
									<div class="col-xs-12">
										<div class="zy-map-container">
											<div id="map" style="height:300px"></div>
										</div>
									</div>
								</div>
								<?php endif; ?>
								
								<?php if( is_great_school_enabled() && isset(single_property->lat) && isset(single_property->lng) && !empty(single_property->lat) && !empty(single_property->lng) ): ?>
								<div class="row zy-widget greatschool-widget">
									<div class="col-xs-12 col-md-12 col-lg-6">
										<h3 class="">Greatshools</h3>
										<div id="greatshools"></div>
										<script>
											jQuery(document).ready(function(){
												var curr_width = jQuery('.greatschool-widget #greatshools').width();
												var gs_iframe = '<iframe className="greatschools" src="//www.greatschools.org/widget/map?searchQuery=&textColor=0066B8&borderColor=DDDDDD&lat=<?php echo single_property->lat; ?>&lon=<?php echo single_property->lng; ?>&cityName=<?php echo isset(single_property->lngTOWNSDESCRIPTION)?single_property->lngTOWNSDESCRIPTION:'' ?>&state=<?php echo isset(single_property->provinceState)?single_property->provinceState:'' ?>&normalizedAddress=<?php echo urlencode( zipperagent_get_address(single_property) ); ?>&width='+curr_width+'&height=368&zoom=1" width="'+curr_width+'" height="368" marginHeight="0" marginWidth="0" frameBorder="0" scrolling="no"></iframe>'
												jQuery('#greatshools').html(gs_iframe);
											});
										</script>
									</div>
								</div>
								<?php endif; ?>
								
								<?php if( is_walkscore_enabled() ): ?>
								<div class="row zy-widget walkscore-widget">
									<div class="col-xs-12 col-md-12 col-lg-6">
										<h3 class="">Walk Score</h3>
										<div id="ws"></div>
										<script type='text/javascript'>
										var ws_wsid = 'ws';
										var ws_address = '<?php echo zipperagent_get_address(single_property); ?>';
										var ws_format = 'tall';
										var ws_width = '100%';
										var ws_height = '300';
										</script><style type='text/css'>#ws-walkscore-tile{position:relative;text-align:left}#ws-walkscore-tile *{float:none;}</style><div id='ws-walkscore-tile'></div><script type='text/javascript' src='https://www.walkscore.com/tile/show-walkscore-tile.php'></script>
									</div>
								</div>
								<?php endif; ?>
								
								if(!zppr.data.sold_status.indexOf(single_property.status)>-1){
								<div class="row zy-widget">
									<div id="zy_mortgage-calculator" class="col-xs-12 col-md-12 col-lg-8 hideonprint">
										<?php include ZIPPERAGENTPATH . '/custom/templates/detail-new/template-mortgage-calculator.php'; ?>
									</div>
								</div> 
								}
								*/
								
		if( zppr.data.agent != 0 ){
			html+=				'<div class="row zy-widget">' +
									'<div id="ask-a-question-form" class="col-xs-12 col-md-12 col-lg-8">' +
										'<h3 class="zy-listing-contact-title">Ask Agent a Question</h3>' +
										
										'<form id="zpa-modal-contact-agent-form" method="post">';
											
			if( ! zppr.data.is_login ){ /* only for non logged in user */
				html+=						'<div class="row">' +
												'<div class="col-md-6 hidden-on-login">' +
													'<div>' +
														'<label for="listing-contact-fname">First Name</label>' +
														'<input type="text" id="listing-contact-fname" name="firstName" required="">' +
													'</div><span></span>' +
												'</div>' +
												'<div class="col-md-6 hidden-on-login">' +
													'<div>' +
														'<label for="listing-contact-lname">Last Name</label>' +
														'<input type="text" id="listing-contact-lname" name="lastName" required="">' +
													'</div><span></span>' +
												'</div>' +
												'<div class="col-md-6 hidden-on-login">' +
													'<div>' +
														'<label for="listing-contact-email">Email</label>' +
														'<input type="email" id="listing-contact-email" name="email" required="">' +
													'</div><span></span>' +
												'</div>' +
												'<div class="col-md-6 hidden-on-login">' +
													'<div>' +
														'<label for="listing-contact-phone">phoneMobile</label>' +
														'<input type="text" id="listing-contact-phone" name="phone" required="">' +
													'</div><span></span>' +
												'</div>' +
												/*
												<div class="col-md-6 hidden-on-login">
													<div>
														<label for="listing-contact-city">City</label>
														<input type="text" id="listing-contact-city" name="city" required="">
													</div><span></span>
												</div>
												<div class="col-md-6 hidden-on-login">
													<div>
														<label for="listing-contact-state">State</label>
														<input type="text" id="listing-contact-state" name="state" required="">
													</div><span></span>
												</div>
												<div class="col-md-6 hidden-on-login">
													<div>
														<label for="listing-contact-zipcode">Zip Code</label>
														<input type="text" id="listing-contact-zipcode" name="zipCode" required="">
													</div><span></span>
												</div>
												<div class="col-md-6 hidden-on-login">
													<div>
														<label for="listing-contact-lookfor">Looking For</label><br />
														<input type="radio" id="listing-contact-lookfor" name="lookfor" value="buyer" required="">&nbsp; Buy
														<input type="radio" id="listing-contact-lookfor" name="lookfor" value="seller" required="">&nbsp; Sell
													</div><span></span>
												</div> */
											'</div>';
			}
			html+=							'<div class="row">' +						
												'<div class="col-md-12">' +
													'<div>' +
														'<label for="listing-contact-comment">' +
															'What would you like to know?' +										
														'</label>' +
														'<textarea id="listing-contact-comment" class="at-comment-txt" name="note" cols="30" rows="5" required="required"></textarea>' +
													'</div>' +
												'</div>';
												
			if(zppr.data.is_register_form_chaptcha_enabled){
				var site_key = zppr.data.root.google.site_key;
												
				html+=							'<div class="col-md-12 mt-10">' +
													'<div class="g-recaptcha" data-sitekey="'+ site_key +'"></div>' +
													'<script src=\'https://www.google.com/recaptcha/api.js?hl=en\'></script>' +
												'</div>';
			}														
			html+=								'<div class="col-md-12">' +
													'<input type="submit" class="listing-contact-submit" value="Submit">' +
												'</div>' +
											'</div>' +
											'<input type="hidden" name="contactId" value="'+ zppr.data.contactIds.join() +'" />' +
											'<input type="hidden" name="agent" value="'+ zppr.data.agent.login +'" />' +
											'<input type="hidden" name="actual_link" value="'+ actual_link +'" />' +
											'<input type="hidden" name="leadSource" value="'+ zppr.data.root.web.lead_source +'" />';
			if( ! zppr.data.is_login ){ /* only for non logged in user */
				html+=						'<input type="hidden" name="action" value="regist_user" >';
			}else{
				html+=						'<input type="hidden" name="action" value="contact_agent" >';
			}
			html+=						'</form>' +
									'</div>' +
								'</div>';
		}	
								
		html+=					'<div class="row zy-widget">' +
									'<div id="zy_related-properties" class="col-xs-12 col-md-12 col-lg-12 hideonprint" style="display:none">' +
										
									'</div>' +
								'</div>' +
								
								'<div class="row">' +
									
									'<div class="col-xs-12">' +

										'<div class="full-details-disclaimer">' +
											'<br> ';
																						
		if(zppr.data.source_disclaimer){
			html+= 							zppr.data.source_disclaimer;
		}
											
		/* if(zppr.data.detailpage_group == 'nwmls'){
			var defaultDisc="Disclaimer: The information contained in this listing has not been verified by <strong>'+ single_property.listOfficeName +'</strong> and should be verified by the buyer.";
			html+=							defaultDisc;
		} */
																	
		html+=							'</div>' +
									'</div>' +
								'</div>' +							
								
							'</div>' +
							
						'</article>' +
						
					'</section>';
		
		return html;
	},
	gallery_template:function(single_property){
		
		var html = '<div id="zpa-main-container" class="zpa-container " style="display: inline;">' +
						'<div id="gallery-column" style="display: block !important;">';										
										
		if( single_property.hasOwnProperty('photoList') && single_property.photoList.length ){
										
			html +=				'<div id="zy-gallery-slide-proptype"  class="col-xs-12 modal in hideonprint" style="display: none;">' +
									'<div class="modal-dialog">' +
										'<div class="modal-content">' +
											'<div class="modal-header">' +
												'<button type="button" class="close" data-dismiss="modal"> &#215; </button>' +
											'</div>' +
											'<div class="modal-body">' +
												'<div class="owl-carousel-container">' +
														
													'<div class="top-head-carousel-wrapper">' +
														 /* < div class="owl-carousel top-head-carousel '+ (!zppr.data.is_login?"needLogin":"") +'"> */
														'<div class="owl-carousel top-head-carousel">';
														
			var i=0;
			for (const [key, pic] of Object.entries(single_property.photoList)) {
				if( pic.imgurl.indexOf('mlspin.com') > -1){
					html += 								'<div style="background-image: url(\'//media.mlspin.com/photo.aspx?mls='+ single_property.listno +'&w=1600&h=1024&n='+ i +'\')" class="owl-slide"><img class="" src="//media.mlspin.com/photo.aspx?mls='+ single_property.listno +'&w=1600&h=1024&n='+ i +'" /></div>';
				}else{
					html += 								'<div style="background-image: url(\''+ pic.imgurl +'\')" class="owl-slide"><img class="" src="'+ pic.imgurl +'" /></div>';
				}		
				i++;
			}
			html += 									'</div>' +
														'<div class="left-nav"><i class="icon-left-arrow"></i>' +
														'</div>' +
														'<div class="right-nav"><i class="icon-right-arrow"></i>' +
														'</div>' +
													'</div>' +
													'<div class="carousel-controller-wrapper">' +
														'<div class="owl-carousel carousel-controller">';
		
		
			i=0;
			for (const [key, pic] of Object.entries(single_property.photoList)) {
				if( pic.imgurl.indexOf('mlspin.com') > -1){
					html +=									'<div style="background-image: url(\'//media.mlspin.com/photo.aspx?mls='+ single_property.listno +'&w=150&h=150&n='+ i +'\')" class="item"></div>';
				}else{
					html +=									'<div style="background-image: url(\''+ pic.imgurl +'\')" class="item"></div>';
				}
				i++;
			}
		
		
			html +=										'</div>' +
													'</div>' +
												'</div>' +	
											'</div>' +
										'</div>' +
									'</div>' +							
								'</div>' +							
							'</div>' +		
												
					'</div>';
											
											
		}
		
		return html;
	},
	anonget:function(targetElement,listid,actual_link){
				
		var response=false;
		var parm=[];
				
		console.time('generate anonget');
		
		parm.push(8,zppr.data.root.web.subdomain,zppr.data.root.web.authorization.consumer_key,zppr.data.contactIds.join(),listid);
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {

			if (this.readyState == 4 ) {
				if(this.status == 200){
					response=JSON.parse(this.responseText);
					if(response.responseCode===200){					
						zppr.declare_date_format();
						
						// console.log(response);
						var single_property = response.result.property;
						var html = zppr.detail(single_property, actual_link);
						var real_price = zppr.moneyFormat(zppr.data.sold_status.indexOf(single_property.status)>-1?(single_property.hasOwnProperty('saleprice')?single_property.saleprice:single_property.listprice):single_property.listprice);
						var gallery = zppr.gallery_template(single_property);
						
						html = zppr.property_fields(single_property, html);
						jQuery(targetElement).html( html );
						jQuery('#zpa-modal-share-email-form .listing-price > span').html(real_price);
						jQuery('#zy_gallery-popup').html( gallery ).promise().done(function(){
							//your callback logic / code here
						
							(function($){
								function setThumbnailAsASelected(number) {
									$carouselController.find(".owl-item.selected").removeClass("selected"), $carouselController.find(".owl-item:nth-of-type(" + (number + 1) + ")").addClass("selected")
								}

								function changeSlide(isLeftDirection) {
									var pickedItemNumber = void 0,
										oldItemIndex = $topHeadCarousel.find(".owl-item.active").index(),
										itemCount = $topHeadCarousel.find(".owl-stage .owl-item").length;
									oldItemIndex >= itemCount - 1 && !isLeftDirection ? $topHeadCarousel.trigger("to.owl.carousel", 0) : 0 == oldItemIndex && isLeftDirection ? $topHeadCarousel.trigger("to.owl.carousel", itemCount - 1) : $topHeadCarousel.trigger(isLeftDirection ? "prev.owl.carousel" : "next.owl.carousel"), pickedItemNumber = $topHeadCarousel.find(".owl-item.active").index(), setThumbnailAsASelected(pickedItemNumber), center(pickedItemNumber, visibleItemCount)
								}

								function center(number, itemInPage) {
									$carouselController.trigger("to.owl.carousel", number - parseInt(itemInPage / 2))
								}
								var $topHeadCarousel = $(".top-head-carousel"),
									$carouselController = $(".carousel-controller"),
									visibleItemCount = 0,
									itemTotalCount = 0;
								$topHeadCarousel.owlCarousel({
									singleItem: !0,
									slideSpeed: 1e3,
									pagination: !1,
									responsiveRefreshRate: 200,
									smartSpeed: 800,
									paginationSpeed: 400,
									rewindSpeed: 500,
									items: 1,
									dots: !1,
									autoplay: $topHeadCarousel.hasClass("carousel-autoplay"),
									autoplayTimeout: 3500,
									// animateOut: "fadeOut",
									// animateIn: "fadeIn",
									onDragged: function(el) {
										console.log(el), $carouselController.find(".owl-item.selected").removeClass("selected"), center(el.item.index, visibleItemCount), $carouselController.find(".owl-item:nth-child(" + (el.item.index + 1) + ")").addClass("selected")
									}
								}), $(".left-nav").click(function() {
									return changeSlide(!0)
								}), $(".right-nav").click(function() {
									return changeSlide(!1)
								}), $carouselController.owlCarousel({
									items: 11,
									responsiveClass: !0,
									responsive: {
										0: {
											items: 5
										},
										600: {
											items: 7
										},
										1e3: {
											items: 11
										}
									},
									pagination: !1,
									dots: !1,
									nav: true,
									merge:true,
									slideBy: 5,
									smartSpeed: 200,
									navText:['<i class="icon-left-arrow"></i>', '<i class="icon-right-arrow"></i>'],
									autoplay: $carouselController.hasClass("carousel-autoplay"),
									autoplayTimeout: 3500,
									responsiveRefreshRate: 100,
									onInitialized: function(el) {
										visibleItemCount = el.page.size, itemTotalCount = el.item.count, $(el.target).find(".owl-item").eq(0).addClass("selected")
									},
									onResize: function(el) {
										visibleItemCount = el.page.size
									}
								}), $carouselController.on("click", ".owl-item", function(e) {
									var clickedItemNumber = $(this).index();
									setThumbnailAsASelected(clickedItemNumber), $topHeadCarousel.trigger("to.owl.carousel", clickedItemNumber), center(clickedItemNumber, visibleItemCount)
								})
								
								/*
								<?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ): //only for non logged in user ?>
								var count=<?php echo isset($_SESSION['za_image_clicked']) ? (int) $_SESSION['za_image_clicked'] : 0; ?>;
								var limit='<?php echo zipperagent_slider_limit_popup(); ?>';
								var preventDouble=0;
								$topHeadCarousel.on('changed.owl.carousel', function(event) {
									
									if(preventDouble){
										preventDouble=0;
										return;
									}
									
									count++;			
									ajax_image_count(count);		
									if(count>=limit && limit != 0 && $topHeadCarousel.hasClass('needLogin')){
										jQuery('#needLoginModal').modal('show');
										<?php if(!zipperagent_signup_optional()): ?>
										set_popup_is_triggered();
										<?php endif; ?>
										count=0;
									}
									
									function ajax_image_count(count){
										var data = {
											action: 'image_click_count',			
											count: count,			
										};
										
										jQuery.ajax({
											type: 'POST',
											dataType : 'json',
											url: zipperagent.ajaxurl,
											data: data,
											success: function( response ) {    
												if( response['result'] ){
												}
											}
										});
									}
									
									preventDouble=1;
								});
								<?php endif; ?> */
								
							})(jQuery);
													
							jQuery('body').on('click', '.zy-full-lightbox .btn-zy-lightbox', function(e){
								jQuery('#zy-gallery-slide-proptype').modal('show');
								// jQuery('#gallery-column .zpa-property-photo').hide();
							});
							
							jQuery('body').on('click', '#zy-gallery-slide-proptype .modal-header .close', function(){							
								// jQuery('#gallery-column .zpa-property-photo').show();
							});	
						
						});
						
						console.timeEnd('generate anonget');		
					}else{
						console.log(response);
					}
					
				}else {
					console.log("status = " + this.status + " received");
				}
			} else {
				console.log("status = " + this.status + " received");
			}
		};
		xhttp.open("GET", guxx(parm), true);
		xhttp.send();
		
		return response;
	},
	search:function(targetElement,resultType,requests,args,actual_link,is_view_save_search){
		var response=false;
		var parm=[];
		
		var searchType = args.hasOwnProperty('searchType') ? args.searchType : '';
		var subdomain = args.hasOwnProperty('subdomain') ? args.subdomain : '';
		var customer_key = args.hasOwnProperty('customer_key') ? args.customer_key : '';
		var crit = args.hasOwnProperty('crit') ? args.crit : '';
		var order = args.hasOwnProperty('model') ? args.model : '';
			order = args.hasOwnProperty('order') ? args.order : order;
			order = order.replace(/%253A/g, ":").replace(/%3A/g, ":");
		var sidx = args.hasOwnProperty('sidx') ? args.sidx : '';
		var ps = args.hasOwnProperty('ps') ? args.ps : '';
		var contactId = args.hasOwnProperty('contactId') ? args.contactId : '';
		var micro = args.hasOwnProperty('micro') ? args.micro : '';
		
		parm.push(searchType,subdomain,customer_key,crit,order,sidx,ps,contactId);
		
		switch(resultType){
			case "list":				
				console.time('generate list');
				break;
			case "count":				
				console.time('generate list count/pagination');
				break;
		}
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {

			if (this.readyState == 4 ) {
				if(this.status == 200){
					
					zppr.declare_date_format();
					
					var html='';
					var html_print='';
					response=JSON.parse(this.responseText);
					if(response.responseCode===200){					
						
						switch(resultType){
							case "list":
								if(response.result.hasOwnProperty('filteredList')){
									
									var column = requests.hasOwnProperty('column') ? parseInt(requests.column) : 3;									
									var wrapOpen=0;
									var i=0;
									
									var prt_column = 2;
									var prt_wrapOpen = 0;

									for (const [key, value] of Object.entries(response.result.filteredList)) {
										
										/* for listing */
										if(i % column ==0 && ! wrapOpen){
											html += '<div class="zpa-grid-wrap">';
											wrapOpen=1;
										}
										
										html += zppr.one_property(value, column);
										
										if( ((i % column) >= (column-1) && wrapOpen  //if one line has reach prop limit close the div
											  || (i+1==response.result.filteredList.length && wrapOpen ) ) //if last prop reached close the div
											  && ! zppr.is_mobile() ){
											
											html +=		'<div class="clearfix"></div>' +
													'</div>';
													
											wrapOpen=0;
										}
										
										/* for print view */
										if(i % prt_column ==0 && ! prt_wrapOpen && ! zppr.is_mobile()){
											html_print += '<div class="zy_row">';
											prt_wrapOpen=1;
										}
										
										html_print += zppr.one_print(value);
										
										if( ((i % prt_column) >= (prt_column-1) && prt_wrapOpen  //if one line has reach prop limit close the div
											  || (i+1==response.result.filteredList.length && prt_wrapOpen ) ) ){ //if last prop reached close the div
											
											html_print +=	'<div class="clearfix"></div>' +
													'</div>';
													
											prt_wrapOpen=0;
										}
										
										i++;
									}
									
									zppr.save_session('/api/mls/advSearchWoCnt', response.result, actual_link);
								}
								
								html = zppr.list_template(requests, html, is_view_save_search);
								html_print = zppr.list_print(requests, html_print);
								
								jQuery(targetElement).html( html );
								jQuery(targetElement).append( html_print );
								
								args.searchType=1;
								zppr.search('.zpa-listing-search-results', 'count', requests, args, actual_link, is_view_save_search);
								
								console.timeEnd('generate list');
							break;
							case "poc":
								if(response.result.hasOwnProperty('filteredList')){
									
									var column = requests.hasOwnProperty('column') ? parseInt(requests.column) : 3;									
									var wrapOpen=0;
									var i=0;
									
									var prt_column = 2;
									var prt_wrapOpen = 0;

									for (const [key, value] of Object.entries(response.result.filteredList)) {
										
										/* for listing */
										if(i % column ==0 && ! wrapOpen){
											html += '<div class="zpa-grid-wrap">';
											wrapOpen=1;
										}
										
										html += zppr.one_property(value, column);
										
										if( ((i % column) >= (column-1) && wrapOpen  //if one line has reach prop limit close the div
											  || (i+1==response.result.filteredList.length && wrapOpen ) ) //if last prop reached close the div
											  && ! zppr.is_mobile() ){
											
											html +=		'<div class="clearfix"></div>' +
													'</div>';
													
											wrapOpen=0;
										}
										
										/* for print view */
										if(i % prt_column ==0 && ! prt_wrapOpen && ! zppr.is_mobile()){
											html_print += '<div class="zy_row">';
											prt_wrapOpen=1;
										}
										
										html_print += zppr.one_print(value);
										
										if( ((i % prt_column) >= (prt_column-1) && prt_wrapOpen  //if one line has reach prop limit close the div
											  || (i+1==response.result.filteredList.length && prt_wrapOpen ) ) ){ //if last prop reached close the div
											
											html_print +=	'<div class="clearfix"></div>' +
													'</div>';
													
											prt_wrapOpen=0;
										}
										
										i++;
									}
									
									if(wrapOpen){
										html +=		'<div class="clearfix"></div>' +
												'</div>';
												
										wrapOpen=0;
									}
									if(prt_wrapOpen){
										html_print +=	'<div class="clearfix"></div>' +
												'</div>';
												
										prt_wrapOpen=0;
									}
									
									zppr.save_session('/api/mls/advSearchWoCnt', response.result, actual_link);
								}
								
								// html = zppr.list_template(requests, html, is_view_save_search);
								html_print = zppr.list_print(requests, html_print);
								
								jQuery(targetElement).html( html );
								jQuery(targetElement).append( html_print );
								
								args.searchType=1;
								zppr.search('.zpa-listing-search-results', 'count', requests, args, actual_link, is_view_save_search);
								
								console.timeEnd('generate list');
							break;
							case "count":
								var count = response.result;
								var num = ps;
								var page = Math.ceil( ( sidx + 1 ) / num );
								var proptypes = (!Array.isArray(requests['propertytype'])?[requests['propertytype']]:requests['propertytype']);
								
								html_pagination = zppr.html_pagination(page, num, count, actual_link);
								jQuery(targetElement + ' .prop-total').html( zppr.list_total_text(count, proptypes.length==1?proptypes[0]:'') );
								jQuery(targetElement + ' .prop-pagination').html( '<div class="col-xs-6">' + html_pagination + '</div>' );
								console.timeEnd('generate list count/pagination');
							break;
						}
						
						zppr.enableSaveSearchButton();
					}else{
						console.log(response);
					}
					
				}else {
					console.log("status = " + this.status + " received");
				}
			} else {
				console.log("status = " + this.status + " received");
			}
		};
		xhttp.open("GET", guxx(parm), true);
		xhttp.send();
		
		return response;
	},
	one_property:function(property, column){
		var listingid = property.id;
		var photoList = property.hasOwnProperty('photoList')?property.photoList:[];		
		var img_url = property.hasOwnProperty('photoList') ? property.photoList[0].imgurl : zppr.data.plugin_url + 'images/no-photo.jpg';			
		var address = zppr.getAddress(property);
		var prop_url = zppr.getPropUrl(listingid,address);
		var price=(zppr.data.sold_status.indexOf(property.status)>-1?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
		var status = property.status;
		var days = property.hasOwnProperty('dayssincelisting') ? property.dayssincelisting : '-';
		var displaySource = property.displaySource;
		var proptype = property.proptype;
		var img_count =  property.hasOwnProperty('photoList') ? property.photoList.length : 0;
		var beds_html = property.nobedrooms ? '<div class="zpa-grid-result-basic-info-item1"> <b>'+ property.nobedrooms +'</b> beds </div>' : '&nbsp;';
		var bath_html = property.nobaths ? '<div class="zpa-grid-result-basic-info-item2"> <b>'+ property.nobaths +' </b> baths </div>' : '&nbsp;';
		var sqft_html = property.squarefeet ? '<div class="zpa-grid-result-basic-info-item3"> <b> '+ zppr.formatNumber( property.squarefeet ) +' </b> sqft </div>' : '&nbsp;';
		
		var columns_code='';
		switch( column ){
			case 4:
					columns_code = 'col-lg-3 col-sm-6 col-md-6 col-xs-12';
				break;
			case 1:
					columns_code = 'col-lg-12 col-sm-12 col-md-12 col-xs-12';
				break;
			case 2:
					columns_code = 'col-lg-6 col-sm-6 col-md-6 col-xs-12';
				break;
			case 3:
			default:
					columns_code = 'col-lg-4 col-sm-6 col-md-6 col-xs-12';			
				break;
		}
		
		var is_favorite=''; //'active'
		var searchid='';
		
		infos = '';
		infoscount=0;
		
		if(property.nobedrooms){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							beds_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if(property.nobaths){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							bath_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if(property.squarefeet){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							sqft_html +
						'</div>' +
					'</div>	';
			infoscount++;
		}
		if(!infoscount){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright">' +
						'<div class="zpa-grid-result-basic-info-container">' +
							'&nbsp;' +
						'</div>' +
					'</div>';
		}
		
		var albums='';
		
		if(photoList.length){
			albums+='<a href="#" data-toggle="modal" data-target="#modal-'+ listingid +'" listingid="'+ listingid +'"> <i class="glyphicon glyphicon-camera"></i> </a> <span class="photo-count">('+ img_count +')</span>' +
					'<div id="modal-'+ listingid +'" class="modal">' +
						'<div class="modal-dialog">' +
							'<div class="modal-content">' +
								'<div class="modal-header">' +
									'<div class="modal-title text-left">'+ address +'</div>' +
									'<button type="button" class="close" data-dismiss="modal"> × </button>' +
								'</div>' +
								'<div class="modal-body"></div>' +
								'<div class="modal-footer">' +
									'<button class="btn btn-link" data-dismiss="modal"> Close </button>' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>';
		}else{
			albums+='<i class="glyphicon glyphicon-camera"></i> <span class="photo-count">(0)</span>';
		}
		
		var openhouses='';
		
		if(property.startDate){
			
			var openHouse=property;
			
			openhouses+= '<div class="row mb-5 fs-12">' +
							'<div class="col-xs-12 mt-10">' +
								'<div class="zpa-grid-result-additional-info">' +
									'<div class="zpa-listing-open-home-text-grid">';
											
										var sourceid=property.sourceid;
										var mlstz = zppr.mls_timezone(sourceid);
										var ld = new Date(openHouse.startDate).toLocaleString("en-US", {timeZone: mlstz});
										var dt = new Date(ld);
										var startDateOnly = dt.format('Y-m-d');
										var startDate = dt.format('M j, Y h:i A');
										var startTime =  dt.format('h:i A');
										
										var duration = openHouse.duration  ? openHouse.duration : 0;
										var printEndTime = '';
										
										if( duration ){
											dt = dt.addMinutes( duration );
											endTime =dt.format('h:i A');
											printEndTime = '- '+endTime;
										}else if(openHouse.endDate){
											ld = new Date(openHouse.endDate).toLocaleString("en-US", {timeZone: mlstz});
											dt = new Date(ld);
											endDateOnly = dt.format('Y-m-d');
											
											if(startDateOnly!=endDateOnly){
												
												endDate = dt.format('M j, Y h:i A');
												printEndTime = '- '+endDate;
											}else{
												
												endTime = dt.format('h:i A');
												printEndTime = '- '+endTime;
											}
										}
			openhouses+= 				'<span class="openHomeText"> Open House:</span> '+ startDate +' '+ printEndTime +
									'</div>' +
								'</div>' +
							'</div>' +
						'</div>';
		}else if(property.openHouses && property.openHouses.length ){
			
			var openHouse=property.openHouses[0];
			
			openhouses+= '<div class="row mb-5 fs-12">' +
							'<div class="col-xs-12 mt-10">' +
								'<div class="zpa-grid-result-additional-info">' +
									'<div class="zpa-listing-open-home-text-grid">';
									
										var sourceid=property.sourceid;
										var mlstz = zppr.mls_timezone(sourceid);
										var ld = new Date(openHouse.startDate).toLocaleString("en-US", {timeZone: mlstz});
										var dt = new Date(ld);
										var startDateOnly = dt.format('Y-m-d');
										var startDate = dt.format('M j, Y h:i A');
										var startTime =  dt.format('h:i A');
										
										var duration = openHouse.duration  ? openHouse.duration : 0;
										var printEndTime = '';
										
										if( duration ){
											dt = dt.addMinutes( duration );
											endTime =dt.format('h:i A');
											printEndTime = '- '+endTime;
										}else if(openHouse.endDate){
											ld = new Date(openHouse.endDate).toLocaleString("en-US", {timeZone: mlstz});
											dt = new Date(ld);
											endDateOnly = dt.format('Y-m-d');
											
											if(startDateOnly!=endDateOnly){
												
												endDate = dt.format('M j, Y h:i A');
												printEndTime = '- '+endDate;
											}else{
												
												endTime = dt.format('h:i A');
												printEndTime = '- '+endTime;
											}
										}
			openhouses+= 				'<span class="openHomeText"> Open House:</span> '+ startDate +' '+ printEndTime +
									'</div>' +
								'</div>' +
							'</div>' +
						'</div>';
		}
		
		var property_source='';
		var source_details=property.sourceid ? zppr.get_source_text(property.sourceid, {'listOfficeName':property.listOfficeName, 'listAgentName': property.listAgentName}, 'list' ) : false;
		if(source_details){
			property_source+='<div class="property-source">' +
								source_details +
							'</div>';
		}
		
		var html = '<div class="zpa-grid-result '+ columns_code +'">' +
					'<div class="zpa-grid-result-container well">' +
						'<div class="row">' +
							'<div class="col-xs-12">' +
								'<div style="background-image: url(\''+ img_url +'\');" class="zpa-results-grid-photo">' +
									(property.startDate || property.openHouses ? '<span class="badge-open-house">Open House</span>' : '') +
									'<a class="listing-'+ listingid +' save-favorite-btn '+ is_favorite +'" islogin="'+ zppr.data.is_login +'" listingid="'+ listingid +'" searchid="'+ searchid +'" contactid="'+ zppr.data.contactIds +'" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true"></i></a>' +
									'<a class="property_url" href="'+ prop_url +'"></a>' +
									'<a class="property_url" href="'+ prop_url +'"><span class="zpa-for-sale-price"> '+ zppr.moneyFormat(price) +' </span> </a>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div class="za-container">' +
							'<div class="row mt-10">' +
								'<div class="col-xs-12">' +
									'<a class="property_url" href="'+ prop_url +'">' +
									'<span class="zpa-grid-result-address"> <img src="'+ zppr.data.plugin_url +'images/map-marker.png" title="map marker" alt="map marker"> '+ address +' </span> </a>' +
								'</div>' +
							'</div>' +
																			
							'<div class="row mt-10 property-infos">' +
								infos +
							'</div>' +
							'<div class="row mb-5 fs-12 mt-10">' +
								'<div class="'+ ( column==4 ? 'col-xs-7 nopaddingright' : 'col-xs-8' ) +'">' +
									'<div class="zpa-grid-result-additional-info">' +
										'<div class="zpa-status '+ (jQuery.isNumeric(status)?'status_'+status.replace(' ', ''):status.replace(' ', '')) +'">' +
											'<span class="text-center d-block">'+ zppr.prop_status_label(status).toUpperCase() +'</span>' +
										'</div>' +
									'</div>' +
								'</div>' +
								'<div class="'+ ( column==4 ? 'col-xs-5 nopaddingleft' : 'col-xs-4' ) +'">' +
									'<span class="zpa-on-site pull-right"> <i class="fa fa-calendar" aria-hidden="true"></i> '+ days +' Day(s)  </span>' +
								'</div>' +
							'</div>' +
							
							openhouses +
							
						'</div>' +
						
						'<div class="row">' +
							'<div class="col-xs-12">' +
								'<div class="property-divider">&nbsp;</div>' +
							'</div>' +
						'</div>' +
							
						'<div class="za-container">' +
							'<div class="row">' +
								'<div class="'+ ( column==4 ? 'col-xs-9' : 'col-xs-10' ) +' pull-left fs-11 ">' +
									'<div class="zpa-grid-result-mlsnum-proptype">'+ displaySource +'#'+ property.listno +' | '+ zppr.proptype_label(proptype) +' </div>' +
								'</div>' +
								'<div class="'+ ( column==4 ? 'col-xs-3' : 'col-xs-2' ) +' pull-right fs-12 zpa-grid-result-photocount nopaddingleft">' +
									albums +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div style="clear:both"></div>' +
					'</div>' +
					property_source +
					'<div class="grid-margin"></div>' +
				'</div>';
		
		return html;
	},
	one_print:function(property){
		var listingid = property.id;
		var photoList = property.hasOwnProperty('photoList')?property.photoList:[];		
		var img_url = property.hasOwnProperty('photoList') ? property.photoList[0].imgurl : zppr.data.plugin_url + 'images/no-photo.jpg';			
		var address = zppr.getAddress(property);
		var prop_url = zppr.getPropUrl(listingid,address);
		var price=(zppr.data.sold_status.indexOf(property.status)>-1?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
		var status = property.status;
		var days = property.hasOwnProperty('dayssincelisting') ? property.dayssincelisting : '-';
		var displaySource = property.displaySource;
		var proptype = property.proptype;
		var img_count =  property.hasOwnProperty('photoList') ? property.photoList.length : 0;
		var beds_html = property.nobedrooms ? '<div class="zpa-grid-result-basic-info-item1"> <b>'+ property.nobedrooms +'</b> beds </div>' : '&nbsp;';
		var bath_html = property.nobaths ? '<div class="zpa-grid-result-basic-info-item2"> <b>'+ property.nobaths +' </b> baths </div>' : '&nbsp;';
		var sqft_html = property.squarefeet ? '<div class="zpa-grid-result-basic-info-item3"> <b> '+ zppr.formatNumber( property.squarefeet ) +' </b> sqft </div>' : '&nbsp;';
		
		var columns_code='';
		
		var is_favorite=''; //'active'
		var searchid='';
		
		infos = '';
		infoscount=0;
				
		if(property.nobedrooms){
			infos+='<div class="zy_pt-feature"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							beds_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if(property.nobaths){
			infos+='<div class="zy_pt-feature"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							bath_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if(property.squarefeet){
			infos+='<div class="zy_pt-feature"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							sqft_html +
						'</div>' +
					'</div>	';
			infoscount++;
		}
		if(!infoscount){
			infos+='<div class="zy_pt-feature">' +
						'<div class="zpa-grid-result-basic-info-container">' +
							'&nbsp;' +
						'</div>' +
					'</div>';
		}
		
		openhouses='';
		
		var property_source='';
		var source_details=property.sourceid ? zppr.get_source_text(property.sourceid, {'listOfficeName':property.listOfficeName, 'listAgentName': property.listAgentName}, 'list' ) : false;
		if(source_details){
			property_source+='<div class="zy_pt-property-source">' +
								source_details +
							'</div>';
		}
		
		var html = '<div class="zy_pt-prop-wrap">' +
						'<div class="zy_pt-property">' +
							'<div class="zy_pt-border">' +
								'<div class="zy_pt-prop-img">' +
									'<img src="'+ img_url +'" />' +
								'</div>' +
								'<div class="zy_pt-price zy_pt-wrap">' +
									'<span class="zy_pt-price"> '+ zppr.moneyFormat(price) +' </span>' +
								'</div>' +
								'<div class="zy_pt-address zy_pt-wrap">' +
									'<span class="zpa-grid-result-address"> <img src="'+ zppr.data.plugin_url +'images/map-marker.png" title="map marker" alt="map marker" /> '+ address +' </span>' + 
								'</div>' +
								'<div class="zy_pt-prop-features">' +
									infos +
									'<div class="clearfix"></div>' +
								'</div>' +
								'<div class="zy_pt-prop-info zy_pt-wrap">' +
									'<div class="zpa-status '+ (jQuery.isNumeric(status)?'status_'+status.replace(' ', ''):status.replace(' ', '')) +'">' +
										'<span class="text-center d-block">'+ zppr.prop_status_label(status).toUpperCase() +'</span>' +
									'</div>' +
									'<div class="zy_pt-days">' +
										'<span class="pull-right">'+ ( days ? '<i class="fa fa-calendar" aria-hidden="true"></i>'+ days +' Day(s)' : '' ) + '</span>' +
										'<div class="clearfix"></div>' +
									'</div>' +
								'</div>' +
								'<div class="zy_pt-open-house zy_pt-wrap">' +
									openhouses +
								'</div>' +
								'<div class="zy_pt-mls-info zy_pt-wrap">' +
									displaySource +'#'+ property.listno +' | '+ zppr.proptype_label(proptype) +
								'</div>	' +		
							'</div>' +
						'</div>' +
						property_source +
					'</div>';
		
		return html;
	},
	formatNumber:function(num) {
	   return (typeof num !== 'undefined') ? num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : 0;
	},
	getAddress:function(property){
		var streetname = property.hasOwnProperty('streetname')?property.streetname:'';
		var lngTOWNSDESCRIPTION = property.hasOwnProperty('lngTOWNSDESCRIPTION')?property.lngTOWNSDESCRIPTION:'';
		var provinceState = property.hasOwnProperty('provinceState')?property.provinceState:'';
		var zipcode = property.hasOwnProperty('zipcode')?property.zipcode:'';
		var streetno = property.hasOwnProperty('streetno')?property.streetno:'';
		var hide_streetnumber = 0;
		
		if(hide_streetnumber){
			address = streetname+' '+lngTOWNSDESCRIPTION+', '+provinceState+' '+zipcode;
		}else{
			address = streetno+' '+streetname+' '+lngTOWNSDESCRIPTION+', '+provinceState+' '+zipcode;
		}
		
		return address;
	},
	getPropUrl:function(listingid, fulladdress){
		
		return zppr.data.listingurl + listingid +"/"+ zppr.wpFeSanitizeTitle(fulladdress) +"/";
	},
	wpFeSanitizeTitle:function(str){
		
		str = str.replace(/^\s+|\s+$/g, ''); // trim
		str = str.toLowerCase();

		// remove accents, swap ñ for n, etc
		var from = "àáäâèéëêìíïîòóöôùúüûñçěščřžýúůďťň·/_,:;";
		var to   = "aaaaeeeeiiiioooouuuuncescrzyuudtn------";

		for (var i=0, l=from.length ; i<l ; i++)
		{
			str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
		}

		str = str.replace('.', '-') // replace a dot by a dash 
			.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
			.replace(/\s+/g, '-') // collapse whitespace and replace by a dash
			.replace(/-+/g, '-') // collapse dashes
			.replace( /\//g, '' ); // collapse all forward-slashes

		return str;
	},
	moneyFormat:function(num){
		return zppr.data.currency + zppr.formatNumber(num);
	},
	moneyShorten:function(num){
		var digits=0;
		var si = [
			{ value: 1, symbol: "" },
			{ value: 1E3, symbol: "k" },
			{ value: 1E6, symbol: "M" },
			{ value: 1E9, symbol: "G" },
			{ value: 1E12, symbol: "T" },
			{ value: 1E15, symbol: "P" },
			{ value: 1E18, symbol: "E" }
		  ];
		  var rx = /\.0+|(\.[0-9]*[1-9])0+/;
		  var i;
		  for (i = si.length - 1; i > 0; i--) {
			if (num >= si[i].value) {
			  break;
			}
		  }
		var formatted = (num / si[i].value).toFixed(digits).replace(rx, "1") + si[i].symbol;
		return zppr.data.currency + formatted;
	},
	key_to_lowercase:function(requests){
		var key, keys = Object.keys(requests);
		var n = keys.length;
		var newobj={}
		while (n--) {
		  key = keys[n];
		  newobj[key.toLowerCase()] = requests[key];
		}
		
		return newobj;
	},
	correct_money_format:function(num){
		num = num.replace(/,/g,''); //remove comma
		num = num.replace(/ /g,''); //remove space
		num = num.trim(num);
		return num;
	},
	format_crit:function(args){
		
		var temp=[];
		for (const [k, v] of Object.entries(args)) {
			if(v!==''){
				
				switch( k ){
					// case "astnm":
							// emp.push(k+'='+v);
						// break;
					default:
							temp.push(k+':'+v);
						break;
				}			
			}
		}
		
		crit = temp.join(';');
		crit = !crit?'':crit+';';
		return crit;
	},
	list_total_text:function(count, proptype){
		if(count>1){
			
			var act_text = 'sale';
			
			if(proptype && zppr.data.rental_code.indexOf(proptype) >= 0){
				act_text = 'rent';
			}
			
			// return zppr.formatNumber(count) + "  Properties for " + act_text;
			return zppr.formatNumber(count) + " matching properties found";
		}else{
			// return zppr.formatNumber(count) + "  Property";
			return zppr.formatNumber(count) + " matching property found";
		}		
	},
	html_pagination:function(page, num, count, actual_link){
		
		var html='';
		
		/* pagination */
		total = count;
		pagescount = Math.ceil(total/num);
		current_url=actual_link;
		back_url=page>1?zppr.add_query_arg( 'page',page-1, current_url ):'#';
		next_url=page<pagescount?zppr.add_query_arg( 'page', page+1, current_url ):'#';
		
		html+= '<ul class="pagination">'+
			
			'<li class="'+ ( back_url=="#" ? 'disabled' : '' ) +'"><a href="'+ back_url +'" data-page="'+ ( page - 1 ) +'">&laquo;</a>'+
			'</li>'+
			'<li class="disabled"><a href="#">'+ page +' of '+ pagescount +'</a>'+
			'</li>'+
			'<li class="'+ ( next_url=="#" ? 'disabled' : '' ) +'"><a href="'+ next_url +'" data-page="'+ ( page + 1 ) +'">&raquo;</a>'+
			'</li>'+
		'</ul>';
		
		return html;
	},
	add_query_arg:function(parameter,value,url){
		var url = new URL(url);

		url.searchParams.append(parameter, value);
		
		return url;
	},
	get_form_inputs:function(element){
		
		var inputs={};
		
		var array = element.serializeArray();
		for (const [key, obj] of Object.entries(array)) {
			
			if(obj.name.slice(-2)=='[]'){
				name =obj.name.substring(0, obj.name.length-2);
				value=obj.value;
				if(typeof inputs[name] === 'undefined' || typeof inputs[name] === 'string'){
					inputs[name]=[];
				}
				inputs[name].push(value);
			}else{
				name=obj.name;
				value=obj.value;
				inputs[name]=value;
			}
		}
		
		return inputs;
	},
	prop_status_label:function(status){
		status = status.toString();
		converted_status='';
		status_list = zppr.data.status_list;
		
		if( status_list ){
			
			for (const [key, entity] of Object.entries(status_list)) {			
				if(status==entity.shortDescription || status==entity.mediumDescription){
					converted_status = entity.longDescription;
					break;
				}
			}
			
		}else{
			switch(status){
				case "ACT":
						converted_status="Active";
					break;
				case "BOM":
						converted_status="Back on Market";
					break;
				case "CAN":
						converted_status="Canceled";
					break;
				case "CTG":
						converted_status="Contingent";
					break;
				case "EXP":
						converted_status="Expired";
					break;
				case "EXT":
						converted_status="Extended";
					break;
				case "KIL":
						converted_status="Killed";
					break;
				case "NEW":
						converted_status="New";
					break;
				case "PCG":
						converted_status="Price Changed";
					break;
				case "RAC":
						converted_status="Reactivated";
					break;
				case "RNT":
						converted_status="Rented";
					break;
				case "SLD":
						converted_status="Sold";
					break;
				case "UAG":
						converted_status="Under Agreement";
					break;
				case "WDN":
						converted_status="Temporarily Withdrawn";
					break;
			};
		}	
		
		if(!converted_status)
			converted_status=status;
		
		return converted_status;
	},
	get_source_text:function(sourceid, params, type){
		sources = zppr.data.source_cached;
		
		if( ! sources[sourceid] )
			return '';
		
		source = sources[sourceid];
		var text = '';
		
		var listAgentName = params['listAgentName'];
		var listOfficeName = params['listOfficeName'];
		
		switch(type){
			case "list":
					if(listAgentName && zppr.data.is_show_agent_name){
						text+= "Listing Provided Courtesy "+ listAgentName +" of";							
					}else{
						text+= "Listing Provided Courtesy of";						
					}
					
					if(listOfficeName){
						text+= ' '+ "<strong>"+ listOfficeName +"</strong>";
					}		
					
					if(source['logo_path']){
						text+= '<img src="'+ source['logo_url'] +'" alt="'+ source['name'] +'" />';
						
						if(source['copyrightUrl']){
							text+=' ' + '<a target="_blank" href="'+ source['copyrightUrl'] +'">click here</a>';
						}
					}
					text+= ' '+ 'via ' + source['name'];
					
				break;
			case "detail":
					var date = new Date();
					var curr_year = date.getFullYear();
					year = source['year']?source['year']:curr_year;
					text+= 'Listing information &copy; ' + year + '<br />';		
					
					if(listAgentName && zppr.data.is_show_agent_name){
						text+= "Listing Provided Courtesy "+ listAgentName +" of";							
					}else{
						text+= "Listing Provided Courtesy of";						
					}
					
					if(listOfficeName){
						text+= ' '+ "<strong>"+ listOfficeName +"</strong>";
					}		
					
					if(source['logo_path']){
						text+='<br />' + '<img src="'+ source['logo_url'] +'" alt="'+ source['name'] +'" />';
						
						if(source['copyrightUrl']){
							text+=' ' + '<a target="_blank" href="'+ source['copyrightUrl'] +'">click here</a>';
						}
					}
					text+= ' '+ 'via ' + source['name'];
					
					text+='<br />';
					text+= source['discComingle'] ? source['discComingle'] : ( source['discDetail'] ? source['discDetail'] : '' );
					
				break;
			case "newdetail":
					var date = new Date();
					var curr_year = date.getFullYear();
					year = source['year']?source['year']:curr_year;
					text+= '<br />' + "<strong>Listing Provided Courtesy of";
					if(listOfficeName){
						text+= ' '+ listOfficeName;
					}
					text+='</strong><br />';
					text+= source['discComingle'] ? source['discComingle'] : ( source['discDetail'] ? source['discDetail'] : '' );
					
				break;
		}
		
		return text;
	},
	proptype_label:function(code){
		propertyType = code;
		propTypeFields = zppr.data.property_types_refenrence;
		
		if(!propTypeFields){// if value empty, use static references
			propTypeFields=zppr.data.property_types;
		}
		
		if( propTypeFields && propTypeFields[code.toString()]){
			propertyType = propTypeFields[code.toString()];
		}
		
		return propertyType;
	},
	is_mobile:function(){
		var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		
		return isMobile;
	},
	mls_timezone:function(sourceid){
		timezone=zppr.data.root.tenant.mls_timezone;
		
		if(sourceid){
			timezone=typeof timezone === 'object'&&'sourceid' in timezone ?timezone.sourceid:timezone;
		}
		
		if(!timezone || typeof timezone === 'object')
			timezone='GMT';
		
		return timezone;
	}
	,declare_date_format:function(){
	  // Defining locale
	  Date.shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	  Date.longMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
	  Date.shortDays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
	  Date.longDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
	  // Defining patterns
	  var replaceChars = {
		// Day
		d: function () { var d = this.getDate(); return (d < 10 ? '0' : '') + d },
		D: function () { return Date.shortDays[this.getDay()] },
		j: function () { return this.getDate() },
		l: function () { return Date.longDays[this.getDay()] },
		N: function () { var N = this.getDay(); return (N === 0 ? 7 : N) },
		S: function () { var S = this.getDate(); return (S % 10 === 1 && S !== 11 ? 'st' : (S % 10 === 2 && S !== 12 ? 'nd' : (S % 10 === 3 && S !== 13 ? 'rd' : 'th'))) },
		w: function () { return this.getDay() },
		z: function () { var d = new Date(this.getFullYear(), 0, 1); return Math.ceil((this - d) / 86400000) },
		// Week
		W: function () {
		  var target = new Date(this.valueOf())
		  var dayNr = (this.getDay() + 6) % 7
		  target.setDate(target.getDate() - dayNr + 3)
		  var firstThursday = target.valueOf()
		  target.setMonth(0, 1)
		  if (target.getDay() !== 4) {
			target.setMonth(0, 1 + ((4 - target.getDay()) + 7) % 7)
		  }
		  var retVal = 1 + Math.ceil((firstThursday - target) / 604800000)

		  return (retVal < 10 ? '0' + retVal : retVal)
		},
		// Month
		F: function () { return Date.longMonths[this.getMonth()] },
		m: function () { var m = this.getMonth(); return (m < 9 ? '0' : '') + (m + 1) },
		M: function () { return Date.shortMonths[this.getMonth()] },
		n: function () { return this.getMonth() + 1 },
		t: function () {
		  var year = this.getFullYear()
		  var nextMonth = this.getMonth() + 1
		  if (nextMonth === 12) {
			year = year++
			nextMonth = 0
		  }
		  return new Date(year, nextMonth, 0).getDate()
		},
		// Year
		L: function () { var L = this.getFullYear(); return (L % 400 === 0 || (L % 100 !== 0 && L % 4 === 0)) },
		o: function () { var d = new Date(this.valueOf()); d.setDate(d.getDate() - ((this.getDay() + 6) % 7) + 3); return d.getFullYear() },
		Y: function () { return this.getFullYear() },
		y: function () { return ('' + this.getFullYear()).substr(2) },
		// Time
		a: function () { return this.getHours() < 12 ? 'am' : 'pm' },
		A: function () { return this.getHours() < 12 ? 'AM' : 'PM' },
		B: function () { return Math.floor((((this.getUTCHours() + 1) % 24) + this.getUTCMinutes() / 60 + this.getUTCSeconds() / 3600) * 1000 / 24) },
		g: function () { return this.getHours() % 12 || 12 },
		G: function () { return this.getHours() },
		h: function () { var h = this.getHours(); return ((h % 12 || 12) < 10 ? '0' : '') + (h % 12 || 12) },
		H: function () { var H = this.getHours(); return (H < 10 ? '0' : '') + H },
		i: function () { var i = this.getMinutes(); return (i < 10 ? '0' : '') + i },
		s: function () { var s = this.getSeconds(); return (s < 10 ? '0' : '') + s },
		v: function () { var v = this.getMilliseconds(); return (v < 10 ? '00' : (v < 100 ? '0' : '')) + v },
		// Timezone
		e: function () { return Intl.DateTimeFormat().resolvedOptions().timeZone },
		I: function () {
		  var DST = null
		  for (var i = 0; i < 12; ++i) {
			var d = new Date(this.getFullYear(), i, 1)
			var offset = d.getTimezoneOffset()

			if (DST === null) DST = offset
			else if (offset < DST) { DST = offset; break } else if (offset > DST) break
		  }
		  return (this.getTimezoneOffset() === DST) | 0
		},
		O: function () { var O = this.getTimezoneOffset(); return (-O < 0 ? '-' : '+') + (Math.abs(O / 60) < 10 ? '0' : '') + Math.floor(Math.abs(O / 60)) + (Math.abs(O % 60) === 0 ? '00' : ((Math.abs(O % 60) < 10 ? '0' : '')) + (Math.abs(O % 60))) },
		P: function () { var P = this.getTimezoneOffset(); return (-P < 0 ? '-' : '+') + (Math.abs(P / 60) < 10 ? '0' : '') + Math.floor(Math.abs(P / 60)) + ':' + (Math.abs(P % 60) === 0 ? '00' : ((Math.abs(P % 60) < 10 ? '0' : '')) + (Math.abs(P % 60))) },
		T: function () { var tz = this.toLocaleTimeString(navigator.language, {timeZoneName: 'short'}).split(' '); return tz[tz.length - 1] },
		Z: function () { return -this.getTimezoneOffset() * 60 },
		// Full Date/Time
		c: function () { return this.format('Y-m-d\\TH:i:sP') },
		r: function () { return this.toString() },
		U: function () { return Math.floor(this.getTime() / 1000) }
	  }

	  // Simulates PHP's date function
	  Date.prototype.format = function (format) {
		var date = this
		return format.replace(/(\\?)(.)/g, function (_, esc, chr) {
		  return (esc === '' && replaceChars[chr]) ? replaceChars[chr].call(date) : chr
		})
	  }
	  
	  Date.prototype.addMinutes = function(minutes) {
		this.setTime(this.getTime() + minutes * 60 * 1000);
		return this;
	  }
		
	}
	,enableSaveSearchButton:function(){
		jQuery('.saveSearchButton').show();
		jQuery('.savedSearchButton').hide();
	},
	save_session:function(index, result, actual_link){
		var data = {
			action: 'save_result_session',
			'index': index, 
			'actual_link': actual_link,
			'result': result,
		};
		
		console.time('save session');
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {
				console.log(response);
				if( response['result'] ){
					
				}
				
				console.timeEnd('save session');
			},
			error: function(){
				console.timeEnd('save session');
			}
		});
	},
	in_array:function(needle, haystack) {
		var length = haystack.length;
		for(var i = 0; i < length; i++) {
			if(haystack[i] == needle) return true;
		}
		return false;
	},
	checkNested:function(obj /*, level1, level2, ... levelN*/) {
	  var args = Array.prototype.slice.call(arguments, 1);

	  for (var i = 0; i < args.length; i++) {
		if (!obj || !obj.hasOwnProperty(args[i])) {
		  return false;
		}
		obj = obj[args[i]];
	  }
	  return true;
	},
	is_favorite:function(listid){
		return 0;
	},
	vtlink_template:function(property){
		
		var html='';
		
		return html;
	},
	sidebar_template:function(property){
		
		var html='';
		
		return html;
	},
	feature_template:function(property){
		
		var html='';
		
		return html;
	},
	streetname_fix_comma:function(value){
		
		value=value.replace(', ',',');
		value=value.replace(' , ',',');
		value=value.replace(' ,',',');
		value=value.replace(',',', ');
		
		return value;
		
	},
	type_mask:function($fields, $key, $proptype){
		
		$KEY=$key.toUpperCase();
		
		$nostripkey = $key.replace('_', '');
		$NOSTRIPKEY = $KEY.replace('_', '');
			
		var $keyFeaturesRaw=$fields.hasOwnProperty($key)?$fields[$key]:( $fields.hasOwnProperty($KEY)? $fields[$KEY]:[]);
				
		if(!$keyFeaturesRaw){
			$keyFeaturesRaw=$fields.hasOwnProperty($nostripkey)?$fields[$nostripkey]:( $fields.hasOwnProperty($NOSTRIPKEY)? $fields[$NOSTRIPKEY]:[] );
		}
		
		$keyFeatures = [];
		$p_typ = $proptype;
		$p_pty_mask = 7;
		
		if ($p_typ==="BU"){
			$p_pty_mask = 0;			
		} else if ($p_typ==="CC"){
			$p_pty_mask = 1;			
		} else if ($p_typ==="CI"){
			$p_pty_mask = 2;			
		} else if ($p_typ==="LD"){
			$p_pty_mask = 3;			
		} else if ($p_typ==="MF"){
			$p_pty_mask = 4;			
		} else if ($p_typ==="MH"){
			$p_pty_mask = 5;			
		} else if ($p_typ==="RN"){
			$p_pty_mask = 6;			
		} else if ($p_typ==="SF"){
			$p_pty_mask = 7;			
		}
		for (const [key, $entity] of Object.entries($keyFeaturesRaw)) {
			if ( $entity.hasOwnProperty('propTypeMask') && ( ($entity.propTypeMask == 255) || ($entity.propTypeMask & (1 << $p_pty_mask)) == (1 << $p_pty_mask))){
				$keyFeatures.push($entity);
			}
		}
		
		return $keyFeatures;
	},
	field_value:function( $key, $val, $proptype='' ){
		
		var $fields = zppr.data.field_list;
		
		//special case
		switch($key){
			case "mbrdimen":case "mbrdscrp":case "mbrDSCRP":
			case "bed2dimen":case "bed2DSCRP":
			case "bed3dimen":case "bed3DSCRP":
			case "bed4dimen":case "bed4DSCRP":
			case "bed5dimen":case "bed5DSCRP":
			case "bth1dimen":case "bth1dscrp":case "bth1DSCRP":
			case "bth2dimen":case "bth2dscrp":case "bth2DSCRP":
			case "bth3dimen":case "bth3dscrp":case "bth3DSCRP":
			case "kitdimen":case "kitdscrp":case "kitDSCRP":
			case "famdimen":case "famdscrp":case "famDSCRP":
			case "livdimen":case "livdscrp":case "livDSCRP":
			case "dindimen":case "dindscrp":case "dinDSCRP":
			case "oth1DIMEN":case "oth1DSCRP":
			case "oth2DIMEN":case "oth2DSCRP":
			case "oth3DIMEN":case "oth3DSCRP":
			case "oth4DIMEN":case "oth4DSCRP":
			case "oth5DIMEN":case "oth5DSCRP":
			case "headscrp1":case "coldscrp1":
			case "heaDSCRP1":case "colDSCRP1":
			case "headscrp2":case "coldscrp2":
			case "heaDSCRP2":case "colDSCRP2":
			case "headscrp3":case "coldscrp3":
			case "heaDSCRP3":case "colDSCRP3":
			case "headscrp4":case "coldscrp4":
			case "heaDSCRP4":case "colDSCRP4":
			case "headscrp5":case "coldscrp5":
			case "heaDSCRP5":case "colDSCRP5":
				$key=$fields.hasOwnProperty('ROOM')?"ROOM":$key;
				break;
			
			case "mbrlevel":
			case "bed2LEVEL":
			case "bed3LEVEL":
			case "bed4LEVEL":
			case "bed5LEVEL":
			case "bth1LEVEL":
			case "bth2LEVEL":
			case "bth3LEVEL":
			case "kitlevel":
			case "famlevel":
			case "livlevel":
			case "dinlevel":
			case "oth1LEVEL":
			case "oth2LEVEL":
			case "oth3LEVEL":
			case "oth4LEVEL":
			case "oth5LEVEL":
				$key=$fields.hasOwnProperty('ROOMLEVEL')?"ROOMLEVEL":$key;
				break;
			
			case "roomLevel":
				$key=$fields.hasOwnProperty('BEDROOMMASTERLEVEL')?"BEDROOMMASTERLEVEL":$key;
				break;
				
			case "CommunityFeatures":
				$key=$fields.hasOwnProperty('COMMUNITY')?"COMMUNITY":$key;
				break;
				
			case "RoomType":
				$key=$fields.hasOwnProperty('ROOMS')?"ROOMS":$key;
				break;
				
			case "Levels":
				$key=$fields.hasOwnProperty('STORIES')?"STORIES":$key;
				break;	
				
			case "Fees Include":
				$key=$fields.hasOwnProperty('FEESINCLUD')?"FEESINCLUD":$key;
				break;	
				
			case "Laundry Type":
				$key=$fields.hasOwnProperty('LAUNDRYTYP')?"LAUNDRYTYP":$key;
				break;
				
			case "Fireplace Type":
				$key=$fields.hasOwnProperty('FIREPLCTYP')?"FIREPLCTYP":$key;
				break;
				
			case "Financing Type":
				$key=$fields.hasOwnProperty('HOWSOLD')?"HOWSOLD":$key;
				break;
				
			case "Possible Financing":
				$key=$fields.hasOwnProperty('PSSBLFNCNG')?"PSSBLFNCNG":$key;
				break;
				
			case "Kitchen/Breakfast":
				$key=$fields.hasOwnProperty('KTCHNBRKFS')?"KTCHNBRKFS":$key;
				break;
				
			case "Kitchen Equipment":
				$key=$fields.hasOwnProperty('KTCHNQPMNT')?"KTCHNQPMNT":$key;
				break;
				
			case "Laundry Location":
				$key=$fields.hasOwnProperty('LANDRYLCTN')?"LANDRYLCTN":$key;
				break;
				
			case "Fireplace Location":
				$key=$fields.hasOwnProperty('FIRPLCLCTN')?"FIRPLCLCTN":$key;
				break;
				
			case "Cooling Source":
				$key=$fields.hasOwnProperty('COOLINGSRC')?"COOLINGSRC":$key;
				break;
				
			case "Heating Source":
				$key=$fields.hasOwnProperty('HEATINGSRC')?"HEATINGSRC":$key;
				break;
		}
		$KEY=$key.toUpperCase();
		
		$nostripkey = $key.replace('_', '');
		$NOSTRIPKEY = $KEY.replace('_', '');
		
		if( $fields.hasOwnProperty($key) || $fields.hasOwnProperty($KEY) || $fields.hasOwnProperty($nostripkey) || $fields.hasOwnProperty($NOSTRIPKEY) ){
			
			var $temp=[];
			
			if( $val.toString().indexOf('|') === -1 ){
				var $separator="|";
			}else{	
				var $separator=",";
			}
			
			var $values=$val.toString().split($separator);
			// print_r( "Before: " . $val. "<br />" );
			for(var i = 0; i < $values.length; i++) {
				$temp.push(0);
			}
			
			var $keyFeatures = zppr.type_mask($fields, $key, $proptype);
			
			for (const [key, $entity] of Object.entries($keyFeatures)) {
				$version = $entity.hasOwnProperty('version')?$entity.version:'';
				$fieldName = $entity.hasOwnProperty('fieldName')?$entity.fieldName:'';
				$shortDescription = $entity.hasOwnProperty('shortDescription')?$entity.shortDescription:'';
				$mediumDescription = $entity.hasOwnProperty('mediumDescription')?$entity.mediumDescription:'';
				$longDescription = $entity.hasOwnProperty('longDescription')?$entity.longDescription:'';
				$propTypeMask = $entity.hasOwnProperty('propTypeMask')?$entity.propTypeMask:'';
				
				for (const [$index, $value] of Object.entries($temp)) {
					if( ! $temp[$index] ){
						if( $mediumDescription == $values[$index] ){
							$values[$index]=$values[$index].replace( $mediumDescription, $longDescription );
							$temp[$index]=1;
						}else if( $shortDescription == $values[$index] ){
							$values[$index]=$values[$index].replace( $shortDescription, $longDescription );
							$temp[$index]=1;
						}
					}
				}
			}
			
			$val = $values.join( ', ' );
			
		}else if( $key.substr(-2) === 'YN' ){
			switch($val){
				case 1:
					$val='Yes';
					break;
				case 0:
					$val='No';
					break;
			}
		}
		
		if($val===false)
			$val = 'No';
		if($val===true)
			$val = 'Yes';
		
		return $val;
	},
	property_fields:function(single_property, $html){
		// return $html;
		var $rnhidestreetno = zppr.data.root.web.hasOwnProperty('rnhidestreetno')?zppr.data.root.web.rnhidestreetno:0;
		console.log(single_property);
		$replaces=[];
		$find=[];
		if( typeof single_property === "object" || Array.isArray(single_property) ){
			
			for (const [$k, $v] of Object.entries(single_property)) {
				// console.log($v);
				if( typeof $v === 'string' || jQuery.isNumeric($v) || ! Array.isArray($v) && !typeof $v === "object" ){ //level 1
					$find.push("{{"+$k+"}}");
					
					switch( $k ){
						case "listprice":
						case "squarefeet":
						case "taxes":
						case "lotsize":
								$replaces.push(zppr.formatNumber($v));
							break;
						case "status":
								$replaces.push(zppr.get_status_name($v));
							break;
						case "proptype":
								$replaces.push(zppr.proptype_label($v));
							break;
						case "syncTime":
								var $mlstz = zppr.mls_timezone('');
								var ld = new Date(Date.now()).toLocaleString("en-US", {timeZone: $mlstz});
								var dt = new Date(ld);
								$datetime = dt.format('Y-m-d h:i A');
								
								$replaces.push($datetime);									
							break;
						case "streetno":
								if($rnhidestreetno && single_property.proptype=="RN")
									$replaces.push('');
								else
									$replaces.push(zppr.field_value( $k, $v, single_property.proptype ));
							break;
						// case "beachfrontflag":
						// case "waterfrontflag":
						// case "waterviewflag":
						// case "basement":
						// case "adultcommunity":
						// case "apodavailable":
						// case "disclosure":
						// case "lenderowned":
						// case "shortsalelenderappreqd":
								// $replaces[]=zipperagent_yes_no_value($v);
							// break;					
						default:								
								$replaces.push(zppr.field_value( $k, $v, single_property.proptype ));
							break;
					}
				}else if( Array.isArray($v) && typeof $v === "object" ){ //level 2,3,4,..
					for (const [$k2, $v2] of Object.entries($v)) {
						
						if(!Array.isArray($v2) && !typeof $v2 === "object"){
							if(jQuery.isNumeric($k2)){
								$find.push("{{"+$k+"_"+$k2+"}}");
								$replaces.push(zppr.field_value( $k2, $v2, single_property.proptype ));
							}else{
								switch($k2){
									case "SQFTRoofedLiving":
											$find.push("{{"+$k+"_"+$k2+"}}");
											$replaces.push(zppr.formatNumber( $v2 ));
										break;
									default:
											$find.push("{{"+$k+"_"+$k2+"}}");
											$replaces.push(zppr.field_value( $k2, $v2, single_property.proptype ));
										break;
								}
							}
						}else if(Array.isArray($v2)){
							for (const [$k3, $v3] of Object.entries($v2)) {
								if(!Array.isArray($v3) && !typeof $v3 === "object"){
									$find.push("{{"+$k+"_"+$k2+"_"+$k3+"}}");
									$replaces.push(zppr.field_value( $k3, $v3, single_property.proptype ));
								}
							}
						}else if(typeof $v2 === "object"){
							for (const [$k3, $v3] of Object.entries($v2)) {
								if(!Array.isArray($v3) && !typeof $v3 === "object"){
									$find.push("{{"+$k+"_"+$k2+"_"+$k3+"}}");
									$replaces.push(zppr.field_value( $k3, $v3, single_property.proptype ));
								}
							}
						}
					}
				}
			}
			
			//custom field
			
			// [realprice]
			$price=(zppr.data.sold_status.indexOf(single_property.status)>-1?(single_property.hasOwnProperty('saleprice')?single_property.saleprice:single_property.listprice):single_property.listprice);
			$find.push("{{realprice}}");
			$replaces.push(zppr.formatNumber($price));
			
			// [provinceState] if empty provinceState
			if(!single_property.hasOwnProperty('provinceState')){
				$find.push("{{provinceState}}");
				$replaces.push("");
			}
			
			// [zipcode] if empty zipcode
			if(!single_property.hasOwnProperty('zipcode')){
				$find.psuh("{{zipcode}}");
				$replaces.push("");
			}
			
			// [streetno] if empty streetno
			if(!single_property.hasOwnProperty('streetno')){
				$find.push("{{streetno}}");
				$replaces.push("");
			}
		}
		
		console.log($find);
		console.log($replaces);
		
		String.prototype.allReplace = function(find,replaces) {
			var retStr = this;
			for (var x in find) {
				retStr = retStr.replace(new RegExp(find[x], 'g'), replaces[x]);
			}
			return retStr;
		};
		
		$html = $html.allReplace($find,$replaces);
		$html = $html.replace(/\{{[\w\h]{2,30}\}}/g, "-"); //more than 1 chars and max 30 chars
		
		return $html;
	},
	get_status_name:function( $status ){
		
		$converted_status='';
		var $fields = zppr.data.field_list;
				
		if( $fields.hasOwnProperty('STATUS') ){
			// echo "<pre>"; print_r( $fields->STATUS ); echo "</pre>";
			for (const [$key, $entity] of Object.entries($fields.STATUS)) {		
				if($status==$entity.shortDescription || $status==$entity.mediumDescription){
					$converted_status = $entity.longDescription;
					break;
				}
			}
			
		}else{
			switch($status){
				case "ACT":
						$converted_status="Active";
					break;
				case "BOM":
						$converted_status="Back on Market";
					break;
				case "CAN":
						$converted_status="Canceled";
					break;
				case "CTG":
						$converted_status="Contingent";
					break;
				case "EXP":
						$converted_status="Expired";
					break;
				case "EXT":
						$converted_status="Extended";
					break;
				case "KIL":
						$converted_status="Killed";
					break;
				case "NEW":
						$converted_status="New";
					break;
				case "PCG":
						$converted_status="Price Changed";
					break;
				case "RAC":
						$converted_status="Reactivated";
					break;
				case "RNT":
						$converted_status="Rented";
					break;
				case "SLD":
						$converted_status="Sold";
					break;
				case "UAG":
						$converted_status="Under Agreement";
					break;
				case "WDN":
						$converted_status="Temporarily Withdrawn";
					break;
			};
		}	
		
		if(!$converted_status)
			$converted_status=$status;
		
		return $converted_status;
	}
};