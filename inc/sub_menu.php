<form>
	<ul class="nav nav-pills nav-stacked" id="tab-pane">
		<?php 
			$ServiceObject = new TaskObject;
			$Service = $ServiceObject->get_Services();
			//$i = 0;
			foreach($Service as $S) {
			//	echo "in sub2" . getcwd();
				include getcwd() ."/inc/Service.php";
			//	include "/inc/Service.php";
				//$i = $i + 1;
			}
			/* while($Service != false) {
				echo "inwhile";
				include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/Service.php";
			} */
		?>
	</ul>
 </form>

 
 