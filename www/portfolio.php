<?php
/* ============================================================
   portfolio.php — Page Portfolio WaterBottle Film
   6 vidéos verticales organisées en 2 rangées de 3
   ============================================================ */

$meta_title       = 'Portfolio — WaterBottle Film';
$meta_description = 'Découvrez le portfolio de WaterBottle Film : aftermovies, clips, teasers et captations vidéo. Des réalisations audiovisuelles créatives et professionnelles.';
?>
<?php require_once(__DIR__ . '/header.php'); ?>

<body class="bg-black">

<!-- ========== NAVBAR ========== -->

    <nav class="fixed-top pt-3 pb-3 bg-black">

        <div class="d-flex justify-content-between align-items-center">

            <!-- Titre à gauche -->
            <div class="">
                <a class="fontwhite fw-bold fs-3 ms-3 ms-md-4 text-decoration-none" href="index.php">
                    <span class="bg-light p-1 rounded-3 text-dark">W</span> B
                </a>
            </div>

            <ul class="d-flex me-3 me-md-4 gap-3 gap-md-4 list-unstyled align-items-center mb-0">
                <li><a class="fontwhite" href="index.php#a-propos">À propos</a></li>
                <li><a class="fontwhite active" href="portfolio.php">Portfolio</a></li>
                <li><a class="fontwhite" href="contact.php">Contact</a></li>
            </ul>

        </div>

    </nav>

    <!-- ========== TITRE DE LA PAGE ========== 
    <section class="py-4">
        <div class="container text-center">
            <h1 class="fontwhite fs-2 fw-semibold">Portfolio</h1>
        </div>
    </section> -->

    <!-- ========== GRILLE DES VIDÉOS (2 rangées × 3 colonnes) ========== -->
    <section class="portfolio-grid pt-1 pb-5">
        <div class="container">

            <div class="row g-4">

                <!-- Vidéo 1 : Aftermovie -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card">
                        <video controls preload="metadata" playsinline>
                            <source src="media/aftermovie_ny.MP4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>

                <!-- Vidéo 2 : Boiler -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card">
                        <video controls preload="metadata" playsinline>
                            <source src="media/baurech.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>

                <!-- Vidéo 3 : Maroc -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card">
                        <video controls preload="metadata" playsinline>
                            <source src="media/boiler.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>

                <!-- Vidéo 4 : Teaser Duras -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card">
                        <video controls preload="metadata" playsinline>
                            <source src="media/aftermovie_wicked.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>

                <!-- Vidéo 5 : Baurech -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card">
                        <video controls preload="metadata" playsinline>
                            <source src="media/teaser_duras.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>

                <!-- Vidéo 6 : VF Insta -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card">
                        <video controls preload="metadata" playsinline>
                            <source src="media/desert_point.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <?php require_once(__DIR__ . '/footer.php'); ?>

    <!-- ========== ANIMATIONS AU SCROLL (Intersection Observer) ========== -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const animatedElements = document.querySelectorAll('.fade-in');

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        animatedElements.forEach(function (el) {
            observer.observe(el);
        });
    });
    </script>

</body>

</html>
