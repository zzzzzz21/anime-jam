var isSP = false;
if (typeof(window.matchMedia) == "function") {
  var widthQuery = window.matchMedia("(max-width:739px)");
  if (typeof(widthQuery.matches) != "undefined" && widthQuery.matches == true) {
    isSP = true;
  }
}

$(function(){
    if (isSP == true) {
        $("body[id!='news'] #contents img").each(function(){
          $(this).attr("src", $(this).attr("src").replace('.jpg', '_sp.jpg'));
          $(this).attr("src", $(this).attr("src").replace('.png', '_sp.png'));
        });
    }
    if (isSP == true) {
        $("body[id='top'] .contentsInner-news img").each(function(){
          $(this).attr("src", $(this).attr("src").replace('_sp.jpg', '.jpg'));
          $(this).attr("src", $(this).attr("src").replace('_sp.png', '.png'));
        });
	}
    $('.nav-btn').on('touchstart', function() {
        $('#header').toggleClass('is-active');
    });
    // Œ»Ý’n‚ÌURL‚ðŽæ“¾
    var url = location.href;
    $('.nav-ul li').removeClass('is-current');
    if (url.match(/news/)) {
        $('#nav-ul_news').addClass('is-current');
    }
    if (url.match(/info/)) {
        $('#nav-ul_info').addClass('is-current');
    }
    if (url.match(/cast/)) {
        $('#nav-ul_cast').addClass('is-current');
    }
    if (url.match(/lineup/)) {
        $('#nav-ul_lineup').addClass('is-current');
    }
    if (url.match(/ticket/)) {
        $('#nav-ul_ticket').addClass('is-current');
    }
    if (url.match(/movie/)) {
        $('#nav-ul_movie').addClass('is-current');
    }
    if (url.match(/liveviewing/)) {
        $('#nav-ul_live-viewing').addClass('is-current');
    }
    if (url.match(/special/)) {
        $('#nav-ul_special').addClass('is-current');
    }
});

function changeTwitterWidgetDesign(){
  var $twitter_widget = $('iframe.twitter-timeline');
  var $twitter_widget_contents = $twitter_widget.contents();
  
  if ($twitter_widget.length > 0 && $twitter_widget[0].contentWindow.document.body.innerHTML !== ""){
    $twitter_widget_contents.find('head').append('<link href="common/css/twitter.css" rel="stylesheet" type="text/css">');
  }
  else {
    setTimeout(function(){
      changeTwitterWidgetDesign();
    }, 350);
  }
}
changeTwitterWidgetDesign();
