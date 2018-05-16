<!DOCTYPE html>
<html>
<body>
<head>
  <title>Acceuil</title>
</head>

<?php require_once("header.php");?>
<h1>Bienvenu sur le forum de discussion</h1>
<!--
<p>1 - Il faut un liens pour créer un sujet de discussion</p>
<p>2 - il faut afficher les titres des discussion existante + liens vers la discussion</p>
<p>3 - il faut 1 liens vers la discussion instantanée</p>
<p>3 - il faut 1 liens vers les CGU en bas de page</p> -->
<h1><a href="index.php?controller=maincontroller&action=showthreads">Forum</a></h1>
<h1><a href="index.php?controller=maincontroller&action=addthreads">Ajouter un sujet</a></h1>

<?php require_once("footer.php"); ?>
</body>
</html>
