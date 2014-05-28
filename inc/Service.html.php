<li id="submenuList" > <a href="#" onclick="showUser(this.value)"><?php echo $S["SERVICE_NAME"] ?></a> </li>

<script>
 $(document).ready(function() {
      $('#submenuList').click(function() {
		alert("I'm finally here");
	  });  
});
/* function showUser(str) {
  alert("in showUser");
  if (str=="") {
    //document.getElementById("txtHint").innerHTML="";
    return;
  } 
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
  xmlhttp.open("GET","submenu.php?q="+str,true);
  xmlhttp.send();
} */

//"<?php echo $S["SERVICE_ID"] ?>"
</script>