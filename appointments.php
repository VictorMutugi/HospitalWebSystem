<!DOCTYPE html>
<html>
    <head>
        <title>Appointment db page</title>
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
        $fullName = $_POST['FName'];
        $phoneNumber = $_POST['Number'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $email = $_POST['mail'];
        $medic = $_POST['expert'];
        $issue = $_POST['issue'];

        // Generating AIndex and UIIndex
        $aIndex = uniqid(); // Generate a unique ID for AIndex
        $uiIndex = "some_value"; // Replace 'some_value' with actual value for UIIndex

        // SQL query to insert data into table
        $sql = "INSERT INTO appointments (Full_Name, Email, Date, Time, Medic, Issue, AIndex, UIIndex) 
                VALUES ('$fullName', '$email', '$date', '$time', '$medic', '$issue', '$aIndex', '$uiIndex')";

        function redirect($page){
            header("location: $page");
            exit();
        }
        if ($conn->query($sql) === TRUE) {
                redirect(clinicalServices.html);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();
        ?>
    </body>
</html>