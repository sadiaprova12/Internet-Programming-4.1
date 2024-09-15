<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $_POST Method
    // $name= $_POST["name"];
    // $email= $_POST["email"];

    // GET Method
    $name= $_GET["name"];
    $email= $_GET["email"];

    // echo $name;
    echo "Hello: " .$name;
    echo "<br>";
    echo "Your email address is: " .$email;
    ?>
</body>
</html>