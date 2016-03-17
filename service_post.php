<?php require 'fonctions.php'; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Service sélectionné</title>
</head>
<body>
    <?php
    if (isset($_POST['service'])) {
        echo "Le code du service choisi est " . escape($_POST['service']);
    }
    else {
        echo "Aucun service choisi !";
    }
    ?>
</body>
</html>