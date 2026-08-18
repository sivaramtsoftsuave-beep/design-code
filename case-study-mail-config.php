<?php
/**
 * Central config for case-study download emails.
 * Edit these once — every case study page uses the same handler/config.
 */

define('ADMIN_EMAIL', 'leads@softsuave.com');   // <-- change to the real inbox that should get lead notifications
define('FROM_EMAIL',  'noreply@softsuave.com'); // <-- shown as the "From" address on emails sent
define('FROM_NAME',   'Soft Suave Technologies');
define('SITE_NAME',   'Soft Suave Technologies');

/**
 * SMTP settings — required to actually send real email (including while
 * testing on localhost/XAMPP, which has no mail server of its own).
 *
 * Using Gmail as an example since it's the easiest to set up for testing:
 *   1. Go to https://myaccount.google.com/apppasswords
 *      (you need 2-Step Verification turned on for this page to appear)
 *   2. Create an "App Password" for "Mail" — Google gives you a 16-character code
 *   3. Put your Gmail address in SMTP_USER below
 *   4. Put that 16-character app password in SMTP_PASS below (NOT your normal Gmail password)
 *
 * You can swap these for your real hosting provider's SMTP details later —
 * nothing else in the code needs to change.
 */
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');           // 'tls' for port 587, 'ssl' for port 465
define('SMTP_USER', 'your-gmail-address@gmail.com');
define('SMTP_PASS', 'your-16-char-app-password');
