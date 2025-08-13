<? // Quesion: HTML Form and PHP Processing ?>



<!-- HTML Form -->
<form method="post" action="process.php">
    Name: <input type="text" name="fullname" required><br>
    Registration No: <input type="text" name="regno" required><br>
    Department: <input type="text" name="department_name" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Submit">
</form>

<!-- PHP Script (process.php) -->
<?php

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'school_records';

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape input to prevent SQL injection
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $regno       = mysqli_real_escape_string($conn, $_POST['regno']);
    $department  = mysqli_real_escape_string($conn, $_POST['department_name']);
    $email       = mysqli_real_escape_string($conn, $_POST['email']);

    // Validate required fields
    if (empty($fullname) || empty($regno) || empty($department) || empty($email)) {
        die("All fields are required");
    }

    // Prepare and execute insert query
    $sql = "INSERT INTO students (fullname, regno, department_name, email) 
            VALUES ('$fullname', '$regno', '$department', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>