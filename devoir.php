<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
</head>
<body>
    <h2>Entrez votre nom et prenom</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nom: <input type="text" name="nom"><br><br>
        Prenom: <input type="text" name="prenom"><br><br>
        Table de multiplication: <input type="number" name="table"><br><br>
        <input type="submit" value="Afficher">
    </form>

    <?php
    function table_multi($nom, $prenom, $table) {
        echo "Bonjour $nom $prenom, voici votre table de multiplication pour $table :<br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$table x $i = " . ($table * $i) . "<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : "";
        $prenom = isset($_POST['prenom'])? htmlspecialchars($_POST['prenom']) : "";
        $table = isset($_POST['table']) ? intval($_POST['table']) : 0;

        if ($table > 0) {
            table_multi($nom, $prenom, $table);
        } else {
            echo "Veuillez entrer des valeurs valides.";
        }
    }

    ?>
</body>
</html>
