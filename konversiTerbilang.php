<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Konversi Terbilang</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>
    <form method="post">
        <label for="angka">Masukkan Angka (1-9):</label>
        <input type="number" id="angka" name="angka" min="1" max="9" required>
        <button type="submit">Konversi</button>
    </form>


    <?php
    // Cek nilai sudah dikirimkan melalui form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai angka dari form
        $angka = $_POST["angka"];

        // Konversi angka ke huruf menggunakan switch
        switch ($angka) {
            case 1:
                $terbilang = "satu";
                break;
            case 2:
                $terbilang = "dua";
                break;
            case 3:
                $terbilang = "tiga";
                break;
            case 4:
                $terbilang = "empat";
                break;
            case 5:
                $terbilang = "lima";
                break;
            case 6:
                $terbilang = "enam";
                break;
            case 7:
                $terbilang = "tujuh";
                break;
            case 8:
                $terbilang = "delapan";
                break;
            case 9:
                $terbilang = "sembilan";
                break;
            default:
                $terbilang = "Nilai tidak valid";
        }

        // Tampilkan hasil konversi
        echo "<p>Angka $angka dalam huruf adalah : $terbilang</p>";
    }

    ?>
    
</body>
</html>