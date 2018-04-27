
<html>
  <head>
 <!-- Modal1 -->
 <div id="myModal" class="modal col-md-4 col-md-offset-4">
   <div class="modal-content">
     <div class="modal-header">
       <span class="close">&times;</span>
     </div>
     <div class="modal-body">
       <div id="login">
         <form method="post" action="authentificate.php">
           <p>Utilisateur : </p> <input type="text" name="login"><br>
           <p>Mot de passe : </p><input type="text" name="mdp">
           <br><br> <input type="submit" value="Connexion">
           <br><br><a><input id="createaccount"type="button" value="Créer un compte?"></a>
         </form>
       </div>
     </div>
     <div class="modal-footer">
     </div>
   </div>
 </div>

 <!-- Modal 2 -->
 <div id="myModal2" class="modal col-md-4 col-md-offset-4">
   <div class="modal-content">
     <div class="modal-header">
       <span class="close">&times;</span>
     </div>
     <div class="modal-body">
       <div id="createaccount">
         <form>
           <p>Utilisateur : </p> <input type="text" name="user"><br>
           <p>Mot de passe : </p><input type="text" name="password">
           <br><br> <input type="submit" value="Je créer mon compte!" class="submit">
         </form>
       </div>
     </div>
   </div>
 </div>

 <?php

 session_start();
 //$connecte=Utilisateur::isConnected();

 if(isset($_POST['user']) && isset($_POST['password'])){
   $log=$_POST['user'];
   $mdp=$_POST['password'];
   //verif user exist
   //si oui require("vue/islog.php"); //a créer même page que accueil.php(login.php) mais remplacer les deux boutons se connecter par Bienvenue:$login
   //sinon require("vue/accueil.php");
   require("view/login.php"); //prévoir le bon liens
  }
 else if(!isset($_GET['page'])){
   //require("vue/accueil.php");
   echo "tata";
 }
 else if(isset($_GET['page']) && $_GET['page']=="register"){
   require("vue/register.php"); //prévoir le bon liens
 }
 }
 else{
   echo "titi";
   //require("vue/accueil.php");
 }
 ?>
</body>
</html>
