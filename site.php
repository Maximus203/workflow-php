<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="site.php" method="get">
        Name: <input type="text" name="username" id="username"><br>
        Age: <input type="text" name="age" id="age"><br>
        <br>
        <input type="submit" onsubmit="valider">


    </form>

    <br>
    <?php
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
        echo "Your name is: $username <br>";
    }
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        echo "Your age is: $age";
    }
    ?>

</body>

</html>