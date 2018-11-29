<?php

class zipperAgentOrganizerEditSavedSearchFormVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_EMAIL_UPDATES, "Email Alerts");
	}

	public function getPageTemplate() {
		$pageTemplate = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_EMAIL_UPDATES, null);
		return $pageTemplate;
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_EMAIL_UPDATES, "email-alerts");
	}
	
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_EMAIL_UPDATES, $default);
	}
	
	public function getContent() {
		$utility = zipperAgentUtility::getInstance();
		$boardId = $utility->getQueryVar("boardId");
		$lastSearch = zipperAgentStateManager::getInstance()->getLastSearch();
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameters($lastSearch)
			->addParameter("requestType", "property-organizer-edit-saved-search-form")
			->addParameter("boardId", $boardId)
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('OrganizerEditSavedSearch');
		/* end modified codes */
	}
			
}