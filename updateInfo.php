<?php
        // Make sure to include your database connection here
        $servername = "localhost";
        $username = "root"; // Replace with your actual username
        $password = ""; // Replace with your actual password
        $dbname = "hws"; // Replace with your actual database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if form fields are set and not empty
        if (isset($_POST['Firstname']) && isset($_POST['Lastname']) && isset($_POST['email']) &&
            isset($_POST['dial']) && isset($_POST['key']) && isset($_POST['ID']) &&
            isset($_POST['paymentOption'])) {
            
            // Sanitize and assign form values to variables
            $firstname = mysqli_real_escape_string($conn, $_POST['Firstname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['Lastname']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['dial']);
            $password = mysqli_real_escape_string($conn, $_POST['key']);
            $id = mysqli_real_escape_string($conn, $_POST['ID']);
            $paymentOption = mysqli_real_escape_string($conn, $_POST['paymentOption']);
            
            // Update the user information in the database
            $sql = "UPDATE user_info SET First_Name='$firstname', Last_Name='$lastname', 
                    Email='$email', Phone_Number='$phone', Password='$password', 
                    Preferred_Payment_Method='$paymentOption' WHERE ID='$id'";
            
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "All form fields are required";
        }

        $conn->close();
?>
