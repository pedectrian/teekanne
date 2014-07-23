var mainSlider = {
    init: function() {
        mainSlider.slideWidth = 1140;
        mainSlider.currentPosition = 0;
        mainSlider.slides = $('.slide');
        mainSlider.captions = $('.slide-bottom-description');
        mainSlider.numberOfSlides = mainSlider.slides.length;

        mainSlider.slides
            .wrapAll('<div id="slidesHolder"></div>')
            .css({ 'float' : 'left' });
        mainSlider.captions
            .wrapAll('<div id="captionsHolder"></div>')
            .css({ 'float' : 'left' });

        $('#slidesHolder, #captionsHolder').css('width', mainSlider.slideWidth * mainSlider.numberOfSlides);

        mainSlider.manageNav(mainSlider.currentPosition);

        //tell the buttons what to do when clicked
        $('.slider-nav').on('click', function(){

            if ($(this).hasClass('slide-left')) {
                mainSlider.currentPosition = mainSlider.currentPosition-1;
            } else {
                mainSlider.currentPosition = mainSlider.currentPosition+1;
            }

            //hide/show controls
            mainSlider.manageNav(mainSlider.currentPosition);
            mainSlider.moveSlide();
        });


        $('.tea-list li a').on('click', function(){
            if($(this).hasClass('current')) {return;}

            $('.tea-list li a.current').removeClass('current');
            $(this).addClass('current');

            if($(this).attr('data-index') > mainSlider.numberOfSlides) {return false;}

            mainSlider.currentPosition = parseInt($(this).attr('data-index'));

            //hide/show controls
            mainSlider.manageNav(mainSlider.currentPosition);
            mainSlider.moveSlide();
        });
    },
    manageNav: function (position) {
        //hide left arrow if position is first slide
        if(position==0){ $('.slide-left').hide() }
        else { $('.slide-left').show() }
        //hide right arrow is slide position is last slide
        if(position==mainSlider.numberOfSlides-1){ $('.slide-right').hide() }
        else { $('.slide-right').show() }
    },
    moveSlide: function () {
        $('#slidesHolder')
            .animate({'marginLeft' : mainSlider.slideWidth*(-mainSlider.currentPosition)});

        $('#captionsHolder')
            .animate({'marginLeft' : mainSlider.slideWidth*(-mainSlider.currentPosition)});

        var current = $('.tea-list li a.current');
        var next = $('.tea-list li a').filter(function(){
            return $(this).attr('data-index') == mainSlider.currentPosition
        });

        console.log(mainSlider.currentPosition);
        if(next.length) {
            current.removeClass('current');
            next.addClass('current');
        } else if(parseInt(current.attr('data-index')) > mainSlider.currentPosition) {
            current.removeClass('current');
            current.parent().prev('li').find('a').addClass('current');
        }

    }
};
var historySlider = {
    init: function() {
        historySlider.slideWidth = 364;
        historySlider.currentPosition = 0;
        historySlider.slides = $('.history-slides .fb-6-col-1');
        historySlider.numberOfSlides = historySlider.slides.length;

        historySlider.slides
            .wrapAll('<div id="historySlidesHolder"></div>')
            .css({ 'float' : 'left' });

        $('#historySlidesHolder').css('width', historySlider.slideWidth * historySlider.numberOfSlides);

        historySlider.manageNav(historySlider.currentPosition);

        //tell the buttons what to do when clicked
        $('.history-controls a').on('click', function(){
            if($(this).attr('data-index') > historySlider.numberOfSlides) {return false;}

            historySlider.currentPosition = $(this).attr('data-index');

            $('.history-controls a.current').removeClass('current');
            $(this).addClass('current');

            //hide/show controls
            historySlider.manageNav(historySlider.currentPosition);
            historySlider.moveSlide();
        });

        //tell the buttons what to do when clicked
        $('.history-slider-nav').on('click', function(){

            if ($(this).hasClass('history-slide-left')) {
                historySlider.currentPosition = parseInt(historySlider.currentPosition)-1;
            } else {
                historySlider.currentPosition = parseInt(historySlider.currentPosition)+1;
            }

            //hide/show controls
            historySlider.manageNav(historySlider.currentPosition);
            historySlider.moveSlide();
        });
    },
    manageNav: function (position) {
        //hide left arrow if position is first slide
        if(position==0){ $('.history-slide-left').hide() }
        else { $('.history-slide-left').show() }
        //hide right arrow is slide position is last slide
        if(position>=historySlider.numberOfSlides-3){ $('.history-slide-right').hide() }
        else { $('.history-slide-right').show() }

        var current = $('.history-controls a').filter(function(){
            return $(this).attr('data-index') == historySlider.currentPosition;
        });

        if(current.length) {
            $('.history-controls a').removeClass('current');
            current.addClass('current');
        }
    },
    moveSlide: function () {
        console.log(historySlider.currentPosition);
        $('#historySlidesHolder')
            .animate({'marginLeft' : historySlider.slideWidth*(-historySlider.currentPosition)});
    }
};


var qualitySlider = {
    init: function() {
        qualitySlider.slideWidth = 580;
        qualitySlider.currentPosition = 0;
        qualitySlider.slides = $('.quality-col-1');
        qualitySlider.numberOfSlides = qualitySlider.slides.length;

        qualitySlider.slides
            .wrapAll('<div id="qualitySlidesHolder"></div>')
            .css({ 'float' : 'left' });

        $('#qualitySlidesHolder').css('width', qualitySlider.slideWidth * qualitySlider.numberOfSlides);

        qualitySlider.manageNav(qualitySlider.currentPosition);

        //tell the buttons what to do when clicked
        $('.quality-slider-nav').on('click', function(){
            if ($(this).hasClass('quality-slide-left')) {
                qualitySlider.currentPosition = qualitySlider.currentPosition-1;
            } else {

                qualitySlider.currentPosition = qualitySlider.currentPosition+1;
            }

            //hide/show controls
            qualitySlider.manageNav(qualitySlider.currentPosition);
            qualitySlider.moveSlide();
        });

    },
    manageNav: function (position) {
        //hide left arrow if position is first slide
        if(position==0){ $('.quality-slide-left').hide() }
        else { $('.quality-slide-left').show() }
        //hide right arrow is slide position is last slide
        if(position==qualitySlider.numberOfSlides-1 || qualitySlider.numberOfSlides <= 2 ){ $('.quality-slide-right').hide() }
        else { $('.quality-slide-right').show() }
    },
    moveSlide: function () {
        $('#qualitySlidesHolder')
            .animate({'marginLeft' : qualitySlider.slideWidth*(-qualitySlider.currentPosition)});
    }
};

/**
 * Created by pedectrian on 09.06.14.
 */
$(document).ready(function(){
    var isFrontPage = true;

    if(isFrontPage) {
        if (location.hash) {
            window.scrollTo(0, 0);

            scrollToBlock(location.hash)
        }
    }
    $('.menu-box').on('click', function(){
        $('#menu').toggle('slow', function(){var b = 1;});
    });

    mainSlider.init();
    historySlider.init();
    qualitySlider.init();

    $('.search-icon').on('click', function(){
        $('.search-bar').fadeIn('slow');

        hideMenu();
    });

    $('.search-cancel').on('click', function(){
        $('.search-bar').fadeOut('slow');
    });


    $('.share-cancel').on('click', function(){
        $('.share-bar').fadeOut('slow');
    });

    $('.rest-share').on('click', function(){
        $('.share-bar').fadeIn('slow');

        hideMenu();
    });

    if(!$('.product-sidebar .current-menu-item').prev().length) {
        $('.tea-left').hide();
    }
    if(!$('.current-menu-item').next().length) {
        $('.tea-right').hide();
    }
    $('.tea-left').on('click', function(){
        document.location = $('.product-sidebar .current-menu-item').prev().find('a').attr('href');
    });

    $('.tea-right').on('click', function(){
        document.location = $('.product-sidebar .current-menu-item').next().find('a').attr('href');
    });

    $(".sf-menu a").click(function() {
        if(isFrontPage) {
            scrollToBlock($(this).attr('href'));
        } else {
            document.location = $('#logo a').attr('href') + $(this).attr('href');
        }
    });

    $('.scroll-to').on('click', function(e){
        e.preventDefault();
        scrollToBlock($(this).attr('href')) ;
    });

    $('.show-contact-form').on('click', function(e){
        e.preventDefault();
       showPopup();
    });
    $('.popup-cancel').on('click', function(e){
        e.preventDefault();
        hidePopup();
    });

    $('.history-switch-btn-1').on('click', function(e){
        e.preventDefault();
        if ($(this).hasClass('active')) {return false;}

        $('.history-switch-btn-2').removeClass('active');
        $(this).addClass('active');

        $('.history-switch-2').fadeOut('fast', function(){
            $('.history-switch-1').fadeIn('slow');
        });

    });

    $('.history-switch-btn-2').on('click', function(e){
        e.preventDefault();
        if ($(this).hasClass('active')) {return false;}

        $('.history-switch-btn-1').removeClass('active');
        $(this).addClass('active');

        $('.history-switch-1').fadeOut('fast', function(){
            $('.history-switch-2').fadeIn('slow');
        });
    });
});
function showPopup() {
    $('.popup-wrap').fadeIn('slow');
}

function hidePopup() {
    $('.popup-wrap').fadeOut('slow');
}
function hideMenu() {
    if($('#menu').is(':visible')) {
        $('#menu').toggle('slow', function(){var b = 1;});
    }
}

function scrollToBlock(id) {
    hideMenu();
    $('html, body').animate({
        scrollTop: ($(id).offset().top -60)
    }, 2000);
}