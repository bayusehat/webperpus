
 <br>
            <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-default">
							<div class="panel-heading">Data Transaksi</div>
					    	<div class="panel-body">
								<table id="projectdashboard" class="table table-striped table-bordered nowrap" style="width:100%">
									<thead>
										<tr>
										<th>No</th>
										<th>Nama Anggota</th>
										<th>Judul Buku</th>
										<th>Tanggal Pinjam</th>
										<th>Tanggal Kembali</th>
										<th>Status</th>
										<th>Denda</th>
										<th>Aksi</th>
									</tr>
									</thead>
									
									<?php
									$no = 1;
									$alert ="'Apakah anda yakin menghapus data ini?'";
									?>

									<?php

									foreach ($transaksi as $data) : ?>
									<?php
									$kembali = strtotime($data->tgl_kembali);
									$now = strtotime($data->tgl_pinjam);
									$telat = $now - $kembali;
									$telat = floor($telat/(60*60*24));
									$telat = $telat > 0 ? $telat : 0;
									$denda = $telat * 500;
									?>

									<tbody>
									<tr class="active">
									    <td><?php echo $no; ?></td>
										<td><?php echo $data->nama; ?></td>
										<td><?php echo $data->judul; ?></td>
										<td><?php echo $data->tgl_pinjam; ?></td>
										<td><?php echo $data->tgl_kembali; ?></td>
										<td><?php echo $data->status; ?></td>
										<td><?php echo $denda; ?></td>
										<td>    
											<!-- <a href="<?php echo base_url(); ?>index.php/admin/get_detil/<?php echo $data->id_transaksi; ?>" class="btn btn-block btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Lihat</a>
											<a href="<?php echo base_url(); ?>index.php/admin/hapus_transaksi/<?php echo $data->id_transaksi; ?>" class="btn btn-block btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
										<?php 
											if($data->status == 'Sudah dikembalikan'){
											echo '
											<a href="#" class="btn btn-block btn-default btn-sm"><i class="glyphicon glyphicon-check"></i></a>';
										}else{
											echo '<a href="'.base_url().'index.php/admin/pengembalian/'.$data->id_transaksi.'" class="btn btn-block btn-success btn-sm"><i class="glyphicon glyphicon-check"></i></a>';
										}
										?>
										</td>

									</tr>
								</tbody>
									<?php
									 $no++; 
									 ?>
								<?php endforeach; ?>

								</table>
							</div>
						</div>
					</div>
				</div>
