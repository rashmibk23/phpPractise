<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <?php
        echo 20;
        echo 40.3;
        echo "<br>";
        echo 10 + 30;
        echo "<br>";
        $num1 = 10;
        $num2 = 5;
        echo $num1 - $num2;
        echo "<br>";
        echo $num1 * $num2;
        echo "<br>";
        echo $num1 / $num2;
        echo "<br>";
        echo 10 % 3;
        echo "<br>";
        echo 5 + 2 * 10;
        echo "<br>";
        echo (5+2) * 10;
        echo $num1 += 20;
        echo "<br>";

        $num = -20;
        echo abs($num);
        echo "<br>";

        echo pow(2, 3);
        echo "<br>";
        echo sqrt(25);
        echo "<br>";
        echo max(28, 41);
        echo "<br>";
        echo min(2, 0.3);
        echo "<br>";
        echo round(4.4);    // 4
        echo "<br>";
        echo ceil(4.2);     // 5 rounds up
        echo "<br>";
        echo floor(6.9);    // 6 rounds down

    ?>
</body>
</html>