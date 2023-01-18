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
        $title = "My First Post";
        $author = "Rashmi";
        $wordCount = 400;

        include "article-header.php";
        
        // $title = "My First Post";        Undefined variables
        // $author = "Rashmi";
        // $wordCount = 400;
    ?>

    <?php 
        // echo "$feetInMile <br>"; -       Undefined variable $feetInMile
        // greeting("Shri");        -       Call to undefined function greeting()

        include "useful-tools.php";
        
        echo "$feetInMile <br>";
        greeting("Shri");
        
    ?>
</body>
</html>