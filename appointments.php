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

            // Generating AIndex
            $aIndex = uniqid(); // Generate a unique ID for AIndex

            // SQL query to insert data into table
            $sql = "INSERT INTO appointments (Full_Name, Email, Date, Time, Medic, Issue, AIndex) 
                    VALUES ('$fullName', '$email', '$date', '$time', '$medic', '$issue', '$aIndex')";

            if ($conn->query($sql) === TRUE) {
                // Fetch the inserted data from the database
                $fetch_sql = "SELECT * FROM appointments WHERE AIndex = '$aIndex'";
                $result = $conn->query($fetch_sql);

                if ($result !== false && $result->num_rows > 0) {
                    echo "<h2>Data recorded successfully!</h2>";
                    echo "<table border='1' id='appTable'>";
                    echo "<tr><th>AIndex</th><th>Name</th><th>Email</th><th>Date</th><th>Time</th><th>Medic</th><th>Issue</th></tr>";
                
                    $tableContent = ''; // Initialize variable to store table content
                
                    // Output data of each row and store content
                    while ($row = $result->fetch_assoc()) {
                        $tableContent .= "<tr><td>" . $row["AIndex"] . "</td><td>" . $row["Full_Name"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Time"] . "</td><td>" . $row["Medic"] . "</td><td>" . $row["Issue"] . "</td></tr>";
                    }
                
                    echo $tableContent; // Output table content in the HTML table
                
                    echo "</table>";
                
                    // Create a downloadable file with the table content
                    $fileContent = "<table border='1'>" . $tableContent . "</table>";
                    $filename = "appointment receipt" . ".html"; 
                
                    // Force download of the file when the link is clicked
                    echo "<a href='data:text/html;charset=utf-8," . urlencode($fileContent) . "' download='" . $filename . "'>Download Receipt</a>";
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
