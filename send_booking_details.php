<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $formData = [
        'Name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
        'Email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
        'Phone' => filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING),
        'Trip Type' => isset($_POST['trip-type']) ? $_POST['trip-type'] : 'Round Trip'
    ];

    // Add conditional fields based on form type
    if (isset($_POST['location'])) { // Flights form
        $formData['From'] = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
        $formData['To'] = filter_input(INPUT_POST, 'start', FILTER_SANITIZE_STRING);
        $formData['Departure'] = $_POST['departure'];
        if (isset($_POST['return']))
            $formData['Return'] = $_POST['return'];
        $formData['Travellers'] = $_POST['travellers'];
    } elseif (isset($_POST['hotel-destination'])) { // Hotels form
        $formData['Destination'] = filter_input(INPUT_POST, 'hotel-destination', FILTER_SANITIZE_STRING);
        $formData['Check-in'] = $_POST['checkin'];
        $formData['Check-out'] = $_POST['checkout'];
        $formData['Rooms'] = $_POST['rooms'];
        $formData['Guests'] = $_POST['guests'];
    } elseif (isset($_POST['cruises-destination'])) { // Cruises form
        $formData['Destination'] = filter_input(INPUT_POST, 'cruises-destination', FILTER_SANITIZE_STRING);
        $formData['Departure'] = $_POST['departure'];
        $formData['Return Date'] = $_POST['return_date'];
        $formData['Cruise'] = $_POST['cruise'];
        $formData['Guests'] = $_POST['guests'];
    } elseif (isset($_POST['clocation'])) { // Car form
        $formData['From'] = filter_input(INPUT_POST, 'clocation', FILTER_SANITIZE_STRING);
        $formData['To'] = filter_input(INPUT_POST, 'cstart', FILTER_SANITIZE_STRING);
        $formData['Trip Start'] = $_POST['trip_start'];
        $formData['Trip End'] = $_POST['trip_end'];
        $formData['Guests'] = $_POST['guests'];
        $formData['Trip Type'] = $_POST['trip_type'];
    }

    // Create email message
    $message = "<h2>New Booking Request</h2>";
    foreach ($formData as $key => $value) {
        if (!empty($value)) {
            $message .= "<p><strong>$key:</strong> $value</p>";
        }
    }

    // Configure PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'adityagupta80041@gmail.com'; // SMTP username
        $mail->Password = 'zpzlkerohziiaouu'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('adityagupta80041@gmail.com', 'Booking System');
        $mail->addAddress('support@booktrip4me.com', 'Admin');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Booking Form Submission';
        $mail->Body = $message;

        $mail->send();
        // echo '<script>alert("Message sent successfully!"); window.history.back();</script>';
        header('Location: thanks.php');
    } catch (Exception $e) {
        // echo '<script>alert("Message could not be sent. Error: '.$mail->ErrorInfo.'"); window.history.back();</script>';
    }
} else {
    header("Location: /");
}