<?php
include_once('../model/data.php');

include 'header.php';
if (!isset($_GET['id'])) {
    $dataproject = get_project();
    $dataprojectstep = get_project_step();
    include '../view/index.php';
} else {
    include 'detail.php';
}
include 'footer.php';
