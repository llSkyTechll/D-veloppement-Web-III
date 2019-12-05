<?php
  session_start();
  
    if (!empty($_POST['mot_passe'])) {
      if ($_POST['mot_passe'] == 'alexandre') {
        $_SESSION['password'] = htmlentities($_POST['mot_passe']);
        header('location:admin.php');
      }else {
        header('location:frm_connexion.php');
      }
    }else {
      header('location:frm_connexion.php');
    }
  }
?>
