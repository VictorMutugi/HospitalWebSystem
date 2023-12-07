<!DOCTYPE html>
<html>
<head>
    <title>Data Fetcher</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f5ed; /* Soft cream background */
            margin: 0;
            padding: 20px;
        }

        /* CSS for table */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #f7d8a5; /* Light golden border */
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #ffd699; /* Light orange heading */
            font-weight: bold;
        }

        /* CSS for buttons */
        button {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #ffb366; /* Lighter orange border */
            background-color: #ffcc80; /* Light orange button */
            color: #333;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #ffd699; /* Darker orange on hover */
        }

        /* Page heading */
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff704d; /* Light red heading */
        }
    </style>
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
