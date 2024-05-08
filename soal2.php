<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Tabungan</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>

    <?php
    
        // Jumlah uang yang diambil Ani
        $jumlahUang = 1387500;

        // Array pecahan uang yang berlaku
        $pecahanUang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
    
        // Inisialisasi array untuk menyimpan banyaknya masing-masing pecahan uang
        $banyakPecahan = array();
    
        // Iterasi untuk setiap pecahan uang
        foreach ($pecahanUang as $pecahan) {
            // Hitung banyaknya pecahan uang yang diperoleh Ani
            $banyakPecahan[$pecahan] = floor($jumlahUang / $pecahan);
            // Kurangi jumlah uang dengan nilai pecahan yang sudah dihitung
            $jumlahUang %= $pecahan;
        }
    
        // Menampilkan hasil
        foreach ($banyakPecahan as $pecahan => $jumlah) {
            echo "<p>Pecahan Rp. " . number_format($pecahan, 0, ',', '.') . " sebanyak " . $jumlah . " lembar</p>";
        }
    
    ?>
</body>
</html>