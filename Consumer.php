<?php 

	require_once './interfaces/DataExtractor.php';
	require_once './adaptor/DataAdaptor.php';

	/**
	* 
	*/
	class Consumer implements DataExtractor
	{
		public $dataAdaptor;

		public function extractData($dataType,$url)
		{
			if ($dataType == 'json' || $dataType == 'xml' || $dataType == 'csv') {
				$this->dataAdaptor = new DataAdaptor($dataType);
				return $this->dataAdaptor->extractData($dataType,$url);
			}else{
				return "Invalid Data Type";
			}
		}
	}
 ?>