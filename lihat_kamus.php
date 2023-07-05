<!-- Lihat Kamus -->
<?php if(!isset($conn)){ include 'db_connect.php'; } ?>
<div class="modal fade" id="lihat<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Penjelasan Butir Kegiatan</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="update.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Kode:</label>
					</div>
					<div class="col-sm-9">
						<text type="text" class="form-control" name="kode"><?php echo $row['kode']; ?></text>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Bidang/ PJK/ Fungsi: </label>
					</div>
					<div class="col-sm-9">
						<text class="form-control" name="pjk"><?php echo $row['pjk']; ?></text>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Kegiatan: </label>
					</div>
					<div class="col-sm-9">
						<textarea class="form-control" name="uraian" rows="2"><?php echo $row['kegiatan']; ?></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Pekerjaan: </label>
					</div>
					<div class="col-sm-9">
						<textarea class="form-control" name="uraian" rows="2"><?php echo $row['uraian']; ?></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Satuan: </label>
					</div>
					<div class="col-sm-9">
						<text class="form-control" name="satuan"><?php echo $row['satuan']; ?></text>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Bukti Dukung: </label>
					</div>
					<div class="col-sm-9">
						<textarea class="form-control" name="bukti" rows="3"><?php echo $row['bukti']; ?></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Kode Perka: </label>
					</div>
					<div class="col-sm-9">
						<text class="form-control" name="kode_perka"><?php echo $row['kode_perka']; ?></text>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Penjelasan: </label>
					</div>
					<div class="col-sm-9">
						<textarea class="form-control" name="keterangan" rows="10"><?php echo $row['keterangan']; ?></textarea>
					</div>
				</div>
				<?php
				$number1 = $row['stat1'];
					if ($number1 < 1) {
					$formatted_number1 = number_format($number1, 3); // Menampilkan 3 desimal jika angka kurang dari 1
					} else {
					$formatted_number1 = number_format($number1, 0); // Menampilkan tanpa desimal jika angka 1 atau lebih
					};
				$number2 = $row['stat2'];
					if ($number2 < 1) {
					$formatted_number2 = number_format($number2, 3); // Menampilkan 3 desimal jika angka kurang dari 1
					} else {
					$formatted_number2 = number_format($number2, 0); // Menampilkan tanpa desimal jika angka 1 atau lebih
					};
				$number3 = $row['stat3'];
					if ($number3 < 1) {
					$formatted_number3 = number_format($number3, 3); // Menampilkan 3 desimal jika angka kurang dari 1
					} else {
					$formatted_number3 = number_format($number3, 0); // Menampilkan tanpa desimal jika angka 1 atau lebih
					};
				$number4 = $row['stat4'];
					if ($number4 < 1) {
					$formatted_number4 = number_format($number4, 3); // Menampilkan 3 desimal jika angka kurang dari 1
					} else {
					$formatted_number4 = number_format($number4, 0); // Menampilkan tanpa desimal jika angka 1 atau lebih
					};
				$number5 = $row['stat5'];
					if ($number5 < 1) {
					$formatted_number5 = number_format($number5, 3); // Menampilkan 3 desimal jika angka kurang dari 1
					} else {
					$formatted_number5 = number_format($number5, 0); // Menampilkan tanpa desimal jika angka 1 atau lebih
					};
				$number6 = $row['stat6'];
					if ($number6 < 1) {
					$formatted_number6 = number_format($number6, 3); // Menampilkan 3 desimal jika angka kurang dari 1
					} else {
					$formatted_number6 = number_format($number6, 0); // Menampilkan tanpa desimal jika angka 1 atau lebih
					};
                ?>
				<div class="row form-group col-sm-12"><h4><center><strong>ANGKA KREDIT</strong></center></h4></div>
				<hr>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Statistisi Pelaksana: </label>
					</div>
					<div class="col-sm-3">
						<text class="form-control" name="stat1"><?php echo $formatted_number1; ?></text>
					</div>
					<div class="col-sm-3">
						<label class="control-label modal-label">Statistisi Pelaksana Lanjutan: </label>
					</div>
					<div class="col-sm-3">
						<text class="form-control" name="stat2"><?php echo $formatted_number2; ?></text>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Statistisi Penyelia: </label>
					</div>
					<div class="col-sm-3">
						<text class="form-control" name="stat3"><?php echo $formatted_number3; ?></text>
					</div>
					<div class="col-sm-3">
						<label class="control-label modal-label">Statistisi Pertama: </label>
					</div>
					<div class="col-sm-3">
						<text class="form-control" name="stat4"><?php echo $formatted_number4; ?></text>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label modal-label">Statistisi Muda: </label>
					</div>
					<div class="col-sm-3">
						<text class="form-control" name="stat5"><?php echo $formatted_number5; ?></text>
					</div>
				
					<div class="col-sm-3">
						<label class="control-label modal-label">Statistisi Madya: </label>
					</div>
					<div class="col-sm-3">
						<text class="form-control" name="stat6"><?php echo $formatted_number6; ?></text>
					</div>
				</div>
				
			</div> 
			</div>
            <!-- Update belum diaktifkan -->
			<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
                <button type="button" name="update" class="btn btn-info"><span class="glyphicon glyphicon-check"></span> UPDATE</button>
			</form>
            </div>

        </div>
    </div>
</div>