<?php $MenuTitle = "Home"; ?>
<?php session_start();
 ?>
<?php include 'inc/header.php';?>
	<div class="container clearfix">
	 	<div class="col-md-3 alpha">
	 		<?php include 'inc/sub_menu.php'; ?>
	 	</div>
		<div class="col-md-5">
			<?php //include 'pages/daterange.php'; ?>
			<?php include 'inc/Date.php'; ?>
			<div class="clearfix">
				<div id="DateLabel">
				</div>
				<form>
					<button style="margin-bottom: -10px; margin-top: 110px;"  onclick="submitMe()" id="saveActivity" class="btn btn-success pull-right">Save</button>
				</form>
			</div>
			<div id="task-container">
				<?php $ServiceID=300; include $_SERVER["DOCUMENT_ROOT"] ."/panels.php";?>
			</div>
		</div>
		<div class="col-md-4 omega">	
			<?php include 'inc/myStats.php'; ?>
			<div class="well" style="width:300px">
    			<div class="input-group">
      				<input id="incidentTextbox" type="text" class="form-control" placeholder="Incident Numbers">
      				<span class="input-group-btn">
        				<button class="btn btn-default" type="button" id="saveIncident" onclick="submitIncident()">Submit</button>
      				</span>
    			</div><!-- /input-group -->
    			<div id="currentIncident" class="list-group" style="padding:5px">
				</div>
  			</div><!-- /.col-lg-4 -->
		</div>
	</div>

<?php include 'inc/footer.php'; ?> 

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST" ){
		//echo "post";
		if (isset($_GET["username"])) {
			echo $_GET["username"];
		} else {
			//echo " no username";
		}
  	}
?>

<script>
    $(document).ready(function() {
      $('#saveIncident').click(function() {
        var newIncident = '<a href="#" class="list-group-item">' + $('#incidentTextbox').val() + '<button type="button" class="close" onclick="$(this).closest(\'.list-group-item\').remove();" aria-hidden="true">&times;</button></a>';
        $('#currentIncident').append(newIncident);
      });
    });

    function submitIncident(){
    	var Taskxmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			Taskxmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			Taskxmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		Taskxmlhttp.onreadystatechange=function(){
			if (Taskxmlhttp.readyState==4 && Taskxmlhttp.status==200){
			}
		}
		alert($('#incidentTextbox').val());
		Taskxmlhttp.open("GET","incident.php?q="+$('#incidentTextbox').val(),true);
		Taskxmlhttp.send();
    }
    
	function submitMe(){
		var submitDate = $('#Home_Date').val();
		var Taskxmlhttp;
			if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
				Taskxmlhttp=new XMLHttpRequest();
			}
			else{// code for IE6, IE5
				Taskxmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			Taskxmlhttp.onreadystatechange=function(){
				if (Taskxmlhttp.readyState==4 && Taskxmlhttp.status==200){
				}
			}
		var formsCollection = document.getElementsByTagName("form");
		var Entry = [[],[]];
		for(var i=0;i<formsCollection.length;i++)
		{
			if(formsCollection[i].name=="Activityform"){
				var activityID = formsCollection[i].activitybox.value;
				var Time = formsCollection[i].inputTime.value;
				if (formsCollection[i].activitybox.checked == true){
					var actCheck = true;
					Entry[0].push(activityID);
					Entry[1].push(Time);
					alert("send");
					//xmlhttp.open("GET","submit.php?q="+activityID+"-"+Time+"-"+submitDate,true);
					Taskxmlhttp.open("GET","submit.php?q="+activityID+"-"+Time,true);
					Taskxmlhttp.send();
				} else {
					var actCheck = false;
				}
			}
		}
			var activityArray = [];
			$('input:checkbox').each(function(){
				var id = $(this).attr('data-activityID');
				var ischecked = $(this).is(":checked");
				if (ischecked == true){
					activityArray.push(id);
				}
			});
			for (var i=0, size=activityArray.length; i<size; i++){
				var str = activityArray[i];
			}
	}
 </script>
