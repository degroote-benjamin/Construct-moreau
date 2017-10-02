<div class="container my-5 container-min">
    <div class="row d-flex justify-content-between">
        <?php
foreach ($dataproject as $valuedataproject) {
    ?>
            <div class="card my-3" style="width: 20rem;">
                <div class="card-block">
                    <h4 class="card-title"><?php echo $valuedataproject['project_name']?></h4>
                    <p class="text-right">End_date :   <?php echo $valuedataproject['end_date']?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($dataprojectstep as $valuedataprojectstep) {
        if ($valuedataprojectstep['id_project'] == $valuedataproject['id_project']) {
            ?>

                    <li class="list-group-item">
                        <?php echo $valuedataprojectstep['step_name'] ?>
                    </li>
                    <?php
        }
    } ?>
                </ul>
                <div class="card-block">
                    <a href="../control/index.php?id=<?php echo $valuedataproject['id_project']?>" class="card-link">See more</a>
                </div>
            </div>
            <?php
}
 ?>

    </div>
</div>
