<?php

class zipperAgentDisplayRules {
	
	const PERMISSIONS = "za_permissions";
	private $permissions = null;
	private static $instance;
	
	private function __construct() {
		$this->permissions = get_option(self::PERMISSIONS, null);
	}
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function setPermissions($permissions) {
		$this->permissions = $permissions;
		update_option(self::PERMISSIONS, $permissions);
	}
	
	public function getLayoutType() {
		$result = get_option(zipperAgentConstants::OPTION_LAYOUT_TYPE, null);
		return $result;
	}
	
	public function getColorScheme() {
		$result = get_option(zipperAgentConstants::COLOR_SCHEME_OPTION, null);
		return $result;
	}
	
	public function isResponsive() {
		//$result = false;
		$result = true; //always responsive, to fix facebook meta does not works. Modidfied by decz
		if($this->getLayoutType() === zipperAgentConstants::OPTION_LAYOUT_TYPE_RESPONSIVE) {
			$result = true;
		}
		return $result;
	}
	
	public function supportsMultipleQuickSearchLayouts() {
		return $this->isResponsive();
	}
	
	public function supportsQuickSearchPropertyType() {
		return $this->isResponsive();
	}
	
	public function supportsFeaturedPropertyType() {
		return $this->isResponsive();
	}
	
	public function supportsMapSearchCenterLatLong() {
		return !$this->isResponsive();
	}
	
	public function supportsMapSearchCenterAddress() {
		return $this->isResponsive();
	}
	
	public function supportsMapSearchResponsiveness() {
		return $this->isResponsive();
	}
	
	public function supportsColorScheme() {
		return $this->isResponsive();
	}
	
	public function supportsGallerySlider() {
		$result = true;
		return $result;
	}
	
	public function supportsGallerySliderResponsiveness() {
		return $this->isResponsive();
	}
	
	public function supportsResultsDisplayType() {
		return $this->isResponsive();
	}
	
	public function supportsResultsResultsPerPage() {
		return $this->isResponsive();
	}
	
	public function supportsMaxResults() {
		return $this->isResponsive();
	}
	
	/**
	 * Legacy widgets were surrounded by <br> tags.
	 * We want to remove these for the new responsive
	 * version for layout reasons.
	 * @return boolean
	 */
	public function hasExtraLineBreaksInWidget() {
		return !$this->isResponsive();
	}
	
	public function hasItemInSearchFormData() {
		return $this->isResponsive();
	}
	
	/**
	 * New responsive map search can take all of the space (width=100%
	 * or if user passes width (for short code) can use that width)
	 * For traditional map search width=595 is passed to map search virtual page
	 */
	public function supportsMapSearchWithMultipleWidths() {
		return $this->isResponsive();
	}
	
	/**
	 * The QuickSearch short code is handled differently for responsive
	 * 
	 * The legacy version uses the QuickSearchVirtualPage
	 */
	public function supportsQuickSearchVirtualPage() {
		return !$this->isResponsive();
	}
	
	public function supportsSeoVariables() {
		return $this->isResponsive();
	}
	
	public function isMoreInfoEnabled() {
		return $this->isResponsive() && $this->isContactFormEnabled();
	}
	
	public function isSearchByAddressEnabled() {
		return $this->isResponsive();
	}
	
	public function isSearchByListingIdEnabled() {
		return $this->isResponsive();
	}
	
	public function isContactFormWidgetEnabled() {
		return $this->isResponsive() && $this->isContactFormEnabled();
	}
	public function isLoginWidgetSmallEnabled() {
		return $this->isResponsive() && $this->isOrganizerEnabled();
	}
	
	public function isHotsheetListWidgetEnabled() {
		return $this->isResponsive() && $this->isHotSheetEnabled();
	}
	
	public function isOmnipressSite() {
		$result = false;
		$clientId = get_option("clientId", null);
		if(!empty($clientId)) {
			$result = true;
		}
		return $result;
	}
	
	public function isPropertiesGalleryEnabled() {
		$result = true;
		return $result;
	}
	
	public function isQuickSearchEnabled() {
		$result = true;
		return $result;
	}
		
	public function isSocialEnabled() {
		// $result = true;
		
		/* modified by decz */
		$result = false;
		return $result;
	}
	
	public function isAgentBioWidgetEnabled() {
		// $result = true;
		
		/* modified by decz */
		$result = false;
		return $result;
	}
	
	public function isFeaturedPropertiesEnabled() {
		/* modified by decz */
		return $this->getPermission("featuredProperties", false);
	}
	
	public function isOrganizerEnabled() {
		return $this->getPermission("organizer", true);
	}
	
	public function isEmailUpdatesEnabled() {
		return $this->getPermission("emailUpdates", false);
	}
	
	public function isSaveListingEnabled() {
		return $this->getPermission("saveListing", false);;
	}
	
	public function isSaveSearchEnabled() {
		return $this->getPermission("saveSearch", false);
	}
	
	public function isHotSheetEnabled() {
		return $this->getPermission("hotSheet", false);
	}
	
	public function isHotSheetListingReportEnabled() {
		return $this->getPermission("hotSheetListingReport", false);
	}
	
	public function isHotSheetOpenHomeReportEnabled() {
		return $this->getPermission("hotSheetOpenHomeReport", false);
	}
	
	public function isHotSheetMarketReportEnabled() {
		return $this->getPermission("hotSheetMarketReport", false);
	}
	
	public function isOfficeEnabled() {
		return $this->getPermission("office", false);
	}
	
	public function isAgentBioEnabled() {
		return $this->getPermission("agentBio", false);
	}
	
	public function isSoldPendingEnabled() {
		return $this->getPermission("soldPending", false);
	}
	
	public function isValuationEnabled() {
		return $this->getPermission("valuation", false);
	}
	
	public function isContactFormEnabled() {
		return $this->getPermission("contactForm", false);
	}
	
	public function isSupplementalListingsEnabled() {
		return $this->getPermission("supplementalListings", false);
	}
	
	public function isCommunityPagesEnabled() {
		return $this->getPermission("communityPages", false);
	}
	
	public function isSeoCityLinksEnabled() {
		return $this->getPermission("seoCityLinks", false);
	}
	
	public function isMapSearchEnabled() {
		// return $this->getPermission("mapSearch", false);
	
		/* modified by decz */
		return $this->getPermission("mapSearch", true);		
	}
	
	public function isBasicSearchEnabled() {
		// return $this->getPermission("basicSearch", false);
		
		/* modified by decz */
		return $this->getPermission("basicSearch", true);
	}
	
	public function isAdvancedSearchEnabled() {
		return $this->getPermission("advancedSearch", true);
	}
	
	public function isOpenHomeSearchEnabled() {
		// return $this->getPermission("openHomeSearch", false);
		
		/* modified by decz */
		return $this->getPermission("openHomeSearch", true);
	}
	
	public function isListingResultsEnabled() {
		return $this->getPermission("listingResults", false);
	}
	
	public function isListingDetailEnabled() {
		// return $this->getPermission("listingDetails", false);
		
		/* modified by decz */
		return $this->getPermission("listingDetails", true);
	}
	
	/* added by decz */
	public function isLuxuryListingDetailEnabled() {
		return $this->getPermission("luxuryListingDetails", true);
	}
	/* end */
	
	public function isPendingAccount() {
		return $this->getPermission("pendingAccount", false);
	}
	
	public function isActiveTrialAccount() {
		return $this->getPermission("activeTrialAccount", false);
	}
	
	public function isLinkSearchEnabled() {
		return $this->isHotSheetEnabled();
	}
	
	public function isNamedSearchEnabled() {
		return $this->isHotSheetEnabled();
	}
	
	public function isGalleryShortCodesEnabled() {
		return $this->isHotSheetEnabled();
	}
	
	public function isSoldListingsInWidgets() {
		return $this->isResponsive() && $this->getPermission("soldListingsInWidgets", false);
	}
	
	public function isHotSheetReportEnabled() {
		return $this->isResponsive() && ($this->isHotSheetListingReportEnabled() || $this->isHotSheetOpenHomeReportEnabled() || $this->isHotSheetMarketReportEnabled());
	}
	
	public function isEmailSignupWidgetEnabled() {
		return ($this->isResponsive() && $this->isEmailUpdatesEnabled()) || $this->isHotSheetReportEnabled();
	}
	
	public function isEmailSignupShortcodeEnabled() {
		return $this->isHotSheetReportEnabled();
	}
	
	public function isSitemapEnabled() {
		return $this->isResponsive();
	}
	
	private function getPermission($property, $default = null) {
		$result = $default;
		if(is_object($this->permissions) && property_exists($this->permissions, $property)) {
			$result = $this->permissions->{"$property"};
			if($result === "true") {
				$result = true;
			} elseif($result === "false") {
				$result = false;
			}
		}
		
		return $result;
	}
	
}
