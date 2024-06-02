<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Tambah Produksi </title>
    <link rel="stylesheet" href="../css/style_material.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="../assets/image/logofrnflx2.png" alt="Logo Furniflex" class="logo"/>
    </div>
      <ul class="nav-links">
      <li>
          <a href="../admin.php">
            <i class='bx bx-palette' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../material/material.php">
            <i class='bx bx-cube-alt' ></i>
            <span class="links_name">Material</span>
          </a>
        </li>
        <li>
          <a href="../produksi/produksi.php" class="active">
            <i class='bx bx-archive' ></i>
            <span class="links_name">Produksi</span>
          </a>
        </li>
        <li>
          <a href="../pengiriman/pengiriman.php">
            <i class='bx bx-package' ></i>
            <span class="links_name">Pengiriman</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../logout.php">
           <i class='bx bx-log-out-circle'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <div class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
      </div>
      <div class="profile-details">
        <img src="../assets/image/adminlogo.png" alt="Logo Administrator">
        <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
      </div>
    </nav>
      <div class="home-content">
      <h3>Tambah Data Produksi</h3>
      <div class="form-login">
        <form action="produksi-proses.php" method="post" enctype="multipart/form-data">
          <label for="id_material">ID Material</label>
          <input class="input" type="text" name="id_material" id="id_material" placeholder="ID Material" />
          <label for="nama_mabel">Nama Mabel</label>
          <input class="input" type="text" name="nama_mabel" id="nama_mabel" placeholder="Nama Mabel" />
          <label for="tgl_produksi">Tanggal Produksi</label>
          <input class="input" type="date" name="tgl_produksi" id="tgl_produksi" placeholder="Tanggal Produksi" />
          <label for="jumlah_produksi">Jumlah Produksi</label>
          <input class="input" type="number" name="jumlah_produksi" id="jumlah_produksi" placeholder="Jumlah Produksi" />
          <label for="produksi_ke">Produksi Ke</label>
          <input class="input" type="number" name="produksi_ke" id="produksi_ke" placeholder="Produksi_ke" />
          <label for="status_produksi">Status Produksi</label>
          <input class="input" type="text" name="status_produksi" id="status_produksi" placeholder="Status Produksi" />
          <div align="center">
            <button type="submit" class="btn btn-simpan" name="simpan"> Simpan </button>
            <button type="reset" class="btn btn-reset" name="reset"> Reset </button>
          </div>
        </form>
      </div>
    </div>
    <script>   
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
          sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      }else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>
</body>
</html>