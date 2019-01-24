<?php
global $requests;

?><div id="zpa-main-container" class="zpa-container " style="display: inline;">
    <div class="zpa-widget mb-25">
        <form id="searchProfile" class="form-inline zpa-quick-search-form" action="<?php echo zipperagent_page_url( 'search-results' ) ?>" method="GET">
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
        </form>
    </div>
	
	<?php if(empty($requests['location_option'])): ?>
		<?php global_magicsuggest_script(); ?>
	<?php else: ?>
		<?php global_magicsuggest_script('',$requests); ?>
	<?php endif; ?>
</div>