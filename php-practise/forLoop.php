<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <?php 
        $numbers = array(4, 10, 38, 2, 20, 68, 1, "abc");
        echo "Array elements: <br>";
        for ($i=0; $i < count($numbers); $i++) { 
            echo "$numbers[$i] <br>";
        }
    ?>
</body>
</html>