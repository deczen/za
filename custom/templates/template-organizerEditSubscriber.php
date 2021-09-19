<?php
//add saved cookies to account
add_saved_cookies_to_account();

$userdata = ZipperagentGlobalFunction()->getCurrentUserContactLogin();
// echo "<pre>"; print_r( $userdata); echo "</pre>";
if( ! $userdata || ! sizeof($userdata)){
	wp_safe_redirect( site_url('/property-organizer-login') );
	die();
}

$errors = array();
$messages = array();

if( !empty($_POST) && $_POST['actionType']=='update' ){
	$vars['id']=$_POST['contactId'];
	$vars['firstName']=$_POST['firstName'];
	$vars['lastName']=$_POST['lastName'];
	$vars['emailWork1']=$_POST['emailWork1'];
	$vars['phoneMobile']=$_POST['phone'];
	$vars['propertyAlerts']=isset($_POST['propertyAlerts'])?"true":"false";
	$vars['alertType']=$_POST['alertType'];
	// $vars['assignedTo']=isset( $userdata[0]['assignedTo'] ) ? $userdata[0]['assignedTo'] : ZipperagentGlobalFunction()->get_assignedto();
	$vars['assignedTo']=isset( $userdata[0]->assignedTo ) ? $userdata[0]->assignedTo : '';
	
	if( isset( $userdata[0]->phoneOffice ) )
		$vars['phoneOffice']= $userdata[0]->phoneOffice;
	if( isset( $userdata[0]->phoneOther ) )
		$vars['phoneOther']= $userdata[0]->phoneOther;
	
	$result=saveUserContact($vars);
	// echo "<pre>"; print_r( $vars); echo "</pre>"; 
	// echo "<pre>"; print_r( $result); echo "</pre>";
	
	if( isset( $result['id'] ) ){		
		$messages[] = 'Setting Saved';
	}else{
		$errors[] = 'Setting Save failed';
	}
	
	$userdata = ZipperagentGlobalFunction()->getCurrentUserContactLogin();
	
}

/*
 * Saved Favorites
 */

$page = (get_query_var('page')) ? get_query_var('page') : 1;
$page = isset($requests['page']) ? $requests['page'] : $page;
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$contactIds=array();
foreach($userdata as $contact){
	$contactIds[]=$contact->id;
}

// $rb = ZipperagentGlobalFunction()->zipperagent_rb();
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

//save favorites cache
$contactIds_key = implode('_',$contactIds);
$option_key_listid = $contactIds_key . '_favorite_listingIds';
$favorite_listingIds=array();
foreach($list as $property){
	if(isset($property->listing->id))
		$favorite_listingIds[]['listingId']=$property->listing->id;
}
update_option( $option_key_listid, $favorite_listingIds );
// $saved_favorites = get_option($option_key_listid);
// echo "option_key_listid: $option_key_listid | ";
// echo "<pre>"; print_r($saved_favorites); echo "</pre>";
/*
 * Saved Searches
 */

$contactIds = get_contact_id();
$result = zipperagent_run_curl( '/api/mls/listSearches?contactId='. implode(',',$contactIds) .'&ps=999&sidx=0' );
$filteredList = isset($result['filteredList'])?$result['filteredList']:array();
$dataCount = isset($result['dataCount'])?$result['dataCount']:0;
// echo "<pre>"; print_r( $filteredList ); echo "</pre>";



/*
 * Get current profile
 */

// echo "<pre>"; print_r( $userdata ); echo "</pre>";
// echo "<pre>"; print_r( $_SESSION['userdata'] ); echo "</pre>";
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
#zpa-edit-subscribe-tabs .active a{background-color: #f9f9f9;}
#zpa-edit-subscribe-tabs a:hover{text-decoration: none;}
</style>
<?php //echo '<pre>'; echo print_r($userdata); echo '</pre>'; ?>
<div id="zpa-main-container" class="zpa-container zpa-color-scheme-gray" style="display: inline;">
    <div>
		<?php /*
        <div class="row mb-10">
            <div class="col-xs-12">
                <div class="pull-right"></span> <a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-logout') ?>">Logout</a> </div>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-xs-12">
                <div class="btn-group btn-group-justified"> <a class="btn btn-primary active" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber'); ?>">Profile</a> <a class="btn btn-primary" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-saved-listings'); ?>">My Favorites</a> <a class="btn btn-primary" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-view-saved-search-list'); ?>">My Saved Searches</a> </div>
            </div>
        </div>
        <div class="row mb-10 mt-25">
            <div class="col-xs-12"> <strong> Modify Account Settings </strong> </div>
        </div>
		*/ ?>
		<div class="mb-10"> <!--row-->
				
				<section class="zy-content-wrapper px--safe">
					<div class="za-container">
						<div class="grid grid--gutters">
							<div class="cell cell-md-12 user-message">
								<?php foreach( $messages as $message ): ?>
								<div class="message success">
									<?php echo $message; ?>
								</div>
								<?php endforeach; ?>
								<?php foreach( $errors as $error ): ?>
								<div class="message error">
									<?php echo $error; ?>
								</div>
								<?php endforeach; ?>
							</div>
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
													<div><?php echo $phone; ?></div>
												</div>
											</div>
										</div>
										<nav class="uk-list" id="zpa-edit-subscribe-tabs">
											<ul>
												<li class="link-list__item at-main-menu__account <?php if(isset($_GET['menu']) && $_GET['menu']=='') echo 'active'; ?>">
													<a href="#za-edit-subscriber" class="py-10 link-list__target" data-toggle="tab">
														<!--<svg class="zy-icon zy-icon--larger link-list__icon">
														</svg>-->
														<div class="uk-text-truncate">Profile</div>
													</a>
												</li>
												<li class="link-list__item at-main-menu__favs <?php if($_GET['menu']=='my-favorite') echo 'active'; ?>">
													<a href="#za-saved-listing-list" class="py-10 link-list__target" data-toggle="tab">
														<!--<svg class="zy-icon zy-icon--larger link-list__icon">
														</svg>-->
														<div class="uk-text-truncate">My Favorites (<?php echo $count; ?>)</div>
													</a>
												</li>
												<li class="link-list__item at-main-menu__notification <?php if(isset($_GET['menu']) && $_GET['menu']=='my-search') echo 'active'; ?>">
													<a href="#za-saved-search-list" class="py-10 link-list__target" data-toggle="tab">
														<!--<svg class="zy-icon zy-icon--larger link-list__icon">
														</svg>-->
														<div class="uk-text-truncate">My Saved Searches (<?php echo $dataCount; ?>)</div>
													</a>
												</li>
												<li class="link-list__item at-main-menu__logout">
													<a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-logout') ?>" class="py-10 link-list__target link-list__target">
														<!--<svg class="zy-icon zy-icon--larger link-list__icon">
														</svg>-->
														<div class="uk-text-truncate">Logout</div>
													</a>
												</li>
											</ul>
										</nav>
										
										<script>
											jQuery('#zpa-edit-subscribe-tabs a').click(function(){
												jQuery(this).tab('show');
											})
										</script>
					
									</div>
								</div>
							</div>
							
							<div class="tab-content cell cell-lg-9 cell-md-12 cell-sm-12 cell-xs-12">
								<div id="za-edit-subscriber" class="tab-pane <?php if(!isset($_GET['menu']) || isset($_GET['menu']) && $_GET['menu']=='') echo 'active'; ?> cell cell-md-12">
									<div class="mb-10 card">
										<div class="collapsible collapsible--borderless">
											<div class="collapsible__trigger is-open">
												<div class="mb-0 sc-iAyFgw elMWBD">Contact Information</div>
												<!--<svg viewBox="0 0 24 24" class="collapsible__trigger__icon sc-bdVaJa dzuKai" width="28" height="28">
													<path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
												</svg>-->
											</div>
											<div style="height: auto; transition: none 0s ease 0s; overflow: hidden;">
												<div class="collapsible__inner za-container">
													<div>
														<form id="subscriberForm" role="form" class="form-horizontal" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber'); ?>?actionType=update" method="POST">
															<input id="subscriberId" name="subscriberId" type="hidden" value="4002770">
															<input type="hidden" name="actionType" value="update">
															<div class="grid grid--gutters">
																<div class="cell cell-xs-12 cell-md-6">
																	<div class="mb-10">
																		<div>
																			<label for="accountFirstName">First Name&nbsp;</label>
																			<input id="accountFirstName" class="at-firstname-txt" type="text" name="firstName" autocomplete="given-name" value="<?php echo isset($userdata->firstName)?$userdata->firstName:''; ?>">
																		</div>
																	</div>
																</div>
																<div class="cell cell-xs-12 cell-md-6">
																	<div class="mb-10">
																		<div>
																			<label for="accountLastName">Last Name&nbsp;</label>
																			<input id="accountLastName" class="at-lastname-txt" type="text" name="lastName" autocomplete="family-name" value="<?php echo isset($userdata->lastName)?$userdata->lastName:''; ?>">
																		</div>
																	</div>
																</div>
																<div class="cell cell-xs-12 cell-md-6">
																	<div class="mb-10">
																		<div>
																			<label for="accountEmailAddress">Primary Email Address&nbsp;</label>
																			<input id="accountEmailAddress" class="at-email-txt" type="text" name="newEmail" autocomplete="email" value="<?php echo isset($userdata->emailWork1)?$userdata->emailWork1:''; ?>" disabled>
																			<input id="zpaOrgProfile_Email" name="emailWork1" type="hidden" class="form-control" value="<?php echo isset($userdata->emailWork1)?$userdata->emailWork1:''; ?>">
																		</div>
																	</div>
																</div>
																<div class="cell cell-xs-12 cell-md-6">
																	<div class="mb-10">
																		<div>
																			<label for="accountPhoneNumber">Phone Number&nbsp;</label>
																			<input id="accountPhoneNumber" class="at-phonenumber-txt" type="text" name="phone" autocomplete="tel" value="<?php echo $phone; ?>">
																		</div>
																	</div>
																</div>
																<?php /*
																<div class="cell py-0 cell-xs-12">
																	<div class="callout callout--top-left"><strong>FRIENDLY REMINDER</strong>: If you change your email address, this will also change your login information.</div>
																</div>&nbsp;
																*/ ?>
																<div class="cell cell-xs-12">
																	<div class="row mb-10">
																		<div>
																			<div class="col-md-6 col-lg-6 ">
																				<div class="checkbox">
																					<label class="field-label">
																						<input id="zpaOrgProfile_DailyDigest" name="propertyAlerts" <?php checked( $userdata->propertyAlerts, true ) ?> type="checkbox" class="form-control" value="1"> &nbsp; Send me property alerts matching my search preferences.</label>
																				</div>
																		   </div>
																		   <div class="col-md-6 col-lg-6">
																				<div class="row">
																					<div class="col-md-3" >
																						<label style="padding-top:7px" for="alertType">Frequency</label>
																					</div>
																					<div class="col-md-9">
																						<select name="alertType" class="form-control">
																							<!-- <option value="NONE">Frequency</option> -->
																							<?php
																							$alertTypes=za_get_alert_type();
																							if(isset($alertTypes->result[0]->possibleValues)){
																								$frequencies=$alertTypes->result[0]->possibleValues;
																								foreach($frequencies as $frequency){
																									$selected=isset($userdata->alertType) && $userdata->alertType==$frequency->code ? 'selected' : '';
																									echo '<option value="'. $frequency->code .'" '. $selected .'>'. $frequency->value .'</option>'."\r\n";
																								}
																							}
																							?>							
																						</select>
																					</div>
																				</div>
																		   </div>
																		</div>
																	</div>
																</div>&nbsp;
															</div>
															<div class="grid grid--gutters grid--justifycenter">
																<div class="cell cell-md-6">
																	<input type="hidden" name="contactId" value="<?php echo $userdata->id; ?>" />
																	<button class="at-edit-account-info-submit-btn sc-htpNat eMrTXM sc-bwzfXH dPWOJK width-1-1" type="submit" form="subscriberForm" aria-pressed="false">Save Contact Changes</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div id="za-saved-listing-list" class="tab-pane <?php if(isset($_GET['menu']) && $_GET['menu']=='my-favorite') echo 'active'; ?> cell cell-md-12">
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
																	<a href="<?php echo $single_url; ?>"> <img class="media-object zpa-center" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl): ZIPPERAGENTURL . "images/no-photo.jpg"; ?>" onerror="this.onerror=null;this.src='<?php echo ZIPPERAGENTURL . "images/no-photo.jpg"; ?>';" alt="property photo"> </a>
																</div>
																<div class="zpa-results-property-info">
																	<div class="zpa-results-price"> <span class=""> <?php echo isset( $property->listprice ) ? '$'.number_format_i18n( $property->listprice, 0 ) : '-'; ?> </span> </div>
																	Beds: <strong><?php echo isset( $property->nobedrooms ) ? $property->nobedrooms : '-'; ?></strong>
																	<br> Baths: <strong><?php echo isset( $property->nofullbaths ) ? $property->nofullbaths : '-'; ?></strong>
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
																		<a href="#" data-zpa-interest-level="1" title="1 out of 5"> <i class="glyphicon glyphicon-star" role="none"></i> </a>
																		<a href="#" data-zpa-interest-level="2" title="2 out of 5"> <i class="glyphicon glyphicon-star" role="none"></i> </a>
																		<a href="#" data-zpa-interest-level="3" title="3 out of 5"> <i class="glyphicon glyphicon-star" role="none"></i> </a>
																		<a href="#" data-zpa-interest-level="4" title="4 out of 5"> <i class="glyphicon glyphicon-star" role="none"></i> </a>
																		<a href="#" data-zpa-interest-level="5" title="5 out of 5"> <i class="glyphicon glyphicon-star" role="none"></i> </a>
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
															$menu = '';
															if (isset($_GET['menu']) && $_GET['menu'] !=='my-favorite'){

																$menu = '&menu=my-favorite';
															
															}
															?>
															<li class="<?php if( $back_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $back_url.$menu ?>">&laquo;</a>
															</li>
															<li class="disabled"><a href="#"><?php echo $page ?> of <?php echo $pagescount ?></a>
															</li>
															<li class="<?php if( $next_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $next_url.$menu ?>">&raquo;</a>
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
							
								<div id="za-saved-search-list" class="tab-pane <?php if(isset($_GET['menu']) && $_GET['menu']=='my-search') echo 'active'; ?> cell cell-md-12">
									<div class="mb-10 card">
										<div class="collapsible__trigger is-open">
											<div class="collapsible collapsible--borderless">
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
                <div class="pull-right"> <?php /* <a href="./property-organizer-help/">Help</a> <span>&nbsp;|&nbsp; */ /*?></span> <a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-logout') ?>">Logout</a> </div>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-xs-12">
                <div class="btn-group btn-group-justified"> <a class="btn btn-primary active" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber'); ?>">Profile</a> <a class="btn btn-primary" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-saved-listings'); ?>">My Favorites</a> <a class="btn btn-primary" href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-view-saved-search-list'); ?>">My Saved Searches</a> </div>
            </div>
        </div>
        <div class="row mb-10 mt-25">
            <div class="col-xs-12"> <strong> Modify Account Settings </strong> </div>
        </div>
        <div class="row mb-10">
            <div class="col-xs-12">
                <form id="subscriberForm" role="form" class="form-horizontal" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber'); ?>?actionType=update" method="POST">
                    <input id="subscriberId" name="subscriberId" type="hidden" value="4002770">
                    <input type="hidden" name="actionType" value="update">
                    <div class="form-group">
                        <label for="zpaOrgProfile_Name" class="col-md-3 col-lg-3 control-label"> First Name </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_Name" name="firstName" type="text" class="form-control" value="<?php echo isset($userdata->firstName)?$userdata->firstName:''; ?>" maxlength="60"> </div>
                    </div>
                    <div class="form-group">
                        <label for="zpaOrgProfile_Name" class="col-md-3 col-lg-3 control-label"> Last Name </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_Name" name="lastName" type="text" class="form-control" value="<?php echo isset($userdata->lastName)?$userdata->lastName:''; ?>" maxlength="60"> </div>
                    </div>
                    <div class="form-group">
                        <label for="zpaOrgProfile_Email" class="col-md-3 col-lg-3 control-label"> Email </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_Email" name="newEmail" type="text" class="form-control" value="<?php echo isset($userdata->emailWork1)?$userdata->emailWork1:''; ?>" maxlength="60" disabled>
							<input id="zpaOrgProfile_Email" name="emailWork1" type="hidden" class="form-control" value="<?php echo isset($userdata->emailWork1)?$userdata->emailWork1:''; ?>"> </div>
                    </div>
                    <div class="form-group">
                        <label for="zpaOrgProfile_Phone" class="col-md-3 col-lg-3 control-label"> Phone </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_Phone" name="phone" type="text" class="form-control" value="<?php echo $phone; ?>" maxlength="30"> </div>
                    </div>
					<div class="form-group">
                        <label for="zpaOrgProfile_DailyDigest" class="col-md-3 col-lg-3 control-label"></label>
                        <div class="col-md-5 col-lg-5 ">
							<div class="checkbox">
								<label class="field-label">
									<input id="zpaOrgProfile_DailyDigest" name="propertyAlerts" <?php checked( $userdata->propertyAlerts, true ) ?> type="checkbox" class="form-control" value="1"> &nbsp; Send me property alerts matching my search preferences.</label>
							</div>
					   </div>
					   <div class="col-md-4 col-lg-4">
							<select name="alertType" class="form-control">
								<option value="NONE">Frequency</option>
								<?php
								$alertTypes=za_get_alert_type();
								if(isset($alertTypes->result[0]->possibleValues)){
									$frequencies=$alertTypes->result[0]->possibleValues;
									foreach($frequencies as $frequency){
										$selected=isset($userdata->alertType) && $userdata->alertType==$frequency->code ? 'selected' : '';
										echo '<option value="'. $frequency->code .'" '. $selected .'>'. $frequency->value .'</option>'."\r\n";
									}
								}
								?>							
							</select>
					   </div>
                    </div>
					<?php /* 
                    <div class="form-group">
                        <label for="zpaOrgProfile_Email2" class="col-md-3 col-lg-3 control-label"> Add'l Email Address </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_Email2" name="altEmail" type="text" class="form-control" value="" maxlength="60"> </div>
                    </div>
                    <div class="form-group">
                        <label for="zpaOrgProfile_Address" class="col-md-3 col-lg-3 control-label"> Address </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_Address" name="streetAddress" type="text" class="form-control" value="" maxlength="80"> </div>
                    </div>
                    <div class="form-group">
                        <label for="zpaOrgProfile_City" class="col-md-3 col-lg-3 control-label"> City </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_City" name="city" type="text" class="form-control" value="" maxlength="40"> </div>
                    </div>
                    <div class="form-group">
                        <label for="zpaOrgProfile_State" class="col-md-3 col-lg-3 control-label"> State </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_State" name="state" type="text" class="form-control" value="" maxlength="2"> </div>
                    </div>
                    <div class="form-group">
                        <label for="zpaOrgProfile_Zip" class="col-md-3 col-lg-3 control-label"> Zip Code </label>
                        <div class="col-md-9 col-lg-9">
                            <input id="zpaOrgProfile_Zip" name="postalCode" type="text" class="form-control" value="" maxlength="12"> </div>
                    </div> */ /*?>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
							<input type="hidden" name="contactId" value="<?php echo $userdata->id; ?>" />
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </div>
                    <div> </div>
                </form>
				<?php /*
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9"> <span class="help-block">
						*Required fields. Your personal information is strictly confidential and will not be shared with any outside organizations. <br>
						<?php /* <br>By submitting this form with your telephone number you are consenting for Keller William Realty Chestnut Hill and authorized representatives to contact you even if your name is on the Federal "Do-not-call List." <br> <br> <a href="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber'); ?>?actionType=unsubscribe">Delete This Account</a> <br> </span> 
					</div>
                </div> */ /*?>
            </div>
        </div>
    </div>
</div>
*/