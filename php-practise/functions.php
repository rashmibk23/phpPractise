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
        function greet() {
            echo "Hello";
        }
        greet();
        echo "<br>";

        function greet1($name) {
            echo "Hello $name";
        }
        greet1("Rashmi");
        echo "<br>";

        function greet2($name, $age) {
            echo "Hello $name, you are $age";
        }
        greet2("Rashmi", 27);
        echo "<br>";
        greet2("Shri", 22);
        echo "<br>";

        // Return Statement
        function cube($num) {
            return $num * $num * $num;
        }
        $cubeResult = cube(2);
        echo $cubeResult;
        echo "<br>";
        
        function square($num) {
            return $num * $num;
        }
        echo square(4);

    ?>
</body>
</html>