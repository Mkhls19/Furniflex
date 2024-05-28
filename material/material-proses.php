<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    var_dump($kategori, $jumlah, $harga);

    $sql = "INSERT INTO bahan_material VALUES(NULL, '$kategori', '$jumlah', '$harga')";

    if(empty($kategori) || empty($jumlah)|| empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'material-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Bahan Material Berhasil Ditambahkan');
                window.location = 'material.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'material-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id    = $_POST['id'];
    $kategori = $_POST['kategori'];
    $jumlah= $_POST['jumlah'];
    $harga = $_POST['harga'];

    $sql = "UPDATE bahan_material SET 
            kategori = '$kategori',
            jumlah = '$jumlah',
            harga = '$harga'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Bahan Material Berhasil Diubah');
                window.location = 'material.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'material-edit.php';
            </script>
        ";
    }
}
elseif (isset($_GET['hapus']) && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validasi apakah id telah diisi
    if (empty($id)) {
        echo "<script>
                alert('Pilih Data Bahan Material yang Ingin Dihapus');
                window.location = 'material.php';
              </script>";
        return;
    }

    // Delete data dari tabel bahan_material
    $sql = "DELETE FROM bahan_material WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Data Bahan Material Berhasil Dihapus');
                window.location = 'material.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location = 'material.php';
              </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    header('location: material.php');
    exit;
}