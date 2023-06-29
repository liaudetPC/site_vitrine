<?php
// modèle : boite à outils pour les données
include("../modele/les_eleves.php"); // copier-coller

// controleur : le main
$les_eleves = get_les_eleves_BD();
// debug
// affichage de tous les élèves d'un coup format équivalent JSON
print_r($les_eleves);
echo "<hr>";

// vue : affichage de la page : 
// en paramètres : $les_élèves
include("../vues/vue1.php");
?>