<?php

class zipperAgentVariableUtility {
	
	private static $instance;
	
	private function __construct() {
	}
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	/**
	 * @param string $input
	 * @param array<zipperAgentVariable> $variables
	 * @return string
	 */
	public function replaceVariable($input, array $variables) {
		$result = $input;
		if(is_array($variables)) {
			foreach($variables as $variable) {
				if(is_a($variable, "zipperAgentVariable")) {
					$result = str_replace($variable->getNameWithAffix(), $variable->getValue(), $result);
				}
			}
		}
		return $result;
	}
	
	/**
	 * @param array<zipperAgentVariable> $variables
	 * @return array
	 */
	public function getAffixedArray($variables) {
		$result = array();
		foreach($variables as $variable) {
			$result[] = array(
				"name" => $variable->getNameWithAffix(),
				"value" => $variable->getValue(),
				"description" => $variable->getDescription(),
			);
		}
		return $result;
	}
	
	public function getListingAddress() {
		return new zipperAgentVariable("listingAddress", null, "Listing Address");
	}
	
	public function getListingCity() {
		return new zipperAgentVariable("listingCity", null, "Listing City");
	}
	
	public function getListingPostalCode() {
		return new zipperAgentVariable("listingPostalCode", null, "Listing Postal Code");
	}
	
	public function getListingPhotoUrl() {
		return new zipperAgentVariable("listingPhotoUrl", null, "Listing Photo URL");
	}
	
	public function getListingPhotoWidth() {
		return new zipperAgentVariable("listingPhotoWidth", null, "Listing Photo Width");
	}
	
	public function getListingPhotoHeight() {
		return new zipperAgentVariable("listingPhotoHeight", null, "Listing Photo Height");
	}
	
	public function getListingPrice() {
		return new zipperAgentVariable("listingPrice", null, "Listing Price");
	}
	
	public function getListingSoldPrice() {
		return new zipperAgentVariable("listingSoldPrice", null, "Listing Sold Price");
	}
	
	public function getListingSquareFeet() {
		return new zipperAgentVariable("listingSquareFeet", null, "Listing Square Feet");
	}
	
	public function getListingBedrooms() {
		return new zipperAgentVariable("listingBedrooms", null, "Listing # of Bedrooms");
	}
	
	public function getListingBathrooms() {
		return new zipperAgentVariable("listingBathrooms", null, "Listing # of Bathrooms");
	}
	
	public function getListingNumber() {
		return new zipperAgentVariable("listingNumber", null, "Listing Number");
	}
	
	public function getListingDescription() {
		return new zipperAgentVariable("listingDescription", null, "Listing Description");
	}
	
	public function getSavedSearchId() {
		return new zipperAgentVariable("savedSearchId", null, "Market ID");
	}
	
	public function getSavedSearchName() {
		return new zipperAgentVariable("savedSearchName", null, "Market Name" );
	}
	
	public function getSavedSearchDescription() {
		return new zipperAgentVariable("savedSearchDescription", null, "Market Description");
	}
	
	public function getAgentId() {
		return new zipperAgentVariable("agentId", null, "Agent ID");
	}
	
	public function getAgentName() {
		return new zipperAgentVariable("agentName", null, "Agent Name");
	}
	
	public function getAgentDesignation() {
		return new zipperAgentVariable("agentDesignation", null, "Agent Designation");
	}
	
	public function getOfficeId() {
		return new zipperAgentVariable("officeId", null, "Office ID");
	}
	
	public function getOfficeName() {
		return new zipperAgentVariable("officeName", null, "Office Name");
	}
	
}