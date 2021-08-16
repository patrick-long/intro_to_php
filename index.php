<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $siteOwner = 'Patrick';
        echo("<h1>$siteOwner's site</h1>");
        echo "<hr>";
        echo "<p>This is my site</p>";

        echo "<h4>Working with string modifications</h4>";
        echo strtolower($siteOwner);
        echo "<br>";
        echo strtoupper($siteOwner);
        echo "<br>";
        echo $siteOwner[0];
        echo "<br>";
        echo str_replace('Patrick', 'Abigayle', $siteOwner);
        echo "<br>";
        echo substr($siteOwner, 0, 3);
        echo "<br>";
        echo "<br>";


        // Working with data types in php
        // Strings
        $phrase = 'To be or not to be';

        // Numbers
        $age = 30;

        // Floats
        $gpa = 3.75;

        // Booleans
        $isTrue = false;

        // Null
        $nothingness = null;

        // Working with numbers in php
        $num = 10;
        echo -47;
        echo "<br>";
        echo 5+9;
        echo "<br>";
        echo 5.79 * 31.9;
        echo "<br>";
        echo 10 % 3;
        echo "<br>";
        echo (4 + 5) * $num;
        echo "<br>";
        echo $num;
        echo "<br>";
        echo "<br>";


        $siteOwner = 'Not Patrick';
        echo "<footer>This is now $siteOwner's site."
    ?>
</body>
</html>