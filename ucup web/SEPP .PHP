<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Diskon Belanja Buku</title>
</head>
<body>

<?php


// Fungsi untuk menghitung diskon
function hitungDiskon($totalBelanja, $jumlahTransaksi) {
    $diskon = 0;

    // Diskon 10% untuk total belanja lebih dari 150.000
    if ($totalBelanja > 150000) {
        $diskon += 0.1;
    }

    // Diskon tambahan 5% untuk 50 transaksi pertama
    if ($jumlahTransaksi <= 50) {
        $diskon += 0.05;
    }

    return $diskon;
}

// Informasi transaksi
$transaksi = array(
    array("001", "John Doe", "Harry Potter", 2, 120000),
    array("002", "Jane Smith", "Lord of the Rings", 3, 180000),
    // Tambahkan transaksi lainnya sesuai kebutuhan
);

echo "<h2>Informasi Transaksi:</h2>";
echo "<table border='1'>";
echo "<tr>
        <th>No. Transaksi</th>
        <th>Nama Pembeli</th>
        <th>Judul Buku</th>
        <th>Jumlah Buku</th>
        <th>Total Bayar</th>
        <th>Diskon</th>
        <th>Total Bayar Setelah Diskon</th>
      </tr>";

$totalSemuaTransaksi = 0;
$jumlahTransaksi = count($transaksi);

foreach ($transaksi as $data) {
    $noTransaksi = $data[0];
    $namaPembeli = $data[1];
    $judulBuku = $data[2];
    $jumlahBuku = $data[3];
    $totalBayar = $data[4];

    // Hitung diskon
    $diskon = hitungDiskon($totalBayar, $noTransaksi);

    // Hitung total bayar setelah diskon
    $totalBayarDiskon = $totalBayar - ($totalBayar * $diskon);

    // Tampilkan informasi transaksi
    echo "<tr>
            <td>$noTransaksi</td>
            <td>$namaPembeli</td>
            <td>$judulBuku</td>
            <td>$jumlahBuku</td>
            <td>$totalBayar</td>
            <td>" . ($diskon * 100) . "%</td>
            <td>$totalBayarDiskon</td>
          </tr>";

    // Akumulasi total semua transaksi
    $totalSemuaTransaksi += $totalBayarDiskon;
}

echo "</table>";

echo "<h3>Total Seluruh Transaksi: $totalSemuaTransaksi</h3>";
?>

</body>
</html>
