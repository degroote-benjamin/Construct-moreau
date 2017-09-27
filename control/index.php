<?php
include_once('../model/data.php');

include 'header.php';
if (!isset($_GET['id'])) {
    $dataproject = get_project();
    $dataprojectstep = get_project_step();
    include '../view/index.php';
} else {
    $valuedataprojectid = get_project_id($_GET['id']);
    $datastepid = get_step_id($_GET['id']);
    $datatask = get_task();
    include '../view/detail.php';
}
include 'footer.php';
