<br>
	<div class="panel panel-default">
		<div class="panel-heading">
			Data Admin
		</div>
		<div class="panel-body">
			<table id="projectdashboard" class="table table-striped table-bordered nowrap" style="width:100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Password</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
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
				</tbody>
			</table>
		</div>
	</div>
	
						     