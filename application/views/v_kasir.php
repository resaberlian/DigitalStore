<?php if($this->session->flashdata('pesan')): ?>
	<div class="alert alert-warning"><?= $this->session->flashdata('pesan') ?></div>
<?php endif?>

<div id="content">
             <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Pegawai</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span>Pegawai
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
						<td>kode user</td>
						<td>nama user</td>
						<td>username</td>
						<td>password</td>
						<td>level</td>
						<td></td>
						<td></td>
					</tr>
					</thead>
                    <tbody>
						<?php $no = 0; foreach($user as $sr): $no++;?>
					<tr>
						<td><?=$no?></td>
						<td><?=$sr->kode_user?></td>
						<td><?=$sr->nama_user?></td>
						<td><?=$sr->username?></td>
						<td><?=$sr->password?></td>
						<td><?=$sr->level?></td>
						<td><?php if($this->session->userdata('level')=="admin"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$sr->kode_user?>)"  class="btn btn-warning">Ubah</a><?php }else{ 		echo "anda kasir"; }?></td>
						<td><?php if($this->session->userdata('level')=="admin"){?><a href="<?=base_url('index.php/Kasir/hapus/'.$sr->kode_user)?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus')" >Hapus</a><?php }else{ echo "anda kasir"; }?></td>
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
				<div class="modal-title">Tambah Kasir</div>
			</div>
			<div class="col-md-6">
				<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
				</div>

				</div>
				</div>
	<div class="modal-body">
	<form action="<?=base_url('index.php/Kasir/tambah')?>" method="post" >
	<table>
		<tr>
			<td>nama user</td>
			<td><input type="text" name="nama_user" required style="margin-left: 20px;"></td>
		</tr>
		<tr>
			<td>username</td>
			<td><input type="text" name="username" required style="margin-left: 20px;"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="text" name="password" required style="margin-left: 20px;"></td>
		</tr>
		<td><input type="hidden" name="level" style="margin-left: 20px;"></td>
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
				<div class="modal-title">Ubah Kasir</div>
			</div>
			<div class="col-md-6">
				<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
			</div>
		</div>
	<div class="modal-body">
		<form action="<?=base_url('index.php/Kasir/update')?>" method="post" >
	<table>
		<td><input type="hidden" name="kode_user" required id="kode_user" style="margin-left: 20px;"></td>
	
		<tr>
			<td>nama user</td>
			<td><input type="text" name="nama_user" required id="nama_user" style="margin-left: 20px;"></td>
		</tr>
		<tr>
			<td>username</td>
			<td><input type="text" name="username" required id="username" style="margin-left: 20px;"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="text" name="password" id="password" required style="margin-left: 20px;"></td>
		</tr>
		<td><input type="hidden" name="level"  required id="level" style="margin-left: 20px;"></td>
		
	</table>
	<center><input type="submit" name="tambah" value="Ubah" class="btn btn-warning" style="margin-top: 30px;"></center>
</form>
</div>		
</div>
</div>
</div>

<script >
function edit(kode_user){
	$.ajax({
	type:"post",
	url:"<?=base_url()?>index.php/Kasir/tampil_ubah_user/"+kode_user,
	dataType:"json",
	success:function(data){
	$("#kode_user").val(data.kode_user);
	$("#nama_user").val(data.nama_user);
	$("#username").val(data.username);
	$("#password").val(data.password);
	$("#level").val(data.level);
	}
});
}

</script>




