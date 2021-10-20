<?php 

class Db
{

	
	
	function getConnection()
	{

		$servername = "localhost";
		$username = "root";
		$password = "";
		try {
			  $dbh = new PDO("mysql:host=$servername;dbname=Tshimologong", $username, $password);
			  // set the PDO error mode to exception
			  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  
			} catch(PDOException $e) {
			  echo "Connection failed: " . $e->getMessage();
			}


		return $dbh;
	}
}




?>