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
        class student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors() {                      // Object function
                if($this->gpa > 3.5) {
                    return "true";
                } else {
                    return "false";
                }
            }
        }

        $student1 = new student("Rahul", "Business", 4.6);
        $student2 = new student("Virat", "Art", 2.9);

        echo $student1->name;
        echo "<br>";
        echo $student1->hasHonors();

        echo "<br> <br>";

        echo $student2->name;
        echo "<br>";
        echo $student2->hasHonors();

        


    ?>
</body>
</html>