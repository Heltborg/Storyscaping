jQuery(document).ready(function($) {
    var $box = $('#bellis-box');

    // Sørger for, at boksen starter skjult
    $box.addClass('slide-top');

    // Vent 2 sekunder før den glider ned
    setTimeout(function() {
        $box.removeClass('slide-top').addClass('slide-down');
    }, 2000);

    // Luk boksen
    $('#bellis-close').on('click', function() {
        $box.removeClass('slide-down').addClass('slide-top');
    });

    // Knapfunktion – sender brugeren videre til dit link
    $('#bellis-button').on('click', function() {
        window.location.href = 'https://storyscaping.shstudio.dk/elementor-615/home/';
    });
});