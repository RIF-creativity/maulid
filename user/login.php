<?php

require 'function.php';
if(isset($_POST["daftar"])){
    header("Location: register.php");
}

if (isset($_POST["login"])) {
    $username= $_POST['nama'];
    $password= $_POST['sandi'];

    $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

    //cek user
    if (mysqli_num_rows($result)===1) {
        //cek sandi
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password,$row['password'])) {
            header("Location: home.html");
            exit;
        }
    }
    $eror=true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="bg"></div>
    <div id="form">
        <form action="" method="post">
        <ul>
            <li>
                <?php
                if ($eror == true) {
                    echo'
                    <p style="color:red;">username/password salah</p>
                    ';
                }
                ?>
                <h1>Login</h1>
            </li>
            <li>Username</li>
            <input type="text" name="nama">
            <li>pasword</li>
            <input type="Password" name="sandi">
            <li><a href="" id="lupa">Lupa kata sandi</a></li>
            <button name="login">login</button>
            <button id="regis" name="daftar">register</button>
            </ul>
        </form>
        </div>

</body>

</html>