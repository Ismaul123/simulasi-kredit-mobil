<?php
$hasil = false;

if (isset($_POST['hitung'])) {
    $harga = (float) $_POST['harga'];
    $dp = (float) $_POST['dp'];
    $tenor = (int) $_POST['tenor'];

    if ($harga > 0 && $tenor > 0) {
        $bunga = $harga * 20 / 100;
        $uangDP = $harga * $dp / 100;
        $pinjaman = ($harga + $bunga) - $uangDP;
        $bulan = $tenor * 12;
        $angsuran = $pinjaman / $bulan;
        $hasil = true;
    }
}

function rupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoCredit</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .navbar-collapse {
            visibility: visible !important;
        }

        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
            }
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold" href="#beranda" style="color:#1d4ed8 !important;">
            AutoCredit
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#beranda" style="color:#212529 !important;">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#tentang" style="color:#212529 !important;">
                        Tentang
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#simulasi" style="color:#212529 !important;">
                        Simulasi
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#kontak" style="color:#212529 !important;">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section id="beranda" class="bg-blue-700 text-white py-20">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-4">
            Simulasi Kredit Mobil
        </h2>
        <p class="text-lg mb-6">
            Hitung perkiraan cicilan mobil dengan mudah dan cepat.
        </p>
        <a href="#simulasi" class="bg-white text-blue-700 px-6 py-3 rounded-lg">
            Mulai Simulasi
        </a>
    </div>
</section>

<!-- TENTANG -->
<section id="tentang" class="py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
        
        <h2 class="text-3xl font-bold mb-4">Tentang AutoCredit</h2>
        <div class="card text-center">

  <div class="card-body">
    <h5 class="card-title">AutoCredit adalah website sederhana untuk membantu pengguna</h5>
    <p class="card-text">
            menghitung perkiraan kredit mobil berdasarkan harga, DP, dan tenor.</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Temukan</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Koleksi</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Temukan Kenyamanan Anda Dengan Pengalaman Yang Tak Terlupakan.</
    <div class="text-center">
  <img src="https://tse3.mm.bing.net/th/id/OIP.2i4k-LPOHTohricJpbQ0lgHaE7?r=0&w=600&h=399&rs=1&pid=ImgDetMain&o=7&rm=3" class="rounded" alt="...">
  <p class="p-2"></p>
  <img src="https://cdn1-production-images-kly.akamaized.net/Tfz04nkxPPv_BNtWpU_srwtI6DY=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4894715/original/022193700_1721271998-WhatsApp_Image_2024-07-18_at_7.51.09_AM.jpeg" class="rounded" alt="...">
  <p class="p-2"></p>
  <img src="https://carsgallery.co.id/blog/wp-content/uploads/2024/07/mobil-mewah-keluarga-2-1.jpg" class="rounded" alt="...">
</div>
  </div>

    </div>
    
    
</section>

<!-- KEUNGGULAN -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-10">
            Kenapa Menggunakan AutoCredit?
        </h2>

        <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>    
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>      
      </div>
    </div>
  </div>
</div>

<p class="p-5"></p>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="p-6 shadow rounded-lg">
                <h3 class="font-bold text-xl mb-2">Mudah</h3>
                <p>Penggunaan sederhana dan mudah dipahami.</p>
            </div>

            <div class="p-6 shadow rounded-lg">
                <h3 class="font-bold text-xl mb-2">Cepat</h3>
                <p>Hasil simulasi langsung muncul setelah dihitung.</p>
            </div>

            <div class="p-6 shadow rounded-lg">
                <h3 class="font-bold text-xl mb-2">Praktis</h3>
                <p>Tidak perlu menghitung secara manual.</p>
            </div>
        </div>
    </div>
</section>

<!-- SIMULASI -->
<section id="simulasi" class="py-16">
    <div class="max-w-3xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-8">
            Simulasi Kredit
        </h2>

        <form method="POST" class="bg-white p-6 rounded-lg shadow">

            <!-- HARGA -->
            <label class="font-semibold">Harga Mobil</label>
            <input
                type="number"
                name="harga"
                placeholder="Contoh: 200000000"
                required
                class="w-full border p-3 rounded mt-2 mb-5"
            >

            <!-- DP -->
            <label class="font-semibold">DP</label>
            <select
                name="dp"
                class="w-full border p-3 rounded mt-2 mb-5"
            >
                <?php
                for ($i = 10; $i <= 80; $i += 10) {
                    echo "<option value='$i'>$i%</option>";
                }
                ?>
            </select>

            <!-- TENOR -->
            <label class="font-semibold">Tenor</label>

            <div class="grid grid-cols-5 gap-2 mt-2 mb-6">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo "
                    <label class='border p-3 text-center rounded cursor-pointer'>
                        <input type='radio' name='tenor' value='$i' " .
                        ($i == 5 ? "checked" : "") .
                        ">
                        $i Tahun
                    </label>";
                }
                ?>
            </div>

            <button
                type="submit"
                name="hitung"
                class="w-full bg-blue-700 text-white py-3 rounded-lg"
            >
                Hitung Kredit
            </button>
        </form>

        <!-- HASIL -->
        <?php if ($hasil): ?>

        <div class="bg-blue-50 mt-6 p-6 rounded-lg shadow">
            <h3 class="text-2xl font-bold mb-5">
                Hasil Simulasi
            </h3>

            <div class="space-y-3">
                <p>
                    Harga Mobil:
                    <b><?= rupiah($harga) ?></b>
                </p>

                <p>
                    DP:
                    <b><?= $dp ?>%</b>
                </p>

                <p>
                    Nominal DP:
                    <b><?= rupiah($uangDP) ?></b>
                </p>

                <p>
                    Bunga:
                    <b><?= rupiah($bunga) ?></b>
                </p>

                <p>
                    Total Pinjaman:
                    <b><?= rupiah($pinjaman) ?></b>
                </p>

                <p>
                    Tenor:
                    <b><?= $tenor ?> Tahun</b>
                </p>

                <p class="text-xl">
                    Cicilan per Bulan:
                    <b class="text-blue-700">
                        <?= rupiah($angsuran) ?>
                    </b>
                </p>
            </div>
        </div>

        <?php endif; ?>

    </div>
</section>

<!-- CARA MENGGUNAKAN -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-10">
            Cara Menggunakan
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="text-center p-6">
                <div class="text-4xl font-bold text-blue-700">1</div>
                <h3 class="font-bold mt-3">Masukkan Harga</h3>
                <p>Masukkan harga mobil yang ingin dihitung.</p>
            </div>

            <div class="text-center p-6">
                <div class="text-4xl font-bold text-blue-700">2</div>
                <h3 class="font-bold mt-3">Pilih DP</h3>
                <p>Pilih persentase uang muka.</p>
            </div>

            <div class="text-center p-6">
                <div class="text-4xl font-bold text-blue-700">3</div>
                <h3 class="font-bold mt-3">Lihat Hasil</h3>
                <p>Tekan tombol hitung untuk melihat cicilan.</p>
            </div>

        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-16">
    <div class="max-w-3xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-8">
            FAQ
        </h2>

        <details class="bg-white p-4 rounded mb-3">
            <summary class="font-bold cursor-pointer">
                Apa itu AutoCredit?
            </summary>
            <p class="mt-2">
                AutoCredit adalah simulator sederhana untuk menghitung
                perkiraan cicilan kredit mobil.
            </p>
        </details>

        <details class="bg-white p-4 rounded mb-3">
            <summary class="font-bold cursor-pointer">
                Apakah hasilnya merupakan harga sebenarnya?
            </summary>
            <p class="mt-2">
                Tidak. Hasil hanya berupa simulasi berdasarkan rumus
                yang digunakan pada website.
            </p>
        </details>

    </div>
</section>

<!-- KONTAK -->
<section id="kontak" class="bg-blue-700 text-white py-12">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-3">Hubungi Kami</h2>
        <p>Email: info@autocredit.com</p>
        <p>Telepon: 0812-3456-7890</p>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white text-center p-2">
    <p>&copy; 2026 AutoCredit. All Rights Reserved.</p>
</footer>

</body>
</html>
