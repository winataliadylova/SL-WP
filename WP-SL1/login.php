<?php
    session_start();
    echo($_SESSION['usernameSession']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <form action="loginProses.php" method="post">
            <table>
                <caption class="judul-login">Login</caption>
                    <div class="table-body">
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username"></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                     </div>
            </table>
            <div class="button-login">
                <button class= "Login" type="submit" name = "submit">Login</button>

                <div class="back-card">
                    <a href="welcome.php" class = "kembali">Kembali</a>
                </div>
            </div>
            
        </form>

    </div>
</body>
</html>