<?php 

	require_once './Polymorphism/Consumer.php';
	require_once './Polymorphism/Fetcher.php';

	/**
	* 
	*/
	class CSVConsumer implements Consumer
	{
		
		protected $fetcher;

		public function __construct()
		{
			$this->fetcher = new Fetcher();
		}

		public function consume($url)
		{
			$row = 1;
			$result = array('data' => array('product' => array()));
			if (($handle = fopen($url, "r")) !== FALSE) {
			    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			        if ($row > 1) {
			        	$num = count($data);
				        $row++;
				       	
				        $temp = array();
				        $temp['id'] = $data[0];
				        $temp['name'] = $data[1];
				        $temp['price'] = $data[2];
				        $temp['tags'][] = $data[3];
				        $temp['tags'][] = $data[4];

						$result['data']['product'][] = $temp;
						echo "\n";
			        }else{
			        	$row++;
			        	continue;
			        }
			    }
			    fclose($handle);
			}
			return json_encode($result);
		}
		
	}


 ?>