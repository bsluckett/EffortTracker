<?php $MenuTitle = "Admin"; ?>
<?php include 'inc/header.php'; ?>
<?php 
	include_once $_SERVER["DOCUMENT_ROOT"] ."/inc/tasks.php";
	$ServiceObject = new TaskObject;
	$Service = $ServiceObject->get_Services();
	$ServiceID = 312;
	$ServiceTypeObject = new TaskObject;
    $ServiceType = $ServiceTypeObject->get_ServiceType($ServiceID);
	$ServiceTypeID = 656;
	$activityObject = new TaskObject;
	$activity = $activityObject->get_activity($ServiceTypeID);

?>

<script type="text/javascript" src="js/option.js"></script>
<div style="  background-color:#428bca ; width:1100px; border-radius: 10px; padding:20px 20px 20px 20px ; color:white ; margin-top:7% ; margin-left:13% ; margin-right:15% ; min-height:300px"  >
  <table style="width:100%; ">
    <tr id="tab-pane" style="align-content:center" >
      <th width="22%" style="text-align:center; font-family:Helvetica Neue, Helvetica, Arial, sans-serif; font-size:16px" > Service </th>
      <th width="30%" style="text-align:center; font-family:Helvetica Neue, Helvetica, Arial, sans-serif; font-size:16px" > Service Type </th>
      <th width="50%" style="text-align:center ; font-family:Helvetica Neue, Helvetica, Arial, sans-serif; font-size:16px" > Activity </th>
    </tr>
    <tr >
      <td  style=" padding-right:2%"><p><BR>
          <SELECT NAME="Service" SIZE="10" style="width:100% ; font-family:Helvetica Neue, Helvetica, Arial, sans-serif;" onChange="showServiceType(this.value)">
            <?php foreach($Service as $S) { ?>
            <OPTION value=<?php echo $S["SERVICE_ID"] ?>> <?php echo $S["SERVICE_NAME"] ?>
            <?php 
    } ?>
          </SELECT>
        </p>
        <!-- <button type="button" class="btn-success" style="background-color:#9BD377; color:#000000; position:inherit;"> Modify </button> -->
        <!-- Button trigger modal -->
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Modify</button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel" style="color:black;"> Edit </h4>
              </div>
              <div class="modal-body">
                <form role="form" style="color:black;">
  <div class="form-group">
    <label for="exampleInputEmail1">Service</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Service">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Service Type</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Service Type">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Activity</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Activity">
  </div>
</form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-warning" data-toggle="modal" data-target="#myModal" > Add </button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"> Delete </button></td>
      <td style=" padding-right:2%" ><div id="sevicetype">
          <p><BR>
            <SELECT NAME="Servicetype" SIZE="10" style="width:100% ; font-family:Helvetica Neue, Helvetica, Arial, sans-serif;" onChange="showActivity(this.value)">
              <?php foreach($ServiceType as $ST) {
	 ?>
              <option value=<?php echo $ST["SERVICE_TYPE_ID"];?>> <?php echo $ST["SERVICE_TYPE_NAME"]; ?>
              <?php } ?>
            </SELECT>
          </p>
        </div>
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Modify</button>
        <button class="btn btn-warning" data-toggle="modal" data-target="#myModal" > Add </button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"> Delete </button>
   
        </td>
      <td style="  column-rule-width:thick; width:inherit" > <div id="activity"><p><BR>
          <SELECT NAME="Activity" SIZE="10" style="width:100% ; font-family:Helvetica Neue, Helvetica, Arial, sans-serif;">
            <?php foreach ($activity as $ACT){ ?>
            <option value=<?php echo $ACT["ACTIVITY_ID"]; ?>> <?php echo $ACT["ACTIVITY_NAME"] ?>
            <?php } ?>
          </SELECT>
        </p></div>
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Modify</button>
        <button class="btn btn-warning" data-toggle="modal" data-target="#myModal" > Add </button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"> Delete </button>
</td>
    </tr>
  </table>
</div>
<?php include 'inc/footer.php'; ?>
