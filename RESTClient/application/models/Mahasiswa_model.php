<?php 

use GuzzleHttp\Client;

class Mahasiswa_model extends CI_Model {

	private $client;

	public function __construct(){
		$this->client = new Client([
			'base_uri' => 'http://localhost/belajarAPI/RESTful/api/',
			'auth' => ['tes','12345']
		]);
	}

	public function getAllMahasiswa(){
		$response = $this->client->request('GET','mahasiswa',[
			'query' => [
				'KEY' => 'omenology'
			]
		]);
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['data'];
	}

	public function getMahasiswa($id){
		$response = $this->client->request('GET','mahasiswa',[
			'query' => [
				'KEY' => 'omenology',
				'id' => $id
			]
		]);
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['data'][0];
	}

	public function tambahData(){
		$data = array(
			'npm' => $this->input->post('npm',TRUE),
			'nama' => $this->input->post('nama',TRUE),
			'email' => $this->input->post('email',TRUE),
			'jurusan' => $this->input->post('jurusan'),
			'KEY' => 'omenology'
		);

		$response = $this->client->request('POST','mahasiswa',[
			//bisa langsung array nya
			'form_params' => $data
		]);
	}

	public function ubahData(){
		$response = $this->client->request('PUT','mahasiswa',[
			'form_params' => [
				//dimasukan satu satu
				'KEY' => 'omenology',
				'id' => $this->input->post('id',TRUE),
				'npm' => $this->input->post('npm',TRUE),
				'nama' => $this->input->post('nama',TRUE),
				'email' => $this->input->post('email',TRUE),
				'jurusan' => $this->input->post('jurusan')
			]
		]);
	}

	public function hapusData($id){
		$response = $this->client->request('DELETE','mahasiswa',[
			'form_params' => [
				'KEY' => 'omenology',
				'id' => $id
			]
		]);	
	}

}