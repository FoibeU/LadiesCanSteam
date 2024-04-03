<?php
// Database connection settings
$host = 'localhost'; // Usually 'localhost'
$username = 'root';
$password = '';
$database = 'ladiescanstem'; // Your database name

// Attempt to connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['names'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $degree = $_POST['degree'];
    $major = $_POST['major'];
    $institution = $_POST['institution'];
    $gradYear = $_POST['gradYear'];

    // Check if email already exists
    $sql_check = "SELECT * FROM userprofile WHERE email = '$email'";
    $result_check = $conn->query($sql_check);
    if ($result_check->num_rows > 0) {
        echo "Error: The email address '$email' already exists.<br>";
    } else {
        // Insert user profile data into the database
        $sql = "INSERT INTO userprofile (names, email, phoneNumber, address, degree, major, institution, gradyear)
                VALUES ('$name', '$email', '$phone', '$address', '$degree', '$major', '$institution', '$gradYear')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Retrieve and display user profile information
$sql = "SELECT * FROM userprofile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<center><h2 color ='#45a049'>Current User Information</h2><center>";
    echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Degree</th><th>Major"
    . "</th><th>Institution</th><th>Graduation Year</th><th></tr>";
   
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["names"]."</td><td>".$row["email"]."</td><td>".$row["phoneNumber"]."</td><td>".$row["address"]."</td><td>".$row["degree"]."</td><td>".$row["major"]."</td><td>".$row["institution"]."</td><td>".$row["gradyear"]."</td></tr>";
    }
    echo "</table> <br>";
     echo"<a href ='project.html' font-size ='20px'>check out the opportunities for you</a> or <a href ='Home.html'>Back Home</a>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
