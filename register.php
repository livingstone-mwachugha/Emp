<?php
$conn = mysqli_connect("localhost", "root", "", "emp_db");

if (!$conn) {
die("Database connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

// Check if username exists
$check = mysqli_query($conn, "SELECT id FROM users WHERE username='$username'");
if (mysqli_num_rows($check) > 0) {
echo "Username already exists";
exit;
}

// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user
$query = "INSERT INTO users (username, password, role)
        VALUES ('$username', '$hashedPassword', 'employee')";

if (mysqli_query($conn, $query)) {
echo "User created successfully";
} else {
echo "Error creating user";
}
?>
