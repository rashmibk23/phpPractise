<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <form action="" method="post">
        Student Name: <input type="text" name="studentName">
        <input type="submit">
    </form>

    <?php 
        $grades = array("Rahul"=>"A+", "Virat"=>"A+", "Shreyas"=>"B", "Rishabh"=>"A");
        echo $grades["Virat"]; 
        echo "<br>";
        echo $grades["Shreyas"];
        echo "<br>";
        $grades["Rahul"] = "F";
        echo $grades["Rahul"];
        echo "<br>";
        echo count($grades);
        echo "<br>";
    ?>

        Grade: <?php 
                    $stName = $_POST["studentName"];
                    echo $grades["$stName"];
                    // echo $grades[$_POST["studentName"]];
                ?>
        
       
    
</body>
</html>