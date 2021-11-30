<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$where = array('id' => 1);
		$data['row'] = $this->Model_admin->detail($where,'data_toko')->row();
		$data['title'] = 'Data Toko';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/toko');
    $this->load->view('admin/footer');
	} 

	public function update()
	{
		$where = array('id' => 1);
		$jadwal = $_POST['jadwal'];
		$tentang = $_POST['tentang'];
		$data = array (
			'jadwal_buka_tutup'=> $jadwal,
			'daftar_isi_toko'=> $tentang
		);
		$this->db->update('data_toko',$data,$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Data Toko Berhasil Di Update
		</div>
		</div>'
		);
		redirect(base_url('admin'));
	}       

	public function tamu(){
		$data['hasil']= $this->Model_admin->tampil('data_tamu')->result();
		$data['title'] = 'Data Tamu';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/tamu');
    $this->load->view('admin/footer');
	}

	function hapus($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('data_tamu',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Data Tamu Berhasil Dihapus
		</div>
		</div>'
		);
		redirect(base_url('admin/tamu'));
	}
}