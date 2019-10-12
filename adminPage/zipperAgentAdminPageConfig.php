<?php

class zipperAgentAdminPageConfig extends zipperAgentAdminAbstractPage {
	
	private static $instance;
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function registerSettings() {
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_DEFAULT);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_DETAIL);
		
		/* added by decz */
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_LUXURY_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_LUXURY_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_LUXURY_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_LUXURY_DETAIL);
		/* end */
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SEARCH);
		
		/* modified by decz */
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SEARCH_RESULTS);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH_RESULTS);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH_RESULTS);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SEARCH_RESULTS);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_MAP_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_MAP_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_MAP_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_MAP_SEARCH);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ADVANCED_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ADVANCED_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ADVANCED_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ADVANCED_SEARCH);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_LOGIN);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGIN);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGIN);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_LOGIN);
		
		/* modified by decz */
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_LOGOUT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGOUT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGOUT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_LOGOUT);
		
		/* modified by decz */
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_EDIT_SUBSCRIBER);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_EDIT_SUBSCRIBER);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_EDIT_SUBSCRIBER);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_EDIT_SUBSCRIBER);
		
		/* modified by decz */
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_VIEW_SAVED_SEARCH_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_VIEW_SAVED_SEARCH_LIST);
		
		/* modified by decz */
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_VIEW_SAVED_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_VIEW_SAVED_SEARCH);
		
		/* modified by decz */
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_SAVED_LISTINGS);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_SAVED_LISTINGS);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_SAVED_LISTINGS);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_SAVED_LISTINGS);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_EMAIL_UPDATES);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_EMAIL_UPDATES);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_EMAIL_UPDATES);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_EMAIL_UPDATES);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_FEATURED);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_FEATURED);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_FEATURED);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_FEATURED);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_LISTING_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_LISTING_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_LISTING_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_LISTING_REPORT);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_OPEN_HOME_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_OPEN_HOME_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_OPEN_HOME_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_OPEN_HOME_REPORT);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_MARKET_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_MARKET_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_MARKET_REPORT);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_MARKET_REPORT);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_LIST);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_CONTACT_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_CONTACT_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_CONTACT_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_CONTACT_FORM);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_VALUATION_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_VALUATION_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_VALUATION_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_VALUATION_FORM);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_OPEN_HOME_SEARCH_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_OPEN_HOME_SEARCH_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OPEN_HOME_SEARCH_FORM);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_OPEN_HOME_SEARCH_FORM);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SUPPLEMENTAL_LISTING);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SUPPLEMENTAL_LISTING);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SUPPLEMENTAL_LISTING);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SUPPLEMENTAL_LISTING);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SOLD_FEATURED);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SOLD_FEATURED);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SOLD_FEATURED);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SOLD_FEATURED);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SOLD_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SOLD_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SOLD_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SOLD_DETAIL);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_OFFICE_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_OFFICE_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OFFICE_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_OFFICE_LIST);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_OFFICE_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_OFFICE_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OFFICE_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_OFFICE_DETAIL);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_AGENT_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_AGENT_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_AGENT_LIST);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_AGENT_LIST);
		
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_AGENT_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_AGENT_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_AGENT_DETAIL);
		register_setting(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG, zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_AGENT_DETAIL);
	}
	
	private function showDuplicateUrlMessage() {
		$urlFactory = zipperAgentUrlFactory::getInstance();
		$urls = array(
			$urlFactory->getListingsSearchResultsUrl(),
			$urlFactory->getListingsSearchFormUrl(),
			$urlFactory->getMapSearchFormUrl(),
			$urlFactory->getListingsAdvancedSearchFormUrl(),
			$urlFactory->getListingDetailUrl(),
			// $urlFactory->getListingSoldDetailUrl(), //disabled by decz
			// $urlFactory->getFeaturedSearchResultsUrl(), //disabled by decz
			// $urlFactory->getHotSheetListingReportUrl(), //disabled by decz
			// $urlFactory->getHotSheetOpenHomeReportUrl(), //disabled by decz
			// $urlFactory->getHotSheetMarketReportUrl(), //disabled by decz
			//$urlFactory->getHotsheetListUrl(), //this is an intentional duplicate
			$urlFactory->getOrganizerLoginUrl(),
			$urlFactory->getOrganizerLogoutUrl(),
			//$urlFactory->getOrganizerLoginSubmitUrl(), //this is an intentional duplicate of getOrganizerLoginUrl
			$urlFactory->getOrganizerEditSavedSearchUrl(),
			$urlFactory->getOrganizerEditSavedSearchSubmitUrl(),
			$urlFactory->getOrganizerDeleteSavedSearchSubmitUrl(),
			$urlFactory->getOrganizerViewSavedSearchUrl(),
			$urlFactory->getOrganizerViewSavedSearchListUrl(),
			// $urlFactory->getOrganizerResendConfirmationEmailUrl(), //disabled by decz
			// $urlFactory->getOrganizerActivateSubscriberUrl(), //disabled by decz
			// $urlFactory->getOrganizerSendSubscriberPasswordUrl(), //disabled by decz
			$urlFactory->getOrganizerViewSavedListingListUrl(),
			$urlFactory->getOrganizerDeleteSavedListingUrl(),
			// $urlFactory->getOrganizerEmailUpdatesConfirmationUrl(), //disabled by decz
			// $urlFactory->getOrganizerHelpUrl(), //disabled by decz
			$urlFactory->getOrganizerEditSubscriberUrl(),
			// $urlFactory->getContactFormUrl(), //disabled by decz
			// $urlFactory->getValuationFormUrl(), //disabled by decz
			// $urlFactory->getOpenHomeSearchFormUrl(), //disabled by decz
			// $urlFactory->getSoldFeaturedListingUrl(), //disabled by decz
			// $urlFactory->getSupplementalListingUrl(), //disabled by decz
			// $urlFactory->getOfficeListUrl(), //disabled by decz
			// $urlFactory->getOfficeDetailUrl(), //disabled by decz
			// $urlFactory->getAgentListUrl(), //disabled by decz
			// $urlFactory->getAgentDetailUrl(), //disabled by decz
		);
		$duplicateUrls = array_unique(array_diff_assoc($urls, array_unique($urls)));
		if(!empty($duplicateUrls)) {
			?>
			<div class="updated">
				<?php foreach($duplicateUrls as $duplicateUrl) { ?>
					<p>
						<?php echo $duplicateUrl; ?> is a duplicate URL. Please change permalink.
					</p>
				<?php } ?>
			</div>
			<?php
		}
	}
	
	protected function getContent() {
		wp_enqueue_script("postbox");
		$displayRules = zipperAgentDisplayRules::getInstance();
		?>
		<h2>IDX Pages</h2>
		<?php $this->showDuplicateUrlMessage(); ?>
		<form method="post" action="options.php">
			<p class="submit">
				<button type="submit" class="button-primary">Save Changes</button>
				<button class="button" type="button" data-za-postbox-toggle="closed">Expand All</button>
			</p>
			<p>Edit page attributes for the IDX pages listed below. Type "{" in the Title or Meta Tags field for a list of available options.</p>
			<div id="poststuff">
				<div id="postbox-container" class="postbox-container">
					<div class="meta-box-sortables ui-sortable">
						<?php settings_fields(zipperAgentConstants::OPTION_VIRTUAL_PAGE_CONFIG); ?>
						<?php
						if($displayRules->isListingDetailEnabled()) {
							$this->getDetailPageSetup();
						}
						
						/* added by decz */
						if($displayRules->isLuxuryListingDetailEnabled()) {
							$this->getLuxuryDetailPageSetup();
						}
						/* end */
						
						if($displayRules->isBasicSearchEnabled()) {
							$this->getBasicSearchPageSetup();
						}
						
						/* modified by decz */
						$this->getSearhResultPageSetup();
						
						if($displayRules->isMapSearchEnabled()) {
							$this->getMapSearchPageSetup();
						}
						if($displayRules->isAdvancedSearchEnabled()) {
							$this->getAdvancedSearchPageSetup();
						}
						if($displayRules->isOrganizerEnabled()) {
							$this->getOrganizerLoginPageSetup();
							
							/* modified by decz */
							$this->getOrganizerLogoutPageSetup();
							/* modified by decz */
							$this->getOrganizerEditSubscriberPageSetup();
							/* modified by decz */
							$this->getOrganizerViewSavedSearchListPageSetup();
							/* modified by decz */
							$this->getOrganizerViewSavedSearchPageSetup();
							/* modified by decz */
							$this->getOrganizerSavedListingsPageSetup();
						}
						if($displayRules->isEmailUpdatesEnabled()) {
							$this->getEmailAlertsPageSetup();
						}
						if($displayRules->isFeaturedPropertiesEnabled()) {
							$this->getFeaturedPageSetup();
						}
						if($displayRules->isHotSheetEnabled()) {
							$this->getHotsheetListPageSetup();
							$this->getHotSheetListingReportPageSetup();
						}
						if($displayRules->isHotSheetOpenHomeReportEnabled()) {
							$this->getHotSheetOpenHomeReportPageSetup();
						}
						if($displayRules->isHotSheetMarketReportEnabled()) {
							$this->getHotSheetMarketReportPageSetup();
						}
						if($displayRules->isContactFormEnabled()) {
							$this->getContactFormPageSetup();
						}
						if($displayRules->isValuationEnabled()) {
							$this->getValuationFormPageSetup();
						}
						if($displayRules->isOpenHomeSearchEnabled()) {
							$this->getOpenHomeSearchFormPageSetup();
						}
						if($displayRules->isSupplementalListingsEnabled()) {
							$this->getSupplementalListingPageSetup();
						}
						if($displayRules->isSoldPendingEnabled()) {
							$this->getSoldFeaturedListingPageSetup();
							$this->getSoldDetailPageSetup();
						}
						if($displayRules->isOfficeEnabled()) {
							$this->getOfficeListPageSetup();
							$this->getOfficeDetailPageSetup();
						}
						if($displayRules->isAgentBioEnabled()) {
							$this->getAgentListPageSetup();
							$this->getAgentDetailPageSetup();
						}
						$this->getDefaultPageSetup();
						?>
					</div>
				</div>
			</div>
			<p>* Template selection is compatible only with select themes.</p>
			<p class="submit">
				<button type="submit" class="button-primary">Save Changes</button>
			</p>
		</form>
		<script type="text/javascript">
			jQuery(document).on("ready", function(){
				postboxes.add_postbox_toggles();
				jQuery(".ui-sortable").sortable("disable");
				jQuery("[data-za-postbox-toggle]").on("click", function() {
					$button = jQuery(this);
					if($button.text() === "Expand All") {
						jQuery(".postbox").removeClass("closed");
						$button.text("Close All");
					} else {
						jQuery(".postbox").addClass("closed");
						$button.text("Expand All");
					}
				});
			});
			jQuery("[data-za-toggle]").on("click", function() {
				var $button = jQuery(this);
				var $preview = $button.parent().find(".za-permalink-preview");
				var $field = $button.parent().find(".za-permalink-field");
				if($button.text() === "Edit") {
					$button.text("OK");
				} else {
					$button.text("Edit");
				}
				$preview.text($field.val());
				$preview.toggle();
				$field.toggle();
			});
			</script>
		<?php
	}
	
	private function getDetailPageSetup() {
		/* $this->getPageSetup(array(
			"sectionTitle" => "Property Details",
			"virtualPageType" => zipperAgentVirtualPageFactory::LISTING_DETAIL,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL,
			"extraPermalinkText" => "{listingAddress}/{listingNumber}/{boardId}/",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_DETAIL,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_DETAIL,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_DETAIL,
		));*/
		
		/* modified by decz */
		$this->getPageSetup(array(
			"sectionTitle" => "Property Details",
			"virtualPageType" => zipperAgentVirtualPageFactory::LISTING_DETAIL,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL,
			"extraPermalinkText" => "",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_DETAIL,
			// "templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_DETAIL,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_DETAIL,
		));
	}
	
	/* added by decz */
	private function getLuxuryDetailPageSetup() {
		
		$this->getPageSetup(array(
			"sectionTitle" => "Luxury Details",
			"virtualPageType" => zipperAgentVirtualPageFactory::LUXURY_DETAIL,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_LUXURY_DETAIL,
			"extraPermalinkText" => "",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_LUXURY_DETAIL,
			// "templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_LUXURY_DETAIL,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_LUXURY_DETAIL,
		));
	}
	/* end */
	
	private function getSoldDetailPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Sold Property Details",
			"virtualPageType" => zipperAgentVirtualPageFactory::LISTING_SOLD_DETAIL, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SOLD_DETAIL, 
			"extraPermalinkText" => "{listingAddress}/{listingNumber}/{boardId}/",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SOLD_DETAIL,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SOLD_DETAIL,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SOLD_DETAIL,
		));
	}

	private function getBasicSearchPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Search Form",
			"virtualPageType" => zipperAgentVirtualPageFactory::LISTING_SEARCH_FORM, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SEARCH, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SEARCH,
		));
	}
	
	private function getSearhResultPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Search Result",
			"virtualPageType" => zipperAgentVirtualPageFactory::LISTING_SEARCH_RESULTS, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH_RESULTS,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SEARCH_RESULTS, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH_RESULTS,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SEARCH_RESULTS,
		));
	}
	
	private function getMapSearchPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Map Search",
			"virtualPageType" => zipperAgentVirtualPageFactory::MAP_SEARCH_FORM, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_MAP_SEARCH,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_MAP_SEARCH, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_MAP_SEARCH,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_MAP_SEARCH,
		));
	}

	private function getAdvancedSearchPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Advanced Search Form",
			"virtualPageType" => zipperAgentVirtualPageFactory::LISTING_ADVANCED_SEARCH_FORM, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ADVANCED_SEARCH, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ADVANCED_SEARCH, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ADVANCED_SEARCH,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ADVANCED_SEARCH,
		));
	}

	private function getOrganizerLoginPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Organizer Login",
			"virtualPageType" => zipperAgentVirtualPageFactory::ORGANIZER_LOGIN,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGIN,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_LOGIN, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGIN,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_LOGIN,
		));
	}
	
	/* modified by decz */
	private function getOrganizerLogoutPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Organizer Logout",
			"virtualPageType" => zipperAgentVirtualPageFactory::ORGANIZER_LOGOUT,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGOUT,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_LOGOUT, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGOUT,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_LOGOUT,
		));
	}
	
	private function getOrganizerEditSubscriberPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Organizer Edit Subscriber",
			"virtualPageType" => zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SUBSCRIBER, 
			"permalinkEditable" => false,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_EDIT_SUBSCRIBER,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_EDIT_SUBSCRIBER, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_EDIT_SUBSCRIBER,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_EDIT_SUBSCRIBER,
		));
	}
	
	private function getOrganizerViewSavedSearchListPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Organizer View Saved Search List",
			"virtualPageType" => zipperAgentVirtualPageFactory::ORGANIZER_VIEW_SAVED_SEARCH_LIST, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH_LIST,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_VIEW_SAVED_SEARCH_LIST, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH_LIST,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_VIEW_SAVED_SEARCH_LIST,
		));
	}
	
	private function getOrganizerViewSavedSearchPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Organizer View Saved Search",
			"virtualPageType" => zipperAgentVirtualPageFactory::ORGANIZER_VIEW_SAVED_SEARCH, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_VIEW_SAVED_SEARCH, 
			// "templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_VIEW_SAVED_SEARCH,
		));
	}
	
	private function getOrganizerSavedListingsPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Organizer Saved Listings",
			"virtualPageType" => zipperAgentVirtualPageFactory::ORGANIZER_VIEW_SAVED_LISTING_LIST, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_SAVED_LISTINGS,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_SAVED_LISTINGS, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_SAVED_LISTINGS,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_SAVED_LISTINGS,
		));
	}

	private function getEmailAlertsPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Email Alerts",
			"virtualPageType" => zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SAVED_SEARCH, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_EMAIL_UPDATES,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_EMAIL_UPDATES, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_EMAIL_UPDATES,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_EMAIL_UPDATES,
		));
	}

	private function getFeaturedPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Featured Properties",
			"virtualPageType" => zipperAgentVirtualPageFactory::FEATURED_SEARCH, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_FEATURED, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_FEATURED, 
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_FEATURED,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_FEATURED,
		));
	}
	
	private function getHotsheetListPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Listing Report Index",
			"virtualPageType" => zipperAgentVirtualPageFactory::HOT_SHEET_LIST,
			"permalinkEditable" => false,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_LISTING_REPORT,
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_LIST,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_LIST,
		));
	}

	private function getHotSheetListingReportPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Listing Report <small>(Saved Search)</small>",
			"virtualPageType" => zipperAgentVirtualPageFactory::HOT_SHEET_LISTING_REPORT,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_LISTING_REPORT,
			"extraPermalinkText" => "{savedSearchName}/{savedSearchId}/",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_LISTING_REPORT,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_LISTING_REPORT,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_LISTING_REPORT,
		));
	}

	private function getHotSheetOpenHomeReportPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Open Home Report",
			"virtualPageType" => zipperAgentVirtualPageFactory::HOT_SHEET_OPEN_HOME_REPORT,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_OPEN_HOME_REPORT,
			"extraPermalinkText" => "{savedSearchName}/{savedSearchId}/",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_OPEN_HOME_REPORT,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_OPEN_HOME_REPORT,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_OPEN_HOME_REPORT,
		));
	}

	private function getHotSheetMarketReportPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Market Report",
			"virtualPageType" => zipperAgentVirtualPageFactory::HOT_SHEET_MARKET_REPORT,
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_MARKET_REPORT,
			"extraPermalinkText" => "{savedSearchName}/{savedSearchId}/",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_MARKET_REPORT,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_MARKET_REPORT,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_MARKET_REPORT,
		));
	}

	private function getContactFormPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Contact Form",
			"virtualPageType" => zipperAgentVirtualPageFactory::CONTACT_FORM, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_CONTACT_FORM, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_CONTACT_FORM,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_CONTACT_FORM,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_CONTACT_FORM,
		));
	}
	
	private function getValuationFormPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Valuation Request",
			"virtualPageType" => zipperAgentVirtualPageFactory::VALUATION_FORM, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_VALUATION_FORM, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_VALUATION_FORM,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_VALUATION_FORM,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_VALUATION_FORM,
		));
	}
	
	private function getSupplementalListingPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Supplemental Listing",
			"virtualPageType" => zipperAgentVirtualPageFactory::SUPPLEMENTAL_LISTING, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SUPPLEMENTAL_LISTING, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SUPPLEMENTAL_LISTING,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SUPPLEMENTAL_LISTING,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SUPPLEMENTAL_LISTING,
		));
	}
	
	private function getSoldFeaturedListingPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Sold Featured Listing",
			"virtualPageType" => zipperAgentVirtualPageFactory::SOLD_FEATURED_LISTING, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SOLD_FEATURED, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SOLD_FEATURED,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SOLD_FEATURED,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SOLD_FEATURED,
		));
	}
	
	private function getOpenHomeSearchFormPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Open Home Search",
			"virtualPageType" => zipperAgentVirtualPageFactory::OPEN_HOME_SEARCH_FORM, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OPEN_HOME_SEARCH_FORM, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_OPEN_HOME_SEARCH_FORM,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_OPEN_HOME_SEARCH_FORM,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_OPEN_HOME_SEARCH_FORM,
		));
	}
	
	private function getOfficeListPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Office List",
			"virtualPageType" => zipperAgentVirtualPageFactory::OFFICE_LIST, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OFFICE_LIST, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_OFFICE_LIST,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_OFFICE_LIST,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_OFFICE_LIST,
		));
	}

	private function getOfficeDetailPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Office Detail",
			"virtualPageType" => zipperAgentVirtualPageFactory::OFFICE_DETAIL, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OFFICE_DETAIL, 
			"extraPermalinkText" => "{officeName}/{officeId}/",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_OFFICE_DETAIL,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_OFFICE_DETAIL,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_OFFICE_DETAIL,
		));
	}
			
	private function getAgentListPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Agent List",
			"virtualPageType" => zipperAgentVirtualPageFactory::AGENT_LIST, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_AGENT_LIST, 
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_AGENT_LIST,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_AGENT_LIST,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_AGENT_LIST,
		));
	}

	private function getAgentDetailPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Agent Bio",
			"virtualPageType" => zipperAgentVirtualPageFactory::AGENT_DETAIL, 
			"permalinkOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_AGENT_DETAIL,
			"extraPermalinkText" => "{agentName}/{agentId}/",
			"titleOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_AGENT_DETAIL,
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_AGENT_DETAIL,
			"metaTagsOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_AGENT_DETAIL,
		));
	}
	
	private function getDefaultPageSetup() {
		$this->getPageSetup(array(
			"sectionTitle" => "Other IDX Pages",
			"templateOption" => zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_DEFAULT,
			"virtualPageType" => zipperAgentVirtualPageFactory::DEFAULT_PAGE,
		));
	}
	
	/**
	 * 
	 * Used to setup form elements to allow customization of zipperAgent page title, urls and 
	 * display templates. zipperAgent pages are not true pages in the WordPress database, so we 
	 * need to remember the title, permalink and template as options.
	 * 
	 * @param array $settings
	 */
	private function getPageSetup($settings) {
		
		$sectionTitle = $this->getSetting($settings, "sectionTitle");
		
		$virtualPageType = $this->getSetting($settings, "virtualPageType");
		$virtualPage = zipperAgentVirtualPageFactory::getInstance()->getVirtualPage($virtualPageType);
		
		$permalinkOption = $this->getSetting($settings, "permalinkOption");
		$permalinkEditable = $this->getSetting($settings, "permalinkEditable", true);
		$extraPermalinkText = $this->getSetting($settings, "extraPermalinkText");
		
		$titleOption = $this->getSetting($settings, "titleOption");
		$extraTitleText = $this->getSetting($settings, "extraTitleText");
		
		$templateOption = $this->getSetting($settings, "templateOption");
		
		$metaTagsOption = $this->getSetting($settings, "metaTagsOption");
		
		if($virtualPage !== null) {
			?>
			<div class="postbox closed">
				<button type="button" class="handlediv button-link" aria-expanded="true">
					<span class="toggle-indicator" aria-hidden="true"></span>
				</button>
				<h3 class="hndle">
					<?php echo $sectionTitle ?>
				</h3>
				<div class="inside">
					<table class="form-table condensed">
						<?php if($permalinkOption !== null) { ?>
							<tr>
								<th>
									<label for="<?php echo $permalinkOption; ?>">Permalink</label>
								</th>
								<td>
									<?php if($permalinkEditable) { ?>
										<span><?php echo zipperAgentUrlFactory::getInstance()->getBaseUrl(); ?>/<span class="za-permalink-preview"><?php echo $virtualPage->getPermalink(); ?></span><input id="<?php echo $permalinkOption; ?>" class="za-permalink-field" type="text" name="<?php echo $permalinkOption; ?>" value="<?php echo $virtualPage->getPermalink(); ?>" />/<?php echo $extraPermalinkText; ?></span>
										<button class="button button-small" style="vertical-align: middle;" type="button" data-za-toggle>Edit</button>
									<?php } else { ?>
										<span><?php echo zipperAgentUrlFactory::getInstance()->getBaseUrl(); ?>/<?php echo $virtualPage->getPermalink(); ?>/<?php echo $extraPermalinkText; ?></span>
									<?php } ?>
								</td>
							</tr>
						<?php } ?>
						<?php if($titleOption !== null) { ?>
							<tr>
								<th>
									<label for="<?php echo $titleOption; ?>">Title</label>
								</th>
								<td>
									<input id="<?php echo $titleOption; ?>" class="regular-text" type="text" name="<?php echo $titleOption; ?>" value="<?php echo $virtualPage->getTitle(); ?>" autocomplete="off" />
									<?php $this->getAutoComplete($virtualPage, $titleOption); ?>
									<?php if($extraTitleText != null) { ?>
										<span class="description">
											<?php echo $extraTitleText; ?>
										</span>
									<?php } ?>
								</td>
							</tr>
						<?php } ?>
						<?php if($templateOption !== null) { ?>
							<tr>
								<th>
									<label for="<?php echo $templateOption; ?>">Page Template*</label>
								</th>
								<td>
									<?php
									 $args = array(
										'depth'                 => 0,
										'child_of'              => 0,
										'selected'              => $virtualPage->getPageTemplate(),
										'echo'                  => 1,
										'name'                  => $templateOption,
										'id'                    => $templateOption, // string
										'class'                 => null, // string
										'show_option_none'      => "Default Page", // string
										'show_option_no_change' => null, // string
										'option_none_value'     => null, // string
									);
									wp_dropdown_pages($args);
									/*
									?>
									<select id="<?php echo $templateOption; ?>" name="<?php echo $templateOption; ?>">
										<option value="">Default Template</option>
										<?php // page_template_dropdown($virtualPage->getPageTemplate()); ?>
									</select> */ ?>
								</td>
							</tr>
						<?php } ?>
						<?php if($metaTagsOption !== null && zipperAgentDisplayRules::getInstance()->supportsSeoVariables()) { ?>
							<tr>
								<th>
									<label for="<?php echo $metaTagsOption; ?>">Meta Tags</label>
								</th>
								<td>
									<textarea id="<?php echo $metaTagsOption; ?>" style="width: 100%; height: 105px;" name="<?php echo $metaTagsOption; ?>"><?php echo $virtualPage->getMetaTags(); ?></textarea>
									<?php $this->getAutoComplete($virtualPage, $metaTagsOption); ?>
								</td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<?php
		}
	}
	
	private function getAutoComplete($virtualPage, $fieldId) {
		$variables = $virtualPage->getAvailableVariables();
		if(!empty($variables) && zipperAgentDisplayRules::getInstance()->supportsSeoVariables()) {
			$data = zipperAgentVariableUtility::getInstance()->getAffixedArray($variables);
			?>
			<script type="text/javascript">
				jQuery(document).on("ready", function() {
					zaVariablesAutocomplete(
						"<?php echo $fieldId; ?>",
						<?php echo json_encode($data); ?>,
						"<?php echo zipperAgentVariable::PREFIX; ?>",
						"<?php echo zipperAgentVariable::SUFFIX; ?>"
					);
				});
			</script>
			<?php
		}
	}
	
	private function getSetting($settings, $name, $defaultValue = null) {
		$result = $defaultValue;
		if(is_array($settings) && array_key_exists($name, $settings)) {
			$result = $settings[$name];
		}
		return $result;
	}
	
}