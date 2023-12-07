<!DOCTYPE html>
<html>
<head>
    <title>Data Fetcher</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "hws";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        // Check connection
        if ($conn->connect_error) {
            die("Unsuccessful connection: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the value submitted via the form
            $specialty = $_POST["specialty"];

            // Prepare and execute the SQL query based on the submitted value
            $sql = "SELECT * FROM findadoctor WHERE Specialty = '$specialty'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output table header
                echo "<table border='1'>";
                echo "<tr><th>ID</th><th>Name</th><th>Phone Number</th><th>Email</th><th>Call Hours</th></tr>";

                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    $phone_no = $row["Phone_Number"];
                    $mail = $row["Email"];

                    echo "<tr>";
                    echo "<td>" . $row["FADIndex"] . "</td>";
                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td><a href='tel:$phone_no'>$phone_no</a></td>";
                    echo "<td><a href='mailto:$mail'>$mail</a></td>";
                    echo "<td>" . $row["Call_Hours"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
                echo"<br><a href=\"findA-Doctor.html\"><button>back</button></a>";
                echo"<br><a href=\"in.html\"><button>Home</button></a>";
            } else {
                echo "No results found.";
            }
        }
        
        $conn->close();
    ?>
</body>
</html>
