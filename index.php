<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
</head>
<body>

    <!-- <form action="index.php" method="get">
        Name:
        <input type="text" name="name" placeholder='e.g. "Patrick"'>
        Age:
        <input type="number" name="age" placeholder="e.g. 21">
        <input type="submit" value="Submit">
    </form>

    Your name is  -->
    <?php 
        // echo $_GET['name'];
    ?>
<!--     
    <br>
    Your age is -->
    <?php
        // echo $_GET['age'];
    ?>

    <!-- Create number inputs for calculator -->
    <!-- <form action="index.php" method="get">
        Number 1:<input type="number" name="num1">
        Number 2:<input type="number" name="num2">
        <input type="submit" value="Submit">
    </form> -->

    <?php 
        // echo $_GET['num1'] + $_GET['num2'];
    ?>

    <!-- Create password input for talking about GET and POST methods -->
    <!-- <form action="index.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit" value="Submit">
    </form>
    <br><br>

    <?php
        // echo $_POST['password'];
    ?> -->


    <!-- Work with PHP arrays -->
    <?php
        // $friends = array('Kevin', 'Karen', 'Oscar', 'Jim');
        // echo $friends[0];
    ?>

    <!-- Using checkboxes and gathering its data -->
    <!-- <form action="index.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit" value="Submit">
    </form> -->

    <?php 
        // $fruits = $_POST['fruits'];
        // echo $fruits[0];
    ?>


    <!-- Using associative arrays -->

    <!-- <form action="index.php" method="post">
        <input type="text" name="student">
        <input type="submit" value="Submit">
    </form> -->

    <?php
        // $grades = array("Jim" => 95, "Oscar" => 89, "Pam" => 86);
        // echo $grades[$_POST['student']];
    ?>


    <?php
        // Create first function in php
        // function sayHello($name, $age) {
        //     return "Hello $name, you are $age <br>";
        // };

        // echo sayHello("Patrick", 23);
        // echo sayHello("Mike", 45);
        // echo sayHello("Andrew", 37);


        // Work with other functions in php using if statements
        // function getMax($num1, $num2, $num3) {
        //     if ($num1 >= $num2 && $num1 >= $num3) {
        //         return $num1;
        //     } elseif ($num2 >= $num1 && $num2 >= $num3) {
        //         return $num2;
        //     } else {
        //         return $num3;
        //     };
        // };

        // echo getMax(10000, 200, 109);
    ?>

    <!-- Create a more complicated calculator -->
    <!-- <form action="index.php" method="post">
        Number 1: <input type="number" name="num1"><br>
        Operator: <input type="text" name="operator"><br>
        Number 2: <input type="number" name="num2"><br>
        <input type="submit" value="Submit">
    </form> -->

    <?php
        // $num1 = $_POST['num1'];
        // $num2 = $_POST['num2'];
        // $operator = $_POST['operator'];

        // if ($operator == "+") {
        //     echo $num1 + $num2;
        // } elseif ($operator == "-") {
        //     echo $num1 - $num2;
        // } elseif ($operator == "*") {
        //     echo $num1 * $num2;
        // } elseif ($operator == "/") {
        //     echo $num1 / $num2; 
        // } else {
        //     echo "Invalid operator";
        // };
    ?>

    <!-- Work with switch statements in php -->
    <!-- <form action="index.php" method="post">
        What grade did you get?<br>
        <input type="text" name="grade"><br>
        <input type="submit" value="Submit">
    </form> -->

    <?php
        // $grade = $_POST['grade'];

        // switch ($grade) {
        //     case "A": 
        //         echo "You did amazing!";
        //         break;
        //     case "B": 
        //         echo "You did pretty good";
        //         break;
        //     case "C": 
        //         echo "You did poorly";
        //         break;
        //     case "D": 
        //         echo "You did very badly";
        //         break;
        //     case "F": 
        //         echo "You failed";
        //         break;
        //     default: 
        //         echo "Please type a valid grade";
        //         break;
        // }
    ?>


    <!-- Working with while loops in php -->
    <?php
        // $index = 6;

        // do {
        //     echo "$index <br>";
        //     $index++;
        // } while ($index <= 5);
    ?>

    <!-- Working with for loops in php -->
    <?php
        // $luckyNumbers = array(4, 8, 15, 16, 23, 42);

        // for ($i = 0; $i <= count($luckyNumbers); $i++) {
        //     echo "$luckyNumbers[$i] <br>";
        // };
    ?>

    <!-- Including HTML in php -->
    <?php
        include "header.html";

        include "footer.html";
    ?>


    <?php
        // $siteOwner = 'Patrick';
        // echo("<h1>$siteOwner's site</h1>");
        // echo "<hr>";
        // echo "<p>This is my site</p>";

        // echo "<h4>Working with string modifications</h4>";
        // echo strtolower($siteOwner);
        // echo "<br>";
        // echo strtoupper($siteOwner);
        // echo "<br>";
        // echo $siteOwner[0];
        // echo "<br>";
        // echo str_replace('Patrick', 'Abigayle', $siteOwner);
        // echo "<br>";
        // echo substr($siteOwner, 0, 3);
        // echo "<br>";
        // echo "<br>";


        // Working with data types in php
        // Strings
        // $phrase = 'To be or not to be';

        // Numbers
        // $age = 30;

        // Floats
        // $gpa = 3.75;

        // Booleans
        // $isTrue = false;

        // Null
        // $nothingness = null;

        // Working with numbers in php
        // $num = 10;
        // echo '<h4>Working with numbers</h4>';
        // echo -47;
        // echo "<br>";
        // echo 5+9;
        // echo "<br>";
        // echo 5.79 * 31.9;
        // echo "<br>";
        // echo 10 % 3;
        // echo "<br>";
        // echo (4 + 5) * $num;
        // echo "<br>";
        // echo $num;
        // echo "<br>";
        // echo "<br>";        


        // $siteOwner = 'Not Patrick';
        // echo "<footer>This is now $siteOwner's site."
    ?>


</body>
</html>