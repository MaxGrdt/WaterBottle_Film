<?php
/* ============================================================
   index.php — Page d'accueil WaterBottle Film
   Vidéo hero + section À propos + bouton Portfolio
   ============================================================ */

$meta_title       = 'Accueil — WaterBottle Film';
$meta_description = 'WaterBottle Film — Vidéaste professionnel à Langon spécialisé dans la réalisation audiovisuelle, le montage vidéo et la production de contenus créatifs.';
?>
<?php require_once(__DIR__ . '/header.php'); ?>

<!-- ========== NAVBAR ========== -->

    <nav class="fixed-top pt-3 pb-3 bg-black">

        <div class="d-flex justify-content-between align-items-center">

            <!-- Titre à gauche -->
            <div>
                <a class="fontwhite fw-bold fs-3 ms-3 ms-md-4 text-decoration-none" href="index.php">
                    <span class="bg-light p-1 rounded-3 text-dark">W</span> B
                </a>
            </div>

            <ul class="d-flex me-3 me-md-4 gap-3 gap-md-4 list-unstyled align-items-center mb-0">
                <li><a class="fontwhite" href="#a-propos">À propos</a></li>
                <li><a class="fontwhite" href="portfolio.php">Portfolio</a></li>
                <li><a class="fontwhite" href="contact.php">Contact</a></li>
            </ul>

        </div>

    </nav>


<body class="bg-black">


    <!-- ========== VIDÉO HERO ========== -->
     
    <section class="hero-video-wrapper">
        <video id="hero-video" autoplay muted loop playsinline>
            <source src="media/video_index.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture vidéo.
        </video>
        <!-- Bouton son / muet -->
        <button id="btn-mute" class="btn-mute" aria-label="Activer le son">
            <i class="bi bi-volume-mute-fill"></i>
        </button> 
    </section>

    <!-- ========== SECTION À PROPOS ========== -->
    <section id="a-propos" class="about-section bg-black py-5">
        <div class="container">

            <div class="row align-items-center g-4">

                <!-- Photo de profil -->
                <div class="col-12 col-md-5 text-center fade-in slide-in-left">
                    <img src="media/photo_profil.webp" 
                         alt="Photo de profil — WaterBottle Film" 
                         class="about-img img-fluid">
                </div>

                <!-- Texte À propos -->
                <div class="col-12 col-md-7 fade-in slide-in-right">
                    <h1 class="fontwhite fs-3 fw-semibold mb-3 text-center">WaterBottle Film</h1>
                    <p class="fontwhite texte">
                        Max, ingénieur de formation, j'ai développé au fil de mon parcours une approche à la fois technique et créative de l'image. En parallèle de mes études, j'ai découvert la vidéo, un univers qui m'a immédiatement passionné. J'aime raconter des histoires, capter des instants authentiques et expérimenter de nouvelles formes visuelles pour donner du sens et de l'émotion à chaque projet.
                        <br><br>
                        Grand amateur de sports à sensations fortes, je trouve une source d'inspiration particulière dans ces univers dynamiques et intenses. J'aime y exprimer ma créativité, en mettant en valeur l'énergie, le mouvement et l'engagement qu'ils véhiculent.
                        <br><br>
                        Aujourd'hui, je suis également spécialisé dans la vidéo d'événement, où je m'attache à retranscrire fidèlement l'ambiance, les émotions et les moments clés, avec une approche à la fois esthétique et immersive.
                    </p>

                    <!-- Bouton vers le Portfolio -->
                    <div class="mt-3 text-center">
                        <a class="btn btn-light fontblack" href="portfolio.php">Portfolio</a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <?php require_once(__DIR__ . '/footer.php'); ?>

    <!-- ========== BOUTON SON / MUET ========== -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.getElementById('hero-video');
        const btn = document.getElementById('btn-mute');
        if (!video || !btn) return;

        btn.addEventListener('click', function () {
            video.muted = !video.muted;
            btn.innerHTML = video.muted
                ? '<i class="bi bi-volume-mute-fill"></i>'
                : '<i class="bi bi-volume-up-fill"></i>';
            btn.setAttribute('aria-label', video.muted ? 'Activer le son' : 'Couper le son');
        });
    });
    </script>

    <!-- ========== ANIMATIONS AU SCROLL (Intersection Observer) ========== -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Ne déclencher qu'une seule fois
                }
            });
        }, { threshold: 0.15 });

        animatedElements.forEach(function (el) {
            observer.observe(el);
        });
    });
    </script>

</body>

</html>
