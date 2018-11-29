<?php

class zipperAgentAdminConfiguration extends zipperAgentAdminAbstractPage {
	
	private static $instance;
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function registerSettings() {
		register_setting(zipperAgentConstants::OPTION_GROUP_CONFIGURATION, zipperAgentConstants::OPTION_LAYOUT_TYPE);
		register_setting(zipperAgentConstants::OPTION_GROUP_CONFIGURATION, zipperAgentConstants::CSS_OVERRIDE_OPTION);
		register_setting(zipperAgentConstants::OPTION_GROUP_CONFIGURATION, zipperAgentConstants::COLOR_SCHEME_OPTION);
		/* Modified by decz */
		register_setting(zipperAgentConstants::OPTION_GROUP_CONFIGURATION, 'enable_custom_town');
		register_setting(zipperAgentConstants::OPTION_GROUP_CONFIGURATION, 'enable_custom_county');
		register_setting(zipperAgentConstants::OPTION_GROUP_CONFIGURATION, 'town_list');
		register_setting(zipperAgentConstants::OPTION_GROUP_CONFIGURATION, 'county_list');
	}
	
	protected function getContent() {
		
		// clear option cache files
		if( isset($_GET['clear_cache']) && $_GET['clear_cache']==1 ){
			zipperagent_clear_caches();
		}
		
		$responsive = zipperAgentDisplayRules::getInstance()->isResponsive();
		$cssOverride = get_option(zipperAgentConstants::CSS_OVERRIDE_OPTION, null);
		if(empty($cssOverride)) {
			$cssOverride = "<style type=\"text/css\">\n\n</style>";
		}
		
		/* modified by decz */
		$meta = zipperagent_area_town();
		$towns = populate_towns($meta);
		$counties = populate_countries($meta);
		
		$enable_custom_town   = get_option( 'enable_custom_town', null );
		$enable_custom_county = get_option( 'enable_custom_county', null );
		$town_values 		  = get_option( 'town_list', null );
		$county_values 		  = get_option( 'county_list', null );
		
		// echo "<pre>"; print_r( $town_values ); echo "</pre>";
		// echo "<pre>"; print_r( $county_values ); echo "</pre>";
		?>
		<h2>Configuration</h2>
		<style>
			.box-wrap{margin-top:20px;}
			.box-wrap .box{width:20%; float:left; margin-bottom:10px;}
			@media screen and (max-width:1024px){
				.box-wrap .box{width:30%;}
			}
			@media screen and (max-width:768px){
				.box-wrap .box{width:30%;}
			}
			@media screen and (max-width:425px){
				.box-wrap .box{width:50%;}
			}
		</style>
		<form method="post" action="options.php">
			<?php settings_fields(zipperAgentConstants::OPTION_GROUP_CONFIGURATION); ?>
			<table class="form-table">
				<?php /*
				<?php if(!zipperAgentDisplayRules::getInstance()->isOmnipressSite()) { ?>
					<tr>
						<th>
							<label for="<?php echo zipperAgentConstants::OPTION_LAYOUT_TYPE; ?>">Layout Style</label>
						</th>
						<td>
							<select id="<?php echo zipperAgentConstants::OPTION_LAYOUT_TYPE; ?>" name="<?php echo zipperAgentConstants::OPTION_LAYOUT_TYPE; ?>">
								<option value="<?php echo zipperAgentConstants::OPTION_LAYOUT_TYPE_RESPONSIVE; ?>" <?php if($responsive) { ?>selected<?php } ?>>Responsive</option>
								<option value="<?php echo zipperAgentConstants::OPTION_LAYOUT_TYPE_LEGACY; ?>" <?php if(!$responsive) { ?>selected<?php } ?>>Fixed-width</option>
							</select>
						</td>
					</tr>
				<?php } else { ?>
					<input type="hidden" name="<?php echo zipperAgentConstants::OPTION_LAYOUT_TYPE; ?>" value="<?php echo get_option(zipperAgentConstants::OPTION_LAYOUT_TYPE, null); ?>" />
				<?php } ?>
				<?php if(zipperAgentDisplayRules::getInstance()->supportsColorScheme()) { ?>
					<tr>
						<th>
							<label for="<?php echo zipperAgentConstants::COLOR_SCHEME_OPTION; ?>">Button Color</label>
						</th>
						<td>
							<?php $colorScheme = get_option(zipperAgentConstants::COLOR_SCHEME_OPTION, null) ?>
							<select id="<?php echo zipperAgentConstants::COLOR_SCHEME_OPTION; ?>" name="<?php echo zipperAgentConstants::COLOR_SCHEME_OPTION; ?>">
								<option value="gray" <?php if($colorScheme == "gray") { ?>selected<?php } ?>>Gray</option>
								<option value="red" <?php if($colorScheme == "red") { ?>selected<?php } ?>>Red</option>
								<option value="green" <?php if($colorScheme == "green") { ?>selected<?php } ?>>Green</option>
								<option value="orange" <?php if($colorScheme == "orange") { ?>selected<?php } ?>>Orange</option>
								<option value="blue" <?php if($colorScheme == "blue") { ?>selected<?php } ?>>Blue</option>
								<option value="light_blue" <?php if($colorScheme == "light_blue") { ?>selected<?php } ?>>Light Blue</option>
								<option value="blue_gradient" <?php if($colorScheme == "blue_gradient") { ?>selected<?php } ?>>Blue Gradient</option>
							</select>
						</td>
					</tr>
				<?php } ?>
				<tr>
					<th>
						<label for="<?php echo zipperAgentConstants::CSS_OVERRIDE_OPTION; ?>">CSS Override</label>
					</th>
					<td>
						<p>To redefine an ZipperAgent style, paste the edited CSS inside the style tags in the field below.</p>
						<textarea id="<?php echo zipperAgentConstants::CSS_OVERRIDE_OPTION; ?>" name="<?php echo zipperAgentConstants::CSS_OVERRIDE_OPTION; ?>" style="width: 100%; height: 300px; "><?php echo $cssOverride; ?></textarea>
					</td>
				</tr>
			*/ ?>
			
				<tr>
					<th>
						<label for="town-list">Enable custom town</label>
					</th>
					<td>
						<?php
						if( $enable_custom_town ){
							$checked = 'checked';
						}else{
							$checked = '';
						}
						echo '<input type="checkbox" name="enable_custom_town" value="1" '. $checked .' />'. " Enable?";
							
						?>
					</td>
				</tr>
				
				<tr>
					<th>
						<label for="town-list">Town List</label>
					</th>
					<td>
						<p>Select towns to list on omnibar. <a id="check-town" href="#">Check All</a> | <a id="uncheck-town" href="#">Uncheck All</a></p>
						
						<div class="box-wrap">
							<?php
							if( sizeof($towns) ){
								foreach( $towns as $town ){
									if( is_array($town_values) && in_array( $town['code'], $town_values ) ){
										$checked = 'checked';
									}else{
										$checked = '';
									}
									echo '<div class="box"><input class="town-list" type="checkbox" name="town_list[]" value="'. $town['code'] .'" '. $checked .' />'. " " . $town['name']. "</div>";
								}
							}
							?>
						</div>
					</td>
				</tr>
				
				<tr>
					<th>
						<label for="town-list">Enable custom county</label>
					</th>
					<td>
						<?php
						if( $enable_custom_county ){
							$checked = 'checked';
						}else{
							$checked = '';
						}
						echo '<input type="checkbox" name="enable_custom_county" value="1" '. $checked .' />'. " Enable?";
							
						?>
					</td>
				</tr>
				
				<tr>
					<th>
						<label for="town-list">County List</label>
					</th>
					<td>
						<p>Select counties to list on omnibar. <a id="check-county" href="#">Check All</a> | <a id="uncheck-county" href="#">Uncheck All</a></p>
						
						<div class="box-wrap">
							<?php
							if( sizeof($counties) ){
								foreach( $counties as $county ){
									if( is_array($county_values) && in_array( $county['code'], $county_values ) ){
										$checked = 'checked';
									}else{
										$checked = '';
									}
									echo '<div class="box"><input class="county-list" type="checkbox" name="county_list[]" value="'. $county['code'] .'" '. $checked .' />'. " " . $county['name']. "</div>";
								}
							}
							?>
						</div>
					</td>
				</tr>
			</table> 
			
			<p class="submit">
				<button type="submit" class="button-primary">Save Changes</button> <a href="admin.php?page=za-config-page&clear_cache=1" class="button-primary">Clear Cache</a>
			</p>
		</form>
		<script>
			jQuery(document).ready(function(){
				
				jQuery( '#check-town' ).on( 'click', function(){
					jQuery( 'input.town-list').each(function(){
						jQuery(this).prop( "checked", true );
					});
					
					return false;
				});
				jQuery( '#uncheck-town' ).on( 'click', function(){
					jQuery( 'input.town-list').each(function(){
						jQuery(this).prop( "checked", false );
					});
					
					return false;
				});
				
				jQuery( '#check-county' ).on( 'click', function(){
					jQuery( 'input.county-list').each(function(){
						jQuery(this).prop( "checked", true );
					});
					
					return false;
				});
				jQuery( '#uncheck-county' ).on( 'click', function(){
					jQuery( 'input.county-list').each(function(){
						jQuery(this).prop( "checked", false );
					});
					
					return false;
				});
				
			});
		</script>
		<?php
	}
	
}