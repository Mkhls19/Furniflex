<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_material = $_POST['id_material'];
    $nama_mabel = $_POST['nama_mabel'];
    $tgl_produksi = $_POST['tgl_produksi'];
    $jumlah_produksi = $_POST['jumlah_produksi'];
    $produksi_ke = $_POST['produksi_ke'];
    $status_produksi = $_POST['status_produksi'];
    
    $sql = "INSERT INTO produksi VALUES(NULL, '$id_material', '$nama_mabel', '$tgl_produksi', '$jumlah_produksi', '$produksi_ke', '$status_produksi')";

    if(empty($id_material) || empty($nama_mabel) || empty($tgl_produksi) || empty($jumlah_produksi) || empty($produksi_ke) || empty($status_produksi)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'produksi-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produksi Berhasil Ditambahkan');
                window.location = 'produksi.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'produksi-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_material = $_POST['id_material'];
    $nama_mabel = $_POST['nama_mabel'];
    $tgl_produksi = $_POST['tgl_produksi'];
    $jumlah_produksi = $_POST['jumlah_produksi'];
    $produksi_ke = $_POST['produksi_ke'];
    $status_produksi = $_POST['status_produksi'];

    $sql = "UPDATE produksi SET 
            id_material = '$id_material',
            nama_mabel = '$nama_mabel',
            tgl_produksi = '$tgl_produksi',
            jumlah_produksi = '$jumlah_produksi',
            produksi_ke = '$produksi_ke',
            status_produksi = '$status_produksi'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produksi Berhasil Diubah');
                window.location = 'produksi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'produksi-edit.php';
            </script>
        ";
    }
}
// Proses hapus data produksi
elseif (isset($_GET['hapus']) && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validasi apakah id telah diisi
    if (empty($id)) {
        echo "<script>
                alert('Pilih Data Produksi yang Ingin Dihapus');
                window.location = 'produksi.php';
              </script>";
        return;
    }

    // Delete data dari tb_produksi
    $sql = "DELETE FROM produksi WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Data Produksi Berhasil Dihapus');
                window.location = 'produksi.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location = 'produksi.php';
              </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    header('location: produksi.php');
    exit;
}