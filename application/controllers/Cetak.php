<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Berita');
	}
	function index(){
		$this->template->generate('laporan');
	}
}