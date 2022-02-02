<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Makanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Makanan_model');
	}

	function index()
	{
		$data['judul'] = "Halaman Makanan";
		$data['makanan'] = $this->Makanan_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("makanan/vw_makanan", $data);
		$this->load->view("layout/footer", $data);
	}

	function edit($id)
	{
		$data['judul'] = "Halaman Edit Makanan";
		$data['makanan'] = $this->Makanan_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Makanan', 'required', [
			'required' => 'Nama Makanan Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga Makanan', 'required', [
			'required' => 'Harag Makanan Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("makanan/vw_ubah_makanan", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/makanan/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {

					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
					$query = $this->db->set('gambar', $new_image);
					if ($query) {
						$old_image = $this->db->get_where('makanan', ['id' => $id])->row();
						unlink(FCPATH . 'assets/img/makanan/' . $old_image->gambar);
					}
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Makanan_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Makanan 
			Diubah!</div>');
			redirect('Makanan');
		}
	}

	function tambah()
	{
		$data['judul'] = "Halaman Tambah Makanan";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Makanan', 'required', [
			'required' => 'Nama Makanan Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga Makanan', 'required', [
			'required' => 'Harga Makanan Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Makanan Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("makanan/vw_tambah_makanan", $data);
			$this->load->view("layout/footer");
		} else {

			$data = [
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/makanan/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Makanan_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku Berhasil Ditambah!</div>');
			redirect('Makanan');
		}
	}

	public function hapus($id)
	{
		$this->Makanan_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', 
			'<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle">
			</i>Data Makanan tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			<i class="icon fas fa-check-circle"></i>Data Makanan Berhasil Dihapus!</div>');
		}
		redirect('Makanan');
	}
}
