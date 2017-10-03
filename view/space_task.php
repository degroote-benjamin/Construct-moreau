<h2 class="text-center my-2">Update / Delete task</h2>
<div class="container">
    <table class="table table-responsive d-flex justify-content-center">
        <tr class="thead-inverse">
            <th>task number</th>
            <th>task name</th>
            <th>end date</th>
            <th>Set as finish</th>
            <th>delete</th>
        </tr>
        <?php
    foreach ($datatask as $valuetask) {
        ?>
            <?php if ($valuetask['finish'] == 1){?>
             <!-- if finish green color -->
            <tr class="alert alert-success">
                <?php  }
                  else { ?>
                    <!-- not finish no color -->
                <tr>
                    <?php } ?>
                    <td>
                        <?php echo $valuetask['id_task']; ?>
                    </td>
                    <td>
                        <?php echo $valuetask['task_name'] ?>
                    </td>
                    <td>
                        <?php echo $valuetask['end_date'] ?>
                    </td>
                    <td>
                      <!-- project not finish -->
                        <?php if($valuetask['finish'] == 0){ ?>
                        <a href="../control/task_area.php?updateidtrue=<?php echo $valuetask['id_task'];?>&amp;id_step=<?php echo $id; ?>">
                      <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    </a>
                        <?php }
                        // project finish
                      else { ?>
                        <a href="../control/task_area.php?updateidfalse=<?php echo $valuetask['id_task'];?>&amp;id_step=<?php echo $id; ?>">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="../control/task_area.php?deleteid=<?php echo $valuetask['id_task']; ?>&amp;id_step=<?php echo $id; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php
    }

   ?>
    </table>

</div>

<h2 class="text-center my-4">Add task</h2>

<div class="container">
    <form class="text-center my-5" action="task_area.php" method="post">
        <div class="form-group">
            <label for="task_name">task name</label>
            <input type="text" name="task_name" value="" class="form-control" placeholder="task_name" id="task_name">
        </div>
        <div class="form-group">
            <label for="end_date">End date</label>
            <input type="date" name="end_date" class="form-control" id="end_date" value="" placeholder="YYYY-MM-DD">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submittask" value="submit" class="btn btn-primary">
    </form>

</div>
