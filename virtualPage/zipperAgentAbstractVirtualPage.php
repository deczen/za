<?php

abstract class zipperAgentAbstractVirtualPage implements zipperAgentVirtualPageInterface {
	
	protected $remoteResponse;
	protected $remoteRequest;
	
	public function __construct() {
		$this->remoteRequest = new zipperAgentRequestor();
	}
	
	public function getPageTemplate() {
		return null;
	}
	
	public function getPermalink() {
		return null;
	}
	
	public function getHead() {
		$result = null;
		if(is_object($this->remoteResponse)) {
			$result = $this->remoteResponse->getHead();
		}
		return $result;
	}
	
	public function getTitle() {
		return null;
	}
	
	public function getMetaTags() {
		return null;
	}
	
	public function getAvailableVariables() {
		return null;
	}
	
	public function getVariables() {
		$result = array();
		//if only one node exists, this is returning one object instead an array of objects
		if(is_object($this->remoteResponse) && $this->remoteResponse->hasVariables()) {
			$variables = json_decode(json_encode($this->remoteResponse->getVariables()));
			if(is_object($variables) && property_exists($variables, "variable")) {
				foreach($variables->variable as $variable) {
					if(property_exists($variable, "name") && property_exists($variable, "value")) {
						$result[] = new zipperAgentVariable($variable->name, $variable->value, null);
					}
					
				}
			}
		}
		return $result;
	}
	
	public function getContent() {
		return null;
	}
	
	public function getBody() {
		$result = null;
		if(is_object($this->remoteResponse)) {
			$result = $this->remoteResponse->getBody();
		}
		return $result;
	}
	
	public function addParameter($name, $value) {
		$this->remoteRequest->addParameter($name, $value);
	}
	
	/**
	 * 
	 * @param string $optionName the name of the option
	 * @param string $default the default value if the option value cannot be found or is empty 
	 * @return string variables replaced
	 */
	protected function getText($optionName, $default = null) {
		$result = get_option($optionName, null);
		if(empty($result)) {
			$result = $default;
		}
		$result = zipperAgentVariableUtility::getInstance()->replaceVariable($result, $this->getVariables());
		return $result;
	}
	
	/**
	 * Used in active and sold detail pages 
	 * @return string
	 */
	protected function getPreviousSearchLink() {
		$previousUrl = zipperAgentStateManager::getInstance()->getLastSearchUrl();
		$text = null;
		if(empty($previousUrl)) {
			$previousUrl = zipperAgentUrlFactory::getInstance()->getListingsSearchFormUrl(true);
			$text = "New Search";
		} elseif(strpos($previousUrl, "map-search") !== false) {
			$text = "Return To Map Search";
		} else {
			$text = "Return To Results";
		}
		$result = null;
		if(!empty($text) and !empty($previousUrl)) {
			$result = "<a href=\"" . $previousUrl . "\">&lt;&nbsp;" . $text . "</a>";
		}
		
		/* modified by decz */
		// return $result;
		
		return "";
	}
	
	/**
	 * Used in active and sold detail pages 
	 * When navigating listing detail pages, we need to set the next and previous details and pass in the request, to properly create next and previous links
	 *
	 * @param string $requestData
	 * @param integer $boardId
	 * @param string $listingNumber
	 */
	protected function getPreviousAndNextInformation($boardId, $listingNumber) {
		$result = array();
		$searchSummaryArray = zipperAgentStateManager::getInstance()->getSearchSummary();
		$key = $boardId . "|" . $listingNumber;
		if(isset($searchSummaryArray) && is_array($searchSummaryArray) && array_key_exists($key, $searchSummaryArray)) {
			$searchSummaryObject = $searchSummaryArray[$key];
			if(isset($searchSummaryObject->previousId)) {
				$searchSummaryPrevious = $searchSummaryArray[$searchSummaryObject->previousId];
				$prevBoardAndListingNumber = explode("|", $searchSummaryObject->previousId);
				$result["prevBoardId"] = $prevBoardAndListingNumber[0];
				$result["prevListingNumber"] = $prevBoardAndListingNumber[1];
				$result["prevAddress"] = $searchSummaryPrevious->address;
				$result["prevStatus"] = $searchSummaryPrevious->status;
			}
			if(isset($searchSummaryObject->nextId)) {
				$searchSummaryNext = $searchSummaryArray[$searchSummaryObject->nextId];
				$nextBoardAndListingNumber = explode("|", $searchSummaryObject->nextId);
				$result["nextBoardId"] = $nextBoardAndListingNumber[0];
				$result["nextListingNumber"] = $nextBoardAndListingNumber[1];
				$result["nextAddress"] = $searchSummaryNext->address;
				$result["nextStatus"] = $searchSummaryNext->status;
			}
		}
		return $result;
	}
	
}