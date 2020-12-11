<?php 
    if (isset($_GET['firstName']) && isset($_GET['lastName'])){
        $firstname = $_GET['firstName'];
        $lastname = $_GET['lastName'];
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 1</title>
</head>
<body>
<p>Bonjour <?= $firstname?> <?= $lastname?>.</p>
</body>
</html>