<?php

class zipperAgentAgentDetailVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		$default = null;
		if(zipperAgentDisplayRules::getInstance()->supportsSeoVariables()) {
			$default = "{agentName}, {agentDesignation}";
		} elseif(is_object($this->remoteResponse) && $this->remoteResponse->hasTitle()) {
			$default = $this->remoteResponse->getTitle();
		}
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_AGENT_DETAIL, $default);
	}

	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_AGENT_DETAIL, null);
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_AGENT_DETAIL, "agent-detail");
	}
	
	public function getAvailableVariables() {
		$variableUtility = zipperAgentVariableUtility::getInstance();
		return array(
			$variableUtility->getAgentName(),
			$variableUtility->getAgentDesignation()
		);
	}

	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_AGENT_DETAIL, $default);
	}	
	
	public function getContent() {
		zipperAgentStateManager::getInstance()->setLastSearchUrl();
		$this->remoteRequest
			->addParameter("requestType", "agent-detail")
			->addParameter("includeSearchSummary", false)
		;
		if(!$this->remoteRequest->hasParameter("agentID")) {
			$agentId = zipperAgentUtility::getInstance()->getQueryVar("agentId");
			$this->remoteRequest->addParameter("agentID", $agentId);
		}
		$this->remoteRequest->setCacheExpiration(60*60);
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}