<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Karyawan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Karyawan_model');
	}
	function index()
	{
		$data['judul'] = "Halaman Karyawan";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['karyawan'] = $this->Karyawan_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("karyawan/vw_karyawan", $data);
		$this->load->view("layout/footer", $data);
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Edit Karyawan";
		$data['karyawan'] = $this->Karyawan_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Karyawan', 'required', [
			'required' => 'Nama Karyawan Wajib di isi'
		]);
		$this->form_validation->set_rules('bagian', 'Bagian Pekerjaan', 'required', [
			'required' => 'Bagian Pekerjaan Wajib di isi'
		]);
		$this->form_validation->set_rules('status', 'Status Pekerjaan', 'required', [
			'required' => 'Status Pekerjaan Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("karyawan/vw_ubah_karyawan", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
                'bagian' => $this->input->post('bagian'),
				'status' => $this->input->post('status'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/karyawan/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {

					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
					$query = $this->db->set('gambar', $new_image);
					if ($query) {
						$old_image = $this->db->get_where('karyawan', ['id' => $id])->row();
						unlink(FCPATH . 'assets/img/karyawan/' . $old_image->gambar);
					}
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Karyawan_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Karyawan 
			Diubah!</div>');
			redirect('Karyawan');
		}
	}

	function tambah()
	{
		$data['judul'] = "Halaman Tambah Karyawan";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Karyawan', 'required', [
			'required' => 'Nama Karyawan Wajib di isi'
		]);
		$this->form_validation->set_rules('bagian', 'Bagian Pekerjaan', 'required', [
			'required' => 'Bagian Pekerjaan Wajib di isi'
		]);
		$this->form_validation->set_rules('status', 'Status Pekerjaan', 'required', [
			'required' => 'Status Pekerjaan Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("karyawan/vw_tambah_karyawan", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
                'bagian' => $this->input->post('bagian'),
				'status' => $this->input->post('status'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/karyawan/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Karyawan_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Karyawan 
			Berhasil Ditambah!</div>');
			redirect('Karyawan');
		}
	}

	public function hapus($id)
	{
		$this->Karyawan_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', 
			'<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle">
			</i>Data Karyawan tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			<i class="icon fas fa-check-circle"></i>Data Karyawan Berhasil Dihapus!</div>');
		}
		redirect('Karyawan');
	}
	function detail($id)
	{
		$data['judul'] = "Halaman Detail Karyawan";
		$data['karyawan'] = $this->Karyawan_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("karyawan/vw_detail_karyawan", $data);
		$this->load->view("layout/footer");
	}

	
}
