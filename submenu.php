<?php 
  if($_SERVER["REQUEST_METHOD"] == $_GET )
  {
     $ServiceID = $_GET["serviceID"];
	 echo $ServiceID;
  }
   $ServiceID = $_GET["serviceID"];
   var_dump($_GET);
	 echo $ServiceID;
  echo "submenu!";
?>