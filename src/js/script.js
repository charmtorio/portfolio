$(function() {
    var type_d = "#typed";

    if ( $(type_d).length ){
        var typed = new Typed(type_d, {
            stringsElement: '#typed-strings',
            typeSpeed: 40,
            backSpeed: 0,
            backDelay: 1500,
            startDelay: 1000,
            fadeOut: false,
            loop: true
        });
    }

    // $('.home-item').on('click', function(e) {
    //     $('.left-col').css({"transform":""});

    //     $('.right-col').css({
    //         "transform":"none",
    //         "max-width":"50%",
    //     });
    //     $('.right-col .menu_list a').css({
    //         "transform":"scale(1)"
    //     });
    //     $('.right-col .menu_list li:first-child').addClass('d-none');

    //     $('.toggle-col').css({"transform":""});
    // });

    // $('.menu-item').on('click', function(e) {
    //     var datalink = $(this).find('a').data('hover');
    //     $(this).addClass('active');
    //     $(this).siblings().removeClass('active');
        
    //     $('.left-col').css({"transform":"translateX(-100%)"});

    //     $('.right-col').css({
    //         "transform":"translateX(-200%)",
    //         "max-width":"25%",
    //     });
    //     $('.right-col .menu_list a').css({
    //         "transform":"scale(0.64)"
    //     });
    //     $('.right-col .menu_list li:first-child').removeClass('d-none');

    //     $('.toggle-col').css({"transform":"translateX(-150%)"});
    // });
});