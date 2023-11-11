<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

if (isset($_POST['submit'])) {
    $employee_name = $_POST['employee_name'];
    $employee_id = $_POST['employee_id'];

    // Establish a database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "leave_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Define the SQL query to retrieve from_email and password based on matching conditions
    $sql = "SELECT from_email, password FROM employeeleaverequests
    WHERE employee_name = ? AND employee_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $employee_name, $employee_id);
    $stmt->execute();
    $stmt->bind_result($from_email, $password);
    $stmt->fetch();
    $stmt->close();

    if ($from_email) {
        // Define the absolute path to the "uploads" folder
        $target_folder = __DIR__ . '/uploads/';

        // Create the "uploads" folder if it doesn't exist
        if (!file_exists($target_folder)) {
            mkdir($target_folder, 0755, true);
        }

        $pdf_file = $target_folder . $_FILES['pdf_file']['name'];

        if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdf_file)) {
            // Send an email to HR using PHPMailer with TLS
            $to_email = 'kavyabandla70@gmail.com'; // Predefined HR's email address
            $subject = 'Leave Request from ' . $employee_name;
            $message = 'Employee ID: ' . $employee_id;

            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->SMTPDebug = SMTP::DEBUG_OFF;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = $from_email; // Use the "from_email" from the database
                $mail->Password = $password; // Use the "email_password" from the database
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;

                $mail->Port = 587;

                // Recipients
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
    } else {
        echo 'Matching record not found in the database.';
    }

    // Close the database connection
    $conn->close();
}
?>
