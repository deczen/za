<?php
global $requests;

?><div id="zpa-main-container" class="zpa-container " style="display: inline;">
    <div class="zpa-widget mb-25">
        <form id="searchProfile" class="form-inline zpa-quick-search-form omnibar" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET">
            <fieldset>
                <div class="row">
					<div class="omnibar-content">
						<div id="zpa-search-location">
							<div class="row">
								<div class="search-bar col-xs-12">
									<div class="input-area">
										<input id="zpa-area-input" class="zpa-area-input form-control" placeholder="<?php echo (empty($requests['location_option'])) ? "Enter City / County / Zip" : "Select Location"; ?>"  name="location[]"/>
										<input class="zpa-area-input-hidden" name="" type="hidden">
									</div>
									<button id="zpa-quicksearch-submit5" class="" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
								</div>
							</div>
						</div>						
					</div>
                </div>
            </fieldset>
			
			<?php 
			$default_order = isset($requests['o']) ? $requests['o'] : za_get_default_order();
			if($default_order): ?>
			<input type="hidden" name="o" value="<?php echo $default_order; ?>" />
			<?php endif; ?>
			
			<?php if($requests['column']): ?>
			<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
			<?php endif; ?>
			
			<?php if($requests['newsearchbar']): ?>
			<input type="hidden" name="newsearchbar" value="<?php echo $requests['newsearchbar']; ?>" />
			<?php endif; ?>
			
			<?php if($requests['direct']): ?>
			<input type="hidden" name="direct" value="<?php echo $requests['direct']; ?>" />
			<?php endif; ?>
        </form>
    </div>
	
	<?php if(empty($requests['location_option'])): ?>
		<?php global_magicsuggest_script(); ?>
	<?php else: ?>
		<?php global_magicsuggest_script('',$requests); ?>
	<?php endif; ?>
</div>