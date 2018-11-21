<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class T_anggota extends CI_Controller{

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_anggota');
 	}
 	public function index(){
 		$data['main_view'] = 'tambah_anggota_view';

 		$this->load->view('template',$data);
 	}
 	public function daftar(){
        if($this->input->post('submit')){

        	$this->form_validation->set_rules('nama','Nama Lengkap','trim|required');
        	$this->form_validation->set_rules('tgl','Tanggal Lahir','trim|required');
			$this->form_validation->set_rules('alamat','Alamat','trim|required');
			$this->form_validation->set_rules('telp','Telepon','trim|required|numeric');
			$this->form_validation->set_rules('kelas','Kelas','trim|required');

        	if($this->form_validation->run() == TRUE){

        	  if($this->m_anggota->insert() == TRUE){
        		$data['notif'] = 'Sukses';
        		$data['main_view']='tambah_anggota_view';
        		$this->load->view('template',$data);
        	}else{
        		$data['notif'] = 'Gagal';
        		$data['main_view']='tambah_anggota_view';
        		$this->load->view('template',$data);
        	}
        }else{
        	$data['notif'] = $this->upload->display_errors();
        	$data['main_view']='tambah_anggota_view';
         	$this->load->view('template',$data);
        }
 	  }else{
        $data['main_view'] = 'tambah_anggota_view';
        $data['notif'] = validation_errors();
        $this->load->view('template',$data);
      }
    }
  }