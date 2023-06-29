<?php
function get_les_eleves_en_dur() {
   $les_eleves = [
      ["nom" => "toto", "img" => "toto.png"],
      ["nom" => "titi", "img" => "titi.png"],
      ["nom" => "tata", "img" => "tata.png"]
   ];
   return $les_eleves;
}

function get_les_eleves_BD(){
   // principe: on utilise la bibliothèque mysqli. Sinon PDO.
   // 1 : gestion des erreurs : éviter la technique "or die"
   //     il y a une fonction pour 
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   // 2 : connexion à la BD
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "BD_eleves_mjv_alt";
   $mysqli = new mysqli($host, $user, $password, $database);

   // 3 : écriture de la requête pour la BD
   $sql = "SELECT id, nom, img
      FROM eleves
   ";

   // 4 : on exécutre la requête
   $les_eleves = $mysqli->query($sql);

   // 5 : on ferme la connexion
   mysqli_close($mysqli);

   // 6 : on retourne le résultat
   return $les_eleves;
}

function get_les_eleves_BD_v2(){
   // principe: on utilise la bibliothèque mysqli. Sinon PDO.
   // 1 : gestion des erreurs : éviter la technique "or die"
   //     il y a une fonction pour 
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   // 2 : connexion à la BD
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "BD_eleves_mjv_alt";
   $mysqli = new mysqli($host, $user, $password, $database);

   // 3 : écriture de la requête pour la BD
   $sql = "SELECT id, nom, img
      FROM eleves
      WHERE id>2
   ";

   // 4 : on exécutre la requête
   $les_eleves = $mysqli->query($sql);

   // 5 : on ferme la connexion
   mysqli_close($mysqli);

   // 6 : on retourne le résultat
   return $les_eleves;
}
?>