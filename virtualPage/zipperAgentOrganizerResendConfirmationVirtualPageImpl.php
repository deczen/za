<?php

class zipperAgentOrganizerResendConfirmationVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		return "Resend Confirmation Email";
	}
	
	public function getPermalink() {
		return "property-organizer-resend-confirmation-email";
	}
	
	public function getContent() {
		$email = zipperAgentUtility::getInstance()->getRequestVar("email");
		$afterLoginUrl = zipperAgentUtility::getInstance()->getRequestVar("afterLoginUrl");
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "property-organizer-resend-confirm-email")
		;
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}