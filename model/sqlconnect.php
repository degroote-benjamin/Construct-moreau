<?php
function connect(){
  try
{
  $bdd = new PDO('mysql:host=localhost;dbname=CONSTRUCT;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
return $bdd;
}
