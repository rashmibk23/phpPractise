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
        // Return Statement
        function cube($num) {
            return $num * $num * $num;
        }
        $cubeResult = cube(2);
        echo "Cube: $cubeResult";
        echo "<br>";
        
        function square($num) {
            return $num * $num;
        }
        echo "Square: " .square(4);
        echo "<br>";

        function add($num1, $num2) {
            echo "Hi <br>";          // This line will get executed
            return $num1 + $num2;
            echo "Hello";       // This line will not get executed
        }
        $additionResult = add(4, 10);
        echo "Addition result: " . $additionResult;
    ?>
</body>
</html>