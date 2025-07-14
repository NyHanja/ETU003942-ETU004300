<?php 
require('connexion.php');
function mampiditra($Email, $mdp, $nom, $dtn, $ville, $genre) {

    $sql = "INSERT INTO membre (nom, date_naissance, mdp, genre, email, ville)
            VALUES ('%s','%s','%s','%s','%s','%s')";
    
    $sql1 = sprintf($sql, $nom, $dtn, $mdp,$ville, $Email, $genre);
    
    mysqli_query(connexion(), $sql1);
    echo $sql1;

    $sql2 = sprintf("SELECT * FROM membre WHERE mdp='%s' AND email='%s'", $mdp, $Email);
    $resultat = mysqli_query(connexion(), $sql2);  
    $Donnee = mysqli_fetch_assoc($resultat);
    return $Donnee;
}
 
    function mijery($Em,$mdp){
        $sql=sprintf("SELECT * FROM membre WHERE mdp='%s' AND email='%s'",$mdp,$Em);
        $resultat=mysqli_query(connexion(),$sql);   
        $Donnee=mysqli_fetch_assoc($resultat);
        if ($Donnee['nom']!=NULL ) {
            return $Donnee['id_membre'];
        }
        else{
            return -1;
        }
    }
    function membre1($id){
        $s=sprintf("SELECT * FROM membre WHERE id_membre='%s'",$id );
        $sqli=mysqli_query(connexion(),$s);
        $ami=mysqli_fetch_assoc($sqli);
        return $ami;
    }
    function list_object($id_categorie){
        $sql="SELECT * FROM objet JOIN emprunt ON emprunt.id_objet=objet.id_objet WHERE 2=2";
        if($id_categorie!=-1)$sql.=" AND objet.id_categorie='$id_categorie'";
        $result = mysqli_query(connexion(),$sql);
    $donnee = array();
    while($a = mysqli_fetch_assoc($result))
    {
        $donnee[] = $a;
    }
    }   
?>
