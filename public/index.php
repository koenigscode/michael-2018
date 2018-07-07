<?php
require "./includes/head.php";
// require "contact_handler.php";
?>

<script src="typeit.min.js"></script>
</head>
<body>
<header class="header">
    <?php require "./includes/nav.php" ?>
    <div class="container">
        <h1 class="title type-it-title">Michael König</h1>
        <h2 class="title-secondary type-it-title-secondary">//koenigscode</h2>
    </div>
</header>

<main>
    <section class="section section-red section-right" id="section-ueber">
        <div class="section-details">
            <span class="icon icon-c"></span>
            <span class="icon icon-java"></span>
        </div>
        <div class="container">
            <h2>Über Mich</h2>
            <p>Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text
                Dummy Text Dummy Text Dummy Text Dummy Text
                Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text
                Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text </p>
        </div>
    </section>

    <section class="section section-orange section-left" id="section-prog">
        <div class="container">
            <h2>Programmieren</h2>
            <p>Nachdem ich mich über ein Jahr lang mit der Programmierung in C beschäftigt habe, lerne ich derzeit Java,
                eine objektorientierte und plattformunabhängige Programmiersprache, die überall (u.a.
                Android-Smartphones) vertreten ist.</p>
        </div>
        <div class="section-details">
            <span class="icon icon-c"></span>
            <span class="icon icon-java"></span>
        </div>
    </section>

    <section class="section section-green section-right" id="section-web">
        <div class="section-details" id="section-details-web">
            <span class="icon icon-sass"></span>
            <span class="icon icon-javascript"></span>
            <span class="icon icon-php"></span>
            <span class="icon icon-git"></span>
        </div>
        <div class="container">
            <h2 class="title">Web-Entwicklung</h2>
            <p>Ich habe mich über die letzten Monate mit den verschiedensten Web-Development Technologien auseinander
                gesetzt. Ich achte dabei stets auf moderne und responsive Websites, um Nutzern auf allen Endgeräten die
                bestmögliche Erfahrung zu bieten.</p>
        </div>
    </section>

    <section class="section section-blue section-left" id="section-foto">
        <div class="container">
            <h2 class="title">Fotografie</h2>
            <p>In meiner Freizeit beschäftige ich mich auch gerne mit Fotografie und Bildbearbeitung. Ich nutze dazu die
                Canon EOS 700D sowie Adobe Photoshop und Lightroom.</p>
        </div>
        <div class="section-details">
            <span class="icon icon-adobephotoshop"></span>
            <span class="icon icon-adobelightroom"></span>
        </div>
    </section>

    <section class="section section-pink section-right" id="section-bild">
        <div class="section-details">
            <span class="icon icon-adobephotoshop"></span>
            <span class="icon icon-adobelightroom"></span>
        </div>
        <div class="container">
            <h2 class="title">Bildbearbeitung</h2>
            <p>In meiner Freizeit beschäftige ich mich auch gerne mit Fotografie und Bildbearbeitung. Ich nutze dazu die
                Canon EOS 700D sowie Adobe Photoshop und Lightroom.</p>
        </div>
    </section>

    <div id="particle"></div>

</main>

<script src="particles.js"></script>
<script src="script.js"></script>
<script>
    let firstTime = true;
    let typeItTitle;
    let typeItTitleSecondary;

    particlesJS.load("particle", "particles.json");

    typeItTitle = new TypeIt('.type-it-title', {
        lifeLike: false,
        cursorSpeed: 1500,
        startDelay: 0,
        afterString: function () {
            if (firstTime) {
                firstTime = false;
                $(".type-it-title-secondary").css("visibility", "visible");
                typeItTitleSecondary = new TypeIt('.type-it-title-secondary', {
                    strings: "//koenigscode",
                    lifeLike: false,
                    cursor: false,
                    startDelay: 0,
                })
            }
        }
    });

</script>

</body>
