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

            mainSlider.currentPosition = $(this).parent().index();
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

        $('.tea-list li a.current').removeClass('current');
        $('.tea-list li:nth-child(' + (mainSlider.currentPosition +1) + ') a').addClass('current');

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
                historySlider.currentPosition = historySlider.currentPosition-1;
            } else {
                historySlider.currentPosition = historySlider.currentPosition+1;
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
        if(position==historySlider.numberOfSlides-1){ $('.history-slide-right').hide() }
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
        $('#historySlidesHolder')
            .animate({'marginLeft' : historySlider.slideWidth*(-historySlider.currentPosition)});
    }
};

/**
 * Created by pedectrian on 09.06.14.
 */
$(document).ready(function(){
    $('.menu-box').on('click', function(){
        $('#menu').toggle('slow', function(){var b = 1;});
    });

    mainSlider.init();
    historySlider.init();

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

    $('.fb-share-icon, .vk-share-icon').on('click', function(){
        $('.share-bar').fadeIn('slow');

        hideMenu();
    });

});
function hideMenu() {
    if($('#menu').is(':visible')) {
        $('#menu').toggle('slow', function(){var b = 1;});
    }
}

