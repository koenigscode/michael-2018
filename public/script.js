$(document).ready(function() {
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
    //         var element = $("#section-details-" + sectionId);
    //         element.css("width", "auto");
    //         setTimeout(function () {
    //             element.show("slow");
    //         }, element.css("transition-duration"));
    //     },
    //     mouseleave: function () {
    //         var sectionId = $(this)[0].id.substring(8, $(this)[0].id.length);
    //         console.log(sectionId);
    //         $("#section-details-" + sectionId).hide();
    //     }
    // });

    $(".link").on("click", function() {
       var linkId = $(this)[0].id;
       var sectionId = linkId.substring(5, linkId.length);
       var offset = $("#section-" + sectionId).offset().top;
       var height = $("#section-" + sectionId).outerHeight();
       var pos = offset + height/2 - $(window).height()/2;

        $('html, body').animate({scrollTop: pos},'2000');

    });

    var fadeSpeed = 1000;

    $(window).scroll(function () {
        var fadeSpeed = 400;
        if ($(document).scrollTop() >= 200) {
            $("#nav").fadeOut(fadeSpeed);
        }
        else if ($(window).width() >= 768) {
            $("#nav").fadeIn(fadeSpeed);
        }
    });

    $(window).trigger("scroll");


});