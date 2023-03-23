<html>
<?php include ('header.php')?>
<div class="container">
    <a class = "btn btn-primary"href="http://localhost/Intern-Activity/person/add.php">Add Person</a>
    
    <?php
    $query = $conn->query("SELECT * FROM persons");
?>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthday</th>
      <th scope="col">Birth Place</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
     while ($person = $query->fetch_assoc()) {
        echo "<tr>
             <td>" . $person['id'] ."</td>
             <td>" . $person['name'] ."</td>
             <td>" . $person['gender'] ."</td>
             <td>" . $person['birthday'] ."</td>
             <td>" . $person['place_of_birth'] ."</td>
             <td></td>
        </tr>";
     }
     $conn->close();
    ?>
</table>
</div>
<?php include ('footer.php')?>
</html>