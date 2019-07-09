<?php

class zipperAgentEnqueueResource {
	
	private $header = array();
	private $footer = array();
	private $metaTags = array();
	private static $instance;
	private $displayRules;

	private function __construct() {
		$this->displayRules = zipperAgentDisplayRules::getInstance();
	}
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function enqueue() {
		wp_enqueue_script("jquery");
		wp_enqueue_script("jquery-ui-core");
		wp_enqueue_script("jquery-ui-tabs");
		wp_enqueue_script("jquery-ui-dialog");
		wp_enqueue_script("jquery-ui-datepicker");
		wp_enqueue_script("jquery-ui-autocomplete", "", array("jquery-ui-widget", "jquery-ui-position"), "1.8.6");
		
		$localize = array('townurl'=> ZIPPERAGENTURL . 'custom/api-processing/towns.php');
		wp_localize_script('jquery','zipperagent',$localize);
		
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "resources")
			->setCacheExpiration(60*60)
		;
		$remoteResponse = $remoteRequest->remoteGetRequest();
		if( method_exists($remoteResponse,'hasCss') && $remoteResponse->hasCss()) {
			foreach($remoteResponse->getCss() as $css) {
				$handle = $css->name;
				$src = $css->url;
				$this->enqueueStyle($handle, $src);
			}
		}else{
			/* Start modification by Decz */
			$this->enqueueStyle('za-bundle-css', zipperagent_url(false) . 'css/bundle.css');
			$this->enqueueStyle('view-css', zipperagent_url(false) . 'css/view.css');
			$this->enqueueStyle('omnibar-css', zipperagent_url(false) . 'css/omnibar.css');
			if(zipperagent_detailpage_group()=='mlspin'){
				$this->enqueueStyle('single-css', zipperagent_url(false) . 'css/single-new.css');
				$this->enqueueStyle('detail-page-css', zipperagent_url(false) . 'css/detail-page.css');
			}
			else{
				$this->enqueueStyle('single-css', zipperagent_url(false) . 'css/single.css');
			}
			// $this->enqueueStyle('account-css', zipperagent_url(false) . 'css/my-account.css');
			// $this->enqueueStyle('listing-css', zipperagent_url(false) . 'css/listing.css');
			$this->enqueueStyle('landingpage-css', zipperagent_url(false) . 'css/landingpage.css');
			$this->enqueueStyle('owl-animate-css', zipperagent_url(false) . 'css/animate.css');
			$this->enqueueStyle('magicsuggest-css', zipperagent_url(false) . 'css/magicsuggest.css');
			$this->enqueueStyle('autocomplete-css', zipperagent_url(false) . 'css/autocomplete.css');
			$this->enqueueStyle('pikaday-css', zipperagent_url(false) . 'css/pikaday.css');
			$this->enqueueStyle('social-share', zipperagent_url(false) . 'css/social-share.css');
			$this->enqueueStyle('property-print', zipperagent_url(false) . 'css/print.css');
			$this->enqueueStyle('dropdownCheckboxes', zipperagent_url(false) . 'css/dropdownCheckboxes.min.css');
			$this->enqueueStyle('fSelect-css', zipperagent_url(false) . 'css/fSelect.css');
			
			if( wp_get_theme() !== "Conall" ){
				$this->enqueueStyle('owl-carousel-css', zipperagent_url(false) . 'css/owl.carousel.min.css');
				// $this->enqueueStyle('owl-carousel-theme-default-css', zipperagent_url(false) . 'css/owl.theme.default.min.css');
			}
			
			$this->enqueueStyle('ion-range-slider-css', zipperagent_url(false) . 'css/ion.rangeSlider.css');
			$this->enqueueStyle('ion-range-slider-modern-css', zipperagent_url(false) . 'css/ion.rangeSlider.skinModern.css');
			
			// $this->enqueueStyle('rs-slider', zipperagent_url(false) . 'css/rs-slider/compiled-styles.css');
			// $this->enqueueStyle('tabs-slider', zipperagent_url(false) . 'css/rs-slider/royalslider-tabs.css');
			// $this->enqueueStyle('royalslider-slider', zipperagent_url(false) . 'css/rs-slider/royalslider.css');
			// $this->enqueueStyle('default-slider', zipperagent_url(false) . 'css/rs-slider/rs-default.css');
			// $this->enqueueStyle('slidebars-slider', zipperagent_url(false) . 'css/rs-slider/slidebars.css');
			// $this->enqueueStyle('jquery-ui', zipperagent_url(false) . 'css/jquery-ui.css');  
			/* end modification */
		}
		
		if(method_exists($remoteResponse,'hasJs') && $remoteResponse->hasJs()) {
			foreach($remoteResponse->getJs() as $js) {
				$handle = $js->name;
				$src = $js->url;
				$this->enqueueScript($handle, $src);
			}
		}else{
			/* Start modification by Decz */
			// $this->enqueueScript('jquery-ui-slider');
			$this->enqueueScript('za-bundle-js', zipperagent_url(false) . 'js/bundle.js');
			// $this->enqueueScript('bootstrap-multiselect', zipperagent_url(false) . 'js/bootstrap-multiselect.min.js');
			$this->enqueueScript('magicsuggest-js', zipperagent_url(false) . 'js/magicsuggest.js');
			$this->enqueueScript('momment', zipperagent_url(false) . 'js/moment.min.js');
			$this->enqueueScript('pikaday-js', zipperagent_url(false) . 'js/pikaday.js');
			$this->enqueueScript('pikaday-jquery', zipperagent_url(false) . 'js/pikaday.jquery.js');
			$this->enqueueScript('dropdownCheckboxes', zipperagent_url(false) . 'js/dropdownCheckboxes.min.js');
			$this->enqueueScript('fSelect-js', zipperagent_url(false) . 'js/fSelect.js');
			
			if( wp_get_theme() !== "Conall" ){
				$this->enqueueScript('owl-carousel-js', zipperagent_url(false) . 'js/owl.carousel.min.js');
			}
			
			$this->enqueueScript('ion-range-slider-js', zipperagent_url(false) . 'js/ion.rangeSlider.min.js');
			$this->enqueueScript('mortgage', zipperagent_url(false) . 'js/mortgage.js');
			// $this->enqueueScript('owl-lazyload-js', zipperagent_url(false) . 'js/owl.lazyload.js');
			
			// $this->enqueueScript('rs-slider-jquery', zipperagent_url(false) . 'js/rs-slider/jquery-1.11.2.min.js');
			// $this->enqueueScript('rs-slider-bundle', zipperagent_url(false) . 'js/rs-slider/slider.js');
			// $this->enqueueScript('rs-slider-plugins', zipperagent_url(false) . 'js/rs-slider/plugins.js');
			// $this->enqueueScript('sticky-kit-js', plugins_url('js/jquery.sticky-kit.min.js');
			// $this->enqueueScript('bootstrap-datetimepicker', plugins_url('js/bootstrap-datetimepicker.min.js');
			// $this->enqueueScript('require-js', plugins_url('js/require.js');
			// $this->enqueueScript( 'jquery-ui-datepicker' );
			// $this->enqueueScript('jquery-ui-js', plugins_url('js/jquery-ui.js');
			// $this->enqueueScript('autocomplete-js', plugins_url('js/autocomplete.js');
			/* end modification */
		}
	}
	
	private function enqueueScript($handle, $src='') {
		wp_enqueue_script($handle, $src, array("jquery"), null);
	}
	
	private function enqueueStyle($handle, $src) {
		wp_enqueue_style($handle, $src, null, null);
	}
	
	public function addToHeader($value) {
		$this->header[] = $value;
	}
	
	public function getHeader() {
		echo get_option(zipperAgentConstants::CSS_OVERRIDE_OPTION, null);
		foreach($this->header as $value) {
			echo $value;
		}
	}
	
	public function addToFooter($value) {
		$this->footer[] = $value;
	}
	
	public function getFooter() {
		foreach($this->footer as $value) {
			echo $value;
		}
	}
	
	public function addToMetaTags($value) {
		$this->metaTags[] = $value;
	}
	
	public function getMetaTags() {
		foreach($this->metaTags as $value) {
			echo $value;
		}
	}
	
}