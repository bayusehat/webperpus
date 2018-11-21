<br>
<form method="post" id="form-pendaftaran" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/t_buku/simpan" enctype="multipart/form-data" >
				<?php
				if(!empty($notif)){
					echo'<div class="alert alert-info">';
					echo $notif;
					echo '</div>';
				} 
				?>
				<div class="col">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-default">
							<div class="panel-heading">Tambah Buku</div>
					    	<div class="panel-body">		        	
					        	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
									<input type="text" id="judul" name="judul" autofocus value="" placeholder="Judul" class="form-control"  />
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" id="pengarang" name="pengarang" autofocus value="" placeholder="Pengarang" class="form-control" />
								</div>
								<br>
					    		<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
									<input type="text" name="penerbit" id="penerbit" value="" class="form-control" placeholder="Penerbit">
								</div>
								<br>
					    		<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<input type="text" id="tahun" name="tahun" autofocus value="" placeholder="Tahun" class="form-control"  />
								</div>
								<br>
								<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
								<input type="text" name="lokasi" id="lokasi" autofocus value="" placeholder="Lokasi" class="form-control"/>
								</div>
								<br>
								<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
								<input type="text" name="stok" id="stok" autofocus value="" placeholder="stok" class="form-control"/>
								</div>
					    	</div>
					   	</div>
					   	<!---panel-->
					</div>
				</div>
				<div class="col">
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
						<input type="submit" name="submit" value="Tambah" class="btn btn-block btn-md btn-success">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
						<input type="reset" name="reset" value="Reset" class="btn btn-block btn-md btn-danger">
					</div>
				</div>
		</form>