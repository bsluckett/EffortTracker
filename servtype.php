<?php 
$q = intval($_GET["q"]);
	 // require_once 'inc/tasks.php';
try{
		$db = new PDO("mysql:host=10.78.186.224;dbname=tt_db","root","");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
	} catch (Exception $e) {
		echo "Could not connect to the database.";
		exit;
	}
	


try{
			$sql = "SELECT SERVICE_TYPE_NAME,SERVICE_TYPE_ID FROM occ_service_type WHERE PARENT_SERVICE_ID =". $q;
			$results = $db->query($sql);
		}  catch (Exception $e){
			echo "Data could not be retrieved from the database.";
			exit;
		}
		$ServiceType = $results->fetchAll(PDO::FETCH_ASSOC); 
echo "<p><BR><SELECT NAME='Servicetype' SIZE='10' style='width:100% ; font-family:Helvetica Neue, Helvetica, Arial, sans-serif;' onChange='showActivity(this.value)'>";
	    
foreach ($ServiceType as $row){
  echo "<option value=". $row['SERVICE_TYPE_ID'] . ">" . $row['SERVICE_TYPE_NAME'] . "</option>";
};

echo "</select>";

?>