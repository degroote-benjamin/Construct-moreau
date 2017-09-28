<?php
include '../model/data.php';

if (isset($_GET['deleteid'])) {
  delete_project($_GET['deleteid']);
}
$dataproject = get_project_category();

include 'header.php';
include '../view/space.php';
include 'footer.php';
 ?>
