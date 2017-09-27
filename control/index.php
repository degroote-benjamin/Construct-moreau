<?php
include_once('../model/data.php');

$dataproject = get_project();
$dataprojectstep = get_project_step();

include 'header.php';
include '../view/index.php';
include 'footer.php';
