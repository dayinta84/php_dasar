<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>

    <?php
    
    $x = 5;
    $y = 10;

    //Arithmetic operators
    echo "Penambahan ".$x + $y."<br>";
    echo "Pengurangan ".$x - $y."<br>";
    echo "Perkalian ".$x * $y."<br>";
    echo "Pembagian ".$x / $y."<br>";
    echo "Modulus ".$x % $y."<br>";
    echo "Exponensial ".$x ** $y."<br>";
    echo("<br>");

    //Assignment Operators
    $x += 2; //$x = $x + 2
    $y += 2; //$y = $y + 2
    echo "Penambahan x ".$x."<br>";
    echo "Perkalian y ".$y."<br>";
    echo("<br>");

    //Increment / Decrement Operators
    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++."<br>";
    echo "Isi x = ".$x."<br>";
    echo("<br>");
    echo "Isi --y = ".--$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo "Isi y = ".$y."<br>";
    echo("<br>");

    //Conditional assignment operators
    $user = "Dayinta";
    // <kondisi> ? <nilai jika kondisi true> : <nilai jika kondisi false>
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status."<br>";
    //Variable $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";

    ?>
</body>
</html>