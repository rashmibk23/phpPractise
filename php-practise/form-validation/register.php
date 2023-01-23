<?php 
$nameErr= $emailErr= $contactErr= "";
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

// if($_SERVER['REQUEST_METHOD'] == "POST") {
if(isset($_POST["submit"])) {
    if(empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
        if(!preg_match("/^[a-zA-z]*$/", $name)) {
            $nameErr = "Only alphabets and whitespace are allowed";
        }
    }

    if(empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
        if (!preg_match($pattern, $email)) {
            $emailErr = "Invalid Email";
        }
    }

    if(empty($_POST["contact"])) {
        $contactErr = "Contact Number is required";
    } else {
        $contact = $_POST["contact"];
        if(strlen($contact)!= 10) {
            $contactErr = "Mobile No must contain 10 digts";
        }
        
    }

    if($nameErr=="" && $emailErr=="" && $contactErr=="") {
        header("Location: test.php");
        exit();
    }
    // $_POST = array();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>REGISTER</h2>
            <form action="" method="post">
                <div class="input-field">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>"> 
                    <small class="error"><?php echo $nameErr; ?></small>
                </div>
                <!-- <div class="input-gender">
                    <label>Gender: </label>
                    <input type="radio" name="gender" id="male" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female">
                    <label for="female">Female</label>
                </div> -->
                <div class="input-field">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>"> 
                    <small class="error"><?php echo $emailErr; ?></small>
                </div>
                <div class="input-field">
                    <label for="contact">Contact No: </label>
                    <input type="number" name="contact" id="contact" value="<?= isset($_POST['contact']) ? $_POST['contact'] : ''; ?>"> 
                    <small class="error"><?php echo $contactErr; ?></small>
                </div>
                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>

    </div>
</body>
</html>