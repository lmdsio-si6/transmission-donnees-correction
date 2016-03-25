<?php require 'fonctions.php'; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Réponse</title>
</head>
<body>
    <?php
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        if (isset($_POST['familier'])) {
            $bonjour = "Salut";
        }
        else {
            $bonjour = "Bonjour";
        }
        $politesse = "mademoiselle";
        switch ($_POST['politesse']) {
        case "Mme":
            $politesse = "madame";
            break;
        case "M.":
            $politesse = "monsieur";
            break;
        }
        echo "$bonjour $politesse " . escape($prenom) . " !";
    }
    else {
        echo "Aucun prénom !";
    }
    ?>
</body>
</html>
