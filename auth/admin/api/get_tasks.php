<?php
include("../config/db.php");
$result = mysqli_query($conn, "SELECT * FROM tasks");
$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($tasks);
?>