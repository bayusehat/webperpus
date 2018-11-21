<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_buku extends CI_Model{
	public function tambah(){
		$data=array(	
			'id_buku'   => NULL,
			'judul'     => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'penerbit'  => $this->input->post('penerbit'),
			'tahun'     => $this->input->post('tahun'),
			'lokasi'    => $this->input->post('lokasi'),
			'stok'      => $this->input->post('stok')
			);

		$this->db->insert('buku',$data);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function edit_buku_sam($id_buku){
		$data=array(	
			'id_buku'   => NULL,
			'judul'     => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'penerbit'  => $this->input->post('penerbit'),
			'tahun'     => $this->input->post('tahun'),
			'lokasi'    => $this->input->post('lokasi')
			);

		$this->db->where('id_buku',$id_buku)
		         ->update('buku',$data);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function stok(){
		$this->db->where('id_buku',$id_buku)
		         ->get('buku')
		         ->row('stok');
	}
}