<!DOCTYPE html>
<html>
    <head>
        <title>Data Fetcher</title>
    </head>
    <body>
        <?php
            
            
            $servername="localhost";
            $username="root";
            $password="";
            $db = "hws";

            //create connection
            $conn = new mysqli($servername, $username, $password, $db);

            //check connection
            if($conn -> connect_error){
                die("Unsuccessful connection:". $conn -> connect_error );

            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve the value submitted via the form
                $specialty = $_POST["specialty"];

                // Prepare and execute the SQL query based on the submitted value
                $sql = "SELECT * FROM findadoctor WHERE Specialty = '$specialty'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "ID: " . $row["FADIndex"] . " - Name: " . $row["Name"] . " - phone number: " . $row["Phone_Number"] . "-email: " . $row["Email"] . " call hours: " . $row["Call_Hours" ] . "<br>";
                        // Adjust field names (id, name, your_column) based on your table structure
                    }
                } else {
                    echo "No results found.";
                }
            }
            
            $conn->close();
        


        ?>
    </body>
        
</html>