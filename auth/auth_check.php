<?php
session_start();

/* Make sure user is logged in */
function requireLogin() {
    if (!isset($_SESSION['user'])) {
        header("Location: ../auth/login.html");
        exit;
    }
}

/* Employee-only pages */
function requireEmployee() {
    requireLogin();

    if ($_SESSION['user']['role'] !== 'employee') {
        header("Location: ../auth/login.html");
        exit;
    }
}

/* Admin-only pages */
function requireAdmin() {
    requireLogin();

    if ($_SESSION['user']['role'] !== 'admin') {
        header("Location: ../auth/login.html");
        exit;
    }
}

