<?php
include("../config/db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST['task_id'];
    $status = $_POST['status'];
    mysqli_query($conn,
        "UPDATE tasks SET status='$status' WHERE id='$task_id'"
    );
    echo "Task Updated";
}
?>
<form method="POST">
    <input name="task_id" placeholder="Task ID"><br>
    <select name="status">
        <option>Pending</option>
        <option>In Progress</option>
        <option>Completed</option>
    </select><br>
    <button>Update</button>
</form>