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
        class Movie {
            public $name;
            private $rating;

            function __construct($name, $rating) {
                $this->name = $name;
                $this->rating = $rating;
            }

            function getRating() {
                return $this->rating;
            }

            function setRating($rating) {
                $this->rating = $rating;
            }
        }

        $interstellar = new Movie("Interstellar", "PG");
        echo $interstellar->name;
        echo "<br>";
        // $interstellar->rating = "dog";         Error: Cannot access private property

        // echo $interstellar->rating;            Error: Cannot access private property
        echo $interstellar->getRating();          //  getter method to access the private variable
        echo "<br>";
        $interstellar->setRating("dog");          // setter method to set the value of private variable
        echo $interstellar->getRating();
    ?>
</body>
</html>