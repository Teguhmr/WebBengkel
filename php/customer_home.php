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
include 'database_connection.php'; // Include DB connection
// Query to get queue numbers for all users whose status is "Sedang Diperbaiki"
$query_queue = "SELECT no_antrian FROM kendaraan WHERE status = 1";
$result_queue = mysqli_query($conn, $query_queue);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customer Home - Bengkel A3R Team</title>
  <link rel="stylesheet" href="../css/customer-style.css" />
</head>

<body>
  <!-- Include header and navbar -->
  <?php include 'customer_header.php'; ?>

  <!-- Main content specific to the customer home page -->
  <main>
    <div class="welcome-section">
      <img src="../images/logo-bengkel.png" alt="Mechanic Image" />
      <h1>Selamat Datang di</h1>
      <h2>BENGKEL A3R TEAM</h2>
      <p>Melayani kebutuhan kendaraan anda</p>
    </div>
    <div class="queue-container">
      <h2>Nomor Antrian Service Sedang Berjalan</h2>
      <?php if (mysqli_num_rows($result_queue) > 0): ?>
        <div class="queue-box">
          <?php while ($row = mysqli_fetch_assoc($result_queue)): ?>
            <div class="queue-item">
              <p><?php echo $row['no_antrian']; ?></p>
            </div>
          <?php endwhile; ?>
        </div>
      <?php else: ?>
        <p>Tidak ada antrian kendaraan yang sedang diperbaiki saat ini.</p>
      <?php endif; ?>
    </div>
  </main>
</body>

</html>