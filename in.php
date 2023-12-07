<?php
// Fetch user data and display in table format
// Make sure to include your database connection here

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hws";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['ID']; // Assuming the ID is passed through POST after successful login
$sql = "SELECT * FROM user_info WHERE ID = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $html = "<table border='1'><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Password</th>
            <th>ID</th>
            <th>Preferred Payment Method</th>
            <th>UIIndex</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>
                <td>".$row["First_Name"]."</td>
                <td>".$row["Last_Name"]."</td>
                <td>".$row["Email"]."</td>
                <td>".$row["Phone_Number"]."</td>
                <td>".$row["Password"]."</td>
                <td>".$row["ID"]."</td>
                <td>".$row["Preferred_Payment_Method"]."</td>
                <td>".$row["UIIndex"]."</td>
                </tr>";
    }

    $html .= "</table>";
    echo $html;
} else {
    echo "0 results";
}

$conn->close();
?>
