<?php 
require('connexion.php');
function mampiditra($Email, $mdp, $nom, $dtn, $ville, $genre) {

    $sql = "INSERT INTO final_membre (nom, date_naissance, mdp, genre, email, ville)
            VALUES ('%s','%s','%s','%s','%s','%s')";
    
    $sql1 = sprintf($sql, $nom, $dtn, $mdp,$ville, $Email, $genre);
    
    mysqli_query(connexion(), $sql1);
    echo $sql1;

    $sql2 = sprintf("SELECT * FROM final_membre WHERE mdp='%s' AND email='%s'", $mdp, $Email);
    $resultat = mysqli_query(connexion(), $sql2);  
    $Donnee = mysqli_fetch_assoc($resultat);
    return $Donnee;
}
 
    function mijery($Em,$mdp){
        $sql=sprintf("SELECT * FROM final_membre WHERE mdp='%s' AND email='%s'",$mdp,$Em);
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
        $s=sprintf("SELECT * FROM final_membre WHERE id_membre='%s'",$id );
        $sqli=mysqli_query(connexion(),$s);
        $ami=mysqli_fetch_assoc($sqli);
        return $ami;
    }
    function list_object($id_categorie){
        $sql="SELECT * FROM final_objet JOIN final_image_objet ON final_image_objet.id_objet = final_objet.id_objet WHERE 2=2 ";
        if($id_categorie!=-1)$sql.=" AND final_objet.id_categorie='$id_categorie'";
        $result = mysqli_query(connexion(),$sql);
    $donnee = array();
    while($a = mysqli_fetch_assoc($result))
    {
        $donnee[] = $a;
    }
    return $donnee;
    }
    function emprunter($id_objet){
        $sql = sprintf("SELECT retour,emprunt FROM final_emprunts WHERE id_objet = '%s'",$id_objet);
        $sqli=mysqli_query(connexion(),$sql);
        $ami=mysqli_fetch_assoc($sqli);
        return $ami;
    }
function get_categories() {
    $conn = connexion(); // Assure-toi que la fonction connexion() est définie ailleurs

    $sql = "SELECT * FROM final_categorie_objet";
    $result = mysqli_query($conn, $sql);

    $categories = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
    }

    return $categories;
}
?>
  
    
?> 
