<?php
include 'database_connection.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_sparepart = $_POST['id_sparepart'];
    $nama_sparepart = $_POST['nama_sparepart'];
    $harga_sparepart = $_POST['harga_sparepart'];
    $status = $_POST['status'];
    $id_supplier = $_POST['id_supplier'];

    $query = "INSERT INTO sparepart (id_sparepart, nama_sparepart, harga_sparepart, status, id_supplier) 
              VALUES ('$id_sparepart', '$nama_sparepart', '$harga_sparepart', '$status', '$id_supplier')";

    if (mysqli_query($conn, $query)) {
        echo "New spare part added successfully.";
        header('Location: admin_sparepart.php'); // Redirect back to the spare part admin page
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn); // Close the database connection
}
?>
