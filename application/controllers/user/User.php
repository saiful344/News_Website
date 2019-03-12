<?php

class User extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('M_Berita');
		$this->load->model('M_User');
		$this->load->library('Template');
	}
	public function index(){
		$data['content'] =$this->M_Berita->news_top('berita');
		$data['katalog'] =$this->M_User->kategori();
		$data['populer'] =$this->M_User->populer();
	    // print_r($data['populer']);	
		$this->template->user('content/isi/index',$data);
	}
	function berita($id){
		$data['katalog'] =$this->M_User->kategori();
		$data['content'] =$this->M_Berita->show_by_id('berita',$id);
		$kategori=$data['content']['kategori'];
		$data['coment']  =$this->M_User->show_by_id('berita',$id);
		$data['rekom']   =$this->M_User->rekom('berita',$kategori);
		// print_r($data['content']);
		$this->template->user('content/isi/berita',$data);
	}
	public function like_post(){
		$date = date('y-m-d h:ia');
		$id =$this->input->post('id');
		$data=[
			'date' => $date,
			'id_berita' => $id
		];
		$this->M_User->like_post($data);
	}
	function kategory(){
		$offset =$this->uri->segment(5);
		$id =$this->uri->segment(4);
		$config['total_rows'] =$this->M_Berita->hitung('berita');
		$config['base_url']   =base_url()."index.php/user/User/kategory/$id";
		$config['per_page']   = 3;


		// style 
				$config['first_link']       = 'First';
                $config['last_link']        = 'Last';
                $config['next_link']        = 'Next';
                $config['prev_link']        = 'Prev';
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
                $config['full_tag_close']   = '</ul></nav></div>';
                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
                $config['num_tag_close']    = '</span></li>';
                $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
                $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['prev_tagl_close']  = '</span>Next</li>';
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
                $config['first_tagl_close'] = '</span></li>';
                $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['last_tagl_close']  = '</span></li>';


        $this->pagination->initialize($config);
        $data['halaman']=$this->pagination->create_links();
        $data['offset'] =$offset;

		$data['katalog'] =$this->M_User->kategori();
		$data['isi']=$this->M_User->kategory($id,$config['per_page'],$offset);
		$this->template->user('content/isi/kategory',$data);
	}
	function cari(){
		$keyword=$this->input->post('search');
		$data['katalog'] =$this->M_User->kategori();
		$data['content']= $this->M_User->cari($keyword);
		$this->template->user('content/isi/search',$data);
	}
	function search(){
		$keyword = $this->input->post('query');
		$result = $this->M_User->search($keyword);
		$output ='<ul class="list-group">';
		if ($result->num_rows() > 0) {
			foreach ($result->result_array() as $row ) {
				$output .= '<li class="list-group-item">'.$row["judul"].'</li>'; 
			}
		}else{
			$output .='<li class="list-group-item list-group-item-dark">News not found</li>';
		}
		$output .='</ul>';
		echo $output;
	}
	function like(){
		$id = $this->input->post('id');
		$hasil=$this->M_User->ambil($id);
		$data=[
				"like" => ($hasil->like+1)
		];
		$this->M_User->like($id,$data);
		echo json_encode($hasil->like);
	}
	function lilist(){
		$data =$this->M_Berita->news_top('berita');
		echo json_encode($data->like);
	}
	function coment(){
		$data=[
			"coment" => $this->input->post('coment'),
			"date" => $this->input->post('date'),
			"rating" => $this->input->post('rating'),
			"id_user"=>$this->input->post('id_user'),
			"id_berita"=>$this->input->post('id_berita')
		];
		$this->M_User->tambah('review',$data);
		$id=$this->input->post('id_berita');
		redirect("user/User/berita/$id");
	}
 }