<?php
global $requests;

// $minListPrice 		= $requests['minlistprice'];
// $maxListPrice		= $requests['maxlistprice'];

$uniqid = uniqid();
$uniqueClass = 'form_'.$uniqid;
$uniqueClassWithDot = '.'.$uniqueClass;
$el = $uniqueClassWithDot;
$direct = isset($requests['direct'])&&$requests['direct']?$requests['direct']:0;

?><div id="zpa-main-container" class="zpa-container">
	<div id="omnibar-wrap">
		<form id="searchProfile" class="form-inline zpa-quick-search-form omnibar <?php echo $uniqueClass; ?>" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET">
			<div class="omnibar">
				<style>
					#omnibar-wrap .input-column .field-wrap .field-section .ms-ctn, #zpa-main-container .ms-ctn .ms-sel-ctn input{border:0 !important;}
				</style>
				<div class="row">
					<div class="input-column col-xs-9 col-sm-10">
						<div class="search-by dropdown hidden-xs">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Search By
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<ul>
								<li><a id="all" href="#"><input type="radio" name="search_category" checked /> All Categories</a></li>
								<!-- <li><a id="addr" href="#"><input type="radio" name="search_category" /> Address</a></li> -->
								<li><a id="addr2" href="#"><input type="radio" name="search_category" /> Address</a></li>
								<li><a id="area" href="#"><input type="radio" name="search_category" /> Area</a></li>
								<li><a id="town" href="#"><input type="radio" name="search_category" /> City / Town</a></li>
								<li><a id="county" href="#"><input type="radio" name="search_category" /> County</a></li>
								<!-- <li><a id="lake" href="#"><input type="radio" name="search_category" /> Lake</a></li> -->
								<li><a id="listid" href="#"><input type="radio" name="search_category" /> MLS #ID</a></li>
								<!-- <li><a id="school" href="#"><input type="radio" name="search_category" /> School</a></li> -->
								<!-- <li><a id="school2" href="#"><input type="radio" name="search_category" /> School</a></li> -->
								<li><a id="school3" href="#"><input type="radio" name="search_category" /> School</a></li>
								<li><a id="zip" href="#"><input type="radio" name="search_category" /> Zip Code</a></li>
							</ul>
						  </div>
						</div>
						<div class="field-wrap">
							<div class="field-section all">
								<input id="zpa-all-input" class="zpa-area-input form-control" placeholder="Type any Address, Area, City, County, MLS# or Zip Code" name="" aria-label="search" />
								<input id="zpa-all-input-address" type="hidden" value="" />
								<input id="zpa-all-input-address-values" type="hidden" value="" />
								<div style="display:none;" class="input-fields"></div>
							</div>
							<div class="field-section addr hide">
								<input type="text" id="zpa-area-address" class="form-control" placeholder="Type any Address" />
																																				
								<input type="hidden" id="street_number" name="advStNo" disabled="true" />
								<input type="hidden" id="route" name="advStName" disabled="true" />
								<input type="hidden" id="locality" name="advTownNm" disabled="true" />
								<input type="hidden" id="administrative_area_level_1" name="advStates" disabled="true"  />
								<input type="hidden" id="country" name="advCounties" disabled="true" />
								<input type="hidden" id="postal_code" name="advStZip" disabled="true" />
							</div>
							<div class="field-section addr2 hide">
								<input type="text" id="zpa-address-key" class="form-control" placeholder="Type any Address" name="location[]"/>
							</div>
							<div class="field-section area hide">
								<input id="zpa-areas-input" class="form-control" placeholder="Type any Area"  name="location[]"/>
							</div>
							<div class="field-section town hide">
								<input id="zpa-town-input" class="form-control" placeholder="Type any City or Town"  name="location[]"/>
							</div>
							<div class="field-section county hide">
								<input id="zpa-county-input" class="form-control" placeholder="Type any County"  name="location[]"/>
							</div>
							<div class="field-section lake hide">
								<input id="zpa-lake-input" class="form-control" placeholder="Type any Lake"  name="alkChnNm[]"/>
							</div>
							<div class="field-section listid hide">
								<input id="zpa-listid-input" class="form-control" placeholder="Type any MLS ID #"  name=""/>
								<div style="display:none;" class="input-fields"></div>
							</div>
							<div class="field-section school hide">
								<input type="text" id="zpa-school" class="form-control" placeholder="Type any Address" />
								
								<input type="hidden" id="lat" name="lat" />
								<input type="hidden" id="lng" name="lng" />
							</div>
							<div class="field-section school2 hide">
								<input id="zpa-school-input" class="form-control" placeholder="Type any Address"  name="school[]"/>
							</div>
							<div class="field-section school3 hide">
								<input id="zpa-school3-input" class="form-control" placeholder="Type any Address"  name="location[]"/>
							</div>
							<div class="field-section zip hide">
								<input id="zpa-zipcode-input" class="form-control" placeholder="Type any Zip Code"  name="location[]"/>
							</div>
						</div>
						<script>
							jQuery('body').on('click', '#omnibar-wrap .search-by .dropdown-menu a', function(){
								var id = jQuery(this).attr('id');
								var targetClass = id;
								
								jQuery(this).parents('.input-column').find('.field-wrap .field-section:not(.'+ targetClass +') input').prop('disabled',true);
								jQuery(this).parents('.input-column').find('.field-wrap .field-section.'+targetClass+' input').prop('disabled',false);
								
								jQuery(this).parents('.input-column').find('.field-wrap .field-section:not(.'+ targetClass +')').addClass('hide');
								jQuery(this).parents('.input-column').find('.field-wrap .field-section.'+targetClass).removeClass('hide');
								
								jQuery(this).find('input').prop('checked', true);
								
								jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
								
								jQuery('body .pac-container.pac-logo').css( 'visibility', 'visible' ); //force google autocomplete dropdown visible
								
								return false;
							});
						</script>
					</div>
					<div class="submit-column col-xs-3 col-sm-2">						
						<button class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search <?php /* visible-xs visible-sm visible-md hidden-lg*/ ?>" aria-hidden="true" role="none"></i> <?php /* <span class="hidden-xs hidden-sm hidden-md">Find Your Home</span> */ ?> </button>
						
					</div>
				</div>
			</div>
			
			<input type="hidden" name="newsearchbar" value="1" />
			<?php 
			$default_order = isset($requests['o']) ? $requests['o'] : za_get_default_order();
			if($default_order): ?>
			<input type="hidden" name="o" value="<?php echo $default_order; ?>" />
			<?php endif; ?>
			
			<?php if($requests['column']): ?>
			<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
			<?php endif; ?>
			
			<?php if($requests['direct']): ?>
			<input type="hidden" name="direct" value="<?php echo $requests['direct']; ?>" />
			<?php endif; ?>
			
			<?php if($requests['propertytype']): ?>
				<?php 
				$proptypes = explode( ',', $requests['propertytype'] );
				foreach($proptypes as $proptype):
				?>
				<input type="hidden" name="propertytype[]" value="<?php echo $proptype; ?>" />
				<?php 
				endforeach;
			endif; ?>
			
			<?php
			foreach($requests as $key=>$val){
				if( ! in_array($key, array('o','column','direct','propertytype','location_option')) ){
					echo "<input type=\"hidden\" name=\"{$key}\" value=\"{$val}\" />"."\r\n";
				}
			}
			?>
		</form>	
		
		<?php echo global_new_omnibar_script_v2(0, $direct, $el); ?>
		
	</div>
</div>