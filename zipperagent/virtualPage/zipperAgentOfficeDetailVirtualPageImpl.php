<?php

class zipperAgentOfficeDetailVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		$default = null;
		if(zipperAgentDisplayRules::getInstance()->supportsSeoVariables()) {
			$default = "{officeName}";
		} elseif(is_object($this->remoteResponse) && $this->remoteResponse->hasTitle()) {
			$default = $this->remoteResponse->getTitle();
		}
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_OFFICE_DETAIL, $default);
	}

	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_OFFICE_DETAIL, null);
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OFFICE_DETAIL, "office-detail");
	}
	
	public function getAvailableVariables() {
		$variableUtility = zipperAgentVariableUtility::getInstance();
		return array(
			$variableUtility->getOfficeName()
		);
	}

	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_OFFICE_DETAIL, $default);
	}	
	
	public function getContent() {
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "office-detail")
		;
		$officeId = zipperAgentUtility::getInstance()->getQueryVar("officeId");
		if(is_numeric($officeId)) {
			$this->remoteRequest->addParameter("officeID", $officeId);
		}
		$this->remoteRequest->setCacheExpiration(60*60);
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}