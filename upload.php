<?php
$monFichier = $_FILES['fichier']['name'];

switch ($_FILES['fichier']['type']){

    case "image/png":
        $dossier = "./images/png/";
        break;

    case "image/jpeg":
        $dossier = "./images/jpg/";
        break;

    default:
        $dossier = "./images/";
}

$nouveauFichier = $dossier . basename( $monFichier );

if (move_uploaded_file($_FILES['fichier']['tmp_name'], $nouveauFichier)){
    echo "<h3>Fichier uploadé avec succès !</h3>";
    echo "<p><a href=\"index.html\">Recommencer ?</a></p>";
    echo "<p><img src=\"$nouveauFichier\" alt=\"$nouveauFichier\" ></p>";
    echo "\$_FILES:<pre>";
    print_r($_FILES);
    echo "</pre>";
} else {
    echo "<h3>Une erreur est survenue pendant l'upload :(";
}