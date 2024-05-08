<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Variabel</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>

    <?php

    //array berisi nama-nama hari
    $nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

    // Menggunakan looping untuk menampilkan nama-nama hari
    for ($i = 0; $i < count($nama_hari); $i++) {
        echo "" . ($i + 1) . ". " . $nama_hari[$i] . "<br>";
    }

    ?>
</body>
</html>