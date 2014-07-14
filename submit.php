<?php 
	$q = explode('-', $_GET['q']);
	require_once $_SERVER["DOCUMENT_ROOT"] ."/inc/tasks.php";
	//log_activity($q[0],$q[1]);
	$SubmitObject = new TaskObject;
	$Submit = $SubmitObject->log_activity($q[0],$q[1]);
?>