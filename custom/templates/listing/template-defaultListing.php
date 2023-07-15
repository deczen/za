<?php
$contactIds=get_contact_id();
$detect = new Mobile_Detect;
$is_desktop = !$detect->isMobile() && !$detect->isTablet();

$templatename = zipperagent_listpage_layout();
$template_path = ZIPPERAGENTPATH . '/custom/templates/listing/' . $templatename;
if($templatename && file_exists($template_path)){
	include $template_path;
	return;
}
?>
<div class="zpa-listing-search-results hideonprint">
	<!-- Display hotsheet display text for saved search pages but not for listing or open home report pages -->			
	<div class="row mb-10">
		<?php /*
		<div class="col-xs-5">
		<?php if( ! $top_search_enabled ): ?>
			<?php if( $openHomesMode != 'true' ): ?>
			<a href="<?php echo site_url('/'); ?>homes-for-sale-search/" class="btn btn-link"> &laquo; New Search </a>
			<?php else: ?>
			<a href="<?php echo site_url('/'); ?>open-home-search/" class="btn btn-link"> &laquo; New Search </a>
			<?php endif; ?>
		<?php endif; ?>
		</div> */ ?>
		
		<?php /* <div class="col-xs-7">
			<?php if( $enable_filter ): ?>
			<div class="pull-right">
				<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star" role="none"></i> Saved </button>
			</div>
			<button id="saveSearchButton" class="saveSearchButton <?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) echo "needLogin"; ?> btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search"> <i class="glyphicon glyphicon-star" role="none"></i> Save This Search </button>
			<?php endif; ?>
		</div> */ ?>
	</div>
	<?php /* if( $enable_filter && $featuredOnlyYn != 'true' ): ?>
	<div class="row mb-10 mt-25">
		<div class="col-xs-0 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="btn-group btn-group-justified"> <a class="btn btn-primary <?php if($status!=zipperagent_sold_status()) echo "active"?>" href="<?php echo add_query_arg( array('status'=>''), $actual_link ) ?>"> Active </a> <a class="btn btn-primary <?php if($status==zipperagent_sold_status()) echo "active"?>" href="<?php echo add_query_arg( array('status'=>zipperagent_sold_status()), $actual_link ) ?>"> Sold </a> </div>
		</div>
	</div>
	<?php endif; */ ?>
	<div class="row mt-25 mb-25">
		
		<?php
		if(isset($list['totalCount']) && $list['totalCount']==0){
		?>
			<div class="col-xs-4"> No Properties Found </div>
		<?php
		}else if( $showResults ){ ?>
			<?php if( ! $is_ajax_count ): ?>
			<div class="col-xs-12 prop-total"><?php echo zipperagent_list_total($count, (sizeof($propertyType)==1?$propertyType[0]:'') ); ?></div>
			<?php else: ?>
			<div class="col-xs-12 prop-total">&nbsp;</div>
			<?php endif; ?>
		<?php } ?>
		<?php /*
		<div class="col-xs-8">
			<?php /*
			<div class="btn-group pull-right">
				<?php if( $enable_filter ): ?>
				<div id="zpa-refine-search" class="btn-group">
					<button id="zpa-refine-search-button" class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown"> Refine Search <span class="caret"></span> </button>
					<div class="dropdown-menu pull-right" style="padding: 17px;">
						<div class="zpa-container zpa-refine-search-container">
							<form id="zpa-mini-search-form" class="form-inline" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET">
							   <?php
								foreach( $requests as $key=>$val ){
									if( !is_array($val) && !in_array($key,array('minListPrice','maxListPrice')))
										echo "<input type='hidden' name='{$key}' value='{$val}' />";
									else if( is_array($val) ){
										
										foreach( $val as $k=>$v ){
											echo "<input type='hidden' name='{$key}[]' value='{$v}' />";
										}
										
									}
								}
							   ?>
								<div class="row">
									<div class="col-xs-6">
										<div id="zpa-mini-search-minprice"> <span class="zpa-widget-label">Min. Price</span>
											<div class="" style="position:relative;">
												<div class="zpa-label-overlay-money"> $ </div>
												<input id="zpa-mini-form-minprice" name="minListPrice" class="zpa-mini-form-element form-control zpa-search-form-input" placeholder="" type="text" value="<?php echo is_numeric($minListPrice)?number_format_i18n($minListPrice,0):'' ?>"> </div>
										</div>
									</div>
									<div class="col-xs-6">
										<div id="zpa-mini-search-maxprice"> <span class="zpa-widget-label">Max. Price</span>
											<div class="" style="position:relative;">
												<div class="zpa-label-overlay-money"> $ </div>
												<input id="zpa-mini-form-maxprice" name="maxListPrice" class="zpa-mini-form-element form-control zpa-search-form-input" placeholder="" type="text" value="<?php echo is_numeric($maxListPrice)?number_format_i18n($maxListPrice,0):'' ?>"> </div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div id="zpa-mini-search-submit">
											<button type="submit" class="btn btn-primary"> Update </button>
										</div>
									</div>
								</div>
								<div> </div>
							</form>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if( $enable_filter ): ?>
				<div class="btn-group">
					<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"> Sort <span class="caret"></span> </button>
					<ul id="zpa-sort-values" class="dropdown-menu pull-right">
						<li class="<?php if($o=='apmin:DESC') echo "active" ?>"> <a data-zpa-sort-value="pd" href="<?php echo add_query_arg( array('o'=>'apmin:DESC'), $actual_link ); ?>">Price (High to Low)</a> </li>
						<li class="<?php if($o=='apmin:ASC') echo "active" ?>"> <a data-zpa-sort-value="lpa" href="<?php echo add_query_arg( array('o'=>'apmin:ASC'), $actual_link ); ?>">Price (Low to High)</a> </li>
						<li class="<?php if($o=='asts:ASC') echo "active" ?>"> <a data-zpa-sort-value="st" href="<?php echo add_query_arg( array('o'=>'asts:ASC'), $actual_link ); ?>">Status</a> </li>
						<li class="<?php if($o=='atwns:ASC') echo "active" ?>"> <a data-zpa-sort-value="cn" href="<?php echo add_query_arg( array('o'=>'atwns:ASC'), $actual_link ); ?>">City</a> </li>
						<li class="<?php if($o=='lid:DESC') echo "active" ?>"> <a data-zpa-sort-value="ds" href="<?php echo add_query_arg( array('o'=>'lid:DESC'), $actual_link ); ?>">Listing Date</a> </li>
						<li class="<?php if($o=='apt:DESC') echo "active" ?>"> <a data-zpa-sort-value="lpd" href="<?php echo add_query_arg( array('o'=>'apt:DESC'), $actual_link ); ?>">Type / Price Descending</a> </li>
						<li class="<?php if($o=='alstid:ASC') echo "active" ?>"> <a data-zpa-sort-value="ln" href="<?php echo add_query_arg( array('o'=>'alstid:ASC'), $actual_link ); ?>">Listing Number</a> </li>
						<?php /* <li class=""> <a data-zpa-sort-value="ohd" href="<?php echo add_query_arg( array('o'=>''), $actual_link ); ?>">Open Home Date Asc</a> </li> * ?>
					</ul>
				</div>
				<?php endif; ?>
			</div> * ?>
			
			<?php if( $enable_filter ): ?>
			<div class="pull-right">
				<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star" role="none"></i> <?php if($is_view_save_search) echo "Updated"; else echo "Saved"; ?> </button>
			</div>
			<button id="saveSearchButton" class="saveSearchButton btn btn-sm btn-primary pull-right" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search" contactId="<?php echo implode(',',$contactIds) ?>"> <i class="glyphicon glyphicon-star" role="none"></i> <?php if($is_view_save_search) echo "Update This Search"; else echo "Save This Search"; ?>  </button>
			<?php endif; ?>
		</div>
		*/ ?>
	</div>
	<div class="row list-section">
	   <?php 
			$i=0;
			$wrapOpen=false;
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
						'is_desktop' => $is_desktop,
						'columns_code' => $columns_code,
					),
					$requests, 
					$searchId, 
					$contactIds,
					$search
				);
				
				extract( $params );
				
				$i++;
			
			endforeach; ?>
	   
	</div>		
	
	<?php if( $showPagination ): ?>
	
		<?php if( ! $is_ajax_count ): ?>
		<div class="row prop-pagination">
			<div class="col-xs-6">				
				<?php echo zipperagent_pagination($page, $num, $count, $actual_link); ?>
			</div>
			<!--col-->
		</div>
		<!--row-->
		<?php else: ?>
		<div class="row prop-pagination"></div> <!-- show on ajax -->
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
include ZIPPERAGENTPATH . "/custom/templates/listing/template-list-print.php";