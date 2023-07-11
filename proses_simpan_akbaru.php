<?php
include('db_connect.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	if(isset($_POST['SimpanLaporanBaru'])){
		$kode_kegiatan = $_POST['kode_kegiatan'];
		$volume = $_POST['volume'];
		$bulan = $_POST['bulan'];
		$ak = $_POST['ak'];
		$nipbaru = $_POST['nipbaru'];
		$kode_ak = implode(", ", $_POST['kode_ak']);
		$tautan = $_POST['tautan'];
		$angka_kredit = $ak * $volume;
		
        $sql = "INSERT INTO tbl_laporanbaru (kode_kegiatan, volume, bulan, nipbaru, kode_ak, tautan, angka_kredit) 
				VALUES ('$kode_kegiatan', '$volume', '$bulan', '$nipbaru','$kode_ak', '$tautan', '$angka_kredit')";

		//use for MySQLi Procedural
		if(mysqli_query($conn, $sql)){
            echo 'Sukses';
		}
		else{
			echo 'Error: ' . mysqli_error($conn);
		}
	}
?>