<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Petugas extends CI_Controller{
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_tugas');
 		$this->load->model('m_transaksi');
 	}
 	public function index(){
 		if($this->session->userdata('login_gas')==TRUE){
 			redirect(base_url('index.php/petugas/home/'));
 		}else{
 			$this->load->view('login_view_tugas');
 		}
 	}
 	public function masuk(){
 		if($this->input->post('submit')){
 			$this->form_validation->set_rules('username','Username','required');
 			$this->form_validation->set_rules('password','Password','required');

 			if($this->form_validation->run()==TRUE){
 				if($this->m_tugas->cek_user() == TRUE){
 					redirect(base_url('index.php/petugas/home'));
 				}else{
 					$data['notif'] = 'Login gagal!';
 					$this->load->view('login_view_tugas',$data);
 				}
 			}else{
 				$data['notif'] = validation_errors();
 				$this->load->view('login_view_tugas',$data);
 			}
 		}
 	}
 	public function home(){
 		$data['main_view'] = 'home_view';
 		$this->load->view('template',$data);
 	}
 }