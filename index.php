
<html>
    <head>
        <script>
            console.log("test")
        </script>
        <style>
            h1{
                color: aqua;
            }

        </style>
    </head>
    <body>
            <h1>Hello World</h1>
            <a href="https://w3schools.com">my favorite sites</a>

        <?php 
        echo "test: ";
        $secret = "password123"; // wont print out 
        echo $secret;
        $stack =[1,2,3];
        echo $stack[1]; // W3S php-looping. 
        ?>
        <h2>new line</h2>
        <
        ?>


        <form method="GET">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" />
            <label for="age">Age</label>
            <input type="number" id="age" name="age" />
            <div>Type</div>
            <label for="student">Student</label>
            <input id="student" type="radio" name="type" value="student" />
            <label for="teacher">Teacher</label>
            <input id="teacher" type="radio" name="type" value="teacher" />
            <div>Interests</div>
            <!-- change name="interests" to name="interests[]" to see the different when submitting -->
            <label for="php">PHP</label>
            <input id="php" type="checkbox" name="interests" value="php" />
            <label for="js">JS</label>
            <input id="js" type="checkbox" name="interests" value="js" />
            <label for="html">HTML</label>
            <input id="html" type="checkbox" name="interests" value="html" />
            <label for="css">CSS</label>
            <input id="css" type="checkbox" name="interests" value="css" />

            <input type="submit" value="Renamed Submit" />
            <input type="reset" />
        </form>
<?php

if (count($_POST) > 0) {
    echo "POST <pre>" . var_export($_POST, true) . "</pre>";
}

if (count($_GET) > 0) {
    echo "GET <pre>" . var_export($_GET, true) . "</pre>";
}

if (count($_REQUEST) > 0) {
    echo "REQUEST <pre>" . var_export($_REQUEST, true) . "</pre>";
}
?>
    </body>
</html>