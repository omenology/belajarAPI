<?php 
class Home extends CI_Controller {

	public function index($hello = 'world!'){
		$data['hello'] = $hello;
		$data['judul'] = 'Home';
		$this->load->view('templates/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}
}