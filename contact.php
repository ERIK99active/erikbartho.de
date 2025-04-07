<?php
// Display errors for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if form data exists
if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['name'])) {
    // Form data
    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email details
    $to = "info@erikbartho.de"; // Your email address
    $from = "noreply@erikbartho.de"; // You can use a no-reply or valid sender email address
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $email_from . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Construct the message body with all form fields
    $email_message = "You have received a new message from your contact form:\n\n";
    $email_message .= "Name: " . $name . "\n";
    $email_message .= "Email: " . $email_from . "\n";
    $email_message .= "Subject: " . $subject . "\n";
    $email_message .= "Message:\n" . $message . "\n";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        // Success response
        echo json_encode(["status" => "success", "message" => "Danke! Deine Nachricht wurde gesendet."]);
    } else {
        // Failure response
        echo json_encode(["status" => "error", "message" => "Fehler: Die Nachricht konnte nicht gesendet werden."]);
    }
    exit(); // Ensure nothing further is processed
}
?>
