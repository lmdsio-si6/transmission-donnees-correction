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
            echo "$bonjour $prenom !";
        }
        else {
            echo "Aucun prénom !";
        }
    ?>
</body>
</html>