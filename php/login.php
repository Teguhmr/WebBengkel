<?php
session_start();

// Database connection settings
include 'database_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id_user, username, password, role FROM user WHERE username = ?");
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_user, $username, $stored_password, $role);
        $stmt->fetch();

        if ($input_password === $stored_password) {
            // Start session and set role
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            $_SESSION['id_user'] = $id_user;

            // Redirect based on role
            if ($role === 'admin') {
                header("Location: ../php/admin_pelanggan.php");
            } elseif ($role === 'customer') {
                header("Location: ../php/customer_home.php");
            }
            exit();
        } else {
            header("Location: ../index.php?error=invalid");
        }
    } else {
        header("Location: ../index.php?error=invalid");
    }

    $stmt->close();
}

$conn->close();
