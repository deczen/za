<?php
$currency = zipperagent_currency();
$excludes = get_new_filter_excludes();
?>
<div id="omnibar-tools">
	<div class="desktop-omnibar">
		<style>
			#omnibar-tools .input-column .field-wrap .field-section .ms-ctn, #zpa-main-container .ms-ctn .ms-sel-ctn input{border:0 !important;}
		</style>
		<div class="row">
			<div class="input-column col-sm-8">
				<div class="search-by dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Search
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<ul>
						<li><a id="all" href="#"><input type="radio" name="search_category" checked /> All Categories</a></li>
						<li><a id="addr" href="#"><input type="radio" name="search_category" /> Address</a></li>
						<li><a id="area" href="#"><input type="radio" name="search_category" /> Area</a></li>
						<li><a id="town" href="#"><input type="radio" name="search_category" /> City / Town</a></li>
						<li><a id="county" href="#"><input type="radio" name="search_category" /> County</a></li>
						<li><a id="listid" href="#"><input type="radio" name="search_category" /> MLS #ID</a></li>
						<!-- <li><a id="school" href="#"><input type="radio" name="search_category" /> School</a></li> -->
						<!-- <li><a id="school2" href="#"><input type="radio" name="search_category" /> School</a></li> -->
						<li><a id="zip" href="#"><input type="radio" name="search_category" /> Zip Code</a></li>
					</ul>
				  </div>
				</div>
				<div class="field-wrap">
					<div class="field-section all">
						<input id="zpa-all-input" class="zpa-all-input form-control" placeholder="Type any address, area, city, county, MLS# or zip code"  name="location[]"/>
						<input id="zpa-all-input-address" type="hidden" value="" />
						<input id="zpa-all-input-address-values" type="hidden" value="" />
					</div>
					<div class="field-section addr hide">
						<input type="text" id="zpa-area-address" class="form-control" placeholder="Type address here" name="address" />
																																		
						<input type="hidden" id="street_number" name="advStNo" disabled="true" />
						<input type="hidden" id="route" name="advStName" disabled="true" />
						<input type="hidden" id="locality" name="advTownNm" disabled="true" />
						<input type="hidden" id="administrative_area_level_1" name="advStates" disabled="true"  />
						<input type="hidden" id="country" name="advCounties" disabled="true" />
						<input type="hidden" id="postal_code" name="advStZip" disabled="true" />
					</div>
					<div class="field-section area hide">
						<input id="zpa-areas-input" class="form-control" placeholder="Type any area"  name="location[]"/>
					</div>
					<div class="field-section town hide">
						<input id="zpa-town-input" class="form-control" placeholder="Type any city or town"  name="location[]"/>
					</div>
					<div class="field-section county hide">
						<input id="zpa-county-input" class="form-control" placeholder="Type any county"  name="location[]"/>
					</div>
					<div class="field-section listid hide">
						<input id="listid" class="form-control" placeholder="Type any MLS ID #"  name="alstid"/>
					</div>
					<div class="field-section school hide">
						<input type="text" id="zpa-school" class="form-control" placeholder="Type any address" name="school" />
					</div>					
					<div class="field-section school2 hide">
						<input id="zpa-school-input" class="form-control" placeholder="Type any address"  name="school[]"/>
					</div>
					<div class="field-section zip hide">
						<input id="zpa-zipcode-input" class="form-control" placeholder="Type any zip code"  name="location[]"/>
					</div>
				</div>
				<script>
					jQuery('body').on('click', '#omnibar-tools .search-by .dropdown-menu a', function(){
						var id = jQuery(this).attr('id');
						var targetClass = id;
						jQuery(this).parents('.input-column').find('.field-wrap .field-section:not(.'+ targetClass +')').addClass('hide');
						jQuery(this).parents('.input-column').find('.field-wrap .field-section.'+targetClass).removeClass('hide');
						jQuery(this).find('input').attr('checked', true);
						
						// jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
						return false;
					});
					jQuery('body').on('click', '.btn-show-result', function(){
						// jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown0
					});
				</script>
			</div>
			<div class="filter-column pc-filter-column col-sm-4">
				<form>
					<div class="dropdown-group">
						<div class="dropdown listprice">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Price
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<div class="row">
								<div class="min-price col-xs-6">
									<input id="minlistprice" name="minlistprice" class="input-number" type="text" />
									<label for="minlistprice">Min Price</label>
								</div>
								<div class="max-price col-xs-6">
									<input id="maxlistprice" name="maxlistprice" class="input-number" type="text" />
									<label for="maxlistprice">Max Price</label>
								</div>
							</div>
							<div class="select-price row">
								<div class="col-xs-6">
									<ul class="select-min-price">
										<li><a href="#" value="0"><?php echo $currency; ?>0K</a></li>
										<li><a href="#" value="50000"><?php echo $currency; ?>50K</a></li>
										<li><a href="#" value="75000"><?php echo $currency; ?>75K</a></li>
										<li><a href="#" value="100000"><?php echo $currency; ?>100K</a></li>
										<li><a href="#" value="150000"><?php echo $currency; ?>150K</a></li>
										<li><a href="#" value="200000"><?php echo $currency; ?>200K</a></li>
										<li><a href="#" value="250000"><?php echo $currency; ?>250K</a></li>
										<li><a href="#" value="300000"><?php echo $currency; ?>300K</a></li>
										<li><a href="#" value="350000"><?php echo $currency; ?>350K</a></li>
										<li><a href="#" value="400000"><?php echo $currency; ?>400K</a></li>										
									</ul>
								</div>
								<div class="col-xs-6">
									<ul class="select-max-price">
										<li><a href="#" value="125000"><?php echo $currency; ?>125K</a></li>
										<li><a href="#" value="150000"><?php echo $currency; ?>150K</a></li>
										<li><a href="#" value="175000"><?php echo $currency; ?>175K</a></li>
										<li><a href="#" value="200000"><?php echo $currency; ?>200K</a></li>
										<li><a href="#" value="225000"><?php echo $currency; ?>225K</a></li>
										<li><a href="#" value="250000"><?php echo $currency; ?>250K</a></li>
										<li><a href="#" value="275000"><?php echo $currency; ?>275K</a></li>
										<li><a href="#" value="300000"><?php echo $currency; ?>300K</a></li>										
										<li><a href="#" value="325000"><?php echo $currency; ?>325K</a></li>										
										<li><a href="#" value="">Any Price</a></li>										
									</ul>
								</div>
							</div>
						  </div>
						</div>
						<div class="dropdown beds">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Beds
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<ul class="bedrooms">
								<li><label for="beedrooms"><input id="beedrooms" name="bedrooms" type="radio" value="" checked /> Any</label></li>
								<li><label for="beedrooms1"><input id="beedrooms1" name="bedrooms" type="radio" value="1" /> 1+</label></li>
								<li><label for="beedrooms2"><input id="beedrooms2" name="bedrooms" type="radio" value="2" /> 2+</label></li>
								<li><label for="beedrooms3"><input id="beedrooms3" name="bedrooms" type="radio" value="3" /> 3+</label></li>
								<li><label for="beedrooms4"><input id="beedrooms4" name="bedrooms" type="radio" value="4" /> 4+</label></li>
								<li><label for="beedrooms5"><input id="beedrooms5" name="bedrooms" type="radio" value="5" /> 5+</label></li>
							</ul>
						  </div>
						</div>
						<div class="dropdown baths">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 Baths
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<ul class="bathcount">
								<li><label for="bathcount"><input id="bathcount" name="bathcount" type="radio" value="" checked /> Any</label></li>
								<li><label for="bathcount1"><input id="bathcount1" name="bathcount" type="radio" value="1" /> 1+</label></li>
								<li><label for="bathcount2"><input id="bathcount2" name="bathcount" type="radio" value="2" /> 2+</label></li>
								<li><label for="bathcount3"><input id="bathcount3" name="bathcount" type="radio" value="3" /> 3+</label></li>
								<li><label for="bathcount4"><input id="bathcount4" name="bathcount" type="radio" value="4" /> 4+</label></li>
								<li><label for="bathcount5"><input id="bathcount5" name="bathcount" type="radio" value="5" /> 5+</label></li>
							</ul>
						  </div>
						</div>
						<div class="dropdown filter">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 Filter
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<div class="row">
									<div class="propstatus col-xs-12">
										<h3>Status</h3>
										<ul class="status">
											<li><label for="active"><input id="active" name="status" type="radio" value="" checked /> Active</label></li>
											<li><label for="sold"><input id="sold" name="status" type="radio" value="<?php echo zipperagent_sold_status(); ?>" /> Sold</li>
										</ul>										
									</div>
									<div class="col-xs-12">
										<div class="row">
											<div class="proptype col-xs-6">
												<h3>Property Type</h3>
												<?php /* <select class="propertytype" name="propertytype[]" multiple="multiple">

													<?php
													$propTypeFields = get_property_type();
													foreach( $propTypeFields as $fieldCode=>$fieldName ){
														echo '<option id="'.$fieldCode.'" value="'. $fieldCode .'" /> '. $fieldName .'</option>';											
													}
													$propSubTypeFields = get_property_sub_type();
													foreach( $propSubTypeFields as $fieldCode=>$fieldName ){
														echo '<option id="'.$fieldCode.'" value="'. $fieldCode .'" /> '. $fieldName .'</option>';											
													}
													?>
													
												</select> */ ?>
												<div class="dropdown cq-dropdown">
													<button class="btn btn-default dropdown-toggle form-control" type="button" id="proptype-dropdown" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="true"> Select <span class="caret"></span> </button>
													<ul class="dropdown-menu" aria-labelledby="proptype-dropdown">
														<?php
														$propTypeFields = get_property_type();
														$propTypeOption = !empty($requests['property_type_option']) ? explode( ',', $requests['property_type_option'] ) : array();
														// $propDefaultOption = !empty($requests['property_type_default']) ? explode(',',$requests['property_type_default']) : za_get_default_proptype();
														
														//generate proptype options
														foreach( $propTypeFields as $fieldCode=>$fieldName ){
															// echo $propDefaultOption . " == " . $fieldCode. "<br>";
															// if(in_array($fieldCode, $propDefaultOption))
																// $checked="checked";
															// else
																$checked="";
																
															if($propTypeOption){
																if(in_array($fieldCode, $propTypeOption)){
																	echo "<option value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
																	echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propertytype[]\" value='{$fieldCode}' $checked> {$fieldName} </label></li>";
																}
															}else{									
																echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propertytype[]\" value='{$fieldCode}' $checked> {$fieldName} </label></li>";
															}										
														}
														
														$propSubTypeFields = get_property_sub_type();
														
														//generate propsubtype options
														foreach( $propSubTypeFields as $fieldCode=>$fieldName ){
															
															// if(in_array($fieldCode, $propDefaultOption))
																// $checked="checked";
															// else
																// $checked="";
																
															echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propsubtype[]\" value='{$fieldCode}' $checked> {$fieldName} </label></li>";																		
														}
														?>
													</ul>
												</div>
											</div>
											<div class="sortby col-xs-6">
												<h3>Sort By</h3>
												<select name="o">
													<option id="o-0" value="apmin%3ADESC">Price (High to Low)</option>
													<option id="o-1" value="apmin%3AASC">Price (Low to High)<</option>
													<option id="o-2" value="asts%3AASC">Status</option>
													<option id="o-3" value="atwns%3AASC">City</option>
													<option id="o-4" value="lid%3ADESC">Listing Date</option>
													<option id="o-5" value="apt%3ADESC">Type / Price Descending</option>
													<?php //<option id="o-6" value="alstid%3AASC">Listing Number</option> ?>
												</select>
											</div>
										</div>
									</div>
									<div class="square-footage col-xs-12">
										<h3>Square Footage</h3>
										<div class="two-field-wrap">
											<select id="searchSqftMin" name="minsqft">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="500">500</option>
												<option value="550">550</option>
												<option value="600">600</option>
												<option value="650">650</option>
												<option value="700">700</option>
												<option value="750">750</option>
												<option value="800">800</option>
												<option value="850">850</option>
												<option value="900">900</option>
												<option value="950">950</option>
												<option value="1000">1,000</option>
												<option value="1050">1,050</option>
												<option value="1100">1,100</option>
												<option value="1150">1,150</option>
												<option value="1200">1,200</option>
												<option value="1250">1,250</option>
												<option value="1500">1,500</option>
												<option value="1750">1,750</option>
												<option value="2000">2,000</option>
												<option value="2250">2,250</option>
												<option value="2500">2,500</option>
												<option value="2750">2,750</option>
												<option value="3000">3,000</option>
												<option value="3500">3,500</option>
												<option value="4000">4,000</option>
												<option value="5000">5,000</option>
											</select>
											<span class="between">to</span>
											<select id="searchSqftMax" name="maxsqft">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="500">500</option>
												<option value="550">550</option>
												<option value="600">600</option>
												<option value="650">650</option>
												<option value="700">700</option>
												<option value="750">750</option>
												<option value="800">800</option>
												<option value="850">850</option>
												<option value="900">900</option>
												<option value="950">950</option>
												<option value="1000">1,000</option>
												<option value="1050">1,050</option>
												<option value="1100">1,100</option>
												<option value="1150">1,150</option>
												<option value="1200">1,200</option>
												<option value="1250">1,250</option>
												<option value="1500">1,500</option>
												<option value="1750">1,750</option>
												<option value="2000">2,000</option>
												<option value="2250">2,250</option>
												<option value="2500">2,500</option>
												<option value="2750">2,750</option>
												<option value="3000">3,000</option>
												<option value="3500">3,500</option>
												<option value="4000">4,000</option>
												<option value="5000">5,000</option>
											</select>
										</div>
									</div>
									<div class="days-on-site col-xs-12">
										<h3># Days On Site </h3>
										<div class="one-field-wrap">
											<select id="maxdayslisted" name="maxdayslisted">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="1">New Listings (Since Yesterday)</option>
												<option value="3">Less than 3 Days</option>
												<option value="7">Less than 7 Days</option>
												<option value="14">Less than 14 Days</option>
												<option value="30">Less than 30 Days</option>
												<option value="45">Less than 45 Days</option>
												<option value="60">Less than 60 Days</option>
											</select>
										</div>
									</div>
									<div class="acres col-xs-12">
										<h3>Acres</h3>
										<div class="two-field-wrap">
											<select id="searchAcresMin" name="minacres">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="0.01">1/100</option>
												<option value="0.15">1/8</option>
												<option value="0.25">1/4</option>
												<option value="0.5">1/2</option>
												<option value="0.75">3/4</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="20">20</option>
												<option value="50">50</option>
												<option value="100">100</option>
											</select>
											<span class="between">to</span>
											<select id="searchAcresMax" name="maxacres">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="0.01">1/100</option>
												<option value="0.15">1/8</option>
												<option value="0.25">1/4</option>
												<option value="0.5">1/2</option>
												<option value="0.75">3/4</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="20">20</option>
												<option value="50">50</option>
												<option value="100">100</option>
											</select>
										</div>
									</div>
									<div class="garage-spaces col-xs-12">		
										<h3>Garage Spaces</h3>
										<div class="two-field-wrap">
											<select id="searchGaragesMin" name="mingarages">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
											<span class="between">to</span>
											<select id="searchGaragesMax" name="maxgarages">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
									<div class="stories col-xs-12">
										<h3>Stories</h3>
										<div class="two-field-wrap">
											<select id="searchStoriesMin" name="minstories">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
											<span class="between">to</span>
											<select id="searchStoriesMax" name="maxstories">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
									<div class="popular-features col-xs-12">
										<h3>Popular Features</h3>
										<label for="has-photos"><input id="has-photos" type="checkbox" name="withimage" value="true" /> Has Photos</label>&nbsp;
										<label for="zpa-open-homes-only"><input id="zpa-open-homes-only" type="checkbox" name="openhomesonlyyn" value="true" /> Open House</label>
									</div>
									<div class="col-xs-12">
										<div class="row">
											<div class="col-sm-6">
												<?php
												$fields = get_references_field('STYLE');
												if($fields): ?>
												<div class="propstyles">
													<h3>Styles</h3>
													<?php /* <select name="astle[]" multiple="multiple">
														<?php										
														foreach($fields as $field){
															echo '<option id="'. $field->longDescription .'" name="astle[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</option>';
														}
														?>
													</select> */ ?>
													<div class="dropdown cq-dropdown">
														<button class="btn btn-default dropdown-toggle form-control" type="button" id="proptype-dropdown" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="true"> Select <span class="caret"></span> </button>
														<ul class="dropdown-menu" aria-labelledby="proptype-dropdown">
															<?php
															foreach( $fields as $field ){
																
																$checked="";
																	
																echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"astle[]\" value='{$field->shortDescription}' $checked> {$field->longDescription} </label></li>";																		
															}
															?>
														</ul>
													</div>
												</div>
												<?php endif; ?>
												
												<?php
												$fields = get_references_field('EXTERIORFEATURES');
												if($fields): ?>
												<div class="propexterior">
													<h3>Exterior Features</h3>
													<?php /* <select name="aextf[]" multiple="multiple">
														<?php										
														foreach($fields as $field){
															echo '<option id="'. $field->longDescription .'" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</option>';
														}
														?>
													</select> */ ?>
													<div class="dropdown cq-dropdown">
														<button class="btn btn-default dropdown-toggle form-control" type="button" id="proptype-dropdown" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="true"> Select <span class="caret"></span> </button>
														<ul class="dropdown-menu" aria-labelledby="proptype-dropdown">
															<?php
															foreach( $fields as $field ){
																
																$checked="";
																	
																echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"aextf[]\" value='{$field->shortDescription}' $checked> {$field->longDescription} </label></li>";																		
															}
															?>
														</ul>
													</div>
												</div>
												<?php endif; ?>
											</div>
											<div class="col-sm-6">
												<?php
												$fields = get_references_field('WATERFRONT');
												if($fields): ?>
												<div class="propwaterfront">
													<h3>Water Front</h3>
													<?php /* <select name="awtrf[]" multiple="multiple">
														<?php										
														foreach($fields as $field){
															echo '<option id="'. $field->longDescription .'" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</option>';
														}
														?>
													</select> */ ?>
													<div class="dropdown cq-dropdown">
														<button class="btn btn-default dropdown-toggle form-control" type="button" id="proptype-dropdown" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="true"> Select <span class="caret"></span> </button>
														<ul class="dropdown-menu" aria-labelledby="proptype-dropdown">
															<?php
															foreach( $fields as $field ){
																
																$checked="";
																	
																echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"awtrf[]\" value='{$field->shortDescription}' $checked> {$field->longDescription} </label></li>";																		
															}
															?>
														</ul>
													</div>
												</div>
												<?php endif; ?>
												
												<?php
												$fields = get_references_field('WATERVIEWFEATURES');
												if($fields): ?>
												<div class="propview">
													<h3>View</h3>
													<?php /* <select name="awvf[]" multiple="multiple">
														<?php										
														foreach($fields as $field){
															echo '<option id="'. $field->longDescription .'" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</option>';
														}
														?>
													</select> */ ?>
													<div class="dropdown cq-dropdown">
														<button class="btn btn-default dropdown-toggle form-control" type="button" id="proptype-dropdown" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="true"> Select <span class="caret"></span> </button>
														<ul class="dropdown-menu" aria-labelledby="proptype-dropdown">
															<?php
															foreach( $fields as $field ){
																
																$checked="";
																	
																echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"awvf[]\" value='{$field->shortDescription}' $checked> {$field->longDescription} </label></li>";																		
															}
															?>
														</ul>
													</div>													
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="mobile-omnimbar">
		<?php include "template-searchBarMobile-new.php"; ?>
	</div>
	<div id="zpa-view-selected-filter">
		<div id="zpa-selected-filter" class="ms-ctn form-control  ms-ctn-readonly ms-no-trigger">
			<div class="ms-sel-ctn">
			</div>
		</div>
	</div>
	<form id="zpa-search-filter-form" action="" class="form-inline zpa-quick-search-form">
	<?php
		foreach($requests as $key=>$value){
			if(!in_array($key,get_wp_var_excludes())){
				zipperagent_generate_filter_input($key, $value);
			}
		}
	?>
	</form>
	<script>
		jQuery(document).ready(function(){
			
			window.removeLabel = function(linked_name, name, value){
				jQuery('#zpa-search-filter-form input[linked-name="'+linked_name+'"]').remove();
				jQuery('#zpa-selected-filter .ms-sel-ctn .ms-sel-item[attribute-name="'+ linked_name +'"]').remove();
				
				//remove from search bar		
				jQuery('#omnibar-tools .filter-column input[type=text][name="'+name+'"]').val('');
				jQuery('#omnibar-tools .filter-column select[name="'+name+'"]').val('');
				if(value)
					jQuery('#omnibar-tools .filter-column input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", false);
				else
					jQuery('#omnibar-tools .filter-column input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				jQuery('#omnibar-tools .filter-column input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", false);
				
				//remove from mobile search bar		
				jQuery('#omnibar-tools .mobile-omnimbar .field-wrap input[type=text][name="'+name+'"]').val('');
				jQuery('#omnibar-tools .mobile-omnimbar .field-wrap select[name="'+name+'"]').val('');
				if(value)
					jQuery('#omnibar-tools .mobile-omnimbar .field-wrap input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", false);
				else
					jQuery('#omnibar-tools .mobile-omnimbar .field-wrap input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);			
				jQuery('#omnibar-tools .mobile-omnimbar .field-wrap input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", false);
			}
			
			window.addFormField = function(name, value, linked_name){
				var field = jQuery('#zpa-search-filter-form input[linked-name="'+ linked_name +'"]');
				
				add='<input type="hidden" linked-name="'+linked_name+'" name="'+name+'" value="'+value+'">';
				
				if(!field.length){
					jQuery('#zpa-search-filter-form').append(add);
				}else{
					jQuery(field).replaceWith(add);
				}				
			}
			
			window.addFilterLabel = function(name, value, linked_name, label){
				var newLabel=label;
				var currency='<?php echo zipperagent_currency(); ?>';
				
				if(!newLabel){
					switch(linked_name){
						case "maxlistprice":
							newLabel = 'up to '+ currency + shortenmoney(value.replace(/,/g, '')) ;	
							break;
						case "minlistprice":
							newLabel = 'over '+ currency + shortenmoney(value.replace(/,/g, '')) ;	
							break;
						case "bedrooms":
							newLabel = value + ' + Beds';	
							break;
						case "bathcount":
							newLabel = value + ' + Bath';	
							break;
						case "squarefeet":
							newLabel = value + ' sqft';	
							break;
						<?php
						$propTypeFields = get_property_type();
						foreach($propTypeFields as $key => $val){
						echo "\r\n" .
						'case "propertytype_'.$key.'":'."\r\n" .
							"newLabel = '{$val}'"."\r\n" .
							'break;'."\r\n";
						} ?>
						<?php
						$propSubTypeFields = get_property_sub_type();
						foreach($propSubTypeFields as $key => $val){
						echo "\r\n" .
						'case "propsubtype_'.$key.'":'."\r\n" .
							"newLabel = '{$val}'"."\r\n" .
							'break;'."\r\n";
						} ?>
						<?php
						$fields = get_references_field('STYLE');
						foreach($fields as $field){
						echo "\r\n" .
						'case "astle_'.$field->shortDescription.'":'."\r\n" .
							"newLabel = '{$field->longDescription}'"."\r\n" .
							'break;'."\r\n";
						}
						?>
						<?php
						$fields = get_references_field('EXTERIORFEATURES');
						foreach($fields as $field){
						echo "\r\n" .
						'case "aextf_'.$field->shortDescription.'":'."\r\n" .
							"newLabel = '{$field->longDescription}'"."\r\n" .
							'break;'."\r\n";
						}
						?>
						<?php
						$fields = get_references_field('WATERFRONT');
						foreach($fields as $field){
						echo "\r\n" .
						'case "awtrf_'.$field->shortDescription.'":'."\r\n" .
							"newLabel = '{$field->longDescription}'"."\r\n" .
							'break;'."\r\n";
						}
						?>
						<?php
						$fields = get_references_field('WATERVIEWFEATURES');
						foreach($fields as $field){
						echo "\r\n" .
						'case "awvf_'.$field->shortDescription.'":'."\r\n" .
							"newLabel = '{$field->longDescription}'"."\r\n" .
							'break;'."\r\n";
						}
						?>
						case "yearbuilt":
							newLabel = 'year ' + value;	
							break;
						case "maxdayslisted":
							newLabel = 'max ' + value + ' days listed';
							break;
						case "withimage":
							newLabel = 'has photos';	
							break;
						case "featuredonlyyn":
							newLabel = 'featured';	
							break;
						case "openhomesonlyyn":
							newLabel = 'open houses only';	
							break;
						case "hasvirtualtour":
							newLabel = 'has virtual tour';	
							break;
						case "listinapage":
							newLabel = value + ' results per page';	
							break;
						case "o":
							switch(value){
								case "apmin:DESC":
									vall = 'price (high to low)';
								break;
								case "apmin:ASC":
									vall = 'price (low to high)';
								break;
								case "asts:ASC":
									vall = 'status';
								break;
								case "atwns:ASC":
									vall = 'city';
								break;
								case "lid:DESC":
									vall = 'listing date';
								break;
								case "apt:DESC":
									vall = 'type/price descending';
								break;
								case "alstid:ASC":
									vall = 'listing number';
								break;
								default:
									vall = value;
								break;
							}
							
							// newLabel = 'order by ' + vall; //disable order label
							newLabel='';
							break;
						case "advstno":
							newLabel = 'street number ' + value;	
							break;
						case "advstname":
						case "advtownnm":
						case "advstates":
						case "advcounties":
							newLabel = value;	
							break;
						case "advstzip":
							newLabel = 'zipcode ' + value;	
							break;
						case "apold":
							newLabel = 'Pool Description';	
							break;
						case "altand":
							newLabel = 'Lot Description ' + value;	
							break;
						case "school":
							newLabel = value;	
							break;
						default:
							switch(name){
								case "alstid":
								case "alstid[]":
									newLabel = 'MLS#' + value;	
									break;
								default:										
									newLabel = linked_name.toLowerCase()+' '+value;
									break;
							}
							break;
					}
				}
				
				if(!newLabel)
					return;
				
				if(jQuery('#zpa-selected-filter .ms-sel-ctn .ms-sel-item[attribute-name="'+linked_name+'"]').length){
					var replace='<div class="ms-sel-item" real-name="'+name+'" attribute-name="'+linked_name+'" attribute-value="'+value+'"><div class="name">'+ newLabel +'</div><span class="ms-close-btn"></span></div>';
					jQuery('#zpa-selected-filter .ms-sel-ctn .ms-sel-item[attribute-name="'+linked_name+'"]').replaceWith(replace);
				}else{
					var add='<div class="ms-sel-item" real-name="'+name+'" attribute-name="'+linked_name+'" attribute-value="'+value+'"><div class="name">'+ newLabel +'</div><span class="ms-close-btn"></span></div>';
					jQuery('#zpa-selected-filter .ms-sel-ctn').append(add);						
				}
			}
			
			function shortenmoney(num){
				var digits=0;
				var si = [
					{ value: 1, symbol: "" },
					{ value: 1E3, symbol: "k" },
					{ value: 1E6, symbol: "M" },
					{ value: 1E9, symbol: "G" },
					{ value: 1E12, symbol: "T" },
					{ value: 1E15, symbol: "P" },
					{ value: 1E18, symbol: "E" }
				  ];
				  var rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
				  var i;
				  for (i = si.length - 1; i > 0; i--) {
					if (num >= si[i].value) {
					  break;
					}
				  }
				  return (num / si[i].value).toFixed(digits).replace(rx, "$1") + si[i].symbol;
			}
			
			jQuery('body').on('click', '#zpa-selected-filter .ms-sel-ctn .ms-sel-item', function(){
				name = jQuery(this).attr('real-name');
				linked_name = jQuery(this).attr('attribute-name');
				value = jQuery(this).attr('attribute-value');
				
				removeLabel(linked_name, name, value);		
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			<?php
			foreach($requests as $key=>$value){	
				if(!in_array($key, $excludes))
					zipperagent_generate_filter_label($key, $value);
			}
			?>
			
			jQuery('#omnibar-tools select.propertytype').fSelect();
			jQuery('#omnibar-tools .propstyles select').fSelect();
			jQuery('#omnibar-tools .propexterior select').fSelect();
			jQuery('#omnibar-tools .propwaterfront select').fSelect();
			jQuery('#omnibar-tools .propview select').fSelect();
		});
	</script>
	
	<script>
		jQuery(document).ready(function($) {
			
			var timer;
			
			<?php 
			$data = get_autocomplete_data();
			
			$towns = isset($data->towns)?$data->towns:array();
			$areas = isset($data->areas)?$data->areas:array();
			$counties = isset($data->counties)?$data->counties:array();
			$zipcodes = isset($data->zipcodes)?$data->zipcodes:array();
			?>
			
			var towns = <?php echo json_encode($towns); ?>;
			var areas = <?php echo json_encode($areas); ?>;
			var counties = <?php echo json_encode($counties); ?>;
			var zipcodes = <?php echo json_encode($zipcodes); ?>;
			var all = $.merge(towns, areas);
				all = $.merge(all, counties);
				all = $.merge(all, zipcodes);
			
			var ms_town = $('#zpa-town-input').magicSuggest({
				
				data: towns,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},				
			});
			
			var ms_area = $('#zpa-areas-input').magicSuggest({
				
				data: areas,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},				
			});
			
			var ms_county = $('#zpa-county-input').magicSuggest({
				
				data: counties,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},				
			});
			
			var ms_zip = $('#zpa-zipcode-input').magicSuggest({
				
				data: zipcodes,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},				
			});
			
			var ms_all = $('#zpa-all-input').magicSuggest({
				
				data: all,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},				
			});
			
			var ms_all_mobile = $('#zpa-mobile-all-input').magicSuggest({
				
				data: all,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},				
			});
			
			var ms_school = $('#zpa-school-input').magicSuggest({
				
				data: null,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},				
			});

			/* magicSuggest actions */

			jQuery(ms_school).on('keyup', function(event){
				
				event.preventDefault();
				
				clearTimeout(timer);
				//create a new timer with a delay of 0.5 seconds, if the keyup is fired before the 2 secs then the timer will be cleared
				timer = setTimeout(function () {
					//this will be executed if there is a gap of 0.5 seconds between 2 keyup events
					var inputText = ms_school.getRawValue();
					
					console.time('populate schools');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: {
							'key': inputText,
							'action': 'school_options',
						},
						success: function( response ) {         
							if( response ){
								var data = response.schools;
								ms_school.setData(data);
							}
							console.timeEnd('populate schools');
						},
						error: function(){
							console.timeEnd('populate schools');
						}
					});
				}, 500);
			});
			
			$(ms_town).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label;
				
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				
				var name = 'location[]';
				var linked_name = 'location_'+value;
				
				this.removeFromSelection(this.getSelection(), true);
				addFilterLabel(name, value, linked_name, label);
				addFormField(name,value,linked_name);
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			$(ms_area).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label;
				
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				
				var name = 'location[]';
				var linked_name = 'location_'+value;
				
				this.removeFromSelection(this.getSelection(), true);
				addFilterLabel(name, value, linked_name, label);
				addFormField(name,value,linked_name);
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			$(ms_county).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label;
				
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				
				var name = 'location[]';
				var linked_name = 'location_'+value;
				
				this.removeFromSelection(this.getSelection(), true);
				addFilterLabel(name, value, linked_name, label);
				addFormField(name,value,linked_name);
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			$(ms_zip).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label;
				
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				
				var name = 'location[]';
				var linked_name = 'location_'+value;
				
				this.removeFromSelection(this.getSelection(), true);
				addFilterLabel(name, value, linked_name, label);
				addFormField(name,value,linked_name);
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			$(ms_school).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label;
				
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				
				var name = 'school[]';
				var linked_name = 'school_'+value;
				
				this.removeFromSelection(this.getSelection(), true);
				addFilterLabel(name, value, linked_name, label);
				addFormField(name,value,linked_name);
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			$(ms_all).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label  = '';
				var name, linked_name;
				var is_add, is_location, is_address, is_mls = 0;
								
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				console.log(values);
				if (value.toLowerCase().indexOf("atwns_") >= 0){ //town
					is_location=1;
				}else if (value.toLowerCase().indexOf("aars_") >= 0){ //area
					is_location=1;
				}else if (value.toLowerCase().indexOf("acnty_") >= 0){ //county
					is_location=1;
				}else if (value.toLowerCase().indexOf("azip_") >= 0){ //zip
					is_location=1;
				}else if (value.toLowerCase().indexOf("addr_") >= 0){ //google address
					is_address=1;
				}else if (value.toLowerCase().indexOf("alstid_") >= 0){ //mls
					is_mls=1;
				}
				
				if(is_location){							
					name = 'location[]';
					linked_name = 'location_'+value;
					is_add=1;
				}else if(is_address){
					name = '';
					is_add=0;
				}else if(is_mls){
					name = 'alstid[]';
					linked_name = value;
					value = value.replace('alstid_','');
					// linked_name = 'alstid_'+value;
					is_add=1;
				}
								
				this.removeFromSelection(this.getSelection(), true);
				
				if(is_add){
					addFilterLabel(name, value, linked_name, label);
					addFormField(name,value,linked_name);
				}else if(is_address){
					var saved_address = jQuery.parseJSON(jQuery('#zpa-all-input-address-values').val());
					if(saved_address){
						$.each(saved_address, function(key, value) {
							jQuery('.field-section.addr #'+ key).val(value);
							jQuery('.field-section.addr #'+ key).prop('disabled',false);
							label="";
							
							switch(key){
								case "street_number":
										name="advStNo";
										linked_name="";
									break;
								case "route":
										name="advStName";
										linked_name="";
									break;
								case "locality":
										name="advTownNm";
										linked_name="";
									break;
								case "administrative_area_level_1":
										name="advStates";
										linked_name="";
									break;
								case "country":
										name="advCounties";
										linked_name="";
									break;
								case "postal_code":
										name="advStZip";
										linked_name="";
									break;
							}
							name=name.toLowerCase();
							linked_name=name;
							
							addFilterLabel(name, value, linked_name, label);
							addFormField(name,value,linked_name);
						});
					}
				}
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			/*
			$(ms_all).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label  = '';
				
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				
				if(label){
					var name = 'location[]';
					var linked_name = 'location_'+value;
				}else{
					var name = 'alstid[]';
					var linked_name = 'alstid_'+value;
				}
				
				this.removeFromSelection(this.getSelection(), true);
				addFilterLabel(name, value, linked_name, label);
				addFormField(name,value,linked_name);
				
				jQuery('#zpa-search-filter-form').submit();
			}); */
			
			$(ms_all_mobile).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label;
				
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				
				if(label){
					var name = 'location[]';
					var linked_name = 'location_'+value;
				}else{
					var name = 'alstid[]';
					var linked_name = 'alstid_'+value;
				}
				
				this.removeFromSelection(this.getSelection(), true);
				addFilterLabel(name, value, linked_name, label);
				addFormField(name,value,linked_name);
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			jQuery('body').on( 'change', '#omnibar-tools #listid', function(){
				 
				var values=jQuery.unique(jQuery(this).val().split(','));
				var name='alstid[]';
				var linked_name;
				var value;
				
				for(i=0; i<values.length; i++){		
					value=jQuery.trim(values[i]);
					
					if(!value) continue;
					
					linked_name='alstid_'+value;
					addFilterLabel(name, value, linked_name, '');
					addFormField(name,value,linked_name);
				};
				
				jQuery(this).val('');
				jQuery('#zpa-search-filter-form').submit();
			});
			
			/* Combine ms_all and google autocomplete */
			var ms_all__rawValue='';
			var ms_all__google_autocomplete;
			
			//select value on enter key pressed
			$(ms_all).on('keydown', function(e,m,v){
				var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
				var magicSuggest_option_exists = data.length;
				var google_option_exists = $('body .pac-container.pac-logo').html();
				
				if(magicSuggest_option_exists){
					ms_all__google_autocomplete=0;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
				}else if(google_option_exists && ms_all__rawValue.length > 2){
					ms_all__google_autocomplete=1;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'visible' );
				}else{
					ms_all__google_autocomplete=0;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
				}
			});
			
			function clearGoogleAddressFields(){
				jQuery('#zpa-all-input-address').val('');
				jQuery('.field-section.addr #street_number').val('');
				jQuery('.field-section.addr #street_number').prop('disabled',true);
				jQuery('.field-section.addr #route').val('');
				jQuery('.field-section.addr #route').prop('disabled',true);
				jQuery('.field-section.addr #locality').val('');
				jQuery('.field-section.addr #locality').prop('disabled',true);
				jQuery('.field-section.addr #administrative_area_level_1').val('');
				jQuery('.field-section.addr #administrative_area_level_1').prop('disabled',true);
				jQuery('.field-section.addr #country').val('');
				jQuery('.field-section.addr #country').prop('disabled',true);
				jQuery('.field-section.addr #postal_code').val('');
				jQuery('.field-section.addr #postal_code').prop('disabled',true);
			}
			
			/* auto select dropdown function (ms_all) */
			var ms_all__afterDelete=0;
			var ms_all__recentSelected=[];
			var ms_all__currentSelected=[];
			
			//get user input keywords
			$(ms_all).on('keyup', function(){
				ms_all__rawValue = ms_all.getRawValue();
				ms_all__afterDelete=0;
			});
			
			//get current selected value
			$(ms_all).on('focus', function(c){
				ms_all__recentSelected = ms_all.getValue();
				ms_all__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_all).on('blur', function(c, e){
				var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_all__currentSelected = ms_all.getValue();
				
				// console.log(ms_all__recentSelected);
				// console.log(ms_all__currentSelected);
				// console.log('ms_all__rawValue: ' + ms_all__rawValue);
				// console.log('ms_all__afterDelete: ' + ms_all__afterDelete);
				
				// if( ms_all__rawValue!="" && ms_all__currentSelected.length && ! ms_all__afterDelete && (ms_all__recentSelected.length == ms_all__currentSelected.length || !ms_all__recentSelected.length) ){
				if( ms_all__rawValue!="" && ! ms_all__afterDelete && ms_all__recentSelected.length == ms_all__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_all.setValue([firstData.code]);
					}else if(!ms_all__google_autocomplete){
						var val = ms_all__rawValue;
						var prefix = 'alstid_';
						var code = prefix + val;							
						var label = 'MLS#' + val;
						
						var push = {group:'Mls', name: label, code: code, type: 'mls' };
						ms_all.setValue([push]);
					}else if(ms_all__google_autocomplete){
						var val = $('#zpa-all-input-address').val();
						var prefix = 'addr_';
						var code = prefix + 'selected_address';							
						var label = val;
						
						// var push = {id:name, name: label};
						var push = {group:'Address', name: label, code: code, type: 'address' };
						ms_all.setValue([push]);
					}
					
					ms_all__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_all).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_all__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_all.setValue([firstData.code]);
						}else if(!ms_all__google_autocomplete){
							var val = ms_all__rawValue;
							var prefix = 'alstid_';
							var code = prefix + val;							
							var label = 'MLS#' + val;
							
							var push = {group:'Mls', name: label, code: code, type: 'mls' };
							ms_all.setValue([push]);
						}else if(ms_all__google_autocomplete){
							var val = $('#zpa-all-input-address').val();
							var prefix = 'addr_';
							var code = prefix + 'selected_address';							
							var label = val;
							
							// var push = {id:name, name: label};
							var push = {group:'Address', name: label, code: code, type: 'address' };
							ms_all.setValue([push]);
						}
					}
					
					ms_all.collapse();
				}
			});
			
			//set after delete state
			$(ms_all).on('selectionchange', function(e,m,r){
				if(r.length==ms_all__recentSelected.length && r.length==ms_all__currentSelected.length){
					ms_all__afterDelete=1;
				}else{
					ms_all__afterDelete=0;
				}
			});
			
			/* auto select dropdown function (ms_town) */
			var ms_town__rawValue='';
			var ms_town__afterDelete=0;
			var ms_town__recentSelected=[];
			var ms_town__currentSelected=[];
			
			//get user input keywords
			$(ms_town).on('keyup', function(){
				ms_town__rawValue = ms_town.getRawValue();
				ms_town__afterDelete=0;
			});
			
			//get current selected value
			$(ms_town).on('focus', function(c){
				ms_town__recentSelected = ms_town.getValue();
				ms_town__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_town).on('blur', function(c, e){
				var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_town__currentSelected = ms_town.getValue();
				
				if( ms_town__rawValue!="" && ! ms_town__afterDelete && ms_town__recentSelected.length == ms_town__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_town.setValue([firstData.code]);
					}
					
					ms_town__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_town).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_town__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_town.setValue([firstData.code]);
						}
					}
					
					ms_town.collapse();
				}
			});
			
			//set after delete state
			$(ms_town).on('selectionchange', function(e,m,r){
				if(r.length==ms_town__recentSelected.length && r.length==ms_town__currentSelected.length){
					ms_town__afterDelete=1;
				}else{
					ms_town__afterDelete=0;
				}
			});
			
			/* auto select dropdown function (ms_area) */
			var ms_area__rawValue='';
			var ms_area__afterDelete=0;
			var ms_area__recentSelected=[];
			var ms_area__currentSelected=[];
			
			//get user input keywords
			$(ms_area).on('keyup', function(){
				ms_area__rawValue = ms_area.getRawValue();
				ms_area__afterDelete=0;
			});
			
			//get current selected value
			$(ms_area).on('focus', function(c){
				ms_area__recentSelected = ms_area.getValue();
				ms_area__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_area).on('blur', function(c, e){
				var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_area__currentSelected = ms_area.getValue();
				
				if( ms_area__rawValue!="" && ! ms_area__afterDelete && ms_area__recentSelected.length == ms_area__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_area.setValue([firstData.code]);
					}
					
					ms_area__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_area).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_area__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_area.setValue([firstData.code]);
						}
					}
					
					ms_area.collapse();
				}
			});
			
			//set after delete state
			$(ms_area).on('selectionchange', function(e,m,r){
				if(r.length==ms_area__recentSelected.length && r.length==ms_area__currentSelected.length){
					ms_area__afterDelete=1;
				}else{
					ms_area__afterDelete=0;
				}
			});
			
			/* auto select dropdown function (ms_county) */
			var ms_county__rawValue='';
			var ms_county__afterDelete=0;
			var ms_county__recentSelected=[];
			var ms_county__currentSelected=[];
			
			//get user input keywords
			$(ms_county).on('keyup', function(){
				ms_county__rawValue = ms_county.getRawValue();
				ms_county__afterDelete=0;
			});
			
			//get current selected value
			$(ms_county).on('focus', function(c){
				ms_county__recentSelected = ms_county.getValue();
				ms_county__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_county).on('blur', function(c, e){
				var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_county__currentSelected = ms_county.getValue();
				
				if( ms_county__rawValue!="" && ! ms_county__afterDelete && ms_county__recentSelected.length == ms_county__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_county.setValue([firstData.code]);
					}
					
					ms_county__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_county).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_county__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_county.setValue([firstData.code]);
						}
					}
					
					ms_county.collapse();
				}
			});
			
			//set after delete state
			$(ms_county).on('selectionchange', function(e,m,r){
				if(r.length==ms_county__recentSelected.length && r.length==ms_county__currentSelected.length){
					ms_county__afterDelete=1;
				}else{
					ms_county__afterDelete=0;
				}
			});
			
			/* auto select dropdown function (ms_zip) */
			var ms_zip__rawValue='';
			var ms_zip__afterDelete=0;
			var ms_zip__recentSelected=[];
			var ms_zip__currentSelected=[];
			
			//get user input keywords
			$(ms_zip).on('keyup', function(){
				ms_zip__rawValue = ms_zip.getRawValue();
				ms_zip__afterDelete=0;
			});
			
			//get current selected value
			$(ms_zip).on('focus', function(c){
				ms_zip__recentSelected = ms_zip.getValue();
				ms_zip__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_zip).on('blur', function(c, e){
				var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_zip__currentSelected = ms_zip.getValue();
				
				if( ms_zip__rawValue!="" && ! ms_zip__afterDelete && ms_zip__recentSelected.length == ms_zip__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_zip.setValue([firstData.code]);
					}
					
					ms_zip__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_zip).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_zip__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_zip.setValue([firstData.code]);
						}
					}
					
					ms_zip.collapse();
				}
			});
			
			//set after delete state
			$(ms_zip).on('selectionchange', function(e,m,r){
				if(r.length==ms_zip__recentSelected.length && r.length==ms_zip__currentSelected.length){
					ms_zip__afterDelete=1;
				}else{
					ms_zip__afterDelete=0;
				}
			});
					  
		});
	</script>	
	<script>
		jQuery('body').on( 'change', '#omnibar-tools .filter-column input, #omnibar-tools .filter-column select,'+
									 '#omnibar-tools .mobile-omnimbar .field-wrap input, #omnibar-tools .mobile-omnimbar .field-wrap select', function(){
										 
			var name = jQuery(this).attr('name').toLowerCase();
			var value = jQuery(this).val();
			var is_array = name.substr(name.length - 2) == '[]';
			var linked_name='';
			var type = jQuery(this).attr('type');
			
			if(is_array){				
				linked_name=name.substr(0, name.length - 2) +'_'+value;
			}else{
				linked_name=name;
			}
			
			switch(type){
				case "checkbox":
						var checked = jQuery(this).prop('checked');
						if(!checked){
							removeLabel(linked_name, name, value);
						}else{
							addFilterLabel(name, value, linked_name, '');
							addFormField(name,value,linked_name);							
						}
					break;
				case "text":
				default:	
						if(!value){
							removeLabel(linked_name, name, value);
						}else{
							addFilterLabel(name, value, linked_name, '');
							addFormField(name,value,linked_name);							
						}	
					break;
					
			}
			jQuery('#zpa-search-filter-form').submit();
		});
		
		jQuery('body').on( 'click', '#omnibar-tools .filter-column .select-min-price a,'+
									'#omnibar-tools .mobile-omnimbar .select-min-price a', function(){
			var name='minlistprice';
			var linked_name=name;
			var value=jQuery(this).attr('value');
			
			jQuery(this).closest('.listprice').find('input[name=minlistprice]').val(addCommas(value));			
			addFilterLabel(name, value, linked_name, '');
			addFormField(name,value,linked_name);
			
			jQuery('#zpa-search-filter-form').submit();
			
			return false;
		});
		jQuery('body').on( 'click', '#omnibar-tools .filter-column .select-max-price a,'+
									'#omnibar-tools .mobile-omnimbar .select-max-price a', function(){
										
			var name='maxlistprice';
			var linked_name=name;
			var value=jQuery(this).attr('value');
			
			jQuery(this).closest('.listprice').find('input[name=maxlistprice]').val(addCommas(value));			
			addFilterLabel(name, value, linked_name, '');
			addFormField(name,value,linked_name);
			
			jQuery('#zpa-search-filter-form').submit();
			
			return false;
		});
	</script>
	<script>
		jQuery(document).ready(function(){
			var name;
			var value;
			
			jQuery('#zpa-search-filter-form input').each( function(){
				name = jQuery(this).attr('name');				
				value = jQuery(this).val();	
				value = value.replace(':', "%3A");
				
				//desktop search bar
				jQuery('#omnibar-tools .filter-column input[type=text][name="'+name+'"]').val(value);
				jQuery('#omnibar-tools .filter-column select[name="'+name+'"]').val(value);
				jQuery('#omnibar-tools .filter-column input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				jQuery('#omnibar-tools .filter-column input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				
				//mobile search bar
				jQuery('#omnibar-tools .mobile-omnimbar .field-wrap input[type=text][name="'+name+'"]').val(value);
				jQuery('#omnibar-tools .mobile-omnimbar .field-wrap select[name="'+name+'"]').val(value);
				jQuery('#omnibar-tools .mobile-omnimbar .field-wrap input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				jQuery('#omnibar-tools .mobile-omnimbar .field-wrap input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", true);
			});
		});
	</script>
	<script>  
	  <?php
	  $rb = zipperagent_rb();
	  $states=isset($rb['web']['states'])?$rb['web']['states']:'';
	  $states=array_map('trim', explode(',', $states));
	  $states=implode(' | ',$states);
	  ?>
	  // This example displays an address form, using the autocomplete feature
	  // of the Google Places API to help users fill in the information.

	  // This example requires the Places library. Include the libraries=places
	  // parameter when you first load the API. For example:
	  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
	  jQuery(document).ready(function(){
		  var placeSearch, autocomplete;
		  var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'short_name',
			// country: 'short_name',
			postal_code: 'short_name'
		  };
		  // var input = document.getElementById('zpa-all-input');
		  var input = document.querySelector('#zpa-all-input input');

		  function initAutocomplete() {
			var options = {
				types: ['geocode'],  // or '(cities)' if that's what you want?
				componentRestrictions: {country: ["us","ca","in"]},
			};
			// Create the autocomplete object, restricting the search to geographical
			// location types.
			autocomplete = new google.maps.places.Autocomplete(
				/** @type {!HTMLInputElement} */(input), options);

			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		  }

		  function fillInAddress() {
			
			var saved_values={};
			  
			// Get the place details from the autocomplete object.
			var place = autocomplete.getPlace();
			
			for (var component in componentForm) {
			  document.getElementById(component).value = '';
			  document.getElementById(component).disabled = false;
			}

			// Get each component of the address from the place details
			// and fill the corresponding field on the form.
			for (var i = 0; i < place.address_components.length; i++) {
			  var addressType = place.address_components[i].types[0];
			  if (componentForm[addressType]) {
				var val = place.address_components[i][componentForm[addressType]];
				var field = jQuery('#'+addressType);
				var key = addressType;
				document.getElementById(addressType).value = val;
				// saved_values.push({key:val});
				saved_values[addressType]=val;
			  }
			}
			var json = JSON.stringify(saved_values);
			jQuery('#zpa-all-input-address-values').val(json);
			jQuery('#zpa-all-input-address').val(place.formatted_address);
		  }

		  // Bias the autocomplete object to the user's geographical location,
		  // as supplied by the browser's 'navigator.geolocation' object.
		  function geolocate() {
			if (navigator.geolocation) {
			  navigator.geolocation.getCurrentPosition(function(position) {
				var geolocation = {
				  lat: position.coords.latitude,
				  lng: position.coords.longitude
				};
				var circle = new google.maps.Circle({
				  center: geolocation,
				  radius: position.coords.accuracy
				});
				autocomplete.setBounds(circle.getBounds());
				
				console.log(circle.getBounds());
			  });
			}
		  }
		  
		  jQuery('#zpa-all-input input').on('focus', function(){
			  geolocate();
		  });
		  
		  initAutocomplete();
		  <?php  /* if($states): ?>
		  jQuery(input).on('input',function(){
			var str = input.value;
			var prefix = '<?php echo $states; ?> | ';
			if(str.indexOf(prefix) == 0) {
				// console.log(input.value);
			} else {
				if (prefix.indexOf(str) >= 0) {
					input.value = prefix;
				} else {
					input.value = prefix+str;
				}
			}

		  }); 
		  <?php endif; */ ?>
	  });
	</script>
	<script>  
	  <?php
	  $rb = zipperagent_rb();
	  $states=isset($rb['web']['states'])?$rb['web']['states']:'';
	  $states=array_map('trim', explode(',', $states));
	  $states=implode(' | ',$states);
	  ?>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
	  jQuery(document).ready(function(){
		  var placeSearch, autocomplete;
		  var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'short_name',
			// country: 'short_name',
			postal_code: 'short_name'
		  };
		  var input = document.getElementById('zpa-area-address');

		  function initAutocomplete() {
			var options = {
				types: ['geocode'],  // or '(cities)' if that's what you want?
				componentRestrictions: {country: ["us","ca","in"]},
			};
			// Create the autocomplete object, restricting the search to geographical
			// location types.
			autocomplete = new google.maps.places.Autocomplete(
				/** @type {!HTMLInputElement} */(input), options);

			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		  }

		  function fillInAddress() {
			// Get the place details from the autocomplete object.
			var place = autocomplete.getPlace();
			
			for (var component in componentForm) {
			  document.getElementById(component).value = '';
			  document.getElementById(component).disabled = false;
			}

			// Get each component of the address from the place details
			// and fill the corresponding field on the form.
			for (var i = 0; i < place.address_components.length; i++) {
			  var addressType = place.address_components[i].types[0];
			  if (componentForm[addressType]) {
				var val = place.address_components[i][componentForm[addressType]];
				var field = jQuery('#'+addressType);
				document.getElementById(addressType).value = val;
				
				var name=jQuery(field).attr('name').toLowerCase();
				var linked_name = name;
				var value = val;
				
				if(!value){
					removeLabel(linked_name, name, value);
				}else{
					addFilterLabel(name, value, linked_name, '');
					addFormField(name,value,linked_name);
				}
			  }
			}
			
			for (var component in componentForm) {
			  if(!jQuery('#'+component).val()){			
				var name=jQuery('#'+component).attr('name').toLowerCase();
				var linked_name=name;
				removeLabel(linked_name, name, '');
			  }
			}
			
			input.value='';
			jQuery('#zpa-search-filter-form').submit();
		  }

		  // Bias the autocomplete object to the user's geographical location,
		  // as supplied by the browser's 'navigator.geolocation' object.
		  function geolocate() {
			if (navigator.geolocation) {
			  navigator.geolocation.getCurrentPosition(function(position) {
				var geolocation = {
				  lat: position.coords.latitude,
				  lng: position.coords.longitude
				};
				var circle = new google.maps.Circle({
				  center: geolocation,
				  radius: position.coords.accuracy
				});
				autocomplete.setBounds(circle.getBounds());
			  });
			}
		  }
		  
		  jQuery('#zpa-area-address').on('focus', function(){
			  geolocate();
		  });
		  
		  initAutocomplete();
		  
		  <?php if($states): ?>
		  jQuery(input).on('input',function(){
			var str = input.value;
			var prefix = '<?php echo $states; ?> | ';
			if(str.indexOf(prefix) == 0) {
				
			} else {
				if (prefix.indexOf(str) >= 0) {
					input.value = prefix;
				} else {
					input.value = prefix+str;
				}
			}

		  });
		  <?php endif; ?>
	  });
	  
	  jQuery(document).ready(function(){
		  var placeSearch, autocomplete;
		  var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'short_name',
			country: 'short_name',
			postal_code: 'short_name'
		  };
		  var input = document.getElementById('zpa-school');

		  function initAutocomplete() {
			var options = {
				types: ['establishment'],  // or '(cities)' if that's what you want?
				componentRestrictions: {country: ["us","ca","in"]},
			};
			// Create the autocomplete object, restricting the search to geographical
			// location types.
			autocomplete = new google.maps.places.Autocomplete(
				/** @type {!HTMLInputElement} */(input), options);

			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		  }

		  function fillInAddress() {
			// Get the place details from the autocomplete object.
			var place = autocomplete.getPlace();
			
			var name,linked_name;
			var lat=place['geometry']['location'].lat();
			var lng=place['geometry']['location'].lng();
			
			name='lat';
			linked_name=name;
			value=lat;
			// addFilterLabel(name, value, linked_name, '');
			addFormField(name,value,linked_name);
			
			name='lng';
			linked_name=name;
			value=lng;
			// addFilterLabel(name, value, linked_name, '');
			addFormField(name,value,linked_name);
			
			input.value='';
			jQuery('#zpa-search-filter-form').submit();
		  }

		  // Bias the autocomplete object to the user's geographical location,
		  // as supplied by the browser's 'navigator.geolocation' object.
		  function geolocate() {
			if (navigator.geolocation) {
			  navigator.geolocation.getCurrentPosition(function(position) {
				var geolocation = {
				  lat: position.coords.latitude,
				  lng: position.coords.longitude
				};
				var circle = new google.maps.Circle({
				  center: geolocation,
				  radius: position.coords.accuracy
				});
				autocomplete.setBounds(circle.getBounds());
			  });
			}
		  }
		  
		  jQuery('#zpa-school').on('focus', function(){
			  geolocate();
		  });
		  
		  initAutocomplete();
		  
		  <?php if($states): ?>
		  jQuery(input).on('input',function(){
			var str = input.value;
			var prefix = '<?php echo $states; ?> | ';
			if(str.indexOf(prefix) == 0) {
				
			} else {
				if (prefix.indexOf(str) >= 0) {
					input.value = prefix;
				} else {
					input.value = prefix+str;
				}
			}

		  });
		  <?php endif; ?>
	  });
    </script>
	<script>
		function addCommas(nStr)
		{
			nStr += '';
			x = nStr.split('.');
			x1 = x[0];
			x2 = x.length > 1 ? '.' + x[1] : '';
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + ',' + '$2');
			}
			return x1 + x2;
		}
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
	<script>
		jQuery(document).ready(function($){
			$('.cq-dropdown .dropdown-toggle').on('click', function(){
				var cq = $(this).parents('.cq-dropdown');
				if(cq.hasClass('open')){
					cq.removeClass('open');
				}else{					
					cq.addClass('open');
				}
			});
			$(document).click(function(){
			  $(".cq-dropdown").removeClass('open');
			});
			$(".cq-dropdown .dropdown-menu").click(function(e){
			  e.stopPropagation();
			});
		});
	</script>
</div>