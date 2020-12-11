<?php 
    if (isset($_POST['firstName']) && isset($_POST['lastName'])){
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
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