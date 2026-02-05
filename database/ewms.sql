-- Create database
CREATE DATABASE IF NOT EXISTS ewms;
USE ewms;

-- =========================
-- Users table
-- =========================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin','employee')
    INSERT INTO users (name, username, password, role)
VALUES (
    'Mwachi User',
    'mwachu',
    '$2y$10$QXrQ2GkP7P4YzC9u5wN8eOd6mZy0Fv7nK3dFz2C6h5mPz5m0kYpLa',
    'employee'
    
);

);


-- =========================
-- Tasks table
-- =========================
CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) UNIQUE,
        password VARCHAR(255),
        role VARCHAR(50) DEFAULT 'employee',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

);

-- =========================
-- Attendance table
-- =========================
CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id VARCHAR(20) NOT NULL,
    login_time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (employee_id) REFERENCES users(employee_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

-- =========================
-- Default Admin User
-- =========================
INSERT INTO users (employee_id, name, password, role)
VALUES ('ADM001', 'Admin', SHA2('1234', 256), 'admin');
