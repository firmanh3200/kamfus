<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM kamus where id = ".$_GET['id'] )->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'master_kegiatan.php';
?>