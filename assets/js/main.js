function paralaxBackground() {
    var element = $('body');
    var line_block = $('.line_block');
    var next_btn = $('.section_why__slider_wrapper__next');
    var circle_block = $('.section_what__image__background');
    var header__line = $('.header__line');
    var section_contacts__logo = $('.section_contacts__logo .section_contacts__logo__background');
    window.onscroll = function () {
        var scrolled = window.pageYOffset || document.documentElement.scrollTop;
        jQuery('.section_what__image__background').css('background-position-y', scrolled + 'px');

        element.css('background-position-y', scrolled / 2 + 'px');

        line_block.css('background-position-x', scrolled / 10 + 'px');


        next_btn.css('background-position-y', scrolled / 2 + 'px');

        circle_block.css('background-position-y', scrolled / 2 + 'px');

        header__line.css('background-position-y', 300 + scrolled / 2 + 'px');

        section_contacts__logo.css('background-position-y', scrolled / 2 + 'px');


    }

}


function backgroundMove() {
    var element = $('body');
    var line_block = $('.line_block');
    var next_btn = $('.section_why__slider_wrapper__next');
    var circle_block = $('.section_what__image__background');


    var header__line = $('.header__line');
    var section_contacts__logo = $('.section_contacts__logo .section_contacts__logo__background');
    $(window).mousemove(function (e) {
        var slowDownFactor = 14;
        var headerLineTreshold = 300;
        
        element.css('background-position-x', (e.pageX) / slowDownFactor + 'px');
        element.css('background-position-y', (e.pageY) / slowDownFactor + 'px');
        
        line_block.css('background-position-x', (e.pageX) / slowDownFactor + 'px');
        
        circle_block.css('background-position-x', (e.pageX) / slowDownFactor + 'px');
        circle_block.css('background-position-y', (e.pageY) / slowDownFactor + 'px');
        
        
        header__line.css('background-position-x', headerLineTreshold + (e.pageX) / slowDownFactor + 'px');
        header__line.css('background-position-y', headerLineTreshold + (e.pageY) / slowDownFactor + 'px');
        section_contacts__logo.css('background-position-x', (e.pageX) / slowDownFactor + 'px');
        section_contacts__logo.css('background-position-y', (e.pageY) / slowDownFactor + 'px');
    })
}


$(document).ready(function () {


    var circleHeight = $('.section_what__image img, .section_what__image svg').height();
    var circleWidth = $('.section_what__image img, .section_what__image svg').width();
    var circleTextHeight = $('.section_what__image .section_what__image__text').height();

    $('main .section_what .section_what__image').css('max-height', circleHeight)
    $('main .section_what .section_what__image').css('max-width', circleWidth);
    $('main .section_what .section_what__image').css('margin-bottom', circleTextHeight);
    $('main .section_what .section_what__image__text').css('max-width', circleWidth);


    var botLogoHeight = $('.section_contacts__logo__img svg').height();
    var botLogoWidth = $('.section_contacts__logo__img svg').width();
    $('main .section_contacts .section_contacts__logo__img').css('max-height', botLogoHeight)
    $('main .section_contacts .section_contacts__logo__img').css('max-width', botLogoWidth);


    if (screen.width >= 768) {
        backgroundMove();
    }
    else {
        paralaxBackground();
    }


});

jQuery(window).resize(function () {
    $('main .section_what .section_what__image').css('max-height', '100%');
    $('main .section_what .section_what__image').css('max-width', '100%');
    var circleHeight = $('.section_what__image img, .section_what__image svg').height();
    var circleWidth = $('.section_what__image img, .section_what__image svg').width();
    var circleTextHeight = $('.section_what__image .section_what__image__text').height();

    $('main .section_what .section_what__image').css('max-height', circleHeight)
    $('main .section_what .section_what__image').css('max-width', circleWidth);
    $('main .section_what .section_what__image').css('margin-bottom', circleTextHeight);
    $('main .section_what .section_what__image__text').css('max-width', circleWidth);

    var botLogoHeight = $('.section_contacts__logo__img svg').height();
    var botLogoWidth = $('.section_contacts__logo__img svg').width();
    $('main .section_contacts .section_contacts__logo__img').css('max-height', botLogoHeight)
    $('main .section_contacts .section_contacts__logo__img').css('max-width', botLogoWidth);


    if (screen.width >= 768) {
        backgroundMove();

    }
    else {
        paralaxBackground();

    }

});


jQuery('.section_why__slider_wrapper__slider').slick({
    arrows: true,
    fade: false,
    autoplay: false,
    speed: 900,
    dots: true,
    pauseOnHover: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    adaptiveHeight: true,
    variableWidth: true,
    nextArrow: $(".section_why__slider_wrapper__next, .section_why__slider_wrapper__slider__slide__link a"),
    responsive: [
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 1,
                variableWidth: true
            }
        }

    ]


});

jQuery('.section_how__slider_wrapper__slider').slick({
    arrows: true,
    fade: false,
    autoplay: false,
    speed: 900,
    dots: false,
    pauseOnHover: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: false,
    variableWidth: false,
    nextArrow: $(".section_how__slider_wrapper__next, .section_how__slider_wrapper__slider__slide__link a"),
});


$(document).ready(function () {
    function sliderTextButtons() {
        if (screen.width <= 680) {

            var sectionWhyNextTextFirst = $('.slick-current  + .slick-slide .section_why__slider_wrapper__slider__slide__title h2').text();
            jQuery('.slick-current .section_why__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionWhyNextTextFirst);

            var sectionWhyNextTextOther = $('.slick-current + .slick-slide + .slick-slide .section_why__slider_wrapper__slider__slide__title h2').text();
            jQuery('.slick-current  + .slick-slide .section_why__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionWhyNextTextOther);


            $('.section_why__slider_wrapper__slider').on('afterChange', function () {
                sectionWhyNextTextFirst = $('.slick-current  + .slick-slide .section_why__slider_wrapper__slider__slide__title h2').text();
                jQuery('.slick-current .section_why__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionWhyNextTextFirst);
            });


            $('.section_why__slider_wrapper__slider').on('beforeChange', function () {
                var sectionWhyNextTextOther = $('.slick-current + .slick-slide + .slick-slide .section_why__slider_wrapper__slider__slide__title h2').text();
                jQuery('.slick-current  + .slick-slide .section_why__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionWhyNextTextOther);
            });

        }

        else {

            var sectionWhyNextTextFirst = $('.slick-current  + .slick-active .section_why__slider_wrapper__slider__slide__title h2').text();
            jQuery('.slick-current .section_why__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionWhyNextTextFirst);

            var sectionWhyNextTextOther = $('.slick-current + .slick-active + .slick-slide .section_why__slider_wrapper__slider__slide__title h2').text();
            jQuery('.slick-current  + .slick-active .section_why__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionWhyNextTextOther);


            $('.section_why__slider_wrapper__slider').on('afterChange', function () {
                sectionWhyNextTextFirst = $('.slick-current  + .slick-active .section_why__slider_wrapper__slider__slide__title h2').text();
                jQuery('.slick-current .section_why__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionWhyNextTextFirst);
            });


            $('.section_why__slider_wrapper__slider').on('beforeChange', function () {
                var sectionWhyNextTextOther = $('.slick-current + .slick-active + .slick-slide .section_why__slider_wrapper__slider__slide__title h2').text();
                jQuery('.slick-current  + .slick-active .section_why__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionWhyNextTextOther);
            });

        }

        var sectionHowNextTextFirst = $('.slick-current  + .slick-slide .section_how__slider_wrapper__slider__slide__title h2').text();
        jQuery('.slick-current .section_how__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionHowNextTextFirst);

        var sectionHowNextTextOther = $('.slick-current + .slick-slide + .slick-slide .section_how__slider_wrapper__slider__slide__title h2').text();
        jQuery('.slick-current  + .slick-slide.section_how__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionHowNextTextOther);


        $('.section_how__slider_wrapper__slider').on('afterChange', function () {
            sectionHowNextTextFirst = $('.slick-current  + .slick-slide .section_how__slider_wrapper__slider__slide__title h2').text();
            jQuery('.slick-current .section_how__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionHowNextTextFirst);
        });


        $('.section_how__slider_wrapper__slider').on('beforeChange', function () {
            var sectionHowNextTextOther = $('.slick-current + .slick-slide + .slick-slide .section_how__slider_wrapper__slider__slide__title h2').text();
            jQuery('.slick-current  + .slick-slide.section_how__slider_wrapper__slider__slide__link > a').text('Next: ' + sectionHowNextTextOther);
        });
    }

    sliderTextButtons();


// Cache selectors
    var lastId,
        topMenu = $("#menu-primary-menu"),
        topMenuHeight = topMenu.outerHeight() + 15,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

// Bind click handler to menu items
// so we can get a fancy scroll animation
    menuItems.click(function (e) {
        var href = $(this).attr("href");
        // var offsetTop = $(href).offset().top - topMenuHeight - 20;
        var offsetTop = $(href).offset().top - topMenuHeight + 1;


        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 300);
        e.preventDefault();
    });

// Bind to scroll
    $(window).scroll(function () {
        // Get container scroll position

        var fromTop = $(this).scrollTop() + topMenuHeight + 40;
        // var fromTop = $(this).scrollTop() + topMenuHeight;


        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        console.log(cur);

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    });


});


