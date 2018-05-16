<?php
function openthreadfileread(){
      if(file_exists("view/threadlist.txt"))
      {
          echo "</br>Ouverture de fichier...</br>";
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
    $threadfile=fopen("view/threadlist.txt","a+");
    echo "</br>File open";
    return($threadfile);
}

function closethreadfile($threadfile){
      if(isset($threadfile))
      {
          //On ferme le fichier
          fclose($threadfile);
          echo "</br>Fermeture de fichier...</br>";
      }
      else
      {
        echo "Error openfile not found";
      }
}

function get5threadfromfile($threadfile,$nb){ #initialisé nb! et l'utiliser
    #nécéssite $threadfile,un fichier ouvert
    #récupère les 5 discussions suivant $nb ($nb comprit)
$i=1;
$y=0;
if ($threadfile) {
    while (($buffer = fgets($threadfile, 4096)) !== false) {
        if(($y%2)==0)
        {
          echo "<a href='index.php?controller=maincontroller&action=focusonthread&nb=$i'>$buffer</a>";
          $i++;
          $y++;
        }
        else {
          echo $buffer;
          $y++;
        }
    }
    if (!feof($threadfile)) {
        echo "Erreur: fgets() a échoué\n";
    }
    fclose($threadfile);
}
}
function get1threadfromfile($threadfile,$nb){ #initialisé nb! et l'utiliser
    #nécéssite $threadfile,un fichier ouvert
    #récupère les 5 discussions suivant $nb ($nb comprit)
    if ($threadfile)
    {
        $i=1;
        while($i<$nb)
        {
            $tmp=$buffer = fgets($threadfile, 4096);
            $tmp=$buffer = fgets($threadfile, 4096);
            #echo "a del $i : $tmp";
        $i++;
        }
        #ON EST A LA BONNE LIGNE
        $title=$buffer = fgets($threadfile, 4096);
            echo $title;
        $data=$buffer = fgets($threadfile, 4096);
            echo $data;
    }
}
function writethread($threadfile){
  #Ecrit une nouvelle ligne dans le fichier
  #PAS BESOIN pour l'instant
}
 ?>
