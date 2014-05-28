<?php 
    function get_activity($ServiceTypeID) {
		include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
		try{
			//$results = $db->query("SELECT ACTIVITY_NAME FROM occ_activity INNER JOIN occ_service_type ON occ_service_type.SERVICE_TYPE_ID = occ_activity.PARENT_SERVICE_TYPE_ID WHERE occ_service_type.SERVICE_TYPE_ID =" . $ServiceID;)
			$sql = "SELECT ACTIVITY_NAME FROM occ_activity WHERE PARENT_SERVICE_TYPE_ID =". $ServiceTypeID;
			//echo $ServiceID;
			$results = $db->query($sql);
		}  catch (Exception $e){
			echo "Data could not be retrieved from the database.";
			exit;
		}
		$activity = $results->fetchAll(PDO::FETCH_ASSOC); 
		return $activity;
	}
	function get_ServiceType($ServiceID) {
		include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
		try{
			$sql = "SELECT SERVICE_TYPE_NAME,SERVICE_TYPE_ID FROM occ_service_type WHERE PARENT_SERVICE_ID =". $ServiceID;
			$results = $db->query($sql);
		}  catch (Exception $e){
			echo "Data could not be retrieved from the database.";
			exit;
		}
		$ServiceType = $results->fetchAll(PDO::FETCH_ASSOC); 
		return $ServiceType;
	}
?>