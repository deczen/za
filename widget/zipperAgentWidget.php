<?php

abstract class zipperAgentWidget extends WP_Widget {
	
	protected function isEnabled($instance) {
		$result = false;
		//type is only defined for zipperagent page. 
		//If not set, then always display the widget.
		$virtualPageType = get_query_var(zipperAgentConstants::ZA_TYPE_URL_VAR);
		if(empty($virtualPageType)) {
			//always display the widget for non OE virtual pages
			$result = true;
		} elseif(array_key_exists($virtualPageType, $instance) && $instance[$virtualPageType] === "true") {
			//We have enabled the type for this widget see zipperAgentVirtualPageFactory for valid types
			$result = true;
		} else {
			//Special cases that are not covered specifically by type such as subpages covered by enabling one page
			if(array_key_exists(zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SAVED_SEARCH, $instance)) {
				if(zipperAgentVirtualPageFactory::isEmailAlertsPage($virtualPageType) ) {
					$result = true;
				}
			}
			if(array_key_exists(zipperAgentVirtualPageFactory::ORGANIZER_LOGIN, $instance)) {
				if(zipperAgentVirtualPageFactory::isOrganizerPage($virtualPageType)) {
					$result = true;
				}
			}
			if(array_key_exists(zipperAgentVirtualPageFactory::HOT_SHEET_LISTING_REPORT, $instance)) {	
				if(zipperAgentVirtualPageFactory::isHotSheetPage($virtualPageType)) {
					$result = true;
				}
			}
		}
		return $result;
	}
	
	protected function updateContext($newInstance, $oldInstance) {
		$instance = $oldInstance;
		$virtualPages = $this->getVirtualPages();
		foreach($virtualPages as $virtualPageType => $label) {
			$instance[$virtualPageType] = empty($newInstance[$virtualPageType]) ? "false" : "true";
		}
		return $instance;
	}
	
	/**
	 * This function echos JavaScript and a set of checkboxes used to restrict the pages that the widget displays on. For example, we
	 * can configure a Featured Listings widget to NOT diplay on the Featured Listings page.
	 * 
	 * @param array $instance The settings for the particular instance of the widget
	 */
	protected function getPageSelector($instance) {
		//cannot use $this->id in the function name, b/c it has characters that are not allowed for JavaScript functions
		$selectAllCheckbox = "selectAllCheckbox" . $this->id;
		$selectAllCheckboxDiv = "selectAllContainer" . $this->id;
		?>
		<p>Display widget on selected IDX pages:</p>
		<label>
			<input
				id="<?php echo $selectAllCheckbox ?>"
				type="checkbox"
				onclick="zaSelectAllCheckboxes('<?php echo $selectAllCheckbox ?>', '<?php echo $selectAllCheckboxDiv ?>');"
			/>
			Select All
		</label>
		<div id="<?php echo $selectAllCheckboxDiv ?>">	
			<?php
			$virtualPages = $this->getVirtualPages();
			foreach ($virtualPages as $virtualPageType => $label) {
				$fieldId = $this->get_field_id($virtualPageType);
				$fieldName = $this->get_field_name($virtualPageType);
				$fieldValue = true;
				if(array_key_exists($virtualPageType, $instance) && $instance[$virtualPageType] === "false") {
					$fieldValue = false;
				}
				?>
				<label>
					<input
						id="<?php echo $fieldId; ?>"
						name="<?php echo $fieldName; ?>"
						type="checkbox"
						value="true"
						onclick="zaSelectAllCheckboxesReset('<?php echo $selectAllCheckbox; ?>', '<?php echo $selectAllCheckboxDiv; ?>')"
						<?php if($fieldValue) { ?>
							checked="checked"
						<?php } ?>
					/>
					<?php echo $label; ?>
				</label>
				<br />
			<?php } ?>
		</div>
		<?php
	}
	
	private function getVirtualPages() {
		$results = array();
		$results[zipperAgentVirtualPageFactory::OPEN_HOME_SEARCH_FORM] = "Open Home Search";
		$results[zipperAgentVirtualPageFactory::LISTING_SEARCH_RESULTS] = "Search Results";
		$results[zipperAgentVirtualPageFactory::LISTING_DETAIL] = "Listing Details";
		/* modified by decz */
		$results[zipperAgentVirtualPageFactory::LUXURY_DETAIL] = "Luxury Details";
		/* end modified */
		$results[zipperAgentVirtualPageFactory::LISTING_SOLD_DETAIL] = "Sold Property Details";
		$results[zipperAgentVirtualPageFactory::SOLD_FEATURED_LISTING] = "Sold Featured Listing";
		$results[zipperAgentVirtualPageFactory::SUPPLEMENTAL_LISTING] = "Supplemental Listing";
		$results[zipperAgentVirtualPageFactory::FEATURED_SEARCH] = "Featured Properties";
		$results[zipperAgentVirtualPageFactory::HOT_SHEET_LISTING_REPORT] = "Market Reports <small>(Saved Search)</small>";
		$results[zipperAgentVirtualPageFactory::ORGANIZER_LOGIN] = "Organizer Pages";
		$results[zipperAgentVirtualPageFactory::VALUATION_FORM] = "Valuation Request";
		if(zipperAgentDisplayRules::getInstance()->isAgentBioEnabled()) {
			$results[zipperAgentVirtualPageFactory::AGENT_DETAIL] = "Agent Bio";
			$results[zipperAgentVirtualPageFactory::AGENT_LIST] = "Agent List";
		}
		if(zipperAgentDisplayRules::getInstance()->isOfficeEnabled()) {
			$results[zipperAgentVirtualPageFactory::OFFICE_DETAIL] = "Office Detail";
			$results[zipperAgentVirtualPageFactory::OFFICE_LIST] = "Office List";
		}
		if(!is_a($this, "zipperAgentQuickSearchWidget")) {
			$results[zipperAgentVirtualPageFactory::LISTING_SEARCH_FORM] = "Search Form";
			$results[zipperAgentVirtualPageFactory::LISTING_ADVANCED_SEARCH_FORM] = "Advanced Search Form";
			$results[zipperAgentVirtualPageFactory::ORGANIZER_EDIT_SAVED_SEARCH] = "Email Alerts";
			$results[zipperAgentVirtualPageFactory::MAP_SEARCH_FORM] = "Map Search";
		}
		if(!is_a($this, "zipperAgentContactFormWidget")) {
			$results[zipperAgentVirtualPageFactory::CONTACT_FORM] = "Contact Form";
		}
		asort($results);
		return $results;
	}
	
	/**
	 * We had an issue where the "Display widget on selected IDX pages" setting was using numeric keys instead of using the keys
	 * specified in zipperAgentVirtualPageFactory. This method looks for numeric keys and converts them to the correct keys. We
	 * only convert the keys if the number of virtual pages saved match the number of possible saved virtual pages.
	 */
	protected function migrate($instance) {
		if($instance !== null) {
			$virtualPages = $this->getVirtualPages();
			$newKeys = array_keys($virtualPages);
			$oldKeys = array();
			foreach($instance as $oldKey => $value) {
				if(is_numeric($oldKey)) {
					$oldKeys[] = $oldKey;
				}
			}
			if(count($newKeys) == count($oldKeys)) {
				foreach($oldKeys as $oldKey) {
					$value = $instance[$oldKey];
					$newKey = $newKeys[$oldKey];
					$instance[$newKey] = $value;
					unset($instance[$oldKey]);
				}
			}
		}
		return $instance;
	}

}
