<?php
include '../model/data.php';

// if user click on delete , delete project
if (isset($_GET['deleteid'])) {
  delete_project($_GET['deleteid']);
}
// if the user click on submit , add a project and isset all inpute for add the project
if(isset($_POST["submitproject"])){
  if(isset($_POST['project_name']) and isset($_POST['description_project']) and isset($_POST['id_category']) and isset($_POST['end_date'])){
    add_project($_POST['project_name'],$_POST['description_project'],$_POST['id_category'],$_POST['end_date'],$_SESSION['id']);
  }
}

// table with all project and their category name
$datacategory = get_category();
$dataproject = get_project_category_user($_SESSION['id']);

include 'header.php';
include '../view/space.php';
include 'footer.php';
 ?>
