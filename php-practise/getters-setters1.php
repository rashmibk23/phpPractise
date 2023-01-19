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
                // $this->rating = $rating;
                $this->setRating($rating);      // To avoid invalid rating while creating object
            }

            function getRating() {
                return $this->rating;
            }

            function setRating($rating) {
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
                
            }
        }

        // Valid ratings: G, PG, PG-13, R, NR
        $interstellar = new Movie("Interstellar", "dog");
        $interstellar->setRating("dog");        // Rating will be set to NR as dog is invalid
        echo $interstellar->getRating();        
    ?>
</body>
</html>