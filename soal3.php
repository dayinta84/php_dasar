<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Nilai Akhir</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>

    <?php

    // Array yang berisi informasi tentang siswa
    $students = array(
        array("No Urut" => 1, "Poin" => 75, "Siswa" => "Adi"),
        array("No Urut" => 2, "Poin" => 80, "Siswa" => "Joni"),
        array("No Urut" => 3, "Poin" => 65, "Siswa" => "Jihan"),
        array("No Urut" => 4, "Poin" => 70, "Siswa" => "Aya"),
        array("No Urut" => 5, "Poin" => 85, "Siswa" => "Ita"),
        array("No Urut" => 6, "Poin" => 90, "Siswa" => "Budi"),
        array("No Urut" => 7, "Poin" => 95, "Siswa" => "Tini"),
        array("No Urut" => 8, "Poin" => 65, "Siswa" => "Sari")
    );

    // a) Tampilkan poin siswa dengan nomor urut 5
    foreach ($students as $student) {
        if ($student["No Urut"] == 5) {
            echo "Poin siswa dengan nomor urut 5 adalah " . $student["Poin"] . "<br>";
            break;
        }
    }

    // b) Tampilkan semua nama siswa yang memiliki poin 90
    echo "Nama siswa yang memiliki poin 90 adalah ";
    foreach ($students as $student) {
        if ($student["Poin"] == 90) {
            echo $student["Siswa"] . ", ";
        }
    }
    echo "<br>";

    // c) Tampilkan semua nama siswa yang memiliki poin 100 (hasil: tidak ada)
    $found = false;
    foreach ($students as $student) {
        if ($student["Poin"] == 100) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Tidak ada siswa yang memiliki poin 100";
    }

    ?>


</body>
</html>