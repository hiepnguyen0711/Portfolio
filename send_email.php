<?php
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobileNumber = $_POST['mobileNumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'nguyenvanhiep0711@gmail.com';
    $subject = 'New Contact Form Submission';
    $messageBody = "First Name: $firstName\n";
    $messageBody .= "Last Name: $lastName\n";
    $messageBody .= "Mobile Number: $mobileNumber\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Message: $message\n";

    $headers = "From: contact-form@example.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Failed to send email.';
    }
}
?>