<div class="container" style="max-width: 800px">

			<br>
			<form method="post" action="<?php echo base_url(); ?>index.php/admin/edit_anggota/<?php echo $detil->id_anggota; ?>">
			<?php
			if(!empty($notif)){
				echo'<div class="alert alert-info">';
				echo $notif;
				echo '</div>';
			} 
			?>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

					  	<div class="panel panel-info">
							<div class="panel-heading">Lihat Detil Data Siswa</div>
					    	<div class="panel-body">
					    		
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" id="nama" name="nama" autofocus placeholder="Nama" class="form-control" value="<?php echo $detil->nama; ?>" />
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
										<input type="text" id="tgl" name="tgl" autofocus placeholder="Tanggal" class="form-control" value="<?php echo $detil->tgl; ?>" />
									</div>
									<br>
						    		<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
										<textarea id="alamat" name="alamat" placeholder="Alamat Lengkap" class="form-control" ><?php echo $detil->alamat; ?></textarea>
									</div>
									<br>
						    		<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
										<input type="number" id="telp" name="telp" autofocus placeholder="Telepon" class="form-control" value="<?php echo $detil->telp; ?>" />
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										<input type="text" id="kelas" name="kelas" autofocus placeholder="Kelas" class="form-control" value="<?php echo $detil->kelas; ?>" />
									</div>
								<!-- LINK KEMBALI KE TABEL DATA SISWA -->
								
								<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-top: 10px;">
									<a href="<?php echo base_url(); ?>index.php/admin/data_anggota/" class="btn btn-block btn-md btn-danger">Kembali</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-top: 10px;">
								<input type="submit" name="submit" value="EDIT" class="btn btn-block btn-md btn-info">
								</div>
							</div>
						</div>
					</div>
				</div>
			<br>
		</div>