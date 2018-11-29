<?php

class zipperAgentOrganizerViewSavedSearchListVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		// return "Saved Search List";
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_VIEW_SAVED_SEARCH_LIST, "Saved Search List");
	}
	
	/* modified by decz */
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH_LIST, null);
	}
	
	public function getPermalink() {
		// return "property-organizer-view-saved-search-list";
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH_LIST, "property-organizer-view-saved-search-list");
	}
	
	/* modified by decz */
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_VIEW_SAVED_SEARCH_LIST, $default);
	}	
			
	public function getContent() {
		$this->remoteRequest
			->addParameter("requestType", "property-organizer-view-saved-search-list")
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('organizerViewSavedSearchList');
		/* end modified codes */
	}
	
}