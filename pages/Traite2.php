<?php
require("../inc/fonction.php");
   
    $k=mijery($_GET['Em'],$_GET['mdp']);
    if ($k!=-1) {
        $nom=membre1($k);
        session_start();
        $_SESSION['a']=1;
        $_SESSION['Id']=$k;
        $_SESSION['nom']=$nom['nom'];

       header('Location:liste.php');
    }
    else{
        $_SESSION['a']=0;
        header('Location:index.php');
    }
?>