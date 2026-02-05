<?php
session_start();
include "../config/db.php";

$user_id = $_SESSION['user']['id'];

if (isset($_POST['apply'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];

    mysqli_query($conn,
        "INSERT INTO leaves (employee_id, start_date, end_date)
         VALUES ($user_id, '$start', '$end')");

    $msg = "Leave request submitted";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Apply Leave</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h3>Apply Leave</h3>

<form method="POST">
    <label>Start Date</label><br>
    <input type="date" name="start" required><br><br>

    <label>End Date</label><br>
    <input type="date" name="end" required><br><br>

    <button name="apply">Submit Leave</button>
</form>

<?php if (isset($msg)) echo "<p>$msg</p>"; ?>

</body>
</html>
