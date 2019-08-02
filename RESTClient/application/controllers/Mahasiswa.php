<?php 

class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		
	}

	public function index(){
		$data['judul'] = 'Home';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p style="color: red;">','</p>');

		$data['judul'] = 'Tambah Data Mahasiswa';

		$this->form_validation->set_rules('npm','NPM','required|is_natural');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');

		$this->load->view('templates/header',$data);

		if($this->form_validation->run() == FALSE){
			$this->load->view('mahasiswa/tambah');
		}else{
			$this->session->set_flashdata('flasher','Ditambahkan');
			$this->Mahasiswa_model->tambahData();
			redirect(base_url().'mahasiswa');
		}
		
		$this->load->view('templates/footer');
	}

	public function hapus($id){
		$this->Mahasiswa_model->hapusData($id);
		$this->session->set_flashdata('flasher','Dihapus');
		redirect(base_url().'mahasiswa');
	}

	public function detail($id){
		$data['judul'] = "Detail Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa($id);
		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/detail',$data);
		$this->load->view('templates/footer');
	}
	public function ubah($id){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p style="color: red;">','</p>'); 

		$data['judul'] = "Ubah Data Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa($id);

		$this->form_validation->set_rules('npm','NPM','required|is_natural');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');		
		
		$this->load->view('templates/header',$data);
		

		if($this->form_validation->run() == FALSE){
			$this->load->view('mahasiswa/ubah',$data);
		}else{
			$this->session->set_flashdata('flasher','Diubah');
			$this->Mahasiswa_model->ubahData();
			redirect(base_url().'mahasiswa');
		}
		$this->load->view('templates/footer');
		
	}
}