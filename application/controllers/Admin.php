<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Berita');
	}
	public function index()
	{
		$data['content']=$this->M_Berita->ambil_id('user','admin');
		$this->template->ips('user/admin',$data);
	}
	public function user()
	{
		$data['content']=$this->M_Berita->ambil_id('user','user');
		$this->template->ips('user/user',$data);
	}
	public function delete(){
		$id =$this->uri->segment(3);
		$this->M_Berita->delete('user',$id);
		redirect('Admin/user');
	}
	public function add(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			$data['content']=$this->M_Berita->ambil_id('user','user');
			$this->template->ips('user/admin',$data);
		} else {
			$data =[
				'username'=>$this->input->post('username',TRUE),
				'password'=>password_hash($this->input->post('password'),PASSWORD_BCRYPT),
				'level'   =>$this->input->post('level',TRUE)
			];
			$this->M_Berita->create('user',$data);
			$this->session->set_flashdata('flash','Added');
			redirect('Admin');
		}
	}
	public function hash($password){
		$hash= password_hash($password,PASSWORD_BCRYPT);
		return $hash;
	}
	public function hapus(){
		$id =$this->uri->segment(3);
		$this->M_Berita->delete('user',$id);
		$this->session->set_flashdata('flash','Delete');
		redirect('Admin');
	}
}