<?php
require '../auth/auth_check.php';
requireEmployee();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Employee Dashboard</h2>

<a href="tasks.php">My Tasks</a><br>
<a href="attendance.php">Mark Attendance</a><br>
<a href="leave.php">Apply Leave</a><br>
<a href="profile.php">Profile</a><br>
<a href="../logout.php">Logout</a>

</body>
</html>


