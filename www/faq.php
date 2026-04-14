<?php
/* ============================================================
   faq.php — Page FAQ WaterBottle Film
   Questions fréquentes organisées par catégorie (accordéon)
   ============================================================ */

$meta_title       = 'FAQ — WaterBottle Film';
$meta_description = 'Retrouvez les réponses aux questions fréquentes sur les prestations vidéo de WaterBottle Film : tarifs, délais, matériel, droits et déroulement d\'un projet.';
?>
<?php require_once(__DIR__ . '/header.php'); ?>

<body class="bg-black">

<!-- Données structurées FAQ (SEO) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Quels types de vidéos proposez-vous ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Je réalise des vidéos promotionnelles, institutionnelles, événements (mariages, festivals), clips musicaux, contenus pour réseaux sociaux et vidéos publicitaires." }
        },
        {
            "@type": "Question",
            "name": "Travaillez-vous seul ou en équipe ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Je peux travailler seul pour les petits projets ou en équipe pour des productions plus complexes." }
        },
        {
            "@type": "Question",
            "name": "Proposez-vous le montage vidéo uniquement ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Oui, je peux monter des images que vous avez déjà tournées." }
        },
        {
            "@type": "Question",
            "name": "Proposez-vous des prises de vue par drone ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Oui, sous réserve des autorisations nécessaires." }
        },
        {
            "@type": "Question",
            "name": "Faites-vous du storytelling ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Oui, je vous aide à construire un message et une narration impactante." }
        },
        {
            "@type": "Question",
            "name": "Combien coûte une prestation vidéo ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Le tarif dépend du projet (durée, tournage, montage, déplacements, etc.). Chaque devis est personnalisé selon vos besoins." }
        },
        {
            "@type": "Question",
            "name": "Proposez-vous des devis gratuits ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Oui, tous les devis sont gratuits et sans engagement." }
        },
        {
            "@type": "Question",
            "name": "Est-il possible d'avoir un forfait ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Oui, je propose des forfaits pour les entreprises, créateurs de contenu et événements." }
        },
        {
            "@type": "Question",
            "name": "Comment se déroule un projet vidéo ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Brief : échange sur vos besoins et objectifs. Pré-production : écriture, storyboard, repérages. Tournage : captation sur le terrain. Post-production : montage, étalonnage, sound design. Livraison : fichiers optimisés pour web, réseaux sociaux ou diffusion." }
        },
        {
            "@type": "Question",
            "name": "Quels sont les délais de livraison ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Le délai dépend du projet : cela peut aller de la journée même pour des besoins spécifiques (festival, par exemple) à plusieurs jours, voire plusieurs semaines après le tournage." }
        },
        {
            "@type": "Question",
            "name": "Puis-je demander des modifications ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Absolument. Une étape de relecture est incluse pour ajuster le montage, la musique ou le rythme selon vos retours." }
        },
        {
            "@type": "Question",
            "name": "Quel matériel utilisez-vous ?",
            "acceptedAnswer": { "@type": "Answer", "text": "J'utilise du matériel professionnel 4K, un stabilisateur, des optiques et du matériel audio de haute qualité pour un rendu visuel et sonore impeccable." }
        },
        {
            "@type": "Question",
            "name": "Fournissez-vous les fichiers bruts ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Cela dépend du projet, c'est possible en option." }
        },
        {
            "@type": "Question",
            "name": "Sous quels formats livrez-vous les vidéos ?",
            "acceptedAnswer": { "@type": "Answer", "text": "MP4, MOV, ProRes ou tout autre format adapté à votre plateforme de diffusion." }
        },
        {
            "@type": "Question",
            "name": "Comment les fichiers sont-ils livrés ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Via un lien de téléchargement sécurisé (WeTransfer, Google Drive, etc.)." }
        },
        {
            "@type": "Question",
            "name": "À qui appartiennent les droits de la vidéo ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Les droits sont définis dans le contrat (usage personnel, commercial, réseaux sociaux…)." }
        },
        {
            "@type": "Question",
            "name": "Peut-on utiliser la vidéo sur les réseaux sociaux ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Oui, les formats peuvent être adaptés pour Instagram, TikTok, YouTube, etc." }
        },
        {
            "@type": "Question",
            "name": "Déplacez-vous pour les tournages ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Oui, je me déplace partout en France et à l'étranger selon le projet." }
        },
        {
            "@type": "Question",
            "name": "Travaillez-vous avec les entreprises ?",
            "acceptedAnswer": { "@type": "Answer", "text": "Oui, j'accompagne les entreprises pour leur communication vidéo." }
        }
    ]
}
</script>

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
                <li><a class="fontwhite" href="index.php#a-propos">À propos</a></li>
                <li><a class="fontwhite" href="portfolio.php">Portfolio</a></li>
                <li><a class="fontwhite active" href="faq.php">FAQ</a></li>
                <li><a class="fontwhite" href="contact.php">Contact</a></li>
            </ul>

        </div>

    </nav>

    <!-- ========== CONTENU FAQ ========== -->
    <section class="faq-section py-5">
        <div class="container" style="max-width: 800px;">

            <h1 class="fontwhite fs-3 fw-semibold mb-3 text-center">Questions fréquentes</h1>
            <hr class="section-divider">
            <p class="fontwhite text-center mb-5 pt-2">Retrouvez ici les réponses aux questions les plus courantes sur mes prestations vidéo.</p>

            <!-- ===== Catégorie 1 : Prestations & Services ===== -->
            <h2 class="fontwhite fs-5 fw-semibold mt-5 mb-3"><i class="bi bi-camera-video me-2"></i>Prestations &amp; Services</h2>

            <div class="accordion faq-accordion mb-4" id="faq-prestations">

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="false" aria-controls="faq-1">
                            Quels types de vidéos proposez-vous ?
                        </button>
                    </h3>
                    <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#faq-prestations">
                        <div class="accordion-body">
                            Je réalise des vidéos promotionnelles, institutionnelles, événements (mariages, festivals), clips musicaux, contenus pour réseaux sociaux et vidéos publicitaires.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                            Travaillez-vous seul ou en équipe ?
                        </button>
                    </h3>
                    <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faq-prestations">
                        <div class="accordion-body">
                            Je peux travailler seul pour les petits projets ou en équipe pour des productions plus complexes.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                            Proposez-vous le montage vidéo uniquement ?
                        </button>
                    </h3>
                    <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#faq-prestations">
                        <div class="accordion-body">
                            Oui, je peux monter des images que vous avez déjà tournées.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
                            Proposez-vous des prises de vue par drone ?
                        </button>
                    </h3>
                    <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#faq-prestations">
                        <div class="accordion-body">
                            Oui, sous réserve des autorisations nécessaires.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false" aria-controls="faq-5">
                            Faites-vous du storytelling ?
                        </button>
                    </h3>
                    <div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#faq-prestations">
                        <div class="accordion-body">
                            Oui, je vous aide à construire un message et une narration impactante.
                        </div>
                    </div>
                </div>

            </div>

            <!-- ===== Catégorie 2 : Tarifs & Devis ===== -->
            <h2 class="fontwhite fs-5 fw-semibold mt-5 mb-3"><i class="bi bi-cash-stack me-2"></i>Tarifs &amp; Devis</h2>

            <div class="accordion faq-accordion mb-4" id="faq-tarifs">

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-6" aria-expanded="false" aria-controls="faq-6">
                            Combien coûte une prestation vidéo ?
                        </button>
                    </h3>
                    <div id="faq-6" class="accordion-collapse collapse" data-bs-parent="#faq-tarifs">
                        <div class="accordion-body">
                            Le tarif dépend du projet (durée, tournage, montage, déplacements, etc.). Chaque devis est personnalisé selon vos besoins.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-7" aria-expanded="false" aria-controls="faq-7">
                            Proposez-vous des devis gratuits ?
                        </button>
                    </h3>
                    <div id="faq-7" class="accordion-collapse collapse" data-bs-parent="#faq-tarifs">
                        <div class="accordion-body">
                            Oui, tous les devis sont gratuits et sans engagement.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-8" aria-expanded="false" aria-controls="faq-8">
                            Est-il possible d'avoir un forfait ?
                        </button>
                    </h3>
                    <div id="faq-8" class="accordion-collapse collapse" data-bs-parent="#faq-tarifs">
                        <div class="accordion-body">
                            Oui, je propose des forfaits pour les entreprises, créateurs de contenu et événements.
                        </div>
                    </div>
                </div>

            </div>

            <!-- ===== Catégorie 3 : Déroulement & Délais ===== -->
            <h2 class="fontwhite fs-5 fw-semibold mt-5 mb-3"><i class="bi bi-clock me-2"></i>Déroulement &amp; Délais</h2>

            <div class="accordion faq-accordion mb-4" id="faq-deroulement">

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-9" aria-expanded="false" aria-controls="faq-9">
                            Comment se déroule un projet vidéo ?
                        </button>
                    </h3>
                    <div id="faq-9" class="accordion-collapse collapse" data-bs-parent="#faq-deroulement">
                        <div class="accordion-body">
                            <ul class="mb-0">
                                <li><strong>Brief :</strong> échange sur vos besoins et objectifs.</li>
                                <li><strong>Pré‑production :</strong> écriture, storyboard, repérages.</li>
                                <li><strong>Tournage :</strong> captation sur le terrain.</li>
                                <li><strong>Post‑production :</strong> montage, étalonnage, sound design.</li>
                                <li><strong>Livraison :</strong> fichiers optimisés pour web, réseaux sociaux ou diffusion.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-10" aria-expanded="false" aria-controls="faq-10">
                            Quels sont les délais de livraison ?
                        </button>
                    </h3>
                    <div id="faq-10" class="accordion-collapse collapse" data-bs-parent="#faq-deroulement">
                        <div class="accordion-body">
                            Le délai dépend du projet : cela peut aller de la journée même pour des besoins spécifiques (festival, par exemple) à plusieurs jours, voire plusieurs semaines après le tournage.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-11" aria-expanded="false" aria-controls="faq-11">
                            Puis-je demander des modifications ?
                        </button>
                    </h3>
                    <div id="faq-11" class="accordion-collapse collapse" data-bs-parent="#faq-deroulement">
                        <div class="accordion-body">
                            Absolument. Une étape de relecture est incluse pour ajuster le montage, la musique ou le rythme selon vos retours.
                        </div>
                    </div>
                </div>

            </div>

            <!-- ===== Catégorie 4 : Matériel & Livraison ===== -->
            <h2 class="fontwhite fs-5 fw-semibold mt-5 mb-3"><i class="bi bi-gear me-2"></i>Matériel &amp; Livraison</h2>

            <div class="accordion faq-accordion mb-4" id="faq-materiel">

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-12" aria-expanded="false" aria-controls="faq-12">
                            Quel matériel utilisez-vous ?
                        </button>
                    </h3>
                    <div id="faq-12" class="accordion-collapse collapse" data-bs-parent="#faq-materiel">
                        <div class="accordion-body">
                            J'utilise du matériel professionnel 4K, un stabilisateur, des optiques et du matériel audio de haute qualité pour un rendu visuel et sonore impeccable.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-13" aria-expanded="false" aria-controls="faq-13">
                            Fournissez-vous les fichiers bruts ?
                        </button>
                    </h3>
                    <div id="faq-13" class="accordion-collapse collapse" data-bs-parent="#faq-materiel">
                        <div class="accordion-body">
                            Cela dépend du projet, c'est possible en option.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-14" aria-expanded="false" aria-controls="faq-14">
                            Sous quels formats livrez-vous les vidéos ?
                        </button>
                    </h3>
                    <div id="faq-14" class="accordion-collapse collapse" data-bs-parent="#faq-materiel">
                        <div class="accordion-body">
                            MP4, MOV, ProRes ou tout autre format adapté à votre plateforme de diffusion.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-15" aria-expanded="false" aria-controls="faq-15">
                            Comment les fichiers sont-ils livrés ?
                        </button>
                    </h3>
                    <div id="faq-15" class="accordion-collapse collapse" data-bs-parent="#faq-materiel">
                        <div class="accordion-body">
                            Via un lien de téléchargement sécurisé (WeTransfer, Google Drive, etc.).
                        </div>
                    </div>
                </div>

            </div>

            <!-- ===== Catégorie 5 : Droits, Diffusion & Clients ===== -->
            <h2 class="fontwhite fs-5 fw-semibold mt-5 mb-3"><i class="bi bi-shield-check me-2"></i>Droits, Diffusion &amp; Clients</h2>

            <div class="accordion faq-accordion mb-4" id="faq-droits">

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-16" aria-expanded="false" aria-controls="faq-16">
                            À qui appartiennent les droits de la vidéo ?
                        </button>
                    </h3>
                    <div id="faq-16" class="accordion-collapse collapse" data-bs-parent="#faq-droits">
                        <div class="accordion-body">
                            Les droits sont définis dans le contrat (usage personnel, commercial, réseaux sociaux…).
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-17" aria-expanded="false" aria-controls="faq-17">
                            Peut-on utiliser la vidéo sur les réseaux sociaux ?
                        </button>
                    </h3>
                    <div id="faq-17" class="accordion-collapse collapse" data-bs-parent="#faq-droits">
                        <div class="accordion-body">
                            Oui, les formats peuvent être adaptés pour Instagram, TikTok, YouTube, etc.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-18" aria-expanded="false" aria-controls="faq-18">
                            Déplacez-vous pour les tournages ?
                        </button>
                    </h3>
                    <div id="faq-18" class="accordion-collapse collapse" data-bs-parent="#faq-droits">
                        <div class="accordion-body">
                            Oui, je me déplace partout en France et à l'étranger selon le projet.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-19" aria-expanded="false" aria-controls="faq-19">
                            Travaillez-vous avec les entreprises ?
                        </button>
                    </h3>
                    <div id="faq-19" class="accordion-collapse collapse" data-bs-parent="#faq-droits">
                        <div class="accordion-body">
                            Oui, j'accompagne les entreprises pour leur communication vidéo.
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bouton vers Contact -->
            <div class="text-center mt-5 mb-3">
                <p class="fontwhite mb-3">Vous avez une autre question ?</p>
                <a class="btn btn-light fontblack" href="#contact-form">Me contacter</a>
            </div>

        </div>
    </section>

    <?php require_once(__DIR__ . '/footer.php'); ?>

    <!-- ========== ANIMATIONS AU SCROLL (Intersection Observer) ========== -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
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
