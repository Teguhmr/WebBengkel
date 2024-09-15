<?php
include 'database_connection.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_sparepart = $_POST['id_sparepart'];

    // SQL query to delete the spare part
    $query = "DELETE FROM sparepart WHERE id_sparepart = '$id_sparepart'";

    if (mysqli_query($conn, $query)) {
        echo "Spare part deleted successfully.";
        header('Location: admin_sparepart.php'); // Redirect back to the spare part admin page
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn); // Close the database connection
}
?>
