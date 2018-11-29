<?php

class zipperAgentOrganizerEmailUpdatesConfirmationVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		return "Email Updates Confirmation";
	}	
	
	public function getPermalink() {
		return "email-updates-confirmation";
	}

	public function getContent() {
		$message = zipperAgentUtility::getInstance()->getQueryVar("message");
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "property-organizer-email-updates-confirmation")
			->addParameter("message", $message)
		;
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
		
}
