<?php
?>
// Exercice 1 : afficher le contenu d'une superglobale $_POST
// Créer un simple champ d'un formulaire qui permet d'envoyer votre nom avec la méthode post.

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="presentation.php" method="post">
        Nom: <input type="text" name="nom"><br>
        <input type="submit">

    </form>
</body>

</html>