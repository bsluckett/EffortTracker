<?php
// Create connection
$con=mysql_connect('10.78.186.224','root','','tt_db');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
	
	 	$dbname = 'tt_db';
		$serviceType = 'occ_service_type';
	// $sql = "SHOW TABLES FROM $dbname";
	$sql = "SELECT SERVICE_TYPE_NAME FROM $dbname.$serviceType";

	$result = mysql_query($sql);
	if (!$result) {
    	echo "DB Error, could not list tables\n";
    	echo 'MySQL Error: ' . mysql_error();
    	exit;
	}
	while ($row = mysql_fetch_row($result)){
		//print "{$row[0]}\n;";
		$paneladd = $paneladd . "<div class=\"panel panel-primary\"><div class=\"panel-heading\"><h3 class=\"panel-title\">{$row[0]}\n;</h3></div></div>";
		$testvar = "<h1>almost<h2>";
		// echo "<script type=\"text/javascript\"> document.getElementById('#servicePanels').innerHTML=".$paneladd."; </script>";
		echo "<script type=\"text/javascript\"> document.getElementById('#servicePanels').innerHTML=".$testvar.";</script>";
	}
	mysql_free_result($result);
}
?>