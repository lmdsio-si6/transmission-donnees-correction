<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Sélection du service</title>
</head>
<body>
    <h1>Choix d'un service</h1>
    <form action="service_post.php" method="post">
    <p>
    <label for="serv">Service :</label>
        <select name="service" id="serv">
            <option value="s01">Administration</option>
            <option value="s02">Commercial</option>
            <option value="s03">Emballage</option>
            <option value="s04">Fabrication</option>
        </select></p>
        <input type="submit" value="Sélectionner">
    </form>
</body>
</html>
