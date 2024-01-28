use PHPMailer-master\PHPMailer-master\PHPMailer;
use PHPMailer-master\PHPMailer-master\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Send email using PHPMailer
$mail = new PHPMailer();
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'your-smtp-server.com'; // Replace with your SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your-smtp-username'; // Replace with your SMTP username
    $mail->Password   = 'your-smtp-password'; // Replace with your SMTP password
    $mail->SMTPSecure = 'tls'; // Choose 'ssl' or 'tls' based on your server configuration
    $mail->Port       = 587; // Replace with your SMTP port

    // Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('jarod1372@gmail.com'); 
    // Content
    $mail->isHTML(false); // Set to true if you want to send HTML emails
    $mail->Subject = "New Form Submission from $name";
    $mail->Body    = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    $mail->send();
    echo "Thank you for your message! We will get back to you soon.";
} catch (Exception $e) {
    echo "Oops! Something went wrong and we couldn't send your message. Error: {$mail->ErrorInfo}";
}
