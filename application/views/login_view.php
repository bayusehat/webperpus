<!DOCTYPE html>
<html>
	<head>
		<title>Login Admin Perpustakaan</title>
		<link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container" style="padding-top: 150px;">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Login Administrator</h4></div>
				    	<div class="panel-body">
							<form action="<?php echo base_url(); ?>index.php/admin/masuk" id="form-login" method="post">
							<?php
                              if(!empty($notif)){
	                          echo '<div class="alert alert-danger">';
	                          echo $notif;
	                          echo '</div>';
                              }
                              ?> 
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>
									<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" id="password" name="password" autofocus value="" placeholder="Password" class="form-control" />
								</div>
								<br>
								<input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-sm btn-success">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
			</div>
		</div>
	</body>
</html>