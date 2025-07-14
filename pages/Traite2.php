<?php
require("../inc/fonction.php");
   
    $k=mijery($_GET['Em'],$_GET['mdp']);
    $nom=membre1($k);
    if ($k!=-1) {
        session_start();
        $_SESSION['a']=1;
        $_SESSION['Id']=$k;
        $_SESSION['nom']=$nom['Nom'];

       header('Location:acc.php');
    }
    else{
        $_SESSION['a']=0;
      
        header('Location:index.php');
    }
?>