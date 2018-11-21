<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class T_buku extends CI_Controller{
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_buku');
 	}
 	public function index(){
 		$data['main_view'] = 'tambah_buku_view';

 		$this->load->view('template',$data);
 	}
 	public function simpan(){
 		if($this->input->post('submit')){

 			$this->form_validation->set_rules('judul','Judul Buku','trim|required');
 			$this->form_validation->set_rules('pengarang','Pengarang','trim|required');
 			$this->form_validation->set_rules('penerbit','Penerbit','trim|required');
 			$this->form_validation->set_rules('tahun','Tahun Terbit','trim|required|numeric');
 			$this->form_validation->set_rules('lokasi','Lokasi','trim|required');
 			
 			
 			if($this->form_validation->run()==TRUE){
 				if($this->m_buku->tambah()==TRUE){
 				$data['notif'] = 'Tambah buku berhasil';
 				$data['main_view'] = 'tambah_buku_view';
 				$this->load->view('template',$data);
 			}else{
 				$data['notif'] = 'Tambah buku gagal';
 				$data['main_view'] = 'tambah_buku_view';
 				$this->load->view('template',$data);
 			}
 		}else{
 			$data['notif'] = 'Error';
 			$data['main_view'] = 'tambah_buku_view';
 			$this->load->view('template',$data);
 		}
 	}else{
 			$data['notif'] = validation_errors();
 			$data['main_view'] = 'tambah_buku_view';
 			$this->load->view('template',$data);
 		}
    }
}
