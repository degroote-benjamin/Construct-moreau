<div class="container container-min">
<h2 class="my-4">Project name : <?php echo $valuedataprojectid['project_name'];?></h2>
<h4>project description :</h4>
<p><?php echo $valuedataprojectid['description_project'];?></p>
<ul class="list-group">
    <?php foreach ($datastepid as $key => $valuedatastepid) {
    ?>

    <li> step :
        <?php echo $valuedatastepid['step_name']?>
        <ul>
            <?php foreach ($datatask as $key => $value) {
        if ($value['id_step'] == $valuedatastepid['id_step']) {
            ?>
            <li> task :
                <?php echo $value['task_name'] ?>
            </li>

            <?php
        }
    } ?>
        </ul>
    </li>
    <?php
} ?>
</ul>

</div>
