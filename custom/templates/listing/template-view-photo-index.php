<?php
global $requests, $crit;
global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o;
?>
<div class="zpa-listing-search-results hideonprint">

	<div class="row mt-25 mb-25">
	<?php if( $showResults ){ ?>
		<?php if( ! $is_ajax_count ): ?>
		<div class="col-xs-12 prop-total"><?php echo zipperagent_list_total($count, (sizeof($propertyType)==1?$propertyType[0]:'') ); ?></div>
		<?php else: ?>
		<div class="col-xs-12 prop-total">&nbsp;</div>
		<? endif; ?>
	<?php } ?>
	</div>
	
	<div class="container-fluid">				
		<div id="" class="row sticky-container" style="position:relative;">      
			<div id="small-property" class="col-lg-4 col-md-4 col-xs-12 bg-light ">
				<?php include ZIPPERAGENTPATH . "/custom/templates/listing/template-view-photo-sidebar.php"; ?>
			</div>
			<div class="col-lg-8 col-md-8 col-xs-12 ml-auto" id="photos">				
				<?php include ZIPPERAGENTPATH . "/custom/templates/listing/template-view-photo.php"; ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>				
</div>