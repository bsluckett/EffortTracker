<?php
	 include_once $_SERVER["DOCUMENT_ROOT"] ."/inc/tasks.php";
	  if($_SERVER["REQUEST_METHOD"] == "GET" )
		{
			if (isset($ServiceID)) { 
				$ServiceID = 300;
			} else {
				$ServiceID = $_GET["serviceID"];
			}
		}
	$ServiceTypeObject = new TaskObject;
    $ServiceType = $ServiceTypeObject->get_ServiceType($ServiceID);;
	  foreach($ServiceType as $ST) {
		include $_SERVER["DOCUMENT_ROOT"] ."/inc/ServiceType.html.php";
      }
 ?>