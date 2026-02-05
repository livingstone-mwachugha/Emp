<?php
session_start();
include "../config/db.php";

$user_id = $_SESSION['user']['id'];

$result = mysqli_query($conn,
    "SELECT task_title, status FROM tasks WHERE employee_id=$user_id");
?>

<h3>My Tasks</h3>

<ul>
<?php
while ($t = mysqli_fetch_assoc($result)) {
    echo "<li>{$t['task_title']} - {$t['status']}</li>";
}
?>
</ul>

