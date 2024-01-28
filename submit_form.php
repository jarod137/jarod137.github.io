<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    // You can customize the email subject and content as needed
    $subject = "New message from $name";
    $content = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email to jarod137@nmsu.edu
    mail("jarod137@nmsu.edu", $subject, $content);

    exit;
}
?>
