<?php
include_once('../model/data.php');

include 'header.php';
// if click on submit register
if (isset($_POST['submitregister'])) {
  // isset all var
    if (isset($_POST['pass']) and isset($_POST['passconf']) and isset($_POST['pseudo']) and isset($_POST['email'])) {
          $user = get_user($_POST['pseudo']);
          // if double pass are good and user don't take someone else pseudo
          if($_POST['pass'] == $_POST['passconf'] and $user['pseudo']!==$_POST['pseudo']){
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        add_user($_POST['pseudo'], $_POST['email'], $pass);
        include '../view/login.php';
      }
      else {
        // create error for pass
        if($_POST['pass'] !== $_POST['passconf']){
        $_SESSION['error']['pass']=true;
      }
      else {
        unset($_SESSION['error']['pass']);
      }
      // create error for pseudo
      if($user['pseudo']==$_POST['pseudo']){
        $_SESSION['error']['pseudo']=true;
      }
      else{
        unset($_SESSION['error']['pseudo']);
      }
        include '../view/register.php';
      }
    }
}
else{
  include '../view/register.php';
}

include 'footer.php';
