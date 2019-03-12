<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Berita');
	}
	public function index()
	{
		$data['berita']=$this->M_Berita->ambil('berita');
		$this->template->ips('news/index',$data);
	}
	public function cari(){
            				$result = $this->M_Berita->cari();
                			echo json_encode($result);
	}
	public function add()
	{
		$data['error']="";
		$data['katalog']=$this->M_Berita->ambil('kategori');
		$this->form_validation->set_rules("judul","Title","required");
		$this->form_validation->set_rules("isi","Content","required");
		$this->form_validation->set_rules("kategori","Kategory","required");
		if ($this->form_validation->run() ==  FALSE) {
				$this->template->ips('news/add',$data);	
		} else {
	        $config['upload_path']='./assets/image';
	        $config['allowed_types']='jpg|png|jpeg|gif';
	        $config['max_size']='20480';

			$this->load->library('upload',$config); 
        if( !$this->upload->do_upload('foto'))	{
            $error = array('error' => $this->upload->display_errors());
            $data['katalog']=$this->M_Berita->ambil('kategori');
				$this->template->ips('news/add',$error,$data);

			} else {
				$gambar=$this->upload->data();
				$data=[
				    "judul" => $this->input->post('judul',true),
                    "isi"=> $this->input->post('isi',true),
                    "gambar"=> $gambar['file_name'],
                    "kategori"=>$this->input->post('kategori',true),
                    "link"=>$this->input->post('link',true),
                    "tgl_b"=>$this->input->post('tanggal',true)
				];
			$this->M_Berita->create('berita',$data);
			$this->session->set_flashdata('flash','Added');
			redirect('News');
			}
		}
	}
	public function edit()
	{
		$data['error']="";
		$id=$this->uri->segment(3);
		$data['katalog']=$this->M_Berita->ambil('kategori');
		$data['content']=$this->M_Berita->show_by_id('berita',$id);
		$this->form_validation->set_rules("judul","Title","required");
		$this->form_validation->set_rules("isi","Content","required");
		$this->form_validation->set_rules("kategori","Kategory","required");
		if ($this->form_validation->run() ==  FALSE) {
				$this->template->ips('news/edit',$data);	
		} else {
	 if($_FILES ['foto']['name'] != ''){
			$path='./assets/image/';
	        $config['upload_path']=$path;
	        $config['allowed_types']='jpg|png|jpeg|gif';
	        $config['max_size']='20480';

			$this->load->library('upload',$config); 
        if( !$this->upload->do_upload('foto'))	{
          		 $error = array('error' => $this->upload->display_errors());
				$this->template->ips('news/edit',$data,$error);

			} else {
				$gambar=$this->upload->data();
				$id=$this->input->post('id');
				$old=$this->input->post('old');
				$data=[
				    "judul" => $this->input->post('judul',true),
                    "isi"=> $this->input->post('isi',true),
                    "gambar"=> $gambar['file_name'],
                    "kategori"=>$this->input->post('kategori',true),
                    "link"=>$this->input->post('link',true),
                    "tgl_b"=>$this->input->post('tanggal',true)
				];
			unlink($path.$old);
			$this->M_Berita->update('berita',$data,$id);
			redirect('News');
			}
          } else {
               $data=[
				    "judul" => $this->input->post('judul',true),
                    "isi"=> $this->input->post('isi',true),
                    "kategori"=>$this->input->post('kategori',true),
                    "link"=>$this->input->post('link',true),
                    "tgl_b"=>$this->input->post('tanggal',true)
				];
              $this->M_Berita->update('berita',$data,$id);
              $this->session->set_flashdata('flash','Edit');
			redirect('News');
        }
    }	
	}
	public function delete(){
		$id=$this->uri->segment(3);
        $row = $this->M_Berita->get_by_id('berita',$id);
    
        unlink("./assets/image/$row->gambar");
   		
   		$this->M_Berita->delete('berita',$id);
   		$this->session->set_flashdata('flash','Delete');
		redirect('News');
	}
	public function kategori(){
		$data['content'] =$this->M_Berita->ambil('kategori');
		$this->template->ips('news/kategori/index',$data);
	}
	function auto(){
		$keyword=$this->input->post('isi');
		$result = $this->M_Berita->auto($keyword);
		$output ='<ul class="list-unstyled">';
		if ($result->num_rows() > 0) {
			while ($row =$result->result_array()) {
				$output .= '<li>'.$row['nama'].'</li>';
			}
		}else{
				$output .='<li>Kategori not found</li>';
			}
			$output .='</ul>';
			return $output;
	}
	function view($id){
		$data['contain'] =$this->M_Berita->get_by_id('berita',$id);
		$this->template->ips('news/view',$data);
	}
}
