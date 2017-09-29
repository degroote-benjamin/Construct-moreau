<?php
include_once('../model/data.php');
session_start();

include 'header.php';
if (isset($_POST['submitregister'])) {
    if (isset($_POST['pass']) and isset($_POST['passconf']) and isset($_POST['pseudo']) and isset($_POST['email'])) {
          if($_POST['pass'] == $_POST['passconf']){
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        add_user($_POST['pseudo'], $_POST['email'], $pass);
        include '../view/login.php';
      }
      else {
        $_SESSION['error']['pass']=true;
      }
    }
    else{
      $_SESSION['error']['formregister']=true;
    }
}
else{
  include '../view/register.php';
}

include 'footer.php';
