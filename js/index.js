/**
 * Created by pedectrian on 09.06.14.
 */
$(document).ready(function(){
    $('.menu-box').on('click', function(){
        $('#menu').toggle('slow', function(){var b = 1;});
    });

    $('.slide-right').on('click', function(){
        var currentSlide = $('.slide.current');
        var current = {
            image: currentSlide.find('img'),
            text:  currentSlide.find('.slide-text-right'),
            descr: $('.slide-bottom-description.current')
        };

        var nextSlide = $('.slide').filter(function(){return $(this).attr('data-slide-id') == (parseInt(currentSlide.attr('data-slide-id')) + 1)});
        var nextDescr = $('.slide-bottom-description').filter(function(){return $(this).attr('data-slide-id') == (parseInt(currentSlide.attr('data-slide-id')) + 1)});

        var next = {
            image: nextSlide.find('img'),
            text:  nextSlide.find('.slide-text-right'),
            descr: nextDescr
        };
        next.text.css({'right': '-2000px'});
        next.image.css({'left': '2000px'});

        nextSlide.toggleClass('current');
        next.descr.toggleClass('current');

        current.text.animate({ "right": "+=2000px" }, 2000 );
        current.image.animate({ "left": "-=2000px" }, 3000 );
        current.descr.toggleClass('current');
        current.descr.fadeOut('slow');

        next.text.animate({"right": "+=2000px"}, 2000 );
        next.image.animate({ "left": "0" }, 3000 );
        next.descr.fadeIn('slow');

    });

    $('.search-icon').on('click', function(){
        $('.search-bar').fadeIn('slow');
    });

    $('.search-cancel').on('click', function(){
        $('.search-bar').fadeOut('slow');
    });


    $('.share-cancel').on('click', function(){
        $('.share-bar').fadeOut('slow');
    });

    $('.fb-share-icon, .vk-share-icon').on('click', function(){
        $('.share-bar').fadeIn('slow');
    });

});