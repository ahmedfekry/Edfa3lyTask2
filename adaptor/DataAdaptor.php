<?php 

	require_once './interfaces/AdvancedDataExtractor.php';
	require_once './interfaces/DataExtractor.php';
	require_once './classes/JsonExtractor.php';
	require_once './classes/XmlExtractor.php';

	/**
	* 
	*/
	class DataAdaptor implements DataExtractor
	{
		public $advancedDataExtractor;
		function __construct($dataType)
		{
			if ($dataType == 'json') {
				$this->advancedDataExtractor = new JsonExtractor();
			}elseif ($dataType == 'xml') {
				$this->advancedDataExtractor = new XmlExtractor();
			}
		}

		public function extractData($dataType,$url)
		{
			if ($dataType == 'json') {
				return $this->advancedDataExtractor->extractJSON($url);
			}elseif ($dataType == 'xml') {
				return $this->advancedDataExtractor->extractXML($url);
			}
		}
	}
 ?>