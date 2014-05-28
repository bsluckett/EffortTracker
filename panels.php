<?php
	 include_once $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/tasks.php";
	 //echo "out ".$ServiceID;
	  if($_SERVER["REQUEST_METHOD"] == "GET" )
		{
			if (isset($ServiceID)) { 
				$ServiceID = 300;
			} else {
				$ServiceID = $_GET["serviceID"];
			}
		}
	$ServiceTypeObject = new TaskObject;
    $ServiceType = $ServiceTypeObject->get_ServiceType($ServiceID);;
	  foreach($ServiceType as $ST) {
		include $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/ServiceType.html.php";
      }
 ?>
 
  <script>
$(document).ready(function(){
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      //document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	}
  }
	xmlhttp.open("GET","panels.php?serviceID=300",true);
	xmlhttp.send();
});
</script>