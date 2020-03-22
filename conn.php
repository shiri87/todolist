<?php
// statement of my database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ToDoList";

//sql statement
$conn = new mysqli ($servername,$username,$password,$dbname);

if($conn->connect_error){
   
    die('<div class="alert alert-warning text-center" role="alert">'
    .$conn->connect_error.'</div>');
}
else
{
    echo '<div class="alert alert-primary text-center" role="alert">
CONNECTED :P </div>';
}

?>
