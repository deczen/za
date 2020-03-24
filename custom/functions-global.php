<?php

class ZipperagentGlobalFunction{
	
	private static $instance;
	
	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function zipperagent_user_slug(){
		
		$fullname='My Account';
		$userdata=$this->getCurrentUserContactLogin();
		$firstUser=isset($userdata[0])?$userdata[0]:false;
		
		if(isset($firstUser->firstName)){
			$fullname=$firstUser->firstName . ( isset($firstUser->lastName) ? ' ' . $firstUser->lastName : '' );
		}
		
		// if($_GET['debug']==1){
			// echo "<pre>"; print_r($_SESSION); echo "</pre>";
			// echo "<pre>"; print_r($userdata); echo "</pre>";
			// echo "<pre>"; print_r($fullname); echo "</pre>";			
		// }
		
		flush_rewrite_rules();
		
		return sanitize_title($fullname);
	}
	
	public function get_single_property( $listingId, $contactIds='', $searchId='' ){
		
		$single_property = array();
		
		if(!empty($listingId)){
			$args=array(
				'id'=>$listingId,
				// 'listingId'=>$listingId,
				'contactId'=>$contactIds,
				// 'searchId'=>$searchId,
			);
			
			// $url="/api/mls/saveListing";
			$url="/api/mls/anonget";
			// die( $url );
			$result = zipperagent_run_curl($url, $args);
			
			//force array to object
			$result = is_array( $result ) ? (object) $result : $result;
			$single_property = isset($result) && isset($result->property)?$result->property:(object) array();
		}
		
		return $single_property;
	}
	
	public function zipperagent_url($withhttp=true){
		if($withhttp){
			return ZIPPERAGENTURL;
		}else{
			$find=array('http://','https://');
			$rplc=array('//','//');
			return str_replace($find,$rplc,ZIPPERAGENTURL);
		}
	}
	
	
	public function zipperagent_detailpage_group(){
		$rb = $this->zipperagent_rb();	
		$detailpage_group = isset($rb['layout']['detailpage_group'])?$rb['layout']['detailpage_group']:'';
		
		if(isset($_GET['groupname'])){
			$detailpage_group = $_GET['groupname'];
		}
		
		return $detailpage_group ? $detailpage_group : 'mlspin';
	}
	
	public function zipperagent_is_direct_detailpage(){
		$rb = $this->zipperagent_rb();	
		$detailpage_direct = isset($rb['layout']['detailpage_direct'])?$rb['layout']['detailpage_direct']:0;
				
		return $detailpage_direct;
	}
	
	public function is_zipperagent_new_detail_page(){
		
		$enabled=1;
			
		return $enabled;
	}
	
	public function zipperagent_get_cookie($name){
		
		$value=null;
		
		if(isset($_COOKIE[$name])){
			// echo "<pre>"; print_r($_COOKIE[$name]); echo "</pre>";
			// echo "<pre>"; print_r(base64_decode($_COOKIE[$name])); echo "</pre>";
			
			$value = unserialize(base64_decode($_COOKIE[$name]));
		}
		
		return $value;
	}	
	
	public function zipperagent_set_cookie($name, $value='', $time=''){
			
		if(!$time){
			// $time=time() + (86400 * 30);  // 86400 = 1 day
			$time=time() + (86400 * 365);  // 86400 = 1 day
		}
		
		$subfolder=defined('SUBDOMAIN_INSTALL') && ! SUBDOMAIN_INSTALL && function_exists('get_blog_details') ? get_blog_details() : false;
		
		if(!$subfolder){
			setcookie($name, base64_encode(serialize($value)), $time, "/");
		}else{
			setcookie($name, base64_encode(serialize($value)), $time, $subfolder->path);
		}
		
		return $value;
	}
	
	public function getAgentList(){
		$result = (array) zipperagent_get_agent_list();
		
		$agentList = isset($result['filteredList'])?$result['filteredList']:array();
		
		return $agentList;
	}
	
	public function zipperagent_rb($debug=0){
		global $WORK_ENV;
		// unset($_SESSION['zipperagent_rb']);
		if( $WORK_ENV=='DEV' || !isset($_SESSION['zipperagent_rb']) || empty( $_SESSION['zipperagent_rb'] ) || $debug ){
			
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/root.php";
			$json=ob_get_clean();
			$save_session=json_decode($json, TRUE);		
			
			$_SESSION['zipperagent_rb'] = $save_session;
			
			return $save_session;
		}else{
			
			// $_SESSION['zipperagent_rb']['layout']['detailpage_layout']="template-newDetail.php";
			
			return $_SESSION['zipperagent_rb'];
		}
	}
	
	public function zipperagent_page_url($name){
		global $wpdb;
		
		$url = null;
		if( interface_exists( 'zipperAgentConstants' ) ){
			switch( $name ){
				case 'search-results':					
				case 'homes-for-sale-results':					
						$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH_RESULTS, null);
						$exists = $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE ID='{$page_id}'");
						if( ! $exists ){
							$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_SEARCH_RESULTS, null);
							$endpoint = !empty($endpoint)?$endpoint:'homes-for-sale-results';
							$url = site_url("/{$endpoint}/");
						}else{
							$url = get_permalink( $page_id );
						}
						
					break;
				case 'property-organizer-edit-subscriber':					
						$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_EDIT_SUBSCRIBER, null);
						$exists = $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE ID='{$page_id}'");
						if( ! $exists ){
							// $endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_EDIT_SUBSCRIBER, null);
							// $endpoint = !empty($endpoint)?$endpoint:'property-organizer-edit-subscriber';
							$endpoint = $this->zipperagent_user_slug();
							$url = site_url("/{$endpoint}/");
							// flush_rewrite_rules();
						}else{
							$url = get_permalink( $page_id );
						}
						
					break;
				case 'property-organizer-view-saved-search-list':					
						$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH_LIST, null);
						$exists = $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE ID='{$page_id}'");
						if( ! $exists ){
							$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH_LIST, null);
							$endpoint = !empty($endpoint)?$endpoint:'property-organizer-view-saved-search-list';
							$url = site_url("/{$endpoint}/");
						}else{
							$url = get_permalink( $page_id );
						}
						
					break;
				case 'property-organizer-view-saved-search':					
						$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH, null);
						$exists = $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE ID='{$page_id}'");
						if( ! $exists ){
							$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH, null);
							$endpoint = !empty($endpoint)?$endpoint:'property-organizer-view-saved-search';
							$url = site_url("/{$endpoint}/");
						}else{
							$url = get_permalink( $page_id );
						}
						
					break;
				case 'property-organizer-saved-listings':					
						$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_SAVED_LISTINGS, null);
						$exists = $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE ID='{$page_id}'");
						if( ! $exists ){
							$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_SAVED_LISTINGS, null);
							$endpoint = !empty($endpoint)?$endpoint:'property-organizer-saved-listings';
							$url = site_url("/{$endpoint}/");
						}else{
							$url = get_permalink( $page_id );
						}
						
					break;
				case 'property-organizer-login':					
						$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGIN, null);
						$exists = $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE ID='{$page_id}'");
						if( ! $exists ){
							$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGIN, null);
							$endpoint = !empty($endpoint)?$endpoint:'property-organizer-login';
							$url = site_url("/{$endpoint}/");
						}else{
							$url = get_permalink( $page_id );
						}
						
					break;
				case 'property-organizer-logout':					
						$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGOUT, null);
						$exists = $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE ID='{$page_id}'");
						if( ! $exists ){
							$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_LOGOUT, null);
							$endpoint = !empty($endpoint)?$endpoint:'property-organizer-logout';
							$url = site_url("/{$endpoint}/");
						}else{
							$url = get_permalink( $page_id );
						}
						
					break;
			}
		}
		
		return $url;
	} 
	
	public function getCurrentUserContactLogin(){
		$email=isset($_SESSION['userMail'])?$_SESSION['userMail']:'';
		if($email){
			if(isset($_SESSION['userdata']) && !empty($_SESSION['userdata'])){				
				$userdata=$_SESSION['userdata'];
			}else{
				$userdata=getUserContact($email);
				
				if($userdata){
					$_SESSION['userdata']=$userdata;					
				}else{
					$userdata=array();
					//destroy session if fail retrieve data
					userContactLoggout();
				}
			}
		}else{
			$userdata=array();
		}
		
		return $userdata;
	}
	
	public function zipperagent_get_favorites_count(){
		
		// $contactIds = get_contact_id();	
		$userdata = $this->getCurrentUserContactLogin();
		
		if($userdata){
			$contactIds=array();
			foreach($userdata as $contact){
				$contactIds[]=$contact->id;
			}
			
			$combined_contactIds = implode(',',$contactIds);
			$contactIds_key = implode('_',$contactIds);
			$option_key = $contactIds_key . '_favorites_count';
			$option_key_listid = $contactIds_key . '_favorite_listingIds';
			
			$dataCount = get_option( $option_key );
			
			if($dataCount!=='')
				return (integer) $dataCount;
			
			$vars=array(
				'sidx'=>0,
				'ps'=>100,
				'contactId'=>$combined_contactIds,
			);

			$result = zipperagent_run_curl( "/api/mls/listListings", $vars );
			$dataCount=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
			$list=isset($result['filteredList'])?$result['filteredList']:$result;
			
			//save favorite count cache
			update_option( $option_key, $dataCount );			
			
			//save favorites cache
			$favorite_listingIds=array();
			foreach($list as $property){
				if(isset($roperty->listing->id))
					$favorite_listingIds[]['listingId']=$property->listing->id;
			}
			update_option( $option_key_listid, $favorite_listingIds );
		
		}else{
			$saved = $this->zipperagent_get_cookie('saved_favorites');
			$dataCount = $saved ? count($saved) : 0;
		}
		
		return $dataCount;
	}
	
	public function zipperagent_get_saved_search_count(){

		// $contactIds = get_contact_id();	
		$userdata = $this->getCurrentUserContactLogin();
		
		if($userdata){
			$contactIds=array();
			foreach($userdata as $contact){
				$contactIds[]=$contact->id;
			}
				
			$combined_contactIds = implode(',',$contactIds);
			$contactIds_key = implode('_',$contactIds);
			$option_key = $contactIds_key . '_saved_search_count';
			
			$dataCount = get_option( $option_key );
			
			if($dataCount!=='')
				return (integer) $dataCount;
			
			$result = zipperagent_run_curl( '/api/mls/listSearches?contactId='. $combined_contactIds .'&ps=10&sidx=0' );
			$dataCount = isset($result['dataCount'])?$result['dataCount']:0;
			
			update_option( $option_key, $dataCount );
		}else{
			$saved = $this->zipperagent_get_cookie('saved_search');
			$dataCount = $saved ? count($saved) : 0;
		}
		
		return $dataCount;
	}
	
	public function is_facebook_bot(){
		if( strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||          
			strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false ) {
			// it is probably Facebook's bot
			return true;
		}else{
			return false;
		}
	}
	
	public function get_lead_source(){
		$rb = $this->zipperagent_rb();
		
		$leadSource=isset($rb['web']['lead_source'])?$rb['web']['lead_source']:'';
		
		return $leadSource;
	}
	
	public function get_assignedto(){
		$rb = $this->zipperagent_rb();
		
		$assignedto=isset($rb['web']['assignedto'])?$rb['web']['assignedto']:'';
		
		return $assignedto;
	}
}