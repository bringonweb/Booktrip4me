<?php
include 'db.php'; // Include the connection file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$booking = $_POST['booking_ref'];
$type = $_POST['query_type'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_queries (first_name, last_name, email, phone, booking_ref, query_type, message)
VALUES ('$first', '$last', '$email', '$phone', '$booking', '$type', '$message')";

if ($conn->query($sql) === TRUE) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'adityagupta80041@gmail.com';
        $mail->Password = 'zpzlkerohziiaouu';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('adityagupta80041@gmail.com', 'Website Contact');
        $mail->addAddress('support@booktrip4me.com', 'Admin');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
        <strong>Name:</strong> $first $last <br>
        <strong>Email:</strong> $email <br>
        <strong>Phone:</strong> $phone <br>
        <strong>Booking Ref:</strong> $booking <br>
        <strong>Query Type:</strong> $type <br>  
        <strong>Message:</strong> $message";

        $mail->send();
        // echo "Message sent successfully!";
        header('Location: thanks.php');
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Database Error: " . $conn->error;
}
?>