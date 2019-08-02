<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Mahasiswa extends CI_Controller{
	
	use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

	function __construct()
	{
		parent::__construct();
		$this->__resTraitConstruct();
		$this->load->model('Mahasiswa_model');
		$this->methods['index_get']['limit'] = 1000;
	}

	public function index_get(){
		$id = $this->get('id');
		if($id == null){
			$mhs = $this->Mahasiswa_model->getMahasiswa();
		}else{
			$mhs = $this->Mahasiswa_model->getMahasiswa($id);
		}
		if($mhs){
			$this->response(
			[
                'status' => true,
                'data' => $mhs
            ], 200);
		}else{
			$this->response(
			[
                'status' => false,
                'message' => 'Data tidak ada !!!'
            ], 400);
		}
	}

	public function index_post(){
		$data = $this->input->post(['npm','nama','email','jurusan'],true);
		if($this->Mahasiswa_model->tambahData($data) > 0){
			$this->response(
			[
	            'status' => true,
	            'message' => 'data Ditambahkan'
	        ], 200);
		}else{
			$this->response(
			[
	            'status' => false,
	            'message' => 'gagal !!!'
	        ], 400);
		}
	}

	public function index_put(){
		$id = $this->put('id');
		$data = [
			'npm' => $this->put('npm'),
			'nama' => $this->put('nama'),
			'email' => $this->put('email'),
			'jurusan' => $this->put('jurusan')
		];

		if($id == null){
			$this->response(
			[
                'status' => false,
                'message' => 'id Dibutuhkan !!!'
            ], 400);	
		}else{
			if($this->Mahasiswa_model->update($id,$data) > 0){
				$this->response(
				[
		            'status' => true,
		            'message' => 'data Berhasil diubah'
		        ], 200);
			}else{
				$this->response(
				[
		            'status' => false,
		            'message' => 'data gagal diubah'
		        ], 200);
			}
		}
	}	

	public function index_delete(){
		$id = $this->delete('id');
		if($id == null){
			$this->response(
			[
                'status' => false,
                'message' => 'id Dibutuhkan !!!'
            ], 400);	
		}else{
			if($this->Mahasiswa_model->delete($id) > 0){
				$this->response(
				[
		            'status' => true,
		            'message' => 'data Berhasil dihapus'
		        ], 200);
			}else {
				$this->response(
				[
		            'status' => false,
		            'message' => 'id tidak ada'
		        ], 400);
			}
		}
	}
}