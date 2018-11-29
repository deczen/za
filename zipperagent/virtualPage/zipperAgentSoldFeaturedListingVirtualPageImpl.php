<?php

class zipperAgentSoldFeaturedListingVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getTitle() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_SOLD_FEATURED, "Sold Properties");
	}

	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SOLD_FEATURED, null);
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SOLD_FEATURED, "sold-featured-listing");
	}

	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_SOLD_FEATURED, $default);
	}	
	
	public function getContent() {
		zipperAgentStateManager::getInstance()->setLastSearchUrl();
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("requestType", "sold-featured-listing")
			->addParameter("includeSearchSummary", true)
		;
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}