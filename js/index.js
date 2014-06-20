/**
 * Created by pedectrian on 09.06.14.
 */
$(document).ready(function(){
    $('.menu-box').on('click', function(){
        $('#menu').toggle('slow', function(){var b = 1;});
    });

    var currentPosition = 0;
    var slideWidth = 1140;
    var slides = $('.slide');
    var captions = $('.slide-bottom-description');
    var numberOfSlides = slides.length;

    slides.wrapAll('<div id="slidesHolder"></div>')
    captions.wrapAll('<div id="captionsHolder"></div>')

    slides.css({ 'float' : 'left' });
    captions.css({ 'float' : 'left' });

    //set #slidesHolder width equal to the total width of all the slides
    $('#slidesHolder').css('width', slideWidth * numberOfSlides);
    $('#captionsHolder').css('width', slideWidth * numberOfSlides);

    manageNav(currentPosition);

    //tell the buttons what to do when clicked
    $('.slide-right').on('click', function(){

        //determine new position
        currentPosition = currentPosition+1;

        //hide/show controls
        manageNav(currentPosition);
        moveSlide();
    });

    $('.slide-left').on('click', function(){
        //determine new position
        currentPosition = currentPosition-1;

        //hide/show controls
        manageNav(currentPosition);
        moveSlide();
    });

    function manageNav(position) {
        //hide left arrow if position is first slide
        if(position==0){ $('.slide-left').hide() }
        else { $('.slide-left').show() }
        //hide right arrow is slide position is last slide
        if(position==numberOfSlides-1){ $('.slide-right').hide() }
        else { $('.slide-right').show() }
    }

    //moveSlide: this function moves the slide
    function moveSlide() {
        $('#slidesHolder')
            .animate({'marginLeft' : slideWidth*(-currentPosition)});

        $('#captionsHolder')
            .animate({'marginLeft' : slideWidth*(-currentPosition)});

        $('.tea-list li a.current').removeClass('current');
        $('.tea-list li:nth-child(' + (currentPosition +1) + ') a').addClass('current');

    }

    $('.tea-list li a').on('click', function(){
        if($(this).hasClass('current')) {return;}

        $('.tea-list li a.current').removeClass('current');
        $(this).addClass('current');

        currentPosition = $(this).index();
        moveSlide();
    });

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

    $('.hc-icon-1').on('click', function(){
        if($(this).hasClass('current')) {
            return false;
        }
        switchHistorySlides(1);
    });
    $('.hc-icon-2').on('click', function(){
        if($(this).hasClass('current')) {
            return false;
        }
        switchHistorySlides(2);
    });

});
function switchHistorySlides(s) {

    $('.history-slides.current').animate({
        'width': '0'
    }, function(){

        $(this).removeClass('current');
    });

}
function hideMenu() {
    if($('#menu').is(':visible')) {
        $('#menu').toggle('slow', function(){var b = 1;});
    }
}
