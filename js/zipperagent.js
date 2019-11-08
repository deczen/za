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
	},
	generate_crit:function(requests){
		
		var generatedCrit="";
		var excludes = zppr.data.long_excludes;
		var requests = zppr.key_to_lowercase(requests); //convert all key to lowercase
		/**
		 * VARIABLES
		 * @ set values for each variables
		 */	 

		var is_shortcode 		= (requests.hasOwnProperty('is_shortcode')?requests['is_shortcode']:'');
		
		var o 					= ( requests.hasOwnProperty('o')?requests['o']:'' );
		var location 			= ( requests.hasOwnProperty('location[]')?requests['location[]']:'' );
		var address 			= ( requests.hasOwnProperty('address')?requests['address']:'' );
		var advStNo 			= ( requests.hasOwnProperty('advstno')?requests['advstno']:'' );
		var advStName 			= ( requests.hasOwnProperty('advstname')?requests['advstname']:'' );
		var advTownNm 			= ( requests.hasOwnProperty('advtownnm')?requests['advtownnm']:'' );
		var advStates 			= ( requests.hasOwnProperty('advstates')?requests['advstates']:'' );
		var advCounties 		= ( requests.hasOwnProperty('advcounties')?requests['advcounties']:'' );
		var advStZip 			= ( requests.hasOwnProperty('advstzip')?requests['advstzip'].replace(' ', ''):'' );
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
		var showPagination 		= ( requests.hasOwnProperty('pagination')?requests['pagination']:1 );
		var showResults	 		= ( requests.hasOwnProperty('result')?requests['result']:1 );
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
				}else if( temp.substring(temp, 0, 5) == 'aars_' ){
					loc_area.push(temp.substring(5));
				}else if( temp.substring(temp, 0, 5) == 'azip_' ){
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
					requests['aschlnm'].push(school_code+'$'+school_name);
				else
					requests['aschlnm'].push(school_code);
			}
		}

		//remove space from alstid (listing id search)
		if( requests.hasOwnProperty('alstid') )
			requests['alstid']=requests['alstid'].replace(' ','');
		
		for (const [key, val] of Object.entries(requests)) {
			if( ! excludes.indexOf(key.toLowerCase()) ){
				if(Array.isArray(val)){
					advSearch[key]=val.join();
				}else{			
					advSearch[key]=(val);
				}
			}
		}

		/* get page number */
		page = zppr.data.page ? zppr.data.page : 1;
		page = requests.hasOwnProperty('page') ? requests['page'] : page;

		num=requests.hasOwnProperty('listinapage') ? requests['listinapage'] : 24;
		maxtotal=requests.hasOwnProperty('maxlist') ? requests['maxlist'] : 0;

		/* page correction */
		if( maxtotal > 0 ){
			maxpage=Math.ceil(maxtotal/num);
			if( page > maxpage )
				page = maxpage;
		}

		index=page*num-num;
		
		/**
		 * API CALL
		 * @ call method and get properties
		 */

		if( openHomesMode ){ // open houses mode
			
			//no action
		}else if( coords ){ // map mode
			
			//no action
			
		}else if( searchDistance=="true" || searchDistance=="1" || (lat && lng) ){ // map mode
			
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
				if(o){
					delete advSearch.o;
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
		}
		
		return generatedCrit;
	},
	search:function(targetElement,resultType,searchType,subdomain,customer_key,crit,model,sidx,ps,contactId){
		var response=false;
		var parm=[];
		parm.push(searchType,subdomain,customer_key,crit,model,sidx,ps,contactId);
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {

			if (this.readyState == 4 ) {
				if(this.status == 200){
					var html='';
					response=JSON.parse(this.responseText);
					if(response.responseCode===200){
						switch(resultType){
							case "list":
								for (const [key, value] of Object.entries(response.result.filteredList)) {
								  // console.log(key, value);
								  html += zppr.one_property(value);
								}
								// console.log('html: '+html);
								jQuery(targetElement).html( html );
							break;
						}
					}
					
				}else {
					console.log("status = " + status + " received");
				}
			} else {
				console.log("status = " + status + " received");
			}
		};
		xhttp.open("GET", guxx(parm), true);
		xhttp.send();
		
		return response;
	},
	one_property:function(property, column){
		var listingid = property.id;
		var listid = property.displaySource + '#' + property.listno;
		var img_url = property.hasOwnProperty('photoList') ? property.photoList[0].imgurl : zppr.data.plugin_url + 'images/no-photo.jpg';			
		var address = zppr.getAddress(property);
		var prop_url = zppr.getPropUrl(listingid,address);
		var price=(zppr.data.sold_status.indexOf(property.status)?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
		var status = property.status;
		var days = property.dayssincelisting;
		var proptype = property.proptype;
		var img_count =  property.hasOwnProperty('photoList') ? property.photoList.length : 0;
		var sqft_html = property.squarefeet ? '<div class="zpa-grid-result-basic-info-item3"> <b> '+ zppr.formatNumber( property.squarefeet ) +' </b> sqft </div>' : '&nbsp;';
		var bath_html = property.nobaths ? '<div class="zpa-grid-result-basic-info-item2"> <b>'+ property.nobaths +' </b> baths </div>' : '&nbsp;';
		var beds_html = property.nobedrooms ? '<div class="zpa-grid-result-basic-info-item1"> <b>'+ property.nobedrooms +'</b> beds </div>' : '&nbsp;';
		
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
		
		var html = '<div class="zpa-grid-result '+ columns_code +'">' +
					'<div class="zpa-grid-result-container well">' +
						'<div class="row">' +
							'<div class="col-xs-12">' +
								'<div style="background-image: url(\''+ img_url +'\');" class="zpa-results-grid-photo">' +
									'<img class="printonly" src="'+ img_url +'">' +
									'<a class="listing-'+ listingid +' save-favorite-btn " islogin="0" listingid="'+ listingid +'" searchid="" contactid="" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true"></i></a>' +
									'<a class="property_url" href="'+ prop_url +'"></a>' +
									'<a class="property_url" href="'+ prop_url +'"><span class="zpa-for-sale-price"> '+ price +' </span> </a>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div class="za-container">' +
							'<div class="row mt-10">' +
								'<div class="col-xs-12">' +
									'<a class="property_url" href="'+ prop_url +'">' +
									'<span class="zpa-grid-result-address"> <img src="./wp-content/plugins/zipperagent/images/map-marker.png" title="map marker" alt="map marker"> '+ address +' </span> </a>' +
								'</div>' +
							'</div>' +
																			
							'<div class="row mt-10 property-infos">' +
								'<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
									'<div class="zpa-grid-result-basic-info-container">' +
										beds_html +
									'</div>' +
								'</div>' +
								'<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
									'<div class="zpa-grid-result-basic-info-container">' +
										bath_html +
									'</div>' +
								'</div>' +
								'<div class="col-xs-4 nopaddingleft nopaddingright"> ' +
									'<div class="zpa-grid-result-basic-info-container">' +
										sqft_html +
									'</div>' +
								'</div>	' +								
							'</div>' +
							'<div class="row mb-5 fs-12 mt-10">' +
								'<div class="col-xs-8">' +
									'<div class="zpa-grid-result-additional-info">' +
										'<div class="zpa-status '+ status +'">' +
											'<span class="text-center d-block">'+ status +'</span>' +
										'</div>' +
									'</div>' +
								'</div>' +
								'<div class="col-xs-4">' +
									'<span class="zpa-on-site pull-right"> <i class="fa fa-calendar" aria-hidden="true"></i> '+ days +' Day(s)  </span>' +
								'</div>' +
							'</div>' +
						'</div>' +
						
						'<div class="row">' +
							'<div class="col-xs-12">' +
								'<div class="property-divider">&nbsp;</div>' +
							'</div>' +
						'</div>' +
							
						'<div class="za-container">' +
							'<div class="row">' +
								'<div class="col-xs-10 pull-left fs-11 ">' +
									'<div class="zpa-grid-result-mlsnum-proptype">'+ listid +' | '+ proptype +' </div>' +
								'</div>' +
								'<div class="col-xs-2 pull-right fs-12 zpa-grid-result-photocount nopaddingleft">' +
									'<a href="#" data-toggle="modal" data-target="#modal-'+ listingid +'" listingid="'+ listingid +'"> <i class="glyphicon glyphicon-camera"></i> </a> <span class="photo-count">('+ img_count +')</span>' +
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
									'</div>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div style="clear:both"></div>' +
					'</div>' +
					'<div class="grid-margin"></div>' +
				'</div>';
		
		return html;
	},
	formatNumber:function(num) {
	  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '1,')
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
	wpFeSanitizeTitle:function(fulladdress){
		return "1";
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
		num = num.replace( ',','' ); //remove comma
		num = num.replace( ' ','' ); //remove space
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
		return zppr.formatNumber(count) + " Result(s)";
	}
};