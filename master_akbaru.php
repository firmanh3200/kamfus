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
							<h3><strong><center>Angka Kredit PerMenPAN-RB 2022</center></strong></h3>
								<hr>
								<!-- Tabel pertama -->
								<table class="table" id="tabel-1">
									<thead>
										<tr>
											<th>Pelaksana</th>
											<th>Uraian Kegiatan</th>
											<th>Output</th>
											<th>AK</th>
											<th>Pilih</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$qry = $conn->query("SELECT tbl_akbaru.kode_pelaksana, tbl_akbaru.kode_uraian, nama_pelaksana, uraian_kegiatan, output, ak 
															FROM tbl_akbaru 
															INNER JOIN tbl_jft ON tbl_akbaru.kode_pelaksana = tbl_jft.kode_pelaksana
															INNER JOIN tbl_uraianbaru ON tbl_akbaru.kode_uraian = tbl_uraianbaru.kode_uraian
															ORDER BY kode_pelaksana ASC");

										if ($qry === false) {
											// Menampilkan pesan kesalahan jika terjadi kesalahan dalam eksekusi query
											echo "Error executing query: " . $conn->error;
										} else {
											while ($row = $qry->fetch_assoc()) {
												$trans = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES);
												?>
												<tr>
													<td><?php echo ucwords($row['nama_pelaksana']) ?></td>
													<td><?php echo ucwords($row['uraian_kegiatan']) ?></td>
													<td><?php echo ucwords($row['output']) ?></td>
													<td class="text-right"><?php echo ucwords($row['ak']) ?></td>
													<td class="text-center"><input type="checkbox" class="selector-checkbox"></td>
												</tr>
												<?php
											}
										}
										?>
									</tbody>
								</table>
								<br><br><hr>
								<!-- Tabel kedua (yang akan diisi dengan baris yang dipindahkan) -->
								<h3>Pekerjaan Anda</h3>
								<form id="formLaporan" action="proses_simpan.php" method="post">
								<table class="table" id="tabel-2">
									<thead>
										<tr>
											<th>Jabatan</th>
											<th>Pekerjaan</th>
											<th>Output</th>
											<th>AK</th>
										</tr>
									</thead>
									<tbody id="tabel-2-body">
										<!-- Baris-baris akan ditambahkan secara dinamis melalui JavaScript -->
									</tbody>
								</table>
								<br><hr>
								<div class="row table">
									<div class="col-md-12">
										<label for="nama_kegiatan">Pada Kegiatan:</label>
										<select name="nama_kegiatan" id="nama_kegiatan">
											<option value=""></option>
											<?php
												$queryKegiatan = "SELECT DISTINCT nama_kegiatan FROM tbl_kegiatan32 ORDER BY nama_kegiatan ASC";
												$resultKegiatan = mysqli_query($conn, $queryKegiatan);
												$selectedKegiatan = isset($_POST['nama_kegiatan']) ? $_POST['nama_kegiatan'] : '';
												while ($row = mysqli_fetch_assoc($resultKegiatan)) {
													$option = $row['nama_kegiatan'];
													echo "<option value='$option'" . ($selectedKegiatan == $option ? ' selected' : '') . ">$option</option>";
												}
											?>
										</select>
									</div>
								</div>
								<br>
								<div class="row table">
									<div class="col-md-3">
										<label for="volume">Sebanyak (Volume):</label>
										<input type="text" id="volume" name="volume" required>
									</div>
									<div class="col-md-3">
										<label for="bulan">Bulan Pelaksanaan:</label>
										<input type="date" id="bulan" name="bulan" required>
									</div>
									<div class="col-md-4">
										<label for="niplama">Isikan NIP Lama Anda:</label>
										<input type="text" id="niplama" name="niplama" required>
									</div>
									<div class="col-md-2">
										<button type="submit" id="submitBtn" class="btn btn-success">Simpan Laporan</button>
									</div>
								</div>
								</form>
							</div>
						</section>
					</div>
				</div>
		</div>
	</section>
	<hr>
	<div class="footer bg-primary">
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
			$('#tabel-1').DataTable({
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
	<script>
		const selectorCheckboxes = document.querySelectorAll('#tabel-1 .selector-checkbox');

		selectorCheckboxes.forEach(function (checkbox) {
			checkbox.addEventListener('change', function () {
				const row = checkbox.parentNode.parentNode;
				const tabel2Body = document.getElementById('tabel-2-body');

				if (checkbox.checked) {
					const newRow = row.cloneNode(true);
					newRow.querySelector('.selector-checkbox').remove(); // Menghapus kotak selector dari baris yang dipindahkan
					tabel2Body.appendChild(newRow);
				} else {
					row.parentNode.appendChild(row);
				}
			});
		});

		document.getElementById('submitBtn').addEventListener('click', function () {
			const tabel2Rows = document.querySelectorAll('#tabel-2-body tr');
			const niplama = document.getElementById('niplama').value;

			tabel2Rows.forEach(function (row) {
				const pelaksana = row.querySelector('td:nth-child(1)').textContent;
				const uraianKegiatan = row.querySelector('td:nth-child(2)').textContent;
				const output = row.querySelector('td:nth-child(3)').textContent;
				const ak = row.querySelector('td:nth-child(4)').textContent;
				const kegiatanProyek = row.querySelector('td:nth-child(5) input').value;
				const volume = row.querySelector('td:nth-child(6) input').value;

				// Kirim data ke server atau lakukan tindakan lain sesuai kebutuhan Anda
				console.log('Niplama:', niplama);
				console.log('Pelaksana:', pelaksana);
				console.log('Uraian Kegiatan:', uraianKegiatan);
				console.log('Output:', output);
				console.log('AK:', ak);
				console.log('Kegiatan/Proyek:', kegiatanProyek);
				console.log('Volume:', volume);
				console.log('---');
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$("#formLaporan").submit(function(e) {
				e.preventDefault(); // Menghentikan pengiriman form secara default
				var formData = $(this).serialize(); // Mengambil data form

				// Kirim data ke server menggunakan AJAX
				$.ajax({
					url: $(this).attr("action"),
					type: $(this).attr("method"),
					data: formData,
					success: function(response) {
						// Tindakan setelah berhasil menyimpan laporan
						alert("Laporan berhasil disimpan!");
						// Reset form atau lakukan tindakan lainnya
					},
					error: function() {
						// Tindakan jika terjadi kesalahan dalam menyimpan laporan
						alert("Terjadi kesalahan dalam menyimpan laporan. Silakan coba lagi!");
					}
				});
			});
		});
	</script>
	</body>

</html>