<div class="container">

	<div class="row">
		<div class="col-md-12">
	

			<div class="card border-dark">
            <div class="card-header bg-warning text-white">
                <strong>DATA PENGGUNA</strong>
			</div>
			
			<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover table-bordered table-striped">
					<tr>
						<th>#</th>
						<th>Nama Pengguna</th>
						<th>Username</th>
						<th>Telp</th>
						<!-- <th>Level</th> -->
					</tr>
					<?php $i = 1;
					foreach ($tb_masyarakat as $my) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><img src="" alt=""><?= $my->nama_lengkap; ?></td>
							<td><?= $my->username; ?></td>
							<td><?= $my->telp; ?></td>
							<!-- <td><?= $my->id_level; ?></td> -->
                           
						</tr>
					<?php $i++;
					endforeach; ?>
				</table>
				</div></div>
			</div>
		</div>
	</div>
				</div>
</div>
