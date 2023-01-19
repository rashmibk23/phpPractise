<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheriatance Example</title>
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
            function makePasta() {
                echo "Chef makes pasta <br>";
            }

            function makeSpecialDish() {               // Overriding the method, inherited from Chef class
                echo "Chef makes pizza <br>";
            }
        }

        $chef = new Chef();
        $chef->makeSpecialDish();

        echo "<br>";

        $italianChef = new ItalianChef();
        $italianChef->makeSpecialDish();                // Overrided method will be executed
    ?>
</body>
</html>