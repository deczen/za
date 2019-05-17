<?php

class ZipperAgentLog{
	
	private $limit=10; //limit log file by max 10 MB
	
	public function __construct($log_name,$page_name){
		
		// $file_dir = ZIPPERAGENTPATH . "/custom/log/";
		$file_dir = ABSPATH . "/wp-content/za-log/";
		
		if(empty($log_name)){ $log_name='default_log.log'; }
		$this->log_name=$log_name;

		$this->app_id=uniqid();//give each process a unique ID for differentiation
		$this->page_name=$page_name;
		
		if (!file_exists($file_dir)) {
			mkdir($file_dir, 0777, true);
		}
		
		$this->log_file=$file_dir.$this->log_name;
		$this->log=fopen($this->log_file,'a');
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
	function __destruct(){//makes sure to close the file and write lines when the process ends.
		$this->log_msg("Closing log");
		fclose($this->log);
	}
} 
?>