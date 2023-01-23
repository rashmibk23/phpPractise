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
        $posts = array("First Post", "Second Post", "Third Post");

        foreach ($posts as $post) {
            echo $post . "<br>";
        }
        echo "<br>";

        foreach ($posts as $index=>$post) {
            echo $index ."-". $post . "<br>";
        }
        echo "<br>";

        
        // Associative Array
        $person = array("firstName"=>"Virat", "lastName"=>"Kohli");
        foreach($person as $key=>$value) {
            echo $key . "-" . $value . "<br>";
        }
    ?>
</body>
</html>