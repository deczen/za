<?php
global $requests;
?>
<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/pikaday.css'; ?>">
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/pikaday.js'; ?>"></script>
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/pikaday.jquery.js'; ?>"></script>
<div id="zpa-main-container" class="zpa-container " style="display: inline;">
    <div class="zpa-widget mb-25">
        <form id="searchProfile" class="form-inline zpa-quick-search-form" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET" data-zpa-quick-search-bound="true">
            <fieldset>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 mb-10">
                        <label for="zpa-area-input" class="field-label"> Location </label>
								<input id="zpa-area-input" class="zpa-area-input form-control" placeholder="<?php echo (empty($requests['location_option'])) ? "Enter City / County / Zip" : "Select Location"; ?>"  name="location[]"/>
								<input class="zpa-area-input-hidden" name="" type="hidden">
					</div>
					<div class="col-xs-12 col-sm-2 mb-10">
                        <label for="zpa-min-date-homes" class="field-label zpa-min-date-label"> Min. Date </label>
                        <div class="" style="position:relative;">
                            <input id="zpa-min-date-homes" placeholder="" type="text" class="form-control zpa-search-form-input mindate" value="">
							<input id="zpa-min-date-homes-val" name="minDate" type="hidden" value=""> </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 mb-10">
                        <label for="zpa-max-date-homes" class="field-label zpa-max-date-label"> Max. Date </label>
                        <div class="" style="position:relative;">
                            <input id="zpa-max-date-homes" placeholder="" type="text" class="form-control zpa-search-form-input maxdate" value="">
							<input id="zpa-max-date-homes-val" name="maxDate" type="hidden" value=""> </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 mb-10">
                        <label for="zpa-start-time-homes" class="field-label zpa-min-date-label"> Start Time </label>
                        <div class="" style="position:relative;">
							<select id="zpa-start-time-homes" name="startTime" class="form-control zpa-search-form-input">
								<option value="">select time</option>
								<option value="01:00:00">01:00</option>
								<option value="02:00:00">02:00</option>
								<option value="03:00:00">03:00</option>
								<option value="04:00:00">04:00</option>
								<option value="05:00:00">05:00</option>
								<option value="06:00:00">06:00</option>
								<option value="07:00:00">07:00</option>
								<option value="08:00:00">08:00</option>
								<option value="09:00:00">09:00</option>
								<option value="10:00:00">10:00</option>
								<option value="11:00:00">11:00</option>
								<option value="12:00:00">12:00</option>
								<option value="13:00:00">13:00</option>
								<option value="14:00:00">14:00</option>
								<option value="15:00:00">15:00</option>
								<option value="16:00:00">16:00</option>
								<option value="17:00:00">17:00</option>
								<option value="18:00:00">18:00</option>
								<option value="19:00:00">19:00</option>
								<option value="20:00:00">20:00</option>
								<option value="21:00:00">21:00</option>
								<option value="22:00:00">22:00</option>
								<option value="23:00:00">23:00</option>
								<option value="24:00:00">24:00</option>
							</select>
						</div>
                    </div>
                    <div class="col-xs-12 col-sm-2 mb-10">
                        <label for="zpa-end-time-homes" class="field-label zpa-max-date-label"> End Time </label>
                        <div class="" style="position:relative;">
							<select id="zpa-end-time-homes" name="endTime" class="form-control zpa-search-form-input"> 
								<option value="">select time</option>
								<option value="01:00:00">01:00</option>
								<option value="02:00:00">02:00</option>
								<option value="03:00:00">03:00</option>
								<option value="04:00:00">04:00</option>
								<option value="05:00:00">05:00</option>
								<option value="06:00:00">06:00</option>
								<option value="07:00:00">07:00</option>
								<option value="08:00:00">08:00</option>
								<option value="09:00:00">09:00</option>
								<option value="10:00:00">10:00</option>
								<option value="11:00:00">11:00</option>
								<option value="12:00:00">12:00</option>
								<option value="13:00:00">13:00</option>
								<option value="14:00:00">14:00</option>
								<option value="15:00:00">15:00</option>
								<option value="16:00:00">16:00</option>
								<option value="17:00:00">17:00</option>
								<option value="18:00:00">18:00</option>
								<option value="19:00:00">19:00</option>
								<option value="20:00:00">20:00</option>
								<option value="21:00:00">21:00</option>
								<option value="22:00:00">22:00</option>
								<option value="23:00:00">23:00</option>
								<option value="00:00:00">00:00</option>
							</select>
						</div>
                    </div>
                    <div class="col-xs-12 col-sm-1">
                        <label for="zpa-select-baths-homes" class="field-label">&nbsp;</label>
                        <button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true" role="none"></i> </button>
                    </div>
					
                    <input id="openHomesMode" name="openHomesMode" type="hidden" value="true">
					<?php 
					$default_order = isset($requests['o']) ? $requests['o'] : za_get_default_order();
					if($default_order): ?>
					<input type="hidden" name="o" value="<?php echo $default_order; ?>" />
					<?php endif; ?>
					
					<?php if($requests['column']): ?>
					<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
					<?php endif; ?>
			
					<?php if($requests['newsearchbar']): ?>
					<input type="hidden" name="newsearchbar" value="<?php echo $requests['newsearchbar']; ?>" />
					<?php endif; ?>
			
					<?php if($requests['direct']): ?>
					<input type="hidden" name="direct" value="<?php echo $requests['direct']; ?>" />
					<?php endif; ?>
			
					<?php if($requests['propertytype']): ?>
						<?php 
						$proptypes = explode( ',', $requests['propertytype'] );
						foreach($proptypes as $proptype):
						?>
						<input type="hidden" name="propertytype[]" value="<?php echo $proptype; ?>" />
						<?php 
						endforeach;
					endif; ?>
                </div>
            </fieldset>
            <div> </div>
        </form>
    </div>
	
	<?php if(empty($requests['location_option'])): ?>
		<?php global_magicsuggest_script(); ?>
	<?php else: ?>
	<script>
		jQuery(document).ready(function($) {
			
			var ms = $('#zpa-area-input').magicSuggest({
				<?php
					ob_start();
					include ZIPPERAGENTPATH . '/custom/options.php';
					$jsonData=ob_get_clean();
					$data = json_decode($jsonData);
					$added = array();
					$included = explode(',',$requests['location_option']);
					foreach( $data as $field){
						if(in_array($field->code, $included)){
							$added[]=$field;
						}
					}
					$jsonAdded = json_encode($added);
				?>
				data: <?php echo $jsonAdded; ?>,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: false,
				autoSelect: true,
				groupBy: 'group',
				// maxSelection: 1,
				allowFreeEntries: false,
				expandOnFocus: true,
				minChars: 0,
				editable: false,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				}

			});
		});
	</script>
	<?php endif; ?>
	<script>
		jQuery(document).ready(function($) {
			var $datepicker = $('.maxdate').pikaday({
				format: 'MMM D, YYYY',
				onSelect: function(date, format) {
					const day = date.getDate();
					const month = date.getMonth() + 1;
					const year = date.getFullYear();
					var date= `${year}-${month}-${day}`;
					$('#zpa-max-date-homes-val').val(date);
				}
			});
			var $datepicker = $('.mindate').pikaday({
				format: 'MMM D, YYYY',
				onSelect: function(date, format) {
					const day = date.getDate();
					const month = date.getMonth() + 1;
					const year = date.getFullYear();
					var date= `${year}-${month}-${day}`;
					$('#zpa-min-date-homes-val').val(date);
				}
			});
		});
    </script>
</div>