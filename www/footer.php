<!-- ============================================================
     footer.php — Pied de page commun WaterBottle Film
     Formulaire de contact AJAX + liens réseaux sociaux
     ============================================================ -->
<footer>

    <section class="fade-in">

        <!-- Titre du formulaire -->
        <div class="titre_formulaire ps-4 pe-4 text-center pt-3">
            <h1 class="fontwhite pt-0 pt-md-4 fs-3 fw-semibold">Formulaire de contact</h1>
            <h2 class="fontwhite fs-6 fw-normal">Pour me parler de votre projet, toutes questions ou renseignement merci de me contacter via ce formulaire :</h2>
        </div>

        <!-- Zone d'affichage du résultat du formulaire (AJAX) -->
        <div id="form-result" class="container p-2">

            <form id="contact-form" action="submit_form.php" method="POST">

                <div class="fontblack container p-2 pe-2 ps-2 pe-md-5 ps-md-5">

                    <div class="row g-2 g-md-3">

                        <!-- Première ligne : Prénom et Nom -->
                        <div class="col-12 col-md-6">
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control" required>
                        </div>

                        <div class="col-12 col-md-6">
                            <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                        </div>
                        
                        <!-- Deuxième ligne : Email et Téléphone -->
                        <div class="col-12 col-md-6">
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>

                        <div class="col-12 col-md-6">
                            <input type="tel" name="tel" placeholder="Numéro de téléphone" class="form-control" required>
                        </div>

                        <!-- Troisième ligne : Message (largeur complète) -->
                        <div class="col-12">
                            <textarea name="message" placeholder="Message" class="form-control" rows="4" required></textarea>
                        </div>

                        <!-- Anti-spam honeypot (caché) -->
                        <input type="text" name="website" style="display:none">

                        <!-- Bouton Envoyer --> 
                        <div class="text-center">
                            <input type="submit" class="btn btn-light" value="Envoyer">
                        </div>

                    </div>

                </div>

            </form>
            
        </div>

    </section>

    <!-- Logos réseaux sociaux -->
    <section>

        <div class="footer-social-container text-center p-2 d-flex flex-column flex-md-row justify-content-center gap-2 gap-md-4 align-items-center">
            <div class="footer-logos d-flex justify-content-center gap-4 mb-2 mb-md-0">
                <a href="https://www.instagram.com/waterbottlefilm/" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                    <i class="ms-0 bi bi-instagram fs-1 text-white"></i>
                </a>
                <a href="https://www.linkedin.com/in/max-gourdet-31176b3b1" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                    <i class="bi bi-linkedin fs-1 text-white"></i>
                </a>
            </div>
            <p class="text-white mb-0 footer-courier ps-0 ps-md-5">
                Designed and developed by <a href="https://maxgourdet.fr/" target="_blank" rel="noopener" class="text-white text-decoration-none"><strong>Max Gourdet</strong></a>
            </p>
        </div>

    </section>

</footer>

<!-- Bootstrap JS bundle (OBLIGATOIRE) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Initialisation des tooltips Bootstrap -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(el => {
        new bootstrap.Tooltip(el);
    });
});
</script>

<!-- Animations au scroll (footer) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const animatedElements = document.querySelectorAll('footer .fade-in');

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

<!-- Gestion AJAX du formulaire de contact -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    const resultContainer = document.getElementById('form-result');
    if (!form || !resultContainer) return;

    /* Marquer le champ email comme "touché" après le premier blur
       pour afficher le style d'erreur uniquement après interaction */
    const emailInput = form.querySelector('input[type="email"][name="email"]');
    if (emailInput) {
        emailInput.addEventListener('blur', function () {
            emailInput.classList.add('touched');
        });
    }

    /* Envoi du formulaire en AJAX (fetch) */
    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const submitBtn = form.querySelector('input[type="submit"], button[type="submit"]');
        if (submitBtn) submitBtn.disabled = true;

        const fd = new FormData(form);

        try {
            const resp = await fetch(form.action, {
                method: (form.method || 'POST').toUpperCase(),
                body: fd,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            });

            const data = await resp.json();
            const type = data && data.success ? 'success' : 'danger';
            resultContainer.innerHTML = `<div class="alert alert-${type}" role="alert">${data.message || 'Réponse inconnue'}</div>`;
            if (data && data.success) form.reset();
        } catch (err) {
            resultContainer.innerHTML = `<div class="alert alert-danger" role="alert">Erreur réseau. Veuillez réessayer.</div>`;
        } finally {
            if (submitBtn) submitBtn.disabled = false;
        }
    });
});
</script>
