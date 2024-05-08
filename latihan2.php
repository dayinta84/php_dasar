<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Latihan 2</title>
</head>
<body>
<h1>Teknologi Informasi 2B</h1>
    <?php
    // Variabel dalam PHP
    $txt = "Selamat datang!";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>Isi variabel txt adalah : $txt</p>";
    echo "<p>Isi variabel x adalah : $x</p>";
    echo "<p>Isi variabel y adalah : $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y;

    // Konstanta PHP
    define("nama_konstanta", "-*-*-Dayinta Ayu Faj'rin-*-*-");
    echo "<br>".nama_konstanta;
    ?>
</body>
</html>