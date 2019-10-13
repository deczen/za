<?php

class zipperAgentLuxuryDetailsVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	private $single_property;
	
	/* modified by decz */
	public function __construct(){
		$this->remoteRequest = new zipperAgentRequestor();
		
		$luxuryId = zipperAgentUtility::getInstance()->getQueryVar("luxuryId");
		$listingNumber = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
		
		if( $luxuryId ){
			
			$single_luxury=get_single_luxury( $luxuryId );
			
			$this->single_luxury = $single_luxury;
		}
		/*
		if( $listingNumber!='detail' ){
			
			$single_property=ZipperagentGlobalFunction()->get_single_property( $listingNumber );
			
			$this->single_property = $single_property;
		}*/
	}
	/* end modified */
	
	public function getTitle() {
		$default = null;
		if( isset( $this->single_property->streetno) )
			$default = zipperagent_get_address( $this->single_property);
		else if( isset( $this->single_luxury->name) )
			$default = $this->single_luxury->name;
		else
			$default = $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_LUXURY_DETAIL, "Luxury Title");
		
		return $default;
	}
	
	public function getPermalink() {
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_LUXURY_DETAIL, "luxury-listing");
	}
	
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_LUXURY_DETAIL, null);
	}
	
	public function getMetaTags() {
		$default = "<meta property=\"og:image\" content=\"{listingPhotoUrl}\" />\n<meta property=\"og:image:width\" content=\"{listingPhotoWidth}\" />\n<meta property=\"og:image:height\" content=\"{listingPhotoHeight}\" />\n<meta name=\"description\" content=\"Photos and Property Details for {listingAddress}. Get complete property information, maps, street view, schools, walk score and more. Request additional information, schedule a showing, save to your property organizer.\" />\n<meta name=\"keywords\" content=\"{listingAddress}, {listingCity} Real Estate, {listingCity} Property for Sale\" />";
		
		$metaTags = $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_LUXURY_DETAIL, $default);
		
		$listingNumber = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
		
		if( $listingNumber ){
		
			$find = array(
				'{listingPhotoUrl}',
				'{listingPhotoWidth}',
				'{listingPhotoHeight}',
				'{listingAddress}',
				'{listingCity}',
				
			);
			
			$replace = array(
				isset($this->single_property->photoList[0]) ? $this->single_property->photoList[0]->imgurl : ZIPPERAGENTURL . "images/no-photo.jpg",
				'1024',
				'768',
				zipperagent_get_address($this->single_property),
				zipperagent_field_value('lngTOWNSDESCRIPTION',$this->single_property->lngTOWNSDESCRIPTION, $this->single_property->proptype),
			);
			
			$metaTags = str_replace($find, $replace, $metaTags);
		}
		
		return $metaTags;
	}
	
	public function getAvailableVariables() {
		$variableUtility = zipperAgentVariableUtility::getInstance();
		return array(
			$variableUtility->getListingAddress(),
			$variableUtility->getListingCity(),
			$variableUtility->getListingPostalCode(),
			$variableUtility->getListingPhotoUrl(),
			$variableUtility->getListingPhotoWidth(),
			$variableUtility->getListingPhotoHeight(),
			$variableUtility->getListingPrice(),
			$variableUtility->getListingSquareFeet(),
			$variableUtility->getListingBedrooms(),
			$variableUtility->getListingBathrooms(),
			$variableUtility->getListingNumber(),
			$variableUtility->getListingDescription()
		);
	}
	
	public function getContent() {		
		$this->remoteRequest->setSingleLuxury($this->single_luxury);
		$this->remoteRequest->setSingleProperty($this->single_property);
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('luxuryDetail');
	}
	
	/**
	 * same code in sold detail
	 */
	public function getBody() {
		$body = $this->remoteResponse->getBody();
		$previousSearchLink = $this->getPreviousSearchLink();
		if(strpos($body, "<!-- INSERT RETURN TO RESULTS LINK HERE -->") !== false) {
			$body = str_replace("<!-- INSERT RETURN TO RESULTS LINK HERE -->", $previousSearchLink, $body);
		} else {
			$body = $previousSearchLink . "<br /><br />" . $body;
		}
		return $body;
	}	
}