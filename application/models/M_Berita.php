<?php

class M_Berita extends CI_Model{
	public function ambil($table){
		return $this->db->get($table)->result();
	}
	public function news_top($table){
		 $this->db->from($table);
		 $this->db->limit(4);
		 return $this->db->get()->result();
	}
	public function hitung($table){
		return $this->db->count_all($table);
	} 
	public function ambil_id($table,$where){
		$this->db->where_not_in('level',$where);
		return $this->db->get($table)->result();
	}
	public function ambil_id_admin($table,$where){
		$this->db->where_not_in('level',$where);
	return $this->db->get($table)->result();
	}
	public function create($table,$data){
		$this->db->insert($table,$data);
	}
	public function tambah($table,$data){
		$this->db->insert_batch($table,$data);
	}
	public function show_by_id($table,$id){
		$this->db->where('id',$id);
		return $this->db->get($table)->row_array();
	}
	public function update($table,$data,$id){
		$this->db->where('id',$id);
		$this->db->update($table,$data);
	}
	public function delete($table,$id){
		$this->db->delete($table, array('id' => $id));
        $this->db->delete($table,['id' => $id]);
	}
	public function get_by_id($table,$id){
		$this->db->where('id',$id);
		return $this->db->get($table)->row();
	}
	public function cek($password,$username){
        $hasil = $this->db->where('username',$username)
                            ->limit(1)
                            ->get('user');
        if($hasil->num_rows() > 0){
           $isi= $hasil->row('password');
           if(password_verify($password,$isi)) {
           	return $hasil->row();
           } else {
            echo "Wrong password.Try again.";
        }
    }
}
	public function cari(){
	return	$this->db->get('kategori')->result();
	}
	public function data(){
		return $this->db->from('user');
	}
	public function coment($table,$limit,$offset){
		 return $this->db->get($table,$limit,$offset)->result();
	}
	function auto($keyword){
		$this->db->from('kategori');
		$this->db->like('nama',$keyword);
		return $this->db->get();
	}
	function update_where($table,$data,$id){
		$this->db->where('id',$id);
		$this->db->update($table,$data);
	}
}
