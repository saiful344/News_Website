<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Berita');
	}
	public function index()
	{
		$data['content']=$this->M_Berita->ambil('galeri');
		$this->template->ips('galeri/index',$data);
	}
	public function add(){
		$data['error']="";
		$this->form_validation->set_rules("link","Link","required");
		$this->form_validation->set_rules("isi","Content","required");
		if ($this->form_validation->run() ==  FALSE) {
		$this->template->ips('galeri/add',$data);
		} else {
	        $config['upload_path']='./assets/image/galeri';
	        $config['allowed_types']='jpg|png|jpeg|gif';
	        $config['max_size']='20480';

			$this->load->library('upload',$config); 
        if( !$this->upload->do_upload('foto'))	{
            $error = array('error' => $this->upload->display_errors());
			$this->template->ips('galeri/add',$error,$data);
			} else {
				$gambar=$this->upload->data();
				$data=[
				    "link" => $this->input->post('link',true),
                    "deskripsi"=> $this->input->post('isi',true),
                    "gambar"=> $gambar['file_name'],
				];
			$this->M_Berita->create('galeri',$data);
			$this->session->set_flashdata('flash','Added');
			redirect('galeri');
			}
		}
	}
	public function edit(){;
		$id =$this->uri->segment(3);
		$data['content']=$this->M_Berita->show_by_id('galeri',$id);
		$data['error']="";
		$this->form_validation->set_rules("link","Link","required");
		$this->form_validation->set_rules("isi","Content","required");
		if ($this->form_validation->run() ==  FALSE) {
		$this->template->ips('galeri/edit',$data);
		} else {
		 if($_FILES ['foto']['name'] != ''){
		 	$path='./assets/image/galeri/';
	        $config['upload_path']=$path;
	        $config['allowed_types']='jpg|png|jpeg|gif';
	        $config['max_size']='20480';

			$this->load->library('upload',$config); 
        if( !$this->upload->do_upload('foto'))	{
            $error = array('error' => $this->upload->display_errors());
			$this->template->ips('galeri/edit',$error,$data);
			} else {
				$id=$this->input->post('id');
			    $old=$this->input->post('gambar');
				$gambar=$this->upload->data();
				$data=[
				    "link" => $this->input->post('link',true),
                    "deskripsi"=> $this->input->post('isi',true),
                    "gambar"=> $gambar['file_name'],
				];
			unlink($path.$old);
			$this->session->set_flashdata('flash','Edit');
			$this->M_Berita->update('galeri',$data,$id);
			redirect('galeri');
			} 
		} else {
				$data=[
				    "link" => $this->input->post('link',true),
                    "deskripsi"=> $this->input->post('isi',true),
				];
					$id=$this->input->post('id');
					$this->M_Berita->update('galeri',$data,$id);
					redirect('galeri');
			}
	}
	}
		public function delete(){
		$id=$this->uri->segment(3);
		$row = $this->M_Berita->get_by_id('galeri',$id);
    
        unlink("./assets/image/galeri/$row->gambar");
   		$this->session->set_flashdata('flash','Delete');
   		$this->M_Berita->delete('galeri',$id);
		redirect('Galeri');
	}
}
