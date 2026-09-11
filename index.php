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
</head>

<body class="bg-gray-100 text-gray-800">

<!-- NAVBAR -->
<nav class="bg-blue-700 text-white p-4">
    <div class="max-w-6xl mx-auto flex justify-between">
        <h1 class="font-bold text-xl">AutoCredit</h1>
        <div class="space-x-4">
            <a href="#beranda">Beranda</a>
            <a href="#tentang">Tentang</a>
            <a href="#simulasi">Simulasi</a>
            <a href="#kontak">Kontak</a>
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
        <p class="max-w-2xl mx-auto">
            AutoCredit adalah website sederhana untuk membantu pengguna
            menghitung perkiraan kredit mobil berdasarkan harga, DP, dan tenor.
        </p>
    </div>
</section>

<!-- KEUNGGULAN -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-10">
            Kenapa Menggunakan AutoCredit?
        </h2>

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
<footer class="bg-gray-900 text-white text-center p-5">
    <p>&copy; 2026 AutoCredit. All Rights Reserved.</p>
</footer>

</body>
</html>