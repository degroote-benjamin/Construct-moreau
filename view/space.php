<table class="table">
  <tr>
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
        <td><?php echo $valueproject['project_name'] ?></td>
        <td><?php echo $valueproject['description_project'] ?></td>
        <td><?php echo $valueproject['category_name'] ?></td>
        <td><?php echo $valueproject['end_date'] ?></td>
        <td><a href="../controle/espace.php?updateid=<?php echo $donnees['id_article']; ?>"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
<td>
<a href="../controle/project_area.php?deleteid=<?php echo $donnees['id_article']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
      </tr>
      <?php
    }

   ?>
</table>
