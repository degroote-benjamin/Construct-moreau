<?php
include 'sqlconnect.php';
$bdd = connect();

function get_project(){
  global $bdd;
  $reponse = $bdd->query('SELECT * from project');
  return $reponse->fetchAll();
}

function get_project_category()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * from project INNER JOIN category ON category.id_category = project.id_category');
    return $reponse->fetchAll();
}

function get_project_step()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * from project INNER JOIN step ON step.id_project = project.id_project');
    return $reponse->fetchAll();
}

function get_task()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * from task');
    return $reponse->fetchAll();
}


function get_project_step_id($id)
{
    global $bdd;
    $reponse = $bdd->prepare('SELECT * from project INNER JOIN step ON step.id_project = project.id_project AND project.id_project = :id');
    $reponse->execute(array(
    'id'=>$id
  ));
    return $reponse->fetchALL();
};


function get_project_id($id)
{
    global $bdd;
    $reponse = $bdd->prepare('SELECT * from project where project.id_project = :id');
    $reponse->execute(array(
    'id'=>$id
  ));
    return $reponse->fetch();
};

function get_step_id($id)
{
    global $bdd;
    $reponse = $bdd->prepare('SELECT * from step where step.id_project = :id');
    $reponse->execute(array(
    'id'=>$id
  ));
    return $reponse->fetchALL();
};

function delete_project($id){
global $bdd;
$reponse = $bdd->prepare('DELETE project , step , task from project inner join step on project.id_project = step.id_project and project.id_project = :id inner join task on task.id_step = step.id_step');
$reponse->execute(array(
'id'=>$id
));
}
