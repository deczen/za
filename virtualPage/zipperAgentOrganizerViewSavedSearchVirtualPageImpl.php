<?php

class zipperAgentOrganizerViewSavedSearchVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		// return "Saved Search";
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_VIEW_SAVED_SEARCH, "Saved Search");
	}
	
	/* modified by decz */
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH, null);
	}
	
	public function getPermalink() {
		// return "property-organizer-view-saved-search";
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH, "property-organizer-view-saved-search");
	}
	
	/* modified by decz */
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_VIEW_SAVED_SEARCH, $default);
	}
	
	public function getContent() {
		// zipperAgentStateManager::getInstance()->setLastSearchUrl(); //disabled by decz
		$searchProfileId = zipperAgentUtility::getInstance()->getQueryVar("searchProfileId");
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "property-organizer-view-saved-search")
			->addParameter("searchProfileId", $searchProfileId)
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('OrganizerViewSavedSearch');
		/* end modified codes */
	}
	
}