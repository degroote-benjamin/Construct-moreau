<?php
include 'sqlconnect.php';
$bdd = connect();

function get_project(){
  global $bdd;
  $reponse = $bdd->query('SELECT * from project');
  return $reponse->fetchAll();
}

function get_project_step()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * from project INNER JOIN step ON step.id_project = project.id_project');
    return $reponse->fetchAll();
}
