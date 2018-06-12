<?php 
	
	function __autoload($classname) {
	    $filename = "./Polymorphism/". $classname .".php";
	    require_once($filename);
	}

	$jsonConsumer = new JsonConsumer();
	echo $jsonConsumer->consume('http://localhost/Edf3lyTask2/TestApi/index.json');

	$xmlConsumer = new XMLConsumer();
	echo $xmlConsumer->consume('http://localhost/Edf3lyTask2/TestApi/index.xml');

	$csvConsumer = new CSVConsumer();
	$result = $csvConsumer->consume('http://localhost/Edf3lyTask2/TestApi/index.csv');

	$array = json_decode($result);

	var_dump($array);

	// $database = new Database();

	// foreach ($array as $obj) {
	// 	$database->addProduct($obj['name'],$obj['price'],$obj['tags']);
	// }
 ?>