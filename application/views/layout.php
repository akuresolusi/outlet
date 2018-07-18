<!doctype html>
<html lang="en">

<head>
	<title><?php echo $title; ?> &mdash; Point Of Sale </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/flaticon/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- DataTables -->
	<link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/formatnumber.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pace-min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pace-min.js"></script>
	<!-- ICONS -->
	<meta name="theme-color" content="#3498db">
	<link rel="icon" sizes="192x192" href="<?php echo base_url() ?>assets/img/favicon.png">
</head>
<body>
	<!-- WRAPPER -->
	<!-- <div class="brand">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-akure.png" alt="Logo" class="img-responsive logo"></a>
			</div> -->
	<header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">

                        <a href="index.html" class="logo">
                            <img src="<?php echo base_url() ?>assets/img/logo-wht.png" alt="" width="130" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu" style="float: right;">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>


                            <li class="dropdown">
					          <a href="#" class="dropdown-toggle nav-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/img/img-user.jpg" class="img-circle" alt="Avatar"></a>
					          <ul class="dropdown-menu dropdown-menu-right">
					          	<li><p id="name-user">Hi, Firman</p></li>
					            <li><a href="#"><span class="ti-user"></span> Profile Saya</a></li>
					            <li><a href="#"><span class="ti-lock"></span> Ganti Password</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="<?php echo base_url(); ?>"><span class="ti-power-off"></span> Logout</a></li>
					          </ul>
					        </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="<?php echo base_url(); ?>dashboard"><i class="ti-dashboard red"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="ti-package blue"></i><span> Inventory </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url(); ?>barang"> Data Barang</a></li>
                                    <li><a href="<?php echo base_url(); ?>transfer"> Transfer Barang</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                
                            </li>
                            <li class="has-submenu">
                                <a href="<?php echo base_url() ?>pos" target="_blank"><i class="ti-credit-card red"></i> <span> Point Of Sale </span> </a>
                            </li>
                            

                            <li class="has-submenu">
                                <a href="#"><i class="ti-agenda brown"></i><span> Laporan </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url() ?>laporan/produk" class=""> Laporan Produk</a></li>
									<li><a href="<?php echo base_url() ?>laporan/pembelian" class=""> Laporan Pembelian</a></li>
									<li><a href="<?php echo base_url() ?>laporan/penjualan" class=""> Laporan Penjualan</a></li>
									<li><a href="<?php echo base_url() ?>laporan/etc" class=""> Laporan Lainnya</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
	<div id="wrapper">
		<!-- MAIN -->
		<div class="main">	
			<?php $this->load->view($isi); ?>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="http://akure-solusi.com" target="_blank" id="Quick Count">Akure Solusi</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	
		
        
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/fullscreen.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jQuery-slimScroll-1.3.8/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/klorofil-common.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script>

	<!-- DATA TABLES -->
	<script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.buttons.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/buttons.bootstrap.min.js" type="text/javascript"></script>
    <script>
	    $(document).ready(function() {
	        $('#data').DataTable({
	            "oLanguage": {
	                "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
	                "sLengthMenu": "_MENU_ &nbsp;&nbsp;",
	                "sInfoFiltered": "(Difilter dari _MAX_ total data)",
	                "sZeroRecords": "Pencarian tidak ditemukan",
	                "sEmptyTable": "Data Kosong",
	                "sLoadingRecords": "Harap Tunggu...",
	                "oPaginate": {
	                    "sPrevious": "Prev",
	                    "sNext": "Next"
	                }
	            },
	            "iDisplayLength": 50
	        });
	    });
	</script>

	<script type="text/javascript">
		$(function(){
    $('#scroll').slimScroll({
	    height: 'auto',
	    size: '10px',
	    color:'#bbb'
	    });
	});
	</script>
	
</body>
</html>
