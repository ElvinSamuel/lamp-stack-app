<!DOCTYPE html>
<html>
    <head>
        <title>Elvin M. Samuel: PHP Example Code</title>
    </head>
    <body>
        <?php
            /*
                Thanks for your time, and thanks for looking at my code. 
                I've included a sample of PHP that can at the very least show 
                that I can be a great member of you Dev team. As a junior developer
                I'm eager to get to work on meaningful projects that grow my skills
                and allow me to make an impact.
            */  
            
            function myProfile(){
                $name = "Elvin M. Samuel";
                $job  = "Full Stack Developer";
                $skills = "Front-End Preprocessors (Pug/Jade, Sass), Back-End (NodeJS, PHP)";
                $learning = "true";
            
                echo "My name is " . $name . " and I'm a " . $job . "<br>";
                echo "My primary skills are " . $skills . "<br>";
                echo "And it's " . $learning . ", I do enjoy learning more about development <br>";
                // Adding a little room
                echo "<br><br><br>";
            }
            
            // Calling the function
            myProfile();
            
            // ===========================================
            // Carrying over what I know from VanillaJS & NodeJS
            // PHP can be OOP or Functional, where Functional is
            // often more encouranged to avoid unintential behaviors
            // ===========================================
            
            // Including some basic Class declerations:
            class Dog {
                function Dog($breed, $age = 'Puppy', $personality) {
                    $this-> breed = $breed;
                    $this-> age = $age;
                    $this-> personality = $personality;
                }
            }
            
            $rocket = new Dog("Berner", 3, "Jolly");
            $abby = new Dog("Poodle", 5, "Calm");
            
            echo "We have a " . $rocket->age . " year old " . $rocket->breed . " named 'Rocket'<br>";
            echo "And a ". $abby->age . " year old " . $abby->breed . " named 'Abby'<br>";
            
            echo "<br>";
            // Iteration in PHP:
            $i = 10; // bottles of (root) beer (doesn't rhyme as well).
            while ($i >=1){
                echo $i . '<br>';
                $i--;
            }
            
            echo "<br>";
            
            // Finally, some data types and Array->methods.
            $colors = array('Goldenrod', 'Smoke', 'Sage', 'Fuschia', 'Eggshell');
            
            sort($colors);
            $clength = count($colors);
            for($i = 0; $i < $clength; $i++){
                echo $colors[$i];
                echo "<br>";
            }
            
            
            /*
            ==============================================
            ===MySQLi & PHP Code Snippet
            ==============================================
            */
            
            $servername = 'localhost';
            $username   = 'username';
            $password   = 'password';
            
            $conn = new mysqli($servername, $username, $password, $db, $dbport);
            
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "CREATE TABLE MyGuests (
                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                        firstname VARCHAR(30) NOT NULL,
                        lastname VARCHAR(30) NOT NULL,
                        email VARCHAR(50),
                        reg_date TIMESTAMP
                    )";
                    
            if ($conn->query($sql) === TRUE){
                echo "Database created successfully (".$conn.host_info.")";
            } else {
                echo "Error creating database: " . $conn->error;
            }
            
            $conn->close();
        ?>
    </body>
</html>