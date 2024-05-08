<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Latihan 7</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>

    <?php
    
    //Array dengan index
    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ". <br>";

    //Tampilkan Mangga
    echo "saya suka " . $namaBuah[1] . "<br>";

    //Tampilkan Jeruk
    echo "Saya suka " . $namaBuah[2] . "<br>";

    //Tampilkan Apel
    echo "Saya suka " . $namaBuah[3] . "<br>";

    //Tampilkan Melon
    echo "Saya suka " . $namaBuah[4] . "<br>";

    //Array dengan spesifik index
    $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"39 Tahun");
    $umur['ahmad']="50 Tahun";
    echo "Umur Andi adalah " . $umur['Andi'] . "<br>";

    //Tampilkan semua umur 
    echo "Umur Ben adalah " . $umur['Ben'] . "<br>";
    echo "Umur Joe adalah " . $umur['Joe'] . "<br>";
    echo "Umur Ahmad adalah " . $umur['ahmad'];
    
    ?>
</body>
</html>