<script type="text/javascript" src="js/nav.js"></script>
<ul class="nav nav-pills nav-stacked" id="tab-pane">
<?php 
	include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/tasks.php";
	$Service = get_Services();
	foreach($Service as $S) {
		include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/Service.html.php";
    }
 ?>
 </ul>