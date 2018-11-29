<?php

class zipperAgentOpenHomeSearchFormVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_OPEN_HOME_SEARCH_FORM, "Open Home Search");
	}
	
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_OPEN_HOME_SEARCH_FORM, null);
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OPEN_HOME_SEARCH_FORM, "open-home-search");
	}

	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_OPEN_HOME_SEARCH_FORM, $default);
	}	
	
	public function getContent() {
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "open-home-search-form")
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('openHomeSearchFormVirtualPage');
		/* end modified codes */
	}
	
}