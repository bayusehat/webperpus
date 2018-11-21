<div class="container" style="max-width: 800px">  
		<br>
			<form method="post" id="form-pendaftaran" action="<?php echo base_url(); ?>index.php/admin/edit_buku/<?php echo $detil->id_buku; ?>" >
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
							<div class="panel-heading">Lihat Detil Data Buku</div>
					    	<div class="panel-body">
					    		
									<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
									<input type="text" id="judul" name="judul" autofocus placeholder="Judul" class="form-control" value="<?php echo $detil->judul; ?>" />
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" id="pengarang" name="pengarang" autofocus placeholder="pengarang" class="form-control" value="<?php echo $detil->pengarang; ?>" />
									</div>
									<br>
						    		<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
										<input class="form-control" type="text" name="penerbit" id="penerbit" value="<?php echo $detil->penerbit; ?>">
									</div>
									<br>
						    		<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
										<input type="number" id="tahun" name="tahun" autofocus placeholder="Tahun" class="form-control" value="<?php echo $detil->tahun; ?>" />
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										<input type="text" id="lokasi" name="lokasi" autofocus placeholder="Lokasi" class="form-control" value="<?php echo $detil->lokasi; ?>" />
									</div>
								
								<!-- LINK KEMBALI KE TABEL DATA SISWA -->
								<div class="col">
								<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-top: 10px;">
									<a href="<?php echo base_url(); ?>index.php/admin/data_buku/" class="btn btn-block btn-md btn-danger">Kembali</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-top: 10px;">
									<input type="submit" name="submit" value="Edit" class="btn btn-block btn-md btn-info">
								</div>
								</div>
							</div>
						</div>-
					</div>
				</div>
			<br>
		</div>