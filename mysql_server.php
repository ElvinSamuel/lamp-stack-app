<!DOCTYPE html>
<html>
    <head>
        <title>Basic MySQL Server</title>
    </head>
    
    <body>
        <?php
            $servername = "127.0.0.1";
            $username   = "elvinsamuel";
            $password   = "";
            
            $port       = 3306;
            
            // Connection
            $conn = new mysqli($servername, $username, $password);
            
            // Check connection
            if ($conn->connection_error){
                die("Connection Failed: " . $conn->connection_error);
            }
            
            echo "<br><br>Success! You're Connected!";
        ?>
    </body>
</html>