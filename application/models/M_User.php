<?php

class M_User extends CI_Model{
	function top(){
		$this->db->from("berita");
		$this->db->order_by("like","DESC");
		$this->db->limit(4);
		return $this->db->get()->result();
	}
	function kategori(){
		return $this->db->get("kategori")->result();
	}
	function view_k($id){
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori=kategori.nama');
		$this->db->order_by('like','DESC');
		return $this->db->get()->result();
	}
	function like_post($data){
		$query = $this->db->insert('review',$data);
		if ($query) {
			echo '1';
		} else{
			echo '0';
		}
	}
	function count_post_like($id){
		$query = $this->db->select("*")->from('review')->where('id_berita',$id)->get()->result();
		return $query;
	}
	function kategory($id,$limit,$offset){
		$this->db->from('berita');
		$this->db->where('kategori',$id);
		$this->db->limit($limit,$offset);
		return $this->db->get()->result();
	}
	function cari($keyword){
		$this->db->from('berita');
				$this->db->like('judul',$keyword);
				$this->db->or_like('isi',$keyword);
				$this->db->or_like('kategori',$keyword);
				$this->db->or_like('tgl_b',$keyword);
				return $this->db->get()->result();
		}
	function search($keyword){
		$this->db->from('berita');
		$this->db->like('judul',$keyword);
		return $this->db->get();
	}
	function like($id,$data){
		$this->db->where('id',$id);
		$this->db->update('berita',$data);
	}
	function ambil($id){
		$this->db->where('id',$id);
		return $this->db->get('berita')->row();
	}
	function show_by_id($table,$id){
		$this->db->where('berita.id',$id);
		$this->db->from($table);
		$this->db->select('review.rating,review.coment,review.id_user,review.date,user.username,user.gambar');
		$this->db->join('review','berita.id = review.id_berita');
		$this->db->join('user','review.id_user = user.id');
		$this->db->order_by('review.date','DESC');
		return $this->db->get()->result_array();
	}
	public function view_by_id($table,$id){
		$this->db->where('id',$id);
		return $this->db->get($table);
	}
	function tambah($table,$data){
		$this->db->insert($table,$data);
	}
	function rekom($table,$kategori){
		$this->db->where('kategori',$kategori);
		$this->db->limit(2);
		return $this->db->get($table)->result();
	}
	function populer(){
		$this->db->from('berita');
		$this->db->select('berita.gambar,berita.judul,berita.isi,berita.kategori');
		$this->db->select('sum(review.rating) as hasil');
		$this->db->join('review','berita.id = review.id_berita');
		$this->db->group_by('berita.id');
		$this->db->order_by('hasil','DESC');
		return $this->db->get()->result();
	}
	}
	// function top(){
	// 	$this->db->from('berita');
	// 	$this->db->select('')
	// }
