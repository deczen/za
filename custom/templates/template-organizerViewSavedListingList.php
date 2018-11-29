<?php
global $requests;

$userdata = getCurrentUserContactLogin();
// echo "<pre>"; print_r( $_COOKIE ); echo "</pre>";
// echo "<pre>"; print_r( $userdata ); echo "</pre>";
if( ! $userdata ){
	wp_safe_redirect( site_url('/property-organizer-login') );
	die();
}

$page = (get_query_var('page')) ? get_query_var('page') : 1;
$page = isset($requests['page']) ? $requests['page'] : $page;
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$contactIds=array();
foreach($userdata as $contact){
	$contactIds[]=$contact->id;
}

// $rb = zipperagent_rb();
$num=10;
$index=$page*$num-$num;
$vars=array(
	'sidx'=>$index,
	'ps'=>$num,
	'contactId'=>implode(',',$contactIds),
	// 'contactId'=>'4d3396e5-f1a1-411d-b2ed-5ddd55a5cd79',
);

$result = zipperagent_run_curl( "/api/mls/listListings", $vars );
// echo "<pre>"; print_r( $result ); echo "</pre>";
$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
$list=isset($result['filteredList'])?$result['filteredList']:$result;

$userdata = $userdata[0]; //get first index record

?>
<link rel="stylesheet" type="text/css" href="<?php echo ZIPPERAGENTURL . 'css/my-account.css'; ?>">
<style>
#zpa-main-container .btn-group-justified .btn {
    width: auto;
}
</style>
<div id="zpa-main-container" class="zpa-container zpa-color-scheme-gray" style="display: inline;">
    <div>
		<div class="row mb-10">
				
			<section class="bt-content-wrapper px--safe">
				<div class="za-container">
					<div class="grid grid--gutters">
						<div class="cell cell-lg-3 cell-md-12 cell-sm-12 cell-xs-12">
							<div class="card">
								<div class="card__body">
									<div class="grid mb-15 grid--dirColumn grid--center">
										<div class="cell text-xs--center cell-xs-8">
											<?php 
												$nm1 = isset($userdata->firstName)?$userdata->firstName:'';
												$nm2 = isset($userdata->lastName)?$userdata->lastName:'';
												
												$cn1 = '';
												$cn2 = '';
												
												if ($nm1) $cn1 = substr($nm1,0,1); 
												if ($nm2) $cn2 = substr($nm2,0,1); 
												
												$av = $cn1.$cn2;
											
											?>
											<div><div class="user-avatar at-account__avatar"><?php echo $av; ?></div>
												<div><?php echo isset($userdata->firstName)?$userdata->firstName:''; ?> <?php echo isset($userdata->lastName)?$userdata->lastName:''; ?></div>
												<div class="uk-text-small uk-text-muted"><?php echo isset($userdata->emailWork1)?$userdata->emailWork1:''; ?></div>
												<div><?php echo isset($userdata->phoneOffice)?$userdata->phoneOffice:''; ?></div>
											</div>
										</div>
									</div>
									<ul class="uk-list">
										<li class="link-list__item at-main-menu__account">
											<a href="<?php echo zipperagent_page_url('property-organizer-edit-subscriber'); ?>" class="py-10 link-list__target">
												<!--<svg class="bt-icon bt-icon--larger link-list__icon">
												</svg>-->
												<div class="uk-text-truncate">Profile</div>
											</a>
										</li>
										<li class="link-list__item at-main-menu__favs">
											<a href="<?php echo zipperagent_page_url('property-organizer-saved-listings'); ?>" class="py-10 link-list__target link-list__target--active">
												<!--<svg class="bt-icon bt-icon--larger link-list__icon">
												</svg>-->
												<div class="uk-text-truncate">My Favorites</div>
											</a>
										</li>
										<li class="link-list__item at-main-menu__notification">
											<a href="<?php echo zipperagent_page_url('property-organizer-view-saved-search-list'); ?>" class="py-10 link-list__target">
												<!--<svg class="bt-icon bt-icon--larger link-list__icon">
												</svg>-->
												<div class="uk-text-truncate">My Saved Searches</div>
											</a>
										</li>
										<li class="link-list__item at-main-menu__logout">
											<a href="<?php echo zipperagent_page_url('property-organizer-logout') ?>" class="py-10 link-list__target link-list__target">
												<!--<svg class="bt-icon bt-icon--larger link-list__icon">
												</svg>-->
												<div class="uk-text-truncate">Logout</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="cell cell-sm-fit">
							<div class="mb-10 card">
								<div class="collapsible__trigger is-open">
									<div class="collapsible collapsible--borderless">
										<strong> <?php echo $count ? "{$count} Saved Favorites" : "No Saved Favorites"; ?> </strong>
										<?php foreach( $list as $option ): ?>
										<?php 				
										
										if( !isset($option->id) )
											continue;
										
										// if( $open )
											// $property=isset($option->mergedProperty)?$option->mergedProperty:null;
										// else
											$property=$option->listing;
										
										$saveId = $option->id;		
										$fulladdress = zipperagent_get_address($property);
										$single_url = zipperagent_property_url( $property->id, $fulladdress );
										?>
										<div class="row zpa-result">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-xs-12">
														<div class="property-divider">&nbsp;</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="zpa-results-address pull-left"> <a href="<?php echo $single_url; ?>" class="zpa-txt-uc"> <?php echo $fulladdress; ?> </a> </div>
														<div class="pull-right hidden-xs">
															<?php /* <div class="zpa-map-icon" data-map-icon="1">1</div> */ ?>
															<div class="zpa-results-listingnum hidden-xs"> Listing # <?php echo $property->listno; ?> </div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="zpa-results-photo">
															<a href="<?php echo $single_url; ?>"> <img class="media-object zpa-center" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl): ZIPPERAGENTURL . "images/no-photo.jpg"; ?>" onerror="this.onerror=null;this.src='<?php echo ZIPPERAGENTURL . "images/no-photo.jpg"; ?>';" alt=""> </a>
														</div>
														<div class="zpa-results-property-info">
															<div class="zpa-results-price"> <span class=""> <?php echo isset( $property->listprice ) ? '$'.number_format_i18n( $property->listprice, 0 ) : '-'; ?> </span> </div>
															Beds: <strong>5</strong>
															<br> Baths: <strong><strong><?php echo isset( $property->nobedrooms ) ? $property->nobedrooms : '-'; ?></strong>
															<br> Sq. Ft.: <strong> <?php echo isset( $property->squarefeet ) && $property->squarefeet > 0 ? number_format_i18n( $property->squarefeet, 0 ) : '-'; ?> </strong>
															<br> Type: <strong><?php echo zipperagent_property_type( $property->proptype ); ?></strong>
															<br>
															<?php /* <div class="zpa-results-links"> <a href="#" data-toggle="modal" data-target="#modalPhotoTourContainer72184676"> 26 Photos </a> </div> */ ?>
														</div>
														<?php /*
														<div class="zpa-results-extra-info">
															<div class="pull-right">
																<div style="clear:both;"></div>
																<div class="zpa-results-listingnum hidden-xs"> Listing # 72184676 </div>
															</div>
														</div>*/ ?>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="zpa-results-organizer-items">
															<?php /*
															<form class="zpa-results-organizer-rating" action="<?php echo site_url('/'); ?>wp-admin/admin-ajax.php?action=zpa_saved_listing_rating">
																<input type="hidden" name="savedListingId" value="6378347">
																<input type="hidden" name="interestLevel" value="">
																<label>My Rating:</label>
																<a href="#" data-zpa-interest-level="1" title="1 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
																<a href="#" data-zpa-interest-level="2" title="2 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
																<a href="#" data-zpa-interest-level="3" title="3 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
																<a href="#" data-zpa-interest-level="4" title="4 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
																<a href="#" data-zpa-interest-level="5" title="5 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
															</form>
															<div class="zpa-results-organizer-comments"> <a href="#">Comments</a> </div> */ ?>
															<div class="zpa-results-organizer-delete"> <a href="<?php echo site_url('/'); ?>property-organizer-delete-saved-listing-submit/<?php //echo $saveId; ?><?php echo $property->id; ?>">Delete</a> </div>
															<div style="clear:both;"></div>
															<div class="zpa-results-organizer-show-mod-comments">
																<div class="zpa-saved-listing-comments-preview"></div>
																<form class="zpa-saved-listing-comments-edit" style="display: none;" action="<?php echo site_url('/'); ?>wp-admin/admin-ajax.php?action=zpa_saved_listing_comments">
																	<input type="hidden" name="savedListingId" value="6378347">
																	<textarea name="comments" style="width:300px; height:150px;"></textarea>
																	<button class="btn btn-primary" type="submit">Save</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php endforeach; ?>
										
										<div class="row">
											<div class="col-xs-12">
												<div class="property-divider">&nbsp;</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6">
												<ul class="pagination">
													<?php
													/* pagination */
													$total = $count;
													$pagescount = ceil($total/$num);
													$current_url=$actual_link;
													$back_url=$page>1?add_query_arg( array( 'page' => $page-1 ), $current_url ):'#';
													$next_url=$page<$pagescount?add_query_arg( array( 'page' => $page+1 ), $current_url ):'#';
													?>
													<li class="<?php if( $back_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $back_url ?>">&laquo;</a>
													</li>
													<li class="disabled"><a href="#"><?php echo $page ?> of <?php echo $pagescount ?></a>
													</li>
													<li class="<?php if( $next_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $next_url ?>">&raquo;</a>
													</li>
												</ul>
											</div>
											<!--col-->
										</div>
										<!--row-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
		</div>
	</div>
</div>

<?php /*
<div id="zpa-main-container" class="zpa-container zpa-color-scheme-gray" style="display: inline;">
    <div>
        <div class="row mb-10">
            <div class="col-xs-12">
                <div class="pull-right"> <?php /* <a href="<?php echo site_url('/'); ?>property-organizer-help/">Help</a> <span>&nbsp;|&nbsp;</span> */ /*?> <a href="<?php echo zipperagent_page_url('property-organizer-logout') ?>">Logout</a> </div>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-xs-12">
                <div class="btn-group btn-group-justified"> <a class="btn btn-primary" href="<?php echo zipperagent_page_url('property-organizer-edit-subscriber'); ?>">Profile</a> <a class="btn btn-primary active" href="<?php echo zipperagent_page_url('property-organizer-saved-listings'); ?>">My Favorites</a> <a class="btn btn-primary" href="<?php echo zipperagent_page_url('property-organizer-view-saved-search-list'); ?>">My Saved Searches</a> </div>
            </div>
        </div>
        <div class="row mt-25 mb-25">
            <div class="col-xs-12">
                <div class="pull-left mt-10"> <strong> <?php echo $count ? "{$count} Saved Favorites" : "No Saved Favorites"; ?> </strong> </div>
				<?php /*
                <div class="pull-right">
                    <div class="btn-group">
                        <form id="zpa-sort-search-form" action="<?php echo zipperagent_page_url('property-organizer-saved-listings'); ?>" method="GET">
                            <input type="hidden" id="zpa-search-sort" name="sortBy" value="">
                            <div> </div>
                        </form>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Sort by <span class="caret"></span> </button>
                        <ul class="dropdown-menu pull-right" id="zpa-sort-values">
                            <li> <a data-zpa-sort-value="pd" href="#">Price (High to Low)</a> </li>
                            <li> <a data-zpa-sort-value="lpa" href="#">Price (Low to High)</a> </li>
                            <li> <a data-zpa-sort-value="cn" href="#">City</a> </li>
                            <li> <a data-zpa-sort-value="lpd" href="#">Type / Price Descending</a> </li>
                            <li> <a data-zpa-sort-value="ln" href="#">Listing Number</a> </li>
                            <li> <a data-zpa-sort-value="il" href="#">Interest Level</a> </li>
                        </ul>
                    </div>
                </div> */ /*?>
            </div>
        </div>
		<?php /* /*
        <div class="row">
            <div class="col-xs-12 hidden-xs">
				
                <div id="zpa-map-canvas" style="height: 300px; width: 100%; position: relative;" class="leaflet-container leaflet-fade-anim" tabindex="0">
                    <div class="leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="leaflet-tile-pane">
                            <div class="leaflet-layer" style="z-index: 1;">
                                <div class="leaflet-tile-container"></div>
                                <div class="leaflet-tile-container leaflet-zoom-animated"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2476/3029.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: 343px; top: -185px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2476/3030.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: 343px; top: 71px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2475/3029.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: 87px; top: -185px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2477/3029.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: 599px; top: -185px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2475/3030.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: 87px; top: 71px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2477/3030.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: 599px; top: 71px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2474/3029.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: -169px; top: -185px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2478/3029.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: 855px; top: -185px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2474/3030.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: -169px; top: 71px;"><img class="leaflet-tile leaflet-tile-loaded" src="//api.tiles.mapbox.com/v4/ihomefinder.k3f0npic/13/2478/3030.png?access_token=pk.eyJ1IjoiaWhvbWVmaW5kZXIiLCJhIjoiR1JFZzQyYyJ9.0g0cCGrEpv3B4zuYl2lBGw" style="height: 256px; width: 256px; left: 855px; top: 71px;">
                                </div>
                            </div>
                        </div>
                        <div class="leaflet-objects-pane">
                            <div class="leaflet-shadow-pane"></div>
                            <div class="leaflet-overlay-pane"></div>
                            <div class="leaflet-marker-pane">
                                <div class="leaflet-marker-icon leaflet-div-icon leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -12px; margin-top: -30px; width: 24px; height: 24px; transform: translate3d(988px, 118px, 0px); z-index: 118;">
                                    <div class="zpa-map-icon">1</div>
                                </div>
                                <div class="leaflet-marker-icon leaflet-div-icon leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -12px; margin-top: -30px; width: 24px; height: 24px; transform: translate3d(669px, 242px, 0px); z-index: 242;">
                                    <div class="zpa-map-icon">2</div>
                                </div>
                                <div class="leaflet-marker-icon leaflet-div-icon leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -12px; margin-top: -30px; width: 24px; height: 24px; transform: translate3d(320px, 146px, 0px); z-index: 146;">
                                    <div class="zpa-map-icon">3</div>
                                </div>
                                <div class="leaflet-marker-icon leaflet-div-icon leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -12px; margin-top: -30px; width: 24px; height: 24px; transform: translate3d(772px, 162px, 0px); z-index: 162;">
                                    <div class="zpa-map-icon">4</div>
                                </div>
                                <div class="leaflet-marker-icon leaflet-div-icon leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -12px; margin-top: -30px; width: 24px; height: 24px; transform: translate3d(110px, 55px, 0px); z-index: 55;">
                                    <div class="zpa-map-icon">5</div>
                                </div>
                                <div class="leaflet-marker-icon leaflet-div-icon leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -12px; margin-top: -30px; width: 24px; height: 24px; transform: translate3d(657px, 243px, 0px); z-index: 243;">
                                    <div class="zpa-map-icon">6</div>
                                </div>
                            </div>
                            <div class="leaflet-popup-pane"></div>
                        </div>
                    </div>
                    <div class="leaflet-control-container">
                        <div class="leaflet-top leaflet-left">
                            <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out">-</a>
                            </div>
                        </div>
                        <div class="leaflet-top leaflet-right">
                            <div class="leaflet-control-layers leaflet-control" aria-haspopup="true">
                                <a class="leaflet-control-layers-toggle" href="#" title="Layers"></a>
                                <form class="leaflet-control-layers-list">
                                    <div class="leaflet-control-layers-base">
                                        <label>
                                            <input type="radio" class="leaflet-control-layers-selector" name="leaflet-base-layers" checked="checked"><span> Map</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="leaflet-control-layers-selector" name="leaflet-base-layers"><span> Satellite</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="leaflet-control-layers-selector" name="leaflet-base-layers"><span> Hybrid</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="leaflet-control-layers-selector" name="leaflet-base-layers"><span> Terrain</span>
                                        </label>
                                    </div>
                                    <div class="leaflet-control-layers-separator" style="display: none;"></div>
                                    <div class="leaflet-control-layers-overlays"></div>
                                </form>
                            </div>
                        </div>
                        <div class="leaflet-bottom leaflet-left"></div>
                        <div class="leaflet-bottom leaflet-right">
                            <div class="leaflet-control-attribution leaflet-control"><a href="https://www.mapbox.com/about/maps/" target="_blank">© Mapbox</a> <a href="http://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap</a> <a href="http://developer.mapquest.com/web/info/terms-of-use" target="_blank">© MapQuest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> */ /*?>
		<?php foreach( $list as $option ): ?>
		<?php 				
		
		if( !isset($option->id) )
			continue;
		
		// if( $open )
			// $property=isset($option->mergedProperty)?$option->mergedProperty:null;
		// else
			$property=$option->listing;
		
		$saveId = $option->id;		
		$fulladdress = zipperagent_get_address($property);
		$single_url = zipperagent_property_url( $property->id, $fulladdress );
		?>
        <div class="row zpa-result">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="property-divider">&nbsp;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="zpa-results-address pull-left"> <a href="<?php echo $single_url; ?>" class="zpa-txt-uc"> <?php echo $fulladdress; ?> </a> </div>
						<div class="pull-right hidden-xs">
                            <?php /* <div class="zpa-map-icon" data-map-icon="1">1</div> */ /*?>
							<div class="zpa-results-listingnum hidden-xs"> Listing # <?php echo $property->listno; ?> </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="zpa-results-photo">
                            <a href="<?php echo $single_url; ?>"> <img class="media-object zpa-center" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl): ZIPPERAGENTURL . "images/no-photo.jpg"; ?>" onerror="this.onerror=null;this.src='<?php echo ZIPPERAGENTURL . "images/no-photo.jpg"; ?>';" alt=""> </a>
                        </div>
                        <div class="zpa-results-property-info">
                            <div class="zpa-results-price"> <span class=""> <?php echo isset( $property->listprice ) ? '$'.number_format_i18n( $property->listprice, 0 ) : '-'; ?> </span> </div>
							Beds: <strong>5</strong>
                            <br> Baths: <strong><strong><?php echo isset( $property->nobedrooms ) ? $property->nobedrooms : '-'; ?></strong>
                            <br> Sq. Ft.: <strong> <?php echo isset( $property->squarefeet ) && $property->squarefeet > 0 ? number_format_i18n( $property->squarefeet, 0 ) : '-'; ?> </strong>
                            <br> Type: <strong><?php echo zipperagent_property_type( $property->proptype ); ?></strong>
                            <br>
                            <?php /* <div class="zpa-results-links"> <a href="#" data-toggle="modal" data-target="#modalPhotoTourContainer72184676"> 26 Photos </a> </div> */ /*?>
                        </div>
						<?php /*
                        <div class="zpa-results-extra-info">
                            <div class="pull-right">
                                <div style="clear:both;"></div>
                                <div class="zpa-results-listingnum hidden-xs"> Listing # 72184676 </div>
                            </div>
                        </div>*/ /*?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="zpa-results-organizer-items">
							<?php /*
                            <form class="zpa-results-organizer-rating" action="<?php echo site_url('/'); ?>wp-admin/admin-ajax.php?action=zpa_saved_listing_rating">
                                <input type="hidden" name="savedListingId" value="6378347">
                                <input type="hidden" name="interestLevel" value="">
                                <label>My Rating:</label>
                                <a href="#" data-zpa-interest-level="1" title="1 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
                                <a href="#" data-zpa-interest-level="2" title="2 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
                                <a href="#" data-zpa-interest-level="3" title="3 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
                                <a href="#" data-zpa-interest-level="4" title="4 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
                                <a href="#" data-zpa-interest-level="5" title="5 out of 5"> <i class="glyphicon glyphicon-star"></i> </a>
                            </form>
                            <div class="zpa-results-organizer-comments"> <a href="#">Comments</a> </div> */ /*?>
                            <div class="zpa-results-organizer-delete"> <a href="<?php echo site_url('/'); ?>property-organizer-delete-saved-listing-submit/<?php //echo $saveId; ?><?php echo $property->id; ?>">Delete</a> </div>
                            <div style="clear:both;"></div>
                            <div class="zpa-results-organizer-show-mod-comments">
                                <div class="zpa-saved-listing-comments-preview"></div>
                                <form class="zpa-saved-listing-comments-edit" style="display: none;" action="<?php echo site_url('/'); ?>wp-admin/admin-ajax.php?action=zpa_saved_listing_comments">
                                    <input type="hidden" name="savedListingId" value="6378347">
                                    <textarea name="comments" style="width:300px; height:150px;"></textarea>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
		
        <div class="row">
            <div class="col-xs-12">
                <div class="property-divider">&nbsp;</div>
            </div>
        </div>
		<div class="row">
			<div class="col-xs-6">
				<ul class="pagination">
					<?php
					/* pagination */ /*
					$total = $count;
					$pagescount = ceil($total/$num);
					$current_url=$actual_link;
					$back_url=$page>1?add_query_arg( array( 'page' => $page-1 ), $current_url ):'#';
					$next_url=$page<$pagescount?add_query_arg( array( 'page' => $page+1 ), $current_url ):'#';
					?>
					<li class="<?php if( $back_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $back_url ?>">&laquo;</a>
					</li>
					<li class="disabled"><a href="#"><?php echo $page ?> of <?php echo $pagescount ?></a>
					</li>
					<li class="<?php if( $next_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $next_url ?>">&raquo;</a>
					</li>
				</ul>
			</div>
			<!--col-->
		</div>
        <!--row-->
    </div>
</div> */ ?>