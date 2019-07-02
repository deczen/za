<?php

class ZipperAgentLog{
	
	private $limit=10; //limit log file by max 10 MB
	private $max_day=15; //limit log date for 15 days
	
	public function __construct($log_name,$page_name){
		
		// $file_dir = ZIPPERAGENTPATH . "/custom/log/";
		$file_dir = ABSPATH . "wp-content/za-log/";
		
		if(empty($log_name)){ $log_name='default_log.log'; }
		$this->log_name=$log_name.'_'.date('Y-m-d').'.log';

		$this->app_id=uniqid();//give each process a unique ID for differentiation
		$this->page_name=$page_name;
		
		if (!file_exists($file_dir)) {
			mkdir($file_dir, 0777, true);
		}
		
		$this->file_dir=$file_dir;
		$this->log_file=$file_dir.$this->log_name;
		$this->log=fopen($this->log_file,'a');
		
		$this->remove_old_log($log_name);
	}

	public function log_msg($msg){//the action
		// $log_line=join(' : ', array( date(DATE_RFC822), $this->page_name, $this->app_id, $msg ) );
		$current_file_size = filesize($this->log_file) / ( 1024 * 1024 ); // file size in MB
		
		if($current_file_size > $this->limit){ // reset file if file size is reach the limit
			@unlink($this->log_file);
			$this->log=fopen($this->log_file,'a');
		}
		
		$log_line=join(' : ', array( current_time('mysql'), $this->page_name, $this->app_id, $msg ) );
		fwrite($this->log, $log_line."\n");
	}
	
	public function remove_old_log($log_name){
		
		$curr_date = date('Y-m-d');
		$files = scandir($this->file_dir);
		
		foreach($files as $file) {
			if(strpos($file, $log_name) !== false){
				$tmp = explode('_',$file);
				$date_ext = end($tmp); //get first element of array
				$date = str_replace('.log', '', $date_ext);
				
				$datediff = strtotime($curr_date) - strtotime($date);

				$diff = round($datediff / (60 * 60 * 24));
				
				// echo $date . " | diff : ". $diff . "<br />";
				
				if($diff > $this->max_day){
					// echo 'remove: ' . $this->file_dir . $file. "<br />";
					@unlink( $this->file_dir . $file );
				}
			}
		}
	}
	
	function __destruct(){//makes sure to close the file and write lines when the process ends.
		$this->log_msg("Closing log");
		fclose($this->log);
	}
} 
?>