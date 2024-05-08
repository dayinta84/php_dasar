<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307042">
    <meta name="author" content="Dayinta Ayu Faj'rin">
    <title>Latihan 8</title>
</head>
<body>
    <h1>Teknologi Informasi 2B</h1>
    
    <?php

    //data kelas dengan array 2 dimensi
    $array = array(
        "1A" =>array("Zahra", "Tria", "Istya"),
        "1B" =>array("Agnes", "Dayinta", "Candra")
    );

    //Menampilkan data array
    print_r($array);
    
    //Menampilkan kelas 1A
    print_r($array['1A']);

    //Menampilkan kelas 1B dengan index 0
    echo $array['1B'][0];

    //Tampilkan Dayinta
    echo $array['1B'][1];

    //Tampilkan Istya
    echo $array['1A']['2'];

    //Data kelas bisa ditulis juga dengan :
    $array_simple = [
        "1A" =>["Zahra", "Tria", "Istya"],
        "1B" =>["Agnes", "Dayinta", "Candra"]
    ];

    ?>
</body>
</html>