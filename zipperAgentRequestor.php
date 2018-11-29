<?php

class zipperAgentRequestor {
	
	private $parameters = array();
	private $cacheExpiration = 0;
	private $remoteResponse;
	
	private $logger;
	private $displayRules;
	private $utility;
	private $stateManager;
	
	/* modified by decz */
	private $single_property;
	/* end modified */
	
	public function __construct() {
		$this->logger = zipperAgentLogger::getInstance();
		$this->displayRules = zipperAgentDisplayRules::getInstance();
		$this->utility = zipperAgentUtility::getInstance();
		$this->stateManager = zipperAgentStateManager::getInstance();
	}
	
	public function remoteGetRequest() {
		
		if($this->isSpam()) {
			wp_die("invalid request 807a");
		}
		
		$requestUrl = $this->getExternalUrl();
		
		//only add user specific info if the request is not cacheable
		if(!$this->isCacheable()) {
			
			//add jsession id to the end of the url
			if($this->displayRules->isResponsive() && $this->stateManager->hasSessionId()) {
				$sessionId = $this->stateManager->getSessionId();
				$requestUrl .= ";jsessionid=" . $sessionId;
			}
			
			//add subscriber id to the reqest parameters
			if($this->stateManager->hasSubscriberId()) {
				$subscriberId = $this->stateManager->getSubscriberId();
				//CF cannot handle multiple parameters with the same case insensitive name
				$this->removeParameter("subscriberId")->removeParameter("subscriberID");
				$this->addParameter("subscriberId", $subscriberId);
			}
			
			//add lead capture id to the reqest parameters
			if($this->stateManager->hasLeadCaptureUserId()) {
				$leadCaptureUserId = $this->stateManager->getLeadCaptureUserId();
				$this->addParameter("leadCaptureId", $leadCaptureUserId);
			}
			
			//if remember me cookie add it to the reqest parameters
			if($this->stateManager->hasRememberMe()) {
				$this->addParameter("rmuser", true);
			}
			
			//add user agent to the reqest parameters
			if($this->stateManager->hasUserAgent()) {
				$userAgent = $this->stateManager->getUserAgent();
				$this->addParameter("uagent", $userAgent);
			}
			
		}
		
		if($this->displayRules->isResponsive()) {
			
		} else {
			$this->addParameter("method", "handleRequest");
			$this->addParameter("viewType", "json");
			$this->addParameter("loadJQuery", false);
			$this->addParameter("includeJQuery", false);
			$this->addParameter("includeJQueryUI", false);
		}
		
		//add authentication token to the reqest parameters
		$authenticationToken = zipperAgentAdmin::getInstance()->getAuthenticationToken();
		$this->addParameter("authenticationToken", $authenticationToken);
		
		$this->addParameter("version", zipperAgentConstants::VERSION);
		
		$this->addParameter("leadCaptureSupport", true);
		$this->addParameter("phpStyle", true);
		
		$requestUrl = $this->utility->buildUrl($requestUrl, $this->getParameters());
		
		$zaid = zipperAgentUrlFactory::getInstance()->getBaseUrl() . ";" . "WordpressPlugin";
		$zaUserInfo = "WordPress/" . get_bloginfo("version") . "; " . zipperAgentUrlFactory::getInstance()->getBaseUrl();
		//Modified user-agent in the request header to pass original user-agent. This information is used to determine if request came from mobile devices.
		
		$requestArgs = array(
			"timeout" => "200",
			"zaid" => $zaid,
			"zaUserInfo" => $zaUserInfo,
			"sslverify" => false,
		);
		
		if(isset($userAgent)) {
			$requestArgs["user-agent"] = $userAgent;
		}
		
		$response = null;
		if($this->isCacheable()) {
			$response = zipperAgentCacheUtility::getInstance()->getItem($requestUrl);
		}
		
		if($response === null) {
			$this->logger->debug("zaUrl: " . $requestUrl);
			$this->logger->debug($requestArgs);
			$this->logger->debug("before request");
			$response = wp_remote_get($requestUrl, $requestArgs);
			$this->logger->debug("after request");
			$this->logger->debug($response);
			if(!is_wp_error($response) && $this->isCacheable() && $response["response"]["code"] < 400) {
				zipperAgentCacheUtility::getInstance()->updateItem($requestUrl, $response, $this->getCacheExpiration());
			}
		}
		
		if(!is_wp_error($response)) {
			$responseBody = wp_remote_retrieve_body($response);
			$contentType = wp_remote_retrieve_header($response, "content-type");
			if($contentType !== null && $contentType == "text/xml;charset=UTF-8") {
				$responseBodyObject = simplexml_load_string($responseBody, null, LIBXML_NOCDATA);
			} else {
				$responseBodyObject = json_decode($responseBody);
			}
			$this->remoteResponse = new zipperAgentRemoteResponse($responseBodyObject);
			if($response["response"]["code"] >= 400) {
				//This is specifically for listings that are not found. We set response status to "404 not found".
				if($response["response"]["code"] == 404) {
					global $wp_query;
					$wp_query->set_404();
					status_header(404);
					nocache_headers();
				}
			}
		}
		
		if(is_object($this->remoteResponse) && !$this->remoteResponse->hasError() && !$this->isCacheable()) {
			
			if($this->remoteResponse->hasLeadCaptureUserId()) {
				$this->stateManager->setLeadCaptureUserId($this->remoteResponse->getLeadCaptureUserId());
			}
			
			if($this->remoteResponse->hasSessionId()) {
				$sessionId = $this->remoteResponse->getSessionId();
				$this->stateManager->setSessionId($sessionId);
			}
			
			if($this->remoteResponse->hasListingInfo()) {
				$listingInfo = $this->remoteResponse->getListingInfo();
				$listingNumber = null;
				$listingAddress = null;
				$boardId = null;
				$clientPropertyId = null;
				$sold = false;
				if(property_exists($listingInfo, "listingNumber") && property_exists($listingInfo, "boardId")) {
					$listingNumber = $listingInfo->listingNumber;
					$boardId = $listingInfo->boardId;
					if(property_exists($listingInfo, "clientPropertyId")) {
						$clientPropertyId = $listingInfo->clientPropertyId;
					}
					if(property_exists($listingInfo, "listingAddress")) {
						$listingAddress = $listingInfo->listingAddress;
					}
					if(property_exists($listingInfo, "sold")) {
						$sold = $listingInfo->sold;
					}
					$listingInfo = new zipperAgentListingInfo($listingNumber, $boardId, $listingAddress, $clientPropertyId, $sold);
					$this->stateManager->setListingInfo($listingInfo);
				}
			}
				
			if($this->remoteResponse->hasSubscriberId()) {
				$subscriberId = $this->remoteResponse->getSubscriberId();
				$this->stateManager->setSubscriberId($subscriberId);
			}
			
			if($this->remoteResponse->hasSearchSummary()) {
				$searchSummary = $this->remoteResponse->getSearchSummary();
				$this->stateManager->setSearchSummary($searchSummary);
			}
			
		}
			
		return $this->remoteResponse;
	}
	
	/**
	 * Modified by Decz
	 */
	
	public function setSingleLuxury( $single_luxury ){
		$this->single_luxury = $single_luxury;
	}
	
	public function setSingleProperty( $single_property ){
		$this->single_property = $single_property;
	}
	
	/* end modified */
	
	public function remoteGetSpecialRequest($page=''){
		
		global $requests, $type, $zpa_show_login_popup;
		
		//show popup on all zipperagent pages
		$zpa_show_login_popup=1;
		
		$requests = $_REQUEST;
		
		switch( $page ){
			
			case "searchFormVirtualPage":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-searchFormVirtualPage.php";
					$html=ob_get_clean();
				break;
				
			case "AdvancedSearchFormVirtualPage":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-advancedSearchFormVirtualPage.php";
					$html=ob_get_clean();
				break;
				
			case "searchResultsVirtualPage":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					if(!isset($requests['boundaryWKT']) && !isset($requests['boundarywkt'])){ //default
						include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage.php";
					}else{ //map search		
						$type='map';
						include ZIPPERAGENTPATH . "/custom/templates/template-searchWithFilter2.php";
					}					
					$html=ob_get_clean();					
					break;
					
			case "featuredSearchVirtualPage":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-featuredSearchVirtualPage.php";
					$html=ob_get_clean();
				break;
				
			case "openHomeSearchFormVirtualPage":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-openHomeSearchFormVirtualPage.php";
					$html=ob_get_clean();					
				break;
				
			case "listingDetail":			
					global $single_property;					
					$single_property = $this->single_property;					
					ob_start();	
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-customSingleProperty.php";
					$html=ob_get_clean();					
				break;
				
			case "luxuryDetail":			
					global $single_luxury, $single_property;					
					$single_luxury = $this->single_luxury;					
					$single_property = $this->single_property;					
					ob_start();		
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-customLuxuryDetail.php";
					$html=ob_get_clean();					
				break;
				
			case "OrganizerLoginForm":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-organizerLoginForm.php";
					$html=ob_get_clean();					
				break;
				
			case "organizerEditSubscriber":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-organizerEditSubscriber.php";
					$html=ob_get_clean();					
				break;
				
			case "organizerViewSavedSearchList":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedSearchList.php";
					$html=ob_get_clean();					
				break;
				
			case "OrganizerViewSavedSearch":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-customOrganizerViewSavedSearch.php";
					$html=ob_get_clean();					
				break;
				
			case "OrganizerDeleteSavedSearch":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-organizerDeleteSavedSearch.php";
					$html=ob_get_clean();					
				break;
				
			case "OrganizerEditSavedSearch":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-organizerEditSavedSearch.php";
					$html=ob_get_clean();					
				break;
				
			case "OrganizerViewSavedListingList":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedListingList.php";
					$html=ob_get_clean();					
				break;
			case "OrganizerDeleteSavedListing":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-organizerDeleteSavedListing.php";
					$html=ob_get_clean();					
				break;
				
			case "organizerLogout":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-organizerLogout.php";
					$html=ob_get_clean();					
				break;
				
			case "mapSearch":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-mapSearch.php";
					$html=ob_get_clean();					
				break;
				
			case "getMapSearch":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-mapSearch.php";
					$html=ob_get_clean();					
				break;
				
			case "quickSearch":
					ob_start();
					include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
					include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch.php";
					$html=ob_get_clean();
				break;
		}
		
		$responseBodyObject=(object) array(
			'variables' => (object) array( 0=> '' ),
			'view' => $html,					   
			'excerpt' => (object)array(),
			'head' => '',      
			'metatags' => (object) array( 0=> '' ),
			'json' => (object)array(),
			'leadCaptureId' => 0,
			'zaSessionId' => 0,
			'searchContext' => true,
			'listingInfo' => (object) array( 0=> '' ),
			'title' => 'Property Search',
			'css' => (object) array(
					'item' => (object) array(												
							'name' => 'za-bundle-css',
							'url' => 'http://www.idxhome.com/service/resources/dist/wordpress/bundle.css'
						)
					),
			'javascript' => (object) array(
								'item' => (object) array(
									'name' => 'za-bundle-js',
									'url' => 'http://www.idxhome.com/service/resources/dist/wordpress/bundle.js'
								)
							),
			'sitemap' => (object) array( 0=> '' ),

		);
		
		$this->remoteResponse = new zipperAgentRemoteResponse($responseBodyObject);
		
		//clear request
		unset($requests);
		
		return $this->remoteResponse;
	} 
	
	/**
	 * only used for registration
	 */
	public function remotePostRequest() {
		
		$requestUrl = $this->getExternalUrl();
		$zaid = zipperAgentUrlFactory::getInstance()->getBaseUrl() . ";" . "WordpressPlugin";
		$zaUserInfo = "WordPress/" . get_bloginfo("version") . "; " . zipperAgentUrlFactory::getInstance()->getBaseUrl();
		//Modified user-agent in the request header to pass original user-agent. This information is used to determine if request came from mobile devices.
		
		$userAgent = $_SERVER["HTTP_USER_AGENT"];
		if($userAgent !== null) {
			$userAgent = urlencode($userAgent);
		}
		
		$this->addParameter("version", zipperAgentConstants::VERSION);
		$this->addParameter("method", "handleRequest");
		$this->addParameter("viewType", "json");
		$this->addParameter("phpStyle", true);
		
		$requestArgs = array(
			"timeout" => "200",
			"body" => $this->getParameters(),
			"zaid" => $zaid,
			"zaUserInfo" => $zaUserInfo,
			"user-agent" => $userAgent,
			"sslverify" => false,
		);
		
		$this->logger->debug("zaUrl: " . $requestUrl);
		$this->logger->debug($requestArgs);
		$this->logger->debug("before request");
		$response = wp_remote_post($requestUrl, $requestArgs);
		$this->logger->debug("after request");
		$this->logger->debug($response);
		
		if(!is_wp_error($response)) {
			$responseBody = wp_remote_retrieve_body($response);
			if($response["response"]["code"] >= 400) {
				$responseBodyObject = new stdClass();
				$responseBodyObject->view = $responseBody;
			} else {
				$contentType = wp_remote_retrieve_header($response, "content-type");
				if($contentType !== null && $contentType == "text/xml;charset=UTF-8") {
					$responseBodyObject = simplexml_load_string($responseBody, null, LIBXML_NOCDATA);
					$responseBodyObject = json_decode(json_encode($responseBodyObject));
				} else {
					$responseBodyObject = json_decode($responseBody);
				}
			}
			$this->remoteResponse = new zipperAgentRemoteResponse($responseBodyObject);
		}
			
		return $this->remoteResponse;
	}
	
	public function hasParameter($name) {
		$result = false;
		if(array_key_exists($name, $this->parameters)) {
			$result = true;
		}
		return $result;
	}
	
	public function addParameter($name, $value) {
		$this->parameters[$name] = $value;
		return $this;
	}
	
	public function removeParameter($name) {
		if($this->hasParameter($name)) {
			unset($this->parameters[$name]);
		}
		return $this;
	}
	
	public function addParameters($parameters) {
		if(is_array($parameters)) {
			foreach($parameters as $name => $value) {
				$this->addParameter($name, $value);
			}
		}
		return $this;
	}
	
	public function getParameters() {
		return $this->parameters;
	}
	
	public function setCacheExpiration($cacheExpiration) {
		$this->cacheExpiration = $cacheExpiration;
	}
	
	public function getCacheExpiration() {
		return $this->cacheExpiration;
	}
	
	public function isCacheable() {
		$result = false;
		if(is_int($this->cacheExpiration) && $this->cacheExpiration > 0) {
			$result = true;
		}
		return $result;
	}
	
	public function getRemoteResponse() {
		return $this->remoteResponse;
	}
	
	private function isSpam() {
		$spam = false;
		$honeyPotValue = $this->utility->getRequestVar("JKGH00920");
		if(!empty($honeyPotValue)) {
			$spam = true;
		}
		return $spam;
	}
	
	private function getExternalUrl() {
		$result = null;
		$scheme = "http";
		if(is_ssl()) {
			$scheme = "https";
		}
		$result .= $scheme . "://";
		if(zipperAgentDisplayRules::getInstance()->isResponsive()) {
			$result .= zipperAgentConstants::RESPONSIVE_EXTERNAL_URL;
		} else {
			$result .= zipperAgentConstants::LEGACY_EXTERNAL_URL;
		}
		return $result;
	}
	
}