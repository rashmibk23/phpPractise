<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <?php 
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct() {
                echo "New book is created <br>";
            }

            // function __construct($name) {
            //     echo "$name";
            // }
        }

        $book1 = new Book;
        $book2 = new Book;

    ?>


    <?php 
        class Fruit {
            var $name;
            
            function __construct($name) {
                echo "$name";
            }
        }

        $fruit1 = new Fruit("Apple");


    ?>
    
</body>
</html>