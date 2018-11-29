<?php

class zipperAgentSearchFormVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SEARCH, "Property Search");
	}
	
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH, null);
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH, "homes-for-sale-search");
	}
	
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SEARCH, $default);
	}	
	
	public function getContent() {
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "listing-search-form")
			->addParameter("includeAreaSelectorAreas", false)
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		// echo "<pre>"; print_r( $this->remoteResponse ); echo "</pre>"; die();
		// echo "<pre>"; print_r( $this->remoteResponse = $this->remoteRequest->remoteGetRequest() ); echo "</pre>"; die();
		// echo "<pre>"; print_r( $this->remoteRequest->remoteGetSpecialRequest('searchFormVirtualPage') ); echo "</pre>"; die();
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('searchFormVirtualPage');
		/* end modified codes */
	}
	
}