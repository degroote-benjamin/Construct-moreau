<?php
include_once('../model/data.php');
session_start();

$user = get_user($_POST['pseudo']);

if (isset($_POST['submitlogin'])) {
  if(isset($_POST['pseudo']) and isset($_POST['pass'])){
    if (password_verify($_POST['pass'], $user['pass'])) {
      
    }
  }
}

include '../view/login.php';
