
<style type="text/css">
	.btn-small{
	  padding: 5px 10px;
	  font-size: 12px;
}
</style>
<div class="col-md-7" style="margin: -5px -10px 0 -10px">
		<!-- FORM SEARCH -->
		<form class="search" action="#">
          <div class="input-group stylish-input-group">
            <input type="text" class="form-control" id="custom-search"  placeholder="Cari Barang atau Scan" >
              <span class="input-group-addon" id="custom-search">
                <button type="submit">
                    <span class="fa fa-search" title="Cari"></span>
                </button>  
                <button type="submit" > 
                    <span class="fa fa-barcode" title="Scan"></span>
                </button>  
              </span>
            </div>
      	</form>
      	<!-- END FORM SEARCH -->

	      	<!-- LIST PRODUCT -->
  	<div class="panel panel-headline custom-product">
		<div class="panel-body" style="padding: 0 0 20px 0px;">
	      	<div class="list-product" id="list-p">
		      	<table class="table">
		      		<tbody>
		      			<?php
							$i=0;
							foreach ($list as $value) {
								$i++;
								echo"
								<tr>
									<td width='10'>".$i.".</td>
									<td>".$value['kode']."</td>
									<td width='400'>".$value['nama']."</td>
									<td width='150'>Rp ".$value['hargadasar']."</td>
									<td width='10' align='right'>
				      					<a href=''><span class='icon-plus' style='font-size: 20px;''></span></a>
				      				</td>
								</tr>";
							}
							?>
		      		</tbody>
		      	</table>
	      	</div>
	      	<!-- END LIST PRODUCT -->
		</div>
	</div>
</div>

<div class="col-md-5" style="margin-bottom: 20px;">
	<div class="panel panel-headline custom-panel">
		<div class="panel-body">
			<div class="container-fluid add-cust">
				<div class="col-md-6 nopadding">
					<span class="fa fa-user-plus"></span><a href="" id="user"> Customer Baru</a>
				</div>
				<div class="col-md-6 nopadding">
					<span style="float: right;"><a href="" data-toggle="modal" data-target="#ModalListHold"> Tahan Pesanan (2)</a></span>
				</div>
			</div>
			<div class="pricetotal">
				<span id="left-list" style="font-size: 25px;">Grand Total</span>
					<span id="right-list" style="font-size: 25px; color: #3f51b5;">Rp. 10.000.000</span>
			</div>
			<div class="list-product-buy" id="wrapper">
				<table class="table" id="custom-table">
					<tbody>
						<tr>
							<td width="10">1.</td>
							<td width="250">OBAT PUSING TENGAH</td>
							<td>
								<input type="number" class="form-control qty"  value="1">
							</td>
		      				<td>
		      					<select class="form-control satuan">
		      						<option>Pcs</option>
		      						<option>Butir</option>
		      						<option>Tablet</option>
		      						<option>Bungkus</option>
		      					</select>
		      				</td>
							<td width="120">Rp 5.000.000</td>
							<td width="10">
								<a href="#"><span class="fa fa-trash" style="color: red; font-size: 16px;" title="Hapus"></span></a>
							</td>
						</tr>
						

					</tbody>
				</table>
			</div>
			<div class="list-price">
				<div class="row">
					<span id="left-list">Sub Total</span>
					<span id="right-list">Rp. 10.000</span>
				</div>
				<div class="row">
					<span id="left-list">Diskon</span>
					<span id="right-list"><input type="number" name="" class="form-control" style="width: 100px; height: 30px; text-align: right;" placeholder="Rp. "></span>
					<span id="right-list"><input type="number" name="" class="form-control" style="width: 50px; height: 30px; text-align: center; margin-right: 5px; " placeholder="%"></span>
					
				</div>
			</div>
			
			
			<!-- BUTTON AKSI -->
			<div class="container-fluid nopadding">
				<div class="col-md-6 nopadding">
					<button class="btn btn-danger btn-pay" style="width: 100%"><span class="fa fa-remove"></span> Batal</button>
				</div>
				<div class="col-md-6 nopadding">
					<button class="btn btn-warning btn-pay" data-toggle="modal" data-target="#ModalHold"><span class="fa fa-shopping-bag"></span> Tahan</button>
				</div>
				<div class="col-md-12 nopadding">
					<button class="btn btn-info btn-pay" data-toggle="modal" data-target="#ModalBayar"><span style="float: left; font-size: 18px; font-weight: bold;">Bayar</span> <span style="float: right; font-size: 20px; font-weight: bold;">Rp. 10.000</span></button>
				</div>
			</div>
			<!-- END BUUTON AKSI -->

			
		</div>
	</div>
</div>

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
				    	<a href="" class="btn btn-warning"><span class="fa fa-print"></span> Simpan & Cetak</a>
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
