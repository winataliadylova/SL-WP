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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="register-container">

<form action="prosesEditProfil.php" method="post" enctype = "multipart/form-data">
    <table>
        <caption class = "judul-register">Edit Profil Pribadi</caption>
        <tr>
            <td>Nama Depan</td>
            <td><input type="text" name="namaDepan" value="<?php echo($namaDepan);?>"></td>
            
            <td>Nama Tengah</td>
            <td><input type="text" name="namaTengah" value="<?php echo($namaTengah);?>"></td>

            <td>Nama Belakang</td>
            <td><input type="text" name="namaBelakang" value="<?php echo($namaBelakang);?>"></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempatLahir" value="<?php echo($tempatLahir);?>"></td>

            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggalLahir" value="<?php echo($tanggalLahir);?>"></td>

            <td>NIK</td>
            <td><strong><?php echo($NIK);?></strong></td>
        </tr>

        <tr>
            <td>Warga Negara</td>
            <td><input type="text" name="wargaNegara" value="<?php echo($wargaNegara);?>"></td>

            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo($email);?>"></td>

            <td>No Hp</td>
            <td><input type="text" name="noHp" value="<?php echo($noHp);?>"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"cols="20" rows="10"><?php echo($alamat);?></textarea></td>

            <td>Kode Pos</td>
            <td><input type="text" name="kodePos" value="<?php echo($kodePos);?>"></td>

            <td>Foto Profil</td>
            <td><input type="file" name="fotoProfil"></input> <div class="foto"><img src="./<?php echo($foto);?>" alt=""></div></td>
            
        </tr>

        <tr>
            <td></td>
            <td></td>

            <td></td>
            <td></td>

            <td>
                <div class="back-card"><a href="profil.php" class = "kembali">Kembali</a></div>
            </td>
            <td>
                 <button class= "Register" type="submit" name = "submit">Edit</button>
            </td>
        </tr>
    </table>            
</form>
</div>
</body>
</html>