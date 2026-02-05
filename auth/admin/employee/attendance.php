<?php
session_start();
include("../config/db.php");
$id = $_SESSION['user']['employee_id'];
mysqli_query($conn,
    "INSERT INTO attendance (employee_id, login_time)
    VALUES ('$id',NOW())"
);
echo "Attendance marked";
?>