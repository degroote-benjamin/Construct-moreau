<?php
include 'sqlconnect.php';
$bdd = connect();

function get_project()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * from project');
    return $reponse->fetchAll();
}

function get_project_category()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * from project INNER JOIN category ON category.id_category = project.id_category order by project.id_project');
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

function get_task_id($id)
{
    global $bdd;
    $reponse = $bdd->prepare('SELECT * from task where task.id_step = :id');
    $reponse->execute(array(
'id'=>$id
));
}

function get_category()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * from category');
    return $reponse->fetchAll();
}

function add_project($name, $des, $id, $date, $user)
{
    global $bdd;
    $reponse = $bdd->prepare('INSERT INTO  project  (project_name ,  description_project ,  id_category ,  end_date ,  id_user ) VALUES (:name, :des, :id, :date1, :user);');
    $reponse->execute(array(
  'name'=>$name,
  'des'=>$des,
  'id'=>$id,
  'date1'=>$date,
  'user'=>$user
  ));
}


function add_step($name, $des, $id)
{
    global $bdd;
    $reponse = $bdd->prepare('INSERT INTO  step  (step_name ,  description_step ,  id_project ) VALUES (:name, :des, :id);');
    $reponse->execute(array(
  'name'=>$name,
  'des'=>$des,
  'id'=>$id,
  ));
}

function delete_project($id)
{
    global $bdd;
    $reponse = $bdd->prepare('DELETE step , task , project from project LEFT JOIN step on project.id_project = step.id_project LEFT join task on task.id_step = step.id_step WHERE project.id_project =:id');
    $reponse->execute(array(
'id'=>$id
));
}

function delete_step($id)
{
    global $bdd;
    $reponse = $bdd->prepare('DELETE step , task from step LEFT join task on task.id_step = step.id_step WHERE step.id_step =:id');
    $reponse->execute(array(
'id'=>$id
));
}
