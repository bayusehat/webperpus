		<br>
            <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-default">
							<div class="panel-heading">Data Buku</div>
					    	<div class="panel-body">
					    	<form method="post" action="">
					    	</form>
								<table id="projectdashboard" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Judul</th>
											<th>Pengarang</th>
											<th>Penerbit</th>
											<th>Tahun</th>
											<th>Lokasi</th>
											<th>Dipinjam</th>
											<th>Stok Sekarang</th>
											<th>Aksi</th>
										</tr>
									</thead>
									
									<?php
									$no = 1;
									$alert ="'Apakah anda yakin menghapus data ini?'";
									$query = $this->db->query('SELECT count(judul) as pinjam,status FROM transaksi WHERE status="Belum dikembalikan"')->row();
									$pinjam = $query->pinjam;
									foreach ($buku as $data) {
										echo'
									<tbody>
									<tr class="active">
									    <td>'.$no.'</td>
										<td>'.$data->judul.'</td>
										<td>'.$data->pengarang.'</td>
										<td>'.$data->penerbit.'</td>
										<td>'.$data->tahun.'</td>
										<td>'.$data->lokasi.'</td>
										<td>'.$pinjam.'</td>
										<td>'.$data->stok.'</td>
										<td>
											<a href="'.base_url().'index.php/admin/get_detil_buku/'.$data->id_buku.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
											<a href="'.base_url().'index.php/admin/hapus_buku/'.$data->id_buku.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
										</td>
									</tr>
									</tbody>
									';
									$no++;
								   }
								?>
								</table>
							</div>
						</div>
					</div>
				</div>