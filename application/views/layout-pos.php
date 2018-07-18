<!doctype html>
<html lang="en">

<head>
	<title>Point Of Sale &mdash; Akure Solusi</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/numpad/jquery.numpad.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- DataTables -->
	<link href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<meta name="theme-color" content="#fff">
	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="<?php echo base_url() ?>assets/img/favicon.png">
	<!-- ICONS -->
	<meta name="theme-color" content="#6bb9f0">
	<style type="text/css">
	.nmpd-grid {border: none; padding: 20px;border-radius: 20px;}
	.nmpd-grid>tbody>tr>td {border: none;}
	input.nmpd-target[readonly] {background-color: white; cursor: pointer;}
	.btn-info {
	  background-color: #6bb9f0;
	  border-color: #6bb9f0; }
	  .btn-info:hover, .btn-primary:focus {
	    background-color: #63b1e8;
	    border-color: #63b1e8; }
	.modal-sm{
		width: 35%;
	}
	.btn-xs{
		padding: 2px 8px;
	}
</style>
</head>
<body>
	<!-- NAVBAR -->
	 <nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" id="custom-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar" id="custom-icon"></span>
	        <span class="icon-bar" id="custom-icon"></span>
	        <span class="icon-bar" id="custom-icon"></span>
	      </button>
	      <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/img/logo-wht.png" width="130"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	      	<li><a href="<?php echo base_url() ?>pos"><i class="fa fa-home menu_r"></i> <span class="menu_r">Home</span></a></li>
	      	<li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="menu_r"> Sales</span>
		        <span class="caret menu_r"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="<?php echo base_url() ?>pos/list"><i class="fa fa-list"></i> Daftar Transaksi</a></li>
		          <li><a href="#" data-toggle="modal" data-target="#ModalListHold"><i class="fa fa-list"></i> Daftar Tahan Transaksi</a></li>
		        </ul>
     	 	</li>
	      	<li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="menu_r"> Laporan</span>
		        <span class="caret menu_r"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#"><i class="fa fa-dollar"></i> Pendapatan Hari Ini</a></li>
		          <li><a href="<?php echo base_url() ?>pos/all"><i class="fa fa-calendar"></i> Keseluruhan Transaksi</a></li>
		          <li><a href="#"><i class="fa fa-cubes"></i> Top Produk Terjual</a></li>
		        </ul>
     	 	</li>
	      	<li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="menu_r"> Agus Setiawan</span>
		        <span class="caret menu_r"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
		        </ul>
     	 	</li>
	      </ul>
	    </div>
	  </div>
	</nav> 
	<div class="container-fluid">
		<?php $this->load->view($content); ?>
	</div>
	<!-- END CONTENT -->

<!-- MODAL BAYAR -->
<div class="modal fade" id="ModalBayar" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
	  	<div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		      <h4 class="modal-title"><b>Pembayaran</b></h4>
		    </div>
		    <div class="modal-body">
		      <div class="container-fluid">
		      	<?php echo form_open(''); ?>
		      		<div class=" form-group">
				  		<label>Customer</label>
				  		<select class="form-control">
				  			<option>Walk-in Customer</option>
				  		</select>
				  	</div>
				  	<div class=" form-group">
				  		<label>Jenis Pembayaran</label>
				  		<select class="form-control">
				  			<option>Cash</option>
				  			<option>Credit Card</option>
				  		</select>
				  	</div>
				  	<div class=" form-group">
				  		<label>Total</label>
				  		<input type="text" name="" class="form-control" readonly="" value="Rp 10.000" style="font-weight: bold;">
				  	</div>
				  	<div class=" form-group">
				  		<label>Dibayar</label>
				  		<input type="number" name="" class="form-control">
				  	</div>
				  	<div class=" form-group">
				  		<label>Kembalian</label>
				  		<input type="text" name="" class="form-control" readonly="" style="font-weight: bold;">
				  	</div>
				    <div  class="form-group">
				    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
				    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
					</div>
					<?php echo form_close() ?>
		      </div>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
		    </div>
	 	 </div>
	  
	</div>
</div>
<!-- END MODAL BAYAR -->

<!-- MODAL HOLD -->
<div class="modal fade" id="ModalListHold" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	  	<div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		      <h4 class="modal-title"><b>Daftar Tahan Pesanan</b></h4>
		    </div>
		    <div class="modal-body">
		      <div class="container-fluid">
		      	<table class="table">
		      		<thead>
		      			<th>Keterangan</th>
		      			<th>Tanggal</th>
		      			<th>Item</th>
		      			<th>Total</th>
		      			<th width="10"></th>
		      		</thead>
		      		<tbody>
		      			<tr>
			      			<td>Pesanan Meja 2</td>
			      			<td>21/07/2018 06:04:00</td>
			      			<td>4</td>
			      			<td>Rp 20.000</td>
			      			<td><a href="" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a></td>
		      			</tr>
		      			<tr>
			      			<td>Pesanan Meja 2</td>
			      			<td>21/07/2018 06:04:00</td>
			      			<td>4</td>
			      			<td>Rp 20.000</td>
			      			<td><a href="" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a></td>
		      			</tr>
		      		</tbody>
		      	</table>
		      </div>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
		    </div>
	 	 </div>
	  
	</div>
</div>
<!-- END MODAL HOLD -->

<!-- MODAL HOLD -->
<div class="modal fade" id="ModalHold" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
	  	<div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		      <h4 class="modal-title"><b>Tahan Pesanan</b></h4>
		    </div>
		    <div class="modal-body">
		      <div class="container-fluid">
		      	<?php echo form_open(''); ?>
				  	<div class=" form-group">
				  		<label>Keterangan</label>
				  		<input type="text" name="" class="form-control" placeholder="Keterangan Pesanan">
				  	</div>
				    <div  class="form-group">
				    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
				    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
					</div>
					<?php echo form_close() ?>
		      </div>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
		    </div>
	 	 </div>
	  
	</div>
</div>
<!-- END MODAL HOLD -->



	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/numpad/jquery.numpad.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

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
	$(function() {
		// Set NumPad defaults for jQuery mobile. 
		// These defaults will be applied to all NumPads within this document!
		$.fn.numpad.defaults.gridTpl = '<table class="table modal-content" style="width:400px; height:300px;"></table>';
		$.fn.numpad.defaults.backgroundTpl = '<div class="modal-backdrop in"></div>';
		$.fn.numpad.defaults.displayTpl = '<input type="text" class="form-control  input-lg" style="width:100%; height:80px; font-size:30px;" />';
		$.fn.numpad.defaults.buttonNumberTpl =  '<button type="button" class="btn btn-default btn-lg" style="width:100%; height:80px; font-size:28px; "></button>';
		$.fn.numpad.defaults.buttonFunctionTpl = '<button type="button" class="btn btn-lg" style="width:100%; height:80px;"></button>';
		$.fn.numpad.defaults.onKeypadCreate = function(){$(this).find('.done').addClass('btn-primary');};
		
		// Instantiate NumPad once the page is ready to be shown
		$(document).ready(function(){
			$('.qty').numpad();
			$('#password').numpad({
				displayTpl: '<input class="form-control" type="password" />'		
			});
			$('#numpadButton-btn').numpad({
				target: $('#numpadButton'),
                                decimalSeparator: '.'
			});
			$('#numpad4div').numpad();
			$('#numpad4column .qtyInput').numpad();
		});
	});
	</script>

</body>

</html>
