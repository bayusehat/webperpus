<!DOCTYPE>
<html>
<head>
    <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Sistem Informasi Perpustakaan</title>
</head>
<body>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistem Informasi Perpustakaan</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            <?php 
                   
                   if($this->session->userdata('type')=='0'){?>
                   <li><a href="<?php echo base_url(); ?>index.php/t_anggota/">Tambah Anggota</a>
                   </li>
                   <li><a href="<?php echo base_url(); ?>index.php/t_buku/">Tambah Buku</a></li>
                   <?php } ?>
                   
                   
                   

                   <li><a href="<?php echo base_url(); ?>index.php/t_transaksi/">Tambah transaksi</a>
                   </li>
                   <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/"><i class="fa fa-home fa-fw">
                        </i>Home</a>
                        </li>
                        <?php
                        if($this->session->userdata('type')=='0'){?>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/data_anggota"><i class="glyphicon glyphicon-user"></i> Data Anggota</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/data_buku/"><i class="glyphicon glyphicon-book"></i> Data Buku</a>
                        </li>
                        <?php }
                        ?>
                        <?php 
                        if($this->session->userdata('type')=='1'){?>

                        <li>
                            <a href="<?php echo base_url();?>index.php/admin/get_data_transaksi/"><i class="glyphicon glyphicon-search"></i> Peminjaman</a>
                        
                        </li>
                        <?php }
                        ?>
                        <?php
                        if($this->session->userdata('type') == '0'){?>


                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/data_admin/"><i class="glyphicon glyphicon-user"></i> Data Admin</a>
                        </li>
                        <?php }
                        ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">

        <?php $this->load->view($main_view); ?>

        </div>
    </div>
    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>dist/js/sb-admin-2.js"></script>
</body>
</html>