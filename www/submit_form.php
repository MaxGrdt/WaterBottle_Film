<?php
/* ============================================================
   submit_form.php — Traitement du formulaire de contact
   Envoi via PHPMailer (SMTP OVH) + réponse AJAX JSON
   Architecture identique à Ermitage Record
   ============================================================ */

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 1️⃣ Import de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/../config.php';

// 2️⃣ Anti-spam : honeypot
if (!empty($_POST['website'])) {
    exit;
}

// 3️⃣ Récupération et sécurisation des données du formulaire
$prenom  = htmlspecialchars(trim($_POST['prenom']  ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$nom     = htmlspecialchars(trim($_POST['nom']     ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$tel     = htmlspecialchars(trim($_POST['tel']     ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

if (!$email) {
    exit('Email invalide');
}

// 4️⃣ Création d'une instance PHPMailer
$mail = new PHPMailer(true);
$mail->CharSet  = 'UTF-8';
$mail->Encoding = 'base64';

try {
    // 5️⃣ Configuration SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.mail.ovh.net';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contact@ermitagerecord.fr';

    // Récupérer le mot de passe SMTP (priorité : env > getenv > constante)
    $mailPassword = null;
    $mailPasswordSource = null;
    $envValue    = $_ENV['MAIL_PASSWORD'] ?? null;
    $getenvValue = getenv('MAIL_PASSWORD') !== false ? getenv('MAIL_PASSWORD') : null;
    $constValue  = defined('MAIL_PASSWORD') ? MAIL_PASSWORD : null;

    foreach (['env' => $envValue, 'getenv' => $getenvValue, 'const' => $constValue] as $src => $val) {
        if (is_string($val) && $val !== '') {
            $mailPassword = $val;
            $mailPasswordSource = $src;
            break;
        }
    }

    if (empty($mailPassword)) {
        throw new Exception('Configuration SMTP invalide : mot de passe manquant (MAIL_PASSWORD)');
    }

    if (ini_get('display_errors')) {
        error_log("[DEBUG] MAIL_PASSWORD source: $mailPasswordSource");
    }

    $mail->Password   = $mailPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // 6️⃣ Destinataires
    $mail->setFrom('contact@ermitagerecord.fr', 'Formulaire WaterBottle Film');
    $mail->addAddress('maxgourdet@hotmail.fr');

    // 7️⃣ Contenu de l'email
    $mail->isHTML(true);
    $mail->Subject = 'Nouveau message — WaterBottle Film';
    $mail->Body    = "
        <b>Prénom :</b> $prenom<br>
        <b>Nom :</b> $nom<br>
        <b>Email :</b> $email<br>
        <b>Téléphone :</b> $tel<br><br>
        <b>Message :</b><br>$message
    ";

    // 8️⃣ Envoi du mail
    $mail->send();
    $styledMessage = '<span style="font-family: Futura, Trebuchet MS, Arial, sans-serif;">Message envoyé</span>';
    $response = [
        'success' => true,
        'message' => $styledMessage
    ];

    // Détection requête AJAX
    $isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
        || (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false);

    if ($isAjax) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
        exit;
    }

    echo $response['message'];

} catch (Exception $e) {
    $errorResponse = [
        'success' => false,
        'message' => 'Erreur lors de l\'envoi : ' . $e->getMessage()
    ];

    $isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
        || (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false);

    if ($isAjax) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($errorResponse, JSON_UNESCAPED_UNICODE);
        exit;
    }

    echo $errorResponse['message'];
}
