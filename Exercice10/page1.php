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
    <p>Bienvenue <?php echo $_SESSION['nom'] ?> <?php echo $_SESSION['prenom'] ?>
    </p>
</body>

</html>