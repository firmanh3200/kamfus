<?php
session_start();
include_once('db_connect.php');

	if(isset($_POST['lihat'])){
		$id = $_POST['id'];
		$kode = $_POST['kode'];
		$pjk = $_POST['pjk'];
		$kegiatan = $_POST['kegiatan'];
		$uraian = $_POST['uraian'];
		$satuan = $_POST['satuan'];
		$bukti = $_POST['bukti'];
		$ak = $_POST['ak'];
		$tingkat = $_POST['tingkat'];
		$kode_perka = $_POST['kode_perka'];
		$unsur = $_POST['unsur'];
		$pelaksana = $_POST['pelaksana'];
		$keterangan = $_POST['keterangan'];
		$stat1 = $_POST['stat1'];
		$stat2 = $_POST['stat2'];
		$stat3 = $_POST['stat3'];
		$stat4 = $_POST['stat4'];
		$stat5 = $_POST['stat5'];
		$stat6 = $_POST['stat6'];
		
		$sql = "UPDATE kamus SET keterangan = '$keterangan', uraian = '$uraian', bukti = '$bukti' 
		WHERE id = '$id'";

		//use for MySQLi Procedural
		if(mysqli_query($conn, $sql)){
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
?>