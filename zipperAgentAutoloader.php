<?php

/**
 * autoloads zipperAgent classes
 */
class zipperAgentAutoloader {
	
	private static $instance;
	
	/*
	 * we store an array indexed by class name of class paths instead of using a PSR-4 autoloader
	 * because we want to support versions of PHP that don't support namespacing
	 */
	private $classes = array(
		//custom class
		"Zipperagent_Shortcodes" => "custom/shortcode.php",
		"ZipperagentGlobalFunction" => "custom/functions-global.php",
		//core files
		"zipperAgentAdmin" => "zipperAgentAdmin.php",
		// "zipperAgentAjaxHandler" => "zipperAgentAjaxHandler.php",
		"zipperAgentConstants" => "zipperAgentConstants.php",
		"zipperAgentInstaller" => "zipperAgentInstaller.php",
		// "zipperAgentListingInfo" => "zipperAgentListingInfo.php",
		// "zipperAgentLogger" => "zipperAgentLogger.php",
		// "zipperAgentMenu" => "zipperAgentMenu.php",
		"zipperAgentEnqueueResource" => "zipperAgentEnqueueResource.php",
		"zipperAgentRequestor" => "zipperAgentRequestor.php",
		"zipperAgentRemoteResponse" => "zipperAgentRemoteResponse.php",
		"zipperAgentRewriteRules" => "zipperAgentRewriteRules.php",
		// "zipperAgentSearchLinkInfo" => "zipperAgentSearchLinkInfo.php",
		// "zipperAgentFormData" => "zipperAgentFormData.php",
		// "zipperAgentShortcodeSelector" => "zipperAgentShortcodeSelector.php",
		// "zipperAgentShortcodeDispatcher" => "zipperAgentShortcodeDispatcher.php",
		// "zipperAgentStateManager" => "zipperAgentStateManager.php",
		"zipperAgentUrlFactory" => "zipperAgentUrlFactory.php",
		"zipperAgentUtility" => "zipperAgentUtility.php",
		"zipperAgentVirtualPageDispatcher" => "zipperAgentVirtualPageDispatcher.php",
		"zipperAgentVirtualPageFactory" => "zipperAgentVirtualPageFactory.php",
		"zipperAgentDisplayRules" => "zipperAgentDisplayRules.php",
		// "zipperAgentCacheUtility" => "zipperAgentCacheUtility.php",
		"zipperAgentVariable" => "zipperAgentVariable.php",
		"zipperAgentVariableUtility" => "zipperAgentVariableUtility.php",
		//widgets
		// "zipperAgentWidget" => "widget/zipperAgentWidget.php",
		// "zipperAgentPropertiesGallery" => "widget/zipperAgentPropertiesGallery.php",
		// "zipperAgentQuickSearchWidget" => "widget/zipperAgentQuickSearchWidget.php",
		// "zipperAgentLinkWidget" => "widget/zipperAgentLinkWidget.php",
		// "zipperAgentSearchByAddressWidget" => "widget/zipperAgentSearchByAddressWidget.php",
		// "zipperAgentSearchByListingIdWidget" => "widget/zipperAgentSearchByListingIdWidget.php",
		// "zipperAgentContactFormWidget" => "widget/zipperAgentContactFormWidget.php",
		// "zipperAgentLoginWidget" => "widget/zipperAgentLoginWidget.php",
		// "zipperAgentMoreInfoWidget" => "widget/zipperAgentMoreInfoWidget.php",
	     // "zipperAgentValuationWidget" => "widget/zipperAgentValuationWidget.php",
		// "zipperAgentAgentBioWidget" => "widget/zipperAgentAgentBioWidget.php",
		// "zipperAgentSocialWidget" => "widget/zipperAgentSocialWidget.php",
		// "zipperAgentHotsheetListWidget" => "widget/zipperAgentHotsheetListWidget.php",
		// "zipperAgentEmailSignupFormWidget" => "widget/zipperAgentEmailSignupFormWidget.php",
		//virtual pages
		"zipperAgentVirtualPageInterface" => "virtualPage/zipperAgentVirtualPageInterface.php",
		"zipperAgentAbstractVirtualPage" => "virtualPage/zipperAgentAbstractVirtualPage.php",
		"zipperAgentDefaultVirtualPageImpl" => "virtualPage/zipperAgentDefaultVirtualPageImpl.php",
		// "zipperAgentFeaturedSearchVirtualPageImpl" => "virtualPage/zipperAgentFeaturedSearchVirtualPageImpl.php",
		// "zipperAgentHotSheetListingReportVirtualPageImpl" => "virtualPage/zipperAgentHotSheetListingReportVirtualPageImpl.php",
		// "zipperAgentHotsheetOpenHomeReportVirtualPageImpl" => "virtualPage/zipperAgentHotsheetOpenHomeReportVirtualPageImpl.php",
		// "zipperAgentHotsheetMarketReportVirtualPageImpl" => "virtualPage/zipperAgentHotsheetMarketReportVirtualPageImpl.php",
		// "zipperAgentHotsheetListVirtualPageImpl" => "virtualPage/zipperAgentHotsheetListVirtualPageImpl.php",
		"zipperAgentAdvancedSearchFormVirtualPageImpl" => "virtualPage/zipperAgentAdvancedSearchFormVirtualPageImpl.php",
		"zipperAgentSearchFormVirtualPageImpl" => "virtualPage/zipperAgentSearchFormVirtualPageImpl.php",
		"zipperAgentMapSearchVirtualPageImpl" => "virtualPage/zipperAgentMapSearchVirtualPageImpl.php",
		"zipperAgentSearchResultsVirtualPageImpl" => "virtualPage/zipperAgentSearchResultsVirtualPageImpl.php",
		"zipperAgentListingDetailVirtualPageImpl" => "virtualPage/zipperAgentListingDetailVirtualPageImpl.php",
		// "zipperAgentListingSoldDetailVirtualPageImpl" => "virtualPage/zipperAgentListingSoldDetailVirtualPageImpl.php",
		"zipperAgentOrganizerLoginFormVirtualPageImpl" => "virtualPage/zipperAgentOrganizerLoginFormVirtualPageImpl.php",
		"zipperAgentOrganizerLogoutVirtualPageImpl" => "virtualPage/zipperAgentOrganizerLogoutVirtualPageImpl.php",
		"zipperAgentOrganizerEditSavedSearchVirtualPageImpl" => "virtualPage/zipperAgentOrganizerEditSavedSearchVirtualPageImpl.php",
		"zipperAgentOrganizerEditSavedSearchFormVirtualPageImpl" => "virtualPage/zipperAgentOrganizerEditSavedSearchFormVirtualPageImpl.php",
		// "zipperAgentOrganizerEmailUpdatesConfirmationVirtualPageImpl" => "virtualPage/zipperAgentOrganizerEmailUpdatesConfirmationVirtualPageImpl.php",
		"zipperAgentOrganizerDeleteSavedSearchVirtualPageImpl" => "virtualPage/zipperAgentOrganizerDeleteSavedSearchVirtualPageImpl.php",
		"zipperAgentOrganizerViewSavedSearchVirtualPageImpl" => "virtualPage/zipperAgentOrganizerViewSavedSearchVirtualPageImpl.php",
		"zipperAgentOrganizerViewSavedSearchListVirtualPageImpl" => "virtualPage/zipperAgentOrganizerViewSavedSearchListVirtualPageImpl.php",
		"zipperAgentOrganizerViewSavedListingListVirtualPageImpl" => "virtualPage/zipperAgentOrganizerViewSavedListingListVirtualPageImpl.php",
		"zipperAgentOrganizerDeleteSavedListingVirtualPageImpl" => "virtualPage/zipperAgentOrganizerDeleteSavedListingVirtualPageImpl.php",
		// "zipperAgentOrganizerResendConfirmationVirtualPageImpl" => "virtualPage/zipperAgentOrganizerResendConfirmationVirtualPageImpl.php",
		// "zipperAgentOrganizerActivateSubscriberVirtualPageImpl" => "virtualPage/zipperAgentOrganizerActivateSubscriberVirtualPageImpl.php",
		// "zipperAgentOrganizerSendSubscriberPasswordVirtualPageImpl" => "virtualPage/zipperAgentOrganizerSendSubscriberPasswordVirtualPageImpl.php",
		// "zipperAgentOrganizerHelpVirtualPageImpl" => "virtualPage/zipperAgentOrganizerHelpVirtualPageImpl.php",
		"zipperAgentOrganizerEditSubscriberVirtualPageImpl" => "virtualPage/zipperAgentOrganizerEditSubscriberVirtualPageImpl.php",
		// "zipperAgentContactFormVirtualPageImpl" => "virtualPage/zipperAgentContactFormVirtualPageImpl.php",
		// "zipperAgentValuationFormVirtualPageImpl" => "virtualPage/zipperAgentValuationFormVirtualPageImpl.php",
		// "zipperAgentOpenHomeSearchFormVirtualPageImpl" => "virtualPage/zipperAgentOpenHomeSearchFormVirtualPageImpl.php",
		// "zipperAgentSoldFeaturedListingVirtualPageImpl" => "virtualPage/zipperAgentSoldFeaturedListingVirtualPageImpl.php",
		// "zipperAgentSupplementalListingVirtualPageImpl" => "virtualPage/zipperAgentSupplementalListingVirtualPageImpl.php",
		// "zipperAgentOfficeListVirtualPageImpl" => "virtualPage/zipperAgentOfficeListVirtualPageImpl.php",
		// "zipperAgentOfficeDetailVirtualPageImpl" => "virtualPage/zipperAgentOfficeDetailVirtualPageImpl.php",
		// "zipperAgentAgentListVirtualPageImpl" => "virtualPage/zipperAgentAgentListVirtualPageImpl.php",
		// "zipperAgentAgentDetailVirtualPageImpl" => "virtualPage/zipperAgentAgentDetailVirtualPageImpl.php",
		// "zipperAgentAgentOrOfficeListingsVirtualPageImpl" => "virtualPage/zipperAgentAgentOrOfficeListingsVirtualPageImpl.php",
		"zipperAgentAbstractPropertyOrganizerVirtualPage" => "virtualPage/zipperAgentAbstractPropertyOrganizerVirtualPage.php",
		//custom virtual pages by decz
		"zipperAgentLuxuryDetailsVirtualPageImpl" => "virtualPage/zipperAgentLuxuryDetailsVirtualPageImpl.php",
		//admin pages
		"zipperAgentAdminAbstractPage" => "adminPage/zipperAgentAdminAbstractPage.php",
		"zipperAgentAdminPageInterface" => "adminPage/zipperAgentAdminPageInterface.php",
		// "zipperAgentAdminInformation" => "adminPage/zipperAgentAdminInformation.php",
		// "zipperAgentAdminActivate" => "adminPage/zipperAgentAdminActivate.php",
		// "zipperAgentAdminControlPanel" => "adminPage/zipperAgentAdminControlPanel.php",
		"zipperAgentAdminPageConfig" => "adminPage/zipperAgentAdminPageConfig.php",
		"zipperAgentAdminConfiguration" => "adminPage/zipperAgentAdminConfiguration.php",
		// "zipperAgentAdminBio" => "adminPage/zipperAgentAdminBio.php",
		// "zipperAgentAdminSocial" => "adminPage/zipperAgentAdminSocial.php",
		// "zipperAgentAdminEmail" => "adminPage/zipperAgentAdminEmail.php",
		// "zipperAgentAdminCommunityPages" => "adminPage/zipperAgentAdminCommunityPages.php",
		// "zipperAgentAdminSeoCityLinks" => "adminPage/zipperAgentAdminSeoCityLinks.php"
	);
	
	private function __construct() {
		spl_autoload_register(array($this, "load"));
	}
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function load($className) {
		// print_r("including " . $className."<br />");
		if(array_key_exists($className, $this->classes)) {
			
			include $this->classes[$className];
		}
	}
	
}