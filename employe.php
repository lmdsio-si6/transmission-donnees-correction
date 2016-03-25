<?php require 'fonctions.php'; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Détails sur un employé</title>
</head>
<body>
    <h1>Détails sur un employé</h1>
    <?php
    if (isset($_GET['id'])) {
        echo "Son identifiant est " . escape($_GET['id']);
    }
    else {
        echo "Aucun identifiant fourni !";
    }
    ?>
</body>
</html>
