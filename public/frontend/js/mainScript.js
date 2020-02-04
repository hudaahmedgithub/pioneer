$(document).ready(function() {

    "use strict";

    // Adjust header Height
    var winHeight = $(window).height();

    $('.header').height(winHeight - 180);

    $('.header').resize(function() {

        $('.header').height(winHeight - 180);

    })

    // Smooth Scroll plugin

    AOS.init();
});