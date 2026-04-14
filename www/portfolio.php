<?php
/* ============================================================
   portfolio.php — Page Portfolio WaterBottle Film
   6 vidéos verticales organisées en 2 rangées de 3
   ============================================================ */

$meta_title       = 'Portfolio vidéaste à Langon — WaterBottle Film';
$meta_description = 'Découvrez le portfolio vidéaste de WaterBottle Film : aftermovies, clips, teasers et captations vidéo. Des réalisations audiovisuelles créatives et professionnelles.';
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
                <li><a class="fontwhite" href="faq.php">FAQ</a></li>
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
                    <div class="video-card video-lazy" data-video="media/aftermovie_ny.mp4">
                        <img src="media/aftermovie_ny.webp" alt="Aftermovie NY" class="video-thumb" style="width:100%;cursor:pointer;">
                        <div class="play-btn"></div>
                    </div>
                </div>

                <!-- Vidéo 2 : Baurech -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card video-lazy" data-video="media/baurech.mp4">
                        <img src="media/baurech.webp" alt="Baurech" class="video-thumb" style="width:100%;cursor:pointer;">
                        <div class="play-btn"></div>
                    </div>
                </div>

                <!-- Vidéo 3 : Boiler -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card video-lazy" data-video="media/boiler.mp4">
                        <img src="media/boiler.webp" alt="Boiler" class="video-thumb" style="width:100%;cursor:pointer;">
                        <div class="play-btn"></div>
                    </div>
                </div>

                <!-- Vidéo 4 : Aftermovie Wicked -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card video-lazy" data-video="media/aftermovie_wicked.mp4">
                        <img src="media/aftermovie_wicked.webp" alt="Aftermovie Wicked" class="video-thumb" style="width:100%;cursor:pointer;">
                        <div class="play-btn"></div>
                    </div>
                </div>

                <!-- Vidéo 5 : Teaser Duras -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card video-lazy" data-video="media/teaser_duras.mp4">
                        <img src="media/teaser_duras.webp" alt="Teaser Duras" class="video-thumb" style="width:100%;cursor:pointer;">
                        <div class="play-btn"></div>
                    </div>
                </div>

                <!-- Vidéo 6 : Desert Point -->
                <div class="col-12 col-md-4 fade-in">
                    <div class="video-card video-lazy" data-video="media/desert_point.mp4">
                        <img src="media/desert_point.webp" alt="Desert Point" class="video-thumb" style="width:100%;cursor:pointer;">
                        <div class="play-btn"></div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <?php require_once(__DIR__ . '/footer.php'); ?>

    <!-- ========== LAZY VIDEO LOADER & ANIMATIONS ========== -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Lazy load video on click
        document.querySelectorAll('.video-lazy').forEach(function(card) {
            card.addEventListener('click', function() {
                if (card.querySelector('video')) return; // Already loaded
                var videoSrc = card.getAttribute('data-video');
                var video = document.createElement('video');
                video.setAttribute('controls', '');
                video.setAttribute('playsinline', '');
                video.setAttribute('autoplay', '');
                video.style.width = '100%';
                var source = document.createElement('source');
                source.src = videoSrc;
                source.type = 'video/mp4';
                video.appendChild(source);
                // Remove image and play button
                card.querySelectorAll('img, .play-btn').forEach(function(el){ el.remove(); });
                card.appendChild(video);
                // Pause other videos
                document.querySelectorAll('.video-lazy video').forEach(function(other) {
                    if (other !== video) other.pause();
                });
            });
        });

        // Une seule vidéo joue à la fois
        document.addEventListener('play', function(e) {
            if (e.target.tagName === 'VIDEO') {
                document.querySelectorAll('.video-lazy video').forEach(function(other) {
                    if (other !== e.target) other.pause();
                });
            }
        }, true);

        // Animations au scroll
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
