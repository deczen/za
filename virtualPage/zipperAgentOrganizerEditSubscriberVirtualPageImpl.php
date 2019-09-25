<?php

class zipperAgentOrganizerEditSubscriberVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		// return "Organizer Profile";
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_EDIT_SUBSCRIBER, "Organizer Profile");
	}
	
	/* modified by decz */
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_EDIT_SUBSCRIBER, null);
	}
	
	public function getPermalink() {
		// return "property-organizer-edit-subscriber";
		/* modified by decz */
		return zipperagent_user_slug();
		// return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_EDIT_SUBSCRIBER, "property-organizer-edit-subscriber");
	}
	
	/* modified by decz */
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_EDIT_SUBSCRIBER, $default);
	}	
	
	public function getContent() {
		global $ZaRemoteResponse;
		
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "property-organizer-edit-subscriber")
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('organizerEditSubscriber');
		$ZaRemoteResponse = $this->remoteResponse;
		/* end modified codes */
	}
	
}