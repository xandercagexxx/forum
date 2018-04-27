<?php

?>

// session_start();
// //$connecte=Utilisateur::isConnected();
//
// if(isset($_POST['login']) && isset($_POST['mdp'])){
//   $log=$_POST['login'];
//   $mdp=$_POST['mdp'];
//   //verif user exist
//   //si oui require("vue/islog.php"); //a créer même page que accueil.php(login.php) mais remplacer les deux boutons se connecter par Bienvenue:$login
//   //sinon require("vue/accueil.php");
//   require("vue/login.php");
// }
// else if(!isset($_GET['page'])){
//   //require("vue/accueil.php");
//   echo "tata";
// }
// else if(isset($_GET['page']) && $_GET['page']=="register"){
//   require("vue/register.php");
// }
// else if(isset($_GET['page']) && isset($_GET['produit']) && $_GET['page']=="produit"){
//   $produitDAO=new ProduitDAO();
//   $PRODUIT=$produitDAO->getProduitById($_GET['produit']);
//   if($PRODUIT!=NULL){
//     require("vue/pageProduit.php");
//   }
//
// }
// else{
//   echo "titi";
//   //require("vue/accueil.php");
// }
//
//
// <!-- Modal1 -->
// <div id="myModal" class="modal col-md-4 col-md-offset-4">
  //   <div class="modal-content">
    //     <div class="modal-header">
      //       <span class="close">&times;</span>
      //     </div>
      //     <div class="modal-body">
        //       <div id="login">
          //         <form method="post" action="authentificateur.php">
            //           <p>Login</p> <input type="text" name="login"><br>
            //           <p>Mot de passe : </p><input type="text" name="mdp">
            //           <br><br> <input type="submit" value="Connexion">
            //           <br><br><a><input id="pasDeCompte"type="button" value="Pas de compte?"></a>
            //         </form>
            //       </div>
            //     </div>
            //     <div class="modal-footer">
              //     </div>
              //   </div>
              // </div>
              //
              // <!-- Modal 2 -->
              // <div id="myModal2" class="modal col-md-4 col-md-offset-4">
                //   <div class="modal-content">
                  //     <div class="modal-header">
                    //       <span class="close">&times;</span>
                    //     </div>
                    //     <div class="modal-body">
                      //       <div id="creerCompte">
                        //         <form>
                          //           <p>Votre Login</p> <input type="text" name="login"><br>
                          //           <p>Mot de passe : </p><input type="text" name="mdp">
                          //           <p>Adresse mail: (cette adresse doit être valide)</p><input type="text" name="mdp">
                          //           <br><br> <input type="submit" value="Je créer mon compte!" class="submit">
                          //         </form>
                          //       </div>
                          //     </div>
                          //     <div class="modal-footer">
                            //       <p id="pub">aucun flood ou pub ne vous sera envoyé</p>
                            //     </div>
                            //   </div>
                            // </div>
