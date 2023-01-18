<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basicCalculator.php" method="post">
        First Num: <input type="number" step="0.1" name="num1"> <br>
        Operator: <input type="text" name="operator"> <br>
        Second Num: <input type="number" name="num2"> <br>
        <input type="submit"> <br>
    </form>
    

    <?php 
        if(isset($_POST["num1"], $_POST["operator"], $_POST["num2"])) {
            $num1 = $_POST["num1"];
            $operator = $_POST["operator"];
            $num2 = $_POST["num2"];

            if($operator == "+") {
                echo "Result: " . $num1 + $num2;
            } elseif($operator == "-") {
                echo "Result: " . $num1 - $num2;
            } elseif($operator == "*") {
                echo "Result: " . $num1 * $num2;
            } elseif($operator == "/") {
                echo "Result: " . $num1 / $num2;
            } else {
                echo "Invalid operator";
            }

        }  

    ?>

</body>
</html>