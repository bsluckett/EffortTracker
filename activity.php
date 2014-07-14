<?php 
$q = intval($_GET["q"]);
	 // require_once 'inc/tasks.php';
try{
		$db = new PDO("mysql:host=53b1e1624970fa92060000b9-itoclae.cloudapps.cisco.com;port=52271;dbname=efforttrackerintrtppersonal","adminAqirqDm","uRHQbiNRpVWM");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
	} catch (Exception $e) {
		echo "Could not connect to the database.";
		exit;
	}
	


try{
	$sql = "SELECT ACTIVITY_NAME, ACTIVITY_ID FROM activity WHERE SERVICE_TYPE_ID =". $q;
	$results = $db->query($sql);
}  catch (Exception $e){
	echo "Data could not be retrieved from the database.";
	exit;
}
		$activity = $results->fetchAll(PDO::FETCH_ASSOC); 
echo "<p><BR><SELECT NAME='Activity' SIZE='10' style='width:100% ; font-family:Helvetica Neue, Helvetica, Arial, sans-serif;'>";
	    
foreach ($activity as $row){
  echo "<option value=". $row['ACTIVITY_ID'] . ">" . $row['ACTIVITY_NAME'] . "</option>";
};

echo "</select>";

?>