<?php

class zipperAgentSearchResultsVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SEARCH_RESULTS, "Property Search Results");
	}
	
	/* modified by decz */
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH_RESULTS, null);
	}
	
	public function getPermalink() {
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH_RESULTS, "homes-for-sale-results");
	}
	
	/* modified by decz */
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SEARCH_RESULTS, $default);
	}	
			
	public function getContent() {
		$displayRules = zipperAgentDisplayRules::getInstance();
		$stateManager = zipperAgentStateManager::getInstance();
		$stateManager->setLastSearchUrl();
		//use a different requestType depending on the search
		$requestType = "listing-search-results";
		if($displayRules->isSearchByListingIdEnabled() && $stateManager->isListingIdResults()) {
			$requestType = "results-by-listing-id";
		}
		if($displayRules->isSearchByAddressEnabled() && $stateManager->isListingAddressResults()) {
			$requestType = "results-by-address";
		}
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", $requestType)
			->addParameter("includeSearchSummary", true)
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('searchResultsVirtualPage');
		/* end modified codes */
	}
	
}