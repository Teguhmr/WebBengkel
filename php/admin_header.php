<!-- header.php -->
<header>
  <div class="navbar">
    <div class="logo">Bengkel A3R Team</div>
    <div class="nav-links">
          <a href="admin_pelanggan.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'admin_pelanggan.php' ? 'active' : ''; ?>">
            <img src="../images/pelanggan.png" alt="Pelanggan" />
            <span class="nav-text">Pelanggan</span> 
          </a>
          <a href="admin_kendaraan.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'admin_kendaraan.php' ? 'active' : ''; ?>">
            <img src="../images/kendaraan.png" alt="Kendaraan" />
            <span class="nav-text">Service</span> 
          </a>
          <a href="admin_sparepart.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'admin_sparepart.php' ? 'active' : ''; ?>">
            <img src="../images/sparepart.png" alt="Sparepart" />
            <span class="nav-text">Sparepart</span> 
          </a>
          <a href="admin_supplier.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'admin_supplier.php' ? 'active' : ''; ?>">
            <img src="../images/supplier.png" alt="Supplier" />
            <span class="nav-text">Supplier</span> 
          </a>
          <a href="admin_penjualan.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'admin_penjualan.php' ? 'active' : ''; ?>">
            <img src="../images/penjualan.png" alt="Penjualan" />
            <span class="nav-text">Penjualan</span> 
          </a>
      <a href="logout.php" class="logout">Log Out</a>
    </div>
  </div>
</header>

<!-- You can add CSS styles here or in a separate CSS file -->
<link rel="stylesheet" href="../css/admin-style.css" />
