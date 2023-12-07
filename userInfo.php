<!DOCTYPE html>
<html>
<head>
    <title>User Info db page</title>
</head>
<body>
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

            // Prepare data for insertion
            $firstname = $_POST['Firstname'];
            $lastname = $_POST['Lastname'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['dial'];
            $password= $_POST['key'];
            $ID= $_POST['ID'];
            $payment= $_POST['paymentOption'];


            // Generating UIIndex
            $UIIndex = uniqid(); // Generate a unique ID for UIIndex 
           

            // SQL query to insert data into table
            $sql = "INSERT INTO user_info (First_Name, Last_Name, Email, Phone_Number, Password, ID, Preferred_Payment_Method, UIIndex ) 
                    VALUES ('$firstname', '$lastname', '$email', '$phoneNumber', '$password', '$ID', '$payment', '$UIIndex')";

            if ($conn->query($sql) === TRUE) {
                // Fetch the inserted data from the database
                $fetch_sql = "SELECT * FROM user_info WHERE UIIndex = '$UIIndex'";
                $result = $conn->query($fetch_sql);

                if ($result !== false && $result->num_rows > 0) {
                    echo "<h2>Data recorded successfully!</h2>";
                } else {
                    echo "No data found";
                }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        ?>
    </body>
</html>
