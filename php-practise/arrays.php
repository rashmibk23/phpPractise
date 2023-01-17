<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $cricketers = array("Virat", "Rahul", "Rishabh", 7, "Hardik");
        echo count($cricketers);    // 5
        echo "<br>";
        echo $cricketers[0];
        echo"<br>";
        echo $cricketers[3];
        echo "<br>";
        $cricketers[1] = "Ashwin";
        echo $cricketers[1];
        echo "<br>";
        $cricketers[5] = "Shreyas";
        echo $cricketers[5];
        echo "<br>";
        echo count($cricketers);    // 6

    ?>
</body>
</html>