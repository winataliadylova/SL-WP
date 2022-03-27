<?php 
    session_start();
    $username = $_SESSION['usernameSession'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="navbar">
        <div class= "navbar-judul">Aplikasi Pengelolaan Keuangan</div>

        <div class= "navbar-button">
            <a href="home.php">Home</a>
            <a href="profil.php" class="other">Profile</a>
        </div>

        <div class= "navbar-logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="Deskripsi-Body">
            <p>Halo <b><?php echo($username);?></b>, Selamat Datang di Aplikasi Pengelolaan Keuangan</p> 
    </div>
</body>
</html>