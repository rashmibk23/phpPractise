<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- Using GET -->
    <h3>Using GET</h3>
    <form action="form.php" method="get">
        Name: <input type="text" name="username">
        <br>
        Age: <input type="number" name="age">
        <br>
        <input type="submit">
        <br>
    </form>
    <br>
    <?php 
        if(isset($_GET["username"], $_GET["age"])) {
            echo $_GET["username"];
            echo "<br>";
            echo $_GET["age"];
        }
    ?>

    <!-- Username is: <?php echo $_GET["username"] ?> <br> -->
    <!-- Age is: <?php echo $_GET["age"] ?> <br><br> -->

    <!-- Using POST -->
    <h3>Using POST</h3>
    <form action="form.php" method="post">
        Name: <input type="text" name="name"><br>
        Password: <input type="password" name="password"><br>
        Gender: 
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <br>
        Fruits: 
        Apple <input type="checkbox" name="fruits[]" value="Apple"><br>
        Orange <input type="checkbox" name="fruits[]" value="Orange"> <br>
        Mango <input type="checkbox" name="fruits[]" value="Mango"><br>
        <input type="submit">
    </form>
    <br>

    <?php 
        if(isset($_POST["name"], $_POST["password"], $_POST["gender"], $_POST["fruits"])) {
            echo $_POST["name"];
            echo "<br>";
            echo $_POST["password"];
            echo "<br>";
            echo $_POST["gender"];
            echo "<br>";
            $fruits = $_POST["fruits"];
            
            echo $fruits[0];
        }
    ?>

    <!-- Name: <?php echo $_POST["name"]?> <br>
    Password: <?php echo $_POST["password"]?> <br>
    Gender: <?php echo $_POST["gender"] ?> <br>
    Fruits: <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?> -->

    
</body>
</html>