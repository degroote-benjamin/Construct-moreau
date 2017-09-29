<h2 class="text-center my-2">Update / Delete task</h2>
<p class="text-center my-2">Cick on step name for see all task for this step</p>
<div class="container">
<table class="table table-responsive d-flex justify-content-center">
  <tr class="thead-inverse">
    <th>task number</th>
    <th>task name</th>
    <th>end date</th>
    <th>update</th>
    <th>delete</th>
  </tr>
  <?php
    foreach ($datatask as $valuetask) {
        ?>
      <tr>
        <td><?php echo $valuetask['id_task']; ?></td>
        <td><?php echo $valuetask['task_name'] ?></td>
        <td><?php echo $valuetask['end_date'] ?></td>
        <td><a href="../controle/task_area.php?updateid=<?php echo $valuetask['id_task']; ?>"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
<td>
<a href="../control/task_area.php?deleteid=<?php echo $valuetask['id_task']; ?>&amp;id_step=<?php echo $id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
  <input type="date" name="end_date" class="form-control" id="end_date" value="" placeholder="date">
</div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="submittask" value="submit" class="btn btn-primary">
</form>

</div>
