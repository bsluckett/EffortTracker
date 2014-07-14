$(document).ready(function(){
	$('#tab-pane li').click(function(event){
		var SMElement = $(this).find('div').hasClass('sub-menu') ? $(this).find('div.sub-menu') : this;
		tabControl(SMElement);
	});
});

function tabControl(SMElement){
	var ServiceID = $(SMElement).attr('id');
  var ServiceName = $('#'+ServiceID).text();
  //http://efforttracker.cloudapps.cisco.com/reports.php
 // http://efforttracker.cloudapps.cisco.com/reports.php#
  if (document.URL == "http://localhost:8887/reports.php"){
		reports(ServiceID);
	} else if(document.URL == "http://localhost:8887/reports.php#"){
    reports(ServiceID);
  } else {
    //alert("in home"+document.URL);
		if (ServiceID=="") {
    		document.getElementById("task-container").innerHTML="";
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
    			$('#task-container').empty();
      			document.getElementById("task-container").innerHTML=xmlhttp.responseText;
    		}
  		}
      //$('#task-container').empty();
		xmlhttp.open("GET","panels.php?serviceID="+ServiceID,true);
		xmlhttp.send();
	}
		//var content ='panels.php?serviceID='+ServiceID;
		// if(content!='') $('#task-container').load(content);
		// $('#').empty();
	 // Remove css class and apply to the new active tab 
	$('#tab-pane li').removeClass('active');
	if($(SMElement).parent().attr('id')=='tab-pane') $(SMElement).addClass('active');
	
}

function reports(ServiceID){
  if (ServiceID=="") {
        //document.getElementById("bar-container").innerHTML="";
        return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    Reportxmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    Reportxmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
    Reportxmlhttp.onreadystatechange=function() {
    if (Reportxmlhttp.readyState==4 && Reportxmlhttp.status==200) {
      // alert("OVER HERE!!!");
       $('#bar-container').empty();
       document.getElementById("bar-container").innerHTML = Reportxmlhttp.responseText;
          //  alert("AFTER!!!");
            //$('#bar-container').load(Reportxmlhttp.responseText)
            //alert(Reportxmlhttp.responseText);
    }
  }
  //var q = ServiceName.split(" ");
//alert(ServiceName.replace( /\s/g,""));
  //alert(q[2]);
    Reportxmlhttp.open("GET","tableau.php?ServiceID="+ServiceID,true);
    Reportxmlhttp.send();
    //var content ='colrotseries.php?serviceID='+ServiceID;
     //var content ='tableau.php?servicename='+ServiceName;
    // if(content!='') $('#bar-container').load(content);
    // $('#').empty();
 }

function showService(str) {
  //str = $(element).attr('id')
  // if (str=="") {
  //   //document.getElementById("txtHint").innerHTML="";
  //   return;
  // } 
  // if (window.XMLHttpRequest) {
  //   // code for IE7+, Firefox, Chrome, Opera, Safari
  //   Servicexmlhttp = new XMLHttpRequest();
  // } else { // code for IE6, IE5
  //   Servicexmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  // }
  // Servicexmlhttp.onreadystatechange=function() {
  //   if (Servicexmlhttp.readyState==4 && Servicexmlhttp.status==200) {
  //    // document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
  //   }
  // }
  //Servicexmlhttp.open("GET","ServiceID.php?serviceID="+str,true);
 // Servicexmlhttp.send();
}