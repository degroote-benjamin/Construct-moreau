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
if(isset($_GET['deleteid'])){
delete_task($_GET['deleteid']);
}

if(isset($_POST['submittask'])){
if(isset($_POST['task_name']) && isset($_POST['end_date'])){
add_task($_POST['task_name'],$_POST['end_date'],$id);
}
}

$datatask=get_task_id($id);

include 'header.php';
include '../view/space_task.php';
include 'footer.php';
 ?>
