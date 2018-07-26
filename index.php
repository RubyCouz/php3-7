<?php
$step = 1; //définiton de la variable
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 7</title>
   </head>
   <body>
     <p>
     <?php
while ($step <= 100) //définition de la boucle
{ echo 'On tient le bon bout <br />';
$step = $step + 15; //incrémentation de 15 de la variable
}
      ?>
    </p>
   </body>
 </html>
