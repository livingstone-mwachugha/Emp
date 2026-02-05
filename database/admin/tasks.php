<?php
session_start();
include "../config/db.php";

if ($_SESSION['user']['role'] != 'admin') {
    header("Location: ../auth/login.html");
}

if (isset($_POST['assign'])) {
    $emp = $_POST['employee'];
    $task = $_POST['task'];

    mysqli_query($conn,
        "INSERT INTO tasks (employee_id, task_title)
         VALUES ($emp, '$task')");
}
?>

<h3>Assign Task</h3>

<form method="POST">
    <input name="task" placeholder="Task title" required><br>

    <select name="employee">
        <?php
        $emps = mysqli_query($conn, "SELECT id,name FROM users WHERE role='employee'");
        while ($e = mysqli_fetch_assoc($emps)) {
            echo "<option value='{$e['id']}'>{$e['name']}</option>";
        }
        ?>
    </select><br>

    <button name="assign">Assign</button>
</form>

<hr>

<h3>Assigned Tasks</h3>
<ul>
<?php
$t = mysqli_query($conn,
    "SELECT users.name, tasks.task_title, tasks.status
    FROM tasks JOIN users ON tasks.employee_id = users.id");

while ($row = mysqli_fetch_assoc($t)) {
    echo "<li>{$row['name']} - {$row['task_title']} ({$row['status']})</li>";
}
?>
</ul>


