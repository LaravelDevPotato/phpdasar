<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
    <h1>Loop php</h1>

    <?php
        // --------Pengulangan---------
        //for(variabelawal(mulai), batas(syarat), perubahan)

        // for($i =0; $i<5; $i++) 
        // {
        //     echo "--------------";
        //     echo "belajar php $i";
        //     echo "--------------<br> ";
        // }

     $hewan = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];
    //              // 0         1       2        3
    //     for($i=0; $i < count($hewan); $i++) 
    //     {
    //         echo "--------------";
    //         echo $hewan[$i];
    //         echo "--------------<br> ";
    //     }

        // foreach($hewan as $h)
        //     {
        //         echo "--------------";
        //         echo $h;
        //         echo "--------------<br> ";
        //     }

        // $data = [ 'nama'=> 'adit',
        //           'umur'=>24,
        //           'sifat'=>'rajin' ];

        // foreach($data as $key=>$value)
        // {
        //     echo $value. "<br>";
        // }
        // ----------while % do while---------
        // while (syarat)
        $i = 5;
        // while($i < count( $hewan)){
        //    echo $hewan[$i]. "<br>";
        //     $i++;
        // }

        do{
            echo '---------';
            echo $hewan[$i] ."<br>";
            $i++;
        }while( $i < count($hewan));


    ?>
    
</body>
</html>