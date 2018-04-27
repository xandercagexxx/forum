<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Création de compte</title>
  </head>
  <body>
    <h3>Création d'un compte utilisateur</h3>
    Nom d'utilisateur:<input pattern=".{3,255}" TITLE="Veuillez utiliser minimum 3 carractères" type="text"  name="inputName" >
    Mot de passe:<input id="userPassword" type="password" autocomplete="current-password" required minlength="8"
       maxlength="32">
    <input type="submit" value="Créer">

  </body>
</html>
