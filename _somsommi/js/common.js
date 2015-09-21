$(function(){
	//mouseover main thumbnail
	/*$('.cont_box').mouseover(function(){
		$(this).find('.cont_info').show();
	}); 
	$('.cont_box').mouseleave(function(){
		$(this).find('.cont_info').hide();
	}); */


	$(".buttons a.fb").click(function(){
		openFB(location.href,$("a.subCont h3").text());
	});
	$(".buttons a.tw").click(function(){
		openTW(location.href,$("a.subCont h3").text());
	});

});

function openFB(url,text){
	window.open( "https://www.facebook.com/login.php?next=http%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3D" + url + "%26t%3D" + text + "&display=popup", "_blank", "width=500, height=400, menubar=no, resizable=no, scrollbars=no, status=no, titlebar=no, toolbar=no", true );
}
function openTW(url,text){
	window.open( "https://twitter.com/intent/tweet?url=" + url + "&text=" + text, "_blank", "width=500, height=400, menubar=no, resizable=no, scrollbars=no, status=no, titlebar=no, toolbar=no", true );
}