{# Exercice 2 : Créer une page login.php pour se connecter et afficher le prénom ainsi que le nom de l'utilisateur connecté sur la page d'accueil (index.php) et une autre page (page1.php). Vous utiliserez les variables $_SESSION. #} #} #}
Facultif : Pour valider le login vous pourrez récupérer le pseudo et le mot de passe de l'utilisateur dans un fichier .csv ou .json #}

<?php
session_start();

$_SESSION["Nom"] = "TOUOTSAP";
$_SESSION["Prenom"] = "Duplex";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="login.php">Bienvenue</a>

</body>

</html>