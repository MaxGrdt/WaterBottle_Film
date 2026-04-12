<?php
/* ============================================================
   contact.php — Page Contact WaterBottle Film
   Localisation Google Maps + footer (formulaire + réseaux)
   ============================================================ */

$meta_title       = 'Contact — WaterBottle Film';
$meta_description = 'Contactez WaterBottle Film pour discuter de votre projet vidéo. Réalisation audiovisuelle, clips, aftermovies, teasers et captations d\'événements.';
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
                <li><a class="fontwhite" href="portfolio.php">Portfolio</a></li>
                <li><a class="fontwhite active" href="contact.php">Contact</a></li>
            </ul>

        </div>

    </nav>

    <!-- ========== SECTION LOCALISATION ========== -->
    <section>
        <div class="container text-center">

            <h1 class="fontwhite texte text-center pt-0 pb-1 fs-5 fw-normal pb-2">Basé à Langon, à 30 min de Bordeaux :</h1>
            <hr class="section-divider">
            <div class="row pb-4 pb-md-0 justify-content-center pt-3">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                    <div class="ratio ratio-16x9">

                        <!-- Google Maps Langon -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45504.12194864891!2d-0.2833782345252284!3d44.5354764946791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd556d8ec91cfb13%3A0x36c8e2b19e55a7f5!2s33210%20Langon!5e0!3m2!1sfr!2sfr!4v1769941087251!5m2!1sfr!2sfr" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
            
                    </div>
                </div>
            </div>
            
        </div>
    </section>

</body>

<?php require_once(__DIR__ . '/footer.php'); ?>

</html>
