<?php
	if( ! defined('ABSPATH') )
		return;
	
	$domainName = str_replace( 'https://', '', get_site_url() );
	$domainName = str_replace( 'http://', '', $domainName );
	
	// define the path and name of cached file
	$dir = ZIPPERAGENTPATH . '/custom/caches/' . $domainName . '/';
	if (!file_exists($dir)) {
		mkdir($dir, 0777, true);
	}
	$filename = 'root-' . date('M-d-Y').'.php';
	$cachefile = $dir.$filename;
	
	$files = scandir($dir);
	foreach($files as $file) {
		if( is_file( $dir . $file ) && $file!=$filename && strpos($file, 'root-') !== false )
			@unlink( $dir . $file );
	}
	
	// define how long we want to keep the file in seconds. I set mine to 24 hours.
	$cachetime = 86400;
	// Check if the cached file is still fresh. If it is, serve it up and exit.
	if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
   	include($cachefile);
    	return;
	}
	// if there is either no file OR the file to too old, render the page and capture the HTML.
	ob_start();
	
	/** CONTENT HERE **/
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
		$rb = array();
	}
	
	if(isset($rb['web']['subdomain']))  					$data['web']['subdomain'] = $rb['web']['subdomain'];
	if(isset($rb['web']['protocol']))  						$data['web']['protocol'] = $rb['web']['protocol'];
	if(isset($rb['web']['authorization']['consumer_key']))  $data['web']['authorization']['consumer_key'] = $rb['web']['authorization']['consumer_key'];
	if(isset($rb['web']['authorization']['access_token']))  $data['web']['authorization']['access_token'] = $rb['web']['authorization']['access_token'];
	if(isset($rb['web']['asrc']))  							$data['web']['asrc'] = $rb['web']['asrc'];
	if(isset($rb['web']['aloff']))  						$data['web']['aloff'] = $rb['web']['aloff'];
	if(isset($rb['web']['rnhidestreetno']))  				$data['web']['rnhidestreetno'] = $rb['web']['rnhidestreetno'];
	if(isset($rb['web']['status_active']))  				$data['web']['status_active'] = $rb['web']['status_active'];
	if(isset($rb['web']['status_sold']))  					$data['web']['status_sold'] = $rb['web']['status_sold'];
	if(isset($rb['web']['states']))  						$data['web']['states'] = $rb['web']['states'];
	if(isset($rb['web']['signup_optional']))  				$data['web']['signup_optional'] = $rb['web']['signup_optional'];
	if(isset($rb['web']['map_centre']['lat']))  			$data['web']['map_centre']['lat'] = $rb['web']['map_centre']['lat'];
	if(isset($rb['web']['map_centre']['lng']))  			$data['web']['map_centre']['lng'] = $rb['web']['map_centre']['lng'];
	if(isset($rb['web']['sign_up_interval']))  				$data['web']['sign_up_interval'] = $rb['web']['sign_up_interval'];
	if(isset($rb['web']['popup_show_time']))  				$data['web']['popup_show_time'] = $rb['web']['popup_show_time'];
	if(isset($rb['web']['openhouse_searchbar']))  			$data['web']['openhouse_searchbar'] = $rb['web']['openhouse_searchbar'];
	if(isset($rb['web']['slider_show_popup_count']))  		$data['web']['slider_show_popup_count'] = $rb['web']['slider_show_popup_count'];
	if(isset($rb['web']['social_share']))  					$data['web']['social_share'] = $rb['web']['social_share'];
	if(isset($rb['web']['default_order']))  				$data['web']['default_order'] = $rb['web']['default_order'];
	if(isset($rb['web']['show_extra_search_feature']))  	$data['web']['show_extra_search_feature'] = $rb['web']['show_extra_search_feature'];
	if(isset($rb['web']['show_price_slider']))  			$data['web']['show_price_slider'] = $rb['web']['show_price_slider'];
	if(isset($rb['web']['popup_visit_counter']))  			$data['web']['popup_visit_counter'] = $rb['web']['popup_visit_counter'];
	if(isset($rb['web']['show_agent_list']))  				$data['web']['show_agent_list'] = $rb['web']['show_agent_list'];
	if(isset($rb['web']['branded_virtualtour']))  			$data['web']['branded_virtualtour'] = $rb['web']['branded_virtualtour'];
	if(isset($rb['web']['show_agent_name']))  				$data['web']['show_agent_name'] = $rb['web']['show_agent_name'];
	if(isset($rb['web']['print_logo']))  					$data['web']['print_logo'] = $rb['web']['print_logo'];
	if(isset($rb['web']['print_color']))  					$data['web']['print_color'] = $rb['web']['print_color'];
	if(isset($rb['web']['default_proptype']))  				$data['web']['default_proptype'] = $rb['web']['default_proptype'];
	if(isset($rb['web']['popup_detail_page_only'])) 	 	$data['web']['popup_detail_page_only'] = $rb['web']['popup_detail_page_only'];
	if(isset($rb['web']['distance']))  						$data['web']['distance'] = $rb['web']['distance'];
	if(isset($rb['web']['company_name']))  					$data['web']['company_name'] = $rb['web']['company_name'];
	if(isset($rb['web']['exclude_prop_types']))  			$data['web']['exclude_prop_types'] = $rb['web']['exclude_prop_types'];
	if(isset($rb['web']['signup_optional_exception']))  	$data['web']['signup_optional_exception'] = $rb['web']['signup_optional_exception'];
	
	if(isset($rb['layout']['listpage_layout']))  			$data['layout']['listpage_layout'] = $rb['layout']['listpage_layout'];
	if(isset($rb['layout']['detailpage_layout']))  			$data['layout']['detailpage_layout'] = $rb['layout']['detailpage_layout'];
	if(isset($rb['layout']['detailpage_layout_sf']))  		$data['layout']['detailpage_layout_sf'] = $rb['layout']['detailpage_layout_sf'];
	if(isset($rb['layout']['detailpage_layout_mf']))  		$data['layout']['detailpage_layout_mf'] = $rb['layout']['detailpage_layout_mf'];
	if(isset($rb['layout']['detailpage_layout_mh']))  		$data['layout']['detailpage_layout_mh'] = $rb['layout']['detailpage_layout_mh'];
	if(isset($rb['layout']['detailpage_layout_ld']))  		$data['layout']['detailpage_layout_ld'] = $rb['layout']['detailpage_layout_ld'];
	if(isset($rb['layout']['detailpage_layout_rn']))  		$data['layout']['detailpage_layout_rn'] = $rb['layout']['detailpage_layout_rn'];
	if(isset($rb['layout']['detailpage_layout_cc']))  		$data['layout']['detailpage_layout_cc'] = $rb['layout']['detailpage_layout_cc'];
	if(isset($rb['layout']['detailpage_layout_ci']))  		$data['layout']['detailpage_layout_ci'] = $rb['layout']['detailpage_layout_ci'];
	if(isset($rb['layout']['detailpage_layout_bu']))		$data['layout']['detailpage_layout_bu'] = $rb['layout']['detailpage_layout_bu'];
	if(isset($rb['layout']['detailpage_group']))			$data['layout']['detailpage_group'] = $rb['layout']['detailpage_group'];
	
	if(isset($rb['google']['apikey']))  					$data['google']['apikey'] = $rb['google']['apikey'];
	if(isset($rb['google']['adwords']['code']))				$data['google']['adwords']['code'] = $rb['google']['adwords']['code'];
	
	if(isset($rb['facebook']['appid']))  					$data['facebook']['appid'] = $rb['facebook']['appid'];
	if(isset($rb['facebook']['appsecret']))  				$data['facebook']['appsecret'] = $rb['facebook']['appsecret'];
	
	if(isset($rb['tenant']['timezone']))  					$data['tenant']['timezone'] = $rb['tenant']['timezone'];
	if(isset($rb['tenant']['mls_timezone']))  				$data['tenant']['mls_timezone'] = $rb['tenant']['mls_timezone'];
	
	if(isset($rb['credentials']['username'])) 				$data['credentials']['username'] = $rb['credentials']['username'];
	if(isset($rb['credentials']['key'])) 					$data['credentials']['key'] = $rb['credentials']['key'];
	
	echo json_encode( $data );
	/** CONTENT END **/
	
	// We're done! Save the cached content to a file
	$fp = fopen($cachefile, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// finally send browser output
	ob_end_flush();
?>