<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../vues/css/style.css">
   <title>Document</title>
</head>

<body>
   <nav>
      <?php include("../vues/include/nav.php") ?>
   </nav> 
   <main>
      <h3>Version liste à points</h3>
      <ul>
         <?php foreach ($les_eleves as $un_eleve) { ?>
            <li>
               <?php echo $un_eleve["nom"] ?> :
               <img src="../vues/img/<?php echo $un_eleve["img"] ?>" alt="<?php echo $un_eleve["img"] ?>" height="100">
            </li>
         <?php } ?>
      </ul>
   </main>
</body>

</html>