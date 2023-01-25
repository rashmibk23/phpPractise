<?php 
    if(isset($_POST["submit"])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        if($user=="admin" && $pass=="admin") {
            // echo ("Logged in");
            header("Location: home.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Log In</h2>
            <form action="login.php" method="post">
                <div class="input-field">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="input-field">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="input-field">
                    <button type="submit" name="submit" class="btn"><b>Log In</b></button>
                </div>
                
            </form>
        </div>
    </div>
    
    
    
</body>
</html>