<!-- header.php -->
<header>
  <div class="navbar">
    <div class="logo">Bengkel A3R Team</div>
    <div class="nav-links">
          <a href="admin_home.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'admin_home.php' ? 'active' : ''; ?>">
            <img src="../images/home.png" alt="Home" /> 
            <span class="nav-text">Home</span> </a>
          <a href="admin_pelanggan.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'admin_pelanggan.php' ? 'active' : ''; ?>"><img src="../images/pelanggan.png" alt="Pelanggan" /></a>
          <a href="admin_kendaraan.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'admin_kendaraan.php' ? 'active' : ''; ?>"><img src="../images/kendaraan.png" alt="kendaraan" /></a>
          <a href="admin_sparepart.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'admin_sparepart.php' ? 'active' : ''; ?>"><img src="../images/sparepart.png" alt="Sparepart" /></a>
          <a href="admin_supplier.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'admin_supplier.php' ? 'active' : ''; ?>"><img src="../images/supplier.png" alt="Supplier" /></a>
          <a href="admin_penjualan.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'admin_penjualan.php' ? 'active' : ''; ?>"><img src="../images/penjualan.png" alt="Penjualan" /></a>
      <a href="../php/logout.php" class="logout">Log Out</a>
    </div>
  </div>
</header>

<!-- You can add CSS styles here or in a separate CSS file -->
<link rel="stylesheet" href="../css/admin-style.css" />
