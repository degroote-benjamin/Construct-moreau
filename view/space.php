<h2 class="text-center my-2">Update / Delete project</h2>
<p class="text-center my-2">Cick on project name for see all step for this project</p>
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

<h2 class="text-center my-4">Add project</h2>

<div class="container">
<form class="text-center my-5" action="project_area.php" method="post">
  <div class="form-group">
    <label for="project_name">Project name</label>
  <input type="text" name="project_name" value="" class="form-control" placeholder="project_name" id="project_name">
</div>
<div class="form-group">
  <label for="description_project"> project description</label>
  <textarea name="description_project" class="form-control" id="description_project" value="" placeholder="description">
  </textarea>
</div>
<div class="form-group">
  <label for="category">project category</label>
    <select name="id_category" class="form-control">
      <?php
      foreach ($datacategory as $valuecategory) {
          ?>
      <option value="<?php echo $valuecategory['id_category'] ?>"><?php echo $valuecategory['category_name'] ?></option>
      <?php } ?>
    </select>

  </div>
  <div class="form-group">
    <label for="end_date">End date</label>
    <input class="form-control" id="end_date" type="date" name="end_date" value="" placeholder="end_date">
  </div>
    <input type="submit" name="submitproject" value="submit" class="btn btn-primary">
</form>

</div>
