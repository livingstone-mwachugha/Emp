<?php
session_start();
echo "Welcome " . $_SESSION['user']['name'];
?>
<ul>
<li><a href="attendance.php">Mark Attendance</a></li>
<li><a href="submit_task.php">Update Task</a></li>
<li><a href="../auth/logout.php">Logout</a></li>
</ul>