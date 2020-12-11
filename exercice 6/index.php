<?php //Je vérifie s'il y a des données, et s'il y en a je les convertie en variables
    if (isset($_POST['genderList']) && isset($_POST['lastName']) && isset($_POST['firstName'])){
        $genderList = $_POST['genderList'];
        $lastname = $_POST['lastName'];
        $firstname = $_POST['firstName'];
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 6</title>
</head>
<body>
    <?php //S'il y a des données, je les affiche dans le body, s'il n'y en a pas -> j'affiche le formulaire
        if ($_POST) {?>
        <p>Nom : <?= $lastname ?><p><br />
        <p>Prénom : <?= $firstname ?><p><br />
        <p>Civilité : <?= $genderList ?><p><?php
    }  
        else {?>
            <form method="post" action="index.php">
        <select name="genderList">
            <option value="Monsieur">Mr.</option>
            <option value="Madame">Mme.</option>
        </select>
        <p>Votre nom : <input type="text" name="lastName" /></p>
        <p>Votre prénom : <input type="text" name="firstName" /></p>
        <input type="submit">
    </form><?php
        }?>
</body>
</html>