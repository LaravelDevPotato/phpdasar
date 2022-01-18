<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>php</title>
</head>
<body>
    <?php
    // -------tipe data boolean-------
    // $hasil = true;
    // $hasil2 = false;

    // ---------if dan else-----------
    // operator logika == === > >= < <= !=
    // $password = 1000;
    // $password2 = 1001;

    // if( $password != $password2 ) {
    //     echo '-------'; 
    //     echo 'benar password tidak sama!';
    //     echo '-------';
    // }else{
    //     echo 'salah,  passwordnya sama, weee';
    // }

        // ------- ELSE if----------
        // operator logika == === > >= < <= !=

    $uang_programmer = 1000;
    $keyboard         = 2000;
    $uang_designer    = 4000;

    // && atau||

    // if($uang_programmer > $keyboard &&  $uang_designer >= $keyboard){
    //     echo 'boleh beli keyboard';
    // }else {
    //     echo 'enggak bisa beli';
    // }

        // swith case
        $nama ="adit1";

        switch($nama){
            case 'sopo':
                echo 'namanya sopo';
                break;
            case 'jarwo':
                echo 'namanya jarwo';
                break;
            case 'adit':
                echo 'namanya adit';
                break;
            default:
                echo 'tidak ada yang benar';
            }





    // // true dan false
    // $hasil = true;
    // $hasil2 = false;
    // if( $hasil2 ){
    //     echo 'dibeli programer';
    // }else if ( $hasil2){
    //     echo 'dibeli oleh designer';

    //     // ------IF BERCABANG-------
    // if( $uang_designer >= $keyboard * 2){
    //     echo'dibeli duakali oleh designer';
        
    //     }

    // }else {
    //     echo 'enggak cukup';
    // }

    ?>
    
</body>
</html>