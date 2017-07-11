$(window).on("load resize", function(){
 // mainImgSize();
  navCheck();
});

$(function(){
     $('.nav-ul img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){ 
                $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
   });
});



/*
$(function() {

	//スクロールでpagetopBTN表示
	var topBtn = $('.pagetop');	
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	

	//MENU
	$(".navIco .op").on("click", function() {
		 current_scrollY = $( window ).scrollTop(); 
		 $( 'body' ).css( {
			position: 'fixed',
			width: '100%',
			top: -1 * current_scrollY
		 });
		
		$("header .gNav").addClass("active");
		$("header").addClass("active");
		$(".navBg-sp").fadeIn();
		$("header .gNav").fadeIn();
		$("header .navIco .op").fadeOut();
		$("header .navIco .closeIco").fadeIn();
	});

	$(".closeIco").on("click", function() {
		$( ' body' ).attr( { style: '' } );
		$( 'html, body' ).prop( { scrollTop: current_scrollY } );

		$("header .gNav").removeClass("active");
		$("header").removeClass("active");
		$(".navBg-sp").fadeOut();
		$("header .gNav").fadeOut();
		$("header .navIco .op").fadeIn();
		$("header .navIco .closeIco").fadeOut();
	});
	
         
});
$(function(){

  function getFirstScrollable(selector){
    var $scrollable;

    $(selector).each(function(){
      var $this = $(this);
      if( $this.scrollTop() > 0 ){
        $scrollable = $this;
        return false;
      }else{
        $this.scrollTop(1);
        if( $this.scrollTop() > 0 ){
          $scrollable = $this;
          return false;
        }
        $this.scrollTop(0);
      }
    });

    return $scrollable;
  }

  var $win = $(window),
      $doc = $(document),
      $scrollElement = getFirstScrollable("html,body"),
      mousewheel = "onwheel" in document ? "wheel" : "onmousewheel" in document ? "mousewheel" : "DOMMouseScroll";

  $doc.on("click", "a[href^=#]", function(e){
    var $target = $(this.hash),
        top;

    if( $target.size() < 1 ) return false;

    top = $target.offset().top;
    top = Math.min(top, $doc.height() - $win.height());

    $doc.on(mousewheel, function(e){ e.preventDefault(); });

    $scrollElement.stop().animate({scrollTop: top}, 1000, "easeOutQuint", function(){
      $doc.off(mousewheel);
    });

    return false;
  });
  
  

	// PAGE TOP
	$('.pagetop').click(function () {
		$('html,body').animate({scrollTop:0}, 'normal');
		return false;
	});
 
});



function navCheck(){
	if($(window).width() > 767){
		$("header").removeClass("active");
		$("header .gNav").removeClass("active");
		$("header .gNav").show();
		$("header .navIco").removeClass("active");
		$("header .navIco .closeIco").hide();
		$("header .navIco .op").show();
	}else{
		if($("header .gNav").hasClass("active")){
		}else{ $("header .gNav").hide(); }
	}
}

*/


