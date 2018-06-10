<?php 
	
	require_once './interfaces/AdvancedDataExtractor.php';
	require_once 'Fetcher.php';
	/**
	* 
	*/
	class JsonExtractor implements AdvancedDataExtractor
	{

		public function extractJSON($url){
			$fetcher = new Fetcher();

			return $fetcher->fetch($url); 
		}

		public function extractXML($url){
			// do nothing
		}
		
		public function extractCSVFile($url){
			// do nothing
		}
	}


 ?>