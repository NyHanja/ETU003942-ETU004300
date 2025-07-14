<?php
require("../inc/fonction.php");
        session_start();
        $_SESSION['cat']=$_GET['categories'];

       header('Location:liste.php');
?>     
  