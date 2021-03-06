<?php

class zipperAgentShortcodeDispatcher {
	
	const HOT_SHEETS_SHORTCODE = "za_toppicks";
	const HOT_SHEET_OPEN_HOME_REPORT = "za_open_home_report";
	const HOT_SHEET_MARKET_REPORT = "za_market_report";
	const FEATURED_SHORTCODE = "za_featured";
	const SEARCH_RESULTS_SHORTCODE = "za_search_results";
	const QUICK_SEARCH_SHORTCODE = "za_quick_search";
	const SEARCH_BY_ADDRESS_SHORTCODE = "za_address_search";
	const SEARCH_BY_LISTING_ID_SHORTCODE = "za_listing_search";
	const MAP_SEARCH_SHORTCODE = "za_map_search";
	const AGENT_LISTINGS_SHORTCODE = "za_agent_listings";
	const OFFICE_LISTINGS_SHORTCODE = "za_office_listings";
	const GALLERY_SLIDER_SHORTCODE = "za_gallery_slider";
	const BASIC_SEARCH_SHORTCODE = "za_basic_search";
	const ADVANCED_SEARCH_SHORTCODE = "za_advanced_search";
	const ORGANIZER_LOGIN_SHORTCODE = "za_organizer_login";
	const ORGANIZER_LOGIN_WIGET_SHORTCODE = "za_organizer_login_widget";
	const AGENT_DETAIL_SHORTCODE = "za_agent_detail";
	const AGENT_LIST_SHORTCODE = "za_agent_list";
	const OFFICE_LIST_SHORTCODE = "za_office_list";
	const VALUATION_FORM_SHORTCODE = "za_valuation_form";
	const VALUATION_WIDGET_SHORTCODE = "za_valuation_widget";
	const CONTACT_FORM_SHORTCODE = "za_contact_form";
	const EMAIL_ALERTS_SHORTCODE = "za_email_alerts";
	const HOT_SHEET_REPORT_SIGNUP_SHORTCODE = "za_campaign_signup";
	
	private static $instance;
	private $virtualPageFactory;
	private $enqueueResource;
	private $displayRules;
	
	private function __construct() {
		$this->virtualPageFactory = zipperAgentVirtualPageFactory::getInstance();
		$this->enqueueResource = zipperAgentEnqueueResource::getInstance();
		$this->displayRules = zipperAgentDisplayRules::getInstance();
	}

	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function initialize() {
		add_shortcode(self::HOT_SHEETS_SHORTCODE, array($this, "getListingReport"));
		add_shortcode(self::HOT_SHEET_OPEN_HOME_REPORT, array($this, "getOpenHomeReport"));
		add_shortcode(self::HOT_SHEET_MARKET_REPORT, array($this, "getMarketReport"));
		add_shortcode(self::FEATURED_SHORTCODE, array($this, "getFeaturedListings"));
		add_shortcode(self::SEARCH_RESULTS_SHORTCODE, array($this, "getSearchResults"));
		// add_shortcode(self::QUICK_SEARCH_SHORTCODE, array($this, "getQuickSearch"));
		add_shortcode(self::SEARCH_BY_ADDRESS_SHORTCODE, array($this, "getSearchByAddress"));
		add_shortcode(self::SEARCH_BY_LISTING_ID_SHORTCODE, array($this, "getSearchByListingId"));
		// add_shortcode(self::MAP_SEARCH_SHORTCODE, array($this, "getMapSearch"));
		add_shortcode(self::AGENT_LISTINGS_SHORTCODE, array($this, "getAgentListings"));
		add_shortcode(self::OFFICE_LISTINGS_SHORTCODE, array($this, "getOfficeListings"));
		add_shortcode(self::GALLERY_SLIDER_SHORTCODE, array($this, "getGallerySlider"));
		// add_shortcode(self::BASIC_SEARCH_SHORTCODE, array($this, "getBasicSearch"));
		// add_shortcode(self::BASIC_SEARCH_SHORTCODE, 'getBasicSearch');
		// add_shortcode(self::ADVANCED_SEARCH_SHORTCODE, array($this, "getAdvancedSearch"));
		// add_shortcode(self::ADVANCED_SEARCH_SHORTCODE, 'getAdvancedSearch');
		// add_shortcode(self::ORGANIZER_LOGIN_SHORTCODE, array($this, "getOrganizerLogin"));
		add_shortcode(self::ORGANIZER_LOGIN_SHORTCODE, 'getOrganizerLogin');
		add_shortcode(self::ORGANIZER_LOGIN_WIGET_SHORTCODE, array($this, "getOrganizerLoginWidget"));
		add_shortcode(self::AGENT_DETAIL_SHORTCODE, array($this, "getAgentDetail"));
		add_shortcode(self::AGENT_LIST_SHORTCODE, array($this, "getAgentList"));
		add_shortcode(self::OFFICE_LIST_SHORTCODE, array($this, "getOfficeList"));
		add_shortcode(self::VALUATION_FORM_SHORTCODE, array($this, "getValuationForm"));
		add_shortcode(self::VALUATION_WIDGET_SHORTCODE, array($this, "getValuationWidget"));
		add_shortcode(self::CONTACT_FORM_SHORTCODE, array($this, "getContactForm"));
		add_shortcode(self::EMAIL_ALERTS_SHORTCODE, array($this, "getEmailAlerts"));
		add_shortcode(self::HOT_SHEET_REPORT_SIGNUP_SHORTCODE, array($this, "getHotSheetReportSignup"));
	}
	
	/**
	 * @deprecated use constant
	 */
	public function getToppicksShortcode() {
		return self::HOT_SHEETS_SHORTCODE;
	}
	
	/**
	 * @deprecated use constant
	 */
	public function getFeaturedShortcode() {
		return self::FEATURED_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getSearchResultsShortcode() {
		return self::SEARCH_RESULTS_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getQuickSearchShortcode() {
		return self::QUICK_SEARCH_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getSearchByAddressShortcode() {
		return self::SEARCH_BY_ADDRESS_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getSearchByListingIdShortcode() {
		return self::SEARCH_BY_LISTING_ID_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getMapSearchShortcode() {
		return self::MAP_SEARCH_SHORTCODE;
	}		

	/**
	 * @deprecated use constant
	 */
	public function getAgentListingsShortcode() {
		return self::AGENT_LISTINGS_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getOfficeListingsShortcode() {
		return self::OFFICE_LISTINGS_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getListingGalleryShortcode() {
		return self::GALLERY_SLIDER_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getBasicSearchShortcode() {
		return self::BASIC_SEARCH_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getAdvancedSearchShortcode() {
		return self::ADVANCED_SEARCH_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getOrganizerLoginShortcode() {
		return self::ORGANIZER_LOGIN_SHORTCODE;
	}

	/**
	 * @deprecated use constant
	 */
	public function getAgentDetailShortcode() {
		return self::AGENT_DETAIL_SHORTCODE;
	}
	
	/**
	 * @deprecated use constant
	 */
	public function getValuationFormShortcode() {
		return self::VALUATION_FORM_SHORTCODE;
	}		
	
	public function getBasicSearch($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::LISTING_SEARCH_FORM);
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}

	public function getAdvancedSearch($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::LISTING_ADVANCED_SEARCH_FORM);
		$virtualPage->addParameter("boardId", $this->getAttribute($attributes, "boardId"));
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}

	public function getOrganizerLogin($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::ORGANIZER_LOGIN);
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}

	public function getOrganizerLoginWidget($attributes) {
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "property-organizer-login-form")
			->addParameter("style", $this->getAttribute($attributes, "style"))
			->addParameter("smallView", true)
		;
		$remoteResponse = $remoteRequest->remoteGetRequest();
		$content = $remoteResponse->getBody();
		$this->enqueueResource->addToFooter($remoteResponse->getHead());
		return $content;
	}

	public function getAgentDetail($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::AGENT_DETAIL);
		$virtualPage->addParameter("agentID", $this->getAttribute($attributes, "agentId"));
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getAgentList($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::AGENT_LIST);
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getOfficeList($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::OFFICE_LIST);
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getValuationForm($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::VALUATION_FORM);
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getValuationWidget($attributes) {
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "valuation-form-widget")
			->addParameter("smallView", true)
			->addParameter("style", $this->getAttribute($attributes, "style"))
		;
		$remoteResponse = $remoteRequest->remoteGetRequest();
		$content = $remoteResponse->getBody();
		$this->enqueueResource->addToFooter($remoteResponse->getHead());
		return $content;
	}
	
	public function getContactForm($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::CONTACT_FORM);
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getEmailAlerts($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SAVED_SEARCH);
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getListingReport($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::HOT_SHEET_LISTING_REPORT);
		$virtualPage->addParameter("hotSheetId", $this->getAttribute($attributes, "id"));
		$virtualPage->addParameter("includeMap", $this->getAttribute($attributes, "includeMap"));
		$virtualPage->addParameter("sortBy", $this->getAttribute($attributes, "sortBy"));
		if($this->getAttribute($attributes, "header") == "true") {
			$virtualPage->addParameter("gallery", false);
		} else {
			$virtualPage->addParameter("gallery", true);
		}
		$virtualPage->addParameter("displayType", $this->getAttribute($attributes, "displayType"));
		$virtualPage->addParameter("resultsPerPage", $this->getAttribute($attributes, "resultsPerPage"));
		$virtualPage->addParameter("status", $this->getAttribute($attributes, "status"));
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getOpenHomeReport($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::HOT_SHEET_OPEN_HOME_REPORT);
		$virtualPage->addParameter("hotSheetId", $this->getAttribute($attributes, "id"));
		$virtualPage->addParameter("includeMap", $this->getAttribute($attributes, "includeMap"));
		$virtualPage->addParameter("sortBy", $this->getAttribute($attributes, "sortBy"));
		if($this->getAttribute($attributes, "header") == "true") {
			$virtualPage->addParameter("gallery", false);
		} else {
			$virtualPage->addParameter("gallery", true);
		}
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getMarketReport($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::HOT_SHEET_MARKET_REPORT);
		$virtualPage->addParameter("hotSheetId", $this->getAttribute($attributes, "id"));
		if($this->getAttribute($attributes, "header") == "true") {
			$virtualPage->addParameter("gallery", false);
		} else {
			$virtualPage->addParameter("gallery", true);
		}
		$virtualPage->addParameter("numColumns", $this->getAttribute($attributes, "columns"));
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getAgentListings($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::AGENT_OR_OFFICE_LISTINGS);
		$virtualPage->addParameter("agentId", $this->getAttribute($attributes, "agentId"));
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}

	public function getOfficeListings($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::AGENT_OR_OFFICE_LISTINGS);
		$virtualPage->addParameter("officeId", $this->getAttribute($attributes, "officeId"));
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getFeaturedListings($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::FEATURED_SEARCH);
		$virtualPage->addParameter("includeMap", $this->getAttribute($attributes, "includeMap"));
		$virtualPage->addParameter("sortBy", $this->getAttribute($attributes, "sortBy"));
		if($this->getAttribute($attributes, "header") == "true") {
			$virtualPage->addParameter("gallery", false);
		} else {
			$virtualPage->addParameter("gallery", true);
		}
		$virtualPage->addParameter("displayType", $this->getAttribute($attributes, "displayType"));
		$virtualPage->addParameter("resultsPerPage", $this->getAttribute($attributes, "resultsPerPage"));
		$virtualPage->addParameter("propertyType", $this->getAttribute($attributes, "propertyType"));
		$virtualPage->addParameter("status", $this->getAttribute($attributes, "status"));
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}

	public function getSearchResults($attributes) {
		$virtualPage = $this->virtualPageFactory->getVirtualPage(zipperAgentVirtualPageFactory::LISTING_SEARCH_RESULTS);
		$bath = $this->getAttribute($attributes, "bath");
		$bed = $this->getAttribute($attributes, "bed");
		$cityId = $this->getAttribute($attributes, "cityId");
		$cityZip = $this->getAttribute($attributes, "cityZip");
		$minPrice = $this->getAttribute($attributes, "minPrice");
		$maxPrice = $this->getAttribute($attributes, "maxPrice");
		$propertyType = $this->getAttribute($attributes, "propertyType");
		if(is_numeric($cityId)) {
			$virtualPage->addParameter("cityId", $cityId);
		}
		if(!empty($cityZip)) {				
			//$virtualPage->addParameter("cityZip", $cityZip;
			$searchLinkInfo = new zipperAgentSearchLinkInfo(null, $cityZip, $propertyType, $minPrice, $maxPrice);
			if($searchLinkInfo->hasPostalCode()) {
				$virtualPage->addParameter("zip", $searchLinkInfo->getPostalCode());
			} else {
				$virtualPage->addParameter("city", $searchLinkInfo->getCity());
				if($searchLinkInfo->hasState()) {
					$virtualPage->addParameter("state", $searchLinkInfo->getState());
				}
			}
		}			
		if(!empty($propertyType)) {
			$virtualPage->addParameter("propertyType", $propertyType);
		}
		if(is_numeric($bed)) {
			$virtualPage->addParameter("bedrooms", $bed);
		}
		if(is_numeric($bath)) {
			$virtualPage->addParameter("bathcount", $bath);
		}
		if( is_numeric($minPrice)) {
			$virtualPage->addParameter("minListPrice", $minPrice);
		}
		if(is_numeric($maxPrice)) {
			$virtualPage->addParameter("maxListPrice", $maxPrice);
		}
		$virtualPage->addParameter("includeMap", $this->getAttribute($attributes, "includeMap"));
		$virtualPage->addParameter("sortBy", $this->getAttribute($attributes, "sortBy"));
		if($this->getAttribute($attributes, "header") == "true") {
			$virtualPage->addParameter("gallery", false);
		} else {
			$virtualPage->addParameter("gallery", true);
		}
		$virtualPage->addParameter("displayType", $this->getAttribute($attributes, "displayType"));
		$virtualPage->addParameter("resultsPerPage", $this->getAttribute($attributes, "resultsPerPage"));
		$virtualPage->addParameter("status", $this->getAttribute($attributes, "status"));
		$virtualPage->getContent();
		$content = $virtualPage->getBody();
		$this->enqueueResource->addToFooter($virtualPage->getHead());
		return $content;
	}
	
	public function getQuickSearch($attributes) {
		$remoteRequest = new zipperAgentRequestor();
		if($this->displayRules->isResponsive()) {
			$remoteRequest
				->addParameter("requestType", "listing-search-form")
				->addParameter("smallView", true)
				->addParameter("style", $this->getAttribute($attributes, "style"))
				->addParameter("showPropertyType", $this->getAttribute($attributes, "showPropertyType"))
			;
		} else {
			$remoteRequest
				->addParameter("requestType", "listing-quick-search-form")
			;
		}
		$remoteRequest->setCacheExpiration(60*60);
		// $remoteResponse = $remoteRequest->remoteGetRequest();
		
		/* modified by decz */
		$remoteResponse = $remoteRequest->remoteGetSpecialRequest('quickSearch');
		/* end modified */
		
		$content = $remoteResponse->getBody();
		$this->enqueueResource->addToFooter($remoteResponse->getHead());
		return $content;
	}

	public function getSearchByAddress($attributes) {
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "search-by-address-form")
			->addParameter("smallView", true)
			->addParameter("style", $this->getAttribute($attributes, "style"))
		;
		$remoteRequest->setCacheExpiration(60*60);
		$remoteResponse = $remoteRequest->remoteGetRequest();
		$content = $remoteResponse->getBody();
		$this->enqueueResource->addToFooter($remoteResponse->getHead());
		return $content;
	}

	public function getSearchByListingId($attributes) {
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "search-by-listing-id-form")
			->addParameter("smallView", true)
		;
		$remoteRequest->setCacheExpiration(60*60);
		$remoteResponse = $remoteRequest->remoteGetRequest();
		$content = $remoteResponse->getBody();
		$this->enqueueResource->addToFooter($remoteResponse->getHead());
		return $content;
	}
	
	public function getMapSearch($attributes) {
		zipperAgentStateManager::getInstance()->setLastSearchUrl();
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "map-search-widget")
			->addParameter("width", $this->getAttribute($attributes, "width"))
			->addParameter("height", $this->getAttribute($attributes, "height"))
			->addParameter("centerlat", $this->getAttribute($attributes, "centerlat"))
			->addParameter("centerlong", $this->getAttribute($attributes, "centerlong"))
			->addParameter("address", $this->getAttribute($attributes, "address"))
			->addParameter("zoom", $this->getAttribute($attributes, "zoom"))
		;
		$remoteRequest->setCacheExpiration(60*60);
		// $remoteResponse = $remoteRequest->remoteGetRequest();
		
		/* modified by decz */
		$remoteResponse = $remoteRequest->remoteGetSpecialRequest('getMapSearch');
		/* end modified */
		
		$content = $remoteResponse->getBody();
		$this->enqueueResource->addToFooter($remoteResponse->getHead());
		return $content;
	}

	public function getGallerySlider($attributes) {
		zipperAgentStateManager::getInstance()->setLastSearchUrl();
		$hotSheetId = $this->getAttribute($attributes, "hotSheetId");
		if(empty($hotSheetId)) {
			/**
			 * @deprecated use hotSheetId
			 */
			$hotSheetId = $this->getAttribute($attributes, "id");
		}
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "listing-gallery-slider")
			->addParameter("hid", $hotSheetId)
			->addParameter("width", $this->getAttribute($attributes, "width"))
			->addParameter("height", $this->getAttribute($attributes, "height"))
			->addParameter("rows", $this->getAttribute($attributes, "rows"))
			->addParameter("columns", $this->getAttribute($attributes, "columns"))
			->addParameter("navigation", $this->getAttribute($attributes, "nav"))
			->addParameter("style", $this->getAttribute($attributes, "style"))
			->addParameter("effect", $this->getAttribute($attributes, "effect"))
			->addParameter("auto", $this->getAttribute($attributes, "auto"))
			->addParameter("interval", $this->getAttribute($attributes, "interval"))
			->addParameter("maxResults", $this->getAttribute($attributes, "maxResults"))
			->addParameter("status", $this->getAttribute($attributes, "status"))
			->addParameter("sortBy", $this->getAttribute($attributes, "sortBy"))
			;
		$remoteResponse = $remoteRequest->remoteGetRequest();
		$content = $remoteResponse->getBody();
		$this->enqueueResource->addToFooter($remoteResponse->getHead());
		return $content;
	}
	
	public function getHotSheetReportSignup($attributes) {
		$hotSheetId = $this->getAttribute($attributes, "id");
		$hotSheetReportType = $this->getAttribute($attributes, "reportType");
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "email-signup")
			->addParameter("hotSheetId", $hotSheetId)
			->addParameter("hotSheetReportType", $hotSheetReportType)
		;
		$remoteResponse = $remoteRequest->remoteGetRequest();
		$content = $remoteResponse->getBody();
		$this->enqueueResource->addToFooter($remoteResponse->getHead());
		return $content;
	}
	
	/**
	 * all values in the $attributes array are convered to lowercase
	 */
	private function getAttribute($attributes, $key) {
		return zipperAgentUtility::getInstance()->getVarFromArray($key, $attributes);
	}
	
	/**
	 * used by zipperAgentAdmin to generate shortcode string for community pages
	 */
	public function buildSearchResultsShortcode($cityZip, $propertyType, $bed, $bath, $minPrice, $maxPrice) {
		$result = $this->buildShortcode(self::SEARCH_RESULTS_SHORTCODE, array(
			"cityZip" => $cityZip,
			"propertyType" => $propertyType,
			"bed" => $bed,
			"bath" => $bath,
			"minPrice" => $minPrice,
			"maxPrice" => $maxPrice,
		));
		return $result;
	}
	
	/**
	 * @param string $slug
	 * @param array $attributes
	 * @return string
	 */
	private function buildShortcode($slug, array $attributes) {
		$result = "[";
		$result .= $slug;
		if(is_array($attributes)) {
			foreach($attributes as $name => $value) {
				$result .= " " . $name . "=\"" . $value . "\"";
			}
		}
		$result .= "]";
		return $result;
	}

}