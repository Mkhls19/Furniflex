<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'material.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM bahan_material WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Edit Bahan material </title>
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
        <img src="../assets/image/adminlogo.png" alt="Logo Administrator">
          <span class="admin_name"><?php echo $_SESSION['username'];?></span>
      </div>
    </nav>
     <div class="home-content">
      <h3>Edit Data Material</h3>
	   <div class="form-login">
      <form action="material-proses.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <label for="kategori">Kategori</label>
              <input class="input" type="text" name="kategori" id="kategori" value="<?= $data['kategori'] ?>"/>
              <label for="jumlah">Jumlah</label>
              <input class="input" type="number" name="jumlah" id="jumlah" value="<?= $data['jumlah']?>"/>
              <label for="harga">Harga</label>
              <input class="input" type="number" name="harga" id="harga" value="<?= $data['harga']?>"/>
              <div align="center">
              <button type="submit" class="btn btn-simpan" name="edit"> Edit </button>
              <button type="reset" class="btn btn-reset" name="reset"> Reset </button>
              </div> 
       </form>
	   </div>
	</div>
</div>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	   sidebarBtn.onclick = function () {
		sidebar.classList.toggle("active");
		   if (sidebar.classList.contains("active")) {
			sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
  </script>
</body>
</php>
