<?php
/* ============================================================
   submit_form_ex.php — Validation des données du formulaire
   (version de test sans PHPMailer)
   ============================================================ */

$getData = $_POST;

// Vérification des champs obligatoires
if (
    !isset($getData['prenom'])
    || empty(trim($getData['prenom']))

    || !isset($getData['nom'])
    || empty(trim($getData['nom']))

    || !isset($getData['tel'])
    || empty(trim($getData['tel']))

    || !isset($getData['message'])
    || empty(trim($getData['message']))
    )
{
    echo ('Veuillez renseigner l\'ensemble des champs du formulaire.');
    return;
}
?>

<?php
$getData = $_POST;

// Vérification de l'email
if (
    !isset($getData['email'])
    || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL)
    || empty(trim($getData['email']))
    )
{
    echo ('Veuillez renseigner une adresse mail valide.');
    return;
}
?>

<p class="card-text"><b>Prénom</b> : <?php echo strip_tags($_POST['prenom']); ?></p>
<p class="card-text"><b>Nom</b> : <?php echo strip_tags($_POST['nom']); ?></p>
<p class="card-text"><b>Email</b> : <?php echo strip_tags($_POST['email']); ?></p>
<p class="card-text"><b>Téléphone</b> : <?php echo strip_tags($_POST['tel']); ?></p>
<p class="card-text"><b>Message</b> : <?php echo strip_tags($_POST['message']); ?></p>
