<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $name = $_POST['name'];
    $email = $_POST['emailaddress'];
    $emailsub = $_POST['emailsub'];
    $message = $_POST['message'];
    $number = $_POST['mobile'];

    // Recipient email address
    $to = "recipient@example.com"; // Replace with your recipient's email address

    // Email subject
    $subject = "New Contact Form Submission: $emailsub";

    // Email message
    $email_message = "Name: $name\r\nEmail: $email\r\nMobile: $number\r\nMessage:\r\n$message";

    // Additional headers
    $headers = "From: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        header("Location: thankyou.html"); // Redirect to thank you page
        exit();
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
//redirect
header("Location:thankyou.html");
?>
