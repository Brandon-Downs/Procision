
jQuery(document).ready(function($) {
    
    
    
    var  mn = $("#main-nav");
    mns = "sticky";
    hdr = $('header').height();
    var stickyOffset = $('#main-nav').offset().top;
    
    $(window).scroll(function() {
      if( $(this).scrollTop() > stickyOffset ) {
        mn.addClass(mns);
      } else {
        mn.removeClass(mns);
      }
    });

    $('#main-nav .menu').slicknav({
        label: '',
        allowParentLinks: true,
        init: function(){
            $('.slicknav_nav').width($(window).width());
            $('.slicknav_nav').height($(window).height());
        }
    });
    
    
//    $('.slide').slick({
//        prevArrow: '<div class="heroPrev"></div>',
//        nextArrow: '<div class="heroNext"></div>'
//    });
    
     $(window).on('resize scroll', function(){
        $('.slicknav_nav').width($(window).width());
        $('.slicknav_nav').height($(window).height());
    });
    
});
