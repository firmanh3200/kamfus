<?php
include 'db_connect.php';
?>
<html lang="id">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>KamFuS - Kamus Fungsional Statistisi</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="KamFuS">
	<meta name="author" content="KamFuS">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <!-- CSS Files -->
    <link href="./assets/css/adminlte.min.css" rel="stylesheet" />
    <style>
    body {
      margin: 0;
      padding: 0;
    }
    
    .header {
      position: sticky;
      top: 0;
      background-color: black;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 10px;
      z-index: 1;
      align-items: center;
      width: 100%;
    }
    
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-top: 25px;
      flex-wrap: wrap;
      max-width: 90%;
      font-size: 13px;
      margin: 0 auto;
    }

    table.dataTable th, td {
    font-size: 10pt;
	valign: top;
    }
    </style>
    </style>
</head>

<body class="index-page">
	<section class="body">

		<!-- start: header -->
		<div class="header btn-primary">
                <a href="index.php" class="btn btn-sm btn-success style="align: center">Home</a>
                <a href="https://webapps.bps.go.id/kipapp" class="btn btn-sm btn-warning" target="_BLank">KipApp</a>
                <a href="https://smartkit.32net.id" class="btn btn-sm btn-info" target="_BLank">SmartKit</a>
		</div>
		<!-- end: header -->
<br><br>
		<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xl-12">
						<section class="panel">
							<div class="panel-body">
								<h3><strong><center>Aktivitas Badan Pusat Statistik</center></strong></h3>
								<hr>
								<table class="table table-bordered table-striped mb-none" id="sosial" data-swf-path="https://cdn.datatables.net/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf">
									<thead>
                    					<tr>
                    						<th class="text-center">Kedeputian Bidang</th>
                    						<th class="text-center">Direktorat</th>
											<th class="text-center">Nama Kegiatan</th>
                    					</tr>
                    				</thead>
									<tbody>
                    					<?php
										$qry = $conn->query("SELECT * 
										FROM tbl_kegiatanbaru order by deputi asc");
                    					while($row= $qry->fetch_assoc()):
                    						$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    					?>
                    					<tr>
                    						<td><?php echo ucwords($row['deputi']) ?></td>
                    						<td><?php echo ucwords($row['direktorat']) ?></td>
                    						<td><?php echo ucwords($row['nama_keg'])?></td>
										</tr>	
                    					<?php endwhile; ?>
                    				</tbody>
								</table>
							</div>
						</section>
					</div>
				</div>
					<br><hr>
					<a href="https://jabar.bps.go.id">Informasi lebih lengkap di jabar.bps.go.id</a>
					<br><hr>
		</div>
	</section>
	<div class="footer btn-primary">
        <div class="container">
            <h2 class="title">KamFuS</h2>
            <h3 class="title">BPS Provinsi Jawa Barat</h3>
        </div>
    </div>
	
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
				pageLength: 5,
				responsive: true,
				
			});
		});
	</script>
	</body>

</html>