<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> salut, mon nom c'est <?php echo $_SESSION['nom'] ?> et mon prénom c'est <?php echo $_SESSION['prenom'] ?>
    </p>
</body>

</html>