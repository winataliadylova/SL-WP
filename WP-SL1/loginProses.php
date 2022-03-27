<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['submit'])){
        if($username !== $_SESSION['usernameSession']){
            echo "<script>
                alert('Username salah');
                document.location.href = 'login.php';            
            </script>";
        }
        elseif($password !== $_SESSION['passwordSession']){
            echo "<script>
                alert('Password salah');
                document.location.href = 'login.php';            
            </script>";
        }
        else{
            header("location:home.php");
        }
    }
?> 