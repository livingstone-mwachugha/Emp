<?php
include "../config/db.php";

$emp = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM users"));
$task = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM tasks"));
$att = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM attendance"));
?>

<h3>System Reports</h3>

<p>Total Users: <?php echo $emp; ?></p>
<p>Total Tasks: <?php echo $task; ?></p>
<p>Total Attendance Records: <?php echo $att; ?></p>
