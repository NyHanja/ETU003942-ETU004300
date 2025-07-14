<?php

      require("../inc/fonction.php");
     $nom=$_POST['nom'];$Em=$_POST['Em'];
     $mdp=$_POST['mdp'];$dtn=$_POST['dtn'];
     $ville=$_POST['ville'];$genre=$_POST['genre'];

     if ($nom==NULL || $Em==NULL || $mdp==NULL || $dtn==NULL) {
        $_SESSION['b']=0;
        header('Location:insc.php');
     }
     else{
         session_start();
         $Donnee=mampiditra($Em,$mdp,$nom,$dtn,$genre,$ville);
        echo $Donnee['nom'];
         $_SESSION['Id']=$Donnee['id_membre'];
         $_SESSION['nom']=$Donnee['nom'];
         //header('Location:liste.php');
     }
?>