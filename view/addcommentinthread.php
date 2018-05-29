<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Sujet</title>
  <?php require_once("header.php");?>
  <div>
    <h1 >Ajout d'un commentaire sur le sujet "???"</h1>
  </div>


  <div>
  <form class="username" action="index.php?controller=maincontroller&action=createthreads" method="post">
    <br/>
    Entrez votre nom d'utilisateur : <input type="text" name="username" value="" placeholder="Nom d'utilisateur" required>
    <br/>
    Réponse au sujet :
    <br/>
    <textarea name="textarea" rows="10" cols="75" maxlength="1000" wrap="hard" required placeholder="Description du sujet"></textarea>
    <br/>
    <input type="submit" name="Validate" value="Valider">
    <input type="reset" name="Delete" value="Effacer">
  </br>
  </form>
</div>
</head>

</html>
