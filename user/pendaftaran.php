<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/basic.css">
    <link rel="stylesheet" href="../css/pendaftaran.css">
    <title>Document</title>
</head>

<body>

    <div class="header">
        <img src="../extensi/logo.png" alt="" width="10%">
    </div>

    <div id="navbar">
        <a href="home.php">Home</a>
        <a href="lomba.php">lomba</a>
        <a href="">jadwal</a>
        <a class="active" href="">pendaftaran</a>
        <a href="https://api.whatsapp.com/send?phone=6283896059029">kontak</a>
    </div>

    <h2>pendaftaran Peserta</h2>
    <p>Utusan <input type="text"><button onclick="tb()">+</button></p>
    <table id="tb" class="none">
        <form name="daftar" class="daftar">
            <tr>
                <td width="30%">
                    <p>Nama <input type="text" name="nama"></p>
                    <p>Usia <input type="number" name="usia" length="2"  ></p>
                    <p>lomba <input type="text" name="lomba" id=""></p>
                    <p><input type="button" value="tambah" onclick="tambah()" class="btn"></p>
                </td>
                <td>
                    <p><textarea name="struk" id="textarea" cols="1" rows="10" readonly></textarea>
                    <p><input type="reset" value="hapus" class="btn"></p>
                    <p><input type="button" value="daftar" class="btn"></p>
                </td>
            </tr>
        </form>
        </table>


    <script src="../js/index.js"></script>
    <script src="../js/pendaftaran.js"></script>
</body>

</html>