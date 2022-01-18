<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
    
<?php
    //  BELAJAR PHP

    //  VARIABEL PADA PHP
    // $nama = "ramadoni";
    // $_123 = "text baru";

    // echo "<h1>$_123</h1>";
    // echo "Halo". $nama."<br>";
    // echo "Member"

    // belajar tipe data string
    $nama = "Sekolah smk";
    $nama2 = "Kuliah di ubl";
    
    echo "selamat datang di $nama <br>";

    // echo "selamat datang di \$nama";

    // Type data angka
    // 1. integer 2. float
    $angka  = 1000;
    $angka2 = 3;
    $angka3 = 2.64;

    //Operator aritmatik
    //+ - * / % == --
    // echo $angka + $angka2 * $angka3;
    
    // nama = nilai
    // $angka *= $angka2;

    // echo $angka;

    // math method
    //round rand(min, max) max min
    // echo round($angka3);
    // echo "Angka hari ini adalah ". min($angka3, $angka, $angka2);

    
    // STRING METHODE
    // strlen && str_word_count
    // str_replace(find,replace,string)
    // str_repeat (text, times); str_shuffle(text)

    $text = "hai semuanya di sini";
    echo str_repeat( str_replace ("Hai", "Halo" ,$text), 10);




?>
    
</body>
</html>