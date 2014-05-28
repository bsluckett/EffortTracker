<div style="margin:10px">
<form name="Activityform" method="post" action="submit.php">
	<div class="checkbox clearfix">
		<div style="width: 275px;">
			<label class="pull-left">
			    <input type="checkbox" name="activitybox" id="activitybox" id="checkboxActivity" value="<?php echo $ACT["ACTIVITY_ID"]; ?>" data-activityID="<?php echo $ACT["ACTIVITY_ID"]; ?>" ><?php echo $ACT["ACTIVITY_NAME"]; ?> 
			</label>
		</div>
		<div style="margin-top:-40px">
			<div class="form-horizontal pull-right" style="width:100px;">
				<div class="form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="inputTime" id="inputTime" placeholder="Time">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
