
function showServiceType(str) {
  if (str=="") {
    document.getElementById("sevicetype").innerHTML="";
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
      document.getElementById("sevicetype").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","servtype.php?q="+str,true);
  xmlhttp.send();
}

function showActivity(str) {

  if (str=="") {
    document.getElementById("activity").innerHTML="";
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
      document.getElementById("activity").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","activity.php?q="+str,true);
  
  xmlhttp.send();
}
