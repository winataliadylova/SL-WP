<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="register-container">

        <form action="registerProses.php" method="post" enctype = "multipart/form-data">
            <table>
                <caption class = "judul-register">Register</caption>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namaDepan"></td>
                    
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah"></td>

                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang"></td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir"></td>

                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir"></td>

                    <td>NIK</td>
                    <td><input type="text" name="NIK"></td>
                </tr>

                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara"></td>

                    <td>Email</td>
                    <td><input type="text" name="email"></td>

                    <td>No Hp</td>
                    <td><input type="text" name="noHp"></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat"cols="20" rows="10"></textarea></td>

                    <td>Kode Pos</td>
                    <td><input type="text" name="kodePos"></td>

                    <td>Foto Profil</td>
                    <td><input type="file" name="fotoProfil"></td>
                    
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name = "username"></td>

                    <td>Password1</td>
                    <td><input type="password" name="password1"></td>

                    <td>Password2</td>
                    <td><input type="password" name="password2"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>

                    <td>
                        <div class="back-card"><a href="welcome.php" class = "kembali">Kembali</a></div>
                    </td>
                    <td>
                         <button class= "Register" type="submit" name = "submit">Register</button>
                    </td>
                </tr>
            </table>            
        </form>
    </div>
</body>
</html>