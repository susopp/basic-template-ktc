<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nota Diskon Belanja Buku</title>
</head>
<body>

<?php
// ... (your existing PHP code)

// If form is submitted, process the input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values
    $noTransaksi = $_POST["noTransaksi"];$namaPembeli = $_POST["namaPembeli"];
    $judulBuku = $_POST["judulBuku"];$jumlahBuku = $_POST["jumlahBuku"];$totalBayar = $_POST["totalBayar"];
    // Add the new transaction to the array
    $transaksi[] = array($noTransaksi, $namaPembeli, $judulBuku, $jumlahBuku, $totalBayar);
}
?>

<h2> Toko Subur </h2>
<!-- Display existing transactions table -->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h3>Bukti Pembayaran:</h3>
    <label for="noTransaksi">No. Transaksi:</label>
    <input type="text" name="noTransaksi" required><br>

    <label for="namaPembeli">Nama Pembeli:</label>
    <input type="text" name="namaPembeli" required><br>

    <label for="judulBuku">Judul Buku:</label>
    <input type="text" name="judulBuku" required><br>

    <label for="jumlahBuku">Jumlah Buku:</label>
    <input type="number" name="jumlahBuku" required><br>

    <label for="totalBayar">Total Bayar:</label>
    <input type="number" name="totalBayar" required><br>

    <input type="submit" value="Tambah Transaksi">
</form>

<?php

echo "</body>
</html>";
?>
<?php
// ... (your existing PHP code)

// If form is submitted, process the input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values
    $noTransaksi = $_POST["noTransaksi"];
    $namaPembeli = $_POST["namaPembeli"];
    $judulBuku = $_POST["judulBuku"];
    $jumlahBuku = $_POST["jumlahBuku"];
    $totalBayar = $_POST["totalBayar"];

   
}

?>

<!DOCTYPE html>
<body>
<?php
if (!empty($transaksi)) {
    echo "<h3> Bukti Pembayaran:</h3>";
    echo "<table : = '2'>
        <tr>
            <th>No. Transaksi</th>
            <th>Nama Pembeli</th>
            <th>Judul Buku</th>
            <th>Jumlah Buku</th>
            <th>Total Bayar</th>
        </tr>";
    foreach ($transaksi as $row) {
        echo "<tr>
        <td>{$row[0]}</td>
        <td>{$row[1]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
        <td>{$row[4]}</td>
        </tr>";
    }    
}
?>
