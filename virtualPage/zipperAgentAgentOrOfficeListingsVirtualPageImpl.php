<?php

class zipperAgentAgentOrOfficeListingsVirtualPageImpl extends zipperAgentAbstractVirtualPage {
			
	public function getContent() {
		zipperAgentStateManager::getInstance()->setLastSearchUrl();
		$this->remoteRequest
			->addParameter("requestType", "agent-or-office-listings")
		;
		if(!$this->remoteRequest->hasParameter("agentId")) {
			$agentId = zipperAgentUtility::getInstance()->getRequestVar("agentId");
			$this->remoteRequest->addParameter("agentId", $agentId);
		}
		if(!$this->remoteRequest->hasParameter("officeId")) {
			$officeId = zipperAgentUtility::getInstance()->getRequestVar("officeId");
			$this->remoteRequest->addParameter("officeId", $officeId);
		}
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}