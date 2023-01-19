<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
        class Chef {
            function makePavBhaji() {
                echo "Chef makes pav bhaji <br>";
            }

            function makeSalad() {
                echo "Chef makes salad <br>";
            }

            function makeSpecialDish() {
                echo "Chef makes paneer masala <br>";
            }
        }

        class ItalianChef extends Chef {

        }

        $chef = new Chef();
        $chef->makePavBhaji();

        echo "<br>";

        $italianChef = new ItalianChef();
        $italianChef->makePavBhaji();       // function is inherited from Chef class
    ?>
</body>
</html>