<?php
require('impot.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $revenu = $_POST['revenu'];

    $impot = new Impot($nom, $revenu);
    $message = $impot->AfficheImpot();
} else {
    $message = "Veuillez soumettre le formulaire.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <h1>Résultat de l'impôt</h1>
    <p><?= $message ?></p>
    <a href="index.php">Retour au formulaire</a>
</body>
</html>
