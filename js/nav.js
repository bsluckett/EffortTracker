$(document).ready(function(){
	 /** Navigation control **/
 $('#navigation-pane li').click(function(event){
	 	// event.preventDefault();
		// 	event.stopPropagation();
	// 	
	var element = $(this).find('div').hasClass('sub-menu') ? $(this).find('div.sub-menu') : this;
	navigationControl(element);
 });

 $('#tab-pane li').click(function(event){
	 	// event.preventDefault();
		// 	event.stopPropagation();
	// 	
	
	 var element = $(this).find('div').hasClass('sub-menu') ? $(this).find('div.sub-menu') : this;
	 tabControl(element);
 });
	// $('.sub-menu-container').mouseover(function(event){
	// 		event.preventDefault();
	// 		$(this).find('.sub-menu').addClass('sub-menu-open');
	// 	}).mouseout(function(event){
	// 		event.preventDefault();
	// 		$(this).find('.sub-menu').removeClass('sub-menu-open');
	// 	});
	// 	$('.sub-menu').mouseover(function(event){
	// 		if(!$(this).hasClass('sub-menu-open')) $(this).addClass('sub-menu-open');
	// 	}).mouseout(function(event){
	// 		event.preventDefault();
	// 		$(this).removeClass('sub-menu-open');
	// 	});
	// 	$('#user-info span').click(function(event){
	// 		$(this).toggleClass('click');
	// 		if($(this).hasClass('click')) $('#fiscal-year').trigger('mouseover');
	// 		else $('#fiscal-year').trigger('mouseout');
	// 	});
	// 	$('#fiscal-year .sub-menu, #fiscal-year').mouseover(function(){
	// 		$('#user-info > span').addClass('click');
	// 	}).mouseout(function(){
	// 		$('#user-info > span').removeClass('click');
	// 	});
	// 	$('#fiscal-year .sub-menu li').click(function(event){
		// event.preventDefault();
		// 		event.stopPropagation();
		// 		$(this).parent().find('span.selected').removeClass('selected');
		// 		$(this).find('span').addClass('selected');
		// 		$(this).parent().parent().removeClass('sub-menu-open');
		// 		$('#fiscal-year a span').text($(this).text());
		// 		$('#fiscal-year a input').val($(this).text());
		// 		$('#fiscal-year a input').trigger('change');
		// 		var year = $('#fiscal-year a span').text();
		// 		if($('#list').length > 0) {
		// 			$('#list').jqGrid('setGridParam',{postData:{fyear:year}}).trigger("reloadGrid",[{page:1}]);
		// 		}
		// 		if($('#fy_list').length > 0) {
		// 			$('#fy_list').jqGrid('setGridParam',{postData:{fyear:year}}).trigger("reloadGrid",[{page:1}]);
		// 		}
		// 	});
});

function tabControl(element){
	var content = 'pages/'+$(element).find('a').first().text().toLowerCase().replace(/\s/g,'_')+'.php';
	//alert(content);
	$('#tab-container').empty();
 	if(content!='') $('#tab-container').load(content);

	 // Remove css class and apply to the new active tab 
	$('#tab-pane li').removeClass('active');
	if($(element).parent().attr('id')=='tab-pane') $(element).addClass('active');
 	// else if($(element).hasClass('sub-menu')){
 	// 		$(element).parent().addClass('active');
 	// 		$(element).removeClass('sub-menu-open');
 	// 	} else {
 	// 	$(element).parent().parent().parent().addClass('active');
 	// 		$(element).parent().parent().removeClass('sub-menu-open');
 	// 	}
}

 function navigationControl(element){
 	var content = 'pages/'+$(element).find('a').first().text().toLowerCase().replace(/\s/g,'_')+'.php';
 	// Show loading animation while emptying the existing body and loading in the the new content
//	$('#loading-overlay').show();
	$('#body-container').empty();
 	if(content!='') $('#body-container').load(content);
	
 // Remove css class and apply to the new active tab 
 	$('#navigation-pane li').removeClass('active');
 	if($(element).parent().attr('id')=='navigation-pane') $(element).addClass('active');
// 	// 	else if($(element).hasClass('sub-menu')){
// 	// 		$(element).parent().addClass('selected');
// 	// 		$(element).removeClass('sub-menu-open');
// 	// 	} else {
// 	// 		$(element).parent().parent().parent().addClass('selected');
// 	// 		$(element).parent().parent().removeClass('sub-menu-open');
// //	}
}