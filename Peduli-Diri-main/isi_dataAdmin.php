<?php
$title = 'Isi Data';
include 'layouts/headAdmin.php';

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "peduli_diri";
    $conn = new mysqli($servername, $username, $password, $dbname);
    

if (isset($_POST['simpan'])) {
    $id = $_SESSION['nik']; // Use the session nik as the id
    $nama = $_POST['nama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_telp = $_POST['no_telp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // Insert data into the data table
    $sql = "INSERT INTO config (id, nama, asal_sekolah, tanggal_lahir, no_telp, jenis_kelamin, alamat) VALUES ('$id', '$nama', '$asal_sekolah', '$tanggal_lahir', '$no_telp', '$jenis_kelamin', '$alamat')";
    $result = $conn->query($sql);

    if ($result) {
        echo '<script>alert("Data berhasil!");document.location.href = "catatan.php"</script>';
    } else {
        echo '<script>alert("Data gagal!")</script>';
    }
}

?>
<div class="card text-center">
    <div class="card-header">
        Isi Data
    </div>
    <div class="card-body">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $idTergede; ?>">
            <div class="row justify-content-center mb-3">
                <div class="col-md-1"><label for="nik" class="form-label float-start">NIK :</label></div>
                <div class="col-md-4"><input type="number" name="id" id="nik" class="form-control" required></div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-1"><label for="nama" class="form-label float-start">Nama :</label></div>
                <div class="col-md-4"><input type="text" name="nama" id="nama" class="form-control" required></div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-1"><label for="asal_sekolah" class="form-label float-start">Asal sekolah :</label></div>
                <div class="col-md-4"><input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required></div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-1"><label for="tanggal_lahir" class="form-label float-start">Tanggal Lahir :</label></div>
                <div class="col-md-4"><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required></div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-1"><label for="no_telp" class="form-label float-start">Nomor Telepon :</label></div>
                <div class="col-md-4"><input type="text" name="no_telp" id="no_telp" class="form-control" required></div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-1"><label for="jenis_kelamin" class="form-label float-start">Jenis Kelamin :</label></div>
                <div class="col-md-4"><input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" required></div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-1"><label for="alamat" class="form-label float-start">Alamat :</label></div>
                <div class="col-md-4"><input type="text" name="alamat" id="alamat" class="form-control" required></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="float-end">
                        <button type="reset" class="btn btn-secondary">Batal</button>
                        <button type="submit" name="simpan" class="btn btn-danger">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include 'layouts/footer.php'; ?>
