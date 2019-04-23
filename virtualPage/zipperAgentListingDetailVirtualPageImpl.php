<?php

class zipperAgentListingDetailVirtualPageImpl extends zipperAgentAbstractVirtualPage {
	
	private $single_property;
	private $property_cache;
	
	/* modified by decz */
	public function __construct(){
		$this->remoteRequest = new zipperAgentRequestor();
		
		$listingId = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
		
		if( $listingId ){
			$contactIds=get_contact_id();
			
			$searchId = isset($_REQUEST['searchId'])?$_REQUEST['searchId']:'';
			
			$lastest_cache = zipperagent_get_session_result('/api/mls/advSearchWoCnt');
			$property_cache=false;
			
			if(is_array($lastest_cache) && isset($lastest_cache['filteredList']) && $lastest_cache){
				foreach($lastest_cache['filteredList'] as $property){
					if($property->id==$listingId){
						$property_cache=$property;
						break;
					}
				}
			}
			
			$single_property=false;
			if(! $property_cache){
				$single_property=get_single_property( $listingId, implode(',',$contactIds), $searchId );	
			}
			
			$this->property_cache = $property_cache;
			$this->single_property = $single_property;
						
			if($_GET['debug']){
				if($single_property){
					echo "<pre>"; print_r( $single_property ); echo "</pre>";
				}
				if($property_cache){					
					echo "<pre>"; print_r($property_cache); echo "</pre>";
				}
				// echo "<pre>"; print_r($_SESSION); echo "</pre>";
				// echo "<pre>"; print_r($lastest_cache); echo "</pre>";
			}
		}
	}
	/* end modified */
	
	public function getTitle() {
		$default = null;
		/* modified by decz */
		// if(zipperAgentDisplayRules::getInstance()->supportsSeoVariables()) {
			// $default = "{listingAddress}";
		// } elseif(is_object($this->remoteResponse) && $this->remoteResponse->hasTitle()) {
			// $default = $this->remoteResponse->getTitle();
		// }
		if( isset( $this->single_property->streetno) )
			$default = zipperagent_get_address( $this->single_property);
		else
			$default = $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_DETAIL, "Property Title");
		/* end modified */
		
		// return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TITLE_DETAIL, $default);
		return $default;
	}
	
	public function getPermalink() {
		// return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL, "homes-for-sale-details");
		
		/* modified by decz */
		return $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL, "listing");
		/* end modified */
	}
	
	public function getPageTemplate() {
		return get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_DETAIL, null);
	}
	
	public function getMetaTags() {
		$default = "<meta property=\"og:image\" content=\"{listingPhotoUrl}\" />\n<meta property=\"og:image:width\" content=\"{listingPhotoWidth}\" />\n<meta property=\"og:image:height\" content=\"{listingPhotoHeight}\" />\n<meta name=\"description\" content=\"Photos and Property Details for {listingAddress}. Get complete property information, maps, street view, schools, walk score and more. Request additional information, schedule a showing, save to your property organizer.\" />\n<meta name=\"keywords\" content=\"{listingAddress}, {listingCity} Real Estate, {listingCity} Property for Sale\" />";
		
		$metaTags = $this->getText(zipperAgentConstants::OPTION_VIRTUAL_PAGE_META_TAGS_DETAIL, $default);
		
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
		$listingNumber = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
		$boardId = zipperAgentUtility::getInstance()->getQueryVar("boardId");
		$this->remoteRequest
			->addParameters($_REQUEST)
			->addParameter("ln", $listingNumber)
			->addParameter("bid", $boardId)
			->addParameter("requestType", "listing-detail")
		;
		$previousAndNextInformation = $this->getPreviousAndNextInformation($boardId, $listingNumber);
		$this->remoteRequest->addParameters($previousAndNextInformation);
		// $this->remoteResponse = $this->remoteRequest->remoteGetRequest();
		
		/* Modified by Decz */
		$this->remoteRequest->setSingleProperty($this->single_property, $this->property_cache);
		$this->remoteResponse = $this->remoteRequest->remoteGetSpecialRequest('listingDetail');
		/* end modified codes */
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
	
	/* modified by decz */
	public function getSingleProperty(){
		return $this->single_property;
	}
	/* end modified */
	
}