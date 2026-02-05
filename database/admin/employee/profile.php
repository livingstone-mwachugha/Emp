<?php
session_start();
$user = $_SESSION['user'];
?>

<h3>My Profile</h3>
<p>Name: <?php echo $user['name']; ?></p>
<p>Username: <?php echo $user['username']; ?></p>
<p>Role: <?php echo $user['role']; ?></p>
