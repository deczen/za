<?php

class zipperAgentMapSearchVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_MAP_SEARCH, "Map Search");
	}

	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_MAP_SEARCH, null);
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_MAP_SEARCH, "homes-for-sale-map-search");
	}
	
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_MAP_SEARCH, $default);
	}		
	
	public function getContent() {
		// zipperAgentStateManager::getInstance()->setLastSearchUrl(); //modified by decz
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "map-search-widget")
			->addParameter("height", 500)
		;
		if(!zipperAgentDisplayRules::getInstance()->supportsMapSearchWithMultipleWidths()) {
			$this->remoteRequest->addParameter("width", 595);
		}
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('mapSearch');
		/* end modified codes */
	}
	
}