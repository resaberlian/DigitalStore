
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamera extends CI_Model {

	public function ambilkamera(){
			$ambilkamera = $this->db->join('kategori', 'kategori.kode_kategori = kamera.kode_kategori')->get('kamera')->result();
	
			return $ambilkamera;
	}


	public function ambilkategori(){

			$ambilkategori = $this->db->get('kategori')->result();

			return $ambilkategori;
	}

	public function tambah($nama_file){

	if($nama_file == ""){

			$tambah = array(
				'nama_kamera' => $this->input->post('nama_kamera'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'stok' => $this->input->post('stok')
			);

	}else{

		$tambah = array(
				'nama_kamera' => $this->input->post('nama_kamera'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'stok' => $this->input->post('stok'),
				'foto' => $nama_file,
		);
		
	}
	return $this->db->insert('kamera', $tambah);
	}

	public function tampil_ubah_kamera($kode_kamera){
		return $this->db->join('kategori', 'kategori.kode_kategori = kamera.kode_kategori')->where('kode_kamera',$kode_kamera)->get('kamera')->row();

	}



	public function update(){
			$ubah = array(
				'nama_kamera' => $this->input->post('nama_kamera'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'stok' => $this->input->post('stok')
			);

			return $this->db->where('kode_kamera',$this->input->post('kode_kamera'))->update('kamera', $ubah);

}


	public function update_ft($nama_file){
		$ubah = array(
			'nama_kamera' => $this->input->post('nama_kamera'),
			'kode_kategori' => $this->input->post('kategori'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi'),
			'stok' => $this->input->post('stok'),
			'foto' => $nama_file,
					
		);
		return $this->db->where('kode_kamera',$this->input->post('kode_kamera'))->update('kamera', $ubah);





}


public function hapus($kode_kamera ){
	return $this->db->where('kode_kamera',$kode_kamera)->delete('kamera');
}




public function ambilkameracart($kode_kamera){
	return $this->db->where('kode_kamera',$kode_kamera )->get('kamera')->row();

}

}

/* End of file M_kamera.php */
/* Location: ./application/models/M_kamera.php */

?>