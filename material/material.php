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
    <title> Material</title>
    <link rel="stylesheet" href="../css/style_material.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="../assets/image/logo1.png" alt="Logo Furniflex" class="logo"/>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../admin.php">
            <i class='bx bx-palette' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../material/material.php" class="active">
            <i class='bx bx-cube-alt' ></i>
            <span class="links_name">Material</span>
          </a>
        </li>
        <li>
          <a href="../produksi/produksi.php">
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
        <img src="../assets/image/Adminlogo.png" alt="Logo Administrator">
        <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
      </div>
    </nav>
  <div class="home-content">
    <h2>Data Bahan Material</h2>
    <button class= "btn btn-tambah">
      <i class="bx bx-plus"></i><a href="material-entry.php"> Tambah Data </a>
		</button>
		<table class="table-data">
    <thead>
          <tr>
            <th style="width: 25%">ID</th>
            <th style="width: 25%">Kategori Bahan</th>
            <th style="width: 25%">Harga</th>
            <th style="width: 25%">Jumlah</th>
            <th style="width: 25%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include '../koneksi.php';
            $sql = "SELECT * FROM bahan_material";
            $result = mysqli_query($koneksi, $sql);
            if (mysqli_num_rows($result) == 0) {
              echo "
                <tr>
                  <td colspan='5' align='center'>Data Kosong</td>
                </tr>
              ";
            } else {
              while ($data = mysqli_fetch_assoc($result)) {
                echo "
                  <tr>
                    <td>{$data['ID']}</td>
                    <td>{$data['kategori']}</td>
                    <td>{$data['harga']}</td>
                    <td>{$data['jumlah']}</td>
                    <td>
                      <button class='btn btn-edit'>
                        <a href='material-edit.php?id={$data['ID']}'><i class='bx bx-edit'></i> Edit </a>
                      </button>
                      <button class='btn btn-delete'>
                        <a href='material-proses.php?id={$data['ID']}'><i class='bx bx-trash'></i> Hapus </a>
                      </button>
                    </td>
                  </tr>
                ";
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      } else {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>
</body>
</html>