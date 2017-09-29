<?php
include '../model/data.php';

// if get exist then $id = get else $id = post ,
//it's for have all time the id for display all task from the step
if(isset($_GET['id_step'])){
$id = $_GET['id_step'];
}
else{
  $id= $_POST['id'];
}

$datatask=get_task_id($id);

include 'header.php';
include '../view/space_task.php';
include 'footer.php';
 ?>
