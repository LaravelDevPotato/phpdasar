<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>

    <h1>Fungsi php</h1>

    <?php
        // -------fungsi---------

        // parameter
        // function print_text( $text, $angka)
        // {
        //   $text = "gedung" .$text . " " .$angka;
        //     echo "--------";
        //     echo $text;
        //     echo "--------";
        // }

        // function jarak(){
        //     echo "<br>";
        // }

        // print_text(" koding", 21);
        // jarak();
        // print_text(" perawat", 22);
        // jarak();
        // print_text(" penerbangan", 23);
        // jarak();
        
        // ---------return fungsi------

        // function menghitung ($x, $y){
        //     $z = $x+ $y;
        //     return $z;
        // }

        // $hasil = menghitung(2, 5) * 10;
        // echo "hasil dari penjumlahan ". $hasil ;

        // --------SCOPE---------

        // $a = 20000;
        // $b = 3;

        // function menhitung(){
        //     // global $a, $b;
        //     $c = $GLOBALS['a'] + $GLOBALS['b'];
        //     return $c;
        // }
        // echo menhitung();

        // ------ANONYMOUS FUNCTION------

        // $ngetik = function($text){
        //     echo $text;
        // };

        // $greeting = $ngetik;

        // $greeting('selamat datang semuanya 12345');

        // ----- CALLBACK FUNCTION------

        function berteriak($callback){
            echo 'HALLLOOO <br>';
            // $callback();

            if (is_callable($callback)){ //menguji apakah dia fungsi
                call_user_func($callback, 'selamaat datang');
            }else{
                echo 'dia bukan fungsi';
            }

        }
        // berteriak(function(){
        //     echo 'saya anonymous, alias engga punya nama';
        // });

        $panggil = function($text){
             echo $text;
        };
        berteriak( 123);

        ?>
    
</body>
</html>