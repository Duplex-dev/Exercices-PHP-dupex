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
    <form class="box" action="" method="post" name="login">
        <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
        <input type="text" class="box-input" name="text" placeholder="Prénom">
        <input type="submit" value="Connexion " name="submit" class="box-button">
    </form>
</body>

</html>