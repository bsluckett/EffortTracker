<li id="<?php echo $S["SERVICE_ID"] ?>" > <a href="#" onclick="showUser(<?php echo $S["SERVICE_ID"] ?>)"><?php echo $S["SERVICE_NAME"] ?></a> </li>

<script>
function showUser(str) {
  //str = $(element).attr('id')
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
  xmlhttp.open("GET","ServiceID.php?serviceID="+str,true);
  xmlhttp.send();
}

</script>