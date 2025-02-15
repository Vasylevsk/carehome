<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "prostoluntick@gmail.com";
    $subject = "New Contact Form Submission";
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: $email" . "\r\n" . 
               "Reply-To: $email" . "\r\n" . 
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent!";
    } else {
        echo "Error sending message.";
    }
}
?>