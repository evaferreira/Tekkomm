jQuery(document).ready(function($){
    $(window).scroll(function(){
        if ($(this).scrollTop() === 0) {
            $('header').removeClass('white');
        } else {
            $('header').addClass('white');
        }
    });

});