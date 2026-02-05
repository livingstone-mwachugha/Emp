<?php
require '../config/db.php';

$username = 'mwachuliving@gmail.com';
$password = '987654321';
$role     = 'admin';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare(
    "INSERT INTO users (username, password, role) VALUES (?, ?, ?)"
);

$stmt->execute([$username, $hashedPassword, $role]);

echo "User created successfully";
 