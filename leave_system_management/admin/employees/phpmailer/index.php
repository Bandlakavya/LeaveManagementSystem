<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

if (isset($_POST['submit'])) {
    $from_email = $_POST['from_email'];
    $employee_name = $_POST['employee_name'];
    $employee_id = $_POST['employee_id'];

    // Validate the input and perform necessary checks

    // Define the absolute path to the "uploads" folder
    $target_folder = __DIR__ . '/uploads/';

    // Create the "uploads" folder if it doesn't exist
    if (!file_exists($target_folder)) {
        mkdir($target_folder, 0755, true);
    }

    $pdf_file = $target_folder . $_FILES['pdf_file']['name'];

    if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdf_file)) {
        // Send an email to HR using PHPMailer with TLS
        $to_email = 'purnachandarraobandla@gmail.com'; // Replace with HR's email address
        $subject = 'Leave Request from ' . $employee_name;
        $message = 'Employee ID: ' . $employee_id;

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dhanunjayatankala@gmail.com
            '; // Replace with your Gmail email
            $mail->Password = 'inqw lfpy rzni ogpl'; // Replace with your Gmail password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS
            $mail->Port = 587;

            //Recipients
            $mail->setFrom($from_email);
            $mail->addAddress($to_email);

            // Attach the PDF file
            $mail->addAttachment($pdf_file);

            // Content
            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            echo 'Email sent successfully.';
        } catch (Exception $e) {
            echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
        }
    } else {
        echo 'Error uploading the PDF file.';
    }
}
?>
