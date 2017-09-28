<?php
include '../model/data.php';

if(isset($_GET['id_project'])){
$id = $_GET['id_project'];
}
else{
  $id= $_POST['id'];
}

if(isset($_POST['submitstep'])){
if(isset($_POST['step_name']) && isset($_POST['description_step'])){
add_step($_POST['step_name'],$_POST['description_step'],$id);
}
}
if(isset($_GET['deleteid'])){
delete_step($_GET['deleteid']);
}
$datastep=get_step_id($id);
include 'header.php';
include '../view/space_step.php';
include 'footer.php';
 ?>
