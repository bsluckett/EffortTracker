<?php $MenuTitle = "Home"; ?>
<?php include 'inc/header.php';?>
	<div class="container clearfix">
	 	<div class="col-md-3 alpha">
	 		<?php include 'inc/sub_menu.php'; ?>
	 	</div>
		<div class="col-md-5">
			<?php include 'inc/Date.php'; ?>
			<div class="clearfix">
				<div id="DateLabel">
				</div>
				<form>
					<button style="margin-bottom: -10px"  onclick="submitMe()" id="saveActivity" class="btn btn-success pull-right">Save</button>
				</form>
			</div>
			<div id="task-container">
				<?php $ServiceID=300; include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/panels.php";?>
			</div>
		</div>
		<div class="col-md-4 omega">	
			<?php include 'inc/myStats.php'; ?>
		</div>
	</div>

<?php include 'inc/footer.php'; ?> 

<script>
	function submitMe(){
		var submitDate = $('#Home_Date').val();
		var xmlhttp;
			if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
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
					xmlhttp.open("GET","http://localhost/Dev/ET/submit.php?q="+activityID+"-"+Time+"-"+submitDate,true);
					xmlhttp.send();
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
	$(document).ready(function(){
		$('#submitDate').click(function() {
			var newDate = '<h3>Date: ' + $('#Home_Date').val() + '</h3>';
			alert(newDate);
			$('#DateLabel').append(newDate);
		});
	});
 </script>
