
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
    
});