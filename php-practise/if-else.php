<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else</title>
</head>
<body>
    <?php
        $isMale = false;
        $isTall = false;
        if($isMale) {
            echo "You are male";
        } else {
            echo "You are not male";
        }
        echo "<br>";
       
        if($isMale && $isTall) {
            echo "You are tall male";
        } elseif($isMale && !$isTall) {
            echo "You are short male";
        } elseif(!$isMale && $isTall) {
            echo "You are tall but not male";
        } else {
            echo "You are not male and not tall";
        }
        echo "<br>";

        // Largest number
        function getMax($num1, $num2) {
            if($num1>$num2)
            {
                return $num1;
            } else {
                return $num2;
            }
        }
        $maxNum = getMax(100,50);
        echo "Largest num: " . $maxNum;
        echo "<br>";

        // Smallest number
        function getMin($num1, $num2, $num3) {
            if($num1<=$num2 && $num1<=$num3) {
                return $num1;
            } elseif ($num2<=$num1 && $num2<=$num3) {
                return $num2;
            } else {
                return $num3;
            }
        }
        $minNum = getMin(10, 5, 50);
        echo "Smallest num: " . $minNum;

    ?>
    
</body>
</html>