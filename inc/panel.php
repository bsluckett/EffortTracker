<?php include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/db_conn.php"; ?>
<div id="servicePanels" style="margin:0 auto; width: 500px; margin-top: 30px">
	<!-- <button type="button" class="btn btn-success" style="margin-left:0px">Save</button> -->
	<?php include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/ServiceType.php"; ?>
	<?php
		$dbname = 'tt_db';
		$serviceType = 'occ_service_type';
		$service = 'occ_service';
		// $sql = "SHOW TABLES FROM $dbname";
		$ServiceTypeSQL = "SELECT SERVICE_TYPE_NAME FROM $dbname.$serviceType WHERE Parent_SERVICE_ID =" . $ServiceID;
		 //$ServiceTypeSQL= "SELECT Parent_SERVICE_ID FROM $dbname.$serviceType";

		$ServiceTypeResult = mysql_query($ServiceTypeSQL);
		if (!$ServiceTypeResult) {
    		echo "DB Error, could not list tables\n";
    		echo 'MySQL Error: ' . mysql_error();
    		exit;
		} 
		while ($row = mysql_fetch_row($ServiceTypeResult)){
			$rowname = "{$row[0]}";
			$me = new ServiceType($rowname, 'Activity Name Here');
			echo $me->greet();
		
		// echo "<script type=\"text/javascript\"> document.getElementById('#servicePanels').innerHTML=".$paneladd."; </script>";
		}
		//echo "after while";
		//print_r(mysql_free_result($ServiceTypeResult));
		mysql_free_result($ServiceTypeResult);
		//echo "testing here";
	?>
</div>