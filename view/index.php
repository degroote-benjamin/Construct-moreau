<?php
foreach ($dataproject as $valuedataproject) {
    ?>
<div class="card" style="width: 20rem;">
  <div class="card-block">
    <h4 class="card-title"><?php echo $valuedataproject['project_name']?></h4>
  </div>
  <ul class="list-group list-group-flush">
    <?php foreach ($dataprojectstep as $valuedataprojectstep) {
        ?>
    <li class="list-group-item"><?php echo $valuedataprojectstep['step_name'] ?></li>
    <?php
    } ?>
  </ul>
  <div class="card-block">
    <a href="controle/index.php?id=<?php echo $valuedataproject['id_project']?>" class="card-link">See more</a>
  </div>
</div>
<?php
}
 ?>
