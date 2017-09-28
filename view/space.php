<div class="container">
<table class="table table-responsive d-flex justify-content-center">
  <tr class="thead-inverse">
    <th>project number</th>
    <th>project name</th>
    <th>project description</th>
    <th>Category</th>
    <th>end date</th>
    <th>update</th>
    <th>delete</th>
  </tr>
  <?php
    foreach ($dataproject as $valueproject) {
        ?>
      <tr>
        <td><?php echo $valueproject['id_project']; ?></td>
        <td><a href="../control/step_area.php?id_project=<?php echo $valueproject['id_project']?>"><?php echo $valueproject['project_name'] ?></a></td>
        <td><?php echo $valueproject['description_project'] ?></td>
        <td><?php echo $valueproject['category_name'] ?></td>
        <td><?php echo $valueproject['end_date'] ?></td>
        <td><a href="../controle/project_area.php?updateid=<?php echo $valueproject['id_project']; ?>"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
<td>
<a href="../control/project_area.php?deleteid=<?php echo $valueproject['id_project']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
      </tr>
      <?php
    }

   ?>
</table>

</div>

<div class="container">
<form class="text-center" action="project_area.php" method="post">
  <div class="form-group">
  <input type="text" name="project_name" value="" placeholder="project_name">

</div>
<div class="form-group">
  <input type="text" name="description_project" value="" placeholder="description">

</div>
<div class="form-group">
    <select class="" name="id_category">
      <?php
      foreach ($datacategory as $valuecategory) {
          ?>
      <option value="<?php echo $valuecategory['id_category'] ?>"><?php echo $valuecategory['category_name'] ?></option>
      <?php } ?>
    </select>

  </div>
  <div class="form-group">
    <input type="date" name="end_date" value="" placeholder="end_date">

  </div>
    <input type="submit" name="submitproject" value="submit" class="btn btn-primary">
</form>

</div>
