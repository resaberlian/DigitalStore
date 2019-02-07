<?php if($this->session->flashdata('pesan')): ?>


	<div class="alert alert-warning"><?= $this->session->flashdata('pesan') ?></div>
	

<?php endif?>
<div id="content">
             <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Kategori</h3>
                        <p class="animated fadeInDown">
                          Kategori <span class="fa-angle-right fa"></span>Kamera
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
						<a href="#tambah" class="btn btn-primary" data-toggle="modal" style="float: left;">Tambah</a>
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
						<td>no</td>
						<td>kode_kategori</td>
						<td>nama kategori</td>
						<td>Edit</td>
						<td>Hapus</td>
						
					</tr>
					</thead>
                    <tbody>
					<?php $no = 0; foreach($kategori as $kt): $no++;?>
					<tr>
						<td><?=$no?></td>
						<td><?=$kt->kode_kategori?>
						</td><td><?=$kt->nama_kategori?></td>
						<td><?php if($this->session->userdata('level')=="admin"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$kt->kode_kategori?>)"  class="btn btn-warning">Ubah</a><?php }else{ 		echo "anda kasir"; }?></td>
						<td><?php if($this->session->userdata('level')=="admin"){?><a href="<?=base_url('index.php/Kategori/hapus/'.$kt->kode_kategori)?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus')" >Hapus</a><?php }else{ echo "anda kasir"; }?></td>
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
					<div class="modal-title">Tambah Kategori</div>
				</div>
				<div class="col-md-6">
					<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
				</div>
			</div>
			</div>	
		<div class="modal-body">
		<form action="<?=base_url('index.php/Kategori/tambah')?>" method="post" enctype="multipart/form-data">	
		<table>
		<tr>
			<td>nama_kategori</td>
			<td><input type="text" name="nama_kategori" required style="margin-left: 20px;"></td>
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
				<div class="modal-title">Ubah Kategori</div>
			</div>
			<div class="col-md-6">
				<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
				</div>
			</div>
	</div>	
	<div class="modal-body">
	<form action="<?=base_url('index.php/Kategori/update')?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="kode_kategori" required id="kode_kategori" >
		<table>
		<tr>
			<td>nama_kategori</td>
			<td><input type="text" name="nama_kategori" required  id="nama_kategori" style="margin-left: 20px;"></td>
		</tr>
		</table>
		<center><input type="submit" name="tambah" value="Ubah" class="btn btn-warning" style="margin-top: 30px;"></center>
	</form>
	</div>	
	</div>
	</div>
</div>



<script>
	

function edit(kode_kategori){
	$.ajax({
	type:"post",
	url:"<?=base_url()?>index.php/Kategori/tampil_ubah_kategori/"+kode_kategori,
	dataType:"json",
	success:function(data){
	$("#kode_kategori").val(data.kode_kategori);
	$("#nama_kategori").val(data.nama_kategori);

	}
});
}

</script>




