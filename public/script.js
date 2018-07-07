$(document).ready(() => {
    // window.sr = ScrollReveal({
    //     origin: "bottom",
    //     distance: "0",
    //     duration: 500,
    //     scale: 0.9,
    //     easing: "ease-in-out",
    //     viewFactor: 0.7
    // });
    // sr.reveal('.sr');

    // $(".section").on({
    //
    //     mouseenter: function () {
    //         var sectionId = $(this)[0].id.substring(8, $(this)[0].id.length);
    //         console.log(sectionId);
    //         $("#section-details-" + sectionId).show();
    //     },
    //     mouseleave: function () {
    //         var sectionId = $(this)[0].id.substring(8, $(this)[0].id.length);
    //         console.log(sectionId);
    //         $("#section-details-" + sectionId).hide();
    //     }
    // });

    var fadeSpeed = 1000;

    $(window).scroll(function() {
        var fadeSpeed = 400;
        console.log($(window).width());
    console.log(".");
        if($(document).scrollTop() >= 200) {
            $("#nav").fadeOut(fadeSpeed);
        }
        else if($(window).width() >= 768){
            $("#nav").fadeIn(fadeSpeed);
        }
    });



});