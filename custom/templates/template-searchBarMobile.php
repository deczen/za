<div class="row">
	<div class="filter-column col-sm-12">
		<div class="row">
		<div class="col-xs-6">
			<button id="mobile-filter" class="btn-large btn-primary width-1-1" type="button" aria-pressed="false"><svg viewBox="0 0 24 24" class="sc-eLExRp mt-10 mr-5 haKWSj sc-bdVaJa bssMCl"><g id="Symbols"><g id="Header-_-Map-View-Copy" data-name="Header-/-Map-View-Copy"><g id="Filter-Icon"><g id="Page-1"><g id="Group-3"><g mask="url(#mask)"><path id="Fill-1" d="M20.59,11h-11a2.4,2.4,0,0,0-4.18,0H3.49a1.2,1.2,0,0,0,0,2.39H5.37a2.4,2.4,0,0,0,4.18,0h11a1.2,1.2,0,0,0,0-2.39"></path></g></g><g id="Group-6"><g mask="url(#mask-2-2)"><path id="Fill-4" d="M20.58,17.8H14.12a2.4,2.4,0,0,0-4.18,0H3.48a1.2,1.2,0,0,0,0,2.39H9.94a2.4,2.4,0,0,0,4.18,0h6.46a1.2,1.2,0,0,0,0-2.39"></path></g></g><g id="Group-9"><g mask="url(#mask-3)"><path id="Fill-7" d="M20.59,4.12H18.74a2.4,2.4,0,0,0-4.18,0H3.49a1.2,1.2,0,0,0,0,2.39H14.56a2.4,2.4,0,0,0,4.18,0h1.85a1.2,1.2,0,0,0,0-2.39"></path></g></g></g></g></g></g></svg> Filter</button>
			
		</div>
		<div class="col-xs-6">
			<div class="dropdown-group">
				<div class="dropdown sort">
				  <button class="btn btn-large btn-primary width-1-1 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 Sort
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<ul class="o">
					   <li><label for="o-0"><input type="radio" value="apmin:DESC" name="o" id="o-0"><span>Price (High to Low)</span></label> </li>
					   <li><label for="o-1"><input type="radio" value="apmin:ASC" name="o" id="o-1"><span>Price (Low to High)</span></label></li>
					   <li><label for="o-2"><input type="radio" value="asts:ASC" name="o" id="o-2"><span>Status</span></label></li>
					   <li><label for="o-3"><input type="radio" value="atwns:ASC" name="o" id="o-3"><span>City</span></label></li>
					   <li><label for="o-4"><input type="radio" value="lid:DESC" name="o" id="o-4"><span>Listing Date</span></label></li>
					   <li><label for="o-5"><input type="radio" value="apt:DESC" name="o" id="o-5"><span>Type / Price Descending</span></label></li>
					   <li><label for="o-6"><input type="radio" value="alstid:ASC" name="o" id="o-6"><span>Listing Number</span></label> </li>
					</ul>
				  </div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<div class="mobile-filter">
	<div class="col-xs-12 btn-header">
		<div class="row">
			<div class="col-xs-3">
				<button id="cncl" class="btn btn-large btn-primary">Cancel</button>
			</div>
			<div class="col-xs-3">
				<button class="btn btn-large btn-primary">Save</button>
			</div>
			<div class="col-xs-6">
				<button class="btn-large btn-primary">Results</button>
			</div>
		</div>
	</div>
	<div class="col-xs-12 main-mobile-filter">
		<div class="row">
			<div class="field-wrap search-type">
				<div class="field-section all">
					<input id="zpa-all-input" class="zpa-area-input form-control" placeholder="Type any Area, Address, ZIP, School, etc."  name="search-fild"/>
				</div>
			</div>
			<div class="field-wrap price-type">
				<div class="col-xs-12">
					<label>Price Range</label>
				</div>
				<div class="min-price col-xs-6">
					<input id="minlistprice" type="text" />
					<label for="minlistprice">Min Price</label>
				</div>
				<div class="max-price col-xs-6">
					<input id="maxlistprice" type="text" />
					<label for="maxlistprice">Max Price</label>
				</div>
			</div>
			<div class="field-wrap price-bed">
				<div class="row">
					<div class="field-section col-xs-6">
						<!--<div class="row">-->
							<div class="col-xs-12">
								<label>Bedrooms</label>
							</div>
							<div class="col-xs-12">
								<ul class="bedrooms">
									<li><label for="beedrooms"><input id="beedrooms" name="bedrooms" type="radio" value="" /> Any</label></li>
									<li><label for="beedrooms1"><input id="beedrooms1" name="bedrooms" type="radio" value="1" /> 1+</label></li>
									<li><label for="beedrooms2"><input id="beedrooms2" name="bedrooms" type="radio" value="2" /> 2+</label></li>
									<li><label for="beedrooms3"><input id="beedrooms3" name="bedrooms" type="radio" value="3" /> 3+</label></li>
									<li><label for="beedrooms4"><input id="beedrooms4" name="bedrooms" type="radio" value="4" /> 4+</label></li>
									<li><label for="beedrooms5"><input id="beedrooms5" name="bedrooms" type="radio" value="5" /> 5+</label></li>
								</ul>
							</div>
						<!--</div>-->
					</div>
					<div class="field-section col-xs-6">
						<div class="row">
							<div class="col-xs-12">
								<label>Bathrooms</label>
							</div>
							<div class="col-xs-12">
								<ul class="bathcount">
									<li><label for="bathcount"><input id="bathcount" name="bathcount" type="radio" value="" /> Any</label></li>
									<li><label for="bathcount1"><input id="bathcount1" nname="bathcount" type="radio" value="1" /> 1+</label></li>
									<li><label for="bathcount2"><input id="bathcount2" nname="bathcount" type="radio" value="2" /> 2+</label></li>
									<li><label for="bathcount3"><input id="bathcount3" nname="bathcount" type="radio" value="3" /> 3+</label></li>
									<li><label for="bathcount4"><input id="bathcount4" nname="bathcount" type="radio" value="4" /> 4+</label></li>
									<li><label for="bathcount5"><input id="bathcount5" nname="bathcount" type="radio" value="5" /> 5+</label></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dropdown proptype-type" id="droptop">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"  aria-haspopup="true" aria-expanded="false">
				Property Type
				</button>
				<div class="sub-menu col-xs-12" aria-labelledby="dropdownMenuButton">
				<div class="row">
					<div class="proptype col-xs-6">
						<h3>Property Type</h3>
						<ul class="propertytype">
							<?php
							$propTypeFields = get_property_type();
							foreach( $propTypeFields as $fieldCode=>$fieldName ){
								echo '<li><label for="'.$fieldCode.'"><input id="'.$fieldCode.'" name="propertytype" type="checkbox" value="'. $fieldCode .'" /> '. $fieldName .'</label></li>';											
							}
							?>
						</ul>									
					</div>
					<div class="propstatus col-xs-6">
						<h3>Listing Status</h3>
						<ul class="status">
							<li><label for="active"><input id="active" name="status" type="checkbox" value="" /> Active</label></li>
							<li><label for="sold"><input id="sold" name="status" type="checkbox" value="<?php echo zipperagent_sold_status(); ?>" /> Sold</li>
						</ul>
					</div>
				</div>
				</div>
			</div>
			<div class="dropdown details-type" id="droptop">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"  aria-haspopup="true" aria-expanded="false">
				Property Details
				</button>
				<div class="sub-menu col-xs-12" aria-labelledby="dropdownMenuButton">
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
					
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function(){
		
		jQuery('#mobile-filter').click(function(){
			
			jQuery('.mobile-filter').toggle();
		});
		jQuery('#cncl').click(function(){
			
			jQuery('.mobile-filter').hide();
		});
		jQuery('#droptop button').click(function(){
			
			jQuery(this).parent().find('.sub-menu').toggle();
		});
	});
</script>