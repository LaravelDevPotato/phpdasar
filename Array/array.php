<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <h1>Array PHP</h1>

    <?php
    //-------Tipe dara Array--------
    $angka =[5,10,2,1,6];
    $kotak = array ('anjing','kucing','burung','banteng');
    $nama = ['adit', 'sopo', 'jarwo'];
   
    // print_r($kotak);
    // echo $nama[2];

    // ---------metode array----------
    // array_unique, _reverse, shurffle, count, sort
    // shuffle($kotak);
    // print_r($kotak);
    // sort($angka);
    // print_r($angka);

    // echo count($nama);

    // --------Associative array---------
    // key => isi
    // $data = array( "nama" => "adit",
    //                "umur" => 21,
    //                "kerja" =>"pelawak"        
    //         );
    // $data2 = array(  "istri" => "dita",
    //                 "laptop" => "asus" 
    //  );
    

    // // print_r($data);
    // // $data ['nama'] = "adit sopojarwo";
    // // echo "Namanya adalah " . $data['nama'];

    // // --------methode assosiatif array-----
    // // array_values array_keys array_merge
    // print_r(array_merge($data, $data2) );

    // ---------------multi dimensi array--------------
    $data = array (
                array("programer", "21", "kreatif"),
                array("ui ux", "24", "jujur"),
                array("manager", "34", "kaya")
             );

    // 00 01 02
    // 10 11 12
    // 20 21 22
    
    $data[2][0] = "proyek manager";
    echo$data[2][0];















    ?>
</body>
</html>