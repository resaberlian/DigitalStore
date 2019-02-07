<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamera extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kamera','mk');
	}

	public function index()
	{
		if($this->session->userdata('level')){

			$data['kategori']=$this->mk->ambilkategori();
			$data['kamera']=$this->mk->ambilkamera();
			$data['konten']='v_kamera';
			$this->load->view('template',$data);
			$this->load->view('v_kamera', $data);
			
		}else{
			redirect('Login','refresh');
		}
	}


	public function tambah(){
		$this->form_validation->set_rules('nama_kamera', 'nama_kamera', 'trim|required');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		$this->form_validation->set_rules('stok', 'stok', 'trim|required');

		if ($this->form_validation->run() == TRUE) {

			$config['upload_path'] = './asset/img';
			$config['allowed_types'] = 'jpg|png';

			if($_FILES['foto']['name'] != ""){

				$this->load->library('upload', $config);


				if(!$this->upload->do_upload('foto')){

					$this->session->set_flashdata('pesan', $this->upload->display_errors());
					redirect('Kamera','refresh');

				}else{

					if($this->mk->tambah($this->upload->data('file_name'))){

						$this->session->set_flashdata('pesan', 'anda berhasil menambah barang');
					}else{
						$this->session->set_flashdata('pesan', 'anda gagal menambah barang');
					}

					redirect('Kamera','refresh');


				}

			}else{

				if($this->mk->tambah('')){
					$this->session->set_flashdata('pesan', 'anda berhasil menambah barang');
				}else{
					$this->session->set_flashdata('pesan', 'anda gagal menambah barang');
				}
				redirect('Kamera','refresh');
			}

		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('Kamera','refresh');
		}

	}

	public function tampil_ubah_kamera($kode_kamera){
		$data =  $this->mk->tampil_ubah_kamera($kode_kamera);
		echo json_encode($data);

	}

	public function update(){

		if($this->input->post('update')){

			if($_FILES['foto']['name']==""){

				if($this->mk->update()){

					$this->session->set_flashdata('pesan', 'sukses ubah data ');
				}else{

					$this->session->set_flashdata('pesan', 'gagal ubah data ');
				}
				redirect('Kamera','refresh');	


			}else{


				$config['upload_path'] = './assets/gambar/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('foto')){

					$this->session->set_flashdata('pesan', $this->upload->display_errors());
					redirect('Kamera','refresh');

				}else{


					if($this->mk->update_ft($this->upload->data('file_name'))){

						$this->session->set_flashdata('pesan', 'sukses ubah data ');

					}else{

						$this->session->set_flashdata('pesan', 'gagal ubah data ');

					}


					redirect('Kamera','refresh');


				}
			}

		}

	}

	public function hapus($kode_kamera){
		if($this->mk->hapus($kode_kamera)){

			$this->session->set_flashdata('pesan', 'anda berhasil menghapus data Kamera');
			redirect('Kamera','refresh');

		}else{

			$this->session->set_flashdata('pesan', 'anda gagal menghapus data Kamera');
			redirect('Kamera','refresh');
		}
	}
}

/* End of file Kamera.php */
/* Location: ./application/controllers/Kamera.php */


?>