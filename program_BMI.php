<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator Premium</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

<!-- Background Blur -->
<div class="background-circle one"></div>
<div class="background-circle two"></div>

<div class="container">

    <div class="glass-card">

        <!-- HEADER -->
        <div class="header">

            <h1>
                <i class="fa-solid fa-heart-pulse"></i>
                BMI Calculator
            </h1>

            <p>
                Hitung Body Mass Index dan ketahui kategori berat badan Anda
            </p>

        </div>

        <!-- FORM -->
        <form method="POST" id="bmiForm">

            <div class="input-box">

                <label>
                    <i class="fa-solid fa-user"></i>
                    Nama Lengkap
                </label>

                <input
                type="text"
                name="nama"
                placeholder="Masukkan nama..."
                required>

            </div>

            <div class="input-box">

                <label>
                    <i class="fa-solid fa-weight-scale"></i>
                    Berat Badan (kg)
                </label>

                <input
                type="number"
                step="0.1"
                name="berat"
                placeholder="Contoh: 55"
                required>

            </div>

            <div class="input-box">

                <label>
                    <i class="fa-solid fa-ruler-vertical"></i>
                    Tinggi Badan (cm)
                </label>

                <input
                type="number"
                step="0.1"
                name="tinggi"
                placeholder="Contoh: 170"
                required>

            </div>

            <button type="submit" name="hitung">

                <i class="fa-solid fa-calculator"></i>
                Hitung BMI

            </button>

        </form>

        <!-- PHP BMI -->
        <?php

        if(isset($_POST['hitung'])){

            $nama = $_POST['nama'];
            $berat = $_POST['berat'];
            $tinggi = $_POST['tinggi'];

            // Rumus BMI
            $bmi = $berat / pow(($tinggi / 100),2);

            // Format angka
            $bmiFix = number_format($bmi,1);

            // Kategori BMI
            if($bmi < 18.5){

                $kategori = "Kurus";
                $warna = "yellow";
                $emoji = "🥗";
                $tips = "Perbanyak nutrisi dan protein untuk menaikkan berat badan.";
                $progress = 25;

            }
            elseif($bmi <= 24.9){

                $kategori = "Normal";
                $warna = "green";
                $emoji = "💪";
                $tips = "Pertahankan pola hidup sehat dan olahraga rutin.";
                $progress = 60;

            }
            elseif($bmi <= 29.9){

                $kategori = "Gemuk";
                $warna = "orange";
                $emoji = "⚠";
                $tips = "Kurangi makanan tinggi gula dan perbanyak olahraga.";
                $progress = 80;

            }
            else{

                $kategori = "Obesitas";
                $warna = "red";
                $emoji = "🚨";
                $tips = "Mulailah pola hidup sehat dan konsultasikan dengan dokter.";
                $progress = 100;

            }

        ?>

        <!-- HASIL BMI -->
        <div class="result-card">

            <h2>
                <?php echo $emoji; ?>
                Hasil BMI
            </h2>

            <h3>
                <?php echo $nama; ?>
            </h3>

            <div class="bmi-score">
                <?php echo $bmiFix; ?>
            </div>

            <div class="kategori <?php echo $warna; ?>">
                <?php echo $kategori; ?>
            </div>

            <!-- Progress -->
            <div class="progress-container">

                <div
                class="progress-bar <?php echo $warna; ?>"
                style="width: <?php echo $progress; ?>%">

                </div>

            </div>

            <!-- Tips -->
            <div class="tips">

                <i class="fa-solid fa-lightbulb"></i>

                <?php echo $tips; ?>

            </div>

        </div>

        <?php } ?>

        <!-- PENJELASAN BMI -->
        <div class="info-box">

            <h2>
                <i class="fa-solid fa-circle-info"></i>
                Apa Itu BMI?
            </h2>

            <p>
                BMI (Body Mass Index) adalah metode perhitungan
                untuk mengetahui apakah berat badan seseorang
                tergolong ideal berdasarkan tinggi badan.
            </p>

            <div class="rumus-box">

                BMI = Berat Badan / (Tinggi Badan dalam meter)²

            </div>

            <h3>Cara Kerja Kalkulator BMI</h3>

            <ul>

                <li>Masukkan nama pengguna</li>

                <li>Masukkan berat badan dalam kilogram (kg)</li>

                <li>Masukkan tinggi badan dalam centimeter (cm)</li>

                <li>Sistem akan menghitung BMI secara otomatis</li>

                <li>Hasil BMI dan kategori akan ditampilkan</li>

            </ul>

        </div>

        <!-- TABEL BMI -->
        <div class="table-section">

            <h2>📊 Kategori BMI</h2>

            <table>

                <tr>
                    <th>Nilai BMI</th>
                    <th>Kategori</th>
                </tr>

                <tr>
                    <td>< 18.5</td>
                    <td>Kurus</td>
                </tr>

                <tr>
                    <td>18.5 - 24.9</td>
                    <td>Normal</td>
                </tr>

                <tr>
                    <td>25 - 29.9</td>
                    <td>Gemuk</td>
                </tr>

                <tr>
                    <td>> 30</td>
                    <td>Obesitas</td>
                </tr>

            </table>

        </div>

    </div>

</div>

<!-- JS -->
<script src="script.js"></script>

</body>
</html>