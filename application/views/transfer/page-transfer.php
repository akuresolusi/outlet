<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
			<div class="panel-body title-pos">
				<div class="col-md-6" style="padding: 0;">
					<span id="sub-title">Produk</span>
					<h3 class="page-title"><?php echo $title; ?></h3>
				</div>
				<div class="col-md-6 add-data">
				    <a href="<?php echo base_url(); ?>transfer/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
				</div>
			</div>
		</div>
		<div class="panel panel-headline">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<table id="data" class="table table-striped table-hover table-bordered">
					<thead>
						<th width="10">No</th>
						<th>No. Transaksi</th>
						<th>Tanggal/Jam</th>
						<th>Dari</th>
						<th>Tujuan</th>
						<th>Keterangan</th>
						<th>User</th>
						<th width="10"></th>
					</thead>
					<tbody>
						<td>1</td>
						<td>TH001</td>
						<td>21/07/2018 - 12.00</td>
						<td>Outlet</td>
						<td>Gudang</td>
						<td>Bla bla</td>
						<td>Agus Setiawan</td>
						<td style='text-align: left;'>
							<div class='dropdown'>
						        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Tindakan'><span class='fa fa-gear'></span></a>
						        <ul class='dropdown-menu pull-right'>
						        	<li><a href='#'><span class='fa fa-print'></span> Cetak Data</a></li>
						        	<li><a href='#'><span class='fa fa-edit'></span> Edit Data</a></li>
						            <li><a href='#'><span class='fa fa-eye'></span> Lihat Data</a></li>
						            <li><a href='#'><span class='fa fa-trash'></span> Hapus Data</a></li>
						        </ul>
					    	</div>
						</td>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
