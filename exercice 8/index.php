<?php //Je vérifie s'il y a des données, et s'il y en a je les convertie en variables
var_dump($_FILES);
    if (isset($_POST['genderList']) && isset($_POST['lastName']) && isset($_POST['firstName'])){
        $genderList = $_POST['genderList'];
        $lastname = $_POST['lastName'];
        $firstname = $_POST['firstName'];
    }
    //Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 8</title>
</head>
<body>
    <?php //S'il y a des données, je les affiche dans le body, s'il n'y en a pas -> j'affiche le formulaire
        if ($_POST) {?>
        <p>Nom : <?= $lastname ?><p><br />
        <p>Prénom : <?= $firstname ?><p><br />
        <p>Civilité : <?= $genderList ?><p><?php
            if (isset($_FILES['myFile'])){
                $infosfichier = pathinfo($_FILES['myFile']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('pdf');
                if (in_array($extension_upload, $extensions_autorisees)){?>
                <p>Le fichier est un pdf</p><?php  
                }
                else{?>
                    <p>Le fichier n'est pas un pdf</p><?php
                }
            }
        }
        else {?>
        <form method="post" action="index.php" enctype="multipart/form-data">
        <select name="genderList">
            <option value="Monsieur">Mr.</option>
            <option value="Madame">Mme.</option>
        </select>
        <p>Votre nom : <input type="text" name="lastName" /></p>
        <p>Votre prénom : <input type="text" name="firstName" /></p>
        <input type="file" name="myFile" />
        <input type="submit" />
        </form><?php
        }?>
</body>
</html>