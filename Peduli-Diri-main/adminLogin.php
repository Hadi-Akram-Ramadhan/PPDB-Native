<?php
session_start();
if (isset($_POST['masuk'])) {
    $nama = $_POST['pass'];
    $nik = $_POST['nik'];
    $pass = $_POST['pass'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "peduli_diri";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Mengecek apakah NIK dan nama ada di database
    $sql = "SELECT * FROM config_admin WHERE nik='$nik' AND pass='$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['nik'] = $nik;
        header('Location: indexAdmin.php');
    } else {
        echo '<script>alert("Login gagal! Anda bukan Admin! Pergi sana hush!")</script>';
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
                    <h1>Halo Admin</h1>
                    <p>Silahkan Login, isi NIK dan Password anda!</p></p>
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nik" placeholder="" name="nik" required>
                            <label for="nik">NIK</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="pass" placeholder="" name="pass" required>
                            <label for="pass">Password</label>
                        </div>
                        <button type="submit" class="btn btn-danger w-100" name="masuk">Masuk</button>
                    </form>
                    
                    <p>Kembali ke Login?<a href="login.php">Kembali</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>