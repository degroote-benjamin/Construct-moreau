<?php
include '../model/data.php';

if (isset($_GET['deleteid'])) {
  delete_project($_GET['deleteid']);
}
$dataproject = get_project_category();
$datacategory = get_category();
if(isset($_POST["submitproject"])){
  if(isset($_POST['project_name']) and isset($_POST['description_project']) and isset($_POST['id_category']) and isset($_POST['end_date'])){
    add_project($_POST['project_name'],$_POST['description_project'],$_POST['id_category'],$_POST['end_date'],1);
  }
}
include 'header.php';
include '../view/space.php';
include 'footer.php';
 ?>
