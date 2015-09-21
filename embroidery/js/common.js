$(function(){

	$(".buttons a.fb").click(function(){
		openFB(location.href,$("a.subCont h3").text());
	});
	$(".buttons a.tw").click(function(){
		openTW(location.href,$("a.subCont h3").text());
	});

    /*m_menu*/
    var mobile = false;
    $('.m_menu button').click(function(){
        if(mobile == false){
            mobile = true;
            $(this).parent().parent().find('ul').fadeIn();

        }else{
            mobile = false;
            $(this).parent().parent().find('ul').fadeOut();

        }

    });
    $('.m_close').click(function(){
        mobile = false;
        $(this).parent().parent().find('ul').hide();
    });

    /*gnb*/
    $(window).scroll(function() {
        if ($(window).scrollTop() > 200 ){
            $('.menu').addClass('show');
            $('.main_title').addClass('show');
        } else {
            $('.menu').removeClass('show');
            $('.main_title').removeClass('show');
        };      
    });


    /*top button*/
    var scrollTop = $(document).scrollTop();
    var currentTop = parseInt($(".nav").css("post_top"));
    if( BrowserDetect.isMobile() ){
    	$(".nav").hide();
    	/*$(window).scroll(function() {
        	scrollTop = $(document).scrollTop();
            if(scrollTop > 0){
            	$(".nav").show();
            }else if(scrollTop == 0){
                $(".nav").hide();
            } 
    	});   */ 	
    }else{
        $(window).scroll(function() {
            scrollTop = $(document).scrollTop();
            if(scrollTop > 500){
                if($(document).height() - $(window).scrollTop() > 584){
                	$(".nav").stop().animate({"top": $(window).scrollTop()+"px"}, 800);
                }
            }else{
                $(".nav").stop().animate({"top": currentTop+"px"}, 800);
            }
        });
        $(".nav").click(function(){
            $(".nav").stop().animate({"top": currentTop+"px"}, 800);
        });
    }






});

function openFB(url,text){
	window.open( "https://www.facebook.com/login.php?next=http%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3D" + url + "%26t%3D" + text + "&display=popup", "_blank", "width=500, height=400, menubar=no, resizable=no, scrollbars=no, status=no, titlebar=no, toolbar=no", true );
}
function openTW(url,text){
	window.open( "https://twitter.com/intent/tweet?url=" + encodeURIComponent(url) + "&text=" + text, "_blank", "width=500, height=400, menubar=no, resizable=no, scrollbars=no, status=no, titlebar=no, toolbar=no", true );
}