<?php 
	
	/**
	* 
	*/
	class Database 
	{
		private $conn;
		function __construct()
		{
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "myDBPDO";
			$this->conn = mysqli_connect($servername, $username, $password, $dbname);
		}
		public function addProduct($name,$price,$tags)
		{
			
			$sql = "INSERT INTO MyGuests (name, price, tags)
			VALUES ('".$name."', '".$price."', '".implode(",",$tags)."')";
			if (mysqli_query($this->conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
			}
		}
	}
 ?>