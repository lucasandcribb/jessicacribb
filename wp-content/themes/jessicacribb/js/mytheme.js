$(document).ready(function() {
	centerMainwrap('#main-wrap',808);
	centerMainwrap('#footer',750);
	centerMainwrap('#home-slider',650);
	$('#nav li:last').addClass('last');
	setInputFieldFunctions();
	$('#mc-indicates-required').remove();
	$('body').click(function(event) {
		if (!$(event.target).closest('#newsletter, #signup-cont').length && $('#signup-cont').css("display") == "block"){
			$('#newsletter').removeClass('click');
			$('#signup-cont').animate({width: 'toggle'});
		};
	});
	showServices();
	$('.single-tip-cont .tip-text').hide().slice(0, 4).show();

	$('.gallery-nav').click(function() {
		
		if ($(this).hasClass('gallery-title-center')) {

		} else if ($(this).hasClass('gallery-title-left')) {
			$('.gallery-frame').hide();
			var leftGallery = $('.gallery-title-left  .left-content').html(),
				currentGallery = $('.gallery-title-center .center-content').html();
			$('.gallery-title-left').hide();
			$('.gallery-title-center').hide();
			$('.gallery-title-center .center-content').html(leftGallery);
			$('.gallery-title-left .left-content').html(currentGallery);
			$('.gallery-title-left').fadeIn();
			$('.gallery-title-center').fadeIn();
			if (rightGallery == "Hair") {
				$('#hair-gallery').fadeIn();
			} else if (rightGallery == "Makeup") {
				$('#makeup-gallery').fadeIn();
			} else if (rightGallery == "Before &amp; After") {
				$('#banda-gallery').fadeIn();
			}
		} else if ($(this).hasClass('gallery-title-right')) {
			$('.gallery-frame').hide();
			var rightGallery = $('.gallery-title-right .right-content').html(),
				currentGallery = $('.gallery-title-center .center-content').html();
			$('.gallery-title-right').hide();
			$('.gallery-title-center').hide();
			$('.gallery-title-center .center-content').html(rightGallery);
			$('.gallery-title-right .right-content').html(currentGallery);
			$('.gallery-title-right').fadeIn();
			$('.gallery-title-center').fadeIn();
			if (rightGallery == "Hair") {
				$('#hair-gallery').fadeIn();
			} else if (rightGallery == "Makeup") {
				$('#makeup-gallery').fadeIn();
			} else if (rightGallery == "Before &amp; After") {
				$('#banda-gallery').fadeIn();
			}
		}
	});
		
	$('#share-loyalty').click(function() {
		$('.share-overlay').hide();
		$('#overlay-shade').fadeIn();
		$('#share-loyalty-overly').fadeIn();
	});

	$('#share-referral').click(function() {
		$('.share-overlay').hide();
		$('#overlay-shade').fadeIn();
		$('#share-referral-overly').fadeIn();
	});

	$('.close').click(function() {
		$('.share-overlay').hide();
		$('#overlay-shade').hide();
	});

});

$(window).resize(function() {
	centerMainwrap('#footer',750);
	centerMainwrap('#home-slider',650);
	centerMainwrap('#main-wrap',808);
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
   $(item).css({'margin-left': (w/2) - 200});
   if(windowWidth < 1220) {
		$(item).css({'margin-left': 0});
		$('#footer').css({'margin-left': 25});
		$('#home-slider').css({'margin-left': 75});
	}   
}

function centerLogotext(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   var w = windowWidth - iWidth; 
   $(item).css({'margin-left': (w/2) - 200});
   if(windowWidth < 1220) {
		$(item).css({'margin-left': 220});
	}
}

function showServices() {
	$('.sub-service-cont').each(function() {
		var id = $(this).attr('id');
		$(this).children('.service-info').each(function() {
			if (!$(this).hasClass(id)) {
				$(this).remove();
			}		
		});
	});
	$('.service-box').each(function() {
		var id = $(this).attr('id');
		$(this).children('.service-info').each(function() {
			if (!$(this).hasClass(id)) {
				$(this).remove();
			}		
		});
	});
	$('.sub-sub-cont').each(function() {
		var id = $(this).attr('id');
		$(this).children('.service-info').each(function() {
			if (!$(this).hasClass(id)) {
				$(this).remove();
			}		
		});
	});
	$('.single-tip-cont').each(function() {
		var id = $(this).attr('id');
		$(this).children('.tip-text').each(function() {
			if (!$(this).hasClass(id)) {
				$(this).remove();
			}		
		});
	});
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

















