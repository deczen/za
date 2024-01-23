<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/pikaday.css'; ?>">
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/pikaday.js'; ?>"></script>
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/pikaday.jquery.js'; ?>"></script>
<div id="zpa-main-container" class="zpa-container " style="display: inline;" data-zpa-client-id="105016">
    <form id="zpa-main-search-form" class="form-inline" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET" novalidate="novalidate">
        <fieldset>
          
            <div id="zpa-house-condo-search-fields" class="">
                <div class="row mt-25 zpa-home-search-fields">
                    <div class="col-xs-12 col-sm-3">
                        <label for="zpa-min-date-homes" class="field-label zpa-min-date-label"> Min. Date </label>
                        <div class="" style="position:relative;">
                            <input id="zpa-min-date-homes" placeholder="" type="text" class="form-control zpa-search-form-input mindate" value="">
							<input id="zpa-min-date-homes-val" name="minDate" type="hidden" value=""> </div>
                        <label class="error" for="zpa-min-date-homes" style="display:none;"></label>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <label for="zpa-max-date-homes" class="field-label zpa-max-date-label"> Max. Date </label>
                        <div class="" style="position:relative;">
                            <input id="zpa-max-date-homes" placeholder="" type="text" class="form-control zpa-search-form-input maxdate" value="">
							<input id="zpa-max-date-homes-val" name="maxDate" type="hidden" value=""> </div>
                        <label class="error" for="zpa-max-date-homes" style="display:none;"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 mb-10"> </div>
            </div>
            <div class="row mt-25">
                <div class="col-xs-8">
                    <div class="clearfix"></div>
                    <input id="openHomesMode" name="openHomesMode" type="hidden" value="true">
					<input id="openHomesOnlyYn" name="openHomesOnlyYn" type="hidden" value="true">
					<?php $default_order = za_get_default_order(); ?>
					<?php if($default_order){ ?><input type="hidden" name="o" value="<?php echo $default_order; ?>" /><?php } ?>
				</div>
                <div class="col-xs-4" style="text-align:right;">
                    <button id="zpa-main-search-form-submit" type="submit" class="btn btn-lg btn-block btn-primary btn-form-submit"> Search </button>
                </div>
            </div>
        </fieldset>
        <div> </div>
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
    </form>
	<?php /* 
	<script>
		jQuery(document).ready(function($) {
			$(document).off('.datepicker.data-api');
			$(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
		});
	</script>
	*/ ?>
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
				/*toString(date, format) {
					// you should do formatting based on the passed format,
					// but we will just return 'D/M/YYYY' for simplicity
					const day = date.getDate();
					const month = date.getMonth() + 1;
					const year = date.getFullYear();
					return `${year}-${month}-${day} aaa`;
				},
				parse(dateString, format) {
					// dateString is the result of `toString` method
					const parts = dateString.split('/');
					const day = parseInt(parts[0], 10);
					const month = parseInt(parts[1] - 1, 10);
					const year = parseInt(parts[1], 10);
					return new Date(year, month, day);
				}*/
				// firstDay: 1,
				// minDate: new Date(2000, 0, 1),
				// maxDate: new Date(2020, 12, 31),
				// yearRange: [2000,2020]
			});
			// chain a few methods for the first datepicker, jQuery style!
			// $datepicker.pikaday('show').pikaday('nextMonth');
		});
    </script>
</div>