var XServiceID;
$(document).ready(function(){
/* var MenuElement;
  $('#navigation-pane li').click(function(event){
	alert("here");
	MenuElement = $(this).find('div').hasClass('sub-menu') ? $(this).find('div.sub-menu') : this;
	alert ($(MenuElement).find('a').first().text().toLowerCase().replace(/\s/g,'_'));
  }); */
 $('#tab-pane li').click(function(event){
	 var SMElement = $(this).find('div').hasClass('sub-menu') ? $(this).find('div.sub-menu') : this;
	 tabControl(SMElement);
 });


});

function tabControl(SMElement){
	//var content = 'pages/'+$(element).find('a').first().text().toLowerCase().replace(/\s/g,'_')+'.php';
	var ServiceID = $(SMElement).attr('id');
	reports(ServiceID);
	
		xmlhttp.open("GET","panels.php?serviceID="+ServiceID,true);
		xmlhttp.send();
		var content ='panels.php?serviceID='+ServiceID;
		$('#task-container').empty();
		if(content!='') $('#task-container').load(content);
		$('#').empty();
 

	 // Remove css class and apply to the new active tab 
	$('#tab-pane li').removeClass('active');
	if($(SMElement).parent().attr('id')=='tab-pane') $(SMElement).addClass('active');
	
}
function reports(ServiceID){
		xmlhttp.open("GET","colrotseries.php?serviceID="+ServiceID,true);
		xmlhttp.send();
		var ReportContent = 'colrotseries.php?serviceID='+ServiceID;
		$('#bar-container').empty();
		if(ReportContent!='') $('#bar-container').load(ReportContent);
}

//  function navigationControl(element){
//  	var content = 'pages/'+$(element).find('a').first().text().toLowerCase().replace(/\s/g,'_')+'.php';
//  	// Show loading animation while emptying the existing body and loading in the the new content
// //	$('#loading-overlay').show();
// 	$('#body-container').empty();
//  	if(content!='') $('#body-container').load(content);
	
//  // Remove css class and apply to the new active tab 
//  	$('#navigation-pane li').removeClass('active');
//  	if($(element).parent().attr('id')=='navigation-pane') $(element).addClass('active');
// // 	// 	else if($(element).hasClass('sub-menu')){
// // 	// 		$(element).parent().addClass('selected');
// // 	// 		$(element).removeClass('sub-menu-open');
// // 	// 	} else {
// // 	// 		$(element).parent().parent().parent().addClass('selected');
// // 	// 		$(element).parent().parent().removeClass('sub-menu-open');
// // //	}
// }