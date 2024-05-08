<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Latihan 4</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>
    <?php
    /*Operator logika yang bisa digunakan
    * ==    Sama Dengan          $x == $y
    * ===   Identical            $x === $y
    * !=    Tidak sama dengan    $x != $y
    * <>    Tidak sama dengan    $x <> $y
    * !==   Not Identical        $x !== $y
    * >     Lebih besar dari     $x > $y
    * <     Kurang dari          $x < $y
    * >=    Lebih besar atau Sama dengan    $x >= $y
    * <=    Kurang dari atau Sama dengan    $x <= $y
    * <=>   Spaceship   $x <=> $y
    */

    $t = date("H"); //jam dengan format 1-24
    echo "If <br>";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    $t = date("H");
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    $t = date("H");
    echo "<br> Nested If <br>";
    if ($t < 20) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat malam!";
    }
    ?>
</body>
</html>