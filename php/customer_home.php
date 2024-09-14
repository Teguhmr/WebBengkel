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
  </main>
</body>

</html>