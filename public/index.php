<?php
require "./includes/head.php";
// require "contact_handler.php";
?>

<script src="typeit.min.js"></script>
</head>
<body>
<div id="particle"></div>
<header class="header">
    <?php require "./includes/nav.php" ?>
    <div class="container">
        <h1 class="title type-it-title">Michael König</h1>
        <h2 class="title-secondary type-it-title-secondary">//koenigscode</h2>
    </div>
</header>

<main>
<!--TODO: Browser Support (IE)-->
    <section class="section section-ueber">
        <div class="content">
            <h2 class="title">Über Mich</h2>
            <h3 class="subtitle">Michael König</h3>
            <p>Ich bin Michi, 16 Jahre alt und gehe momentan zur HTL in St. Pölten. Meine Freizeit verbringe ich
                größtenteils mit Web-Entwicklung, allerdings auch mit programmieren in Java sowie Fotografie &
                Bildbearbeitung.
            </p>
        </div>
    </section>

    <section class="section section-prog">
        <div class="content">
            <h2 class="title">Programmieren</h2>
            <h3 class="subtitle">Java, C</h3>
            <p>Nachdem ich mich über ein Jahr lang mit der Programmierung in C beschäftigt habe und nun die Grundlagen
                von Java behersche, lerne ich zurzeit GUI-Programmierung mit JavaFX.
            </p>
        </div>
    </section>

    <section class="section section-web">
        <div class="content">
            <h2 class="title">Web Development</h2>
            <h3 class="subtitle">SASS, JS, PHP</h3>
            <p>Ich habe mich in den letzten Monaten mit den verschiedensten Web-Development Technologien
                vertraut gemacht. Mittlerweile habe ich mir einen guten Überblick verschafft und konzentriere mich
                derzeit auf PHP. In naher Zukunft werde ich mich auch noch genauer mit einem Frontend Javascript Framework
                auseinandersetzen.
            </p>
        </div>
    </section>

    <section class="section section-foto">
        <div class="content">
            <h2 class="title">Fotografie</h2>
            <h3 class="subtitle">Canon EOS 700D</h3>
            <p>Manchmal nutze ich auch meine Freizeit, um das ein oder andere Foto zu schießen und anschließend im
                Lightroom-Katalog zu organisieren und zu bearbeiten. Gelegentlich teile ich auch das ein oder andere auf
                <a class="orange" href="./instagram.php" title="koenigscode auf Instagram">Instagram</a>.
            </p>
        </div>
    </section>

    <section class="section section-bild">
        <div class="content">
            <h2 class="title">Bildbearbeitung</h2>
            <h3 class="subtitle">Adobe Photoshop, Adobe Lightroom</h3>
            <p>Seit über 3 Jahren arbeite ich gelegentlich mit Adobe Photoshop und bearbeite Fotos oder erstelle
                Designs von Grund auf.
            </p>
        </div>
    </section>

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
                });
            }
        }
    });

</script>

</body>
