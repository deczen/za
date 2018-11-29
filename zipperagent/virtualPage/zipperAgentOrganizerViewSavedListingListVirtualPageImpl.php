<?php

class zipperAgentOrganizerViewSavedListingListVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		// return "Saved Listing List";
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_SAVED_LISTINGS, "Saved Listing List");
	}
	
	/* modified by decz */
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_SAVED_LISTINGS, null);
	}
	
	public function getPermalink() {
		// return "property-organizer-saved-listings";
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_SAVED_LISTINGS, "property-organizer-saved-listings");
	}
	
	/* modified by decz */
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_SAVED_LISTINGS, $default);
	}
	
	public function getContent() {
		zipperAgentStateManager::getInstance()->setLastSearchUrl();
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "property-organizer-view-saved-listing-list")
			->addParameter("includeSearchSummary", true)
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('OrganizerViewSavedListingList');
		/* end modified codes */
	}
	
}