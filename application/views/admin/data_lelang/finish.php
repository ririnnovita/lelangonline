<div class="container">

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
			</div>
			<form action="" method="post">
				<div class="form-group">
					<div class="alert alert-info">
						<p>jadikan <strong><?= $max_bid->nama_lengkap ?></strong> sebagai pemenang</p>
					</div>
					<button type="submit" name="finish" value="true" class="btn btn-info">Ya</button>
					<a href="<?= base_url('admin/data_lelang/view/') . $id_lelang ?>" class="btn btn-danger">Tidak</a>
				</div>
			</form>
		</div>
	</div>
	</div>
	</div>
	</div>

</div>
