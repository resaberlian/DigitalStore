<?php if($this->session->flashdata('pesan')): ?>
	<div class="alert alert-warning"><?= $this->session->flashdata('pesan') ?></div>
<?php endif?>

<div id="content">
             <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">List Kamera</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span>List Kamera
                        </p>
                    </div>
                  </div>
              </div>

            <div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="col-md-12 padding-0" style="padding-bottom:20px;">
                    <div class="col-md-6" style="padding-left:0px;">
						<?php if($this->session->userdata('level')=="admin"){?>
							<a href="#tambah" class="btn btn-primary" data-toggle="modal" style="float:left;">Tambah</a>
						<?php }?>
                    </div>
                    <div class="col-md-6">
                         <div class="col-lg-12">
                            <div class="input-group">
                              <input type="text" class="form-control" aria-label="...">
                              <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li role="separator" class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                    </div>
                 </div>
                  <div class="responsive-table">  
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<td>No</td>
							<td>Kode Kamera</td>
							<td>Nama Kamera</td>
							<td>Deskripsi</td>
							<td>kategori</td>
							<td>harga</td>
							<td>Foto</td>
							<td>stok</td>
							<td></td>
							<td></td>
						</tr>
					</thead>
                    <tbody>
					<?php $no = 0; foreach($kamera as $km): $no++;?>
						<tr>
							<td><?=$no?></td>
							<td><?=$km->kode_kamera?></td>
							<td><?=$km->nama_kamera?></td>
							<td><?=$km->deskripsi?></td>
							<td><?=$km->nama_kategori?></td>
							<td><?=$km->harga?></td>
							<td><img src="<?=base_url('assets/gambar/'.$km->foto)?>" style="width:40px;"></td>
							<td><?=$km->stok?></td>
							<td><?php if($this->session->userdata('level')=="admin"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$km->kode_kamera?>)"  class="btn btn-warning">Ubah</a><?php }else{ 		echo "anda kasir"; }?></td>
							<td><?php if($this->session->userdata('level')=="admin"){?><a href="<?=base_url('index.php/Kamera/hapus/'.$km->kode_kamera)?>" onclick="return confirm('apakah anda yakin untuk menghapus')" class="btn btn-danger">Hapus</a><?php }else{ echo "anda kasir"; }?></td>
						</tr>
					<?php endforeach?>
                    </tbody>
                  </table>
				 </div>
                  <div class="col-md-6" style="padding-top:20px;">
                    <span>showing 0-10 of 30 items</span>
                  </div>
                  <div class="col-md-6">
                        <ul class="pagination pull-right">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                  </div>
                </div>
              </div>
            </div>  
          </div>
     </div>


<div class="modal fade" id="tambah" >
	<div class="modal-dialog">
		
		<div class="modal-content">
			<div class="modal-header">


			<div class="row">

			<div class="col-md-6">
				<div class="modal-title">Tambah Kamera</div>
			</div>
			<div class="col-md-6">
				<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
				</div>

				</div>

			</div>	

			<div class="modal-body">


				<form action="<?=base_url('index.php/Kamera/tambah')?>" method="post" enctype="multipart/form-data">

					<table>

						<tr>
							<td>Nama Kamera </td>
							<td><input type="text" name="nama_kamera" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>Deskripsi</td>
							<td><input type="text" name="deskripsi" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>kategori</td>
							<td>
								<select name="kategori" style="margin-left: 20px; ">
									<?php foreach ($kategori as $kt): ?>

										<option value="<?= $kt->kode_kategori?>" ><?= $kt->nama_kategori?></option>
									<?php endforeach?>	
								</select>
							</td>
						</tr>
						<tr>
							<td>harga</td>
							<td><input type="text" name="harga" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>foto </td>
							<td><input type="file" name="foto" style="margin-left: 20px;"></td>
						</tr>
						<tr>
							<td>stok</td>
							<td><input type="number" name="stok" style="margin-left: 20px;"></td>
						</tr>

					</table>


					<center><input type="submit" name="tambah" value="tambah" class="btn btn-warning" style="margin-top: 30px;"></center>

				</form>

			</div>	
		</div>
	</div>

</div>



<div class="modal fade" id="ubah" >
	<div class="modal-dialog">
		
		<div class="modal-content">
			<div class="modal-header">

				<div class="row">

			<div class="col-md-6">
				<div class="modal-title">Ubah Kamera</div>
			</div>
			<div class="col-md-6">
				<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
				</div>

				</div>
			</div>	

			<div class="modal-body">


				<form action="<?=base_url('index.php/Kamera/update')?>" method="post" enctype="multipart/form-data">

					<table>

						<input type="hidden" name="kode_kamera" required id="kode_kamera" style="margin-left: 20px;">

						<tr>
							<td>Nama Kamera</td>
							<td><input type="text" name="nama_kamera"  required  id="nama_kamera" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>Deskripsi</td>
							<td><input type="text" name="deskripsi" required  id="deskripsi" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>kategori</td>
							<td>

								<select name="kategori" style="margin-left: 20px; " id="kategori" required >
									<?php foreach ($kategori as $kt): ?>

										<option value="<?= $kt->kode_kategori?>" ><?= $kt->nama_kategori?></option>
									<?php endforeach?>	
								</select>
							</td>
						</tr>

						<tr>
							<td>harga</td>
							<td><input type="text" name="harga" required  id="harga" style="margin-left: 20px;"></td>
						</tr>

						<tr>
							<td>foto </td>
							<td><input type="file" name="foto"   id="foto" style="margin-left: 20px;"></td>
						</tr>
						<tr>
							<td>stok</td>
							<td><input type="number" name="stok" required  id="stok" style="margin-left: 20px;"></td>
						</tr>

					</table>


					<center><input type="submit" value="Ubah" name="update" required  class="btn btn-warning" style="margin-top: 30px;"></center>

				</form>

			</div>	
		</div>
	</div>

</div>


<script >
	

	function edit(kode_kamera){
		$.ajax({
			type:"post",
			url:"<?=base_url()?>index.php/Kamera/tampil_ubah_kamera/"+kode_kamera,
			dataType:"json",


			success:function(data){
				$("#kode_kamera").val(data.kode_kamera);
				$("#nama_kamera").val(data.nama_kamera);
				$("#deskripsi").val(data.deskripsi);
				$("#kategori").val(data.kode_kategori);
				$("#harga").val(data.harga);
				$("#stok").val(data.stok);	
			}
		});
	}

</script>