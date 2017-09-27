<h2><?php echo $valuedataprojectid['project_name'];?></h2>

<ul>
<?php foreach ($datastepid as $key => $valuedatastepid) {
    ?>

<li><?php echo $valuedatastepid['step_name']?>
  <ul>
<?php foreach ($datatask as $key => $value) {
        if ($value['id_step'] == $valuedatastepid['id_step']) {
            ?>
<li><?php echo $value['task_name'] ?></li>

<?php
        }
    }
    ?>
  </ul>
  </li>
    <?php
} ?>
</ul>
