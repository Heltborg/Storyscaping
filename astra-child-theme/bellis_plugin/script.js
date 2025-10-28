jQuery(document).ready(function($){
    var $box = $('.sdb-box');

    // Sørg for, at boksen starter skjult
    $box.addClass('slide-top');

    // Vent 2 sekunder før boksen slides ned
    setTimeout(function(){
        $box.removeClass('slide-top').addClass('slide-down');
    }, 2000);

    // Luk boksen når krydset klikkes
    $('#sdb-close').on('click', function(){
        // Slide op igen
        $box.removeClass('slide-down').addClass('slide-top');
    });

    // Optional: knapklik
    $('#sdb-button').on('click', function(){
        alert('Knap trykket!');
    });
});