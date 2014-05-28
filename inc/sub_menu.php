<script type="text/javascript" src="js/nav.js"></script>
<form>
	<ul class="nav nav-pills nav-stacked" id="tab-pane">
		<?php 
			$ServiceObject = new TaskObject;
			$Service = $ServiceObject->get_Services();
			foreach($Service as $S) {
				include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/Service.php";
			}
		?>
	</ul>
 </form>

 
 