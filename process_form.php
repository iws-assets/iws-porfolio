<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "shakireliyas562@gmail.com";

    // Set email subject
    $subject = "New Contact Form Submission";

    // Compose email message
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>
