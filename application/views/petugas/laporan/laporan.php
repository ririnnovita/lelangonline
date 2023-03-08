<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>
<body>

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body bg-light">
                <h3 class=" text-warning"><strong>GENERATE LAPORAN</strong></h3>
                <hr>
			<form method="post" action="" class="form-user">

			<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label ">
						<strong class="text-primary">Laporan Data Pemenang</strong>
					</label>
					<div>

					<a href="<?= base_url('petugas/laporan/cetak_laporan_pemenang'); ?>" class="btn btn-primary" data-toggle="modal" data-target="#cetaklaporanpemenang"><i class="fas fa-fw fa-print"></i> Cetak Data Pemenang</a>
					</div>
                </div>
				<hr>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label ">
						<strong class="text-primary">Laporan Data Lelang</strong>
					</label>
					<div>
					<a href="<?= base_url('petugas/laporan/cetak_laporan_lelang'); ?>" class="btn btn-primary" data-toggle="modal" data-target="#cetaklaporanlelang"><i class="fas fa-fw fa-print"></i> Cetak Data Lelang</a>

					</div>
                </div>
				<hr>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label ">
						<strong class="text-primary">Laporan Data Barang</strong>
					</label>
					<div>
					<a href="<?= base_url('petugas/laporan/cetak_laporan_barang'); ?>" class="btn btn-primary" data-toggle="modal" data-target="#cetaklaporanbarang"><i class="fas fa-fw fa-print"></i> Cetak Data Barang</a>

					</div>
                </div>
                </form>
          		</div>
			</div>
			</div>
			</div>


			<!-- laporan barang -->
            <div class="modal fade" id="cetaklaporanbarang" tabindex="-1" aria-labelledby="cetaklaporanbarang" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cetaklaporanbarang">Laporan Data Barang</h5>
                        <button type="button" class="btn-close" date-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
			<form method="post" action="<?= base_url('petugas/laporan/cetak_laporan_barang') ?>" class="form-user">
                
                <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label ">
						<strong>Tanggal Mulai</strong>
					</label>
					<div>
                    <input type="date" name="tgl_barang_awal" class="form-control" required>
					</div>
                </div>
                <div class="form-group row">
					<label for="" class="col-sm-5 col-form-label ">
						<strong>Tanggal Akhir</strong>
					</label>
					<div>
						<input type="date" name="tgl_barang_akhir" class="form-control" required>
					</div>
                </div>
				<div class="form-group row">
				<label for="" class="col-sm-5 col-form-label"></label>
				<div>
					<button type="input" class="btn btn-warning"><i class="fas fa-fw fa-print"></i> Cetak</button>
				</div>
				</div>
                </form>
                </div>
            </div>
        </div>
        </div>
    



           <!-- laporan lelang -->
		   <div class="modal fade" id="cetaklaporanlelang" tabindex="-1" aria-labelledby="cetaklaporanlelang" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cetaklaporanlelang">Laporan Data Lelang</h5>
                        <button type="button" class="btn-close" date-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
					<form method="post" action="<?= base_url('petugas/laporan/cetak_laporan_lelang') ?>" class="form-user">
                
                <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label ">
						<strong>Tanggal Mulai</strong>
					</label>
					<div>
                    <input type="date" name="tgl_lelang_awal" class="form-control" required>
					</div>
                </div>
                <div class="form-group row">
					<label for="" class="col-sm-5 col-form-label ">
						<strong>Tanggal Akhir</strong>
					</label>
					<div>
						<input type="date" name="tgl_lelang_akhir" class="form-control" required>
					</div>
                </div>
				<div class="form-group row">
				<label for="" class="col-sm-5 col-form-label"></label>
				<div>
					<button type="input" class="btn btn-warning"><i class="fas fa-fw fa-print"></i> Cetak</button>
				</div>
				</div>
                </form>
                </div>
            </div>
        </div>
        </div>
    
			<!-- laporan pemenang -->
            <div class="modal fade" id="cetaklaporanpemenang" tabindex="-1" aria-labelledby="cetaklaporanpemenang" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cetaklaporanpemenang">Laporan Data Pemenang</h5>
                        <button type="button" class="btn-close" date-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
			<form method="post" action="<?= base_url('petugas/laporan/cetak_laporan_pemenang') ?>" class="form-user">
                
                <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label ">
						<strong>Tanggal Mulai</strong>
					</label>
					<div>
                    <input type="date" name="tgl_lelang_awal" class="form-control" required>
					</div>
                </div>
                <div class="form-group row">
					<label for="" class="col-sm-5 col-form-label ">
						<strong>Tanggal Akhir</strong>
					</label>
					<div>
						<input type="date" name="tgl_lelang_akhir" class="form-control" required>
					</div>
                </div>
				<div class="form-group row">
				<label for="" class="col-sm-5 col-form-label"></label>
				<div>
					<button type="input" class="btn btn-warning"><i class="fas fa-fw fa-print"></i> Cetak</button>
				</div>
				</div>
                </form>
                </div>
            </div>
        </div>
    
</body>
</html>

