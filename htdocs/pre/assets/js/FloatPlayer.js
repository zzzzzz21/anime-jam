// JavaScript Document

var FloatPlayer = function(_id) {
	this.id = _id;
	this.init();
$(window).load(function () {
new Modal();
});}

//Youtube Player
var Modal = (function() {
	$('.close,.modal_bg').click(function(){
		$('.close,.modal_bg,.modal').fadeOut();
	});
})();

var Youtube = (function() {
    //public static

    //constructor
    var _myID;


    function Youtube(_id) {
        _myID = _id;
        init();
    }

    //private
    var init = function() {
		$('#floatBg').fadeIn();
		$('#YoutubeBg').delay(400).velocity({opacity:1,scale:1},{duration:400});		
		setTimeout(function(){
        var _html = "";
		_html += '<div id="movieWrap">';
		_html += '<div class="floatImage">';
		_html += '</div>';
		_html += '</div>';
        $('#floatPlayer').append(_html);
		if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        $('.floatImage').delay(400).append('<div id="YoutubeWrap"><iframe width="700" height="390" src="http://www.youtube.com/embed/' + _myID + '?rel=0&theme=dark&autohide=1&start=0&autoplay=1&vq=highres" frameborder="0" allowfullscreen></iframe><div>');
	}else{
        $('.floatImage').delay(400).append('<div id="YoutubeWrap"><iframe width="960" height="540" src="http://www.youtube.com/embed/' + _myID + '?rel=0&theme=dark&autohide=1&start=0&autoplay=1&vq=highres" frameborder="0" allowfullscreen></iframe><div>');
}
		
		$('.btn_close').hover(
			function() {$(this).stop().velocity({opacity:"0.5"},300);},
			function() {$(this).stop().velocity({opacity:"1"},300);});

		$('#floatBg,.btn_close,#movieWrap').click(function(){
		$('#YoutubeBg').velocity({opacity:0,scale:0},{duration:400});
		setTimeout(function(){$('#floatBg').fadeOut(400);}, 400);
		$('.btn_close,#movieWrap').fadeOut(400);
		$('#YoutubeWrap').attr('src','').css({overflow:'hidden',height:'0px'});
			 setTimeout(function(){$('#YoutubeWrap').remove();}, 100);
			 setTimeout(function(){$('#movieWrap').remove();}, 100);
		});
		}, 800);




    }

    return Youtube;
})();