<?php
session_start(); // Always start session at the top of the page

// Prevent back button after logout by disabling cache
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.

// Check if session is valid
if (!isset($_SESSION['id_user'])) {
    header('Location: ../index.php'); // Redirect to login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan - Bengkel A3R Team</title>
    <link rel="stylesheet" href="../css/customer-style.css">
    <link rel="stylesheet" href="../css/customer-service-style.css">
</head>

<body>
    <!-- Include header and navbar -->
    <?php include 'customer_header.php'; ?>

    <div class="table-container">
        <h2>KENDARAAN</h2>

        <div class="search-bar">
            <label for="search">Cari :</label>
            <input type="text" id="search" placeholder="Search...">
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nomor Kendaraan</th>
                    <th>Nama Pelanggan</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'database_connection.php'; // Include your DB connection

                $query = "SELECT id_kendaraan, nama_pelanggan, keterangan, tanggal, status FROM kendaraan";
                $result = mysqli_query($conn, $query);

                function getStatusClass($status)
                {
                    switch ($status) {
                        case 0:
                            return 'status-waiting'; // Menunggu
                        case 1:
                            return 'status-repairing'; // Sedang Diperbaiki
                        case 2:
                            return 'status-completed'; // Selesai
                        default:
                            return ''; // Fallback if an unexpected status is found
                    }
                }

                function getStatusText($status)
                {
                    switch ($status) {
                        case 0:
                            return 'Menunggu';
                        case 1:
                            return 'Sedang Diperbaiki';
                        case 2:
                            return 'Selesai';
                        default:
                            return 'Unknown'; // Fallback if an unexpected status is found
                    }
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    $statusClass = getStatusClass($row['status']); // Should return a string
                    $statusText = getStatusText($row['status']); // Should return a string
                    $formattedDate = date('j F Y', strtotime($row['tanggal'])); // Format the date
                    echo "<tr>";
                    echo "<td>{$row['id_kendaraan']}</td>";
                    echo "<td>{$row['nama_pelanggan']}</td>";
                    echo "<td>{$row['keterangan']}</td>";
                    echo "<td>{$formattedDate}</td>";
                    echo "<td class='{$statusClass}'>{$statusText}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>