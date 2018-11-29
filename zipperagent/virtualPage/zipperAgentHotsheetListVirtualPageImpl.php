<?php

class zipperAgentHotsheetListVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_LIST, "Listing Reports");
	}
			
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_LISTING_REPORT, null);
	}
	
	public function getPermalink() {
		return "homes-for-sale-toppicks";
	}

	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_LIST, $default);
	}		
			
	public function getContent() {
		$this->remoteRequest
			->addParameter("requestType", "hotsheet-list")
		;
		$this->remoteRequest->setCacheExpiration(60*60);
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}