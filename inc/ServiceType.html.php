<div class="panel panel-primary" style="height: auto;">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $ST["SERVICE_TYPE_NAME"]; ?></h3>
    </div>
	<?php
		$activity = get_activity($ST["SERVICE_TYPE_ID"]);
		foreach ($activity as $ACT){
			include ($_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/Activity.html.php");
		}
	?>
</div>