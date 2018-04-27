Alors on fais quoi?
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
    function displaycgu(){
        require_once("view/cgu.php");
    }
    function toto(){

    }
}
?>
