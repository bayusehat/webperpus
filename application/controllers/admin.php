<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Admin extends CI_Controller{
 	public function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_buku');
		$this->load->model('m_anggota');
		$this->load->model('m_tugas');
		$this->load->model('m_transaksi');
	}
 	public function index(){
 		if($this->session->userdata('logged_in') == TRUE){
 			redirect(base_url('index.php/admin/home'));
 		}else{
 			$this->load->view('login_view');
 		}
 	}
 	public function home(){
    $data['title'] = 'Dashboard';
 		$data['main_view'] = 'home_view';
 		$this->load->view('template',$data);
 	}
 	public function masuk(){
 		if($this->input->post('submit')==TRUE){
 			$this->form_validation->set_rules('username','Username','required');
 			$this->form_validation->set_rules('password','Password','required');

 			if($this->form_validation->run()==TRUE)
 				if($this->m_admin->cek() == TRUE){
 					redirect(base_url('index.php/admin/'));
 				}else{
 					$data['notif'] = 'Login Gagal';
 					$this->load->view('login_view',$data);
 				}
 			}else{
 				$data['notif']=validation_errors();
 				$this->load->view('login_view',$data);
 			}
 		}
 	
 	public function data_anggota(){
 		if($this->session->userdata('logged_in')==TRUE){
      if($this->session->userdata('type') == '0'){
         $data['title'] = 'Data Anggota';
        $data['main_view'] = 'data_anggota_view';

        $data['anggota'] = $this->m_admin->get_data_pendaftar();
        $this->load->view('template',$data);
      }else{
        $this->session->set_flashdata('notif', 'Superadmin Only!');
        redirect('admin');
      }
 		}else{
      redirect('admin','refresh');
    }
 	}
 	public function logout(){
 		$data=array(
 			'username' => '',
 			'logged_in' => FALSE);
 		$this->session->sess_destroy();
 		redirect(base_url('index.php/admin'));
 	}
 	public function get_detil(){
 		if($this->session->userdata('logged_in')==TRUE){
 			$id_anggota=$this->uri->segment(3);
       $data['title'] = 'Detail Anggota';
 			$data['detil'] = $this->m_admin->get_detil($id_anggota);
 			$data['main_view'] = 'detil_anggota_view';

 			$this->load->view('template',$data);
 		}else{
 			redirect('admin');
 		}
 	}
 	public function hapus(){
 		if($this->session->userdata('logged_in')==TRUE){

 			$id_anggota=$this->uri->segment(3);

 			if($this->m_admin->hapus($id_anggota) ==TRUE){

 				redirect(base_url('index.php/admin/data_anggota'));
 			}else{
 				
 				redirect('admin');
 			}
 		}else{
 			redirect('admin');
 		}
 	}
 	public function edit_anggota(){
 		if($this->session->userdata('logged_in')==TRUE){
 			if($this->input->post('submit')){
 			
 			$this->form_validation->set_rules('nama','Nama Lengkap','trim|required');
      $this->form_validation->set_rules('tgl','Tanggal Lahir','trim|required');
			$this->form_validation->set_rules('alamat','Alamat','trim|required');
			$this->form_validation->set_rules('telp','Telepon','trim|required|numeric');
			$this->form_validation->set_rules('kelas','Kelas','trim|required');

 			if($this->form_validation->run()==TRUE){
 				if($this->m_anggota->edit_anggota($this->uri->segment(3))==TRUE){
 				$data['notif'] = 'Edit buku berhasil';
 				$data['detil'] = $this->m_admin->get_detil($this->uri->segment(3));
 				$data['main_view'] = 'detil_anggota_view';
 				$this->load->view('template',$data);
 			}else{
 				$data['notif'] = 'Edit buku gagal';
 				$data['detil'] = $this->m_admin->get_detil($this->uri->segment(3));
 				$data['main_view'] = 'detil_anggota_view';
 				$this->load->view('template',$data);
 			}
 		}else{
 			$data['notif'] = validation_errors();
 			$data['detil'] = $this->m_admin->get_detil($this->uri->segment(3));
 			$data['main_view'] = 'detil_anggota_view';
 			$this->load->view('template',$data);
 		 }
      }		
   }else{
   	redirect('admin');
   }
}
 	public function data_buku(){

 		if($this->session->userdata('logged_in')==TRUE){
       if($this->session->userdata('type') == '0'){
 			$data['main_view'] = 'data_buku_view';
       $data['title'] = 'Data Buku';
 			$data['buku'] = $this->m_admin->get_data_buku();

 			$this->load->view('template',$data); 		
 		}else{
      $this->session->set_flashdata('notif', 'Superadmin Only!');
 			redirect('admin');
 		}
  }else{
    redirect('admin','refresh');
  }
 	}
 	public function get_detil_buku(){
 		if($this->session->userdata('logged_in')==TRUE){
 			$id_buku=$this->uri->segment(3);
 			$data['detil'] = $this->m_admin->detil_buku($id_buku);
       $data['title'] = 'Detail Buku';
 			$data['main_view'] = 'detil_buku_view';
 			$this->load->view('template',$data);

 		}else{
 			redirect('admin');
 		}
 	}
 	
 	public function hapus_buku(){
 		if($this->session->userdata('logged_in')==TRUE){
 			$id_buku=$this->uri->segment(3);
 			if($this->m_admin->hapus_buku($id_buku)){
 				redirect(base_url('index.php/admin/get_data_transaksi'));
 			}else{
 				redirect('admin');
 			}
 		}else{
 			redirect('admin');
 		}
 	}
 	
 	public function edit_buku(){
 		if($this->session->userdata('logged_in')==TRUE){
 			if($this->input->post('submit')){
 			
 			$this->form_validation->set_rules('judul','Judul Buku','trim|required');
 			$this->form_validation->set_rules('pengarang','Pengarang','trim|required');
 			$this->form_validation->set_rules('penerbit','Penerbit','trim|required');
 			$this->form_validation->set_rules('tahun','Tahun Terbit','trim|required|numeric');
 			$this->form_validation->set_rules('lokasi','Lokasi','trim|required');
 			
 			if($this->form_validation->run()==TRUE){
 				if($this->m_buku->edit_buku_sam($this->uri->segment(3))==TRUE){
 				$data['notif'] = 'Edit buku berhasil';
 				$data['detil'] = $this->m_admin->detil_buku($this->uri->segment(3));
 				$data['main_view'] = 'detil_buku_view';
 				$this->load->view('template',$data);
 			}else{
 				$data['notif'] = 'Edit buku gagal';
 				$data['detil'] = $this->m_admin->detil_buku($this->uri->segment(3));
 				$data['main_view'] = 'detil_buku_view';
 				$this->load->view('template',$data);
 			}
 		}else{
 			$data['notif'] = validation_errors();
 			$data['detil'] = $this->m_admin->detil_buku($this->uri->segment(3));
 			$data['main_view'] = 'detil_buku_view';
 			$this->load->view('template',$data);
 		 }
      }		
   }else{
   	redirect('admin');
   }
}

 	public function data_admin(){
 		if($this->session->userdata('logged_in')==TRUE){
      if($this->session->userdata('type') == 0){
   			$data['main_view'] = 'data_admin_view';
         $data['title'] = 'Data Admin';
   			$data['admin'] = $this->m_admin->get_data_admin();
   			$this->load->view('template',$data);
      }else{
        redirect('admin','refresh');
      }
 		}
 	}
 	public function hapus_admin(){
 		if($this->session->userdata('logged_in')==TRUE){
 			$username=$this->uri->segment(3);
 			if($this->m_admin->hapus_admin($username)==TRUE){
 				redirect(base_url('index.php/admin/data_admin'));
 			}else{
 				redirect('admin');
 			}
 		}else{
 			redirect('admin');
 		}
 	}
 	public function get_data_transaksi(){
 		if($this->session->userdata('logged_in')==TRUE){
       $data['title'] = 'Data Transaksi';
 			$data['main_view'] = 'data_transaksi_view';
 			$data['transaksi'] = $this->m_admin->get_data_transaksi();
 			$this->load->view('template',$data);
 		}else{
 			redirect('admin');
 		}
 	}
 	public function hapus_transaksi(){

 		if($this->session->userdata('logged_in')==TRUE){

 			$id_transaksi=$this->uri->segment(3);

 			if($this->m_admin->hapus_transaksi($id_transaksi)==TRUE){
 				redirect(base_url('index.php/admin/get_data_transaksi'));
 			}else{
 				redirect('admin');
 			}
 			
 		}else{
 			redirect('admin');
 		}
 	}
 	public function pengembalian(){
       if($this->session->userdata('logged_in')==TRUE){
       	if($this->m_transaksi->pengembalian($this->uri->segment(3))==TRUE){

 			redirect(base_url('index.php/admin/get_data_transaksi'));
       	}
       }else{
       	
       	redirect('admin');
       }
  }
 }