<?php

class zipperAgentEmailSignupFormWidget extends zipperAgentWidget {
	
	private $enqueueResource;
	
	public function __construct() {
		parent::__construct(
			"zipperAgentEmailSignupFormWidget",
			"IDX: Email Signup",
			array(
				"description" => "Displays a Email Signup form on listing result pages."
			)
		);
		$this->enqueueResource = zipperAgentEnqueueResource::getInstance();
	}
	
	public function widget($args, $instance) {
		$instance = $this->migrate($instance);
		if($this->isEnabled($instance)) {
			$beforeWidget = $args["before_widget"];
			$afterWidget = $args["after_widget"];
			$beforeTitle = $args["before_title"];
			$afterTitle = $args["after_title"];
			$remoteRequest = new zipperAgentRequestor();
			$remoteRequest
				->addParameter("requestType", "email-signup")
			;
			$remoteResponse = $remoteRequest->remoteGetRequest();
			$content = $remoteResponse->getBody();
			$this->enqueueResource->addToFooter($remoteResponse->getHead());
			$title = apply_filters("widget_title", $instance["title"]);
			echo $beforeWidget;
			if(!empty($title)) {
				echo $beforeTitle . $title . $afterTitle;
			}
			echo $content;
			echo $afterWidget;
		}
	}
	
	protected function isEnabled($instance) {
		$result = false;
		$virtualPageType = get_query_var(zipperAgentConstants::ZA_TYPE_URL_VAR);
		switch($virtualPageType) {
			case zipperAgentVirtualPageFactory::LISTING_SEARCH_RESULTS:
			case zipperAgentVirtualPageFactory::HOT_SHEET_LISTING_REPORT:
			case zipperAgentVirtualPageFactory::HOT_SHEET_OPEN_HOME_REPORT:
			case zipperAgentVirtualPageFactory::HOT_SHEET_MARKET_REPORT:
				$result = true;
		}
		return $result;
	}
	
	public function update($newInstance, $oldInstance) {
		$newInstance = $this->migrate($newInstance);
		$oldInstance = $this->migrate($oldInstance);
		$instance = $oldInstance;
		$instance["title"] = strip_tags(stripslashes($newInstance["title"]));
		return $instance;
	}
	
	public function form($instance) {
		$instance = $this->migrate($instance);
		$title = null;
		if (array_key_exists("title", $instance)) {
			$title = esc_attr($instance["title"]);
		}
		?>
		<p>
			<label>
				Title:
				<input class="widefat" id="<?php echo $this->get_field_id("title"); ?>" name="<?php echo $this->get_field_name("title"); ?>" type="text" value="<?php echo $title; ?>" />
			</label>
		</p>
		<?php
	}
	
}
