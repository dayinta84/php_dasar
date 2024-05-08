<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Keliling</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>
    <h3>Menghitung Keliling Lingkaran</h3>
    <?php 

    //variabel jari-jari
    $jari_jari = 15;

    // Menghitung keliling lingkaran
    $keliling = 2 * pi() * $jari_jari;

    //hasil
    echo "Keliling lingkaran dengan jari-jari 15 cm adalah : " . $keliling . " cm";

    ?>
</body>
</html>