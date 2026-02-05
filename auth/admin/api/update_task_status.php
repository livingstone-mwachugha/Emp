<?php
include("../config/db.php");
$task_id = $_POST['id'];
$status = $_POST['status'];
$query = "UPDATE tasks SET status='$status' WHERE id='$task_id'";
mysqli_query($conn, $query); 
echo "Task status updated successfully";
?>