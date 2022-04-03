<?php
    session_start();
    include("config.php");

    if(isset($_POST['submit'])){
        $stringQuery = "select * from profile where Username = '".$_SESSION['usernameSession']."'";
        $runQuery =  mysqli_query($connection, $stringQuery);
        $data = mysqli_fetch_array($runQuery);

        $fileName = $_FILES['fotoProfil']['name'];
        $temp_name = $_FILES['fotoProfil']['tmp_name'];
        $tujuan = "profil/";
        $path = $tujuan.$fileName;

        $str_query = "update profile set 
            NamaDepan = '".$_POST['namaDepan']."',
            NamaTengah = '".$_POST['namaTengah']."',
            NamaBelakang = '".$_POST['namaBelakang']."',
            TempatLahir = '".$_POST['tempatLahir']."',
            TanggalLahir = '".$_POST['tanggalLahir']."',
            WargaNegara = '".$_POST['wargaNegara']."',
            Email = '".$_POST['email']."',
            Alamat = '".$_POST['alamat']."',
            KodePos = '".$_POST['kodePos']."'
            where NIK = '".$data['NIK']."' ";

        $query = mysqli_query($connection, $str_query);



        echo "<br>";


        if($query){
            unlink($data['pathFoto']);
            mysqli_query($connection, "update profile set pathFoto = '".$path."'");
            $upload = move_uploaded_file($temp_name, $tujuan.$fileName);
            echo "<script>
                alert('data behasil diubah');
                document.location.href = 'profil.php';            
            </script>";
            
        }
        else{
            echo "<script>
                alert('data tidak behasil diubah');
                document.location.href = 'profil.php';            
            </script>";
        }
    }

?>