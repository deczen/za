<?php

class zipperAgentOrganizerEditSavedSearchVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		return "Saved Search List";
	}
	
	public function getPermalink() {
		return "property-organizer-edit-saved-search-submit";
	}
	
	public function getContent() {
		//searchProfileName is used only in fixed width
		$searchProfileName = zipperAgentUtility::getInstance()->getQueryVar("searchProfileName");
		if(!empty($searchProfileName)) {
			$this->remoteRequest->addParameter("name", $searchProfileName);
		}
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "property-organizer-edit-saved-search-submit")
		;
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
	public function getBody() {
		$body = $this->remoteResponse->getBody();
		if(!zipperAgentDisplayRules::getInstance()->isResponsive()) {
			if(zipperAgentStateManager::getInstance()->hasSubscriberId()) {
				$redirectUrl = zipperAgentUrlFactory::getInstance()->getOrganizerViewSavedSearchListUrl(true);
			} else {
				$redirectUrl = zipperAgentUrlFactory::getInstance()->getOrganizerEmailUpdatesConfirmationUrl(true);
			}
			//redirect to the list of saved searches to avoid double posting the request
			$body = "<meta http-equiv=\"refresh\" content=\"0;url=" . $redirectUrl . "\">";
		}
		return $body;
	}
	
}