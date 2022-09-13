<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="site.php" method="post">
        What's your grade ?<br> <input type="text" name="text">

        <input type="submit">
    </form>

    <?php

    if (isset($_POST["text"])) {
        $text = $_POST["text"];
        if ($text == "A") {
            echo "You did amazing !";
        } elseif ($text == "B") {
            echo "You did pretty good";
        } elseif ($text == "C") {
            echo "You did poorly";
        } elseif ($text == "D") {
            echo "You did pretty good";
        } elseif ($text == "F") {
            echo "YOU FAIL !";
        } else {
            echo "Invalid grade !";
        }
    }

    ?>
</body>

</html>