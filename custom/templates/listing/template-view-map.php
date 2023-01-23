<?php
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
				$contactIds,
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