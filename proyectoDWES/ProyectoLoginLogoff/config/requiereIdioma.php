<?php
session_start();
if (empty($_SESSION["usuarioDAW209AppLOginLogoff"])) {

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION["language"]=$lang;
    if ($lang!="es")
    {
     $_SESSION["usuarioDAW209AppLOginLogoff"]="en";   
    }
}
if (isset($_SESSION["usuarioDAW209AppLOginLogoff"]))
    
{
$lang=$_SESSION["usuarioDAW209AppLOginLogoff"]; 
}
switch ($lang){
    case "fr":
        //echo "PAGE FR";
        include("language/fr.php");//include check session FR
        break;
    case "it":
        //echo "PAGE IT";
        include("language/en.php");
        break;
    case "es":
        //echo "PAGE ES";
        include("language/es.php");
        break;
    case "en":
        //echo "PAGE EN";
        include("language/en.php");
        break;        
    default:
        //echo "PAGE EN - Setting Default";
        include("language/en.php");//include EN in all other cases of different lang detection
        break;
}

?>