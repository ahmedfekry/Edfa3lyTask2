 <?php 
	
	require_once './interfaces/AdvancedDataExtractor.php';
	require_once 'Fetcher.php';
	/**
	* 
	*/
	class XmlExtractor implements AdvancedDataExtractor
	{

		public function extractJSON($url){
			// do nothing
		}

		public function extractXML($url){
			$fetcher = new Fetcher();
			$result = $fetcher->fetch($url);

			// parse the xml to readable json
			$xml = simplexml_load_string($result);
			// $json = json_encode($xml);
			// $array = json_decode($json,TRUE);

			return json_encode($xml);
		}
		
		public function extractCSVFile($url){
			// do nothing
		}
		
		public function extractJSONFile($url){
			// elso do nothing 
		}
	}


 ?>