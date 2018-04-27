<?php
function openthreadfileread(){
      if(file_exists("view/threadlist.txt"))
      {
          $threadfile=fopen("view/threadlist.txt","r");
      }
      else
      {
        echo "Error threadfile not found";
      }
}

function openthreadfileappend(){
    //On ouvre le fichier de blog en lecture/ecriture, avec la tete de lecture en fin de fichier
    $threadfile=fopen("view/threadlist.txt","a+");
}

function closethreadfile(){
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
 ?>
