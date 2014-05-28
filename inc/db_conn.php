<?php
	// // Create connection
	// $con=mysql_connect('10.78.186.224','root','','tt_db');
	// // Check connection
	// if (mysqli_connect_errno())
	//   {
	//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	//   }
	// else
	// {
	// }

	try{
		$db = new PDO("mysql:host=10.78.186.224;dbname=tt_db","root","");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
	} catch (Exception $e) {
		echo "Could not connect to the database.";
		exit;
	}
?>