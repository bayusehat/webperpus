<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class T_transaksi extends CI_Controller{
 	public function __construct(){
 		parent::__construct();
 		
 		$this->load->model('m_transaksi');
 	}
 	public function index(){
 		if($this->session->userdata('logged_in')==TRUE){
 			$data['main_view'] = 'tambah_transaksi_view';

 			$this->load->view('template',$data);
 		}
 	}
 	public function simpan(){
 		if($this->input->post('submit')){
 			$this->form_validation->set_rules('no_transaksi','No.Transaksi','trim|required');
 			$this->form_validation->set_rules('anggota','Nama Anggota','trim|required');
 			$this->form_validation->set_rules('judul','Judul Buku','trim|required');
 			$this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam','trim|required');
 			$this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','trim|required');
 			$this->form_validation->set_rules('status','Status','trim|required');

 			
 			if($this->form_validation->run()==TRUE){
 				$id_buku=$this->uri->segment(3);
 				if($this->m_transaksi->tambah($id_buku)==TRUE){
 					$data['notif'] = 'Transaksi telah ditambahkan';
 					$data['main_view'] = 'tambah_transaksi_view';
 					$this->load->view('template',$data);
 				}else{
 					$data['notif'] = 'Transaksi gagal ditambahkan';
 					$data['main_view'] = 'tambah_transaksi_view';
 					$this->load->view('template',$data);
 				}
 			}else{
 					$data['notif'] = 'Error';
 					$data['main_view'] = 'tambah_transaksi_view';
 					$this->load->view('template',$data);
 			}
 		}else{
 					$data['notif'] = validation_errors();
 					$data['main_view'] = 'tambah_transaksi_view';
 					$this->load->view('template',$data);
 		}
 	}
 }
