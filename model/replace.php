<?php
function replacetitlename($phrase){

    return (str_replace("\n", "", $phrase));
}
function replacecarierreturntextarea($phrase){

    return (str_replace("\n", "<\br>", $phrase));
}
?>
