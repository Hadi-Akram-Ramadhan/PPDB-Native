<?php
session_start();
if (isset($_POST['masuk'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "peduli_diri";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Mengecek apakah NIK dan nama ada di database
    $sql = "SELECT * FROM config WHERE nik='$nik' AND nama='$nama'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['nik'] = $nik;
        header('Location: index.php');
    } else {
        echo '<script>alert("Login gagal!")</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Prestasi Prima</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        /* main.css */

/* Tambahan styling lainnya sesuai kebutuhan Anda */

    </style>
</head>

<body class="body">
    <div class="container">
        <div class="row align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card py-4" style="width: 22rem;">
                <div class="card-body text-center">
                    <h1>Selamat datang di website PPDB SMK Prestasi Prima!</h1>
                    <p>Silahkan Login, isi Nama dan NIK anda!</p></p>
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" placeholder="" name="nama" required>
                            <label for="nama">Nama</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nik" placeholder="" name="nik" required>
                            <label for="nik">NIK</label>
                        </div>
                        <button type="submit" class="btn btn-danger w-100" name="masuk">Masuk</button>
                    </form>
                    <hr>
                    <p>Ayo daftar di sekolah kami!<a href="register.php" class="">Daftar Sekarang!</a></p>
                    <hr>
                    <p>Anda Admin?<a href="adminLogin.php">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>