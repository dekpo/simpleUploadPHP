<?php
$monFichier = $_FILES['fichier']['name'];
$dossier = "./images/";
$nouveauFichier = $dossier . basename( $monFichier );

if (move_uploaded_file($_FILES['fichier']['tmp_name'], $nouveauFichier)){
    echo "<h3>Fichier uploadé avec succès !</h3>";
    echo "<p><img src=\"$nouveauFichier\" alt=\”$nouveauFichier\” ></p>";
} else {
    echo "<h3>Une erreur est survenue pendant l'upload :(";
}
echo "<p><a href=\"index.html\">Recommencer ?</a></p>";

