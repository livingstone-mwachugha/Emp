<?php
session_start();
include "../config/db.php";

if ($_SESSION['user']['role'] != 'admin') {
    header("Location: ../auth/login.html");
}

if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    mysqli_query($conn, "UPDATE leaves SET status='Approved' WHERE id=$id");
}

if (isset($_GET['reject'])) {
    $id = $_GET['reject'];
    mysqli_query($conn, "UPDATE leaves SET status='Rejected' WHERE id=$id");
}

$result = mysqli_query($conn,
    "SELECT leaves.id, users.name, leaves.start_date, leaves.end_date, leaves.status
    FROM leaves
    JOIN users ON leaves.employee_id = users.id");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leave Requests</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h3>Leave Requests</h3>

<table border="1" cellpadding="8">
<tr>
    <th>Employee</th>
    <th>Start</th>
    <th>End</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while ($l = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $l['name']; ?></td>
    <td><?php echo $l['start_date']; ?></td>
    <td><?php echo $l['end_date']; ?></td>
    <td><?php echo $l['status']; ?></td>
    <td>
        <a href="?approve=<?php echo $l['id']; ?>">Approve</a> |
        <a href="?reject=<?php echo $l['id']; ?>">Reject</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
