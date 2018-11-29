<?php

class zipperAgentOrganizerDeleteSavedSearchVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		return "Saved Search List";
	}
	
	public function getPermalink() {
		return "property-organizer-delete-saved-search-submit";
	}

	public function getContent() {
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "property-organizer-delete-saved-search-submit")
		;
		$searchProfileId = zipperAgentUtility::getInstance()->getQueryVar("searchProfileId");
		if(empty($searchProfileId)) {
			$searchProfileId = zipperAgentUtility::getInstance()->getRequestVar("searchProfileId");
		}
		$this->remoteRequest->addParameter("searchProfileId", $searchProfileId);
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('OrganizerDeleteSavedSearch');
		/* end modified codes */
	}
	
}