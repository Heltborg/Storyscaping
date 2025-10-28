jQuery(document).ready(function($) {
    var $box = $('#bellis-box');

    // Sørg for, at boksen starter skjult
    $box.addClass('slide-top');

    // Vent 2 sekunder før den glider ned
    setTimeout(function() {
        $box.removeClass('slide-top').addClass('slide-down');
    }, 2000);

    // Luk boksen
    $('#bellis-close').on('click', function() {
        $box.removeClass('slide-down').addClass('slide-top');
    });

    // Knapfunktion
    $('#bellis-button').on('click', function() {
        alert('Knap trykket!');
    });
});
