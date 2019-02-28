
jQuery(document).ready(function($) {

    $('#main-nav .menu').slicknav({
        label: '',
        allowParentLinks: true,
        init: function(){
            $('.slicknav_nav').width($(window).width());
            $('.slicknav_nav').height($(window).height());
        }
    });
    
    
    $('.slide').slick({
        
    });
    
     $(window).on('resize scroll', function(){
        $('.slicknav_nav').width($(window).width());
        $('.slicknav_nav').height($(window).height());
    });
    
    $('body').scroll(function(){
		stickyHeaderCheck();
	});
    
    stickyHeaderCheck();
    
});

function stickyHeaderCheck() {
  var header = $("#header");

  if($('body').scrollTop() > 1) { 
      if(!header.hasClass("sticky")){
          header.addClass("sticky");
      }
  } else {
      if(header.hasClass("sticky")){
          header.removeClass("sticky");
      }
  }
}