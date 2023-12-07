<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hws"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = $_POST['ID'];
    $password = $_POST['password'];

    // SQL query to check if the record exists in the database
    $sql = "SELECT * FROM user_info WHERE ID = '$ID' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect to in.html if the record exists
        header("Location: in.html");
        exit();
    } else {
        // Redirect to userinfo.html if the record doesn't exist
        header("Location: userinfo.html");
        exit();
    }
}

$conn->close();
?>
