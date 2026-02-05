<?php
session_start();
include "../config/db.php";

$user_id = $_SESSION['user']['id'];

if (isset($_POST['mark'])) {
    mysqli_query($conn, "INSERT INTO attendance (employee_id) VALUES ($user_id)");
    $msg = "Attendance marked";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance</title>
</head>
<body>

<h3>Attendance</h3>

<form method="POST">
    <button name="mark">Check In</button>
</form>

<?php if (isset($msg)) echo $msg; ?>

</body>
</html>
