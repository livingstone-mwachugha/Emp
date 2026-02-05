<?php
session_start();
include "../config/db.php";

if ($_SESSION['user']['role'] != 'admin') {
    header("Location: ../auth/login.html");
}

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    mysqli_query($conn,
        "INSERT INTO users (name, username, password, role)
        VALUES ('$name','$username','$password','$role')");
}
?>

<h3>Add Employee</h3>

<form method="POST">
    <input name="name" placeholder="Full Name" required><br>
    <input name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <select name="role">
        <option value="employee">Employee</option>
        <option value="admin">Admin</option>
    </select><br>

    <button name="add">Add User</button>
</form>

<hr>

<h3>All Users</h3>
<ul>
<?php
$res = mysqli_query($conn, "SELECT name, role FROM users");
while ($u = mysqli_fetch_assoc($res)) {
    echo "<li>{$u['name']} ({$u['role']})</li>";
}
?>
</ul>
