<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
			<div class="panel-body title-pos body-blue">
				<div class="container nopadding">
					<form>
						<div class="form-group col-md-3">
					    	<label>Supplier</label> 
					    	<input type="text" required="" class="form-control" placeholder="Nama Supplier">
					    </div>
						<div class="form-group col-md-3">
					    	<label>Dari Tanggal</label> 
					    	<input type="date" required="" class="form-control">
					    </div>
					     
					    <div class="form-group col-md-3">
					    	<label>Ke Tanggal</label>
					    	<input type="date" required="" class="form-control">
					    </div>
					    <div class="form-group col-md-1">
					    	<label>&nbsp;</label>
					    	<button type="submit" class="btn btn-primary"><span class="fa fa-filter"></span> Filter</button>
					    </div>
				    </form>
				</div>
			</div>
		</div>
		<div class="panel panel-headline">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th width="10">No</th>
						<th>No. Retur</th>
						<th>Tgl. Retur</th>
						<th>No. Faktur</th>
						<th>Supplier</th>
						<th>Sub Total</th>
						<th>Disc</th>
						<th>Total</th>
					</thead>
					<tbody>
						<tr>
						</tr>
						<tr>
							<td colspan="7"><b>Grand Total</b></td>
							<td align="right"><b>Rp. 22.829.291</b></td>
						</tr>
					</tbody>
				</table>
				<a href="<?php echo base_url(); ?>laporan/pembelian" class="btn btn-warning"><span class="fa fa-arrow-left"></span> Kembali</a>
				<a href="#" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
			</div>
		</div>
	</div>
</div>
		

<!-- END MAIN CONTENT -->