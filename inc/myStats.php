<div class="panel panel-primary clearfix" style="width: 300px">
	<div class="panel-heading">
	    <h3 class="panel-title">My Stats</h3>
	</div>
	<div style="margin:10px">
		<?php 
			foreach($Service as $S) {
				echo "<strong class = \"pull-left\">" . $S["SERVICE_NAME"] . ":</strong> <span class=\"pull-right\"> 8 hours </span></br>";
			}
		?>
	</div>
</div>