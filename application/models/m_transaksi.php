<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_transaksi extends CI_Model{
	public function tambah($id_buku){
		$data=array(
			'id_transaksi' => NULL,
			'no_transaksi' => $this->input->post('no_transaksi'),
			'anggota' => $this->input->post('anggota'),
			'judul'   => $this->input->post('judul'),
			'tgl_pinjam' => $this->input->post('tgl_pinjam'),
			'tgl_kembali' => $this->input->post('tgl_kembali'),
			'status' => $this->input->post('status')
			);
		$this->db->insert('transaksi',$data);
		$this->db->query('UPDATE buku SET stok = stok - 1 where id_buku ="'.$id_buku.'"');
		
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function pengembalian($id_transaksi){
		$query = ('UPDATE transaksi SET status="Sudah dikembalikan" WHERE id_transaksi='.$id_transaksi);
		$this->db->query($query);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}