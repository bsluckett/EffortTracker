<?php 
	$q = explode('-', $_GET['q']);
	echo $q[0];
	echo $q[1];
	require_once $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/tasks.php";
	//log_activity($q[0],$q[1]);
	$SubmitObject = new TaskObject;
	$Submit = $SubmitObject->log_activity($q[0],$q[1]);

?>