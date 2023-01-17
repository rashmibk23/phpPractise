<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
<?php 
    $message = "Hello World";
    echo $message;
    echo "<br>";
    echo strtolower($message);
    echo "<br>";

    echo strtoupper($message);
    echo "<br>";

    echo strlen($message);
    echo"<br>";
    $count = strlen($message); 
    echo "String length is: $count <br>";

    echo $message[0];       // H
    echo $message[8];       // r
    echo "<br>";
    echo "website"[2];      // b
    echo"<br>";

    $message[0]= "Y";
    echo $message;
    $message[0] = "H";

    echo str_replace("Hello", "New", $message);     // New World
    echo str_replace("llo", "yy", $message);        // Heyy World
    echo "<br>";

    echo substr($message, 6);       // World
    echo "<br>";
    echo substr($message, 4, 5);    // o Wor


?>
</body>
</html>
