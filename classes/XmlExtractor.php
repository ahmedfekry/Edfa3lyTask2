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

			$xml = simplexml_load_string($result);

			return json_encode($xml);
		}
		
		public function extractCSVFile($url){
			// do nothing
		}

	}


 ?>