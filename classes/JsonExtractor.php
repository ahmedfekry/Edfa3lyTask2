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

			// todo add to database

			return $fetcher->fetch($url); 
		}

		public function extractXML($url){
			// do nothing
		}
		
		public function extractCSVFile($url){
			// do nothing
		}
		
		public function extractJSONFile($url){
			// elso do nothing 
		}
	}


 ?>