<!--<script src="https://code.jquery.com/jquery.js" type="text/javascript"></script>-->
<?php global $is_detail_page; ?>
<form>
	<div class="row">
		<?php if ($is_detail_page): ?>
		<div class="filter-column col-sm-12">
			<div class="row">
			<div class="col-xs-6 padding-lite-right">
				<button id="mobile-filter" class="btn-large btn-primary width-1-1" type="button" aria-pressed="false"><i class="zy-icon fa fa-search" aria-hidden="true" role="none"></i> Search </button>
				
			</div>
			<div class="col-xs-6 padding-lite-left">
				<div class="field-wrap dropdown-group">
					<div class="dropdown sort">
					  <a href="javascript:history.go(-1)" title="Back to Results"><button class="btn btn-large btn-primary width-1-1 dropdown-toggle" type="button" id="dropdownMenuButton"> Back to Results </button></a>
					</div>
				</div>
			</div>
			</div>
		</div>
		<?php else: ?>
		<div class="filter-column col-sm-12">
			<div class="row">
			<div class="col-xs-6 padding-lite-right">
				<button id="mobile-filter" class="btn-large btn-primary width-1-1" type="button" aria-pressed="false"><svg viewBox="0 0 24 24" class="sc-eLExRp mt-10 mr-5 haKWSj sc-bdVaJa bssMCl"><g id="Symbols"><g id="Header-_-Map-View-Copy" data-name="Header-/-Map-View-Copy"><g id="Filter-Icon"><g id="Page-1"><g id="Group-3"><g mask="url(#mask)"><path id="Fill-1" d="M20.59,11h-11a2.4,2.4,0,0,0-4.18,0H3.49a1.2,1.2,0,0,0,0,2.39H5.37a2.4,2.4,0,0,0,4.18,0h11a1.2,1.2,0,0,0,0-2.39"></path></g></g><g id="Group-6"><g mask="url(#mask-2-2)"><path id="Fill-4" d="M20.58,17.8H14.12a2.4,2.4,0,0,0-4.18,0H3.48a1.2,1.2,0,0,0,0,2.39H9.94a2.4,2.4,0,0,0,4.18,0h6.46a1.2,1.2,0,0,0,0-2.39"></path></g></g><g id="Group-9"><g mask="url(#mask-3)"><path id="Fill-7" d="M20.59,4.12H18.74a2.4,2.4,0,0,0-4.18,0H3.49a1.2,1.2,0,0,0,0,2.39H14.56a2.4,2.4,0,0,0,4.18,0h1.85a1.2,1.2,0,0,0,0-2.39"></path></g></g></g></g></g></g></svg> Filter</button>
				
			</div>
			<div class="col-xs-6 padding-lite-left">
				<div class="field-wrap dropdown-group">
					<div class="dropdown sort">
					  <button class="btn btn-large btn-primary width-1-1 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
				</div>
			</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="mobile-filter">
		<div class="col-xs-12 btn-header">
			<div class="row">
				
				<?php if ( $is_detail_page ): ?>
				
					<div class="col-xs-6 padding-lite-right">
						<button id="cncl" class="btn btn-large btn-primary">Close</button>
					</div>
					<div class="col-xs-6 padding-lite-left">
						<button id="rsult" class="btn-large btn-primary">Results</button>
					</div>
				
				<?php else: ?>
					
					<div class="col-xs-3 padding-lite-right">
						<button id="cncl" class="btn btn-large btn-primary">Close</button>
					</div>
					<div class="col-xs-3 padding-lite-right padding-lite-left">
						<button id="sevSubmit" class="btn btn-large btn-primary">Save</button>
					</div>
					<div class="col-xs-6 padding-lite-left">
						<button id="rsult" class="btn-large btn-primary">Results</button>
					</div>
				
				<?php endif; ?>
				
			</div>
		</div>
		<div class="col-xs-12 main-mobile-filter">
			<div class="row">
				<div class="filter-wrap selected-filter" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">Filters Applied: </button>
					<div class="sub-menu col-xs-12">
						<div id="zpa-view-selected-filter">
							<div id="zpa-selected-filter" class="ms-ctn form-control  ms-ctn-readonly ms-no-trigger">
								<div class="ms-sel-ctn">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="search-wrap search-type">
					<div class="field-section all">
						<input id="zpa-mobile-all-input" class="zpa-area-input location-input form-control" placeholder="Address / Area / City / County / MLS# / Zip Code"  name="search-fild"/>
					</div>
				</div>
				<div class="field-wrap price-type">
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-12">
								<h4>Price Range</h4>
							</div>
							<div class="min-price col-xs-6">
								<input id="minlistprice" name="minlistprice" class="input-number" type="text" />
								<label for="minlistprice">Min Price</label>
							</div>
							<div class="max-price col-xs-6">
								<input id="maxlistprice" name="maxlistprice" class="input-number" type="text" />
								<label for="maxlistprice">Max Price</label>
							</div>
						</div>
					</div>
				</div>
				<div class="field-wrap bed-type" id="droptop">
					<!--<button class="btn btn-secondary dropdown-toggle" type="button">Bedrooms</button>-->
					<div class="col-xs-12">
						<h4>Bedrooms</h4>
						<!--
						<div class="btn-group btn-group-toggle grid" data-toggle="buttons">
						  <label class="btn btn-secondary cell active">
							<input type="radio" name="bedrooms" id="bedrooms" autocomplete="off" value="" checked> Any
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bedrooms" id="bedrooms1" autocomplete="off" value="1"> 1+
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bedrooms" id="bedrooms2" autocomplete="off" value="2"> 2+
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bedrooms" id="bedrooms3" autocomplete="off" value="3"> 3+
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bedrooms" id="bedrooms4" autocomplete="off" value="4"> 4+
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bedrooms" id="bedrooms5" autocomplete="off"> 5+
						  </label>
						</div>
						-->
						<ul class="bedrooms grid">
							<li class="cell"><label for="beedrooms"><input id="beedrooms" name="bedrooms" type="radio" value="" checked /> Any</label></li>
							<li class="cell"><label for="beedrooms1"><input id="beedrooms1" name="bedrooms" type="radio" value="1" /> 1+</label></li>
							<li class="cell"><label for="beedrooms2"><input id="beedrooms2" name="bedrooms" type="radio" value="2" /> 2+</label></li>
							<li class="cell"><label for="beedrooms3"><input id="beedrooms3" name="bedrooms" type="radio" value="3" /> 3+</label></li>
							<li class="cell"><label for="beedrooms4"><input id="beedrooms4" name="bedrooms" type="radio" value="4" /> 4+</label></li>
							<li class="cell"><label for="beedrooms5"><input id="beedrooms5" name="bedrooms" type="radio" value="5" /> 5+</label></li>
						</ul>
						
					</div>
				</div>
				<div class="field-wrap bed-type" id="droptop">
					<div class="col-xs-12">
						<!--<button class="btn btn-secondary dropdown-toggle" type="button">Bathrooms</button>-->
						<h4>Bathrooms</h4>
						<!--
						<div class="btn-group btn-group-toggle grid" data-toggle="buttons">
						  <label class="btn btn-secondary cell active">
							<input type="radio" name="bathcount" id="bathcount" autocomplete="off" value="" checked> Any
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bathcount" id="bathcount1" autocomplete="off" value="1"> 1+
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bathcount" id="bathcount2" autocomplete="off" value="2"> 2+
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bathcount" id="bathcount3" autocomplete="off" value="3"> 3+
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bathcount" id="bathcount4" autocomplete="off" value="4"> 4+
						  </label>
						  <label class="btn btn-secondary cell">
							<input type="radio" name="bathcount" id="bathcount5" autocomplete="off"> 5+
						  </label>
						</div>
						-->
						<ul class="bathcount grid">
							<li class="cell" for="bathcount"><label for="bathcount"><input id="bathcount" name="bathcount" type="radio" value="" checked /> Any</label></li>
							<li class="cell" for="bathcount1"><label for="bathcount1"><input id="bathcount1" name="bathcount" type="radio" value="1" /> 1+</label></li>
							<li class="cell" for="bathcount2"><label for="bathcount2"><input id="bathcount2" name="bathcount" type="radio" value="2" /> 2+</label></li>
							<li class="cell" for="bathcount3"><label for="bathcount3"><input id="bathcount3" name="bathcount" type="radio" value="3" /> 3+</label></li>
							<li class="cell" for="bathcount4"><label for="bathcount4"><input id="bathcount4" name="bathcount" type="radio" value="4" /> 4+</label></li>
							<li class="cell" for="bathcount5"><label for="bathcount5"><input id="bathcount5" name="bathcount" type="radio" value="5" /> 5+</label></li>
						</ul>
						
					</div>
				</div>
				<div class="field-wrap proptype-type" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">Property Type</button>
					<div class="sub-menu col-xs-12">
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
							
							if($extra_proptypes = zipperagent_extra_proptype()){
								foreach($extra_proptypes as $key=>$extra_proptype){
									echo '<li><label for="'. strtolower($extra_proptype['abbrev']) .'"><input id="'. strtolower($extra_proptype['abbrev']) .'" name="'. strtolower($extra_proptype['abbrev']) .'" type="checkbox" value="'. $extra_proptype['selectValue'] .'" /> '. $extra_proptype['displayName'] .' </label></li>';
								}
							}
							?>
						</ul>
					</div>
				</div>
				<div class="field-wrap proptype-type" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">Listing Status</button>
					<div class="sub-menu col-xs-12">
						<ul class="status">
							<li><label for="active"><input id="active" name="status" type="radio" value="" checked /> Active</label></li>
							<li><label for="sold"><input id="sold" name="status" type="radio" value="<?php echo zipperagent_sold_status(); ?>" /> Sold</li>
							<li><label for="pending"><input id="pending" name="status" type="radio" value="<?php echo zipperagent_pending_status(); ?>" /> Pending</li>
						</ul>
					</div>
				</div>
				<div class="field-wrap details-type" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">Property Details</button>
					<div class="sub-menu col-xs-12">
						<div class="popular-features">
							<label for="has-photos"><input id="has-photos" type="checkbox" name="withimage" value="true" /> Has Photos</label>
							<label for="zpa-open-homes-only"><input id="zpa-open-homes-only" type="checkbox" name="openhomesonlyyn" value="true" /> Open House</label>
						</div>
						<div class="fewer show">
							<div class="row-fields row">
								<div class="square-footage col-xs-4">
									<span class="field-label">Square Footage</span>
									<div class="two-field-wrap grid">
										<div class="cell">
											<select id="searchSqftMin" name="acarea">
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
										<div class="cell cell-xs-1">
											<span class="between">to</span>
										</div>
										<div class="cell">
											<select id="searchSqftMax" name="acareamx">
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
								</div>
								<div class="days-on-site col-xs-4">
									<span class="field-label"># Days on Market </span>
									<div class="one-field-wrap">
										<select id="domk" name="domk">
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
									<div class="two-field-wrap grid">
										<div class="cell">
											<select id="searchAcresMin" name="aacr">
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
										<div class="cell cell-xs-1">
											<span class="between">to</span>
										</div>
										<div class="cell">
											<select id="searchAcresMax" name="aacrl">
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
							</div>
							<div class="row-fields row">
								<div class="garage-spaces col-xs-4">		
									<span class="field-label">Garage Spaces</span>
									<div class="two-field-wrap grid">
										<div class="cell">
											<select id="searchGaragesMin" name="agrgspc">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="cell cell-xs-1">
											<span class="between">to</span>
										</div>
										<div class="cell">
											<select id="searchGaragesMax" name="agrgspcmx">
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
								</div>
								<div class="stories col-xs-4">
									<span class="field-label">Storeys</span>
									<div class="two-field-wrap grid">
										<div class="cell">
											<select id="searchStoriesMin" name="aminstor">
												<option value="">Any</option>
												<option value="---" disabled="">---</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="cell cell-xs-1">
											<span class="between">to</span>
										</div>
										<div class="cell">
											<select id="searchStoriesMax" name="amaxstor">
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
								</div>
							</div>
							<div class="bottom-fields row"></div>
						</div>
						
					</div>
				</div>
				
				<?php
				$fields = get_references_field('SFTYPE');				
				if($fields): ?>
				<div class="field-wrap proptype-type" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">Building Type</button>
					<div class="sub-menu col-xs-12">
						<ul class="styles">
							<?php							
							foreach($fields as $field){
								echo '<li><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="checkbox" name="abtsf[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></li>';
							}
							?>
						</ul>
					</div>
				</div>
				<?php endif; ?>
				
				<?php
				$fields = get_references_field('STYLE');				
				if($fields): ?>
				<div class="field-wrap proptype-type" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">Styles</button>
					<div class="sub-menu col-xs-12">
						<ul class="styles">
							<?php							
							foreach($fields as $field){
								echo '<li><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="checkbox" name="astle[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></li>';
							}
							?>
						</ul>
					</div>
				</div>
				<?php endif; ?>
				
				<?php
				$fields = get_references_field('EXTERIORFEATURES');		
				if($fields): ?>
				<div class="field-wrap proptype-type" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">Exterior Features</button>
					<div class="sub-menu col-xs-12">
						<ul class="exteriorfeatures">
							<?php							
							foreach($fields as $field){
								echo '<li><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="checkbox" name="aextf[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></li>';
							}
							?>
						</ul>
					</div>
				</div>
				<?php endif; ?>
				
				<?php
				$fields = get_references_field('WATERFRONT');				
				if($fields): ?>
				<div class="field-wrap" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">Water Front</button>
					<div class="sub-menu col-xs-12">
						<ul class="waterfront">
							<?php
							echo "<li><label class=\"radio-btn\"><input type=\"radio\" name=\"awtrf\" value=''> Any </label></li>";
							foreach($fields as $field){
								echo '<li><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="radio" name="awtrf" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></li>';
							}
							?>
						</ul>
					</div>
				</div>
				<?php endif; ?>
				
				<?php
				$fields = get_references_field('WATERVIEWFEATURES');			
				if($fields): ?>
				<div class="field-wrap" id="droptop">
					<button class="btn btn-secondary dropdown-toggle" type="button">View</button>
					<div class="sub-menu col-xs-12">
						<ul class="View">
							<?php							
							foreach($fields as $field){
								echo '<li><label for="'. $field->longDescription .'"><input id="'. $field->longDescription .'" type="checkbox" name="awvf[]" value="'. $field->shortDescription .'" /> '. $field->longDescription .'</label></li>';
							}
							?>
						</ul>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</form>
<script>
	jQuery(document).ready(function(){
		
		jQuery('#mobile-filter').click(function(){
			
			jQuery('.mobile-filter').toggle();
			return false;
		});
		jQuery('#cncl').click(function(){
			
			jQuery('.mobile-filter').hide();
			return false;
		});
		jQuery('#rsult').click(function(){
			
			jQuery('.mobile-filter').hide();
			return false;
		});
		jQuery('#droptop button').click(function(){
			
			jQuery(this).toggleClass('opn');
			jQuery(this).parent().find('.sub-menu').toggle();
			return false;
		});
		
		jQuery('#sevSubmit:not(.needLogin)').click(function(){
		// jQuery('.zpa-listing-search-results').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){
			var contactId=jQuery(this).attr('contactId');
			var isLogin=jQuery(this).attr('isLogin');
				save_search(contactId,isLogin);
				jQuery('.mobile-filter').hide();
				return false;
		});	
	});
</script>
<script>
	jQuery('.mobile-omnimbar #minlistprice').on( 'blur', function(){
			var maxvalue = jQuery('.mobile-omnimbar #maxlistprice').val();
			var minvalue = jQuery(this).val();
			var maxlistprice =  parseInt(maxvalue.replace(/,/g, ''));
			var minlistprice =  parseInt(minvalue.replace(/,/g, ''));
			
			if(minlistprice > maxlistprice && maxlistprice){
				// alert('Min Price should be less than Max Price');
				jQuery(this).val(maxvalue);
				jQuery('.mobile-omnimbar #maxlistprice').val(minvalue);
				
				addFilterLabel('minlistprice', maxvalue, 'minlistprice', '');
				addFormField('minlistprice',maxvalue,'minlistprice');
				addFilterLabel('maxlistprice', minvalue, 'maxlistprice', '');
				addFormField('maxlistprice',minvalue,'maxlistprice');
				
				jQuery('#zpa-search-filter-form').submit();
			}else{				
				jQuery('.mobile-omnimbar #maxlistprice').focus();
			}
		});
		
		jQuery('.mobile-omnimbar #maxlistprice').on( 'blur', function(){
			var maxvalue = jQuery(this).val();
			var minvalue = jQuery('.mobile-omnimbar #minlistprice').val();
			var maxlistprice =  parseInt(maxvalue.replace(/,/g, ''));
			var minlistprice =  parseInt(minvalue.replace(/,/g, ''));
			
			if(maxlistprice < minlistprice){
				// alert('Max Price should be not less than Min Price');
				jQuery(this).val(minvalue);
				jQuery('.mobile-omnimbar #minlistprice').val(maxvalue);
				
				addFilterLabel('minlistprice', maxvalue, 'minlistprice', '');
				addFormField('minlistprice',maxvalue,'minlistprice');
				addFilterLabel('maxlistprice', minvalue, 'maxlistprice', '');
				addFormField('maxlistprice',minvalue,'maxlistprice');
				
				jQuery('#zpa-search-filter-form').submit();
			}
		});
</script>