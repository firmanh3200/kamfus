<?php
include('db_connect.php');

	if(isset($_POST['SimpanLaporanBaru'])){
		$kode_kegiatan = $_POST['kode_kegiatan'];
		$volume = $_POST['volume'];
		$bulan = $_POST['bulan'];
		$nipbaru = $_POST['nipbaru'];
		$kode_ak = implode(", ", $_POST['kode_ak']);
		$tautan = $_POST['tautan'];
		
        $sql = "INSERT INTO tbl_laporanbaru (kode_kegiatan, volume, bulan, nipbaru, kode_ak, tautan) 
				VALUES ('$kode_kegiatan', '$volume', '$bulan', '$nipbaru','$kode_ak', '$tautan')";

		//use for MySQLi Procedural
		if(mysqli_query($conn, $sql)){
            echo 'Sukses';
		}
		else{
			echo 'Ulangi, Cek kembali Isian Anda, karena terjadi kesalahan';
		}
	}
?>