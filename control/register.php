<?php
include_once('../model/data.php');
session_start();

include 'header.php';
if (isset($_POST['submitregister'])) {
    if (isset($_POST['pass']) and isset($_POST['passconf']) and isset($_POST['pseudo']) and isset($_POST['email'])) {
          $user = get_user($_POST['pseudo']);
          if($_POST['pass'] == $_POST['passconf'] and $user['pseudo']!==$_POST['pseudo']){
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        add_user($_POST['pseudo'], $_POST['email'], $pass);
        include '../view/login.php';
      }
      else {
        if($_POST['pass'] !== $_POST['passconf']){
        $_SESSION['error']['pass']=true;
      }
      else {
        unset($_SESSION['error']['pass']);
      }
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
