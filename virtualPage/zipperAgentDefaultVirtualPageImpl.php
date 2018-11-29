<?php

class zipperAgentDefaultVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_DEFAULT, null);
	}
	
}