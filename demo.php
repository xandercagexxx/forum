<!DOCTYPE html>
<html>
<body>
  Quelques variables globales:
<ul>
  <li>$GLOBALS</li>
  <li>$_SERVER</li>
  <li>$_POST</li>
  <li>$_GET</li>
  <li>$_SESSION</li>
  <li>$_COOKIE</li>
  <li>$_REQUEST</li>
  <li>$_FILES</li>
  <li>$_ENV</li>
</ul>

<?php
//pour démarrer une session pour garder des valeurs stocker entre 2 appel de scripts
//session_start();

//variable glocbale pour illustration du test de tableau $GLOBALS
//$x = 3;

// Stockage d'une variable de session
//$_SESSION["toto"] = "tata";
/*
foreach($_SERVER as $clef => $valeur) {
  echo "clef" . $clef . "=" .$valeur ."<br>";
}
*/
?>
Exécution du script "<?php echo $_SERVER["PHP_SELF"];?>"<br>

<!-- <form action="<? $_SERVER["PHP_SELF"];?>" method="post">
  text: <input type="text" name="exemple"><br>
<input type="submit">
</form> -->

<?php
/*exercice:
faire un formaulaire d'entrée avec demande de :
* nom
* email
* site web
* age
* date de naissance
*/

// foreach($_SERVER as $clef => $valeur) {
//   echo "clef" . $clef . "=" .$valeur ."<br>";
// }
?>

<!-- <form action="demo.php" method="post">
  Nom: <input type="text" name="nom"><br>
  Date de naissance: <input type="text" name="date de naissance"><br>
  Site web: <input type="text" name="site web"><br>
  Age: <input type="text" name="âge"><br>
  Email: <input type="text" name="email"><br>
<input type="submit">
</form> -->

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

Name:<input pattern=".{3,255}" TITLE="Veuillez utiliser minimum 3 carractères " type="text"  name="inputName" value="<?php echo nettoyage($_POST["inputName"]);?>"><br>
Mail:<input pattern=".{6,30}" type="email"  name="inputEmail" value="<?php echo nettoyage($_POST["inputEmail"]);?>"><br>
WebSite:<input type="url"  name="inputWebsite"  value="<?php echo nettoyage($_POST["inputWebsite"]);?>"><br>
Age:<input type="number"  name="inputAge"  value="<?php echo nettoyage($_POST["inputAge"]);?>"><br>
Date:<input type="date"  name="inputDate"  value="<?php echo nettoyage($_POST["inputDate"]);?>"><br>
<input type="submit">
</form>

<?php
function nettoyage($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }
 foreach($_POST as $clef => $valeur) {
   echo "Clef " . $clef . " = " . nettoyage($valeur).  " "  ."<br>";
 }

?>
<!-- Etapes suivante:
  * verifier l age (mineur)
  * calculer l'age a partir de la date de naissance (et verifier avec l'age entré)
  * vérifier avec du pattern maching la validité des entrée -->

<?php
if ($_POST["inputAge"] > "17") {
  echo "Vous êtes majeur";
} else {
  echo "Vous êtes mineur";
}

   function ageVerif($naiss) {
     list($annee, $mois, $jour) = split('[/.-]', $naiss);
     $today['mois'] = date('n');
     $today['jour'] = date('j');
     $today['annee'] = date('Y');
     $annees = $today['annee'] - $annee;
     if ($today['mois'] <= $mois) {
      if ($mois == $today['mois']) {
        if ($jour > $today['jour'])
          $annees--;
        }
      else
        $annees--;
      }
    return $annees;
      }

          $naiss = false;
          if (ageVerif($_POST['naiss_annee'], $_POST['naiss_mois'], $_POST['naiss_jour']) >= 18)
          {
              $naiss = true;
          }
          else { $erreur_naiss = 'Tu doit etre majeur pour t\'inscrire sur ce site';}
        }


 ?>




</body>
</html>
