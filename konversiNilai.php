<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Konversi Nilai</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>
    <form method="post">
        <label for="nilai">Masukkan Nilai Angka :</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required>
        <button type="submit">Konversi</button>
    </form>


    <?php

    // Cek apakah nilai sudah dikirimkan melalui form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai angka dari form
        $nilai = $_POST["nilai"];

        // Konversi nilai angka ke huruf sesuai aturan
        if ($nilai >= 90 && $nilai <= 100) {
            $hasil = "A";
        } elseif ($nilai >= 80 && $nilai <= 89) {
            $hasil = "AB";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $hasil = "B";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $hasil = "BC";
        } elseif ($nilai >= 0 && $nilai <= 59) {
            $hasil = "C";
        } else {
            $hasil = "Nilai tidak valid";
        }

        // Tampilkan hasil konversi
        echo "<p>Nilai angka $nilai setara dengan huruf : $hasil</p>";
    }

    ?>
</body>
</html>