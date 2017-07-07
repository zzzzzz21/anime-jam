$(document).ready(function () {
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) 
    {
    $("body").addClass("smp");
        changeWidget = function() {
          var twFrame;
          twFrame = $('iframe.twitter-timeline');
          if (twFrame.length > 0) {
            twFrame.css({
              'width': '750px'
            });
            if (!!~navigator.userAgent.indexOf('Android')) {
              twFrame.contents().find('body').css({
                'zoom': $('body').css('zoom')
              });
            }
            twFrame.contents().find(".customisable-border").css({
              'max-width': '690px'
            });
            twFrame.contents().find('#twitter-widget-1').css({
              'max-width': '690',
              'width': '690'
            });
            twFrame.contents().find('.e-entry-title,.profile .p-name').css({
              'font-size': '22px',
              'line-height': '1.6em'
            });
            twFrame.contents().find('.p-author ,.dt-updated,.customisable-highlight').css({
              'font-size': '18px',
              'line-height': '1.6em'
            });
            twFrame.contents().find('.header').css({
              'padding-left': '50px'
            });
            twFrame.contents().find('.e-entry-content').css({
              'padding-left': '50px'
            });
            twFrame.contents().find('.header .avatar').css({
              'width': '97px',
              'height': '97px'
            });
            twFrame.contents().find('.customisable, .customisable:link, .customisable:visited, .customisable:hover, .customisable:focus, .customisable:active, .customisable-highlight:hover, .customisable-highlight:focus, a:hover .customisable-highlight, a:focus .customisable-highlight').css({
              'color': '#f33342'
            });
          } else {
            setTimeout(changeWidget, 1000);
          }
        };
        changeWidget();
    }
});

$(function() {
    var agent = navigator.userAgent;
    var contentWidth = 750;
    var _androidPer = 1;

    if(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/iPod/) != -1) {
        var min_scale = Math.round( ( screen.width / contentWidth ) * 10000 , 5 ) / 10000;
        var max_scale = Math.round( ( screen.height / contentWidth ) * 10000 , 5 ) / 10000;
        $("head").prepend('<meta name="viewport" id="viewport" content="width=' + contentWidth + ', minimum-scale=' + min_scale + ', maximum-scale=' + max_scale + ', user-scalable=no">');

    } else if (agent.search(/Android/) != -1)  {
        $("head").prepend('<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" />');

        $(window).bind('load', function(){
            $("html").css("zoom" , $(window).width()/contentWidth);
            _androidPer = ($(window).width()/contentWidth);
        });

        $(window).bind('resize', function(){
            $("html").css("zoom" , $(window).width()/contentWidth);
        });
    }


    $('a[href^=#about]').click(function(){
        var speed = 520;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").stop().animate({scrollTop:position}, speed, "swing");
        return false;
    });


    $('.pageTop').click(function(event) {
        $('html,body').stop().animate({scrollTop:0},400);
    });


    var menuAction = true;

    $(".menuBtn").click(function() {
        if (menuAction) {
            $("nav").stop().animate({opacity: "show"}, 300);
        } else{
            $("nav").stop().animate({opacity: "hide"}, 300);
        };
        menuAction = !menuAction;
    });
})
