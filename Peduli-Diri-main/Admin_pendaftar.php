<?php
$title = 'Lihat Pendaftar';
include 'layouts/headAdmin.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peduli_diri";
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek apakah NIK ada di database dan mengambil data catatan
$sql = "SELECT * FROM config WHERE nik='".$_SESSION['nik']."'";
    $result = $conn->query($sql);
    

$html = '<table class="table table-bordered">';
$html .= '<tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Tanggal Lahir</th>
            <th>No Telepon</th>
        </tr>';

$no = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['nama'] . '</td>';
        $html .= '<td>' . $row['asal_sekolah'] . '</td>';
        $html .= '<td>' . $row['tanggal_lahir'] . '</td>';
        $html .= '<td>' . $row['no_telp'] . '</td>';
        $html .= '<td>' . $row['jenis_kelamin'] . '</td>';
        $html .= '</tr>';
    }
} 
$html .= '</table>';
?>

<div class="card">
    <div class="card-header text-center">
        Lihat Pendaftar
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md">
                <a href="isi_dataAdmin.php" class="btn btn-danger float-end">Isi Data</a>
            </div>
        </div>
        <?php echo $html; ?>
        <form method="POST" action="generate_pdf.php">
            <input type="hidden" name="html" value="<?php echo htmlspecialchars($html); ?>">
            <button type="submit" class="btn btn-primary">Print to PDF</button>
        </form>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>
