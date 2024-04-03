<?php
session_start();

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
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM registrations WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            // Password is correct, redirect to dashboard or any other page
            $_SESSION["username"] = $username;
            echo"you have successfull log in now you can start by learning";
            header("Location: skills.html");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }
}

// Close the database connection
$conn->close();
?>
