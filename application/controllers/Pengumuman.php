<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Berita');
	}
	public function index()
	{
		$data['content']=$this->M_Berita->ambil('pengumuman');
		$this->template->ips('pengumuman/index',$data);
	}
	public function add(){
		$data['error']="";
		$this->form_validation->set_rules("no","Title","required");
		$this->form_validation->set_rules("isi","Content","required");
		if ($this->form_validation->run() ==  FALSE) {
		$this->template->ips('pengumuman/add',$data);
		} else {
	        $config['upload_path']='./assets/image/pengumuman';
	        $config['allowed_types']='jpg|png|jpeg|gif';
	        $config['max_size']='20480';

			$this->load->library('upload',$config); 
        if( !$this->upload->do_upload('foto'))	{
            $error = array('error' => $this->upload->display_errors());
			$this->template->ips('pengumuman/add',$error);
			} else {
				$gambar=$this->upload->data();
				$data=[
				    "no_p" => $this->input->post('no',true),
                    "isi"=> $this->input->post('isi',true),
                    "gambar"=> $gambar['file_name'],
				];
			$this->M_Berita->create('pengumuman',$data);
			$this->session->set_flashdata('flash','Added');
			redirect('Pengumuman');
			}
		}
	}
	public function edit(){;
		$id =$this->uri->segment(3);
		$data['content']=$this->M_Berita->show_by_id('pengumuman',$id);
		$data['error']="";
		$this->form_validation->set_rules("no","Title","required");
		$this->form_validation->set_rules("isi","Content","required");
		if ($this->form_validation->run() ==  FALSE) {
		$this->template->ips('pengumuman/edit',$data);
		} else {
		 if($_FILES ['foto']['name'] != ''){
		 	$path='./assets/image/pengumuman/';
	        $config['upload_path']=$path;
	        $config['allowed_types']='jpg|png|jpeg|gif';
	        $config['max_size']='20480';

			$this->load->library('upload',$config); 
        if( !$this->upload->do_upload('foto'))	{
            $error = array('error' => $this->upload->display_errors());
			$this->template->ips('pengumuman/edit',$error,$data);
			} else {
				$id=$this->input->post('id');
				$old=$this->input->post('gambar');
				$gambar=$this->upload->data();
				$data=[
				    "no_p" => $this->input->post('no',true),
                    "isi"=> $this->input->post('isi',true),
                    "gambar"=> $gambar['file_name'],
				];
			unlink($path.$old);
			$this->M_Berita->update('pengumuman',$data,$id);
			redirect('Pengumuman');
			} 
		} else {
				$data=[
				    "no_p" => $this->input->post('no',true),
                    "isi"=> $this->input->post('isi',true),
				];
					$id=$this->input->post('id');
					$this->M_Berita->update('pengumuman',$data,$id);
					$this->session->set_flashdata('flash','Edit');
					redirect('Pengumuman');
			}
	}
	}
	public function delete(){
		$id=$this->uri->segment(3);
		$row = $this->M_Berita->get_by_id('pengumuman',$id);
    
        unlink("./assets/image/pengumuman/$row->gambar");
   		
   		$this->M_Berita->delete('pengumuman',$id);
   		$this->session->set_flashdata('flash','Delete');
		redirect('Pengumuman');
	}
}
