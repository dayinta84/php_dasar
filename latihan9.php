<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Latihan 9</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>
    <?php

    //Contoh fungsi
    function writeMsg($nama) {
        echo"Selamat datang ". $nama." <br>";
    }
    writeMsg("Dayinta"); //untuk memanggil fungsi

    //fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2) {
        $a = $angka1+$angka2;
        return $a; //untuk mengirim nilai $a ke pemanggil
    }
    $hasil = tambah(5, 5);
    echo($hasil);
    
    ?>
</body>
</html>