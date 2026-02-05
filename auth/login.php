<?php
session_start();
require '../config/db.php';

$username = $_POST['username'];   // or email if you prefer
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user'] = [
        'id'   => $user['id'],
        'role' => $user['role'],
        'name' => $user['username']
    ];

    // 🔀 Redirect by role
    if ($user['role'] === 'admin') {
        header("Location: ../admin/dashboard.php");
    } else {
        header("Location: ../employee/dashboard.php");
    }
    exit;
}

header("Location: login.html?error=1");
exit;

