<?php

/**
 * Option names should lowercase snake_case
 */
interface zipperAgentConstants {

	const VERSION = "3.8.0";
	const VERSION_NAME = "ZipperAgent";
	const LEGACY_EXTERNAL_URL = "www.idxre.com/services/wordpress";
	const RESPONSIVE_EXTERNAL_URL = "www.idxhome.com/service/wordpress";
	const CONTROL_PANEL_EXTERNAL_URL = "www.idxre.com/idx/guid";
	const ZIPPERAGENT_STORE_EXTERNAL_URL = "www.zipperagent.com/store";
	
	/*
	 * menu slugs
	 */
	const PAGE_INFORMATION = "za-information";
	const PAGE_ACTIVATE = "za-option-activate";
	const PAGE_IDX_CONTROL_PANEL = "za-idx-control-panel";
	const PAGE_IDX_PAGES = "za-option-pages";
	const PAGE_CONFIGURATION = "za-config-page";
	const PAGE_BIO = "za-bio-page";
	const PAGE_SOCIAL = "za-social-page";
	const PAGE_EMAIL_BRANDING = "za-email-branding-page";
	const PAGE_COMMUNITY_PAGES = "za-community-pages";
	const PAGE_SEO_CITY_LINKS = "za-seo-city-links-page";
	
	/*
	 * activation options
	 */
	const OPTION_GROUP_ACTIVATE = "za-option-activate";
	const ACTIVATION_TOKEN_OPTION = "za_activation_token"; //key used to register and generate authentication token
	const AUTHENTICATION_TOKEN_OPTION = "za_authentication_token"; //token sent with every request
	
	/*
	 * IDX page options
	 */
	const OPTION_VIRTUAL_PAGE_CONFIG = "za-virtual-page-config";
	
	//Default Virtual Page options
	const OPTION_VIRTUAL_PAGE_TEMPLATE_DEFAULT = "za-virtual-page-template-default";
	
	//Listing Detail Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_DETAIL = "za-virtual-page-title-detail";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_DETAIL = "za-virtual-page-template-detail";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL = "za-virtual-page-permalink-text-detail";
	const OPTION_VIRTUAL_PAGE_META_TAGS_DETAIL = "za-virtual-page-meta-tags-detail";
	
	//Listing Detail Virtual Page Options * added by decz
	const OPTION_VIRTUAL_PAGE_TITLE_LUXURY_DETAIL = "za-virtual-page-title-luxury-detail";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_LUXURY_DETAIL = "za-virtual-page-template-luxury-detail";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_LUXURY_DETAIL = "za-virtual-page-permalink-text-luxury-detail";
	const OPTION_VIRTUAL_PAGE_META_TAGS_LUXURY_DETAIL = "za-virtual-page-meta-tags-luxury-detail";
	
	//Listing Search Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_SEARCH = "za-virtual-page-title-search";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH = "za-virtual-page-template-search";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH = "za-virtual-page-permalink-text-search";
	const OPTION_VIRTUAL_PAGE_META_TAGS_SEARCH = "za-virtual-page-meta-tags-search";
	
	/* modified by decz */
	//Listing Search Results Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_SEARCH_RESULTS = "za-virtual-page-title-search-results";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH_RESULTS = "za-virtual-page-template-search-results";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH_RESULTS = "za-virtual-page-permalink-text-search-results";
	const OPTION_VIRTUAL_PAGE_META_TAGS_SEARCH_RESULTS = "za-virtual-page-meta-tags-search-results";
	
	//Map Search Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_MAP_SEARCH = "za-virtual-page-title-map-search";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_MAP_SEARCH = "za-virtual-page-template-map-search";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_MAP_SEARCH = "za-virtual-page-permalink-text-map-search";
	const OPTION_VIRTUAL_PAGE_META_TAGS_MAP_SEARCH = "za-virtual-page-meta-tags-map-search";
	
	//Advanced Listing Search Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_ADVANCED_SEARCH = "za-virtual-page-title-adv-search";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_ADVANCED_SEARCH = "za-virtual-page-template-adv-search";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ADVANCED_SEARCH = "za-virtual-page-permalink-text-adv-search";
	const OPTION_VIRTUAL_PAGE_META_TAGS_ADVANCED_SEARCH = "za-virtual-page-meta-tags-adv-search";
		
	//Organizer Login Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_LOGIN = "za-virtual-page-title-org-login";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGIN = "za-virtual-page-template-org-login";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGIN = "za-virtual-page-permalink-text-org-login";
	const OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_LOGIN = "za-virtual-page-meta-tags-org-login";
	
	//Organizer Logout Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_LOGOUT = "za-virtual-page-title-org-logout";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGOUT = "za-virtual-page-template-org-logout";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGOUT = "za-virtual-page-permalink-text-org-logout";
	const OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_LOGOUT = "za-virtual-page-meta-tags-org-logout";
	
	//Organizer Edit Subscriber Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_EDIT_SUBSCRIBER = "za-virtual-page-title-org-edit-subscriber";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_EDIT_SUBSCRIBER = "za-virtual-page-template-org-edit-subscriber";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_EDIT_SUBSCRIBER = "za-virtual-page-permalink-text-org-edit-subscriber";
	const OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_EDIT_SUBSCRIBER = "za-virtual-page-meta-tags-org-edit-subscriber";
	
	//Organizer View Saved Search List Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_VIEW_SAVED_SEARCH_LIST = "za-virtual-page-title-org-view-saved-search-list";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH_LIST = "za-virtual-page-template-org-view-saved-search-list";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH_LIST = "za-virtual-page-permalink-text-org-view-saved-search-list";
	const OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_VIEW_SAVED_SEARCH_LIST = "za-virtual-page-meta-tags-org-view-saved-search-list";
	
	//Organizer View Saved Search Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_VIEW_SAVED_SEARCH = "za-virtual-page-title-org-view-saved-search";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH = "za-virtual-page-template-org-view-saved-search";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH = "za-virtual-page-permalink-text-org-view-saved-search";
	const OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_VIEW_SAVED_SEARCH = "za-virtual-page-meta-tags-org-view-saved-search";
	
	//Organizer Saved Listings Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_ORGANIZER_SAVED_LISTINGS = "za-virtual-page-title-org-saved-listings";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_SAVED_LISTINGS = "za-virtual-page-template-org-saved-listings";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_SAVED_LISTINGS = "za-virtual-page-permalink-text-org-saved-listings";
	const OPTION_VIRTUAL_PAGE_META_TAGS_ORGANIZER_SAVED_LISTINGS = "za-virtual-page-meta-tags-org-saved-listings";
	
	//Email Updated Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_EMAIL_UPDATES = "za-virtual-page-title-email-updates";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_EMAIL_UPDATES = "za-virtual-page-template-email-updates";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_EMAIL_UPDATES = "za-virtual-page-permalink-text-email-updates";
	const OPTION_VIRTUAL_PAGE_META_TAGS_EMAIL_UPDATES = "za-virtual-page-meta-tags-email-updates";
	
	//Featured Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_FEATURED = "za-virtual-page-title-featured";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_FEATURED = "za-virtual-page-template-featured";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_FEATURED = "za-virtual-page-permalink-text-featured";
	const OPTION_VIRTUAL_PAGE_META_TAGS_FEATURED = "za-virtual-page-meta-tags-featured";
	
	//Listing Report Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_LISTING_REPORT = "za-virtual-page-title-hotsheet";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_LISTING_REPORT = "za-virtual-page-template-hotsheet";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_LISTING_REPORT = "za-virtual-page-permalink-text-hotsheet";
	const OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_LISTING_REPORT = "za-virtual-page-meta-tags-hotsheet";
	
	//Open Home Report Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_OPEN_HOME_REPORT = "za-virtual-page-title-hotsheet-open-home-report";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_OPEN_HOME_REPORT = "za-virtual-page-template-hotsheet-open-home-report";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_OPEN_HOME_REPORT = "za-virtual-page-permalink-text-hotsheet-open-home-report";
	const OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_OPEN_HOME_REPORT = "za-virtual-page-meta-tags-hotsheet-open-home-report";
	
	//Market Report Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_MARKET_REPORT = "za-virtual-page-title-hotsheet-market-report";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_HOT_SHEET_MARKET_REPORT = "za-virtual-page-template-hotsheet-market-report";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_HOT_SHEET_MARKET_REPORT = "za-virtual-page-permalink-text-hotsheet-market-report";
	const OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_MARKET_REPORT = "za-virtual-page-meta-tags-hotsheet-market-report";
	
	//Hotsheet List Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_HOT_SHEET_LIST = "za-virtual-page-title-hotsheet-list";
	const OPTION_VIRTUAL_PAGE_META_TAGS_HOT_SHEET_LIST = "za-virtual-page-meta-tags-hotsheet-list";
	
	//Contact Form Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_CONTACT_FORM = "za-virtual-page-title-contact-form";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_CONTACT_FORM = "za-virtual-page-template-contact-form";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_CONTACT_FORM = "za-virtual-page-permalink-text-contact-form";
	const OPTION_VIRTUAL_PAGE_META_TAGS_CONTACT_FORM = "za-virtual-page-meta-tags-contact-form";
	
	//Valuation Form Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_VALUATION_FORM = "za-virtual-page-title-valuation-form";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_VALUATION_FORM = "za-virtual-page-template-valuation-form";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_VALUATION_FORM = "za-virtual-page-permalink-text-valuation-form";
	const OPTION_VIRTUAL_PAGE_META_TAGS_VALUATION_FORM = "za-virtual-page-meta-tags-valuation-form";
	
	//Open Home Search Form Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_OPEN_HOME_SEARCH_FORM = "za-virtual-page-title-open-home-search-form";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_OPEN_HOME_SEARCH_FORM = "za-virtual-page-template-open-home-search-form";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OPEN_HOME_SEARCH_FORM = "za-virtual-page-open-home-search-form";
	const OPTION_VIRTUAL_PAGE_META_TAGS_OPEN_HOME_SEARCH_FORM = "za-virtual-page-meta-tags-open-home-search-form";
	
	//Featured Sold Listings Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_SOLD_FEATURED = "za-virtual-page-title-sold-featured";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_SOLD_FEATURED = "za-virtual-page-template-sold-featured";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SOLD_FEATURED = "za-virtual-page-permalink-text-sold-featured";
	const OPTION_VIRTUAL_PAGE_META_TAGS_SOLD_FEATURED = "za-virtual-page-meta-tags-sold-featured";
	
	//Supplemental listings
	const OPTION_VIRTUAL_PAGE_TITLE_SUPPLEMENTAL_LISTING = "za-virtual-page-title-supplemental-listing";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_SUPPLEMENTAL_LISTING = "za-virtual-page-template-supplemental-listing";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SUPPLEMENTAL_LISTING = "za-virtual-page-permalink-text-supplemental-listing";
	const OPTION_VIRTUAL_PAGE_META_TAGS_SUPPLEMENTAL_LISTING = "za-virtual-page-meta-tags-supplemental-listing";
	
	//Sold Detail Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_SOLD_DETAIL = "za-virtual-page-title-sold-detail";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_SOLD_DETAIL = "za-virtual-page-template-sold-detail";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SOLD_DETAIL = "za-virtual-page-permalink-text-sold-detail";
	const OPTION_VIRTUAL_PAGE_META_TAGS_SOLD_DETAIL = "za-virtual-page-meta-tags-sold-detail";
	
	//Office List Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_OFFICE_LIST = "za-virtual-page-title-office-list";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_OFFICE_LIST = "za-virtual-page-template-office-list";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OFFICE_LIST = "za-virtual-page-permalink-text-office-list";
	const OPTION_VIRTUAL_PAGE_META_TAGS_OFFICE_LIST = "za-virtual-page-meta-tags-office-list";
	
	//Listing Office Detail Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_OFFICE_DETAIL = "za-virtual-page-title-office-detail";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_OFFICE_DETAIL = "za-virtual-page-template-office-detail";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_OFFICE_DETAIL = "za-virtual-page-permalink-text-office-detail";
	const OPTION_VIRTUAL_PAGE_META_TAGS_OFFICE_DETAIL = "za-virtual-page-meta-tags-office-detail";
	
	//Agent List Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_AGENT_LIST = "za-virtual-page-title-agent-list";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_AGENT_LIST = "za-virtual-page-template-agent-list";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_AGENT_LIST = "za-virtual-page-permalink-text-agent-list";
	const OPTION_VIRTUAL_PAGE_META_TAGS_AGENT_LIST = "za-virtual-page-meta-tags-agent-list";
	
	//Agent Detail Virtual Page Options
	const OPTION_VIRTUAL_PAGE_TITLE_AGENT_DETAIL = "za-virtual-page-title-agent-detail";
	const OPTION_VIRTUAL_PAGE_TEMPLATE_AGENT_DETAIL = "za-virtual-page-template-agent-detail";
	const OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_AGENT_DETAIL = "za-virtual-page-permalink-text-agent-detail";
	const OPTION_VIRTUAL_PAGE_META_TAGS_AGENT_DETAIL = "za-virtual-page-meta-tags-agent-detail";
	
	/*
	 * configuration options
	 */
	const OPTION_GROUP_CONFIGURATION = "za-config-page";
	const OPTION_LAYOUT_TYPE = "za-option-layout-type";
	const OPTION_LAYOUT_TYPE_RESPONSIVE = "responsive";
	const OPTION_LAYOUT_TYPE_LEGACY = "legacy";
	const COLOR_SCHEME_OPTION = "za-color-scheme";
	const CSS_OVERRIDE_OPTION = "za-css-override";
	
	/*
	 * bio widget options
	 */
	const OPTION_GROUP_BIO = "za-option-bio";
	const AGENT_PHOTO_OPTION = "za-bio-agent-photo-option";
	const AGENT_TEXT_OPTION = "za-bio-agent-text-option";
	const AGENT_DESIGNATIONS_OPTION = "za-bio-agent-designations-option";
	const AGENT_DISPLAY_TITLE_OPTION = "za-agent-display-title-option";
	const AGENT_LICENSE_INFO_OPTION = "za-agent-license-info-option";
	const CONTACT_PHONE_OPTION = "za-bio-contact-phone";
	const CONTACT_EMAIL_OPTION = "za-bio-contact-email";
	const OFFICE_LOGO_OPTION = "za-bio-office-logo";
	
	/*
	 * social widget options
	 */
	const OPTION_GROUP_SOCIAL = "za-option-social";
	const SOCIAL_FACEBOOK_URL_OPTION = "za-social-facebook-url-option";
	const SOCIAL_LINKEDIN_URL_OPTION = "za-social-linkedin-url-option";
	const SOCIAL_TWITTER_URL_OPTION = "za-social-twitter-url-option";
	const SOCIAL_PINTEREST_URL_OPTION = "za-social-pinterest-url";
	const SOCIAL_INSTAGRAM_URL_OPTION = "za-social-instagram-url";
	const SOCIAL_GOOGLE_PLUS_URL_OPTION = "za-social-google-plus-url";
	const SOCIAL_YOUTUBE_URL_OPTION = "za-social-youtube-url";
	const SOCIAL_YELP_URL_OPTION = "za-social-yelp-url";
	
	/*
	 * email branding options
	 */
	const OPTION_GROUP_EMAIL_DISPLAY = "za-option-email-display";
	const EMAIL_HEADER_OPTION = "za-email-display-header-option";
	const EMAIL_FOOTER_OPTION = "za-email-display-footer-option";
	const EMAIL_PHOTO_OPTION = "za-email-photo-option";
	const EMAIL_LOGO_OPTION = "za-email-logo-option";
	const EMAIL_NAME_OPTION = "za-email-name-option";
	const EMAIL_COMPANY_OPTION = "za-email-company-option";
	const EMAIL_ADDRESS_LINE1_OPTION = "za-email-address-line1-option";
	const EMAIL_ADDRESS_LINE2_OPTION = "za-email-address-line2-option";
	const EMAIL_PHONE_OPTION = "za-email-phone-option";
	const EMAIL_DISPLAY_TYPE_OPTION = "za-email-display-type-option";
	
	/*
	 * community pages options
	 */
	const OPTION_GROUP_COMMUNITY_PAGES = "za-community-pages";
	
	/*
	 * SEO city links options
	 */
	const OPTION_GROUP_SEO_CITY_LINKS = "za-option-seo-city-links";
	const SEO_CITY_LINKS_SETTINGS = "za-seo-city-links-settings";
	const SEO_CITY_LINKS_CITY_ZIP = "za-seo-city-links-city-zip";
	const SEO_CITY_LINKS_TEXT = "za-seo-city-links-text";
	const SEO_CITY_LINKS_MIN_PRICE = "za-seo-city-links-min-price";
	const SEO_CITY_LINKS_MAX_PRICE = "za-seo-city-links-max-price";
	const SEO_CITY_LINKS_PROPERTY_TYPE = "za-seo-city-links-property-type";
	const SEO_CITY_LINK_WIDTH = "za-seo-city-link-width";
	
	/*
	 * compatibility check options
	 */
	const OPTION_GROUP_COMPATIBILITY_CHECK = "za-option-compatibility-check";
	const COMPATIBILITY_CHECK_ENABLED = "za-compatibility-check-enabled";
	
	//
	const OPTION_MOBILE_SITE_YN = "za-mobile-site-yn";
	
	//
	const VERSION_OPTION = "za_version_option";

	//Remember if this plugin has ever been activated on this site. This affects things like link creation, when the plugin is activated.
	const IS_ACTIVATED_OPTION = "za_links_created";
	const CSS_OVERRIDE_MIGRATED = "za_css_override_migrated";

	//Used throughout the application to discover zipperAgent requests and used to determine the proper filter to execute.
	const ZA_TYPE_URL_VAR = "za-type";
	
	/**
	 * 
	 */
	const DATABASE_CACHE_TEST = "za_database_cache_test";
	
	const DEBUG = false;
	
}
