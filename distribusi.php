<?php
include 'db_connect.php';
?>
<html class="fixed">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>KamFuS</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="CKP Target">
	<meta name="author" content="KamFuS">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <!-- CSS Files -->
    <link href="./assets/css/blk-design-system.css" rel="stylesheet" />
    <style>
    table.dataTable th, td {
    font-size: 10pt;
    }
    </style>
</head>

<body class="profile-page">
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<section class="panel">
					<div class="panel-body">
						<a href="kalkulator2.php" class="btn btn-success">Kalkulator</a>
						<a href="https://webapps.bps.go.id/kipapp" class="btn btn-warning" target="_BLank">KipApp</a>
						<a href="https://smartkit.32net.id" class="btn btn-primary" target="_BLank">SmartKit</a>
						<a href="sosial.php" class="btn btn-default" target="_BLank">Sosial</a>
						<a href="produksi.php" class="btn btn-default" target="_BLank">Produksi</a>
						<a href="distribusi.php" class="btn btn-default" target="_BLank">Distribusi</a>
						<a href="nerwilis.php" class="btn btn-default" target="_BLank">Nerwilis</a>
						<a href="ipds.php" class="btn btn-default" target="_BLank">IPDS</a>
					</div>
				</section>
			</div>
		</header>
		<!-- end: header -->

		<section role="main" class="content-body">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xl-12">
						<section class="panel">
							<div class="panel-body">
							<h3><strong><center>Kegiatan Bidang/ Fungsi Statistik Distribusi</center></strong></h3>
								<hr>
								<table class="table table-bordered table-striped mb-none" id="sosial" data-swf-path="https://cdn.datatables.net/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf">
									<thead>
                    					<tr>
                    						<th class="text-center">Kode Perka</th>
                    						<th class="text-center">Statistisi</th>
											<th class="text-center">Pekerjaan Anda</th>
                    						<th class="text-center">Satuan Hasil</th>
                    						<th class="text-center">Angka Kredit</th>
                    						<th class="text-center">Penjelasan</th>
                    					</tr>
                    				</thead>
									<tbody>
                    					<?php
										$qry = $conn->query("SELECT * FROM kamus WHERE kode_pjk='4' 
										order by kegiatan AND kode_perka asc");
                    					while($row= $qry->fetch_assoc()):
                    						$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    					$number=$row['ak'];
										if ($number < 1) {
										  $formatted_number = number_format($number, 3); // Menampilkan 3 desimal jika angka kurang dari 1
										} else {
										  $formatted_number = number_format($number, 0); // Menampilkan tanpa desimal jika angka 1 atau lebih
										};
                    					
                    					?>
                    					<tr>
                    						<td class="text-center"><?php echo ucwords($row['kode_perka']) ?></td>
                    						<td><?php echo ucwords($row['pelaksana']) ?></td>
                    						<td><?php echo ucwords($row['uraian']) . ' pada Kegiatan (' . $row['kegiatan'] . ')'; ?></td>
											<td class="text-center"><?php echo $row['satuan'] ?></td>
                    						<td class="text-center"><b><?php echo $formatted_number ?></b></td>
											<td class="text-center">
												<a class='btn btn-success btn-sm' data-toggle='modal' href='#lihat<?php echo $row['id'] ?> '>Detil</a>
											</td>
                    					</tr>	
                    				<?php include('lihat_kamus.php')  ?>
									<?php endwhile; ?>
                    				</tbody>
								</table>
							</div>
						</section>
					</div>
				</div>
		</section>
	</section>
	<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="title">KamFuS</h1>
          	<h5 class="title">BPS Provinsi Jawa Barat</h5>
          </div>
        </div>
      </div>
    </footer>
	
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#sosial').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				],
				paging: true,
				responsive: true,
				
			});
		});
	</script>
	</body>

</html>