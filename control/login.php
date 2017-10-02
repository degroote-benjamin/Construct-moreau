<?php
include_once('../model/data.php');
session_start();
$user = get_user($_POST['pseudo']);

// if click on login submit
if (isset($_POST['submitlogin'])) {
    // if isset field pseudo and pass
    if (isset($_POST['pseudo']) and isset($_POST['pass'])) {
        // if pass verify is true
        if (password_verify($_POST['pass'], $user['pass'])) {
            include 'index.php';
            $_SESSION['pseudo']=$user['pseudo'];
            $_SESSION['id']=$user['id_user'];
        } else {
            include 'header.php';
            include '../view/login.php';
            include 'footer.php';
        }
    }
}
