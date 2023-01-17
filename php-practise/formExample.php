<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form example</title>
</head>
<body>
    <!-- Addition -->
    <h2>Addition</h2>
    <form action="formExample.php" method="get">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="submit">
    </form>
    <br>

    <?php 
        if(isset($_GET["num1"], $_GET["num2"])) {
            echo $_GET["num1"] + $_GET["num2"];
        }
    ?>


    <!-- Mad libs game -->
    <h2>Mad libs game</h2>
    <form action="formExample.php" method="post">
        Color: <input type="text" name="color"><br>
        Plural Noun: <input type="text" name="pluralNoun"><br>
        Celebrity: <input type="text" name="celebrity"><br>
        <input type="submit">
    </form>
    <br>

    <?php
        if(isset($_POST["color"], $_POST["pluralNoun"], $_POST["celebrity"])) {
            $color = $_POST["color"];
            $pluralNoun = $_POST["pluralNoun"];
            $celebrity = $_POST["celebrity"];

            echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";
        }

         
    
    ?>
</body>
</html>