<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../isset/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

    <center><div class="col-sm-7 col-10" id="cont"><h3>Inscription</h3>
    <form action="Trait.php" method="post">
        <p><input type="email" name="Em" id="em" placeholder="E-mail" required></p>
        <p><input type="text" name="nom" id="em" placeholder="Nom" required></p>
        <p><input type="password" name="mdp" id="em" placeholder="Mots de passe" required></p>
        <p><input type="date" name="dtn" id="em" placeholder="Date de naissance" required></p>
        <p><input type="text" name="ville" id="em" placeholder="Ville" required></p>
        <p><select name="genre" id="">
            <option value="m">masculin</option>
            <option value="f">feminin</option>
        </select></p>
        <input type="submit" value="Inscrire" id="sub">
    </form>
        <?php
            session_start();
            $_SESSION['a']=1;
            if (isset($_SESSION['b']) && $_SESSION['b']==0) {       
                echo "<p style='color:red;'>Vous devez completer tous </p>";
            }
        ?>
    </div>
    </center>
</body>
</html>