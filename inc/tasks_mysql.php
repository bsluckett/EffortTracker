<?php 
	class TaskObject {
		public function get_Services(){
			include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
			try{
				$sql = "SELECT SERVICE_ID,SERVICE_NAME FROM tt_db.occ_service";
				$results = $db->query($sql);
			}  catch (Exception $e){
				echo "Data could not be retrieved from the database.";
				exit;
			}
			$Services = $results->fetchAll(PDO::FETCH_ASSOC); 
			return $Services;
		}
		
		public function get_ServiceType($ServiceID) {
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
		
		public function get_activity($ServiceTypeID) {
			include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
			try{
				$sql = "SELECT ACTIVITY_ID, ACTIVITY_NAME FROM occ_activity WHERE PARENT_SERVICE_TYPE_ID =". $ServiceTypeID;
				$results = $db->query($sql);
			}  catch (Exception $e){
				echo "Data could not be retrieved from the database.";
				exit;
			}
			$activity = $results->fetchAll(PDO::FETCH_ASSOC); 
			return $activity;
		}
		
		public function log_activity($ActivityID, $Time){
			include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
			try{
				$sql = "INSERT INTO user_log (username, task_date, activity_id, activity_time) VALUES ('bluckett4', 5052014,". $ActivityID .",'". $Time."')";
				$q = $db->prepare($sql);
				$q->execute();
				//$results = $db->query($sql);
			} catch (Exception $e){
				echo "Data could not be retrieved from the database.";
				exit;
			}
			return;
		}
		public function get_userLog($username, $startDate, $endDate, $activityID){
			include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
			try{
				$sql = "SELECT sum(activity_time) as TimeTotal FROM user_log WHERE activity_id =". $activityID;
				$results = $db->query($sql);

			} catch (Exception $e){
				echo "Data could not be retrieved from the database.";
				exit;
			}
			$userLog = $results->fetchAll(PDO::FETCH_ASSOC); 
			return $userLog;
		}
		public function log_incident($username, $date, $incident){
			include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; 
			try{
				$sql = "INSERT INTO incident_log (username, date, incident) VALUES ('bluckett6', 5052014, '". $incident ."')";
				$q = $db->prepare($sql);
				$q->execute();
				//$results = $db->query($sql);
			} catch (Exception $e){
				echo "Data could not be retrieved from the database.";
				exit;
			}
			return;
		}
	}
	
?>