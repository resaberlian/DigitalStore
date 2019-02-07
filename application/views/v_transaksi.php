
<h1> Transaksi</h1>

<?php if($this->session->flashdata('pesan')): ?>

	<div class="alert alert-warning"><?= $this->session->flashdata('pesan') ?></div>
	

<?php endif?>
<div class="panel box-shadow-none content-header" style="padding-left:230px;">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Transaksi</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span>transaksi
                        </p>
                    </div>
                  </div>
              </div>
<div class="panel-heading">
	
<div class="row top-20 padding-0" style="padding-left:230px;">

	<div class="col-md-7 ">



		<table class="table table-hover table-stripped"> 


			<thead>

				<tr>

				<td>No</td>
				<td>Nama Kamera</td>
				<td>Deskripsi</td>
				<td>Kategori</td>
				<td>Harga</td>
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
					<td><?=$km->nama_kamera?></td>
					<td><?=$km->deskripsi?></td>
					<td><?=$km->nama_kategori?></td>
					<td><?=$km->harga?></td>
					<td><img src="<?=base_url('assets/gambar/'.$km->foto)?>" style="width:40px;"></td>
					<td><?=$km->stok?></td>
					<td><a href="<?=base_url('index.php/Cart/tambah_cart/'.$km->kode_kamera)?>" class="btn btn-success">Beli</a></td>
				</tr>
				<?php endforeach?>
		</tbody>	
	</table>
	
</div>


<div class="col-md-5">


<form action="<?= base_url('index.php/Transaksi/transaksi')?>" method="post">

<table class="table table-stripped table-hover"> 


	<tr>
		<td colspan="2">Nama Pembeli</td>
		<td colspan="4"><input type="text" name="pembeli" value="<?=$this->session->flashdata('pembeli');?>"></td>
	</tr>
	<tr>
		<th>No</th>
		<th>Nama Kamera</th>
		<th>Jumlah</th>
		<th>Harga</th>
		<th>Subtotal</th>
		<th></th>
	</tr>
		<?php $no = 0; foreach($this->cart->contents() as $ct): $no++;?>
			<input type="hidden" name="kode_kamera[]" value="<?=$ct['id']?>">
			<input type="hidden" name="rowid[] " value="<?=$ct['rowid']?>">
	<tr>
			<td><?=$no?></td></td><td><?=$ct['name']?></td><td><input type="number" name="banyak[]" value="<?=$ct['qty']?>" style="width:60px;"></td><td><?=number_format($ct['price'])?></td><td><?=number_format($ct['subtotal'])?>
			<td> <a href="<?=base_url('index.php/Cart/hapus_cart/'.$ct['rowid'])?>" onclick="return confirm('apakah anda yakin untuk menghapus pesanan ini')" class="btn btn-danger">x</a></td>
	</tr>
		<?php endforeach?>

	<tr>
		<td colspan="2">Total</td>
		<td colspan="4"><?= number_format($this->cart->total())?></td>
	</tr>
	<tr>
		<td colspan="2">Bayar</td>
		<td colspan="4"><input type="number" name="bayaru"></td>
	</tr>
	<tr>
		<td colspan="2">Kembali</td>
		<td colspan="4"><input type="number" value="<?= $this->session->flashdata('kembali') ?>" name="kembali"></td>
	</tr>

	<tr>
		<td colspan="2"><input type="submit" value="Bayar" name="bayar" class="btn btn-success"></td>
		<td colspan="2"><a href="<?=base_url('index.php/Cart/hapus_semua_cart')?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus semua pesanan')">Hapus Cart</a></td>
		<td colspan="2"><input type="submit" value="Update_qty" name="update qty" class="btn btn-primary"></td>
	</tr>

	</table>


</form>








</div>


</div>
</div>