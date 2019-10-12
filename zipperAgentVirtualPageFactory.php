<?php

class zipperAgentVirtualPageFactory {

	private static $instance;

	private function __construct() {
	}

	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	//Types used to determine the VirtualPage type in zipperAgentVirtualPageFactory.
	const DEFAULT_PAGE = "idx-default";
	const LISTING_SEARCH_RESULTS = "idx-results";
	const LISTING_DETAIL = "idx-detail";
	const LISTING_SOLD_DETAIL = "idx-sold-detail";
	const LISTING_SEARCH_FORM = "idx-search";
	
	/* added by decz */
	const LUXURY_DETAIL = "idx-luxury-detail";
	/* end */
	
	const MAP_SEARCH_FORM = "idx-map-search";
	const LISTING_ADVANCED_SEARCH_FORM = "idx-advanced-search";
	const FEATURED_SEARCH = "idx-featured-search";
	const HOT_SHEET_LIST = "idx-hotsheets-list";
	const HOT_SHEET_LISTING_REPORT = "idx-hotsheets";
	const HOT_SHEET_OPEN_HOME_REPORT = "idx-hotsheet-open-home-report";
	const HOT_SHEET_MARKET_REPORT = "idx-hotsheet-market-report";
	const ORGANIZER_LOGIN = "idx-property-organizer-login";
	const ORGANIZER_LOGOUT = "idx-property-organizer-logout";
	const ORGANIZER_EDIT_SAVED_SEARCH = "idx-property-organizer-edit-saved-search";
	const ORGANIZER_EDIT_SAVED_SEARCH_SUBMIT = "idx-property-organizer-edit-saved-search-submit";
	const ORGANIZER_EMAIL_UPDATES_CONFIRMATION = "idx-property-organizer-email-updates-success";
	const ORGANIZER_DELETE_SAVED_SEARCH = "idx-property-organizer-delete-saved-search";
	const ORGANIZER_DELETE_SAVED_SEARCH_SUBMIT = "idx-property-organizer-delete-saved-search-submit";
	const ORGANIZER_VIEW_SAVED_SEARCH = "idx-property-organizer-view-saved-search";
	const ORGANIZER_VIEW_SAVED_SEARCH_LIST = "idx-property-organizer-view-saved-searches";
	const ORGANIZER_VIEW_SAVED_LISTING_LIST = "idx-property-organizer-view-saved-listings";
	const ORGANIZER_DELETE_SAVED_LISTING_SUBMIT = "idx-property-organizer-delete-saved-listing";
	const ORGANIZER_RESEND_CONFIRMATION_EMAIL = "idx-property-organizer-resend-confirmation-email";
	const ORGANIZER_ACTIVATE_SUBSCRIBER = "idx-property-organizer-activate-subscriber";
	const ORGANIZER_SEND_SUBSCRIBER_PASSWORD = "idx-property-organizer-send-login";
	const ORGANIZER_HELP = "idx-property-organizer-help";
	const ORGANIZER_EDIT_SUBSCRIBER = "idx-property-organizer-edit-subscriber";
	const CONTACT_FORM = "idx-contact-form";
	const VALUATION_FORM = "idx-valuation-form";
	const OPEN_HOME_SEARCH_FORM = "idx-open-home-search-form";
	const SUPPLEMENTAL_LISTING = "idx-supplemental-listing";
	const SOLD_FEATURED_LISTING = "idx-sold-featured-listing";
	const OFFICE_LIST = "idx-office-list";
	const OFFICE_DETAIL = "idx-office-detail";
	const AGENT_LIST = "idx-agent-list";
	const AGENT_DETAIL = "idx-agent-detail";
	const AGENT_OR_OFFICE_LISTINGS = "idx-agent-or-office-listings";
	
	/**
	 * 
	 * @param string $type
	 * @return zipperAgentVirtualPageInterface
	 */
	public function getVirtualPage($virtualPageType) {
		$virtualPage = null;
		switch($virtualPageType) {
			case self::DEFAULT_PAGE:
				$virtualPage = new zipperAgentDefaultVirtualPageImpl();
				break;
			case self::LISTING_SEARCH_RESULTS:
				$virtualPage = new zipperAgentSearchResultsVirtualPageImpl();
				break;
			case self::LISTING_DETAIL:
				$virtualPage = new zipperAgentListingDetailVirtualPageImpl();
				break;
			case self::LISTING_SOLD_DETAIL:
				// $virtualPage = new zipperAgentListingSoldDetailVirtualPageImpl(); //disabled by decz
				break;
			case self::LUXURY_DETAIL:
				$virtualPage = new zipperAgentLuxuryDetailsVirtualPageImpl();
				break;
			case self::FEATURED_SEARCH:
				// $virtualPage = new zipperAgentFeaturedSearchVirtualPageImpl(); //disabled by decz
				break;
			case self::LISTING_ADVANCED_SEARCH_FORM:
				$virtualPage = new zipperAgentAdvancedSearchFormVirtualPageImpl();
				break;
			case self::LISTING_SEARCH_FORM:
				$virtualPage = new zipperAgentSearchFormVirtualPageImpl();
				break;
			case self::MAP_SEARCH_FORM:
				$virtualPage = new zipperAgentMapSearchVirtualPageImpl();
				break;
			case self::HOT_SHEET_LISTING_REPORT:
				// $virtualPage = new zipperAgentHotSheetListingReportVirtualPageImpl(); //disabled by decz
				break;
			case self::HOT_SHEET_OPEN_HOME_REPORT:
				// $virtualPage = new zipperAgentHotsheetOpenHomeReportVirtualPageImpl(); //disabled by decz
				break;
			case self::HOT_SHEET_MARKET_REPORT:
				// $virtualPage = new zipperAgentHotsheetMarketReportVirtualPageImpl(); //disabled by decz
				break;
			case self::HOT_SHEET_LIST:
				// $virtualPage = new zipperAgentHotsheetListVirtualPageImpl(); //disabled by decz
				break;
			case self::ORGANIZER_LOGIN:
				$virtualPage = new zipperAgentOrganizerLoginFormVirtualPageImpl();
				break;
			case self::ORGANIZER_LOGOUT:
				$virtualPage = new zipperAgentOrganizerLogoutVirtualPageImpl();
				break;
			case self::ORGANIZER_EDIT_SAVED_SEARCH:
				$virtualPage = new zipperAgentOrganizerEditSavedSearchFormVirtualPageImpl();
				break;
			case self::ORGANIZER_EMAIL_UPDATES_CONFIRMATION:
				// $virtualPage = new zipperAgentOrganizerEmailUpdatesConfirmationVirtualPageImpl(); //disabled by decz
				break;
			case self::ORGANIZER_EDIT_SAVED_SEARCH_SUBMIT:
				$virtualPage = new zipperAgentOrganizerEditSavedSearchVirtualPageImpl();
				break;
			case self::ORGANIZER_DELETE_SAVED_SEARCH_SUBMIT:
				$virtualPage = new zipperAgentOrganizerDeleteSavedSearchVirtualPageImpl();
				break;
			case self::ORGANIZER_VIEW_SAVED_SEARCH:
				$virtualPage = new zipperAgentOrganizerViewSavedSearchVirtualPageImpl();
				break;
			case self::ORGANIZER_VIEW_SAVED_SEARCH_LIST:
				$virtualPage = new zipperAgentOrganizerViewSavedSearchListVirtualPageImpl();
				break;
			case self::ORGANIZER_VIEW_SAVED_LISTING_LIST:
				$virtualPage = new zipperAgentOrganizerViewSavedListingListVirtualPageImpl();
				break;
			case self::ORGANIZER_DELETE_SAVED_LISTING_SUBMIT:
				$virtualPage = new zipperAgentOrganizerDeleteSavedListingVirtualPageImpl();
				break;
			case self::ORGANIZER_ACTIVATE_SUBSCRIBER:
				// $virtualPage = new zipperAgentOrganizerActivateSubscriberVirtualPageImpl(); //disabled by decz
				break;
			case self::ORGANIZER_RESEND_CONFIRMATION_EMAIL:
				// $virtualPage = new zipperAgentOrganizerResendConfirmationVirtualPageImpl(); //disabled by decz
				break;
			case self::ORGANIZER_SEND_SUBSCRIBER_PASSWORD:
				// $virtualPage = new zipperAgentOrganizerSendSubscriberPasswordVirtualPageImpl(); //disabled by decz
				break;
			case self::ORGANIZER_HELP:
				// $virtualPage = new zipperAgentOrganizerHelpVirtualPageImpl(); //disabled by decz
				break;
			case self::ORGANIZER_EDIT_SUBSCRIBER:
				$virtualPage = new zipperAgentOrganizerEditSubscriberVirtualPageImpl();
				break;
			case self::CONTACT_FORM:
				// $virtualPage = new zipperAgentContactFormVirtualPageImpl(); //disabled by decz
				break;
			case self::VALUATION_FORM:
				// $virtualPage = new zipperAgentValuationFormVirtualPageImpl(); //disabled by decz
				break;
			case self::OPEN_HOME_SEARCH_FORM:
				// $virtualPage = new zipperAgentOpenHomeSearchFormVirtualPageImpl(); //disabled by decz
				break;
			case self::SUPPLEMENTAL_LISTING:
				// $virtualPage = new zipperAgentSupplementalListingVirtualPageImpl(); //disabled by decz
				break;
			case self::SOLD_FEATURED_LISTING:
				// $virtualPage = new zipperAgentSoldFeaturedListingVirtualPageImpl(); //disabled by decz
				break;
			case self::OFFICE_LIST:
				// $virtualPage = new zipperAgentOfficeListVirtualPageImpl(); //disabled by decz
				break;
			case self::OFFICE_DETAIL:
				// $virtualPage = new zipperAgentOfficeDetailVirtualPageImpl(); //disabled by decz
				break;
			case self::AGENT_LIST:
				// $virtualPage = new zipperAgentAgentListVirtualPageImpl(); //disabled by decz
				break;
			case self::AGENT_DETAIL:
				// $virtualPage = new zipperAgentAgentDetailVirtualPageImpl(); //disabled by decz
				break;
			case self::AGENT_OR_OFFICE_LISTINGS:
				$virtualPage = new zipperAgentAgentOrOfficeListingsVirtualPageImpl();
				break;
		}
		return $virtualPage;
	}
	
	/**
	 * @param string $name
	 * @return boolean
	 */
	public static function isOrganizerPage($name) {
		$pages = array(
			self::ORGANIZER_LOGIN,
			self::ORGANIZER_LOGOUT,
			self::ORGANIZER_EDIT_SAVED_SEARCH,
			self::ORGANIZER_EDIT_SAVED_SEARCH_SUBMIT,
			self::ORGANIZER_EMAIL_UPDATES_CONFIRMATION,
			self::ORGANIZER_DELETE_SAVED_SEARCH,
			self::ORGANIZER_DELETE_SAVED_SEARCH_SUBMIT,
			self::ORGANIZER_VIEW_SAVED_SEARCH,
			self::ORGANIZER_VIEW_SAVED_SEARCH_LIST,
			self::ORGANIZER_VIEW_SAVED_LISTING_LIST,
			self::ORGANIZER_DELETE_SAVED_LISTING_SUBMIT,
			self::ORGANIZER_RESEND_CONFIRMATION_EMAIL,
			self::ORGANIZER_ACTIVATE_SUBSCRIBER,
			self::ORGANIZER_SEND_SUBSCRIBER_PASSWORD,
			self::ORGANIZER_HELP,
			self::ORGANIZER_EDIT_SUBSCRIBER,
		);
		return array_search($name, $pages) !== false;
	}
	
	public static function isHotSheetPage($name) {
		$pages = array(
			self::HOT_SHEET_LIST,
			self::HOT_SHEET_LISTING_REPORT,
			self::HOT_SHEET_OPEN_HOME_REPORT,
			self::HOT_SHEET_MARKET_REPORT,
		);
		return array_search($name, $pages) !== false;
	}
	
	public static function isEmailAlertsPage($name) {
		$pages = array (
			self::ORGANIZER_EDIT_SAVED_SEARCH,
			self::ORGANIZER_EMAIL_UPDATES_CONFIRMATION,
		);
		return array_search($name, $pages) !== false;
	}
}