<?php

require 'function.php';
if(isset($_POST["register"])){
    if(registrasi($_POST)>0){
         header("Location: login.php");
    }

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
    <div id="register">
        <form action="" method="post">
        <ul>
            <h1>SIGN IN</h1>
            <li>Username</li>
            <input type="text" name="username">
            <li>Kata sandi</li>
            <input type="password" name="password">
            <li>Verifikasi kata sandi</li>
            <input type="password" name="password2">
            <li>Utusan</li>
            <input type="text" name="utusan">
            <li>Alamat utusan</li>
            <input type="text"name="alamat" >
            <li>No.Whatsapp</li>
            <input type="number" name="wa"><br><br>
            <button name="register">Register</button>
        </ul>
    </form>
    </div>

    <script src="../js/index.js"></script>
</body>

</html>