<?php
function openthreadfileread(){
      if(file_exists("view/threadlist.txt"))
      {
          echo "</br>Ok";
          $threadfile=fopen("view/threadlist.txt","r");
          return($threadfile);
      }
      else
      {
        echo "Error threadfile not found";
      }
}

function openthreadfileappend(){
    //On ouvre le fichier de blog en lecture/ecriture, avec la tete de lecture en fin de fichier
    echo "</br>Ok";
    $threadfile=fopen("view/threadlist.txt","a+");
    return($threadfile);
}

function closethreadfile($threadfile){
      if(isset($threadfile))
      {
          //On ferme le fichier
          fclose($threadfile);
      }
      else
      {
        echo "Error openfile not found";
      }
}

function get5threadfromfile($threadfile,$nb){ #initialisé nb! et l'utiliser
    #nécéssite $threadfile,un fichier ouvert
    #récupère les 5 discussions suivant $nb ($nb comprit)
if ($threadfile) {
    while (($buffer = fgets($threadfile, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($threadfile)) {
        echo "Erreur: fgets() a échoué\n";
    }
    fclose($threadfile);
}
function get1threadfromfile($threadfile,$nb){ #initialisé nb! et l'utiliser
    #nécéssite $threadfile,un fichier ouvert
    #récupère les 5 discussions suivant $nb ($nb comprit)
if ($threadfile) {
    while($nb>0){
        while (fgetc(fp) != '\n')
        ;
    }
    #ON EST A LA BONNE LIGNE

    if (!feof($threadfile)) {
        echo "Erreur: fgets() a échoué\n";
    }
}
}


}
 ?>
