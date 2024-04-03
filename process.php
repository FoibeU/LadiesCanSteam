<?php
// Database connection
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'ladiescanstem'; 

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $userType = $_POST["userType"];
    $password = $_POST["password"];

    // Hash the password for security
   // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the database table
    $sql = "INSERT INTO registrations (full_name, username, email, user_type, password) VALUES ('$fullName', '$username', '$email', '$userType', '$password')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>