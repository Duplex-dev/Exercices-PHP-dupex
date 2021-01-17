<?php
//COOKIES
setcookie("prenom", "Duplex", time() + 3600 * 24 * 30);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["prenom"])) {
        echo "<h1> hello " . $_COOKIE["prenom"] . "</h1>";
    } else
        echo "<h1> Je ne te connais pas</h1>";

    ?>
</body>

</html>