<?php
$userdata = ZipperagentGlobalFunction()->getCurrentUserContactLogin();

if( ! $userdata ){
	wp_safe_redirect( site_url('/property-organizer-login') );
	die();
}
$userdata = $userdata[0]; //get first index record
$phone = isset($userdata->phoneMobile) ? $userdata->phoneMobile : '';
$phone = !$phone && isset($userdata->phoneOffice) ? $userdata->phoneOffice : $phone;
$phone = !$phone && isset($userdata->phoneOther) ? $userdata->phoneOther : $phone;
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
				
			<section class="zy-content-wrapper px--safe">
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
											<div><div  class="user-avatar at-account__avatar"><?php echo $av; ?></div>
												<div><?php echo isset($userdata->firstName)?$userdata->firstName:''; ?> <?php echo isset($userdata->lastName)?$userdata->lastName:''; ?></div>
												<div class="uk-text-small uk-text-muted"><?php echo isset($userdata->emailWork1)?$userdata->emailWork1:''; ?></div>
												<div><?php echo $phone; ?></div>
											</div>
										</div>
									</div>
									<ul class="uk-list">
										<li class="link-list__item at-main-menu__account">
											<a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber'); ?>" class="py-10 link-list__target">
												<!--<svg class="zy-icon zy-icon--larger link-list__icon">
												</svg>-->
												<div class="uk-text-truncate">Profile</div>
											</a>
										</li>
										<li class="link-list__item at-main-menu__favs">
											<a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-saved-listings'); ?>" class="py-10 link-list__target">
												<!--<svg class="zy-icon zy-icon--larger link-list__icon">
												</svg>-->
												<div class="uk-text-truncate">My Favorites</div>
											</a>
										</li>
										<li class="link-list__item at-main-menu__notification">
											<a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-view-saved-search-list'); ?>" class="py-10 link-list__target link-list__target--active">
												<!--<svg class="zy-icon zy-icon--larger link-list__icon">
												</svg>-->
												<div class="uk-text-truncate">My Saved Searches</div>
											</a>
										</li>
										<li class="link-list__item at-main-menu__logout">
											<a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-logout') ?>" class="py-10 link-list__target">
												<!--<svg class="zy-icon zy-icon--larger link-list__icon">
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
										<?php
										$contactIds = get_contact_id();
										$result = zipperagent_run_curl( '/api/mls/listSearches?contactId='. implode(',',$contactIds) .'&ps=999&sidx=0' );
										$filteredList = isset($result['filteredList'])?$result['filteredList']:array();
										$dataCount = isset($result['dataCount'])?$result['dataCount']:0;
										// echo "<pre>"; print_r( $filteredList ); echo "</pre>";
										?>	
										<div class="row mb-25">
											<div class="col-xs-12">
												<strong><?php echo $dataCount>0?"{$dataCount} Saved Searches":"{$dataCount} Saved Search" ?></strong>
												<?php /* <div class="pull-right"> <a href="<?php echo site_url('/'); ?>email-alerts/" class="btn btn-default">Create New</a> </div> */ ?>
											</div>
										</div>
										<?php
										$county_arr=get_counties_array(); // get towns array
										$town_arr=get_towns_array(); // get towns array
										// echo "<pre>"; print_r( $town_arr); echo "</pre>";
										foreach( $filteredList as $saved ): 
											$criteria=array();
											$searchId=$saved->id;
											$temp=explode(';',$saved->criteria);
											foreach( $temp as $val ){
												if( !$val )
													continue;
													
												$temp2=explode(':',$val);
												$criteria[$temp2[0]]=isset($temp2[1])?$temp2[1]:'';
											}
											// echo "<pre>"; print_r( $criteria); echo "</pre>";
											$propertyType = isset($criteria['apt'])?$criteria['apt']: 'not specified';
											$propertyType = zipperagent_property_type($propertyType);      						
											
											$minPrice = isset($criteria['apmin'])?$criteria['apmin']: 'none';
											$maxPrice = isset($criteria['apmax'])?$criteria['apmax']: 'none';
											$beds = isset($criteria['abeds'])?$criteria['abeds']: 'not specified';
											$baths = isset($criteria['abths'])?$criteria['abths']: 'not specified';
											$state = isset($criteria['astt'])?$criteria['astt']: 'not specified';
											$zip = isset($criteria['azip'])?$criteria['azip']: 'not specified';
											$counties = isset($criteria['acnty'])?$criteria['acnty']: 'not specified';
											$counties = explode(',',$counties);
											foreach( $counties as &$county ){
												$county=isset($county_arr[$county])?$county_arr[$county]:$county;
											}
											$towns = isset($criteria['atwns'])?$criteria['atwns']: 'not specified';
											$towns = explode(',',$towns);
											foreach( $towns as &$town ){
												$town=isset($town_arr[$town])?$town_arr[$town]:$town;
											}
												
											?>
											<div class="saved-list panel panel-default">
												<div class="panel-heading"> </div>
												<div class="panel-body">
													<?php /* <div class="pull-left"> <a href="<?php echo site_url('/'); ?>property-organizer-view-saved-search/9250142?" class="btn btn-primary">12 Matches</a> </div> */ ?>
													
													<div class="fs-12"> <?php /* <strong> Email Updates: </strong> Yes */ ?>
														<?php if($counties): ?><br> <strong> Counties: </strong> <?php echo implode(', ',$counties); ?><?php endif; ?>
														<?php if($towns): ?><br> <strong> Cities: </strong> <?php echo implode(', ',$towns); ?><?php endif; ?>
														<?php /* &nbsp;&nbsp;&nbsp; <strong> State: </strong>  <?php echo $state; ?> */ ?>
														&nbsp;&nbsp;&nbsp; <strong> Zip: </strong>  <?php echo $zip; ?> 
														<br> <strong> Property Type: </strong> <?php echo $propertyType; ?> &nbsp;&nbsp;&nbsp; <strong> Min. Price: </strong> <?php echo is_integer($minPrice)?'$'.number_format_i18n($minPrice,0):$minPrice; ?> &nbsp;&nbsp;&nbsp; <strong> Max. Price: </strong> <?php echo is_integer($maxPrice)?'$'.number_format_i18n($maxPrice,0):$maxPrice ?> &nbsp;&nbsp;&nbsp; <strong> Beds: </strong> <?php echo $beds; ?> &nbsp;&nbsp;&nbsp; <strong> Baths: </strong>  <?php echo $baths; ?>
													</div>
													<br />
													<div class="pull-left"> <a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-view-saved-search') . $saved->id ?>" class="btn btn-primary">View Search</a> </div>
													<div class="pull-right">
														<?php /*
														<form action="<?php echo site_url('/'); ?>email-alerts/" method="get" style="display: inline;">
															<input type="hidden" name="searchProfileId" value="9250142">
															<button class="btn btn-link" type="submit">Edit</button>
														</form> <span>|</span> */ ?>
														<form action="<?php echo site_url('/'); ?>property-organizer-delete-saved-search-submit/" method="post" style="display: inline;">
															<input type="hidden" name="searchProfileId" value="<?php echo $searchId ?>">
															<button class="btn btn-link" type="submit">Delete</button>
														</form>
													</div>
													<div class="clearfix"></div>
														<?php // echo $saved->criteria ?>
												</div>
											</div>
										<?php endforeach; ?>
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
                <div class="pull-right"> <?php /* <a href="<?php echo site_url('/'); ?>property-organizer-help/">Help</a> <span>&nbsp;|&nbsp;</span> */ /*?> <a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-logout') ?>">Logout</a> </div>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-xs-12">
                <div class="btn-group btn-group-justified"> <a class="btn btn-primary" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber'); ?>">Profile</a> <a class="btn btn-primary" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-saved-listings'); ?>">My Favorites</a> <a class="btn btn-primary active" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-view-saved-search-list'); ?>">My Saved Searches</a> </div>
            </div>
        </div>
		<?php
		$contactIds = get_contact_id();
		$result = zipperagent_run_curl( '/api/mls/listSearches?contactId='. implode(',',$contactIds) .'&ps=999&sidx=0' );
		$filteredList = isset($result['filteredList'])?$result['filteredList']:array();
		$dataCount = isset($result['dataCount'])?$result['dataCount']:0;
		// echo "<pre>"; print_r( $filteredList ); echo "</pre>";
		?>	
        <div class="row mt-25 mb-25">
            <div class="col-xs-12">
                <div class="pull-left mt-10"><?php echo $dataCount>0?"{$dataCount} Saved Searches":"{$dataCount} Saved Search" ?></div>
                <?php /* <div class="pull-right"> <a href="<?php echo site_url('/'); ?>email-alerts/" class="btn btn-default">Create New</a> </div> */ /*?>
            </div>
        </div>
		<?php
		$county_arr=get_counties_array(); // get towns array
		$town_arr=get_towns_array(); // get towns array
		// echo "<pre>"; print_r( $town_arr); echo "</pre>";
		foreach( $filteredList as $saved ): 
			$criteria=array();
			$searchId=$saved->id;
			$temp=explode(';',$saved->criteria);
			foreach( $temp as $val ){
				if( !$val )
					continue;
					
				$temp2=explode(':',$val);
				$criteria[$temp2[0]]=isset($temp2[1])?$temp2[1]:'';
			}
			// echo "<pre>"; print_r( $criteria); echo "</pre>";
			$propertyType = isset($criteria['apt'])?$criteria['apt']: 'not specified';
			$propertyType = zipperagent_property_type($propertyType);      						
			
			$minPrice = isset($criteria['apmin'])?$criteria['apmin']: 'none';
			$maxPrice = isset($criteria['apmax'])?$criteria['apmax']: 'none';
			$beds = isset($criteria['abeds'])?$criteria['abeds']: 'not specified';
			$baths = isset($criteria['abths'])?$criteria['abths']: 'not specified';
			$state = isset($criteria['astt'])?$criteria['astt']: 'not specified';
			$zip = isset($criteria['azip'])?$criteria['azip']: 'not specified';
			$counties = isset($criteria['acnty'])?$criteria['acnty']: 'not specified';
			$counties = explode(',',$counties);
			foreach( $counties as &$county ){
				$county=isset($county_arr[$county])?$county_arr[$county]:$county;
			}
			$towns = isset($criteria['atwns'])?$criteria['atwns']: 'not specified';
			$towns = explode(',',$towns);
			foreach( $towns as &$town ){
				$town=isset($town_arr[$town])?$town_arr[$town]:$town;
			}
				
			?>
			<div class="saved-list panel panel-default">
				<div class="panel-heading"> </div>
				<div class="panel-body">
					<?php /* <div class="pull-left"> <a href="<?php echo site_url('/'); ?>property-organizer-view-saved-search/9250142?" class="btn btn-primary">12 Matches</a> </div> */ /*?>
					<div class="pull-left"> <a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-view-saved-search') . $saved->id ?>" class="btn btn-primary">View Search</a> </div>
					<div class="pull-right">
						<?php /*
						<form action="<?php echo site_url('/'); ?>email-alerts/" method="get" style="display: inline;">
							<input type="hidden" name="searchProfileId" value="9250142">
							<button class="btn btn-link" type="submit">Edit</button>
						</form> <span>|</span> */ /*?>
						<form action="<?php echo site_url('/'); ?>property-organizer-delete-saved-search-submit/" method="post" style="display: inline;">
							<input type="hidden" name="searchProfileId" value="<?php echo $searchId ?>">
							<button class="btn btn-link" type="submit">Delete</button>
						</form>
					</div>
					<div class="clearfix"></div>
					<div class="fs-12"> <?php /* <strong> Email Updates: </strong> Yes */ /*?>
						<?php if($counties): ?><br> <strong> Counties: </strong> <?php echo implode(', ',$counties); ?><?php endif; ?>
						<?php if($towns): ?><br> <strong> Cities: </strong> <?php echo implode(', ',$towns); ?><?php endif; ?>
						<?php /* &nbsp;&nbsp;&nbsp; <strong> State: </strong>  <?php echo $state; ?> */ /*?>
						&nbsp;&nbsp;&nbsp; <strong> Zip: </strong>  <?php echo $zip; ?> 
						<br> <strong> Property Type: </strong> <?php echo $propertyType; ?> &nbsp;&nbsp;&nbsp; <strong> Min. Price: </strong> <?php echo is_integer($minPrice)?'$'.number_format_i18n($minPrice,0):$minPrice; ?> &nbsp;&nbsp;&nbsp; <strong> Max. Price: </strong> <?php echo is_integer($maxPrice)?'$'.number_format_i18n($maxPrice,0):$maxPrice ?> &nbsp;&nbsp;&nbsp; <strong> Beds: </strong> <?php echo $beds; ?> &nbsp;&nbsp;&nbsp; <strong> Baths: </strong>  <?php echo $baths; ?>
					</div>
						<?php // echo $saved->criteria ?>
				</div>
			</div>
        <?php endforeach; ?>
    </div>
</div> */ ?>