<?php 
require('connexion.php');
function mampiditra($Email, $mdp, $nom, $dtn, $ville, $genre) {
    
    $sql = "INSERT INTO membre (nom, date_naissance, mdp, genre, email, ville)
            VALUES ('%s','%s','%s','%s','%s','%s')";
    
    $sql1 = sprintf($sql, $nom, $dtn, $mdp, 'default.jpg', $genre, $Email, $ville);
    
    mysqli_query(connexion(), $sql1);

    $sql2 = sprintf("SELECT * FROM membre WHERE mdp='%s' AND email='%s'", $mdp, $Email);
    $resultat = mysqli_query(connexion(), $sql2);  
    $Donnee = mysqli_fetch_assoc($resultat);
    return $Donnee;
}
?>
