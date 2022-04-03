<?php
    session_start();
    include("config.php");
    $str_query = "select * from profile where Username = '".$_SESSION['usernameSession']."'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);


    $namaDepan = $data['NamaDepan'];
    $namaTengah = $data['NamaTengah'];
    $namaBelakang = $data['NamaBelakang'];
    $tempatLahir = $data['TempatLahir'];
    $tanggalLahir = $data['TanggalLahir'];
    $NIK = $data['NIK'];
    $wargaNegara = $data['WargaNegara'];
    $email = $data['Email'];
    $noHp = $data['NoHp'];
    $alamat = $data['Alamat'];
    $kodePos = $data['KodePos'];
    $foto = $data['pathFoto'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <div class="navbar">
        <div class= "navbar-judul">Aplikasi Pengelolaan Keuangan</div>

        <div class= "navbar-button">
            <a href="home.php" class="other">Home</a>
            <a href="profil.php">Profile</a>
        </div>

        <div class= "navbar-logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="profile-table">
        <table>
            <caption class= "judul-profil"><b>Profil Pribadi</b></caption>
            <tr>
                    <td>Nama Depan</td>
                    <td><strong><?php echo($namaDepan);?></strong></td>

                    <td>Nama Tengah</td>
                    <td><strong><?php echo($namaTengah);?></strong></td>

                    <td>Nama Belakang</td>
                    <td><strong><?php echo($namaBelakang);?></strong></td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td><strong><?php echo($tempatLahir);?></strong></td>

                    <td>Tanggal Lahir</td>
                    <td><strong><?php echo($tanggalLahir);?></strong></td>

                    <td>NIK</td>
                    <td><strong><?php echo($NIK);?></strong></td>
                </tr>

                <tr>
                    <td>Warga Negara</td>
                    <td><strong><?php echo($wargaNegara);?></strong></td>

                    <td>Email</td>
                    <td><strong><?php echo($email);?></strong></td>

                    <td>No Hp</td>
                    <td><strong><?php echo($noHp);?></strong></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><strong><?php echo($alamat);?></strong></td>

                    <td>Kode Pos</td>
                    <td><strong><?php echo($kodePos);?></strong></td>

                    <td>Foto Profil</td>
                    <td><div class="foto"><img src="./<?php echo($foto);?>" alt=""></div></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>

                    <td><div class="back-card"><a href="editProfil.php" class = "kembali">Edit Profil</a></div></td>
                    <td></td>

                    <td></td>
                    <td></td>
                </tr>   
        </table>
    </div>
</body>
</html>