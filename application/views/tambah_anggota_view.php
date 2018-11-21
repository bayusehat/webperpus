<br>
<form method="post" id="form-pendaftaran" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/t_anggota/daftar" enctype="multipart/form-data">
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
							<div class="panel-heading">Biodata Anggota</div>
					    	<div class="panel-body">
					        	
					        	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" id="nama" name="nama" autofocus value="" placeholder="Nama" class="form-control"  />
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
									<input type="date" id="tanggal" name="tgl" autofocus value="" placeholder="Tanggal Lahir" class="form-control" />
								</div>
								<!-- <div class="input-append date form_datetime">
								<input type="text" name="tgl" value="" readonly><span class="add-on"><i class="icon-th"></i></span>
								</div>
								<script type="text/javascript">
									$(."form_datetime").datetimepicker({
										format: "dd MM yyyy - hh:ii"
									});
								</script> -->
								<br>
					    		<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
									<textarea id="alamat" name="alamat" value="" placeholder="Alamat Lengkap" class="form-control" ></textarea>
								</div>
								<br>
					    		<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
									<input type="text" id="telp" name="telp" autofocus value="" placeholder="Telepon" class="form-control"  />
								</div>
								<br>
								<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
								<input type="text" name="kelas" id="kelas" autofocus value="" placeholder="Kelas" class="form-control"/>
								</div>
								<br>
					    	</div>
					   	</div>
					   	<!---panel-->
					</div>
				</div>
				<div class="col">
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
						<input type="submit" name="submit" value="Daftar" class="btn btn-block btn-md btn-success" data-toggle="tooltip" title="Klik Daftar">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
						<input type="reset" name="reset" value="Reset" class="btn btn-block btn-md btn-danger" data-toggle="tooltip" title="Klik Reset">
					</div>
				</div>
		</form>
		<script type="text/javascript">
			$(documnet).ready(function(){
				$('[data_toggle="tooltip"]').tooltip();
			})
		</script>