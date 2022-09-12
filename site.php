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
    $characterName = "Cherif DIOUF";
    $characterAge = 23;

    echo "<h1>Site de Thera</h1>";
    echo "<hr>";


    echo "<p>This is my website</p>";
    echo "<p>My name is: <b> $characterName </b></p>";

    $phrase = "Code is the process to create bugs";
    $after = strtolower($phrase);

    echo "<p>The sentences :$phrase give in lower case: $after</p>";

    $after = strtoupper($phrase);
    echo "<p>And in uppercase: $after</p>";

    echo strlen($phrase);



    ?>
</body>

</html>