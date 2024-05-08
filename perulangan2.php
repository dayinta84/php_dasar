<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Perulangan2</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>
    
    <?php

    // Array angka
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    // Loop untuk mengecek setiap angka dalam array
    foreach ($angka as $nomor) {
        // Jika angka adalah genap
        if ($nomor % 2 == 0) {
            echo "Nomor: $nomor Genap<br>";
        } else { // Jika angka adalah ganjil
            echo "Nomor: $nomor Ganjil<br>";
        }
    }
    
    ?>
</body>
</html>