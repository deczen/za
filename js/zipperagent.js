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
				
				if(school_code && school_name)
					requests['aschlnm'].push(school_code+''+school_name);
				else
					requests['aschlnm'].push(school_code);
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
								
								html_pagination = zppr.html_pagination(page, num, count, actual_link);
								jQuery(targetElement + ' .prop-total').html( zppr.list_total_text(count) );
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
										'<div class="zpa-status '+ (jQuery.isNumeric(status)?'status_'+status:status) +'">' +
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
									'<div class="zpa-status '+ (jQuery.isNumeric(status)?'status_'+status:status) +'">' +
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
	list_total_text:function(count){
		if(count>1){
			return zppr.formatNumber(count) + "  Properties for sale";
		}else{
			return zppr.formatNumber(count) + "  Property";
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
		
		timezone=Array.isArray(timezone)&&timezone[sourceid]?timezone[sourceid]:timezone;
		
		if(!timezone)
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
	}
};