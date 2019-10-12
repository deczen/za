<?php

class zipperAgentAdmin {

	private static $instance;
	private $utility;
	private $displayRules;
	
	private function __construct() {
		$this->utility = zipperAgentUtility::getInstance();
		$this->displayRules = zipperAgentDisplayRules::getInstance();
	}

	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function checkError() {
		
		$pageName = $this->utility->getRequestVar("page");
		
		//Check for valid plugin registration
		//Do not check for registration on the registration page.
		if($pageName !== zipperAgentConstants::PAGE_ACTIVATE && !$this->isActivated()) {
			/* ?>
			<div id="za-main-container">
				<p class="za-green-bar">
					<a href="admin.php?page=<?php echo zipperAgentConstants::PAGE_ACTIVATE ?>" class="button button-primary">Activate Your ZipperAgent Account</a>
					&nbsp;&nbsp;&nbsp;Get an unlimited free trial or paid subscription for your MLS
				</p>
			</div>
			<?php */
		}
		
		if(get_option(zipperAgentConstants::COMPATIBILITY_CHECK_ENABLED, true) !== "false") {
			$errors = array();
			//check if permalink structure is set
			$permalinkStructure = get_option("permalink_structure", null);
			if(empty($permalinkStructure)) {
				$errors[] = "<a href=\"" . admin_url("options-permalink.php") . "\">WordPress permalink settings are set as default (Error 404)</a>";
			}
			$remoteRequest = new zipperAgentRequestor();
			$remoteRequest
				->addParameter("requestType", "compatibility-check")
			;
			$remoteRequest->setCacheExpiration(60*60*24);
			$remoteResponse = $remoteRequest->remoteGetRequest();
			if(!empty($remoteResponse)) {
				$content = null;
				if($this->displayRules->isResponsive()) {
					$content = (string) $remoteResponse->getJson();
				} else {
					$content = json_encode($remoteResponse->getResponse());
				}
				if(!empty($content)) {
					$compatibility = json_decode($content, true);
					if(!empty($compatibility) && is_array($compatibility)) {
						//check plugins
						if(array_key_exists("Plugin", $compatibility)) {
							$incompatiblePlugins = $compatibility["Plugin"];
							if(is_array($incompatiblePlugins)) {
								$plugins = get_plugins();
								foreach($plugins as $pluginPath => $plugin) {
									if(is_plugin_active($pluginPath)) {
										$pluginName = $plugin["Name"];
										if(array_key_exists($pluginName, $incompatiblePlugins)) {
											$message = $incompatiblePlugins[$pluginName];
											if($message !== null) {
												$errors[] = "<a href=\"" . admin_url("plugins.php") . "?s=" . urlencode($pluginName) . "\">" . $pluginName . "</a> (" . $message . ")";
											}
										}
									}
								}
							}
						}
						//check theme
						if(array_key_exists("Theme", $compatibility)) {
							$theme = wp_get_theme();
							$themeName = $theme->get("Name");
							$incompatibleThemes = $compatibility["Theme"];
							if(is_array($incompatibleThemes) && array_key_exists($themeName, $incompatibleThemes)) {
								$message = $incompatibleThemes[$themeName];
								if($message !== null) {
									$errors[] = "<a href=\"" . admin_url("themes.php") . "\">" . $themeName . "</a> (" . $message . ")";
								}
							}
						}
					}
				}
			}
			if($this->utility->isDatabaseCached()) {
				$errors[] = "Database caching is enabled, which prevents updated IDX results from displaying.";
			}
			//check error count
			if(count($errors) > 0) {
				?>
				<div class="error">
					<h4 style="float: left;">
						<?php echo count($errors) ?> compatibility issue<?php if(count($errors) > 1) { ?>s<?php } ?>
					</h4>
					<form style="float: right; margin-top: 5px; display: none;" method="post" action="options.php">
						<?php settings_fields(zipperAgentConstants::OPTION_GROUP_COMPATIBILITY_CHECK); ?>
						<input type="hidden" value="false" name="<?php echo zipperAgentConstants::COMPATIBILITY_CHECK_ENABLED; ?>" />
						<button class="button-secondary" type="submit">Dismiss compatibility warnings</button>
					</form>
					<div style="clear: both;">
						<?php foreach($errors as $error) { ?>
							<p>
								<?php echo $error; ?>
							</p>
						<?php } ?>
					</div>
				</div>
				<?php
			}
		}
	}

	public function createAdminMenu() {
		$displayRules = zipperAgentDisplayRules::getInstance();
		
		/* Menu name is adjusted by decz */
		// add_menu_page("Zipperagent", "Zipperagent", "manage_options", zipperAgentConstants::PAGE_INFORMATION, array(zipperAgentAdminInformation::getInstance(), "getPage"));
		add_menu_page("Zipperagent", "Zipperagent", "manage_options", zipperAgentConstants::PAGE_CONFIGURATION, array(zipperAgentAdminConfiguration::getInstance(), "getPage"), ZIPPERAGENTURL . 'img/za-icon.svg');
		
		/* Menu Community Pages is disabled by decz */
		// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "Information", "Information", "manage_options", zipperAgentConstants::PAGE_INFORMATION, array(zipperAgentAdminInformation::getInstance(), "getPage"));
		add_submenu_page(zipperAgentConstants::PAGE_CONFIGURATION, "Configuration", "Configuration", "manage_options", zipperAgentConstants::PAGE_CONFIGURATION, array(zipperAgentAdminConfiguration::getInstance(), "getPage"));
		
		
		/* Menu register is disabled by decz */
		// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "Register", "Register", "manage_options", zipperAgentConstants::PAGE_ACTIVATE, array(zipperAgentAdminActivate::getInstance(), "getPage"));
		
		if($this->isActivated()) {
			// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "IDX Control Panel", "IDX Control Panel", "manage_options", zipperAgentConstants::PAGE_IDX_CONTROL_PANEL, array(zipperAgentAdminControlPanel::getInstance(), "getPage"));
			add_submenu_page(zipperAgentConstants::PAGE_CONFIGURATION, "IDX Control Panel", "IDX Control Panel", "manage_options", zipperAgentConstants::PAGE_IDX_CONTROL_PANEL, array(zipperAgentAdminControlPanel::getInstance(), "getPage"));
		}
		// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "IDX Pages", "IDX Pages", "manage_options", zipperAgentConstants::PAGE_IDX_PAGES, array(zipperAgentAdminPageConfig::getInstance(), "getPage"));
		add_submenu_page(zipperAgentConstants::PAGE_CONFIGURATION, "IDX Pages", "IDX Pages", "manage_options", zipperAgentConstants::PAGE_IDX_PAGES, array(zipperAgentAdminPageConfig::getInstance(), "getPage"));
		/* Menu Configuration is disabled by decz */
		// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "Configuration", "Configuration", "manage_options", zipperAgentConstants::PAGE_CONFIGURATION, array(zipperAgentAdminConfiguration::getInstance(), "getPage"));
		if($displayRules->isAgentBioWidgetEnabled()) {
			// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "Bio Widget", "Bio Widget", "manage_options", zipperAgentConstants::PAGE_BIO, array(zipperAgentAdminBio::getInstance(), "getPage"));
			add_submenu_page(zipperAgentConstants::PAGE_CONFIGURATION, "Bio Widget", "Bio Widget", "manage_options", zipperAgentConstants::PAGE_BIO, array(zipperAgentAdminBio::getInstance(), "getPage"));
		}
		if($displayRules->isSocialEnabled()) {
			// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "Social Widget", "Social Widget", "manage_options", zipperAgentConstants::PAGE_SOCIAL, array(zipperAgentAdminSocial::getInstance(), "getPage"));
			add_submenu_page(zipperAgentConstants::PAGE_CONFIGURATION, "Social Widget", "Social Widget", "manage_options", zipperAgentConstants::PAGE_SOCIAL, array(zipperAgentAdminSocial::getInstance(), "getPage"));
		}
		/* Menu Email Branding is disabled by decz */
		// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "Email Branding", "Email Branding", "manage_options", zipperAgentConstants::PAGE_EMAIL_BRANDING, array(zipperAgentAdminEmail::getInstance(), "getPage"));
		if($displayRules->isCommunityPagesEnabled()) {
			/* Menu Community Pages is disabled by decz */
			// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "Community Pages", "Community Pages", "manage_options", zipperAgentConstants::PAGE_COMMUNITY_PAGES, array(zipperAgentAdminCommunityPages::getInstance(), "getPage"));
		}
		if($displayRules->isSeoCityLinksEnabled()) {
			/* Menu SEO City Links is disabled by decz */
			// add_submenu_page(zipperAgentConstants::PAGE_INFORMATION, "SEO City Links", "SEO City Links", "manage_options", zipperAgentConstants::PAGE_SEO_CITY_LINKS, array(zipperAgentAdminSeoCityLinks::getInstance(), "getPage"));
		}
	}
	
	/**
	 * Create register option groups and associated options.
	 * Later use settings_fields in the forms to populate the options.
	 */
	public function registerSettings() {
		//compatibility check shows on all dashboard pages
		register_setting(zipperAgentConstants::OPTION_GROUP_COMPATIBILITY_CHECK, zipperAgentConstants::COMPATIBILITY_CHECK_ENABLED);
		//admin pages
		// zipperAgentAdminActivate::getInstance()->registerSettings(); //disabled by decz
		zipperAgentAdminPageConfig::getInstance()->registerSettings();
		zipperAgentAdminConfiguration::getInstance()->registerSettings();
		// zipperAgentAdminBio::getInstance()->registerSettings(); //disabled by decz
		// zipperAgentAdminSocial::getInstance()->registerSettings(); //disabled by decz
		// zipperAgentAdminEmail::getInstance()->registerSettings(); //disabled by decz
		// zipperAgentAdminSeoCityLinks::getInstance()->registerSettings(); //disabled by decz
	}
	
	public function addScripts() {
		$pages = array(
			zipperAgentConstants::PAGE_INFORMATION,
			zipperAgentConstants::PAGE_ACTIVATE,
			zipperAgentConstants::PAGE_IDX_CONTROL_PANEL,
			zipperAgentConstants::PAGE_IDX_PAGES,
			zipperAgentConstants::PAGE_CONFIGURATION,
			zipperAgentConstants::PAGE_BIO,
			zipperAgentConstants::PAGE_SOCIAL,
			zipperAgentConstants::PAGE_EMAIL_BRANDING,
			zipperAgentConstants::PAGE_COMMUNITY_PAGES,
			zipperAgentConstants::PAGE_SEO_CITY_LINKS
		);
		if(array_key_exists("page", $_GET)) {
			$page = $_GET["page"];
			$result = array_search($page, $pages);
			if($result !== false && $result >= 0) {
				wp_enqueue_script("jquery");
				wp_enqueue_script("jquery-ui-core");
				wp_enqueue_script("jquery-ui-autocomplete", "", array("jquery-ui-widget", "jquery-ui-position"));
				wp_enqueue_script("jquery-ui-accordion", "", array("jquery-ui-widget", "jquery-ui-position"));
				wp_enqueue_style("thickbox");
				wp_enqueue_script("za-jquery-textrange", plugins_url("js/jquery-textrange.js", __FILE__), array("jquery"), zipperAgentConstants::VERSION);
			}
		}
		wp_enqueue_script("za-dashboard", plugins_url("js/dashboard.js", __FILE__), array("jquery", "editor", "media-upload", "thickbox"), zipperAgentConstants::VERSION);
		wp_enqueue_style("za-dashboard", plugins_url("css/dashboard.css", __FILE__), null, zipperAgentConstants::VERSION);
	}
	
	/**
	 * @deprecated - use activateAuthenticationToken instead
	 */
	public function updateAuthenticationToken() {
		$this->activateAuthenticationToken();
	}

	public function activateAuthenticationToken($activationToken = null) {
		if(!empty($activationToken)) {
			update_option(zipperAgentConstants::ACTIVATION_TOKEN_OPTION, $activationToken);
		}
		$authenticationInfo = $this->getAuthenticationInfo();
		if($authenticationInfo !== null) {
			if(property_exists($authenticationInfo, "authenticationToken")) {
				$authenticationToken = (string) $authenticationInfo->authenticationToken;
				$this->setAuthenticationToken($authenticationToken);
			}
			if(property_exists($authenticationInfo, "permissions")) {
				$permissions = $authenticationInfo->permissions;
				zipperAgentDisplayRules::getInstance()->setPermissions($permissions);
			}
			update_option(zipperAgentConstants::IS_ACTIVATED_OPTION, "true");
			//We need to flush the rewrite rules, if any permalinks have been updated.
			//Only flush in the admin screens, because that is the only point where urls patterns may change.
			zipperAgentRewriteRules::getInstance()->flushRules();
			//clear the cache
			zipperAgentCacheUtility::getInstance()->deleteItems();
			//update menu with any new available menu items
			zipperAgentMenu::getInstance()->updateMenu();
		}
	}
	
	public function deleteAuthenticationToken() {
		delete_option(zipperAgentConstants::AUTHENTICATION_TOKEN_OPTION);
	}
	
	public function getAuthenticationToken() {
		$authenticationToken = get_option(zipperAgentConstants::AUTHENTICATION_TOKEN_OPTION, null);
		return $authenticationToken;
	}
	
	public function setAuthenticationToken($authenticationToken) {
		update_option(zipperAgentConstants::AUTHENTICATION_TOKEN_OPTION, $authenticationToken);
	}
	
	public function previouslyActivated() {
		return get_option(zipperAgentConstants::IS_ACTIVATED_OPTION, false);
	}
	
	public function isActivated() {
		$result = false;
		$authenticationToken = $this->getAuthenticationToken();
		if(!empty($authenticationToken)) {
			$result = true;
		}
		return $result;
	}
	
	private function getAuthenticationInfo() {
		$activationToken = get_option(zipperAgentConstants::ACTIVATION_TOKEN_OPTION, null);
		if(empty($activationToken)) {
			return null;
		}
				
		$urlFactory = zipperAgentUrlFactory::getInstance();
		$ajaxBaseUrl = urlencode($urlFactory->getAjaxBaseUrl());
		$listingsSearchResultsUrl = urlencode($urlFactory->getListingsSearchResultsUrl(true));
		$listingsSearchFormUrl = urlencode($urlFactory->getListingsSearchFormUrl(true));
		$listingDetailUrl = urlencode($urlFactory->getListingDetailUrl(true));
		// $featuredSearchResultsUrl = urlencode($urlFactory->getFeaturedSearchResultsUrl(true)); //disabled by decz
		// $hotSheetListingReportUrl = urlencode($urlFactory->getHotSheetListingReportUrl(true)); //disabled by decz
		// $hotSheetOpenHomeReportUrl = urlencode($urlFactory->getHotSheetOpenHomeReportUrl(true)); //disabled by decz
		// $hotSheetMarketReportUrl = urlencode($urlFactory->getHotSheetMarketReportUrl(true)); //disabled by decz
		$organizerLoginUrl = urlencode($urlFactory->getOrganizerLoginUrl(true));
		$organizerLogoutUrl = urlencode($urlFactory->getOrganizerLogoutUrl(true));
		$organizerLoginSubmitUrl = urlencode($urlFactory->getOrganizerLoginSubmitUrl(true));
		$organizerEditSavedSearchUrl = urlencode($urlFactory->getOrganizerEditSavedSearchUrl(true));
		$organizerEditSavedSearchSubmitUrl = urlencode($urlFactory->getOrganizerEditSavedSearchSubmitUrl(true));
		$organizerDeleteSavedSearchSubmitUrl = urlencode($urlFactory->getOrganizerDeleteSavedSearchSubmitUrl(true));
		$organizerViewSavedSearchUrl = urlencode($urlFactory->getOrganizerViewSavedSearchUrl(true));
		$organizerViewSavedSearchListUrl = urlencode($urlFactory->getOrganizerViewSavedSearchListUrl(true));
		$organizerViewSavedListingListUrl = urlencode($urlFactory->getOrganizerViewSavedListingListUrl(true));
		$organizerDeleteSavedListingUrl = urlencode($urlFactory->getOrganizerDeleteSavedListingUrl(true));
		// $organizerResendConfirmationEmailUrl = urlencode($urlFactory->getOrganizerResendConfirmationEmailUrl(true)); //disabled by decz
		// $organizerActivateSubscriberUrl = urlencode($urlFactory->getOrganizerActivateSubscriberUrl(true)); //disabled by decz
		// $organizerSendSubscriberPasswordUrl = urlencode($urlFactory->getOrganizerSendSubscriberPasswordUrl(true)); //disabled by decz
		$listingsAdvancedSearchFormUrl = urlencode($urlFactory->getListingsAdvancedSearchFormUrl(true));
		// $organizerHelpUrl = urlencode($urlFactory->getOrganizerHelpUrl(true)); //disabled by decz
		$organizerEditSubscriberUrl = urlencode($urlFactory->getOrganizerEditSubscriberUrl(true));
		// $contactFormUrl = urlencode($urlFactory->getContactFormUrl(true)); //disabled by decz
		// $valuationFormUrl = urlencode($urlFactory->getValuationFormUrl(true)); //disabled by decz
		// $listingSoldDetailUrl = urlencode($urlFactory->getListingSoldDetailUrl(true)); //disabled by decz
		// $openHomeSearchFormUrl = urlencode($urlFactory->getOpenHomeSearchFormUrl(true)); //disabled by decz
		// $soldFeaturedListingUrl = urlencode($urlFactory->getSoldFeaturedListingUrl(true)); //disabled by decz
		// $supplementalListingUrl = urlencode($urlFactory->getSupplementalListingUrl(true)); //disabled by decz
		// $officeListUrl = urlencode($urlFactory->getOfficeListUrl(true)); //disabled by decz
		// $officeDetailUrl = urlencode($urlFactory->getOfficeDetailUrl(true)); //disabled by decz
		// $agentBioListUrl = urlencode($urlFactory->getAgentListUrl(true)); //disabled by decz
		// $agentBioDetailUrl = urlencode($urlFactory->getAgentDetailUrl(true)); //disabled by decz
		$mapSearchUrl = urlencode($urlFactory->getMapSearchFormUrl(true));
		$cssOverride = urlencode(get_option(zipperAgentConstants::CSS_OVERRIDE_OPTION, null));
		$layoutType = urlencode($this->displayRules->getLayoutType());
		$colorScheme = urlencode($this->displayRules->getColorScheme());
		$mobileSiteYn = get_option(zipperAgentConstants::OPTION_MOBILE_SITE_YN, null);
		$emailDisplayType = get_option(zipperAgentConstants::EMAIL_DISPLAY_TYPE_OPTION, null);
		$emailHeader = urlencode(zipperAgentAdminEmail::getInstance()->getHeader());
		$emailFooter = urlencode(zipperAgentAdminEmail::getInstance()->getFooter());
		$emailPhotoUrl = get_option(zipperAgentConstants::EMAIL_PHOTO_OPTION, null);
		$emailLogoUrl = get_option(zipperAgentConstants::EMAIL_LOGO_OPTION, null);
		$emailName = get_option(zipperAgentConstants::EMAIL_NAME_OPTION, null);
		$emailCompany = get_option(zipperAgentConstants::EMAIL_COMPANY_OPTION, null);
		$emailPhone = get_option(zipperAgentConstants::EMAIL_PHONE_OPTION, null);
		$emailAddressLine1 = get_option(zipperAgentConstants::EMAIL_ADDRESS_LINE1_OPTION, null);
		$emailAddressLine2 = get_option(zipperAgentConstants::EMAIL_ADDRESS_LINE2_OPTION, null);
				
		$emailBrandingType = null;
		switch($emailDisplayType) {
			case zipperAgentAdminEmail::EMAIL_DISPLAY_TYPE_CUSTOM_IMAGES_VALUE;
			case zipperAgentAdminEmail::EMAIL_DISPLAY_TYPE_DEFAULT_VALUE;
			$emailBrandingType = "basic";
				break;
			case zipperAgentAdminEmail::EMAIL_DISPLAY_TYPE_CUSTOM_HTML_VALUE;
				$emailBrandingType = "custom";
				break;
		}
		
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "activate")
			->addParameter("activationToken", $activationToken)
			->addParameter("ajaxBaseUrl", $ajaxBaseUrl)
			->addParameter("type", "wordpress")
			->addParameter("listingSearchResultsUrl", $listingsSearchResultsUrl)
			->addParameter("listingSearchByAddressResultsUrl", $listingsSearchResultsUrl)
			->addParameter("listingSearchByListingIdResultsUrl", $listingsSearchResultsUrl)
			->addParameter("listingSearchFormUrl", $listingsSearchFormUrl)
			->addParameter("listingDetailUrl", $listingDetailUrl)
			->addParameter("featuredSearchResultsUrl", $featuredSearchResultsUrl)
			->addParameter("hotsheetSearchResultsUrl", $hotSheetListingReportUrl)
			->addParameter("hotSheetOpenHomeReportUrl", $hotSheetOpenHomeReportUrl)
			->addParameter("hotSheetMarketReportUrl", $hotSheetMarketReportUrl)
			->addParameter("organizerLoginUrl", $organizerLoginUrl)
			->addParameter("organizerLogoutUrl", $organizerLogoutUrl)
			->addParameter("organizerLoginSubmitUrl", $organizerLoginSubmitUrl)
			->addParameter("organizerEditSavedSearchUrl", $organizerEditSavedSearchUrl)
			->addParameter("organizerEditSavedSearchSubmitUrl", $organizerEditSavedSearchSubmitUrl)
			->addParameter("organizerDeleteSavedSearchSubmitUrl", $organizerDeleteSavedSearchSubmitUrl)
			->addParameter("organizerViewSavedSearchUrl", $organizerViewSavedSearchUrl)
			->addParameter("organizerViewSavedSearchListUrl", $organizerViewSavedSearchListUrl)
			->addParameter("organizerViewSavedListingListUrl", $organizerViewSavedListingListUrl)
			->addParameter("organizerDeleteSavedListingUrl", $organizerDeleteSavedListingUrl)
			->addParameter("organizerResendConfirmationEmailUrl", $organizerResendConfirmationEmailUrl)
			->addParameter("organizerActivateSubscriberUrl", $organizerActivateSubscriberUrl)
			->addParameter("organizerSendSubscriberPasswordUrl", $organizerSendSubscriberPasswordUrl)
			->addParameter("listingAdvancedSearchFormUrl", $listingsAdvancedSearchFormUrl)
			->addParameter("organizerHelpUrl", $organizerHelpUrl)
			->addParameter("organizerEditSubscriberUrl", $organizerEditSubscriberUrl)
			->addParameter("contactFormUrl", $contactFormUrl)
			->addParameter("valuationFormUrl", $valuationFormUrl)
			->addParameter("listingSoldDetailUrl", $listingSoldDetailUrl)
			->addParameter("openHomeSearchFormUrl", $openHomeSearchFormUrl)
			->addParameter("soldFeaturedListingUrl", $soldFeaturedListingUrl)
			->addParameter("supplementalListingUrl", $supplementalListingUrl)
			->addParameter("officeListUrl", $officeListUrl)
			->addParameter("officeDetailUrl", $officeDetailUrl)
			->addParameter("agentBioListUrl", $agentBioListUrl)
			->addParameter("agentBioDetailUrl", $agentBioDetailUrl)
			->addParameter("mapSearchUrl", $mapSearchUrl)
			->addParameter("cssOverride", $cssOverride)
			->addParameter("layoutType", $layoutType)
			->addParameter("colorScheme", $colorScheme)
			->addParameter("mobileSiteYn", $mobileSiteYn)
			->addParameter("emailBrandingType", $emailBrandingType)
			->addParameter("emailHeader", $emailHeader)
			->addParameter("emailFooter", $emailFooter)
			->addParameter("emailPhotoUrl", $emailPhotoUrl)
			->addParameter("emailLogoUrl", $emailLogoUrl)
			->addParameter("emailName", $emailName)
			->addParameter("emailCompany", $emailCompany)
			->addParameter("emailPhone", $emailPhone)
			->addParameter("emailAddressLine1", $emailAddressLine1)
			->addParameter("emailAddressLine2", $emailAddressLine2)
		;
		
		$remoteResponse = $remoteRequest->remotePostRequest();
		return $remoteResponse->getResponse();
	}
	
	private function getSitemap() {
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "sitemap")
			->setCacheExpiration(60*60)
		;
		$remoteResponse = $remoteRequest->remoteGetRequest();
		return $remoteResponse;
	}
	
	public function addSitemapForGoogleXmlSitemaps() {
		$generatorObject = GoogleSitemapGenerator::GetInstance();
		if($generatorObject != null) {
			$urls = $this->getSitemap()->getResponse()->sitemap->urlset->url;
			foreach($urls as $url) {
				$location = null;
				if(property_exists($url, "loc") && !empty($url->loc)) {
					$location = $url->loc;
				}
				$modified = null;
				if(property_exists($url, "lastmod") && !empty($url->lastmod)) {
					$modified = new DateTime($url->lastmod);
					$modified = $modified->format("U");
				}
				$frequency = null;
				if(property_exists($url, "changefreq") && !empty($url->changefreq)) {
					$frequency = $url->changefreq;
				}
				$priority = null;
				if(property_exists($url, "priority") && !empty($url->priority)) {
					$priority = $url->priority;
				}
				$generatorObject->AddUrl($location, $modified, $frequency, $priority);
			}
		}
	}
	
	public function addSitemapForYoastWordPressSeo($content) {
		global $wpseo_sitemaps;
		if($wpseo_sitemaps != null) {
			$urls = $this->getSitemap()->getResponse()->sitemap->urlset->url;
			foreach($urls as $url) {
				$data = array();
				if(property_exists($url, "loc") && !empty($url->loc)) {
					$data["loc"] = $url->loc;
				}
				if(property_exists($url, "lastmod") && !empty($url->lastmod)) {
					$data["mod"] = new DateTime($url->lastmod);
					$data["mod"] = $data["mod"]->format("U");
				}
				if(property_exists($url, "changefreq") && !empty($url->changefreq)) {
					$data["chf"] = $url->changefreq;
				}
				if(property_exists($url, "priority") && !empty($url->priority)) {
					$data["pri"] = $url->priority;
				}
				$content .= $wpseo_sitemaps->sitemap_url($data);
			}
		}
		return $content;
	}
	
}