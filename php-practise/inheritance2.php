<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance example</title>
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

        class ItalianChef extends Chef{
            function makePasta() {
                echo "Chef makes pasta <br>";
            }
            
        }

        $chef = new Chef();
        $chef->makeSalad();
        // $chef->makePasta();         // Error- undefined method makePasta in Chef class

        echo "<br>";

        $italianChef = new ItalianChef();
        $italianChef->makePavBhaji();
        $italianChef->makePasta();
    ?>
</body>
</html>