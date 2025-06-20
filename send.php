<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "rasulbekrustamov20@gmail.com";  // Ваш email
    $subject = "New Contact Form Submission";
    $message = "Name: " . $_POST["name"] . "\n" .
               "Email: " . $_POST["email"] . "\n" .
               "Phone: " . $_POST["phone"] . "\n" .
               "Message:\n" . $_POST["message"];
    $headers = "From: no-reply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
