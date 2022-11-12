<?php

global $list, $maplist, $crit, $search, $searchId;
global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o;

$query_args=array();
$rb = ZipperagentGlobalFunction()->zipperagent_rb();

$contactIds=get_contact_id();

//map zoom level
$zoom = isset($requests['map_zoom'])?$requests['map_zoom']:10; // default 10

if( $list ): ?>
<div id="map-content">
   <?php 
		$i=0;
		$wrapOpen=false;
		$column=2; //map view only has 2 columns
		foreach( $list as $option ): ?>
			<?php 				
			
			if( $open )
				$property=isset($option->mergedProperty)?$option->mergedProperty:null;
			else
				$property=$option;
			
			if( !isset($property->id) )
				continue;
			
			$params = zipperagent_property_grid( 
				$property, 
				array( 
					'i' => $i,
					'column' => $column,
					'wrapOpen' => $wrapOpen,
					'total_props' => sizeof($list),
					'is_desktop' => 1,
					'columns_code' => 'col-lg-6 col-sm-6 col-md-12 col-xs-12',
				),
				$requests, 
				$searchId, 
				$search
			);
			
			extract( $params );
			
			$i++;
		endforeach; ?>
   
   
	<?php if( $showPagination ): ?>
	<div class="clearfix"></div>
		<?php if( ! $is_ajax_count ): ?>
		<div class="col-md-12 pagination-wrap prop-pagination">
			<div class="col-xs-12">			
				<?php echo zipperagent_pagination($page, $num, $count, $actual_link); ?>
			</div>
		</div>
		<!--col-->
		<?php else: ?>
		<div class="col-md-12 pagination-wrap prop-pagination"></div> <!-- show on ajax -->
		<?php endif; ?>
	<?php endif; ?>
	
	<?php
	$listing_disclaimer = zipperagent_get_listing_disclaimer();
	?>
	<?php if( $listing_disclaimer ): ?>
	<div class="row">
		<div class="col-xs-12">
			<span class="listing-disclaimer" role="none"><?php echo $listing_disclaimer ?></span>
		</div>
		<!--col-->
	</div>
	<?php endif; ?>
</div>
	
<?php
else: ?>
<div id="map-content" class="row">

	<div class="col-md-12">
		<div class="col-md-12 mb-10 mt-25">
			<span>No Properties Found </span>
		</div>
		<div class="col-md-12 pagination-wrap">
			<ul class="pagination">
				<li class="disabled"><a href="#">&laquo;</a>
				</li>
				<li class="disabled"><a href="#">1 of 0</a>
				</li>
				<li class="disabled"><a href="#">&raquo;</a>
				</li>
			</ul>
		</div>		
		<!--col-->
	</div>
	<!--row-->
</div>
<?php endif; ?>
<script>		
	jQuery(window).bind( 'scroll', function() {
		
		var $sticky = jQuery('#map');
		var $mapWrapper = $sticky.find('#map_wrapper');
		var $top = 0;
		if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){
			// var $headerHeight = jQuery('.edgtf-fixed-wrapper').outerHeight();
			var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
				$top = $top + $headerHeight;
				$mapWrapper.css('height',jQuery(window).outerHeight() - $headerHeight);
		}else{
			var $headerHeight = 0;
				$top = $top + $headerHeight;
				$mapWrapper.css('height',jQuery(window).outerHeight() - $headerHeight);
		}
		var $stickyH = $sticky.outerHeight();
		var $stickyContainer = jQuery('.sticky-container');
		var $stickyContainerOffset = $stickyContainer.offset();
		var $start = $stickyContainerOffset.top;
		var $limit = $start + $stickyContainer.outerHeight();
		var $padding = 15; // padding size;
		var $maxWidth = $sticky.find('#map_canvas').outerWidth() + $padding;
		
		if(jQuery(window).width() > 768){
		   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
			   $sticky.css({
			   'position':'fixed', 
			   'top': $top,
			   'max-width' : $maxWidth});
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
			   $maxWidth = $sticky.find('#map_canvas').outerWidth() + $padding;
			   $mapWrapper.css('height',jQuery(window).outerHeight() - $headerHeight);
		   }
		}
	});
</script>
<script>

	jQuery( '.zpa-grid-result-photocount > a' ).on( 'click', function(){
		
		var listingId=jQuery(this).attr('listingId');
		
		if( ! jQuery('#modal-'+listingId+' .modal-body').is(':empty') )
			return;
		
		var data = {
			action: 'get_property_slides',
			'listingId': listingId,                      
			'contactId': '<?php echo implode(',',$contactIds) ?>',                      
		};
		
		jQuery('#modal-'+listingId+' .modal-body').html('<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/tenor.gif"; ?>" alt="tenor" />');
		
		console.time('generate slides');
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				// console.log(response);
				if( response['html'] ){
					jQuery('#modal-'+listingId+' .modal-body').html(response['html']);
				}
				
				console.timeEnd('generate slides');
			},
			error: function(){
				console.timeEnd('generate slides');
			}
		});
	});
	
</script>
<script>
	jQuery('.zpa-listing-search-results').unbind().on('click', '.save-favorite-btn:not(.needLogin)', function(){
		
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
		var crit={
			<?php
			$saved_crit=array();
			if(!$crit){
				$saved_crit=$search;
			}else{
				$temp = explode(';', $crit);
				foreach( $temp as $val ){
					if( empty($val) )
						continue;
					
					$temp2 = explode(':', $val);
					$saved_crit[$temp2[0]]=$temp2[1];
				}
			}
			
			foreach( $saved_crit as $key=>$val ){
				echo "'{$key}': '{$val}',"."\r\n";
			}
			?>
		};
		var data = {
			action: 'save_as_favorite',
			'listingId': listingId,                  
			'contactId': contactId,                    
			'crit': crit,                    
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
<script>
	<?php /*
	jQuery(function($) {
	// Asynchronously Load the map API 
	var script = document.createElement('script');
	// script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyDuQ5zA1N7-IcAJnbMm_QoZLCNmRhFilNw&sensor=false&callback=initialize";
	<?php
	if( function_exists( 'conall_edge_options' ) )
		$conall_google_api_key = conall_edge_options()->getOptionValue('google_maps_api_key');
	?>
	script.src = "//maps.googleapis.com/maps/api/js?key=<?php echo $conall_google_api_key ?>&sensor=false&callback=initialize";
	document.body.appendChild(script);
	}); */ ?>



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
			
		// Multiple Markers
		var markers = [
		<?php
			$index=0;
			foreach( $maplist as $option ){			
									
				if( $open )
					$property=isset($option->mergedProperty)?$option->mergedProperty:null;
				else
					$property=$option;

				if( !isset($property->id) )
					continue;
				
				if( !isset($property->lat) || empty($property->lat) || !isset($property->lng) || empty($property->lng) )
					continue;
				
				$fulladdress = zipperagent_get_address($property);
				$lat = $property->lat;
				$lng = $property->lng;
				$listingId = $property->id;
				$beds = isset($property->nobedrooms)?$property->nobedrooms:'';
				$bath = isset($property->nobaths)?$property->nobaths:'';
				$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
				$longprice = zipperagent_currency() . number_format_i18n( $price, 0 );
				$shortprice = zipperagent_currency() . number_format_short( $price, 0 );
				$proptype = $property->proptype;
				
				
				echo "['". str_replace( "'", "\'", $fulladdress ) ."', {$lat},{$lng},'{$listingId}','{$longprice}','{$shortprice}','{$beds}','{$bath}',{$index},'{$proptype}'],"."\r\n";
				
				$index++;
			}
		?>
		];
							
		// Info Window Content
		infoWindowContent = [
			<?php
			 foreach( $maplist as $option ){			
									
				if( $open )
					$property=isset($option->mergedProperty)?$option->mergedProperty:null;
				else
					$property=$option;
				
				if( !isset($property->id) )
					continue;
				
				if( !isset($property->lat) || empty($property->lat) || !isset($property->lng) || empty($property->lng) )
					continue;
				
				$fulladdress = zipperagent_get_address($property);
				$lat = $property->lat;
				$lng = $property->lng;
				$beds = zipperagent_get_nobedrooms($property);
				$bath = zipperagent_get_nobaths($property);
				$sqft = zipperagent_get_sqft($property);
				$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
				$price = zipperagent_currency() . number_format_i18n( $price, 0 );
				if( strpos($property->photoList[0]->imgurl, 'mlspin.com') !== false )
					$src = "//media.mlspin.com/photo.aspx?mls={$property->listno}&w=100&h=100&n=0";
				else
					$src = str_replace('http://','//',$property->photoList[0]->imgurl);
				
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
				$is_login=ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0;
				$is_active=zipperagent_is_favorite($property->id)?"active":"";
				$searchId='';
				$str_contactIds=implode(',',$contactIds);
				
				$needBorder=0;
				if($beds)
					$needBorder++;
				if($bath)
					$needBorder++;
				if($sqft)
					$needBorder++;
				
				$needBorder_html = $needBorder > 1 ? "| ": "";
			
				$beds_html = $beds ? "{$beds} BEDS" : ""; 
				$bath_html = $bath ? " {$needBorder_html}{$bath} BATH" : ""; 
				$sqft_html = $sqft ? " {$needBorder_html}{$sqft} SQFT" : ""; 
				
				echo "['<div class=\"info_content\">' +
						'<div class=\"pic\"><img style=\"display: block; margin: 0 auto;\" src=\"{$src}\" /></div>' +
						'<div class=\"content\">' +				
							'<a href=\"{$single_url}\"><strong>". str_replace( "'", "\'", $fulladdress )  ."</strong></a>' +
							'<p class=\"price\">{$price}</p>' +
							'<p class=\"favorite\"><a class=\"listing-{$property->id} save-favorite-btn {$is_active}\" isLogin=\"{$is_login}\" listingId=\"{$property->id}\" searchId=\"{$searchId}\" contactId=\"{$str_contactIds}\" href=\"#\" afteraction=\"save_favorite_listing\"><i class=\"fa fa-heart\" aria-hidden=\"true\" role=\"none\"></i> Favorite</a></p>' +
							'<p class=\"info\">{$beds_html}{$bath_html}{$sqft_html}</p>' +
						'</div>' + '<a class=\"link-cover\" href=\"{$single_url}\"></a>' +
					'</div>'],"."\r\n";
			}
			?>
		];
			
		// Display multiple markers on a map		
		var marker, i;
		
		// Loop through our array of markers & place each one on the map  
		for( i = 0; i < markers.length; i++ ) {
			
			//marker
			var icon1 = "<?php echo ZIPPERAGENTURL . "images/marker.png"; ?>";
			var icon2 = "<?php echo ZIPPERAGENTURL . "images/marker-hover.png"; ?>";
			
			var position = new google.maps.LatLng(markers[i][1], markers[i][2]);		
			
			bounds.extend(position);
			
			<?php /*
			marker = new google.maps.Marker({
				position: position,
				map: map,			
				icon: icon1,
				title: markers[i][0]
			}); */ ?>
			
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
			
			saved_markers.push(marker);
			
			<?php /*
			// Allow each marker to have an info window    
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infoWindow.setContent(infoWindowContent[i][0]);
					infoWindow.open(map, marker);
				}
			})(marker, i));

			google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
				return function() {
					marker.setIcon(icon2);
				}
			})(marker, i));
			
			google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
				return function() {
					marker.setIcon(icon1);
				}
			})(marker, i)); */ ?>
			
			// Automatically center the map fitting all markers on the screen
			map.fitBounds(bounds);        
		}
		
		<?php /* //not works
		//fit all markers
		// var latlngbounds = new google.maps.LatLngBounds();
		// for (var i = 0; i < markers.length; i++) {
			// latlngbounds.extend(markers[i]);
		// }
		// map.fitBounds(latlngbounds); */ ?>
		
		<?php /*
		// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
		var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
			this.setZoom(<?php echo $zoom; ?>);
			google.maps.event.removeListener(boundsListener);
		}); */ ?>
		
		//map clustering
		var markerCluster = new MarkerClusterer(map, saved_markers,
		{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
		
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
		}
		
		
		$codes=$requests['location'];
		if(is_array($codes)){			
			$search=array();
			foreach($data as $area){
				if(in_array($area->code,$codes)){
					$search[]=$area->name;
				}
			}					
			
			$i=1;
			// echo "search: ";
			// print_r($search);
			foreach($search as $search_query){	
				$coordinates=array();
				$areas = get_map_coordinate($search_query);
				// echo "<pre>"; print_r($areas); echo "</pre>";
				if(isset($areas[0]->geojson->coordinates[0])){
					foreach($areas[0]->geojson->coordinates[0] as $coordinate){
						if(isset($coordinate[0]) && $coordinate[0] && isset($coordinate[1]) && $coordinate[1]){
							$coordinates[]=array(
								'lat'=> $coordinate[1],
								'lng'=> $coordinate[0],
							);
						}
					}
				}
				
				if($coordinates):
				?>
				
				// Define the LatLng coordinates for the polygon's path.
				var areaCoords_<?php echo $i; ?> = [
				<?php
				  foreach($coordinates as $coordinate){
						echo '{lat: '. $coordinate['lat'] .', lng: '. $coordinate['lng']. '},'."\r\n";
				  } ?>
				];

				// Construct the polygon.
				var highlight_area_<?php echo $i; ?> = new google.maps.Polygon({
				  paths: areaCoords_<?php echo $i; ?>,
				  strokeColor: '#FF0000',
				  strokeOpacity: 0.8,
				  strokeWeight: 2,
				  fillColor: '#FF0000',
				  fillOpacity: 0.35
				});
				highlight_area_<?php echo $i; ?>.setMap(map); 
				<?php 
				endif; 
				$i++;
			}
		}
		?>
		
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
			var linked_name='';
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
			
			<?php /*
			div.innerHTML = "<div class=\"short-info\"><span class=\"price\">"+ price +"</span>&nbsp;|&nbsp;<span class=\"beds\">Beds&nbsp;"+ bedrooms +"</span>&nbsp;|&nbsp;<span class=\"bath\">Baths&nbsp;"+ bath +"</span></div>" +
							"<span class=\"short-price\">"+ shortprice +"</span>"; */ ?>
							
			div.innerHTML = "<div class=\"short-info\"><span class=\"price\">"+ price +"</span>"+ bedrooms_html + bath_html +"</div>";
							
			<?php
			$markers = zipperagent_get_map_markers();
			
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
							
							
			// div.innerHTML ='<div class="marker" data-marker_id="123" style="position: absolute; cursor: pointer; width: 20px; height: 20px; background: blue; left: -9.65656px; top: -20.4536px;"></div>');
			// console.log(div);
			
			google.maps.event.addDomListener(div, "click", function(event) {
				// alert('You clicked on a custom marker!');		
				google.maps.event.trigger(self, "click");
				// console.log(event);
				infoWindow.setContent(infoWindowContent[index][0]);
				// console.log(infoWindowContent[index][0]);
				// console.log(map);
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
		var index = jQuery(this).attr('index');	
		google.maps.event.trigger(saved_markers[index], 'mouseover');
		// scrollToMarker(index); //scroll to location
		infoWindow.setContent(infoWindowContent[index][0]);
		infoWindow.setPosition(saved_markers[index].position);
		infoWindow.open(map, saved_markers[index]);
	});

	jQuery(".zpa-grid-result").mouseleave( function(){
		var index = jQuery(this).attr('index');	
		google.maps.event.trigger(saved_markers[index], 'mouseout');
		infoWindow.close();
	});

	initialize();
	});
</script>
<?php if($is_ajax_count): ?>
<script>
	jQuery(document).ready(function(){
		var vars={
			<?php 
			foreach($vars as $key=>$val){
				echo "$key: '$val',"."\r\n";
			}			
			?>
		};
		
		var data = {
			action: 'prop_result_and_pagination',
			'vars': vars,
			'pagenum': '<?php echo $page; ?>',
			'num': '<?php echo $num; ?>',
			'maxlist': '<?php echo $maxtotal; ?>',
			'actual_link': '<?php echo $actual_link; ?>',
		};
		
		console.time('generate list count/pagination');
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
			
				if( response['result'] ){
					jQuery('.zpa-listing-search-results .prop-total').html(response['html_count']);
					jQuery('.zpa-listing-search-results .prop-pagination').html(response['html_pagination']);
					jQuery( '.property-results .prop-total' ).removeClass('hide');
				}
				
				console.timeEnd('generate list count/pagination');
			},
			error: function(){
				console.timeEnd('generate list count/pagination');
			}
		});
	});
</script>
<?php endif; ?>
<script>
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
</script>
<?php auto_trigger_button_script(); ?>