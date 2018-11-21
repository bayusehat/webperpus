<br>
<table border="0" cellpadding="4" cellspacing="0" class="datatable table table-striped table-bordered">
									<tr class="active">
										<th>No</th>
										<th>Username</th>
										<th>Password</th>
										<th>Aksi</th>
									</tr>
									<?php
									$no=1;

									foreach ($admin as $data) {
										echo'
									
									<tr>
									    <td>'.$no.'</td>
									    <td>'.$data->username.'</td>
									    <td>'.$data->password.'</td>
									    <td>
									    
									    <a href="#" class="btn btn-info"><i class="glyphicon glyphicon-search"></i>Lihat</a>
									    <a href="'.base_url().'index.php/admin/hapus_admin/'.$data->username.'" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Hapus</a>
									    </td>
									 </tr>';
									 $no++;
									}
								?>
						         </table>
						     