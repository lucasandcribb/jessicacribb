$(document).ready(function() {
	centerMainwrap('#main-wrap',808);
	centerMainwrap('#footer',730);
	centerMainwrap('#nav',928);
	centerLogotext('#logo-text',433);
	// centerItem('#page',1000);
	$('#nav li:last').addClass('last');
	setInputFieldFunctions();
	$('#mc-indicates-required').remove();
	$('body').click(function(event) {
		if (!$(event.target).closest('#newsletter, #signup-cont').length && $('#signup-cont').css("display") == "block"){
			$('#newsletter').removeClass('click');
			$('#signup-cont').animate({width: 'toggle'});
		};
	});

});

$(window).resize(function() {
	centerMainwrap('#main-wrap',808);
	centerMainwrap('#footer',730);
	centerMainwrap('#nav',928);
	centerLogotext('#logo-text',433);

});


function setInputFieldFunctions(){
$('.form-input').each(function(){
     if($(this).val() == "")
       $(this).val($(this).attr('default'));
   })

   $('.form-input').focus(function(){
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val('');

   }).blur(function() {
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val($(this).attr('default'));
   });
}

function centerItem(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   windowHeight = $(window).height();
   var w = windowWidth - iWidth; 
   var h = windowHeight - iHeight;
   $(item).css({
       'left': w/2,
       'top':h/2
   });   
}

function centerMainwrap(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   var w = windowWidth - iWidth; 
   $(item).css({'margin-left': (w/2) - 130});
   if(windowWidth < 1200) {
		$(item).css({'margin-left': 0});
		$('#footer').css({'margin-left': 35});
	}   
}

function centerLogotext(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   var w = windowWidth - iWidth; 
   $(item).css({'margin-left': (w/2) - 237});
   if(windowWidth < 1200) {
		$(item).css({'margin-left': 85});
	}
}

function showNewsletter() {
	$('#newsletter').addClass('click');
	$('#signup-cont').animate({width: 'toggle'});
	// if($('#newsletter').css("display") == "none"){
	// 	$(this).removeClass('click');
	// }	
}
// $('#signup-cont').toggle(function(){
// 	$('#signup-cont').animate({width: 'toggle'});
// 	$('#newsletter').addClass('click');
// },
// function(){
// 	$('#signup-cont').animate({width: 'toggle'});
// 	$('#newsletter').removeClass('click');
// });
