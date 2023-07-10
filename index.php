<?php
include 'db_connect.php';
?>
<!--
=========================================================
* BLK Design System- v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/blk-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        KamFuS - Kamus Fungsional Statistisi
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
    <style>
    .navbar {
        background-color: black;
    }

    .search-container {
      display: flex;
      justify-content: center;
      width: 100%;
    }

    .search-wrapper {
      display: flex;
      align-items: center;
      background-color: #f1f3f4;
      border-radius: 24px;
      padding: 6px;
    }

    .search-box {
      flex-grow: 1;
      border: none;
      background-color: transparent;
      padding: 8px;
      font-size: 16px;
      outline: none;
    }

    .search-btn {
      border: none;
      background-color: transparent;
      padding: 8px;
      cursor: pointer;
    }
    </style>
</head>

<body class="index-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-info " color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://jabar.bps.go.id" rel="tooltip" title="Kunjungi Website Kami"
                    data-placement="bottom" target="_blank">
                    <span>BPS</span> Provinsi Jawa Barat
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a>
                                KamFuS
                            </a>
                        </div>
                        <div class="col-6 collapse-close text-right">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item p-0">
                        <a class="nav-link" rel="tooltip" title="Subscribe Youtube Kami" data-placement="bottom"
                            href="https://www.youtube.com/@bpsjabar32" target="_blank">
                            <i class="fab fa-youtube"></i>
                            <p class="d-lg-none d-xl-none">Youtube</p>
                        </a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link" rel="tooltip" title="Follow Facebook Kami" data-placement="bottom"
                            href="https://www.facebook.com/bpsprovjabar/" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link" rel="tooltip" title="Follow Kami di Instagram" data-placement="bottom"
                            href="https://www.instagram.com/bpsjabar/" target="_blank">
                            <i class="fab fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="fa fa-cogs d-lg-none d-xl-none"></i> Pengelolaan Kinerja
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="https://s.id/berkibar" class="dropdown-item" target="_blank">
                                <i class="tim-icons icon-paper"></i> Pengetahuan Dasar
                            </a>
                            <a href="https://webapps.bps.go.id/kipapp/" class="dropdown-item" target="_blank">
                                <i class="tim-icons icon-bullet-list-67"></i>KipApp
                            </a>
                            <a href="https://smartkit.32net.id/" class="dropdown-item" target="_blank">
                                <i class="tim-icons icon-image-02"></i>SmartKit
                            </a>
                            <a href="#" class="dropdown-item" target="_blank">
                                <i class="tim-icons icon-single-02"></i>Login Tim Penilai
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header header-filter">
            <div class="squares square1"></div>
            <div class="squares square3"></div>
            <div class="squares square4"></div>
            <div class="squares square5"></div>
            <div class="squares square6"></div>
            <div class="squares square7"></div>
            <div class="container">
                <div class="content-center brand">
                    <h1 class="h1-seo">KamFuS</h1>
                    <h5 class="h5-seo">Kamus Fungsional Statistisi</h5>
                    <div class="search-container">
                        <form action="cari.php" method="GET">
                            <div class="search-wrapper">                        
                                <input type="text" name="query" class="search-box" placeholder="nama survei/ sensus...">
                                <input type="submit" value="Cari" class="search-btn btn-round btn-success">
                            </div>
                        </form>
                    </div>
                    <h5 class="h5-seo">Mendukung Pengelolaan Kinerja</h5>
                </div>
            </div>
        </div>
        <div class="main">
            <!-- Pengetahuan Dasar -->
            <div class="squares square3"></div>
            <div class="squares square5"></div>
            <div class="squares square7"></div>
            <div class="section section-javascript">
                <img src="assets/img/path5.png" class="path">
                <img src="assets/img/path5.png" class="path path1">
                <div class="container">
                    <h3 class="title mb-5">Regulasi</h3>
                    <div class="row" id="modals">
                        <div class="col-md-2">
                            <button class="btn btn-info" data-toggle="modal" data-target="#myModal">
                                PerMenPAN 19/2013
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-warning" data-toggle="modal" data-target="#myModal6">
                                PerMenPAN 6/2022
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal12">
                                PerMenPAN 12/2022
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-warning" data-toggle="modal" data-target="#myModal13">
                                PerMenPAN 13/2022
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-info" data-toggle="modal" data-target="#myModal1">
                                PerMenPAN 1/2023
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="squares square3"></div>
            <div class="squares square5"></div>
            <div class="squares square7"></div>
            
            <div class="section section-javascript">
                <div class="container">
                    <h3 class="title mb-5">Akuntabilitas Kinerja</h3>
                    <div class="row" id="modals">
                        <div class="col-md-4">
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal-rencana">
                                Perencanaan Kinerja
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal-hasil">
                                Rencana Hasil Kerja
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal-laporan">
                                Evaluasi dan Pelaporan
                            </button>
                        </div>
                    </div>
                    <div class="row" id="modals">
                        <div class="col-md-4">
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal-iku">
                                Indikator Kinerja Utama
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal-fra">
                                Rencana Aksi
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal-iki">
                                Indikator Kinerja Individu
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <h3 class="title mb-5">Butir Kegiatan PerMenPAN 2013</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-sm btn-primary" href="kalkulator2.php">Hitung Angka Kredit Anda</a>
                        </div>
                    </div>
                    <hr><hr><hr>
                    <h4>Berdasarkan Penanggung Jawab Kegiatan</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <a class="btn btn-sm btn-info" href="sosial.php">Statistik Sosial</a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-sm btn-info" href="produksi.php">Statistik Produksi</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-sm btn-info" href="distribusi.php">Statistik Distribusi</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a class="btn btn-sm btn-info" href="nerwilis.php">Nerwilis</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-sm btn-info" href="ipds.php">I P D S</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-sm btn-info" href="umum.php">Umum</a>
                        </div>
                    </div>
                    <hr><hr>
                    <h4>Berdasarkan Jabatan</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <a class="btn btn-sm btn-warning" href="stat1.php">Statistisi Pelaksana</a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-sm btn-warning" href="stat2.php">Statistisi Pelaksana Lanjutan</a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-sm btn-warning" href="stat3.php">Statistisi Penyelia</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a class="btn btn-sm btn-warning" href="stat4.php">Statistisi Pertama</a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-sm btn-warning" href="stat5.php">Statistisi Muda</a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-sm btn-warning" href="stat6.php">Statistisi Madya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <h3 class="title mb-5">Butir Kegiatan PerMenPAN-RB 2022</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <a class="btn btn-md-3 btn-info" href="master_dasar.php">Aktivitas BPS</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-md-3 btn-info" href="kegiatan32.php">Kegiatan BPS Jabar</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-md-3 btn-info" href="master_akbaru.php">Master Angka Kredit Baru</a>
                        </div>
						<div class="col-md-3">
                            <a class="btn btn-md-3 btn-info" href="laporanjft.php">Laporan Kinerja</a>
                        </div> 
                    </div>
				</div>
			</div>
			<div class="section">
				<div class="container">
					<h3>Jumlah Angka Kredit Kumulatif untuk Pengangkatan dan Kenaikan Jabatan/Pangkat</h3>
					<div class="row md-6">
						<table class="table tbl-bordered-md-6 btn-default ">
							<thead>
								<tr>
									<td class="text-center" colspan="1" rowspan="2">Unsur Kegiatan/Jenjang</td>
								</tr>
								<tr>
									<td class="text-center" colspan="2" rowspan="1">Terampil</td>
									<td class="text-center" colspan="2" rowspan="1">Mahir</td>
									<td class="text-center" colspan="2" rowspan="1">Penyelia</td>
								</tr>
								<tr>
									<td>Golongan</td>
									<td class="text-center" rowspan="1">II/c</td>
									<td class="text-center" rowspan="1">II/d</td>
									<td class="text-center" rowspan="1">III/a</td>
									<td class="text-center" rowspan="1">III/b</td>
									<td class="text-center" rowspan="1">III/c</td>
									<td class="text-center" rowspan="1">III/d</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2"><p>Kegiatan Statistik yang meliputi kegiatan<br>
										penyediaan Data dan informasi Statistik,<br>
										dan penguatan Sistem Statistik Nasional</p></td>
									
									<td class="text-center">20</td>
									<td class="text-center">20</td>
									<td class="text-center">50</td>
									<td class="text-center">50</td>
									<td class="text-center">100</td>
									<td class="text-center">100</td>
								</tr>
							</tbody>
						</table>
						
						<table class="table tbl-bordered-md-6 btn-default ">
							<thead>
								<tr>
									<td class="text-center" colspan="1" rowspan="2">Unsur Kegiatan/Jenjang</td>
								</tr>
								<tr>
									<td class="text-center" colspan="2" rowspan="1">Pertama</td>
									<td class="text-center" colspan="2" rowspan="1">Muda</td>
									<td class="text-center" colspan="3" rowspan="1">Madya</td>
									<td class="text-center" colspan="2" rowspan="1">Utama</td>
								</tr>
								<tr>
									<td>Pendidikan S1 atau DIV</td>
									<td class="text-center" rowspan="1">III/a</td>
									<td class="text-center" rowspan="1">III/b</td>
									<td class="text-center" rowspan="1">III/c</td>
									<td class="text-center" rowspan="1">III/d</td>
									<td class="text-center" rowspan="1">IV/a</td>
									<td class="text-center" rowspan="1">IV/b</td>
									<td class="text-center" rowspan="1">IV/c</td>
									<td class="text-center" rowspan="1">IV/d</td>
									<td class="text-center" rowspan="1">IV/e</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2"><p>Penyediaan data dan
														informasi statistik, <br>penjaminan
														kualitas dan pengembangan
														statistik, <br>serta penguatan sistem
														statistik nasional</p></td>
									
									<td class="text-center">50</td>
									<td class="text-center">50</td>
									<td class="text-center">100</td>
									<td class="text-center">100</td>
									<td class="text-center">150</td>
									<td class="text-center">150</td>
									<td class="text-center">150</td>
									<td class="text-center">200</td>
									<td class="text-center">200</td>
								</tr>
							</tbody>
						</table>
						
						<table class="table tbl-bordered-md-6 btn-default ">
							<thead>
								<tr>
									<td class="text-center" colspan="1" rowspan="2">Unsur Kegiatan/Jenjang</td>
								</tr>
								<tr>
									<td class="text-center" colspan="1" rowspan="1">Pertama</td>
									<td class="text-center" colspan="2" rowspan="1">Muda</td>
									<td class="text-center" colspan="3" rowspan="1">Madya</td>
									<td class="text-center" colspan="2" rowspan="1">Utama</td>
								</tr>
								<tr>
									<td>Pendidikan Magister</td>
									<td class="text-center" rowspan="1">III/b</td>
									<td class="text-center" rowspan="1">III/c</td>
									<td class="text-center" rowspan="1">III/d</td>
									<td class="text-center" rowspan="1">IV/a</td>
									<td class="text-center" rowspan="1">IV/b</td>
									<td class="text-center" rowspan="1">IV/c</td>
									<td class="text-center" rowspan="1">IV/d</td>
									<td class="text-center" rowspan="1">IV/e</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2"><p>Penyediaan data dan
														informasi statistik, <br>penjaminan
														kualitas dan pengembangan
														statistik, <br>serta penguatan sistem
														statistik nasional</p></td>
									
									<td class="text-center">50</td>
									<td class="text-center">100</td>
									<td class="text-center">100</td>
									<td class="text-center">150</td>
									<td class="text-center">150</td>
									<td class="text-center">150</td>
									<td class="text-center">200</td>
									<td class="text-center">200</td>
								</tr>
							</tbody>
						</table>
						
						<table class="table tbl-bordered-md-6 btn-default ">
							<thead>
								<tr>
									<td class="text-center" colspan="1" rowspan="2">Unsur Kegiatan/Jenjang</td>
								</tr>
								<tr>
									<td class="text-center" colspan="2" rowspan="1">Muda</td>
									<td class="text-center" colspan="3" rowspan="1">Madya</td>
									<td class="text-center" colspan="2" rowspan="1">Utama</td>
								</tr>
								<tr>
									<td>Pendidikan Doktor</td>
									<td class="text-center" rowspan="1">III/c</td>
									<td class="text-center" rowspan="1">III/d</td>
									<td class="text-center" rowspan="1">IV/a</td>
									<td class="text-center" rowspan="1">IV/b</td>
									<td class="text-center" rowspan="1">IV/c</td>
									<td class="text-center" rowspan="1">IV/d</td>
									<td class="text-center" rowspan="1">IV/e</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2"><p>Penyediaan data dan
														informasi statistik, <br>penjaminan
														kualitas dan pengembangan
														statistik, <br>serta penguatan sistem
														statistik nasional</p></td>
									
									<td class="text-center">100</td>
									<td class="text-center">100</td>
									<td class="text-center">150</td>
									<td class="text-center">150</td>
									<td class="text-center">150</td>
									<td class="text-center">200</td>
									<td class="text-center">200</td>
								</tr>
							</tbody>
						</table>
					</div>
                </div>
            </div>

            <div class="section section-tabs">
                <div class="container">
                    <div class="title">
                        <h3 class="mb-3">Daftar Istilah</h3>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content tab-space">
                                <div class="tab-pane active" id="istilah">
                                    <iframe src="https://jabar.bps.go.id/Istilah.html" width="100%"
                                        height="480px"></iframe>
                                </div>
                                <a href="https://jabar.bps.go.id/Istilah.html" target="_blank">Buka di Window baru</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs on plain Card -->
                </div>
            </div>
        </div>
        <!-- Sart Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">PerMenPAN 19/2013</h4>
                    </div>
                    <div class="modal-body">
                        <iframe src='https://drive.google.com/file/d/1KJbxHD9CTmGPBCywK2eFgE8Rx0XQ3IAB/preview'
                            width='100%' height='480' allow='autoplay'></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">PerMenPAN 6/2022</h4>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://drive.google.com/file/d/1vAlpdHpf5pIuzH1nofVExt7tBnBhRCj0/preview"
                            width="100%" height="480" allow="autoplay"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">PerMenPAN 12/2022</h4>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://drive.google.com/file/d/1Yu9-cZfOVEtXIoFy1rODCPGMbwkiFMTS/preview"
                            width="100%" height="480" allow="autoplay"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">PerMenPAN 13/2022</h4>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://drive.google.com/file/d/1qIVWEAOp1OTeb4-b2Mm4nELw-VKO9pUz/preview"
                            width="100%" height="480" allow="autoplay"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">PerMenPAN 1/2023</h4>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://drive.google.com/file/d/1t4qKXchaPwyhxORjHSYrHRgstfWS2dXF/preview"
                            width="100%" height="480" allow="autoplay"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal-rencana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Rencana Kinerja</h4>
                    </div>
                    <div class="modal-body">
                        <p class="body">Perencanaan kinerja terdiri atas penyusunan dan penetapan SKP.
                            Dalam proses penyusunan SKP, Pimpinan dan Pegawai melakukan
                            dialog kinerja untuk penetapan dan klarifikasi Ekspektasi.<br><br>
                            Penetapan dan klarifikasi Ekspektasi merupakan proses untuk menentukan:<br>
                            a. rencana kinerja yang terdiri atas: <br>
                            <li>rencana hasil kerja Pegawai beserta ukuran keberhasilan/ indikator
                                kinerja individu dan target; dan </li>
                            <li>perilaku kerja Pegawai yang diharapkan; </li>
                            <br>
                            b. sumber daya yang dibutuhkan untuk pencapaian kinerja Pegawai;<br>
                            c. skema pertanggungjawaban kinerja Pegawai; dan<br>
                            d. konsekuensi atas pencapaian kinerja Pegawai.<br>
                            <br><br>
                            Penetapan dan klarifikasi Ekspektasi untuk penyusunan SKP dilakukan sejak
                            penyusunan rancangan perjanjian kinerja unit kerja.
                            Penetapan dan klarifikasi Ekspektasi dituangkan dalam dokumen SKP.<br><br>
                            Penetapan dan klarifikasi Ekspektasi dilakukan dengan mengacu pada:<br>
                            <li>perencanaan strategis (Renstra);</li>
                            <li>perjanjian kinerja unit kerja (PK);</li>
                            <li>organisasi dan tata kerja (Per BPS No. 8/2020);</li>
                            <li>rencana kinerja Pimpinan;</li>
                            <li>kompetensi, keahlian, dan/atau keterampilan Pegawai; dan</li>
                            <li>prioritas dalam rangka pencapaian kinerja organisasi/ unit kerja/ Pimpinan.</li>
                        </p>
                        <p>
                        <ul>
                            <a href="https://ppid.bps.go.id/upload/doc/Reviu_Rencana_Strategis_BPS_Provinsi_Jawa_Barat_2022-2024_1673924866.pdf"
                                target="_blank">Lihat Rencana Strategi</a><br>
                            <a href="https://ppid.bps.go.id/upload/doc/Perjanjian_Kinerja_2023_BPS_Provinsi_Jawa_Barat_1673867090.pdf"
                                target="_blank">Lihat Perjanjian Kinerja</a><br>
                            <a href="https://ppid.bps.go.id/upload/doc/Peraturan_Badan_Pusat_Statistik_Nomor_8_Tahun_2020_1679371551.pdf"
                                target="_blank">Lihat Organisasi dan Tata Kerja</a><br>
                            <a href="https://drive.google.com/file/d/1x9jChGzvVmhLdtbT8izycIpS02ga-6-o/view?usp=sharing"
                                target="_blank">Lihat Arah Perubahan BPS</a><br>
                            <a href="" target="_blank">Lihat Rencana Aksi</a><br>
                            <a href="https://webapps.bps.go.id/kipapp/" target="_blank">Buat Rencana Kinerja di
                                KipApp</a>
                        </ul>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal-hasil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Rencana Hasil Kerja</h4>
                    </div>
                    <div class="modal-body">
                        <div class="flourish-embed flourish-table" data-src="visualisation/14358422"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal-laporan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Evaluasi dan Pelaporan Kinerja</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Laporkan hasil kinerja Anda di:<br>
                        <ul>
                            <a href="https://webapps.bps.go.id/kipapp/" target="_blank">KipApp</a> |
                            <a href="https://smartkit.32net.id/" target="_blank">SmartKit</a>
                        </ul>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal-iku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Indikator Kinerja Utama</h4>
                    </div>
                    <div class="modal-body">
                    	<div class="flourish-embed flourish-table" data-src="visualisation/14152017"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
					</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal-fra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Rencana Aksi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="flourish-embed flourish-table" data-src="visualisation/14358963"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal-iki" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Indikator Kinerja Individu</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->

    </div>
    <div class="footer">
        <div class="container">
            <h2 class="title">KamFuS</h2>
            <h3 class="title">BPS Provinsi Jawa Barat</h3>
        </div>
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#tabel-filter').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            paging: true,
            responsive: true,

        });
    });
    </script>
    <script>
    $(document).ready(function() {
        blackKit.initDatePicker();
        blackKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
    </script>
</body>

</html>