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

        $siteOwner = 'Not Patrick';
        echo "<footer>This is now $siteOwner's site."
    ?>
</body>
</html>