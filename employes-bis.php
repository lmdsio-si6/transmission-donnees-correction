<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Liste des employés</title>
</head>
<body>
    <h1>Liste des employés</h1>
    <ul>
        <?php 
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            for ($i = 1; $i <= $nombre; $i++) {
            echo "<li>Employé $i : <a href=\"employe.php?id=$i\">détails</a></li>\n";
            }    
        }
        else {
            echo "Aucun nombre fourni !";
        }
        ?>
    </ul>
</body>
</html>