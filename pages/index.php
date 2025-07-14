

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
    <center><div class="col-sm-7 col-10" id="cont">
        <form action="Traite2.php" method="get">
            <p><input type="Email" name="Em" id="em" placeholder="Email"></p>
            <p><input type="password" name="mdp" id="em" placeholder="Mots de passe"></p>
            <p><input type="submit" value="Connecter" id="sub"></p>
        </form>
        <a href="insc.php"> S'inscrire </a><br><br>
        <?php
            session_start();
            $_SESSION['b']=1;
            if (isset($_SESSION['a']) && $_SESSION['a']==0) {
                echo "<p style='color:red;'>Il y a une erreur</p>";
            }
        ?>
    </div></center>
</body>
</html>