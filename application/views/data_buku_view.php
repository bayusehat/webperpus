<br>
            <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-default">
							<div class="panel-heading">Data Pendaftar</div>
					    	<div class="panel-body">
					    	<form method="post" action="">
					    	</form>

								<table border="0" cellpadding="4" cellspacing="0" class="datatable table table-striped table-bordered">
									<tr>
										<th>No</th>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
										<th>Tahun</th>
										<th>Lokasi</th>
										<th>Aksi</th>
									</tr>
									<?php
									$no = 1;
									$alert ="'Apakah anda yakin menghapus data ini?'";
									foreach ($buku as $data) {
										echo'
									
									<tr class="active">
									    <td>'.$no.'</td>
										<td>'.$data->judul.'</td>
										<td>'.$data->pengarang.'</td>
										<td>'.$data->penerbit.'</td>
										<td>'.$data->tahun.'</td>
										<td>'.$data->lokasi.'</td>
										<td>
											<a href="'.base_url().'index.php/admin/get_detil_buku/'.$data->id_buku.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
											<a href="'.base_url().'index.php/admin/hapus_buku/'.$data->id_buku.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
										</td>
									</tr>
									';
									$no++;
								   }
								?>
								</table>
							</div>
						</div>
					</div>
				</div>