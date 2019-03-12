<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Berita');
	}
	    public function index(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('login');
        } else{
            $password=$this->input->post('password');
            $username=$this->input->post('username');
            $valid_user=$this->M_Berita->cek($password,$username);
            if($valid_user == FALSE){
                $this->session->set_flashdata('flash','Username and password not matched');
                redirect('Login');
            } else{
                $valid_user=$this->M_Berita->cek($password,$username); 
                if($valid_user == FALSE){
                    $this->session->set_flasdata('flash','Login False ');
                } else {
                    $this->session->set_userdata('username',$valid_user->username);
                    $this->session->set_userdata('level',$valid_user->level);
                    switch($valid_user->level){
                        case 'user';
                        $this->session->set_userdata('id',$valid_user->id);
                        $this->session->set_userdata('username',$valid_user->username);
                            redirect('user/User');
                        case 'admin';
                            $this->session->set_userdata('username',$valid_user->username);
                            $this->session->set_flashdata('flash','Login');
                            redirect('News');
                        default:
                        break;
                    }
                }
            }
        }
    }
	public function register(){
        $data['error']="";
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','username','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register',$data);
		}else{
            $config['upload_path']  ='./assets/image/user/';
            $config['allowed_types']='jpg|png|jpeg|gif';
            $config['max_size']='20480';

            $this->load->library('upload',$config);
                if (!$this->upload->do_upload('foto')) {
                    $error =array('error' => $this->upload->display_errors());
                    $this->load->view('register',$error);
                   }else{
                    $gambar=$this->upload->data();
                      $data=[
                        "username"  =>$this->input->post('username',TRUE),
                        "password"  =>$this->hash($this->input->post('password',TRUE)),
                        "nama"      =>$this->input->post('nama',TRUE),
                        "no_hp"     =>$this->input->post('no_hp',TRUE),
                        "email"     =>$this->input->post('email',TRUE),
                        "level"     =>$this->input->post('level',TRUE),
                        "gambar"    =>$gambar['file_name'],
                        "gender"    =>$this->input->post('gender',TRUE),
                        "alamat"    =>$this->input->post('address',TRUE)
                    ];
                    $this->M_Berita->create('user',$data);
                    redirect('Login');
                }
		}

	}
        public function hash($password){
        $hash= password_hash($password,PASSWORD_BCRYPT);
        return $hash;
    }
    public function logout(){
        $this->session->sess_destroy();
        $this->load->view('login');
    }
    
}
