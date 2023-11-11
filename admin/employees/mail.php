<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leave_db";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $employee_id = $_POST['employee_id'];
    $employee_name = $_POST['employee_name'];
    $from_email = $_POST['from_email'];
    $employee_password = $_POST['password'];

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert data
    $sql = "INSERT INTO employeeleaverequests (employee_id, employee_name,from_email, password) VALUES (?, ?, ?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $employee_id, $employee_name, $from_email,$password);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Leave Request Form</title>
</head>
<body>
    <h2>Employee Leave Request Form</h2>
    <form method="post">
        <label for="user_id">User ID:</label>
        <input type="text" name="employee_id" required><br><br>
        
        <label for="employee_name">Employee Name:</label>
        <input type="text" name="employee_name" required><br><br>
        
        <label for="employee_email">Employee Email:</label>
        <input type="email" name="from_email" required><br><br>

        <label for="employee_password">Employee Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>