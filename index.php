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
	echo $csvConsumer->consume('http://localhost/Edf3lyTask2/TestApi/index.csv');

 ?>