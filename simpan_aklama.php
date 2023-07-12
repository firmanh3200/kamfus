<?php
include 'db_connect.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['SimpanLaporanLama'])) {
    $id_butirlama = $_POST['id_butirlama'];
    $volume = $_POST['volume'];
    $bulan = $_POST['bulan'];
    $nipbaru = $_POST['nipbaru'];
    $tautan = $_POST['tautan'];
    $angka_kredit = $_POST['ak'];


    // Menyimpan data Butir Lama ke dalam tabel 
    $query = "INSERT INTO tbl_laporanlama (id_butirlama, volume, bulan, nipbaru, tautan, ak) 
    VALUES ('$id_butirlama', '$volume', '$bulan', '$nipbaru', '$tautan', '$angka_kredit')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Laporan Anda Berhasil Disimpan'); window.location.href = '{$_SERVER['HTTP_REFERER']}';</script>";
    } else {
        echo "Laporan Anda Gagal tersimpan, cek kembali isian atau lapor developer";
    }
}
?>
