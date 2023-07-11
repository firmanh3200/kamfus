<?php
include 'db_connect.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['SimpanLaporanBaru'])) {
    $kode_kegiatan = $_POST['kode_kegiatan'];
    $volume = $_POST['volume'];
    $bulan = $_POST['bulan'];
    $nipbaru = $_POST['nipbaru'];
    $tautan = $_POST['tautan'];

    $kode_ak = $_POST['kode_ak'];
    $ak = $_POST['ak'];

    // Menghitung nilai angka kredit berdasarkan ak dan volume
    $totalAk = 0;
    foreach ($ak as $index => $value) {
        $totalAk += $value * $volume[$index];
    }
    $angka_kredit = $totalAk;

    // Menyimpan data ke dalam tabel tbl_laporanbaru
    $query = "INSERT INTO tbl_laporanbaru (kode_kegiatan, volume, bulan, nipbaru, kode_ak, tautan, angka_kredit) VALUES ('$kode_kegiatan', '$volume', '$bulan', '$nipbaru', '" . implode(',', $kode_ak) . "', '$tautan', '$angka_kredit')";

    if (mysqli_query($conn, $query)) {
        echo "Laporan Anda berhasil disimpan";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
