<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Machine à café</title>
</head>
<body>
    <h1>Votre boisson</h1>
    <form action="machineCafe.php" method="post">
        <p>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" autofocus required />
        </p>
        <p>
            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom" required />
        </p>

        Choisissez votre boisson :
        <select name="boisson">
            <option value="1" selected>Café</option>
            <option value="2">Thé</option>
            <option value="3">Chocolat</option>
            <option value="4">Café crème</option>
        </select>
        <p>
            <input type="radio" name="sucre" value="1" checked />Sucre<br />
            <input type="radio" name="sucre" value="2" />Sans sucre<br />
        </p>
        <input type="submit" value="Valider" />
        <input type="reset" value="Annuler" />
    </form>
    <br>
    <?php
    require 'fonctions.php';
    if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        switch ($_POST["boisson"]) {
            case 1:
            $msg1 = "Café";
            break;
            case 2:
            $msg1 = "Thé";
            break;
            case 3:
            $msg1 = "Chocolat";
            break;
            case 4:
            $msg1 = "Café crème";
            break;
        }
        switch ($_POST["sucre"]) {
            case 1: $msg2 = "Oui";
            break;
            case 2: $msg2 = "Non";
            break;
        }
        // affichage
        $prenom = escape($prenom);
        $nom = escape($nom);
        echo "Bonjour $prenom $nom<br>";
        echo "Votre choix : $msg1<br>";
        echo "Sucre : $msg2</p>";
    }
    ?>
</body>
</html>
