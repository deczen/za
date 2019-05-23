<?php
if( ! function_exists('zipperagent_run_curl') ){
	function zipperagent_run_curl($url, $args=array(), $post=0, $vars='', $returnAll=0){
		
		$rb = zipperagent_rb();
		
		$subdomain = $rb['web']['subdomain'];
		$protocol = $rb['web']['protocol'];
		$consumer_key = $rb['web']['authorization']['consumer_key'];
		$access_token = $rb['web']['authorization']['access_token'];
		
		/* clear empty arguments */
		// foreach( $args as $k=>$v ){
			// if($v==='')
				// unset($args[$k]);
		// }
		// foreach( $args as $k=>&$v ){
			// $v=($v);
		// }
		
		$index=$url;
		$url = add_query_arg( $args, $protocol .'://'. $subdomain . $url );
		$url=esc_url_raw($url);
		// echo $url;
		
		$headers = array(
			'Content-type: application/json',
			'Authorization: consumer_key="'. $consumer_key .'",access_token="'. $access_token .'"',
		);
		
		if($vars){
			$headers[]='Content-length: '. strlen(json_encode($vars));
		}
		
		// return run_api( $url, $post, $headers, $vars );
		$start = microtime(true);	
		try{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, $post);
			// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			// curl_setopt($ch, CURLOPT_HTTPGET, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
			if($vars)
			curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($vars));  //Post Fields
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$json = curl_exec ($ch);
		
			curl_close ($ch);
		}catch( Exception $e ){
			print_r( $e );
		}
		$time_elapsed_secs = microtime(true) - $start;
		
		$log=new ZipperAgentLog('api.log','functions.php');
		$log->log_msg("[url= {$url}, time= {$time_elapsed_secs}s]");
		
		// echo( $json );
		$server_output = json_decode($json);
		
		if( (isset($server_output->status) && $server_output->status=='FAIL' )
			|| ( $server_output->responseCode >= 200 && $server_output->responseCode <= 299 && $server_output->status != 'SUCCESS')
			|| ! ( $server_output->responseCode >= 200 && $server_output->responseCode <= 299 ) ){
			if(isset($server_output->errors)){
				foreach($server_output->errors as $error){
					$log=new ZipperAgentLog('error.log','functions.php');
					$log->log_msg("[url= {$url}, status={$server_output->status}, responseCode={$server_output->responseCode}, error_message=\"{$error->errorMessage}\"]");					
				}
			}else if(isset($server_output->result)){
				$log=new ZipperAgentLog('error.log','functions.php');
				$log->log_msg("[url= {$url}, status={$server_output->status}, responseCode={$server_output->responseCode}, error_message=\"{$server_output->result}\"]");	
			}else{
				$log=new ZipperAgentLog('error.log','functions.php');
				$log->log_msg("[url= {$url}, status={$server_output->status}, responseCode={$server_output->responseCode}, error_message=\"no error message\"]");	
			}
		}
		
		// echo "<pre>"; print_r( $server_output  ); echo "</pre>";
		if($returnAll)
			$result = isset($server_output)?$server_output:array();
		else
			$result = isset($server_output->result)?$server_output->result:array();
		
		zipperagent_save_session_result($index, $result);
		
		return (array) $result;
	}
}

if( ! function_exists('zipperagent_save_session_result') ){
	function zipperagent_save_session_result($index, $result){
		$_SESSION[$index]=(array) $result;
	}
}

if( ! function_exists('zipperagent_get_session_result') ){
	function zipperagent_get_session_result($index){
		return isset($_SESSION[$index]) ? $_SESSION[$index] : '';
	}
}

if( ! function_exists('zipperagent_config') ){
	function zipperagent_config($debug=0){
		global $WORK_ENV;
		
		// unset($_SESSION['zipperagent_config']);
		if( $WORK_ENV=='DEV' || !isset($_SESSION['zipperagent_config']) || empty( $_SESSION['zipperagent_config'] ) || $debug ){
			include_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/autoload.php";
			
			$configdir = ZIPPERAGENTPATH . "/custom/files/";
			
			$config['configurationPath'] = null;
			try{
				$config = new Adoy\ICU\ResourceBundle\ResourceBundle('config', $configdir, true, new Adoy\ICU\ResourceBundle\Parser(new Adoy\ICU\ResourceBundle\Lexer()));
			}catch( Exception $e ){
				return false;
			}
			
			$save_session['configurationPath'] = $config['configurationPath'];
			$_SESSION['zipperagent_config']=$save_session;
			
			return $config;
		}else{
			return $_SESSION['zipperagent_config'];
		}
	}
}

if( ! function_exists('zipperagent_rb') ){
	function zipperagent_rb($debug=0){
		global $WORK_ENV;
		// unset($_SESSION['zipperagent_rb']);
		if( $WORK_ENV=='DEV' || !isset($_SESSION['zipperagent_rb']) || empty( $_SESSION['zipperagent_rb'] ) || $debug ){
			include_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/autoload.php";
			
			$HOME = $_SERVER['DOCUMENT_ROOT'] . '/../..';
			$defaultPath = $HOME . '/zipperagent/$websitedomain/root.txt';
			$domainName = str_replace( 'https://', '', get_site_url() );
			$domainName = str_replace( 'http://', '', $domainName );

			$config = zipperagent_config();
			$configurationPath = $config['configurationPath'];	
			$configurationPath = str_replace( 'ZIPPER_AGENT_HOME', $defaultPath, $configurationPath );
			$arr = explode( '/', $configurationPath );
			$filename = end($arr);
			$filenameWithoutExt =  basename($filename, ".txt");
			for( $i=0; $i<count($arr)-1 ; $i++ ){
				if( $i==0 )
					$rootdir= $arr[$i];
				else
					$rootdir.= '/'.$arr[$i];
			}	
			$rootdir = str_replace( '$HOME', $HOME, $rootdir );
			$rootdir = str_replace( '$websitedomain', $domainName, $rootdir );
			$rootdir = str_replace( '//', '/', $rootdir );
			
			// echo $rootdir. "<br />";
			try{
				$rb = new Adoy\ICU\ResourceBundle\ResourceBundle($filenameWithoutExt, $rootdir, true, new Adoy\ICU\ResourceBundle\Parser(new Adoy\ICU\ResourceBundle\Lexer()));
			}catch( Exception $e ){
				return false;
			}
			
			$save_session['web']['subdomain'] = $rb['web']['subdomain'];
			$save_session['web']['protocol'] = $rb['web']['protocol'];
			$save_session['web']['authorization']['consumer_key'] = $rb['web']['authorization']['consumer_key'];
			$save_session['web']['authorization']['access_token'] = $rb['web']['authorization']['access_token'];
			$save_session['web']['asrc'] = $rb['web']['asrc'];
			$save_session['web']['aloff'] = $rb['web']['aloff'];
			$save_session['web']['rnhidestreetno'] = $rb['web']['rnhidestreetno'];
			$save_session['web']['status_active'] = $rb['web']['status_active'];
			$save_session['web']['status_sold'] = $rb['web']['status_sold'];
			$save_session['web']['states'] = $rb['web']['states'];
			$save_session['web']['signup_optional'] = $rb['web']['signup_optional'];
			$save_session['web']['map_centre']['lat'] = $rb['web']['map_centre']['lat'];
			$save_session['web']['map_centre']['lng'] = $rb['web']['map_centre']['lng'];
			$save_session['web']['sign_up_interval'] = $rb['web']['sign_up_interval'];
			$save_session['web']['popup_show_time'] = $rb['web']['popup_show_time'];
			$save_session['web']['openhouse_searchbar'] = $rb['web']['openhouse_searchbar'];
			$save_session['web']['slider_show_popup_count'] = $rb['web']['slider_show_popup_count'];
			$save_session['web']['social_share'] = $rb['web']['social_share'];
			$save_session['web']['default_order'] = $rb['web']['default_order'];
			$save_session['web']['show_extra_search_feature'] = $rb['web']['show_extra_search_feature'];
			$save_session['web']['show_price_slider'] = $rb['web']['show_price_slider'];
			$save_session['web']['popup_visit_counter'] = $rb['web']['popup_visit_counter'];
			$save_session['web']['show_agent_list'] = $rb['web']['show_agent_list'];
			$save_session['web']['branded_virtualtour'] = $rb['web']['branded_virtualtour'];
			$save_session['web']['show_agent_name'] = $rb['web']['show_agent_name'];
			$save_session['web']['print_logo'] = $rb['web']['print_logo'];
			$save_session['web']['print_color'] = $rb['web']['print_color'];
			$save_session['web']['default_proptype'] = $rb['web']['default_proptype'];
			$save_session['web']['popup_detail_page_only'] = $rb['web']['popup_detail_page_only'];
			$save_session['web']['distance'] = $rb['web']['distance'];
			$save_session['web']['company_name'] = $rb['web']['company_name'];
			
			$save_session['layout']['listpage_layout'] = $rb['layout']['listpage_layout'];
			$save_session['layout']['detailpage_layout'] = $rb['layout']['detailpage_layout'];
			$save_session['layout']['detailpage_layout_sf'] = $rb['layout']['detailpage_layout_sf'];
			$save_session['layout']['detailpage_layout_mf'] = $rb['layout']['detailpage_layout_mf'];
			$save_session['layout']['detailpage_layout_mh'] = $rb['layout']['detailpage_layout_mh'];
			$save_session['layout']['detailpage_layout_ld'] = $rb['layout']['detailpage_layout_ld'];
			$save_session['layout']['detailpage_layout_rn'] = $rb['layout']['detailpage_layout_rn'];
			$save_session['layout']['detailpage_layout_cc'] = $rb['layout']['detailpage_layout_cc'];
			$save_session['layout']['detailpage_layout_ci'] = $rb['layout']['detailpage_layout_ci'];
			$save_session['layout']['detailpage_layout_bu'] = $rb['layout']['detailpage_layout_bu'];
			$save_session['layout']['detailpage_group'] = $rb['layout']['detailpage_group'];
			
			$save_session['google']['apikey'] = $rb['google']['apikey'];
			$save_session['google']['adwords']['code'] = $rb['google']['adwords']['code'];
			
			$save_session['facebook']['appid'] = $rb['facebook']['appid'];
			$save_session['facebook']['appsecret'] = $rb['facebook']['appsecret'];
			
			$save_session['tenant']['timezone'] = $rb['tenant']['timezone'];
			$save_session['tenant']['mls_timezone'] = $rb['tenant']['mls_timezone'];
			
			$save_session['credentials']['username'] = $rb['credentials']['username'];
			$save_session['credentials']['key'] = $rb['credentials']['key'];
			
			$_SESSION['zipperagent_rb'] = $save_session;
			
			return $rb;
		}else{
			
			// $_SESSION['zipperagent_rb']['layout']['detailpage_layout']="template-newDetail.php";
			
			return $_SESSION['zipperagent_rb'];
		}
	}
}

if( ! function_exists('zipperagent_run_curl2') ){
	function zipperagent_run_curl2($url, $args=array(), $post=0, $vars=''){
		
		$rb = zipperagent_rb();
		
		$subdomain = $rb['web']['subdomain'];
		$protocol = $rb['web']['protocol'];
		$consumer_key = $rb['web']['authorization']['consumer_key'];
		$access_token = $rb['web']['authorization']['access_token'];
			
		$url = add_query_arg( $args, $protocol .'://'. $subdomain . $url );
		echo $url;
		
		$headers = array(
			'Content-type: application/json',
			'Authorization: consumer_key="'. $consumer_key .'",access_token="'. $access_token .'"',
		);
		
		if($vars){
			$headers[]='Content-length: '. strlen(json_encode($vars));
		}
		
		try{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, $post);
			// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			// curl_setopt($ch, CURLOPT_HTTPGET, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
			if($vars)
			curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($vars));  //Post Fields
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$json = curl_exec ($ch);
			echo "<pre>"; print_r( $ch ); echo "</pre>";
			curl_close ($ch);
		}catch( Exception $e ){
			print_r( $e );
		}
		echo "<pre>"; print_r( $json ); echo "</pre>";
		$server_output = json_decode($json);
		
		return (array) $server_output;
	}
}

if( ! function_exists('zipperagent_get_address') ){
	function zipperagent_get_address($property){
		// echo "<pre>"; print_r( $property ); echo "</pre>";
		
		$rb = zipperagent_rb();
		
		$hide_streetnumber=0;
		$rnhidestreetno = isset($rb['web']['rnhidestreetno'])?$rb['web']['rnhidestreetno']:0;
		
		if( $rnhidestreetno && isset($property->proptype) && $property->proptype=="RN" ){
			$hide_streetnumber=1;
		}
		
		$streetname = isset($property->streetname)?$property->streetname:'';
		$lngTOWNSDESCRIPTION = isset($property->lngTOWNSDESCRIPTION)?$property->lngTOWNSDESCRIPTION:'';
		$provinceState = isset($property->provinceState)?$property->provinceState:'';
		$zipcode = isset($property->zipcode)?$property->zipcode:'';
		$streetno = isset($property->streetno)?$property->streetno:'';
		
		if($hide_streetnumber){
			$address = $streetname.' '.$lngTOWNSDESCRIPTION.', '.$provinceState.' '.$zipcode;
		}else{
			$address = $streetno.' '.$streetname.' '.$lngTOWNSDESCRIPTION.', '.$provinceState.' '.$zipcode;
		}
		
		return $address;
	}
}

if( ! function_exists('zipperagent_luxury_address') ){
	function zipperagent_luxury_address($property){
		// echo "<pre>"; print_r( $property ); echo "</pre>";
		
		$rb = zipperagent_rb();
		
		$hide_streetnumber=0;
		$rnhidestreetno = isset($rb['web']['rnhidestreetno'])?$rb['web']['rnhidestreetno']:0;
		
		if( $rnhidestreetno ){
			$hide_streetnumber=1;
		}
		$town_arr=get_towns_array(); // get towns array
		$streetname = isset($property->streetName)?$property->streetName:'';
		$townCode = isset($property->townCode)?$property->townCode:'';
		$lngTOWNSDESCRIPTION = isset($town_arr[$townCode])?$town_arr[$townCode]:$townCode;
		$provinceState = isset($property->stateCode)?$property->stateCode:'';
		$zipcode = isset($property->zipCode)?$property->zipCode:'';
		$streetno = isset($property->streetNo)?$property->streetNo:'';
		
		if($hide_streetnumber){
			$address = $streetname.' '.$lngTOWNSDESCRIPTION.', '.$provinceState.' '.$zipcode;
		}else{
			$address = $streetno.' '.$streetname.' '.$lngTOWNSDESCRIPTION.', '.$provinceState.' '.$zipcode;
		}
		
		return $address;
	}
}

if( ! function_exists('zipperagent_use_default_status') ){
	function zipperagent_use_default_status(){
		$rb = zipperagent_rb();
		
		// short long
		// 1: Active
		// 2: Sold
		// 3: Pending
		// 4: Expired
		// 5: Withdrawn
		// 6: Rental Leased
		
		$usecustomstatus = isset($rb['web']['usecustomstatus'])?$rb['web']['usecustomstatus']:0;
		return $usecustomstatus;
	}
}

if( ! function_exists('zipperagent_get_default_status') ){
	function zipperagent_get_default_status($status){
		$field_name = 'status_' . $status;
		$rb = zipperagent_rb();
		$field_value = isset($rb['web'][$field_name])?$rb['web'][$field_name]:0;
		return $field_value;
	}
}

if( ! function_exists('zipperagent_slider_limit_popup') ){
	function zipperagent_slider_limit_popup(){
		$rb = zipperagent_rb();
		$field_value = isset($rb['web']['slider_show_popup_count'])?$rb['web']['slider_show_popup_count']:3;
		return $field_value;
	}
}

if( ! function_exists('zipperagent_active_status') ){
	function zipperagent_active_status(){
		$active = zipperagent_get_default_status('active');
		
		if($active)
			return $active;
		else
			return 'ACT,NEW,PCG,BOM,EXT,RAC';
	}
}

if( ! function_exists('zipperagent_sold_status') ){
	function zipperagent_sold_status(){
		$sold = zipperagent_get_default_status('sold');
		
		if($sold)
			return $sold;
		else
			return 'SLD';
	}
}

if( ! function_exists('zipperagent_rental_status') ){
	function zipperagent_rental_status(){
		$rental='';
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/static-references.php";
		$json=ob_get_clean();
		$obj=json_decode($json);
			
		if(isset($obj->status) && $obj->status=='SUCCESS' && isset($obj->result)){
			$result = $obj->result;
			
			if( isset($result->filteredDataMap->PROPTYPE) ){
				$entities = $result->filteredDataMap->PROPTYPE;
				foreach( $entities as $entity ){
					if(isset($entity->isRental) && $entity->isRental)
						$rental=$entity->shortDescription;
				}
			}
		}
				
		if($rental)
			return $rental;
		else
			return 'RN';
	}
}

if( ! function_exists('get_rental_status') ){
	function get_rental_status(){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/rental.php";
		$json = ob_get_clean();
		$obj = json_decode($json);
		
		return isset($obj->rental)?$obj->rental:null;
	}
}

if( ! function_exists('zipperagent_get_status_name') ){
	function zipperagent_get_status_name( $status ){
		
		$converted_status='';
		$fields = get_field_list();
		
		
		/*$propTypeFields = get_property_type(array('NA','NA1'));
		 // echo "<pre>"; print_r( $propTypeFields ); echo "</pre>";
		if($propTypeFields){
			foreach($propTypeFields as $shortDescription=>$longDescription){
				if($status==$shortDescription){
					$converted_status = $longDescription;
					break;
				}
			}
		}*/
		
		if( isset( $fields->STATUS ) ){
			// echo "<pre>"; print_r( $fields->STATUS ); echo "</pre>";
			foreach( $fields->STATUS as $entity ){			
				if($status==$entity->shortDescription || $status==$entity->mediumDescription){
					$converted_status = $entity->longDescription;
					break;
				}
			}
			
		}else{
			switch($status){
				case "ACT":
						$converted_status="Active";
					break;
				case "BOM":
						$converted_status="Back on Market";
					break;
				case "CAN":
						$converted_status="Canceled";
					break;
				case "CTG":
						$converted_status="Contingent";
					break;
				case "EXP":
						$converted_status="Expired";
					break;
				case "EXT":
						$converted_status="Extended";
					break;
				case "KIL":
						$converted_status="Killed";
					break;
				case "NEW":
						$converted_status="New";
					break;
				case "PCG":
						$converted_status="Price Changed";
					break;
				case "RAC":
						$converted_status="Reactivated";
					break;
				case "RNT":
						$converted_status="Rented";
					break;
				case "SLD":
						$converted_status="Sold";
					break;
				case "UAG":
						$converted_status="Under Agreement";
					break;
				case "WDN":
						$converted_status="Temporarily Withdrawn";
					break;
			};
		}	
		
		if(!$converted_status)
			$converted_status=$status;
		
		return $converted_status;
	}
}

if( ! function_exists('proces_crit') ){
	function proces_crit($args){
		$temp=array();
		foreach( $args as $k=>$v ){
			if($v!==''){
				
				switch( $k ){
					// case "astnm":
							// $temp[]=$k.'='.$v;
						// break;
					default:
							$temp[]=$k.':'.$v;
						break;
				}			
			}
		}
		
		$crit = implode(';',$temp);
		$crit = empty($crit)?'':$crit.';';
		return $crit;
	}
}

if( ! function_exists('save_property') ){
	function save_property( $property_id, $address ){
		global $wpdb;
		
		$permalink='';
		$post_id=$wpdb->get_var( "SELECT p.ID FROM {$wpdb->posts} p, {$wpdb->postmeta} m WHERE post_type='single-property' AND p.ID=m.post_id AND m.meta_key='_property_id' AND m.meta_value='{$property_id}' LIMIT 1" );

		if( ! $post_id ){
			$args = array(
			  'post_title'    => $address,
			  'post_content'  => "[single_property id={$property_id}]",
			  'post_status'   => 'publish',
			  'post_type'   => 'single-property',
			  'post_author'   => 1,
			);
			$post_id=wp_insert_post($args);
			update_post_meta( $post_id, '_property_id', $property_id );
		}
		$permalink=get_permalink($post_id);
		
		return $permalink;
	}
}

if( ! function_exists('zipperagent_property_url') ){
	function zipperagent_property_url( $propertyId, $fulladdress ){
		$url = null;
		if( interface_exists( 'zipperAgentConstants' ) ){
			$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL, null);
			$endpoint = !empty($endpoint)?$endpoint:'listing';
			$url = site_url("/{$endpoint}/{$propertyId}/".sanitize_title($fulladdress)."/");	
		}
		return $url;
	}
}

if( ! function_exists('zipperagent_luxury_property_url') ){
	function zipperagent_luxury_property_url( $luxuryId, $listingId ){
		$url = null;
		if( interface_exists( 'zipperAgentConstants' ) ){
			$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_LUXURY_DETAIL, null);
			$endpoint = !empty($endpoint)?$endpoint:'luxury-listing';
			$url = site_url("/{$endpoint}/{$luxuryId}/".sanitize_title($listingId));	
		}
		return $url;
	}
}

if( ! function_exists('zipperagent_page_url') ){
	function zipperagent_page_url($name){
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
							$endpoint = zipperagent_user_slug();
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
}

if( ! function_exists('zipperagent_property_type') ){
	function zipperagent_property_type( $code ){
		
		$propertyType = $code;
		$propTypeFields = get_field_reference_property_type();
		
		if(!$propTypeFields){// if value empty, use static references
			$propTypeFields=get_property_type();
		}
		
		if(sizeof($propTypeFields) && isset( $propTypeFields[$code] )){
			$propertyType = $propTypeFields[$code];
		}
		
		return $propertyType;
	}
}

if( ! function_exists('alert_type_api_call') ){
	function alert_type_api_call(){
		
		$obj = (object) zipperagent_run_curl('/api/contact/meta/fields?fieldIds=alert', array(), 0, '', 1);
		
		return $obj;
	}
}

if( ! function_exists('get_static_references') ){
	function get_static_references($type='PROPTYPE'){
		$arr=array();
		
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/static-references.php";
		$json=ob_get_clean();
		$obj=json_decode($json);
		
		if(isset($obj->status) && $obj->status=='SUCCESS' && isset($obj->result)){
			$result = $obj->result;
			// echo "<pre>"; print_r($result); echo "</pre>";
			if( isset($result->filteredDataMap->$type) ){
				$entities = $result->filteredDataMap->$type;
				$arr=$entities;
				/* foreach( $entities as $entity ){
					
					if($entity->type=='NA')
						$arr[$entity->shortDescription]=isset($entity->longDescription)?$entity->longDescription: ( isset($entity->shortDescription) ? $entity->shortDescription : '' );
					else if($entity->type=='NA1')
						$arr[$entity->shortDescription]=isset($entity->longDescription)?$entity->longDescription: ( isset($entity->shortDescription) ? $entity->shortDescription : '' );
				}*/
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_static_references') ){
	function populate_static_references(){
		$obj = zipperagent_run_curl('/api/mls/staticReferences', array(), 0, '', 1);
		
		return $obj;
	}
}
if( ! function_exists('get_meta_fields') ){
	function get_meta_fields(){
		
		$obj = (object) zipperagent_run_curl('/api/mls/meta', array(), 0, '', 1);
				
		return $obj;
	}
}

if( ! function_exists('get_references_field') ){
	function get_references_field($field){
		$fields = get_field_list();
		
		return isset($fields->$field)?$fields->$field:array();
	}
}

/*
if( ! function_exists('get_property_type') ){
	function get_property_type($type=array('NA')){	
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/proptype.php";
		$json=ob_get_clean();
		$data=json_decode($json);
		
		$arr=array();
		
		foreach($data as $entity){
			
			if($type!='' && in_array($entity->type, $type)){
				$arr[$entity->shortDescription]=$entity->longDescription;
			}else if(!$type){
				$arr[$entity->shortDescription]=$entity->longDescription;
			}
		}
		
		return $arr;
	}
} */

if( ! function_exists('get_property_type') ){
	function get_property_type($type=array('NA')){	
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/proptype-static.php";
		$json=ob_get_clean();
		$data=json_decode($json);
		
		$arr=array();
		
		// echo "<pre>"; print_r($data); echo "</pre>";
		
		foreach($data as $entity){
			
			$curr_type = isset($entity->type)?$entity->type:'';
			
			if($type!='' && in_array($curr_type, $type)){
				$arr[$entity->shortDescription]=$entity->longDescription;
			}else if(!$type){
				$arr[$entity->shortDescription]=$entity->longDescription;
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('get_property_sub_type') ){
	function get_property_sub_type($type=array('NA')){	
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/propsubtype-static.php";
		$json=ob_get_clean();
		$data=json_decode($json);
		
		$arr=array();
		
		// echo "<pre>"; print_r($data); echo "</pre>";
		
		foreach($data as $entity){
			
			$curr_type = isset($entity->type)?$entity->type:'';
			
			if($type!='' && in_array($curr_type, $type)){
				$arr[$entity->shortDescription]=$entity->longDescription;
			}else if(!$type){
				$arr[$entity->shortDescription]=$entity->longDescription;
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('get_field_reference_property_type') ){
	function get_field_reference_property_type(){	
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/proptype.php";
		$json=ob_get_clean();
		$data=json_decode($json);
		
		$arr=array();
		
		foreach($data as $entity){
			$arr[$entity->shortDescription]=$entity->longDescription;
		}
		
		return $arr;
	}
}

if( ! function_exists('get_lot_descriptions') ){
	function get_lot_descriptions(){	
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/lotdescription.php";
		$json=ob_get_clean();
		$data=json_decode($json);
		
		$arr=array();
		
		if($data){
			foreach($data as $entity){			
				$arr[$entity->shortDescription]=$entity->longDescription;			
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('zipperagent_location_field_label') ){
	function zipperagent_location_field_label($code){
		$label=$code;
		
		return $label;
	}
}

if( ! function_exists('zipperagent_user_id') ){
	function zipperagent_user_id(){
		
		$contactIds = get_contact_id();
		
		return $contactIds;
	}
}

if( ! function_exists('get_contact_id') ){
	function get_contact_id(){
		
		$contactIds=array();
		
		if( (isset($_SESSION['contactId']) && !empty($_SESSION['contactId'])) || (isset($_COOKIE['contactId']) && !empty($_COOKIE['contactId'])) ){
			$result=isset($_SESSION['contactId'])?$_SESSION['contactId']:zipperagent_get_cookie('contactId');
			// $contactIds=is_array($result)&&isset($result[0])?$result[0]:$result;
			$contactIds=$result;
		}
		/*else{
			$result=zipperagent_run_curl('/api/contact/tempId', array(), 1);
			// $contactIds=is_array($result)&&isset($result[0])?$result[0]:$result;
			$contactIds=!is_array($result)?array($result):$result;
			$_SESSION['contactId']=$contactIds;
		}*/
		
		//force to array to avoid implode error
		if(!is_array($contactIds)){
			$contactIds=array($contactIds);
		}
		
		//make sure its not empty
		/*if(empty($contactIds) || ( isset($contactIds[0]) && empty($contactIds[0]) )){
			$contactIds=get_contact_id();
		}*/
		
		return $contactIds;
	}
}

if( ! function_exists('save_contact_id') ){
	function save_contact_id($new_contactIds){
		$_SESSION['contactId']=$new_contactIds;
	}
}

if( ! function_exists('userContactLogin') ){
	function userContactLogin($email, $remember=0){
		$userdata=getUserContact($email);
		
		if( $userdata ){
			
			foreach($userdata as $contact){
				$contactIds[]=$contact->id;
			}
			
			$_SESSION['contactId']=$contactIds;
			$_SESSION['userMail']=$email;
			$_SESSION['userRemember']=$remember;
			$_SESSION['userdata']=$userdata;
			
			return true;
		}
		
		return false;
	}
}

if( ! function_exists('userContactLoggout') ){
	function userContactLoggout(){
		unset($_SESSION['userMail']);
		unset($_SESSION['userRemember']);
		unset($_SESSION['contactId']);
		unset($_SESSION['userdata']);
		unset($_COOKIE['userMail']);
		unset($_COOKIE['userRemember']);
		unset($_COOKIE['contactId']);
		setcookie('userMail', null, -1, '/');
		setcookie('userRemember', null, -1, '/');
		setcookie('contactId', null, -1, '/');
	}
}

if( ! function_exists('getCurrentUserContactLogin') ){
	function getCurrentUserContactLogin(){
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
}

if( ! function_exists('get_current_user_assigned_agent') ){
	function get_current_user_assigned_agent(){
		$userdata = getCurrentUserContactLogin();
		
		$assignedTo='';
		
		foreach($userdata as $user){
			if(isset($user->assignedTo)){
				$assignedTo=$user->assignedTo;
				break;
			}
		}
		
		return $assignedTo;
	}
}

if( ! function_exists('getUserContact') ){
	function getUserContact($email, $assign=''){
		
		if(!$email)
			return array();
		
		$search=array(
			'pe' => $email
		);		
		
		//set assign
		if($assign){
			$search['login']=$assign;
		}
		
		$vars=array(
			'crit'=>proces_crit($search),
			'o' => 'ls:WEBST:TOP;uo:DESC',
			'sidx'=>0,
			'ps'=>1,
		);
			
		$result=zipperagent_run_curl('/api/lite/contact/list', $vars);
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		
		if( $result['dataCount'] ){
			$userdata = $result['filteredList'];
		}else{
			$userdata = array();
		}
		
		return $userdata;
	}
}

if( ! function_exists('getAgentList') ){
	function getAgentList(){
		$result = (array) zipperagent_get_agent_list();
		
		$agentList = isset($result['filteredList'])?$result['filteredList']:array();
		
		return $agentList;
	}
}

if( ! function_exists('zipperagent_register_user') ){
	function zipperagent_register_user( $vars ){
		// $result = saveUserContact($vars);
		$result = zipperagent_run_curl("/api/contact/saveTemp", array(), 1, $vars, 1);
		return (object) $result;
	}
}

if( ! function_exists('zipperagent_contact_agent') ){
	function zipperagent_contact_agent( $vars ){
		// $result = saveUserContact($vars);
		$result = zipperagent_run_curl("/api/contact/saveTemp", array(), 1, $vars);
		return $result;
	}
}

if( ! function_exists('saveUserContact') ){
	function saveUserContact($vars){
		// echo "<pre>"; print_r($vars); echo "</pre>";
		$result = zipperagent_run_curl("/api/lite/contact/save", array(), 1, $vars);
		$email = $vars['emailWork1'];
		$remember = $_SESSION['userRemember'];
		
		//reset userdata session
		userContactLogin($email, $remember);
		
		return $result;
	}
}

if( ! function_exists('zipperagent_user_confirmation') ){
	function zipperagent_user_confirmation($tempId){
		$result = zipperagent_run_curl("/api/contact/verifyTemp?id={$tempId}", array(), 1, array(), 1);
		return (object)$result;
	}
}

if( ! function_exists('get_single_property') ){
	function get_single_property( $listingId, $contactIds='', $searchId='' ){
		
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
}

if( ! function_exists('get_single_luxury') ){
	function get_single_luxury( $luxuryId ){
		
		$url="/api/mls/getBuilding?id=".$luxuryId;
		// die( $url );
		$result = zipperagent_run_curl($url);
		// echo "<pre>"; print_r($result); echo "</pre>";
		//force array to object
		$result = is_array( $result ) ? (object) $result : $result;
		
		return $result;
	}
}

if( ! function_exists('zipperagent_property_fields') ){
	function zipperagent_property_fields($single_property, $html){
		// return $html;
		$rb = zipperagent_rb();
		$rnhidestreetno = isset($rb['web']['rnhidestreetno'])?$rb['web']['rnhidestreetno']:0;
		
		$replaces=array();
		$find=array();
		if( sizeof($single_property) ){
			foreach( $single_property as $k=>$v ){
				if( ! is_array( $v ) && !is_object( $v ) ){ //level 1
					
					$find[]="[$k]";
					
					switch( $k ){
						case "listprice":
						case "squarefeet":
						case "taxes":
								$replaces[]=number_format_i18n( $v, 0 );
							break;
						case "status":
								$replaces[]=zipperagent_get_status_name($v);
							break;
						case "proptype":
								$replaces[]=zipperagent_property_type($v);
							break;
						case "syncTime":
								$mlstz = zipperagent_timezone();
								$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
								$dt->setTimestamp($v/1000); //adjust the object to correct timestamp
								$datetime = $dt->format('Y-m-d h:i A');
								$replaces[]=$datetime;								
							break;
						case "streetno":
								if($rnhidestreetno && $single_property->proptype=="RN")
									$replaces[]='';
								else
									$replaces[]=zipperagent_field_value( $k, $v, $single_property->proptype );
							break;
						// case "beachfrontflag":
						// case "waterfrontflag":
						// case "waterviewflag":
						// case "basement":
						// case "adultcommunity":
						// case "apodavailable":
						// case "disclosure":
						// case "lenderowned":
						// case "shortsalelenderappreqd":
								// $replaces[]=zipperagent_yes_no_value($v);
							// break;					
						default:								
								$replaces[]=zipperagent_field_value( $k, $v, $single_property->proptype );
							break;
					}
				}else if(is_array( $v ) || is_object( $v )){ //level 2,3,4,..
					foreach($v as $k2 => $v2){
						
						if(!is_array($v2) && !is_object($v2)){					
							$find[]="[{$k}_{$k2}]";
							$replaces[]=zipperagent_field_value( $k2, $v2, $single_property->proptype );
						}else if(is_array($v2)){
							foreach($v2 as $k3 => $v3){
								if(!is_array($v3) && !is_object($v3)){
									$find[]="[{$k}_{$k2}_{$k3}]";
									$replaces[]=zipperagent_field_value( $k3, $v3, $single_property->proptype );
								}
							}
						}else if(is_object($v2)){
							foreach($v2 as $k3 => $v3){
								if(!is_array($v3) && !is_object($v3)){
									$find[]="[{$k}_{$k2}_{$k3}]";
									$replaces[]=zipperagent_field_value( $k3, $v3, $single_property->proptype );
								}
							}
						}
					}
				}
			}
			
			//custom field
			
			// [realprice]
			$price=($single_property->status=='SLD'?(isset($single_property->saleprice)?$single_property->saleprice:$single_property->listprice):$single_property->listprice);
			$find[]="[realprice]";
			$replaces[]=number_format_i18n( $price, 0 );
			
			// [provinceState]
			if(!isset($single_property->provinceState)){
				$find[]="[provinceState]";
				$replaces[]="";
			}
			
			// [zipcode]
			if(!isset($single_property->zipcode)){
				$find[]="[zipcode]";
				$replaces[]="";
			}
		}
		// echo "<pre>"; print_r($find); echo "</pre>";
		// echo "<pre>"; print_r($replaces); echo "</pre>";
		
		if(!is_array($html)){
			$html = str_replace($find,$replaces,$html);
			
			// $html = preg_replace("/\[([^\]]*)\]/", "-", $html);
			// $html = preg_replace("/\[([\w\h,]+)\]/", "-", $html);
			$html = preg_replace("/\[([\w\h,]+){2,}\]/", "-", $html); //more than 1 chars
		}else{
			foreach($html as $key=>&$source){
				$source = str_replace($find,$replaces,$source);
				$source = preg_replace("/\[([\w\h,]+){2,}\]/", "-", $source); //more than 1 chars
			}
		}
		
		return $html;
	}
}

if( ! function_exists('zipperagent_list_total') ){
	function zipperagent_list_total($count){
		return number_format_i18n($count,0) . " Result(s)";
	}
}
if( ! function_exists('zipperagent_pagination') ){
	function zipperagent_pagination($page, $num, $count, $actual_link){
		ob_start();
		?>
		<ul class="pagination">
			<?php
			/* pagination */
			$total = $count;
			$pagescount = ceil($total/$num);
			$current_url=$actual_link;
			$back_url=$page>1?add_query_arg( array( 'page' => $page-1 ), $current_url ):'#';
			$next_url=$page<$pagescount?add_query_arg( array( 'page' => $page+1 ), $current_url ):'#';
			?>
			<li class="<?php if( $back_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $back_url ?>">&laquo;</a>
			</li>
			<li class="disabled"><a href="#"><?php echo $page ?> of <?php echo $pagescount ?></a>
			</li>
			<li class="<?php if( $next_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $next_url ?>">&raquo;</a>
			</li>
		</ul>
		<?php
		return ob_get_clean();
	}
}

if( ! function_exists('zipperagent_yes_no_value') ){
	function zipperagent_yes_no_value($code){
		switch($code){
			case "Y":
					return "Yes";
				break;
			case "N":
					return "No";
				break;
			default:
					return $code;
				break;
		};
	}
}

if( ! function_exists('zipperagent_schedule_show') ){
	function zipperagent_schedule_show($listingId, $contactIds, $assignedTo, $when, $slot='', $message='', $crit=array(), $searchId=''){
		$arr=array();
		$url="/api/mls/saveShowing";
		
		$vars=array(
			'crit'=>proces_crit($crit),
		);
		
		if($listingId) $vars['listingId'] = $listingId;
		if($contactIds) $vars['contactId'] = $contactIds;
		if($assignedTo) $vars['assignedTo'] = $assignedTo;
		if($when) $vars['when'] = $when;
		if($slot) $vars['slot'] = $slot;
		if($message) $vars['message'] = $message;
		
		if($searchId)
		$vars['searchId']=$searchId;
		
		if(!$contactIds)
			return false; //make sure contactIds is not empty
		
		// echo "<pre>"; print_r($vars); echo "</pre>";
		
		$result = (object) zipperagent_run_curl($url, $vars, 1, array(), 1);
		
		return $result;
	}
}

if( ! function_exists('zipperagent_request_info') ){
	function zipperagent_request_info($listingId, $contactIds, $login, $question, $crit=array(), $searchId=''){
				
		$vars=array(
			'listingId'=>$listingId,
			'contactId'=>$contactIds,			
			'question'=>($question),
		);
		
		if($login) $vars['login']=$login;
		
		if(sizeof($crit) && !$searchId){
			$vars['crit']=proces_crit($crit);
		}
		
		if($searchId){
			$url="/api/mls/saveListing";
			$vars['searchId']=$searchId;			
		}else{						
			$url="/api/mls/multi/saveListing";
		}
		
		$result = (object) zipperagent_run_curl($url, $vars, 1, array(), 1);
		
		return $result;
	}
}

if( ! function_exists('zipperagent_share_email') ){
	function zipperagent_share_email($listingId, $contactIds, $recepient_name, $recepient_emails=array(), $email_subject, $body, $send_copy=0){
		
		$recipients=array();
		
		foreach($recepient_emails as $recepient_email){
			$recepient_email=trim($recepient_email);
			if (filter_var($recepient_email, FILTER_VALIDATE_EMAIL)) {
				$recipients[]=array(
					'email'=>$recepient_email,
					'type'=>'to',
				);
			}
		}
		
		if($send_copy){
			
			$userdata = getCurrentUserContactLogin();
			$firstUser=isset($userdata[0])?$userdata[0]:false;
			$firstname=isset($firstUser->firstName)?$firstUser->firstName:'';
			$lastname=isset($firstUser->lastName)?$firstUser->lastName:'';
			$fullname = $firstname. ' ' .$lastname;
			$recipients[]=array(
				'email'=>isset($firstUser->emailWork1)?$firstUser->emailWork1:'',
				'type'=>'to',
			);
		}
		
		$vars=array(
			'allRecipients'=>$recipients,		
			'subject'=>$email_subject,		
			'body'=>$body,
			'tracked'=> true,
		);
				
		$url="/api/mls/sendEmail/{$contactIds}/{$listingId}";
		
		$result = (object) zipperagent_run_curl($url, array(), 1, $vars, 1);
		
		// echo "<pre>"; print_r($vars); echo "</pre>";
		
		return $result;
	}
}

if( ! function_exists('zipperagent_save_search') ){
	function zipperagent_save_search($vars){
		// $result = zipperagent_run_curl( "/api/mls/saveSearch/", $vars, 1 );
		$result = zipperagent_run_curl( "/api/mls/multi/saveSearch", $vars, 1 );
		
		return $result;
	}
}
	
if( ! function_exists('zipperagent_save_property') ){
	function zipperagent_save_property($listingId, $contactIds, $favorite, $crit=array(), $searchId=''){
		
		$vars=array(		
			'listingId'=>$listingId,
			'contactId'=>$contactIds,
		);
		
		if( $favorite ){
			$vars['interest']=5;
		}
		
		if( sizeof($crit) && !$searchId ){
			// $vars['crit']=proces_crit($crit); "save with crit criteria" is disabled
		}
		
		if($searchId){
			$url="/api/mls/saveListing";
			$vars['searchId']=$searchId;			
		}else{						
			$url="/api/mls/multi/saveListing";
		}
		
		$result = (object) zipperagent_run_curl($url, $vars, 1, array(), 1);
		
		return $result;
	}
}

if( ! function_exists('add_saved_cookies_to_account') ){
	function add_saved_cookies_to_account(){
			
			if( ! getCurrentUserContactLogin() ) //only for login user
				return;
			
			$saved_search = zipperagent_get_cookie('saved_search');
			$saved_favorites = zipperagent_get_cookie('saved_favorites');
			
			$contactIds = implode(',', get_contact_id());
			
			//add cookies to account
			if(is_array($saved_search)){
				foreach($saved_search as $search){
					$vars=$search['vars'];
					$vars['contactId']=$contactIds;
					$result=zipperagent_save_search($vars);
					// echo "<pre>"; print_r($result); echo "</pre>";
				}
			}
			
			if(is_array($saved_favorites)){
				foreach($saved_favorites as $favorite){
					zipperagent_save_property($favorite['listingId'], $contactIds, true, $favorite['crit'], $favorite['searchId']);
				}
			}
			
			//clear cookies
			zipperagent_set_cookie('saved_search', ''); 
			zipperagent_set_cookie('saved_favorites', '');
			
			//reset cache count
			$contactIds_key = str_replace(',','_',$contactIds);
			
			$option_key = $contactIds_key . '_saved_search_count';
			update_option( $option_key, '' );
			
			$option_key = $contactIds_key . '_favorites_count';
			update_option( $option_key, '' );
	}
}

if( ! function_exists('zipperagent_save_property_cookie') ){
	function zipperagent_save_property_cookie($listingId, $contactIds, $favorite, $crit=array(), $searchId=''){
		
		$add=array(
			'listingId'=>$listingId,
			'contactIds'=>$contactIds,
			'favorite'=>$favorite,
			'crit'=>$crit,
			'searchId'=>$searchId,
		);		
		
		$saved = zipperagent_get_cookie('saved_favorites');
		
		if(!is_array($saved)){
			$saved=array();
		}
		
		$saved[$listingId]=$add;
		
		zipperagent_set_cookie('saved_favorites', $saved);
		
		return count($saved);
	}
}

if( ! function_exists('zipperagent_save_search_cookie') ){
	function zipperagent_save_search_cookie($vars){
		
		$add=array(
			'vars'=>$vars,
		);		
		
		$saved = zipperagent_get_cookie('saved_search');
		
		if(!is_array($saved)){
			$saved=array();
		}
		
		$saved[]=$add;
		
		zipperagent_set_cookie('saved_search', $saved);
		
		return count($saved);
	}
}

if( ! function_exists('zipperagent_meta') ){
	function zipperagent_meta(){
		$arr=array();
		$url="/api/mls/meta";
		$result = (object) zipperagent_run_curl($url);
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		return $result;
	}
}

if( ! function_exists('zipperagent_area_town') ){
	function zipperagent_area_town(){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/areaTowns.php";
		$json=ob_get_clean();
		$data=json_decode($json);
		
		return $data;
	}
}

if( ! function_exists('generate_area_town') ){
	function generate_area_town(){
		$arr=array();
		
		$rb = zipperagent_rb();
		$states=isset($rb['web']['states'])?$rb['web']['states']:'';
		
		$qry = $states ? '/?states=' . urldecode($states) : '';
		
		$url="/api/mls/getAreaTowns" . $qry;
		$result = (object) zipperagent_run_curl($url);
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		return $result;
	}
}

if( ! function_exists('zipperagent_get_map_centre') ){
	function zipperagent_get_map_centre(){
		$rb = zipperagent_rb();
		
		//default boston area
		$default_lat='42.114524';
		$default_lng='-72.014008';
		
		$za_lat=!empty($rb['web']['map_centre']['lat'])?$rb['web']['map_centre']['lat']:$default_lat;
		$za_lng=!empty($rb['web']['map_centre']['lng'])?$rb['web']['map_centre']['lng']:$default_lng;
		
		return array('za_lat'=>$za_lat, 'za_lng'=>$za_lng);
	}
}

if( ! function_exists('zipperagent_source_details') ){
	function zipperagent_source_details(){
		
		global $WORK_ENV;		
		
		// unset($_SESSION['zipperagent_source']);
		// if( $WORK_ENV=='DEV' || !isset($_SESSION['zipperagent_source'])){
			
			$rb = zipperagent_rb();
			$asrc=$rb['web']['asrc'];
			$url="/api/mls/getSourceDetails?sources=".$asrc;
			$result = zipperagent_run_curl($url);
			// echo "<pre>"; print_r( $result); echo "</pre>";
			
			$source=array();
			if(isset($result)){
				foreach( $result as $obj ){
					
					// echo "<pre>"; print_r( $obj); echo "</pre>";
					$file_path='';
					$logo_url='';
					if(isset($obj->logo)){
						$logo_dir_path=ZIPPERAGENTPATH . '/custom/logo/';
						$logo_dir_url=ZIPPERAGENTURL . 'custom/logo/';
						$file_path = zipperagent_base64_to_jpeg($obj->logo, $logo_dir_path, $obj->code);
						
						$logo_url = str_replace( $logo_dir_path, $logo_dir_url, $file_path);
					}
					
					// $source[$obj->code]['id']=isset($obj->id)?$obj->id:'';
					// $source[$obj->code]['version']=isset($obj->version)?$obj->version:'';
					// $source[$obj->code]['code']=isset($obj->code)?$obj->code:'';
					// $source[$obj->code]['name']=isset($obj->name)?$obj->name:'';
					// $source[$obj->code]['logo']=isset($obj->logo)?$obj->logo:'';
					// $source[$obj->code]['discList']=isset($obj->discList)?$obj->discList:'';
					// $source[$obj->code]['discDetail']=isset($obj->discDetail)?$obj->discDetail:'';
					foreach($obj as $k=>$v){
						$source[$obj->code][$k]=$v;
					}
					$source[$obj->code]['logo_url']=file_exists($file_path) ? $logo_url : '';
					$source[$obj->code]['logo_path']=file_exists($file_path) ? $file_path : '';				
				}
			}	
			// $_SESSION['zipperagent_source'] = $source;	
			return $source;
		// }else{
			
			// return $_SESSION['zipperagent_source'];
		// }	
	}
}

if( ! function_exists('zipperagent_get_source_details_cached') ){
	function zipperagent_get_source_details_cached(){
		
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/source.php";
		$json=ob_get_clean();
		$data=json_decode($json,true);
		
		return $data;
	}
}

if( ! function_exists('zipperagent_get_listing_disclaimer') ){
	function zipperagent_get_listing_disclaimer(){
		$sources = zipperagent_get_source_details_cached();
		$text='';
		if(sizeof($sources)){
			foreach( $sources as $source ){	
			
				// unset($source['discComingle']);
				if(isset($source['logo_path']) && file_exists($source['logo_path'])){
					$text.='<img src="'. $source['logo_url'] .'" alt="'. $source['name'] .'" />' . ' ';
					
					if( ( ! isset($source['discComingle']) || empty($source['discComingle']) ) && isset($source['copyrightUrl'])){
						$text.= '<a target="_blank" href="'. $source['copyrightUrl'] .'">click here</a>' . ' ';
					}
				}
				
				$text .= (isset($source['discComingle']) && !empty($source['discComingle'])) ? $source['discComingle'] : ( isset($source['discList']) ? $source['discList'] : '' );
				$text .= "<br/><br/>";
			}
		}
		
		return $text;
	}
}

if( ! function_exists('zipperagent_get_idx_logo') ){
	function zipperagent_get_idx_logo($sourceid){
		$sources = zipperagent_get_source_details_cached();
		
		if( ! isset($sources[$sourceid]) )
			return '';
		
		$source = $sources[$sourceid];
		
		if(file_exists($source['logo_path'])){
			return $source['logo_url'];
		}else{
			return '';
		}
	}
}

if( ! function_exists('zipperagent_get_source_text') ){
	function zipperagent_get_source_text($sourceid, $params, $type){
		$sources = zipperagent_get_source_details_cached();
		
		if( ! isset($sources[$sourceid]) )
			return '';
		
		$source = $sources[$sourceid];
		$text = '';
		
		extract($params);
		
		switch($type){
			case "list":
					if(isset($listAgentName) && !empty($listAgentName) && is_show_agent_name()){
						$text.= sprintf( "Listing Provided Courtesy %s of", $listAgentName);							
					}else{
						$text.= "Listing Provided Courtesy of";						
					}
					
					if(isset($listOfficeName) && !empty($listOfficeName)){
						$text.= ' '. "<strong>$listOfficeName</strong>";
					}		
					
					if(file_exists($source['logo_path'])){
						$text.= '<img src="'. $source['logo_url'] .'" alt="'. $source['name'] .'" />';
						
						if($source['copyrightUrl']){
							$text.=' ' . '<a target="_blank" href="'. $source['copyrightUrl'] .'">click here</a>';
						}
					}
					$text.= ' '. 'via ' . $source['name'];
					
				break;
			/* case "detail":
					$year = isset($source['year'])?$source['year']:date("Y");
					$text.= 'Listing information &copy; ' . $year;					
					if(isset($source['logo_path']) && file_exists($source['logo_path'])){
						$text.=' ' . '<img src="'. $source['logo_url'] .'" alt="'. (isset($source['name'])?$source['name']:'') .'" />';
					}
					$text.= '<br />' . "Listing Provided Courtesy of";
					if(isset($listOfficeName) && !empty($listOfficeName)){
						$text.= ' '. $listOfficeName;
					}
					$text.='<br />';
					$text.= (isset($source['discComingle']) && !empty($source['discComingle'])) ? $source['discComingle'] : (isset($source['discDetail']) ? $source['discDetail'] : '' );
					
				break; */
			case "detail":
					$year = isset($source['year'])?$source['year']:date("Y");
					$text.= 'Listing information &copy; ' . $year . '<br />';		
					
					if(isset($listAgentName) && !empty($listAgentName) && is_show_agent_name()){
						$text.= sprintf( "Listing Provided Courtesy %s of", $listAgentName);							
					}else{
						$text.= "Listing Provided Courtesy of";						
					}
					
					if(isset($listOfficeName) && !empty($listOfficeName)){
						$text.= ' '. "<strong>$listOfficeName</strong>";
					}		
					
					if(file_exists($source['logo_path'])){
						$text.='<br />' . '<img src="'. $source['logo_url'] .'" alt="'. $source['name'] .'" />';
						
						if($source['copyrightUrl']){
							$text.=' ' . '<a target="_blank" href="'. $source['copyrightUrl'] .'">click here</a>';
						}
					}
					$text.= ' '. 'via ' . $source['name'];
					
					$text.='<br />';
					$text.= (isset($source['discComingle']) && !empty($source['discComingle'])) ? $source['discComingle'] : (isset($source['discDetail']) ? $source['discDetail'] : '' );
					
				break;
			case "newdetail":
					$year = isset($source['year'])?$source['year']:date("Y");
					$text.= '<br />' . "<strong>Listing Provided Courtesy of";
					if(isset($listOfficeName) && !empty($listOfficeName)){
						$text.= ' '. $listOfficeName;
					}
					$text.='</strong><br />';
					$text.= (isset($source['discComingle']) && !empty($source['discComingle'])) ? $source['discComingle'] : (isset($source['discDetail']) ? $source['discDetail'] : '' );
					
				break;
		}
		
		return $text;
	}
}
if( ! function_exists('property_source_info') ){
	function property_source_info($sourceid, $params){
		
		$sources = zipperagent_get_source_details_cached();
		
		if( ! isset($sources[$sourceid]) )
			return '';
		
		extract($params);
		
		$source = $sources[$sourceid];
		$text = '';
		
		if(!is_show_agent_name())
			return $text;
		
		$text.= '<div class="property-source">';
		
		if(isset($listAgentName) && !empty($listAgentName) && is_show_agent_name()){
			$text.= sprintf( "Listing Provided Courtesy %s of", $listAgentName);							
		}else{
			$text.= "Listing Provided Courtesy of";						
		}
		
		if(isset($listOfficeName) && !empty($listOfficeName)){
			$text.= ' '. "<strong>$listOfficeName</strong>";
		}	
		
		$text.= '</div>';	
		
		return $text;
	}
}

if( ! function_exists('zipperagent_base64_to_jpeg') ){
	function zipperagent_base64_to_jpeg($base64_string, $output_path, $filename) {
		// split the string on commas
		// $data[ 0 ] == "data:image/png;base64"
		// $data[ 1 ] == <actual base64 string>
		$data = explode( ',', $base64_string );
		
		// open the output file for writing
		
		if(!isset($data[0]))
			return '';
		
		//get file extension
		$mimetype=$data[0];
		
		if (strpos($mimetype, 'image/png') !== false) {
			$ext = '.png';
		}else if (strpos($mimetype, 'image/jpg') !== false) {
			$ext = '.jpg';
		}else if (strpos($mimetype, 'image/jpeg') !== false) {
			$ext = '.jpg';
		}else if (strpos($mimetype, 'image/gif') !== false) {
			$ext = '.gif';
		}else if (strpos($mimetype, 'image/bmp') !== false) {
			$ext = '.bmp';
		}
		
		$output_file = $output_path . $filename . $ext;
		
		$ifp = fopen( $output_file, 'wb' );    

		// we could add validation here with ensuring count( $data ) > 1
		fwrite( $ifp, base64_decode( $data[ 1 ] ) );

		// clean up the file resource
		fclose( $ifp ); 

		return $output_file; 
	}
}

if( ! function_exists('populate_towns_with_option') ){
	function populate_towns_with_option($meta){
		
		$arr=array();
		$townIndex=7;
		
		if( is_object( $meta ) ){
			// $towns = isset($meta->fields[$townIndex]->possibleValues) ? $meta->fields[$townIndex]->possibleValues : array();
			$towns = isset($meta->towns) ? $meta->towns : array();
			$enable_custom_town   = get_option( 'enable_custom_town', null );
			$town_values 		  = get_option( 'town_list', null );
			
			foreach( $towns as $town ){
				
				$code = 'atwns_'.$town->value->shrt;
				$name = isset($town->value->provinceState) && !empty($town->value->provinceState) ? $town->value->lng . ', ' . $town->value->provinceState : $town->value->lng;
				if( $enable_custom_town && in_array( $code, $town_values ) || ! $enable_custom_town ){				
					$arr[]=array(
							'group'=>'Town',
							'name'=>$name,
							'code'=>$code,
							'type'=>'town',
						);
					
					//process areas
					if(isset($town->value->areas) && count($town->value->areas)){
						foreach( $town->value->areas as $area ){
							
							$code = 'aars_'.$area->shrt;
							$name = isset($town->value->provinceState) && !empty($town->value->provinceState) ? $town->value->lng . ', ' . $town->value->provinceState . '-' . $area->lng : $town->value->lng . ', ' . $area->lng;
							
							$arr[]=array(
								'group'=>'Town',
								'name'=>$name,
								'code'=>$code,
								'type'=>'area',
							);
						}
					}
				}
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_towns') ){
	function populate_towns($meta){
		
		$arr=array();
		$townIndex=7;
		
		if( is_object( $meta ) ){
			// $towns = isset($meta->fields[$townIndex]->possibleValues) ? $meta->fields[$townIndex]->possibleValues : array();
			$towns = isset($meta->towns) ? $meta->towns : array();
			
			foreach( $towns as $town ){
				$name = isset($town->value->provinceState) && !empty($town->value->provinceState) ? $town->value->lng . ', ' . $town->value->provinceState : $town->value->lng;
				$arr[]=array(
						'group'=>'Town',
						'name'=>$name,
						'code'=>'atwns_'.$town->value->shrt,
					);
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('get_counties_array') ){
	function get_counties_array(){
		// $meta = zipperagent_meta();
		$meta = zipperagent_area_town();
		
		$arr=array();
		$townIndex=7;
		
		// echo "<pre>"; print_r( $meta->fields ); echo "</pre>";
		// echo "<pre>"; print_r( $meta ); echo "</pre>";
		
		if( is_object( $meta ) ){
			// $towns = isset($meta->fields[$townIndex]->possibleValues) ? $meta->fields[$townIndex]->possibleValues : array();
			$counties = isset($meta->counties) ? $meta->counties : array();
			
			foreach( $counties as $county ){
				$arr[$county->value->shrt]=$county->value->lng;
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('get_towns_array') ){
	function get_towns_array(){
		// $meta = zipperagent_meta();
		$meta = zipperagent_area_town();
		
		$arr=array();
		$townIndex=7;
		
		// echo "<pre>"; print_r( $meta->fields ); echo "</pre>";
		
		if( is_object( $meta ) ){
			// $towns = isset($meta->fields[$townIndex]->possibleValues) ? $meta->fields[$townIndex]->possibleValues : array();
			$towns = isset($meta->towns) ? $meta->towns : array();
			
			foreach( $towns as $town ){
				$arr[$town->value->shrt]=$town->value->lng;
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_areas_with_option') ){
	function populate_areas_with_option($meta){
		
		$arr=array();
		
		if( is_object( $meta ) ){
			$areas = isset($meta->areas) ? $meta->areas : array();
			$enable_custom_area = get_option( 'enable_custom_area', null );
			$area_values 		  = get_option( 'area_list', null );
			
			foreach( $areas as $area ){
				$code = 'aars_'.$area->value->shrt;
				if( $enable_custom_area && in_array( $code, $area_values ) || !$enable_custom_area ){
					$arr[]=array(
							'group'=>'Areas',
							'name'=>$area->value->lng,
							'code'=> $code,
							'type'=>'area',
						);
				}
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_counties_with_option') ){
	function populate_counties_with_option($meta){
		
		$arr=array();
		
		if( is_object( $meta ) ){
			$counties = isset($meta->counties) ? $meta->counties : array();
			$enable_custom_county = get_option( 'enable_custom_county', null );
			$county_values 		  = get_option( 'county_list', null );
			
			foreach( $counties as $county ){
				$code = 'acnty_'.$county->value->shrt;
				if( $enable_custom_county && in_array( $code, $county_values ) || !$enable_custom_county ){
					$arr[]=array(
							'group'=>'County',
							'name'=>$county->value->lng,
							'code'=> $code,
							'type'=>'county',
						);
				}
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_zipcodes') ){
	function populate_zipcodes(){
		
		$arr=array();
		
		$rb = zipperagent_rb();
		$states=isset($rb['web']['states'])?$rb['web']['states']:'';
		$states=trim($states);
		$states=$states?explode(',',$states):array();
		$defaultStates = array(
			'AA','AE','AK','AL','AP',
			'AR','AS','AZ','CA','CO',
			'CT','DC','DE','FL','FM',
			'GA','GU','HI','IA','ID',
			'IL','IN','KS','KY','LA',
			'MA','MD','ME','MH','MI',
			'MN','MO','MP','MS','MT',
			'NC','ND','NE','NH','NJ',
			'NM','NV','NY','OH','OK',
			'OR','PA','PR','PW','RI',
			'SC','SD','TN','TX','UT',
			'VA','VI','VT','WA','WI',
			'WV','WY',
		);
		
		$HOME = dirname(dirname( $_SERVER['DOCUMENT_ROOT']));
		$defaultPath = $HOME . '/zipperagent/$websitedomain/root.txt';
		$domainName = str_replace( 'https://', '', get_site_url() );
		$domainName = str_replace( 'http://', '', $domainName );
			
		$config = zipperagent_config();
		$configurationPath = $config['configurationPath'];	
		$configurationPath = str_replace( 'ZIPPER_AGENT_HOME', $defaultPath, $configurationPath );
		$configurationPath = str_replace( '$HOME', $HOME, $configurationPath );
		$configurationPath = str_replace( '$websitedomain', $domainName, $configurationPath );
		$configurationPath = str_replace( '//', '/', $configurationPath );
		
		$directoryPath = dirname(dirname($configurationPath));
		
		if(!$states){
			$states=$defaultStates;
		}
		
		foreach($states as $state){
				
			$line=0;
			$filename=$state.".csv";
			$path=$directoryPath.'/zipcode';
			$filepath=$path.'/'.$filename;
			
			if(file_exists($filepath)){

				$file = fopen($filepath,"r");
			
				while (($row = fgetcsv($file, 10000, ",")) !== FALSE){
					
					$line++;
					
					if($line===1){
						continue; //skip header
					}
					
					$zipcode = $row[0];
					
					$arr[]=array(
						'group'=>'Zipcode',
						'name'=>$zipcode,
						'code'=>'azip_'.$zipcode,
						'type'=>'zipcode',
					);
				}

				fclose($file);
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_schools') ){
	function populate_schools($t,$limit=100){
		
		$rb = zipperagent_rb();
		$asrc=isset($rb['web']['asrc']) ? $rb['web']['asrc'] : '';
		$vars=array(
			'asrc'=>$asrc,
			't'=>$t,
			'ps'=>$limit,
			'sidx'=>0,
		);

		$result = zipperagent_run_curl('/api/mls/allschools', $vars);
		$schools = isset($result['filteredList'])?$result['filteredList']:array();
		
		$arr=array();
		
		foreach( $schools as $school ){
			
			$arr[]=array(
				'group'=>'School',
				'name'=>$school->name,
				'code'=> $school->code . '_' . $school->name ,
				'type'=>'school',
			);
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_countries') ){
	function populate_countries($meta){
		
		$arr=array();
		// $townIndex=6;
		
		// echo "<pre>"; print_r( $meta->fields ); echo "</pre>";
		
		if( is_object( $meta ) ){
			// $counties = isset($meta->fields[$townIndex]->possibleValues) ? $meta->fields[$townIndex]->possibleValues : array();
			$counties = isset($meta->counties) ? $meta->counties : array();
			
			foreach( $counties as $county ){
				$arr[]=array(
						'group'=>'County',
						'name'=>$county->value->lng,
						'code'=>'acnty_'.$county->value->shrt,
					);
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('zipperagent_populate_options') ){
	function zipperagent_populate_options(){
		// $meta = zipperagent_meta();
		$meta = zipperagent_area_town();
		$data1 = populate_towns_with_option($meta);
		$data2 = populate_counties_with_option($meta);
		
		$data= array_merge($data1, $data2);
		
		return $data;
	}
}

if( ! function_exists('zipperagent_populate_autocomplete_data') ){
	function zipperagent_populate_autocomplete_data(){
		// $meta = zipperagent_meta();
		$meta = zipperagent_area_town();
		$towns = populate_towns_with_option($meta);
		$areas = populate_areas_with_option($meta);
		$counties = populate_counties_with_option($meta);
		$zipcodes = populate_zipcodes();
		
		$data= array(
			'towns' => $towns,
			'areas' => $areas,
			'counties' => $counties,
			'zipcodes' => $zipcodes,
		);
		
		return $data;
	}
}

if( ! function_exists('get_autocomplete_data') ){
	function get_autocomplete_data(){
		ob_start();
		include ZIPPERAGENTPATH . '/custom/api-processing/autocomplete.php'; 
		$json = ob_get_clean();
		
		$data = json_decode($json);
		
		return $data;
	}
}

if( ! function_exists('populate_fields') ){
	function populate_fields(){
		
		$fields=array();
		$url="/api/mls/fieldReferences";
		// die( $url );
		$result = zipperagent_run_curl($url);
		
		if( is_array( $result ) ){
			$fields = isset( $result['filteredDataMap'] )? $result['filteredDataMap'] : array();
		}
		
		return $fields;
	}
}

if( ! function_exists('zipperagent_convert_last_updates') ){
	function zipperagent_convert_last_updates($number){
		// $hours = floor( $number / 60 );
		// $minutes = $number;
		// $days = floor( $hours / 24 );
		
		// if( $days > 0 ){
			// return $days . " days";
		// }else if($hours==1){
			// return $hours . " hour";
		// }else if()
	}
}

if( ! function_exists('get_town_list') ){
	function get_town_list(){
		
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/towns.php";
		$json=ob_get_clean();
		$data=json_decode($json);
		$arr=array();
		
		foreach( $data as $obj ){
			if( $obj->group=='Town' ){
				$arr[]=$obj->code;
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('get_field_list') ){
	function get_field_list(){
		
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/fields.php";
		$json=ob_get_clean();
		$data=json_decode($json);
			
		return $data;
	}
}

if( ! function_exists('za_get_alert_type') ){
	function za_get_alert_type(){
		
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/alert.php";
		$json=ob_get_clean();
		$data=json_decode($json);
			
		return $data;
	}
}

if( ! function_exists('is_open_house_search_enabled') ){
	function is_open_house_search_enabled(){
		
		$rb = zipperagent_rb();
		
		$enabled = isset($rb['web']['openhouse_searchbar'])?$rb['web']['openhouse_searchbar']:false;
		$enabled = empty($enabled)?false:$enabled;
			
		return $enabled;
	}
}

if( ! function_exists('zipperagent_is_favorite') ){
	function zipperagent_is_favorite($listingId){
		$checked=false;
		
		if( $userdata = getCurrentUserContactLogin() ){	
			
			$contactIds=array();
			foreach($userdata as $contact){
				$contactIds[]=$contact->id;
			}
			
			$contactIds_key = implode('_',$contactIds);
			$option_key_listid = $contactIds_key . '_favorite_listingIds';
			
			$saved_favorites = get_option($option_key_listid);
		}else{			
			$saved_favorites = zipperagent_get_cookie('saved_favorites');			
		}
		
		if(is_array($saved_favorites)){
			foreach($saved_favorites as $favorite){
				if($favorite['listingId']==$listingId){
					$checked=true;
					break;
				}
			}
		}
		
		return $checked;
	}
}

if( ! function_exists('get_property_images') ){
	function get_property_images( $listingId, $contactIds ){
		$single_property = get_single_property($listingId, $contactIds);
		$images=array();
		
		if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
			
			foreach ($single_property->photoList as $pic ){
				$images[]=$pic->imgurl;
			}
		}
		
		return $images;
	}
}

if( ! function_exists('zipperagent_field_value') ){
	function zipperagent_field_value( $key, $val, $proptype='' ){
		
		$fields = get_field_list();
		
		//special case
		switch($key){
			case "mbrdimen":case "mbrdscrp":case "mbrDSCRP":
			case "bed2dimen":case "bed2DSCRP":
			case "bed3dimen":case "bed3DSCRP":
			case "bed4dimen":case "bed4DSCRP":
			case "bed5dimen":case "bed5DSCRP":
			case "bth1dimen":case "bth1dscrp":case "bth1DSCRP":
			case "bth2dimen":case "bth2dscrp":case "bth2DSCRP":
			case "bth3dimen":case "bth3dscrp":case "bth3DSCRP":
			case "kitdimen":case "kitdscrp":case "kitDSCRP":
			case "famdimen":case "famdscrp":case "famDSCRP":
			case "livdimen":case "livdscrp":case "livDSCRP":
			case "dindimen":case "dindscrp":case "dinDSCRP":
			case "oth1DIMEN":case "oth1DSCRP":
			case "oth2DIMEN":case "oth2DSCRP":
			case "oth3DIMEN":case "oth3DSCRP":
			case "oth4DIMEN":case "oth4DSCRP":
			case "oth5DIMEN":case "oth5DSCRP":
			case "headscrp1":case "coldscrp1":
			case "heaDSCRP1":case "colDSCRP1":
			case "headscrp2":case "coldscrp2":
			case "heaDSCRP2":case "colDSCRP2":
			case "headscrp3":case "coldscrp3":
			case "heaDSCRP3":case "colDSCRP3":
			case "headscrp4":case "coldscrp4":
			case "heaDSCRP4":case "colDSCRP4":
			case "headscrp5":case "coldscrp5":
			case "heaDSCRP5":case "colDSCRP5":
				$key=isset($fields->ROOM)?"ROOM":$key;
				break;
			
			case "mbrlevel":
			case "bed2LEVEL":
			case "bed3LEVEL":
			case "bed4LEVEL":
			case "bed5LEVEL":
			case "bth1LEVEL":
			case "bth2LEVEL":
			case "bth3LEVEL":
			case "kitlevel":
			case "famlevel":
			case "livlevel":
			case "dinlevel":
			case "oth1LEVEL":
			case "oth2LEVEL":
			case "oth3LEVEL":
			case "oth4LEVEL":
			case "oth5LEVEL":
				$key=isset($fields->ROOMLEVEL)?"ROOMLEVEL":$key;
				break;
			
			case "roomLevel":
				$key=isset($fields->BEDROOMMASTERLEVEL)?"BEDROOMMASTERLEVEL":$key;
				break;
				
			case "CommunityFeatures":
				$key=isset($fields->COMMUNITY)?"COMMUNITY":$key;
				break;
				
			case "RoomType":
				$key=isset($fields->ROOMS)?"ROOMS":$key;
				break;
				
			case "Levels":
				$key=isset($fields->STORIES)?"STORIES":$key;
				break;	
				
			case "Fees Include":
				$key=isset($fields->FEESINCLUD)?"FEESINCLUD":$key;
				break;	
				
			case "Laundry Type":
				$key=isset($fields->LAUNDRYTYP)?"LAUNDRYTYP":$key;
				break;
				
			case "Fireplace Type":
				$key=isset($fields->FIREPLCTYP)?"FIREPLCTYP":$key;
				break;
				
			case "Financing Type":
				$key=isset($fields->HOWSOLD)?"HOWSOLD":$key;
				break;
				
			case "Possible Financing":
				$key=isset($fields->PSSBLFNCNG)?"PSSBLFNCNG":$key;
				break;
				
			case "Kitchen/Breakfast":
				$key=isset($fields->KTCHNBRKFS)?"KTCHNBRKFS":$key;
				break;
				
			case "Kitchen Equipment":
				$key=isset($fields->KTCHNQPMNT)?"KTCHNQPMNT":$key;
				break;
				
			case "Laundry Location":
				$key=isset($fields->LANDRYLCTN)?"LANDRYLCTN":$key;
				break;
				
			case "Fireplace Location":
				$key=isset($fields->FIRPLCLCTN)?"FIRPLCLCTN":$key;
				break;
				
			case "Cooling Source":
				$key=isset($fields->COOLINGSRC)?"COOLINGSRC":$key;
				break;
				
			case "Heating Source":
				$key=isset($fields->HEATINGSRC)?"HEATINGSRC":$key;
				break;
		}
		$KEY=strtoupper($key);
		
		$nostripkey = str_replace('_', '', $key);
		$NOSTRIPKEY = str_replace('_', '', $KEY);
		
		if( isset( $fields->$key ) || isset( $fields->$KEY ) || isset( $fields->$nostripkey ) || isset( $fields->$NOSTRIPKEY ) ){
			
			$temp=array();
			
			$values=explode(',', $val );
			// print_r( "Before: " . $val. "<br />" );
			foreach( $values as $value ){
				$temp[]=0;
			}
			
			$keyFeatures = zipperagent_type_mask($fields, $key, $proptype);
			
			foreach( $keyFeatures as $entity ){
				$version = isset($entity->version)?$entity->version:'';
				$fieldName = isset($entity->fieldName)?$entity->fieldName:'';
				$shortDescription = isset($entity->shortDescription)?$entity->shortDescription:'';
				$mediumDescription = isset($entity->mediumDescription)?$entity->mediumDescription:'';
				$longDescription = isset($entity->longDescription)?$entity->longDescription:'';
				$propTypeMask = isset($entity->propTypeMask)?$entity->propTypeMask:'';
				
				foreach( $temp as $index=>$value ){
					if( ! $temp[$index] ){
						if( $mediumDescription == $values[$index] ){
							$values[$index]=str_replace( $mediumDescription, $longDescription, $values[$index] );
							$temp[$index]=1;
						}else if( $shortDescription == $values[$index] ){
							$values[$index]=str_replace( $shortDescription, $longDescription, $values[$index] );
							$temp[$index]=1;
						}
					}
				}
			}
			
			$val = implode( ', ', $values );
			// print_r( "After: " . $val. "<br />" );
		}else if(  substr($key, -2) === 'YN' ){
			switch($val){
				case 1:
					$val='Yes';
					break;
				case 0:
					$val='No';
					break;
			}
		}
		// $fields = populate_fields();
		
		// echo "<pre>"; print_r( $single_property ); echo "</pre>";
		// echo "<pre>"; print_r( $fields ); echo "</pre>";
		
		if($val===false)
			$val = 'No';
		if($val===true)
			$val = 'Yes';
		
		return $val;
	}
}

if( ! function_exists('zipperagent_type_mask') ){
	function zipperagent_type_mask($fields, $key, $proptype){
		
		$KEY=strtoupper($key);
		
		$nostripkey = str_replace('_', '', $key);
		$NOSTRIPKEY = str_replace('_', '', $KEY);
			
		$keyFeaturesRaw=isset($fields->$key)?$fields->$key:(isset( $fields->$KEY )? $fields->$KEY:array());
		
		if(!$keyFeaturesRaw){
			$keyFeaturesRaw=isset($fields->$nostripkey)?$fields->$nostripkey:(isset( $fields->$NOSTRIPKEY )? $fields->$NOSTRIPKEY:array());
		}
		
		$keyFeatures = array();
		$p_typ = $proptype;
		$p_pty_mask = 7;
		
		if (strcmp($p_typ,"BU")== 0){
			$p_pty_mask = 0;			
		} else if (strcmp($p_typ,"CC")== 0){
			$p_pty_mask = 1;			
		} else if (strcmp($p_typ,"CI")== 0){
			$p_pty_mask = 2;			
		} else if (strcmp($p_typ,"LD")== 0){
			$p_pty_mask = 3;			
		} else if (strcmp($p_typ,"MF")== 0){
			$p_pty_mask = 4;			
		} else if (strcmp($p_typ,"MH")== 0){
			$p_pty_mask = 5;			
		} else if (strcmp($p_typ,"RN")== 0){
			$p_pty_mask = 6;			
		} else if (strcmp($p_typ,"SF")== 0){
			$p_pty_mask = 7;			
		}
		foreach($keyFeaturesRaw as $entity){
			if ( isset($entity->propTypeMask) && ( ($entity->propTypeMask == 255) || ($entity->propTypeMask & (1 << $p_pty_mask)) == (1 << $p_pty_mask))){
				array_push($keyFeatures,$entity);
			}
		}
		
		return $keyFeatures;
	}
}

if( ! function_exists('zipperagent_timezone') ){
	function zipperagent_timezone(){
		$rb = zipperagent_rb();
		$timezone=isset( $rb['tenant']['timezone'] ) ? $rb['tenant']['timezone'] : '';
		
		return $timezone;
	}
}

if( ! function_exists('zipperagent_mls_timezone') ){
	function zipperagent_mls_timezone(){
		$rb = zipperagent_rb();
		$timezone=isset($rb['tenant']['mls_timezone']) ? $rb['tenant']['mls_timezone'] : '';
		if(empty($timezone))
			$timezone='GMT';
		
		return $timezone;
	}
}

if( ! function_exists('populate_users') ){
	function populate_users(){
		$url="/api/lite/user/list?sidx=0&ps=100";
		// die( $url );
		$result = zipperagent_run_curl($url);
		
		return (object) $result;
	}
}

if( ! function_exists('zipperagent_get_agent_list') ){
	function zipperagent_get_agent_list(){
		
		ob_start();
		include ZIPPERAGENTPATH . "/custom/api-processing/users.php";
		$users = ob_get_clean();		
		
		return json_decode($users);
	}
}

if( ! function_exists('zipperagent_price_format') ){
	function zipperagent_price_format($price){
		$curr = "$";
		$formatted_price = $curr. number_format_i18n( (int)$price, 0 );
		
		return $formatted_price;
	}
}

if( ! function_exists('zipperagent_get_agent') ){
	function zipperagent_get_agent($mlsid){
		$agents = zipperagent_get_agent_list();
		// echo "<pre>"; print_r( $agents ); echo "</pre>";
		$findAgent=array();
		if( isset( $agents->filteredList ) ){
			foreach( $agents->filteredList as $agent ){
				if( isset( $agent->mlsAgentId ) && $agent->mlsAgentId == $mlsid ){
					$findAgent=$agent;
					break;
				}
			}
		}
		
		return $findAgent;
	}
}

if( ! function_exists('zipperagent_get_agent_by') ){
	function zipperagent_get_agent_by($type, $value){
		$agents = zipperagent_get_agent_list();
		// echo "<pre>"; print_r( $agents ); echo "</pre>";
		$findAgent=array();
		if( isset( $agents->filteredList ) ){
			foreach( $agents->filteredList as $agent ){
				if( isset( $agent->$type ) && $agent->$type == $value ){
					$findAgent=$agent;
					break;
				}
			}
		}
		
		return $findAgent;
	}
}

if( ! function_exists('get_wp_var_excludes') ){
	function get_wp_var_excludes(){
		$excludes=array(
			'woocommerce-login-nonce',
			'_wpnonce',
			'woocommerce-reset-password-nonce',
			'woocommerce-edit-address-nonce',
			'save-account-details-nonce',
		);
		
		return $excludes;
	}
}

if( ! function_exists('get_short_excludes') ){
	function get_short_excludes(){
		$excludes = array('location', 'propertytype', 'status', 'minlistprice', 'maxlistprice', 'bedrooms', 'bathcount', 'o', 'action', 'search_form_enabled', 'view_type', 'starttime', 'endtime', 'afteraction', 'listingparams', 'fbclid','newsearchbar','is_shortcode');
		$excludes=array_merge($excludes,get_wp_var_excludes());
		return $excludes;
	}
}

if( ! function_exists('get_long_excludes') ){
	function get_long_excludes(){
		$excludes=array( 'o', 'location', 'address', 'advstno', 'advstname', 
					'advtownnm','advstates', 'advcounties', 'advstzip', 'boundarywkt',
					'propertytype', 'status', 'minlistprice', 'maxlistprice', 'squarefeet', 
					'bedrooms', 'bathcount', 'lotacres', 'mindate', 'maxdate', 'daysfromnow', 
					'openhomesmode', 'openhomesonlyyn', 'maxdayslisted', 'featuredonlyyn', 'hasvirtualtour', 
					'withimage', 'daterange', 'yearbuilt', 'alagt', 'aloff', 
					'pagination', 'result', 'crit', 'ajax', 'save_search',
					'action', 'actual_link', 'view_type', 'column', 'is_shortcode',
					'search_form_enabled', 'listinapage', 'page', 'maxlist',
					'searchid','is_view_save_search','mobile_item','tablet_item','desktop_item',
					'starttime','endtime','searchdistance','distance','lat','lng',
					'location_option','criteria','afteraction','listingparams',
					'fbclid','newsearchbar','school',
				);
				
		$excludes=array_merge($excludes,get_wp_var_excludes());
				
		return $excludes;
	}
}

if( ! function_exists('get_new_filter_excludes') ){
	function get_new_filter_excludes(){
		$excludes=array( 'address', 'boundarywkt',				
			'pagination', 'result', 'crit', 'ajax', 'save_search',
			'action', 'actual_link', 'view_type', 'column', 'is_shortcode',
			'search_form_enabled', 'listinapage', 'page', 'maxlist',
			'searchid','is_view_save_search','mobile_item','tablet_item','desktop_item',
			'starttime','endtime','searchdistance','distance',
			'location_option','criteria','afteraction','listingparams','fbclid','o','newsearchbar',
			'lat','lng',
		);
		
		$excludes=array_merge($excludes,get_wp_var_excludes());
		
		return $excludes;
	}
}

if( ! function_exists('get_old_filter_excludes') ){
	function get_old_filter_excludes(){
		$excludes=array( 'location', 'address', 'boundarywkt',				
					'pagination', 'result', 'crit', 'ajax', 'save_search',
					'action', 'actual_link', 'view_type', 'column', 'is_shortcode',
					'search_form_enabled', 'listinapage', 'page', 'maxlist',
					'searchid','is_view_save_search','mobile_item','tablet_item','desktop_item',
					'starttime','endtime','searchdistance','distance','lat','lng',
					'location_option','criteria','afteraction','listingparams','fbclid',
				);
				
		$excludes=array_merge($excludes,get_wp_var_excludes());
				
		return $excludes;
	}
}

if( ! function_exists('key_to_lowercase') ){
	function number_format_short( $n, $precision = 1 ) {
		if ($n < 900) {
			// 0 - 900
			$n_format = number_format($n, $precision);
			$suffix = '';
		} else if ($n < 900000) {
			// 0.9k-850k
			$n_format = number_format($n / 1000, $precision);
			$suffix = 'K';
		} else if ($n < 900000000) {
			// 0.9m-850m
			$n_format = number_format($n / 1000000, $precision);
			$suffix = 'M';
		} else if ($n < 900000000000) {
			// 0.9b-850b
			$n_format = number_format($n / 1000000000, $precision);
			$suffix = 'B';
		} else {
			// 0.9t+
			$n_format = number_format($n / 1000000000000, $precision);
			$suffix = 'T';
		}
	  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
	  // Intentionally does not affect partials, eg "1.50" -> "1.50"
		if ( $precision > 0 ) {
			$dotzero = '.' . str_repeat( '0', $precision );
			$n_format = str_replace( $dotzero, '', $n_format );
		}
		return $n_format . $suffix;
	}
}		
		
if( ! function_exists('key_to_lowercase') ){
	function key_to_lowercase($args){
		$new_args=array();
		
		if( is_array($args) ){
			foreach( $args as $k=>$v ){
				$new_args[strtolower($k)]=$v;
			}
		}
		
		return $new_args;
	}
}

if( ! function_exists('filter_requests') ){
	function filter_requests($args){
		$unused=array(
			'woocommerce-login-nonce',
			'_wpnonce',
			'woocommerce-reset-password-nonce',
			'woocommerce-edit-address-nonce',
			'save-account-details-nonce',
			'-'
		);
		if( is_array($args) ){
			foreach( $args as $k=>$v ){
				if(in_array($k, $unused)){
					unset($args[$k]);
				}
			}
		}
		
		return $args;
	}
}


	
if( ! function_exists('convert_key_name') ){
	function convert_key_name($key){
		$arr=array(
				'abeds'=>'bedrooms',
				'abths'=>'bathCount',
				'apt'=>'propertyType',
				'asts'=>'status',
				'apmin'=>'minListPrice',
				'apmax'=>'maxListPrice',
				'aacr'=>'lotAcres',
				'hasoh'=>'maxdayslisted',
				'hasp'=>'withImage',
				'hasvt'=>'hasVirtualTour',
				'ayblt'=>'year',
				'acarea'=>'squareFeet',
			);
		
		if(isset($arr[$key])){
			
			return $arr[$key];
		}
		
		return $key;
	}
}

if( ! function_exists('zipperagent_url') ){
	function zipperagent_url($withhttp=true){
		if($withhttp){
			return ZIPPERAGENTURL;
		}else{
			$find=array('http://','https://');
			$rplc=array('//','//');
			return str_replace($find,$rplc,ZIPPERAGENTURL);
		}
	}
}

if( ! function_exists('zipperagent_infinite_loop') ){
	function zipperagent_infinite_loop(){
		$is_ajax=true;
		
		return $is_ajax;
	}
}

if( ! function_exists('zipperagent_listpage_layout') ){
	function zipperagent_listpage_layout(){
		$rb = zipperagent_rb();		
		$listpage_layout = isset($rb['layout']['listpage_layout'])?$rb['layout']['listpage_layout']:'';
		
		return $listpage_layout;
	}
}

if( ! function_exists('zipperagent_detailpage_layout') ){
	function zipperagent_detailpage_layout(){
		$rb = zipperagent_rb();		
		$detailpage_layout = isset($rb['layout']['detailpage_layout'])?$rb['layout']['detailpage_layout']:'';
		// $detailpage_layout = 'template-newDetail.php';
		
		return $detailpage_layout;
	}
}

if( ! function_exists('get_detail_template_filename') ){
	function get_detail_template_filename($proptype){
		$proptype=strtolower($proptype);
		$rb = zipperagent_rb();		
		$detailpage_layout = isset($rb['layout']['detailpage_layout_'.$proptype])?$rb['layout']['detailpage_layout_'.$proptype]:'';
		// $detailpage_layout = 'template-newDetail.php';
		
		return $detailpage_layout;
	}
}

if( ! function_exists('zipperagent_detailpage_group') ){
	function zipperagent_detailpage_group(){
		$rb = zipperagent_rb();		
		$detailpage_group = isset($rb['layout']['detailpage_group'])?$rb['layout']['detailpage_group']:'';
		
		return $detailpage_group ? $detailpage_group : 'mlspin';
	}
}

if( ! function_exists('zipperagent_get_saved_search_count') ){
	function zipperagent_get_saved_search_count(){

		// $contactIds = get_contact_id();	
		$userdata = getCurrentUserContactLogin();
		
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
			$saved = zipperagent_get_cookie('saved_search');
			$dataCount = $saved ? count($saved) : 0;
		}
		
		return $dataCount;
	}
}

if( ! function_exists('zipperagent_get_favorites_count') ){
	function zipperagent_get_favorites_count(){
		
		// $contactIds = get_contact_id();	
		$userdata = getCurrentUserContactLogin();
		
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
			foreach($list as $property){
				$favorite_listingIds[]['listingId']=$property->listing->id;
			}
			update_option( $option_key_listid, $favorite_listingIds );
		
		}else{
			$saved = zipperagent_get_cookie('saved_favorites');
			$dataCount = $saved ? count($saved) : 0;
		}
		
		return $dataCount;
	}
}

if( ! function_exists('zipperagent_signup_optional') ){
	function zipperagent_signup_optional(){
		$rb = zipperagent_rb();		
		$signup_optional = isset($rb['web']['signup_optional'])?$rb['web']['signup_optional']:1;
		
		return $signup_optional;
	}
}

if( ! function_exists('zipperagent_currency') ){
	function zipperagent_currency(){
		$curr="$";
		
		return $curr;
	}
}

if( ! function_exists('zipperagent_set_cookie') ){
	function zipperagent_set_cookie($name, $value='', $time=''){
			
		if(!$time){
			$time=time() + (86400 * 30);  // 86400 = 1 day
		}
		
		setcookie($name, base64_encode(serialize($value)), $time, "/");
		
		return $value;
	}
}

if( ! function_exists('zipperagent_get_cookie') ){
	function zipperagent_get_cookie($name){
		
		$value=null;
		
		if(isset($_COOKIE[$name])){
			// echo "<pre>"; print_r($_COOKIE[$name]); echo "</pre>";
			// echo "<pre>"; print_r(base64_decode($_COOKIE[$name])); echo "</pre>";
			
			$value = unserialize(base64_decode($_COOKIE[$name]));
		}
		
		return $value;
	}
}

if( ! function_exists('zipperagent_user_slug') ){
	function zipperagent_user_slug(){
		
		$fullname='My Account';
		$userdata=getCurrentUserContactLogin();
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
}

if( ! function_exists('zipperagent_user_name') ){
	function zipperagent_user_name(){
		
		$fullname='My Account';
		$userdata=getCurrentUserContactLogin();
		$firstUser=isset($userdata[0])?$userdata[0]:false;
		
		if(isset($firstUser->firstName)){
			$fullname=$firstUser->firstName . ( isset($firstUser->lastName) ? ' ' . $firstUser->lastName : '' );
		}
		
		return $fullname;
	}
}

if( ! function_exists('detailpage_visit_counter') ){
	function detailpage_visit_counter(){
		
		$counter=SignUpPopupVisitCounter();
		
		if($counter){
			$lastVisitedUrl =  zipperagent_get_cookie('last_detail_page_url');
			$currentUrl="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$isPageDifferent = ($lastVisitedUrl !== $currentUrl);
			
			// if($isPageDifferent){
			if(1){
				$detailpage_visit_counter =  zipperagent_get_cookie('detailpage_visit_counter');
				if(!is_numeric($detailpage_visit_counter) || $detailpage_visit_counter < 0){
					$detailpage_visit_counter=0;
				}
				// echo "COUNTER++ : ". $detailpage_visit_counter;
				$detailpage_visit_counter++; //raise up by one, if user visit
				zipperagent_set_cookie('detailpage_visit_counter', $detailpage_visit_counter);
			}
			
			zipperagent_set_cookie('last_detail_page_url',$currentUrl);
		}
	}
}

if( ! function_exists('showSignUpPopup') ){
	function showSignUpPopup(){
		
	/*
	 * Check is popup is mandatory or not
	 */
	
	if( !zipperagent_signup_optional() && $_SESSION['popup_is_triggered'] == 1)
		return 1;
	
	/*
	 * using popup detailpage visit counter
	 */
		$counter=SignUpPopupVisitCounter();
		if($counter){// do popup if only counter not empty
			
			$lastVisitedUrl =  zipperagent_get_cookie('last_detail_page_url');
			$currentUrl="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$isPageDifferent = ($lastVisitedUrl !== $currentUrl);
			
			$detailpage_visit_counter =  zipperagent_get_cookie('detailpage_visit_counter');
			// echo "COUNTER: ". $detailpage_visit_counter;
			// if($detailpage_visit_counter>=$counter && $isPageDifferent){
			if($detailpage_visit_counter>=$counter){
				zipperagent_set_cookie('detailpage_visit_counter', 0); //reset counter
				return 1;
			}else{
				return 0;
			}
		}
		
	/*
	 * using sign up interval
	 */
		$rb = zipperagent_rb();
		$interval = $rb['web']['sign_up_interval'];
		$status=0;
		
		if($interval==0){
			//if interval is not set then always open popup
			return 1;
		}else if(!$interval){
			$interval=60;
		}
		
		$lastDateTime =  zipperagent_get_cookie('last_popup_time');		
		$currDateTime = strtotime(date("Y-m-d h:i:sa"));
		$lastVisitedUrl =  zipperagent_get_cookie('last_visited_url');
		$currentUrl="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		
		if(!$lastDateTime){
			zipperagent_set_cookie('last_popup_time', $currDateTime);
		}else{
			$diffInSeconds = ($currDateTime-$lastDateTime); //seconds
			$diffInMinutes = $diffInSeconds / 60;
			
			$isPageDifferent = ($lastVisitedUrl !== $currentUrl);
			// if($diffInMinutes > $interval && $isPageDifferent){
			if($diffInMinutes > $interval){
				$status=1;
				zipperagent_set_cookie('last_popup_time', $currDateTime);		
				zipperagent_set_cookie('last_visited_url', $currentUrl);
			}
		}
		
		return $status;
	}
}

if( ! function_exists('SignUpPopupTime') ){
	function SignUpPopupTime(){
		
		if( !zipperagent_signup_optional() && $_SESSION['popup_is_triggered'] == 1)
			return 0; //if sign up is mandatory and already triggered before, show popup immediately
		
		$rb = zipperagent_rb();
		$seconds = $rb['web']['popup_show_time'];
		
		if(empty($seconds))
			$seconds=120; //default is 120 seconds
		
		return $seconds;
	}
}

if( ! function_exists('SignUpPopupVisitCounter') ){
	function SignUpPopupVisitCounter(){
				
		$rb = zipperagent_rb();
		$counter = $rb['web']['popup_visit_counter'];
		
		if(!$counter)
			$counter=0;
		
		return $counter;
	}
}

if( ! function_exists('is_social_share_enabled') ){
	function is_social_share_enabled(){
				
		$rb = zipperagent_rb();
		$enabled = $rb['web']['social_share'];
		
		$enabled=$enabled?true:false;
		
		return $enabled;
	}
}

if( ! function_exists('is_great_school_enabled') ){
	function is_great_school_enabled(){
				
		return 1;
	}
}

if( ! function_exists('is_show_agent_list') ){
	function is_show_agent_list(){
				
		$rb = zipperagent_rb();
		$enabled = $rb['web']['show_agent_list'];
		
		$enabled=$enabled?true:false;
		
		return $enabled;
	}
}

if( ! function_exists('is_branded_virtualtour') ){
	function is_branded_virtualtour(){
				
		$rb = zipperagent_rb();
		$enabled = $rb['web']['branded_virtualtour'];
		
		$enabled=$enabled?true:false;
		
		return $enabled;
	}
}

if( ! function_exists('create_zipperagent_plugin_version_file') ){
	function create_zipperagent_plugin_version_file(){
		$filename=ABSPATH . "/za-plugin-version.txt";
	
		//create version txt file
		
		$file = fopen( $filename, "wb" );
		$txt = "version: " . ZIPPERAGENT_VERSION;
		fwrite($file, $txt);
		fclose($file);
	}
}

if( ! function_exists('is_show_agent_name') ){
	function is_show_agent_name(){
				
		$rb = zipperagent_rb();
		$enabled = $rb['web']['show_agent_name'];
		
		$enabled=$enabled?true:false;
		
		return $enabled;
	}
}

if( ! function_exists('luxury_get_variables') ){
	function luxury_get_variables($properties){
		
		$rooms=array(1,2,3);
		$sales=array(null,null,null);
		$rentals=array(null,null,null);
		
		if(is_array($properties)){
			foreach( $properties as $property ){
				$nobedrooms = isset($property->nobedrooms)?$property->nobedrooms:0;
				$price=in_array($property->status, explode(',',zipperagent_active_status()))?$property->listprice:false;
				$rental=$property->status=='RNT'?$property->listprice:false;
				switch($nobedrooms){
					case 1:
							if(isset($sales[0]) && $sales[0]>$price)
								$sales[0]=$price;
							else if(empty($sales[0]))
								$sales[0]=$price;
							
							if(isset($rentals[0]) && $rentals[0]>$rental)
								$rentals[0]=$rental;
							else if(empty($rentals[0]))
								$rentals[0]=$rental;
						break;
					case 2:
							if(isset($sales[1]) && $sales[1]>$price)
								$sales[1]=$price;
							else if(empty($sales[1]))
								$sales[1]=$price;
							
							if(isset($rentals[1]) && $rentals[1]>$rental)
								$rentals[1]=$rental;
							else if(empty($rentals[1]))
								$rentals[1]=$rental;
						break;
					case 3:
							if(isset($sales[2]) && $sales[2]>$price)
								$sales[2]=$price;
							else if(empty($sales[2]))
								$sales[2]=$price;
							
							if(isset($rentals[2]) && $rentals[2]>$rental)
								$rentals[2]=$rental;
							else if(empty($rentals[2]))
								$rentals[2]=$rental;
						break;
				}
			}
		}
		
		return array('rooms'=>$rooms, 'sales'=>$sales, 'rentals'=>$rentals);
	}
}

if( ! function_exists('zipperagent_luxury_table') ){
	function zipperagent_luxury_table($single_luxury){
		
		$properties = $single_luxury->properties;
		?>
		<div class="properties-table">
			<?php
				$forsale=$pendingsales=$sold=$rentals=$others=array();
				foreach($properties as $property){
					
					if(in_array($property->status, explode(',',zipperagent_active_status()))){
						$forsale[]=$property;
					}else if($property->status=='UAG'){
						$pendingsales[]=$property;
					}else if(in_array($property->status, explode(',',zipperagent_sold_status()))){
						$sold[]=$property;
					}else if($property->status=='RNT'){
						$rentals[]=$property;
					}else{
						$others[]=$property;
					}
				}
			?>
			
			<div class="table-wrap">
				<ul class="nav nav-tabs mb-10">
					<li class=" active "> <a href="#for-sale-tab" data-toggle="tab"> For Sale </a> </li>
					<li class=" "> <a href="#pending-sale-tab" data-toggle="tab"> Pending Sale </a> </li>
					<li class=" "> <a href="#sold-tab" data-toggle="tab"> Sold </a> </li>
					<li class=" "> <a href="#rental-tab" data-toggle="tab"> Rentals </a> </li>
				</ul>
				<div class="tab-content">
					<div id="for-sale-tab" class="tab-pane active">
						<table>
							<thead>
								<tr>
									<th>List Price</th><th>Beds</th><th>Baths</th><th>Sqft</th><th>Info</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(sizeof($forsale)){
									foreach($forsale as $property){
										// echo "<pre>"; print_r($property); echo "</pre>";
										$fulladdress = zipperagent_get_address($property);
										$single_url = zipperagent_luxury_property_url( $single_luxury->id, $property->id );
										$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
										$bedrooms = isset($property->nobedrooms ) && $property->nobedrooms > 0 ? $property->nobedrooms : '-';
										$bath = isset($property->nobaths ) && $property->nobaths > 0 ? $property->nobaths : '-';
										$sqft = isset($property->squarefeet ) && $property->squarefeet > 0 ? number_format_i18n( $property->squarefeet, 0 ) : '-';
										echo '<tr>';
										echo '<td>'. zipperagent_currency() . number_format_i18n( $price, 0 ).'</td><td>'. $bedrooms .'</td><td>'. $bath .'</td><td>'. $sqft .'</td><td><a href="'. $single_url .'"><i class="fa fa-search" aria-hidden="true"></i></a></td>';
										echo '</tr>';
									}
								}else{
									echo '<tr><td colspan="5"><span class="no-property">no record</span></td></tr>';
								}
								
								?>
							</tbody>
						</table>
						
					</div>
					<div id="pending-sale-tab" class="tab-pane">
						<table>
							<thead>
								<tr>
									<th>List Price</th><th>Beds</th><th>Baths</th><th>Sqft</th><th>Info</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(sizeof($pendingsales)){
									foreach($pendingsales as $property){
										// echo "<pre>"; print_r($property); echo "</pre>";
										$fulladdress = zipperagent_get_address($property);
										$single_url = zipperagent_luxury_property_url( $single_luxury->id, $property->id );
										$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
										$bedrooms = isset($property->nobedrooms ) && $property->nobedrooms > 0 ? $property->nobedrooms : '-';
										$bath = isset($property->nobaths ) && $property->nobaths > 0 ? $property->nobaths : '-';
										$sqft = isset($property->squarefeet ) && $property->squarefeet > 0 ? number_format_i18n( $property->squarefeet, 0 ) : '-';
										echo '<tr>';
										echo '<td>'. zipperagent_currency() . number_format_i18n( $price, 0 ).'</td><td>'. $bedrooms .'</td><td>'. $bath .'</td><td>'. $sqft .'</td><td><a href="'. $single_url .'"><i class="fa fa-search" aria-hidden="true"></i></a></td>';
										echo '</tr>';
									}
								}else{
									echo '<tr><td colspan="5"><span class="no-property">no record</span></td></tr>';
								}
								
								?>
							</tbody>
						</table>
					</div>
					<div id="sold-tab" class="tab-pane">
						<table>
							<thead>
								<tr>
									<th>List Price</th><th>Beds</th><th>Baths</th><th>Sqft</th><th>Info</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(sizeof($sold)){
									foreach($sold as $property){
										// echo "<pre>"; print_r($property); echo "</pre>";
										$fulladdress = zipperagent_get_address($property);
										$single_url = zipperagent_luxury_property_url( $single_luxury->id, $property->id );
										$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
										$bedrooms = isset($property->nobedrooms ) && $property->nobedrooms > 0 ? $property->nobedrooms : '-';
										$bath = isset($property->nobaths ) && $property->nobaths > 0 ? $property->nobaths : '-';
										$sqft = isset($property->squarefeet ) && $property->squarefeet > 0 ? number_format_i18n( $property->squarefeet, 0 ) : '-';
										echo '<tr>';
										echo '<td>'. zipperagent_currency() . number_format_i18n( $price, 0 ).'</td><td>'. $bedrooms .'</td><td>'. $bath .'</td><td>'. $sqft .'</td><td><a href="'. $single_url .'"><i class="fa fa-search" aria-hidden="true"></i></a></td>';
										echo '</tr>';
									}
								}else{
									echo '<tr><td colspan="5"><span class="no-property">no record</span></td></tr>';
								}
								
								?>
							</tbody>
						</table>
					</div>
					<div id="rental-tab" class="tab-pane">
						<table>
							<thead>
								<tr>
									<th>List Price</th><th>Beds</th><th>Baths</th><th>Sqft</th><th>Info</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(sizeof($rentals)){
									foreach($rentals as $property){
										// echo "<pre>"; print_r($property); echo "</pre>";
										$fulladdress = zipperagent_get_address($property);
										$single_url = zipperagent_luxury_property_url( $single_luxury->id, $property->id );
										$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
										$bedrooms = isset($property->nobedrooms ) && $property->nobedrooms > 0 ? $property->nobedrooms : '-';
										$bath = isset($property->nobaths ) && $property->nobaths > 0 ? $property->nobaths : '-';
										$sqft = isset($property->squarefeet ) && $property->squarefeet > 0 ? number_format_i18n( $property->squarefeet, 0 ) : '-';
										echo '<tr>';
										echo '<td>'. zipperagent_currency() . number_format_i18n( $price, 0 ).'</td><td>'. $bedrooms .'</td><td>'. $bath .'</td><td>'. $sqft .'</td><td><a href="'. $single_url .'"><i class="fa fa-search" aria-hidden="true"></i></a></td>';
										echo '</tr>';
									}
								}else{
									echo '<tr><td colspan="5"><span class="no-property">no record</span></td></tr>';
								}
								
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
		<?php
	}
}

if( ! function_exists('za_correct_money_format') ){
	function za_correct_money_format($number){
		
		$number = str_replace( ',','', $number ); //remove comma
		$number = str_replace( ' ','', $number ); //remove space
		$number = trim($number);
		
		return $number;
	}
}

if( ! function_exists('za_google_api_key') ){
	function za_google_api_key(){
		
		$rb = zipperagent_rb();
		
		
		if( function_exists( 'conall_edge_options' ) ){
			$conall_google_api_key = conall_edge_options()->getOptionValue('google_maps_api_key');
		}else{
			$conall_google_api_key="";
		}
			
		$apikey = isset($rb['google']['apikey'])?$rb['google']['apikey']:'';
		$apikey = !empty($conall_google_api_key)?$conall_google_api_key:$apikey;
			
			return $apikey;
	}
}

if( ! function_exists('za_get_default_order') ){
	function za_get_default_order(){
		
		$rb = zipperagent_rb();
			
		$default_order = isset($rb['web']['default_order'])?$rb['web']['default_order']:'';
			
		return $default_order;
	}
}

if( ! function_exists('za_get_default_proptype') ){
	function za_get_default_proptype(){
		
		$default_value = array(
			'SF','MF','CC'
		);
			
		$rb = zipperagent_rb();
			
		$default_proptype = isset($rb['web']['default_proptype'])?$rb['web']['default_proptype']:'';
		
		$default_proptype = !$default_proptype ? $default_value : explode(',',$default_proptype);
		
		return $default_proptype;
	}
}

if( ! function_exists('is_popup_detail_page_only') ){
	function is_popup_detail_page_only(){
		
		$rb = zipperagent_rb();
			
		$check = isset($rb['web']['popup_detail_page_only'])?$rb['web']['popup_detail_page_only']:0;
				
		return $check;
	}
}

if( ! function_exists('zipperagent_distance') ){
	function zipperagent_distance(){
		$rb = zipperagent_rb();
			
		$distance = isset($rb['web']['distance'])?$rb['web']['distance']:8000;
		
		return $distance;
	}
}

if( ! function_exists('zipperagent_company_name') ){
	function zipperagent_company_name(){
		$rb = zipperagent_rb();
			
		$company_name = isset($rb['web']['company_name'])?$rb['web']['company_name']:get_bloginfo('name');
		
		return $company_name;
	}
}

if( ! function_exists('zp_using_criteria') ){
	function zp_using_criteria(){
		
		$rb = zipperagent_rb();
			
		$is_using_criteria = isset($rb['web']['using_criteria'])?$rb['web']['using_criteria']:0;
			
		return $is_using_criteria;
	}
}

if( ! function_exists('is_show_extra_search_feature') ){
	function is_show_extra_search_feature(){
		
		$rb = zipperagent_rb();
			
		$default_order = isset($rb['web']['show_extra_search_feature'])?$rb['web']['show_extra_search_feature']:1;
			
		return $default_order;
	}
}

if( ! function_exists('is_price_slider_enabled') ){
	function is_price_slider_enabled(){
		
		$rb = zipperagent_rb();
			
		$enabled = isset($rb['web']['show_price_slider'])?$rb['web']['show_price_slider']:0;
			
		return $enabled;
	}
}

if( ! function_exists('zp_get_credentials') ){
	function zp_get_credentials(){
		
		$rb = zipperagent_rb();
			
		$username = isset($rb['credentials']['username'])?$rb['credentials']['username']:'';
		$key = isset($rb['credentials']['key'])?$rb['credentials']['key']:'';
			
		$return=array(
			'username'=>$username,
			'key'=>$key,
		);	
		
		return $return;
	}
}

if( ! function_exists('zipperagent_omnibar') ){
	function zipperagent_omnibar($requests=array()){
		include ZIPPERAGENTPATH. "/custom/templates/template-searchBar.php";
	}
}

if( ! function_exists('zipperagent_generate_filter_input') ){
	function zipperagent_generate_filter_input($key, $value){
		
		if(!is_array($value)){
			echo "<input type='hidden' linked-name='{$key}' name='{$key}' value='{$value}' />"."\r\n";
		}else{
			$values=$value;
			foreach($values as $value){
				echo "<input type='hidden' linked-name='{$key}_{$value}' name='{$key}[]' value='{$value}' />"."\r\n";
			}
		}
	}
}

if( ! function_exists('zipperagent_generate_filter_label') ){
	function zipperagent_generate_filter_label($key, $value){
		
		$label='';
		
		if(empty($value))
			return;
		
		if(is_array($value)){
			
			$data = get_autocomplete_data();
			$values=$value;
			foreach($values as $value){		
				
				switch($key){
					case "location":
							$arr=explode('_', $value);
							$prefix = reset($arr);
							$code = end($arr);
							switch($prefix){
								case "atwns":
										$index='towns';
									break;
								case "aars":
										$index='areas';
									break;
								case "acnty":
										$index='counties';
									break;
								case "azip":
										$index='zipcodes';
									break;
								
							}
							
							if(isset($data->$index)){					
								foreach($data->$index as $ety){
									if($ety->code===$value){
										$label = $ety->name;
									}
								}					
							}
							
							echo 'addFilterLabel("'. strtolower($key) .'[]", "'. $value .'","'. strtolower($key) .'_'. $value .'", "'. $label .'");'."\r\n";
						break;					
					
					case "school": // case "aschlnm":
							$school_tmp = explode('_', $value);
							$school_code=isset($school_tmp[0])?$school_tmp[0]:$value;
							$school_name=isset($school_tmp[1])?$school_tmp[1]:'';
							
							$label = $school_name;
							
							// echo 'addFilterLabel("'. strtolower($key) .'[]", "'. $value .'","'. strtolower($key) .'", "'. $label .'");'."\r\n";							
							echo 'addFilterLabel("'. strtolower($key) .'[]", "'. $value .'","'. strtolower($key) .'_'. $value .'", "'. $label .'");'."\r\n";
						break;
						
					default:
							echo 'addFilterLabel("'. strtolower($key) .'[]", "'. $value .'","'. strtolower($key) .'_'. $value .'", "'. $label .'");'."\r\n";							
						break;
				}				
			}
		}else{
			echo 'addFilterLabel("'. strtolower($key) .'", "'. $value .'", "'. strtolower($key) .'", "'. $label .'");'."\r\n";
		}
	}
}

if( ! function_exists('global_magicsuggest_script') ){
	function global_magicsuggest_script($location='', $requests=array()){
	?>
	<script>
		jQuery(document).ready(function($) {
			
			var ms = $('#zpa-area-input').magicSuggest({
				<?php /* data: '<?php echo zipperagent_url(false) . 'custom/options.php' ?>', */ ?>
				<?php
								
				ob_start();
				include ZIPPERAGENTPATH . '/custom/options.php';
				$jsonData=ob_get_clean();				
				
				if(isset($requests['location_option'])){	
					$data = json_decode($jsonData);
					$added = array();
					$included = explode(',',$requests['location_option']);
					foreach( $data as $field){
						if(in_array($field->code, $included)){
							$added[]=$field;
						}
					}
					$jsonData = json_encode($added);
				}
				?>
				data: <?php echo $jsonData; ?>,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				// maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},
				<?php
				if($location){
					if( !empty( $location ) || is_array( $location ) ){
						if( !is_array($location) ){
							if(substr($location, 0, 5)=='azip_'){
								$azip = str_replace(substr($location, 0, 5),'', $location);
								echo "value: ['{$azip}'],";
							}else{						
								echo "value: ['{$location}'],";
							}
						}else{		
							$modified_location=array();
							foreach($location as $element){
								if(substr($element, 0, 5)=='azip_'){
									$azip = str_replace(substr($element, 0, 5),'', $element);
									$modified_location[] = $azip;
								}else if(!empty($element)) {						
									$modified_location[] = $element;
								}
							}
							if($modified_location){
								$vars = implode( "','", $modified_location );
								echo "value: ['{$vars}'],";
							}
						}
					}
				}
				?>
			});
			
			var rawValue='';
			var afterDelete=0;
			var recentSelected=[];
			var currentSelected=[];
			
			//get user input keywords
			$(ms).on('keyup', function(){
				rawValue = ms.getRawValue();
				afterDelete=0;
			});
			
			//get current selected value
			$(ms).on('focus', function(c){
				recentSelected = ms.getValue();
				afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms).on('blur', function(c, e){
				var data = ms.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				currentSelected = ms.getValue();
				
				if( rawValue!="" && recentSelected.length == currentSelected.length && ! afterDelete){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms.setValue([firstData.code]);
					}else{
						var custom = rawValue;
						var push =  new Array(custom);
						ms.setValue(push);
					}
					
					afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms.setValue([firstData.code]);
						}else{
							var custom = rawValue;
							var push =  new Array(custom);
							ms.setValue(push);
						}
					}
					
					ms.collapse();
				}
			});
			
			$(ms).on('selectionchange', function(e,m,r){
				if(r.length==recentSelected.length && r.length==currentSelected.length){
					afterDelete=1;
				}else{
					afterDelete=0;
				}
			});
		});
	</script>
	<?php
	}
}

if( ! function_exists('auto_trigger_button_script') ){
	function auto_trigger_button_script(){
		global $requests;
		?>
		<script>
			jQuery(document).ready(function(){
				<?php 
				// echo "<pre>"; print_r($requests); echo "</pre>";
				// echo "<pre>"; print_r($_GET); echo "</pre>";
				// echo "<pre>"; print_r($_REQUEST); echo "</pre>";
				$afteraction = isset($_REQUEST['afteraction'])?$_REQUEST['afteraction']:'';
				$listingparams = isset($_REQUEST['listingparams'])?$_REQUEST['listingparams']:'';
				$listingparams_arr = explode(';', $listingparams);
				$savedListingId=isset($listingparams_arr[0])?$listingparams_arr[0]:'';
				$savedSearchId=isset($listingparams_arr[1])?$listingparams_arr[1]:'';
				switch($afteraction){
					case "save_favorite_listing":		
							echo "
								
								var listingId =  '{$savedListingId}';
								var searchId =  '{$savedSearchId}';
								var element = jQuery('.listing-'+listingId);
								var contactId = element.attr('contactid');
								var isLogin = element.attr('isLogin');
								
								save_favorite_listing( element, listingId, contactId, searchId, isLogin); ";							
						break;
					case "save_favorite":
							echo "
								var contactId = jQuery('.bt-listing__favorite-button').attr('contactid');
								var isLogin = jQuery('.bt-listing__favorite-button').attr('isLogin');
								
								save_favorite( contactId, '', isLogin );";
						break;
					case "save_property":
							echo "
								var contactId = jQuery('.save-property-btn').attr('contactid');
								save_property( contactId, '');";
						break;
					case "save_search":
							echo "
								var contactId = jQuery('#saveSearchButton').attr('contactid');
								save_search( contactId, 1 );";
						break;
					case "schedule_show":
							echo "jQuery('#zpaScheduleShowing').modal('show');";
						break;
					case "request_info":
							echo "jQuery('#zpaMoreInfo').modal('show');";
						break;
					case "share_email":
							echo "jQuery('#zpaShareEmail').modal('show');";
						break;
				}
				if($afteraction) echo "removeParams('afteraction');";
				if($listingparams) echo "removeParams('listingparams');";
				?>
				
				function removeParams(sParam){
					var url = window.location.href.split('?')[0]+'?';
					var sPageURL = decodeURIComponent(window.location.search.substring(1)),
						sURLVariables = sPageURL.split('&'),
						sParameterName,
						i;
				 
					for (i = 0; i < sURLVariables.length; i++) {
						sParameterName = sURLVariables[i].split('=');
						if (sParameterName[0] != sParam) {
							url = url + sParameterName[0] + '=' + sParameterName[1] + '&'
						}
					}
					var newUrl = url.substring(0,url.length-1);
					window.history.pushState("", "", newUrl);
				}
			});
		</script>
		<?php
	}
}

if( ! function_exists('zipperagent_search_filter') ){
	function zipperagent_search_filter(){
		global $requests;
		?>
		<div id="zpa-view-selected-filter">
			<input type="text" id="zpa-selected-filter" style="border:0;">
			<script>
			jQuery(document).ready(function(){
				var msSelect = jQuery('#zpa-selected-filter').magicSuggest({
					allowFreeEntries: false,
					editable: false,
					hideTrigger: true,
					placeholder: '',
					maxSelection: 999,
					selectionRenderer: function(data){
						// console.log(data);
						return '<div class="name">' + data.name + '</div>';
					}
				});
				
				var currentSelection=[];
				
				jQuery(msSelect).on('selectionchange', function(e,m){
					
					// console.log(this.getSelection());
					// this.removeFromSelection(this.getSelection(), true);
					// alert('Choose something else. Glory to Arstotzka!');
					
					var new_parameters;
					var newSelection = this.getValue();
					var parameter;
					var value;
					if(newSelection.length < currentSelection.length){ //remove mark
						var removedSelection = currentSelection.filter(function(obj) { return newSelection.indexOf(obj) == -1; });
						if(removedSelection.length){
							jQuery.each(removedSelection, function(index,parameter){
								value='';
								switch(parameter) {
									<?php
									$propTypeFields = get_property_type();
									foreach($propTypeFields as $key => $val){
									echo "\r\n" .
									'case "propertytype_'.trim($key).'":'."\r\n" .
										"jQuery(\"#zpa-search-filter-form input[name*='propertytype' i][value='{$key}']\").prop('checked',false);"."\r\n" .
										"parameter='propertytype';"."\r\n" .
										"value='{$key}';"."\r\n" .
										'break;'."\r\n";
									} ?>
									<?php
									$propSubTypeFields = get_property_sub_type();
									foreach($propSubTypeFields as $key => $val){
									echo "\r\n" .
									'case "propsubtype_'.trim($key).'":'."\r\n" .
										"jQuery(\"#zpa-search-filter-form input[name*='propsubtype' i][value='{$key}']\").prop('checked',false);"."\r\n" .
										"parameter='propsubtype';"."\r\n" .
										"value='{$key}';"."\r\n" .
										'break;'."\r\n";
									} ?>
									case "status":																	
									case "bedrooms":															
									case "bathcount":															
									case "o":															
										jQuery("#zpa-search-filter-form input[name*='"+parameter+"' i]").prop('checked', false);
										break;
									case "minlistprice":
									case "maxlistprice":
										jQuery("#zpa-search-filter-form input[name*='"+parameter+"' i]").val('');
										break;
									default:															
										jQuery("#zpa-search-filter-form input[name*='"+parameter+"' i]").remove();
								}
								// new_parameters=removeUrlParameter(parameter, value);
								// console.log(new_parameters);
								// var url = jQuery('#zpa-search-filter-form').attr('action') + '?' + new_parameters;										
								
								jQuery('#zpa-search-filter-form').submit();
							});
						}
					}
					currentSelection = newSelection;		
					
				});
				
				function removeUrlParameter(parameter,value){
					/*
					 * queryParameters -> handles the query string parameters
					 * queryString -> the query string without the fist '?' character
					 * re -> the regular expression
					 * m -> holds the string matching the regular expression
					 */
					var queryParameters = {}, queryString = location.search.substring(1),
						re = /([^&=]+)=([^&]*)/g, m;
					
					// Creates a map with the query string parameters
					while (m = re.exec(queryString)) {
						var indexParameter = decodeURIComponent(m[1]).toLowerCase();
						
						if(indexParameter.substr(indexParameter.length - 2)=='[]'){ //if array
							indexParameter = indexParameter.substring(0, indexParameter.length-2); //remove []
							if(!Array.isArray(queryParameters[indexParameter])){
								queryParameters[indexParameter]=[];
							}
							queryParameters[indexParameter].push(decodeURIComponent(m[2]));
								
						}else{ // string
							queryParameters[indexParameter] = decodeURIComponent(m[2]);
						}
					}

					// Add new parameters or update existing ones
					if(value){
						if(Array.isArray(queryParameters[parameter])){
							for(var i=0; queryParameters[parameter].length; i++){
								if(queryParameters[parameter][i]==value){
									queryParameters[parameter].splice(i,1);
									break;
								}
							}
						}else if(queryParameters[parameter]==value){
							delete queryParameters[parameter];	
						}
					}else{
						delete queryParameters[parameter];						
					}
					
					/*
					 * Replace the query portion of the URL.
					 * jQuery.param() -> create a serialized representation of an array or
					 *     object, suitable for use in a URL query string or Ajax request.
					 */
					return jQuery.param(queryParameters); // Causes page to reload
				}
				
				window.onFilterChange = function(label, name){
					
					if(label==''){
						return;
					}
					
					var value = {id:name, name: label};
					currentSelection.push(value);
					// removeFilterField(label, name);
					msSelect.setValue([value]);
					changeLabel(name, label);
				}
				
				window.removeFilterField = function(label, name){
					var value = {id:name, name: label};
					var selection = msSelect.getSelection();
					for(var i=0; i < selection.length; i++){
						if(selection[i].id==name){
							// console.log('remove ' + name);
							msSelect.removeFromSelection([value], true);
						}
					}
				}
				
				window.filterLabel = function(name, value){
					name = name.toLowerCase();
					var newLabel;
					var currency='<?php echo zipperagent_currency(); ?>';
					var vall;
					switch(name){
						case "maxlistprice":
							newLabel = 'up to '+ currency + shortenmoney(value.replace(/,/g, '')) ;	
							break;
						case "minlistprice":
							newLabel = 'over '+ currency + shortenmoney(value.replace(/,/g, '')) ;	
							break;
						case "bedrooms":
							newLabel = value + ' + Beds';	
							break;
						case "bathcount":
							newLabel = value + ' + Bath';	
							break;
						case "squarefeet":
							newLabel = value + ' sqft';	
							break;
						<?php
						$propTypeFields = get_property_type();
						foreach($propTypeFields as $key => $val){
						echo "\r\n" .
						'case "propertytype_'.strtolower($key).'":'."\r\n" .
							"newLabel = '{$val}'"."\r\n" .
							'break;'."\r\n";
						} ?>
						<?php
						$propSubTypeFields = get_property_sub_type();
						foreach($propSubTypeFields as $key => $val){
						echo "\r\n" .
						'case "propsubtype_'.strtolower($key).'":'."\r\n" .
							"newLabel = '{$val}'"."\r\n" .
							'break;'."\r\n";
						} ?>
						case "yearbuilt":
							newLabel = 'year ' + value;	
							break;
						case "maxdayslisted":
							newLabel = 'max ' + value + ' days listed';
							break;
						case "withimage":
							newLabel = 'has photos';	
							break;
						case "featuredonlyyn":
							newLabel = 'featured';	
							break;
						case "openhomesonlyyn":
							newLabel = 'open houses only';	
							break;
						case "hasvirtualtour":
							newLabel = 'has virtual tour';	
							break;
						case "listinapage":
							newLabel = value + ' results per page';	
							break;
						case "o":
							switch(value){
								case "apmin:DESC":
									vall = 'price (high to low)';
								break;
								case "apmin:ASC":
									vall = 'price (low to high)';
								break;
								case "asts:ASC":
									vall = 'status';
								break;
								case "atwns:ASC":
									vall = 'city';
								break;
								case "lid:DESC":
									vall = 'listing date';
								break;
								case "apt:DESC":
									vall = 'type/price descending';
								break;
								case "alstid:ASC":
									vall = 'listing number';
								break;
								default:
									vall = value;
								break;
							}
							
							// newLabel = 'order by ' + vall; //disable order label
							newLabel='';
							break;
						case "advstno":
							newLabel = 'street number ' + value;	
							break;
						case "advstname":
						case "advtownnm":
						case "advstates":
						case "advcounties":
							newLabel = value;	
							break;
						case "advstzip":
							newLabel = 'zipcode ' + value;	
							break;
						case "alstid":
							newLabel = 'listing: ' + value;	
							break;
						case "apold":
							newLabel = 'Pool Description';	
							break;
						case "altand":
							newLabel = 'Lot Description ' + value;	
							break;
						case "awtrf":
							newLabel = 'Waterfront Flag';	
							break;
						default:												
							newLabel = name.toLowerCase()+' '+value;
							break;
					}
					return newLabel;
				}
				
				function shortenmoney(num){
					var digits=0;
					var si = [
						{ value: 1, symbol: "" },
						{ value: 1E3, symbol: "k" },
						{ value: 1E6, symbol: "M" },
						{ value: 1E9, symbol: "G" },
						{ value: 1E12, symbol: "T" },
						{ value: 1E15, symbol: "P" },
						{ value: 1E18, symbol: "E" }
					  ];
					  var rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
					  var i;
					  for (i = si.length - 1; i > 0; i--) {
						if (num >= si[i].value) {
						  break;
						}
					  }
					  return (num / si[i].value).toFixed(digits).replace(rx, "$1") + si[i].symbol;
				}
				
				function changeLabel(name, newLabel){
					var index=0;
					jQuery('#zpa-selected-filter input[type=hidden]').each(function(){
						if(jQuery(this).val()==name){
							return false; 
						}
						index++;
					});
					
					var oldLabel = jQuery('#zpa-selected-filter .ms-sel-item:eq('+index+') .name').html();
					jQuery('#zpa-selected-filter .ms-sel-item .name:contains("'+oldLabel+'")').html(newLabel);
				}
				
				jQuery('#zpa-main-container').on('click', '#zpa-selected-filter .ms-sel-ctn .ms-sel-item', function(){
					jQuery(this).find('.ms-close-btn').click();
				});
				
				<?php /*
				function changeSelection(name, newLabel){
					var selection = msSelect.getSelection();
					var newSelection = [];
					var newValue;
					var i;
					var found=0;
					
					console.log(selection);
					for (i = 0; i < selection.length; ++i) {
						// do something with `selection[i]`
						if(selection[i].id==name){
							selection[i].name=newLabel;
							found=1;
						}
						
						newValue = {name:name, value: newLabel};
						newSelection.push(newValue);
					}
					if(!found){
						var value = {id:name, name: newLabel};
						newValue = {name:name, value: newLabel};
						selection.push(value);
						newSelection.push(newValue);
					}
					// console.log(selection);
					// selection = (object) selection;
					// console.log(newSelection);
					// msSelect.removeFromSelection(newSelection, true);
					// msSelect.setSelection([]);
					msSelect.clear();
					msSelect.setSelection(newSelection);
				}
				
				function populateFromArray(array) {
				  var output = {};
				  array.forEach(function(item, index) {
					if (!item) return;
					if (Array.isArray(item)) {
					  output[index] = populateFromArray(item);
					} else {
					  output[index] = item;
					}
				  });
				  return output;
				} */ ?>
				
				<?php																		
				$filterExcluded=get_old_filter_excludes();
				
				foreach($requests as $filterField=>$filterValue){
					if(!in_array($filterField, $filterExcluded) && !empty($filterValue) ){
						$label='';
						switch($filterField){
							case "propertytype":
									$label="$filterField $filterValue";
								break;
							case "propsubtype":
									$label="$filterField $filterValue";
								break;
							default:
									$label="$filterField $filterValue";
								break;
						}
						
						// echo "onFilterChange('{$label}', '{$filterField}');"."\r\n";
						if(is_array($filterValue)){
							foreach($filterValue as $singleFilterval){
								// $singleFilterField=$filterField.'_'. trim( str_replace(' ','', $singleFilterval) ); //error
								$singleFilterField=$filterField.'_'. trim( $singleFilterval );
								echo "onFilterChange(filterLabel('{$singleFilterField}','{$singleFilterval}'), '{$singleFilterField}');"."\r\n"; // <- there is an issue here
							}
						}
						else
							echo "onFilterChange(filterLabel('{$filterField}','{$filterValue}'), '{$filterField}');"."\r\n";
					}
				}
				?>
			});
			</script>
		</div>
		<?php
	}
}

if( ! function_exists('get_map_coordinate') ){
	function get_map_coordinate($search=''){
		$coordinates=array();
		
		if($search){
			
			$version = '@package_version@';
			if (strstr($version, 'package_version')) {
				set_include_path(dirname(dirname(__FILE__)) . PATH_SEPARATOR . get_include_path());
			}
			
			require_once ZIPPERAGENTPATH . '/custom/OpenStreetMap.php';

			$osm = new Services_OpenStreetMap();
			$result = $osm->getPlace($search, 'json');			
			
			$coordinates=$result;
		}
		
		return $coordinates;
	}
}

if( ! function_exists('admin_fields_mapping') ){
	function admin_fields_mapping($type=''){
		
		$fields['remarks']='_lp_remarks';
		$fields['listprice']='_lp_listing_price';
		$fields['address']='_lp_Address';
		$fields['nobedrooms']='_lp_bedrooms';
		$fields['nobaths']='_lp_bathrooms';
		$fields['proptype']='_lp_proptype';
		$fields['status']='_lp_status';
		$fields['lngCOUNTYDESCRIPTION']='_lp_county';
		$fields['zipcode']='_lp_zipcode';
		$fields['assessments']='_lp_assessed_value';
		$fields['taxes']='_lp_taxes';
		$fields['taxyear']='_lp_tax_year';
		$fields['xxxxx']='_lp_condo_fees';
		$fields['style']='_lp_styles';
		$fields['livlevel']='_lp_living_levels';
		$fields['lotsize']='_lp_lot_size';
		$fields['xxxxx']='_lp_living_area';
		$fields['basement']='_lp_basement';
		$fields['norooms']='_lp_rooms';
		$fields['nofullbaths']='_lp_full_bathrooms';
		$fields['masterbath']='_lp_master_bathrooms';
		$fields['parkingspaces']='_lp_parking_space';
		$fields['parkingfeature']='_lp_parking';
		$fields['yearbuilt']='_lp_year_built';
		
		if($type=='landingpage'){
			foreach($fields as $key => &$field){
				$field=str_replace('_lp_','za_',$field);
			}
		}
		
		return $fields;
	}
}
