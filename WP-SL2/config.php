<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "mymoney";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        // echo "koneksi berhasil";
    }
    else{
        echo "Koneksi Gagal" .mysqli_connect_error();
    }

?>