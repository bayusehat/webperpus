<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_anggota extends CI_Model{
	public function insert(){
		$data=array(
			'id_anggota'   => NULL,
			'nama'         => $this->input->post('nama'),
			'tgl'          => $this->input->post('tgl'),
			'alamat'       => $this->input->post('alamat'),
			'telp'         => $this->input->post('telp'),
			'kelas'        => $this->input->post('kelas')
			);

		$this->db->insert('daftar',$data);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function edit_anggota($id_anggota)
	{
		$data=array(
			'id_anggota'   => NULL,
			'nama'         => $this->input->post('nama'),
			'tgl'          => $this->input->post('tgl'),
			'alamat'       => $this->input->post('alamat'),
			'telp'         => $this->input->post('telp'),
			'kelas'        => $this->input->post('kelas')
			);

		$this->db->where('id_anggota',$id_anggota)
		         ->update('daftar',$data);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}