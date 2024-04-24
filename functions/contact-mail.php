<?php

// Sanitize input data
$fname = htmlspecialchars($_POST['fname']);
$lname = htmlspecialchars($_POST['lname']);
$email = htmlspecialchars($_POST['email']);
$country = htmlspecialchars($_POST['country']);
$phone = htmlspecialchars($_POST['phone']);
$company = htmlspecialchars($_POST['company']);
$service = htmlspecialchars($_POST['service']);
$message_p = $_POST['message'];

// Check if email is valid
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Invalid email format";
    header("location: /sp/contact.php");
    exit;
}

// Set sender email
$from = "noreply@adora-solutions.com";

// Set recipient email
$to = $email;

// Set email subject
$subject = 'Interested in ' . $service;

// Compose email message
$message = "Name: " . $fname . " " . $lname . "<br>";
$message .= "E-mail: " . $email . "<br>";
$message .= "Country: " . $country . "<br>";
$message .= "Phone No: " . $phone . "<br>";
$message .= "Company Name: " . $company . "<br>";
$message .= $message_p;

// Set additional headers
$headers = 'From: ' . $from . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
    // $_SESSION['success'] = "The mail was sent successfully";
    header("location: /sp/contact.php");
    exit;
}

// echo $to, $subject, $message, $headers;
