<?php 

	require_once './Polymorphism/Consumer.php';
	require_once './Polymorphism/Fetcher.php';


	class JsonConsumer implements Consumer
	{
		protected $fetcher;

		public function __construct()
		{
			$this->fetcher = new Fetcher();
		}

		public function consume($url)
		{
			return $this->fetcher->fetch($url); 
		}

	}


 ?>