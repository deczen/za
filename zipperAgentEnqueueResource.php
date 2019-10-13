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
		global $post, $ZaRemoteResponse;
		
		wp_enqueue_script("jquery");
		// wp_enqueue_script("jquery-ui-core");
		// wp_enqueue_script("jquery-ui-tabs");
		// wp_enqueue_script("jquery-ui-dialog");
		// wp_enqueue_script("jquery-ui-datepicker");
		// wp_enqueue_script("jquery-ui-autocomplete", "", array("jquery-ui-widget", "jquery-ui-position"), "1.8.6");
		
		// $localize = array('townurl'=> ZIPPERAGENTURL . 'custom/api-processing/towns.php');
		// wp_localize_script('jquery','zipperagent',$localize);
		
		/*
		$remoteRequest = new zipperAgentRequestor();
		$remoteRequest
			->addParameter("requestType", "resources")
			->setCacheExpiration(60*60)
		;
		$remoteResponse = $remoteRequest->remoteGetRequest(); */
		$remoteResponse = $ZaRemoteResponse;
		// echo "<pre>"; print_r($remoteResponse); echo "</pre>"; 
		// echo "<pre>"; print_r($remoteResponse->getCss()); echo "</pre>"; die();
		/* Start modification by Decz */
		$this->enqueueStyle('za-bundle-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/bundle.css');
		
		if( method_exists($remoteResponse,'hasCss') && $remoteResponse->hasCss()) {
			foreach($remoteResponse->getCss() as $css) {
				$handle = $css->name;
				$src = $css->url;
				$this->enqueueStyle($handle, $src);
			}
		}
		
		if(ZipperagentGlobalFunction()->zipperagent_detailpage_group()=='mlspin' || ZipperagentGlobalFunction()->is_zipperagent_new_detail_page()){
			$this->enqueueStyle('view-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/view-new.css');
			// $this->enqueueStyle('omnibar-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/omnibar.css');
			// $this->enqueueStyle('single-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/single-new.css');
			// $this->enqueueStyle('detail-page-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/detail-page.css');
			// $this->enqueueStyle('account-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/account.css');
			// $this->enqueueStyle('print-new-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/print-new.css');
		}
		else{			
			$this->enqueueStyle('view-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/view.css');
			// $this->enqueueStyle('single-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/single.css');
			// $this->enqueueStyle('property-print', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/print.css');
		}
		// $this->enqueueStyle('account-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/my-account.css');
		
		if( isset($post->post_type) && $post->post_type == 'zipperagent-listing' )	
			$this->enqueueStyle('listing-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/listing.css');
		
		$_lp_listid = get_post_meta($post->ID, '_lp_listid', true); //is landing page?
		if( isset($post->post_type) && $post->post_type == 'zipperagent-lp' || $_lp_listid )
			$this->enqueueStyle('landingpage-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/landingpage.css');
		
		// $this->enqueueStyle('owl-animate-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/animate.css');
		$this->enqueueStyle('magicsuggest-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/magicsuggest.css'); //magicsuggest
		$this->enqueueStyle('autocomplete-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/autocomplete.css'); //magicsuggest
		// $this->enqueueStyle('pikaday-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/pikaday.css');
		// $this->enqueueStyle('social-share', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/social-share.css');
		// $this->enqueueStyle('property-print', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/print.css');
		// $this->enqueueStyle('dropdownCheckboxes', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/dropdownCheckboxes.min.css');
		// $this->enqueueStyle('fSelect-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/fSelect.css');
		
		if( wp_get_theme() !== "Conall" ){
			$this->enqueueStyle('owl-carousel-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/owl.carousel.min.css');
			// $this->enqueueStyle('owl-carousel-theme-default-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/owl.theme.default.min.css');
		}
		
		// $this->enqueueStyle('ion-range-slider-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/ion.rangeSlider.css');
		// $this->enqueueStyle('ion-range-slider-modern-css', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/ion.rangeSlider.skinModern.css');
		
		// $this->enqueueStyle('rs-slider', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/compiled-styles.css');
		// $this->enqueueStyle('tabs-slider', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/royalslider-tabs.css');
		// $this->enqueueStyle('royalslider-slider', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/royalslider.css');
		// $this->enqueueStyle('default-slider', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/rs-default.css');
		// $this->enqueueStyle('slidebars-slider', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/slidebars.css');
		// $this->enqueueStyle('jquery-ui', ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/jquery-ui.css');  
		/* end modification */
		
		/* Start modification by Decz */
		// $this->enqueueScript('jquery-ui-slider');
		// $this->enqueueScript('za-bundle-js', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/bundle.js', true);
		$this->enqueueScript('za-bundle-js', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/bootstrap.js', true);
		if(method_exists($remoteResponse,'hasJs') && $remoteResponse->hasJs()) {
			foreach($remoteResponse->getJs() as $js) {
				$handle = $js->name;
				$src = $js->url;
				$this->enqueueScript($handle, $src);
			}
		}
		// $this->enqueueScript('bootstrap-multiselect', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/bootstrap-multiselect.min.js');
		$this->enqueueScript('magicsuggest-js', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/magicsuggest.js', true);
		// $this->enqueueScript('momment', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/moment.min.js', true);
		// $this->enqueueScript('pikaday-js', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/pikaday.js', true);
		// $this->enqueueScript('pikaday-jquery', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/pikaday.jquery.js', true);
		// $this->enqueueScript('dropdownCheckboxes', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/dropdownCheckboxes.min.js', true);
		// $this->enqueueScript('fSelect-js', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/fSelect.js', true);
		
		if( wp_get_theme() !== "Conall" ){
			$this->enqueueScript('owl-carousel-js', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/owl.carousel.min.js', true);
		}
		
		// $this->enqueueScript('ion-range-slider-js', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/ion.rangeSlider.min.js', true);
		// $this->enqueueScript('mortgage', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/mortgage.js', true);
		// $this->enqueueScript('owl-lazyload-js', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/owl.lazyload.js');
		
		// $this->enqueueScript('rs-slider-jquery', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/rs-slider/jquery-1.11.2.min.js');
		// $this->enqueueScript('rs-slider-bundle', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/rs-slider/slider.js');
		// $this->enqueueScript('rs-slider-plugins', ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/rs-slider/plugins.js');
		// $this->enqueueScript('sticky-kit-js', plugins_url('js/jquery.sticky-kit.min.js');
		// $this->enqueueScript('bootstrap-datetimepicker', plugins_url('js/bootstrap-datetimepicker.min.js');
		// $this->enqueueScript('require-js', plugins_url('js/require.js');
		// $this->enqueueScript( 'jquery-ui-datepicker' );
		// $this->enqueueScript('jquery-ui-js', plugins_url('js/jquery-ui.js');
		// $this->enqueueScript('autocomplete-js', plugins_url('js/autocomplete.js');
		/* end modification */
	}
	
	public function inline_style(){
		
		$account = file_get_contents( ZIPPERAGENTPATH . '/css/account.css' );
		$print = file_get_contents( ZIPPERAGENTPATH . '/css/print-new.css' );
		?>
		<style>
			<?php echo $account; ?>
			
			<?php echo $print; ?>
		</style>
		<?php
	}
	
	private function enqueueScript($handle, $src='', $in_footer=false) {
		wp_enqueue_script($handle, $src, array("jquery"), null, $in_footer);
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