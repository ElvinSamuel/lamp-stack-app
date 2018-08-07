<!DOCTYPE html>
<html>
    <head>
        <title>Simple MySQL & PHP Server</title>
    </head>
    
    <body>
        
        <?php
        
            // Database Connection
            $host = "127.0.0.1";
            $user = "elvinsamuel";
            $pass = "";
            $db   = "sample_db";
            $port = 3306;
            
            $connection = mysqli_connect($host, $user, $pass, $db, $port)or ide(mysql_error());
            
            $query = "SELECT * FROM users";
            $result = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($result)){
                echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
            }
        ?>
    </body>
</html>