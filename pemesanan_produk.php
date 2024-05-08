<!-- pemesanan_produk.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Produk</title>
    <link rel="stylesheet" href="css/style_pemesanan.css">
</head>
<body>
    <div class="container">
        <h1>Form Pemesanan Produk</h1>
        <table>
            <tr>
                <th>Gambar</th>
                <th>Produk</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td><img id="gambar" src="" alt="Produk"></td> <!-- Menambahkan id untuk gambar -->
                <td id="nama_produk">Meja Kayu</td> <!-- Menambahkan id untuk nama produk -->
                <td>Rp 500.000</td>
            </tr>
        </table>
        <form action="proses_pemesanan.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>
            <input type="submit" value="Pesan Produk">
        </form>
    </div>
     <script>
        // Ambil nilai parameter dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const produk = urlParams.get('produk');
        const gambar = urlParams.get('gambar');

        // Isi form dengan nilai parameter
        document.getElementById("gambar").src = gambar;
        document.getElementById("nama_produk").textContent = produk;
        
        document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Menghentikan pengiriman formulir default

            // Lakukan validasi data formulir di sini (jika diperlukan)
            const nama = document.getElementById('nama').value.trim();
            const email = document.getElementById('email').value.trim();
            const alamat = document.getElementById('alamat').value.trim();

            // Cek apakah semua data telah diisi
            if (nama === "" || email === "" || alamat === "") {
                alert('Isi semua data terlebih dahulu.');
                return; // Berhenti jika ada data yang kosong
            }

            // Jika semua data terisi, tampilkan pesan pemberitahuan
            alert('Pesanan Anda akan diproses lebih lanjut. Terima kasih.');

            // Reset formulir (jika perlu)
            form.reset();
        });
    });
    </script>
</body>
</html>
