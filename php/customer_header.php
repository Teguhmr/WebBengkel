<!-- customer_header.php -->
<header>
  <div class="navbar">
    <div class="logo">Bengkel A3R Team</div>
    <div class="nav-links">
      <a href="customer_home.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'customer_home.php' ? 'active' : ''; ?>">
        <img src="../images/home.png" alt="Home" /> Home
      </a>
      <a href="customer_service.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'customer_service.php' ? 'active' : ''; ?>">
        <img src="../images/service.png" alt="Service" /> Service
      </a>
      <a href="customer_sparepart.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'customer_sparepart.php' ? 'active' : ''; ?>">
        <img src="../images/sparepart.png" alt="Sparepart" /> Sparepart
      </a>
      <a href="../php/logout.php" class="logout">Log Out</a>
    </div>
  </div>
</header>


<!-- You can add CSS styles here or in a separate CSS file -->
<link rel="stylesheet" href="../css/customer-style.css" />
