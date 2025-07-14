<?php

      require("../inc/fonction.php");
     $nom=$_POST['nom'];$Em=$_POST['Em'];
     $mdp=$_POST['mdp'];$dtn=$_POST['dtn'];
     
     if ($nom==NULL || $Em==NULL || $mdp==NULL || $dtn==NULL) {
        $_SESSION['b']=0;
        header('Location:insc.php');
     }
     else{
         session_start();
         $Donnee=mampiditra($Em,$mdp,$nom,$dtn,$genre,$ville);
         $_SESSION['Id']=$Donnee['idMembre'];
         $_SESSION['nom']=$Donnee['Nom'];
         header('Location:acc.php');
     }
?>