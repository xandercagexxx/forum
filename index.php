<?php

  if (isset($_GET["controller"])) {
	  $controller = $_GET["controller"];
  } else {
    $controller = "maincontroller";
  }
  if (isset($_GET["action"])) {
    $actiontodo = $_GET["action"];
  } else {
    $actiontodo = "index";
  }
  $cheminDuController = "controller/".$controller.'.php';

  if (file_exists($cheminDuController)){
    require_once($cheminDuController);
    /*}
  else
	{
	echo "Le controlleur n'existe pas";
}*/

    $controllerclassname = $controller;
    if (class_exists($controllerclassname)) {
      $controllerclass = new $controllerclassname();
      if (method_exists($controllerclass,$actiontodo)) {
        $controllerclass->$actiontodo();
      } else {
         // die("<a>Woaw je ne sais pas ce que vous chercher, mais ça n'existe pas</a>");
        die("<b>### Erreur : la methode '$actiontodo' du controleur '$controllerclassname' du fichier '$controller_file_name' n'existe pas</b>
            </br>Conseil : verifiez l'orthographe du nom de cette methode dans le fichier $controller_file_name.");
      }
    } else {
      # Erreur dans le code, la classe de l'action n'est pas trouvé
      die("<b>### Erreur : la classe du controleur '$controllerclassname' du fichier $controller_file_name n'existe pas</b>
          </br>Conseil : verifiez l'orthographe du nom de cette classe dans le fichier $controller_file_name.");
    }
  } else{
    # Erreur dans le code, le fichier de l'action n'est pas trouvé
    die("<b>### Erreur : le fichier $controller_file_name est absent</b>
        </br>Conseil : il faut creer ce fichier, verifier son nom ou verifier le lien du bouton
        en particulier la valeur de la variable 'controller' dans l'URL.");
  }
?>
