<?php
	  include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/panel.php";
	  $ServiceType = get_ServiceType($ServiceID);
	  foreach($ServiceType as $ST) {
      	echo "<div class=\"panel panel-primary\">
                      	<div class=\"panel-heading\">
                      		<h3 class=\"panel-title\">" . $ST["SERVICE_TYPE_NAME"]. "</h3>
                      	</div>
                      	<div style=\"margin:10px\">
							<div class=\"checkbox clearfix\">
								<div style=\"width: 275px;\">
									<label class=\"pull-left\">
			    						<input type=\"checkbox\">";
		$activity = get_activity($ST["SERVICE_TYPE_ID"]);
		foreach ($activity as $ACT){
			echo $ACT["ACTIVITY_NAME"]. "</label>
			 					</div>
								<div style=\"margin-top:-40px\">
			 						<form class=\"form-horizontal pull-right\"role=\"form\" style=\"width:100px;\">
			   							<div class=\"form-group\">
			    							<div class=\"col-sm-10\">
			      								<input type=\"text\" class=\"form-control\" id=\"inputTime\" placeholder=\"Time\">
			    							</div>
										</div>
			 						</form>
								</div>
							</div>
						</div>
                      </div>";
		}
      }
 ?>




