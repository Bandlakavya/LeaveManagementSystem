<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>     
<head>
    <title>Leave Management System</title>
    <style>
        body {
            background-image: url('Background.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .page-header {
            text-shadow: 3px 2px black;
            color: #fff;
        }

        .login-page {
            background: rgba(0, 0, 0, 0.7);
        }

        .login-box {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .card {
            border: none;
        }

        .card-body {
            padding: 20px;
        }

        .input-group-text {
            background-color: #007BFF;
            border: none;
        }

        .form-control {
            border: 1px solid #007BFF;
        }

        .btn-primary {
            background-color: #007BFF;
            transition: all 0.2s ease-in-out;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <form action="mail.php" method="post" enctype="multipart/form-data">
        <h1 class="text-center pb-4 mb-4 text-light page-header">Leave Management System</h1>
        <div class="login-box">
            <div class="card card-primary">
                <div class="card-body">
                    <label for="from_email">From Email:</label>
                    <input type="text" name="from_email" required><br><br>

                    <label for="password">Password:</label>
                    <input type="password" name="password" required><br><br>
                    
                    
                    <label for="pdf_file">Upload PDF Leave Request:</label>
                    <input type="file" name="pdf_file" accept=".pdf" required><br><br>
                    
                    <label for="employee_name">Employee Name:</label>
                    <input type="text" name="employee_name" required><br><br>
                    
                    <label for="employee_id">Employee ID:</label>
                    <input type="text" name="employee_id" required><br><br>
                    
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </div>
    </form>
</body>

</html>