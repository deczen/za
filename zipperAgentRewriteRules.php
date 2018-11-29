<?php

/**
 *
 * Singleton implementation of zipperAgentRewriteRules
 *
 * All zipperAgent requests are directed to the $rootPageName, which tries to load a wordpress page that
 * does not exist. We do not want to load a real page. We get the content from the zipperAgent services
 * and display it as a virtual Wordpress post.
 *
 * The rewrite rules below set a variable zipperAgentConstants::ZA_TYPE_URL_VAR that is used to determine
 * which VirtualPage retrieves the content from zipperAgent
 *
 * @author zipperagent
 *
 */
class zipperAgentRewriteRules {

	private static $instance;
	private $urlFactory;
	private $rootPageName;

	private function __construct() {
		$this->rootPageName = "index.php?pagename=non_existent_page";
	}

	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function initialize() {
		$this->addQueryVar(zipperAgentConstants::ZA_TYPE_URL_VAR);
		$this->initRewriteRules();
	}

	public function flushRules() {
		global $wp_rewrite;
		$wp_rewrite->flush_rules();
	}
	
	/**
	 * Function to initialize rewrite rules for the ZA plugin.
	 *
	 * During development we initialize and flush the rules often, but
	 * this should only be performed when the plugin is registered.
	 *
	 * We need to map certain URL patters ot an internal za page
	 * Once requests are routed to that page, we can handle different
	 * behavior in functions that listen for updates on that page.
	 */
	private function initRewriteRules() {
		$this->setRewriteRules("");
		//set the rules again, to support almost pretty permalinks
		$this->setRewriteRules("index.php/");
	}
	
	/**
	 * @param string $type
	 * @param string $pattern
	 */
	private function addRule($type, $pattern) {
		$matches = array();
		preg_match_all("/\{(.*?)\}/", $pattern, $matches);
		$matches = $matches[1];
		$regex = $pattern;
		$redirect = $this->rootPageName . "&" . zipperAgentConstants::ZA_TYPE_URL_VAR . "=" . $type;
		foreach($matches as $key => $value) {
			$key += 1;
			if(!empty($value)) {
				$regex = str_replace("{" . $value . "}", "([^/]+)", $regex);
				$redirect .= "&" . $value . "=\$matches[" . $key . "]";
				$this->addQueryVar($value);
			}
		}
		//anchor regex to prevent matching permalink contained in another permalink (ex. home-for-sale and home-for-sale-)
		$regex = "^" . $regex . "$";
		add_rewrite_rule($regex, $redirect, "top");
	}
	
	/**
	 * WordPress reserves some names (name, term, page) in /wp-includes/class-wp.php
	 * ($public_query_vars, $private_query_vars) that should not be used
	 * 
	 * @param string $name
	 */
	private function addQueryVar($name) {
		global $wp;
		$wp->add_query_var($name);
	}
	
	/**
	 * Note: The order of these search rules is important. The match will pick
	 * the first page it finds that matches any of the first few selected characters.
	
	 * For example:
	 * listing-search
	 * listing-search-results
	
	 * When "listing-search-results" is selected, the "listing-search" may be
	 * returned instead. If you encounter this problem, a simple fix is to change
	 * the first few characters of the problem page to something unique.
	 * 
	 * @param string $matchRulePrefix
	 * @return void
	 */
	private function setRewriteRules($matchRulePrefix) {
		$urlFactory = zipperAgentUrlFactory::getInstance();
		$this->addRule(
			zipperAgentVirtualPageFactory::LISTING_ADVANCED_SEARCH_FORM,
			$matchRulePrefix . $urlFactory->getListingsAdvancedSearchFormUrl(false) . "/{boardId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::LISTING_ADVANCED_SEARCH_FORM,
			$matchRulePrefix . $urlFactory->getListingsAdvancedSearchFormUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::OFFICE_LIST,
			$matchRulePrefix . $urlFactory->getOfficeListUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::OFFICE_DETAIL,
			$matchRulePrefix . $urlFactory->getOfficeDetailUrl(false) . "/{officeName}/{officeId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::AGENT_LIST,
			$matchRulePrefix . $urlFactory->getAgentListUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::AGENT_DETAIL,
			$matchRulePrefix . $urlFactory->getAgentDetailUrl(false) . "/{agentName}/{agentId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::CONTACT_FORM,
			$matchRulePrefix . $urlFactory->getContactFormUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::VALUATION_FORM,
			$matchRulePrefix . $urlFactory->getValuationFormUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::OPEN_HOME_SEARCH_FORM,
			$matchRulePrefix . $urlFactory->getOpenHomeSearchFormUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::SOLD_FEATURED_LISTING,
			$matchRulePrefix . $urlFactory->getSoldFeaturedListingUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::SUPPLEMENTAL_LISTING,
			$matchRulePrefix . $urlFactory->getSupplementalListingUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::LISTING_SEARCH_FORM,
			$matchRulePrefix . $urlFactory->getListingsSearchFormUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::MAP_SEARCH_FORM,
			$matchRulePrefix . $urlFactory->getMapSearchFormUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_DELETE_SAVED_SEARCH_SUBMIT,
			$matchRulePrefix . $urlFactory->getOrganizerDeleteSavedSearchSubmitUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_DELETE_SAVED_LISTING_SUBMIT,
			$matchRulePrefix . $urlFactory->getOrganizerDeleteSavedListingUrl(false) . "/{savedListingId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SAVED_SEARCH,
			$matchRulePrefix . $urlFactory->getOrganizerEditSavedSearchUrl(false) . "/{boardId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SAVED_SEARCH,
			$matchRulePrefix . $urlFactory->getOrganizerEditSavedSearchUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SAVED_SEARCH_SUBMIT,
			$matchRulePrefix . $urlFactory->getOrganizerEditSavedSearchSubmitUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_EMAIL_UPDATES_CONFIRMATION,
			$matchRulePrefix . $urlFactory->getOrganizerEmailUpdatesConfirmationUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_HELP,
			$matchRulePrefix . $urlFactory->getOrganizerHelpUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SUBSCRIBER,
			$matchRulePrefix . $urlFactory->getOrganizerEditSubscriberUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_LOGIN,
			$matchRulePrefix . $urlFactory->getOrganizerLoginUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_LOGOUT,
			$matchRulePrefix . $urlFactory->getOrganizerLogoutUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_VIEW_SAVED_SEARCH,
			$matchRulePrefix . $urlFactory->getOrganizerViewSavedSearchUrl(false) . "/{searchProfileId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_VIEW_SAVED_SEARCH_LIST,
			$matchRulePrefix . $urlFactory->getOrganizerViewSavedSearchListUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_VIEW_SAVED_LISTING_LIST,
			$matchRulePrefix . $urlFactory->getOrganizerViewSavedListingListUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_RESEND_CONFIRMATION_EMAIL,
			$matchRulePrefix . $urlFactory->getOrganizerResendConfirmationEmailUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_ACTIVATE_SUBSCRIBER,
			$matchRulePrefix . $urlFactory->getOrganizerActivateSubscriberUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_SEND_SUBSCRIBER_PASSWORD,
			$matchRulePrefix . $urlFactory->getOrganizerSendSubscriberPasswordUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::HOT_SHEET_LISTING_REPORT,
			$matchRulePrefix . $urlFactory->getHotSheetListingReportUrl(false) . "/{savedSearchName}/{savedSearchId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::HOT_SHEET_OPEN_HOME_REPORT,
			$matchRulePrefix . $urlFactory->getHotSheetOpenHomeReportUrl(false) . "/{savedSearchName}/{savedSearchId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::HOT_SHEET_MARKET_REPORT,
			$matchRulePrefix . $urlFactory->getHotSheetMarketReportUrl(false) . "/{savedSearchName}/{savedSearchId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::HOT_SHEET_LIST,
			$matchRulePrefix . $urlFactory->getHotsheetListUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::LISTING_SOLD_DETAIL,
			$matchRulePrefix . $urlFactory->getListingSoldDetailUrl(false) . "/{listingAddress}/{listingNumber}/{boardId}"
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::LISTING_DETAIL,
			/* $matchRulePrefix . $urlFactory->getListingDetailUrl(false) . "/{listingAddress}/{listingNumber}/{boardId}" */
			
			/* modified by decz */
			$matchRulePrefix . $urlFactory->getListingDetailUrl(false) . "/{listingNumber}/{listingAddress}"
			/* end modified */
		);
		/* added by decz */
		$this->addRule(
			zipperAgentVirtualPageFactory::LUXURY_DETAIL,
			$matchRulePrefix . $urlFactory->getLuxuryDetailUrl(false) . "/{luxuryId}/{listingNumber}"
		);
		/* end */
		$this->addRule(
			zipperAgentVirtualPageFactory::LISTING_SEARCH_RESULTS,
			$matchRulePrefix . $urlFactory->getListingsSearchResultsUrl(false)
		);
		$this->addRule(
			zipperAgentVirtualPageFactory::FEATURED_SEARCH,
			$matchRulePrefix . $urlFactory->getFeaturedSearchResultsUrl(false)
		);
		/**
		 * @deprecated used only in fixed width
		 */
		$this->addRule(
			zipperAgentVirtualPageFactory::HOT_SHEET_LISTING_REPORT,
			$matchRulePrefix . $urlFactory->getHotSheetListingReportUrl(false) . "/{savedSearchId}"
		);
		/**
		 * @deprecated only used to support old URL
		 */
		$this->addRule(
			zipperAgentVirtualPageFactory::HOT_SHEET_LISTING_REPORT,
			$matchRulePrefix . "homes-for-sale-toppicks/{savedSearchName}/{savedSearchId}"
		);
		/**
		 * @deprecated only used to support old URL
		 */
		$this->addRule(
			zipperAgentVirtualPageFactory::LISTING_SEARCH_RESULTS,
			$matchRulePrefix . "address-listing-results"
		);
		/**
		 * @deprecated only used to support old URL
		 */
		$this->addRule(
			zipperAgentVirtualPageFactory::LISTING_SEARCH_RESULTS,
			$matchRulePrefix . "id-listing-results"
		);
		/**
		 * @deprecated only used to support old URL
		 */
		$this->addRule(
			zipperAgentVirtualPageFactory::ORGANIZER_LOGIN,
			$matchRulePrefix . "property-organizer-login-submit"
		);
	}
	
}