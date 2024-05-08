<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurniFlex-Produksi Mebel</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>FurniFlex</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#produk">Produk</a></li>
                    <li><a href="login.html" class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
        <!-- <img src="assets/image/12.jpg"/> -->
            <div class="kolom">
                <p class="deskripsi">Mebel Berkualitas Untuk Rumah Anda</p>
                <h2>Desain Kreatif, Kualitas Terbaik</h2>
                <p>Dapatkan koleksi mebel terbaik dari FurniFlex.</p>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <div class="slides"> 
            <div class="slide"> 
                <img src="assets/image/kursi2.png" alt="Gambar 1"> 
            </div> 
            <div class="slide"> 
                <img src="assets/image/meja2.png" alt="Gambar 2"> 
            </div> 
            <div class="slide"> 
                <img src="assets/image/rak2.png" alt="Gambar 3"> 
            </div> 
            <div class="slide"> 
                <img src="assets/image/meja3.png" alt="Gambar 4"> 
            </div> 
            <div class="slide"> 
                <img src="assets/image/kursi3.png" alt="Gambar 5"> 
            </div> 
            <div class="navigation"> 
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
                <a class="next" onclick="plusSlides(1)">&#10095;</a> 
            </div> 
        </div> 
    
        <script> 
            var slideIndex = 1; 
            showSlides(slideIndex); 
    
            function plusSlides(n) { 
                showSlides(slideIndex += n); 
            } 
    
            function showSlides(n) { 
                var i; 
                var slides = document.getElementsByClassName("slide"); 
                if (n > slides.length) { 
                    slideIndex = 1; 
                } 
                if (n < 1) { 
                    slideIndex = slides.length; 
                } 
                for (i = 0; i < slides.length; i++) { 
                    slides[i].style.display = "none"; 
                } 
                slides[slideIndex - 1].style.display = "block"; 
            } 
        </script>

        <!-- untuk Deskripsi_singkat -->
        <section id="tentang">
            <!-- <img src="assets/image/11.jpg"/> -->
            <div class="kolom">
                <p class="deskripsi">Deskripsi Singkat</p>
                <h2>FurniFlex-Produksi Mebel</h2>
                <p>FurniFlex adalah sebuah perusahaan produksi mebel yang berdedikasi untuk memberikan solusi furnitur yang berkualitas tinggi bagi rumah dan bisnis. Dengan fokus pada pembuatan berbagai jenis meja, kursi, lemari, dan produk furnitur lainnya, FurniFlex menonjolkan kualitas bahan dan desain yang inovatif. Setiap produk diproduksi dengan menggunakan teknologi terkini dan pengrajin yang ahli, menjadikan FurniFlex sebagai pilihan utama bagi mereka yang mengutamakan keindahan dan ketahanan dalam furnitur mereka</p>
                <p>Komitmen FurniFlex terhadap keunggulan tidak hanya tercermin dalam produk-produknya, tetapi juga dalam pendekatan berkelanjutan terhadap produksi. Perusahaan ini berupaya untuk memanfaatkan bahan-bahan ramah lingkungan dan praktik produksi yang bertanggung jawab secara sosial. Dengan demikian, FurniFlex bukan hanya menjadi penyedia furnitur yang terpercaya, tetapi juga mitra yang peduli akan lingkungan dan masyarakat</p>
                <p><a href="" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk Produk -->
        <section id="produk">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Beberapa Produk Furniture Kami</p>
                    <h2>Furniture</h2>
                    <p>Dengan fokus pada pembuatan berbagai jenis meja, kursi, lemari, dan produk furnitur lainnya, FurniFlex menonjolkan kualitas bahan dan desain yang inovatif.</p>
                </div>

                <div class="produk-list">
                <div class="kartu-produk" id="produk1">
                    <img src="assets/image/meja1.jpg"/>
                    <p>Meja</p>
                    <button class="pesan-button" onclick="pesanProduk('Meja', 'assets/image/meja1.jpg')"><a href="pemesanan_produk.php?produk=Meja&gambar=assets/image/meja1.jpg">Pesan</a></button>
                </div>
                <div class="kartu-produk" id="produk2">
                    <img src="assets/image/kursi1.jpg"/>
                    <p>Kursi</p>
                    <button class="pesan-button" onclick="pesanProduk('Kursi', 'assets/image/kursi1.jpg')"><a href="pemesanan_produk.php?produk=Kursi&gambar=assets/image/kursi1.jpg">Pesan</a></button>
                </div>
                <div class="kartu-produk" id="produk3">
                    <img src="assets/image/lemari1.jpg"/>
                    <p>Lemari</p>
                    <button class="pesan-button" onclick="pesanProduk('Lemari', 'assets/image/lemari1.jpg')"><a href="pemesanan_produk.php?produk=Lemari&gambar=assets/image/lemari1.jpg">Pesan</a></button>
                </div>
                <div class="kartu-produk" id="produk4">
                    <img src="assets/image/rak1.jpg"/>
                    <p>Rak Sepatu</p>
                    <button class="pesan-button" onclick="pesanProduk('Rak Sepatu', 'assets/image/rak1.jpg')"><a href="pemesanan_produk.php?produk=Rak Sepatu&gambar=assets/image/rak1.jpg">Pesan</a></button>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Fungsi untuk menangani pesanan produk
        function pesanProduk(namaProduk, gambarProduk) {
            // Mengisi nilai pada form pemesanan dengan data produk yang dipilih
            document.getElementById("gambar").src = gambarProduk;
            document.getElementById("nama_produk").textContent = namaProduk;
        }
    </script>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>FurniFlex</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>
