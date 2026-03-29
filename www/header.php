<?php
/* ============================================================
   header.php — En-tête commun WaterBottle Film
   Inclut les balises SEO, Open Graph, JSON-LD,
   Bootstrap 5.3.2, Bootstrap Icons et la feuille de style.
   ============================================================ */

$meta_title       = $meta_title       ?? 'WaterBottle Film';
$meta_description = $meta_description ?? 'WaterBottle Film est un vidéaste professionnel spécialisé dans la production audiovisuelle, le montage vidéo et la réalisation de contenus créatifs.';
$meta_canonical   = $meta_canonical   ?? ('https://' . $_SERVER['HTTP_HOST'] . '/' . basename($_SERVER['PHP_SELF']));
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($meta_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($meta_canonical) ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($meta_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($meta_canonical) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:image" content="<?= htmlspecialchars(dirname($meta_canonical) . '/media/photo_profil.JPG') ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="WaterBottle Film">

    <!-- Liens réseaux sociaux -->
    <link rel="me" href="https://www.instagram.com/waterbottlefilm/">

    <!-- Bootstrap 5.3.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Feuille de style personnalisée -->
    <link href="style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Données structurées JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "WaterBottle Film",
        "url": "<?= htmlspecialchars($meta_canonical) ?>",
        "image": "<?= htmlspecialchars(dirname($meta_canonical) . '/media/photo_profil.JPG') ?>",
        "description": "<?= htmlspecialchars($meta_description) ?>",
        "sameAs": [
            "https://www.instagram.com/waterbottlefilm/"
        ]
    }
    </script>

<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JZ2WP96G1G"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JZ2WP96G1G');
    </script>

    <!-- Préchargement de la page Portfolio depuis l'accueil -->
    <?php if (basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
    <link rel="prefetch" href="portfolio.php" as="document">
    <?php endif; ?>

</head>
