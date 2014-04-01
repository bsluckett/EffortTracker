<?php 
    function get_Services() {
		include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
		try{
			$sql = "SELECT SERVICE_NAME FROM tt_db.occ_service";
			$results = $db->query($sql);
		}  catch (Exception $e){
			echo "Data could not be retrieved from the database.";
			exit;
		}
		$Services = $results->fetchAll(PDO::FETCH_ASSOC); 
		return $Services;
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
	
	
	function get_activity($ServiceTypeID) {
		include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
		try{
			$sql = "SELECT ACTIVITY_NAME FROM occ_activity WHERE PARENT_SERVICE_TYPE_ID =". $ServiceTypeID;
			$results = $db->query($sql);
		}  catch (Exception $e){
			echo "Data could not be retrieved from the database.";
			exit;
		}
		$activity = $results->fetchAll(PDO::FETCH_ASSOC); 
		return $activity;
	}
?>