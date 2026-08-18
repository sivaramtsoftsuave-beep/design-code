<?php
/**
 * Handles the "Download Case Study" popup form.
 * - Validates Name / Email / Mobile
 * - Emails the case-study link to the entered email
 * - Emails you (ADMIN_EMAIL) the lead details: which case study,
 *   who downloaded it, and when
 *
 * Sends real mail via SMTP (PHPMailer) instead of PHP's built-in mail(),
 * so it works even on localhost/XAMPP where there's no local mail server.
 *
 * Called via AJAX (POST) from case-study-download-form.php
 */

header('Content-Type: application/json');
require_once __DIR__ . '/case-study-mail-config.php';
require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

function cs_clean($value) {
    $value = trim($value ?? '');
    // strip newlines/carriage returns to prevent email header injection
    return str_replace(["\r", "\n"], '', $value);
}

$name           = cs_clean($_POST['name'] ?? '');
$email          = cs_clean($_POST['email'] ?? '');
$mobile         = cs_clean($_POST['mobile'] ?? '');
$caseStudyName  = cs_clean($_POST['case_study_name'] ?? '');
$caseStudyUrl   = cs_clean($_POST['case_study_url'] ?? '');

$errors = [];

if ($name === '' || mb_strlen($name) > 100) {
    $errors[] = 'Please enter a valid name.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}
if (!preg_match('/^[0-9+\-\s()]{7,15}$/', $mobile)) {
    $errors[] = 'Please enter a valid mobile number.';
}
if ($caseStudyName === '' || $caseStudyUrl === '' || !filter_var($caseStudyUrl, FILTER_VALIDATE_URL)) {
    $errors[] = 'Case study details are missing. Please refresh the page and try again.';
}

if (!empty($errors)) {
    echo json_encode(['status' => 'error', 'message' => implode(' ', $errors)]);
    exit;
}

$downloadTime = date('d M Y, h:i A'); // server local time
$ip           = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

/**
 * Builds and configures a PHPMailer instance ready to send,
 * using the SMTP credentials from case-study-mail-config.php.
 */
function cs_make_mailer() {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = SMTP_SECURE;
    $mail->Port       = SMTP_PORT;
    $mail->setFrom(FROM_EMAIL, FROM_NAME);
    return $mail;
}

$userMailSent = false;

try {
    /* ---------- Email 1: to the user, with the case study link ---------- */
    $mail = cs_make_mailer();
    $mail->addAddress($email, $name);
    $mail->Subject = "Your requested case study: {$caseStudyName}";
    $mail->Body =
        "Hi {$name},\n\n" .
        "Thank you for your interest in {$caseStudyName}.\n\n" .
        "You can download the case study here:\n{$caseStudyUrl}\n\n" .
        "Regards,\n" . SITE_NAME;
    $mail->send();
    $userMailSent = true;

    /* ---------- Email 2: to you, with the lead details ---------- */
    $mail = cs_make_mailer();
    $mail->addAddress(ADMIN_EMAIL);
    $mail->addReplyTo($email, $name);
    $mail->Subject = "New Case Study Download: {$caseStudyName}";
    $mail->Body =
        "A new case study has been downloaded.\n\n" .
        "Case Study : {$caseStudyName}\n" .
        "Name       : {$name}\n" .
        "Email      : {$email}\n" .
        "Mobile     : {$mobile}\n" .
        "Date/Time  : {$downloadTime}\n" .
        "IP Address : {$ip}\n";
    $mail->send();

} catch (PHPMailerException $e) {
    // fall through — $userMailSent already reflects whether email 1 succeeded
}

if ($userMailSent) {
    echo json_encode([
        'status'  => 'success',
        'message' => 'The case study link has been sent to your email.'
    ]);
} else {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Sorry, we could not send the email right now. Please try again later.'
    ]);
}
