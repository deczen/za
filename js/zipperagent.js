var zppr={
	data:{
		plugin_path: zipperagent.ZIPPERAGENTPATH,
		plugin_url: zipperagent.ZIPPERAGENTURL,
		currency: zipperagent.currency,
		ajaxurl: zipperagent.ajaxurl,
		listingurl: zipperagent.listingurl,
		active_status: zipperagent.active_status,
		sold_status: zipperagent.sold_status,
		pending_status: zipperagent.pending_status,
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
		browser_timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
		extra_proptype: zipperagent.extra_proptype,
		map_default_status: zipperagent.map_default_status,
		map_markers: zipperagent.map_markers,
		synctime: zipperagent.synctime,
		display_buyerrebate_amount: zipperagent.display_buyerrebate_amount,
		buyerrebate_amount_prefix: zipperagent.buyerrebate_amount_prefix,
		emptybuyerrebate_amount_text: zipperagent.emptybuyerrebate_amount_text,
		saved_favorites: zipperagent.saved_favorites,
		
		/* single property */
		company_name: zipperagent.company_name,
		agent_list: zipperagent.agent_list,
		searchId: zipperagent.searchId,
		field_list: zipperagent.field_list,
		za_image_clicked: zipperagent.za_image_clicked,
		za_slider_limit_popup: zipperagent.za_slider_limit_popup,
		za_signup_optional: zipperagent.za_signup_optional,
		is_great_school_enabled: zipperagent.is_great_school_enabled,
		is_walkscore_enabled: zipperagent.is_walkscore_enabled,
		is_register_form_chaptcha_enabled: zipperagent.is_register_form_chaptcha_enabled,
		is_enable_save: zipperagent.is_enable_save,
		is_your_agent: zipperagent.is_your_agent,
	},
	generate_api_params:function(requests){
		
		var generatedCrit="";
		var excludes = zppr.data.long_excludes;
			requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
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
		var anycrit	 			= ( requests.hasOwnProperty('anycrit')?requests['anycrit']:'' );
		var searchId			= ( requests.hasOwnProperty('searchid')?requests['searchid']:'' );
		var alstid 				= ( requests.hasOwnProperty('alstid')?requests['alstid']:'' );
		var column 				= ( requests.hasOwnProperty('column')?requests['column']:'' );
		var school 				= ( requests.hasOwnProperty('school')?requests['school']:'' );
		var alkchnnm 			= ( requests.hasOwnProperty('alkchnnm')?requests['alkchnnm']:'' );
		var offmarket 			= ( requests.hasOwnProperty('offmarket')?requests['offmarket']:'' );

		//distance search variables
		var searchDistance 		= ( requests.hasOwnProperty('searchdistance')?requests['searchdistance']:'' );
		var distance 			= ( requests.hasOwnProperty('distance')?requests['distance']:zppr.data.distance );
		var lat 				= ( requests.hasOwnProperty('lat')?requests['lat']:'' );
		var lng 				= ( requests.hasOwnProperty('lng')?requests['lng']:'' );
		
		//list view type
		var view 				= ( requests.hasOwnProperty('view')?requests['view']:'' );

		/**
		 * PREPARATION
		 * @ prepare the arguments before API process
		 */

		/* default status */
		status = !status?zppr.data.active_status:status;
		if(view=='map'){
			status = requests.hasOwnProperty('status') && requests['status'] ? status : zppr.data.map_default_status;
		}
		
		/* generate mls_state_map */
		var mls_state_map=zppr.data.root.web.hasOwnProperty('mls_state_map')?zppr.data.root.web.mls_state_map:{};
		for (const [source, param] of Object.entries(mls_state_map)) {
			anycrit+='('+ zppr.format_crit({
				ascr:source,
				astt:param,
			}) +')';
		}

		/* get town list */
		locqry={};
		coords=null;
		if( location ){
			
			location=!Array.isArray(location)?{location}:location;
			loc_country=[];
			loc_town=[];
			loc_area=[];
			loc_zipcode=[];
			loc_address=[];
			loc_hs=[];
			loc_ms=[];
			loc_gs=[];
			loc_sd=[];
			loc_ln=[];
			
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
					}else if( temp.substring(0, 9) == 'aflladdr_' ){
						loc_address.push(temp.substring(9));
					}else if( temp.substring(0, 6) == 'hschl_' ){
						loc_hs.push(temp.substring(6));
					}else if( temp.substring(0, 6) == 'mschl_' ){
						loc_ms.push(temp.substring(6));
					}else if( temp.substring(0, 6) == 'gschl_' ){
						loc_gs.push(temp.substring(6));
					}else if( temp.substring(0, 7) == 'aschdt_' ){
						loc_sd.push(temp.substring(7));
					}else if( temp.substring(0, 9) == 'alkchnnm_' ){
						loc_ln.push(temp.substring(9));
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
			if(loc_address) locqry['aflladdr']=loc_address.join();
			if(loc_hs) locqry['hschl']=loc_hs.join();
			if(loc_ms) locqry['mschl']=loc_ms.join();
			if(loc_gs) locqry['gschl']=loc_gs.join();
			if(loc_sd) locqry['aschdt']=loc_sd.join();
			if(loc_ln) locqry['alkChnNm']=loc_ln.join();
			
			// die( locqry );
		} if( advStNo || advStName || advStZip || advStates || advTownNm || advCounties || alkchnnm ){
							
			if(advStNo) locqry['astno']=(advStNo);
			if(advStName) locqry['astnmf']=(advStName);
			if(advStZip) locqry['azip']=(advStZip);
			if(advStates) locqry['astt']=(advStates);
			if(advTownNm) locqry['atwnnm']=(advTownNm);
			if(alkchnnm) locqry['alkChnNm']=(alkchnnm);
			// if(advCounties) locqry['acnty']=(advCounties);
			
		} /* if(boundaryWKT){
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
		
		if( alkchnnm )
        	advSearch['alkChnNm']=Array.isArray(alkchnnm)?alkchnnm.join(','):alkchnnm;		
		
		//generate extra proptype variables
		var extra_proptypes = zppr.data.extra_proptype;
		if(extra_proptypes){
			
			for (const [key, extra_proptype] of Object.entries(extra_proptypes)) {
				
				if(typeof requests[extra_proptype['abbrev'].toLowerCase()] !== 'undefined'){
					
					var tempval=requests[extra_proptype['abbrev'].toLowerCase()];
					delete requests[extra_proptype['abbrev'].toLowerCase()];					
					requests[extra_proptype['abbrev']]=tempval;
				}
			}
		}
		
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
		
		//generate rest of variables
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
		page = requests.hasOwnProperty('pagenum') ? requests['pagenum'] : page;

		num=requests.hasOwnProperty('listinapage') ? requests['listinapage'] : (view=='map'?10:24);
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
		}else if( offmarket ){ // offmarket mode
			
			// no action

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
					// delete search.asts;
					var stattmp=[];
					stattmp.push(zppr.data.active_status);
					stattmp.push(zppr.data.sold_status);
					stattmp.push(zppr.data.pending_status);
					search.asts = stattmp.join(',');
				}
				// if(o){
					// delete advSearch.o;
				// }
				if(zppr.data.states!='' && requests.hasOwnProperty('astt')){
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
			
			response['searchType'] = 0; // advSearchWoCnt 
			response['crit'] = generatedCrit;
			response['anycrit'] = anycrit;
			response['o'] = o;
			if(view=='map_marker'){
				var maplimit=100;
				var mapindex=Math.floor(index / maplimit);
				mapindex=mapindex<0?0:mapindex;
				response['sidx']=mapindex;
				response['ps']=maplimit;
			}else{
				response['ps'] = num;
				response['sidx'] = index;
			}
		}		
		console.log(response);
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
								'<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star" role="none"></i>'+ saved_btn_text +'</button>'+
							'</div>'+
							'<button id="saveSearchButton" class="saveSearchButton btn btn-sm btn-primary pull-right" isLogin="'+ zppr.data.is_login +'" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search" contactId="'+ zppr.data.contactIds.join() +'"> <i class="glyphicon glyphicon-star" role="none"></i> '+ save_btn_text +'  </button>';
		}
		html+= 			'</div>'+
					'</div>'+
					'<div class="row list-section">'+ list_html +
					'</div>';
			
		if( showPagination ){	
		
			html+= '<div class="row prop-pagination"></div>';				
		}
			
		
		if( zppr.data.listing_disclaimer!='' ){
			
			html+= '<div class="row">'+
						'<div class="col-xs-12">'+
							'<span class="listing-disclaimer" role="none">'+ zppr.data.listing_disclaimer +'</span>'+
						'</div>'+
					'</div>';
		}
			
		html+= '</div>';
		
		return html;
	},
	list_map_view_template:function(requests, list_html, is_view_save_search){
		
		var requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
		var boundaryWKT 		= ( requests.hasOwnProperty('boundarywkt')?requests['boundarywkt']:'' );
		var openHomesMode 		= ( requests.hasOwnProperty('openhomesmode')?requests['openhomesmode']:'' );
		var openHomesOnlyYn 	= ( requests.hasOwnProperty('openhomesonlyyn')?requests['openhomesonlyyn']:'' );
		var showPagination 		= ( requests.hasOwnProperty('pagination')?parseInt(requests['pagination']):1 );
		var showResults	 		= ( requests.hasOwnProperty('result')?parseInt(requests['result']):1 );
		var searchId			= ( requests.hasOwnProperty('searchid')?requests['searchid']:'' );
		
		enable_filter= boundaryWKT || openHomesMode == "true" || openHomesMode == 1 ? false : true;
		
		var html = '';
		
		html += '<div class="zpa-listing-search-results hideonprint zpa-fullwidth">'+				
					'<div class="container-fluid">' +			
						'<div class="row sticky-container" style="position:relative;">' +
						
							'<div class="map-legend-wrap">';
							
		/* html+=				'<div class="property-results mb-25 mt-25">';
							
		if( parseInt(showResults) ){			
			html+= 				'<div class="col-xs-12 prop-total">'+String.fromCharCode(160)+'</div>';
		}
		
		html+=				'</div>'; */
		
		var markers = zppr.data.map_markers;
			
		if(markers){
			
			html+= 			'<div class="proptype-markers col-lg-12 col-md-12"><ul>';
			for (const [key, val] of Object.entries(markers)) {
				html+=			'<li class="proptype-marker"><img src="'+ val.url +'" alt=" '+ val.name +'" title=""><span>'+ val.name +'</span></li>';
			}
			html+=			'</ul></div>';
		}					
		html+=				'</div>' +
							'<div id="map" class="col-lg-7 col-md-6 ml-auto">' +
								'<div id="map_wrapper">' +								
									'<div id="color-palette" style="display:none"></div>' +
									'<div id="map_canvas" class="mapping" style="width:100%; height:100%;"></div>' +
								'</div>' +
							'</div>' +
							
							'<div id="property-sidebar" class="col-lg-5 col-md-6 bg-light">';
								
			html+=				'<div class="property-results small-text mb-15">';
							
			if( parseInt(showResults) ){			
				html+= 				'<div class="col-xs-12 prop-total">'+String.fromCharCode(160)+'</div>';
			}
		
			html+=				'</div>';
							
			html+=				'<div id="map-list-content" class="row">';
		
		if(!list_html){
		
			html+= 					'<div id="map-content" class="row">' +

										'<div class="col-md-12">' +
											'<div class="col-md-12 mb-10 mt-25">' +
												'<span>No Properties Found </span>' +
											'</div>' +
											'<div class="col-md-12 pagination-wrap">' +
												'<ul class="pagination">' +
													'<li class="disabled"><a href="#">&laquo;</a>' +
													'</li>' +
													'<li class="disabled"><a href="#">1 of 0</a>' +
													'</li>' +
													'<li class="disabled"><a href="#">&raquo;</a>' +
													'</li>' +
												'</ul>' +
											'</div>	' +	
											'<!--col-->' +
										'</div>' +
										'<!--row-->' +
									'</div>';	
		}else{
			html+=					'<div id="map-content">' + list_html;	
									   
			if( showPagination ){	
		
				html+=					'<div class="clearfix"></div>' +
										'<div class="col-md-12 pagination-wrap prop-pagination"></div>';				
			}			
										
			if( zppr.data.listing_disclaimer!='' ){
			
				html+= 					'<div class="row">'+
											'<div class="col-xs-12">'+
												'<span class="listing-disclaimer" role="none">'+ zppr.data.listing_disclaimer +'</span>'+
											'</div>'+
										'</div>';
			}
									
			html+=					'</div>';
		}	
						
				
								
		html+=					'</div>' +
							'</div>' +
							'<div class="clearfix"></div>' +
						'</div>' +
					'</div>' +				
				'</div>';
		
		return html;
	},
	list_map_view_template_new:function(requests, html_grid, html_list, html_table, is_view_save_search){
		
		var requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
		var boundaryWKT 		= ( requests.hasOwnProperty('boundarywkt')?requests['boundarywkt']:'' );
		var openHomesMode 		= ( requests.hasOwnProperty('openhomesmode')?requests['openhomesmode']:'' );
		var openHomesOnlyYn 	= ( requests.hasOwnProperty('openhomesonlyyn')?requests['openhomesonlyyn']:'' );
		var showPagination 		= ( requests.hasOwnProperty('pagination')?parseInt(requests['pagination']):1 );
		var showResults	 		= ( requests.hasOwnProperty('result')?parseInt(requests['result']):1 );
		var searchId			= ( requests.hasOwnProperty('searchid')?requests['searchid']:'' );
		
		enable_filter= boundaryWKT || openHomesMode == "true" || openHomesMode == 1 ? false : true;
		
		var html = '';
		
		html += '<div class="zpa-listing-search-results hideonprint zpa-fullwidth">'+				
					'<div class="container-fluid">' +			
						'<div class="row sticky-container" style="position:relative;">' +
						
							'<div class="map-legend-wrap">';
							
		/* html+=				'<div class="property-results mb-25 mt-25">';
							
		if( parseInt(showResults) ){			
			html+= 				'<div class="col-xs-12 prop-total">'+String.fromCharCode(160)+'</div>';
		}
		
		html+=				'</div>'; */
		
		var markers = zppr.data.map_markers;
			
		if(markers){
			
			html+= 			'<div class="proptype-markers col-lg-12 col-md-12"><ul>';
			for (const [key, val] of Object.entries(markers)) {
				html+=			'<li class="proptype-marker"><img src="'+ val.url +'" alt=" '+ val.name +'" title=""><span>'+ val.name +'</span></li>';
			}
			html+=			'</ul></div>';
		}					
		html+=				'</div>' +
							'<div id="map" class="col-lg-7 col-md-6 ml-auto">' +
								'<div id="map_wrapper">' +								
									'<div id="color-palette" style="display:none"></div>' +
									'<div id="map_canvas" class="mapping" style="width:100%; height:100%;"></div>' +
								'</div>' +
							'</div>' +
							
							'<div id="property-sidebar" class="col-lg-5 col-md-6 bg-light">';
								
			html+=				'<div class="property-results result-control small-text mb-15 row">';
							
			if( parseInt(showResults) ){			
				html+= 				'<div class="col-md-8 col-xs-8 prop-total">'+String.fromCharCode(160)+'</div>';
			}
			
			html+=					'<div class="col-md-4 col-xs-4 view-control">' +
										'<ul  class="nav nav-pills">' +
											'<li class="active">' +
												'<a  href="#photo-view" data-toggle="tab">Photos</a>' +
											'</li>' +
											'<li>' +
												'<a href="#list-view" data-toggle="tab">List</a>' +
											'</li>' +
										'</ul>' +						
									'</div>';
		
			html+=				'</div>';
							
			html+=				'<div id="map-list-content" class="row">';
		
		if(!html_grid){
		
			html+= 					'<div id="map-content" class="row">' +

										'<div class="col-md-12">' +
											'<div class="col-md-12 mb-10 mt-25">' +
												'<span>No Properties Found </span>' +
											'</div>' +
											'<div class="col-md-12 pagination-wrap">' +
												'<ul class="pagination">' +
													'<li class="disabled"><a href="#">&laquo;</a>' +
													'</li>' +
													'<li class="disabled"><a href="#">1 of 0</a>' +
													'</li>' +
													'<li class="disabled"><a href="#">&raquo;</a>' +
													'</li>' +
												'</ul>' +
											'</div>	' +	
											'<!--col-->' +
										'</div>' +
										'<!--row-->' +
									'</div>';	
		}else{
			html+=					'<div id="map-content">' + 
										'<div class="tab-content clearfix">' +
											'<div class="tab-pane active" id="photo-view">' +
												html_grid +
											'</div>' +
		
											'<div class="tab-pane" id="list-view">' +
			
												'<div class="top-section">' +
													'<div class="property-highlight">' +
														html_list +
													'</div>' +
													'<table class="table-view">' +
														'<thead>' +
															'<tr>' +
																'<th>Status</th>' +
																'<th>Address</th>' +
																'<th>Location</th>' +
																'<th>Price</th>' +
																'<th>Beds</th>' +
																'<th>Baths</th>' +
																'<th>Sq.Ft.</th>' +
																'<!-- <th>$/Sq.Ft.</th> -->' +
																'<th>On Site</th>' +
																'<th>&nbsp;</th>' +
															'</tr>' +
														'</thead>' +
													'</table>' +
												'</div>' +
												'<div class="bottom-section">' +
													'<table class="table-view">' +
														'<tbody>' +
															html_table +
														'</tbody>' +
													'</table>' +
												'</div>';
												
												
											'</div>';
									   
			if( showPagination ){	
		
				html+=					'<div class="clearfix"></div>' +
										'<div class="col-md-12 pagination-wrap prop-pagination"></div>';				
			}			
										
			if( zppr.data.listing_disclaimer!='' ){
			
				html+= 					'<div class="row">'+
											'<div class="col-xs-12">'+
												'<span class="listing-disclaimer" role="none">'+ zppr.data.listing_disclaimer +'</span>'+
											'</div>'+
										'</div>';
			}
									
			html+=					'</div>';
		}	
						
				
								
		html+=					'</div>' +
							'</div>' +
							'<div class="clearfix"></div>' +
						'</div>' +
					'</div>' +				
				'</div>';
		
		return html;
	},
	list_map_view_generate_markers:function(targetElement, actual_link, requests){
		
		requests.view = 'map_marker';
	
		var subdomain=zppr.data.root.web.subdomain;
		var customer_key=zppr.data.root.web.authorization.consumer_key;	
		var params = zppr.generate_api_params(requests);
		var ps=params.ps;
		var sidx=params.sidx;
		var crit = params.crit;
		var anycrit = params.anycrit;
		var order=params.o;
		var contactId=zppr.data.contactIds.join();
		
		var args={
			searchType:params.searchType,
			subdomain:subdomain,
			customer_key:customer_key,
			crit:crit,
			anycrit:anycrit,
			model:order,
			sidx:sidx,
			ps:ps,
			contactId:contactId,
		};

		zppr.search(targetElement, 'map_marker', requests, args, actual_link, 0);
	},
	list_map_marker_script:function(response, requests){
		
		jQuery(document).ready(function(){ 

			var map;
			var saved_markers=new Array();
			var infoWindow = new google.maps.InfoWindow({
				disableAutoPan: true,
			});
			var infoWindowContent = [];

			//search polygons functions
			var drawingManager;
			var selectedShape;
			var colors = ['#1E90FF', '#FF1493', '#32CD32', '#FF8C00', '#4B0082'];
			var selectedColor;
			var colorButtons = {};

			function clearSelection() {
				if (selectedShape) {
					selectedShape.setEditable(false);
					selectedShape = null;
				}
			}

			function setSelection(shape) {
				clearSelection();
				selectedShape = shape;
				shape.setEditable(true);
				selectColor(shape.get('fillColor') || shape.get('strokeColor'));
			}

			function selectColor(color) {
				selectedColor = color;
				for (var i = 0; i < colors.length; ++i) {
					var currColor = colors[i];
					colorButtons[currColor].style.border = currColor == color ? '2px solid #789' : '2px solid #fff';
				}

				// Retrieves the current options from the drawing manager and replaces the
				// stroke or fill color as appropriate.
				var polylineOptions = drawingManager.get('polylineOptions');
				polylineOptions.strokeColor = color;
				drawingManager.set('polylineOptions', polylineOptions);

				var rectangleOptions = drawingManager.get('rectangleOptions');
				rectangleOptions.fillColor = color;
				drawingManager.set('rectangleOptions', rectangleOptions);

				var circleOptions = drawingManager.get('circleOptions');
				circleOptions.fillColor = color;
				drawingManager.set('circleOptions', circleOptions);

				var polygonOptions = drawingManager.get('polygonOptions');
				polygonOptions.fillColor = color;
				drawingManager.set('polygonOptions', polygonOptions);
			}

			function setSelectedShapeColor(color) {
				if (selectedShape) {
					if (selectedShape.type == google.maps.drawing.OverlayType.POLYLINE) {
						selectedShape.set('strokeColor', color);
					} else {
						selectedShape.set('fillColor', color);
					}
				}
			}

			function makeColorButton(color) {
				var button = document.createElement('span');
				button.className = 'color-button';
				button.style.backgroundColor = color;
				google.maps.event.addDomListener(button, 'click', function() {
					selectColor(color);
					setSelectedShapeColor(color);
				});

				return button;
			}

			function buildColorPalette() {
				var colorPalette = document.getElementById('color-palette');
				for (var i = 0; i < colors.length; ++i) {
					var currColor = colors[i];
					var colorButton = makeColorButton(currColor);
					colorPalette.appendChild(colorButton);
					colorButtons[currColor] = colorButton;
				}
				selectColor(colors[0]);
			}

			/**
			 * Creates a control that recenters the map on Chicago.
			 */
			 function createDrawControl(map) {
			  const controlButton = document.createElement('button');

			  // Set CSS for the control.
			  controlButton.style.backgroundColor = '#fff';
			  controlButton.style.border = '2px solid #fff';
			  controlButton.style.borderRadius = '3px';
			  controlButton.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
			  controlButton.style.color = 'rgb(25,25,25)';
			  controlButton.style.cursor = 'pointer';
			  controlButton.style.fontFamily = 'Roboto,Arial,sans-serif';
			  controlButton.style.fontSize = '16px';
			  controlButton.style.lineHeight = '38px';
			  controlButton.style.margin = '8px 8px 22px';
			  controlButton.style.padding = '0 5px';
			  controlButton.style.textAlign = 'center';

			  controlButton.textContent = 'Draw on Map';
			  controlButton.title = 'Click to draw polygon on map';
			  controlButton.type = 'button';

			  // Setup the click event listeners: simply set the map to Chicago.
			  // controlButton.addEventListener('click', () => {
			  //   // map.setCenter(chicago);
			  //   drawingManager.setDrawingMode(google.maps.drawing.OverlayType.POLYGON);
			  // });

			  jQuery(controlButton).on('click', function(){
			  	if(! jQuery(this).hasClass('clicked')){
			  		drawingManager.setDrawingMode(google.maps.drawing.OverlayType.POLYGON);
			  		jQuery(this).toggleClass('clicked');
			  	}else{
			  		drawingManager.setDrawingMode(null);
			  		jQuery(this).toggleClass('clicked');
			  	}
			  });

			  return controlButton;
			}

			function ClearPolygonControl(map) {
			  const controlButton = document.createElement('button');

			  // Set CSS for the control.
			  controlButton.style.backgroundColor = '#fff';
			  controlButton.style.border = '2px solid #fff';
			  controlButton.style.borderRadius = '3px';
			  controlButton.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
			  controlButton.style.color = 'rgb(25,25,25)';
			  controlButton.style.cursor = 'pointer';
			  controlButton.style.fontFamily = 'Roboto,Arial,sans-serif';
			  controlButton.style.fontSize = '16px';
			  controlButton.style.lineHeight = '38px';
			  controlButton.style.margin = '8px 8px 22px';
			  controlButton.style.padding = '0 5px';
			  controlButton.style.textAlign = 'center';

			  controlButton.textContent = 'Clear Map Boundary';
			  controlButton.title = 'Click to clear map boundary on map';
			  controlButton.type = 'button';

			  // Setup the click event listeners: simply set the map to Chicago.
			  // controlButton.addEventListener('click', () => {
			  //   // map.setCenter(chicago);
			  //   drawingManager.setDrawingMode(google.maps.drawing.OverlayType.POLYGON);
			  // });

			  jQuery(controlButton).on('click', function(){
			  	removeLabel('boundarywkt', '', '');		
					jQuery('#zpa-search-filter-form').submit();
			  });

			  return controlButton;
			}

			//end polygon functions

			function initialize() {
				var bounds = new google.maps.LatLngBounds();
				var mapOptions = {
					mapTypeId: 'roadmap',
					gestureHandling: 'greedy',
				};
								
				// Display a map on the page
				map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
				map.setTilt(45);

				// custom button control
				// Create the DIV to hold the control.
				const drawControlDiv = document.createElement('div');
				// Create the control.
				const drawControl = createDrawControl(map);
				// Append the control to the DIV.
				drawControlDiv.appendChild(drawControl);

				map.controls[google.maps.ControlPosition.TOP_RIGHT].push(drawControlDiv);

				if( requests.hasOwnProperty('boundarywkt') ){
					// Create the DIV to hold the control.
					const clearMapDiv = document.createElement('div');
					// Create the control.
					const clearMapontrol = ClearPolygonControl(map);
					// Append the control to the DIV.
					clearMapDiv.appendChild(clearMapontrol);

					map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(clearMapDiv);
				}
					
				// Multiple Markers		[
				var markers = [];		
				if(response.result.hasOwnProperty('filteredList')){
					
					for (const [key, property] of Object.entries(response.result.filteredList)) {
						
						if( ! property.hasOwnProperty('id') )
							continue;
						
						if( ! property.hasOwnProperty('lat') || property.lat == '' || ! property.hasOwnProperty('lng') || property.lng == '' )
							continue;
						
						var index = property.id;
						var fulladdress = zppr.getAddress(property);
						var lat = property.lat;
						var lng = property.lng;
						var listingId = property.id;
						var beds = property.hasOwnProperty('nobedrooms')?property.nobedrooms:'';
						var bath = property.hasOwnProperty('nobaths')?property.nobaths:'';
						var price=(zppr.data.sold_status.indexOf(property.status)>-1?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
						var longprice =  zppr.moneyFormat(price);
						var shortprice =  zppr.moneyShorten(price);
						var proptype = property.proptype;
						
						markers.push([fulladdress.replace( "'", "\'" ), lat, lng, listingId,longprice, shortprice, beds, bath, index, proptype]);
					}
				}
									
				// Info Window Content				
				if(response.result.hasOwnProperty('filteredList')){
					
					var index=0;
					for (const [key, property] of Object.entries(response.result.filteredList)) {		
																	
						var fulladdress = zppr.getAddress(property);
						var lat = property.lat;
						var lng = property.lng;
						var listingId = property.id;
						var beds = zppr.get_nobedrooms(property);
						var bath = zppr.get_nobaths(property);
						var sqft = zppr.get_sqft(property);
						var price=(zppr.data.sold_status.indexOf(property.status)>-1?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
							price =  zppr.moneyFormat(price);
							
						if( property.hasOwnProperty('photoList') && property.photoList[0].imgurl.indexOf('mlspin.com') > -1){
							src = "//media.mlspin.com/photo.aspx?mls="+ property.listno +"&w=100&h=100&n=0";
						}else if( property.hasOwnProperty('photoList') )
							src = property.photoList[0].imgurl.replace('http://','//');
						
						// $saved_crit=$search;
						// $critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
						// if(!empty($searchId)){
							// $query_args['searchId']= $searchId;
						// }
						// if(zp_using_criteria() && !empty($critBase64)){
							// $query_args['criteria']= $critBase64;
						// }
						// if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
							// $query_args['newsearchbar']= 1;
						// }
						single_url = zppr.getPropUrl(listingId,fulladdress);
						
						is_login=zppr.data.is_login;
						is_active=zppr.is_favorite(property.id)?"active":"";
						searchId='';
						str_contactIds=zppr.data.contactIds.join();
						
						needBorder=0;
						if(beds)
							needBorder++;
						if(bath)
							needBorder++;
						if(sqft)
							needBorder++;
						
						needBorder_html = needBorder > 1 ? " | ": "";
					
						beds_html = beds ? beds +" BEDS" : ""; 
						bath_html = bath ? needBorder_html + bath + " BATH" : ""; 
						sqft_html = sqft ? needBorder_html + sqft + " SQFT" : ""; 
						
						infoWindowContent[listingId]='<div class=\"info_content\">' +
								'<div class=\"pic\"><img style=\"display: block; margin: 0 auto;\" src=\"'+ src +'\" /></div>' +
								'<div class=\"content\">' +				
									'<a href=\"'+ single_url +'\"><strong>"'+ fulladdress.replace( "'", "\'" ) +'"</strong></a>' +
									'<p class=\"price\">'+ price +'</p>' +
									'<p class=\"favorite\"><a class=\"listing-'+ listingId +' save-favorite-btn '+ is_active +'\" isLogin=\"'+ is_login +'\" listingId=\"'+ listingId +'\" searchId=\"'+ searchId +'\" contactId=\"'+ str_contactIds +'\" href=\"#\" afteraction=\"save_favorite_listing\"><i class=\"fa fa-heart\" aria-hidden=\"true\" role=\"none\"></i> Favorite</a></p>' +
									'<p class=\"info\">'+ beds_html + bath_html + sqft_html +'</p>' +
								'</div>' + '<a class=\"link-cover\" href=\"'+ single_url +'\"></a>' +
							'</div>';
					}
				}
					
				// Display multiple markers on a map		
				var marker, i;
				
				// Loop through our array of markers & place each one on the map  
				for( i = 0; i < markers.length; i++ ) {
					
					//marker
					var icon1 = zppr.plugin_url + "images/marker.png";
					var icon2 = zppr.plugin_url + "images/marker-hover.png";
					
					var position = new google.maps.LatLng(markers[i][1], markers[i][2]);	

					var listingId = markers[i][3];
					
					bounds.extend(position);
					
					marker = new CustomMarker(
						position, 
						map,
						{
							marker_id: markers[i][3],
							price: markers[i][4],
							shortprice: markers[i][5],
							bedrooms: markers[i][6],
							bath: markers[i][7],
							index: markers[i][8],
							proptype: markers[i][9],
						}
					);
					
					saved_markers[listingId]=marker;
					
					// Automatically center the map fitting all markers on the screen
					map.fitBounds(bounds);        
				}
				
				//map clustering
				var markerCluster = new MarkerClusterer(map, saved_markers,
				{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
				
				/*
				<?php		
				//map highlight
				ob_start();
				include ZIPPERAGENTPATH . '/custom/options.php';
				$jsonData=ob_get_clean();				
				$data = json_decode($jsonData);
				$boundaryWKT=isset($requests['boundarywkt'])?$requests['boundarywkt']:'';
				if($boundaryWKT){
					preg_match( '/POLYGON \(\((.*?)\)\)/', urldecode($boundaryWKT), $match );
					$coor_string = isset($match[1])?'('.$match[1].')':'';
					preg_match_all( "/\(([^)]+)\)/", $coor_string, $match );
					// $polygons = array_map('trim', explode( ',', $match[1] ));
					$polygons = $match[1];
					$added_polygons=array();
					foreach( $polygons as $index=>&$polygon ){
						$polygon= str_replace(' ','',$polygon);
						$temp = explode(',',$polygon);
						
						// $polygon= str_replace(', ',':',$polygon); 
						$polygon = array(
							'lat'=> $temp[0],
							'lng'=> $temp[1],
						);
						$added_polygons[]=$polygon;
					}
					$added_polygons[]=$added_polygons[0];
					if($added_polygons):
					?>
					
					// Define the LatLng coordinates for the polygon's path.
					var areaCoords = [
					<?php
					  foreach($added_polygons as $coordinate){
							echo '{lat: '. $coordinate['lat'] .', lng: '. $coordinate['lng']. '},'."\r\n";
					  } ?>
					];

					// Construct the polygon.
					var highlight_area = new google.maps.Polygon({
					  paths: areaCoords,
					  strokeColor: '#FF0000',
					  strokeOpacity: 0.8,
					  strokeWeight: 2,
					  fillColor: '#FF0000',
					  fillOpacity: 0.35
					});
					highlight_area.setMap(map); 
					<?php 
					endif; 
				} */
				
				codes=requests['location'];
				if(Array.isArray(codes)){			
					search=[];
					for (const [key, code] of Object.entries(codes)) {
						search.push( jQuery('#zpa-selected-filter [attribute-value="'+ code +'"] .name').html() );
					}					
					
					for (const [key, search_query] of Object.entries(search)) {
						areas = zppr.set_map_coordinate( map, search_query );
					}
				}
				
				// search polygon function
				
				var polyOptions = {
				  strokeWeight: 0,
				  fillOpacity: 0.45,
				  editable: true
				};
				// Creates a drawing manager attached to the map that allows the user to draw
				// markers, lines, and shapes.
				drawingManager = new google.maps.drawing.DrawingManager({
				  // drawingMode: google.maps.drawing.OverlayType.POLYGON,
				  drawingControl: true,
				  drawingControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT,
					drawingModes: ['polygon']
				  },
				  markerOptions: {
					draggable: true
				  },
				  polylineOptions: {
					editable: true
				  },
				  rectangleOptions: polyOptions,
				  circleOptions: polyOptions,
				  polygonOptions: polyOptions,
				  map: map
				});

				google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
					if (e.type != google.maps.drawing.OverlayType.MARKER) {
					// Switch back to non-drawing mode after drawing a shape.
					drawingManager.setDrawingMode(null);

					// Add an event listener that selects the newly-drawn shape when the user
					// mouses down on it.
					var newShape = e.overlay;
					newShape.type = e.type;
					google.maps.event.addListener(newShape, 'click', function() {
					  setSelection(newShape);
					});
					setSelection(newShape);
				  }
				}); 

				// Clear the current selection when the drawing mode is changed, or when the
				// map is clicked.
				google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
				google.maps.event.addListener(map, 'click', clearSelection);
				
				google.maps.event.addListener(drawingManager, 'polygoncomplete', function(line) {
					var coordinates = line.getPath().getArray().toString();
					var name ='boundarywkt';
					var value='POLYGON ('+ coordinates +')';
					var label='Map Coords';
					var linked_name=name;
					addFilterLabel(name, value, linked_name, label);
					addFormField(name,value,linked_name);
					jQuery('#zpa-search-filter-form').submit();
					jQuery( '.gmnoprint > div:not(:last-child)' ).click();
				});
				
				buildColorPalette();
			}

			function CustomMarker(latlng, map, args) {
				this.latlng = latlng;	
				this.args = args;	
				this.setMap(map);	
			}

			CustomMarker.prototype = new google.maps.OverlayView();

			CustomMarker.prototype.draw = function() {
				
				var self = this;
				
				var div = this.div;
				
				var price = this.args.price;
				var shortprice = this.args.shortprice;
				var bedrooms = this.args.bedrooms;
				var bath = this.args.bath;
				var index = this.args.index;
				var proptype = this.args.proptype;
				
				if (!div) {
				
					div = this.div = document.createElement('div');
					
					div.className = 'zpa-marker';
					
					div.style.position = 'absolute';
					div.style.cursor = 'pointer';
					// div.style.width = '100px';
					// div.style.height = '20px';
					div.style.background = 'white';
					div.setAttribute("index", index)
					
					if (typeof(self.args.marker_id) !== 'undefined') {
						div.dataset.marker_id = self.args.marker_id;
					}
					
					var bedrooms_html = bedrooms ? "&nbsp;|&nbsp;<span class=\"beds\">Beds&nbsp;"+ bedrooms +"</span>" : '';
					var bath_html = bedrooms ? "&nbsp;|&nbsp;<span class=\"bath\">Baths&nbsp;"+ bath +"</span>" : '';					
									
					div.innerHTML = "<div class=\"short-info\"><span class=\"price\">"+ price +"</span>"+ bedrooms_html + bath_html +"</div>";
									
					var markers = zppr.data.map_markers;
					
					if(markers){
						
						var mark=0;
						for (const [key, val] of Object.entries(markers)) {
							
							if( proptype == key ){
								div.className = 'zpa-marker zpa-image-marker';
								div.innerHTML += "<span class=\"short-price-marker\">"+ shortprice +"<img src=\""+ val.url +"\" /></span>";
								mark=1;
							}
						}
						if( ! mark ){
							div.innerHTML += "<span class=\"short-price\">"+ shortprice +"</span>";
						}
					}else{ 
						div.innerHTML += "<span class=\"short-price\">"+ shortprice +"</span>";					
					}
					
					google.maps.event.addDomListener(div, "click", function(event) {
						// alert('You clicked on a custom marker!');		
						google.maps.event.trigger(self, "click");
						infoWindow.setContent(infoWindowContent[index]);
						infoWindow.open(map, self);
					});
					
					var panes = this.getPanes();
					panes.overlayImage.appendChild(div);
				}
				
				var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
				
				if (point) {
					div.style.left = (point.x - 20) + 'px';
					div.style.top = (point.y - 0) + 'px';
				}
			};

			CustomMarker.prototype.remove = function() {
				if (this.div) {
					this.div.parentNode.removeChild(this.div);
					this.div = null;
				}	
			};

			CustomMarker.prototype.getPosition = function() {
				return this.latlng;	
			};


			function scrollToMarker(index) {
				map.panTo(saved_markers[index].getPosition());
			}	

			jQuery(".zpa-grid-result").mouseover( function(){
				var index = jQuery(this).find('a[listingid]').attr('listingid');	
				google.maps.event.trigger(saved_markers[index], 'mouseover');
				// scrollToMarker(index); //scroll to location
				infoWindow.setContent(infoWindowContent[index]);
				infoWindow.setPosition(saved_markers[index].position);
				infoWindow.open(map, saved_markers[index]);
			});

			jQuery(".zpa-grid-result").mouseleave( function(){
				var index = jQuery(this).find('a[listingid]').attr('listingid');	
				google.maps.event.trigger(saved_markers[index], 'mouseout');
				infoWindow.close();
			});
			
			jQuery(".zpa-grid-result, .table-view tr").mouseover( function(){
				var index = jQuery(this).find('a[listingid]').attr('listingid');		
				google.maps.event.trigger(saved_markers[index], 'mouseover');
				// scrollToMarker(index); //scroll to location
				infoWindow.setContent(infoWindowContent[index]);
				infoWindow.setPosition(saved_markers[index].position);
				infoWindow.open(map, saved_markers[index]);
			});

			jQuery(".zpa-grid-result, .table-view tr").mouseleave( function(){
				var index = jQuery(this).find('a[listingid]').attr('listingid');	
				google.maps.event.trigger(saved_markers[index], 'mouseout');
				infoWindow.close();
			});

			initialize();
		});
	},
	list_map_scroll_script:function(){
		jQuery(document).ready(function(){
		
			setMapWrapperHeight();
		
			function setMapWrapperHeight() {
				var $sticky = jQuery('#map');
				var $mapWrapper = $sticky.find('#map_wrapper');
				var $top = 0;
				if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){
					// var $headerHeight = jQuery('.edgtf-fixed-wrapper').outerHeight();
					var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
						$top = $top + $headerHeight;
				}else if(jQuery('#main-header.et-fixed-header').length){ //Divi
					var $topheaderHeight = jQuery('#top-header.et-fixed-header').outerHeight();
					var $headerHeight = jQuery('#main-header.et-fixed-header').outerHeight();
						$top = $top + $topheaderHeight + $headerHeight;
				}else if(jQuery('body.et_fixed_nav #main-header').length){ //Divi new
					var $topheaderHeight = jQuery('body.et_fixed_nav #top-header').outerHeight();
					var $headerHeight = jQuery('body.et_fixed_nav #main-header').outerHeight();
						$top = $top + $topheaderHeight + $headerHeight;
				}else{
					var $headerHeight = 0;
						$top = $top + $headerHeight;
				}
				if(jQuery('#wpadminbar').length){
					var $wpadminbarHeight = jQuery('#wpadminbar').outerHeight();
						$top = $top + $wpadminbarHeight;
				}
				var $searchBarHeight = jQuery('#omnibar-tools.fixedheader').length ? jQuery('#omnibar-tools').outerHeight() : 0;
				var $searchCount = jQuery('#omnibar-tools.fixedheader').length && jQuery('.map-legend-wrap .property-results').length ? jQuery('.property-results').outerHeight() + 25 + 25 : 0;
				var $searchMapMarkers = jQuery('#omnibar-tools.fixedheader').length && jQuery('.map-legend-wrap .proptype-markers').length ? jQuery('.proptype-markers').outerHeight() + 20 : 0;
			
				$top = $top + $searchBarHeight;
				$top = $top + $searchCount;
				// $top = $top + $searchMapMarkers;
			
				// console.log( $top );
			
				$mapWrapper.css('height',jQuery(window).outerHeight() - $top - $searchMapMarkers);
			}
		
			jQuery(window).bind( 'scroll', function() {
			
				var $sticky = jQuery('#map');
				var $mapWrapper = $sticky.find('#map_wrapper');
				var $top = 0;
				if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){
					// var $headerHeight = jQuery('.edgtf-fixed-wrapper').outerHeight();
					var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
						$top = $top + $headerHeight;
				}else if(jQuery('#main-header.et-fixed-header').length){ //Divi
					var $topheaderHeight = jQuery('#top-header.et-fixed-header').outerHeight();
					var $headerHeight = jQuery('#main-header.et-fixed-header').outerHeight();
						$top = $top + $topheaderHeight + $headerHeight;
				}else if(jQuery('body.et_fixed_nav #main-header').length){ //Divi new
					var $topheaderHeight = jQuery('body.et_fixed_nav #top-header').outerHeight();
					var $headerHeight = jQuery('body.et_fixed_nav #main-header').outerHeight();
						$top = $top + $topheaderHeight + $headerHeight;
				}else{
					var $headerHeight = 0;
						$top = $top + $headerHeight;
				}
				if(jQuery('#wpadminbar').length){
					var $wpadminbarHeight = jQuery('#wpadminbar').outerHeight();
						$top = $top + $wpadminbarHeight;
				}
				var $searchBarHeight = jQuery('#omnibar-tools.fixedheader').length ? jQuery('#omnibar-tools').outerHeight() : 0;
				var $searchCount = jQuery('#omnibar-tools.fixedheader').length && jQuery('.map-legend-wrap .property-results').length ? jQuery('.property-results').outerHeight() + 25 + 25 : 0;
				var $searchMapMarkers = jQuery('#omnibar-tools.fixedheader').length && jQuery('.map-legend-wrap .proptype-markers').length ? jQuery('.proptype-markers').outerHeight() + 20 : 0;
			
				$top = $top + $searchBarHeight;
				$top = $top + $searchCount;
				// $top = $top + $searchMapMarkers;
			
				// console.log( $top );
			
				$mapWrapper.css('height',jQuery(window).outerHeight() - $top - $searchMapMarkers);
			
				var $stickyH = $sticky.outerHeight();
				var $stickyContainer = jQuery('.sticky-container');
				var $stickyContainerOffset = $stickyContainer.offset();
				var $start = $stickyContainer.length?$stickyContainerOffset.top:0;
				var $limit = $start + $stickyContainer.outerHeight();
				var $padding = 15; // padding size;
				var $maxWidth = $sticky.find('#map_canvas').outerWidth() + $padding;
			
				var $searchBar = jQuery('#map');
			
				if(jQuery(window).width() > 768){
				   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top - $searchMapMarkers) {
						$sticky.css({
							'position':'fixed', 
							'top': $top + $searchMapMarkers,
							'max-width' : $maxWidth
						});
						if($searchBar.length){
							$searchBar.css({
							   // 'padding-top': jQuery(window).outerHeight() - $top
							});
						}
				   }
				   else if (jQuery(window).scrollTop() > $limit - $stickyH - $top - $searchMapMarkers) {
					   $sticky.css({
							   'position': 'absolute',
							   'top'     : 'auto',
							   'bottom'  : 0
						   });
				   }
				   else {
						$sticky.css({
							'position' : 'static',
							'max-width' : '100%'
						});
						if($searchBar.length){
							$searchBar.find('.zpa-listing-list').css({
							   // 'padding-top': 0
							});
						}
						$maxWidth = $sticky.find('#map_canvas').outerWidth() + $padding;
						$mapWrapper.css('height',jQuery(window).outerHeight() - $top);
				   }
				}
			});
		});
	},
	list_photo_view_template:function(requests, main_html, sidebar_html, is_view_save_search){
		
		var requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
		var boundaryWKT 		= ( requests.hasOwnProperty('boundarywkt')?requests['boundarywkt']:'' );
		var openHomesMode 		= ( requests.hasOwnProperty('openhomesmode')?requests['openhomesmode']:'' );
		var openHomesOnlyYn 	= ( requests.hasOwnProperty('openhomesonlyyn')?requests['openhomesonlyyn']:'' );
		var showPagination 		= ( requests.hasOwnProperty('pagination')?parseInt(requests['pagination']):1 );
		var showResults	 		= ( requests.hasOwnProperty('result')?parseInt(requests['result']):1 );
		var searchId			= ( requests.hasOwnProperty('searchid')?requests['searchid']:'' );
		
		var html = '';
		
		html += '<div class="zpa-listing-search-results hideonprint">' +

					'<div class="row mt-25 mb-25">';
		if( showResults ){
		html +=			'<div class="col-xs-12 prop-total">&nbsp;</div>';
		}
		html += 		'</div>' +
			
					'<div class="container-fluid">' +				
						'<div id="" class="row sticky-container" style="position:relative;">' +     
							'<div id="small-property" class="col-lg-4 col-md-4 col-xs-12 bg-light ">' +
								'<div class="row ">' + sidebar_html + '</div>' +
							'</div>' +
							'<div class="col-lg-8 col-md-8 col-xs-12 ml-auto" id="photos">' +	
								'<div class="">'
									+ main_html;
		if( showPagination ){
			html+= 					'<div class="clearfix"></div>' +
									'<div class="col-md-12 pagination-wrap prop-pagination"></div>';
		}
		
		if( zppr.data.listing_disclaimer!='' ){
			
			html+= 						'<div class="row">'+
											'<div class="col-xs-12">'+
												'<span class="listing-disclaimer" role="none">'+ zppr.data.listing_disclaimer +'</span>'+
											'</div>'+
										'</div>';
		}
								'</div>' +
							'</div>' +
							'<div class="clearfix"></div>' +
						'</div>' +
					'</div>' +		
				'</div>';
		
		return html;
	},
	list_photo_scroll_script:function(){
		jQuery(document).ready(function(){
			
			jQuery(window).scroll(function() {	
				var $sticky = jQuery('#small-property');
				var $mapWrapper = $sticky;
				var $top = 0;
				var $stickyH;
				if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){
					var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
						$top = $top + $headerHeight;
						$stickyH = jQuery(window).outerHeight() - $headerHeight;
				}else if(jQuery('#main-header.et-fixed-header').length){ //Divi
					var $topheaderHeight = jQuery('#top-header.et-fixed-header').outerHeight();
					var $headerHeight = jQuery('#main-header.et-fixed-header').outerHeight();
						$top = $top + $topheaderHeight + $headerHeight;
						$stickyH = jQuery(window).outerHeight() - $topheaderHeight - $headerHeight;
				}else if(jQuery('body.et_fixed_nav #main-header').length){ //Divi new
					var $topheaderHeight = jQuery('body.et_fixed_nav #top-header').outerHeight();
					var $headerHeight = jQuery('body.et_fixed_nav #main-header').outerHeight();
						$top = $top + $topheaderHeight + $headerHeight;
						$stickyH = jQuery(window).outerHeight() - $topheaderHeight - $headerHeight;
				}else{
					$stickyH = jQuery(window).outerHeight();		
				}
				if(jQuery('#wpadminbar').length){
					var $wpadminbarHeight = jQuery('#wpadminbar').outerHeight();
						$top = $top + $wpadminbarHeight;
				}
				
				var $searchBarHeight = jQuery('#omnibar-tools.fixedheader').length ? jQuery('#omnibar-tools').outerHeight() : 0;
			
				$top = $top + $searchBarHeight;
				
				$mapWrapper.css('height', jQuery(window).outerHeight() - $top);	
				
				var $stickyContainer = jQuery('.sticky-container');
				var $stickyContainerOffset = $stickyContainer.offset();
				var $start = $stickyContainer.length?$stickyContainerOffset.top:0;
				var $limit = $start + $stickyContainer.outerHeight();
				var $padding = 0; // padding size;
				var $maxWidth = $sticky.outerWidth() + $padding;	
				
				if(jQuery(window).width() > 768){
				   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
					   $sticky.css({
					   'position':'fixed', 
					   'top': $top,
					   'max-width' : $maxWidth
					   });
				   }
				   else if (jQuery(window).scrollTop() > $limit - $stickyH - $top) {
					   $sticky.css({
							   'position': 'absolute',
							   'top'     : 'auto',
							   'bottom'  : 0
						   });
				   }
				   else {
					   $sticky.css({
						'position' : 'static',
						'max-width' : '100%'});
					   $maxWidth = $sticky.outerWidth() + $padding;
					   $mapWrapper.css('height', jQuery(window).outerHeight() - $top);
				   }
				}
			});
		});
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
		
		var source_details=single_property.hasOwnProperty('sourceid') ? zppr.get_source_text(single_property.sourceid, {'listOfficeName':single_property.listOfficeName, 'listAgentName': single_property.listAgentName, 'property': single_property}, 'detail_source' ) : false;	
		
		agent = {};
		if( single_property.hasOwnProperty('listagent') || single_property.hasOwnProperty('saleagent') ){
			mlsid = single_property.hasOwnProperty('saleagent') ? single_property.saleagent : '';
			if(mlsid)
				agent = zppr.get_agent(mlsid);
			
			if(jQuery.isEmptyObject(agent)){
				mlsid = single_property.hasOwnProperty('listagent') ? single_property.listagent : '';
				if(mlsid)
					agent =  zppr.get_agent(mlsid);
			}
		}
		// agent =  zppr.get_agent("G0003031");
		// agent =  zppr.get_agent("BB981188");
		// agent =  zppr.get_agent("0");
		// console.log('------agent------');
		// console.log(agent);
		
		var html = '';
		
		var save_btn_html = zppr.data.is_enable_save!=1 ? '' : '<div class="btn_wrap zy_save-property-wrap col-btn">' +
								'<button class="zy_save-property '+ (zppr.data.is_login==0?"needLogin":"") +'" isLogin="'+ zppr.data.is_login +'" afterAction="save_property" contactid="'+ zppr.data.contactIds.join() +'" searchid="'+ zppr.data.searchId +'" listingid="'+ single_property.id +'"><i class="fa fa-floppy-o fa-fw" role="none"></i></button>' +
								'<span>Save</span>' +
							'</div>';
							
		var enable_rebate = zppr.data.display_buyerrebate_amount;
		var rebate_prefix =  zppr.data.buyerrebate_amount_prefix;
		var rebate_default_text =  zppr.data.emptybuyerrebate_amount_text;
							
		var col_length = ! enable_rebate ? 'col-lg-3' : 'col-lg-2';
		var col_length2 = ! enable_rebate ? 'col-lg-3' : 'col-lg-4';
		var col_length_sub = ! enable_rebate ? 'col-lg-6' : 'col-lg-4';
		
		var rebate_col_html = '';
		
		if( enable_rebate ){
			
			var rebate_price = '';

			if( single_property.hasOwnProperty('buyerRebate') && single_property.buyerRebate ){				
				rebate_price = zppr.moneyFormat(single_property.buyerRebate);
			}else{
				rebate_price = rebate_default_text;
			}
			
			rebate_col_html = 	'<div class="'+ col_length_sub +' col-sm-12 col-md-12 col zy_nopadding">' +
											'<h2>' +
												'<p class="zy_price-style rebate-price">' + rebate_price + '</p>' +
												'<p class="zy_label-style rebate-prefix">'+ rebate_prefix +'</p>' +
											'</h2>' +
										'</div>';
		}
		
		html += 	'<section class="col-lg-12 col-sm-12 col-md-12 col-xl-12 zy_main hideonprint" itemtype="http://schema.org/Residence">' +
						'<article class="container-fluid">' +
							'<div id="zy_header-section" class="row zyapp_main-style" style="max-width:none;">' +	
								
								'<div class="zy_header-style '+ col_length +' col-sm-12 col-md-12 col-xl-3 zy_nopadding">' +
									'<div class="zy_address-style" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">' +
										'<h1>' +
											'<p class="zy_address-style"><span itemprop="streetAddress">{{streetno}} '+ (single_property.hasOwnProperty('streetname')?zppr.streetname_fix_comma(single_property.streetname):'') +' '+ (single_property.hasOwnProperty('unitno')?'#'+single_property.unitno:'') +'</span></p>' +
											'<p class="zy_subaddress-style">' +
												'<span itemprop="addressLocality"> '+ ( single_property.hasOwnProperty('lngTOWNSDESCRIPTION') && single_property.lngTOWNSDESCRIPTION ? single_property.lngTOWNSDESCRIPTION + ',':'' ) +' </span>' +
												'<span itemprop="addressRegion"> '+ (single_property.hasOwnProperty('provinceState')?single_property.provinceState:'') +'</span>' +
												'<span itemprop="postalCode"> '+ (single_property.hasOwnProperty('zipcode')?single_property.zipcode:'') +' </span>';
		
			
		if( single_property.hasOwnProperty('sourceid') && single_property.sourceid == 1 && single_property.hasOwnProperty('shrtAREACODE') ){
			html +=								'<span>('+ single_property.shrtAREACODE +')</span>';
		}
												
		html +=								'</p>' +
										'</h1>' +
									'</div>' +
								'</div>' +
								
								'<div class="zy_price-mls '+ col_length2 +' col-sm-12 col-md-12 col-xl-4 zy_nopadding">' +
									'<div class="row">' +
										'<div class="'+ col_length_sub +' col-sm-12 col-md-12 col zy_nopadding">' +
											'<h2>' +
												'<p class="zy_price-style">' + zppr.data.currency +'{{realprice}}</p>' +
												'<p class="zy_label-style">Price</p>' +
											'</h2>' +
										'</div>' +
										
										rebate_col_html + 
										
										'<div class="'+ col_length_sub +' col-sm-12 col-md-12 col zy_nopadding">' +
											'<h2>' +
												'<p class="zy_mlsno">{{listno}}</p>' +
												'<p class="zy_label-style">{{displaySource}}#</p>' +
											'</h2>' +
										'</div>' +
									'</div>' +
								'</div>' +
								
								'<div class="zy_price-mls col-lg-6 col-sm-12 col-md-12 col-xl-5 zy_nopadding">' +
									'<div class="row">' +
										'<div class="'+ ( zppr.data.is_enable_save==1 ? 'col-lg-3' : 'col-lg-4' ) +' col-sm-12 col-md-12">' +
											'<h2>' +
												'<p class="zy_price-style zy_status-style zpa-status '+ (jQuery.isNumeric(single_property.status)?'status_'+single_property.status.replace(' ', ''):single_property.status.replace(' ', '')) +'">{{status}}</p>' +
												'<p class="zy_label-style">Status</p>' +
											'</h2>' +
										'</div>' +
										'<div class="'+ ( zppr.data.is_enable_save==1 ? 'col-lg-8' : 'col-lg-7' ) +' col-sm-12 col-md-12 zy_nopadding zy-detail-tool">' +
											'<div class="row">' +				
												'<div class="btn_wrap zy_save-favorite-wrap col-btn">' +
													'<button class="zy_save-favorite '+ (zppr.is_favorite(single_property.id)?"favorited":"") +'" isLogin="'+ zppr.data.is_login +'" afterAction="save_favorite" contactid="'+ zppr.data.contactIds.join() +'" searchid="'+ zppr.data.searchId +'" listingid="'+ single_property.id +'"><i class="fa fa-heart fa-fw" role="none"></i></button>' +
													'<span>Favorite</span>' +
												'</div>' +
												
												save_btn_html +
												
												'<div class="btn_wrap zy_schedule-showing-wrap col-btn">' +
													'<button class="zy_schedule-showing '+ (zppr.data.is_login==0?"needLogin":"") +'" afterAction="schedule_show"><i class="fa fa-clock-o fa-fw" role="none"></i></button>' +
													'<span>Request Showing</span>' +
												'</div>' +
												
												'<div class="btn_wrap zy_request-showing-wrap col-btn">' +
													'<button class="zy_request-showing '+ (zppr.data.is_login==0?"needLogin":"") +'" afterAction="request_info"><i class="fa fa-info fa-fw" role="none"></i></button>' +
													'<span>Request info</span>' +
												'</div>' +
												
												'<div class="btn_wrap zy_share-property-wrap col-btn">' +
													'<button class="zy_share-property dropdown-toggle" id="dropdownShare" data-toggle="dropdown"><i class="fa fa-share fa-fw" role="none"></i></button>' +
													'<span>Share</span>' +
													'<div class="dropdown-menu" aria-labelledby="dropdownShare">' +
														'<ul class="menu-list">' +
															'<li>' +
																'<a class="share-item share-email '+ (zppr.data.is_login==0?"needLogin":"") +'" afterAction="share_email" contactid="'+ zppr.data.contactIds.join() +'" href="#">' +
																	'<i class="zy-icon zy-icon--larger fa fa-at" aria-hidden="true" role="none"></i> ' +
																	'<span>Email this listing</span>' +
																'</a>' +
																
															'</li>' +															
															'<li>' +
																'<a class="share-item" href="https://www.facebook.com/sharer/sharer.php?u='+ actual_link +'" target="_blank" onclick="window.open(this.href, \'facebook-share-dialog\', \'width=626,height=436\'); return false;">' +
																	'<i class="zy-icon zy-icon--larger fa fa-facebook" aria-hidden="true" role="none"></i> ' +
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
							
							'<div class="row zy_highlight-section">';
		
		if(zppr.data.root.web.asrc.indexOf('NERENMLS') !== -1){
			html+=				'<div class="col-xs-12">' +
									'<div class="full-details-disclaimer">' +
										source_details ;
			if(zppr.data.sold_status.indexOf(single_property.status) !== -1){
				
				html+=					'<div class="zy_sale-office">';
				var sale_office='';
				if( single_property.hasOwnProperty('saleOfficeName') ){
					sale_office+= 'Selling Office ' + single_property.saleOfficeName;							
				}
				html+=					sale_office +
										'</div>';
			}
			html+=					'</div>' +
								'</div>';
		}
		
		html+=					'<div class="col-lg-8 col-sm-12 col-md-12 col-xl-8">' + 
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
														 /* < div class="owl-carousel top-head-carousel '+ (zppr.data.is_login==0?"needLogin":"") +'"> */
														'<div class="owl-carousel top-head-carousel" aria-label="carousel">';
														
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
														'<div class="left-nav"><i class="icon-left-arrow" role="none"></i>' +
														'</div>' +
														'<div class="right-nav"><i class="icon-right-arrow" role="none"></i>' +
														'</div>' +
													'</div>' +
													'<div class="carousel-controller-wrapper">' +
														'<div class="owl-carousel carousel-controller" aria-label="carousel">';
		
		
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
			if(single_property.hasOwnProperty('listAgentName') && zppr.data.is_show_agent_name==1){
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
											'<a id="zy_open-print-popup" href="#"><i class="fa fa-print" aria-hidden="true" role="none"></i> Print</a>' +
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
										
		// if(single_property.hasOwnProperty('direction')){
			// html+=						'<h2>Directions</h2>' +
										// '<p>{{direction}}</p>';
		// }
									
											
		html+=						'</div>' +
										
								'</div>' +			
								
								'<div id="zy_sidebar" class="col-lg-4 col-sm-12 col-md-12 col-xl-4">';				
																		
		var property_detail =		'<ul class="zy_prop-details">';
										
		if( single_property.hasOwnProperty('syncTime') ){
			property_detail+=			'<li><label class="update-info col-xs-12 zy_nopadding"> Last Checked for Updates on {{syncTime}} </label></li>';
		}else if( single_property.hasOwnProperty('syncAge') ){
			property_detail+=			'<li><label class="update-info col-xs-12 zy_nopadding"> Last Checked for Updates: {{syncAge}} minutes ago </label></li>';
		}					
								
		/* incldue sidebar template */
		property_detail+=				zppr.sidebar_template(single_property) +
														
									'</ul>';
									
		if(zppr.data.root.web.asrc.indexOf('NERENMLS') === -1){
			html+=					property_detail;
		}							
									
		html+=						'<ul class="zy_agent-info">';
									
		var user_default = zppr.data.plugin_url + 'images/user-default.png';
		
		if( single_property.hasOwnProperty('listingAgent') ){
			var agentFullName = zppr.checkNested(single_property,'listingAgent','userName') ? single_property.listingAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'listingAgent','imageURL') ? single_property.listingAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'listingAgent','phoneMobile') ? single_property.listingAgent.phoneMobile : zppr.checkNested(single_property,'listingAgent','phoneOffice') ? single_property.listingAgent.phoneOffice : '';
			var agentPhoneMobile = zppr.checkNested(single_property,'listingAgent','phoneMobile') ? single_property.listingAgent.phoneMobile : '';
			var agentPhoneOffice = zppr.checkNested(single_property,'listingAgent','phoneOffice') ? single_property.listingAgent.phoneOffice : '';
			var agentPhoneFax = zppr.checkNested(single_property,'listingAgent','phoneFax') ? single_property.listingAgent.phoneFax : '';
			var agentEmail = zppr.checkNested(single_property,'listingAgent','email') ? single_property.listingAgent.email : '';
			
			agent = zppr.checkNested(single_property,'listingAgent','mlsAgentId') ?  zppr.get_agent(single_property.listingAgent.mlsAgentId) : agent;
			
			switch(zppr.data.detailpage_group){
				
				case "sibor":
				
					html+=				'<li>' +
											'<div class="zy_single-agent">' +
												'<span class="zy_agent-title">Listing Agent</span>' +
												
												'<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3>'+ agentFullName +'</h3>';
												
					if(agentImage){
						html+=				'<div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					
					if(agentEmail){
						html+=					'<p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:'+ agentEmail +'">'+ agentEmail +'</a></p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span>'+ agentPhoneFax +'</p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span>'+ agentPhoneFax +'</p>';
					}
						
					if(agentPhoneMobile){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span>'+ agentPhoneMobile +'</p>';
					}							
												
					if( agent.id ){
						html+=					'<button class="go-to-form">Ask Question</button>';
					}
						html+=					'</span>' +
												'<div class="clearfix"></div>' +
											'</div>' +
										'</li>';
					break;
					
				default:
				
					html+=				'<li>Listing Agent</li>' +
										'<li>';
					if(agentImage){
						html+=				'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					html+=					'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
					if( agent.id ){
						html+=				'<button class="go-to-form">Ask Question</button>';
					}
					html+=					'</span>' +
											'<div class="clearfix"></div>' +
										'</li>';
					break;
			}
		} else if( single_property.hasOwnProperty('contactAgent') && zppr.data.is_your_agent ){
			var agentFullName = zppr.checkNested(single_property,'contactAgent','userName') ? single_property.contactAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'contactAgent','imageURL') ? single_property.contactAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'contactAgent','phoneMobile') ? single_property.contactAgent.phoneMobile : zppr.checkNested(single_property,'listingAgent','phoneOffice') ? single_property.listingAgent.phoneOffice : '';
			var agentPhoneMobile = zppr.checkNested(single_property,'contactAgent','phoneMobile') ? single_property.contactAgent.phoneMobile : '';
			var agentPhoneOffice = zppr.checkNested(single_property,'contactAgent','phoneOffice') ? single_property.contactAgent.phoneOffice : '';
			var agentPhoneFax = zppr.checkNested(single_property,'contactAgent','phoneFax') ? single_property.contactAgent.phoneFax : '';
			var agentEmail = zppr.checkNested(single_property,'contactAgent','email') ? single_property.contactAgent.email : '';
			
			agent = zppr.checkNested(single_property,'contactAgent','mlsAgentId') ?  zppr.get_agent(single_property.contactAgent.mlsAgentId) : agent;
			
			switch(zppr.data.detailpage_group){
				
				case "sibor":
				
					html+=				'<li>' +
											'<div class="zy_single-agent">' +
												'<span class="zy_agent-title">Your Agent</span>' +
												
												'<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3>'+ agentFullName +'</h3>';
												
					if(agentImage){
						html+=				'<div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					
					if(agentEmail){
						html+=					'<p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:'+ agentEmail +'">'+ agentEmail +'</a></p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span>'+ agentPhoneFax +'</p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span>'+ agentPhoneFax +'</p>';
					}
						
					if(agentPhoneMobile){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span>'+ agentPhoneMobile +'</p>';
					}							
												
					if( agent.id ){
						html+=					'<button class="go-to-form">Ask Question</button>';
					}
						html+=					'</span>' +
												'<div class="clearfix"></div>' +
											'</div>' +
										'</li>';
					break;
					
				default:
				
					html+=				'<li>Listing Agent</li>' +
										'<li>';
					if(agentImage){
						html+=				'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					html+=					'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
					if( agent.id ){
						html+=				'<button class="go-to-form">Ask Question</button>';
					}
					html+=					'</span>' +
											'<div class="clearfix"></div>' +
										'</li>';
					break;
			}
		}/* else if( single_property.hasOwnProperty('listAgent') ){
			var agentFullName = zppr.checkNested(single_property,'listAgent','fullName') ? single_property.listAgent.fullName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'listAgent','imageURL') ? single_property.listAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'listOffice','officePhone') ? single_property.listOffice.officePhone : '';
			var agentEmail = zppr.checkNested(single_property,'listAgent','preferredMail') ? single_property.listAgent.preferredMail : '';
			
			agent = zppr.checkNested(single_property,'listAgent','mlsAgentId') ?  zppr.get_agent(single_property.listAgent.mlsAgentId) : agent;
			
			html+=						'<li>Listing Agent</li>' +
										'<li>';
			if(agentImage){
				html+=						'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
			}
			html+=							'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
			if( agent.id ){
				html+=						'<button class="go-to-form">Ask Question</button>';
			}
			html+=							'</span>' +
											'<div class="clearfix"></div>' +
										'</li>';
		} */
		
		if( single_property.hasOwnProperty('coListingAgent') ){
			
			var agentFullName = zppr.checkNested(single_property,'coListingAgent','userName') ? single_property.coListingAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'coListingAgent','imageURL') ? single_property.coListingAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'coListingAgent','phoneMobile') ? single_property.coListingAgent.phoneMobile : zppr.checkNested(single_property,'coListingAgent','phoneOffice') ? single_property.coListingAgent.phoneOffice : '';
			var agentPhoneMobile = zppr.checkNested(single_property,'coListingAgent','phoneMobile') ? single_property.coListingAgent.phoneMobile : '';
			var agentPhoneOffice = zppr.checkNested(single_property,'coListingAgent','phoneOffice') ? single_property.coListingAgent.phoneOffice : '';
			var agentPhoneFax = zppr.checkNested(single_property,'coListingAgent','phoneFax') ? single_property.coListingAgent.phoneFax : '';
			var agentEmail = zppr.checkNested(single_property,'coListingAgent','email') ? single_property.coListingAgent.email : '';
			
			agent = zppr.checkNested(single_property,'coListingAgent','mlsAgentId') ?  zppr.get_agent(single_property.coListingAgent.mlsAgentId) : agent;
			
			switch(zppr.data.detailpage_group){
				
				case "sibor":
				
					html+=				'<li>' +
											'<div class="zy_single-agent">' +
												'<span class="zy_agent-title">CoListing Agent</span>' +
												
												'<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3>'+ agentFullName +'</h3>';
												
					if(agentImage){
						html+=				'<div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					
					if(agentEmail){
						html+=					'<p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:'+ agentEmail +'">'+ agentEmail +'</a></p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span>'+ agentPhoneFax +'</p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span>'+ agentPhoneFax +'</p>';
					}
						
					if(agentPhoneMobile){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span>'+ agentPhoneMobile +'</p>';
					}							
												
					if( agent.id ){
						html+=					'<button class="go-to-form">Ask Question</button>';
					}
						html+=					'</span>' +
												'<div class="clearfix"></div>' +
											'</div>' +
										'</li>';
					break;
					
				default:
				
					html+=				'<li>CoListing Agent</li>' +
										'<li>';
					if(agentImage){
						html+=				'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					html+=					'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
					if( agent.id ){
						html+=				'<button class="go-to-form">Ask Question</button>';
					}
					html+=					'</span>' +
											'<div class="clearfix"></div>' +
										'</li>';
					break;
			}
		} /* else if( single_property.hasOwnProperty('coListAgent') ){
			
			var agentFullName = zppr.checkNested(single_property,'coListAgent','fullName') ? single_property.coListAgent.fullName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'coListAgent','imageURL') ? single_property.coListAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'coListOffice','officePhone') ? single_property.coListOffice.officePhone : '';
			var agentEmail = zppr.checkNested(single_property,'coListAgent','preferredMail') ? single_property.coListAgent.preferredMail : '';
			
			agent = zppr.checkNested(single_property,'coListAgent','mlsAgentId') ?  zppr.get_agent(single_property.coListAgent.mlsAgentId) : agent;
			
			html+=						'<li>CoListing Agent</li>' +
										'<li>';
			if(agentImage){
				html+=						'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
			}
			html+=							'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
			if( agent.id ){
				html+=						'<button class="go-to-form">Ask Question</button>';
			}
			html+=							'</span>' +
											'<div class="clearfix"></div>' +
										'</li>';
		} */
		
		if( single_property.hasOwnProperty('salesAgent') ){
			var agentFullName = zppr.checkNested(single_property,'salesAgent','userName') ? single_property.salesAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'salesAgent','imageURL') ? single_property.salesAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'salesAgent','phoneMobile') ? single_property.salesAgent.phoneMobile : zppr.checkNested(single_property,'salesAgent','phoneOffice') ? single_property.salesAgent.phoneOffice : '';
			var agentPhoneMobile = zppr.checkNested(single_property,'salesAgent','phoneMobile') ? single_property.salesAgent.phoneMobile : '';
			var agentPhoneOffice = zppr.checkNested(single_property,'salesAgent','phoneOffice') ? single_property.salesAgent.phoneOffice : '';
			var agentPhoneFax = zppr.checkNested(single_property,'salesAgent','phoneFax') ? single_property.salesAgent.phoneFax : '';
			var agentEmail = zppr.checkNested(single_property,'salesAgent','email') ? single_property.salesAgent.email : '';
			
			agent = zppr.checkNested(single_property,'salesAgent','mlsAgentId') ?  zppr.get_agent(single_property.salesAgent.mlsAgentId) : agent;
			
			switch(zppr.data.detailpage_group){
				
				case "sibor":
				
					html+=				'<li>' +
											'<div class="zy_single-agent">' +
												'<span class="zy_agent-title">Sales Agent</span>' +
												
												'<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3>'+ agentFullName +'</h3>';
												
					if(agentImage){
						html+=				'<div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					
					if(agentEmail){
						html+=					'<p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:'+ agentEmail +'">'+ agentEmail +'</a></p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span>'+ agentPhoneFax +'</p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span>'+ agentPhoneFax +'</p>';
					}
						
					if(agentPhoneMobile){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span>'+ agentPhoneMobile +'</p>';
					}							
												
					if( agent.id ){
						html+=					'<button class="go-to-form">Ask Question</button>';
					}
						html+=					'</span>' +
												'<div class="clearfix"></div>' +
											'</div>' +
										'</li>';
					break;
					
				default:
				
					html+=				'<li>Sales Agent</li>' +
										'<li>';
					if(agentImage){
						html+=				'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					html+=					'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
					if( agent.id ){
						html+=				'<button class="go-to-form">Ask Question</button>';
					}
					html+=					'</span>' +
											'<div class="clearfix"></div>' +
										'</li>';
					break;
			}
		}
		
		if( single_property.hasOwnProperty('coSalesAgent') ){
			var agentFullName = zppr.checkNested(single_property,'coSalesAgent','userName') ? single_property.coSalesAgent.userName : '';
			var agentFullNameArr = agentFullName.split(' ');
			var agentFirstName =  agentFullNameArr ? agentFullNameArr[0] : '';
			var agentImage = zppr.checkNested(single_property,'coSalesAgent','imageURL') ? single_property.coSalesAgent.imageURL : user_default;
			var agentPhone = zppr.checkNested(single_property,'coSalesAgent','phoneMobile') ? single_property.coSalesAgent.phoneMobile : zppr.checkNested(single_property,'coSalesAgent','phoneOffice') ? single_property.coSalesAgent.phoneOffice : '';
			var agentPhoneMobile = zppr.checkNested(single_property,'coSalesAgent','phoneMobile') ? single_property.coSalesAgent.phoneMobile : '';
			var agentPhoneOffice = zppr.checkNested(single_property,'coSalesAgent','phoneOffice') ? single_property.coSalesAgent.phoneOffice : '';
			var agentPhoneFax = zppr.checkNested(single_property,'coSalesAgent','phoneFax') ? single_property.coSalesAgent.phoneFax : '';
			var agentEmail = zppr.checkNested(single_property,'coSalesAgent','email') ? single_property.coSalesAgent.email : '';
			
			agent = zppr.checkNested(single_property,'coSalesAgent','mlsAgentId') ?  zppr.get_agent(single_property.coSalesAgent.mlsAgentId) : agent;
			
			switch(zppr.data.detailpage_group){
				
				case "sibor":
				
					html+=				'<li>' +
											'<div class="zy_single-agent">' +
												'<span class="zy_agent-title">CoSales Agent</span>' +
												
												'<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3>'+ agentFullName +'</h3>';
												
					if(agentImage){
						html+=				'<div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					
					if(agentEmail){
						html+=					'<p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:'+ agentEmail +'">'+ agentEmail +'</a></p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span>'+ agentPhoneFax +'</p>';
					}
					
					if(agentPhoneFax){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span>'+ agentPhoneFax +'</p>';
					}
						
					if(agentPhoneMobile){
						html+=					'<p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span>'+ agentPhoneMobile +'</p>';
					}							
												
					if( agent.id ){
						html+=					'<button class="go-to-form">Ask Question</button>';
					}
						html+=					'</span>' +
												'<div class="clearfix"></div>' +
											'</div>' +
										'</li>';
					break;
					
				default:
				
					html+=				'<li>CoSales Agent</li>' +
										'<li>';
					if(agentImage){
						html+=				'<div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="'+ agentImage +'" alt="'+ agentFullName +'" class="zy_agent-pic"/></div>';
					}
					html+=					'<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3>'+ agentFullName +'</h3>' +
											'<p class="zy_agent-phone">'+ agentPhone +'</p>' +
											'<a href="mailto:'+ agentEmail +'" class="zy_agent-email">'+ agentEmail +'</a>';
					if( agent.id ){
						html+=				'<button class="go-to-form">Ask Question</button>';
					}
					html+=					'</span>' +
											'<div class="clearfix"></div>' +
										'</li>';
					break;
			}
		}
										
		html+=						'</ul>';
		
		if(zppr.data.root.web.asrc.indexOf('NERENMLS') !== -1){
			html+=					property_detail;
		}	
									
		html+=					'</div>' +
								
							'</div>' +
							
							'<div id="zy_bottom-section">' +
								
								'<div class="row">' +
									
									'<div class="col-xs-12">' +
										
										'<h2>Property Details</h2>' +
										
										/* incldue content template */
										zppr.feature_template(single_property) +
										
									'</div>' +
								'</div>';
								
								
		if(single_property.hasOwnProperty('direction')){
			
			html+=				'<div class="row">' +
									
									'<div class="col-xs-12">' +
										
										'<h2>Directions</h2>' +
										'<p>{{direction}}</p>' +
										
									'</div>' +
								'</div>';
		}								
								
		html+=					'<div class="row">' +
									
									'<div class="col-xs-12">' +

										'<div class="full-details-disclaimer">' +
											'<br> ';
											
		var excludes=['gsmls'];
		if(!zppr.in_array(zppr.data.detailpage_group,excludes) && zppr.data.root.web.asrc.indexOf('NERENMLS') === -1){
			
			if( source_details!='' ){
				html+=						source_details;
				
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
								
		if( single_property.hasOwnProperty('lat') && single_property.hasOwnProperty('lng') && single_property.lat && single_property.lng ){
			html +=				'<div class="row zy-widget map-widget">' +
									'<div class="col-xs-12">' +
										'<div class="zy-map-container">' +
											'<div id="map" style="height:300px"></div>' +
										'</div>' +
									'</div>' +
								'</div>';
		}
								
		if( zppr.data.is_great_school_enabled==1 && single_property.hasOwnProperty('lat') && single_property.hasOwnProperty('lng') && single_property.lat && single_property.lng ){
			html +=				'<div class="row zy-widget greatschool-widget">' +
									'<div class="col-xs-12 col-md-12 col-lg-6">' +
										'<h3 class="">Great Schools</h3>' +
										'<div id="greatschools"></div>' +										
									'</div>' +
								'</div>';
		}
								
		if( zppr.data.is_walkscore_enabled==1 ){
			html +=				'<div class="row zy-widget walkscore-widget">' +
									'<div class="col-xs-12 col-md-12 col-lg-6">' +
										'<h3 class="">Walk Score</h3>' +
										'<div id="ws"></div>' +										
										'<style type="text/css">#ws-walkscore-tile{position:relative;text-align:left}#ws-walkscore-tile *{float:none;}</style>' +
										'<div id="ws-walkscore-tile"></div>' +
									'</div>' +
								'</div>';
		}
								
		if(!zppr.data.sold_status.indexOf(single_property.status)>-1){
			
			args = {};
			
			default_homeprice=(zppr.data.sold_status.indexOf(single_property.status)>-1?(single_property.hasOwnProperty('saleprice')?single_property.saleprice:single_property.listprice):single_property.listprice);
			default_taxes_ammount=zppr.checkNested(single_property,'unmapped','PropertyTax')?single_property.unmapped.PropertyTax:'';
			default_interestrate=zppr.checkNested(zppr.data.root,'mortgage','default_interestrate')?zppr.data.root.mortgage.default_interestrate:0;

			args.default_homeprice=default_homeprice;
			
			if(default_interestrate){
				args.default_interestrate = default_interestrate;
			}

			if(default_taxes_ammount){
				args.default_taxes_ammount=default_taxes_ammount;
			}
			
			html +=				'<div class="row zy-widget">' +
									'<div id="zy_mortgage-calculator" class="col-xs-12 col-md-12 col-lg-8 hideonprint">' +
										zppr.mortgage_calculator(args) +
									'</div>' +
								'</div>';
		}
													
		if( agent.id ){
			html+=				'<div class="row zy-widget">' +
									'<div id="ask-a-question-form" class="col-xs-12 col-md-12 col-lg-8">' +
										'<h3 class="zy-listing-contact-title">Ask Agent a Question</h3>' +
										
										'<form id="zpa-modal-contact-agent-form" method="post">';
											
			if( zppr.data.is_login == 0 ){ /* only for non logged in user */
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
														'<label for="listing-contact-phone">Mobile</label>' +
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
												
			if(zppr.data.is_register_form_chaptcha_enabled==1){
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
											'<input type="hidden" name="agent" value="'+ agent.login +'" />' +
											'<input type="hidden" name="actual_link" value="'+ actual_link +'" />' +
											'<input type="hidden" name="ref_page_url" value="'+ ( zppr.data.root.web.hasOwnProperty('ref_page_url') ? zppr.data.root.web.ref_page_url : 0 ) +'" />' +
											'<input type="hidden" name="leadSource" value="'+ ( zppr.data.root.web.hasOwnProperty('lead_source') ? zppr.data.root.web.lead_source : '' ) +'" />';
			if( zppr.data.is_login == 0 ){ /* only for non logged in user */
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
		
		source_disclaimer = single_property.hasOwnProperty('sourceid') ? zppr.get_source_text(single_property.sourceid, {'listOfficeName':single_property.listOfficeName, 'listAgentName': single_property.listAgentName, 'updatedate': single_property.updatedate, 'property': single_property}, 'detail_disclaimer') : false;		
		if(source_disclaimer!=''){
			html+= 							source_disclaimer;
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
		
		html += zppr.print_template(single_property);
		
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
														 /* < div class="owl-carousel top-head-carousel '+ (zppr.data.is_login==0?"needLogin":"") +'"> */
														'<div class="owl-carousel top-head-carousel" aria-label="carousel">';
														
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
														'<div class="left-nav"><i class="icon-left-arrow" role="none"></i>' +
														'</div>' +
														'<div class="right-nav"><i class="icon-right-arrow" role="none"></i>' +
														'</div>' +
													'</div>' +
													'<div class="carousel-controller-wrapper">' +
														'<div class="owl-carousel carousel-controller" aria-label="carousel">';
		
		
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
	slider_template:function(requests, slider_html){
		
		var requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
		
		var html = '';
		
		html+= '<div id="zpa-main-container">';
		
		html+= '<div class="zpa-grid-result slider-container">';
		
		html+= '<div class="slider widget-slider owl-carousel" aria-label="carousel"> ';			
				
		if(slider_html){		
			html+= 	slider_html;
		}
		
		html+= 		'<div class="slider_nav">' +
						'<button class="am-next"><i class="fa fa-caret-left" aria-hidden="true" role="none"></i></button>' +
						'<button class="am-prev"><i class="fa fa-caret-right" aria-hidden="true" role="none"></i></button>' +
					'</div>';
			
			
		html+= '</div>';
		
		html+= '</div>';
		
		html+= '</div>';
		
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
						
						//validate property
						if( ! response.result.hasOwnProperty('property') ){
							var notfound = '<h2>Property Not Found!</h2>';
							jQuery(targetElement).html( notfound );
							document.title = 'Not Found';
							return;
						}
						
						zppr.declare_date_format();
						
						// console.log(response);
						var single_property = response.result.property;
						
						// validate property
						if( single_property.status=='ZA-Del' ){
							var notfound = '<h2>Property Not Found!</h2>';
							jQuery(targetElement).html( notfound );
							document.title = 'Not Found';
							return;
						}
						
						//custom field
						if(single_property){
							single_property['customtype'] = single_property.hasOwnProperty('propsubtype')?single_property.propsubtype:single_property.proptype;
						}
						
						var html = zppr.detail(single_property, actual_link);
						var real_price = zppr.moneyFormat(zppr.data.sold_status.indexOf(single_property.status)>-1?(single_property.hasOwnProperty('saleprice')?single_property.saleprice:single_property.listprice):single_property.listprice);
						var gallery = zppr.gallery_template(single_property);
						var address = zppr.getAddress(single_property);
						if(zppr.data.company_name!='')
							var share_subject = zppr.data.company_name+ ', ' + address;
						else
							var share_subject = address;
						
						jQuery('#zpa-modal-share-email-form .listing-price > span').html(real_price);
						jQuery('#zpa-modal-share-email-form #share-subject').val(share_subject);
						document.title = document.title.replace('Property Title', address);
						
						html = zppr.property_fields(single_property, html);
						jQuery(targetElement).html( html ).promise().done(function(){
							
							(function($){
								
								if( single_property.hasOwnProperty('lat') && single_property.hasOwnProperty('lng') && single_property.lat && single_property.lng ){
									window.initMap=function(){
										
										var myLatLng = {lat: single_property.lat, lng: single_property.lng};

										var map = new google.maps.Map(document.getElementById('map'), {
											zoom: 15,
											center: myLatLng,
											gestureHandling: 'greedy',
										});

										var marker = new google.maps.Marker({
											position: myLatLng,
											map: map,
										});
									}
									
									if(jQuery('#map').length) initMap();
								}
							})(jQuery);
							
							(function($){
								
								if( zppr.data.is_great_school_enabled==1 && single_property.hasOwnProperty('lat') && single_property.hasOwnProperty('lng') && single_property.lat && single_property.lng ){
									jQuery(document).ready(function(){
										var curr_width = jQuery('.greatschool-widget #greatschools').width();
										var gs_iframe = '<iframe className="greatschools" src="//www.greatschools.org/widget/map?searchQuery=&textColor=0066B8&borderColor=DDDDDD&lat='+ single_property.lat +'&lon='+ single_property.lng +'&cityName='+ (single_property.hasOwnProperty('lngTOWNSDESCRIPTION')?single_property.lngTOWNSDESCRIPTION:'') +'&state='+ (single_property.hasOwnProperty('provinceState') ? single_property.provinceState:'') +'&normalizedAddress='+ encodeURI( zppr.getAddress(single_property) ) +'&width='+curr_width+'&height=368&zoom=1" width="'+curr_width+'" height="368" marginHeight="0" marginWidth="0" frameBorder="0" scrolling="no"></iframe>'
										jQuery('#greatschools').html(gs_iframe);
									});
								}
							})(jQuery);
							
							(function($){
								
								if(zppr.data.is_walkscore_enabled==1){
									ws_address = zppr.getAddress(single_property);
									
									$.getScript( "https://www.walkscore.com/tile/show-walkscore-tile.php", function( data, textStatus, jqxhr ) {
									});
								}
							})(jQuery);
							
							(function($){
								function mortgage_format(number){
									number = !jQuery.isNumeric(number) ? number.replace(/[^0-9\.]/g,'') : number;
									number = number ? number : 0;
									// number = parseFloat(number).toLocaleString();
									return zppr.data.currency + number.toString();
								}
								function mortgage_unformat(number){
									number = number ? number.replace(/[^0-9\.]/g,'') : "";
									return number;
								}
								function mortgage_percentage(number){
									number = number ? number : 0;
										
									if(number < 0) number = 0; //min 0
									if(number > 100) number = 100; //max 100
									
									return parseFloat(number)+'%';
								}
								
								jQuery('#zy_mortgage-calculator .price-format').on('keyup', function(event){
									var curr_val = jQuery(this).val();
									var adj_val = mortgage_unformat(curr_val);
									jQuery(this).val(adj_val);
								});
								jQuery('#zy_mortgage-calculator .price-format').focusin(function(){
									var formatted_number = jQuery(this).val();	
									var number = mortgage_unformat(formatted_number);
									jQuery(this).val(number);
								});
								jQuery('#zy_mortgage-calculator .price-format').focusout(function(){					
									var number = jQuery(this).val();	
									var formatted_number = mortgage_format(number);
									jQuery(this).val(formatted_number);
								});	
								jQuery('#zy_mortgage-calculator .percent-format').on('keyup', function(event){
									var curr_val = jQuery(this).val();
									
									var adj_val = mortgage_unformat(curr_val);
									
									if(adj_val < 0) adj_val = 0; //min 0
									if(adj_val > 100) adj_val = 100; //max 100
									
									jQuery(this).val(adj_val);
								});
								jQuery('#zy_mortgage-calculator .percent-format').focusin(function(){
									var formatted_percent_in = jQuery(this).val();
									var percent_in = mortgage_unformat(formatted_percent_in);		
									jQuery(this).val(percent_in);
								});
								jQuery('#zy_mortgage-calculator .percent-format').focusout(function(){		
									var percent_out = jQuery(this).val();
									percent_out = mortgage_percentage(percent_out);
									jQuery(this).val(percent_out);
								});	
								
								jQuery('#mortgage-downpayment').on( 'change', function(){
									var homeprice = jQuery('#mortgage-homeprice').val();
									var downpayment = jQuery(this).val();
									var percent = jQuery('#mortgage-downpayment-percent').val();
									homeprice = mortgage_unformat(homeprice);	
									downpayment = mortgage_unformat(downpayment);
									
									percent = downpayment / homeprice * 100;
									
									jQuery('#mortgage-downpayment-percent').val(mortgage_percentage(percent));
									
									mortgage_calculator_count();
								});
								jQuery('#mortgage-downpayment-percent').on( 'change', function(){
									var homeprice = jQuery('#mortgage-homeprice').val();
									var downpayment = jQuery('#mortgage-downpayment').val();
									var percent = jQuery(this).val();
									homeprice = mortgage_unformat(homeprice);	
									percent = mortgage_unformat(percent);
									
									downpayment = homeprice * percent / 100;
									
									jQuery('#mortgage-downpayment').val(mortgage_format(downpayment));
									
									mortgage_calculator_count();
								});
								jQuery('#mortgage-property-taxes').on( 'change', function(){
									var homeprice = jQuery('#mortgage-homeprice').val();
									var taxes = jQuery(this).val();
									var percent = jQuery('#mortgage-property-taxes-percent').val();
									homeprice = mortgage_unformat(homeprice);	
									taxes = mortgage_unformat(taxes);
									
									percent = taxes / homeprice * 100;
									
									jQuery('#mortgage-property-taxes-percent').val(mortgage_percentage(percent));
									
									mortgage_calculator_count();
								});
								jQuery('#mortgage-property-taxes-percent').on( 'change', function(){
									var homeprice = jQuery('#mortgage-homeprice').val();
									var taxes = jQuery('#mortgage-property-taxes').val();
									var percent = jQuery(this).val();
									homeprice = mortgage_unformat(homeprice);	
									percent = mortgage_unformat(percent);
									
									taxes = homeprice * percent / 100;
									
									jQuery('#mortgage-property-taxes').val(mortgage_format(taxes));
									
									mortgage_calculator_count();
								});
								jQuery('#mortgage-insurance').on( 'change', function(){
									var homeprice = jQuery('#mortgage-homeprice').val();
									var taxes = jQuery(this).val();
									var percent = jQuery('#mortgage-insurance-percent').val();
									homeprice = mortgage_unformat(homeprice);	
									taxes = mortgage_unformat(taxes);
									
									percent = taxes / ( homeprice / 12 ) * 100;
									
									jQuery('#mortgage-insurance-percent').val(mortgage_percentage(percent));
									
									mortgage_calculator_count();
								});
								jQuery('#mortgage-insurance-percent').on( 'change', function(){
									var homeprice = jQuery('#mortgage-homeprice').val();
									var taxes = jQuery('#mortgage-insurance').val();
									var percent = jQuery(this).val();
									homeprice = mortgage_unformat(homeprice);	
									percent = mortgage_unformat(percent);
									
									taxes = ( homeprice / 12 ) * percent / 100;
									
									jQuery('#mortgage-insurance').val(mortgage_format(taxes));
									
									mortgage_calculator_count();
								});
								jQuery('#mortgage-homeowners-insurance').on( 'change', function(){
									var homeprice = jQuery('#mortgage-homeprice').val();
									var taxes = jQuery(this).val();
									var percent = jQuery('#mortgage-homeowners-insurance-percent').val();
									homeprice = mortgage_unformat(homeprice);	
									taxes = mortgage_unformat(taxes);
									
									percent = taxes / ( homeprice / 12 ) * 100;
									
									jQuery('#mortgage-homeowners-insurance-percent').val(mortgage_percentage(percent));
									
									mortgage_calculator_count();
								});
								jQuery('#mortgage-homeowners-insurance-percent').on( 'change', function(){
									var homeprice = jQuery('#mortgage-homeprice').val();
									var taxes = jQuery('#mortgage-homeowners-insurance').val();
									var percent = jQuery(this).val();
									homeprice = mortgage_unformat(homeprice);	
									percent = mortgage_unformat(percent);
									
									taxes = ( homeprice / 12 ) * percent / 100;
									
									jQuery('#mortgage-homeowners-insurance').val(mortgage_format(taxes));
									
									mortgage_calculator_count();
								});
								
								jQuery('.zy-mortgage-calculator #mortgage-homeprice, .zy-mortgage-calculator #mortgage-hoa-dues, .zy-mortgage-calculator #mortgage-interest-rate, .zy-mortgage-calculator select').on( 'change', function(){
									mortgage_calculator_count();
								});
								
								function mortgage_calculator_count(){
									var data = {
										action: 'mortgage_calculator_count',			
										homeprice: jQuery('#mortgage-homeprice').val().replace(/[^0-9\.]/g,''),			
										downpayment: jQuery('#mortgage-downpayment').val().replace(/[^0-9\.]/g,''),			
										downpaymentpercent: parseFloat(jQuery('#mortgage-downpayment-percent').val()),			
										taxes: jQuery('#mortgage-property-taxes').val().replace(/[^0-9\.]/g,''),			
										taxespercent: parseFloat(jQuery('#mortgage-property-taxes-percent').val()),			
										hoadues: jQuery('#mortgage-hoa-dues').val().replace(/[^0-9\.]/g,''),			
										insurance: jQuery('#mortgage-insurance').val().replace(/[^0-9\.]/g,''),			
										insurancepercent: parseFloat(jQuery('#mortgage-insurance-percent').val()),			
										homeowners: jQuery('#mortgage-homeowners-insurance').val().replace(/[^0-9\.]/g,''),			
										homeownerspercent: parseFloat(jQuery('#mortgage-homeowners-insurance-percent').val()),			
										interestrate: parseFloat(jQuery('#mortgage-interest-rate').val()),			
										loantype: jQuery('#mortgage-loan-type').val(),			
									};
									
									jQuery.ajax({
										type: 'POST',
										dataType : 'json',
										url: zipperagent.ajaxurl,
										data: data,
										success: function( response ) {    
											if( response['result'] ){
												
												jQuery('#zy-mortgage-total').html( response['mortgage_total'] );
												jQuery('#zy-mortgage-interest').html( response['mortgage_interest'] );
												jQuery('.zy_mortgage-bar').html( response['mortgage_bar'] );
												jQuery('.mg-detail').html( response['mortgage_detail'] );
											}
										}
									});
								}
								
								mortgage_calculator_count();
								
							})(jQuery);
							
							(function($){
								
								show_related_properties();
								
								function show_related_properties(){
									var vars={
										'apt': single_property.hasOwnProperty('proptype')?single_property.proptype:'',
										'azip': single_property.hasOwnProperty('zipcode')?single_property.zipcode:'',
									};
									var data = {
										action: 'related_properties',
										vars: vars,                
									};
									
									console.time('generate related properties');
									jQuery.ajax({
										type: 'POST',
										dataType : 'json',
										url: zipperagent.ajaxurl,
										data: data,
										success: function( response ) {
											if( response ){					
												jQuery( '#zy_related-properties' ).html( response['html'] );
												jQuery( '#zy_related-properties' ).fadeIn();
											}
											
											console.timeEnd('generate related properties');
										},
										error: function(){
											console.timeEnd('generate related properties');
										}
									});
								}
							})(jQuery);
						});
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
									navText:['<i class="icon-left-arrow" role="none"></i>', '<i class="icon-right-arrow" role="none"></i>'],
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
								
								
								if( zppr.data.is_login == 0 ){ /* only for non logged in user */
								
									var count=zppr.data.za_image_clicked;
									var limit=zppr.data.za_slider_limit_popup;
									var preventDouble=0;
									$topHeadCarousel.on('changed.owl.carousel', function(event) {
										
										if(preventDouble){
											preventDouble=0;
											return;
										}
										
										count++;			
										ajax_image_count(count);		
										// if(count>=limit && limit != 0 && $topHeadCarousel.hasClass('needLogin')){
										if(count>=limit && limit != 0 && zppr.data.is_login == 0){
											jQuery('#needLoginModal:not(.loggedIn)').modal('show');
											if(zppr.data.za_signup_optional==1){
												set_popup_is_triggered();
											}
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
								}
								
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
		var anycrit = args.hasOwnProperty('anycrit') ? args.anycrit : '';
		var order = args.hasOwnProperty('model') ? args.model : '';
			order = args.hasOwnProperty('order') ? args.order : order;
			order = order.replace(/%253A/g, ":").replace(/%3A/g, ":");
		var sidx = args.hasOwnProperty('sidx') ? args.sidx : '';
		var ps = args.hasOwnProperty('ps') ? args.ps : '';
		var contactId = args.hasOwnProperty('contactId') ? args.contactId : '';
		var micro = args.hasOwnProperty('micro') ? args.micro : '';
		
		var view = requests.hasOwnProperty('view')?requests['view']:''
		
		parm.push(searchType,subdomain,customer_key,crit,order,sidx,ps,contactId,'','','','','','',anycrit);
		
		switch(resultType){
			case "list":			
				console.time('generate list');
				break;
			case "map_marker":			
				console.time('generate map markers');
				break;
			case "slider":			
				console.time('generate slider');
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
					
					response=JSON.parse(this.responseText);
					
					console.log(response);
					if(response.responseCode===200){					
						
						switch(resultType){
							case "list":
								
								switch(view){
									
									case "map":
										var html_grid='';
										var html_list='';
										var html_table='';
										var html_print='';
										
										if(response.result.hasOwnProperty('filteredList')){
											var column = 2;									
											var wrapOpen=0;
											var i=0;
											
											var prt_column = 2;
											var prt_wrapOpen = 0;

											for (const [key, value] of Object.entries(response.result.filteredList)) {
												
												/* for listing */
												if(i % column ==0 && ! wrapOpen){
													html_grid += '<div class="zpa-grid-wrap">';
													wrapOpen=1;
												}
												
												// html_grid += zppr.one_property(value, column);
												html_grid += zppr.one_property_w_slider(value, column, i, wrapOpen);
												
												if( ((i % column) >= (column-1) && wrapOpen  //if one line has reach prop limit close the div
													  || (i+1==response.result.filteredList.length && wrapOpen ) ) //if last prop reached close the div
													  && ! zppr.is_mobile() ){
													
													html_grid +=		'<div class="clearfix"></div>' +
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
											
											i = 0;
											for (const [key, property] of Object.entries(response.result.filteredList)) {
											
												/* $saved_crit=$search;
												$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
												if(!empty($searchId)){
													$query_args['searchId']= $searchId;
												}
												if(zp_using_criteria() && !empty($critBase64)){
													$query_args['criteria']= $critBase64;
												}
												if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
													$query_args['newsearchbar']= 1;
												} */
											
												var fulladdress = zppr.getAddress(property);
												var lat = property.lat;
												var lng = property.lng;
												var listingId = property.id;
												var beds = zppr.get_nobedrooms(property);
												var bath = zppr.get_nobaths(property);
												var sqft = zppr.get_sqft(property);
												var price=(zppr.data.sold_status.indexOf(property.status)>-1?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
													price =  zppr.moneyFormat(price);
											
												single_url = zppr.getPropUrl(listingId,fulladdress);
	
												searchId='';
												str_contactIds=zppr.data.contactIds.join();
											
												var enable_rebate = zppr.data.display_buyerrebate_amount;
												var rebate_prefix =  zppr.data.buyerrebate_amount_prefix;
												var rebate_default_text =  zppr.data.emptybuyerrebate_amount_text;
												
												html_list += zppr.one_property_list(property, i);

												html_table +=	'<tr data-link="'+ single_url +'" data-index="'+ i +'">' +
																	'<td><span class="status-wrap" title="'+ (zppr.get_status_name(property.hasOwnProperty('status')?property.status:'', property.hasOwnProperty('sourceid')?property.sourceid:'').toUpperCase()) +'">'+ (zppr.get_status_name(property.hasOwnProperty('status')?property.status:'', property.hasOwnProperty('sourceid')?property.sourceid:'').toUpperCase()) +'</span></td>' +
																	'<td><span class="address-wrap" title="'+ fulladdress +'">'+ fulladdress +'</span></td>' +
																	'<td><span class="town-wrap" title="'+ (property.hasOwnProperty('lngTOWNSDESCRIPTION')?property.lngTOWNSDESCRIPTION:'') +'">'+ (property.hasOwnProperty('lngTOWNSDESCRIPTION')?property.lngTOWNSDESCRIPTION:'') +'</span></td>' +
																	'<td>'+ price +'</td>' +
																	'<td>'+ beds +'</td>' +
																	'<td>'+ bath +'</td>' +
																	'<td>'+ sqft +'</td>' +
																	'<td>'+ (property.hasOwnProperty('dayssincelisting')?property.dayssincelisting + ' ' + ( property.dayssincelisting > 1 ? 'days':'day') :'-') +' </td>' +
																	'<td><a class="listing-'+ property.id +' save-favorite-btn '+ (zppr.is_favorite(property.id)?"active":"") +'" isLogin="'+ zppr.data.is_login  +'" listingId="'+ property.id +'" searchId="'+ searchId +'" contactId="'+ str_contactIds +'" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart-o" aria-hidden="true" role="none"></i></a></td>' +
																'</tr>';

											
												i++;
											}
											
											zppr.save_session(zppr.api_path(searchType), response.result, actual_link);
										}
										
										// var html = zppr.list_map_view_template(requests, html_grid, is_view_save_search);
										var html = zppr.list_map_view_template_new(requests, html_grid, html_list, html_table, is_view_save_search);
										html_print = zppr.list_print(requests, html_print);
										
										jQuery(targetElement).html( html );
										jQuery(targetElement).append( html_print );
										
										zppr.list_map_view_generate_markers('#map_canvas', actual_link, requests);
										
										args.searchType=1;
										zppr.search('.zpa-listing-search-results', 'count', requests, args, actual_link, is_view_save_search);
										
										jQuery(document).ready(function(){
											jQuery(window).bind( 'scroll', function() {		
		
												var $sticky = jQuery('.result-control');
												var $top = 0;
			
												if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){ //Conall
													// var $headerHeight = jQuery('.edgtf-fixed-wrapper').outerHeight();
													var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
														$top = $top + $headerHeight;
												}else if(jQuery('#main-header.et-fixed-header').length){ //Divi
													var $topheaderHeight = jQuery('#top-header.et-fixed-header').outerHeight();
													var $headerHeight = jQuery('#main-header.et-fixed-header').outerHeight();
														$top = $top + $topheaderHeight + $headerHeight;
												}else if(jQuery('body.et_fixed_nav #main-header').length){ //Divi new
													var $topheaderHeight = jQuery('body.et_fixed_nav #top-header').outerHeight();
													var $headerHeight = jQuery('body.et_fixed_nav #main-header').outerHeight();
														$top = $top + $topheaderHeight + $headerHeight;
												}else{
													var $headerHeight = 0;
														$top = $top + $headerHeight;
												}
												if(jQuery('#wpadminbar').length){
													var $wpadminbarHeight = jQuery('#wpadminbar').outerHeight();
														$top = $top + $wpadminbarHeight;
												}
			
												$detailPaddingTop = jQuery('#omnibar-tools').length ? jQuery('#omnibar-tools').outerHeight() : 0;
												$detailPaddingTop = jQuery('.map-legend-wrap').length ? $detailPaddingTop + jQuery('.map-legend-wrap').outerHeight() : $detailPaddingTop;
			
												$top = $top + $detailPaddingTop;
			
			
												var $stickyH = $sticky.outerHeight();
												var $stickyContainer = jQuery('#property-sidebar');
												var $stickyContainerOffset = $stickyContainer.offset();
												var $start = $stickyContainerOffset.top;
												var $limit = $start + $stickyContainer.outerHeight();
												var $padding = 30; // padding size;
												var $maxWidth = $stickyContainer.outerWidth() - $padding;
			
												if(jQuery(window).width() > 768){
												   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
													   $sticky.css({
														   'position':'fixed', 
														   'top': $top,
														   'width': '100%',
														   'max-width': $maxWidth,
														   'bottom':'auto',
														   'z-index': '5',
														   'background': '#ffffff',
													   });
				   
													   $stickyContainer.find('#map-list-content').css({
														   'padding-top': $detailPaddingTop - 10,
													   });
				   
												   } 
												   else if (jQuery(window).scrollTop() > $limit - $stickyH - $top) {
													   $sticky.css({
														   'position': 'absolute',
														   'top'     : 'auto',
														   'bottom'  : 0,
													   });
												   }
												   else {
														$sticky.css({
															'position' : 'static',
															'max-width' : '100%',
														});
				   
														$stickyContainer.find('#map-list-content').css({
														   'padding-top': 0,
														});
					
														$maxWidth = $stickyContainer.outerWidth();
												   }
												}
											});
										});
										
										jQuery(document).ready(function(){
											jQuery(window).bind( 'scroll', function() {		
		
												var $sticky = jQuery('#list-view .top-section');
												var $top = 0;
			
												if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){ //Conall
													// var $headerHeight = jQuery('.edgtf-fixed-wrapper').outerHeight();
													var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
														$top = $top + $headerHeight;
												}else if(jQuery('#main-header.et-fixed-header').length){ //Divi
													var $topheaderHeight = jQuery('#top-header.et-fixed-header').outerHeight();
													var $headerHeight = jQuery('#main-header.et-fixed-header').outerHeight();
														$top = $top + $topheaderHeight + $headerHeight;
												}else if(jQuery('body.et_fixed_nav #main-header').length){ //Divi new
													var $topheaderHeight = jQuery('body.et_fixed_nav #top-header').outerHeight();
													var $headerHeight = jQuery('body.et_fixed_nav #main-header').outerHeight();
														$top = $top + $topheaderHeight + $headerHeight;
												}else{
													var $headerHeight = 0;
														$top = $top + $headerHeight;
												}
												if(jQuery('#wpadminbar').length){
													var $wpadminbarHeight = jQuery('#wpadminbar').outerHeight();
														$top = $top + $wpadminbarHeight;
												}
			
												$omnibar = jQuery('#omnibar-tools').length ? jQuery('#omnibar-tools').outerHeight() : 0;
												$omnibar = jQuery('.map-legend-wrap').length ? $omnibar + jQuery('.map-legend-wrap').outerHeight() : $omnibar;
			
												$top = $top + $omnibar;
			
												$navigation = jQuery('.result-control').length ? jQuery('.result-control').outerHeight() : 0;
												$highlight = jQuery('.top-section').length ? jQuery('.top-section').outerHeight() : 0;
			
												$top = $top + $navigation;
			
												var $stickyH = $sticky.outerHeight();
												var $stickyContainer = jQuery('#property-sidebar');
												var $stickyContainerOffset = $stickyContainer.offset();
												var $start = $stickyContainerOffset.top;
												var $limit = $start + $stickyContainer.outerHeight();
												var $padding = 30; // padding size;
												var $maxWidth = $stickyContainer.outerWidth() - $padding;
			
												if(jQuery(window).width() > 768){
												   if (jQuery(window).scrollTop() > $start - $top + $navigation && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
													   $sticky.css({
														   'position':'fixed', 
														   'top': $top,
														   'width': '100%',
														   'max-width': $maxWidth,
														   'bottom':'auto',
														   'z-index': '5',
														   'background': '#ffffff',
													   });
				   
													   $stickyContainer.find('.bottom-section').css({
														   'padding-top': $highlight,
													   });
				   
												   } 
												   else if (jQuery(window).scrollTop() > $limit - $stickyH - $top) {
													   $sticky.css({
														   'position': 'absolute',
														   'top'     : 'auto',
														   'bottom'  : 0,
													   });
												   }
												   else {
														$sticky.css({
															'position' : 'static',
															'max-width' : '100%',
														});
				   
														$stickyContainer.find('.bottom-section').css({
														   'padding-top': 0,
														});
												   }
												}
											});
										});
										
										jQuery(document).ready(function(){
											jQuery('.table-view tbody tr').on( 'click', function(){
												var index = jQuery(this).data('index');
							
												jQuery('.property-highlight .zpa-grid-result').addClass('hide');
												jQuery('.property-highlight .zpa-grid-result[index="'+ index +'"]').removeClass('hide');
											});
										});
										
										console.timeEnd('generate list');
										break;
									case "photo":
											
										var html='';
										var html_sidebar='';
										var html_main='';
										var html_print='';
										
										if(response.result.hasOwnProperty('filteredList')){
											var i=0;
											
											var prt_column = 2;
											var prt_wrapOpen = 0;

											for (const [key, value] of Object.entries(response.result.filteredList)) {
												
												/* for sidebar */										
												html_sidebar += zppr.one_property_sidebar(value, i);
												
												/* for main content */										
												html_main += zppr.one_property_with_photo_slider(value, i);
												
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
											
											zppr.save_session(zppr.api_path(searchType), response.result, actual_link);
										}
										
										html = zppr.list_photo_view_template(requests, html_main, html_sidebar, is_view_save_search);
										html_print = zppr.list_print(requests, html_print);
										
										jQuery(targetElement).html( html );
										jQuery(targetElement).append( html_print );
										
										zppr.list_photo_scroll_script();
										
										args.searchType=1;
										zppr.search('.zpa-listing-search-results', 'count', requests, args, actual_link, is_view_save_search);
										
										console.timeEnd('generate list');
										
										
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
													navText: ['<a class="slider-left"><span class="carousel-control"><i class="fa fa-2x fa-chevron-left" role="none"></i></span></a>','<a class="slider-right"><span class="carousel-control"><i class="fa fa-2x fa-chevron-right" role="none"></i></span></a>'],
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
										break;
									case "gallery":
									default:
											
										var html='';
										var html_print='';
										
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
												
												// html += zppr.one_property(value, column);
												html += zppr.one_property_w_slider(value, column, i, wrapOpen);
												
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
											
											zppr.save_session(zppr.api_path(searchType), response.result, actual_link);
										}
										
										html = zppr.list_template(requests, html, is_view_save_search);
										html_print = zppr.list_print(requests, html_print);
										
										jQuery(targetElement).html( html );
										jQuery(targetElement).append( html_print );
										
										args.searchType=1;
										zppr.search('.zpa-listing-search-results', 'count', requests, args, actual_link, is_view_save_search);
										
										console.timeEnd('generate list');
										break;
								}
							break;	
							case "slider":								
																			
								var html='';
								var mobile_item = requests.hasOwnProperty('mobile_item') ? parseInt(requests.mobile_item) : 1;
								var tablet_item = requests.hasOwnProperty('tablet_item') ? parseInt(requests.tablet_item) : 1;
								var desktop_item = requests.hasOwnProperty('desktop_item') ? parseInt(requests.desktop_item) : 1;
								var loop = requests.hasOwnProperty('loop') ? parseInt(requests.loop) : 0;
								var autoplay = requests.hasOwnProperty('autoplay') ? parseInt(requests.autoplay) : 0;
								
								if(response.result.hasOwnProperty('filteredList')){

									for (const [key, value] of Object.entries(response.result.filteredList)) {
										
										html += zppr.one_slider(value);
									}
									
									zppr.save_session(zppr.api_path(searchType), response.result, actual_link);
								}
								
								if( ! html ){
									if( requests.hasOwnProperty('aloff') && requests.aloff ){			
										html = '<p class="no-property">There is no featured Properties</p>';				
									}else{			
										html = '<p class="no-property">no related properties</p>';										
									}
								}else{
									html = zppr.slider_template(requests, html);
								}
								
								jQuery(targetElement).html( html );
								
								jQuery(document).ready(function ($) {
									// reference for main items
									var mainSlider=new Array();
									//transition time in ms
									var duration = 500;
									var index=0;
									
									index=0;
									$('.widget-slider').each(function(){
										var slider = $(this);
										mainSlider.push(slider);
									});
									
									// carousel function for main slider
									index=0;
									$('.widget-slider').each(function(){
										
										var tempMainSlider = mainSlider[index];
										
										tempMainSlider.owlCarousel({
											loop: loop,
											nav:true,
											navText: [$('.am-next'),$('.am-prev')],
											lazyLoad:true,
											margin:15,
											controlsClass:"owl-controls",
											responsive:{
												0:{
													items: mobile_item,
												},
												768:{
													items: tablet_item,
												},
												1200:{
													items: desktop_item,
												}
											},
											autoplay: autoplay,
										})
										
										index++;
									});
								});
								
								console.timeEnd('generate slider');
							break;								
							case "map_marker":								
								
								if(response.result.hasOwnProperty('filteredList')){
									
									zppr.save_session(zppr.api_path(searchType), response.result, actual_link);
								}
								
								html = zppr.list_map_marker_script(response, requests);
								html = zppr.list_map_scroll_script();
								
								console.timeEnd('generate map markers');
							break;								
							case "poc":
									
								var html='';
								var html_print='';
								
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
										
										// html += zppr.one_property(value, column);
										html += zppr.one_property_w_slider(value, column, i, wrapOpen);
										
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
									
									zppr.save_session(zppr.api_path(searchType), response.result, actual_link);
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
								jQuery(targetElement + ' .prop-pagination').html( '<div class="col-xs-12">' + html_pagination + '</div>' );
								console.timeEnd('generate list count/pagination');
							break;
						}
						
						jQuery(document).ready(function ($) {
							// reference for main items
							var mainSlider=new Array();
							//transition time in ms
							var duration = 500;
							var index=0;
	
							index=0;
							$('.photo-carousel').each(function(){
								var slider = $(this);
								mainSlider.push(slider);
							});
							index=0;
	
							// carousel function for main slider
							index=0;
							$('.photo-carousel').each(function(){
		
								var tempMainSlider = mainSlider[index];
		
								// console.log('current index: '+index);
								tempMainSlider.owlCarousel({
									loop:false,
									nav:true,
									navText: ['<a class="slider-left"><span class="carousel-control"><i class="fa fa-2x fa-angle-left" role="none"></i></span></a>','<a class="slider-right"><span class="carousel-control"><i class="fa fa-2x fa-angle-right" role="none"></i></span></a>'],
									lazyLoad:true,
									items:1,
									dots: false,
									slideBy: 1,
								}).on('changed.owl.carousel', function (e) {
									//On change of main item to trigger thumbnail item
			
									//These two are navigation for main items
								})
		
								index++;
							});
						});
						
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
		var nobedrooms = zppr.get_nobedrooms(property);
		var nobaths = zppr.get_nobaths(property);
		var sqft = zppr.get_sqft(property);
		var beds_html = '<div class="zpa-grid-result-basic-info-item1"> <b>'+ nobedrooms +'</b> <span> beds </span> </div>';
		var bath_html = '<div class="zpa-grid-result-basic-info-item2"> <b>'+ nobaths +' </b> <span> baths </span> </div>'
		var sqft_html = '<div class="zpa-grid-result-basic-info-item3"> <b> '+ sqft +' </b> <span> sqft </span> </div>';
		
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
		
		var is_favorite=zppr.is_favorite(property.id)?"active":""; //'active'
		var searchid='';
		
		infos = '';
		infoscount=0;
		
		if( nobedrooms !== '' && nobedrooms > 0 ){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							beds_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if( nobaths !== '' && nobaths > 0 ){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							bath_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if( sqft !== '' && parseInt(sqft) > 0 ){
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
			albums+='<a href="#" data-toggle="modal" data-target="#modal-'+ listingid +'" listingid="'+ listingid +'"> <i class="glyphicon glyphicon-camera" role="none"></i> </a> <span class="photo-count">('+ img_count +')</span>' +
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
			albums+='<i class="glyphicon glyphicon-camera" role="none"></i> <span class="photo-count">(0)</span>';
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
		var source_details=property.sourceid ? zppr.get_source_text(property.sourceid, {'listOfficeName':property.listOfficeName, 'listAgentName': property.listAgentName, 'property': property}, 'list' ) : false;
		if(source_details){
			property_source+='<div class="property-source">' +
								source_details +
							'</div>';
		}
		
		var enable_rebate = zppr.data.display_buyerrebate_amount;
		var rebate_prefix =  zppr.data.buyerrebate_amount_prefix;
		var rebate_default_text =  zppr.data.emptybuyerrebate_amount_text;
		
		var rebate_badge_html = '';
		
		if( enable_rebate ){
			
			var rebate_price = '';

			if( property.hasOwnProperty('buyerRebate') && property.buyerRebate ){				
				rebate_price = zppr.moneyFormat(property.buyerRebate);
			}else{
				rebate_price = rebate_default_text;
			}
			
			rebate_badge_html = '<div class="badge-rebate">' +
									'<span class="rebate-price">' +
										rebate_price +
									'</span>' +
									'<span class="rebate-prefix">'+ rebate_prefix +'</span>' +
								'</div>';
		}
		
		var html = '<div class="zpa-grid-result '+ columns_code +'">' +
					'<div class="zpa-grid-result-container well">' +
						'<div class="row">' +
							'<div class="col-xs-12">' +
								'<div style="background-image: url(\''+ img_url +'\');" class="zpa-results-grid-photo">' +
									rebate_badge_html +
									(property.startDate || property.openHouses ? '<span class="badge-open-house">Open House</span>' : '') +
									'<a class="listing-'+ listingid +' save-favorite-btn '+ is_favorite +'" isLogin="'+ zppr.data.is_login +'" listingid="'+ listingid +'" searchid="'+ searchid +'" contactid="'+ zppr.data.contactIds +'" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true" role="none"></i></a>' +
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
											'<span class="text-center d-block">'+ zppr.get_status_name(status, property.sourceid).toUpperCase() +'</span>' +
										'</div>' +
									'</div>' +
								'</div>' +
								'<div class="'+ ( column==4 ? 'col-xs-5 nopaddingleft' : 'col-xs-4' ) +'">' +
									'<span class="zpa-on-site pull-right"> <i class="fa fa-calendar" aria-hidden="true" role="none"></i> '+ days +' Day(s)  </span>' +
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
									'<div class="zpa-grid-result-mlsnum-proptype">'+ displaySource +'#'+ property.listno +' | '+ zppr.list_proptype(property) +' </div>' +
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
	one_property_w_slider:function(property, column, i, wrapOpen){
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
		var nobedrooms = zppr.get_nobedrooms(property);
		var nobaths = zppr.get_nobaths(property);
		var sqft = zppr.get_sqft(property);
		var beds_html = '<div class="zpa-grid-result-basic-info-item1"> <b>'+ nobedrooms +'</b> <span> beds </span> </div>';
		var bath_html = '<div class="zpa-grid-result-basic-info-item2"> <b>'+ nobaths +' </b> <span> baths </span> </div>'
		var sqft_html = '<div class="zpa-grid-result-basic-info-item3"> <b> '+ sqft +' </b> <span> sqft </span> </div>';
		
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
		
		var is_favorite=zppr.is_favorite(property.id)?"active":""; //'active'
		var searchid='';
		
		infos = '';
		infoscount=0;
		
		if( nobedrooms !== '' && nobedrooms > 0 ){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							beds_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if( nobaths !== '' && nobaths > 0 ){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							bath_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if( sqft !== '' && parseInt(sqft) > 0 ){
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
			albums+='<a href="#" data-toggle="modal" data-target="#modal-'+ listingid +'" listingid="'+ listingid +'"> <i class="glyphicon glyphicon-camera" role="none"></i> </a> <span class="photo-count">('+ img_count +')</span>' +
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
			albums+='<i class="glyphicon glyphicon-camera" role="none"></i> <span class="photo-count">(0)</span>';
		}
		
		var openhouses='';
		
		if(property.hasOwnProperty('startDate') && property.startDate){
			
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
		}else if(property.hasOwnProperty('openHouses') && property.openHouses && property.openHouses.length ){
			
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
		var source_details=property.sourceid ? zppr.get_source_text(property.sourceid, {'listOfficeName':property.listOfficeName, 'listAgentName': property.listAgentName, 'property': property}, 'list' ) : false;
		if(source_details){
			property_source+='<div class="property-source">' +
								source_details +
							'</div>';
		}
		
		var enable_rebate = zppr.data.display_buyerrebate_amount;
		var rebate_prefix =  zppr.data.buyerrebate_amount_prefix;
		var rebate_default_text =  zppr.data.emptybuyerrebate_amount_text;
		
		var rebate_badge_html = '';
		
		if( enable_rebate ){
			
			var rebate_price = '';

			if( property.hasOwnProperty('buyerRebate') && property.buyerRebate ){				
				rebate_price = zppr.moneyFormat(property.buyerRebate);
			}else{
				rebate_price = rebate_default_text;
			}
			
			rebate_badge_html = '<div class="badge-rebate">' +
									'<span class="rebate-price">' +
										rebate_price +
									'</span>' +
									'<span class="rebate-prefix">'+ rebate_prefix +'</span>' +
								'</div>';
		}
		
		var html = '<div class="zpa-grid-result '+ columns_code +'" index="'+ i +'" wrap="'+ (wrapOpen ? 'open' : 'closed') +'">' +
					'<div class="zpa-grid-result-container well">' +
						'<div class="row">' +
							'<div class="col-xs-12">';
								
		html +=					'<div class="slider-container">' +
									'<!--Main Slider Start-->' +
									'<div class="slider photo-carousel owl-carousel" aria-label="carousel">'
		
		if( property.hasOwnProperty('photoList' ) && property.photoList.length){
			var index=0;
			for (const [key, pic] of Object.entries(property.photoList)) {
				if( pic.imgurl.includes('mlspin.com') ){								
					html +=				'<div style="background-image: url("//media.mlspin.com/photo.aspx?mls='+ property.listno + '&w=500&h=300&n='+ index +'");" class="item '+ ( index==0 ? "active" : "" ) + ' zpa-results-grid-photo" ><a class="property_url" href="'+ prop_url +'"></a></div>';
				} else {
					html +=				'<div style="background-image: url('+ (pic.imgurl ? pic.imgurl.replace('http://','//') : zppr.data.plugin_url + 'images/no-photo.jpg' ) +');" class="item '+ ( index==0 ? "active" : "" ) +' zpa-results-grid-photo" ><a class="property_url" href="'+ prop_url +'"></a></div>';
				} 
				index++;
			}
		} else {
			html +=						'<div style="background-image: url('+ zppr.data.plugin_url + 'images/no-photo.jpg);" class="item '+ ( index==0 ? "active" : "" ) + ' zpa-results-grid-photo" ><a class="property_url" href="'+ prop_url +'"></a></div>';
		}
														
		html +=						'</div>' +
									'<!--Main Slider End-->' +								
									rebate_badge_html +
									(property.startDate || property.openHouses ? '<span class="badge-open-house">Open House</span>' : '') +
									'<a class="listing-'+ listingid +' save-favorite-btn '+ is_favorite +'" isLogin="'+ zppr.data.is_login +'" listingid="'+ listingid +'" searchid="'+ searchid +'" contactid="'+ zppr.data.contactIds +'" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true" role="none"></i></a>' +
									'<span class="zpa-for-sale-price"> '+ zppr.moneyFormat(price) +' </span>' +
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
											'<span class="text-center d-block">'+ zppr.get_status_name(status, property.sourceid).toUpperCase() +'</span>' +
										'</div>' +
									'</div>' +
								'</div>' +
								'<div class="'+ ( column==4 ? 'col-xs-5 nopaddingleft' : 'col-xs-4' ) +'">' +
									'<span class="zpa-on-site pull-right"> <i class="fa fa-calendar" aria-hidden="true" role="none"></i> '+ days +' Day(s)  </span>' +
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
									'<div class="zpa-grid-result-mlsnum-proptype">'+ displaySource +'#'+ property.listno +' | '+ zppr.list_proptype(property) +' </div>' +
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
	one_property_list:function(property, i){
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
		var nobedrooms = zppr.get_nobedrooms(property);
		var nobaths = zppr.get_nobaths(property);
		var sqft = zppr.get_sqft(property);
		
		var is_favorite=zppr.is_favorite(property.id)?"active":""; //'active'
		var searchid='';
		var str_contactIds=zppr.data.contactIds.join();
		
		var hide_streetnumber=0;
		var rnhidestreetno = zppr.data.root.web.hasOwnProperty('rnhidestreetno')?zppr.data.root.web.rnhidestreetno:0;
		if( rnhidestreetno && property.hasOwnProperty('proptype') && property.proptype=="RN" ){
			hide_streetnumber=1;
		}
		
		var openhouses='';
		
		if(property.hasOwnProperty('startDate') && property.startDate){
			
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
		}else if(property.hasOwnProperty('openHouses') && property.openHouses && property.openHouses.length ){
			
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
		var source_details=property.sourceid ? zppr.get_source_text(property.sourceid, {'listOfficeName':property.listOfficeName, 'listAgentName': property.listAgentName, 'property': property}, 'list' ) : false;
		if(source_details){
			property_source+='<div class="property-source">' +
								source_details +
							'</div>';
		}
		
		var enable_rebate = zppr.data.display_buyerrebate_amount;
		var rebate_prefix =  zppr.data.buyerrebate_amount_prefix;
		var rebate_default_text =  zppr.data.emptybuyerrebate_amount_text;
		
		var rebate_badge_html = '';
		
		if( enable_rebate ){
			
			var rebate_price = '';

			if( property.hasOwnProperty('buyerRebate') && property.buyerRebate ){				
				rebate_price = zppr.moneyFormat(property.buyerRebate);
			}else{
				rebate_price = rebate_default_text;
			}
			
			rebate_badge_html = '<div class="badge-rebate">' +
									'<span class="rebate-price">' +
										rebate_price +
									'</span>' +
									'<span class="rebate-prefix">'+ rebate_prefix +'</span>' +
								'</div>';
		}
		

		html =	'<div class="zpa-grid-result row '+ (i!=0?'hide':'') +'" index="'+ i +'">' +
					'<div class="zpa-grid-result-container well col-xs-6">' +
						'<div class="row">' +
							'<div class="col-xs-12">' +
								'<div class="slider-container">' +
									'<!--Main Slider Start-->' +
									'<div class="slider photo-carousel owl-carousel" aria-label="carousel">';
		
		if( property.hasOwnProperty('photoList' ) && property.photoList.length){
			var index=0;
			for (const [key, pic] of Object.entries(property.photoList)) {
				if( pic.imgurl.includes('mlspin.com') ){								
					html +=				'<div style="background-image: url("//media.mlspin.com/photo.aspx?mls='+ property.listno + '&w=500&h=300&n='+ index +'");" class="item '+ ( index==0 ? "active" : "" ) + ' zpa-results-grid-photo" ><a class="property_url" href="'+ prop_url +'"></a></div>';
				} else {
					html +=				'<div style="background-image: url('+ (pic.imgurl ? pic.imgurl.replace('http://','//') : zppr.data.plugin_url + 'images/no-photo.jpg' ) +');" class="item '+ ( index==0 ? "active" : "" ) +' zpa-results-grid-photo" ><a class="property_url" href="'+ prop_url +'"></a></div>';
				} 
				index++;
			}
		} else {
			html +=						'<div style="background-image: url('+ zppr.data.plugin_url + 'images/no-photo.jpg);" class="item '+ ( index==0 ? "active" : "" ) + ' zpa-results-grid-photo" ><a class="property_url" href="'+ prop_url +'"></a></div>';
		}
							
		html +=						'</div>' +
									'<!--Main Slider End-->' +
					
									rebate_badge_html +
									(property.hasOwnProperty('startDate') || property.hasOwnProperty('openHouses') ? '<span class="badge-open-house">Open House</span>' : '') +
					
									'<div class="span-bg">' +
										'<div class="prop-detail">' +
											'<span class="zy_price"> '+ zppr.moneyFormat(price) +' </span>' +
											'<h1>' +
												'<p class="zy_address-style"><span itemprop="streetAddress">'+ ( !hide_streetnumber ? property.streetno : '' ) +' '+ (property.hasOwnProperty('streetname')?zppr.streetname_fix_comma(property.streetname):'') +' '+ (property.hasOwnProperty('unitno')?'#'+property.unitno:'') +'</span></p>' +
												'<p class="zy_subaddress-style">' +
													'<span itemprop="addressLocality"> '+ ( property.hasOwnProperty('lngTOWNSDESCRIPTION') && property.lngTOWNSDESCRIPTION ? property.lngTOWNSDESCRIPTION + ',':'' ) +' </span>' +
													'<span itemprop="addressRegion"> '+ (property.hasOwnProperty('provinceState')?property.provinceState:'') +'</span>' +
													'<span itemprop="postalCode"> '+ (property.hasOwnProperty('zipcode')?property.zipcode:'') +' </span>';

	
		if( property.hasOwnProperty('sourceid') && property.sourceid == 1 && property.hasOwnProperty('shrtAREACODE') ){
			html +=									'<span>('+ property.shrtAREACODE +')</span>';
		}
										
		html +=									'</p>' +			
											'</h1>' +
										'</div>' +
										'<div class="prop-spaces">' +
											'<ul>';
		if( nobedrooms!= '' && nobedrooms > 0 ){
			html +=								'<li>' +
													'<b>'+ nobedrooms +'</b>' +
													'<span> beds </span' +
												'</li>';
		}
		if( nobaths != '' && nobaths > 0 ){
			html +=								'<li>' +
													'<b>'+ nobaths +'</b>' +
													'<span> baths </span>' +
												'</li>';
		}
		if( sqft != '' && sqft > 0 ){
			html +=								'<li>' +
													'<b>'+ sqft +'</b>' +
													'<span> sqft </span>' +
												'</li>';
		}
		html +=								'</ul>' +
										'</div>' +
									'</div>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div style="clear:both"></div>' +
					'</div>' +
					'<div class="prop-infos col-xs-6">' +
						'<div class="prop-remarks">' +
							zppr.trim_chars( property.remarks, 100, '<a href="'+ single_url +'"> More</a>' ) +
						'</div>' +
						'<div class="prop-amenities">' +
						  '<ul class="section-1">' +
							'<li class="">' +
							  '<span class="title">$/Sq. Ft.</span>' +
							  '<span class="value">'+ ( property.hasOwnProperty('squarefeet') && property.squarefeet > 0 ? zppr.formatNumber(property.squarefeet) : '-' ) +'</span>' +
							'</li>' +
							'<li class="">' +
							  '<span class="title">On site</span>' +
							  '<span class="value">'+ ( property.hasOwnProperty('dayssincelisting')? ( property.hasOwnProperty('dayssincelisting')?property.dayssincelisting:'—') + ' Day(s)' : '' ) + '</span>' +
							'</li>' +
							'<li class="">' +
							  '<span class="title">HOA</span>' +
							  '<span class="value">'+ ( property.hasOwnProperty('hoafee') ? zppr.numberFormat(property.hoafee) : '—' ) +'</span>' +
							'</li>' +
						  '</ul>' +
						  '<ul class="section-2">' +
							'<li class="">' +
							  '<span class="title">Year Built</span>' +
							  '<span class="value">'+ ( property.hasOwnProperty('yearbuilt') ? property.yearbuilt : '—' ) +'</span>' +
							'</li>' +
							'<li class="">' +
							  '<span class="title">Lot Size</span>' +
							  '<span class="value">'+ ( property.hasOwnProperty('lotsize') ? property.lotsize : '—' ) +'</span>' +
							'</li>' +
							'<li class="">' +
							  '<span class="title">Status</span>' +
							  '<span class="value" title="'+ ( zppr.get_status_name(property.hasOwnProperty('status')?property.status:'', property.hasOwnProperty('sourceid')?property.sourceid:'') ) +'">'+ ( zppr.get_status_name(property.hasOwnProperty('status')?property.status:'', property.hasOwnProperty('sourceid')?property.sourceid:'') ) +'</span>' +
							'</li>' +
						  '</ul>' +
						'</div>' +
						'<div class="open-house">' +
							openhouses +
						'</div>' +
						'<div class="action-bar">' +
							'<div class="col-xs-6">' +
								'<a class="listing-'+ property.id +' save-favorite-btn '+ is_favorite +'" isLogin="'+ zppr.data.is_login +'" listingId="'+ property.id +'" searchId="'+ searchId +'" contactId="'+ str_contactIds +'" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true" role="none"></i></a>' +
							'</div>' +
							'<div class="col-xs-6">' +
								'<a class="btn-view" href="'+ single_url +'">View Details</a>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>';
		
		return html;
	},
	one_property_sidebar:function(property, index){
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
		var nobedrooms = zppr.get_nobedrooms(property);
		var nobaths = zppr.get_nobaths(property);
		var sqft = zppr.get_sqft(property);
		var beds_html = '<div class="zpa-grid-result-basic-info-item1"> <b>'+ nobedrooms +'</b> <span> beds </span> </div>';
		var bath_html = '<div class="zpa-grid-result-basic-info-item2"> <b>'+ nobaths +' </b> <span> baths </span> </div>'
		var sqft_html = '<div class="zpa-grid-result-basic-info-item3"> <b> '+ sqft +' </b> <span> sqft </span> </div>';
		
		var is_favorite=zppr.is_favorite(property.id)?"active":""; //'active'
		var searchid='';
		
		infos = '';
		infoscount=0;
		
		if( nobedrooms !== '' && nobedrooms > 0 ){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							beds_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if( nobaths !== '' && nobaths > 0 ){
			infos+='<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
						'<div class="zpa-grid-result-basic-info-container">' +
							bath_html +
						'</div>' +
					'</div>';
			infoscount++;
		}
		if( sqft !== '' && parseInt(sqft) > 0 ){
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
			albums+='<a href="#" data-toggle="modal" data-target="#modal-'+ listingid +'" listingid="'+ listingid +'"> <i class="glyphicon glyphicon-camera" role="none"></i> </a> <span class="photo-count">('+ img_count +')</span>' +
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
			albums+='<i class="glyphicon glyphicon-camera" role="none"></i> <span class="photo-count">(0)</span>';
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
		var source_details=property.sourceid ? zppr.get_source_text(property.sourceid, {'listOfficeName':property.listOfficeName, 'listAgentName': property.listAgentName, 'property': property}, 'list' ) : false;
		if(source_details){
			property_source+='<div class="property-source">' +
								source_details +
							'</div>';
		}
		
		var enable_rebate = zppr.data.display_buyerrebate_amount;
		var rebate_prefix =  zppr.data.buyerrebate_amount_prefix;
		var rebate_default_text =  zppr.data.emptybuyerrebate_amount_text;
		
		var rebate_badge_html = '';
		
		if( enable_rebate ){
			
			var rebate_price = '';

			if( property.hasOwnProperty('buyerRebate') && property.buyerRebate ){				
				rebate_price = zppr.moneyFormat(property.buyerRebate);
			}else{
				rebate_price = rebate_default_text;
			}
			
			rebate_badge_html = '<div class="badge-rebate">' +
									'<span class="rebate-price">' +
										rebate_price +
									'</span>' +
									'<span class="rebate-prefix">'+ rebate_prefix +'</span>' +
								'</div>';
		}
		
		var html = '<div class="zpa-grid-result col-lg-12 col-sm-12 col-md-12 col-xs-12" index="'+ index +'">' +
							
					'<div class="zpa-grid-result-container well">' +
						'<div class="row">' +
							'<div class="col-xs-12">' +
								'<div style="background-image: url(\''+ img_url +'\');" class="zpa-results-grid-photo">' +
									rebate_badge_html +
									(property.startDate || property.openHouses ? '<span class="badge-open-house">Open House</span>' : '') +
									'<a class="listing-'+ listingid +' save-favorite-btn '+ is_favorite +'" isLogin="'+ zppr.data.is_login +'" listingid="'+ listingid +'" searchid="'+ searchid +'" contactid="'+ zppr.data.contactIds +'" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true" role="none"></i></a>' +
									'<a class="property_url" href="#to_'+ property.listno +'"></a>' +
									'<a class="property_url" href="#to_'+ property.listno +'"><span class="zpa-for-sale-price"> '+ zppr.moneyFormat(price) +' </span> </a>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div class="za-container">' +							
							'<div class="row mt-10">' +
								'<div class="col-xs-12">' +
									'<a class="property_url" href="#to_'+ property.listno +'">' +
									'<span class="zpa-grid-result-address"> <img src="'+ zppr.data.plugin_url +'images/map-marker.png" title="map marker" alt="map marker"> '+ address +' </span> </a>' +
								'</div>' +
							'</div>	' +											
							'<div class="row mt-10 property-infos">' +
								infos +
							'</div>' +
							'<div class="row mb-5 fs-12 mt-10">' +
								'<div class="col-xs-7 nopaddingright">' +
									'<div class="zpa-grid-result-additional-info">' +
										'<div class="zpa-status '+ (jQuery.isNumeric(status)?'status_'+status.replace(' ', ''):status.replace(' ', '')) +'">' +
											'<span class="text-center d-block">'+ zppr.get_status_name(status, property.sourceid).toUpperCase() +'</span>' +
										'</div>' +
									'</div>' +
								'</div>' +
								'<div class="col-xs-5 nopaddingleft">' +
									'<span class="zpa-on-site pull-right"> <i class="fa fa-calendar" aria-hidden="true" role="none"></i> '+ days +' Day(s)  </span>' +
								'</div>' +
							'</div>' +
							openhouses +
						'</div>' +
						'<div style="clear:both"></div>' +
					'</div>' +
					property_source +
					'<div class="grid-margin"></div>' +
				'</div>';
				
		return html;
		
	},
	one_property_with_photo_slider:function(property, index){
		
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
		var nobedrooms = zppr.get_nobedrooms(property);
		var nobaths = zppr.get_nobaths(property);
		var sqft = zppr.get_sqft(property);
		
		var area = property.hasOwnProperty('lngAREADESCRIPTION') ? property.lngAREADESCRIPTION : '';
			area = property.hasOwnProperty('lngTOWNSDESCRIPTION') && area != '' ? property.lngTOWNSDESCRIPTION : area;
			area = property.hasOwnProperty('lngCOUNTYDESCRIPTION') && area != '' ? property.lngCOUNTYDESCRIPTION : area;
			area = property.hasOwnProperty('ShrtAREACODE') && area != '' ? zppr.field_value( 'ShrtAREACODE', property.ShrtAREACODE, property.proptype, (property.hasOwnProperty('sourceid')?property.sourceid:'') ) : area;
			area = property.hasOwnProperty('ShrtCOUNTYCODE') && area != '' ? zppr.field_value( 'ShrtCOUNTYCODE', property.ShrtCOUNTYCODE, property.proptype, (property.hasOwnProperty('sourceid')?property.sourceid:'') ) : area;
			area = property.hasOwnProperty('ShrtTOWNCODE') && area != '' ? zppr.field_value( 'ShrtTOWNCODE', property.ShrtTOWNCODE, property.proptype, (property.hasOwnProperty('sourceid')?property.sourceid:'') ) : area;
			
		var is_favorite=zppr.is_favorite(listingid); //'active'
		var searchid='';
		
		var html = '<div id="to_'+ property.listno +'" class="grid grid--gutters">' +
						'<div class="cell cell-xs-12 cell-lg-8 uk-position-relative">' +
							'<div class="mb-10">' +
								'<h1 class="uk-h2 mb-5 listing-address" itemprop="address" itemtype="http://schema.org/PostalAddress"><a class="zy-text-default view_full_details" href="'+ prop_url +'"><span itemprop="streetAddress">' + ( property.hasOwnProperty('streetno') ? property.streetno :'-' ) +' '+ ( property.hasOwnProperty('streetname') ? zppr.streetname_fix_comma( property.streetname ) :'-' ) +'</span></a><div class="uk-text-muted zy-text-reset"><span itemprop="addressLocality"><!-- react-text: 1375 -->' + ( property.hasOwnProperty('lngTOWNSDESCRIPTION')? property.lngTOWNSDESCRIPTION :'-' ) +' <!-- /react-text --><!-- react-text: 1376 -->,&nbsp;<!-- /react-text --></span><span itemprop="addressRegion"><!-- react-text: 1378 -->' + ( property.hasOwnProperty('provinceState')? property.provinceState :'-' ) + '<!-- /react-text --><!-- react-text: 1379 -->&nbsp;<!-- /react-text --></span><span itemprop="postalCode"><!-- react-text: 1381 -->' + ( property.hasOwnProperty('zipcode')? property.zipcode :'-' ) + '<!-- /react-text --><!-- react-text: 1382 -->&nbsp;<!-- /react-text --></span></div></h1>' +
								'<div class="grid grid-xs--full grid-md--thirds grid-lg--halves">' +
									'<div class="cell"><i class="zpa-status '+ (jQuery.isNumeric(status)?'status_'+status.replace(' ', ''):status.replace(' ', '')) +' zy-sash py-5 px-10 zy-listing-single__sash" role="none">'+ zppr.get_status_name(status, property.sourceid).toUpperCase() +'</i></div>' +
								'</div>' +
							'</div>' +
							'<div class="uk-position-relative text-xs--center">' +
								'<div>' +
									'<div class="row listing-gallery js-listing-gallery flickity-enabled is-draggable" tabindex="0" style="height:auto; padding-bottom:0">' +
										'<div class="photo-slider col-xs-12">' +
											'<div class="slider-container">' + 
												'<!--Main Slider Start--> ' +
												'<div id="slider" class="slider main-slider owl-carousel" aria-label="carousel"> ';
												
		if( property.hasOwnProperty('photoList') && property.photoList.length ){
			var i=0;
			for (const [key, pic] of Object.entries(property.photoList)) {
				if( pic.imgurl.indexOf('mlspin.com') !== -1 ){
					html += 						'<div class="item ' + (i==0 ? "active" : "" ) + '"> <span class="zpa-center"> <img class="media-object zpa-center" alt="" src="//media.mlspin.com/photo.aspx?mls='+ property.listno + '&w=500&h=300&n='+ i +'"> </span> </div>';
				}else{
					html += 						'<div class="item ' + (i==0 ? "active" : "" ) + '"> <span class="zpa-center"> <img class="media-object zpa-center" alt="" src="'+ pic.imgurl +'"> </span> </div>';
				}
			
			i++;
			}
		}
												
		html +=									'</div>' +
												'<!--Main Slider End-->' +
												
												'<!--Navigation Links For the Main Items' +
												'<div class="slider-controls"> ' +
													'<a class="slider-left" href="javascript:;"><span class="carousel-control"><i class="fa fa-2x fa-chevron-left" role="none"></i></span></a>' + 
													'<a class="slider-right" href="javascript:;"><span class="carousel-control"><i class="fa fa-2x fa-chevron-right" role="none"></i></span></a>' + 
												'</div> --> ' +
											'</div>' +
										   
										  '<!--Thumbnail slider container-->' + 
										  '<div class="thumbnail-slider-container">' +											   
												'<div id="thumbnailSlider" class="thumbnail-slider owl-carousel" aria-label="carousel">';
												
		if( property.hasOwnProperty('photoList') && property.photoList.length ){
			var i=0;
			for (const [key, pic] of Object.entries(property.photoList)) {
				if( pic.imgurl.indexOf('mlspin.com') !== -1 ){
					html +=							'<div class="item"><span class="zpa-center"> <img class="media-object zpa-center" alt="" src="//media.mlspin.com/photo.aspx?mls='+ property.listno +'&w=100&h=100&n='+ i +'"> </span></div>';
				}else{
					html +=							'<div class="item"><span class="zpa-center"> <img class="media-object zpa-center" alt="" src="'+ pic.imgurl +'"> </span></div>';
				}
			i++;
			}
		}
													
		html +=									'</div>' +
												'<!--Thumbnail Slider End-->' + 
											'</div>' +
										'</div>' +
										
									'</div>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div class="cell">' +
							'<div class="mb-15 p-0 zy-panel">' +
								'<div class="zy-panel__stack__sub zy-panel--small uk-text-center">' +
									'<div class="uk-h1 uk-text-primary">' +
										'<!-- react-text: 1395 -->' +
										'<!-- /react-text -->' +
										'<!-- react-text: 1396 -->' + zppr.moneyFormat(price) +
										'<!-- /react-text -->' +
										
									'</div>' +
								'</div>' +
								'<div class="zy-panel__stack__sub">' +
									'<ul class="zy-listing__feature-grid" style="margin-bottom:0">' +
										'<li class="beds">' +
											'<div class="attr-num">'+ ( property.hasOwnProperty('nobedrooms') ? property.nobedrooms:'-' ) +'</div>' +
											'<div class="uk-text-small uk-text-truncate">BEDS</div>' +
										'</li>' +
										'<li class="acres">' +
											'<div class="attr-num zy-listing__acreage-text">'+ ( property.hasOwnProperty('acre') ? property.acre:'-' ) +'</div>' +
											'<div class="uk text-small uk-text-truncate">ACRES</div>' +
										'</li>' +
										'<li class="baths">' +
											'<div class="attr-num">'+ ( property.hasOwnProperty('nobaths') ? property.nobaths :'-' ) +'</div>' +
											'<div class="uk-text-small uk-text-truncate">BATHS</div>' +
										'</li>' +
										'<li class="half-baths">' +
											'<div class="attr-num">'+ ( property.hasOwnProperty('nohalfbaths') ? property.nohalfbaths :'-' ) +'</div>' +
											'<div class="uk-text-small uk-text-truncate">1/2 BATHS</div>' +
										'</li>' +
										'<li class="sqft">' +
											'<div class="attr-num">'+ ( sqft ? sqft :'-' ) +'</div>' +
											'<div class="uk-text-small uk-text-truncate">SQFT</div>' +
										'</li>' +
										'<li class="price-sqft">' +
											'<div class="attr-num"> &nbsp;</div>' +
											'<div class="uk-text-small uk-text-truncate">&nbsp;</div>' +
										'</li>' +
									'</ul>' +
								'</div>' +
								'<div class="zy-panel__stack__sub">' +
									'<div class="m-0 zy-listing-table zy-listing__table-break">' +
										'<div class="grid px-5">' +
											'<div class="cell uk-text-bold">' +
												'<!-- react-text: 1423 -->Neighborhood:' +
												'<!-- /react-text -->' +
												'<!-- react-text: 1424 -->' +
												'<!-- /react-text -->' +
											'</div>' +
											'<div class="cell uk-text-right">'+ ( property.hasOwnProperty('neighborhood') ? property.neighborhood :'-' ) +'</div>' +
										'</div>' +
										'<div class="grid px-5">' +
											'<div class="cell cell-xs-3 uk-text-bold">Type:</div>' +
											'<div class="cell uk-text-right">'+ ( property.hasOwnProperty('proptype') ? zppr.proptype_label(proptype) :'-' ) +'</div>' +
										'</div>' +
										'<div class="grid px-5">' +
											'<div class="cell cell-xs-3 uk-text-bold">Built:</div>' +
											'<div class="cell uk-text-right">'+ ( property.hasOwnProperty('yearbuilt') ? property.yearbuilt :'-' ) +'</div>' +
										'</div>' +
										'<div class="grid px-5">' +
											'<div class="cell cell-xs-3 uk-text-bold">Area:</div>' +
											'<div class="cell uk-text-right">'+ ( area ? area : '-' ) +'</div>' +
										'</div>' +
									'</div>' +
								'</div>' +
							'</div>' +
							
							'<a href="'+ prop_url +'"><button class="js-snapshot-view-details btn-primary width-1-1" type="button"><!-- react-text: 1252 -->View Full Details&nbsp;<!-- /react-text --></button></a>' +
																
						'</div>' +
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
		var beds_html = property.nobedrooms ? '<div class="zpa-grid-result-basic-info-item1"> <b>'+ property.nobedrooms +'</b> <span> beds </span> </div>' : '&nbsp;';
		var bath_html = property.nobaths ? '<div class="zpa-grid-result-basic-info-item2"> <b>'+ property.nobaths +' </b> <span> baths </span> </div>' : '&nbsp;';
		var sqft_html = property.squarefeet ? '<div class="zpa-grid-result-basic-info-item3"> <b> '+ zppr.formatNumber( property.squarefeet ) +' </b> <span> sqft </span> </div>' : '&nbsp;';
		
		var columns_code='';
		
		var is_favorite=zppr.is_favorite(property.id)?"active":""; //'active'
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
		var source_details=property.sourceid ? zppr.get_source_text(property.sourceid, {'listOfficeName':property.listOfficeName, 'listAgentName': property.listAgentName, 'property': property}, 'list' ) : false;
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
										'<span class="text-center d-block">'+ zppr.get_status_name(status, property.sourceid).toUpperCase() +'</span>' +
									'</div>' +
									'<div class="zy_pt-days">' +
										'<span class="pull-right">'+ ( days ? '<i class="fa fa-calendar" aria-hidden="true" role="none"></i>'+ days +' Day(s)' : '' ) + '</span>' +
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
	one_slider:function(property){
		
		var listingid = property.id;
		var img_url = property.hasOwnProperty('photoList') ? property.photoList[0].imgurl : zppr.data.plugin_url + 'images/no-photo.jpg';			
		var address = zppr.getAddress(property);
		var prop_url = zppr.getPropUrl(listingid,address);
		var price=(zppr.data.sold_status.indexOf(property.status)>-1?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
		var source_details=property.sourceid ? zppr.get_source_text(property.sourceid, {'listOfficeName':property.listOfficeName, 'listAgentName': property.listAgentName, 'property': property}, 'list' ) : false;
		
		var enable_rebate = zppr.data.display_buyerrebate_amount;
		var rebate_prefix =  zppr.data.buyerrebate_amount_prefix;
		var rebate_default_text =  zppr.data.emptybuyerrebate_amount_text;
		
		var rebate_badge_html = '';
		
		if( enable_rebate ){
			
			var rebate_price = '';

			if( property.hasOwnProperty('buyerRebate') && property.buyerRebate ){				
				rebate_price = zppr.moneyFormat(property.buyerRebate);
			}else{
				rebate_price = rebate_default_text;
			}
			
			rebate_badge_html = '<div class="badge-rebate">' +
									'<span class="rebate-price">' +
										rebate_price +
									'</span>' +
									'<span class="rebate-prefix">'+ rebate_prefix +'</span>' +
								'</div>';
		}
		
		var html = '<div class="impress-carousel-property">'+
						'<div class="owl-img-wrap">'+						
							'<a href="'+ prop_url +'" class="impress-carousel-photo" target="_self">'+								
								rebate_badge_html;
		if( img_url.indexOf('mlspin.com') !== -1 ){
			html += 			'<img class="lazyOwl" alt="'+ ( property.hasOwnProperty('remarks') ? property.remarks : '' ) +'" title="'+ address +'" style="display: block;" src="//media.mlspin.com/photo.aspx?mls='+ property.listno +'&amp;h=400&amp;w=512&amp;n=0">';
		}else{
			html += 			'<span style="background:url(\''+ img_url +'\');"></span>';
		}
		html += 			'</a>'+
						'</div>'+
						'<a href="'+ prop_url +'" class="impress-carousel-photo" target="_self">	'+							
							'<span class="impress-price text-bold">'+ zppr.moneyFormat(price) +'</span>'+
						'</a>'+
						'<a href="'+ prop_url +'" target="_self">'+
							'<p class="impress-address">'+
								// '<span class="impress-street">' + ( property.hasOwnProperty('streetno') ? property.streetno :'-' ) +' '+ ( property.hasOwnProperty('streetname') ? zppr.streetname_fix_comma( property.streetname ) :'-' ) +'</span> '+
								// '<span class="impress-cityname">' + ( property.hasOwnProperty('lngTOWNSDESCRIPTION')? property.lngTOWNSDESCRIPTION :'-' ) +'</span>, '+
								// '<span class="impress-state"> ' + ( property.hasOwnProperty('provinceState')? property.provinceState :'-' ) + '</span>'+
								address +
							'</p>'+
						'</a>'+
						'<p class="impress-beds-baths-sqft">';
		if(property.hasOwnProperty('nobedrooms')){
			html +=			'<span class="impress-beds">' + ( property.hasOwnProperty('nobedrooms')? property.nobedrooms :'-' ) + ' Beds</span> ';
		}
		if(property.hasOwnProperty('nobaths')){
			html +=			'<span class="impress-baths">' + ( property.hasOwnProperty('nobaths')? property.nobaths :'-' ) + ' Baths</span> ';
		}
		if(property.hasOwnProperty('squarefeet')){
			html +=			'<span class="impress-sqft">' + ( property.hasOwnProperty('squarefeet')? property.squarefeet :'-' ) + ' SqFt</span>';
		}
		html +=			'</p>'+
						'<p class="impress-listingid">';
		if(property.hasOwnProperty('listno')){
			html +=			'<span class="impress-listno">'+ property.displaySource +'#' + ( property.hasOwnProperty('listno')? property.listno :'-' ) + '</span>';
		}
		html +=			'</p>'+
						'<div class="property-source disclaimer">';
						
		if(source_details){
			html +=			source_details;
		}
		html +=			'</div>'+
					'</div>';
		
		return html;
	},
	formatNumber:function(num) {
	   return (typeof num !== 'undefined') ? num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : 0;
	},
	getAddress:function(property){
		
		var hide_streetnumber=0;
		var rnhidestreetno = zppr.data.root.web.hasOwnProperty('rnhidestreetno')?zppr.data.root.web.rnhidestreetno:0;
		if( rnhidestreetno && property.hasOwnProperty('proptype') && property.proptype=="RN" ){
			hide_streetnumber=1;
		}
		
		if(hide_streetnumber == 1 || !property.hasOwnProperty('formattedAddress')){
			var streetname = property.hasOwnProperty('streetname')?property.streetname:'';
			var lngTOWNSDESCRIPTION = property.hasOwnProperty('lngTOWNSDESCRIPTION')?property.lngTOWNSDESCRIPTION:'';
			var provinceState = property.hasOwnProperty('provinceState')?property.provinceState:'';
			var zipcode = property.hasOwnProperty('zipcode')?property.zipcode:'';
			var streetno = property.hasOwnProperty('streetno')?property.streetno:'';
			var fulladdress = property.hasOwnProperty('fulladdress')?property.fulladdress:'';
			var addressWithoutStreeno = property.hasOwnProperty('addressWithoutStreeno')?property.addressWithoutStreeno:'';
			var formattedAddress = property.hasOwnProperty('formattedAddress')?property.formattedAddress:'';
		
			if(addressWithoutStreeno && hide_streetnumber){
				address = addressWithoutStreeno;
			}else if(hide_streetnumber){
				address = streetname+' '+lngTOWNSDESCRIPTION+', '+provinceState+' '+zipcode;
			}else if(fulladdress){
				address = fulladdress;
			}else if(formattedAddress){
				address = formattedAddress;
			}else{
				address = streetno+' '+streetname+' '+lngTOWNSDESCRIPTION+', '+provinceState+' '+zipcode;
			}
		} else {
			address = property.formattedAddress;
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
		back_url=page>1?zppr.add_query_arg( 'pagenum',page-1, current_url ):'#';
		next_url=page<pagescount?zppr.add_query_arg( 'pagenum', page+1, current_url ):'#';
		
		limit = 6;
		center = limit / 2;
		minpage = page - center > 0 ? page - center : 1;
		maxpage = page + center > pagescount ? pagescount : page + center;
		starturl = zppr.add_query_arg( 'pagenum', 1, current_url );
		endurl = zppr.add_query_arg( 'pagenum', pagescount, current_url );
		
		/* html+= '<ul class="pagination">'+
			
			'<li class="'+ ( back_url=="#" ? 'disabled' : '' ) +'"><a href="'+ back_url +'" data-page="'+ ( page - 1 ) +'">&laquo;</a>'+
			'</li>'+
			'<li class="disabled"><a href="#">'+ page +' of '+ pagescount +'</a>'+
			'</li>'+
			'<li class="'+ ( next_url=="#" ? 'disabled' : '' ) +'"><a href="'+ next_url +'" data-page="'+ ( page + 1 ) +'">&raquo;</a>'+
			'</li>'+
		'</ul>'; */
		
		html+= '<ul class="pagination">';
			
		html+=		'<li class="'+ ( back_url=="#" ? 'disabled' : '' ) +'"><a href="'+ back_url +'" data-page="'+ ( page - 1 ) +'">&laquo;</a></li>';
		
		if( minpage > 1 ){
			if( minpage > 2 ){
				html+= '<li><a href="'+ starturl +'" data-page="1">1</a></li>';
			}
			html+=	'<li class="disabled"><a href="#">...</a></li>';
		}
		
		for( p=minpage; p<=maxpage; p++ ){
			purl = zppr.add_query_arg( 'pagenum', p, current_url );
			html+=	'<li '+ ( p==page ? 'class="disabled"' : '' ) +'><a href="'+ purl +'" data-page="'+ p +'">'+ p +'</a></li>';
		}
		
		if( maxpage < pagescount ){
			if( pagescount - maxpage > 1){
				html+= '<li class="disabled"><a href="#">...</a></li>';
			}
			html+= '<li><a href="'+ endurl +'" data-page="'+ pagescount +'">'+ pagescount +'</a></li>';
		}
			
		html+=  '<li class="'+ ( next_url=="#" ? 'disabled' : '' ) +'"><a href="'+ next_url +'" data-page="'+ ( page + 1 ) +'">&raquo;</a></li>';
		
		html +=	'</ul>';
		
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
	get_rebate_text:function(property){
		var is_enabled = zppr.data.display_buyerrebate_amount;
		var rebate_text = '';
		
		if( is_enabled ){
			var prefix =  zppr.data.buyerrebate_amount_prefix;
			var text =  zppr.data.emptybuyerrebate_amount_text;
			
			if( property.hasOwnProperty('buyerRebate') ){
				
				rebate_text = prefix + ' ' + zppr.moneyFormat(property.buyerRebate);
			}else{
				rebate_text = prefix + ' ' + text;
			}
		}
		
		return rebate_text;
	},
	get_source_text:function(sourceid, params, type){
		sources = zppr.data.source_cached;
		
		if( ! sources[sourceid] )
			return '';
		
		source = sources[sourceid];
		var text = '';
		
		var listAgentName = params['listAgentName'];
		var listOfficeName = params['listOfficeName'];
		var updatedate = params['updatedate'];
		var property = params['property'];
		
		
		var contact_text = [];
		if(sourceid=='GOWENMLS'){
			
			var showemail = zppr.data.root.web.hasOwnProperty('hideemail') && zppr.data.root.web.hideemail == 1 ? 0 : 1;
			var showphone = zppr.data.root.web.hasOwnProperty('hidephone') && zppr.data.root.web.hidephone == 1 ? 0 : 1;
			
			if(zppr.checkNested(property,'unmapped','LO Email') && showemail){
				contact_text.push('email:' + property.unmapped["LO Email"]);
			}
			if(zppr.checkNested(property,'unmapped','LO Phone1') && showphone){
				contact_text.push('ph:' + property.unmapped["LO Phone1"]);
			}
		}else if(sourceid=='NERENMLS'){
			
			var showemail = zppr.data.root.web.hasOwnProperty('hideemail') && zppr.data.root.web.hideemail == 1 ? 0 : 1;
			var showphone = zppr.data.root.web.hasOwnProperty('hidephone') && zppr.data.root.web.hidephone == 1 ? 0 : 1;
			
			// if(zppr.checkNested(property,'unmapped','LO1Office Email') && showemail){
				// contact_text.push('email:' + property.unmapped["LO1Office Email"]);
			// }
			if(zppr.checkNested(property,'unmapped','Broker Attrib Contact') && showphone){
				contact_text.push('' + property.unmapped["Broker Attrib Contact"]);
			}
		}
		
		switch(type){
			case "list":
					
					var hidesource = zppr.data.root.web.hasOwnProperty('hidelistsource') && zppr.data.root.web.hidelistsource == 1 ? 1 : 0;
					
					if(hidesource){
						return '';
					}
				
					if(listAgentName && zppr.data.is_show_agent_name==1){
						text+= "Listing Provided Courtesy "+ listAgentName +" of";							
					}else{
						text+= "Listing Provided Courtesy of";						
					}
					
					if(listOfficeName){
						text+= ' '+ "<strong>"+ listOfficeName +"</strong>";
					}
			
					if(contact_text.length){						
						text+= ' ('+ contact_text.join(', ') +')';
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
					
					if(listAgentName && zppr.data.is_show_agent_name==1){
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
					defaultDisc="Disclaimer: The information contained in this listing has not been verified by <strong>{$listOfficeName}</strong> and should be verified by the buyer.";
					text+= source['discComingle'] ? source['discComingle'] : ( source['discDetail'] ? source['discDetail'] : '' );
					// text+='<br /><br />' + defaultDisc;
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
			case "detail_source":
					var date = new Date();
					var curr_year = date.getFullYear();
					year = source['year']?source['year']:curr_year;
					text+= 'Listing information &copy; ' + year + '<br />';	
					
					if(listOfficeName){
						text+= "Listing Provided Courtesy of <strong>"+ listOfficeName +"</strong>";
					}	
					
					if(listAgentName!='' && zppr.data.is_show_agent_name==1){
						text+= ", "+ listAgentName;
					}	
					
					if(contact_text.length){					
						text+= ' ('+ contact_text.join(', ') +')';
					}			
				break;
			case "detail_disclaimer":
					if(source['logo_path']){
						text+= '<img src="'+ source['logo_url'] +'" alt="'+ source['name'] +'" />';
						
						if(source['copyrightUrl']){
							text+=' ' + '<a target="_blank" href="'+ source['copyrightUrl'] +'">click here</a>';
						}
					}
					text+= ' '+ 'via ' + source['name'];
					defaultDisc="Disclaimer: The information contained in this listing has not been verified by <strong>{listOfficeName}</strong> and should be verified by the buyer.";
					text+='<br />';
					text+= source['discComingle'] ? source['discComingle'] : ( source['discDetail'] ? source['discDetail'] : '' );
					// text+='<br /><br />' + defaultDisc;
					
					if(sourceid=='LVMLS'){
						text+="<br /><br />";
						text+="<img style=\"max-height:none;\" src=\""+ zppr.data.plugin_url + 'custom/logo/IDX.png' + "\" /><br />";
						text+="The data related to real estate for sale on this website comes in part from the INTERNET DATA EXCHANGE (IDX) program of the Greater Las Vegas Association of REALTORS® MLS. Real estate listings held by brokerage firms other than this site owner are marked with the IDX logo. IDX information is for consumers' personal, non-commercial use and may not be used for any purpose other than to identify prospective properties consumers may be interested in purchasing.";
						text+="<br /><b>GLVAR deems information reliable but not guaranteed.</b>";
						text+="<br /><b><i>© 2020 of the Greater Las Vegas Association of REALTORS® MLS. All rights reserved.</i></b>";
						text+="<br /><a href=\"http://www.idxre.com/docs/idxdocs/nvglvar-dmca.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">GLVAR DMCA Notice</a>";
						text+="<br />GLVAR (Las Vegas) data last updated at April 29, 2020 10:00 AM PT";
					}else if(sourceid=='NERENMLS'){
						/* if(updatedate){

							var mlstz = zppr.mls_timezone(sourceid);
							var ld = new Date(updatedate).toLocaleString("en-US", {timeZone: mlstz});
							var dt = new Date(ld);
							var datetime = dt.format('m/d/y');
							text+=' Data last updated ' + datetime;
						} */
						
						var synctime = zppr.data.synctime;
						
						if(synctime && synctime.hasOwnProperty('NERENMLS')){
							var mlstz = zppr.mls_timezone(sourceid);
							var ld = new Date(synctime.NERENMLS).toLocaleString("en-US", {timeZone: mlstz});
							var dt = new Date(ld);
							var datetime = dt.format('m/d/y');
							text+=' Data last updated ' + datetime;
						}
					}
				break;
		}
		
		return text;
	},
	proptype_label:function(code){
		propertyType = code;
		
		if(typeof code === 'undefined')
        	return '';
		
		propTypeFields = zppr.data.property_types_refenrence;
		
		if(!propTypeFields){// if value empty, use static references
			propTypeFields=zppr.data.property_types;
		}
		
		if( propTypeFields && propTypeFields[code.toString()]){
			propertyType = propTypeFields[code.toString()];
		}
		
		return propertyType;
	},
	list_proptype:function(property){
		
		var proptype = '';
		var sourceid = property.sourceid;
		
		switch(sourceid){
			case "NERENMLS":
					proptype = property.hasOwnProperty('propsubtype') ? property.propsubtype : zppr.proptype_label(property.proptype);
				break;			
			default:
					proptype = zppr.proptype_label(property.proptype); 
				break;
		}
	
		return proptype;
	},
	is_mobile:function(){
		var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		
		return isMobile;
	},
	mls_timezone:function(sourceid){
		timezone=zppr.data.root.tenant.mls_timezone;
		
		if(sourceid!=""){
			timezone=typeof timezone === 'object'&& sourceid in timezone ?timezone[sourceid]:timezone;
		}
		
		if(!timezone || typeof timezone === 'object')
			timezone='GMT';
		
		return timezone;
	},
	browser_timezone:function(){
		var browser_timezone = zppr.data.browser_timezone;
		
		return browser_timezone;
	},
	browser_timezone_2:function(){
		var d = new Date();
		var usertime = d.toLocaleString();

		// Some browsers / OSs provide the timezone name in their local string:
		var tzsregex = /\b(ACDT|ACST|ACT|ADT|AEDT|AEST|AFT|AKDT|AKST|AMST|AMT|ART|AST|AWDT|AWST|AZOST|AZT|BDT|BIOT|BIT|BOT|BRT|BST|BTT|CAT|CCT|CDT|CEDT|CEST|CET|CHADT|CHAST|CIST|CKT|CLST|CLT|COST|COT|CST|CT|CVT|CXT|CHST|DFT|EAST|EAT|ECT|EDT|EEDT|EEST|EET|EST|FJT|FKST|FKT|GALT|GET|GFT|GILT|GIT|GMT|GST|GYT|HADT|HAEC|HAST|HKT|HMT|HST|ICT|IDT|IRKT|IRST|IST|JST|KRAT|KST|LHST|LINT|MART|MAGT|MDT|MET|MEST|MIT|MSD|MSK|MST|MUT|MYT|NDT|NFT|NPT|NST|NT|NZDT|NZST|OMST|PDT|PETT|PHOT|PKT|PST|RET|SAMT|SAST|SBT|SCT|SGT|SLT|SST|TAHT|THA|UYST|UYT|VET|VLAT|WAT|WEDT|WEST|WET|WST|YAKT|YEKT)\b/gi;

		// In other browsers the timezone needs to be estimated based on the offset:
		var timezonenames = {"UTC+0":"GMT","UTC+1":"CET","UTC+2":"EET","UTC+3":"EEDT","UTC+3.5":"IRST","UTC+4":"MSD","UTC+4.5":"AFT","UTC+5":"PKT","UTC+5.5":"IST","UTC+6":"BST","UTC+6.5":"MST","UTC+7":"THA","UTC+8":"AWST","UTC+9":"AWDT","UTC+9.5":"ACST","UTC+10":"AEST","UTC+10.5":"ACDT","UTC+11":"AEDT","UTC+11.5":"NFT","UTC+12":"NZST","UTC-1":"AZOST","UTC-2":"GST","UTC-3":"BRT","UTC-3.5":"NST","UTC-4":"CLT","UTC-4.5":"VET","UTC-5":"EST","UTC-6":"CST","UTC-7":"MST","UTC-8":"PST","UTC-9":"AKST","UTC-9.5":"MIT","UTC-10":"HST","UTC-11":"SST","UTC-12":"BIT"};

		var timezone = usertime.match(tzsregex);
		if (timezone) {
			timezone = timezone[timezone.length-1];
		} else {
			var offset = -1*d.getTimezoneOffset()/60;
			offset = "UTC" + (offset >= 0 ? "+" + offset : offset);
			timezone = timezonenames[offset];
		}
		
		return timezone;
	},
	declare_date_format:function(){
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
		
	},
	enableSaveSearchButton:function(){
		jQuery('.saveSearchButton').show();
		jQuery('.savedSearchButton').hide();
	},
	api_path:function(searchType){
		
		switch(searchType){
			case 0:
				return '/api/mls/advSearchWoCnt';
			case 1:
				return '/api/mls/advSearchOnlyCnt';
			case 2:
				return '/api/mls/withinWoCnt';
			case 3:
				return '/api/mls/withinOnlyCnt';
			case 4:
				return '/api/mls/distanceWoCnt';
			case 5:
				return '/api/mls/distanceOnlyCnt';
			case 6:
				return '/api/mls/withinBoxWoCnt';
			case 7:
				return '/api/mls/withinBoxOnlyCnt';
		}
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
				// console.log(response);
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
		var check = false;

		if(zppr.data.saved_favorites!= null && zppr.data.saved_favorites.map((value,index) => {

			if(value.listingId == listid)
				check=true;
		}));

		return check;
	},
	generate_template:function(single_property){
				
		property_type = single_property.hasOwnProperty('proptype')?single_property.proptype.toUpperCase():'';
		property_subtype = single_property.hasOwnProperty('propsubtype')?single_property.propsubtype.toUpperCase():'';
		
		//special case
		switch(property_type){
			case "A":
					switch(property_subtype){
						case "CONDOMINIUM":
								property_type=property_subtype;
							break;
					}
				break;
			case "E":
					switch(property_subtype){
						case "Commercial":
								property_type='COMMERCIAL';
							break;
					}
				break;
		}

		//custom case for bmmls-fgmmls-fmxmls-gfkmls-mwmmls
		if( single_property.sourceid == 'BMMLS' || single_property.sourceid == 'FGMMLS' || single_property.sourceid == 'FMXMLS' || single_property.sourceid == 'GFKMLS' || single_property.sourceid == 'MWMMLS' ){
				
			if(single_property.sourceid == 'BMMLS'){
				
				switch(property_type){
					// case "A": changed to RES
					case "RES":
							property_type='RESIDENTIAL';
						break;
					// case "B": changed to LND
					case "LND":
							property_type='LAND';
						break;
					// case "C": changed to CIS
					case "CIS":
							property_type='COMMERCIAL';
						break;
				}

			}else if(single_property.sourceid == 'FGMMLS'){
				
				switch(property_type){
					// case "A": changed to RES
					case "RES":
							property_type='RESIDENTIAL';
						break;
					// case "I": changed to MUL
					case "MUL":
							property_type='MULTYFAMILY';
						break;
					// case "J": changed to LND
					case "LND":
							property_type='LAND';
						break;
					// case "K": changed to CIS
					case "CIS":
							property_type='COMMERCIAL';
						break;
				}
				
			}else if(single_property.sourceid == 'FMXMLS'){
				
				switch(property_type){
					// case "A": changed to CIS
					case "CIS":
							property_type='RESIDENTIAL';
						break;
					// case "B": changed to CIL
					case "CIL":
							property_type='COMMERCIAL';
						break;
				}
				
			}else if(single_property.sourceid == 'GFKMLS'){
				
				switch(property_type){
					// case "A": changed to RES
					case "RES":
							property_type='RESIDENTIAL';
						break;
					// case "B": changed to MUL
					case "MUL":
							property_type='MULTYFAMILY';
						break;
					// case "C": changed to LND
					case "LND":
							property_type='LAND';
						break;
					// case "D": changed to CIL
					case "CIL":
							property_type='COMMERCIAL';
						break;
					// case "F": changed to MOB
					case "MOB":
							property_type='MOBILEHOMES';
						break;
					// case "G": changed to BUS
					case "BUS":
							property_type='BUSINESS';
						break;
					// case "H": changed to CIS
					case "CIS":
							property_type='COMMERCIAL';
						break;
					case "RES":
							property_type='RES';
						break;
					case "LN":
							property_type='LAND';
						break;
					case "COM":
							property_type='COM';
						break;
					case "CL":
							property_type='COMMERCIAL';
						break;
					case "MF":
							property_type='MF';
						break;
					case "REL":
							property_type='RESI';
						break;
				}
				
			}else if(single_property.sourceid == 'MWMMLS'){
				
				switch(property_type){
					// case "A": changed to RES
					case "RES":
							property_type='RESIDENTIAL';
						break;
					// case "B": changed to MUL
					case "MUL":
							property_type='MULTYFAMILY';
						break;
					// case "C": changed to FRM
					case "FRM":
							property_type='FARM';
						break;
					// case "D": LND
					case "LND":
							property_type='LAND';
						break;
					// case "E": CIS
					case "CIS":
							property_type='COMMERCIAL';
						break;
				}
				
			}	
		}
		//custom case for nwmls
		else if(single_property.sourceid == 'NWMLS'){
			switch(property_type){
				// case "MANU": changed to MANUFACTURING
				case "MANU":
						property_type='MANUFACTURING';
					break;
			}
		}
		//custom case for MFRMLS
		else if(single_property.sourceid == 'MFRMLS'){
			switch(property_type){
				case "RESIDENTIAL":
						
						switch(property_subtype){
							case "SINGLE FAMILY RESIDENCE":
									property_type='RESIDENTIAL';
								break;
							case "CONDOMINIUM":
									property_type='CONDOMINIUM';
								break;
							case "TOWNHOUSE":
									property_type='RESIDENTIAL';
								break;
						}
					break;
			}
		}

		//Template selection
		switch(property_type){
			case "SF": //Single Family		
			case "SFR": //Single Family		
			case "RES": //Single Family			
			case "DETSF": //Detached Single Family		
			// case "FARM": //Farm and Ranch
			case "CS": //CommonInterest CS
			case "CL": //CommonInterest CL
			case "BF": //ResidentialProperty BF
			case "COF": //OFFICE
			case "RESIDENTIAL": //Residential
			case "RESI": //Residential
			case "Residential": //Residential
				// template_name=get_detail_template_filename('sf')?get_detail_template_filename('sf'):'';
				template_features='sf-features-crm.php';
				template_print='sf-print-crm.php';
				template_sidebar='sf-sidebar-crm.php';
				template_vtlink='sf-vtlink-crm.php';
				break;
			case "MF": //Multifamily	
			case "MUL": //Multifamily	
			case "MUL": //Multifamily	
			case "MANU": //MAnufactured in Park	
			case "B": //Multi-family
			case "MULTYFAMILY": //Multi-family
			case "MULTI FAMILY": //Multi-family
			case "MULT": //Multi-family
			case "MUNT": //Multi unit
			case "MULTI UNIT 2-4": //Multi unit
			case "MULTI UNIT 5+": //Multi unit
			case "MULTI UNIT/INCOME": //Multi unit
			case "CommercialSale": //Multi Family
				// template_name=get_detail_template_filename('mf')?get_detail_template_filename('mf'):'';
				template_features='mf-features-crm.php';
				template_print='mf-print-crm.php';
				template_sidebar='mf-sidebar-crm.php';
				template_vtlink='mf-vtlink-crm.php';
				break;
			case "MH": //Mobile Home	
			case "MOBILEHOMES": //Mobile Home	
			case "MOB": //Mobile Home
			case "MOBILE/FLOATING HOME": //Mobile Home	
				// template_name=get_detail_template_filename('mh')?get_detail_template_filename('mh'):'';
				template_features='mh-features-crm.php';
				template_print='mh-print-crm.php';
				template_sidebar='mh-sidebar-crm.php';
				template_vtlink='mh-vtlink-crm.php';
				break;
			case "LD": //Land		
			case "LND": //Land		
			case "LAND": //Land		
			case "VLD": //Land		
			case "LN": //Land		
			case "FM": //Farm		
			case "FR": //Farm		
			case "C": //Lands&Lots		
			case "LAN": //Land		
			case "VACL": //Land
			case "Land": //Land			
			case "LOTS": //Farm	without house
				// template_name=get_detail_template_filename('ld')?get_detail_template_filename('ld'):'';
				template_features='ld-features-crm.php';
				template_print='ld-print-crm.php';
				template_sidebar='ld-sidebar-crm.php';
				template_vtlink='ld-vtlink-crm.php';
				break;
			case "RN": //Rental		
			case "RNT": //Rental		
			case "LSE": //Rental		
			case "RENT": //Rental		
			case "REN": //Rental		
			case "REL": //Rental		
			case "E": //Rental		
			case "LEASE/RENT": //Rental
			case "ResidentialIncome": //Rental
				// template_name=get_detail_template_filename('rn')?get_detail_template_filename('rn'):'';
				template_features='rn-features-crm.php';
				template_print='rn-print-crm.php';
				template_sidebar='rn-sidebar-crm.php';
				template_vtlink='rn-vtlink-crm.php';
				break;
			case "CC": //Condo		
			case "CND": //Condo		
			case "CND": //Condo		
			case "ATTSF": //Attached Single Family	
			case "CONDOMINIUM": //Condo		
			case "CON": //Condo	
			case "COND": //Condo	
			case "CLse": //Commercial Lease	
				// template_name=get_detail_template_filename('cc')?get_detail_template_filename('cc'):'';
				template_features='cc-features-crm.php';
				template_print='cc-print-crm.php';
				template_sidebar='cc-sidebar-crm.php';
				template_vtlink='cc-vtlink-crm.php';
				break;
			case "CI": //Commercial			
			case "CLSE": //Commercial Lease			
			case "COM": //Commercial				
			case "COMM": //Commercial		
			case "CM": //Commercial		
			case "INC": //Income		
			case "D": //Commercial		
			case "COMMERCIAL": //Commercial		
			case "COMI": //Commercial	
			case "Commercial_Sale": //Commercial Sale			
			case "Commercial": //Commercial			
			case "COMMERCIAL_SALE": //Commercial		
				// template_name=get_detail_template_filename('ci')?get_detail_template_filename('ci'):'';
				template_features='ci-features-crm.php';
				template_print='ci-print-crm.php';
				template_sidebar='ci-sidebar-crm.php';
				template_vtlink='ci-vtlink-crm.php';
				break;
			case "BU": //Business		
			case "BUS": //Business		
			case "BUSOP": //Business Opportunity		
			case "BOP": //Business Opportunity		
			case "IND": //Industri		
			case "BUSI": //Business		
			case "BUSINESS": //Business		
			case "BUSO": //Business		
			case "BUSINESS OPPORTUNITY": //Business Opportunity	
			case "BUSINESS_OPPORTUNITY": //Business Opportunity
			case "BusinessOpportunity": //Business Opportunity
				// template_name=get_detail_template_filename('bu')?get_detail_template_filename('bu'):'';
				template_features='bu-features-crm.php';
				template_print='bu-print-crm.php';
				template_sidebar='bu-sidebar-crm.php';
				template_vtlink='bu-vtlink-crm.php';
				break;
			case "RESI": //Residential
			case "RINC": //Residential
			case "RLSE": //Residential
			case "A": //Residential
			case "RLse": //Residential Lease
			case "RESIDENTIAL_LEASE": //Residential Lease
				// template_name=get_detail_template_filename('rd')?get_detail_template_filename('rd'):'';
				template_features='rd-features-crm.php';
				template_print='rd-print-crm.php';
				template_sidebar='rd-sidebar-crm.php';
				template_vtlink='rd-vtlink-crm.php';
				break;
			case "FARM": //Farm
			case "FAR": //Farm
			case "Farm": //Farm	
				// template_name=get_detail_template_filename('fm')?get_detail_template_filename('fm'):'';
				template_features='fm-features-crm.php';
				template_print='fm-print-crm.php';
				template_sidebar='fm-sidebar-crm.php';
				template_vtlink='fm-vtlink-crm.php';
				break;
			case "MANUFACTURING": //Manufacturing
				// template_name=get_detail_template_filename('mu')?get_detail_template_filename('mu'):'';
				template_features='mu-features-crm.php';
				template_print='mu-print-crm.php';
				template_sidebar='mu-sidebar-crm.php';
				template_vtlink='mu-vtlink-crm.php';
				break;
			default: //custom default		
				// template_name = zipperagent_detailpage_layout();
				// template_name=get_detail_template_filename('sf')?get_detail_template_filename('sf'):'';
				template_features='sf-features-crm.php';
				template_print='sf-print-crm.php';
				template_sidebar='sf-sidebar-crm.php';
				template_vtlink='sf-vtlink-crm.php';
				break;
			
		}
		
		return {
			template_features: template_features,
			template_print: template_print,
			template_sidebar: template_sidebar,
			template_vtlink: template_vtlink,
		};
	},
	get_detail_template_filename:function(proptype){
		proptype=proptype.toLowerCase();	
		detailpage_layout = zppr.data.root.layout.hasOwnProperty('detailpage_layout_' + proptype)?zppr.data.root.layout['detailpage_layout_' + proptype]:'';
		
		return detailpage_layout;
	},
	vtlink_template:function(single_property){
		
		var html='';		
		var virtual_tours= [];

		if( (zppr.checkNested(single_property,'unmapped','VirtualTourURLBranded')) && (single_property.hasOwnProperty('listingAgent') || single_property.hasOwnProperty('coListingAgent')) && (zppr.is_branded_virtualtour() == 1)){
			
			if(Array.isArray(single_property.unmapped.VirtualTourURLBranded)){		
				virtual_tours = single_property.unmapped.VirtualTourURLBranded;
			}
		}else if( zppr.checkNested(single_property,'unmapped','VirtualTourURLUnbranded') && (zppr.is_branded_virtualtour() == 1) ){

			if(Array.isArray(single_property.unmapped.VirtualTourURLUnbranded)){
				virtual_tours = single_property.unmapped.VirtualTourURLUnbranded;
			}
		}else if(single_property.hasOwnProperty('vtlink')){
			
			if(Array.isArray(single_property.vtlink)){
				virtual_tours = single_property.vtlink;
			}	
		}
		
		for (const [virtual_index, original_virtual_tour_url] of Object.entries(virtual_tours)) {
			
			// is_possible_popup = 1;
			is_possible_popup = 0;
			virtual_tour_url=original_virtual_tour_url;
			if(!zppr.is_valid_url(virtual_tour_url) && virtual_tour_url.toString().substring(0, 2) != '//'){
				virtual_tour_url='//'+virtual_tour_url;
			}
			virtual_tour_url=virtual_tour_url.replace('http://','//');
			virtual_tour_url=virtual_tour_url.replace('https://','//');
			
			var new_virtual_tour_url = virtual_tour_url;
			
			if(virtual_tour_url.toString().indexOf('iframe') !== -1){ //iframe
				embed = virtual_tour_url;
				is_possible_popup = 0;
			}else if(virtual_tour_url.toString().indexOf('youtube.com') !== -1 || virtual_tour_url.toString().indexOf('youtu.be') !== -1){ //youtube url
				embed = virtual_tour_url.replace( /\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i, "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>");
				is_possible_popup = 0;
			}else if(virtual_tour_url.toString().indexOf('vimeo.com') !== -1){ //vimeo url
				
				vimeos = virtual_tour_url.split('vimeo.com/');
				vimeo_id = vimeos[1];
				
				embed = "<iframe src=\"https://player.vimeo.com/video/"+ vimeo_id +"?color=ffffff\" width=\"853\" height=\"480\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe>";
				is_possible_popup = 0;	
			} /* else if(virtual_tour_url.toString().indexOf('exite-listings.com') !== -1){
				is_possible_popup = 0;
			}else if(virtual_tour_url.toString().indexOf('video214.com') !== -1){
				is_possible_popup = 0;
			}else if(virtual_tour_url.toString().indexOf('getopenframe.com') !== -1){
				is_possible_popup = 0;
			}else if(virtual_tour_url.toString().indexOf('walkthruhomes.com') !== -1){
				is_possible_popup = 0;
			}else{ //normal url
				embed= "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\""+ virtual_tour_url +"\" frameborder=\"0\" allowfullscreen></iframe>";
			} */
			
			if(is_possible_popup){
				html+= '<a href="#" content-iframe=\''+ embed +'\' class="virtual-tour-open">' +
						  '<i class="fa fa-camera" role="none"></i>' +
						  '<span> Virtual Tour&nbsp;#'+ (parseInt(virtual_index) + 1) +'</span>' +
						'</a>';
			}else{
				html+= '<a href="'+ new_virtual_tour_url +'" class="virtual-tour-open-direct" target="_blank">' +
						  '<i class="fa fa-camera" role="none"></i>' +
						  '<span> Virtual Tour&nbsp;#'+ (parseInt(virtual_index) + 1) +'</span>' +
						'</a>';
			}

		}
		
		return html;
	},
	sidebar_template:function(single_property){
		
		var proptype = single_property.proptype;		
		var template = zppr.generate_template(single_property);		
		var sidebar = jQuery('templates').find('[data-filename="'+ template.template_sidebar +'"]').html();		
		var regex = /{if field="(\S*)"}([^\x05]*?){\/if}/g;
		// var regex = new RegExp(/{if field="(\S*)"}(.*?){\/if}/, 'g');
		var html = '';
		
		do {
			matches = regex.exec(sidebar);
			if (matches) {
				obj_str = matches[1];
				attr = obj_str.split('.');				
				content = matches[2];
				field=false;
				switch(attr.length){
					case 2:
							if(zppr.checkNested(single_property,attr[1]))
								field = single_property[attr[1]];
						break;
					case 3:
							if(zppr.checkNested(single_property,attr[1],attr[2]))
								field = single_property[attr[1]][attr[2]];
						break;
				}
				
				if(field){
					html+=content;
				}
				
			}
		} while (matches);
		
		return html;
	},
	feature_template:function(single_property){
		
		var proptype = single_property.proptype;		
		var template = zppr.generate_template(single_property);		
		var features = jQuery('templates').find('[data-filename="'+ template.template_features +'"]').html();		
		var regex = /{nested fields="(\S*)"}([^\x05]*?){\/nested}/g;
		// var regex = new RegExp(/{nested fields="(\S*)"}(.*?){\/nested}/, 'g');
		var html = features;
		var find = [];
		var replaces = [];
		var state=0;
		var full='';
		
		String.prototype.allReplace = function(find,replaces) {
			var retStr = this;
			for (var x in find) {
				retStr = retStr.replace(find[x], replaces[x]);
			}
			return retStr;
		};
		
		do {
			matches = regex.exec(features);
			if (matches) {
				full = matches[0];
				obj_str = matches[1];				
				content = matches[2];
				
				state=0;
				fields = obj_str.split(',');	
				
				for (const [key, value] of Object.entries(fields)) {
				
					attr = value.split('.');
					
					field=false;
					switch(attr.length){
						case 2:
								if(zppr.checkNested(single_property,attr[1]))
									field = single_property[attr[1]];
							break;
						case 3:
								if(zppr.checkNested(single_property,attr[1],attr[2]))
									field = single_property[attr[1]][attr[2]];
							break;
					}
				
					if(field){
						state=1;
						break;
					}
				}
				
				if(!state){
					find.push(full);
					replaces.push('');
				}else{
					find.push(full);
					replaces.push(content);
				}				
			}
		} while (matches);
		
		html = html.allReplace(find,replaces);
		
		regex = /{section fields="(\S*)"}([^\x05]*?){\/section}/g;
		// regex = new RegExp(/{section fields="(\S*)"}(.*?){\/section}/, 'g');
		find = [];
		replaces = [];
		
		do {
			matches = regex.exec(html);
			if (matches) {
				full = matches[0];				
				obj_str = matches[1];				
				content = matches[2];
				
				state=0;
				fields = obj_str.split(',');	
				
				for (const [key, values] of Object.entries(fields)) {
				
					attr = values.split('.');
					
					field=false;
					switch(attr.length){
						case 2:
								if(zppr.checkNested(single_property,attr[1]))
									field = single_property[attr[1]];
							break;
						case 3:
								if(zppr.checkNested(single_property,attr[1],attr[2]))
									field = single_property[attr[1]][attr[2]];
							break;
					}
				
					if(field){
						state=1;
						break;
					}
				}
				
				if(!state){
					find.push(full);
					replaces.push('');
				}else{
					find.push(full);
					replaces.push(content);
				}				
			}
		} while (matches);
		
		html = html.allReplace(find,replaces);
		
		regex = /{if field="(\S*)"}([^\x05]*?){\/if}/g;
		// regex = new RegExp(/{if field="(\S*)"}(.*?){\/if}/, 'g');
		find = [];
		replaces = [];
		
		do {
			matches = regex.exec(html);
			if (matches) {
				full = matches[0];
				obj_str = matches[1];
				fields = obj_str.split(',');
				state=true;
				
				for (const [key, value] of Object.entries(fields)) {
					attr = value.split('.');				
					content = matches[2];
					
					switch(attr.length){
						case 2:
								if(zppr.checkNested(single_property,attr[1])){
									field = single_property[attr[1]];
									state = state && field;
								}else{
									state = false;
								}
							break;
						case 3:
								if(zppr.checkNested(single_property,attr[1],attr[2])){
									field = single_property[attr[1]][attr[2]];
									state = state && field;
								}else{
									state = false;
								}
							break;
					}	
					
				}
			}
			
				
			if(!state){
				find.push(full);
				replaces.push('');
			}else{
				find.push(full);
				replaces.push(content);
			}	
				
			
		} while (matches);
		
		html = html.allReplace(find,replaces);
				
		regex = /{ygl}([^\x05]*?){\/ygl}/g;
		// regex = new RegExp(/{if field="(\S*)"}(.*?){\/if}/, 'g');
		find = [];
		replaces = [];
		
		do {
			matches = regex.exec(html);
			if (matches) {
				full = matches[0];
				content = matches[1];
				
				state=0;
				
				if( single_property.hasOwnProperty('sourceid') && single_property.sourceid > 0 ){
					state=true;
				}
			}
			
				
			if(!state){
				find.push(full);
				replaces.push('');
			}else{
				find.push(full);
				replaces.push(content);
			}	
				
			
		} while (matches);
		
		html = html.allReplace(find,replaces);
		
		return html;
	},
	print_template:function(single_property){		
		
		var print_logo = zppr.data.root.web.hasOwnProperty('print_logo')?zppr.data.root.web.print_logo:'';
		var print_color = zppr.data.root.web.hasOwnProperty('print_color')?zppr.data.root.web.print_color:'';
		
		var html='';
		
		html += '<div id="print-view-column" class="zy-print-view js-print-view top-brdr no-border" style="border-color: '+ print_color +'">' +
					'<div class="zy_print-view-wrap">';

		if(print_color){
			html += 	'<div class="zy-print-header-top" style="color: '+ print_color +' !important;">' +
							'<div class="zy-print-logo">' +
								'<img src="'+ print_logo +'">' +
							'</div>' +
						'</div>';
		}
						
		html +=			'<div class="row">' +
							'<div class="zy_prop-main col-xs-7">' +
								
								'<div class="zy_prop-address">' +
									'<h1>'+ zppr.getAddress(single_property) +'</h1>' +
								'</div>' +
								
								'<div class="zy_prop-img">';									
		
		if( single_property.hasOwnProperty('photoList') && single_property.photoList.length ){
			i=0;
			img=[];
			for (const [key, pic] of Object.entries(single_property.photoList)) {
				if( pic.imgurl.indexOf('mlspin.com') !== -1 ){
					img.push("//media.mlspin.com/photo.aspx?mls="+ single_property.listno +"&w=744&h=419&n="+ i +"");
				}else{
					img.push(pic.imgurl);
				}
				i++;
			}
			
			if ( img[0] ) html += 		'<img src="'+ img[0] +'" />';
		}
		
		html +=					'</div>' +
							'</div>' +
							
							'<div class="zy_prop-sidebar col-xs-5">' +
								'<ul class="zy_prop-details">' +
									
									'<li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">List Price</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">'+ zppr.data.currency +'{{realprice}}</span></li>' +
									'<li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">MLS#</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">{{listno}}</span></li>' +
									zppr.sidebar_template(single_property) +		
								'</ul>' +
							'</div>' +
						'</div>' +
						'<div class="row">' +
						
							'<div class="zy_prop-desc col-xs-12">' +
								
								'<h3 class="zy-feature-title nomargintop">Description</h3>' +
								
								'{{remarks}}' +
							'</div>' +
						'</div>' +
						'<div class="row">' +
							'<div class="zy_prop-openhouse col-xs-12">';									
									
		if(single_property.hasOwnProperty('openHouses') && single_property.openHouses.length){
			html+=				'<h3 class="zy-feature-title">Open House</h3>';
			
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
				
				html+=			'<p class="open-house-info"><span class="openHomeText">'+ startDate +' '+ printEndTime +'</p>';						
			
			}
		}							
									
		html +=				'</div>' +
						'</div>' +
						'<div class="row zy-mls-toggle">' +
							
							'<div class="zy_mls-infos col-xs-12">' +
								
								zppr.feature_template(single_property) +
								
							'</div>' +
						'</div>' +
						'<div class="row zy-photos-toggle" style="display:none">' +
							
							'<div class="zy_prop-photos col-xs-12">' +
								
								'<h3 class="zy-feature-title nomargintop">Additional Photos</h3>';
								
		if( single_property.hasOwnProperty('photoList') && single_property.photoList.length ){
			i=0;
			image_urls=[];
			for (const [key, pic] of Object.entries(single_property.photoList)) {
				if( pic.imgurl.indexOf('mlspin.com') !== -1 ){
					image_urls.push("//media.mlspin.com/photo.aspx?mls="+ single_property.listno +"&w=1600&h=1024&n="+ i +"");
				}else{
					image_urls.push(pic.imgurl);
				}
				i++;
			}
			
			for (const [key, img] of Object.entries(image_urls)) {			
				html += 		"<img src=\""+ img +"\" />";
			}
		}
							
		html +=				'</div>' +
						'</div>' +
						'<div class="row">' +
							'<div class="zy_prop-disclaimer col-xs-12">';
							
		var source_details=single_property.sourceid ? zppr.get_source_text(single_property.sourceid, {'listOfficeName':single_property.listOfficeName, 'listAgentName': single_property.listAgentName, 'property': single_property}, 'list' ) : false;						
		if( source_details ){
			html += 			source_details;
		}else{
			html +=				'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
		}
									
		html +=				'</div>' +
						'</div>' +
					'</div>' +
				'</div>';
				
		return html;
	},
	mortgage_calculator:function(args){
		var html='';
		
		var defaults = {
			'default_homeprice' : 1000000,
			'default_downpayment_percent' : 20,
			'default_taxes_percent' : 0.98,
			'default_taxes_ammount' : '',
			'default_hoadues' : 0,
			'default_mortgage_insurance_percent' : 0.75,
			'default_homeowners_insurance_percent' : 0.4,
			'default_interestrate' : 3.77,
			'default_loan_type' : '30yrs',
		};
		
		args = zppr.parse_args(args,defaults);
		
		var default_homeprice = parseFloat(args.default_homeprice);
		var default_downpayment_percent = parseFloat(args.default_downpayment_percent);
		var default_taxes_percent = parseFloat(args.default_taxes_percent);
		var default_taxes_ammount = parseFloat(args.default_taxes_ammount);
		var default_hoadues = parseFloat(args.default_hoadues);
		var default_mortgage_insurance_percent = parseFloat(args.default_mortgage_insurance_percent);
		var default_homeowners_insurance_percent = parseFloat(args.default_homeowners_insurance_percent);
		var default_interestrate = parseFloat(args.default_interestrate);
		var default_loan_type = args.default_loan_type;
		
		default_downpayment=default_homeprice * default_downpayment_percent / 100;
		if(!default_taxes_ammount){	
			default_taxes=default_homeprice * default_taxes_percent / 100;
		}else{
			default_taxes=default_taxes_ammount;
			default_taxes_percent=default_taxes * 100 / default_homeprice;
		}
		default_mortgage_insurance=(default_homeprice/12) * default_mortgage_insurance_percent / 100;
		default_homeowners_insurance=(default_homeprice/12) * default_homeowners_insurance_percent / 100;

		formatted_homeprice = zppr.data.currency + Math.round(default_homeprice).toFixed(2).toString();
		formatted_downpayment_percent = default_downpayment_percent.toString() + '%';
		formatted_downpayment = zppr.data.currency + Math.round(default_downpayment).toFixed(2).toString();
		formatted_taxes_percent = default_taxes_percent.toString() + '%';
		formatted_taxes = zppr.data.currency + Math.round(default_taxes).toFixed(2).toString();
		formatted_hoadues = zppr.data.currency + Math.round(default_hoadues).toFixed(2).toString();
		formatted_mortgage_insurance_percent = default_mortgage_insurance_percent.toString() + '%';
		formatted_mortgage_insurance = zppr.data.currency + Math.round(default_mortgage_insurance).toFixed(2).toString();
		formatted_homeowners_insurance_percent = default_homeowners_insurance_percent.toString() + '%';
		formatted_homeowners_insurance = zppr.data.currency + Math.round(default_homeowners_insurance).toFixed(2).toString();
		formatted_interestrate = default_interestrate + '%';
		
		html += '<div class="zy-mortgage-calculator">' +
					'<h3>Payment Calculator</h3>' +
					'<div class="zy-mortgage-title">' +
						'<p id="zy-mortgage-total">-</p>' +
					'</div>' +
					'<div class="zy-mortgage-sub-title">' +
						'<p id="zy-mortgage-interest">-</p>' +
					'</div>' +
					'<div class="row">' +
						'<div class="col-xs-12 col-sm-12 mb-12">' +
							'<div class="zy_mortgage-bar">' +
							'</div>' +
						'</div>' +
					'</div>' +
					'<div class="row">' +
						'<div class="col-xs-12 col-sm-12 mb-12 mg-detail">' +
						'</div>' +
						'<div class="col-xs-12 col-sm-12 mb-12 mg-input">' +
							'<div class="row row-group">' +
								'<div id="zy_homeprice" class="col-xs-12 col-sm-6 mb-6">' +
									'<label>Home Price</label>' +
									'<input type="text" name="home_price" class="price-format form-control" id="mortgage-homeprice" value="'+ formatted_homeprice +'">' +
									'<input type="hidden" id="zy-mortgage-homeprice" />' +
								'</div>' +
								'<div id="zy_downpayment" class="col-xs-12 col-sm-6 mb-6">' +
									'<label>Down Payment</label>' +
									'<div class="col-2-group">' +
										'<input type="text" name="down_payment" class="price-format form-control" id="mortgage-downpayment" value="'+ formatted_downpayment +'">' +
										'<input type="text" name="down_payment_percent" class="percent-format form-control" id="mortgage-downpayment-percent" value="'+ formatted_downpayment_percent +'">' +
									'</div>' +
									'<input type="hidden" id="zy-mortgage-downpayment" />' +
								'</div>' +
							'</div>' +
							'<div class="row row-group">' +
								'<div id="zy_property-taxes" class="col-xs-12 col-sm-6 mb-6">' +
									'<label>Property Taxes</label>' +
									'<div class="col-2-group">' +
										'<input type="text" name="zy_property-taxes" class="price-format form-control" id="mortgage-property-taxes" value="'+ formatted_taxes +'">' +
										'<input type="text" name="zy_property_taxes_percent" class="percent-format form-control" id="mortgage-property-taxes-percent" value="'+ formatted_taxes_percent +'">' +
									'</div>' +
								'</div>' +
								'<div id="zy_hoa-dues" class="col-xs-12 col-sm-6 mb-6">' +
									'<label>HOA Dues</label>' +
									'<input type="text" name="hoa_dues" class="price-format form-control" id="mortgage-hoa-dues" value="'+ formatted_hoadues +'">' +
								'</div>' +			
							'</div>' +
							'<div class="row row-group">' +
								'<div id="zy_mortgage-insurance" class="col-xs-12 col-sm-6 mb-6">' +
									'<label>Mortgage Insurance</label>' +
									'<div class="col-2-group">' +
										'<input type="text" name="mortgage_insurance" class="price-format form-control" id="mortgage-insurance" value="'+ formatted_mortgage_insurance +'">' +
										'<input type="text" name="mortgage_insurance_percent" class="percent-format form-control" id="mortgage-insurance-percent" value="'+ formatted_mortgage_insurance_percent +'">' +
									'</div>' +
								'</div>' +
								'<div id="zy_homeowners-insurance" class="col-xs-12 col-sm-6 mb-6">' +
									'<label>Homeowners\' Insurance</label>' +
									'<div class="col-2-group">' +
										'<input type="text" name="homeowners_insurance" class="price-format form-control" id="mortgage-homeowners-insurance" value="'+ formatted_homeowners_insurance +'">' +
										'<input type="text" name="homeowners_insurance_percent" class="percent-format form-control" id="mortgage-homeowners-insurance-percent" value="'+ formatted_homeowners_insurance_percent +'">' +
									'</div>' +
								'</div>' +
							'</div>' +
							'<div class="row row-group">' +
								'<div id="zy_interest-rate" class="col-xs-12 col-sm-6 mb-6">' +
									'<label>Interest Rate</label>' +
									'<input type="text" name="interest_rate" class="percent-format form-control" id="mortgage-interest-rate" value="'+ formatted_interestrate +'">' +
								'</div>' +
								'<div id="zy_loan-type" class="col-xs-12 col-sm-6 mb-6">' +
									'<label>Loan Type</label>' +
									'<select name="loan_type" class="form-control" id="mortgage-loan-type">' +
										'<option '+ (default_loan_type=='30yrs'?'selected':'') +' value="30yrs">30 Years Fixed</option>' +
										'<option '+ (default_loan_type=='15yrs'?'selected':'') +' value="15yrs">15 Years Fixed</option>' +
										'<option '+ (default_loan_type=='5-1arm'?'selected':'') +' value="5-1arm">5/1 ARM</option>' +
									'</select>' +
								'</div>' +
							'</div>	' +
						'</div>' +
					'</div>' +
				'</div>';
		
		return html;
	},
	streetname_fix_comma:function(value){
		
		value=value.replace(', ',',');
		value=value.replace(' , ',',');
		value=value.replace(' ,',',');
		value=value.replace(',',', ');
		
		return value;
		
	},
	type_mask:function($fields, $key, $proptype, $sourceid){
		
		$sourceid='';
		
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
			if ( $entity.hasOwnProperty('propTypeMask') && ( ($entity.propTypeMask == 255) || ($entity.propTypeMask & (1 << $p_pty_mask)) == (1 << $p_pty_mask))
				 && ( $sourceid=='' || $sourceid!='' && $entity.sourceId==$sourceid ) ){
				$keyFeatures.push($entity);
			}
		}
		
		return $keyFeatures;
	},
	field_value:function( $key, $val, $proptype='', $sourceid='', $type='general' ){
		var $fields = zppr.get_field_list($type, $sourceid);
		
		//special case
		switch($key){
			case "mbrdimen":case "mbrdscrp":case "mbrDSCRP":
			case "bed2dimen":case "bed2DSCRP":
			case "bed3dimen":case "bed3DSCRP":
			case "bed4dimen":case "bed4DSCRP":
			case "bed5dimen":case "bed5DSCRP":
			case "bed6dimen":case "bed6DSCRP":
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
			case "oth6DIMEN":case "oth6DSCRP":
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
			case "headscrp6":case "coldscrp6":
			case "heaDSCRP6":case "colDSCRP6":
				$key=$fields.hasOwnProperty('ROOM')?"ROOM":$key;
				break;
			
			case "mbrlevel":
			case "bed2LEVEL":
			case "bed3LEVEL":
			case "bed4LEVEL":
			case "bed5LEVEL":
			case "bed6LEVEL":
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
			case "oth6LEVEL":
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
			
			if( $val.toString().indexOf('|') !== -1 ){
				var $separator="|";
			}else{	
				var $separator=",";
			}
			
			var $values=$val.toString().split($separator).map(item => item.trim());
			// print_r( "Before: " . $val. "<br />" );
			for(var i = 0; i < $values.length; i++) {
				$temp.push(0);
			}
			
			var $keyFeatures = zppr.type_mask($fields, $key, $proptype, $sourceid);
			
			for (const [key, $entity] of Object.entries($keyFeatures)) {
				$version = $entity.hasOwnProperty('version')?$entity.version:'';
				$fieldName = $entity.hasOwnProperty('fieldName')?$entity.fieldName:'';
				$shortDescription = $entity.hasOwnProperty('shortDescription')?$entity.shortDescription.split('$').map(item => item.trim()):'';
				$mediumDescription = $entity.hasOwnProperty('mediumDescription')?$entity.mediumDescription:'';
				$longDescription = $entity.hasOwnProperty('longDescription')?$entity.longDescription:'';
				$propTypeMask = $entity.hasOwnProperty('propTypeMask')?$entity.propTypeMask:'';
				
				$shortDescription = $shortDescription.filter(function (el) {
				  return el != '';
				});
				
				for (const [$index, $value] of Object.entries($temp)) {
					if( ! $temp[$index] ){
						if( $mediumDescription == $values[$index] ){
							$values[$index]=$values[$index].replace( $mediumDescription, $longDescription );
							$temp[$index]=1;
						}else if( zppr.in_array($values[$index],$shortDescription) ){
							
							$code='';
							for (const [$k, $v] of Object.entries($shortDescription)) {
								if($v == $values[$index]){
									$code=$v;
								}
							}
							
							$values[$index]=$values[$index].replace( $code, $longDescription );
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
								$replaces.push(zppr.get_status_name($v, single_property.sourceid, 'detail'));
							break;
						case "proptype":
								$replaces.push(zppr.proptype_label($v));
							break;
						case "syncTime":
								// var $mlstz = zppr.mls_timezone('');
								var $mlstz = zppr.browser_timezone();
								var ld = new Date($v).toLocaleString("en-US", {timeZone: $mlstz});
								var dt = new Date(ld);
								$datetime = dt.format('m-d-Y h:i A');
								
								$replaces.push($datetime);									
							break;
						case "streetno":
								if($rnhidestreetno && single_property.proptype=="RN")
									$replaces.push('');
								else
									$replaces.push(zppr.field_value( $k, $v, single_property.proptype, single_property.sourceid, 'detail' ));
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
						case "customtype":	
								var custom_key = single_property.hasOwnProperty('propsubtype')?'propsubtype':'proptype';
								$replaces.push(zppr.field_value( custom_key, $v, single_property.proptype, single_property.sourceid, 'detail' ));
							break;
						case "reqdownassociation":
								$replaces.push( ( parseFloat( $v ) * 100 ).toString() + '% month' );
							break;
						default:								
								$replaces.push(zppr.field_value( $k, $v, single_property.proptype, single_property.sourceid, 'detail' ));
							break;
					}
				}else if( Array.isArray($v) && typeof $v === "object" ){ //level 2,3,4,..
					for (const [$k2, $v2] of Object.entries($v)) {
						
						if(!Array.isArray($v2) && !typeof $v2 === "object"){
							if(jQuery.isNumeric($k2)){
								$find.push("{{"+$k+"_"+$k2+"}}");
								$replaces.push(zppr.field_value( $k2, $v2, single_property.proptype, single_property.sourceid, 'detail' ));
							}else{
								switch($k2){
									case "SQFTRoofedLiving":
											$find.push("{{"+$k+"_"+$k2+"}}");
											$replaces.push(zppr.formatNumber( $v2 ));
										break;
									default:
											$find.push("{{"+$k+"_"+$k2+"}}");
											$replaces.push(zppr.field_value( $k2, $v2, single_property.proptype, single_property.sourceid, 'detail' ));
										break;
								}
							}
						}else if(Array.isArray($v2)){
							for (const [$k3, $v3] of Object.entries($v2)) {
								if(!Array.isArray($v3) && !typeof $v3 === "object"){
									$find.push("{{"+$k+"_"+$k2+"_"+$k3+"}}");
									$replaces.push(zppr.field_value( $k3, $v3, single_property.proptype, single_property.sourceid, 'detail' ));
								}
							}
						}else if(typeof $v2 === "object"){
							for (const [$k3, $v3] of Object.entries($v2)) {
								if(!Array.isArray($v3) && !typeof $v3 === "object"){
									$find.push("{{"+$k+"_"+$k2+"_"+$k3+"}}");
									$replaces.push(zppr.field_value( $k3, $v3, single_property.proptype, single_property.sourceid, 'detail' ));
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
		
		String.prototype.allReplace = function(find,replaces) {
			var retStr = this;
			for (var x in find) {
				retStr = retStr.replace(new RegExp(find[x], 'g'), replaces[x]);
				// retStr = retStr.replace(new RegExp(find[x], 'gs'), replaces[x]);
				// retStr = retStr.replace(find[x], replaces[x]);
			}
			return retStr;
		};
		
		$html = $html.allReplace($find,$replaces);
		$html = $html.replace(/\{{[\w\h]{2,30}\}}/g, "-"); //more than 1 chars and max 30 chars
		
		return $html;
	},
	get_status_name:function( $status, $sourceid, $type='general' ){
		
		$converted_status='';
		var $fields = zppr.get_field_list($type, $sourceid);;
				
		if( $fields.hasOwnProperty('STATUS') ){
			// echo "<pre>"; print_r( $fields->STATUS ); echo "</pre>";
			for (const [$key, $entity] of Object.entries($fields.STATUS)) {
				
				var shortDescription = $entity.shortDescription.split('$');
				
				shortDescription = shortDescription.filter(function (el) {
				  return el != '';
				});
				
				if(zppr.in_array($status,shortDescription) || $status==$entity.mediumDescription && ( $sourceid!='' && $entity.sourceId==$sourceid || $sourceid=='' )){
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
	},
	get_field_list:function(type, sourceid){
		
		if(type=='detail' && sourceid!=''){
			return zipperagent['field_list_'+sourceid];
		}else{			
			return zppr.data.field_list
		}
	},
	is_branded_virtualtour:function(){
		
		var enabled = zppr.data.root.web.hasOwnProperty('branded_virtualtour')?zppr.data.root.web.branded_virtualtour:'';
		
		enabled=enabled?true:false;
		
		return enabled;
	},
	get_agent:function(mlsid){
		agents = zppr.data.agent_list;
		findAgent=[];
		/* if( agents.hasOwnProperty('filteredList') ){
			for (const [key, agent] of Object.entries(agents.filteredList)) { */
		if( agents.length ){
			for (const [key, agent] of Object.entries(agents)) {
				if( agent.hasOwnProperty('mlsAgentId') && agent.mlsAgentId == mlsid ){
					findAgent=agent;
					break;
				}
			}
		}
		
		return findAgent;
	},
	get_nobedrooms:function(property){
		
		var nobedrooms = '';
		
		if(property.hasOwnProperty('nobedrooms')){
			nobedrooms = property.nobedrooms;
		}
		
		return nobedrooms;
	},
	get_nobaths:function(property){
		
		var nobaths = '';
		
		if(property.hasOwnProperty('nobaths')){
			nobaths = property.nobaths;
		}
		
		return nobaths;
	},
	get_sqft:function(property){
		
		var sqft = '';
		
		var sourceid = property.hasOwnProperty('sourceid') ? property.sourceid : '';
			
		switch(sourceid){
			case 'CMLS_N':
					// echo "<pre>"; print_r($property); echo "</pre>";
					sqft = property.hasOwnProperty('bldgsqfeet') ? property.bldgsqfeet : '';
				break;
			default:				
					sqft = property.hasOwnProperty('squarefeet') ? property.squarefeet : '';
				break;
		}
		
		sqft = sqft!='' ? zppr.formatNumber( sqft ) : '';
		
		return sqft;
	},
	parse_args:function(args, defaults){
		
		for (const [key, value] of Object.entries(defaults)) {
			if( ! args.hasOwnProperty(key) ){
				args[key] = value;
			}
		}
		
		return args;
	},
	is_valid_url:function(str){
		var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
		'((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
		'((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
		'(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
		'(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
		'(\\#[-a-z\\d_]*)?$','i'); // fragment locator
		
		var is_valid = !!pattern.test(str);
		var is_contains_protocol = str.toString().indexOf('http://') !== -1 || str.toString().indexOf('https://') !== -1
		
		return is_valid && is_contains_protocol;
	},
	populate_schools:function(obj){
		
		var includes = [
			'GRADESCHOOL',
			'MIDDLESCHOOL',			
			'HIGHSCHOOL',
			'SCHOOLDISTRICT',	
		];
		
		var arr=[];
		
		if(obj.hasOwnProperty('result')){
			for (const [key, line] of Object.entries(obj.result)) {
				
				if(jQuery.inArray(line.field, includes) < 0)
					continue;
				
				if( line.hasOwnProperty('buckets') && line.buckets.length){
					
					var type = line.field.toLowerCase();
					var group = type.toLowerCase().replace(/\b[a-z]/g, function(letter) {
									return letter.toUpperCase();
								});
					
					for (const [key2, field] of Object.entries(line.buckets)) {	
						
						var prefix='';
						switch(line.field){
							case 'GRADESCHOOL':
									prefix='gschl';
								break;
							case 'MIDDLESCHOOL':
									prefix='mschl';
								break;
							case 'HIGHSCHOOL':
									prefix='hschl';
								break;
							case 'SCHOOLDISTRICT':
									prefix='aschdt';
								break;
						}
						
						var name = field.value.trim();
						var value = field.value.trim();
						var code = prefix+'_'+value;
						
						arr.push({
							'group':group,
							'name':name,
							'code':code,
							'type':type,
						});
					}
				}
				
			}
		}
		
		return arr;
	},
	populate_addresses:function(obj){
		
		var includes = [
			'FULLADDRESS',	
		];
		
		var arr=[];
		
		if(obj.hasOwnProperty('result')){
			
			for (const [key, line] of Object.entries(obj.result)) {
				
				if(jQuery.inArray(line.field, includes) < 0)
					continue;
				
				if( line.hasOwnProperty('buckets') && line.buckets.length){
					
					var type = line.field.toLowerCase();
					var group = type.toLowerCase().replace(/\b[a-z]/g, function(letter) {
									return letter.toUpperCase();
								});
					
					for (const [key2, field] of Object.entries(line.buckets)) {	
						
						var prefix='';
						switch(line.field){
							case 'FULLADDRESS':
									prefix='aflladdr';
								break;
						}
						
						var name = field.value.trim();
						var value = field.value.trim();
						var code = prefix+'_'+value;
						
						arr.push({
							'group':group,
							'name':name,
							'code':code,
							'type':type,
						});
					}
				}
				
			}
		}
		
		return arr;
	},
	populate_addresses_and_schools:function(obj){
		
		var includes = [
			'GRADESCHOOL',
			'MIDDLESCHOOL',			
			'HIGHSCHOOL',
			'SCHOOLDISTRICT',
			'FULLADDRESS',		
			'LISTNO',		
		];
		
		var arr=[];
		var arr_addr=[];
		
		if(obj.hasOwnProperty('result')){
			for (const [key, line] of Object.entries(obj.result)) {
				
				if(jQuery.inArray(line.field, includes) < 0)
					continue;
				
				if( line.hasOwnProperty('buckets') && line.buckets.length){
					
					var type = line.field.toLowerCase();
					var group = type.toLowerCase().replace(/\b[a-z]/g, function(letter) {
									return letter.toUpperCase();
								});
					
					for (const [key2, field] of Object.entries(line.buckets)) {	
						
						var prefix='';
						switch(line.field){
							case 'GRADESCHOOL':
									prefix='gschl';
								break;
							case 'MIDDLESCHOOL':
									prefix='mschl';
								break;
							case 'HIGHSCHOOL':
									prefix='hschl';
								break;
							case 'SCHOOLDISTRICT':
									prefix='aschdt';
								break;
							case 'FULLADDRESS':
									prefix='aflladdr';
								break;
							case 'LISTNO':
									prefix='alstid';
								break;
						}
						
						var name = field.value.trim();
						var value = field.value.trim();
						var code = prefix+'_'+value;
						
						if(type=='fulladdress'){
							arr_addr.push({
								'group':group,
								'name':name,
								'code':code,
								'type':type,
							});
						}else{
							arr.push({
								'group':group,
								'name':name,
								'code':code,
								'type':type,
							});
						}
					}
				}
				
			}
		}
		
		arr = jQuery.merge( arr_addr, arr );
		
		return arr;
	},
	populate_listids:function(obj){
		
		var includes = [
			'LISTNO',	
		];
		
		var arr=[];
		
		if(obj.hasOwnProperty('result')){
			
			for (const [key, line] of Object.entries(obj.result)) {
				
				if(jQuery.inArray(line.field, includes) < 0)
					continue;
				
				if( line.hasOwnProperty('buckets') && line.buckets.length){
					
					var type = line.field.toLowerCase();
					var group = type.toLowerCase().replace(/\b[a-z]/g, function(letter) {
									return letter.toUpperCase();
								});
					
					for (const [key2, field] of Object.entries(line.buckets)) {	
						
						var prefix='';
						switch(line.field){
							case 'LISTNO':
									prefix='alstid';
								break;
						}
						
						var name = field.value.trim();
						var value = field.value.trim();
						var code = prefix+'_'+value;
						
						arr.push({
							'group':group,
							'name':name,
							'code':code,
							'type':type,
						});
					}
				}
				
			}
		}
		
		return arr;
	},
	set_map_coordinate:function( map, area ){
		
		jQuery.get( "https://nominatim.openstreetmap.org/search?q="+ area +"&format=json&polygon=1&addressdetails=0&polygon_geojson=1", function( areas ) {
			
			var coordinates = [];
			
			if( zppr.checkNested(areas[0],'geojson','coordinates') ){
				
				for (const [key, coordinate] of Object.entries( areas[0].geojson.coordinates[0] )) {
					if( coordinate[0] && coordinate[1] ){
						coordinates.push({
							'lat': coordinate[1],
							'lng': coordinate[0],
						});
					}
				}
			}
			
			if(coordinates){
			
				// Define the LatLng coordinates for the polygon's path.
				var areaCoords = coordinates;
				// Construct the polygon.
				var highlight_area = new google.maps.Polygon({
				  paths: areaCoords,
				  strokeColor: '#FF0000',
				  strokeOpacity: 0.8,
				  strokeWeight: 2,
				  fillColor: '#FF0000',
				  fillOpacity: 0.35
				});
				highlight_area.setMap(map); 
			}
		});
	},
	trim_chars:function(string, length = 100, append = '&hellip;') {
		string = string.trim();

		if ( string.length > length ) {
			string = string.slice(0,length);
			string = string + append;
		}

		return string;
	}
};