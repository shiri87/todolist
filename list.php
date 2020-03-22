<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List</title>
<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
<!-- Create a SQL database and insert some basic data / 
Create a connection to the database /
Create a PHP page that can display data from a database
Create a PHP page that can insert data into the database
Create a PHP page that can delete data from the database
Create a PHP page that can edit data in the database -->

<!-- navigation -->
<?php
include 'nav.php'
?>

<!-- call the conn.php -->
<?php
include 'conn.php'
?>
<!--call list-->
    <!-- open connection and  -->
    <!-- send to the database -->
    <!-- print echo can be error-->
<?php
$sql = 'SELECT id, task, dueDate, importance FROM tblToDoList';
$result = $conn->query($sql);
print_r($result);
?>

<!-- start form -->
<div class="display-4">List of tasks</div>

<table class="table">
  <caption>List of tasks</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">tasks</th>
      <th scope="col">due data</th>
      <th scope="col">importance</th>
      <th scope="col">Delet</th>
      <th scope="col">Edite</th>
      <th scope="col">Done</th>


    </tr>
  </thead>
  <tbody>
      <!--linked in form-->
      <?php
 if($result->num_rows > 0){

    while($row=$result->fetch_assoc()){
        echo '<tr>
      <td scope="col">'.$row['id'].'</td>

      <td scope="col">'.$row['task'].'</td>
      <td scope="col">'.$row['dueDate'].'</td>
      <td scope="col">'.$row['importance'].'</td>
      <td scope="col"><a href="editTask.php" class="btn btn-outline-primary">Edite</<a></td>
      <td scope="col"><a href="done.php" class="btn btn-outline-success">Done</a></td>
      <td scope="col"><a href="delet.php" class="btn btn-outline-danger">Delet</a></td>
      </tr>';
    }
 }
 else
 {
     echo "You've done!!!!";
 }
// connection off
      $conn->close();
      ?>


  
  </tbody>
</table>




</body>
</html>