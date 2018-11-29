<?php

class zipperAgentHotSheetListingReportVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		$default = null;
		if(zipperAgentDisplayRules::getInstance()->supportsSeoVariables()) {
			$default = "{savedSearchName}: Listing Report";
		} elseif(is_object($this->remoteResponse) && $this->remoteResponse->hasTitle()) {
			$default = $this->remoteResponse->getTitle();
		}
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_LISTING_REPORT, $default);
	}

	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_LISTING_REPORT, null);
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_LISTING_REPORT, "listing-report");
	}
	
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"{savedSearchDescription}\" />";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_LISTING_REPORT, $default);
	}
	
	public function getAvailableVariables() {
		$variableUtility = zipperAgentVariableUtility::getInstance();
		return array(
			$variableUtility->getSavedSearchName(),
			$variableUtility->getSavedSearchDescription()
		);
	}
	
	public function getContent() {
		zipperAgentStateManager::getInstance()->setLastSearchUrl();
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "hotsheet-results")
			->addParameter("includeSearchSummary", true)
		;
		$hotSheetId = zipperAgentUtility::getInstance()->getQueryVar("savedSearchId");
		if(!empty($hotSheetId)) {
			$this->remoteRequest->addParameter("hotSheetId", $hotSheetId);
		}
		$title = $this->getTitle();
		if(empty($title)) {
			$this->remoteRequest->addParameter("includeDisplayName", false);
		}
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}