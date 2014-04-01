<?php
	  require_once $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/tasks.php";
	  $ServiceType = get_ServiceType($ServiceID);
	  foreach($ServiceType as $ST) {
		include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/ServiceType.html.php";
      }
 ?>




