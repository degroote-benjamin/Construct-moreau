<h2 class="text-center my-2">Update / Delete step</h2>
<p class="text-center my-2">Cick on step name for see all task for this step</p>
<div class="container">
    <table class="table table-responsive d-flex justify-content-center">
        <tr class="thead-inverse">
            <th>step number</th>
            <th>step name</th>
            <th>step description</th>
            <th>delete</th>
        </tr>
        <?php
    foreach ($datastep as $valuestep) {
        ?>
            <tr>
                <td>
                    <?php echo $valuestep['id_step']; ?>
                </td>
                <td>
                    <a href="../control/task_area.php?id_step=<?php echo $valuestep['id_step']?>">
                        <?php echo $valuestep['step_name'] ?>
                    </a>
                </td>
                <td>
                    <?php echo $valuestep['description_step'] ?>
                </td>
                <td><a href="../control/step_area.php?deleteid=<?php echo $valuestep['id_step']; ?>&amp;id_project=<?php echo $id; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            <?php
    }

   ?>
    </table>

</div>

<h2 class="text-center my-4">Add step</h2>

<div class="container">
    <form class="text-center my-5" action="step_area.php" method="post">
        <div class="form-group">
            <label for="step_name">step name</label>
            <input type="text" name="step_name" value="" class="form-control" placeholder="step_name" id="step_name">
        </div>
        <div class="form-group">
            <label for="description_step">step description</label>
            <textarea name="description_step" class="form-control" id="description_step" value="" placeholder="description">
  </textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submitstep" value="submit" class="btn btn-primary">
    </form>

</div>
