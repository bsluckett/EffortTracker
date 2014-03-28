$(document).ready(function(){
	 /** Navigation control **/
 // $('#navigation-pane li').click(function(event){
	// var element = $(this).find('div').hasClass('sub-menu') ? $(this).find('div.sub-menu') : this;
	// navigationControl(element);
 // });

 $('#tab-pane li').click(function(event){
	 var element = $(this).find('div').hasClass('sub-menu') ? $(this).find('div.sub-menu') : this;
	 tabControl(element);
 });
});

function tabControl(element){
	var content = 'pages/'+$(element).find('a').first().text().toLowerCase().replace(/\s/g,'_')+'.php';
	//alert(content);
	$('#task-container').empty();
 	if(content!='') $('#task-container').load(content);

	 // Remove css class and apply to the new active tab 
	$('#tab-pane li').removeClass('active');
	if($(element).parent().attr('id')=='tab-pane') $(element).addClass('active');
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