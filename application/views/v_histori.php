<div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Histori Penjualan</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span> Histori
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
					<div class="panel-heading"><h3>Table Histori Penjualan<a href="<?=base_url('index.php/Histori/cetak_laporan')?>" class="btn btn-primary" style="float: right;">Print</a></h3>
					
					</div>
                    <div class="panel-body">
                      <div class="responsive-table">
						  
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
							<td>no</td>
							<td>No Nota</td>
							<td>nama kasir</td>
							<td>Pembeli</td>
							<td>total</td>
							<td>tanggal beli</td>
							<td></td>
							<td></td>
                        </tr>
                      </thead>
                      <tbody>
						<?php $no = 0; foreach($ts as $ts): $no++;?>
						<tr>
							<td><?=$no?></td>
							<td><?=$ts->kode_transaksi?></td>
							<td><?=$ts->nama_user?></td>
							<td><?=$ts->nama_pembeli?></td>
							<td><?=$ts->total?></td>
							<td><?=$ts->tanggal_beli?></td>
						</tr>
						<?php endforeach?>
					 </tbody>
                	 </table>
                    </div>
                </div>
            </div>
        </div>  
	</div>
</div>
