<?php
$contactIds=get_contact_id();
?>
<?php if( !isset($infiniteajax) || ! $infiniteajax ): // start not infinite ajax ?>
<div class="zpa-listing-search-results">
	<!-- Display hotsheet display text for saved search pages but not for listing or open home report pages -->			
	<div class="row mb-10">
	</div>
	
	<div class="row mb-10 mt-25">
		<?php if( $showResults ): ?>
		<div class="col-xs-4"> <?php echo number_format_i18n($count,0); ?> Result(s)</div>
		<?php endif; ?>
		<div class="col-xs-8">			
			
			<?php if( $enable_filter ): ?>
			<div class="pull-right">
				<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star"></i> <?php if($is_view_save_search) echo "Updated"; else echo "Saved"; ?> </button>
			</div>
			<button id="saveSearchButton" class="<?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?> btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search" contactId="<?php echo implode(',',$contactIds) ?>"> <i class="glyphicon glyphicon-star"></i> <?php if($is_view_save_search) echo "Update This Search"; else echo "Save This Search"; ?>  </button>
			<?php endif; ?>
		</div>
	</div>
	
<?php endif; // end not infinite ajax ?>

	<?php if( !isset($infiniteajax) || ! $infiniteajax ): ?>
	<div id="first-section" class="row list-section">
	<?php endif; ?>
	   <?php foreach( $list as $option ): ?>
			<?php 				
			
			if( $open )
				$property=isset($option->mergedProperty)?$option->mergedProperty:null;
			else
				$property=$option;
			
			if( !isset($property->id) )
				continue;
			
			$fulladdress = zipperagent_get_address($property);
								
			$saved_crit=$search;
			$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
			if(!empty($searchId)){
				$query_args['searchId']= $searchId;
			}
			if(zp_using_criteria() && !empty($critBase64)){
				$query_args['criteria']= $critBase64;
			}
			$single_url = add_query_arg( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
			$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
			?>
			<div class="zpa-grid-result col-lg-4 col-sm-6 col-md-6 col-xs-12">
				<div class="zpa-grid-result-container well">
					<div class="row">
						<div class="col-xs-12">
							<div style="background-image: url('<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>');" class="zpa-results-grid-photo" >
								<img class="printonly" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>" />
								<a class="listing-<?php echo $property->id; ?> <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?> save-favorite-btn" listingId="<?php echo $property->id; ?>" searchId="<?php echo $searchId; ?>" contactId="<?php echo implode(',',$contactIds); ?>" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true"></i></a>
								<a class="property_url" href="<?php echo $single_url ?>"></a>
								<a class="property_url" href="<?php echo $single_url ?>"><span class="zpa-for-sale-price"> <?php echo zipperagent_currency() . number_format_i18n( $price, 0 ); ?> </span> <?php //echo isset($property->forsale) && $property->forsale == "Y" ? "(For sale)" : '' ?></a>
							</div>
						</div>
					</div>
					<div class="za-container">
						<div class="row mt-10">
							<div class="col-xs-12">
								<a class="property_url" href="<?php echo $single_url ?>"> <span class="zpa-grid-result-address"> <img src="<?php echo ZIPPERAGENTURL . "images/map-marker.png" ?>" title="map marker" alt="map marker" /> <?php echo $fulladdress; ?> </span> </a>
							</div>
						</div>																
						<div class="row mt-10 property-infos">
							<?php
							$infoscount=0;
							?>
							<?php if( isset($property->nobedrooms ) && $property->nobedrooms > 0 ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									<?php if( isset($property->nobedrooms ) && $property->nobedrooms > 0 ): ?><div class="zpa-grid-result-basic-info-item1"> <b><?php echo $property->nobedrooms ?></b>
										beds </div>
									<?php $infoscount++; ?>
									<?php else: ?>
										&nbsp;
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>
							<?php if( isset($property->nobaths ) && $property->nobaths > 0 ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									<?php if( isset($property->nobaths ) && $property->nobaths > 0 ): ?><div class="zpa-grid-result-basic-info-item2"> <b><?php echo $property->nobaths ?> </b>
										baths </div>
									<?php $infoscount++; ?>
									<?php else: ?>
										&nbsp;
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>
							<?php /* if( isset($property->unmapped->BathsTotal ) && $property->unmapped->BathsTotal > 0 && zipperagent_detailpage_group()=='gepmls' ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									<?php if( isset($property->unmapped->BathsTotal ) && $property->unmapped->BathsTotal > 0 ): ?><div class="zpa-grid-result-basic-info-item2"> <b><?php echo $property->unmapped->BathsTotal ?> </b>
										baths </div>
									<?php $infoscount++; ?>
									<?php else: ?>
										&nbsp;
									<?php endif; ?>
								</div>
							</div>
							<?php endif; */ ?>
							<?php if( isset($property->squarefeet ) && $property->squarefeet > 0 ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									<?php if( isset($property->squarefeet ) && $property->squarefeet > 0 ): ?><div class="zpa-grid-result-basic-info-item3"> <b> <?php echo number_format_i18n( $property->squarefeet, 0 ) ?> </b>
										sqft </div>
									<?php $infoscount++; ?>
									<?php else: ?>
										&nbsp;
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>	
							<?php if( !$infoscount ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									&nbsp;
								</div>
							</div>
							<?php endif; ?>											
						</div>
						<div class="row mb-5 fs-12 mt-10">
							<div class="col-xs-7">
								<div class="zpa-grid-result-additional-info">
									<div class="zpa-status <?php echo is_numeric($property->status)? 'status_'.$property->status : $property->status; ?>">
										<?php
											$status=isset($property->status)?$property->status:'';
											$converted_status = zipperagent_get_status_name($status);
										?>
										<span class="text-center d-block"><?php echo strtoupper($converted_status) ?></span>
									</div>
								</div>
							</div>
							<div class="col-xs-5">
								<span class="zpa-on-site pull-right"> <?php if(isset($property->dayssincelisting)): ?><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo isset($property->dayssincelisting)?$property->dayssincelisting:'-'; ?> Day(s) <?php endif; ?> </span>
							</div>
						</div>
						<?php if( isset( $option->startDate ) && !empty( $option->startDate ) ){ ?>
							<?php
							$openHouse=$option;
							?>
							<div class="row mb-5 fs-12">
								<div class="col-xs-12 mt-10">
									<div class="zpa-grid-result-additional-info">
										<div class="zpa-listing-open-home-text-grid">
											<?php
											
											$mlstz = zipperagent_mls_timezone();
											$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
											$dt->setTimestamp($openHouse->startDate/1000); //adjust the object to correct timestamp
											$startDateOnly = $dt->format('Y-m-d');
											$startDate = $dt->format('M j, Y h:i A');
											$startTime =  $dt->format('h:i A');
											
											$duration = isset( $openHouse->duration ) && !empty( $openHouse->duration ) ? $openHouse->duration : 0;
											$printEndTime = '';
											
											if( $duration ){
												$dt->add(new DateInterval('PT' . $duration . 'M'));
												// $endTime = date( 'h:i A', strtotime("+{$duration} minutes", strtotime($startTime)) );
												$endTime = $dt->format('h:i A');
												$printEndTime = '- '.$endTime;
											}else if($openHouse->endDate){
												$dt->setTimestamp($openHouse->endDate/1000);
												$endDateOnly = $dt->format('Y-m-d');
												
												if($startDateOnly!=$endDateOnly){
													
													$endDate = $dt->format('M j, Y h:i A');
													$printEndTime = '- '.$endDate;
												}else{
													
													$endTime = $dt->format('h:i A');
													$printEndTime = '- '.$endTime;
												}
											}
											?>
											<span class="openHomeText"> Open House:</span> <?php echo $startDate ?> <?php echo $printEndTime; ?>
										</div>
									</div>
								</div>
							</div>
						<?php }else if(isset($property->openHouses) && sizeof($property->openHouses) && $openHomesOnlyYn){ ?>
							<?php
							$openHouse=$property->openHouses[0];
							?>
							<div class="row mb-5 fs-12">
								<div class="col-xs-12 mt-10">
									<div class="zpa-grid-result-additional-info">
										<div class="zpa-listing-open-home-text-grid">
											<?php
											
											$mlstz = zipperagent_mls_timezone();
											$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
											$dt->setTimestamp($openHouse->startDate/1000); //adjust the object to correct timestamp
											$startDateOnly = $dt->format('Y-m-d');
											$startDate = $dt->format('M j, Y h:i A');
											$startTime =  $dt->format('h:i A');
											
											$duration = isset( $openHouse->duration ) && !empty( $openHouse->duration ) ? $openHouse->duration : 0;
											$printEndTime = '';
											
											if( $duration ){
												$dt->add(new DateInterval('PT' . $duration . 'M'));
												// $endTime = date( 'h:i A', strtotime("+{$duration} minutes", strtotime($startTime)) );
												$endTime = $dt->format('h:i A');
												$printEndTime = '- '.$endTime;
											}else if($openHouse->endDate){
												$dt->setTimestamp($openHouse->endDate/1000);
												$endDateOnly = $dt->format('Y-m-d');
												
												if($startDateOnly!=$endDateOnly){
													
													$endDate = $dt->format('M j, Y h:i A');
													$printEndTime = '- '.$endDate;
												}else{
													
													$endTime = $dt->format('h:i A');
													$printEndTime = '- '.$endTime;
												}
											}
											?>
											<span class="openHomeText"> Open House:</span> <?php echo $startDate ?> <?php echo $printEndTime; ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							<div class="property-divider">&nbsp;</div>
						</div>
					</div>
						
					<div class="za-container">	
						<div class="row">
							<div class="col-xs-10 pull-left fs-11 ">
								<div class="zpa-grid-result-mlsnum-proptype">MLS#<?php echo $property->listno ?> | <?php echo zipperagent_property_type( $property->proptype ); ?> </div>
							</div>
							<div class="col-xs-2 pull-right fs-12 zpa-grid-result-photocount nopaddingleft">
								<?php if( isset($property->photoList) && sizeof($property->photoList) ): ?><a href="#" data-toggle="modal" data-target="#modal-<?php echo $property->id ?>" listingId="<?php echo $property->id ?>"> <i class="glyphicon glyphicon-camera"></i> </a> <span class="photo-count">(<?php echo isset($property->photoList)?sizeof($property->photoList):0; ?>)</span>
								<div id="modal-<?php echo $property->id ?>" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<div class="modal-title text-left"><?php echo $fulladdress; ?></div>
												<button type="button" class="close" data-dismiss="modal"> &#215; </button>
											</div>
											<div class="modal-body"></div>
											<div class="modal-footer">
												<button class="btn btn-link" data-dismiss="modal"> Close </button>
											</div>
										</div>
									</div>
								</div>
								<?php else: ?><i class="glyphicon glyphicon-camera"></i> <span class="photo-count">(<?php echo isset($property->photoList)?sizeof($property->photoList):0; ?>)</span><?php endif; ?>
							</div>
						</div>
					</div>
					<div style="clear:both"></div>
				</div>
				<?php						
				$source_details = isset($property->sourceid) ? zipperagent_get_source_text($property->sourceid, isset($property->listOfficeName)?$property->listOfficeName:'', 'list') : false;
				?>
				<?php if($source_details): ?>
				<div class="property-source">
					<?php echo $source_details; ?>
				</div>
				<?php endif; ?>
				<div class="grid-margin"></div>
			</div>
		<?php endforeach; ?>
		
	<?php if( !isset($infiniteajax) || ! $infiniteajax ): ?>   
	</div>
	<?php endif; ?>
	
<?php if( !isset($infiniteajax) || ! $infiniteajax ): // start not infinite ajax ?>	
	
	<div id="loadmore" pagenumber="<?php echo $page ?>"><img style="display:none; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" /></div>
	
	<?php
	$listing_disclaimer = zipperagent_get_listing_disclaimer();
	?>
	<?php if( $listing_disclaimer ): ?>
	<div class="row">
		<div class="col-xs-12">
			<span class="listing-disclaimer"><?php echo $listing_disclaimer ?></span>
		</div>
		<!--col-->
	</div>
	<?php endif; ?>
	
</div>

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
		
		jQuery('#modal-'+listingId+' .modal-body').html('<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/tenor.gif"; ?>" />');
		
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
			}
		});
	});
	
</script>
<?php if(zipperagent_infinite_loop()): ?>
<script>
	(function($){

	  $.fn.endlessScroll = function(options) {

		var defaults = {
		  bottomPixels: 50,
		  fireOnce: true,
		  fireDelay: 150,
		  loader: "<br />Loading...<br />",
		  data: "",
		  insertAfter: "div:last",
		  resetCounter: function() { return false; },
		  callback: function() { return true; },
		  ceaseFire: function() { return false; }
		};

		var options = $.extend({}, defaults, options);

		var firing       = true;
		var fired        = false;
		var fireSequence = 0;

		if (options.ceaseFire.apply(this) === true) {
		  firing = false;
		}

		if (firing === true) {
		  $(this).scroll(function() {
			if (options.ceaseFire.apply(this) === true) {
			  firing = false;
			  return; // Scroll will still get called, but nothing will happen
			}

			if (this == document || this == window) {
			  var is_scrollable = $(document).height() - $(window).height() <= $(window).scrollTop() + options.bottomPixels;
			} else {
			  // calculates the actual height of the scrolling container
			  var inner_wrap = $(".endless_scroll_inner_wrap", this);
			  if (inner_wrap.length == 0) {
				inner_wrap = $(this).wrapInner("<div class=\"endless_scroll_inner_wrap\" />").find(".endless_scroll_inner_wrap");
			  }
			  var is_scrollable = inner_wrap.length > 0 &&
				(inner_wrap.height() - $(this).height() <= $(this).scrollTop() + options.bottomPixels);
			}

			if (is_scrollable && (options.fireOnce == false || (options.fireOnce == true && fired != true))) {
			  if (options.resetCounter.apply(this) === true) fireSequence = 0;

			  fired = true;
			  fireSequence++;

			  $(options.insertAfter).after("<div id=\"endless_scroll_loader\">" + options.loader + "</div>");

			  data = typeof options.data == 'function' ? options.data.apply(this, [fireSequence]) : options.data;

			  if (data !== false) {
				$(options.insertAfter).after("<div id=\"endless_scroll_data\">" + data + "</div>");
				$("div#endless_scroll_data").hide().fadeIn();
				$("div#endless_scroll_data").removeAttr("id");

				options.callback.apply(this, [fireSequence]);

				if (options.fireDelay !== false || options.fireDelay !== 0) {
				  $("body").after("<div id=\"endless_scroll_marker\"></div>");
				  // slight delay for preventing event firing twice
				  $("div#endless_scroll_marker").fadeTo(options.fireDelay, 1, function() {
					$(this).remove();
					fired = false;
				  });
				}
				else {
				  fired = false;
				}
			  }

			  $("div#endless_scroll_loader").remove();
			}
		  });
		}
	  };

	})(jQuery);


	// Script
	jQuery(document).ready(function($) {
		
		$(document).endlessScroll({
			// fireOnce: false,
			// fireDelay: false,
			// insertAfter: '#loadmore',
			inflowPixels: 300,
			// data: function(i) {			
			callback: function() {
				var listing;
				<?php /* var pagenumber=<?php echo $page ?> + $('.list-section').length; */ ?>
				var pagenumber=parseInt($('#loadmore').attr('pagenumber')) + 1;
				
				if(pagenumber && ! $('#loadmore').hasClass('loading')){
					
				
					var data = {
						action: 'load_more_properties',
						'page': pagenumber,
						<?php
						$excludes = array('page','action', 'actual_link');
						if( isset($requests) && sizeof($requests) ){
							foreach( $requests as $var=>$val ){
								
								if( in_array($var, $excludes ))
									continue;
								
								if( is_array( $val ) ){
									echo "'". strtolower($var) ."': ['". implode( "', '", $val ) ."'],"."\r\n";
								}else{					
									echo "'". strtolower($var) ."': '{$val}',"."\r\n";
								}
							}
						}
						?>
					};
					
					listing = '';
					$('#loadmore img').show();
					$('#loadmore').addClass('loading');
					
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {    
							// console.log(response);
							if( response['html'] ){
								listing=response['html'];
								pagenumber = response['page'];
								
								// $(listing).insertAfter('#first-section');
								$("#first-section").append(listing);
								$('#loadmore img').hide();
								$('#loadmore').removeClass('loading');
								$('#loadmore').attr('pagenumber', pagenumber);
							}else{
								$('#loadmore img').hide();
								$('#loadmore').removeClass('loading');
								$('#loadmore').attr('pagenumber', pagenumber);
							}
						}
					});
				}
			}
		});
	});
</script>
<?php endif; ?>

<?php endif; // end is not infinite ajax?> 