<?php
    session_start();
    $namaDepan = $_SESSION['namaDepanSession'];
    $namaTengah = $_SESSION['namaTengahSession'];
    $namaBelakang = $_SESSION['namaBelakangSession'];
    $tempatLahir = $_SESSION['tempatLahirSession'];
    $tanggalLahir = $_SESSION['tanggalLahirSession'];
    $NIK = $_SESSION['NIKSession'];
    $wargaNegara = $_SESSION['wargaNegaraSession'];
    $email = $_SESSION['emailSession'];
    $noHp = $_SESSION['noHpSession'];
    $alamat = $_SESSION['alamatSession'];
    $kodePos = $_SESSION['kodePosSession'];
    $foto = $_SESSION['fotoSession'];
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
                    <td><div class="foto"><img src="./profil/<?php echo($foto);?>" alt=""></div></td>
                </tr>
        </table>
    </div>
</body>
</html>