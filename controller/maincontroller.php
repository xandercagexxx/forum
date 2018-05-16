<?php
//require_once("view/mainpage.php");
Class maincontroller {

    function index(){
        require_once("view/mainpage.php");
    }
    /* Ne sert a rien on appel la mainpage par défault, je le laisse si on décide de changer l'action par défault
    function displaymainpage(){
        require_once("view/mainpage.php");
    }*/
    function showthreads(){
        #On inclue la page
        require_once("view/showthread.php");
        #On inclue le model qui contient les fonctions php
        require_once("model/filethreadfunction.php");
        #on ouvre le fichier contenant les discution
        $threadfile=openthreadfileread();
        #$threadfile est désormais un pointeur de fichier sur le fichier des discussion
        get5threadfromfile($threadfile,0);
        //Définire un tableau
        //Utiliser les méthodes de openthreadfile.php pour remplire le tableau
        //Déclarer une variable globale int =0
        //afficher les 5 éléments du tableau égaux et supérieurs a la var global
        closethreadfile($threadfile);
        require_once("view/footer.php");
    }
    function focusonthread($nb){
        #On inclue la page
        require_once("view/showthread.php");
        #On inclue le model qui contient les fonctions php
        require_once("model/filethreadfunction.php");
        #on ouvre le fichier contenant les discution
        $threadfile=openthreadfileread();
        #$threadfile est désormais un pointeur de fichier sur le fichier des discussion
        get5threadfromfile($threadfile,0);
        //Définire un tableau
        //Utiliser les méthodes de openthreadfile.php pour remplire le tableau
        //Déclarer une variable globale int =0
        //afficher les 5 éléments du tableau égaux et supérieurs a la var global
        closethreadfile($threadfile);
        require_once("view/footer.php");
    }
    function addthreads(){
        require_once("model/filethreadfunction.php");
        require_once("view/newthread.php");//nécéssaire?
        //afficher un formulaire (code dans formcreationthread.php dans le rep view)
        //le formulaire envoie les données à une fonction d'écriture présente dans addthread.php (vu que le code de addthread.php est chargé dans le controlleur il suffire de l'envoyer sur lui même)
        //addthread.php se servire des fonctions dans openthreadfile.php pour ouvrir le fichier d'articles
        //Il ecrira le nouvelle article dedans et fermera le fichier
        //On écris ce qu'on a a écrire(modifier au besoin le nom des clef du tableau post)
        fwrite($threadfile,htmlentities($_POST['titre']));
        fwrite($threadfile,htmlentities($_POST['corpdumessage']));
        //plus tard il faudra vérifier l'authentification de l'user pour accéder a cette fonction
        require_once("view/footer.php");
    }
    function displaycgu(){
        require_once("view/cgu.php");
    }
    function toto(){

    }
}
?>
