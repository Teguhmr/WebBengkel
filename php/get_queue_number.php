<?php
include 'database_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tanggal'])) {
    $selected_date = mysqli_real_escape_string($conn, $_POST['tanggal']);

    // Fetch the last queue number for the selected date
    $query = "SELECT MAX(no_antrian) AS last_queue FROM kendaraan WHERE DATE(tanggal) = '$selected_date'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['last_queue']) {
        // If there are bookings, increment the queue number
        $next_queue_number = $row['last_queue'] + 1;
    } else {
        // If no bookings for the selected date, start with 1
        $next_queue_number = 1;
    }

    // Return the queue number
    echo $next_queue_number;
}
