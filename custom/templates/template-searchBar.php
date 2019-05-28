<?php
$currency = zipperagent_currency();
$excludes = get_new_filter_excludes();
?>
<div id="omnibar-wrap">
	<div class="desktop-omnibar">
		<style>
			#omnibar-wrap .input-column .field-wrap .field-section .ms-ctn, #zpa-main-container .ms-ctn .ms-sel-ctn input{border:0 !important;}
		</style>
		<div class="row">
			<div class="input-column col-sm-6">
				<div class="search-by dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Search By
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<ul>
						<li><a id="all" href="#">All Categories</a></li>
						<li><a id="addr" href="#">Address</a></li>
						<li><a id="area" href="#">Area</a></li>
						<li><a id="town" href="#">City / Town</a></li>
						<li><a id="county" href="#">County</a></li>
						<li><a id="listid" href="#">MLS #ID</a></li>
						<!-- <li><a id="school" href="#">School</a></li> -->
						<!-- <li><a id="school2" href="#">School</a></li> -->
						<li><a id="zip" href="#">Zip Code</a></li>
					</ul>
				  </div>
				</div>
				<div class="field-wrap">
					<div class="field-section all">
						<input id="zpa-all-input" class="zpa-all-input form-control" placeholder="Enter Town / Area / County / Zip"  name="location[]"/>
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
						<input id="zpa-areas-input" class="form-control" placeholder="Enter Area"  name="location[]"/>
					</div>
					<div class="field-section town hide">
						<input id="zpa-town-input" class="form-control" placeholder="Enter City / Town"  name="location[]"/>
					</div>
					<div class="field-section county hide">
						<input id="zpa-county-input" class="form-control" placeholder="Enter County"  name="location[]"/>
					</div>
					<div class="field-section listid hide">
						<input id="listid" class="form-control" placeholder="Comma separated listing ids"  name="alstid"/>
					</div>
					<div class="field-section school hide">
						<input type="text" id="zpa-school" class="form-control" placeholder="Type address here" name="school" />
					</div>					
					<div class="field-section school2 hide">
						<input id="zpa-school-input" class="form-control" placeholder="Type address here"  name="school[]"/>
					</div>
					<div class="field-section zip hide">
						<input id="zpa-zipcode-input" class="form-control" placeholder="Enter Zip Code"  name="location[]"/>
					</div>
				</div>
				<script>
					jQuery('body').on('click', '#omnibar-wrap .search-by .dropdown-menu a', function(){
						var id = jQuery(this).attr('id');
						var targetClass = id;
						jQuery(this).parents('.input-column').find('.field-wrap .field-section:not(.'+ targetClass +')').addClass('hide');
						jQuery(this).parents('.input-column').find('.field-wrap .field-section.'+targetClass).removeClass('hide');
						
						jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
						return false;
					});
					jQuery('body').on('click', '.btn-show-result', function(){
						jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown0
					});
				</script>
			</div>
			<div class="filter-column col-sm-6">
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
						<div class="dropdown type">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Type
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<div class="row">
								<div class="proptype col-xs-6">
									<h3>Property Type</h3>
									<ul class="propertytype">
										<?php
										$propTypeFields = get_property_type();
										foreach( $propTypeFields as $fieldCode=>$fieldName ){
											echo '<li><label for="'.$fieldCode.'"><input id="'.$fieldCode.'" name="propertytype[]" type="checkbox" value="'. $fieldCode .'" /> '. $fieldName .'</label></li>';											
										}
										$propSubTypeFields = get_property_sub_type();
										foreach( $propSubTypeFields as $fieldCode=>$fieldName ){
											echo '<li><label for="'.$fieldCode.'"><input id="'.$fieldCode.'" name="propsubtype[]" type="checkbox" value="'. $fieldCode .'" /> '. $fieldName .'</label></li>';											
										}
										?>
									</ul>									
								</div>
								<div class="propstatus col-xs-6">
									<h3>Listing Status</h3>
									<ul class="status">
										<li><label for="active"><input id="active" name="status" type="radio" value="" checked /> Active</label></li>
										<li><label for="sold"><input id="sold" name="status" type="radio" value="<?php echo zipperagent_sold_status(); ?>" /> Sold</li>
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
						<div class="dropdown sort">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 Sort
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<ul class="o">
							   <li><label for="o-0"><input type="radio" value="apmin%3ADESC" name="o" id="o-0"><span>Price (High to Low)</span></label> </li>
							   <li><label for="o-1"><input type="radio" value="apmin%3AASC" name="o" id="o-1"><span>Price (Low to High)</span></label></li>
							   <li><label for="o-2"><input type="radio" value="asts%3AASC" name="o" id="o-2"><span>Status</span></label></li>
							   <li><label for="o-3"><input type="radio" value="atwns%3AASC" name="o" id="o-3"><span>City</span></label></li>
							   <li><label for="o-4"><input type="radio" value="lid%3ADESC" name="o" id="o-4"><span>Listing Date</span></label></li>
							   <li><label for="o-5"><input type="radio" value="apt%3ADESC" name="o" id="o-5"><span>Type / Price Descending</span></label></li>
							   <?php /* <li><label for="o-6"><input type="radio" value="alstid%3AASC" name="o" id="o-6"><span>Listing Number</span></label> </li> */ ?>
							</ul>
						  </div>
						</div>
						<div class="dropdown more">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 More +
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<div class="fewer show">
								<div class="row-fields row">
									<div class="square-footage col-xs-4">
										<span class="field-label">Square Footage</span>
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
									<div class="days-on-site col-xs-4">
										<span class="field-label"># Days On Site </span>
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
									<div class="acres col-xs-4">
										<span class="field-label">Acres</span>
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
								</div>
								<div class="row-fields row">
									<div class="garage-spaces col-xs-4">		
										<span class="field-label">Garage Spaces</span>
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
									<div class="stories col-xs-4">
										<span class="field-label">Stories</span>
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
									<div class="col-xs-4">
									</div>
								</div>
								<div class="bottom-fields row">
									<div class="popular-features col-xs-12">
										<h3>Popular Features</h3>
										<label for="has-photos"><input id="has-photos" type="checkbox" name="withimage" value="true" /> Has Photos</label>
									</div>
								</div>
							</div>
							<div class="more hide">
							
								<?php
								$fields = get_references_field('STYLE');
								if($fields): ?>
								<div class="checkbox-wrap">
									<h3>Styles</h3>
									<div class="checkbox-row row">
										<?php										
										foreach($fields as $field){
											echo '<span class="col-xs-4"><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="checkbox" name="astle[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></span>'."\r\n";
										}
										?>
									</div>
								</div>
								<?php endif; ?>
								
								<?php
								$fields = get_references_field('EXTERIORFEATURES');
								if($fields): ?>
								<div class="checkbox-wrap">
									<h3>Exterior Features</h3>
									<div class="checkbox-row row">
										<?php										
										foreach($fields as $field){
											echo '<span class="col-xs-4"><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="checkbox" name="aextf[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></span>'."\r\n";
										}
										?>
									</div>
								</div>
								<?php endif; ?>
								
								<?php
								$fields = get_references_field('WATERFRONT');
								if($fields): ?>
								<div class="checkbox-wrap">
									<h3>Water Front</h3>
									<div class="checkbox-row row">
										<?php										
										foreach($fields as $field){
											echo '<span class="col-xs-4"><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="checkbox" name="awtrf[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></span>'."\r\n";
										}
										?>
									</div>
								</div>
								<?php endif; ?>
								
								<?php
								$fields = get_references_field('WATERVIEWFEATURES');
								if($fields): ?>
								<div class="checkbox-wrap">
									<h3>View</h3>
									<div class="checkbox-row row">
										<?php										
										foreach($fields as $field){
											echo '<span class="col-xs-4"><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="checkbox" name="awvf[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></span>'."\r\n";
										}
										?>
									</div>
								</div>
								<?php endif; ?>
							</div>
							<div class="action">
								<div class="row">		
									<div class="col-xs-6">
										<a class="btn-more btn btn-primary"><span class="label-fewer hide">Fewer Options</span><span class="label-more show">More Options</span></a>
									</div>
									<div class="col-xs-6">
										<a class="btn-show-result btn btn-primary">Show Result</a>
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
		<?php include "template-searchBarMobile.php"; ?>
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
				jQuery('#omnibar-wrap .filter-column input[type=text][name="'+name+'"]').val('');
				jQuery('#omnibar-wrap .filter-column select[name="'+name+'"]').val('');
				if(value)
					jQuery('#omnibar-wrap .filter-column input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", false);
				else
					jQuery('#omnibar-wrap .filter-column input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				jQuery('#omnibar-wrap .filter-column input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", false);
				
				//remove from mobile search bar		
				jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap input[type=text][name="'+name+'"]').val('');
				jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap select[name="'+name+'"]').val('');
				if(value)
					jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", false);
				else
					jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);			
				jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", false);
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
						case "alstid":
							newLabel = 'listing: ' + value;	
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
							newLabel = linked_name.toLowerCase()+' '+value;
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
				
				data: $.merge(towns, areas, counties, zipcodes),
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
				
				var name = 'location[]';
				var linked_name = 'location_'+value;
				
				this.removeFromSelection(this.getSelection(), true);
				addFilterLabel(name, value, linked_name, label);
				addFormField(name,value,linked_name);
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			jQuery('body').on( 'change', '#omnibar-wrap #listid', function(){
				<?php /* 
				var values=jQuery(this).val().split(',');
				var name='alstid[]';
				var linked_name;
				var value;
				
				for(i=0; i<values.length; i++){		
					value=values[i];
					linked_name='alstid_'+value;
					addFilterLabel(name, value, linked_name, '');
					addFormField(name,value,linked_name);
				}; */ ?>
				var value=jQuery(this).val().split(',');
				var name='alstid';
				var linked_name=name;
				
				addFilterLabel(name, value, linked_name, '');
				addFormField(name,value,linked_name);
				
				jQuery(this).val('');
				jQuery('#zpa-search-filter-form').submit();
			});
					  
		});
	</script>	
	<script>
		jQuery('body').on( 'change', '#omnibar-wrap .filter-column input, #omnibar-wrap .filter-column select,'+
									 '#omnibar-wrap .mobile-omnimbar .field-wrap input, #omnibar-wrap .mobile-omnimbar .field-wrap select', function(){
										 
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
		
		jQuery('body').on( 'click', '#omnibar-wrap .filter-column .select-min-price a,'+
									'#omnibar-wrap .mobile-omnimbar .select-min-price a', function(){
			var name='minlistprice';
			var linked_name=name;
			var value=jQuery(this).attr('value');
			
			jQuery(this).closest('.listprice').find('input[name=minlistprice]').val(addCommas(value));			
			addFilterLabel(name, value, linked_name, '');
			addFormField(name,value,linked_name);
			
			jQuery('#zpa-search-filter-form').submit();
			
			return false;
		});
		jQuery('body').on( 'click', '#omnibar-wrap .filter-column .select-max-price a,'+
									'#omnibar-wrap .mobile-omnimbar .select-max-price a', function(){
										
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
				jQuery('#omnibar-wrap .filter-column input[type=text][name="'+name+'"]').val(value);
				jQuery('#omnibar-wrap .filter-column select[name="'+name+'"]').val(value);
				jQuery('#omnibar-wrap .filter-column input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				jQuery('#omnibar-wrap .filter-column input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				
				//mobile search bar
				jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap input[type=text][name="'+name+'"]').val(value);
				jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap select[name="'+name+'"]').val(value);
				jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				jQuery('#omnibar-wrap .mobile-omnimbar .field-wrap input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", true);
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
		jQuery('body').on('click', '.dropdown.more .btn-more', function(){
			
			if(jQuery(this).parents('.dropdown.more').find('.fewer').hasClass('hide')){
				jQuery(this).parents('.dropdown.more').find('.fewer').removeClass('hide').addClass('show');
			}else{
				jQuery(this).parents('.dropdown.more').find('.fewer').removeClass('show').addClass('hide');
			}
			
			if(jQuery(this).parents('.dropdown.more').find('.more').hasClass('hide')){
				jQuery(this).parents('.dropdown.more').find('.more').removeClass('hide').addClass('show');
			}else{
				jQuery(this).parents('.dropdown.more').find('.more').removeClass('show').addClass('hide');
			}
			
			if(jQuery(this).find('.label-fewer').hasClass('hide')){
				jQuery(this).find('.label-fewer').removeClass('hide').addClass('show');			
			}else{
				jQuery(this).find('.label-fewer').removeClass('show').addClass('hide');
			}
			
			if(jQuery(this).find('.label-more').hasClass('hide')){
				jQuery(this).find('.label-more').removeClass('hide').addClass('show');				
			}else{
				jQuery(this).find('.label-more').removeClass('show').addClass('hide');				
			}			
			return false;
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
</div>