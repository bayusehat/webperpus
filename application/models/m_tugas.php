<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_tugas extends CI_Model{
	public function cek_user(){

		$usertugas = $this->input->post('username');
		$password  = $this->input->post('password');

		$query = $this->db->where('username',$usertugas)
                          ->where('password',$password)
                          ->get('petugas');

		if($query->num_rows()>0){
			$data=array(
				'username' => $username,
				'login_gas' => TRUE
				);
			$this->session->userdata($data);
			return TRUE;
		}else{
			return FALSE;
		}
	}
}