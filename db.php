<!DOCTYPE html>
<html>
    <head>
        <title> HWS Database</title>
    </heead>
    <body>
        <?php
            $servername="localhost";
            $username="root";
            $password="";

            //create connection
            $conn = msql_connect($servername, $username, $password);

            //check connection
            if(!$conn){
                die("Unsuccessful connection:". mysqli_connect_error());

            }


            $sql = "CREATE DATABASE hws1;";


            if(mysqli_query($conn, $sql)){
                
                print("Database created successfully");
            }
            else{

                echo "Error creating the database:" , mysqli_error($conn);
            }

            mysqli_close($conn);

        ?>

    </body>
</html>