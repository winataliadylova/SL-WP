<?php
    session_start();
    include("config.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $str_query = "select * from profile where Username = '".$username."'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        if($password == $data['Password']){
            $_SESSION['usernameSession'] = $username;
            echo "<script>
                alert('Login Berhasil');
                document.location.href = 'home.php';            
            </script>";
            
        }
        else{
            echo "<script>
                alert('username atau password salah');
                document.location.href = 'login.php';            
            </script>";
        }
    }
?> 