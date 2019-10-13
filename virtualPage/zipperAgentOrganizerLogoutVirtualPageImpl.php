<?php

class zipperAgentOrganizerLogoutVirtualPageImpl extends zipperAgentAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		// return "Organizer Login";
		
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_LOGOUT, "Organizer Login");
	}
	
	public function getPermalink() {
		// return "property-organizer-logout";
		
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGOUT, "property-organizer-logout");
	}
	
	/* modified by decz */
	public function getMetaTags() {
		$default = "<meta name=\"description\" content=\"\" />\n";
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_LOGOUT, $default);
	}	
	
	/* modified by decz */
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGOUT, null);
	}
	
	public function getContent() {
		global $ZaRemoteResponse;
		
		/**
		 * For responsive layout we need to kill the session for subscriber on java servers
		 * Where as for legacy layout we need to kill session stored locally on wordpress servers
		 */
		if(zipperAgentDisplayRules::getInstance()->isResponsive()) {
			/* zipperAgentStateManager::getInstance()->removeRememberMe(); */ //disabled by decz
			$this->remoteRequest
				->addParameter("requestType", "property-organizer-logout")
			;
			// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
			
			/* Modified by Decz */
			$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('organizerLogout');
			$ZaRemoteResponse = $this->remoteResponse;
			/* end modified codes */
		}
	}
	
	public function getBody() {
		if(zipperAgentDisplayRules::getInstance()->isResponsive()) {
			$body = $this->remoteResponse->getBody();
		} else {
			zipperAgentStateManager::getInstance()->removeSubscriberId();
			$redirectUrl = zipperAgentUrlFactory::getInstance()->getOrganizerLoginUrl(true); 
			$body = "<meta http-equiv=\"refresh\" content=\"0;url=" . $redirectUrl . "\">";
		}
		return $body;
	}

}