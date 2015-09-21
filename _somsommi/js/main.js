$(function(){
	
	/*$(window).bind('mousewheel', function(event) {
	    if (event.originalEvent.wheelDelta >= 0) {
	        //console.log('Scroll up');
	    }
	    else {
	        //console.log('Scroll down');
	    }
	});*/
	function sticky_relocate (){
		var window_top = $(window).scrollTop();
		var div_top = $('#welcome').offset().top;
		var div_top1 = $('#work').offset().top;
		var div_top2 = $('#about').offset().top;
		var div_top3 = $('#contact').offset().top;
		var mainHeight = $('#about').height();
		//var aniHeight = $('.main-animation').height();
	    /* About Logo + Desktop Menu */
	      /*if (window_top > div_top1 * 4/3) {
	        TweenMax.to($('#about'), 1, {css:{'height':'600px'}, ease:Expo.easeOut});
	      }
	      else if (window_top < div_top2 * 4/3) {
	        TweenMax.to($('#about'), 1, {css:{'height':'0'}, ease:Expo.easeOut});
	      }*/
		if (window_top > div_top1) {
			//if(mainHeight < 655){
				TweenMax.to($('#about'), 5, {css:{'height':'650px'}, ease:Expo.easeOut});
			//}
	    }else {
	    	TweenMax.to($('#about'), 1, {css:{'height':'0'}, ease:Expo.easeOut});
	    }

	}

	function aboutOpen(){
		$('#about').removeClass('off');
		$('html, body').stop().animate({
		    'scrollTop': $('#about').offset().top+2
		}, 600);
	}

	$(window).bind('scroll',function(e){
		if (navigator.userAgent.match(/iPad/) == null && navigator.userAgent.match(/iPhone|Mobile|UP.Browser|Android|BlackBerry|Windows CE|Nokia|webOS|Opera Mini|SonyEricsson|opera mobi|Windows Phone|IEMobile|POLARIS/) != null){
		}else{
			//sticky_relocate();
			parallaxScroll();
		}
	});
	$('.clickOn').click(function(){
		aboutOpen();
	});




	/*menu scroll*/
/*

    function onScroll(event){
		$('ul#drop li a').each(function () {
			var currLink = $(this);
			var refElement = $(currLink.attr("href"));
		});
    }

	$(document).on("scroll", onScroll);*/

	//smoothscroll
	$('a[href^="#"]').on('click', function () {
		$(document).off("scroll");

		var target = this.hash;
		$target = $(target);
		$('html, body').stop().animate({
		    'scrollTop': $target.offset().top+2
		}, 300);
		if($(this).is(".about-move")) aboutOpen();
	});


	function parallaxScroll(){
		var scrolled = $(window).scrollTop();
		$('#parallax-bg1').css('top', scrolled*.25+'px');
		$('#parallax-bg2').css('top', scrolled*.4+'px');
		$('#parallax-bg3').css('top', scrolled*.75+'px');
	}

	$('#mobileBt').click(function(){
		$('.top-bar-section').show();
	});
	$('.cl').click(function(){
		$('.top-bar-section').hide();
	});
	$('#webBt').click(function(){
		$('#drop').show();
	});
});