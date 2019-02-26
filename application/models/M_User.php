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
	}
	// function top(){
	// 	$this->db->from('berita');
	// 	$this->db->select('')
	// }
