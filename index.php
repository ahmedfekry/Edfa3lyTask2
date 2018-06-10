<?php 
	
	require_once './Consumer.php';
	// function __autoload($className)
	// {
	//   require_once "./classes/{$className}.php";
	// }

	$consumer = new Consumer();

	// echo $consumer->extractData('json','localhost/Edf3lyTask2/TestApis/index.json');
	echo $consumer->extractData('xml','localhost/Edf3lyTask2/TestApis/index.xml');
 ?>