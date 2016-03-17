<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bonjour</title>
</head>
<body>
    <form action="reponse.php" method="post">
        <label for="pr">Entrez votre prénom :</label>
        <input type="text" name="prenom" id="pr" required /><br>
        <p>
        <label for="fam">Cochez pour un bonjour plus familier :</label>
        <input type="checkbox" name="familier" id="fam" />
        </p>
        <p>
        <input type="radio" name="politesse" value="Mlle" checked>Mademoiselle<br>
        <input type="radio" name="politesse" value="Mme">Madame<br>
        <input type="radio" name="politesse" value="M.">Monsieur<br>
        </p>
        <input type="submit" value="Dire bonjour" />
    </form>
</body>
</html>