<?php
include '../model/data.php';

// if get exist then $id = get else $id = post ,
//it's for have all time the id for display all step from the project
if(isset($_GET['id_project'])){
$id = $_GET['id_project'];
}
else{
  $id= $_POST['id'];
}

// if the user click on submit , add a project and isset all inpute for add the step
if(isset($_POST['submitstep'])){
if(isset($_POST['step_name']) && isset($_POST['description_step'])){
add_step($_POST['step_name'],$_POST['description_step'],$id);
}
}
//if id delete exist , delete the step
if(isset($_GET['deleteid'])){
delete_step($_GET['deleteid']);
}
// display the step in the table
$datastep=get_step_id($id);
include 'header.php';
include '../view/space_step.php';
include 'footer.php';
 ?>
