<?php
$array_data_penjualan = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    array_push(
        $array_data_penjualan,
        array ("nama_produk" => $_POST['nama_produk'], 'harga_produk' => $_POST["harga_produk"],'jumlah_terjual' => $_POST['jumlah_terjual'],"total" => $_POST["harga_produk"] * $_POST['jumlah_terjual'])
        );
}

function FormatRupiah($angka){
    $rupiah = "Rp.".number_format($angka,"2",",",".");
    return $rupiah;
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Sistem Pencatatan Data Penjualan</title>
  <style>
    table {
      border-collapse: collapse;
      width: 70%;
    }

    th, td {
      padding: 5px;
      border: 1px solid black;
    }
  </style>
</head>
<body>

<h1>Sistem Pencatatan Data Penjualan</h1>

<h2>[Form Input untuk Data Penjualan]</h2>

<h2>Laporan Penjualan:</h2>

<table>
  <tr>
    <th>Nama</th>
    <th>Harga Per Produk</th>
    <th>Jumlah Terjual</th>
    <th>Total penjualan</th>
  </tr>
  <tr>
    <td>Produk A</td>
    <td><?= FormatRupiah(10000);?></td>
    <td>5</td>
    <td><?= FormatRupiah(50000);?></td>
  </tr>
  <tr>
    <td>Produk B</td>
    <td><?= FormatRupiah(7500);?></td>
    <td>10</td>
    <td><?= FormatRupiah(75000);?></td>
  </tr>
  <tr>
    <td>Produk C</td>
    <td><?= FormatRupiah(12000);?></td>
    <td>8</td>
    <td><?= FormatRupiah(96000);?></td>
  </tr>
  <tr>
    <td>Total Penjualan</td>
    <td></td>
    <td>23</td>
    <td><?= FormatRupiah(221000);?></td>
  </tr>
</table>

</body>
</html>