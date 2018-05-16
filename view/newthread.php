<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Discussion</title>
  <?php require_once("header.php");?>
  <div>
    <h1 >Nouveau sujet</h1>
  </div>


  <div>
  <form class="username" action="index.php?controller=maincontroller&action=addthreads" method="post">
    <br/>
    Entrez le titre du sujet : <input type="text" name="title" value="" placeholder="Titre du sujet" required>
    <br/>
    Entrez votre nom d'utilisateur : <input type="text" name="username" value="" placeholder="Nom d'utilisateur" required>
    <br/>
    Description du sujet :
    <br/>
    <textarea rows="10" cols="75" maxlength="1000" wrap="hard" required placeholder="Description du sujet"></textarea>
    <br/>
    <input type="submit" name="Validate" value="Valider">
    <input type="reset" name="Delete" value="Effacer">
  </br>
  </form>
</div>
</head>

</html>
