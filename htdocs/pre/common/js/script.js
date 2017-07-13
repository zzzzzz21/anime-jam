var isSP = false;
if (typeof(window.matchMedia) == "function") {
  var widthQuery = window.matchMedia("(max-width:739px)");
  if (typeof(widthQuery.matches) != "undefined" && widthQuery.matches == true) {
    isSP = true;
  }
}
$(function(){
    if (isSP == true) {
        $("#contents img").each(function(){
          $(this).attr("src", $(this).attr("src").replace('.jpg', '_sp.jpg'));
          $(this).attr("src", $(this).attr("src").replace('.png', '_sp.png'));
        });
    }
});
$(function(){
    $('.nav-ul .pc_con').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){ 
                $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
    });
    $('.nav-btn').on('touchstart', function() {
        $('#header').toggleClass('is-active');
    });
});
