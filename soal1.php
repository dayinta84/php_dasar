<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Gaji</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>

    <?php
    
    // Var gaji pokok, tunjangan jabatan, dan pajak
    $gajiPokok = 3250000;
    $tunjanganJabatan = 1200000;
    $pajakPenghasilan = 0.1;

    // Menghitung gaji kotor
    $gajiKotor = $gajiPokok + $tunjanganJabatan;

    // Menghitung jumlah pajak yang harus dibayar
    $pajak = $gajiKotor * $pajakPenghasilan;

    // Menghitung gaji bersih
    $gajiBersih = $gajiKotor - $pajak;

    // Menampilkan hasil
    echo "<p>Gaji Kotor : Rp. " . number_format($gajiKotor, 0, ',', '.') . "</p>";
    echo "<p>Pajak Penghasilan (10% dari gaji kotor) : Rp. " . number_format($pajak, 0, ',', '.') . "</p>";
    echo "<p>Gaji Bersih : Rp. " . number_format($gajiBersih, 0, ',', '.') . "</p>";
    
    ?>
</body>
</html>