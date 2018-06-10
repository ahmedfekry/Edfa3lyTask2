<?php 

	interface AdvancedDataExtractor{
		public function extractJSON($url);
		public function extractXML($url);
		public function extractCSVFile($url);
		public function extractJSONFile($url);
	}

 ?>