<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model{
	public function cek(){

		$useradmin= $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username',$useradmin)
                          ->where('password',$password)
                          ->get('admin');

        if($query->num_rows()>0){
        	$data=array(
        		'username' => $useradmin,
        		'logged_in' => TRUE,
        		'type' => $query->row()->level
        		);
        	$this->session->set_userdata($data);
        	return TRUE;
        }else{
        	return FALSE;
        }
	}

	public function get_data_pendaftar(){
		return $this->db->order_by('id_anggota','ASC')
		                ->get('daftar')
		                ->result();
	}
	public function get_data_admin(){
		return $this->db->order_by('username','ASC')
		                ->get('admin')
		                ->result();
	}
	public function get_detil($id_anggota){
		$id_anggota=$this->uri->segment(3);
	    return $this->db->where('id_anggota',$id_anggota)
	                    ->get('daftar')

	                    ->row();
	}
	public function hapus($id_anggota){
		       $this->db->where('id_anggota',$id_anggota)
	                    ->delete('daftar');  

	    if($this->db->affected_rows()>0){
	    	return TRUE;
	    }else{
	    	return FALSE;
	    }
	}
	public function get_data_buku(){
		return $this->db->order_by('id_buku','ASC')
                        ->get('buku')
                        ->result();
	}
	public function detil_buku(){
		$id_buku=$this->uri->segment(3);
		return $this->db->where('id_buku',$id_buku)
		                ->get('buku')

		                ->row();
	}
	public function hapus_buku($id_buku){
		$this->db->where('id_buku',$id_buku)
		         ->delete('buku');
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function hapus_admin($username){
		$this->db->where('username',$username)
		         ->delete('admin');

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function get_data_transaksi(){
		return $this->db->select('transaksi.*,buku.*,daftar.*')
						->from('transaksi')
						->join('buku','buku.id_buku=transaksi.judul')
						->join('daftar','id_anggota=transaksi.anggota')
						->order_by('id_transaksi','ASC')
		                ->get()	                
		                ->result();
	}
	public function hapus_transaksi($id_transaksi){
	    $this->db->where('id_transaksi',$id_transaksi)
		         ->delete('transaksi');
		                
	    if($this->db->affected_rows()>0){
	    	return TRUE;
	    }else{
	    	return FALSE;
	    }

	}
}