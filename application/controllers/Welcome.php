<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Berita');
	}
	public function index()
	{
		$data['news']   =$this->M_Berita->hitung('berita');
		$data['coment'] =$this->M_Berita->hitung('komentar');
		$data['galeri'] =$this->M_Berita->hitung('galeri');
		$data['user']   =$this->M_Berita->hitung('user');
		$this->template->ips('isi/index',$data);
	}
	public function chart(){
		$isi=[3,5,8,9,3,12];
		echo json_encode($isi);
	}
}
