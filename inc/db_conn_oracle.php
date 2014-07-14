
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

	// try{
	// 	$db = new PDO("mysql:host=10.78.186.224;dbname=tt_db","root","");
	// 	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// 	$db->exec("SET NAMES 'utf8'");
	// } catch (Exception $e) {
	// 	echo "Could not connect to the database.";
	// 	exit;
	// }

//$dbinfo = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = lnxdb-dev-vm-233.cisco.com)(PORT = 1530)))(CONNECT_DATA=(SID=OPSDEV)))"; 
	
$db =oci_connect('OCCAPP', 'cisco#123', 'lnxdb-dev-vm-233.cisco.com:1530/OPSDEV');
//echo (oci_connect('OCCAPP', 'cisco#123', 'lnxdb-dev-vm-233.cisco.com:1530/OPSDEV'));
	if (!$db) {
   		 $e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}

?>