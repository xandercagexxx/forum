<?php
function openthreadfileread(){
      if(file_exists("view/threadlist.txt"))
      {
         # echo "</br>Ouverture de fichier...</br>";
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
          #echo "</br>Fermeture de fichier...</br>";
      }
      else
      {
        echo "Error openfile not found";
      }
}

function get5threadfromfile($threadfile,$nb){
    #initialisé nb! et l'utiliser
    #nécéssite $threadfile,un fichier ouvert
    #récupère les 5 discussions suivant $nb ($nb comprit)
$i=0;
$y=0;
if ($threadfile) {
    while($i<$nb)
        {
            $tmp=$buffer = fgets($threadfile, 4096);
            $tmp=$buffer = fgets($threadfile, 4096);
            #echo "a del $i : $tmp";
        $i++;
        }
	$i=1;
    while ((($buffer = fgets($threadfile, 4096)) !== false)&& $i<=5) {
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
    #if (!feof($threadfile)) {
    #    echo "Erreur: fgets() a échoué\n";
    #}
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
function affichearrow($nb,$threadfile){
	$page=($nb/4)+1;
	#if($a>=5)
	#{
	  $a=$nb-5;
          echo "</br></br><a href='index.php?controller=maincontroller&action=showthreads&nb=0'>Première page</a>";
    #    }
	echo "    Page $page    ";
	if($a<countline($threadfile))
	{
	$a=$nb+5;
	 echo "<a href='index.php?controller=maincontroller&action=showthreads&nb=$a'>Page suivante!</a>";
	}
}

function countline($threadfile){
if ($threadfile) {
$fich='view/threadlist.txt';

$tabFich=file($fich);

$i=count($tabFich);
#    fseek($threadfile, 0);
#    while (!feof($threadfile)) {
#           fgets($threadfile, 4096);
#           $i++;
#    }
#    while (fgets($threadfile, 4096) !== false) {
#	$i+=1;
#    }
#    if (feof($threadfile)) {
        return $i;
#    }
#    else{
#	echo "ERROR LINE COUNT";
#	echo $i;
#	}
#    fclose($threadfile);
    }
}
 ?>
