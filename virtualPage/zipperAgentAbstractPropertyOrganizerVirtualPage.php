<?php

class zipperAgentAbstractPropertyOrganizerVirtualPage extends zipperAgentAbstractVirtualPage {
	
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGIN, null);
	}
	
}