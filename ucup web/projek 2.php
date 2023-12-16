<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pegawai</title>
</head>
<body>

<?php
// Inisialisasi variabel
$namaPegawai = $agama = $jabatan = $status = $jumlahAnak = "";

// Fungsi untuk membersihkan input dari potensi ancaman XSS
function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form dan bersihkan input
    $namaPegawai = cleanInput($_POST["namaPegawai"]);
    $agama = cleanInput($_POST["agama"]);
    $jabatan = cleanInput($_POST["jabatan"]);
    $status = cleanInput($_POST["status"]);
    $jumlahAnak = cleanInput($_POST["jumlahAnak"]);
}

// Menampilkan hasil input
echo "<h2>Informasi Pegawai:</h2>";
echo "<p>Nama Pegawai: $namaPegawai</p>";
echo "<p>Agama: $agama</p>";
echo "<p>Jabatan: $jabatan</p>";
echo "<p>Status: $status</p>";
echo "<p>Jumlah Anak: $jumlahAnak</p>";
?>

<!-- Form input pegawai -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="namaPegawai">Nama Pegawai:</label>
    <input type="text" name="namaPegawai" required><br>

    <label for="agama">Agama:</label>
    <input type="text" name="agama" required><br>

    <label for="jabatan">Jabatan:</label>
    <input type="text" name="jabatan" required><br>

    <label for="status">Status:</label>
    <select name="status" required>
        <option value="Belum Menikah">Belum Menikah</option>
        <option value="Menikah">Menikah</option>
    </select><br>

    <label for="jumlahAnak">Jumlah Anak:</label>
    <input type="number" name="jumlahAnak" min="0" required><br>

    <input type="submit" value="Simpan">
</form>

</body>
</html>
