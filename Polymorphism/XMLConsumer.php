<?php 

	require_once './Polymorphism/Consumer.php';
	require_once './Polymorphism/Fetcher.php';


	class XMLConsumer implements Consumer
	{
		protected $fetcher;

		public function __construct()
		{
			$this->fetcher = new Fetcher();
		}

		public function consume($url)
		{	$result = $this->fetcher->fetch($url);
			$xml = simplexml_load_string($result);
			
			return json_encode($xml); 
		}
	}


 ?>