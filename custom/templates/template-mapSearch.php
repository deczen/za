<?php
global $requests;

?>
<div id="zpa-main-container" class="zpa-container " style="display: inline;" data-zpa-client-id="">
    <div>
        <form id="zpa-main-search-form" class="form-inline" action="<?php echo zipperagent_page_url( 'search-results' ) ?>" method="GET" target="_self" novalidate="novalidate">
            <fieldset>
				<div class="row">
					 <div class="col-xs-12 col-sm-4 mb-10">
                        <label for="zpa-select-property-type" class="field-label zpa-select-property-type-label"> Property Type </label>
                        <div class="zpa-property-type-message" style="display: none;"> <small> Some selected areas can be used only in residential property searches </small> </div>
                        <?php /*
						<select id="zpa-select-property-type" name="propertyType[]" class="form-control multiselect" multiple="multiple">
							<?php
							$propTypeFields = get_property_type();
							$propTypeOption = !empty($requests['property_type_option']) ? explode( ',', $requests['property_type_option'] ) : array();
							$propDefaultOption = !empty($requests['property_type_default']) ? explode(',',$requests['property_type_default']) : za_get_default_proptype();
						
							foreach( $propTypeFields as $fieldCode=>$fieldName ){
								if($propTypeOption){
									if(in_array($fieldCode, $propTypeOption)){
										echo "<option value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
									}
								}else{
									// echo $propDefaultOption . " == " . $fieldCode. "<br>";
									// if(in_array($fieldCode, $propDefaultOption))
										// $selected="selected";
									// else
										// $selected="";
									
									echo "<option $selected value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
								}										
							}
							?>
						</select> */ ?>

						<div class="dropdown cq-dropdown">
							<button class="btn btn-default dropdown-toggle form-control" type="button" id="proptype-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Select <span class="caret"></span> </button>
							<ul class="dropdown-menu" aria-labelledby="proptype-dropdown">
								<?php
								$propTypeFields = get_property_type();
								$propTypeOption = !empty($requests['property_type_option']) ? explode( ',', $requests['property_type_option'] ) : array();
								$propDefaultOption = !empty($requests['property_type_default']) ? explode(',',$requests['property_type_default']) : za_get_default_proptype();
								
								//generate proptype options
								foreach( $propTypeFields as $fieldCode=>$fieldName ){
									// echo $propDefaultOption . " == " . $fieldCode. "<br>";
									if(in_array($fieldCode, $propDefaultOption))
										$checked="checked";
									else
										$checked="";
										
									if($propTypeOption){
										if(in_array($fieldCode, $propTypeOption)){
											echo "<option value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
											echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propertyType[]\" value='{$fieldCode}' $checked>{$fieldName} </label></li>";
										}
									}else{									
										echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propertyType[]\" value='{$fieldCode}' $checked>{$fieldName} </label></li>";
									}										
								}
								
								$propSubTypeFields = get_property_sub_type();
								
								//generate propsubtype options
								foreach( $propSubTypeFields as $fieldCode=>$fieldName ){
									
									if(in_array($fieldCode, $propDefaultOption))
										$checked="checked";
									else
										$checked="";
										
									echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propSubType[]\" value='{$fieldCode}' $checked>{$fieldName} </label></li>";																		
								}
								?>
							</ul>
						</div>
                    </div>
					<div class="col-xs-12 col-sm-2 mb-10">
						<label for="zpa-minprice-homes" class="field-label zpa-minprice-label"> Min. Price </label>
						<div class="" style="position:relative;">
							<div class="zpa-label-overlay-money"> $ </div>
							<input id="zpa-minprice-homes" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['minlistprice']; ?>"> </div>
					</div>
					<div class="col-xs-12 col-sm-2 mb-10">
						<label for="zpa-maxprice-homes" class="field-label zpa-maxprice-label"> Max. Price </label>
						<div class="" style="position:relative;">
							<div class="zpa-label-overlay-money"> $ </div>
							<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['maxlistprice']; ?>"> </div>
					</div>
					<div class="col-xs-12 col-sm-2 mb-10">
						<label for="zpa-select-bedrooms-homes" class="field-label zpa-select-bedrooms-label"> Beds </label>
						<select id="zpa-select-bedrooms-homes" name="bedrooms" class="form-control zpa-chosen-select-width">
							<option value="">Any</option>
							<option value="1">1+</option>
							<option value="2">2+</option>
							<option value="3">3+</option>
							<option value="4">4+</option>
							<option value="5">5+</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-2 mb-10">
						<label for="zpa-select-baths-homes" class="field-label zpa-select-baths-label"> Baths </label>
						<select id="zpa-select-baths-homes" name="bathCount" class="form-control zpa-chosen-select-width">
							<option value="">Any</option>
							<option value="1">1+</option>
							<option value="2">2+</option>
							<option value="3">3+</option>
							<option value="4">4+</option>
							<option value="5">5+</option>
						</select>
					</div>
				</div>
                <div class="row">						
                    <div class="col-xs-12" id="zpa-search-tabs">											
						<div id="zpa-search-polygon">
							<div class="row mb-10">
								<div class="col-xs-12 mt-10"> Click or tap on the map to begin. To edit your completed polygon, drag any point to a new location. </div>
								<div class="col-xs-12">
									<div id="panel">
									  <div id="color-palette" style="display:none"></div>
									  <div class="pull-right">
										<button id="delete-button">Delete Selected Shape</button>
									  </div>
									</div>
									<div id="map" style="height: 400px; width: 100%"></div>
									<div id="zpa-map-canvas" style="height: 400px; width: 100%"></div>

								</div>
							</div>
							<div class="row mt-25">
								 <div class="col-xs-8">
								 </div>
								<div class="col-xs-4" style="text-align:right;">
									<button id="zpa-main-search-form-submit" type="submit" class="btn btn-lg btn-block btn-primary btn-form-submit"> Search </button>
								</div>
							</div>
							<input id="zpa-boundary" name="boundaryWKT" type="hidden" value="">
							<?php $default_order = za_get_default_order(); ?>
							<?php if($default_order){ ?><input type="hidden" name="o" value="<?php echo $default_order; ?>" /><?php } ?>
						</div>
					</div>
                </div>
            </fieldset>
			<?php 
			$default_order = isset($requests['o']) ? $requests['o'] : za_get_default_order();
			if($default_order): ?>
			<input type="hidden" name="o" value="<?php echo $default_order; ?>" />
			<?php endif; ?>
			
			<?php if(isset($requests['newsearchbar'])): ?>
			<input type="hidden" name="newsearchbar" value="<?php echo $requests['newsearchbar']; ?>" />
			<?php endif; ?>
        </form>
    </div>
	<?php /*
	if( function_exists( 'conall_edge_options' ) )
		$connal_google_api_key = conall_edge_options()->getOptionValue('google_maps_api_key');
	?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=<?php echo $connal_google_api_key ?>&sensor=false&libraries=drawing"></script> */ ?>
	<script type="text/javascript">
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

      function deleteSelectedShape() {
        if (selectedShape) {
          selectedShape.setMap(null);
        }
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

      function initialize() {
        <?php extract(zipperagent_get_map_centre()); ?>
		var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: new google.maps.LatLng('<?php echo $za_lat; ?>', '<?php echo $za_lng; ?>'),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          disableDefaultUI: true,
		  streetViewControl: true,
          zoomControl: true,
		  gestureHandling: 'greedy',
        });

        var polyOptions = {
          strokeWeight: 0,
          fillOpacity: 0.45,
          editable: true
        };
        // Creates a drawing manager attached to the map that allows the user to draw
        // markers, lines, and shapes.
        drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.POLYGON,
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
        google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', deleteSelectedShape);
		google.maps.event.addListener(drawingManager, 'polylinecomplete', function(line) {
			var coordinates = line.getPath().getArray().toString();
			jQuery( '#zpa-boundary' ).val('POLYGON ('+ coordinates +')');
		});
		google.maps.event.addListener(drawingManager, 'rectanglecomplete', function(line) {
			// var coordinates = line.getPath().getArray().toString();
			// jQuery( '#zpa-boundary' ).val('POLYGON ('+ coordinates +')');
		});
		google.maps.event.addListener(drawingManager, 'circlecomplete', function(line) {
			// alert(line.getPath().getArray().toString());
		});
		google.maps.event.addListener(drawingManager, 'polygoncomplete', function(line) {
			var coordinates = line.getPath().getArray().toString();
			jQuery( '#zpa-boundary' ).val('POLYGON ('+ coordinates +')');
		});
		
        buildColorPalette();
      }
      // google.maps.event.addDomListener(window, 'load', initialize);
	  
	  jQuery(document).ready(function(){
		initialize();
		
		jQuery( '#delete-button' ).on( 'click', function(){
			jQuery( '.gmnoprint > div:not(:last-child)' ).click();
			return false;
		});
	  });
    </script>
	<script>
		jQuery(function(){ jQuery('.cq-dropdown').dropdownCheckboxes(); });
	</script> 
	<?php /*
	<script>
		// Material Select Initialization
		jQuery(document).ready(function($) {
		  $('.multiselect').multiselect({
			// buttonWidth : '160px',			
			includeSelectAllOption : true,
			nonSelectedText: 'Select',
			numberDisplayed: 1,
			buttonClass: 'form-control',
		  });
		  
		  <?php if(is_array($propDefaultOption)): ?>$('#zpa-select-property-type.multiselect').multiselect('select', ['<?php echo implode("','",$propDefaultOption) ?>']);<?php endif; ?>
		});
	</script> */ ?>
	<script>
		jQuery(document).ready(function($){
			$('.input-number').keyup(function(event) {

				// skip for arrow keys
				if(event.which >= 37 && event.which <= 40) return;

				// format number
				$(this).val(function(index, value) {
					return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				});
			});
			
			$('.input-number').val(function(index, value) {
				return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			});
		});
	</script>
</div>