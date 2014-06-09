/**
 * Created by pedectrian on 09.06.14.
 */
$(document).ready(function(){
    $('.menu-box').on('click', function(){
        $('#menu').toggle('slow', function(){var b = 1;});
    });

    $('.slide-right').on('click', function(){

        $('.slide-1-text-right').animate({ "right": "-=2000px" }, 2000 );
        $('.slide.current > img').animate({ "left": "+=2000px" }, 3000 );
    });
});