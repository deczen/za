<?php
if( ! function_exists('zipperagent_run_curl') ){
	function zipperagent_run_curl($url, $args=array(), $post=0, $vars='', $returnAll=0, $saveSession=""){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
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
		
		$ipaddress = get_ipaddress();
		if($ipaddress){
			$headers[]='X-Forwarded-For: '. $ipaddress;
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
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
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
				
		include_once ZIPPERAGENTPATH . "/custom/log.php";
		$log=new ZipperAgentLog('api','functions.php');
		$log->log_msg("[url= {$url}, time= {$time_elapsed_secs}s]");
		
		// echo( $json );
		$server_output = json_decode($json);
		
		if( (isset($server_output->status) && $server_output->status=='FAIL' )
			|| ( isset($server_output->responseCode) && $server_output->responseCode >= 200 && $server_output->responseCode <= 299 && $server_output->status != 'SUCCESS')
			|| ! ( isset($server_output->responseCode) && $server_output->responseCode >= 200 && $server_output->responseCode <= 299 ) ){
			if(isset($server_output->errors)){
				foreach($server_output->errors as $error){
					$log=new ZipperAgentLog('error','functions.php');
					$log->log_msg("[url= {$url}, status={$server_output->status}, responseCode={$server_output->responseCode}, error_message=\"{$error->errorMessage}\"]");					
				}
			}else if(isset($server_output->result)){
				$log=new ZipperAgentLog('error','functions.php');
				$log->log_msg("[url= {$url}, status={$server_output->status}, responseCode={$server_output->responseCode}, error_message=\"{$server_output->result}\"]");	
			}else if( is_object( $server_output ) ){
				$log=new ZipperAgentLog('error','functions.php');
				$log->log_msg("[url= {$url}, status={$server_output->status}, responseCode={$server_output->responseCode}, error_message=\"no error message\"]");	
			}else{
				$log=new ZipperAgentLog('error','functions.php');
				$log->log_msg("[url= {$url}, status=\"no status\", responseCode=\"no response code\", error_message=\"no error message\"]");	
			}
		}
		
		// echo "<pre>"; print_r( $server_output  ); echo "</pre>";
		if($returnAll)
			$result = isset($server_output)?$server_output:array();
		else
			$result = isset($server_output->result)?$server_output->result:array();
		
		if($saveSession==1 || $index=='/api/mls/advSearchWoCnt' && $saveSession!== 0)
			zipperagent_save_session_result($index, $result);
		
		return (array) $result;
	}
}

if (!function_exists('get_ipaddress')){
	
	function get_ipaddress(){
		
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		
		// $ipaddress = '192.165.0.0';
		return $ipaddress;
		
	}
}

if( ! function_exists('zipperagent_generate_list') ){
	function zipperagent_generate_list($requests, $is_ajax=0, $generate_list=1){
		
		$requests=key_to_lowercase($requests); //convert all key to lowercase
		$excludes = get_long_excludes();
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		/**
		 * VARIABLES
		 * @ set values for each variables
		 */	 

		$is_shortcode 		= (isset($requests['is_shortcode'])?$requests['is_shortcode']:'');
		 
		$o 					= ( isset($requests['o'])?$requests['o']:'' );
		$location 			= ( isset($requests['location'])?$requests['location']:'' );
		$address 			= ( isset($requests['address'])?$requests['address']:'' );
		$advStNo 			= ( isset($requests['advstno'])?$requests['advstno']:'' );
		$advStName 			= ( isset($requests['advstname'])?$requests['advstname']:'' );
		$advTownNm 			= ( isset($requests['advtownnm'])?$requests['advtownnm']:'' );
		$advStates 			= ( isset($requests['advstates'])?$requests['advstates']:'' );
		$advCounties 		= ( isset($requests['advcounties'])?$requests['advcounties']:'' );
		$advStZip 			= str_replace( ' ', '', ( isset($requests['advstzip'])?$requests['advstzip']:'' ) );
		$boundaryWKT 		= ( isset($requests['boundarywkt'])?$requests['boundarywkt']:'' );
		$propertyType 		= ( isset($requests['propertytype'])?(!is_array($requests['propertytype'])?array($requests['propertytype']):$requests['propertytype']):array() );
		$propSubType 		= ( isset($requests['propsubtype'])?(!is_array($requests['propsubtype'])?array($requests['propsubtype']):$requests['propsubtype']):array() );
		$status 			= ( isset($requests['status'])?$requests['status']:'' );
		$minListPrice 		= ( isset($requests['minlistprice'])?$requests['minlistprice']:'' );
		$maxListPrice		= ( isset($requests['maxlistprice'])?$requests['maxlistprice']:'' );
		$squareFeet			= ( isset($requests['squarefeet'])?$requests['squarefeet']:'' );
		$bedrooms 			= ( isset($requests['bedrooms'])?$requests['bedrooms']:'' );
		$bathCount 			= ( isset($requests['bathcount'])?$requests['bathcount']:'' );
		$lotAcres 			= ( isset($requests['lotacres'])?$requests['lotacres']:'' );
		$minDate 			= ( isset($requests['mindate'])?$requests['mindate']:'' );
		$maxDate 			= ( isset($requests['maxdate'])?$requests['maxdate']:'' );
		$startTime 			= ( isset($requests['starttime'])?$requests['starttime']:'' );
		$endTime 			= ( isset($requests['endtime'])?$requests['endtime']:'' );
		$openHomesMode 		= ( isset($requests['openhomesmode'])?$requests['openhomesmode']:'' );
		$openHomesOnlyYn 	= ( isset($requests['openhomesonlyyn'])?$requests['openhomesonlyyn']:'' );
		$maxDaysListed 		= ( isset($requests['maxdayslisted'])?$requests['maxdayslisted']:'' );
		$featuredOnlyYn 	= ( isset($requests['featuredonlyyn'])?$requests['featuredonlyyn']:'' );
		$hasVirtualTour 	= ( isset($requests['hasvirtualtour'])?$requests['hasvirtualtour']:'' );
		$withImage 			= ( isset($requests['withimage'])?$requests['withimage']:'' );
		$dateRange 			= ( isset($requests['daterange'])?$requests['daterange']:'' );
		$year 				= ( isset($requests['yearbuilt'])?$requests['yearbuilt']:'' );
		$alagt 				= ( isset($requests['alagt'])?$requests['alagt']:'' );
		$aloff 				= ( isset($requests['aloff'])?$requests['aloff']:'' );
		$showPagination 	= ( isset($requests['pagination'])?$requests['pagination']:1 );
		$showResults	 	= ( isset($requests['result'])?$requests['result']:1 );
		$crit	 			= ( isset($requests['crit'])?$requests['crit']:'' );
		$anycrit	 		= ( isset($requests['anycrit'])?$requests['anycrit']:'' );
		$searchId			= ( isset($requests['searchid'])?$requests['searchid']:'' );
		$alstid 			= ( isset($requests['alstid'])?$requests['alstid']:'' );
		$column 			= ( isset($requests['column'])?$requests['column']:'' );
		$school 			= ( isset($requests['school'])?$requests['school']:'' );
		$alkchnnm 			= ( isset($requests['alkchnnm'])?$requests['alkchnnm']:'' );
		$offmarket 			= ( isset($requests['offmarket'])?$requests['offmarket']:'' );

		//distance search variables
		$searchDistance 	= ( isset($requests['searchdistance'])?$requests['searchdistance']:'' );
		$distance 			= ( isset($requests['distance'])?$requests['distance']:zipperagent_distance() );
		$lat 				= ( isset($requests['lat'])?$requests['lat']:'' );
		$lng 				= ( isset($requests['lng'])?$requests['lng']:'' );

		//list view type
		$view 				= ( isset($requests['view'])?$requests['view']:'' );

		/**
		 * PREPARATION
		 * @ prepare the arguments before API process
		 */

		if( $is_ajax )
			$actual_link = $requests['actual_link'];
		else
			$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		/* set count variable */
		$is_ajax_count=0;

		/* default status */
		$status = empty($status)?zipperagent_active_status():$status;
		if($view=='map'){
			$status = isset($requests['status']) && $requests['status'] ? $status : zipperagent_get_map_default_status();
		}

		/* set column number */
		$default_column=3;
		$column = empty($column)?$default_column:$column;
		$column = $column > 4 || $column < 1 ? $default_column : $column;
		switch( $column ){
			case 4:
					$columns_code = 'col-lg-3 col-sm-6 col-md-6 col-xs-12';
				break;
			case 1:
					$columns_code = 'col-lg-12 col-sm-12 col-md-12 col-xs-12';
				break;
			case 2:
					$columns_code = 'col-lg-6 col-sm-6 col-md-6 col-xs-12';
				break;
			case 3:
			default:
					$columns_code = 'col-lg-4 col-sm-6 col-md-6 col-xs-12';			
				break;
		}

		/* generate mls_state_map */
		$arr=array();
		$mls_state_map=isset($rb['web']['mls_state_map']) ? $rb['web']['mls_state_map'] : array();
		foreach( $mls_state_map as $source => $param ){

			$arr=array(
				'ascr'=>$source,
				'astt'=>$param,
			);
			$anycrit.='('. proces_crit($arr) .')';
		}

		/* get town list */
		$locqry=array();
		$coords=null;
		if( $location ){
			
			$location=!is_array($location)?array($location):$location;
			$loc_country=array();
			$loc_town=array();
			$loc_area=array();
			$loc_zipcode=array();
			$loc_address=array();
			$loc_hs=array();
			$loc_ms=array();
			$loc_gs=array();
			$loc_sd=array();
			$loc_ln=array();
			
			// $towns = get_town_list();
			foreach( $location as $var ){
				$temp = urldecode($var);
				
				if( substr($temp, 0, 6) == 'acnty_' ){
					$loc_country[]=substr($temp, 6);
				}else if( substr($temp, 0, 6) == 'atwns_' ){
					$loc_town[]=substr($temp, 6);
				}else if( substr($temp, 0, 5) == 'aars_' ){
					$loc_area[]=substr($temp, 5);
				}else if( substr($temp, 0, 5) == 'azip_' ){
					$loc_zipcode[]=substr($temp, 5);
				}else if( substr($temp, 0, 9) == 'aflladdr_' ){
					$loc_address[]=substr($temp, 9);
				}else if( substr($temp, 0, 6) == 'hschl_' ){
					$loc_hs[]=substr($temp, 6);
				}else if( substr($temp, 0, 6) == 'mschl_' ){
					$loc_ms[]=substr($temp, 6);
				}else if( substr($temp, 0, 6) == 'gschl_' ){
					$loc_gs[]=substr($temp, 6);
				}else if( substr($temp, 0, 7) == 'aschdt_' ){
					$loc_sd[]=substr($temp, 7);
				}else if( substr($temp, 0, 9) == 'alkchnnm_' ){
					$loc_ln[]=substr($temp, 9);
				}else{
					$loc_zipcode[]=$temp;
				}
			}
			
			/* convert array to string */
			if(sizeof($loc_country)) $locqry['acnty']=implode(',',$loc_country);
			if(sizeof($loc_town)) $locqry['atwns']=implode(',',$loc_town);
			if(sizeof($loc_area)) $locqry['aars']=implode(',',$loc_area);
			if(sizeof($loc_zipcode)) $locqry['azip']=implode(',',$loc_zipcode);
			if(sizeof($loc_address)) $locqry['aflladdr']=implode(',',$loc_address);
			if(sizeof($loc_hs)) $locqry['hschl']=implode(',',$loc_hs);
			if(sizeof($loc_ms)) $locqry['mschl']=implode(',',$loc_ms);
			if(sizeof($loc_gs)) $locqry['gschl']=implode(',',$loc_gs);
			if(sizeof($loc_sd)) $locqry['aschdt']=implode(',',$loc_sd);
			if(sizeof($loc_ln)) $locqry['alkChnNm']=implode(',',$loc_ln);
			
			// die( $locqry );
		}
		if( $advStNo || $advStName || $advStZip || $advStates || $advTownNm || $advCounties || $alkchnnm ){
			
			$loc_advStNo=array();
			$loc_advStName=array();
			$loc_advStZip=array();
			$loc_advStates=array();
			$loc_advTownNm=array();
			$loc_advAreas=array();
				
			if(sizeof($advStNo)) $locqry['astno']=($advStNo);
			if(sizeof($advStName)) $locqry['astnmf']=($advStName);
			if(sizeof($advStZip)) $locqry['azip']=($advStZip);
			if(sizeof($advStates)) $locqry['astt']=($advStates);
			if(sizeof($advTownNm)) $locqry['atwnnm']=($advTownNm);
			if( $alkchnnm ) $locqry['alkChnNm']=is_array($alkchnnm)?implode(',',$alkchnnm):$alkchnnm;
			// if(sizeof($advCounties)) $locqry['acnty']=($advCounties);
			
		}
		if($boundaryWKT){
			// preg_match( '/POLYGON \(\((.*?)\)\)/', $boundaryWKT, $match );
			preg_match( '/POLYGON \(\((.*?)\)\)/', urldecode($boundaryWKT), $match );
			$coor_string = isset($match[1])?'('.$match[1].')':'';
			preg_match_all( "/\(([^)]+)\)/", $coor_string, $match );
			// $polygons = array_map('trim', explode( ',', $match[1] ));
			$polygons = $match[1];
			$added_polygons=array();
			foreach( $polygons as $index=>&$polygon ){
				$polygon= str_replace(' ','',$polygon);
				$temp = explode(',',$polygon);
				
				// $polygon= str_replace(', ',':',$polygon); 
				$polygon = $temp[0].':'.$temp[1];
				$added_polygons[]=$polygon;
			}
			$added_polygons[]=$added_polygons[0];
			$coords=implode(',',$added_polygons );
			// $coords="-71.057083:42.361145,-71.057083:41,-70:41,-70:42,-71.057083:42.361145";
		}

		/* get advanced search */
		$advSearch=array();	
		if( $openHomesOnlyYn || $maxDaysListed ){
			$days = 14;
			$advSearch['hasoh']=!empty($maxDaysListed)?$maxDaysListed:$days;
		}
		if( $withImage )
			$advSearch['hasp']="true";

		if( $hasVirtualTour )
			$advSearch['hasvt']="true";

		if( $year )
			$advSearch['ayblt']=$year;

		if( $squareFeet )
			$advSearch['acarea']=$squareFeet;

		if( $alagt )
			$advSearch['alagt']=$alagt;

		if( $aloff )
			$advSearch['aloff']=$aloff;		

		//generate extra proptype variables
		if($extra_proptypes = zipperagent_extra_proptype()){
			foreach($extra_proptypes as $key=>$extra_proptype){
				
				if(isset($requests[strtolower($extra_proptype['abbrev'])])){
					$tempval=$requests[strtolower($extra_proptype['abbrev'])];
					unset($requests[strtolower($extra_proptype['abbrev'])]);
					$requests[$extra_proptype['abbrev']]=$tempval;
				}
			}
		}

		//generate school variables
		if( $school  ){
			foreach($school as $scl){
				$school_tmp = explode('_', $scl);
				$school_code=isset($school_tmp[0])?$school_tmp[0]:$scl;
				$school_name=isset($school_tmp[1])?$school_tmp[1]:'';
				
				if($school_code && $school_name)
					$requests['aschlnm'][]=$school_code.'$'.$school_name;
				else
					$requests['aschlnm'][]=$school_code;
			}
		}

		//remove space from alstid (listing id search)
		if( isset($requests['alstid']) )
			$requests['alstid']=str_replace(' ','', $requests['alstid']);

		//generate rest of variables
		foreach( $requests as $key=>$val ){
			if( ! in_array( strtolower($key), $excludes ) ){
				if(is_array($val)){
					$advSearch[$key]=implode(',',$val);
				}else{			
					$advSearch[$key]=($val);
				}
			}
		}


		/* get order */
		// $o='ud:DESC;'.$o;
		// $order='&o='.$o;

		/* get page number */
		$page = (get_query_var('pagenum')) ? get_query_var('pagenum') : 1;
		$page = isset($requests['pagenum']) ? $requests['pagenum'] : $page;

		$num=isset($requests['listinapage']) ? $requests['listinapage'] : ($view=='map'?10:24);
		$maxtotal=isset($requests['maxlist']) ? $requests['maxlist'] : 0;

		/* page correction */
		if( $maxtotal > 0 ){
			$maxpage=ceil($maxtotal/$num);
			if( $page > $maxpage )
				$page = $maxpage;
		}

		$index=$page*$num-$num;

		$open=0;

		/**
		 * API CALL
		 * @ call method and get properties
		 */

		if( $openHomesMode ){ // open houses mode
			
			$current_date = current_time( 'Y-m-d' );
			$daytoadd = isset($daysfromnow)?$daysfromnow:"14";
			// echo $current_date;
			if( $minDate )
			$startDate = date( 'm/d/Y', strtotime ( $minDate ) ); 
			else
			$startDate = date( 'm/d/Y', strtotime( $current_date ) ); 	
			
			if( $maxDate )
			$endDate = date( 'm/d/Y', strtotime ( $maxDate ) );
			else
			$endDate = date( 'm/d/Y', strtotime ( $current_date . ' + '. $daytoadd .' days' ) );
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>implode( ',', array_map("trim",$propertyType) ),
				'apts'=>implode( ',', array_map("trim",$propSubType) ),
				'asts'=>$status,
				'apmin'=>za_correct_money_format($minListPrice),
				'apmax'=>za_correct_money_format($maxListPrice),
				'aacr'=>$lotAcres,
			);
			
			//set states
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			// if($states && isset($advSearch['astt']) && $advSearch['astt']){
			if($states && ! isset($advSearch['astt'])){
				$search['astt']=str_replace(' ','',$states);
			}
			
			$search= array_merge($search, $locqry, $advSearch);
			
			$vars=array(
				'crit'=>proces_crit($search),
				'startDate'=>$startDate,
				'endDate'=>$endDate,
				'sidx'=>$index,
				'ps'=>$num,
				'o'=>$o,
			);	
			
			if($startTime){
				$vars['startTime']=$startTime;
			}
			if($endTime){
				$vars['endTime']=$endTime;
			}	
			if( $crit ){
				$vars['crit'] = $crit;
			}
			if( $anycrit ){
				$vars['anycrit'] = $anycrit;
			}
			
			if($view=='map' || $view=='marker'){
				
				$maplimit=100;
				$mapvars=$vars;
				$mapindex=floor($index / $maplimit);
				$mapindex=$mapindex<0?0:$mapindex;
				$mapvars['sidx']=$mapindex;
				$mapvars['ps']=$maplimit;
				
				if($generate_list){
					$mapresult = zipperagent_run_curl( "/api/mls/getopenhouses", $mapvars);
					$maplist=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
					
					//get properties from maplist
					$mappedIndex=$index % $maplimit;
					$mappedLimit=$mappedIndex + $num > $maplimit ? $maplimit : $mappedIndex + $num;
					$list=array();
					for($i=$mappedIndex; $i<$mappedLimit; $i++){
						
						if(isset($maplist[$i]))
							$list[]=$maplist[$i];
					}
						
					$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult);
				}
			}else{
			
				if($generate_list){
					$result = zipperagent_run_curl( "/api/mls/getopenhouses", $vars);
					
					$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
					$list=isset($result['filteredList'])?$result['filteredList']:$result;
				}
			}
			
			$open=1;
		}else if( isset($coords) ){ // map mode
			
			$default_asts = zipperagent_get_map_default_status();
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>implode( ',', array_map("trim",$propertyType) ),
				'apts'=>implode( ',', array_map("trim",$propSubType) ),
				'asts'=>isset($requests['status']) && $requests['status'] ? $status : $default_asts,
				'apmin'=>za_correct_money_format($minListPrice),
				'apmax'=>za_correct_money_format($maxListPrice),
				'aacr'=>$lotAcres,
			);
			
			//set states
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			// if($states && isset($advSearch['astt']) && $advSearch['astt']){
			if($states && ! isset($advSearch['astt'])){
				$search['astt']=str_replace(' ','',$states);
			}
			
			$search= array_merge($search, $locqry, $advSearch);
			
			// $search=array(
				// 'asrc'=>$rb['web']['asrc'],
				// 'asts'=>$status,
			// );
			
			$vars=array(
				'coords'=>$coords,
				'crit'=>proces_crit($search),
				'sidx'=>$index,
				'ps'=>$num,
				'o'=>$o,
			);
			
			if( $crit ){
				$vars['crit'] = $crit;
			}
			if( $anycrit ){
				$vars['anycrit'] = $anycrit;
			}
			
			if($view=='map'){
				$maplimit=100;
				$mapvars=$vars;
				$mapindex=floor($index / $maplimit);
				$mapindex=$mapindex<0?0:$mapindex;
				$mapvars['sidx']=$mapindex;
				$mapvars['ps']=$maplimit;
				
				if($generate_list){
					$mapresult = zipperagent_run_curl( "/api/mls/withinWoCnt", $mapvars );
				
					$maplist=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
							
					//get properties from maplist
					$mappedIndex=$index % $maplimit;
					$mappedLimit=$mappedIndex + $num > $maplimit ? $maplimit : $mappedIndex + $num;
					$list=array();
					for($i=$mappedIndex; $i<$mappedLimit; $i++){
						
						if(isset($maplist[$i]))
							$list[]=$maplist[$i];
					}
					
					if(!$is_ajax){
						$resultCount = zipperagent_run_curl( "/api/mls/withinOnlyCnt", $mapvars, 0, '', true );
						$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
					}else{		
						$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult); //unused, always show 0
					}
				}
				
			}else if($view=='marker'){
				
				$loop=1;
				$maplist=array();
				$mapindex=$index;
				$maplimit=5000;
				$mapvars=$vars;
				unset($mapvars['coords']); //remove coords from variables, search all locations
				// $mapvars['coords']='';
				$mapvars['micro']=true;
				// $mapvars['o']='ud:DESC';
				$maplisttemp=array();
				
				if($generate_list){
					for($i=0; $i<$loop; $i++){
						if($i>0 && empty($maplisttemp))
							break;
						
						$mapvars['sidx']=$mapindex;
						$mapvars['ps']=$maplimit;
						
						$mapresult = zipperagent_run_curl( "/api/mls/withinWoCnt", $mapvars );
						// $mapresult = zipperagent_run_curl( "/api/mls/withinBoxWoCnt", $mapvars );
						
						// print_r($mapvars);
						
						$maplisttemp=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
						$maplist=array_merge($maplist, $maplisttemp);
						
						$mapindex+=($maplimit-1);
					}
					
					if(!$is_ajax){			
						$resultCount = zipperagent_run_curl( "/api/mls/withinOnlyCnt", $mapvars, 0, '', true );
						// $resultCount = zipperagent_run_curl( "/api/mls/withinBoxOnlyCnt", $mapvars, 0, '', true );
						$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
					}else{		
						$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult); //unused, always show 0
					}
				}
				
			}else{
				if($generate_list){
					$result = zipperagent_run_curl( "/api/mls/withinWoCnt", $vars );
					$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
					$list=isset($result['filteredList'])?$result['filteredList']:$result;
				}
			}
			
			$is_ajax_count=1;
			
		}else if( $searchDistance=="true" || $searchDistance=="1" || ($lat && $lng) ){ // map mode
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>implode( ',', array_map("trim",$propertyType) ),
				'apts'=>implode( ',', array_map("trim",$propSubType) ),
				'asts'=>$status,
				'apmin'=>za_correct_money_format($minListPrice),
				'apmax'=>za_correct_money_format($maxListPrice),
				'aacr'=>$lotAcres,
			);
			
			//set states
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			// if($states && isset($advSearch['astt']) && $advSearch['astt']){
			if($states && ! isset($advSearch['astt'])){
				$search['astt']=str_replace(' ','',$states);
			}
			
			$search= array_merge($search, $locqry, $advSearch);
			
			// $search=array(
				// 'asrc'=>$rb['web']['asrc'],
				// 'asts'=>$status,
			// );
			
			$vars=array(
				'crit'=>proces_crit($search),
				'distance'=>$distance,
				'lat'=>$lat,
				'lng'=>$lng,
				'sidx'=>$index,
				'ps'=>$num,
			);
			
			if( $crit ){
				$vars['crit'] = $crit;
			}
			if( $anycrit ){
				$vars['anycrit'] = $anycrit;
			}
			
			// $crit="crit=acnty:LINC,CATA,GASTON;asts:ACT,UCS,CS;apt:SFR,CND;alotd:WTRVIEW,WTRFRNT;awbn:Lake Norman";
			// $xxx="?o=alstp:ASC&distance=402.336&lat=0.00000&lng=0.00000&sidx=0&ps=20";
			
			if($generate_list){
				$result = zipperagent_run_curl( "/api/mls/distanceWoCnt", $vars );	
				$list=isset($result['filteredList'])?$result['filteredList']:$result;
				
				if(!$is_ajax){
					$resultCount = zipperagent_run_curl( "/api/mls/distanceOnlyCnt", $vars, 0, '', true );
					$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
				}else{		
					$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result); //unused, always show 0
				}
			}
			
			$is_ajax_count=1;
			
		}else if( $offmarket ){ // offmarket mode
			
			$vars=array(
				'sidx'=>$index,
				'ps'=>$num,
				'd'=>'adverti:yes',
				'l'=>'all',
			);
			
			if($generate_list){
				$result = zipperagent_run_curl( "/api/estate/list1", $vars );	
				// echo "<pre>"; print_r($result); echo "</pre>";
				$list=isset($result['filteredList'])?$result['filteredList']:$result;
				// $count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;
				$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result); //unused, always show 0
			}
			
			$is_ajax_count=0;

		}else{
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>implode( ',', array_map("trim",$propertyType) ),
				'apts'=>implode( ',', array_map("trim",$propSubType) ),
				'asts'=>$status,
				'apmin'=>za_correct_money_format($minListPrice),
				'apmax'=>za_correct_money_format($maxListPrice),
				'aacr'=>$lotAcres,
			);
			
			if($alstid){
				// unset($search['asts']);
				$stattmp[]=zipperagent_active_status();
				$stattmp[]=zipperagent_sold_status();				
				$stattmp[]=zipperagent_pending_status();				
				$search['asts']=implode(',',$stattmp);
			}
			
			//set states
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			// if($states && isset($advSearch['astt']) && $advSearch['astt']){
			if($states && ! isset($advSearch['astt'])){
				$search['astt']=str_replace(' ','',$states);
			}
			
			$search= array_merge($search, $locqry, $advSearch);
			
			$vars=array(
				'crit'=>proces_crit($search),
				'sidx'=>$index,
				'ps'=>$num,
				'o'=>$o,
			);
			// echo "<pre>"; print_r( $vars ); echo "</pre>";
			if( $crit ){
				$vars['crit'] = $crit;
			}
			if( $anycrit ){
				$vars['anycrit'] = $anycrit;
			}
			
			$contactIds=get_contact_id();
			if( $contactIds )
				$vars['contactId'] = implode(',',$contactIds);
			
			if($view=='map'){
				$maplimit=100;
				$mapvars=$vars;
				$mapindex=floor($index / $maplimit);
				$mapindex=$mapindex<0?0:$mapindex;
				$mapvars['sidx']=$mapindex;
				$mapvars['ps']=$maplimit;
				
				if($generate_list){
					$mapresult = zipperagent_run_curl( "/api/mls/advSearchWoCnt", $mapvars );
					$maplist=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
					
					//get properties from maplist
					$mappedIndex=$index % $maplimit;
					$mappedLimit=$mappedIndex + $num > $maplimit ? $maplimit : $mappedIndex + $num;
					$list=array();
					for($i=$mappedIndex; $i<$mappedLimit; $i++){
						
						if(isset($maplist[$i]))
							$list[]=$maplist[$i];
					}
					
					if(!$is_ajax){
						$resultCount = zipperagent_run_curl( "/api/mls/advSearchOnlyCnt", $vars, 0, '', true );
						$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;
					}else{		
						$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult); //unused, always show 0
					}
				}
			}else{
				if($generate_list){
					$result = zipperagent_run_curl( "/api/mls/advSearchWoCnt", $vars );	
					if(!$is_ajax){
						$resultCount = zipperagent_run_curl( "/api/mls/advSearchOnlyCnt", $vars, 0, '', true );
						$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;
					}else{		
						$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result); //unused, always show 0
					}
					
					$list=isset($result['filteredList'])?$result['filteredList']:$result;
				}
			}
			
			$is_ajax_count=1;
		}
		
		$variables=array(
			'list' => $list,
			'view' => $view,
			'vars' => $vars,
			'crit' => $crit,
			'search' => $search,
			'locqry' => $locqry,
			'advSearch' => $advSearch,
			'openHomesMode' => $openHomesMode,
			'boundaryWKT' => $boundaryWKT,
			'is_ajax_count' => $is_ajax_count,
			'page' => $page,
			'num' => $num,
			'maxtotal' => $maxtotal,
			'actual_link' => $actual_link,
			'is_ajax' => $is_ajax,
			'count'=>$count,
			'is_shortcode'=>$is_shortcode,
			'open' => $open,
			'column' => $column,
			'maplist' => $maplist,
			'showResults' => $showResults,
			'featuredOnlyYn' => $featuredOnlyYn,
			'showPagination' => $showPagination,
			
			'searchId'=>$searchId,
			'columns_code'=>$columns_code,
			'bedrooms'=>$bedrooms,
			'bathCount'=>$bathCount,
			'propertyType'=>$propertyType,
			'propSubType'=>$propSubType,
			'status'=>$status,
			'minListPrice'=>$minListPrice,
			'maxListPrice'=>$maxListPrice,
			'lotAcres'=>$lotAcres,
			'o'=>$o,
		);
		
		return $variables;
	}
}

if( ! function_exists('zipperagent_save_session_result') ){
	function zipperagent_save_session_result($index, $result){
		
		global $requests;
		// print_r($requests);
		$actual_link = isset($requests['actual_link'])?$requests['actual_link']: (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		zipperagent_set_session($index, (array) $result);
		zipperagent_set_session($index . '_url', $actual_link);
	}
}

if( ! function_exists('zipperagent_get_session_result') ){
	function zipperagent_get_session_result($index){
		
		return zipperagent_get_session($index);
	}
}

if( ! function_exists('zipperagent_config') ){
	function zipperagent_config($debug=0){
		global $WORK_ENV;
		
		// unset($_SESSION['zipperagent_config']);
		if( $WORK_ENV=='DEV' || !isset($_SESSION['zipperagent_config']) || empty( $_SESSION['zipperagent_config'] ) || $debug ){
			include_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/autoload.php";
			
			$overridedir = ABSPATH . 'wp-content/';
			$defaultdir = ZIPPERAGENTPATH . "/custom/files/";
			
			if( file_exists($overridedir.'config.txt') ){
				$configdir = $overridedir;
			}else{
				$configdir = $defaultdir;
			}
			
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

if( ! function_exists('zipperagent_run_curl2') ){
	function zipperagent_run_curl2($url, $args=array(), $post=0, $vars=''){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
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
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$hide_streetnumber=0;
		$rnhidestreetno = isset($rb['web']['rnhidestreetno'])?$rb['web']['rnhidestreetno']:0;
		
		if( $rnhidestreetno && isset($property->proptype) && $property->proptype=="RN" ){
			$hide_streetnumber=1;
		}
		
		// echo "<pre>"; print_r($property); echo "</pre>";
		
		if( $hide_streetnumber || ! isset($property->formattedAddress) ) {
			$streetname = isset($property->streetname)?zipperagent_fix_comma($property->streetname):'';
			$lngTOWNSDESCRIPTION = isset($property->lngTOWNSDESCRIPTION)?$property->lngTOWNSDESCRIPTION:'';
			$provinceState = isset($property->provinceState)?$property->provinceState:'';
			$zipcode = isset($property->zipcode)?$property->zipcode:'';
			$streetno = isset($property->streetno)?$property->streetno:'';
			$fulladdress = isset($property->fulladdress)?$property->fulladdress:'';
			$addressWithoutStreeno = isset($property->addressWithoutStreeno)?$property->addressWithoutStreeno:'';
			$formattedAddress = isset($property->formattedAddress)?$property->formattedAddress:'';
		
			if($addressWithoutStreeno && $hide_streetnumber){
				$address = $addressWithoutStreeno;
			}else if($hide_streetnumber){
				$address = $streetname.' '.$lngTOWNSDESCRIPTION.', '.$provinceState.' '.$zipcode;
			}else if($fulladdress){
				$address = $fulladdress;
			}else if($formattedAddress){
				$address = $formattedAddress;
			}else{
				$address = $streetno.' '.$streetname.' '.$lngTOWNSDESCRIPTION.', '.$provinceState.' '.$zipcode;
			}
		} else {
			$address = $property->formattedAddress;
		}
		
		if(strlen(str_replace(' ','', $address)) <= 2){ //fix broken address
			$address='Property Title';
		}
		
		return $address;
	}
}

if( ! function_exists('zipperagent_luxury_address') ){
	function zipperagent_luxury_address($property){
		// echo "<pre>"; print_r( $property ); echo "</pre>";
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$hide_streetnumber=0;
		$rnhidestreetno = isset($rb['web']['rnhidestreetno'])?$rb['web']['rnhidestreetno']:0;
		
		if( $rnhidestreetno ){
			$hide_streetnumber=1;
		}
		$town_arr=get_towns_array(); // get towns array
		$streetname = isset($property->streetName)?zipperagent_fix_comma($property->streetName):'';
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

if( ! function_exists('zipperagent_get_nobedrooms') ){
	function zipperagent_get_nobedrooms($property){
		$nobedrooms = '';
		
		if(isset($property->nobedrooms)){
			$nobedrooms = $property->nobedrooms;
		}
		
		return $nobedrooms;
	}
}

if( ! function_exists('zipperagent_get_nobaths') ){
	function zipperagent_get_nobaths($property){
		$nobaths = '';
		
		if(isset($property->nobaths)){
			$nobaths = $property->nobaths;
		}
		
		return $nobaths;
	}
}

if( ! function_exists('zipperagent_get_sqft') ){
	function zipperagent_get_sqft($property){
		$sqft = '';
		
		// $groupname = ZipperagentGlobalFunction()->zipperagent_detailpage_group();
		$sourceid = isset($property->sourceid) ? $property->sourceid : '';
			
		switch($sourceid){
			case 'CMLS_N':
					// echo "<pre>"; print_r($property); echo "</pre>";
					$sqft = isset($property->bldgsqfeet) ? $property->bldgsqfeet : '';
				break;
			default:				
					$sqft = isset($property->squarefeet) ? $property->squarefeet : '';
				break;
		}
		
		$sqft = $sqft!='' ? number_format_i18n( $sqft, 0 ) : '';
		
		return $sqft;
	}
}

if( ! function_exists('zipperagent_use_default_status') ){
	function zipperagent_use_default_status(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
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
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$field_value = isset($rb['web'][$field_name])?$rb['web'][$field_name]:0;
		return $field_value;
	}
}

if( ! function_exists('zipperagent_get_map_default_status') ){
	function zipperagent_get_map_default_status(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$field_value = isset($rb['web']['map_default_status'])?$rb['web']['map_default_status']:zipperagent_active_status();
		return $field_value;
	}
}

if( ! function_exists('zipperagent_get_exclude_prop_types') ){
	function zipperagent_get_exclude_prop_types(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$field_value = isset($rb['web']['exclude_prop_types'])?$rb['web']['exclude_prop_types']:'';
		return $field_value;
	}
}

if( ! function_exists('zipperagent_slider_limit_popup') ){
	function zipperagent_slider_limit_popup(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$field_value = isset($rb['web']['slider_show_popup_count'])?$rb['web']['slider_show_popup_count']:3;
		return $field_value;
	}
}

if( ! function_exists('zipperagent_get_exclude_prop_types_array') ){
	function zipperagent_get_exclude_prop_types_array(){
		$exludes_prop_types = zipperagent_get_exclude_prop_types();
		
		$arr = explode(',', $exludes_prop_types);
		return $arr;
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

if( ! function_exists('zipperagent_pending_status') ){
	function zipperagent_pending_status(){
		$pending = zipperagent_get_default_status('pending');
		
		if($pending)
			return $pending;
		else
			return 'CTG,AUC';
	}
}

if( ! function_exists('zipperagent_rental_status') ){
	function zipperagent_rental_status(){
		$rental='';
		
		if(!isset($_SESSION['za_static_references']) || ( isset($_SESSION['za_static_references']) && !$_SESSION['za_static_references'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/static-references.php";
			$json=ob_get_clean();
			$obj=json_decode($json);
			$_SESSION['za_static_references'] = $obj;
		}else{
			$obj = $_SESSION['za_static_references'];
		}	
		
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
		
		if(!isset($_SESSION['za_rental']) || ( isset($_SESSION['za_rental']) && !$_SESSION['za_rental'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/rental.php";
			$json = ob_get_clean();
			$obj = json_decode($json);
			
			$_SESSION['za_rental'] = $obj;
		}else{
			$obj = $_SESSION['za_rental'];
		}
		
		return isset($obj->rental)?$obj->rental:null;
	}
}

if( ! function_exists('zipperagent_get_status_name') ){
	function zipperagent_get_status_name( $status, $sourceid='', $type='general'){
		
		$converted_status='';
		$fields = get_field_list($type, $sourceid);
		
		
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
				
				$shortDescription = array_filter( explode('$',$entity->shortDescription) );
				
				if(in_array($status, $shortDescription) || ( isset($entity->mediumDescription) && $status==$entity->mediumDescription ) && ( $sourceid!='' && $entity->sourceId==$sourceid || $sourceid=='' )){
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

if( ! function_exists('zipperagent_get_synctime') ){
	function zipperagent_get_synctime(){
		
		if(!isset($_SESSION['za_synctime']) || ( isset($_SESSION['za_synctime']) && !$_SESSION['za_synctime'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/synctime.php";
			$json=ob_get_clean();
			$obj=json_decode($json);
			$_SESSION['za_synctime'] = $obj;
		}else{
			$obj = $_SESSION['za_synctime'];
		}	
		
		return $obj;
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

if( ! function_exists('zipperagent_list_prop_type') ){
	function zipperagent_list_prop_type( $property ){
		
		$sourceid = $property->sourceid;
		
		switch( $sourceid ){
			case "NERENMLS":
					$proptype = isset( $property->propsubtype ) ? $property->propsubtype : zipperagent_property_type( $property->proptype );
				break;			
			default:
					$proptype = zipperagent_property_type( $property->proptype ); 
				break;
		}
	
		return $proptype;
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
		
		if(!isset($_SESSION['za_static_references']) || ( isset($_SESSION['za_static_references']) && !$_SESSION['za_static_references'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/static-references.php";
			$json=ob_get_clean();
			$obj=json_decode($json);
			
			$_SESSION['za_static_references'] = $obj;
		}else{
			$obj = $_SESSION['za_static_references'];
		}
		
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

if( ! function_exists('populate_synctime') ){
	function populate_synctime(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$asrc=$rb['web']['asrc'];
		$obj = zipperagent_run_curl('/api/mls/getSyncTime?sources=' . $asrc);
		
		return $obj;
	}
}

if( ! function_exists('populate_static_references') ){
	function populate_static_references(){
		$obj = zipperagent_run_curl('/api/mls/staticReferences', array(), 0, '', 1);
		
		return $obj;
	}
}

if( ! function_exists('zipperagent_populate_new_autocomplete') ){
	function zipperagent_populate_new_autocomplete($args=array()){
		
		$defaults=array(
			// 'crit'=>'crit=asrc:0;asts:ACT',
			'crit'=>'',
			'text'=>'',
			'gs'=>1,
			'ms'=>1,
			'hs'=>1,
			'sd'=>1,
			'addr'=>1,
			'ps'=>5,
			'mls'=>1,
		);
		
		$params = wp_parse_args( $args, $defaults );
		
		// echo "<pre>"; print_r($params); echo "</pre>";
		
		$obj = zipperagent_run_curl('/api/mls/autocompleteSchoolNdAddress', $params);
		
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
		
		if(!isset($_SESSION['za_proptype_static']) || ( isset($_SESSION['za_proptype_static']) && !$_SESSION['za_proptype_static'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/proptype-static.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_proptype_static'] = $data;
		}else{
			$data = $_SESSION['za_proptype_static'];
		}
		
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
		
		if(!isset($_SESSION['za_propsubtype_static']) || ( isset($_SESSION['za_propsubtype_static']) && !$_SESSION['za_propsubtype_static'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/propsubtype-static.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_propsubtype_static'] = $data;
		}else{
			$data = $_SESSION['za_propsubtype_static'];
		}
		
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
		
		if(!isset($_SESSION['za_proptype']) || ( isset($_SESSION['za_proptype']) && !$_SESSION['za_proptype'] )){
			//fieldsReferences
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/proptype.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_proptype'] = $data;
		}else{
			$data = $_SESSION['za_proptype'];
		}
		
		$arr=array();
		
		foreach($data as $entity){
			$arr[$entity->shortDescription]=$entity->longDescription;
		}
		
		if(!isset($_SESSION['za_proptype_static']) || ( isset($_SESSION['za_proptype_static']) && !$_SESSION['za_proptype_static'] )){
			//staticReferences
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/proptype-static.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_proptype_static'] = $data;
		}else{
			$data = $_SESSION['za_proptype_static'];
		}
		
		foreach($data as $entity){
			if(!isset($arr[$entity->shortDescription]))
				$arr[$entity->shortDescription]=isset($entity->longDescription) ? $entity->longDescription : $entity->shortDescription;
		}
		
		return $arr;
	}
}

if( ! function_exists('get_lot_descriptions') ){
	function get_lot_descriptions(){	
	
		if(!isset($_SESSION['za_lotdescription']) || ( isset($_SESSION['za_lotdescription']) && !$_SESSION['za_lotdescription'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/lotdescription.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_lotdescription'] = $data;
		}else{
			$data = $_SESSION['za_lotdescription'];
		}
		
		$arr=array();
		
		if($data){
			foreach($data as $entity){			
				$arr[$entity->shortDescription]=$entity->longDescription;			
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('get_lake_names') ){
	function get_lake_names(){	
	
		if(!isset($_SESSION['za_lakename']) || ( isset($_SESSION['za_lakename']) && !$_SESSION['za_lakename'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/lakename.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_lakename'] = $data;
		}else{
			$data = $_SESSION['za_lakename'];
		}
		
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
			$result=isset($_SESSION['contactId'])?$_SESSION['contactId']:ZipperagentGlobalFunction()->zipperagent_get_cookie('contactId');
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
	function userContactLogin($email, $remember=1, $type="email"){
		
		$assign = '';
		$userdata=getUserContact($email, $assign, $type);
		
		if( $userdata ){
			
			foreach($userdata as $contact){
				$contactIds[]=$contact->id;
			}
			
			if( $type=="cid" ){
				$userMail = isset( $userdata[0]->emailWork1 ) ? $userdata[0]->emailWork1 : $userdata[0]->id;
			}else{
				$userMail = $email;
			}
			
			// echo 'usermail: '. $userMail . '<br />';
			
			$_SESSION['contactId']=$contactIds;
			$_SESSION['userMail']=$userMail;
			$_SESSION['userRemember']=$remember;
			$_SESSION['userdata']=$userdata;
			
			return true;
		}
		
		return false;
	}
}

if( ! function_exists('userContactLoggout') ){
	function userContactLoggout(){
		
		//remove sessions
		unset($_SESSION['userMail']);
		unset($_SESSION['userRemember']);
		unset($_SESSION['contactId']);
		unset($_SESSION['userdata']);
		
		//remove cookies
		zipperagent_remove_cookie('userMail');
		zipperagent_remove_cookie('userRemember');
		zipperagent_remove_cookie('contactId');
	}
}

if( ! function_exists('get_current_user_assigned_agent') ){
	function get_current_user_assigned_agent(){
		$userdata = ZipperagentGlobalFunction()->getCurrentUserContactLogin();
		
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
	function getUserContact($id, $assign='', $type='email'){
		
		if(!$id)
			return array();
		
		if( $type == 'cid' ){
			// 5f94b96a-2c74-4008-8db0-86065805da53
			
			$result=zipperagent_run_curl('/api/lite/contact/get/' . $id);			
			
			if( is_array( $result ) && sizeof( $result ) ){
				return array( (object) $result );
			}else{
				return array();
			}
			
		}else if( $type == 'email' ){
			$search=array(
				'pe' => $id
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

if( ! function_exists('get_single_property_micro') ){
	function get_single_property_micro( $listingId, $contactIds='', $searchId='' ){
		
		$single_property = array();
		
		if(!empty($listingId)){
			$args=array(
				'id'=>$listingId,
				// 'listingId'=>$listingId,
				'contactId'=>$contactIds,
				// 'searchId'=>$searchId,
			);
			
			$url="/api/mls/anongetMicro";
			$result = zipperagent_run_curl($url, $args);
			// $result = zipperagent_run_curl($url);
			// echo "<pre>"; print_r($result); echo "</pre>";
			//force array to object
			$result = is_array( $result ) ? (object) $result : $result;
			$single_property = $result;
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
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$rnhidestreetno = isset($rb['web']['rnhidestreetno'])?$rb['web']['rnhidestreetno']:0;
		
		$sourceid=isset($single_property->sourceid)?$single_property->sourceid:'';
		
		$replaces=array();
		$find=array();
		if(is_object($single_property) || is_array($single_property)){
			foreach( $single_property as $k=>$v ){
				if( ! is_array( $v ) && !is_object( $v ) ){ //level 1
					
					$find[]="[$k]";
					
					switch( $k ){
						case "listprice":
						case "squarefeet":
						case "taxes":
						case "lotsize":
								$replaces[]=number_format_i18n( $v, 0 );
							break;
						case "status":
								$replaces[]=zipperagent_get_status_name($v,$sourceid,'detail');
							break;
						case "proptype":
								$replaces[]=zipperagent_property_type($v);
							break;
						case "syncTime":
								// $mlstz = zipperagent_timezone();
								// $mlstz = date_default_timezone_get() ? date_default_timezone_get() : zipperagent_timezone();
								$mlstz = zipperagent_browser_timezone();
								$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
								$dt->setTimestamp($v/1000); //adjust the object to correct timestamp
								$datetime = $dt->format('m-d-Y h:i A');
								$replaces[]=$datetime;								
							break;
						case "streetno":
								if($rnhidestreetno && $single_property->proptype=="RN")
									$replaces[]='';
								else
									$replaces[]=zipperagent_field_value( $k, $v, $single_property->proptype, $sourceid, 'detail' );
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
						case "customtype":			
								$k=isset($single_property->propsubtype)?'propsubtype':'proptype';
								$replaces[]=zipperagent_field_value( $k, $v, $single_property->proptype, $sourceid, 'detail' );
							break;
						case "reqdownassociation":
								$replaces[]=(float) $v * 100 . '% month';
							break;
						default:								
								$replaces[]=zipperagent_field_value( $k, $v, $single_property->proptype, $sourceid, 'detail' );
							break;
					}
				}else if(is_array( $v ) || is_object( $v )){ //level 2,3,4,..
					foreach($v as $k2 => $v2){
						
						if(!is_array($v2) && !is_object($v2)){
							if(is_numeric($k2)){
								$find[]="[{$k}_{$k2}]";
								$replaces[]=zipperagent_field_value( $k2, $v2, $single_property->proptype, $sourceid, 'detail' );
							}else{
								switch($k2){
									case "SQFTRoofedLiving":
											$find[]="[{$k}_{$k2}]";
											$replaces[]=number_format_i18n( (int)$v2, 0 );
										break;
									default:
											$find[]="[{$k}_{$k2}]";
											$replaces[]=zipperagent_field_value( $k2, $v2, $single_property->proptype, $sourceid, 'detail' );
										break;
								}
							}
						}else if(is_array($v2)){
							foreach($v2 as $k3 => $v3){
								if(!is_array($v3) && !is_object($v3)){
									$find[]="[{$k}_{$k2}_{$k3}]";
									$replaces[]=zipperagent_field_value( $k3, $v3, $single_property->proptype, $sourceid, 'detail' );
								}
							}
						}else if(is_object($v2)){
							foreach($v2 as $k3 => $v3){
								if(!is_array($v3) && !is_object($v3)){
									$find[]="[{$k}_{$k2}_{$k3}]";
									$replaces[]=zipperagent_field_value( $k3, $v3, $single_property->proptype, $sourceid, 'detail' );
								}
							}
						}
					}
				}
			}
			
			//custom field
			
			// [realprice]
			// $price=($single_property->status=='SLD'?(isset($single_property->saleprice)?$single_property->saleprice:$single_property->listprice):$single_property->listprice);
			$price=(in_array($single_property->status, explode(',',zipperagent_sold_status()))?(isset($single_property->saleprice)?$single_property->saleprice:$single_property->listprice):$single_property->listprice);
			$find[]="[realprice]";
			$replaces[]=number_format_i18n( $price, 0 );
			
			// [provinceState] if empty provinceState
			if(!isset($single_property->provinceState)){
				$find[]="[provinceState]";
				$replaces[]="";
			}
			
			// [zipcode] if empty zipcode
			if(!isset($single_property->zipcode)){
				$find[]="[zipcode]";
				$replaces[]="";
			}
			
			// [streetno] if empty streetno
			if(!isset($single_property->streetno)){
				$find[]="[streetno]";
				$replaces[]="";
			}
		}
		// echo "<pre>"; print_r($find); echo "</pre>";
		// echo "<pre>"; print_r($replaces); echo "</pre>";
		
		if(!is_array($html)){
			$html = str_replace($find,$replaces,$html);
			// ini_set("pcre.backtrack_limit", "1000000");
			// $html = preg_replace("/\[([^\]]*)\]/", "-", $html);
			// $html = preg_replace("/\[([\w\h,]+)\]/", "-", $html);
			// $html = preg_replace("/\[([\w\h,]+){2,}\]/", "-", $html); //more than 1 chars
			$html = preg_replace("/\[[\w\h]{2,30}\]/", "-", $html); //more than 1 chars and max 30 chars
			
			// var_dump($html);
		}else{
			foreach($html as $key=>&$source){
				$source = str_replace($find,$replaces,$source);
				$source = preg_replace("/\[[\w\h]{2,30}\]/", "-", $source); //more than 1 chars
			}
		}
		
		return $html;
	}
}

if( ! function_exists('zipperagent_list_total') ){
	function zipperagent_list_total($count, $proptype=''){
		if($count>1){
			
			$proptypes = zipperagent_get_proptype_codes();
			$rental = isset($proptypes['rental'])?explode(',',$proptypes['rental']):array('RNT');
			
			$act_text = 'sale';
			
			if($proptype && in_array($proptype, $rental)){
				$act_text = 'rent';
			}
			
			return number_format_i18n($count,0) . " matching properties found";			
		}else{
			return number_format_i18n($count,0) . " matching property found";
		}
	}
}
/*
if( ! function_exists('zipperagent_list_total') ){
	function zipperagent_list_total($count, $proptype=''){
		if($count>1){
			
			$proptypes = zipperagent_get_proptype_codes();
			$rental = isset($proptypes['rental'])?explode(',',$proptypes['rental']):array('RNT');
			
			$act_text = 'sale';
			
			if($proptype && in_array($proptype, $rental)){
				$act_text = 'rent';
			}
			
			return number_format_i18n($count,0) . " Properties for " . $act_text;			
		}else{
			return number_format_i18n($count,0) . " Property";
		}
	}
} */

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
			$back_url=$page>1?add_query_arg( array( 'pagenum' => $page-1 ), $current_url ):'#';
			$next_url=$page<$pagescount?add_query_arg( array( 'pagenum' => $page+1 ), $current_url ):'#';
			?>
			<li class="<?php if( $back_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $back_url ?>" data-page="<?php echo $page - 1; ?>">&laquo;</a></li>
			<?php
			$limit = 6;
			$center = $limit / 2;
			$minpage = $page - $center > 0 ? $page - $center : 1;
			$maxpage = $page + $center > $pagescount ? $pagescount : $page + $center;
			$starturl = add_query_arg( array( 'pagenum' => 1 ), $current_url );
			$endurl = add_query_arg( array( 'pagenum' => $pagescount ), $current_url );
			// echo 'max: ' . $maxpage;
			if( $minpage > 1 ){ ?>
				<?php if( $minpage > 2 ): ?><li><a href="<?php echo $starturl ?>" data-page="1">1</a></li><?php endif; ?>
				<li class="disabled"><a href="#">...</a></li> <?php
			}
			for( $p=$minpage; $p<=$maxpage; $p++ ){
				$purl = add_query_arg( array( 'pagenum' => $p ), $current_url );
				?>
				<li <?php echo $p==$page ? 'class="disabled"' : ''; ?>><a href="<?php echo $purl ?>" data-page="<?php echo $p; ?>"><?php echo $p ?></a></li>
				<?php
			}
			if( $maxpage < $pagescount ){ ?>
				<?php if( $pagescount - $maxpage > 1): ?><li class="disabled"><a href="#">...</a></li><?php endif; ?>
				<li><a href="<?php echo $endurl ?>" data-page="<?php echo $pagescount; ?>"><?php echo $pagescount ?></a></li><?php
			}
			?>
			<?php /* <li class="disabled"><a href="#"><?php echo $page ?> of <?php echo $pagescount ?></a></li> */ ?>
			<li class="<?php if( $next_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $next_url ?>" data-page="<?php echo $page + 1; ?>">&raquo;</a></li>
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
			
			$userdata = ZipperagentGlobalFunction()->getCurrentUserContactLogin();
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
		// $result = zipperagent_run_curl( "/api/mls/multi/saveSearch", $vars, 1, '', 1 );
		
		return $result;
	}
}
	
if( ! function_exists('zipperagent_save_property') ){
	function zipperagent_save_property($listingId, $contactIds, $favorite, $crit=array(), $searchId=''){
		
		if( ! $contactIds ) {
			// $contactIds = get_contact_id();
			// $contactIds = '79d3320b-a1f9-45d0-a5d7-79e63a5fca67';
			$userdata = ZipperagentGlobalFunction()->getCurrentUserContactLogin();
			$contactIds=array();
			foreach($userdata as $contact){
				$contactIds[]=$contact->id;
			}
			$contactIds = implode(',',$contactIds);
		}
		
		$vars=array(		
			'listingId'=>$listingId,
			'contactId'=>$contactIds,
		);
		
		if( $favorite ){
			$vars['interest']=5;
		}
		
		if( is_array($crit) && sizeof($crit) && !$searchId ){
			// $vars['crit']=proces_crit($crit); "save with crit criteria" is disabled
		}
		
		if($searchId){
			$url="/api/mls/saveListing";
			$vars['searchId']=$searchId;			
		}else{						
			$url="/api/mls/multi/saveListing";
		}
		
		$result = (object) zipperagent_run_curl($url, $vars, 1, array(), 1);
		
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		// echo "<pre>"; print_r( $vars ); echo "</pre>";
		
		return $result;
	}
}

if( ! function_exists('add_saved_cookies_to_account') ){
	function add_saved_cookies_to_account(){
			
			if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) //only for login user
				return;
			
			$saved_search = ZipperagentGlobalFunction()->zipperagent_get_cookie('saved_search');
			$saved_favorites = ZipperagentGlobalFunction()->zipperagent_get_cookie('saved_favorites');
			
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
			ZipperagentGlobalFunction()->zipperagent_set_cookie('saved_search', ''); 
			ZipperagentGlobalFunction()->zipperagent_set_cookie('saved_favorites', '');
			
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
		
		$saved = ZipperagentGlobalFunction()->zipperagent_get_cookie('saved_favorites');
		
		if(!is_array($saved)){
			$saved=array();
		}
		
		$saved[$listingId]=$add;
		
		ZipperagentGlobalFunction()->zipperagent_set_cookie('saved_favorites', $saved);
		
		return count($saved);
	}
}

if( ! function_exists('zipperagent_save_search_cookie') ){
	function zipperagent_save_search_cookie($vars){
		
		$add=array(
			'vars'=>$vars,
		);		
		
		$saved = ZipperagentGlobalFunction()->zipperagent_get_cookie('saved_search');
		
		if(!is_array($saved)){
			$saved=array();
		}
		
		$saved[]=$add;
		
		ZipperagentGlobalFunction()->zipperagent_set_cookie('saved_search', $saved);
		
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
		
		if(!isset($_SESSION['za_areaTowns']) || ( isset($_SESSION['za_areaTowns']) && !$_SESSION['za_areaTowns'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/areaTowns.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_areaTowns'] = $data;
		}else{
			$data = $_SESSION['za_areaTowns'];
		}
		
		return $data;
	}
}

if( ! function_exists('generate_area_town') ){
	function generate_area_town(){
		$arr=array();
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$mls_state_map=isset($rb['web']['mls_state_map']) ? $rb['web']['mls_state_map'] : array();
		
		if(!$mls_state_map){
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			
			$qry = $states ? '/?states=' . urldecode($states) : '';
			
			$url="/api/mls/getAreaTowns" . $qry;
			$result = (object) zipperagent_run_curl($url);
		}else{
			$temp=array();
			foreach($mls_state_map as $source=>$param){
				$qry = '/?states=' . urldecode($param) . '&sources=' . $source;
			
				$url="/api/mls/getAreaTowns" . $qry;
				$result = zipperagent_run_curl($url);
				$temp=array_merge_recursive($temp, $result);
			}
			// echo "<pre>"; print_r($temp); echo "</pre>";
			$result = (object) $temp;
		}
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		return $result;
	}
}

if( ! function_exists('zipperagent_get_map_centre') ){
	function zipperagent_get_map_centre(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		//default boston area
		$default_lat='42.114524';
		$default_lng='-72.014008';
		
		$za_lat=isset($rb['web']['map_centre']['lat'])&&!empty($rb['web']['map_centre']['lat'])?$rb['web']['map_centre']['lat']:$default_lat;
		$za_lng=isset($rb['web']['map_centre']['lng'])&&!empty($rb['web']['map_centre']['lng'])?$rb['web']['map_centre']['lng']:$default_lng;
		
		$za_lat_2=isset($rb['web']['map_centre_2']['lat'])&&!empty($rb['web']['map_centre_2']['lng'])?$rb['web']['map_centre_2']['lat']:'';
		$za_lng_2=isset($rb['web']['map_centre_2']['lng'])&&!empty($rb['web']['map_centre_2']['lng'])?$rb['web']['map_centre_2']['lng']:'';
		$za_lat_3=isset($rb['web']['map_centre_3']['lat'])&&!empty($rb['web']['map_centre_3']['lat'])?$rb['web']['map_centre_3']['lat']:'';
		$za_lng_3=isset($rb['web']['map_centre_3']['lng'])&&!empty($rb['web']['map_centre_3']['lng'])?$rb['web']['map_centre_3']['lng']:'';
		$za_lat_4=isset($rb['web']['map_centre_4']['lat'])&&!empty($rb['web']['map_centre_4']['lat'])?$rb['web']['map_centre_4']['lat']:'';
		$za_lng_4=isset($rb['web']['map_centre_4']['lng'])&&!empty($rb['web']['map_centre_4']['lng'])?$rb['web']['map_centre_4']['lng']:'';
		$za_lat_5=isset($rb['web']['map_centre_5']['lat'])&&!empty($rb['web']['map_centre_5']['lat'])?$rb['web']['map_centre_5']['lat']:'';
		$za_lng_5=isset($rb['web']['map_centre_5']['lng'])&&!empty($rb['web']['map_centre_5']['lng'])?$rb['web']['map_centre_5']['lng']:'';
		$za_lat_6=isset($rb['web']['map_centre_6']['lat'])&&!empty($rb['web']['map_centre_6']['lat'])?$rb['web']['map_centre_6']['lat']:'';
		$za_lng_6=isset($rb['web']['map_centre_6']['lng'])&&!empty($rb['web']['map_centre_6']['lng'])?$rb['web']['map_centre_6']['lng']:'';
		$za_lat_7=isset($rb['web']['map_centre_7']['lat'])&&!empty($rb['web']['map_centre_7']['lat'])?$rb['web']['map_centre_7']['lat']:'';
		$za_lng_7=isset($rb['web']['map_centre_7']['lng'])&&!empty($rb['web']['map_centre_7']['lng'])?$rb['web']['map_centre_7']['lng']:'';
		$za_lat_8=isset($rb['web']['map_centre_8']['lat'])&&!empty($rb['web']['map_centre_8']['lat'])?$rb['web']['map_centre_8']['lat']:'';
		$za_lng_8=isset($rb['web']['map_centre_8']['lng'])&&!empty($rb['web']['map_centre_8']['lng'])?$rb['web']['map_centre_8']['lng']:'';
		$za_lat_9=isset($rb['web']['map_centre_9']['lat'])&&!empty($rb['web']['map_centre_9']['lat'])?$rb['web']['map_centre_9']['lat']:'';
		$za_lng_9=isset($rb['web']['map_centre_9']['lng'])&&!empty($rb['web']['map_centre_9']['lng'])?$rb['web']['map_centre_9']['lng']:'';
		$za_lat_10=isset($rb['web']['map_centre_10']['lat'])&&!empty($rb['web']['map_centre_10']['lat'])?$rb['web']['map_centre_10']['lat']:'';
		$za_lng_10=isset($rb['web']['map_centre_10']['lng'])&&!empty($rb['web']['map_centre_10']['lng'])?$rb['web']['map_centre_10']['lng']:'';
		
		$za_label=isset($rb['web']['map_centre']['label'])&&!empty($rb['web']['map_centre']['label'])?$rb['web']['map_centre']['label']:'MAP 1';
		$za_label_2=isset($rb['web']['map_centre_2']['label'])&&!empty($rb['web']['map_centre_2']['label'])?$rb['web']['map_centre_2']['label']:'MAP 2';
		$za_label_3=isset($rb['web']['map_centre_3']['label'])&&!empty($rb['web']['map_centre_3']['label'])?$rb['web']['map_centre_3']['label']:'MAP 3';
		$za_label_4=isset($rb['web']['map_centre_4']['label'])&&!empty($rb['web']['map_centre_4']['label'])?$rb['web']['map_centre_4']['label']:'MAP 4';
		$za_label_5=isset($rb['web']['map_centre_5']['label'])&&!empty($rb['web']['map_centre_5']['label'])?$rb['web']['map_centre_5']['label']:'MAP 5';
		$za_label_6=isset($rb['web']['map_centre_6']['label'])&&!empty($rb['web']['map_centre_6']['label'])?$rb['web']['map_centre_6']['label']:'MAP 6';
		$za_label_7=isset($rb['web']['map_centre_7']['label'])&&!empty($rb['web']['map_centre_7']['label'])?$rb['web']['map_centre_7']['label']:'MAP 7';
		$za_label_8=isset($rb['web']['map_centre_8']['label'])&&!empty($rb['web']['map_centre_8']['label'])?$rb['web']['map_centre_8']['label']:'MAP 8';
		$za_label_9=isset($rb['web']['map_centre_9']['label'])&&!empty($rb['web']['map_centre_9']['label'])?$rb['web']['map_centre_9']['label']:'MAP 9';
		$za_label_10=isset($rb['web']['map_centre_10']['label'])&&!empty($rb['web']['map_centre_10']['label'])?$rb['web']['map_centre_10']['label']:'MAP 10';
		
		// return array('za_lat'=>$za_lat, 'za_lng'=>$za_lng);
		return array('za_lat'=>$za_lat, 'za_lng'=>$za_lng, 'za_lat_2'=>$za_lat_2, 'za_lng_2'=>$za_lng_2, 'za_lat_3'=>$za_lat_3, 'za_lng_3'=>$za_lng_3, 'za_lat_4'=>$za_lat_4, 'za_lng_4'=>$za_lng_4, 'za_lat_5'=>$za_lat_5, 'za_lng_5'=>$za_lng_5, 'za_lat_6'=>$za_lat_6, 'za_lng_6'=>$za_lng_6, 'za_lat_7'=>$za_lat_7, 'za_lng_7'=>$za_lng_7, 'za_lat_8'=>$za_lat_8, 'za_lng_8'=>$za_lng_8, 'za_lat_9'=>$za_lat_9, 'za_lng_9'=>$za_lng_9, 'za_lat_10'=>$za_lat_10, 'za_lng_10'=>$za_lng_10, 'za_label'=>$za_label, 'za_label_2'=>$za_label_2, 'za_label_3'=>$za_label_3, 'za_label_4'=>$za_label_4, 'za_label_5'=>$za_label_5, 'za_label_6'=>$za_label_6, 'za_label_7'=>$za_label_7, 'za_label_8'=>$za_label_8, 'za_label_9'=>$za_label_9, 'za_label_10'=>$za_label_10);
	}
}

if( ! function_exists('zipperagent_get_map_markers') ){
	function zipperagent_get_map_markers(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$markers = isset($rb['web']['map_markers']) ? $rb['web']['map_markers'] : array();
		
		return $markers;
	}
}

if( ! function_exists('zipperagent_get_proptype_codes') ){
	function zipperagent_get_proptype_codes(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$proptype = isset($rb['web']['proptype']) ? $rb['web']['proptype'] : array();
		
		return $proptype;
	}
}

if( ! function_exists('zipperagent_generate_result_markers') ){
	function zipperagent_generate_result_markers($maplist){
		
		$i=0;
		$markers=array();
		$infoWindows=array();
		$uniqid=uniqid();
		foreach($maplist as $property){
			
			// $index=$uniqid.'_'.$i;
			// $index=$property->id;
			$index=isset($property->id)?$property->id:$property->listno;
			
			if(!$index)
				continue;
			
			if(!isset($property->lat) || !isset($property->lng))
				continue;
			
			$fulladdress = zipperagent_get_address($property);
			$lat = $property->lat;
			$lng = $property->lng;
			$listingId = $property->id;
			$beds = zipperagent_get_nobedrooms($property);
			$bath = zipperagent_get_nobaths($property);
			$sqft = zipperagent_get_sqft($property);
			$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
			$longprice = zipperagent_currency() . number_format_i18n( $price, 0 );
			$shortprice = zipperagent_currency() . number_format_short( $price, 0 );
			$proptype = $property->proptype;
			if(isset($property->photoList)){
				if( strpos($property->photoList[0]->imgurl, 'mlspin.com') !== false )
					$src = "//media.mlspin.com/photo.aspx?mls={$property->listno}&w=100&h=100&n=0";
				else
					$src = str_replace('http://','//',$property->photoList[0]->imgurl);
			}else if(isset($property->imageUrl)){
				$src = str_replace('http://','//',$property->imageUrl);
			}
			$saved_crit=$search;
			$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
			if(!empty($searchId)){
				$query_args['searchId']= $searchId;
			}
			if(zp_using_criteria() && !empty($critBase64)){
				$query_args['criteria']= $critBase64;
			}
			if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
				$query_args['newsearchbar']= 1;
			}
			$single_url = zipperagent_add_query_args( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
			$is_login=ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0;
			$is_active=zipperagent_is_favorite($property->id)?"active":"";
			$searchId='';
			$str_contactIds=implode(',',$contactIds);
			
			$markers[$i][] = str_replace( "'", "\'", $fulladdress );
			$markers[$i][] = $lat;
			$markers[$i][] = $lng;
			$markers[$i][] = $listingId;
			$markers[$i][] = $longprice;
			$markers[$i][] = $shortprice;
			$markers[$i][] = $beds;
			$markers[$i][] = $bath;
			$markers[$i][] = $index;
			$markers[$i][] = $proptype;
			
			$needBorder=0;
			if($beds)
				$needBorder++;
			if($bath)
				$needBorder++;
			if($sqft)
				$needBorder++;
			
			$needBorder_html = $needBorder > 1 ? "| ": "";
			
			$beds_html = $beds ? "{$beds} BEDS" : ""; 
			$bath_html = $bath ? " {$needBorder_html}{$bath} BATH" : ""; 
			$sqft_html = $sqft ? " {$needBorder_html}{$sqft} SQFT" : ""; 
			
			$infoWindows[$index][]="<div class=\"info_content\">
									<div class=\"pic\"><img style=\"display: block; margin: 0 auto;\" src=\"{$src}\" /></div>
									<div class=\"content\">		
										<a href=\"{$single_url}\"><strong>". str_replace( "'", "\'", $fulladdress )  ."</strong></a>
										<p class=\"price\">{$longprice}</p>
										<p class=\"favorite\"><a class=\"listing-{$property->id} save-favorite-btn {$is_active}\" isLogin=\"{$is_login}\" listingId=\"{$property->id}\" searchId=\"{$searchId}\" contactId=\"{$str_contactIds}\" href=\"#\" afteraction=\"save_favorite_listing\"><i class=\"fa fa-heart\" aria-hidden=\"true\" role=\"none\"></i> Favorite</a></p>
										<p class=\"info\">{$beds_html}{$bath_html}{$sqft_html}</p>
									</div> <a class=\"link-cover\" href=\"{$single_url}\"></a>
								</div>";
			
			$i++;
		}
		
		$args['markers'] = $markers;
		$args['infoWindows'] = $infoWindows;
		
		return $args;
	}
}

if( ! function_exists('zipperagent_source_details') ){
	function zipperagent_source_details(){
		
		global $WORK_ENV;		
		
		// unset($_SESSION['zipperagent_source']);
		// if( $WORK_ENV=='DEV' || !isset($_SESSION['zipperagent_source'])){
			
			$rb = ZipperagentGlobalFunction()->zipperagent_rb();
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
		
		if(!isset($_SESSION['za_source']) || ( isset($_SESSION['za_source']) && !$_SESSION['za_source'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/source.php";
			$json=ob_get_clean();
			$data=json_decode($json,true);
			
			$_SESSION['za_source'] = $data;
		}else{
			$data = $_SESSION['za_source'];
		}
		
		return $data;
	}
}

if( ! function_exists('zipperagent_get_listing_disclaimer') ){
	function zipperagent_get_listing_disclaimer(){
		$sources = zipperagent_get_source_details_cached();
		$text='';
		if(is_array($sources) && sizeof($sources)){
			foreach( $sources as $sourceid => $source ){
				
				if($sourceid==="NERENMLS"){
					// unset($source['discComingle']);
					if(isset($source['logo_path']) && file_exists($source['logo_path'])){
						$text.= '<img src="'. $source['logo_url'] .'" alt="'. $source['name'] .'" />';
						
						if(isset($source['copyrightUrl']) && $source['copyrightUrl']){
							$text.=' ' . '<a target="_blank" href="'. $source['copyrightUrl'] .'">click here</a>';
						}
					}
					$text.= ' '. 'via ' . $source['name'];
					$text.= (isset($source['discComingle']) && !empty($source['discComingle'])) ? '<br />' . $source['discComingle'] : (isset($source['discDetail']) ? '<br />' . $source['discDetail'] : '' );
					
					$synctime = zipperagent_get_synctime();
					if(isset($synctime->NERENMLS)){
						// $mlstz = zipperagent_browser_timezone();
						$mlstz = zipperagent_mls_timezone($sourceid);
						$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
						$dt->setTimestamp($synctime->NERENMLS/1000); //adjust the object to correct timestamp
						$datetime = $dt->format('m/d/y');							
						$text.=' Data last updated ' . $datetime;
					}
					
					$text .= "<br/><br/>";
				}else{
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
					
					$rb = ZipperagentGlobalFunction()->zipperagent_rb();
					$hidesource = isset($rb['web']['hidelistsource']) && $rb['web']['hidelistsource'] == 1 ? 1 : 0;
					
					if($hidesource) {
						return '';
					}
					
					if(isset($listAgentName) && !empty($listAgentName) && is_show_agent_name()){
						$text.= sprintf( "Listing Provided Courtesy %s of", $listAgentName);							
					}else{
						$text.= "Listing Provided Courtesy of";						
					}
					
					if(isset($listOfficeName) && !empty($listOfficeName)){
						$text.= ' '. "<strong>$listOfficeName</strong>";
					}

					if($sourceid=='GOWENMLS'){
						
						$rb = ZipperagentGlobalFunction()->zipperagent_rb();
						$showemail = isset($rb['web']['hideemail']) && $rb['web']['hideemail'] == 1 ? 0 : 1;
						$showphone = isset($rb['web']['hidephone']) && $rb['web']['hidephone'] == 1 ? 0 : 1;
						
						$contact_text = array();
						if(isset($property->unmapped->{"LO Email"}) && $showemail){
							$contact_text[]= 'email:' . $property->unmapped->{"LO Email"};
						}
						if(isset($property->unmapped->{"LO Phone1"}) && $showphone){
							$contact_text[]= 'ph:' . $property->unmapped->{"LO Phone1"};
						}
						
						if( $contact_text ){
							
							$text.= ' ('. implode( ', ', $contact_text) .')';
						}
					} else if($sourceid=='NERENMLS'){
						
						$rb = ZipperagentGlobalFunction()->zipperagent_rb();
						$showemail = isset($rb['web']['hideemail']) && $rb['web']['hideemail'] == 1 ? 0 : 1;
						$showphone = isset($rb['web']['hidephone']) && $rb['web']['hidephone'] == 1 ? 0 : 1;
						
						$contact_text = array();
						// if(isset($property->unmapped->{"LO1Office Email"}) && $showemail){
							// $contact_text[]= 'email:' . $property->unmapped->{"LO1Office Email"};
						// }
						if(isset($property->unmapped->{"Broker Attrib Contact"}) && $showphone){
							$contact_text[]= '' . $property->unmapped->{"Broker Attrib Contact"};
						}
						
						if( $contact_text ){
							
							$text.= ' ('. implode( ', ', $contact_text) .')';
						}
					}
					
					if(file_exists($source['logo_path'])){
						$text.= '<img src="'. $source['logo_url'] .'" alt="'. $source['name'] .'" />';
						
						if(isset($source['copyrightUrl']) && $source['copyrightUrl']){
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
					
					if(isset($source['logo_path']) && file_exists($source['logo_path'])){
						$text.='<br />' . '<img src="'. $source['logo_url'] .'" alt="'. $source['name'] .'" />';
						
						if(isset($source['copyrightUrl']) && $source['copyrightUrl']){
							$text.=' ' . '<a target="_blank" href="'. $source['copyrightUrl'] .'">click here</a>';
						}
					}
					$text.= ' '. 'via ' . $source['name'];
					$defaultDisc="Disclaimer: The information contained in this listing has not been verified by <strong>{$listOfficeName}</strong> and should be verified by the buyer.";
					$text.= (isset($source['discComingle']) && !empty($source['discComingle'])) ? '<br />' . $source['discComingle'] : (isset($source['discDetail']) ? '<br />' . $source['discDetail'] : '' );
					// $text.='<br /><br />' . $defaultDisc;
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
			case "detail_source":
					$year = isset($source['year'])?$source['year']:date("Y");
					$text.= 'Listing information &copy; ' . $year . '<br />';		
					
					if(isset($listOfficeName) && !empty($listOfficeName)){
						$text.= sprintf( "Listing Provided Courtesy of <strong>%s</strong>", $listOfficeName);
					}
					
					if(isset($listAgentName) && !empty($listAgentName) && is_show_agent_name()){
						$text.= sprintf( ", %s", $listAgentName);							
					}
					
					if($sourceid=='GOWENMLS'){
						
						$rb = ZipperagentGlobalFunction()->zipperagent_rb();
						$showemail = isset($rb['web']['hideemail']) && $rb['web']['hideemail'] == 1 ? 0 : 1;
						$showphone = isset($rb['web']['hidephone']) && $rb['web']['hidephone'] == 1 ? 0 : 1;
						
						$contact_text = array();
						if(isset($property->unmapped->{"LO Email"}) && $showemail){
							$contact_text[]= 'email:' . $property->unmapped->{"LO Email"};
						}
						if(isset($property->unmapped->{"LO Phone1"}) && $showphone){
							$contact_text[]= 'ph:' . $property->unmapped->{"LO Phone1"};
						}
						
						if( $contact_text ){
							
							$text.= ' ('. implode( ', ', $contact_text) .')';
						}
					} else if ($sourceid=='NERENMLS'){
						
						$rb = ZipperagentGlobalFunction()->zipperagent_rb();
						$showemail = isset($rb['web']['hideemail']) && $rb['web']['hideemail'] == 1 ? 0 : 1;
						$showphone = isset($rb['web']['hidephone']) && $rb['web']['hidephone'] == 1 ? 0 : 1;
						
						$contact_text = array();
						// if(isset($property->unmapped->{"LO1Office Email"}) && $showemail){
							// $contact_text[]= 'email:' . $property->unmapped->{"LO1Office Email"};
						// }
						if(isset($property->unmapped->{"Broker Attrib Contact"}) && $showphone){
							$contact_text[]= '' . $property->unmapped->{"Broker Attrib Contact"};
						}
						
						if( $contact_text ){
							
							$text.= ' ('. implode( ', ', $contact_text) .')';
						}
					}				
				break;
			case "detail_disclaimer":
					if(isset($source['logo_path']) && file_exists($source['logo_path'])){
						$text.= '<img src="'. $source['logo_url'] .'" alt="'. $source['name'] .'" />';
						
						if(isset($source['copyrightUrl']) && $source['copyrightUrl']){
							$text.=' ' . '<a target="_blank" href="'. $source['copyrightUrl'] .'">click here</a>';
						}
					}
					$text.= ' '. 'via ' . $source['name'];
					$defaultDisc="Disclaimer: The information contained in this listing has not been verified by <strong>{$listOfficeName}</strong> and should be verified by the buyer.";
					$text.= (isset($source['discComingle']) && !empty($source['discComingle'])) ? '<br />' . $source['discComingle'] : (isset($source['discDetail']) ? '<br />' . $source['discDetail'] : '' );
					// $text.='<br /><br />' . $defaultDisc;
					
					if($sourceid=='LVMLS'){
						$text.="<br /><br />";
						$text.="<img style=\"max-height:none;\" src=\"". ZIPPERAGENTURL . 'custom/logo/IDX.png' ."\" /><br />";
						$text.="The data related to real estate for sale on this website comes in part from the INTERNET DATA EXCHANGE (IDX) program of the Greater Las Vegas Association of REALTORS® MLS. Real estate listings held by brokerage firms other than this site owner are marked with the IDX logo. IDX information is for consumers' personal, non-commercial use and may not be used for any purpose other than to identify prospective properties consumers may be interested in purchasing.";
						$text.="<br /><b>GLVAR deems information reliable but not guaranteed.</b>";
						$text.="<br /><b><i>© 2020 of the Greater Las Vegas Association of REALTORS® MLS. All rights reserved.</i></b>";
						$text.="<br /><a href=\"http://www.idxre.com/docs/idxdocs/nvglvar-dmca.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">GLVAR DMCA Notice</a>";
						$text.="<br />GLVAR (Las Vegas) data last updated at April 29, 2020 10:00 AM PT";
					}else if($sourceid=='NERENMLS'){
						/* if($updatedate){
							// $mlstz = zipperagent_browser_timezone();
							$mlstz = zipperagent_mls_timezone($sourceid);
							$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
							$dt->setTimestamp($updatedate/1000); //adjust the object to correct timestamp
							$datetime = $dt->format('m/d/y');							
							$text.=' Data last updated ' . $datetime;							
						} */
						
						$synctime = zipperagent_get_synctime();
						
						if(isset($synctime->NERENMLS)){
							// $mlstz = zipperagent_browser_timezone();
							$mlstz = zipperagent_mls_timezone($sourceid);
							$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
							$dt->setTimestamp($synctime->NERENMLS/1000); //adjust the object to correct timestamp
							$datetime = $dt->format('m/d/y');							
							$text.=' Data last updated ' . $datetime;
						}
					}
					
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

if( ! function_exists('populate_lakes_with_option') ){
	function populate_lakes_with_option(){
		
		$lakes = get_lake_names();
		
		$arr=array();
		
		foreach( $lakes as $code => $lake ){
			$modified_code = 'alkchnnm_'.$code;
			$arr[]=array(
					'group'=>'Lake',
					'name'=>$lake,
					'code'=> $modified_code,
					'value'=> $code,
					'type'=>'lake',
				);
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_zipcodes') ){
	function populate_zipcodes(){
		
		$arr=array();
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
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

/*
if( ! function_exists('populate_tenant_favorites') ){
	function populate_tenant_favorites(){
		
		$result = zipperagent_run_curl('/api/mls/tenantFavorites', array(), 0, '', 1);
		// $json='{"status":"SUCCESS","result":[{"id":"371eab26-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"BOXB","value":"Boxborough"},{"id":"371ff436-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"CLIN","value":"Clinton"},{"id":"37204058-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"FTCH","value":"Fitchburg"},{"id":"37209616-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"HRVD","value":"Harvard"},{"id":"3720d234-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"HDSN","value":"Hudson"},{"id":"372d7f84-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"LCAS","value":"Lancaster"},{"id":"372e0bac-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"LMNS","value":"Leominster"},{"id":"372e4bf8-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"LUNE","value":"Lunenburg"},{"id":"372e8a0a-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"SHRL","value":"Shirley"},{"id":"372efb02-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"STER","value":"Sterling"},{"id":"372f3626-ea76-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"STOW","value":"Stow"},{"id":"383aa1be-ea75-11e9-a3b8-0767f288d17f","version":0,"sourceId":"0","field":"TOWN","code":"BLTN","value":"Bolton"}],"responseCode":200,"editable":false,"deletable":false,"forbidden":false,"returnedCount":0}';
		// $result = (array) json_decode($json);
		
		// echo "<pre>"; print_r($result); echo "</pre>";
		$tenants = isset($result['result']) && sizeof($result['result'])?$result['result']:array();
		
		$arr=array();
		
		foreach( $tenants as $tenant ){
			
			$name = $tenant->value;
			$code = 'atwns_'.$tenant->code;
			$arr[]=array(
				'group'=>'Town',
				'name'=>$name,
				'code'=>$code,
				'type'=>'town',
			);
		}
		
		return $arr;
	}
} */

if( ! function_exists('populate_tenant_favorites') ){
	function populate_tenant_favorites(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$tenants=isset($rb['web']['tenant_favorites']) ? $rb['web']['tenant_favorites'] : array();
		
		$arr=array();
		
		foreach( $tenants as $code => $name ){
		
			$code = 'atwns_'.$code;
			$arr[]=array(
				'group'=>'Town',
				'name'=>$name,
				'code'=>$code,
				'type'=>'town',
			);
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_schools') ){
	function populate_schools($t,$limit=100){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
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

if( ! function_exists('populate_schools3') ){
	function populate_schools3($text,$requests="",$limit=5){
		
		$variables = zipperagent_generate_list($requests, 0, 0);
		
		// echo "<pre>"; print_r( $variables ); echo "</pre>";
		
		$crit = $variables['vars']['crit'];
		
		$args=array(
			'text'=>$text,
			'gs'=>1,
			'ms'=>1,
			'hs'=>1,
			'sd'=>1,
			'addr'=>0,
			'mls'=>0,
			'ps'=>$limit,
			'crit'=>$crit,
		);

		$obj = zipperagent_populate_new_autocomplete($args);
		
		$includes = array(
			'GRADESCHOOL',
			'MIDDLESCHOOL',			
			'HIGHSCHOOL',			
			'SCHOOLDISTRICT',			
		);
		
		$arr=array();
		
		foreach( $obj as $line ){
				
			if(!in_array($line->field, $includes))
				continue;
			
			if(isset($line->buckets) && sizeof($line->buckets)){
				
				$type = strtolower($line->field);
				$group = ucwords($type);
				
				foreach($line->buckets as $field){
					
					$prefix='';
					switch($line->field){
						case 'GRADESCHOOL':
								$prefix='gschl';
							break;
						case 'MIDDLESCHOOL':
								$prefix='mschl';
							break;
						case 'HIGHSCHOOL':
								$prefix='hschl';
							break;
						case 'SCHOOLDISTRICT':
								$prefix='aschdt';
							break;
					}
					
					$name = trim($field->value);
					$value = trim($field->value);
					$code = $prefix.'_'.$value;
					
					$arr[]=array(
						'group'=>$group,
						'name'=>$name,
						'code'=>$code,
						'type'=>$type,
					);
				}
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_addresses') ){
	function populate_addresses($text,$requests="",$limit=10){
		
		$variables = zipperagent_generate_list($requests, 0, 0);
		
		// echo "<pre>"; print_r( $variables ); echo "</pre>";
		// echo "<pre>"; print_r( $requests ); echo "</pre>";
		
		$crit = $variables['vars']['crit'];
		
		$args=array(
			'text'=>$text,
			'gs'=>0,
			'ms'=>0,
			'hs'=>0,
			'sd'=>0,
			'addr'=>1,
			'mls'=>0,
			'ps'=>$limit,
			'crit'=>$crit,
		);

		$obj = zipperagent_populate_new_autocomplete($args);
		
		$includes = array(
			'FULLADDRESS',		
		);
		
		$arr=array();
		
		foreach( $obj as $line ){
				
			if(!in_array($line->field, $includes))
				continue;
			
			if(isset($line->buckets) && sizeof($line->buckets)){
				
				$type = strtolower($line->field);
				$group = ucwords($type);
				
				foreach($line->buckets as $field){
					
					$prefix='';
					switch($line->field){
						case 'FULLADDRESS':
								$prefix='aflladdr';
							break;
					}
					
					$name = trim($field->value);
					$value = trim($field->value);
					$code = $prefix.'_'.$value;
					
					$arr[]=array(
						'group'=>$group,
						'name'=>$name,
						'code'=>$code,
						'type'=>$type,
					);
				}
			}
		}
		
		return $arr;
	}
}

if( ! function_exists('populate_addresses_and_schools') ){
	function populate_addresses_and_schools($text,$requests="",$limit=5){
		
		$variables = zipperagent_generate_list($requests, 0, 0);
		
		$crit = $variables['vars']['crit'];
		
		$args=array(
			'text'=>$text,
			'gs'=>1,
			'ms'=>1,
			'hs'=>1,
			'sd'=>1,
			'addr'=>1,
			'mls'=>1,
			'ps'=>$limit,
			'crit'=>$crit,
		);

		$obj = zipperagent_populate_new_autocomplete($args);
		
		$includes = array(
			'GRADESCHOOL',
			'MIDDLESCHOOL',			
			'HIGHSCHOOL',
			'SCHOOLDISTRICT',
			'FULLADDRESS',		
			'LISTNO',		
		);
		
		$arr=array();
		$arr_addr=array();
		
		foreach( $obj as $line ){
				
			if(!in_array($line->field, $includes))
				continue;
			
			if(isset($line->buckets) && sizeof($line->buckets)){
				
				$type = strtolower($line->field);
				$group = ucwords($type);
				
				foreach($line->buckets as $field){
					
					$prefix='';
					switch($line->field){
						case 'GRADESCHOOL':
								$prefix='gschl';
							break;
						case 'MIDDLESCHOOL':
								$prefix='mschl';
							break;
						case 'HIGHSCHOOL':
								$prefix='hschl';
							break;
						case 'SCHOOLDISTRICT':
								$prefix='aschdt';
							break;
						case 'FULLADDRESS':
								$prefix='aflladdr';
							break;
						case 'LISTNO':
								$prefix='alstid';
							break;
					}
					
					$name = trim($field->value);
					$value = trim($field->value);
					$code = $prefix.'_'.$value;
					
					if($type=='fulladdress'){
						$arr_addr[]=array(
							'group'=>$group,
							'name'=>$name,
							'code'=>$code,
							'type'=>$type,
						);
					}else{
						$arr[]=array(
						'group'=>$group,
						'name'=>$name,
						'code'=>$code,
						'type'=>$type,
					);
					}
				}
			}
		}
		
		$arr = array_merge_recursive( $arr_addr, $arr );
		
		return $arr;
	}
}

if( ! function_exists('populate_listids') ){
	function populate_listids($text,$requests="",$limit=5){
		
		$variables = zipperagent_generate_list($requests, 0, 0);
		
		$crit = $variables['vars']['crit'];
		
		$args=array(
			'text'=>$text,
			'gs'=>0,
			'ms'=>0,
			'hs'=>0,
			'sd'=>0,
			'addr'=>0,
			'mls'=>1,
			'ps'=>$limit,
			'crit'=>$crit,
		);

		$obj = zipperagent_populate_new_autocomplete($args);
		
		$includes = array(		
			'LISTNO',		
		);
		
		$arr=array();
		
		foreach( $obj as $line ){
				
			if(!in_array($line->field, $includes))
				continue;
			
			if(isset($line->buckets) && sizeof($line->buckets)){
				
				$type = strtolower($line->field);
				$group = ucwords($type);
				
				foreach($line->buckets as $field){
					
					$prefix='';
					switch($line->field){
						case 'LISTNO':
								$prefix='alstid';
							break;
					}
					
					$name = trim($field->value);
					$value = trim($field->value);
					$code = $prefix.'_'.$value;
					
					$arr[]=array(
						'group'=>$group,
						'name'=>$name,
						'code'=>$code,
						'type'=>$type,
					);
				}
			}
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
		$tenants = populate_tenant_favorites();
		
		$data= array(
			'towns' => $towns,
			'areas' => $areas,
			'counties' => $counties,
			'zipcodes' => $zipcodes,
			'tenants' => $tenants,
		);
		
		return $data;
	}
}

if( ! function_exists('get_autocomplete_data') ){
	function get_autocomplete_data(){
		
		if(!isset($_SESSION['za_autocomplete']) || ( isset($_SESSION['za_autocomplete']) && !$_SESSION['za_autocomplete'] )){
			ob_start();
			include ZIPPERAGENTPATH . '/custom/api-processing/autocomplete.php'; 
			$json = ob_get_clean();
			
			$data = json_decode($json);
			
			$_SESSION['za_autocomplete'] = $data;
		}else{
			$data = $_SESSION['za_autocomplete'];
		}
		
		return $data;
	}
}

if( ! function_exists('populate_fields') ){
	function populate_fields($sourceid=''){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$sources = isset($rb['web']['asrc'])?'?sources='.$rb['web']['asrc']:'';
		
		$fields=array();
		
		if($sourceid==''){
			$url="/api/mls/fieldReferences" . $sources;
		}else{
			$url="/api/mls/fieldReferences?sources=" . $sourceid;
		}
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
		
		if(!isset($_SESSION['za_towns']) || ( isset($_SESSION['za_towns']) && !$_SESSION['za_towns'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/towns.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_towns'] = $data;
		}else{
			$data = $_SESSION['za_towns'];
		}
		
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
	function get_field_list($type='general', $sourceid=''){
		
		$sname = $type=='detail' && $sourceid!='' ? 'za_fields_' . $sourceid : 'za_fields';
		
		if(!isset($_SESSION[$sname]) || ( isset($_SESSION[$sname]) && !$_SESSION[$sname] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/fields.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION[$sname]=$data;
		}else{
			$data = $_SESSION[$sname];
		}	
		return $data;
	}
}

if( ! function_exists('za_get_alert_type') ){
	function za_get_alert_type(){
		
		if(!isset($_SESSION['za_alert']) || ( isset($_SESSION['za_alert']) && !$_SESSION['za_alert'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/alert.php";
			$json=ob_get_clean();
			$data=json_decode($json);
			
			$_SESSION['za_alert'] = $data;
		}else{
			$data = $_SESSION['za_alert'];
		}	
		
		return $data;
	}
}

if( ! function_exists('is_open_house_search_enabled') ){
	function is_open_house_search_enabled(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$enabled = isset($rb['web']['openhouse_searchbar'])?$rb['web']['openhouse_searchbar']:false;
		$enabled = empty($enabled)?false:$enabled;
			
		return $enabled;
	}
}
if( ! function_exists('zipperagent_get_favorites') ){
	function zipperagent_get_favorites(){
		if( $userdata = ZipperagentGlobalFunction()->getCurrentUserContactLogin() ){	
			
			$contactIds=array();
			foreach($userdata as $contact){
				$contactIds[]=$contact->id;
			}
			
			$contactIds_key = implode('_',$contactIds);
			$option_key_listid = $contactIds_key . '_favorite_listingIds';
			
			$saved_favorites = get_option($option_key_listid);
		}else{			
			$saved_favorites = ZipperagentGlobalFunction()->zipperagent_get_cookie('saved_favorites');			
		}
		
		return $saved_favorites;
	}
}

if( ! function_exists('zipperagent_is_favorite') ){
	function zipperagent_is_favorite($listingId){
		$checked=false;
		
		$saved_favorites = zipperagent_get_favorites();
		
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
		$single_property = ZipperagentGlobalFunction()->get_single_property($listingId, $contactIds);
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
	function zipperagent_field_value( $key, $val, $proptype='', $sourceid='', $type='general' ){
		
		$fields = get_field_list($type, $sourceid);
		
		//special case
		switch($key){
			case "mbrdimen":case "mbrdscrp":case "mbrDSCRP":
			case "bed2dimen":case "bed2DSCRP":
			case "bed3dimen":case "bed3DSCRP":
			case "bed4dimen":case "bed4DSCRP":
			case "bed5dimen":case "bed5DSCRP":
			case "bed6dimen":case "bed6DSCRP":
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
			case "oth6DIMEN":case "oth6DSCRP":
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
			case "headscrp6":case "coldscrp6":
			case "heaDSCRP6":case "colDSCRP6":
				$key=isset($fields->ROOM)?"ROOM":$key;
				break;
			
			case "mbrlevel":
			case "bed2LEVEL":
			case "bed3LEVEL":
			case "bed4LEVEL":
			case "bed5LEVEL":
			case "bed6LEVEL":
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
			case "oth6LEVEL":
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
			
			if(strpos($val, '|') !== false) {
				$separator="|";
			}else{	
				$separator=",";
			}
			
			$values=array_map('trim', explode($separator, $val ));
			// print_r( "Before: " . $val. "<br />" );
			foreach( $values as $value ){
				$temp[]=0;
			}
			
			$keyFeatures = zipperagent_type_mask($fields, $key, $proptype, $sourceid);
			
			foreach( $keyFeatures as $entity ){
				$version = isset($entity->version)?$entity->version:'';
				$fieldName = isset($entity->fieldName)?$entity->fieldName:'';
				$shortDescription = isset($entity->shortDescription)?array_filter(array_map('trim', explode('$',$entity->shortDescription))):'';
				$mediumDescription = isset($entity->mediumDescription)?$entity->mediumDescription:'';
				$longDescription = isset($entity->longDescription)?$entity->longDescription:'';
				$propTypeMask = isset($entity->propTypeMask)?$entity->propTypeMask:'';
				
				// if( strtolower($key) == 'amenities' ){
					// echo "<pre>"; print_r( $temp ); echo "</pre>";
					// echo "<pre>"; print_r( $values ); echo "</pre>";
					// echo "<pre>"; print_r( $shortDescription ); echo "</pre>";
				// }
				
				foreach( $temp as $index=>$value ){
					if( ! $temp[$index] ){
						if( $mediumDescription == trim($values[$index]) ){
							$values[$index]=str_replace( $mediumDescription, $longDescription, $values[$index] );
							$temp[$index]=1;
						}else if( in_array(trim($values[$index]), $shortDescription) ){
							$code='';
							foreach($shortDescription as $k=>$v){
								if(trim($v)==trim($values[$index])){
									$code=trim($v);
									break;
								}
							}
							
							$values[$index]=str_replace( $code, $longDescription, $values[$index] );
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
	function zipperagent_type_mask($fields, $key, $proptype, $sourceid=''){
		
		// $sourceid=''; // fix wrong label
		
		// if(strtoupper($key)=='AMENITIES'){
			// echo "key: ".$key."<br />";
			// echo "proptype: ".$proptype."<br />";
			// echo "sourceid: ".$sourceid."<br />";
			// echo "<pre>"; print_r($fields->AMENITIES); echo "</pre>";
			// die();
		// }
		
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
		
		// echo "<pre>"; print_r( $keyFeaturesRaw ); echo "</pre>";
		
		foreach($keyFeaturesRaw as $entity){				
			if ( isset($entity->propTypeMask) && ( ($entity->propTypeMask == 255) || ((int)$entity->propTypeMask & (1 << $p_pty_mask)) == (1 << $p_pty_mask))
				 && ( $sourceid==='' || $sourceid!=='' && $entity->sourceId==$sourceid )){
					 
				array_push($keyFeatures,$entity);
			}
		}
		// echo "<pre>"; print_r( $keyFeatures ); echo "</pre>";
		return $keyFeatures;
	}
}

if( ! function_exists('zipperagent_timezone') ){
	function zipperagent_timezone(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$timezone=isset( $rb['tenant']['timezone'] ) ? $rb['tenant']['timezone'] : '';
		
		return $timezone;
	}
}

if( ! function_exists('zipperagent_browser_timezone') ){
	function zipperagent_browser_timezone(){
		$timezone = isset($_COOKIE['browser_timezone']) && $_COOKIE['browser_timezone'] ? $_COOKIE['browser_timezone'] : zipperagent_timezone();
		
		return $timezone;
	}
}

if( ! function_exists('zipperagent_mls_timezone') ){
	function zipperagent_mls_timezone($sourceid){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$timezone=isset($rb['tenant']['mls_timezone']) ? $rb['tenant']['mls_timezone'] : '';
		
		$timezone=is_array($timezone)&&isset($timezone[$sourceid])?$timezone[$sourceid]:$timezone;
		
		if(empty($timezone) || is_array($timezone))
			$timezone='GMT';
		
		return $timezone;
	}
}

if( ! function_exists('populate_users') ){
	function populate_users(){
		
		$page=0;
		$limit=100;
		// die( $url );
		
		$count=0;
		
		$users = array();
		
		do{
			$url="/api/lite/user/list?sidx=$page&ps=$limit";
		
			$result = zipperagent_run_curl($url);
			if(isset($result['filteredList']) && count($result['filteredList'])){
				$users=array_merge_recursive($users, $result['filteredList']);
			}
			$count = isset($result['filteredList']) ? count($result['filteredList']) : 0;
			
			$page++;
		}while($count == $limit);
		
		return $users;
	}
}

if( ! function_exists('zipperagent_get_agent_list') ){
	function zipperagent_get_agent_list(){
		
		if(!isset($_SESSION['za_users']) || ( isset($_SESSION['za_users']) && !$_SESSION['za_users'] )){
			ob_start();
			include ZIPPERAGENTPATH . "/custom/api-processing/users.php";
			$users = ob_get_clean();	

			$_SESSION['za_users'] = $users;
		}else{
			$users = $_SESSION['za_users'];
		}
		
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
		// if( isset( $agents->filteredList ) ){
			// foreach( $agents->filteredList as $agent ){
		if( sizeof($agents) ){
			foreach( $agents as $agent ){
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
		// if( isset( $agents->filteredList ) ){
			// foreach( $agents->filteredList as $agent ){
		if( sizeof($agents) ){
			foreach( $agents as $agent ){
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
			
			'customize_changeset_uuid',
			'customize_messenger_channel',
			'customize_theme',
			
			'location_option',
			'property_type_option',
			'property_type_default',
			'map_zoom',
		);
		
		//for template testing purpose
		$exclude[]='groupname';
		$exclude[]='custom_proptype';
		
		return $excludes;
	}
}

if( ! function_exists('get_short_excludes') ){
	function get_short_excludes(){
		$excludes = array('location', 'propertytype', 'status', 'minlistprice', 'maxlistprice', 'bedrooms', 'bathcount', 'o', 'action', 'search_form_enabled', 'view_type', 'starttime', 'endtime', 'afteraction', 'listingparams', 'fbclid','newsearchbar','is_shortcode','search_category','cid');
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
					'search_form_enabled', 'listinapage', 'pagenum', 'maxlist',
					'searchid','is_view_save_search','mobile_item','tablet_item','desktop_item',
					'starttime','endtime','searchdistance','distance','lat','lng',
					'location_option','criteria','afteraction','listingparams',
					'fbclid','newsearchbar','school','search_category','coords','direct','view',
					'disableviewbar','vars','fixed_search_form','anycrit','micro',
					'alkchnnm','autoplay','cid'
				);
				
		$excludes=array_merge($excludes,get_wp_var_excludes());
				
		return $excludes;
	}
}

if( ! function_exists('get_new_filter_excludes') ){
	function get_new_filter_excludes(){
		$excludes=array( 'address',				
			'pagination', 'result', 'crit', 'anycrit', 'ajax', 'save_search',
			'action', 'actual_link', 'view_type', 'column', 'is_shortcode',
			'search_form_enabled', 'listinapage', 'pagenum', 'maxlist',
			'searchid','is_view_save_search','mobile_item','tablet_item','desktop_item',
			'starttime','endtime','searchdistance','distance',
			'location_option','criteria','afteraction','listingparams','fbclid','o','newsearchbar',
			'lat','lng','search_category','map_zoom','direct','view','disableviewbar','fixed_search_form','aloff',
			'micro','cid'
		);
		
		$excludes=array_merge($excludes,get_wp_var_excludes());
		
		return $excludes;
	}
}

if( ! function_exists('get_old_filter_excludes') ){
	function get_old_filter_excludes(){
		$excludes=array( 'location', 'address', 'boundarywkt',				
					'pagination', 'result', 'crit', 'anycrit', 'ajax', 'save_search',
					'action', 'actual_link', 'view_type', 'column', 'is_shortcode',
					'search_form_enabled', 'listinapage', 'pagenum', 'maxlist',
					'searchid','is_view_save_search','mobile_item','tablet_item','desktop_item',
					'starttime','endtime','searchdistance','distance','lat','lng',
					'location_option','criteria','afteraction','listingparams','fbclid',
					'search_category','direct','view','cid'
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

if( ! function_exists('zipperagent_infinite_loop') ){
	function zipperagent_infinite_loop(){
		$is_ajax=true;
		
		return $is_ajax;
	}
}

if( ! function_exists('zipperagent_listpage_layout') ){
	function zipperagent_listpage_layout(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();		
		$listpage_layout = isset($rb['layout']['listpage_layout'])?$rb['layout']['listpage_layout']:'';
		
		return $listpage_layout;
	}
}

if( ! function_exists('zipperagent_detailpage_layout') ){
	function zipperagent_detailpage_layout(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();		
		$detailpage_layout = isset($rb['layout']['detailpage_layout'])?$rb['layout']['detailpage_layout']:'';
		// $detailpage_layout = 'template-newDetail.php';
		
		return $detailpage_layout;
	}
}

if( ! function_exists('get_detail_template_filename') ){
	function get_detail_template_filename($proptype){
		$proptype=strtolower($proptype);
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();		
		$detailpage_layout = isset($rb['layout']['detailpage_layout_'.$proptype])?$rb['layout']['detailpage_layout_'.$proptype]:'';
		// $detailpage_layout = 'template-newDetail.php';
		
		return $detailpage_layout;
	}
}

if( ! function_exists('zipperagent_signup_optional') ){
	function zipperagent_signup_optional(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();		
		$signup_optional = isset($rb['web']['signup_optional'])?$rb['web']['signup_optional']:1;
		
		return $signup_optional;
	}
}

if( ! function_exists('zipperagent_signup_optional_time') ){
	function zipperagent_signup_optional_time(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();		
		$signup_optional_time = isset($rb['web']['signup_optional_time'])?$rb['web']['signup_optional_time']:0;
		
		return $signup_optional_time;
	}
}

if( ! function_exists('zipperagent_signup_optional_exception') ){
	function zipperagent_signup_optional_exception(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();		
		$signup_optional_exception = isset($rb['web']['signup_optional_exception'])?$rb['web']['signup_optional_exception']:0;
		
		return $signup_optional_exception;
	}
}

if( ! function_exists('zipperagent_is_close_popup_enabled') ){
	function zipperagent_is_close_popup_enabled(){
		
		$signup_optional = zipperagent_signup_optional();
		$signup_optional_exception = zipperagent_signup_optional_exception();
		
		// $_SESSION['popup_is_closed']=0; //reset purpose only
		
		if( !$signup_optional && $signup_optional_exception && isset($_SESSION['popup_is_closed']) && $_SESSION['popup_is_closed']
			&& $signup_optional_exception <= (int) $_SESSION['popup_is_closed'] ){
			
			return false;
		}else if(!$signup_optional && !$signup_optional_exception ){
			
			return false;
		}
		
		return true;
	}
}

if( ! function_exists('zipperagent_is_enable_save') ){
	function zipperagent_is_enable_save(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();		
		$is_enable = isset($rb['web']['enable_save_button'])?$rb['web']['enable_save_button']:0;
		
		return $is_enable;	
	}
}

if( ! function_exists('zipperagent_currency') ){
	function zipperagent_currency(){
		$curr="$";
		
		return $curr;
	}
}

if( ! function_exists('zipperagent_remove_cookie') ){
	function zipperagent_remove_cookie($name){		
		
		unset($_COOKIE[$name]);
		
		$subfolder=defined('SUBDOMAIN_INSTALL') && ! SUBDOMAIN_INSTALL && function_exists('get_blog_details') ? get_blog_details() : false;
		
		if(!$subfolder){
			setcookie($name, null, -1, '/');
		}else{
			setcookie($name, null, -1, $subfolder->path);
		}
	}
}

if( ! function_exists('zipperagent_set_session') ){
	function zipperagent_set_session($name, $value=''){
		
		$master_key='zipperagent';
			
		$site_url = str_replace( 'https://','',site_url() );
		$site_url = str_replace( 'http://','',$site_url );
		
		$_SESSION[$master_key][$site_url][$name]=$value;
		
		
		
		return isset($_SESSION[$master_key][$site_url][$name]);
	}
}

if( ! function_exists('zipperagent_get_session') ){
	function zipperagent_get_session($name){
		
		$master_key='zipperagent';
			
		$site_url = str_replace( 'https://','',site_url() );
		$site_url = str_replace( 'http://','',$site_url );
		
		$value = false;
		
		if(isset($_SESSION[$master_key][$site_url][$name])){
			$value=$_SESSION[$master_key][$site_url][$name];
		}
		
		return $value;
	}
}

if( ! function_exists('zipperagent_remove_session') ){
	function zipperagent_remove_session($name){
		$master_key='zipperagent';
			
		$site_url = str_replace( 'https://','',site_url() );
		$site_url = str_replace( 'http://','',$site_url );
		
		$value = false;
		
		if(isset($_SESSION[$master_key][$site_url][$name])){
			unset($_SESSION[$master_key][$site_url][$name]);
		}		
	}
}

if( ! function_exists('zipperagent_user_name') ){
	function zipperagent_user_name(){
		
		$fullname='My Account';
		$userdata=ZipperagentGlobalFunction()->getCurrentUserContactLogin();
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
			$lastVisitedUrl =  ZipperagentGlobalFunction()->zipperagent_get_cookie('last_detail_page_url');
			$currentUrl="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$isPageDifferent = ($lastVisitedUrl !== $currentUrl);
			
			// if($isPageDifferent){
			if(1){
				$detailpage_visit_counter =  ZipperagentGlobalFunction()->zipperagent_get_cookie('detailpage_visit_counter');
				if(!is_numeric($detailpage_visit_counter) || $detailpage_visit_counter < 0){
					$detailpage_visit_counter=0;
				}
				// echo "COUNTER++ : ". $detailpage_visit_counter;
				$detailpage_visit_counter++; //raise up by one, if user visit
				ZipperagentGlobalFunction()->zipperagent_set_cookie('detailpage_visit_counter', $detailpage_visit_counter);
			}
			
			ZipperagentGlobalFunction()->zipperagent_set_cookie('last_detail_page_url',$currentUrl);
		}
	}
}

if( ! function_exists('showSignUpPopup') ){
	function showSignUpPopup(){
		
	/*
	 * Check is popup is mandatory or not
	 */
	
	if( !zipperagent_signup_optional() && isset($_SESSION['popup_is_triggered']) && $_SESSION['popup_is_triggered'] == 1)
		return 1;
	
	/*
	 * using popup detailpage visit counter
	 */
		$counter=SignUpPopupVisitCounter();
		if($counter){// do popup if only counter not empty
			
			$lastVisitedUrl =  ZipperagentGlobalFunction()->zipperagent_get_cookie('last_detail_page_url');
			$currentUrl="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$isPageDifferent = ($lastVisitedUrl !== $currentUrl);
			
			$detailpage_visit_counter =  ZipperagentGlobalFunction()->zipperagent_get_cookie('detailpage_visit_counter');
			// echo "COUNTER: ". $detailpage_visit_counter;
			// if($detailpage_visit_counter>=$counter && $isPageDifferent){
			if($detailpage_visit_counter>=$counter){
				ZipperagentGlobalFunction()->zipperagent_set_cookie('detailpage_visit_counter', 0); //reset counter
				return 1;
			}else{
				return 0;
			}
		}
		
	/*
	 * using sign up interval
	 */
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$interval = isset($rb['web']['sign_up_interval'])?$rb['web']['sign_up_interval']:0;
		$status=0;
		
		if($interval==0){
			//if interval is not set then always open popup
			return 1;
		}else if(!$interval){
			$interval=60;
		}
		
		$lastDateTime =  ZipperagentGlobalFunction()->zipperagent_get_cookie('last_popup_time');		
		$currDateTime = strtotime(date("Y-m-d h:i:sa"));
		$lastVisitedUrl =  ZipperagentGlobalFunction()->zipperagent_get_cookie('last_visited_url');
		$currentUrl="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		
		if(!$lastDateTime){
			ZipperagentGlobalFunction()->zipperagent_set_cookie('last_popup_time', $currDateTime);
		}else{
			$diffInSeconds = ($currDateTime-$lastDateTime); //seconds
			$diffInMinutes = $diffInSeconds / 60;
			
			$isPageDifferent = ($lastVisitedUrl !== $currentUrl);
			// if($diffInMinutes > $interval && $isPageDifferent){
			if($diffInMinutes > $interval){
				$status=1;
				ZipperagentGlobalFunction()->zipperagent_set_cookie('last_popup_time', $currDateTime);		
				ZipperagentGlobalFunction()->zipperagent_set_cookie('last_visited_url', $currentUrl);
			}
		}
		
		return $status;
	}
}

if( ! function_exists('SignUpPopupTime') ){
	function SignUpPopupTime(){
		
		if( !zipperagent_signup_optional() && isset($_SESSION['popup_is_triggered']) && $_SESSION['popup_is_triggered'] == 1){
			$seconds = zipperagent_signup_optional_time();
			return $seconds; //if sign up is mandatory and already triggered before, show popup immediately
		}
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$seconds = isset($rb['web']['popup_show_time'])?$rb['web']['popup_show_time']:'';
		
		if(empty($seconds))
			$seconds=120; //default is 120 seconds
		
		return $seconds;
	}
}

if( ! function_exists('za_is_show_popup') ){
	function za_is_show_popup(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$is_enabled = isset($rb['web']['popupshow'])?$rb['web']['popupshow']:1;
		
		if($is_enabled=='')
			$is_enabled=1; //default is always enable
		
		return $is_enabled;
	}
}

if( ! function_exists('za_is_ygl') ){
	function za_is_ygl( $single_property ){
		
		$is_ygl = 0;
		
		if( ! is_object( $single_property ) ){
			return 0;
		}
		
		if( isset( $single_property->sourceid ) && $single_property->sourceid > 0 ){
			$is_ygl = 1;
		}
		
		return $is_ygl;
	}
}

if( ! function_exists('SignUpPopupVisitCounter') ){
	function SignUpPopupVisitCounter(){
				
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$counter = isset($rb['web']['popup_visit_counter'])?$rb['web']['popup_visit_counter']:0;
		
		return $counter;
	}
}

if( ! function_exists('is_social_share_enabled') ){
	function is_social_share_enabled(){
				
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$enabled = isset($rb['web']['social_share'])?$rb['web']['social_share']:'';
		
		$enabled=$enabled?true:false;
		
		return $enabled;
	}
}

if( ! function_exists('is_great_school_enabled') ){
	function is_great_school_enabled(){
				
		return 1;
	}
}

if( ! function_exists('is_walkscore_enabled') ){
	function is_walkscore_enabled(){
				
		return 1;
	}
}

if( ! function_exists('is_show_agent_list') ){
	function is_show_agent_list(){
				
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$enabled = isset($rb['web']['show_agent_list'])?$rb['web']['show_agent_list']:'';
		
		$enabled=$enabled?true:false;
		
		return $enabled;
	}
}

if( ! function_exists('is_show_contact_agent') ){
	function is_show_contact_agent(){
				
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$enabled = isset($rb['web']['youragent'])?$rb['web']['youragent']:0;
		
		$enabled=$enabled?true:false;
		
		return $enabled;
	}
}
if( ! function_exists('is_show_contact_agent_btn') ){
	function is_show_contact_agent_btn(){
		$btnAction=array();	
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$btnAction[0] = isset($rb['web']['youragent_btn'])?$rb['web']['youragent_btn']:0;
		$btnAction[1] = isset($rb['web']['youragent_btn_action'])?$rb['web']['youragent_btn_action']:0;
		return $btnAction;
	}
}

if( ! function_exists('is_branded_virtualtour') ){
	function is_branded_virtualtour(){
				
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$enabled = isset($rb['web']['branded_virtualtour'])?$rb['web']['branded_virtualtour']:'';
		
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
				
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$enabled = isset($rb['web']['show_agent_name'])?$rb['web']['show_agent_name']:'';
		
		$enabled=$enabled?true:false;
		
		return $enabled;
	}
}

if( ! function_exists('zipperagent_extra_proptype') ){
	function zipperagent_extra_proptype(){
				
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$extra_properties = isset($rb['web']['extra_proptype'])?$rb['web']['extra_proptype']:array();
		
		return $extra_properties;
	}
}

if( ! function_exists('zipperagent_property_grid') ){
	function zipperagent_property_grid( $property, $params, $requests, $searchId = '', $contactIds = array(), $search = '' ){
		// echo "<pre>"; print_r( $params ); echo "</pre>";
		
		extract( $params );
		
		$fulladdress = zipperagent_get_address($property);
							
		$saved_crit=$search;
		$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
		if(!empty($searchId)){
			$query_args['searchId']= $searchId;
		}
		if(zp_using_criteria() && !empty($critBase64)){
			$query_args['criteria']= $critBase64;
		}
		if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
			$query_args['newsearchbar']= 1;
		}
		
		$single_url = zipperagent_add_query_args( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
		$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
		
		// $rebate_text = za_get_rebate_text( $property );
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$enable_rebate = isset($rb['web']['display.buyerrebate.amount'])?$rb['web']['display.buyerrebate.amount']:0;
		$rebate_prefix = isset($rb['web']['buyerrebate.amount.prefix'])?$rb['web']['buyerrebate.amount.prefix']:'';
		$rebate_default_text = isset($rb['web']['emptybuyerrebate.amount.text'])?$rb['web']['emptybuyerrebate.amount.text']:'';
		
		// include ZIPPERAGENTPATH . '/custom/templates/listing/template-defaultGrid.php';
		include ZIPPERAGENTPATH . '/custom/templates/listing/grid/template-sliderGrid.php';
		
		return array(
			'wrapOpen' => $wrapOpen,
		);
	}
}

if( ! function_exists('zipperagent_property_list') ){
	function zipperagent_property_list( $property, $params, $requests, $searchId = '', $contactIds = array(), $search = '' ){
		// echo "<pre>"; print_r( $params ); echo "</pre>";
		
		extract( $params );
		
		$fulladdress = zipperagent_get_address($property);
							
		$saved_crit=$search;
		$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
		if(!empty($searchId)){
			$query_args['searchId']= $searchId;
		}
		if(zp_using_criteria() && !empty($critBase64)){
			$query_args['criteria']= $critBase64;
		}
		if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
			$query_args['newsearchbar']= 1;
		}
		
		$single_url = zipperagent_add_query_args( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
		$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
		
		// $rebate_text = za_get_rebate_text( $property );
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$enable_rebate = isset($rb['web']['display.buyerrebate.amount'])?$rb['web']['display.buyerrebate.amount']:0;
		$rebate_prefix = isset($rb['web']['buyerrebate.amount.prefix'])?$rb['web']['buyerrebate.amount.prefix']:'';
		$rebate_default_text = isset($rb['web']['emptybuyerrebate.amount.text'])?$rb['web']['emptybuyerrebate.amount.text']:'';
		
		// include ZIPPERAGENTPATH . '/custom/templates/listing/template-defaultGrid.php';
		include ZIPPERAGENTPATH . '/custom/templates/listing/list/template-single-list.php';
		
		return array(
			'wrapOpen' => $wrapOpen,
		);
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
										echo '<td>'. zipperagent_currency() . number_format_i18n( $price, 0 ).'</td><td>'. $bedrooms .'</td><td>'. $bath .'</td><td>'. $sqft .'</td><td><a href="'. $single_url .'"><i class="fa fa-search" aria-hidden="true" role="none"></i></a></td>';
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
										echo '<td>'. zipperagent_currency() . number_format_i18n( $price, 0 ).'</td><td>'. $bedrooms .'</td><td>'. $bath .'</td><td>'. $sqft .'</td><td><a href="'. $single_url .'"><i class="fa fa-search" aria-hidden="true" role="none"></i></a></td>';
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
										echo '<td>'. zipperagent_currency() . number_format_i18n( $price, 0 ).'</td><td>'. $bedrooms .'</td><td>'. $bath .'</td><td>'. $sqft .'</td><td><a href="'. $single_url .'"><i class="fa fa-search" aria-hidden="true" role="none"></i></a></td>';
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
										echo '<td>'. zipperagent_currency() . number_format_i18n( $price, 0 ).'</td><td>'. $bedrooms .'</td><td>'. $bath .'</td><td>'. $sqft .'</td><td><a href="'. $single_url .'"><i class="fa fa-search" aria-hidden="true" role="none"></i></a></td>';
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
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		
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
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		$default_order = isset($rb['web']['default_order'])?$rb['web']['default_order']:'';
			
		return $default_order;
	}
}

if( ! function_exists('za_get_default_proptype') ){
	function za_get_default_proptype(){
		
		$default_value = array(
			'SF','MF','CC'
		);
			
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
					
		$default_proptype = isset($rb['web']['default_proptype']) ? explode(',',$rb['web']['default_proptype']) : $default_value;
		
		return $default_proptype;
	}
}

if( ! function_exists('is_popup_detail_page_only') ){
	function is_popup_detail_page_only(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		$check = isset($rb['web']['popup_detail_page_only'])?$rb['web']['popup_detail_page_only']:0;
				
		return $check;
	}
}

if( ! function_exists('zipperagent_distance') ){
	function zipperagent_distance(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		$distance = isset($rb['web']['distance'])?$rb['web']['distance']:8000;
		
		return $distance;
	}
}

if( ! function_exists('zipperagent_company_name') ){
	function zipperagent_company_name(){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		// $company_name = isset($rb['web']['company_name'])?$rb['web']['company_name']:get_bloginfo('name');
		// $company_name = isset($rb['web']['company_name'])?$rb['web']['company_name']:'This property was shared to you';
		$company_name = isset($rb['web']['company_name'])?$rb['web']['company_name']:'';
		
		return $company_name;
	}
}

if( ! function_exists('zp_using_criteria') ){
	function zp_using_criteria(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		$is_using_criteria = isset($rb['web']['using_criteria'])?$rb['web']['using_criteria']:0;
			
		return $is_using_criteria;
	}
}

if( ! function_exists('is_show_extra_search_feature') ){
	function is_show_extra_search_feature(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		$default_order = isset($rb['web']['show_extra_search_feature'])?$rb['web']['show_extra_search_feature']:1;
			
		return $default_order;
	}
}

if( ! function_exists('is_price_slider_enabled') ){
	function is_price_slider_enabled(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		$enabled = isset($rb['web']['show_price_slider'])?$rb['web']['show_price_slider']:0;
			
		return $enabled;
	}
}

if( ! function_exists('is_register_form_chaptcha_enabled') ){
	function is_register_form_chaptcha_enabled(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		$enabled = isset($rb['web']['register_form_chaptcha'])?$rb['web']['register_form_chaptcha']:0;
			
		return $enabled;
	}
}

if( ! function_exists('zp_get_credentials') ){
	function zp_get_credentials(){
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			
		$username = isset($rb['credentials']['username'])?$rb['credentials']['username']:'';
		$key = isset($rb['credentials']['key'])?$rb['credentials']['key']:'';
			
		$return=array(
			'username'=>$username,
			'key'=>$key,
		);	
		
		return $return;
	}
}

if( ! function_exists('za_get_rebate_text') ){
	function za_get_rebate_text( $property ){
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$is_enabled = isset($rb['web']['display.buyerrebate.amount'])?$rb['web']['display.buyerrebate.amount']:0;
		$rebate_text = '';
		
		if( $is_enabled ){
			$prefix = isset($rb['web']['buyerrebate.amount.prefix'])?$rb['web']['buyerrebate.amount.prefix']:'';
			$text = isset($rb['web']['emptybuyerrebate.amount.text'])?$rb['web']['emptybuyerrebate.amount.text']:'';
			
			if( isset( $property->buyerRebate ) ){
				
				$rebate_text = $prefix . ' ' . zipperagent_currency() . number_format_i18n( $property->buyerRebate, 0 );
			}else{
				$rebate_text = $prefix . ' ' . $text;
			}
		}
		
		return $rebate_text;
	}
}

if( ! function_exists('zipperagent_omnibar') ){
	function zipperagent_omnibar($requests=array()){
		
		if(ZipperagentGlobalFunction()->zipperagent_detailpage_group()=='mlspin' || ZipperagentGlobalFunction()->is_zipperagent_new_detail_page()){
			
			// default is map view 
			$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			$new_layout = isset($rb['layout']['new_template'])?$rb['layout']['new_template']:0;
			
			if( $new_layout ){
				if( ! isset( $_REQUEST['view'] ) ) {
					$_REQUEST['view'] = 'map';
				}
			}
			
			if( isset( $requests['view'] ) && $requests['view'] == 'map' ){
				if( $new_layout )
					zipperagent_omnibar_flat($requests);
				else
					zipperagent_omnibar_new($requests);
			} else {
				zipperagent_omnibar_new($requests);
			}
			
			return;
		}
		include ZIPPERAGENTPATH. "/custom/templates/template-searchBar.php";
	}
}

if( ! function_exists('zipperagent_omnibar_new') ){
	function zipperagent_omnibar_new($requests=array()){
		include ZIPPERAGENTPATH. "/custom/templates/template-searchBar-new.php";
	}
}

if( ! function_exists('zipperagent_omnibar_flat') ){
	function zipperagent_omnibar_flat($requests=array()){
		include ZIPPERAGENTPATH. "/custom/templates/template-searchBar-flat.php";
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

if( ! function_exists('zipperagent_mortgage_calculator') ){
	function zipperagent_mortgage_calculator($args){
		global $requests;
				
		$defaults = array(
			'default_homeprice' => 1000000,
			'default_downpayment_percent' => 20,
			'default_taxes_percent' => 0.98,
			'default_taxes_ammount' => '',
			'default_hoadues' => 0,
			'default_mortgage_insurance_percent' => 0.75,
			'default_homeowners_insurance_percent' => 0.4,
			'default_interestrate' => 3.77,
			'default_loan_type' => '30yrs',
		);
		
		$args = wp_parse_args( $args, $defaults );
		
		
		$requests = $args;
		
		include ZIPPERAGENTPATH. "/custom/templates/template-shortcode-mortgage-new.php";
	}
}


if( ! function_exists('zipperagent_fix_comma') ){
	function zipperagent_fix_comma($value){
		
		$value=str_replace(', ',',', $value);
		$value=str_replace(' , ',',', $value);
		$value=str_replace(' ,',',', $value);
		$value=str_replace(',',', ', $value);
		
		return $value;
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
				
				if(empty($value))
					continue;
				
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
								default:
										$index=0;
									break;
								
							}
							
							if(isset($data->$index)){					
								foreach($data->$index as $ety){
									$decoded_value = urldecode($value);
									if($ety->code===$value || $ety->code===$decoded_value){
										$label = $ety->name;
									}
								}					
							}else{
								$label = $code;
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

/*
if( ! function_exists('global_new_omnibar_script') ){
	function global_new_omnibar_script($auto_submit=0){
	?>
		<script>		
			jQuery(document).ready(function($) {
				
				var timer;
				
				<?php 
				$data = get_autocomplete_data();
				
				$towns = isset($data->towns)?$data->towns:array();
				$areas = isset($data->areas)?$data->areas:array();
				$counties = isset($data->counties)?$data->counties:array();
				$zipcodes = isset($data->zipcodes)?$data->zipcodes:array();
				$tenants = isset($data->tenants)?$data->tenants:array();
				$lakes = populate_lakes_with_option();
				?>
				
				var towns = <?php echo json_encode($towns); ?>;
				var areas = <?php echo json_encode($areas); ?>;
				var counties = <?php echo json_encode($counties); ?>;
				var lakes = <?php echo json_encode($lakes); ?>;
				var zipcodes = <?php echo json_encode($zipcodes); ?>;
				var all = $.merge(towns, areas);
					all = $.merge(all, counties);
					all = $.merge(all, lakes);
					all = $.merge(all, zipcodes);
					
				var tenants = <?php echo json_encode($tenants); ?>;
				
				var ms_town = $('#zpa-town-input').magicSuggest({
					
					data: tenants ? tenants : towns,
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
				});
				
				var ms_area = $('#zpa-areas-input').magicSuggest({
					
					data: tenants ? tenants : areas,
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
				});
				
				var ms_county = $('#zpa-county-input').magicSuggest({
					
					data: counties,
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
				});
				
				var ms_zip = $('#zpa-zipcode-input').magicSuggest({
					
					data: zipcodes,
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
				});
				
				var ms_all = $('#zpa-all-input').magicSuggest({
					
					data: tenants ? tenants : all,
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
				});	
				
				var ms_school = $('#zpa-school-input').magicSuggest({
					
					data: null,
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
				});
				
				/* magicSuggest actions *
				
				<?php if($auto_submit): ?>
				//auto submit on change
				$(ms_all).on('selectionchange', function(e,m){
					setTimeout(function() {					
						m.container.parents('#omnibar-wrap form.omnibar').submit();						
					}, 500);
				});
				$(ms_county).on('selectionchange', function(e,m){						
					setTimeout(function() {					
						m.container.parents('#omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				$(ms_area).on('selectionchange', function(e,m){						
					setTimeout(function() {					
						m.container.parents('#omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				$(ms_town).on('selectionchange', function(e,m){		
					setTimeout(function() {			
						m.container.parents('#omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				$(ms_zip).on('selectionchange', function(e,m){						
					setTimeout(function() {					
						m.container.parents('#omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				<?php endif; ?>
				
				
				$(ms_all).on('selectionchange', function(e,m){		
					var values = this.getValue();
					var value, check, name, add;
					var fields = $('.field-wrap .field-section.all .input-fields');
					
					fields.html(''); //clear all fields
					clearGoogleAddressFields(); //clear address fields
					
					for(i=0; i<values.length; i++){
						
						is_location=0;
						is_lake=0;
						is_address=0;
						is_mls=0;
						is_add=0;
						value  = values[i];
						
						if (value.toLowerCase().indexOf("atwns_") >= 0){ //town
							is_location=1;
						}else if (value.toLowerCase().indexOf("aars_") >= 0){ //area
							is_location=1;
						}else if (value.toLowerCase().indexOf("acnty_") >= 0){ //county
							is_location=1;
						}else if (value.toLowerCase().indexOf("azip_") >= 0){ //zip
							is_location=1;
						}else if (value.toLowerCase().indexOf("alkchnnm_") >= 0){ //lake
							is_lake=1;
						}else if (value.toLowerCase().indexOf("addr_") >= 0){ //google address
							is_address=1;
						}else if (value.toLowerCase().indexOf("alstid_") >= 0){ //mls
							is_mls=1;
						}
						
						if(is_location){							
							name = 'location[]';
							is_add=1;
						}else if(is_lake){
							name = 'alkChnNm[]';
							linked_name = value.replace('alkchnnm_','');
							value = value.replace('alkchnnm_','');
							is_add=1;
						}else if(is_address){
							name = '';
							is_add=0;
						}else if(is_mls){
							name = 'alstid[]';
							value = value.replace('alstid_','');
							is_add=1;
						}
						
						if(is_add){
							add = '<input type="hidden" name="'+ name +'" value="'+ value +'" />';
							fields.append(add);
						}else if(is_address){
							var saved_address = jQuery.parseJSON(jQuery('#zpa-all-input-address-values').val());
							if(saved_address){
								$.each(saved_address, function(key, value) {
									jQuery('.field-section.addr #'+ key).val(value);
									jQuery('.field-section.addr #'+ key).prop('disabled',false);
								});
							}
						}
					}
				});
				
				jQuery('body').on( 'change', '.field-wrap .field-section.listid #listid', function(){
					 
					var values=jQuery.unique(jQuery(this).val().split(','));
					var name='alstid[]';
					var value, add;
					var fields = $('.field-wrap .field-section.listid .input-fields');
					
					fields.html(''); //clear all fields
					for(i=0; i<values.length; i++){		
						value=jQuery.trim(values[i]);
						
						if(!value) continue;
						
						add = '<input type="hidden" name="'+ name +'" value="'+ value +'" />';
						fields.append(add);
					};
				});

				jQuery(ms_school).on('keyup', function(event){
					
					event.preventDefault();
					
					clearTimeout(timer);
					//create a new timer with a delay of 0.5 seconds, if the keyup is fired before the 2 secs then the timer will be cleared
					timer = setTimeout(function () {
						//this will be executed if there is a gap of 0.5 seconds between 2 keyup events
						var inputText = ms_school.getRawValue();
						
						console.time('populate schools');
						jQuery.ajax({
							type: 'POST',
							dataType : 'json',
							url: zipperagent.ajaxurl,
							data: {
								'key': inputText,
								'action': 'school_options',
							},
							success: function( response ) {         
								if( response ){
									var data = response.schools;
									ms_school.setData(data);
								}
								console.timeEnd('populate schools');
							},
							error: function(){
								console.timeEnd('populate schools');
							}
						});
					}, 500);
				});				
				
				/* Combine ms_all and google autocomplete *
				var ms_all__rawValue='';
				var ms_all__google_autocomplete;
				var google_autocomplete_selected=0;
				
				//select value on enter key pressed
				$(ms_all).on('keydown', function(e,m,v){
					var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
					// var data = $('.field-wrap .all .dropdown-menu');
					var magicSuggest_option_exists = data.length;
					var google_option_exists = $('body .pac-container.pac-logo').html().length;
					
					if(magicSuggest_option_exists){
						ms_all__google_autocomplete=0;
						jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
					}else if(google_option_exists && ms_all__rawValue.length >= 2){
						ms_all__google_autocomplete=1;
						jQuery('body .pac-container.pac-logo').css( 'visibility', 'visible' );
					}else{
						ms_all__google_autocomplete=0;
						jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
					}
					
					$('#zpa-all-input-address').val('');
				});
				
				function clearGoogleAddressFields(){
					jQuery('#zpa-all-input-address').val('');
					jQuery('.field-section.addr #street_number').val('');
					jQuery('.field-section.addr #street_number').prop('disabled',true);
					jQuery('.field-section.addr #route').val('');
					jQuery('.field-section.addr #route').prop('disabled',true);
					jQuery('.field-section.addr #locality').val('');
					jQuery('.field-section.addr #locality').prop('disabled',true);
					jQuery('.field-section.addr #administrative_area_level_1').val('');
					jQuery('.field-section.addr #administrative_area_level_1').prop('disabled',true);
					jQuery('.field-section.addr #country').val('');
					jQuery('.field-section.addr #country').prop('disabled',true);
					jQuery('.field-section.addr #postal_code').val('');
					jQuery('.field-section.addr #postal_code').prop('disabled',true);
				}
				
				<?php
				$rb = ZipperagentGlobalFunction()->zipperagent_rb();
				$states=isset($rb['web']['states'])?$rb['web']['states']:'';
				$states=array_map('trim', explode(',', $states));
				$states=sizeof($states)===1?implode(' | ',$states):'';
				?>
				
				var placeSearch, autocomplete;
				var componentForm = {
					street_number: 'short_name',
					route: 'long_name',
					locality: 'long_name',
					administrative_area_level_1: 'short_name',
					// country: 'short_name',
					postal_code: 'short_name'
				};
				// var input = document.getElementById('zpa-all-input');
				var input = document.querySelector('#zpa-all-input input');

				(function pacSelectFirst(inp){
					// store the original event binding function
					var _addEventListener = (inp.addEventListener) ? inp.addEventListener : inp.attachEvent;

					function addEventListenerWrapper(type, listener) {
						// Simulate a 'down arrow' keypress on hitting 'return' when no pac suggestion is selected,
						// and then trigger the original listener.
						
						if (type == "keydown") {
							var orig_listener = listener;
							listener = function (event) {
								var suggestion_selected = jQuery(".pac-item-selected").length > 0;
								if (event.which == 9 || event.which == 13 && !suggestion_selected && ms_all__rawValue) {
									var simulated_downarrow = jQuery.Event("keydown", {keyCode:40, which:40})
									orig_listener.apply(inp, [simulated_downarrow]);													
									
									if(ms_all__google_autocomplete)
										google_autocomplete_selected=1;
								}

								orig_listener.apply(inp, [event]);
							};
							
						} /* else if (type == "blur") {
							var orig_listener = listener;
							listener = function (event) {
								var suggestion_selected = jQuery(".pac-item-selected").length > 0;
								if (!suggestion_selected) {
									var simulated_downarrow = jQuery.Event("keydown", {keyCode:40, which:40})
									orig_listener.apply(inp, [simulated_downarrow]);													
									
									if(ms_all__google_autocomplete)
										google_autocomplete_selected=1;
								}

								orig_listener.apply(inp, [event]);
							};
							
							console.log("xxx: " + type);
						} *

						// add the modified listener
						_addEventListener.apply(inp, [type, listener]);
					}

					if (inp.addEventListener)
					inp.addEventListener = addEventListenerWrapper;
					else if (inp.attachEvent)
					inp.attachEvent = addEventListenerWrapper;

				})(input);
				
				//// Ensuring that only Google Maps adresses are inputted
				function selectFirstAddress (input) {
					// google.maps.event.trigger(autocomplete, 'keydown', {keyCode:40});
					// google.maps.event.trigger(autocomplete, 'keydown', {keyCode:13});
					google.maps.event.trigger(input, 'focus', {});
					google.maps.event.trigger(input, 'keydown', {
						keyCode: 13
					});
					
					if(ms_all__google_autocomplete)
						google_autocomplete_selected=1;
				}

				// Select first address on focusout
				$('body').on('blur', '#zpa-all-input input', function() {
					// selectFirstAddress(this);
				});

				// Select first address on enter in input
				$('body').on('keydown', '#zpa-all-input input', function(e) {
					if (e.keyCode == 13) {
						// selectFirstAddress(this);
					}
				});

				function initAutocomplete() {
					var options = {
						types: ['geocode'],  // or '(cities)' if that's what you want?
						componentRestrictions: {country: ["us","ca","in"]},
					};
					// Create the autocomplete object, restricting the search to geographical
					// location types.
					autocomplete = new google.maps.places.Autocomplete(
					/** @type {!HTMLInputElement} *(input), options);

					// When the user selects an address from the dropdown, populate the address
					// fields in the form.
					autocomplete.addListener('place_changed', fillInAddress);
					
					/* google.maps.event.addDomListener(input, 'blur', function () {
						var value = input.value;
						console.log(value);
						$('#zpa-all-input input').val(value);
						google.maps.event.trigger(autocomplete, 'focus');
						google.maps.event.trigger(autocomplete, 'keydown', {
							keyCode: 13
						});
					}) *
				}

				function fillInAddress() {

					var saved_values={};

					// Get the place details from the autocomplete object.
					var place = autocomplete.getPlace();

					if(!place.address_components)
					return;

					for (var component in componentForm) {
						document.getElementById(component).value = '';
						document.getElementById(component).disabled = false;
					}

					// Get each component of the address from the place details
					// and fill the corresponding field on the form.
					for (var i = 0; i < place.address_components.length; i++) {
						var addressType = place.address_components[i].types[0];
						if (componentForm[addressType]) {
							var val = place.address_components[i][componentForm[addressType]];
							var field = jQuery('#'+addressType);
							var key = addressType;
							document.getElementById(addressType).value = val;
							// saved_values.push({key:val});
							saved_values[addressType]=val;
						}
					}
					var json = JSON.stringify(saved_values);
					jQuery('#zpa-all-input-address-values').val(json);
					jQuery('#zpa-all-input-address').val(place.formatted_address);
					
					var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
					
					if(!data.length){
						
						var val = place.formatted_address;
						var prefix = 'addr_';
						var code = prefix + 'selected_address';							
						var label = val;	
						var push = {group:'Address', name: label, code: code, type: 'address' };
						if(val){
							ms_all.setValue([push]);
						}
					}
					
					google_autocomplete_selected=0;
				}

				initAutocomplete();
				
				<?php if($states): ?>
				jQuery(input).on('input',function(){				
					if(ms_all__google_autocomplete){
						var str = input.value;
						var prefix = '<?php echo $states; ?> | ';
						
						if(str.indexOf(prefix) == 0) {
							// console.log(input.value);
						} else if( str + ' ' === prefix ){
							input.value = "";
						}else {
							if (prefix.indexOf(str) >= 0) {
								input.value = prefix;
							} else {
								input.value = prefix+str;
							}
						}
					}
				});
				<?php endif; ?>
				
				/* auto select dropdown function (ms_all) *
				var ms_all__afterDelete=0;
				var ms_all__recentSelected=[];
				var ms_all__currentSelected=[];
				
				//get user input keywords
				$(ms_all).on('keyup', function(){
					ms_all__rawValue = ms_all.getRawValue();
					ms_all__afterDelete=0;
					
					//set data on 
					if(ms_all__rawValue.length===1)
						ms_all.setData(all);
				});
				
				//get current selected value
				$(ms_all).on('focus', function(c){
					ms_all__recentSelected = ms_all.getValue();
					ms_all__afterDelete=1;
					
					//auto open dropdown
					if(tenants) ms_all.expand();
				});
				
				//select value on blur / mouse leave
				$(ms_all).on('blur', function(c, e){
					var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_all__currentSelected = ms_all.getValue();
					
					// console.log(ms_all__recentSelected);
					// console.log(ms_all__currentSelected);
					// console.log('ms_all__rawValue: ' + ms_all__rawValue);
					// console.log('ms_all__afterDelete: ' + ms_all__afterDelete);
					
					// if( ms_all__rawValue!="" && ms_all__currentSelected.length && ! ms_all__afterDelete && (ms_all__recentSelected.length == ms_all__currentSelected.length || !ms_all__recentSelected.length) ){
					// if( ms_all__rawValue!="" && ! ms_all__afterDelete && ms_all__recentSelected.length == ms_all__currentSelected.length ){
					if( ms_all__rawValue!="" && ! ms_all__afterDelete ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_all.setValue([firstData.code]);
						}else if(!ms_all__google_autocomplete && !google_autocomplete_selected){
							var val = ms_all__rawValue;
							var prefix = 'alstid_';
							var code = prefix + val;							
							var label = 'MLS#' + val;
							var push = {group:'Mls', name: label, code: code, type: 'mls' };
							ms_all.setValue([push]);
						}
						
						ms_all__afterDelete=0;
						
						$('#zpa-all-input input').focus();
					}
					
					//reset data to tenants
					if(tenants) ms_all.setData(tenants);
				});
				
				//select value on enter key pressed
				$(ms_all).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_all__rawValue!=""){
							
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_all.setValue([firstData.code]);
							}else if(!ms_all__google_autocomplete && !google_autocomplete_selected && ms_all__rawValue.indexOf(" ") < 0){
								var val = ms_all__rawValue;
								var prefix = 'alstid_';
								var code = prefix + val;							
								var label = 'MLS#' + val;
								var push = {group:'Mls', name: label, code: code, type: 'mls' };
								ms_all.setValue([push]);
							}
						}
						
						ms_all.collapse();
						
						$('#zpa-all-input input').focus();
					}
				});				
				
				//select value on tab key pressed
				$('#zpa-all-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_all__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_all.setValue([firstData.code]);
							}else if(!ms_all__google_autocomplete && !google_autocomplete_selected){
								var val = ms_all__rawValue;
								var prefix = 'alstid_';
								var code = prefix + val;							
								var label = 'MLS#' + val;
								var push = {group:'Mls', name: label, code: code, type: 'mls' };
								ms_all.setValue([push]);
							}
						}
						
						ms_all.empty();
						$('#zpa-all-input input').focus();
						
						ms_all.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_all).on('selectionchange', function(e,m,r){					
					
					ms_all.empty();
					ms_all__rawValue="";
					
					if(r.length==ms_all__recentSelected.length && r.length==ms_all__currentSelected.length){
						ms_all__afterDelete=1;
					}else{
						ms_all__afterDelete=0;
					}
				});					 
				
				/* auto select dropdown function (ms_town) *
				var ms_town__rawValue='';
				var ms_town__afterDelete=0;
				var ms_town__recentSelected=[];
				var ms_town__currentSelected=[];
				
				//get user input keywords
				$(ms_town).on('keyup', function(){
					ms_town__rawValue = ms_town.getRawValue();
					ms_town__afterDelete=0;
					
					//set data on 
					if(ms_town__rawValue.length===1)
						ms_town.setData(towns);
				});
				
				//get current selected value
				$(ms_town).on('focus', function(c){
					ms_town__recentSelected = ms_town.getValue();
					ms_town__afterDelete=1;
					
					//auto open dropdown
					if(tenants) ms_town.expand();
				});
				
				//select value on blur / mouse leave
				$(ms_town).on('blur', function(c, e){
					var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_town__currentSelected = ms_town.getValue();
					
					if( ms_town__rawValue!="" && ! ms_town__afterDelete && ms_town__recentSelected.length == ms_town__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_town.setValue([firstData.code]);
						}
						
						ms_town__afterDelete=0;
					}
					
					//reset data to tenants
					if(tenants) ms_town.setData(tenants);
				});
				
				//select value on enter key pressed
				$(ms_town).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_town__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_town.setValue([firstData.code]);
							}
						}
						
						ms_town.collapse();
					}
				});
				
				//select value on tab key pressed
				$('#zpa-town-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_town__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_town.setValue([firstData.code]);
							}
						}
						
						ms_town.empty();
						$('#zpa-town-input input').focus();
						
						ms_town.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_town).on('selectionchange', function(e,m,r){
					
					ms_town.empty();
					ms_town__rawValue="";
					
					if(r.length==ms_town__recentSelected.length && r.length==ms_town__currentSelected.length){
						ms_town__afterDelete=1;
					}else{
						ms_town__afterDelete=0;
					}
				});
				
				/* auto select dropdown function (ms_area) *
				var ms_area__rawValue='';
				var ms_area__afterDelete=0;
				var ms_area__recentSelected=[];
				var ms_area__currentSelected=[];
				
				//get user input keywords
				$(ms_area).on('keyup', function(){
					ms_area__rawValue = ms_area.getRawValue();
					ms_area__afterDelete=0;
					
					//set data on 
					if(ms_area__rawValue.length===1)
						ms_area.setData(areas);
				});
				
				//get current selected value
				$(ms_area).on('focus', function(c){
					ms_area__recentSelected = ms_area.getValue();
					ms_area__afterDelete=1;
					
					//auto open dropdown
					if(tenants) ms_area.expand();
				});
				
				//select value on blur / mouse leave
				$(ms_area).on('blur', function(c, e){
					var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_area__currentSelected = ms_area.getValue();
					
					if( ms_area__rawValue!="" && ! ms_area__afterDelete && ms_area__recentSelected.length == ms_area__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_area.setValue([firstData.code]);
						}
						
						ms_area__afterDelete=0;
					}
					
					//reset data to tenants
					if(tenants) ms_area.setData(tenants);
				});
				
				//select value on enter key pressed
				$(ms_area).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_area__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_area.setValue([firstData.code]);
							}
						}
						
						ms_area.collapse();
					}
				});
				
				//select value on tab key pressed
				$('#zpa-areas-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_area__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_area.setValue([firstData.code]);
							}
						}
						
						ms_area.empty();
						$('#zpa-areas-input input').focus();
						
						ms_area.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_area).on('selectionchange', function(e,m,r){
					
					ms_area.empty();
					ms_area__rawValue="";
					
					if(r.length==ms_area__recentSelected.length && r.length==ms_area__currentSelected.length){
						ms_area__afterDelete=1;
					}else{
						ms_area__afterDelete=0;
					}
				});
				
				/* auto select dropdown function (ms_county) *
				var ms_county__rawValue='';
				var ms_county__afterDelete=0;
				var ms_county__recentSelected=[];
				var ms_county__currentSelected=[];
				
				//get user input keywords
				$(ms_county).on('keyup', function(){
					ms_county__rawValue = ms_county.getRawValue();
					ms_county__afterDelete=0;
				});
				
				//get current selected value
				$(ms_county).on('focus', function(c){
					ms_county__recentSelected = ms_county.getValue();
					ms_county__afterDelete=1;
				});
				
				//select value on blur / mouse leave
				$(ms_county).on('blur', function(c, e){
					var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_county__currentSelected = ms_county.getValue();
					
					if( ms_county__rawValue!="" && ! ms_county__afterDelete && ms_county__recentSelected.length == ms_county__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_county.setValue([firstData.code]);
						}
						
						ms_county__afterDelete=0;
					}
				});
				
				//select value on enter key pressed
				$(ms_county).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_county__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_county.setValue([firstData.code]);
							}
						}
						
						ms_county.collapse();
					}
				});
				
				//select value on tab key pressed
				$('#zpa-county-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_county__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_county.setValue([firstData.code]);
							}
						}
						
						ms_county.empty();
						$('#zpa-county-input input').focus();
						
						ms_county.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_county).on('selectionchange', function(e,m,r){
					
					ms_county.empty();
					ms_county__rawValue="";
					
					if(r.length==ms_county__recentSelected.length && r.length==ms_county__currentSelected.length){
						ms_county__afterDelete=1;
					}else{
						ms_county__afterDelete=0;
					}
				});
				
				/* auto select dropdown function (ms_zip) *
				var ms_zip__rawValue='';
				var ms_zip__afterDelete=0;
				var ms_zip__recentSelected=[];
				var ms_zip__currentSelected=[];
				
				//get user input keywords
				$(ms_zip).on('keyup', function(){
					ms_zip__rawValue = ms_zip.getRawValue();
					ms_zip__afterDelete=0;
				});
				
				//get current selected value
				$(ms_zip).on('focus', function(c){
					ms_zip__recentSelected = ms_zip.getValue();
					ms_zip__afterDelete=1;
				});
				
				//select value on blur / mouse leave
				$(ms_zip).on('blur', function(c, e){
					var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_zip__currentSelected = ms_zip.getValue();
					
					if( ms_zip__rawValue!="" && ! ms_zip__afterDelete && ms_zip__recentSelected.length == ms_zip__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_zip.setValue([firstData.code]);
						}
						
						ms_zip__afterDelete=0;
					}
				});
				
				//select value on enter key pressed
				$(ms_zip).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_zip__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_zip.setValue([firstData.code]);
							}
						}
						
						ms_zip.collapse();
					}
				});
				
				//select value on tab key pressed
				$('#zpa-zipcode-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_zip__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_zip.setValue([firstData.code]);
							}
						}
						
						ms_zip.empty();
						$('#zpa-zipcode-input input').focus();
						
						ms_zip.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_zip).on('selectionchange', function(e,m,r){
					
					ms_zip.empty();
					ms_zip__rawValue="";
					
					if(r.length==ms_zip__recentSelected.length && r.length==ms_zip__currentSelected.length){
						ms_zip__afterDelete=1;
					}else{
						ms_zip__afterDelete=0;
					}
				});
			});
		</script>
		<script>  
		  <?php
		  $rb = ZipperagentGlobalFunction()->zipperagent_rb();
		  $states=isset($rb['web']['states'])?$rb['web']['states']:'';
		  $states=array_map('trim', explode(',', $states));
		  $states=sizeof($states)===1?implode(' | ',$states):'';
		  ?>
		  jQuery(document).ready(function(){
			  var placeSearch, autocomplete;
			  var componentForm = {
				street_number: 'short_name',
				route: 'long_name',
				locality: 'long_name',
				administrative_area_level_1: 'short_name',
				// country: 'short_name',
				postal_code: 'short_name'
			  };
			  var input = document.getElementById('zpa-area-address');
			  
			  (function pacSelectFirst(inp){
				// store the original event binding function
				var _addEventListener = (inp.addEventListener) ? inp.addEventListener : inp.attachEvent;

				function addEventListenerWrapper(type, listener) {
					// Simulate a 'down arrow' keypress on hitting 'return' when no pac suggestion is selected,
					// and then trigger the original listener.

					if (type == "keydown") {
						var orig_listener = listener;
						listener = function (event) {
							var suggestion_selected = jQuery(".pac-item-selected").length > 0;
							if (event.which == 9 || event.which == 13 && !suggestion_selected) {
								var simulated_downarrow = jQuery.Event("keydown", {keyCode:40, which:40})
								orig_listener.apply(inp, [simulated_downarrow]);													
								
								if(ms_all__google_autocomplete)
									google_autocomplete_selected=1;
							}

							orig_listener.apply(inp, [event]);
						};
					}

					// add the modified listener
					_addEventListener.apply(inp, [type, listener]);
				}

				if (inp.addEventListener)
				inp.addEventListener = addEventListenerWrapper;
				else if (inp.attachEvent)
				inp.attachEvent = addEventListenerWrapper;

			  })(input);
			  
			  function initAutocomplete() {
				var options = {
					types: ['geocode'],  // or '(cities)' if that's what you want?
					componentRestrictions: {country: ["us","ca","in"]},
				};
				// Create the autocomplete object, restricting the search to geographical
				// location types.
				autocomplete = new google.maps.places.Autocomplete(
					/** @type {!HTMLInputElement} *(input), options);

				// When the user selects an address from the dropdown, populate the address
				// fields in the form.
				autocomplete.addListener('place_changed', fillInAddress);
			  }

			  function fillInAddress() {
				// Get the place details from the autocomplete object.
				var place = autocomplete.getPlace();
				
				for (var component in componentForm) {
				  document.getElementById(component).value = '';
				  document.getElementById(component).disabled = false;
				}

				// Get each component of the address from the place details
				// and fill the corresponding field on the form.
				for (var i = 0; i < place.address_components.length; i++) {
				  var addressType = place.address_components[i].types[0];
				  if (componentForm[addressType]) {
					var val = place.address_components[i][componentForm[addressType]];
					var field = jQuery('#'+addressType);
					document.getElementById(addressType).value = val;
				  }
				}
			  }

			  // Bias the autocomplete object to the user's geographical location,
			  // as supplied by the browser's 'navigator.geolocation' object.
			  function geolocate() {
				if (navigator.geolocation) {
				  navigator.geolocation.getCurrentPosition(function(position) {
					var geolocation = {
					  lat: position.coords.latitude,
					  lng: position.coords.longitude
					};
					var circle = new google.maps.Circle({
					  center: geolocation,
					  radius: position.coords.accuracy
					});
					autocomplete.setBounds(circle.getBounds());
				  });
				}
			  }
			  
			  jQuery('#zpa-area-address').on('focus', function(){
				  geolocate();
			  });
			  
			  initAutocomplete();
			  
			  <?php if($states): ?>
			  jQuery(input).on('input',function(){
				var str = input.value;
				var prefix = '<?php echo $states; ?> | ';
				if(str.indexOf(prefix) == 0) {
					// console.log(input.value);
				} else {
					if (prefix.indexOf(str) >= 0) {
						input.value = prefix;
					} else {
						input.value = prefix+str;
					}
				}

			  });
			  <?php endif; ?>
		  });
		  
		  jQuery(document).ready(function(){
			  var placeSearch, autocomplete;
			  var input = document.getElementById('zpa-school');
			  
			  (function pacSelectFirst(inp){
				// store the original event binding function
				var _addEventListener = (inp.addEventListener) ? inp.addEventListener : inp.attachEvent;

				function addEventListenerWrapper(type, listener) {
					// Simulate a 'down arrow' keypress on hitting 'return' when no pac suggestion is selected,
					// and then trigger the original listener.

					if (type == "keydown") {
						var orig_listener = listener;
						listener = function (event) {
							var suggestion_selected = jQuery(".pac-item-selected").length > 0;
							if (event.which == 9 || event.which == 13 && !suggestion_selected) {
								var simulated_downarrow = jQuery.Event("keydown", {keyCode:40, which:40})
								orig_listener.apply(inp, [simulated_downarrow]);													
								
								if(ms_all__google_autocomplete)
									google_autocomplete_selected=1;
							}

							orig_listener.apply(inp, [event]);
						};
					}

					// add the modified listener
					_addEventListener.apply(inp, [type, listener]);
				}

				if (inp.addEventListener)
				inp.addEventListener = addEventListenerWrapper;
				else if (inp.attachEvent)
				inp.attachEvent = addEventListenerWrapper;

			  })(input);
			  
			  function initAutocomplete() {
				var options = {
					types: ['establishment'],  // or '(cities)' if that's what you want?
					componentRestrictions: {country: ["us","ca","in"]},
				};
				// Create the autocomplete object, restricting the search to geographical
				// location types.
				autocomplete = new google.maps.places.Autocomplete(
					/** @type {!HTMLInputElement} *(input), options);

				// When the user selects an address from the dropdown, populate the address
				// fields in the form.
				autocomplete.addListener('place_changed', fillInAddress);
			  }

			  function fillInAddress() {
				// Get the place details from the autocomplete object.
				var place = autocomplete.getPlace();
				
				var lat=place['geometry']['location'].lat();
				var lng=place['geometry']['location'].lng();
				
				jQuery('#lat').val(lat);
				jQuery('#lng').val(lng);
			  }

			  // Bias the autocomplete object to the user's geographical location,
			  // as supplied by the browser's 'navigator.geolocation' object.
			  function geolocate() {
				if (navigator.geolocation) {
				  navigator.geolocation.getCurrentPosition(function(position) {
					var geolocation = {
					  lat: position.coords.latitude,
					  lng: position.coords.longitude
					};
					var circle = new google.maps.Circle({
					  center: geolocation,
					  radius: position.coords.accuracy
					});
					autocomplete.setBounds(circle.getBounds());
				  });
				}
			  }
			  
			  jQuery('#zpa-school').on('focus', function(){
				  geolocate();
			  });
			  
			  initAutocomplete();
			  
			  <?php if($states): ?>
			  jQuery(input).on('input',function(){
				var str = input.value;
				var prefix = '<?php echo $states; ?> | ';
				if(str.indexOf(prefix) == 0) {
					// console.log(input.value);
				} else {
					if (prefix.indexOf(str) >= 0) {
						input.value = prefix;
					} else {
						input.value = prefix+str;
					}
				}

			  });
			  <?php endif; ?>
		  });
		</script>
	<?php
	}
} */

if( ! function_exists('global_new_omnibar_script_v2') ){
	function global_new_omnibar_script_v2($auto_submit=0, $direct=0, $el=''){
		
		if($direct):
		$plugin_data = get_plugin_data( ABSPATH . "/wp-content/plugins/zipperagent/zipperagent.php", false, false );
		?>
		<script defer type="text/javascript" src="https://app.zipperagent.com/za-jslib/za-jsutil.min.js"></script>
		<script defer type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/zipperagent.js?ver=" . $plugin_data['Version']; ?>"></script><?php
		endif;
		?>
		<script>		
			jQuery(document).ready(function($) {
				
				
				var timer;
				
				<?php 
				$data = get_autocomplete_data();
				
				$towns = isset($data->towns)?$data->towns:array();
				$areas = isset($data->areas)?$data->areas:array();
				$counties = isset($data->counties)?$data->counties:array();
				$zipcodes = isset($data->zipcodes)?$data->zipcodes:array();
				$tenants = isset($data->tenants)?$data->tenants:array();
				$lakes = populate_lakes_with_option();
				?>
				
				var direct=<?php echo $direct; ?>;
				
				var towns = <?php echo json_encode($towns); ?>;
				var areas = <?php echo json_encode($areas); ?>;
				var counties = <?php echo json_encode($counties); ?>;
				var lakes = <?php echo json_encode($lakes); ?>;
				var zipcodes = <?php echo json_encode($zipcodes); ?>;
				var all = $.merge(towns, areas);
					all = $.merge(all, counties);
					all = $.merge(all, lakes);
					all = $.merge(all, zipcodes);
					
				var tenants = <?php echo json_encode($tenants); ?>;
				
				var ms_town = $('<?php echo $el; ?> #zpa-town-input').magicSuggest({
					
					data: tenants ? tenants : towns,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + data.name + '</div>';
					},				
				});
				
				var ms_area = $('<?php echo $el; ?> #zpa-areas-input').magicSuggest({
					
					data: tenants ? tenants : areas,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + data.name + '</div>';
					},				
				});
				
				var ms_county = $('<?php echo $el; ?> #zpa-county-input').magicSuggest({
					
					data: counties,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + data.name + '</div>';
					},				
				});
				
				var ms_lake = $('<?php echo $el; ?> #zpa-lake-input').magicSuggest({
					
					data: lakes,
					valueField: 'value',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + data.name + '</div>';
					},				
				});
				
				var ms_zip = $('<?php echo $el; ?> #zpa-zipcode-input').magicSuggest({
					
					data: zipcodes,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + data.name + '</div>';
					},				
				});
				var ms_all = $('<?php echo $el; ?> #zpa-all-input').magicSuggest({
					
					data: tenants ? tenants : all,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						
						var name = data.name;
						
						if( data.type == 'listno' ){
							name = 'MLS#'+data.name;
						}
						
						return '<div class="name">' + name + '</div>';
					},				
				});	
				
				var ms_school = $('<?php echo $el; ?> #zpa-school-input').magicSuggest({
					
					data: null,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + data.name + '</div>';
					},				
				});
				
				var ms_school3 = $('<?php echo $el; ?> #zpa-school3-input').magicSuggest({
					
					data: null,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + data.name + '</div>';
					},				
				});
				
				var ms_address = $('<?php echo $el; ?> #zpa-address-key').magicSuggest({
					
					data: null,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + data.name + '</div>';
					},				
				});
				
				var ms_listid = $('<?php echo $el; ?> #zpa-listid-input').magicSuggest({
					
					data: null,
					valueField: 'code',
					displayField: 'name',
					hideTrigger: true,
					groupBy: 'group',
					// maxSelection: 1,
					allowFreeEntries: false,
					minChars: 3,
					renderer: function(data){
						return '<div class="location">' +
							'<div class="name '+ data.type +'">' + data.name + '</div>' +
							'<div style="clear:both;"></div>' +
						'</div>';
					},
					selectionRenderer: function(data){
						return '<div class="name">' + 'MLS#'+data.name + '</div>';
					},				
				});
				
				/* magicSuggest actions */
				
				<?php if($auto_submit): ?>
				//auto submit on change
				$(ms_all).on('selectionchange', function(e,m){
					setTimeout(function() {					
						m.container.parents('<?php echo $el; ?> #omnibar-wrap form.omnibar').submit();						
					}, 500);
				});
				$(ms_county).on('selectionchange', function(e,m){						
					setTimeout(function() {					
						m.container.parents('<?php echo $el; ?> #omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				$(ms_area).on('selectionchange', function(e,m){						
					setTimeout(function() {					
						m.container.parents('<?php echo $el; ?> #omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				$(ms_town).on('selectionchange', function(e,m){		
					setTimeout(function() {			
						m.container.parents('<?php echo $el; ?> #omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				$(ms_zip).on('selectionchange', function(e,m){						
					setTimeout(function() {					
						m.container.parents('<?php echo $el; ?> #omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				$(ms_listid).on('selectionchange', function(e,m){						
					setTimeout(function() {					
						m.container.parents('<?php echo $el; ?> #omnibar-wrap form.omnibar').submit();
					}, 500);
				});
				<?php endif; ?>
				
				
				$(ms_all).on('selectionchange', function(e,m){		
					var values = this.getValue();
					var value, check, name, add;
					var fields = $('.field-wrap .field-section.all .input-fields');
					
					fields.html(''); //clear all fields
					
					for(i=0; i<values.length; i++){
						
						var is_location=0;
						var is_aflladdr=0;
						var is_lake=0;
						var is_address=0;
						var is_mls=0;
						var is_add=0;
						value  = values[i];
						
						if (value.toLowerCase().indexOf("atwns_") >= 0){ //town
							is_location=1;
						}else if (value.toLowerCase().indexOf("aars_") >= 0){ //area
							is_location=1;
						}else if (value.toLowerCase().indexOf("acnty_") >= 0){ //county
							is_location=1;
						}else if (value.toLowerCase().indexOf("azip_") >= 0){ //zip
							is_location=1;
						}else if (value.toLowerCase().indexOf("aflladdr_") >= 0){ //crm address
							is_aflladdr=1;
						}else if (value.toLowerCase().indexOf("hschl_") >= 0){ //high school
							is_location=1;
						}else if (value.toLowerCase().indexOf("mschl_") >= 0){ //middle school
							is_location=1;
						}else if (value.toLowerCase().indexOf("gschl_") >= 0){ //grade school
							is_location=1;
						}else if (value.toLowerCase().indexOf("aschdt_") >= 0){ //grade school
							is_location=1;
						}else if (value.toLowerCase().indexOf("alkchnnm_") >= 0){ //lake
							is_lake=1;
						}else if (value.toLowerCase().indexOf("addr_") >= 0){ //google address
							is_address=1;
						}else if (value.toLowerCase().indexOf("alstid_") >= 0){ //mls
							is_mls=1;
						}
						
						if(is_location){							
							name = 'location[]';
							is_add=1;
						}else if(is_aflladdr){							
							name = 'aflladdr';
							linked_name = name;
							value = value.replace('aflladdr_','');
							is_add=1;
						}else if(is_lake){
							name = 'alkChnNm[]';
							linked_name = value.replace('alkchnnm_','');
							value = value.replace('alkchnnm_','');
							is_add=1;
						}else if(is_address){
							name = '';
							is_add=0;
						}else if(is_mls){
							name = 'alstid[]';
							value = value.replace('alstid_','');
							is_add=1;
						}
						
						if(is_add){
							add = '<input type="hidden" name="'+ name +'" value="'+ value +'" />';
							fields.append(add);
						}else if(is_address){
							var saved_address = jQuery.parseJSON(jQuery('<?php echo $el; ?> #zpa-all-input-address-values').val());
							if(saved_address){
								$.each(saved_address, function(key, value) {
									jQuery('.field-section.addr #'+ key).val(value);
									jQuery('.field-section.addr #'+ key).prop('disabled',false);
								});
							}
						}
					}
				});
				
				$(ms_listid).on('selectionchange', function(e,m){		
					var values = this.getValue();
					var value, check, name, add;
					var fields = $('.field-wrap .field-section.all .input-fields');
					
					fields.html(''); //clear all fields
					
					for(i=0; i<values.length; i++){
						
						value  = values[i];
						
						name = 'alstid[]';
						value = value.replace('alstid_','');
						
						add = '<input type="hidden" name="'+ name +'" value="'+ value +'" />';
						fields.append(add);
					}
				});
				
				/* jQuery('body').on( 'change', '.field-wrap .field-section.listid #listid', function(){
					 
					var values=jQuery.unique(jQuery(this).val().split(','));
					var name='alstid[]';
					var value, add;
					var fields = $('.field-wrap .field-section.listid .input-fields');
					
					fields.html(''); //clear all fields
					for(i=0; i<values.length; i++){		
						value=jQuery.trim(values[i]);
						
						if(!value) continue;
						
						add = '<input type="hidden" name="'+ name +'" value="'+ value +'" />';
						fields.append(add);
					};
				}); */

				jQuery(ms_school).on('keyup', function(event){
					
					event.preventDefault();
					
					clearTimeout(timer);
					//create a new timer with a delay of 0.5 seconds, if the keyup is fired before the 2 secs then the timer will be cleared
					timer = setTimeout(function () {
						//this will be executed if there is a gap of 0.5 seconds between 2 keyup events
						var inputText = ms_school.getRawValue();
						
						console.time('populate schools');
						jQuery.ajax({
							type: 'POST',
							dataType : 'json',
							url: zipperagent.ajaxurl,
							data: {
								'key': inputText,
								'action': 'school_options',
							},
							success: function( response ) {         
								if( response ){
									var data = cleanDataArray(response.schools,inputText);
									ms_school.setData(data);
									ms_school.expand();
								}
								console.timeEnd('populate schools');
							},
							error: function(){
								console.timeEnd('populate schools');
							}
						});
					}, 300);
				});
				
				var xhr_school3;
				jQuery(ms_school3).on('keyup', function(event){
					
					if(! direct){
						if(xhr_school3 && xhr_school3.readyState != 4){
							xhr_school3.abort();
						}
						
						event.preventDefault();
						
						clearTimeout(timer);
						//create a new timer with a delay of 0.5 seconds, if the keyup is fired before the 2 secs then the timer will be cleared
						timer = setTimeout(function () {
							//this will be executed if there is a gap of 0.5 seconds between 2 keyup events
							var inputText = ms_school3.getRawValue();
							var requests = {};
							var element = jQuery(ms_school3.container[0]).parents('#zpa-main-search-form, #searchProfile');
							jQuery.map( element.serializeArray(), function( el, i ) {
								requests[el.name]=el.value
							});
							
							console.time('populate schools');
							xhr_school3 = jQuery.ajax({
								type: 'POST',
								dataType : 'json',
								url: zipperagent.ajaxurl,
								data: {
									'key': inputText,
									'action': 'school3_options',
									'requests': requests,
								},
								success: function( response ) {         
									if( response ){
										var data = cleanDataArray(response.schools,inputText);
										ms_school3.setData(data);
										ms_school3.expand();
									}
									console.timeEnd('populate schools');
								},
								error: function(){
									console.timeEnd('populate schools');
								}
							});
						}, 300);
					}else{
						console.time('populate schools');
						
						var parm=[];
						var subdomain=zppr.data.root.web.subdomain;
						var customer_key=zppr.data.root.web.authorization.consumer_key;
						var ps=5;
						var element = jQuery(ms_school3.container[0]).parents('#zpa-main-search-form, #searchProfile');
						var requests = zppr.get_form_inputs(element);
						var params = zppr.generate_api_params(requests);
						var crit = params.crit;
						var response=false;
						var gs=1;
						var ms=1;
						var hs=1;
						var sd=1;
						var addr=0;
						var mls=0;
						var inputText = ms_school3.getRawValue();
						parm.push(9,subdomain,customer_key,crit,inputText,ps,gs,ms,hs,sd,addr,mls);
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {

							if (this.readyState == 4 ) {
								if(this.status == 200){
								
									response=JSON.parse(this.responseText);
									if(response.responseCode===200){
										
										var data = cleanDataArray(zppr.populate_schools(response),inputText);
										ms_school3.setData(data);
										ms_school3.expand();
										
										console.timeEnd('populate schools');
									}
									
								}else {
									console.log("status = " + status + " received");
								}
							} else {
								console.log("status = " + status + " received");
							}
						};
						xhttp.open("GET", guxx(parm), true);
						xhttp.send();
					}
				});
				
				var xhr_address;
				jQuery(ms_address).on('keyup', function(event){
					
					
					if(! direct){
						if(xhr_address && xhr_address.readyState != 4){
							xhr_address.abort();
						}
						
						event.preventDefault();
						
						clearTimeout(timer);
						//create a new timer with a delay of 0.5 seconds, if the keyup is fired before the 2 secs then the timer will be cleared
						timer = setTimeout(function () {
							//this will be executed if there is a gap of 0.5 seconds between 2 keyup events
							var inputText = ms_address.getRawValue();
							var requests = {};
							var element = jQuery(ms_address.container[0]).parents('#zpa-main-search-form, #searchProfile');							
							jQuery.map( element.serializeArray(), function( el, i ) {
								requests[el.name]=el.value
							});
							
							console.time('populate address');
							xhr_address = jQuery.ajax({
								type: 'POST',
								dataType : 'json',
								url: zipperagent.ajaxurl,
								data: {
									'key': inputText,
									'action': 'address_options',
									'requests': requests,
								},
								success: function( response ) {         
									if( response ){
										var data = cleanDataArray(response.addresses,inputText);
										ms_address.setData(data);
										ms_address.expand();
									}
									console.timeEnd('populate address');
								},
								error: function(){
									console.timeEnd('populate address');
								}
							});
						}, 300);
					}else{
						console.time('populate address');
						
						var parm=[];
						var subdomain=zppr.data.root.web.subdomain;
						var customer_key=zppr.data.root.web.authorization.consumer_key;
						var ps=10;
						var element = jQuery(ms_address.container[0]).parents('#zpa-main-search-form, #searchProfile');
						var requests = zppr.get_form_inputs(element);
						var params = zppr.generate_api_params(requests);
						var crit = params.crit;
						var response=false;
						var gs=0;
						var ms=0;
						var hs=0;
						var sd=0;
						var addr=1;
						var mls=0;
						var inputText = ms_address.getRawValue();
						parm.push(9,subdomain,customer_key,crit,inputText,ps,gs,ms,hs,sd,addr,mls);
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {

							if (this.readyState == 4 ) {
								if(this.status == 200){
								
									response=JSON.parse(this.responseText);
									if(response.responseCode===200){
										
										var data = cleanDataArray(zppr.populate_addresses(response),inputText);
										ms_address.setData(data);
										ms_address.expand();
										
										console.timeEnd('populate address');
									}
									
								}else {
									console.log("status = " + status + " received");
								}
							} else {
								console.log("status = " + status + " received");
							}
						};
						xhttp.open("GET", guxx(parm), true);
						xhttp.send();
					}
				});
				
				var xhr_listid;
				jQuery(ms_listid).on('keyup', function(event){
					
					
					if(! direct){
						if(xhr_listid && xhr_listid.readyState != 4){
							xhr_listid.abort();
						}
						
						event.preventDefault();
						
						clearTimeout(timer);
						//create a new timer with a delay of 0.5 seconds, if the keyup is fired before the 2 secs then the timer will be cleared
						timer = setTimeout(function () {
							//this will be executed if there is a gap of 0.5 seconds between 2 keyup events
							var inputText = ms_listid.getRawValue();
							var requests = {};
							var element = jQuery(ms_listid.container[0]).parents('#zpa-main-search-form, #searchProfile');							
							jQuery.map( element.serializeArray(), function( el, i ) {
								requests[el.name]=el.value
							});
							
							console.time('populate listid');
							xhr_listid = jQuery.ajax({
								type: 'POST',
								dataType : 'json',
								url: zipperagent.ajaxurl,
								data: {
									'key': inputText,
									'action': 'listid_options',
									'requests': requests,
								},
								success: function( response ) {         
									if( response ){
										var data = cleanDataArray(response.listids,inputText);
										ms_listid.setData(data);
										ms_listid.expand();
									}
									console.timeEnd('populate listid');
								},
								error: function(){
									console.timeEnd('populate listid');
								}
							});
						}, 300);
					}else{
						console.time('populate listid');
						
						var parm=[];
						var subdomain=zppr.data.root.web.subdomain;
						var customer_key=zppr.data.root.web.authorization.consumer_key;
						var ps=10;
						var element = jQuery(ms_listid.container[0]).parents('#zpa-main-search-form, #searchProfile');
						var requests = zppr.get_form_inputs(element);
						var params = zppr.generate_api_params(requests);
						var crit = params.crit;
						var response=false;
						var gs=0;
						var ms=0;
						var hs=0;
						var sd=0;
						var addr=0;
						var mls=1;
						var inputText = ms_listid.getRawValue();
						parm.push(9,subdomain,customer_key,crit,inputText,ps,gs,ms,hs,sd,addr,mls);
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {

							if (this.readyState == 4 ) {
								if(this.status == 200){
								
									response=JSON.parse(this.responseText);
									if(response.responseCode===200){
										
										var data = cleanDataArray(zppr.populate_listids(response),inputText);
										ms_listid.setData(data);
										ms_listid.expand();
										
										console.timeEnd('populate listid');
									}
									
								}else {
									console.log("status = " + status + " received");
								}
							} else {
								console.log("status = " + status + " received");
							}
						};
						xhttp.open("GET", guxx(parm), true);
						xhttp.send();
					}
				});
				
				var xhr_all;
				jQuery(ms_all).on('keyup', function(event){
					
					if(! direct){
						if(xhr_all && xhr_all.readyState != 4){
							xhr_all.abort();
						}
						
						event.preventDefault();
						
						clearTimeout(timer);
						//create a new timer with a delay of 0.5 seconds, if the keyup is fired before the 2 secs then the timer will be cleared
						timer = setTimeout(function () {
							//this will be executed if there is a gap of 0.5 seconds between 2 keyup events
							var inputText = ms_all.getRawValue();
							var requests = {};
							var element = jQuery(ms_all.container[0]).parents('#zpa-main-search-form, #searchProfile');							
							jQuery.map( element.serializeArray(), function( el, i ) {
								requests[el.name]=el.value
							});
							
							console.time('populate address & schools1');
							xhr_all = jQuery.ajax({
								type: 'POST',
								dataType : 'json',
								url: zipperagent.ajaxurl,
								data: {
									'key': inputText,
									'action': 'address_and_school_options',
									'requests': requests,
								},
								success: function( response ) {         
									if( response ){
										var data = cleanDataArray(response.addresses,inputText);

										var tempAll = all.slice();
										var combined = jQuery.merge(tempAll, data);
										ms_all.setData(combined);
										ms_all.expand();
									}
									console.timeEnd('populate address & school');
								},
								error: function(){
									console.timeEnd('populate address & school');
								}
							});
						}, 300);
					
					}else{
						console.time('populate address & schoolsp');
						
						var parm=[];
						var subdomain=zppr.data.root.web.subdomain;
						var customer_key=zppr.data.root.web.authorization.consumer_key;
						var ps=5;
						var element = jQuery(ms_all.container[0]).parents('#zpa-main-search-form, #searchProfile');
						var requests = zppr.get_form_inputs(element);
						var params = zppr.generate_api_params(requests);
						var crit = params.crit;
						var response=false;
						var gs=1;
						var ms=1;
						var hs=1;
						var sd=1;
						var addr=1;
						var mls=1;
						var inputText = ms_all.getRawValue();
						
						parm.push(9,subdomain,customer_key,crit,inputText,ps,gs,ms,hs,sd,addr,mls);
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {

							if (this.readyState == 4 ) {
								if(this.status == 200){
								
									response=JSON.parse(this.responseText);
									if(response.responseCode===200){
										
										var data = cleanDataArray(zppr.populate_addresses_and_schools(response),inputText);
										
										var tempAll = all.slice();
										var combined = jQuery.merge(tempAll, data);
										ms_all.setData(combined);
										ms_all.expand();
										
										console.timeEnd('populate address & school7815');
									}
									
								}else {
									console.log("status = " + status + " received");
								}
							} else {
								console.log("status = " + status + " received");
							}
						};
						xhttp.open("GET", guxx(parm), true);
						xhttp.send();
					}
				});	
				
				/* Combine ms_all and google autocomplete */
				var ms_all__rawValue='';
				var ms_all__google_autocomplete;
				var google_autocomplete_selected=0;
				
				//select value on enter key pressed
				$(ms_all).on('keydown', function(e,m,v){
					var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
					// var data = $('.field-wrap .all .dropdown-menu');
					var magicSuggest_option_exists = data.length;
					var google_option_exists = 0;
					
					if(magicSuggest_option_exists){
						ms_all__google_autocomplete=0;
						jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
					}else if(google_option_exists && ms_all__rawValue.length >= 2){
						ms_all__google_autocomplete=1;
						jQuery('body .pac-container.pac-logo').css( 'visibility', 'visible' );
					}else{
						ms_all__google_autocomplete=0;
						jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
					}
					
					$('<?php echo $el; ?> #zpa-all-input-address').val('');
				});
				
				/* auto select dropdown function (ms_all) */
				var ms_all__afterDelete=0;
				var ms_all__recentSelected=[];
				var ms_all__currentSelected=[];
				
				//get user input keywords
				$(ms_all).on('keyup', function(){
					ms_all__rawValue = ms_all.getRawValue();

					ms_all__afterDelete=0;

					//set data on 
					if(ms_all__rawValue.length===1)
						ms_all.setData(all);
				});
				
				//get current selected value
				$(ms_all).on('focus', function(c){
					ms_all__recentSelected = ms_all.getValue();
					ms_all__rawValue = ms_all.getRawValue();

					ms_all__afterDelete=1;
					
					//auto open dropdown
					if(tenants) ms_all.expand();
				});
				
				//select value on blur / mouse leave
				$(ms_all).on('blur', function(c, e){
					var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_all__currentSelected = ms_all.getValue();
					
					// console.log(ms_all__recentSelected);
					// console.log(ms_all__currentSelected);
					// console.log('ms_all__rawValue: ' + ms_all__rawValue);
					// console.log('ms_all__afterDelete: ' + ms_all__afterDelete);
					
					// if( ms_all__rawValue!="" && ms_all__currentSelected.length && ! ms_all__afterDelete && (ms_all__recentSelected.length == ms_all__currentSelected.length || !ms_all__recentSelected.length) ){
					// if( ms_all__rawValue!="" && ! ms_all__afterDelete && ms_all__recentSelected.length == ms_all__currentSelected.length ){
					if( ms_all__rawValue!="" && ! ms_all__afterDelete ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_all.setValue([firstData.code]);
						}/* else if(!ms_all__google_autocomplete && !google_autocomplete_selected){
							var val = ms_all__rawValue;
							var prefix = 'alstid_';
							var code = prefix + val;							
							var label = 'MLS#' + val;
							var push = {group:'Mls', name: label, code: code, type: 'mls' };
							ms_all.setValue([push]);
						}*/
						
						ms_all__afterDelete=0;
						
						$('<?php echo $el; ?> #zpa-all-input input').focus();
					}
					
					//reset data to tenants
					if(tenants) ms_all.setData(tenants);
				});
				
				//select value on enter key pressed
				$(ms_all).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_all__rawValue!=""){
							
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_all.setValue([firstData.code]);
							}/* else if(!ms_all__google_autocomplete && !google_autocomplete_selected && ms_all__rawValue.indexOf(" ") < 0){
								var val = ms_all__rawValue;
								var prefix = 'alstid_';
								var code = prefix + val;							
								var label = 'MLS#' + val;
								var push = {group:'Mls', name: label, code: code, type: 'mls' };
								ms_all.setValue([push]);
							}*/
						}
						
						ms_all.collapse();
						
						$('<?php echo $el; ?> #zpa-all-input input').focus();
					}
				});				
				
				//select value on tab key pressed
				$('<?php echo $el; ?> #zpa-all-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_all__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_all.setValue([firstData.code]);
							}/* else if(!ms_all__google_autocomplete && !google_autocomplete_selected){
								var val = ms_all__rawValue;
								var prefix = 'alstid_';
								var code = prefix + val;							
								var label = 'MLS#' + val;
								var push = {group:'Mls', name: label, code: code, type: 'mls' };
								ms_all.setValue([push]);
							}*/
						}
						
						ms_all.empty();
						$('<?php echo $el; ?> #zpa-all-input input').focus();
						
						ms_all.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_all).on('selectionchange', function(e,m,r){					
					
					ms_all.empty();
					ms_all__rawValue="";
					
					if(r.length==ms_all__recentSelected.length && r.length==ms_all__currentSelected.length){
						ms_all__afterDelete=1;
					}else{
						ms_all__afterDelete=0;
					}
				});					 
				
				/* auto select dropdown function (ms_town) */
				var ms_town__rawValue='';
				var ms_town__afterDelete=0;
				var ms_town__recentSelected=[];
				var ms_town__currentSelected=[];
				
				//get user input keywords
				$(ms_town).on('keyup', function(){
					ms_town__rawValue = ms_town.getRawValue();
					ms_town__afterDelete=0;
					
					//set data on 
					if(ms_town__rawValue.length===1)
						ms_town.setData(towns);
				});
				
				//get current selected value
				$(ms_town).on('focus', function(c){
					ms_town__recentSelected = ms_town.getValue();
					ms_town__afterDelete=1;
					
					//auto open dropdown
					if(tenants) ms_town.expand();
				});
				
				//select value on blur / mouse leave
				$(ms_town).on('blur', function(c, e){
					var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_town__currentSelected = ms_town.getValue();
					
					if( ms_town__rawValue!="" && ! ms_town__afterDelete && ms_town__recentSelected.length == ms_town__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_town.setValue([firstData.code]);
						}
						
						ms_town__afterDelete=0;
					}
					
					//reset data to tenants
					if(tenants) ms_town.setData(tenants);
				});
				
				//select value on enter key pressed
				$(ms_town).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_town__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_town.setValue([firstData.code]);
							}
						}
						
						ms_town.collapse();
					}
				});
				
				//select value on tab key pressed
				$('<?php echo $el; ?> #zpa-town-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_town__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_town.setValue([firstData.code]);
							}
						}
						
						ms_town.empty();
						$('<?php echo $el; ?> #zpa-town-input input').focus();
						
						ms_town.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_town).on('selectionchange', function(e,m,r){
					
					ms_town.empty();
					ms_town__rawValue="";
					
					if(r.length==ms_town__recentSelected.length && r.length==ms_town__currentSelected.length){
						ms_town__afterDelete=1;
					}else{
						ms_town__afterDelete=0;
					}
				});
				
				/* auto select dropdown function (ms_area) */
				var ms_area__rawValue='';
				var ms_area__afterDelete=0;
				var ms_area__recentSelected=[];
				var ms_area__currentSelected=[];
				
				//get user input keywords
				$(ms_area).on('keyup', function(){
					ms_area__rawValue = ms_area.getRawValue();
					ms_area__afterDelete=0;
					
					//set data on 
					if(ms_area__rawValue.length===1)
						ms_area.setData(areas);
				});
				
				//get current selected value
				$(ms_area).on('focus', function(c){
					ms_area__recentSelected = ms_area.getValue();
					ms_area__afterDelete=1;
					
					//auto open dropdown
					if(tenants) ms_area.expand();
				});
				
				//select value on blur / mouse leave
				$(ms_area).on('blur', function(c, e){
					var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_area__currentSelected = ms_area.getValue();
					
					if( ms_area__rawValue!="" && ! ms_area__afterDelete && ms_area__recentSelected.length == ms_area__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_area.setValue([firstData.code]);
						}
						
						ms_area__afterDelete=0;
					}
					
					//reset data to tenants
					if(tenants) ms_area.setData(tenants);
				});
				
				//select value on enter key pressed
				$(ms_area).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_area__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_area.setValue([firstData.code]);
							}
						}
						
						ms_area.collapse();
					}
				});
				
				//select value on tab key pressed
				$('<?php echo $el; ?> #zpa-areas-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_area__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_area.setValue([firstData.code]);
							}
						}
						
						ms_area.empty();
						$('<?php echo $el; ?> #zpa-areas-input input').focus();
						
						ms_area.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_area).on('selectionchange', function(e,m,r){
					
					ms_area.empty();
					ms_area__rawValue="";
					
					if(r.length==ms_area__recentSelected.length && r.length==ms_area__currentSelected.length){
						ms_area__afterDelete=1;
					}else{
						ms_area__afterDelete=0;
					}
				});
				
				/* auto select dropdown function (ms_county) */
				var ms_county__rawValue='';
				var ms_county__afterDelete=0;
				var ms_county__recentSelected=[];
				var ms_county__currentSelected=[];
				
				//get user input keywords
				$(ms_county).on('keyup', function(){
					ms_county__rawValue = ms_county.getRawValue();
					ms_county__afterDelete=0;
				});
				
				//get current selected value
				$(ms_county).on('focus', function(c){
					ms_county__recentSelected = ms_county.getValue();
					ms_county__afterDelete=1;
				});
				
				//select value on blur / mouse leave
				$(ms_county).on('blur', function(c, e){
					var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_county__currentSelected = ms_county.getValue();
					
					if( ms_county__rawValue!="" && ! ms_county__afterDelete && ms_county__recentSelected.length == ms_county__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_county.setValue([firstData.code]);
						}
						
						ms_county__afterDelete=0;
					}
				});
				
				//select value on enter key pressed
				$(ms_county).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_county__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_county.setValue([firstData.code]);
							}
						}
						
						ms_county.collapse();
					}
				});
				
				//select value on tab key pressed
				$('<?php echo $el; ?> #zpa-county-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_county__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_county.setValue([firstData.code]);
							}
						}
						
						ms_county.empty();
						$('<?php echo $el; ?> #zpa-county-input input').focus();
						
						ms_county.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_county).on('selectionchange', function(e,m,r){
					
					ms_county.empty();
					ms_county__rawValue="";
					
					if(r.length==ms_county__recentSelected.length && r.length==ms_county__currentSelected.length){
						ms_county__afterDelete=1;
					}else{
						ms_county__afterDelete=0;
					}
				});
				
				/* auto select dropdown function (ms_lake) */
				var ms_lake__rawValue='';
				var ms_lake__afterDelete=0;
				var ms_lake__recentSelected=[];
				var ms_lake__currentSelected=[];
				
				//get user input keywords
				$(ms_lake).on('keyup', function(){
					ms_lake__rawValue = ms_lake.getRawValue();
					ms_lake__afterDelete=0;
				});
				
				//get current selected value
				$(ms_lake).on('focus', function(c){
					ms_lake__recentSelected = ms_lake.getValue();
					ms_lake__afterDelete=1;
				});
				
				//select value on blur / mouse leave
				$(ms_lake).on('blur', function(c, e){
					var data = ms_lake.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_lake__currentSelected = ms_lake.getValue();
					
					if( ms_lake__rawValue!="" && ! ms_lake__afterDelete && ms_lake__recentSelected.length == ms_lake__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_lake.setValue([firstData.code]);
						}
						
						ms_lake__afterDelete=0;
					}
				});
				
				//select value on enter key pressed
				$(ms_lake).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_lake.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_lake__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_lake.setValue([firstData.code]);
							}
						}
						
						ms_lake.collapse();
					}
				});
				
				//select value on tab key pressed
				$('<?php echo $el; ?> #zpa-lake-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_lake.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_lake__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_lake.setValue([firstData.code]);
							}
						}
						
						ms_lake.empty();
						$('<?php echo $el; ?> #zpa-lake-input input').focus();
						
						ms_lake.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_lake).on('selectionchange', function(e,m,r){
					
					ms_lake.empty();
					ms_lake__rawValue="";
					
					if(r.length==ms_lake__recentSelected.length && r.length==ms_lake__currentSelected.length){
						ms_lake__afterDelete=1;
					}else{
						ms_lake__afterDelete=0;
					}
				});
				
				/* auto select dropdown function (ms_zip) */
				var ms_zip__rawValue='';
				var ms_zip__afterDelete=0;
				var ms_zip__recentSelected=[];
				var ms_zip__currentSelected=[];
				
				//get user input keywords
				$(ms_zip).on('keyup', function(){
					ms_zip__rawValue = ms_zip.getRawValue();
					ms_zip__afterDelete=0;
				});
				
				//get current selected value
				$(ms_zip).on('focus', function(c){
					ms_zip__recentSelected = ms_zip.getValue();
					ms_zip__afterDelete=1;
				});
				
				//select value on blur / mouse leave
				$(ms_zip).on('blur', function(c, e){
					var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_zip__currentSelected = ms_zip.getValue();
					
					if( ms_zip__rawValue!="" && ! ms_zip__afterDelete && ms_zip__recentSelected.length == ms_zip__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_zip.setValue([firstData.code]);
						}
						
						ms_zip__afterDelete=0;
					}
				});
				
				//select value on enter key pressed
				$(ms_zip).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_zip__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_zip.setValue([firstData.code]);
							}
						}
						
						ms_zip.collapse();
					}
				});
				
				//select value on tab key pressed
				$('<?php echo $el; ?> #zpa-zipcode-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_zip__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_zip.setValue([firstData.code]);
							}
						}
						
						ms_zip.empty();
						$('<?php echo $el; ?> #zpa-zipcode-input input').focus();
						
						ms_zip.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_zip).on('selectionchange', function(e,m,r){
					
					ms_zip.empty();
					ms_zip__rawValue="";
					
					if(r.length==ms_zip__recentSelected.length && r.length==ms_zip__currentSelected.length){
						ms_zip__afterDelete=1;
					}else{
						ms_zip__afterDelete=0;
					}
				});
				
				/* auto select dropdown function (ms_listid) */
				var ms_listid__rawValue='';
				var ms_listid__afterDelete=0;
				var ms_listid__recentSelected=[];
				var ms_listid__currentSelected=[];
				
				//get user input keywords
				$(ms_listid).on('keyup', function(){
					ms_listid__rawValue = ms_listid.getRawValue();
					ms_listid__afterDelete=0;
					
					//set data on 
					if(ms_listid__rawValue.length===1)
						ms_listid.setData([]);
				});
				
				//get current selected value
				$(ms_listid).on('focus', function(c){
					ms_listid__recentSelected = ms_listid.getValue();
					ms_listid__afterDelete=1;
					
					//auto open dropdown
					if(tenants) ms_listid.expand();
				});
				
				//select value on blur / mouse leave
				$(ms_listid).on('blur', function(c, e){
					var data = ms_listid.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					ms_listid__currentSelected = ms_listid.getValue();
					
					if( ms_listid__rawValue!="" && ! ms_listid__afterDelete && ms_listid__recentSelected.length == ms_listid__currentSelected.length ){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_listid.setValue([firstData.code]);
						}
						
						ms_listid__afterDelete=0;
					}
					
					//reset data to tenants
					if(tenants) ms_listid.setData(tenants);
				});
				
				//select value on enter key pressed
				$(ms_listid).on('keydown', function(e,m,v){
					if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
						var data = ms_listid.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_listid__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_listid.setValue([firstData.code]);
							}
						}
						
						ms_listid.collapse();
					}
				});
				
				//select value on tab key pressed
				$('<?php echo $el; ?> #zpa-listid-input input').on( 'keydown', function(e){
					if(e.keyCode === 9) { //tab pressed 
						var data = ms_listid.combobox.children().filter('.ms-res-item-grouped');
						var firstData = '';
						
						if( ms_listid__rawValue!=""){
							if(data.length){
								firstData=JSON.parse(data[0].dataset.json);
								ms_listid.setValue([firstData.code]);
							}
						}
						
						ms_listid.empty();
						$('<?php echo $el; ?> #zpa-listid-input input').focus();
						
						ms_listid.collapse();
						
						e.preventDefault();
					}
				});
				
				//set after delete state
				$(ms_listid).on('selectionchange', function(e,m,r){
					
					ms_listid.empty();
					ms_listid__rawValue="";
					
					if(r.length==ms_listid__recentSelected.length && r.length==ms_listid__currentSelected.length){
						ms_listid__afterDelete=1;
					}else{
						ms_listid__afterDelete=0;
					}
				});
			});
		</script>
	<?php
	}
}

if( ! function_exists('global_magicsuggest_script') ){
	function global_magicsuggest_script($location='', $requests=array()){
	?>
	<script>
		jQuery(document).ready(function($) {
			
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
				$jsonData = json_encode( $added );
			}
		
		
			$data = get_autocomplete_data();
		
			// $towns = isset($data->towns)?$data->towns:array();
			// $areas = isset($data->areas)?$data->areas:array();
			// $counties = isset($data->counties)?$data->counties:array();
			// $zipcodes = isset($data->zipcodes)?$data->zipcodes:array();
			$tenants = isset($data->tenants)?$data->tenants:array();
			?>
			
				
			var all = <?php echo $jsonData; ?>;
			var tenants = <?php echo json_encode($tenants); ?>;
			
			var ms = $('#zpa-area-input').magicSuggest({
				<?php /* data: '<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'custom/options.php' ?>', */ ?>
				data: tenants ? tenants : all,
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
				
				//set data on 
				if(rawValue.length===1)
					ms.setData(all);
			});
			
			//get current selected value
			$(ms).on('focus', function(c){
				recentSelected = ms.getValue();
				afterDelete=1;
				
				//auto open dropdown
				if(tenants) ms.expand();
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
				
				//reset data to tenants
				if(tenants) ms.setData(tenants);
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
								var contactId = jQuery('.zy-listing__favorite-button').attr('contactid');
								var isLogin = jQuery('.zy-listing__favorite-button').attr('isLogin');
								
								save_favorite( contactId, '', isLogin );";
						break;
					case "save_property":
							echo "
								var contactId = jQuery('.save-property-btn, .zy_save-property').attr('contactid');
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

if( ! function_exists( 'zipperagent_add_query_args' ) ) {
	function zipperagent_add_query_args( $args, $url ) {
		
		if( $args && is_array( $args ) ) {
			return add_query_arg( $args, $url );
		} else {
			return $url;
		}
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

if( ! function_exists('zipperagent_search_filter_new') ){
	function zipperagent_search_filter_new(){
		global $requests;
		?>
		<div id="zpa-view-selected-filter">
			<div id="zpa-selected-filter" class="ms-ctn form-control  ms-ctn-readonly ms-no-trigger">
				<div class="ms-sel-ctn">
				</div>
			</div>
		</div>
		<form id="zpa-search-filter-form" action="" class="form-inline zpa-search-bar-form">
		<?php
			foreach($requests as $key=>$value){
				if(!in_array($key,get_wp_var_excludes())){
					zipperagent_generate_filter_input($key, $value);
				}
			}
		?>
		</form>
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

if( ! function_exists('wp_trim_chars') ){
	function wp_trim_chars( $string, $length = 100, $append = '&hellip;' ) {
		$string = trim( $string );

		if ( strlen( $string ) > $length ) {
			$string = wordwrap( $string, $length );
			$string = explode( "\n", $string, 2 );
			$string = $string[0] . $append;
		}

		return $string;
	}
}
