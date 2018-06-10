<?php 
	
	require_once './Consumer.php';
	require_once './classes/Database.php';
	$consumer = new Consumer();
	$database = new Database();

	$json = $consumer->extractData('json','localhost/Edf3lyTask2/TestApis/index.json');
	$xml = $consumer->extractData('xml','localhost/Edf3lyTask2/TestApis/index.xml');
	$csv = $consumer->extractData('csv','./TestApis/index.csv');

	echo $json;
	echo $xml;
	echo $csv;

	
	// add to database
	// foreach (json_decode($json)->data->product as $product) {
	// 	// die(json_encode($product));
	// 	$database->addProduct($product['name'],$product['price'],$product['tags']);
	// };
 ?>