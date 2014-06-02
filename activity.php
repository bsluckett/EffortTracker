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
			$sql = "SELECT ACTIVITY_NAME,ACTIVITY_ID FROM occ_activity WHERE PARENT_SERVICE_TYPE_ID =". $q;
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