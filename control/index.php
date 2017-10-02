<?php
include_once('../model/data.php');
if(isset($_GET['logout'])){
  session_unset();
  session_destroy();
}
include 'header.php';

// if id project doesn't exist vue is index
if (!isset($_GET['id'])) {
    $dataproject = get_project();
    $dataprojectstep = get_project_step();
    include '../view/index.php';
}
// if id project exist , display the project id and all description
else {
    $valuedataprojectid = get_project_id($_GET['id']);
    $datastepid = get_step_id($_GET['id']);
    $datatask = get_task();
    include '../view/detail.php';
}
include 'footer.php';
