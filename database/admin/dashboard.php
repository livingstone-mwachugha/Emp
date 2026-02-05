<?php
require '../auth/auth_check.php';
requireAdmin();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Admin Dashboard</h2>

<a href="employees.php">Add Employees</a><br>
<a href="tasks.php">Assign Tasks</a><br>
<a href="attendance.php">View Attendance</a><br>
<a href="leaves.php">Leave Requests</a><br>
<a href="reports.php">Reports</a><br>
<a href="../logout.php">Logout</a>

</body>
</html>


