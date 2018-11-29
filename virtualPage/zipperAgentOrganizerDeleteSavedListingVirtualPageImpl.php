<?php

class zipperAgentOrganizerDeleteSavedListingVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		return "Saved Listing List";
	}

	public function getPermalink() {
		return "property-organizer-delete-saved-listing-submit";
	}	
	
	public function getContent() {
		$savedListingId = zipperAgentUtility::getInstance()->getQueryVar("savedListingId");
		$this->remoteRequest
			->addParameter("requestType", "property-organizer-delete-saved-listing-submit")
			->addParameter("savedListingId", $savedListingId)
		;
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('OrganizerDeleteSavedListing');
		/* end modified codes */
	}
	
}