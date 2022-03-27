 <?php
    session_start();
    // var_dump($_FILES);
    
    $allowed = array('jpg', 'jpeg', 'png');

    $namaDepan = $_POST["namaDepan"];
    $namaTengah = $_POST["namaTengah"];
    $namaBelakang = $_POST["namaBelakang"];
    $tempatLahir = $_POST["tempatLahir"];
    $tanggalLahir = $_POST["tanggalLahir"];
    $NIK = $_POST["NIK"];
    $wargaNegara = $_POST["wargaNegara"];
    $email = $_POST["email"];
    $noHp = $_POST["noHp"];
    $alamat = $_POST["alamat"];
    $kodePos = $_POST["kodePos"];
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $fileName = $_FILES['fotoProfil']['name'];
    $temp_name = $_FILES['fotoProfil']['tmp_name'];
    $tujuan = "profil/";


    // var_dump($fileName);
    // var_dump($temp_name);
    if(isset($_POST["submit"])){
        

        if($namaDepan == ""){
            echo "<script>
                alert('Nama depan tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($namaTengah == ""){
            echo "<script>
                alert('Nama tengah tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($namaBelakang == ""){
            echo "<script>
                alert('Nama belakang tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($tempatLahir == ""){
            echo "<script>
                alert('Tempat lahir tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($tanggalLahir == ""){
            echo "<script>
                alert('Tanggal lahir tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($NIK == ""){
            echo "<script>
                alert('NIK tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif(strlen($NIK) !== 16){
            echo "<script>
                alert('NIK tidak sesuai');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($wargaNegara == ""){
            echo "<script>
                alert('Warga negara tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($email == ""){
            echo "<script>
                alert('Email tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif(str_ends_with($email, '@gmail.com') == false){
            echo "<script>
                alert('Email tidak valid');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($noHp == ""){
            echo "<script>
                alert('No Hp tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($alamat == ""){
            echo "<script>
                alert('Alamat tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($kodePos == ""){
            echo "<script>
                alert('Kode Pos tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif(str_ends_with($fileName, '.jpg') == false && str_ends_with($fileName, '.jpeg') == false && str_ends_with($fileName, '.png') == false){
            echo "<script>
                alert('File bukan gambar');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($username == ""){
            echo "<script>
                alert('Username tidak boleh kosong');
                document.location.href = 'register.php';            
            </script>";
        }
        elseif($password1 !== $password2){
            echo "<script>
                alert('Password tidak sama');
                document.location.href = 'register.php';            
            </script>";
        }
        else{
            $_SESSION['namaDepanSession'] = $namaDepan;
            $_SESSION['namaTengahSession'] = $namaTengah;
            $_SESSION['namaBelakangSession'] = $namaBelakang;
            $_SESSION['tempatLahirSession'] = $tempatLahir;
            $_SESSION['tanggalLahirSession'] = $tanggalLahir;
            $_SESSION['NIKSession'] = $NIK;
            $_SESSION['wargaNegaraSession'] = $wargaNegara;
            $_SESSION['emailSession'] = $email;
            $_SESSION['noHpSession'] = $noHp;
            $_SESSION['alamatSession'] = $alamat;
            $_SESSION['kodePosSession'] = $kodePos;
            $_SESSION['usernameSession'] = $username;
            $_SESSION['passwordSession'] = $password1;
            $_SESSION['fotoSession'] = $fileName;
            
            $upload = move_uploaded_file($temp_name, $tujuan.$fileName);

            header("location:welcome.php");
        }
    }


?>