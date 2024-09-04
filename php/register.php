<?php
// Database connection settings
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bengkel";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize user inputs
    $username = $conn->real_escape_string(trim($_POST['username']));
    $name = $conn->real_escape_string(trim($_POST['name']));
    $address = $conn->real_escape_string(trim($_POST['address']));
    $phone = $conn->real_escape_string(trim($_POST['phone']));
    $vehicle_number = $conn->real_escape_string(trim($_POST['vehicle_number']));
    $password = $conn->real_escape_string(trim($_POST['password']));
    
    // Basic validation
    if (empty($username) || empty($name) || empty($address) || empty($phone) || empty($vehicle_number) || empty($password)) {
        echo "All fields are required.";
    } else {
        // Prepare and execute the statement
        $stmt = $conn->prepare("INSERT INTO user (username, nama_user, alamat, no_hp, no_kendaraan , password, role) VALUES (?, ?, ?, ?, ?, ?, 'customer')");
        $stmt->bind_param("ssssss", $username, $name, $address, $phone, $vehicle_number, $password);
        
        if ($stmt->execute()) {
            header("Location: ../index.php?success=create");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();