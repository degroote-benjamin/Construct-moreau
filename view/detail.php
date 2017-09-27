<h2><?php echo $valuedataprojectid['project_name'];?></h2>

<?php foreach ($datastepid as $key => $valuedatastepid) {?>

<p><?php echo $valuedatastepid['step_name']?></p>
<?php foreach ($datatask as $key => $value) {
if ($value['id_step'] == $valuedatastepid['id_step']){
?>
<h1><?php echo $value['id_step'] ?></h1>

<?php
}

}
} ?>
