<?php
global $requests, $is_ajax_count, $is_map_explore;

//map zoom level
$zoom = isset($requests['map_zoom'])?$requests['map_zoom']:10; // default 10
$micro = isset($requests['micro'])&&!$requests['micro']?0:1; // default always on
$listlimit = $requests['listinapage'] ? $requests['listinapage'] : ( $micro ? 1000 : 100 );
// $listlimit = 2;
extract(zipperagent_get_map_centre());

$is_map_explore=1;

if($requests['lat'] && $requests['lng']){
	$za_lat = $requests['lat'];
	$za_lng = $requests['lng'];
}

$plugin_data = get_plugin_data( ABSPATH . "/wp-content/plugins/zipperagent/zipperagent.php", false, false );
?>
<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/view-new.css?ver=' . $plugin_data['Version']; ?>">
<div id="zpa-main-container" class="zpa-container">
	
	<div id="zy_map-explore">
		<?php zipperagent_omnibar($requests); ?>
		
		<div class="property-results mb-10">
		<?php
		if( $showResults ){ ?>
			<div class="prop-total">&nbsp;</div>
		<?php } ?>
		</div>
		
		<div id="map">
			<div id="map_wrapper" class="map-explore">								
				<div id="color-palette" style="display:none"></div>
				<div id="map_canvas" class="mapping" style="width:100%; height:100%;"></div>
			</div>
			
			<?php
			$markers = zipperagent_get_map_markers();
			//echo '<pre>'; print_r($markers); echo '</pre>';
			
			if($markers):
				echo '<div class="proptype-markers"><ul>';
				foreach($markers as $key => $value){
					
					$proptype = zipperagent_property_type( $key );
					
					echo '<li class="proptype-marker"><img src="' . $value . '" alt=" ' . $proptype . '" title=""><span>' . $proptype . '</span></li>';
				}
				echo '</ul></div>';
				
			endif;
			?>
		</div>		
		
	</div>
	<script defer type="text/javascript" src="https://app.zipperagent.com/za-jslib/za-jsutil.min.js"></script>
	<script defer type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/zipperagent.js?ver=" . $plugin_data['Version']; ?>"></script>
	<script>
		jQuery('#zpa-main-container').unbind().on('click', '.save-favorite-btn:not(.needLogin)', function(){
			
			var element = jQuery(this);
			
			if( element.hasClass('active') )
				return false;		
			
			var searchId = element.attr('searchId');
			var contactId = element.attr('contactId');
			var listingId = element.attr('listingId');
			var isLogin = element.attr('isLogin');
			
			save_favorite_listing(element, listingId, contactId, searchId, isLogin, isLogin );	
			
			return false;
		});
		
		function save_favorite_listing(element, listingId, contactId, searchId, isLogin){
			
			var data = {
				action: 'save_as_favorite',
				'listingId': listingId,                  
				'contactId': contactId,                    
				'crit': '',                    
				'searchId': searchId,
				'isLogin': isLogin,
			};
			
			console.time('save favorite');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {    
					// console.log(response);
					if( response['result'] ){
						// alert('success');
						element.addClass('active');
						
						//set topbar count
						jQuery('.favorites-count .za-count-num').html(response['favorites_count']);
					}else{
						// alert( 'Submit failed!' );
					}
					
					console.timeEnd('save favorite');
				},
				error: function(){
					console.timeEnd('save favorite');
				}
			});
		}
	</script>
<script src="https://unpkg.com/@googlemaps/markerclusterer@2.5.3/dist/index.min.js"></script>
<script>
		jQuery(document).ready(function(){ 

			var map;
			var saved_markers=new Array();
			var infoWindow = new google.maps.InfoWindow({
				disableAutoPan: true,
			});
			var infoWindowContent = [];
			var loop=0;

			function initialize(za_lat, za_lng, zoom, refresh) {
				var mapOptions = {
					zoom: zoom,
					center: new google.maps.LatLng(za_lat, za_lng),
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					disableDefaultUI: true,
					streetViewControl: true,
					zoomControl: true,
					gestureHandling: 'greedy',
				};
								
				// Display a map on the page
				map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
				map.setTilt(45);
				
				// Create the DIV to hold the control and call the CenterControl()
				// constructor passing in this DIV.
				/* var centerControlDiv = document.createElement('div');
				var centerControl = new CenterControl(centerControlDiv, map);

				centerControlDiv.index = 1;
				map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv); */
				
				<?php /*
				//update polygon input value	
				google.maps.event.addListener(map, 'bounds_changed', function() {
					updateCoords();
				}); */ ?>
				
				if(refresh){
					setTimeout( function() {				  
						jQuery('#zpa-search-filter-form').submit();
					}, 1000);
				}
			}
			
			function refreshMap(){
				var current_zoom = map.getZoom();
				var current_center = map.getCenter();
				var current_lat = current_center.lat();
				var current_lng = current_center.lng();
				
				saved_markers=new Array();
				
				initialize(current_lat, current_lng, current_zoom, 0);
			}
			
			function updateCoords(){				
				var NECorner = map.getBounds().getNorthEast();
				var SWCorner = map.getBounds().getSouthWest();
				var NWCorner = new google.maps.LatLng(NECorner.lat(), SWCorner.lng());
				var SECorner = new google.maps.LatLng(SWCorner.lat(), NECorner.lng());
				<?php /*
				var boundarywkt= "POLYGON (("+ NECorner.lat() +", "+ NECorner.lng() +"),("+ SECorner.lat() +", "+ SECorner.lng() +"),("+ SWCorner.lat() +", "+ SWCorner.lng() +"),("+ NWCorner.lat() +", "+ NWCorner.lng() +"))";
				var name ='boundarywkt';
				var value=boundarywkt; */ ?>
				var coords= NECorner.lng() +":"+ NECorner.lat() +","+ SWCorner.lng() +":"+ SWCorner.lat();
				var name ='coords';
				var value=coords;
				addFormField(name,value,'');
				
				//show refresh button
				jQuery('.za-refresh-map').removeClass('hide');
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
					div.style.background = 'white';
					div.setAttribute("index", index)
					
					if (typeof(self.args.marker_id) !== 'undefined') {
						div.dataset.marker_id = self.args.marker_id;
					}
					
					var bedrooms_html = bedrooms ? "&nbsp;|&nbsp;<span class=\"beds\">Beds&nbsp;"+ bedrooms +"</span>" : '';
					var bath_html = bedrooms ? "&nbsp;|&nbsp;<span class=\"bath\">Baths&nbsp;"+ bath +"</span>" : '';
					
					div.innerHTML = "<div class=\"short-info\"><span class=\"price\">"+ price +"</span>"+ bedrooms_html + bath_html +"</div>";
									
					<?php					
					if($markers){ ?>
						
						switch(proptype){				
							<?php
							foreach( $markers as $ptype => $marker_url ){ ?>
								
								case "<?php echo $ptype; ?>":
										div.className = 'zpa-marker zpa-image-marker';
										div.innerHTML += "<span class=\"short-price-marker\">"+ shortprice +"<img src=\"<?php echo $marker_url; ?>\" /></span>";
									break;
							<?php
							} ?>
								default:
										div.innerHTML += "<span class=\"short-price\">"+ shortprice +"</span>";
									break;
						}
					<?php	
					}else{ ?>
					div.innerHTML += "<span class=\"short-price\">"+ shortprice +"</span>";
					<?php
					}
					?>
					
					google.maps.event.addDomListener(div, "click", function(event) {	
						google.maps.event.trigger(self, "click");
						infoWindow.setContent(infoWindowContent[index][0]);
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
			
			// Sets the map on all markers in the array.
			// function deleteMarkers() {
			window.deleteMarkers=function(){
				<?php /* for (var i = 0; i < saved_markers.length; i++) {
					// saved_markers[i].remove();
					
					// console.log(saved_markers[i]);
					saved_markers[i].setMap(null);					
					// console.log(saved_markers[i]);
				} */ ?>
				saved_markers = [];
			}
			
			function setMarkers(map, markers, infoWindows){
				// deleteMarkers();
				
				var bounds = new google.maps.LatLngBounds();
				// Display multiple markers on a map		
				var marker, i;
				
				// infoWindowContent = infoWindows;
				jQuery.each( infoWindows, function( key, value ) {
				  curr_index = value[1];
				  infoWindowContent[curr_index]=value;
				});
				
				// Loop through our array of markers & place each one on the map  
				for( i = 0; i < markers.length; i++ ) {
					
					curr_index = markers[i][8];					
					var position = new google.maps.LatLng(markers[i][1], markers[i][2]);		
					
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
							index: curr_index,
							proptype: markers[i][9],
						}
					);
					
					// saved_markers.push(marker);    
					saved_markers[curr_index]=marker;				
				}			
				
				//map clustering
var markerCluster = new markerClusterer.MarkerClusterer({
    map: map,
    markers: saved_markers,
    icons: [
        {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m1.png',
            width: 53,
            height: 53
        },
        {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m2.png',
            width: 56,
            height: 56
        },
        {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m3.png',
            width: 66,
            height: 66
        },
        {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m4.png',
            width: 78,
            height: 78
        },
        {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m5.png',
            width: 90,
            height: 90
        }
    ]
});

				<?php /*
				//update polygon input value
				updateCoords(); */ ?>
			}
			
			function CenterControl(controlDiv, map) {

				// Set CSS for the control border.
				var controlUI = document.createElement('div');
				controlUI.style.backgroundColor = '#fff';
				controlUI.style.border = '1px solid #eee';
				controlUI.style.borderRadius = '5px';
				controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
				controlUI.style.cursor = 'pointer';
				controlUI.style.marginTop = '10px';
				controlUI.style.marginBottom = '22px';
				controlUI.style.textAlign = 'center';
				controlUI.title = 'Click to recenter the map';
				controlUI.className = "za-refresh-map";
				controlDiv.appendChild(controlUI);

				// Set CSS for the control interior.
				var controlText = document.createElement('div');
				// controlText.style.color = 'rgb(25,25,25)';
				// controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
				controlText.style.fontSize = '16px';
				controlText.style.lineHeight = '38px';
				controlText.style.paddingLeft = '5px';
				controlText.style.paddingRight = '5px';
				controlText.innerHTML = 'Refresh Result';
				controlUI.appendChild(controlText);

				// Setup the click event listeners: simply set the map to Chicago.
				controlUI.addEventListener('click', function() {
					loop=0;
					jQuery('#zpa-search-filter-form').submit();
				});

			}
			
			initialize('<?php echo $za_lat; ?>', '<?php echo $za_lng; ?>', <?php echo $requests['map_zoom']; ?>, 1); // show map
			
			var index=0;			
			var looplimit = 5;
			var listlimit = <?php echo $listlimit; ?>;
			
			jQuery('#zpa-search-filter-form').on("submit", function(event) {
				
				var $form = jQuery(this); //wrap this in jQuery
				var data = jQuery(this).serialize();
				var request = jQuery(this).serializeArray();
				var url = $form.attr('action') + '?' + data;
				var valueToPush={};
				valueToPush = {"name":"action", "value":"generate_map_markers"};
				request.push(valueToPush);
				var valueToPush={};
				valueToPush = {"name":"actual_link", "value":url};
				request.push(valueToPush);
				window.history.pushState("", "", url);
				
				console.time('generate map');
				
				var parm=[];
				var subdomain=zppr.data.root.web.subdomain;
				var customer_key=zppr.data.root.web.authorization.consumer_key;
				var requests = zppr.get_form_inputs(jQuery('#zpa-search-filter-form'));	
				var params = zppr.generate_api_params(requests);
				var ps=listlimit;
				var sidx=0;
				var crit = params.crit;
				var order=requests.o.replace(/%253A/g, ":").replace(/%3A/g, ":");
				// var model=zppr.data.root.web.aloff?'aloff:'+zppr.data.root.web.aloff+';':""+order;
				var contactIds=zipperagent.contactIds.join();
				var micro=<?php echo $micro; ?>;
				var response=false;
				parm.push(2,subdomain,customer_key,crit,order,sidx,ps,"",micro);
				
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {

					if (this.readyState == 4 ) {
						if(this.status == 200){
							var curr_markers=[];
							var curr_infoWindowContent=[];
							response=JSON.parse(this.responseText);
							if(response.responseCode===200){
								
								if(response.result.hasOwnProperty('filteredList')){
									for (const [key, value] of Object.entries(response.result.filteredList)) {
										
										property = value;
										
										if(!property.hasOwnProperty('lat') || !property.hasOwnProperty('lng'))
											continue;
										
										fulladdress = zppr.getAddress(property);
										lat = property.lat;
										lng = property.lng;
										listingId = property.id;
										beds = zppr.get_nobedrooms(property);
										bath = zppr.get_nobaths(property);
										sqft = zppr.get_sqft(property);
										price=(zppr.data.sold_status.indexOf(property.status)?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
										longprice = zppr.moneyFormat(price);
										shortprice = zppr.moneyShorten(price);
										proptype = property.proptype;
										prop_url = zppr.getPropUrl(listingId,fulladdress);
										img_url = property.hasOwnProperty('imageUrl')?property.imageUrl:( property.hasOwnProperty('photoList') ? property.photoList[0].imgurl : zppr.data.plugin_url + 'images/no-photo.jpg' );
										is_active = 0;
										is_login = zipperagent.is_login;
										searchId = '';
										
										needBorder=0;
										if(beds)
											needBorder++;
										if(bath)
											needBorder++;
										if(sqft)
											needBorder++;
										
										needBorder_html = needBorder > 1 ? "| ": "";
										
										beds_html = beds ? beds +" BEDS" : ""; 
										bath_html = bath ? " "+ needBorder_html + bath + " BATH" : ""; 
										sqft_html = sqft ? " "+ needBorder_html + sqft + " SQFT" : ""; 
										
										curr_markers.push([fulladdress,lat,lng,listingId,longprice,shortprice,beds,bath,index,proptype]);
										curr_infoWindowContent.push(['<div class=\"info_content\">' +
											'<div class=\"pic\"><img style=\"display: block; margin: 0 auto;\" src=\"'+ img_url +'\" /></div>' +
											'<div class=\"content\">' +				
												'<a href=\"'+ prop_url +'\"><strong>'+ fulladdress +'</strong></a>' +
												'<p class=\"price\">'+ longprice +'</p>' +
												'<p class=\"favorite\"><a class=\"listing-'+ listingId +' save-favorite-btn '+ is_active +'\" isLogin=\"'+ is_login +'\" listingId=\"'+ listingId +'\" searchId=\"'+ searchId +'\" contactId=\"'+ contactIds +'\" href=\"#\" afteraction=\"save_favorite_listing\"><i class=\"fa fa-heart\" aria-hidden=\"true\" role=\"none\"></i> Favorite</a></p>' +
												'<p class=\"info\">'+ beds_html +  bath_html + sqft_html + '</p>' +
											'</div>' + '<a class="link-cover" href=\"'+ prop_url +'\"></a>' +
										'</div>', index]);
										
										index++;
									}
								}
								
								if(curr_markers)
									setMarkers(map, curr_markers, curr_infoWindowContent);
								
								loop++;
							
								// if(loop <= (looplimit - 1) && response.result.filteredList.length == listlimit){
								if(response.result.filteredList.length == listlimit){
									sidx+=listlimit;
									search_loop(subdomain,customer_key,crit,order,sidx,ps);
								}else{								
									totalPropertiesCount(subdomain,customer_key,crit,order,sidx,ps);
								}
								
								console.timeEnd('generate map');
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
		
				event.preventDefault();
				
				//hide refresh button
				jQuery('.za-refresh-map').addClass('hide');
				
				refreshMap();
			});	
						
			function search_loop(subdomain,customer_key,crit,order,sidx,ps){
				
				console.time('generate map loop');
				
				var parm=[];
				var response=false;
				var contactIds=zipperagent.contactIds.join();
				var micro=<?php echo $micro; ?>;
				
				order = order.replace(/%253A/g, ":").replace(/%3A/g, ":");
				parm.push(2,subdomain,customer_key,crit,order,sidx,ps,"",micro);
				
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {

					if (this.readyState == 4 ) {
						if(this.status == 200){
							var curr_markers=[];
							var curr_infoWindowContent=[];
							response=JSON.parse(this.responseText);
							if(response.responseCode===200){
								
								if(response.result.hasOwnProperty('filteredList')){
									for (const [key, value] of Object.entries(response.result.filteredList)) {
										
										property = value;
										
										if(!property.hasOwnProperty('lat') || !property.hasOwnProperty('lng'))
											continue;
										
										fulladdress = zppr.getAddress(property);
										lat = property.lat;
										lng = property.lng;
										listingId = property.id;
										beds = property.hasOwnProperty('nobedrooms')?property.nobedrooms:'';
										bath = property.hasOwnProperty('nobaths')?property.nobaths:'';
										sqft = property.hasOwnProperty('squarefeet')?property.squarefeet:'';
										price=(zppr.data.sold_status.indexOf(property.status)?(property.hasOwnProperty('saleprice')?property.saleprice:property.listprice):property.listprice);
										longprice = zppr.moneyFormat(price);
										shortprice = zppr.moneyShorten(price);
										proptype = property.proptype;
										prop_url = zppr.getPropUrl(listingId,fulladdress);
										img_url = property.hasOwnProperty('imageUrl')?property.imageUrl:( property.hasOwnProperty('photoList') ? property.photoList[0].imgurl : zppr.data.plugin_url + 'images/no-photo.jpg' );
										is_active = 0;
										is_login = zipperagent.is_login;
										searchId = '';
										
										needBorder=0;
										if(beds)
											needBorder++;
										if(bath)
											needBorder++;
										if(sqft)
											needBorder++;
										
										needBorder_html = needBorder > 1 ? "| ": "";
										
										beds_html = beds ? beds +" BEDS" : ""; 
										bath_html = bath ? " "+ needBorder_html + bath + " BATH" : ""; 
										sqft_html = sqft ? " "+ needBorder_html + sqft + " SQFT" : ""; 
										
										curr_markers.push([fulladdress,lat,lng,listingId,longprice,shortprice,beds,bath,index,proptype]);
										curr_infoWindowContent.push(['<div class=\"info_content\">' +
											'<div class=\"pic\"><img style=\"display: block; margin: 0 auto;\" src=\"'+ img_url +'\" /></div>' +
											'<div class=\"content\">' +				
												'<a href=\"'+ prop_url +'\"><strong>'+ fulladdress +'</strong></a>' +
												'<p class=\"price\">'+ longprice +'</p>' +
												'<p class=\"favorite\"><a class=\"listing-'+ listingId +' save-favorite-btn '+ is_active +'\" isLogin=\"'+ is_login +'\" listingId=\"'+ listingId +'\" searchId=\"'+ searchId +'\" contactId=\"'+ contactIds +'\" href=\"#\" afteraction=\"save_favorite_listing\"><i class=\"fa fa-heart\" aria-hidden=\"true\" role=\"none\"></i> Favorite</a></p>' +
												'<p class=\"info\">'+ beds_html +  bath_html + sqft_html + '</p>' +
											'</div>' +
										'</div>', index]);
										
										index++;
									}
								}
								
								if(curr_markers)
									setMarkers(map, curr_markers, curr_infoWindowContent);
								
								loop++;
							
								// if(loop <= (looplimit - 1) && response.result.filteredList.length == listlimit){
								if(response.result.filteredList.length == listlimit){
									sidx+=listlimit;
									search_loop(subdomain,customer_key,crit,order,sidx,ps);
								}else{								
									totalPropertiesCount(subdomain,customer_key,crit,order,sidx,ps);
								}
								
								console.timeEnd('generate map loop');
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
				
				//hide refresh button
				jQuery('.za-refresh-map').addClass('hide');
			}

			function totalPropertiesCount(subdomain,customer_key,crit,order,sidx,ps){
				
				console.time('generate list count/pagination');
				
				var parm=[];
				var response=false;
				var micro=<?php echo $micro; ?>;
				
				order = order.replace(/%253A/g, ":").replace(/%3A/g, ":");
				parm.push(3,subdomain,customer_key,crit,order,sidx,ps,"",micro);
				
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {

					if (this.readyState == 4 ) {
						if(this.status == 200){
							var curr_markers=[];
							var curr_infoWindowContent=[];
							response=JSON.parse(this.responseText);
							if(response.responseCode===200){
								jQuery( '.property-results .prop-total').html(zppr.list_total_text(response.result.dataCount));
								console.timeEnd('generate list count/pagination');
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
			}		
		});
	</script>
	<script>		
		jQuery(window).bind( 'scroll', function() {
			
			var $sticky = jQuery('#map .proptype-markers');
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
			
			var $searchBarHeight = jQuery('#omnibar-tools.fixedheader').length ? jQuery('#omnibar-tools').outerHeight() : 0;
		
			$top = $top + $searchBarHeight;
			
			var $stickyH = $sticky.outerHeight();
			var $stickyContainer = jQuery('#map');
			var $stickyContainerOffset = $stickyContainer.offset();
			var $start = $stickyContainerOffset.top;
			var $limit = $start + $stickyContainer.outerHeight();
			var $padding = 15; // padding size;
			var $maxWidth = '100%';
			
			if(jQuery(window).width() > 768){
			   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
				   $sticky.css({
				   'position':'fixed', 
				   'top': $top});
			   }
			   else if (jQuery(window).scrollTop() > $limit - $stickyH - $top) {
				   $sticky.css({
						   'position': 'absolute',
						   'top'     : 'auto',
					   });
			   }
			   else {
				   $sticky.css({
					'position' : 'absolute',
					'top' : 0});
			   }
			}
		});
	</script>
	
</div>