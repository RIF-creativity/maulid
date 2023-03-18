<?php
$conn = mysqli_connect("localhost", "root", "", "maulid");
function registrasi($data){
    global $conn;
    $username = strtolower(stripslashes($data ['username']));
    $password= mysqli_real_escape_string($conn,$data ['password']);
    $password2= mysqli_real_escape_string($conn,$data ['password2']);
    $utusan= mysqli_real_escape_string($conn,$data ['utusan']);
    $alamat= mysqli_real_escape_string($conn,$data ['alamat']);
    $wa= mysqli_real_escape_string($conn,$data ['wa']);


    if ($password!==$password2) {
        echo"<script>
            alert('konfirmasi kata sandi tidak sesuai');
        </script>
        ";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //INSERT DATABASE
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password','$utusan','$alamat','$wa')");
    echo"<script>
            alert('anda telah didaftarkan');
        </script>
        ";
    return mysqli_affected_rows($conn);


}



?>