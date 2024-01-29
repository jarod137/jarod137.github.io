<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'config.php';  // Include the configuration file

// Send email using PHPMailer
$mail = new PHPMailer();
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = SMTP_SERVER;  // Use constant from config.php
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;  // Use constant from config.php
    $mail->Password   = SMTP_PASSWORD;  // Use constant from config.php
    $mail->SMTPSecure = 'tls'; // Choose 'ssl' or 'tls' based on your server configuration
    $mail->Port       = SMTP_PORT;  // Use constant from config.php

    // Other code remains unchanged...

    $mail->send();
    echo "Thank you for your message! We will get back to you soon.";
} catch (Exception $e) {
    echo "Oops! Something went wrong and we couldn't send your message. Error: {$mail->ErrorInfo}";
}

?>
