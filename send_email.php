<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email address where you want to receive messages
    $to = "aseebshibin4@gmail.com";

    // Email content
    $email_subject = "New message from $name: $subject";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        http_response_code(200); // Success response code
    } else {
        http_response_code(500); // Server error response code
    }
} else {
    http_response_code(400); // Bad request response code
}
?>
