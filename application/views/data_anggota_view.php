            <br>
            <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-default">
							<div class="panel-heading">Data Pendaftar</div>
					    	<div class="panel-body">
					    	<form method="post" action="">
					    	</form>

								<table id="projectdashboard" class="table table-striped table-bordered nowrap" style="width:100%">
									<thead>
										<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Kelas</th>
										<th>Telepon</th>
										<th>Aksi</th>
									</tr>
									</thead>
									
									<?php
									$no = 1;
									$alert ="'Apakah anda yakin menghapus data ini?'";
									foreach ($anggota as $data) {
										echo'
									<tbody>
									<tr class="active">
									    <td>'.$no.'</td>
										<td>'.$data->nama.'</td>
										<td>'.$data->kelas.'</td>
										<td>'.$data->telp.'</td>
										<td>
											<a href="'.base_url().'index.php/admin/get_detil/'.$data->id_anggota.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
											<a href="'.base_url().'index.php/admin/hapus/'.$data->id_anggota.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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